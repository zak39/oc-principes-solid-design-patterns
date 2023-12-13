<?php

/**
 * Sans Director
 */

require_once 'Renolt12Builder.php';
require_once 'Renolt13Builder.php';
require_once 'Director.php';

$myCar = (new Renolt12Builder())
    ->paintCar('yellow')
    ->mountEngine('250cc')
    ->installAirConditionner()
    ->getCar();

var_dump($myCar);

/**
 * Avec Director en complément de notre design patter.
 */
$director = new Director(new Renolt12Builder());

// Je suis riche
$myCarRichEdition = $director->createRichEdition();

// Je veux la renolt13 édition Swag, s'il vous plaît!
$otherDirector = new Director(new Renolt13Builder());

$swagCar = $otherDirector->createSwagEdition();

var_dump([
    'rich_edition' => $myCarRichEdition,
    'swag_edition' => $swagCar,
]);
