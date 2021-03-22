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
        $date = $date = date("m.d.y");
        echo "
        <div class='container mt-5'>
            <h4 class='mt-5'>Fecha que viene del controlador: $date</h4>
        </div>";
        return $next($request);

    }
}
