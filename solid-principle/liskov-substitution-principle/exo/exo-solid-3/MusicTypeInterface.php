<?php

interface MusicTypeInterface
{
    
    /**
     * @throws InvalidFileException
     */
    public function listen(): string;

    public function getFilename(): string;
}