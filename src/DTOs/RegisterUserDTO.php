<?php

namespace Monetus\DTOs;

use Modularis\Response;

class RegisterUserDTO extends DTO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password
    ) {}

    public static function validate(array | object $data)
    {
        self::required('name', $data->name);
        self::required('email', $data->email);
        self::isEmail('Email', $data->email);
        self::required('password', $data->password);
        self::obstruct('super_user', $data->super_user);
    }
}