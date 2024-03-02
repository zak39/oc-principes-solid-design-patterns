<?php

require_once('Monster.php');
require_once('MonsterState.php');

final class Sleepy implements MonsterState
{
    private Monster $monster;

    public function attack(Monster $monster): void
    {
        $this->monster->doNothing();

        print('😴' . PHP_EOL);
    }

    public function move(): void
    {
        $this->monster->doNothing();

        print('😴' . PHP_EOL);
    }

    public function setMonster(Monster $monster): MonsterState
    {
        $this->monster = $monster;

        return $this;
    }
}
