<?php

interface EventActionnableInterface
{
    /**
     * Returns the list of available actions
     *
     * @return array
     */
    public function action(): array;

}