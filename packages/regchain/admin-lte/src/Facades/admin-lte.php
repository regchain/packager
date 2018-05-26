<?php

namespace regchain\admin-lte\Facades;

use Illuminate\Support\Facades\Facade;

class admin-lte extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'admin-lte';
    }
}
