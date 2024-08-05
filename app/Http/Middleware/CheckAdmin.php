<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
   
    public function handle(Request $request, Closure $next)
    {

        if (auth()->user()->role == 'admin') {
            return $next($request);
        }

        return abort(403, 'You are not allowed to enter this information');
    }
}
