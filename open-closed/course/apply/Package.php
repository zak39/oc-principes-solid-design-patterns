<?php

class Package
{
    public function __construct(private int $weight = 1)
    {
    }

    public function getWeight(): int
    {
        return $this->weight;
    }
}