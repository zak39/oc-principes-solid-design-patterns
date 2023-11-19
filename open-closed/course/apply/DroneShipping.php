<?php

class DroneShipping extends ShippingType
{
    public function __construct(private Package $package, private ?string $mode = null)
    {
    }

    public function getCost()
    {    
        $cost = $this->package->getWeight() * 5;

        if ($this->mode == 'rapide') {
            $cost = 1.2 * $cost;
        }
            
        return $cost;
    }
}
