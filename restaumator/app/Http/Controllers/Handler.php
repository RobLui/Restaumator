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
        $timestamp = strtotime(date('H:i:s')) + 60*60;
        $currenthour = date('H:i:s', $timestamp);

        $start = strtotime($tablewasactivatedat);
        $end = strtotime($currenthour);
        $seconds = $end - $start;

        $hours = floor($seconds / 3600);
        $mins = floor($seconds / 60 % 60);
        $secs = floor($seconds % 60);
        $timeFormat = sprintf('%02d:%02d:%02d', $hours, $mins, $secs);

        $table->time_bill = $timeFormat;
        $table->active_drink=0;
        $table->active_bill=0;

        $table->save();

        $average = new Average();
        $average->bill_time = $timeFormat;
        $average->drink_time = $timeFormat;
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
                $tabletoactivatebill->active_bill = $action;
                $tabletoactivatebill->save();
            }
        }
        return;
    }
}
