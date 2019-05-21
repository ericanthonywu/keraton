<?php

namespace App\Http\Middleware;

use Closure;

class authcheck
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
        if(\Session::get('users') && \Session::get('level')) {
            return $next($request);
        }else{
            return redirect('/');
        }
    }
}
