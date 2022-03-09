<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class AgencyMiddleware
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
        if (Auth::check() && Auth::user()->role_id == 3) {
            return $next($request);
        } elseif (Auth::check() && Auth::user()->role->id == 2  && Auth::user()->is_updated == true) {
            return redirect()->route('agency-pending');
        } else {
            return redirect()->route('login');
        }
    }
}
