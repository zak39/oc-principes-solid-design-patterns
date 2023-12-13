<?php

require_once 'Shop.php';
require_once 'ShopClonable.php';
require_once 'Theme.php';

class ShopCloner implements ShopClonable
{
    public function cloneWithTheme(Shop $shop, Theme $theme): Shop
    {
        $newShop = clone $shop;
        $newShop->setTheme($theme);

        return $newShop;
    }
}
