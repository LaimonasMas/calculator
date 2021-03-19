<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($number1, $number2)
    {
        $result = $number1 + $number2;
        return view('calculator.result',['result' => $result]); 
    }

    public function subtract($number1, $number2)
    {
        $result = $number1 - $number2;
        return view('calculator.result',['result' => $result]); 
    }

    public function multiply($number1, $number2)
    {
        $result = $number1 * $number2;
        return view('calculator.result',['result' => $result]); 
    }

    public function divide($number1, $number2)
    {
        $result = $number1 / $number2;
        return view('calculator.result',['result' => $result]); 
    }
}
