<?php 
namespace Sintex;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class SintexServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'sintex');

        # Publish the views
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/sintex'),
        ]);


        Blade::component('sintex::layout', 'sintexlayout');

    }
    public function register()
    {
        
    }

}