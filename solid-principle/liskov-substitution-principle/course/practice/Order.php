<?php

class Order
{
    public function __construct(private int $weight = 1, private string $plan = 'normal')
    {
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getPlan(): string
    {
        return $this->plan;
    }
}
