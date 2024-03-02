<?php

require_once('Monster.php');

interface MonsterState
{
    public function attack(Monster $monster);
    
    public function move();

    public function setMonster(Monster $monster): MonsterState;
}
