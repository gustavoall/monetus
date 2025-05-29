<?php

namespace Monetus\Helpers;

class View 
{
    public static function render(string $name) 
    {
        include dirname(__DIR__) . '/Views/header.php';
        include dirname(__DIR__) . "/Views/{$name}.php";
        include dirname(__DIR__) . '/Views/footer.php';
    }

    public function add(string $name) 
    {
        include dirnama(__DIR__) . "/Views/{$name}.php";
    }
}