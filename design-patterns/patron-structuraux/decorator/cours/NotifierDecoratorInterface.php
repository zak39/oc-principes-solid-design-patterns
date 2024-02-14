<?php

/**
 * Interface pour le decorator qui est identique l'interface du component.
 * Cette interface possède les mêmes fonctions que l'interface du component si on
 * souhaite ne pas rendre public l'interface.
 */
interface NotifierDecoratorInterface
{
    public function notify();
}
