<?php

require 'Order.php';

$order = new Order();
$cost = $order->getShippingCost();

print($cost . PHP_EOL);
