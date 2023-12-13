<?php

require_once 'CarBuilder.php';
require_once 'Car.php';

class Director
{
    public function __construct(private CarBuilder $builder)
    {
    }

    public function createOpenClassroomsEdition(): Car
    {
        return $this->builder->paintCar('purple')
            ->installAirConditionner()
            ->getCar();
    }

    public function createSwagEdition(): Car
    {
        return $this->builder->paintCar('gray')
            ->installAirConditionner()
            ->mountEngine('60cc')
            ->getCar();
    }

    public function createRichEdition(): Car
    {
        return $this->builder->paintCar('gold')
            ->installAirConditionner()
            ->mountEngine('600cc')
            ->getCar();
    }
}
