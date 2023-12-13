<?php

require_once 'Config.php';

class Database
{
    private static ?self $instance = null;
    
    /**
     * Permet de faire des requêtes SQL à l'aide de PDO
     * @doc https://www.php.net/manual/intro.pdo.php
     */
    protected $connection;
    
    private function __construct()
    {
        $this->connection = new \PDO(Config::PDO_DSN, Config::USER, Config::PASSWORD);
    }

    // INTERDIT l'appel à l'opérateur "clone"
    private function __clone() {}

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
