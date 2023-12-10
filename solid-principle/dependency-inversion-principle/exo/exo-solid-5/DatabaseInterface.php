<?php

interface DatabaseInterface
{    
    public function fetchAll() : array;

    public function get(string $email): array;
}
