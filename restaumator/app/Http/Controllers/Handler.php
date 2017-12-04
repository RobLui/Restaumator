<?php

namespace App\Http\Controllers;

use App\Restauranttables;
use Illuminate\Http\Request;

class Handler extends Controller
{
    public function SetTableActive(Request $req)
    {
            $tablenumber = $req->table;
            $table=Restauranttables::where("tablenumber",$tablenumber)->first();
            $table->activated_at = date("H:i:s", time()+3600);;
            $table->save();
    }

}
