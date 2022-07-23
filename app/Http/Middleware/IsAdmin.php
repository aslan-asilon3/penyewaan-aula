<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check() && auth()->user()->is_admin == 0){

            return $next($request);
            // return redirect()->route('admin.home');

        }elseif(auth()->check() && auth()->user()->is_admin == 1){
            return $next($request);
            // return redirect()->route('reservator.home');

        }elseif(auth()->check() && auth()->user()->is_admin == 2){
            return $next($request);
            // return redirect()->route('home');
        }else{
            return redirect()->route('login');

            // return redirect('/login')->with('error',"You don't have admin access.")
        }



    }
}
