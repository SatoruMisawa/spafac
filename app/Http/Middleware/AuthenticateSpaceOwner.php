<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateSpaceOwner
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
        $space = $request->route()->parameter('space');
        if (!$request->user()->ownSpace($space)) {
            abort(404);
        }
        
        return $next($request);
    }
}