<?php

require_once 'InvalidFileException.php';

class UnknownExtensionException extends InvalidFileException
{
    public function __construct()
    {
        parent::__construct('Les fichiers sans extensions ne sont pas acceptés.');
    }
}
