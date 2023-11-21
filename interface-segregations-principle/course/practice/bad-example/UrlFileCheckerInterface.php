<?php

/**
 * Mauvaise interface qui est trop générique
 * et les 2 fonctions n'ont aucun rapport entre l'une et l'autre.
 * Si on utilise cette interface alors qu'on utilise
 * nginx ou frankenphp, alors on aura une fonction inutile.
 */
interface UrlFileCheckerInterface
{
    /**
     * Check if .htaccess file for Front Office is writable.
     */
    public function isHtaccessFileWritable(): bool;

    /**
     * Check if robots.txt file for Front Office is writable.
     */
    public function isRobotsFileWritable(): bool;
}
