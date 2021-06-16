<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    function calculator(Request $request)
    {
        $text = $request->text;
        $result = eval('return '. $text.';');
        return view('index' , compact('result'));
    }
}
