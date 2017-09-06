<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\LU\data\Script;

class ScriptSerialTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $s=new Script();
        
        $s->source="function(){alert(1)};";
        
        $result= $s->save();
        $this->assertTrue($result,"スクリプトをDBに保存できなかった");
        
        $result= $s->Save2Storage();
        $this->assertTrue($result,"スクリプトをファイルに保存できなかった");
        
        $this->assertTrue(true,"ぬるぽっぽ");
    }
    
    public function testFindSource(){
        
    }
}
