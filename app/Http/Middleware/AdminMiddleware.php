<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->level == 'admin') {
            return $next($request); // Admin bisa lanjutkan request
        }

        return redirect('/login')->with('error', 'Anda tidak memiliki akses!');
    }
}



