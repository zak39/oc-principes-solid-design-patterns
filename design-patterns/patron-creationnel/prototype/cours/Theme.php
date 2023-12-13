<?php

class Theme
{
    public function __construct(private string $themename = '')
    {
    }

    public function getThemeName(): string
    {
        return $this->themename;
    }

    public function setThemeName(string $themename): void
    {
        $this->themename = $themename;
    }
}
