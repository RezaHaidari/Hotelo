<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;
use Illuminate\Support\Facades\Gate;

Route::get('/test',function(){
    $role = \App\Role::find(2);

    $role->permissions()->detach();

    Auth::logout();
    return Auth::loginUsingId(1);

});


Route::group(['prefix' => 'admin','middleware' => 'auth','middleware'=>'admin'], function()
{

    Route::controller('/room','RoomController');
    Route::controller('/hire','HireController');
    Route::controller('/','AdminController');

});



Route::controller('/user','UserController');
Route::resource('/','FrontendController');



Route::get('/hotel','HotelController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
