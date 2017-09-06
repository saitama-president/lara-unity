<?php

use Illuminate\Support\Facades\Request;
use App\LU\data\Project;
use App\LU\data\Script;

Route::get('', function () {
    return view('index');
});

/* プロジェクト関連 */
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




//Route::get('play',"PlayController@list");
Route::get('play/{id}', "PlayController@play");
Route::get('projects/edit/{id}', function($id) {
    return view("project.edit", ["id" => $id]);
});

Route::POST('projects/edit_commit', function() {
    $id= request("id");
    $source= request("source");
    
    $script=Script::Where("id", $id)->first();
    $script->source=$source;
    
    $script->save();
 
    
    return redirect("projects/edit/$id");
});


Route::get('play/source', "PlayController@source");
