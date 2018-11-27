<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class AuthenticateFacilityOwner
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
        $facility = $request->route()->parameter('facility');
        if (!Auth::guard('users')->user()->asHost()->ownFacility($facility)) {
            abort(404);
        }
        
        return $next($request);
    }
}