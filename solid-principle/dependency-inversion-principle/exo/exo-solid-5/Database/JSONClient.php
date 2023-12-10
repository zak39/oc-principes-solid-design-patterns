<?php

require_once 'DatabaseInterface.php';

class JSONClient implements DatabaseInterface
{
    public function fetchAll() : array
    {
        $fileContent = file_get_contents(__DIR__ . '/../data/users.json');

        return json_decode($fileContent, true);
    }

    public function get(string $email): array
    {
        $fileContent = file_get_contents(__DIR__ . '/../data/users.json');
        $users = json_decode($fileContent, true);
        $user = array_values(array_filter($users, fn($user) => $user['email'] === $email));
        return $user[0];
    }
}
