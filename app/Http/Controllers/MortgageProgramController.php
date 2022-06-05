<?php

namespace App\Http\Controllers;

use App\Models\MortgagePrograms;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MortgageProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $items = MortgagePrograms::all();

        return view('mortgage-programs.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('mortgage-programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $mortgageProgram = new MortgagePrograms();

        $mortgageProgram->name = $request->name;
        $mortgageProgram->interest_rate = $request->interestRate;
        $mortgageProgram->max_term = $request->maxTerm;
        $mortgageProgram->min_initial_fee = $request->minInitialFee;

        if ($mortgageProgram->save()) {
            return redirect()->route('mortgage-programs.index')->with(['success' => 'Успешно сохранено']);
        } else {
            return back()->withErrors(['msg' => 'Ошибка сохранения'])->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param MortgagePrograms $mortgageProgram
     * @return View
     */
    public function edit(MortgagePrograms $mortgageProgram): View
    {
        return view('mortgage-programs.edit', ['item' => $mortgageProgram]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param MortgagePrograms $mortgageProgram
     * @return RedirectResponse
     */
    public function update(Request $request, MortgagePrograms $mortgageProgram): RedirectResponse
    {
        $data = $request->input();
        $mortgageProgram->name = $data['name'];
        $mortgageProgram->interest_rate = $data['interestRate'];
        $mortgageProgram->max_term = $data['maxTerm'];
        $mortgageProgram->min_initial_fee = $data['minInitialFee'];

        if ($mortgageProgram->save()) {
            return redirect()->route('mortgage-programs.index')->with(['success' => 'Успешно сохранено']);
        } else {
            return back()->withErrors(['msg' => 'Ошибка сохранения'])->withInput();
        }
    }
}
