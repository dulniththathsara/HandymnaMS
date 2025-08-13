<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnicianDBController extends Controller
{
    public function index()
    {
        return view('TechnicainDB.techDB');
    }
}
