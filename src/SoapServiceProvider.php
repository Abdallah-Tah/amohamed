<?php

namespace Atm\Abdal;

use Atm\Abdal\Services\Amsoap;
use Illuminate\Support\ServiceProvider;

class SoapServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->bind('amsoap', function () {
            return new Amsoap();
        });
    }
}
