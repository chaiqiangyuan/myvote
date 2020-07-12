<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckApproved
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
        if (!Auth::user()->active) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
