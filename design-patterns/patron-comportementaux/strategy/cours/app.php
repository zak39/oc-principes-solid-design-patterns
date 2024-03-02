<?php

/**
 * Le client qui utilise le Context et les ConcreteStrategy (voir diagramme UML)
 */


require_once 'ByCheck.php';
require_once 'ByPaypal.php';
require_once 'Cart.php';
require_once 'Customer.php';
require_once 'Item.php';

$customer = new Customer();

// Le client choisi le produit qu'il veut acheter

// Créer des produits
$laitAlmond = new Item('Lait d\'amande', 2.4);
$poisChiches = new Item('Pois chiches', 1.32);
$fromage = new Item('Jay and Joy - Josephine', 5.3);

$cart = new Cart();

$cart->add($laitAlmond);
$cart->add($poisChiches);
$cart->add($fromage);

// Dans le formulaire, le visiteur choisit l'option Paypal

$customer->setPaymentStrategy(new ByPaypal());
// $customer->setPaymentStrategy(new ByCheck());

// On procède à l'acte d'achat !
$customer->buy($cart);
