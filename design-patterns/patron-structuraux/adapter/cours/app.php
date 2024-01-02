<?php

require __DIR__ . '/vendor/autoload.php';

use App\Currency\Bitcoin;
use App\Currency\SuccessCoin;
use App\Currency\SuccessCoinAdapter;

$bitcoin = new Bitcoin();
$resBitcoin = $bitcoin->getPriceAsJSON();

var_dump($resBitcoin);

$coin = new SuccessCoin();
$coinAdapter = new SuccessCoinAdapter($coin);

$resAdapter = $coinAdapter->getPriceAsJSON();

var_dump($resAdapter);
