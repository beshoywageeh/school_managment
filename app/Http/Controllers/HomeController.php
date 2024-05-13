<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Monolog\Formatter\LineFormatter;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
