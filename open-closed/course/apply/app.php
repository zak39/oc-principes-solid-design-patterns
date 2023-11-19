<?php

require 'Order.php';
require 'Package.php';
require 'ShippingMode.php';
require 'TrainShipping.php';

$package = new Package(3);
$shippingMode = new TrainShipping($package, ShippingMode::FAST);
$order = new Order($shippingMode);
$cost = $order->getShippingCost();

var_dump($cost);