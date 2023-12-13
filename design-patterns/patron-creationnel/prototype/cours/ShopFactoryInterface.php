<?php

require_once 'Shop.php';
require_once 'Theme.php';

interface ShopFactoryInterface
{
    public function createShop(): Shop;
}
