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
        $date = $date = date("m/d/Y");
        echo "
        <div class='container mt-5'>
            <h5 class='mt-5 text-center'>Fecha que viene del middleware en el controlador: $date</h5>
        </div>";
        return $next($request);

    }
}
