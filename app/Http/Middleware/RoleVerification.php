<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleVerification
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
        $articleUserId = $request->route()->parameters()['article']->user_id;
        if (Auth::user()->role_id == 1 && Auth::id() == $articleUserId || Auth::user()->role_id == 2) {
            return $next($request);
        } else {
            return redirect()->back();
        }
    }
}
