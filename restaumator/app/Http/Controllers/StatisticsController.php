<?php

namespace App\Http\Controllers;

use App\Average;
use function array_push;
use function array_sum;
use function floor;
use function intval;
use App\Restaurants;

class StatisticsController extends Controller
{
    public function index()
    {
        $restaurant=Restaurants::where("id",1)->first();
        $hours = [];
        $minutes = [];
        $seconds = [];

        $hoursd = [];
        $minutesd = [];
        $secondsd = [];

        $averages = Average::all('bill_time',"drink_time");
        if (count($averages)>0) {
            foreach($averages as $average => $value)
            {
                if(!empty($value->bill_time)) {
                    list($hoursavg, $minutesavg, $secondsavg) = explode(':', $value->bill_time);
                }
                if(!empty($value->drink_time)) {
                    list($hoursavgdrink,$minutesavgdrink,$secondsavgdrink) = explode(':', $value->drink_time);
                }

                array_push($hours, intval($hoursavg));
                array_push($minutes, intval($minutesavg));
                array_push($seconds, intval($secondsavg));

                array_push($hoursd, intval($hoursavgdrink));
                array_push($minutesd, intval($minutesavgdrink));
                array_push($secondsd, intval($secondsavgdrink));
            }

            $h = array_sum($hours) / count($hours);
            $m = array_sum($minutes) / count($minutes);
            $s = array_sum($seconds) / count($seconds);

            $hd = array_sum($hoursd) / count($hoursd);
            $md = array_sum($minutesd) / count($minutesd);
            $sd = array_sum($secondsd) / count($secondsd);

            $hoursinsec = floor(($h*60)*60);
            $minutesinsec = floor ($m*60);

            $hoursinsecd = floor(($hd*60)*60);
            $minutesinsecd = floor ($md*60);

            $total = $hoursinsec + $minutesinsec + $s;
            $totald = $hoursinsecd + $minutesinsecd + $sd;

            $hoursF = floor($total / 3600);
            $minsF = floor($total / 60 % 60);
            $secsF = floor($total % 60);
            $timeFormatB = sprintf('%02d:%02d:%02d', $hoursF, $minsF, $secsF);

            $hoursFd = floor($totald / 3600);
            $minsFd = floor($totald / 60 % 60);
            $secsFd = floor($totald % 60);
            $timeFormatD = sprintf('%02d:%02d:%02d', $hoursFd, $minsFd, $secsFd);

        }
        else {
            $timeFormatB = sprintf('%02d:%02d:%02d', 0, 0, 0);
            $timeFormatD = sprintf('%02d:%02d:%02d', 0, 0, 0);
        }

        return view('statistics')
            ->with("bill_time", $timeFormatB)
            ->with("drink_time",$timeFormatD)
            ->with("restaurant",$restaurant);
            ;
    }
}
