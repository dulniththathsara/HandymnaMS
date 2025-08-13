<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddTechnicianController extends Controller
{
    public function index()
    {
        return view('AdminDB.add_tech');
    }
}
