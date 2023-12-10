<?php

require_once 'MusicFormat.php';

class Mp3 extends MusicFormat
{
    private string $extension;

    public function __construct(private string $filename)
    {
        $this->filename = $filename;
        $this->extension = pathinfo($this->filename, PATHINFO_EXTENSION);
    }

    public function listen(): string
    {
        return 'Lecture du fichier Mp3 '. $this->filename;
    }
}
