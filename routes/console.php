<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Process\Process;



Artisan::command('unity:run', function () 
{
    $unity= \App\Common\get_unity_path();
    
    $serial=config("unity.serial");
    $username=config("unity.username");
    $password=config("unity.password");
    
    $command="$unity -serial {$serial} -username {$username} -password {$password} ";
//-quit -batchmode -serial  -username '' -password 'MyPassw0rd'    
    `$command &`;
    $this->comment("RUNNED UNITY... $command");
}
)->describe('Generate Unity ');

