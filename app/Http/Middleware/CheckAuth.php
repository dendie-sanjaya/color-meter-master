<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckAuth 
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
        if (!Session::get('auth_cms')) 
        {
            return redirect('signin');
        }
        return $next($request);
    }
}