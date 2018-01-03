<?php

namespace App\Http\Controllers;

use App\Average;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        $hours=[];
        $minutes=[];
        $seconds=[];
        $averages= Average::all('bill_time');
        foreach($averages as $average =>$value)
        {
            list($hoursavg, $minutesavg,$secondsavg)=explode(':',$value->bill_time);
            array_push($hours,intval($hoursavg));
            array_push($minutes,intval($minutesavg));
            array_push($seconds,intval($secondsavg));

        }
        $h=array_sum($hours)/count($hours);
        $m=array_sum($minutes)/count($minutes);
        $s=array_sum($seconds)/count($seconds);

        $hoursinsec=floor(($h*60)*60);
        $minutesinsec=floor ($m*60);

        $total=$hoursinsec+$minutesinsec+$s;

        $hoursF = floor($total / 3600);
        $minsF = floor($total / 60 % 60);
        $secsF= floor($total % 60);
        $timeFormat = sprintf('%02d:%02d:%02d', $hoursF, $minsF, $secsF);
        

        return view('statistics')->with("bill_time",$timeFormat);
    }
}
