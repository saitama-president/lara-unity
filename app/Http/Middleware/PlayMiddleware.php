<?php

namespace App\Http\Middleware;
use App\LU\data\API;
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
        $entry_point= preg_replace("#^api/#", "", $path);        
        $method=$request->method();        
        \Log::Debug("{$entry_point}-{$method}");
        //return ["{$path}:{$method}"];
        $api= API::Where("method",'GET')->Where("entry_point",$entry_point)->first();
        //ユーザ情報などを取得する
        //$user_token= request()->header($key);                
        //どのAPIだかを同定した上で統計情報更新
        $s= \App\LU\data\Statistic::GetStatics($api->id);
        $result=$next($request);        
        //処理時間を記録する
        $s->access(process_time(),$result->status()==200);
        return $result;
    }
}
