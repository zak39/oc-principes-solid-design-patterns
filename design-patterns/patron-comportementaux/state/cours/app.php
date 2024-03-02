<?php

require_once('Mondozor.php');
require_once('Gobou.php');
require_once('Sleepy.php');
require_once('Normal.php');
require_once('Crazy.php');

$mondozor = new Mondozor(new Normal());
$gobou = new Gobou(new Normal());

$mondozor->attack($gobou);

$gobou->changeState(new Crazy());
$gobou->move();

$gobou->attack($mondozor);

// attendre quelques temps
$gobou->changeState(new Normal());
$gobou->attack($mondozor);
