<?php

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

Route::get('/AmberLoan', [\App\Http\Controllers\landingcontroller::class, 'index'])->name('landing');

Route::get('/amber/loan/business/checklist', [\App\Http\Controllers\landingcontroller::class, 'checklist'])->name('checklist');
Route::get('/amber/loan/business/loan/apply', [\App\Http\Controllers\landingcontroller::class, 'apply'])->name('apply');


Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/AmberLoan/Rates', [\App\Http\Controllers\RateController::class, 'index'])->name('rates');
Route::get('/AmberLoan/Schedule', [\App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule');
Route::get('/AmberLoan/Borrowers', [\App\Http\Controllers\BorrowerController::class, 'index'])->name('borrowers');


