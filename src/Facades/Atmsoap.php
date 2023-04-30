<?php

namespace Atma\Abdal\Facades;

class Atmsoap
{
    public static function dump()
    {
        $date = \Carbon\Carbon::now();
        return $date->toDateTimeString();
    }
}
