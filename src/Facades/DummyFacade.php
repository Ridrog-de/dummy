<?php

namespace Ridrog\Dummy\Facades;

use Illuminate\Support\Facades\Facade;

class DummyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'dummy';
    }
}