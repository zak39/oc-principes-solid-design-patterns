<?php

require_once('CartInterface.php');

/**
 * La strategy interface du design pattern
 */
interface PaymentMethodInterface
{
    public function execute(CartInterface $cart);
}
