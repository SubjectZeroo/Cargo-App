<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RateController extends Controller
{
    public function index(Request $request)
    {
        return view('rates.index');
    }
}
