<?php

require 'ShippingType.php';

class Order
{
    public function __construct(private ?ShippingType $shippingType = null)
    {
    }

    public function getShippingCost()
    {
        return $this->shippingType->getCost();
    }
}
