<?php

namespace Jsdecena\SimpleTdd;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            dirname(__DIR__) . '/config' => config_path()
        ], 'simpletdd');
    }
}
