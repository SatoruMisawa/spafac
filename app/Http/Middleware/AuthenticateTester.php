<?php

namespace App\Http\Middleware;

use App\Tester;
use Auth;
use Closure;

class AuthenticateTester
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
        if (!Tester::where([
            'id' => session('tester_id'),
            'remember_token' => session('tester_remember_token')
        ])->exists()) {
            return redirect()->route('tester.session.new');
        }

        return $next($request);
    }
}
