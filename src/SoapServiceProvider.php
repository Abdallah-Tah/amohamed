<?php

namespace Atma\Abdal;

use Atma\Abdal\Facades\Atmsoap;
use Illuminate\Support\ServiceProvider;

class SoapServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->bind('amsoap', function () {
            return new Atmsoap();
        });
    }
}
