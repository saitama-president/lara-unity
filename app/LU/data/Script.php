<?php
namespace App\LU\data;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Storage;

class Script extends Model implements \App\Common\CreateTable{

  public $table="Script";
  
  public function CreateTable(Blueprint $b) {
    $b->increments('id');
    $b->timestamps();
  }

  public function Save2Strage(){
      
  }
}