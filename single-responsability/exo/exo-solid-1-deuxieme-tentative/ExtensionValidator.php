<?php

class ExtensionValidator
{
    protected const PNG_FAMILY = ['PNG', 'png'];
    protected const JPEG_FAMILY = ['jpeg', 'jpg', 'JPG'];
    
    public function validate(string $type): bool
    {
        $extensions = array_merge(self::PNG_FAMILY, self::JPEG_FAMILY);

        return in_array($type, $extensions);
    }

    public function jpegValidator(string $type): bool {
        return in_array($type, self::JPEG_FAMILY);
    }

    public function pngValidator(string $type): bool {
        return in_array($type, self::PNG_FAMILY);
    }
}