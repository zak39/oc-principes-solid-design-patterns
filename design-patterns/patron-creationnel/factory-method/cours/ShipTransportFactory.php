<?php

require_once 'AbstractTransportFactory.php';
require_once 'Transport.php';
require_once 'Ship.php';

class ShipTransportFactory extends AbstractTransportFactory
{
    public function createTransport(): Transport
    {
        return new Ship();
    }
}
