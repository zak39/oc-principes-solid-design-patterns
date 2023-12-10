<?php

interface EventDataInterface
{
    /**
     * Returns the payload of the event
     *
     * @return array
     */
    public function payload(): array;
}
