<?php

namespace App\Currency;

/**
 * Retourne la valeur de la crypto monnaie
 * en équivalent Bitcoin au format JSON.
 */
interface CryptoValueExporterJson
{
    public function getPriceAsJSON(): array;
}
