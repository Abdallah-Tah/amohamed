<?php

namespace Atm\Abdal\Facades;

use Illuminate\Support\Facades\Facade;

class SoapFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'amsoap';
    }
}
