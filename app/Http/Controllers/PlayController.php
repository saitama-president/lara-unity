<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
class PlayController extends Controller
{
    public function play($id){
       
       return view('play',["id"=>$id]);
    }
    
    public function edit(){
        return view('source.edit');
    }
    
    public function edit_commit(){
        
        
        return redirect("edit")->with("message","更新しました");
    }
    

    public function source($id){
        return view('source',["id"=>$id]);
    }
}
