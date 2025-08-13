<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDBController extends Controller
{
    public function index()
    {
        return view('AdminDB.adminDB');
    }
}
