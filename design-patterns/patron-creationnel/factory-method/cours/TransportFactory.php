<?php

require_once 'Transport.php';

interface TransportFactory
{
    public function createTransport(): Transport;
    
    public function deliver();
}
