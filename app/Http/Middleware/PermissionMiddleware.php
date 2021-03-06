<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;
use Closure;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        if (! $request->user()->can($permission)) {
            return redirect('/');
        }
        return $next($request);
    }
}
