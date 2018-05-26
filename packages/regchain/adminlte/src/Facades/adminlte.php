<?php

namespace regchain\adminlte\Facades;

use Illuminate\Support\Facades\Facade;

class adminlte extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'adminlte';
    }
}
