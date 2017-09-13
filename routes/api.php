<?php

use Illuminate\Http\Request;
use App\LU\edit_data\API;

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
//APIのルートを取得して設定
Route::group(['middleware' => ['PlayMode']],function(){
    API::Routes();
});