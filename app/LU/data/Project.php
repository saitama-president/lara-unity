<?php
namespace App\LU\data;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Storage;


class Project extends Model implements \App\Common\CreateTable{

  public $table="project";
  
  public static function CreateTable(Blueprint $b) {
    $b->increments('id');
    $b->string("name");
    $b->string("entry_point")->default("http://localhost");
    
    $b->timestamps();
  }
  
  

  public function Save2Storage(){
      Storage::put("script/{$this->id}.js",$this->source); 
      return true;
  }
}