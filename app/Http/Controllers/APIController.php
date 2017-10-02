<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\LU\data\API;

class APIController extends Controller
{
    public function templates_list(){
        return view("api/templates");
    }
    
    public function template_import(){
        
        return redirect("admin/api/templates");
    }
    
    public function template_remove(){
        
        return redirect("admin/api/templates");
    }
    
    public function template_store($id){
        
        
        return redirect("admin/api/templates");
    }

    
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
        
        return redirect("admin/api/edit/{$api->id}");
    }
    
    
    public function create(){
    }
    
    public function create_commit(){
    }
    
    public function delete(){
    }
    

    
    
}
