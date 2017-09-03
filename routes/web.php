<?



Route::get('', function () {
    return view('welcome');
});

Route::get('play',"PlayController@play");