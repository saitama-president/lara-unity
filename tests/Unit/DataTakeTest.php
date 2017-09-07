<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;

class DataTakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        DB::enableQueryLog();
        $o=\App\LU\data\Statistic::where("id",1)
            ->where("begin_datetime","<=", \Carbon\Carbon::now())
            ->where(\Carbon\Carbon::now() ,"<","end_datetime" )
            ->first()
            ;
        //dd($o);
        
        
        $s= \App\LU\data\Statistic::GetStatics();
        
        $this->assertNotEmpty($s,"ぬるぽっぽ");
        dd($s);
    }
}
