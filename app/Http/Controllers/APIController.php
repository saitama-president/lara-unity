<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\LU\edit_data\API;

class APIController extends Controller
{
    public function api_list(){
        
        return view("api.list",[
            "api_list"=>API::all(),            
            ]);
    }
    
    public function add(){
        
        
        
        return view("api.edit",[
            "id"=>0,
            "params"=>[]
        ]);
    }
    
    public function edit_commit(){
        $id=request("id");
        
        $api= empty($id)
            ?new API()
            :API::find($id)->first();
        
        $api->save();
        
        return redirect("api/edit?id={$id}");
    }
    
    public function create(){
    }
    
    public function create_commit(){
    }
    
    public function delete(){
    }
    
    public function edit($id){
    }
    
    
}
