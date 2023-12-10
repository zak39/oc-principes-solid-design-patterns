<?php

use DatabaseInterface;
use User;

class UserRepository
{
    public function __construct(private DatabaseInterface $database)
    {
    }

    public function getAll()
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
