<?php

namespace App\Currency;

use App\Currency\CryptoCurrency;

class Bitcoin implements CryptoCurrency
{
    public function getPriceAsJSON(): array
    {
        $jsonStringify = <<<JSON
            {
                "title": "XIII",
                "author": "Jean Van Hamme",
                "volume": 1,
                "date_created": 1989,
                "price_full": "4BitCoin",
                "price": 4,
                "devise": "BitCoin"
            }
        JSON;

        $data = json_decode($jsonStringify, true);
        return $data;
    }
}
