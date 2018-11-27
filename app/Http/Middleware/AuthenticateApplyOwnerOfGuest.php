<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class AuthenticateApplyOwnerOfGuest
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
        $apply = $request->route()->parameter('apply');
        if (!Auth::guard('users')->user()->asGuest()->ownApply($apply)) {
            abort(404);
        }

        return $next($request);
    }
}