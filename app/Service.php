<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = ['customer_id','provider_id','checkout','officer_id'];

}
