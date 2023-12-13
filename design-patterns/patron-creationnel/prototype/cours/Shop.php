<?php

require_once 'Theme.php';

class Shop
{
    private Theme $theme;

    public function getTheme()
    {
        return $this->theme;
    }

    public function setTheme(Theme $theme): void
    {
        $this->theme = $theme;
    }

    public function __clone()
    {
        /**
         * Maintenant qu'il est différent
         * on pourra mettre à jour le theme
         * seulement sur la copie.
         */
        $this->theme = clone $this->theme;
        $this->theme->setThemeName('Copy: ' . $this->theme->getThemeName());
    }
}
