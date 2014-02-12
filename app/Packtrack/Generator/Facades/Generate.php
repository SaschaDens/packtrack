<?php namespace Packtrack\Generator\Facades;

use Illuminate\Support\Facades\Facade;

class Generator extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'generator';
    }
}