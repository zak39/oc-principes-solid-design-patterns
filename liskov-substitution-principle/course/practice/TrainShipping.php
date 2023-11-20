<?php

require 'ShippingType.php';

class TrainShipping implements ShippingType
{
    public function __construct()
    {
    }

    public function getCost(Order $order): float
    {
        $cost = $order->getWeight() * 2;
            
        if ($order->getPlan() == 'rapide') {
            $cost = 1.1 * $cost;
        }
        
        return $cost;
    }
}
