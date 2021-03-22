<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GlobalPrint
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
        echo date("m.d.y");
        return $next($request);
    }
}
