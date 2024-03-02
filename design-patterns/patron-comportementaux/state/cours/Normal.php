<?php

require_once('Monster.php');
require_once('MonsterState.php');

final class Normal implements MonsterState
{
    private Monster $monster;

    public function attack(Monster $monster): void
    {
        print($this->monster->getName() .' : attack ' . $monster->getName() . ' ⚔️' . PHP_EOL);
    }

    public function move(): void
    {
        print("move one case ▶️" . PHP_EOL);
    }

    public function setMonster(Monster $monster): MonsterState
    {
        $this->monster = $monster;

        return $this;
    }
}
