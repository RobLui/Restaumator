<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restauranttables extends Model
{
    protected $fillable = [
        'activated_at',
        'weight_drink',
        'weight_bill',
        'time_drink',
        'time_bill',
        'tablenumber'
    ];
}
