<?php

namespace Monetus\Helpers;

class View 
{
    public static function render(string $name, array $data = []) 
    {
        self::setData($data);
        VIEW->draw('layouts/header');
        VIEW->draw("$name");
        VIEW->draw('layouts/footer');
    }

    public static function setData(array $data) 
    {
        foreach ($data as $key => $value) {
            VIEW->assign($key, $value);
        }
    }
}