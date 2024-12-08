<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Performance extends Controller
{
    public function generateFibonacci(Request $request)
    {
        $number = $request->input('number');
        $number = intval($number);
        $fibonacci = [0, 1];
        for ($i = 2; $i < $number; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        return view('display', ['numbers' => $fibonacci]);
    }
    public function showForm()
    {
        return view('form');
    }
}
