<?php

namespace Utils;

use DateTime;

class DateTimeUtils
{
    public static function getCurrentTS() {
        // Temporarily added to mimic right php.ini setup
        date_default_timezone_set('Europe/London');

        $date = new DateTime();
        return $date->format('Ymd').'_'.$date->getTimestamp();
    }
}