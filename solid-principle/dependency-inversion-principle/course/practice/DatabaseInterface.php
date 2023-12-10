<?php

interface DatabaseInterface
{
    public function execute($query): self;

    public function fetchAll(): array;
}
