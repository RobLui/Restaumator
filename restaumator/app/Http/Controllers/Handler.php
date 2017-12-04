<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurants;

class Handler extends Controller
{
    public function SetTableActive()
    {
            $tablenumber=1;
            $table=Restaurants::where("tablenumber",$tablenumber)->first();
            $table->activated_at = date("h:i:sa");
            $table->save();
    }
}
