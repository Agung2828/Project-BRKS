<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }

        if (Auth::check()) {
            $url = "/" . Auth::user()->role;
            return redirect($url)->withErrors("Anda tidak dapat mengakses halaman ini.");
        }

        return redirect()->route('auth')->withErrors("Anda harus login untuk mengakses halaman ini.");
    }
}
