<?php

namespace App\LU\data;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Cache;

class API extends Model implements \App\Common\CreateTable {

    public $table="api";
    
    public function CreateTable(\Illuminate\Database\Schema\Blueprint $b) {
        $b->increments('id');
        $b->string('method');
        $b->string('entry_point');
        $b->string("action");
        $b->timestamps();
        $b->unique(["method","entry_point"],"uniq_keys");
        
    }
    
    public function Valid(){
        
        return true;
    }
    
    public static function Routes(){
        
        //これはキャッシュからとってくる
        $list=Cache::get("Routes",function(){           
           return API::all();
        });
        
        //有効なやつだけ生成する
        foreach($list as $item){
            \Log::debug($item);
        }
        
        //Route::Get("aaa",function(){return "OK";});
    }

}
