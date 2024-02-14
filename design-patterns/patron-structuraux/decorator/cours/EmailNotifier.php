<?php

require_once 'NotifierInterface.php';
require_once 'NotifierDecoratorInterface.php';

final class EmailNotifier implements NotifierInterface, NotifierDecoratorInterface
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

        $this->sendEmail();
    }

    private function sendEmail()
    {
        print('Envoi par email !' . PHP_EOL);
    }
}
