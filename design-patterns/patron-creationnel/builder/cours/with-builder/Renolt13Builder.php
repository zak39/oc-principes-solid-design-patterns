<?php

require_once 'CarBuilder.php';
require_once 'Car.php';
require_once 'Renolt13.php';

class Renolt13Builder implements CarBuilder
{
    private Car $car;
    
    public function __construct()
    {
        $this->car = new Renolt13();
    }

    public function paintCar(string $color): CarBuilder
    {
        $this->car->setColor($color);
        return $this;
    }

    public function mountEngine(string $motorization): CarBuilder
    {
        $this->car->setMotorization($motorization);
        return $this;
    }

    public function installAirConditionner(): CarBuilder
    {
        $this->car->setAirConditionner(true);
        return $this;
    }

    public function getCar(): Car
    {
        return $this->car;
    }
}
