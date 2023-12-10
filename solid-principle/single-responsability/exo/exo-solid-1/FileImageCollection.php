<?php

class FileImageCollection
{ 
    public function __construct()
    {
    }

    public static function add(string $key, FileImage $file): void
    {
        $_FILES[$key] = $file;
    }

    public static function get(string $key): FileImage
    {
        return $_FILES[$key];
    }
}
