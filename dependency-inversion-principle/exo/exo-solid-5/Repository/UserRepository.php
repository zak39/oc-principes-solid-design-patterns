<?php

require_once 'RepositoryInterface.php';
require_once 'User.php';

class UserRepository implements RepositoryInterface
{
    public function __construct(private DatabaseInterface $database)
    {
    }

    public function getUser(string $userEmail) : User
    {
        $data = $this->database->get($userEmail);
        return new User($data['full_name'], $data['email']);
    }

    public function getUsers() : array
    {
        $users = $this->database->fetchAll();
        $users = array_map(fn($user) => new User($user['full_name'], $user['email']), $users);
        return $users;
    }
}