<?php

namespace App\LU\service;

use Illuminate\Support\Facades\Storage;

class APIService {

    //put your code here
    public function stop() {
        return Artisan::call('api:down');
    }

    public function is_running() {

        return file_exists($this->storagePath() . '/framework/api_down');
    }

    public function restart() {
        Artisan::call('api:down');
        Artisan::call('api:up');
    }

}
