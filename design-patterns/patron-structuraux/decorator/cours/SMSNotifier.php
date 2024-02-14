<?php

require_once 'NotifierInterface.php';
require_once 'NotifierDecoratorInterface.php';

final class SMSNotifier implements NotifierInterface, NotifierDecoratorInterface
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

        $this->sendSMS();
    }

    private function sendSMS()
    {
        print('Envoi par sms !' . PHP_EOL);
    }
}