<?php

require_once('CartInterface.php');
require_once('PaymentMethodInterface.php');

/**
 * Le context du design pattern
 */
final class Customer
{
    private PaymentMethodInterface $paymentMethod;

    public function setPaymentStrategy(PaymentMethodInterface $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Effectue le paiement de la commande
     */
    public function buy(CartInterface $cart)
    {
        return $this->paymentMethod->execute($cart);
    }
}
