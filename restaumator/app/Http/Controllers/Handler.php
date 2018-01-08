<?php

namespace App\Http\Controllers;

use App\Average;
use App\Restaurants;
use App\Restauranttables;
use Illuminate\Http\Request;
use function floor;
use function date;
use function strtotime;

class Handler extends Controller
{
    public function SetTableActive(Request $req) {

        $tablenumber = $req->table;
        $table = Restauranttables::where("tablenumber",$tablenumber)->first();
        $table->activated_at = date("H:i:s", time()+3600);

        if (!$table->is_active) {
            $table->is_active = true;
        }

        $table->save();
    }

    public function SetTableNonActive(Request $req) {

        $tablenumber = $req->table;

        $table = Restauranttables::where("tablenumber", $tablenumber)->first();
        if ($table->is_active) {
            $table->is_active = false;
        }
//        dd($table);

        $tablewasactivatedat = $table->activated_at;


        $start = strtotime($tablewasactivatedat);

        $endbill = strtotime($table->time_bill);
        $secondsbill = $endbill - $start;
        $hoursbill = floor($secondsbill / 3600);
        $minsbill = floor($secondsbill / 60 % 60);
        $secsbill = floor($secondsbill % 60);
        $timeFormatbill = sprintf('%02d:%02d:%02d', $hoursbill, $minsbill, $secsbill);

        $enddrink = strtotime($table->time_drink);
        $secondsdrink = $enddrink - $start;

        $hoursdrink = floor($secondsdrink / 3600);
        $minsdrink = floor($secondsdrink / 60 % 60);
        $secsdrink = floor($secondsdrink % 60);
        $timeFormatdrink = sprintf('%02d:%02d:%02d', $hoursdrink, $minsdrink, $secsdrink);

        $table->time_bill = $timeFormatbill;
        $table->time_drink = $timeFormatdrink;
        $table->active_drink=0;
        $table->active_bill=0;

        $table->save();

        $average = new Average();
        $average->bill_time = $timeFormatbill;
        $average->drink_time = $timeFormatdrink;
        $average->id_restaurants = 1;

        $average->save();
    }

    public function CheckIfSomeThingHappend() {

        $tablesDrinksNeeded = Restauranttables::where([
            'is_active' => true,
            'active_drink' => true,
        ])->get();

        $tablesPaymentNeeded = Restauranttables::where([
            'is_active' => true,
            'active_bill' => true,
        ])->get();

         $tableswhereneeded = [ "drinks" => $tablesDrinksNeeded, "bills" => $tablesPaymentNeeded ];
         echo json_encode($tableswhereneeded);
        return;
    }

    public function SetDrinkIconForTable(Request $request, $tableid, $restaurantid, $hash, $action)
    {
        if ($request->isMethod('GET'))
        {
            $tabletoactivatedrink = Restauranttables::where([
                'is_active' => true,
                'id_restaurants' => $restaurantid,
                'tablenumber' => $tableid,
            ])->first();
            $restaurant = Restaurants::where("id",$restaurantid)->first();
            if($hash == $restaurant->hash) // Authentication
            {
                $timestamp = strtotime(date('H:i:s')) + 60*60;
                $currenthour = date('H:i:s', $timestamp);
                $tabletoactivatedrink->time_drink=$currenthour;
                $tabletoactivatedrink->active_drink = $action;
                $tabletoactivatedrink->save();
            }
        }
        return;
    }

    public function SetBillIconForTable(Request $request, $tableid, $restaurantid, $hash, $action)
    {
        if ($request->isMethod('GET'))
        {
            $tabletoactivatebill = Restauranttables::where([
                'is_active' => true,
                'id_restaurants' => $restaurantid,
                'tablenumber' => $tableid,
            ])->first();
            $restaurant = Restaurants::where("id",$restaurantid)->first();
            if($hash == $restaurant->hash) //Authentication
            {
                $timestamp = strtotime(date('H:i:s')) + 60*60;
                $currenthour = date('H:i:s', $timestamp);
                $tabletoactivatebill->time_bill=$currenthour;
                $tabletoactivatebill->active_bill = $action;
                $tabletoactivatebill->save();
            }
        }
        return;
    }
}
