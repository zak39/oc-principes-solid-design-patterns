<?php

require_once('ItemInterface.php');

/**
 * Rien à voir avec le dessign pattern
 * Représente un produit
 */
class Item implements ItemInterface
{
    public function __construct(
        private string $name,
        private float $price
    )
    {
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getProductName(): string
    {
        return $this->name;
    }
}