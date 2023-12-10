<?php

class FileInformation
{
    public function getExtension(string $filename): string
    {
        return pathinfo($filename, PATHINFO_EXTENSION);
    }
}
