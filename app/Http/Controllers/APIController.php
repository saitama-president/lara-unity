<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\LU\data\API;
use Illuminate\Support\Facades\Validator;

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
    
    public function edit($id){
        
        $api= API::where("id",$id)->first();
        
        return view("api.edit",[
            "id"=>$id,
            "api"=>$api,
        ]);
    }


    public function edit_commit(){
        $id=request("id");
        $method=request("method");
        $entry_point=request("entry_point");
        $action=request("action");        
        $controller=request("controller");
        $valid=true;
        
        $api= empty($id)
            ?new API()
            :API::find($id)->first()
            ;
        
        $api->method=$method;
        $api->entry_point=$entry_point;
        $api->action="{$controller}@{$action}";
        
        $validator=Validator::make(request()->all(), [            
            'controller' => 'required|min:1|max:50',
            'action' => 'required|min:1|max:50',
        ]);    
        if($validator->fails()){
            
            
            $message= implode(",",$validator->errors()->all());
            
            return  redirect("admin/api/edit/{$api->id}")
                ->with("message",$message);
        }
        $api->save();
        
        return redirect("admin/api/edit/{$api->id}")
            ->with("message","登録しました");
    }
    
    
    public function create(){
    }
    
    public function create_commit(){
    }
    
    public function delete(){
    }
    
    public function status(){
        
        return view("api/inspect");
    }

    
    
}
