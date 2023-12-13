<?php

require_once 'AbstractTransportFactory.php';
require_once 'Transport.php';
require_once 'Truck.php';

class TruckTransportFactory extends AbstractTransportFactory
{
    public function createTransport(): Transport
    {
        return new Truck();
    }
}
