<?php

require 'ShippingType.php';

class AircraftShipping implements ShippingType
{
    public function __construct()
    {
    }

    public function getCost(Order $order): float
    {
        $cost = $order->getWeight() * 3;
            
        if ($order->getPlan() == 'rapide') {
            $cost = 1.3 * $cost;
        }

        return (float) $cost;
    }

}
