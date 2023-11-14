<?php

// src/Tools.php
class Tools
{
    public static function redirectAdmin($url)
    {
        header('Location: ' . $url);
        exit;
    }

    public static function dateFormat($params, &$smarty)
    {
        return Tools::displayDate($params['date'], null, (isset($params['full']) ? $params['full'] : false));
    }

    public static function displayDate($date, $id_lang = null, $full = false, $separator = null)
    {
        if ($id_lang !== null) {
            Tools::displayParameterAsDeprecated('id_lang');
        }
    
        if ($separator !== null) {
            Tools::displayParameterAsDeprecated('separator');
        }
    
        if (!$date || !($time = strtotime($date))) {
            return $date;
        }
    
        if ($date == '0000-00-00 00:00:00' || $date == '0000-00-00') {
            return '';
        }
    
        if (!Validate::isDate($date) || !Validate::isBool($full)) {
            throw new \Exception('Invalid date');
        }

        $context = Context::getContext();
        $date_format = ($full ? $context->language->date_format_full : $context->language->date_format_lite);
        return date($date_format, $time);
    }
}