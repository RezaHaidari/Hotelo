<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';

    protected $fillable = ['room_id','customer_id','officer_id','from','until'];

}
