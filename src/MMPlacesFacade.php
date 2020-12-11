<?php

namespace LambdaDigamma\MMPlaces;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LambdaDigamma\MMPlaces\MMPlaces
 */
class MMPlacesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mm-places';
    }
}
