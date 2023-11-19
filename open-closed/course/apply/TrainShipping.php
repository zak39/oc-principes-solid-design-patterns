<?php

class TrainShipping extends ShippingType
{
    public function __construct(private Package $package, private ?string $mode = null)
    {
    }

    public function getCost()
    {
        $cost = $this->package->getWeight() * 2;
            
        if ($this->mode == 'rapide') {
            $cost = 1.1 * $cost;
        }
        
        return $cost;
    }
}
