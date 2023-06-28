<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Mycheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (($request->o == 'div') && ($request-> b == 0)){
            echo 'ERROR : 分母不可為0';
            die();
        }
        // echo 'ERROR : 分母不可為0';
        //     die();
        return $next($request);
    }
}
