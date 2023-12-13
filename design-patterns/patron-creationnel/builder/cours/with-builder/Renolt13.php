<?php

require_once 'Car.php';

class Renolt13 extends Car
{
    public function __construct(
        private ?string $color = null,
        private ?string $motorization = null,
        private ?bool $airConditionner = null, // la clim
        private ?bool $someOtherOption = null
    )
    {
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setMotorization(string $motorization): void
    {
        $this->motorization = $motorization;
    }

    public function setAirConditionner(bool $toInstall): void
    {
        $this->airConditionner = $toInstall;
    }

    public function setSomeOtherOption(bool $toPutOption): void
    {
        $this->someOtherOption = $toPutOption;
    }
}
