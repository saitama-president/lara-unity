<?php

namespace App\LU\edit_data;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Template extends Model implements \App\Common\CreateTable {

    public $table="template";
    //public $method;
    //public $primaryKey=["method","entry_point"];
    //public $fillable=["method"];
    
    public static function CreateTable(\Illuminate\Database\Schema\Blueprint $b) {
        $b->increments('id');
        $b->string('name');
        $b->string('description');
        $b->string('source');//resource_pathに渡して動作するファイル名
        
    }
    
    /**
     * テンプレートとして登録してしまう
     * @param type $id
     * @param type $data
     */
    public static function StoreTemplate($data){
        
        
        
        
        return true;
    }
    
    public function getAPIList(){
        /*
            ファイルを読み込んでAPIリストを取得
         *          */
        
        
        return [];
    }
    
}
