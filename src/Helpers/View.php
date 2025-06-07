<?php

namespace Monetus\Helpers;

class View 
{
    public static function render(string $name) 
    {
        $view = new View();
        include dirname(__DIR__) . '/Views/Layouts/header.php';
        include dirname(__DIR__) . "/Views/{$name}.php";
        include dirname(__DIR__) . '/Views/Layouts/footer.php';
    }

    public function add(string $name) 
    {
        include dirname(__DIR__) . "/Views/{$name}.php";
    }
}