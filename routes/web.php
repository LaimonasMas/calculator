<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

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
});

Route::get('add/{number1}/{number2}', [CalculatorController::class, 'add']);
Route::get('subtract/{number1}/{number2}', [CalculatorController::class, 'subtract']);
Route::get('multiply/{number1}/{number2}', [CalculatorController::class, 'multiply']);
Route::get('divide/{number1}/{number2}', [CalculatorController::class, 'divide']);




