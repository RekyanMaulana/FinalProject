<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    public function handle(Request $request, Closure $next, $roles)
    {
        if ($request->user()->role === $roles) {
            return $next($request);
        }

        return redirect('login');
    }
}