<?php

require_once 'Car.php';

interface CarBuilder
{
    public function paintCar(string $color): CarBuilder;

    public function mountEngine(string $motorization): CarBuilder;

    public function installAirConditionner(): CarBuilder;

    public function getCar(): Car;
}
