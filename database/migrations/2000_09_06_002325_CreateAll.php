<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateAll extends Migration
{
    /**
     * 初期化するテーブル一覧
     * @var type 
     */
    private $tables=[
        
        App\LU\edit_data\Script::class,
        App\LU\edit_data\Project::class,
        
        \App\LU\edit_data\API::class,
        \App\LU\edit_data\APIParam::class,
        \App\LU\edit_data\Statistic::class,
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
            Schema::dropIfExists($o->table);
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
