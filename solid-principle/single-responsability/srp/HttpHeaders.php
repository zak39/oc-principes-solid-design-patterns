<?php

// src/HttpHeaders.php
class HttpHeaders
{
    public static function redirect(string $url): void
    {
        header('Location: ' . $url);
        return;
    }
}
