<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class soal15
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Request::is('soal6')) {
            return "Bukan Soal 1-5";
        }

        return $next($request);
    }
}
