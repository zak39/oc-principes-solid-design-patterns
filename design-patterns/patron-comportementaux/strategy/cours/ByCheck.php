<?php

require_once('PaymentMethodInterface.php');
require_once('CartInterface.php');

/**
 * Le ConcreteStrategy N
 */
class ByCheck implements PaymentMethodInterface
{
    public function execute(CartInterface $cart)
    {
        $items = $cart->getContent();
        $prices = array_map(fn ($item) => $item->getPrice(), $items);

        $sum = array_sum($prices);

        print("Je paye par check d'un montant $sum €" . PHP_EOL);
    }
}
