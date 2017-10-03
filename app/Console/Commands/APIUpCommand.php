<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class APIUpCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:up';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'APIサーバの停止を解除します';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        @unlink(storage_path('/framework/api_down') );
        $this->comment("停止解除");
    }
}
