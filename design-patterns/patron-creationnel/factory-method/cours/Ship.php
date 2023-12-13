<?php

require_once 'Transport.php';

class Ship implements Transport
{
    /**
     * Chaque type de transport a ses spécificités de livraison
     */
    public function deliverOrder()
    {
        //...
        return 'délivrer par bâteau';
    }

    // et toutes les autres méthodes utiles à cet objet !
}