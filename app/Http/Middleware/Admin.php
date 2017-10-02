<?php

namespace sisVentas\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use sisVentas\User;

class Admin
{

    protected $auth;

    public function __contruct(Guard $auth){

        $this->auth =$auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        dd($this->auth->user());
        return $next($request);
    }
}
