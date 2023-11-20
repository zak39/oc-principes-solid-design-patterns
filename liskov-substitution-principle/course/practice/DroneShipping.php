<?php

require 'ShippingType.php';
require 'TooHeavyOrderException.php';

class DroneShipping implements ShippingType
{
    public function __construct()
    {
    }

    public function getCost(Order $order): float
    {

        if ($order->getWeight() > 10) {
            throw new TooHeavyOrderException('Your order is too heavy for a drone!');
        }

        $cost = $order->getWeight() * 5;

        if ($order == 'rapide') {
            $cost = 1.2 * $cost;
        }
            
        return (float) $cost;
    }
}
