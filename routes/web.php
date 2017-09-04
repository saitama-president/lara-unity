<?php

use Illuminate\Support\Facades\Request;


Route::get('', function () {
    return view('index');
});

Route::get('play',"PlayController@play");
Route::get('play/source',"PlayController@source");
