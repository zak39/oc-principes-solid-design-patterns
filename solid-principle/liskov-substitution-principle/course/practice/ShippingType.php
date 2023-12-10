<?php

require 'InvalidShippingCost.php';

interface ShippingType
{
    /**
     * @throws InvalidShippingCost
     */
    public function getCost(Order $order): float;
}
