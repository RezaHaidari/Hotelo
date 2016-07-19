<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $table = 'rooms';

    // Number -> Unique Number of Room

    // status -> status of room [0 -> available, 1 -> not available]

    // type -> type of room from type class

    // price -> price of room for one day.

    public $fillable = ['number','status','type_id','price'];

}
