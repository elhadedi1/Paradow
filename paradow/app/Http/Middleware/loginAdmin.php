<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class loginAdmin
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
        if(!auth()->check())
        {
            return redirect('/login');
        }
        if(Auth::user()->role==0)
        {
            return redirect('/login');
        }
        return $next($request);
    }
}
