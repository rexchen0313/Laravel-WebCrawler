<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\WebCrawler\Handler\Handle;
use App\WebCrawler\Handler\WebConstellation;

class WebCrawlerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Handle::class, WebConstellation::class);
    }
}
