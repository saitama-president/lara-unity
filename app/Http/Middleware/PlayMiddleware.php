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
        
        //ユーザ情報などを取得する
        //$user_token= request()->header($key);
        
        //どのAPIだかを同定した上で統計情報更新
        
        
        //\Log::Debug($request->url());
        
        return $next($request);
    }
}
