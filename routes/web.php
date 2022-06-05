<?php

use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\MortgageProgramController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('/mortgage-programs', MortgageProgramController::class)->except([
    'destroy'
]);

Route::resource('/apartments', ApartmentController::class)->except([
    'destroy'
]);
