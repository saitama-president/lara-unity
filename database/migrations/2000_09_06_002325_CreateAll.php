<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\LU\data\Script;
use App\LU\data\Project;


class CreateAll extends Migration
{
    /**
     * 初期化するテーブル一覧
     * @var type 
     */
    private $tables=[
        Script::class,
        Project::class,
        App\LU\data\API::class,
        \App\LU\data\APIParam::class,
        \App\LU\data\Statistic::class,
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
