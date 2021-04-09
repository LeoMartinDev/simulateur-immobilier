<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulatorController extends Controller
{
    function show()
    {
        return view('pages.simulator');
    }

    function save(Request $request)
    {
        $simulatorForm = $request->validated();
    }
}
