<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HotelController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth','manager']);
    }

    protected $basePath;

    public function index(){

        dd($this->basePath);
    }
}
