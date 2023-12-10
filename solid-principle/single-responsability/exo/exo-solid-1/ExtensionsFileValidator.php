<?php

class ExtensionsFileValidator
{
    private const VALID_TYPES = [
        'PNG',
        'png',
        'jpeg',
        'jpg',
        'JPG'
    ];

    public static function validate(string $type): bool {

        return in_array($type, self::VALID_TYPES);
    }
}