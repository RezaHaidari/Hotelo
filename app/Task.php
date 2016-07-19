<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $table = 'tasks';

    protected $fillable = ['officer_id','admin_id','title','description','code'];



}
