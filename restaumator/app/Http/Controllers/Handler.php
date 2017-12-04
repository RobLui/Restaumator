<?php

namespace App\Http\Controllers;

use App\Restauranttables;
use Illuminate\Http\Request;

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
        return;
    }

    public function SetTableNonActive(Request $req) {

        $tablenumber = $req->table;

        $table = Restauranttables::where("tablenumber",$tablenumber)->first();
        if ($table->is_active) {
            $table->is_active = false;
        }

        $table->save();
        return;
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

}
