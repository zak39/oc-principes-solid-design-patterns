<?php

require 'ExtensionsFileValidator.php';

class Uploader
{
    public function __construct(public string $error = '')
    {
    }

    public function uploadFile(FileImage $file)
    {
        if (!ExtensionsFileValidator::validate($file->getExtension())) {
            $this->error = 'Le fichier ' . $file->name . ' n\'est pas d\'un type valide';
            return false;
        }

        return true;
    }

    public function getError(): string
    {
        return $this->error;
    }
}
