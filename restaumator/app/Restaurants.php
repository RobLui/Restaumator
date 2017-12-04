<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    protected $fillable = [
        'name',
        'owner',
        'address',
        'hash',
    ];
    public $timestamps=false;
}
