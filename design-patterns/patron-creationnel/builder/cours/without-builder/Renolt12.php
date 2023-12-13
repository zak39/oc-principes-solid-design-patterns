<?php

require_once 'Car.php';

class Renolt12 extends Car
{
    public function __construct(
        private string $color,
        private string $motorization,
        private bool $airConditionner, // la clim
        private bool $someOtherOption
    )
    {

    }
}
