<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class AdminRole
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
        if(Auth::check()) {
            //admin role = 1
            //user role = 0
            if (Auth::user()->role == '1') {
                return $next($request);
            }
            else {
                return redirect('/')->with('message','Access Denied as you are not Admin!');
            }
        }
        else {
            return redirect('/login')->with('message','Login to access the website');
        }

        return $next($request);
    }
}