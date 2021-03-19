<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($number1, $number2)
    {
        $result = $number1 + $number2;
        return view('calculator.add',['result' => $result]); 
    }

    public function subtract($number1, $number2)
    {
        $result = $number1 - $number2;
        return view('calculator.subtract',['result' => $result]); 
    }

    public function multiply($number1, $number2)
    {
        $result = $number1 * $number2;
        return view('calculator.multiply',['result' => $result]); 
    }

    public function divide($number1, $number2)
    {
        $result = $number1 / $number2;
        return view('calculator.divide',['result' => $result]); 
    }
}
