<?php

namespace App\Http\Controllers;

use App\Restauranttables;
use Illuminate\Http\Request;
use function view;

class DashboardController extends Controller
{
    public function index()
    {
        $tables = Restauranttables::all();

        return view('dashboard',compact('tables'));
    }

}