<?php

interface FileWritableInterface
{
    /**
     * Check if a file is writable.
     */
    public function isWritable(): bool;
}
