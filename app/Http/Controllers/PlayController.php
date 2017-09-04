<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
class PlayController extends Controller
{
    public function play(){
       return view('play');
    }
    
    public function source(){
        return view('source');
    }
}
