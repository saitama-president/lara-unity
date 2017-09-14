<?php

namespace App\Http\Middleware;
use App\LU\edit_data\API;
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
        
        //route
        
        $path=$request->path();
        $method=$request->method();
        
        \Log::Debug("{$path}-{$method}");
        $api= API::Where("method",'POST')->Where("entry_point",$path)->first();
        //ユーザ情報などを取得する
        //$user_token= request()->header($key);
        
        
        //どのAPIだかを同定した上で統計情報更新
        
        
        \Log::Debug($api->id);
        
        return $next($request);
    }
}
