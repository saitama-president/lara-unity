<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\LU\edit_data\API;

class APIController extends Controller
{
    public function api_list(){
        
        //var_dump(API::all());
         
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
    
    public function edit(){
        $id=request("id");
        
        return view("api.edit",[
            "id"=>$id,
            "params"=>[]
        ]);        
    }


    public function edit_commit(){
        $id=request("id");
        $method=request("method");
        $entry_point=request("entry_point");
        
        $api= empty($id)
            ?API::firstOrNew([])
            :API::find($id)->first()
            ;
        
        $api->method=$method;
        $api->entry_point=$entry_point;
        $api->action="";
        
        $api->save();
        
        return redirect("api/edit/{$api->id}");
    }
    
    
    public function create(){
    }
    
    public function create_commit(){
    }
    
    public function delete(){
    }
    

    
    
}
