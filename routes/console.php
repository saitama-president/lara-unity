<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('unity', function () 
{
    
    Storage::put("test.file",fopen(__FILE__,"r"));
    echo view("welcome")->render();
    $this->comment("NULLPO");
}
)->describe('Generate Unity ');

Artisan::command('unity:generate_project', function () 
{
    
    Storage::put("test.file",fopen(__FILE__,"r"));
    echo view("welcome")->render();
    $this->comment("NULLPO");
})->describe('Generate Project ');

Artisan::command('unity:generate_scene {scene_name}', function ($scene_name) 
{
    
    
    Storage::put("test.file",fopen(__FILE__,"r"));
    echo view("welcome")->render();
    $this->comment("NULLPO");
})->describe('Generate Unity ');