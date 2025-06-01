<?php

session_set_cookie_params([
    'lifetime' => 0,
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);

session_start();
session_regenerate_id(true);

$dotenv = Dotenv\Dotenv::createImmutable(dirname(dirname(__DIR__)))->load();

define('DATABASE_SERVER', $_ENV['DATABASE_SERVER']);
define('DATABASE_TYPE', $_ENV['DATABASE_TYPE']);
define('DATABASE_NAME', $_ENV['DATABASE_NAME']);
define('DATABASE_USER', $_ENV['DATABASE_USER']);
define('DATABASE_PASSWORD', $_ENV['DATABASE_PASSWORD']);
define('SECRET', $_ENV['SCRET']);