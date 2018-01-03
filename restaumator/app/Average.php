<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Average extends Model
{
    protected $fillable = [
        'drink_time',
        'bill_time',
        'id_restaurants'
    ];
    public $timestamps=false;
}
