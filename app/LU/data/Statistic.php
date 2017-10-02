<?php
namespace App\LU\data;

use Illuminate\Database\Eloquent\Model;

/**
 * APIの利用状況
 */
class Statistic extends Model implements \App\Common\CreateTable {

    public $table="statictic";
    
    public static function CreateTable(\Illuminate\Database\Schema\Blueprint $b) {
        $b->increments("id");
        $b->integer('api_id');
        $b->integer('access_count')->default(0);
        $b->integer('success_count')->default(0);
        $b->integer('error_count')->default(0);
        $b->double('total_exec_time')->default(0);
        
        $b->dateTime("begin_datetime");
        $b->dateTime("end_datetime");
        $b->unique(["api_id","begin_datetime","end_datetime"],"correct_uniq");
        $b->index(["api_id","begin_datetime","end_datetime"],"correct_index");
        $b->timestamps();

    }
    
    public static function GetStatics($api_id=1, \DateTime $datetime=null){
        $s=
            Statistic::where("id",1)
            ->where("begin_datetime","<=", \Carbon\Carbon::now())
            ->where(\Carbon\Carbon::now() ,"<","end_datetime" )
            ->first()
            ;
        
        if(empty($s)){
            $s=new Statistic();
            //一時間後をカウントする
            $from=\Carbon\Carbon::now();
            $to=\Carbon\Carbon::now()->addHour(1);
            $s->begin_datetime=$from;
            $s->end_datetime=$to;
            $s->api_id=$api_id;
            
            $s->save();
            
        }        
        return $s;        
    }

}
