<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class RedirectIfNotHotelManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(! $request->user()->isHotelManager()){
            return redirect('/');
        }
        return $next($request);
    }
}
