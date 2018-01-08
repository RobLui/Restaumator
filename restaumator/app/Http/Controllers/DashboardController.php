<?php

namespace App\Http\Controllers;

use App\Restaurants;
use App\Restauranttables;
use Illuminate\Http\Request;
use function view;

class DashboardController extends Controller
{
    public function index()
    {
        $tables = Restauranttables::all();
        $restaurant=Restaurants::where("id",1)->first();
        return view('dashboard',compact('tables'))->with("restaurant",$restaurant);
    }
}