<?php

require_once 'Shop.php';
require_once 'ShopFactoryInterface.php';
require_once 'Theme.php';

class ShopFactory implements ShopFactoryInterface
{
    public function createShop(): Shop
    {
        return new Shop();
    }
}
