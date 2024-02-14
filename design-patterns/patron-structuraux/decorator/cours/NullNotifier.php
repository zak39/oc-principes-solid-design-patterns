<?php

require_once 'NotifierInterface.php';
require_once 'NotifierDecoratorInterface.php';

final class NullNotifier implements NotifierInterface, NotifierDecoratorInterface
{
    public function __construct(
        private ?NotifierInterface $component = null
    )
    {
    }

    public function notify()
    {
        if (!is_null($this->component))
        {
            $this->component->notify();
        }

        $this->sendNull();
    }

    private function sendNull()
    {
        print('Envoi par Null !' . PHP_EOL);
    }
}
