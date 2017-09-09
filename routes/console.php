<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Process\Process;

Artisan::command('unity', function () 
{
    
    Storage::put("test.file",fopen(__FILE__,"r"));
    echo view("welcome")->render();
    $this->comment("NULLPO");
}
)->describe('Generate Unity ');

Artisan::command('unity:run', function () 
{
    //echo `whoami`;
    //PHP_OS
    $command= \App\Common\get_unity_path();
    `$command &`;
    //$p->start();
    //var_dump($e);
    $this->comment("RUNNED UNITY... $command");
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
