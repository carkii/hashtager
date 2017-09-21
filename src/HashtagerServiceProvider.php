<?php
namespace Carkii\Hashtager;

use Illuminate\Support\ServiceProvider;
use Carkii\Hashtager\Hashtager;

class HashtagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Carkii\Hashtager',Hashtager::class);
    }
}