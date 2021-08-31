<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class pageVisitors
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
        if($request -> session() -> has('visit')){
            $visit = session('visit') + 1;
            $request -> session() -> put('visit', $visit);
            echo session('visit');
        }else{
            $request -> session() -> put('visit', '1');
            echo session('visit');
        }


        return $next($request);
    }
}
