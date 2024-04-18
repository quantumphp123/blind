<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class AdminBasicAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            
            return redirect()->route('admin-login');

        }else{

            if(Auth::user()->role_id != 1){

                return redirect()->back();
            }

            return $next($request);
        }
    }
}



