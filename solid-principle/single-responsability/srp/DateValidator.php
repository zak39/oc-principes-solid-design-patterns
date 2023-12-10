<?php

class DateValidator
{
    public static function validate(string $date): string
    {
        if (!$date || !($time = strtotime($date))) {
            return $date;
        }

        if (
            $date === '0000-00-00 00:00:00'
            || $date === '0000-00-00'
        ) {
            return '';
        }

        if (
            !Validate::isDate($date)
            || !Validate::isBool($full)
        ) {
            throw new \Exception('Invalid date');
        }

        return $time;

    }
}