<?php

use Illuminate\Support\Facades\Request;
use App\LU\data\Project;
use App\LU\data\Script;
use App\LU\data\API;

Route::get('/', function () {
    return view('index');
});

Route::get('test', function () {
    $s=new App\LU\service\APIService();
    
    return $s->Generate2Ajax();
});


//管理者ログインを行う
Route::get('admin/login',"AdminController@login");
Route::Post('admin/login',"AdminController@login_commit");

/* プロジェクト関連 */
Route::group(['middleware' => ['EditMode']],function(){
    //トップメニュー
    Route::get('admin/menu',"AdminController@menu");
    
    Route::get('admin/api/list', "APIController@api_list");
    Route::get('admin/api/edit/{id}', "APIController@edit");
    Route::get('admin/api/add', "APIController@add");
    Route::get('admin/api/status', "APIController@status");
    Route::get('admin/api/statistic/{id}', "APIController@statistic");
    
    Route::POST('admin/api/edit/commit', "APIController@edit_commit");
    
    
    Route::get('admin/api/export', "APIController@export");

    Route::get('admin/play/', "PlayController@play");
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
    
    /*
     * テンプレート関連
     */
    Route::get("admin/api/templates","APIController@templates_list");
    Route::get("admin/api/template_import","APIController@template_import");
    Route::get("admin/api/template_remove","APIController@template_remove");
    Route::get("/admin/api/template_import_store/{id}","APIController@template_store");//直接インポート
    
    
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


Route::group(['middleware' => ['PlayMode']],function(){
    API::Routes();
});