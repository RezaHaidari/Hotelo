<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
    
    public function isHotelManager(){
        return false;
    }

    public function saveUser($request, $param = null ){

        $user = $this->create($request);

        if(!is_null($param)){
            $this->hire($user);
        }

    }

    public static function authUser($request){

        if (Auth::attempt(['email' => $request->email , 'password' => $request->password])) {
            return true;
        }else{
            return false;
        }

    }



    protected function hire($user){

        $user->access = -1;
        $user->save();

    }

    public function scopePending($query){

        return $query->where('access',-1)->orderBy('id','ASC')
            ->paginate(10);

    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role){

        if(is_string($role)){
            return $this->roles->contains('name',$role);
        }
        foreach ($role as $r){
            if($this->hasRole($r->name)){
                return true;
            }
        }

        return false;
    }


}
