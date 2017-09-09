<?php

use Illuminate\Support\Facades\Request;
use App\LU\data\Project;
use App\LU\data\Script;

Route::get('', function () {
    return view('index');
});

/* プロジェクト関連 */
Route::group(['middleware' => ['EditMode']],function(){
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
    Route::get('projects/{id}/up',function($id){
        return redirect("projects/{$id}/inspect-view");
    });
    Route::get('projects/{id}/down',function($id){
        return redirect("projects/{$id}/inspect-view");
    });
    /*
     *  */
    Route::get('projects/{id}/inspect-update',function(){
        return ["OK"];
    });
    Route::get('projects/{id}/inspect-view',function(){
        return view("project.inspect");
    });
    /*
        監視画面関連　ここまで
     *  */
    Route::get('play/source/{id}', "PlayController@source");

//APIテスト時は動的にrouteを生成

});

//APIのルートを取得して
App\LU\edit_data\API::Routes();