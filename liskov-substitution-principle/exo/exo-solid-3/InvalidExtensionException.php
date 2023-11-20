<?php

require_once 'InvalidFileException.php';

class InvalidExtensionException extends InvalidFileException
{
    public function __construct($expected, $received)
    {
        $message = sprintf(
            'Fichier %s attendu mais "%s" obtenu',
            $expected,
            $received
        );

        parent::__construct($message);
    }
}