<?php

use Illuminate\Http\Request;
use App\LU\data\API;

/*ハートビート*/

Route::Get("hb",function(){
    return ["OK"];
});


//APIのルートを取得して設定
Route::group(['middleware' => ['PlayMode']],function(){
    API::Routes();
});