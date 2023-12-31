<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()) {
            if (auth()->user()->user_type == 1 || auth()->user()->user_type == 2) {
                return $next($request);
            } elseif (auth()->user()->user_type == 0) {
                return abort(403);
            }
        } else {
            return redirect(route('login'));
        }
    }
}
