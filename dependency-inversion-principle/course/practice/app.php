<?php

require 'MySql.php';
require 'UserRepository.php';
require 'RestApiClient.php';

$userMySQLRepository = new UserRepository(new MySql());
$userRestApiRepository = new UserRepository(new RestApiClient());
