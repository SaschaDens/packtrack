<?php namespace Packtrack\Generator;

use Illuminate\Support\ServiceProvider;

class GenerateServiceProvider extends ServiceProvider{
    public function register()
    {
        $this->app->bind('generator', 'Packtrack\Generator\GenerateService');
    }

}