<?php

require_once 'FileWritableInterface.php';

class IsHtaccessFileWritable implements FileWritableInterface
{
    /**
     * {@inheritdoc}
     */
    public function isWritable(): bool
    {
        return true;
    }
}
