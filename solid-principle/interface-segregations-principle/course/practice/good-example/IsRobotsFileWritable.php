<?php

require_once 'FileWritableInterface.php';

class IsRobotsFileWritable implements FileWritableInterface
{
    /**
     * {@inheritdoc}
     */
    public function isWritable(): bool
    {
        return true;
    }
}
