<?php

use Monetus\Middlewares\AuthMiddleware;
use Monetus\Controllers\ViewController;


$route->get('/', ViewController::class . '@home');
$route->get('/login', ViewController::class . '@login');
$route->get('/dashboard', ViewController::class . '@dashboard', AuthMiddleware::class . '@verify');