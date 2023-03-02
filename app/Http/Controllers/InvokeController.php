<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokeController extends Controller
{
    public function __invoke()
    {
        return view('invokepage');
    }
}
