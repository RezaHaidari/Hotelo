<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    protected $table = 'types';

    // Number -> Unique Number of Room

    // status -> status of room [0 -> available, 1 -> not available]

    // type -> type of room from type class

    // price -> price of room for one day.

    public $fillable = ['title','bed'];


}
