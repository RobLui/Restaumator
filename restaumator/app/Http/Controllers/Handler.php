<?php

namespace App\Http\Controllers;

use App\Average;
use App\Restaurants;
use App\Restauranttables;
use Illuminate\Http\Request;
use function floor;
use function date;
use function strtotime;
use DateTime;

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
        $table->active_drink=0;
        $table->active_bill=0;
        if($table->time_bill!=sprintf('%02d:%02d:%02d', "00", "00", "00") || $table->time_drink!=sprintf('%02d:%02d:%02d', "00", "00", "00"));
        {
            $start = strtotime($table->activated_at);
            $endbill = strtotime($table->time_bill);
            $secondsbill = $endbill - $start;

            $enddrink = strtotime($table->time_drink);
            $secondsdrink = $enddrink - $start;

            $average = new Average();
            $average->bill_time = $this->format_time($secondsbill);
            $average->drink_time = $this->format_time($secondsdrink);
            $average->id_restaurants = 1;
            $average->save();

        }
        $table->time_bill = "00:00:00";
        $table->time_drink =  "00:00:00";
        $table->save();
        return;
    }
    function format_time($t,$f=':') // t = seconds, f = separator
    {
        return sprintf("%02d%s%02d%s%02d", floor($t/3600), $f, ($t/60)%60, $f, $t%60);
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
                $tabletoactivatedrink->time_drink=date('H:i:s',time()+3600);
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
                $tabletoactivatebill->time_bill=date('H:i:s',time()+3600);
                $tabletoactivatebill->active_bill = $action;
                $tabletoactivatebill->save();
            }
        }
        return;
    }
}
