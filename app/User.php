<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * name
     * password
     * email
     * postal_code -> User Postal Code
     * telephone
     * mobile
     * access -> user access area :
     * ['customer'->0,'officer'->1,'Manager'->2]
     */
    protected $fillable = [
        'name', 'email', 'password','postal_code','telephone','mobile','access'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function isHotelManager(){
        return false;
    }
}
