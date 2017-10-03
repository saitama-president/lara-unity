<?php

namespace App\LU\data;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class API extends Model implements \App\Common\CreateTable {

    public $table="api";
    //public $method;
    //public $primaryKey=["method","entry_point"];
    //public $fillable=["method"];
    
    public static function CreateTable(\Illuminate\Database\Schema\Blueprint $b) {
        $b->increments('id');
        $b->string('method');
        $b->string('entry_point');
        
        $b->string("action");
        $b->timestamps();
        $b->unique(["method","entry_point"],"uniq_keys");
        
    }
    
    public function toCS(){
        
        return view("unity.cs",["API"=>$this])->render();
    }
    
    public function toAjax(){
        return view("web.ajax",["API"=>$this])->render();
    }
    
    /*
    public function Valid(){
        
        return true;
    }
     * 
     */
    
    public static function Routes(){
        
        //これはキャッシュからとってくる
        if(!Schema::hasTable("api")){
            Schema::Create("api",function(Blueprint $b)
                {
                $api=new API();
                $api->CreateTable($b);
            });            
        }
        
        
        $list=Cache::get("Routes",function(){           
           return API::all();
        });
        
        
        //有効なやつだけ生成する
        foreach($list as $item){
            $class=['project\Controllers'."\\testAppController","TestMethod"];
            //クロージャの中身は？
            switch(mb_strtoupper($item->method)){
                
                case "POST":
                    
                    
                    //call_user_func($callback)
                    Route::Post($item->entry_point,
                        function()
                        use($user_func)
                        {
                            return "OK";
                        
                        }
                        );                 
                    break;
                case "GET":
                    Route::Get( $item->entry_point,function(){return "OK";});                    
                    break;
            }
        }
        
    }

}