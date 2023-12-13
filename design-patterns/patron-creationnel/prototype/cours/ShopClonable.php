<?php

require_once 'Shop.php';
require_once 'Theme.php';

interface ShopClonable
{
    public function cloneWithTheme(Shop $shop, Theme $theme): Shop;
}
