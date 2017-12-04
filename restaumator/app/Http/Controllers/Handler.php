<?php

namespace App\Http\Controllers;

use App\Restauranttables;
use Illuminate\Http\Request;

class Handler extends Controller
{
    public function SetTableActive()
    {
            $tablenumber=$_POST["table"];
            $table=Restauranttables::where("tablenumber",$tablenumber)->first();
            $table->activated_at = date("h:i:s");
            $table->save();
    }
}
