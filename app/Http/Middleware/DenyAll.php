<?php

namespace App\Http\Middleware;

use Closure;

class DenyAll
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
        if (env('APP_ENV') !== 'testing') {
            abort(503);
        }

        return $next($request);
    }
}