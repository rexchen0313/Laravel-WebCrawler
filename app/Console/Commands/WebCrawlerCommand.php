<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\WebCrawlerController;
use App\WebCrawler\Crawler;
use App\WebCrawler\Handler\Handle;

class WebCrawlerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'webcrawler:download';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '每天 00:00 am 透過爬蟲下載星座資訊';

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
    public function handle(WebCrawlerController $controller, Crawler $crawler, Handle $handle)
    {
        $controller->index($crawler, $handle);
    }
}
