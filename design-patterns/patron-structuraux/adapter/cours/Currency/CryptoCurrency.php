<?php

namespace App\Currency;

interface CryptoCurrency
{
    public function getPriceAsJSON(): array;
}
