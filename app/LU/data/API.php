<?php

namespace App\LU\data;

use Illuminate\Database\Eloquent\Model;

class API extends Model implements \App\Common\CreateTable {

    public $table="API";
    
    public function CreateTable(\Illuminate\Database\Schema\Blueprint $b) {
        $b->increments('id');
        $b->string('method');
        $b->string('entry_point');
        $b->string("action");
        $b->timestamps();
        $b->unique(["method","entry_point","action"],"uniq_keys");

    }

}
