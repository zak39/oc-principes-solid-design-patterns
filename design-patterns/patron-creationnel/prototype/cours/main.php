<?php

require_once 'ShopCloner.php';
require_once 'ShopFactory.php';
require_once 'Theme.php';

$oldTheme = new Theme('old-theme');
$shop = (new ShopFactory)->createShop(); // beaucoup d'opérations
$shop->setTheme($oldTheme);

$shopCloner = new ShopCloner();
$theme = new Theme('modern-theme'); // par exemple

$newShop = $shopCloner->cloneWithTheme($shop, $theme);

var_dump($newShop->getTheme()->getThemeName());

var_dump(
    // false, les thèmes des deux magasins
    // ne sont pas les mêmes.
    $shop->getTheme() === $newShop->getTheme()
);