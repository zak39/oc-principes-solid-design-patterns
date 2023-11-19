<?php

class AircraftShipping extends ShppingType
{
    public function __construct(private Package $package, private ?string $mode = null)
    {
    }

    public function getCost()
    {
        $cost = $this->package->getWeight() * 3;
            
        if ($this->mode == 'rapide') {
            $cost = 1.3 * $cost;
        }

        return $cost;
    }

}
