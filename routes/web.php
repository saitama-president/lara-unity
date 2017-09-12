<?php

use Illuminate\Support\Facades\Request;
use App\LU\data\Project;
use App\LU\data\Script;

Route::get('/', function () {
    return view('index');
});

//管理者ログインを行う
Route::get('login',"AdminController@login");
Route::Post('login',"AdminController@login_commit");

/* プロジェクト関連 */
Route::group(['middleware' => ['EditMode']],function(){
    Route::get('admin/menu',"AdminController@menu");

    Route::get('projects', function() {
        return view("project.projects");
    });

    Route::get('projects/add', function() {

        $prj=new Project();
        $prj->name="test proj";

        $prj->save();

        Script::Insert(["id"=>$prj->id,"source"=>"OK"]);
        return redirect("projects");
    });

    Route::get('play/{id}', "PlayController@play");
    Route::get('projects/edit/{id}', function($id) {
        return view("project.edit", ["id" => $id]);
    });
    Route::get('projects/api/list', function() {return view("project.api_list");});
    Route::get('projects/api/edit/{id}', function($id) {return view("project.api_edit");});
    Route::get('projects/api/edit/commit', function($id) {return view("project.api_edit");});

    Route::POST('projects/edit_commit', function() {
        $id= request("id");
        $source= request("source");

        $script=Script::Where("id", $id)->first();
        $script->source=$source;
        $script->save();    
        return redirect("projects/edit/$id");
    });
    /*
        プロジェクト関連　ここまで
     *  */

    /*
     * APIの利用可能状況を変更します
     */
    Route::get('api/{id}/up',function($id){
        return redirect("projects/{$id}/inspect-view");
    });
    Route::get('api/{id}/down',function($id){
        return redirect("projects/{$id}/inspect-view");
    });
    /*
     * 監視画面系
     *  */
    Route::get('projects/{id}/inspect-update',function(){
        return ["OK"];
    });
    Route::get('projects/{id}/inspect-view',function(){
        return view("project.inspect");
    });
    
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