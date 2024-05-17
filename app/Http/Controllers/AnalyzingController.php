<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalyzingController extends Controller
{
    public function index()
    {
        return view('Dashboard.home');
    }
}
