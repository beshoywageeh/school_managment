<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class HomeController extends Controller
{
    public function index()
    {
      return view('dashboard');
    }
}