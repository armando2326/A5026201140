<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showForm()
    {
        //code untuk ngeload data yang akan dimuat di form
        return view('showgreetings');
    }

    function resultGreetings()
    {
        //code untuk ngeload data yang akan dimuat di form
        return view('tugas');
    }

}
