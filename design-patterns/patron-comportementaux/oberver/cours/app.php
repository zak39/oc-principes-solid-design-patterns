<?php

require_once 'ConcertsPlanner.php';
require_once 'FanRepository.php';

$concertsPlanner = new ConcertsPlanner();

$fans = (new FanRepository())->retrieveFans();

foreach ($fans as $fan) {
    $concertsPlanner->attach($fan);
}

// tous les fans du groupe Tartanpion habitant à Bordeaux
// seront notifiés.
$concertsPlanner->plan(
    'Tartanpion',
    '12 juin 2024',
    'Bordeaux'
);

print("---" . PHP_EOL);

$concertsPlanner->plan(
    'Blink182',
    '18 juillet 2024',
    'Marseille'
);

print("---" . PHP_EOL);

$concertsPlanner->plan(
    'Sum41',
    '1 novembre 2024',
    'Marseille'
);