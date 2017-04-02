<?php

namespace estoque\Http\Middleware;

use Closure;
use Auth;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){


        if(!$request->is('/usuario/login') && !$request->is('/usuario/novo') && Auth::guest()){
            return redirect('/usuario/login');
        }

        return $next($request);
    }
}
