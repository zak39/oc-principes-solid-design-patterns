<?php

/**
 * Rien à voir avec le dessign pattern
 * Représente ce que devrait avoir un produit
 */
interface ItemInterface
{
    public function getPrice(): float;

    public function getProductName(): string;
}
