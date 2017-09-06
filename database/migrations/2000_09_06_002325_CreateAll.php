<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\LU\data\Script;

class CreateAll extends Migration
{
    private $tables=[
        Script::class
    ];


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        
        foreach($this->tables as  $table){
            $o=new $table;
            Schema::Create($o->table,function(Blueprint $b)
                use($o)
                {
                $o->CreateTable($b);
            }); 
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {        
        foreach($this->tables as  $table){
            $o=new $table;
            Schema::Drop($o->table);
        }                
    }
}
