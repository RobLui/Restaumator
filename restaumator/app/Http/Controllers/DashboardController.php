<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

}