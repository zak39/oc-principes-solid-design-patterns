<?php

/**
 * Rien à voir avec le design pattern state.
 * C'est pour améliorer la logique de
 * l'exemple du cours
 */

trait CrazyTrait {
    public function hurtItSelf() {
        print($this->getName() . ' gets hurt self' . PHP_EOL);
    }

    public function attackOtherMonster()
    {
        print($this->getName() . ' : attack other monster' . PHP_EOL);
    }

    public function moveRandomly()
    {
        $caseNumber = random_int(1, 10);

        $moves = ['▶️', '◀️', '🔽', '🔼'];

        $index = array_rand($moves, 1);

        $randomDirection = $moves[$index];

        print($this->getName() . ' : move another direction' . PHP_EOL);

        print($this->getName() . " : move in this direction $randomDirection to $caseNumber number case");
    }
}