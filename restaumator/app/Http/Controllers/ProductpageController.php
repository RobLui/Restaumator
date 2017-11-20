<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductpageController extends Controller
{
    public function index() {
        return view("productpage");
    }
}
