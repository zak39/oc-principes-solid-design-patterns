<?php

require_once('MonsterState.php');

interface Monster
{
    public function attack(Monster $monster);

    public function move();

    public function changeState(MonsterState $state): Monster;

}
