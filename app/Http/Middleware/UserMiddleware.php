<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna sudah login dan memiliki role "user"
        if (auth()->check() && auth()->user()->level == 'user') {
            return $next($request); // Lanjutkan request jika pengguna adalah user
        }

        // Jika bukan user, bisa diarahkan ke halaman lain atau memberikan pesan error
        return redirect('/')->with('error', 'Anda tidak memiliki akses!');
    }
}


