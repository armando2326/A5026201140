<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasPHPController extends Controller
{
    //
    function calculateForm()
    {
        return view('tugasphp.tugasconvertphp');
    }

    function calculateResults()
    {
        return view('tugasphp.fact');
    }
}
