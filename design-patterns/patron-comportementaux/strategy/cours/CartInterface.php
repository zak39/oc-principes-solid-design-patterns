<?php

require_once('ItemInterface.php');

/**
 * Rien à voir avec le dessign pattern
 * Représente ce qu'est un caddy ou équivalent
 */
interface CartInterface {
    /**
     * @return Item[]
     */
    public function getContent(): array;

    public function add(ItemInterface $item): void;
}
