<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class AuthenticateApplyOwnerOfHost
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
        if (!Auth::guard('users')->user()->asHost()->ownApply($apply)) {
            abort(404);
        }

        return $next($request);
    }
}