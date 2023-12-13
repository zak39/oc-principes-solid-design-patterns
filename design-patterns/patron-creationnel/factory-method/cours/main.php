<?php

require 'ShipTransportFactory.php';
require 'TruckTransportFactory.php';

$shipFactory = new ShipTransportFactory();
$truckFactory = new TruckTransportFactory();

$ship01 = $shipFactory->createTransport();
$truck01 = $truckFactory->createTransport();

var_dump([
    [
        'nom_de_classe' => get_class($ship01),
        'mode' => $ship01->deliverOrder(),
    ],
    [
        'nom_de_classe' => get_class($truck01),
        'mode' => $truck01->deliverOrder(),
    ]
]);
