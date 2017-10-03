<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class APIDownCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:down';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'APIサーバの稼働を全停止します';

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
        file_put_contents(
            storage_path('/framework/api_down'),
            date("Y-m-d H:i:s")
        );

        $this->comment('API 停止完了');
        
        return true;
    }
}
