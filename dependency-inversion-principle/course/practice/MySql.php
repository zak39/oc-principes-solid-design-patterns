<?php

use DatabaseInterface;

class MySql implements DatabaseInterface
{

    public function execute($query)
    {
        // some code...
    }

    public function fetchAll()
    {
        $users = [];
        $results = $this->database
            ->execute('SELECT * FROM users')
            ->fetchAll();

        foreach($results as $result)
        {
            $users[] = new User($result);
        }

        return $users;
    }
}
