<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Islogin
{
    public function handle(Request $request, Closure $next): Response
    {
        // cek apakah session logged_in ada
        if (!$request->session()->has('logged_in')) {
            // jika tidak ada maka redirect ke login
            return redirect('/login');
        }

        return $next($request);
    }
}