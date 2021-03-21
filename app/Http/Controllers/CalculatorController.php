<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($number1, $number2)
    {
        return view('calculator.add',['number1' => $number1, 'number2' => $number2]);
    }

    public function subtract($number1, $number2)
    {
        return view('calculator.subtract',['number1' => $number1, 'number2' => $number2]);
    }

    public function multiply($number1, $number2)
    {
        return view('calculator.multiply',['number1' => $number1, 'number2' => $number2]); 
    }

    public function divide($number1, $number2)
    {
        return view('calculator.divide',['number1' => $number1, 'number2' => $number2]); 
    }
}
