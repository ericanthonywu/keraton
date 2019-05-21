<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class superadmincheck
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::get('level') == 2 && Session::get('level') == 1) {
            return redirect()->back();
        } else {
            return $next($request);
        }
    }
}
