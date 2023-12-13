<?php

require_once 'Transport.php';

class Truck implements Transport
{
    /**
     * Chaque type de transport a ses spécificités de livraison
     */
    public function deliverOrder()
    {
        //...
        return 'délivrer par camion';
    }

    // et toutes les autres méthodes utiles à cet objet !
}