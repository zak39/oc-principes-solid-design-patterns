<?php

require_once('Monster.php');
require_once('MonsterState.php');
require_once('SleepyTrait.php');
require_once('CrazyTrait.php');

final class Mondozor implements Monster
{
    use SleepyTrait;
    use CrazyTrait;

    private MonsterState $state;
    
    public function __construct(MonsterState $state)
    {
        $this->changeState($state);
    }

    public function getName(): string
    {
        return __CLASS__;
    }

    public function attack(Monster $monster)
    {
        return $this->state->attack($monster);
    }

    public function move()
    {
        return $this->state->move();
    }

    public function changeState(MonsterState $state): Monster
    {
        $this->state = $state;
        $this->state->setMonster($this);

        return $this;
    }
}
