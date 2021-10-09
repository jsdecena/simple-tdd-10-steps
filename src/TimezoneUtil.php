<?php

namespace Jsdecena\SimpleTdd;

use Carbon\Carbon;
use DateTimeZone;

class TimezoneUtil
{
    public static function getTimezone()
    {
        return Carbon::now(new DateTimeZone(config('simpletdd.timezone')));
    }
}
