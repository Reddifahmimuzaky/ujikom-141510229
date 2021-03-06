<?php

namespace App\Http\Middleware;

use Closure;

class Keuangan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && $request->user()->permission == "keuangan") {
            return $next($request);
        }
        elseif (auth()->check() && $request->user()->permission == "admin") {
            return $next($request);
        }
        return redirect()->guest('/akses');
    }
}
