<?php

namespace App\LU\edit_data;

use Illuminate\Database\Eloquent\Model;

class APIParam extends Model implements \App\Common\CreateTable {

    public function CreateTable(\Illuminate\Database\Schema\Blueprint $b) {
        $b->integer('api_id');
        $b->string('name');
        $b->string('valid_rule');        
        $b->timestamps();
    }

}
