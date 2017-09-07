<?php

namespace App\Http\Middleware;

use Closure;

class PlayMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(\Illuminate\Http\Request $request, Closure $next)
    {
        \Log::Debug("P-M");
        //route
        \Log::Debug($request->path());
        
        //\Log::Debug($request->url());
        
        return $next($request);
    }
}
