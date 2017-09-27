<?php

use Illuminate\Http\Request;
use App\LU\edit_data\API;

/*ハートビート*/
Route::group(['middleware' => ['api']],function(){
    Route::Get("hb",function(){
        return ["OK"];
    });
});

//APIのルートを取得して設定
Route::group(['middleware' => ['PlayMode']],function(){
    API::Routes();
});