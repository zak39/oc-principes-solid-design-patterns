<?php

require_once 'NullNotifier.php';
require_once 'EmailNotifier.php';
require_once 'PushNotifier.php';
require_once 'SMSNotifier.php';
require_once 'Client.php';

// Les 3 en même temps
$fullNotifier = new SMSNotifier(new EmailNotifier(new PushNotifier()));

// Seulement SMS et Push ? Facile!
$mobileNotifier = new PushNotifier(new SMSNotifier());

// Aucune notification ?
$nullNotifier = new NullNotifier();

$clientFull = new Client($fullNotifier);
$clientMobile = new Client($mobileNotifier);
$clientNull = new Client($nullNotifier);

print('--- Client Full ---' . PHP_EOL);
$clientFull->notify();
print('--- Client Mobile ---' . PHP_EOL);
$clientMobile->notify();
print('--- Client Null ---' . PHP_EOL);
$clientNull->notify();