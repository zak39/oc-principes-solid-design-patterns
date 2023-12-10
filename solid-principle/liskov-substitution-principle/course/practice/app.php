<?php

require 'Order.php';
require 'TrainShipping.php';

$order = new Order(13, 'rapide');
$shippingMode = new TrainShipping();

try {
    $cost = $shippingMode->getCost($order);
    var_dump($cost);
} catch (InvalidShippingCost $reason) {
    var_dump($reason->getMessage());
}