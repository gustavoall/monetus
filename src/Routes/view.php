<?php

use Monetus\Guards\AuthGuard;
use Monetus\Controllers\ViewController;


$route->get('/', ViewController::class . '@home');
$route->get('/login', ViewController::class . '@login');

$route->group('/dashboard', AuthGuard::class . '@verify')
    ->init()
    ->get('', ViewController::class . '@dashboard')
    ->get('/users', ViewController::class . '@users')
    ->endGroup();
