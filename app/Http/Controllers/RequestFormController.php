<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestFormController extends Controller
{
    public function show()
    {
        return view('sections.request-form');
    }
}