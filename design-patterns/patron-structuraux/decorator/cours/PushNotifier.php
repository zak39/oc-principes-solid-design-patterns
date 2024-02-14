<?php

require_once 'NotifierInterface.php';
require_once 'NotifierDecoratorInterface.php';

final class PushNotifier implements NotifierInterface, NotifierDecoratorInterface
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

        $this->sendPush();
    }

    private function sendPush()
    {
        print('Envoi par push !' . PHP_EOL);
    }
}
