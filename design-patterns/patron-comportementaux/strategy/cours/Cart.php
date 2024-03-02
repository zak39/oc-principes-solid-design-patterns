<?php

require_once('ItemInterface.php');
require_once('CartInterface.php');

/**
 * Rien à voir avec le dessign pattern
 * Représente un caddy
 */
class Cart implements CartInterface
{
    private array $items = [];
    
    public function add(ItemInterface $item): void
    {
        $this->items[] = $item;
    }

    public function getContent(): array
    {
        return $this->items;
    }
}
