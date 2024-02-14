<?php

require_once 'NotifierInterface.php';

class Client
{
    public function __construct(private NotifierInterface $notifier)
    {
    }

    public function notify()
    {
        return $this->notifier->notify();
    }
}