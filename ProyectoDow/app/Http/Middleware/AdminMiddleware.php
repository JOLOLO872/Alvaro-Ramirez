<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->roles()->where('nombre', 'admin')->exists()) {
            return $next($request);
        }

        abort(403, 'No tienes permiso para acceder a esta página .');
    }
}