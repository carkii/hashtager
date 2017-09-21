<?php
namespace Carkii\Hashtager\Facades;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class Hashtager extends IlluminateFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Carkii\Hashtager';
    }
}
