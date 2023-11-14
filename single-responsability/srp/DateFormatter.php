<?php

use Deprecator;

// src/DateFormatter.php
class DateFormatter
{
    public static function dateFormat(array $params, &$smarty)
    {
        return self::displayDate($params['date'], null, (isset($params['full']) ? $params['full'] : false));
    }

    /**
     * Trop compliqué à comprendre et possède trop de responabilités.
     * @deprecated displayLite or displayFull
     */
    public static function displayDate(
        $date,
        $id_lang = null,
        $full = false,
        $separator = null)
        {
        if ($id_lang !== null) {
            Deprecator::displayParameterAsDeprecated('id_lang');
        }

        if ($separator !== null) {
            Deprecator::displayParameterAsDeprecated('separator');
        }

        if (!$date || !($time = strtotime($date))) {
            return $date;
        }

        if (
            $date === '0000-00-00 00:00:00'
            || $date === '0000-00-00'
        ) {
            return '';
        }

        if (!Validate::isDate($date) || !Validate::isBool($full)) {
            throw new \Exception('Invalid date');
        }

        $context = Context::getContext();
        $date_format = $full ?
            $context->language->date_format_full :
            $context->language->date_format_lite
        ;

        return date($date_format, $time);
    }

    public static function displayLite($date): string
    {
        $time = DateValidator::validate($date);
        $date_format = Context::getContext()->language->date_format_lite;
        return date($date_format, $time);
    }

    public static function displayFull($date): void
    {
        $time = DateValidator::validate($date);
        $date_format = Context::getContext()->language->date_format_lite;
    }
}
