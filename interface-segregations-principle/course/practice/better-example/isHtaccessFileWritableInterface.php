<?php

/**
 * Un peu mieux. Mais très similaire à isRobotsFileWritableInterface.php.
 */
interface isHtaccessFileWritableInterface
{
    /**
     * Check if .htaccess file for Front Office is writable.
     */
    public function isWritable(): bool;
}
