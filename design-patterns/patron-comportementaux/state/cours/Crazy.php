<?php

require_once('Monster.php');
require_once('MonsterState.php');

final class Crazy implements MonsterState
{
    private Monster $monster;

    private function isTooMuchCrazy()
    {
        $chancesOfInjury = 20;
        $randomNumber = random_int(0, 100);

        if ($randomNumber <= $chancesOfInjury) {
            return true;
        }

        return false;
    }
    
    public function attack(Monster $monster): void
    {
        // un pourcentage de chance de se blesser
        if ($this->isTooMuchCrazy())
        {
            $this->monster->hurtItSelf();

            print('🤪' . PHP_EOL);

            return;
        }

        $this->monster->attackOtherMonster();

        print('😈' . PHP_EOL);
    }

    public function move(): void
    {
        // un pourcentage d'aller dans une autre direction
        if ($this->isTooMuchCrazy())
        {
            $this->monster->moveRandomly();

            print('🤪' . PHP_EOL);

            return;
        }

        $this->monster->move();

        print('➡' . PHP_EOL);
    }

    public function setMonster(Monster $monster): MonsterState
    {
        $this->monster = $monster;

        return $this;
    }
}
