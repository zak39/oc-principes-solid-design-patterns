<?php

namespace App\Currency;

use SimpleXMLElement;

class SuccessCoin
{
    /**
     * Retourne la valeur du SuccessCoin
     * en équivalent Bitcoin au format XML.
     */
    public function export(): SimpleXMLElement
    {
        try {
            $xmlFormat = <<<XML
                <root>
                <title>XIII</title>
                <author>Jean Van Hamme</author>
                <volume>1</volume>
                <date_created>1989</date_created>
                <price_full>12SuccessCoin</price_full>
                <price>12</price>
                <devise>SuccessCoin</devise>
                </root>
            XML;
            
            return simplexml_load_string($xmlFormat);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }
}
