<?

Route::get('play',"PlayController@play");

Route::get('/', function () {
    return view('welcome');
});
