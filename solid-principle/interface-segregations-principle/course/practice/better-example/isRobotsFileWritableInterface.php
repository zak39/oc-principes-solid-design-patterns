<?php

/**
 * Un peu mieux. Mais très similaire à isHtaccessFileWritableInterface.php.
 */
interface isRobotsFileWritableInterface
{
    /**
     * Check if robots.txt file for Front Office is writable.
     */
    public function isWritable(): bool;
}
