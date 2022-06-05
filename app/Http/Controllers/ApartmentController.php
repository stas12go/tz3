<?php

namespace App\Http\Controllers;

use App\Models\Apartments;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $items = Apartments::all();

        return view('apartments.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('apartments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $apartments = new Apartments();

        $apartments->name = $request->name;
        $apartments->type = $request->type;
        $apartments->price = $request->price;

        if ($apartments->save()) {
            return redirect()->route('apartments.index')->with(['success' => 'Успешно сохранено']);
        } else {
            return back()->withErrors(['msg' => 'Ошибка сохранения'])->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Apartments $apartment
     * @return View
     */
    public function edit(Apartments $apartment): View
    {
        foreach ($apartment->mortgagePrograms as $mortgageProgram) {
            $totalLoanAmount = $apartment->price * (1 - $mortgageProgram->interest_rate / 100);
            $monthlyLoanRate = $mortgageProgram->interest_rate / 12;
            $loanTermInMonths = $mortgageProgram->max_term * 12;
            $mortgageProgram->monthlyPayment = round(($totalLoanAmount * $monthlyLoanRate) / (1 - (1 + $monthlyLoanRate) * (1 - $loanTermInMonths)), 2);
        }

        return view('apartments.edit', ['item' => $apartment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Apartments $apartment
     * @return RedirectResponse
     */
    public function update(Request $request, Apartments $apartment)
    {
        $apartment->name = $request->name;
        $apartment->type = $request->type;
        $apartment->price = $request->price;

        if ($apartment->save()) {
            return redirect()->route('apartments.index')->with(['success' => 'Успешно сохранено']);
        } else {
            return back()->withErrors(['msg' => 'Ошибка сохранения'])->withInput();
        }
    }
}
