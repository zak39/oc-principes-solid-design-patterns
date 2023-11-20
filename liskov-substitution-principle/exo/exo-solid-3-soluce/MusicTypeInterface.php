<?php

interface MusicTypeInterface
{
    function getFilename() : string;

    /**
     * @throws InvalidFileException
     */
    function listen() : string;
}
