<?php

use Illuminate\Support\Facades\Request;
use App\LU\data\Project;
use App\LU\data\Script;

Route::get('/', function () {
    return view('index');
});

//管理者ログインを行う
Route::get('admin/login',"AdminController@login");
Route::Post('admin/login',"AdminController@login_commit");

/* プロジェクト関連 */
Route::group(['middleware' => ['EditMode']],function(){
    //トップメニュー
    Route::get('admin/menu',"AdminController@menu");
    Route::get('admin/play/{id}', "PlayController@play");
    Route::get('admin/api/list', "APIController@list");
    Route::get('admin/api/edit', "APIController@edit");
    Route::POST('admin/api/edit/commit', "APIController@edit");

    /*
     * APIの利用可能状況を変更します
     */
    Route::get('admin/api/{id}/up',"APIController@up");
    Route::get('admin/api/{id}/down',"APIController@down");
    /*
     * 監視画面系
     *  */
    Route::get('admin/api/inspect-update',"APIController@inspectUpdate");
    Route::get('admin/api/inspect-view',"APIController@inspectView");
    
    /*API単体の稼働状況*/
    Route::get('api/{id}/activity',function(){
        return view("api.activity");
    });
    /*
        監視画面関連　ここまで
     *  */
    Route::get('play/source/{id}', "PlayController@source");
//APIテスト時は動的にrouteを生成
});

//APIのルートを取得して設定
App\LU\edit_data\API::Routes();