<?php

namespace App\Http\Middleware;

use Closure;

class RedirectToCurrencies
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($request->is('/')) {
            return redirect('currencies');
        }

        return $next($request);
    }
}