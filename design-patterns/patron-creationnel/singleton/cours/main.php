<?php

require_once 'Database.php';

$connection = Database::getInstance()->getConnection();
$statement = $connection->prepare('SELECT * FROM users');
$users = $statement->execute();
