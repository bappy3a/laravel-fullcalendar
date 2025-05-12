<?php

namespace Bappy3a\Fullcalendar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bappy3a\Fullcalendar\Fullcalendar
 */
class Fullcalendar extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Bappy3a\Fullcalendar\Fullcalendar::class;
    }
}
