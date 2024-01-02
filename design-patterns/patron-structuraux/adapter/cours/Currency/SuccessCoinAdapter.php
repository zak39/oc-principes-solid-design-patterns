<?php

namespace App\Currency;

use App\Currency\SuccessCoin;
use App\Currency\CryptoValueExporterJson;
use SimpleXMLElement;

class SuccessCoinAdapter implements CryptoValueExporterJson
{
    public function __construct(private SuccessCoin $coin)
    {
    }

    public function getPriceAsJSON(): array
    {
        $resultInXML = $this->coin->export();
        // fonction de transformation à créer...
        $json = $this->convertXMLToJson($resultInXML);
        return json_decode($json, true);
    }

    private function convertXMLToJson(SimpleXMLElement $xml): string
    {
        $json = json_encode($xml);
        return $json;
    }
}
