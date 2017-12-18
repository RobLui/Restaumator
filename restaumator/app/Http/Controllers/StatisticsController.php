<?php

namespace App\Http\Controllers;

use App\Average;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        $average_drink_time = Average::avg('drink_time');
        $average_bill_time = Average::avg('drink_time');
        return view('statistics', compact('average_bill_time','average_drink_time'));
    }
}
