<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (in_array($request->user()->role, $roles)) {
            return $next($request);
        }

        // Ubah redirect agar tidak ke route yang sama
        return redirect()->route('dashboard')->with('error', 'You do not have permission to access this page.');
    }
}
