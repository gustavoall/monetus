<?php

namespace Monetus\DTOs;

use Modularis\Response;

class DTO 
{
    public static function required(string $input_name, string | null $input_value)
    {
        if (
            $input_value === null ||
            $input_value === ''
            ) {
                self::blockMessage(400, "{$input_name} is required!");
            }
    }

    public static function IsEmail(string $name, string | null $email) 
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            self::blockMessage(400, "{$name} is not valid email!");
        }
    }

    public static function obstruct(string $input_name, string | null $input_value) 
    {
        if (isset($input_value) && $input_value !== null) {
            self::blockMessage(400, "{$input_name} is not valid!");
        }
    }

    public static function blockMessage(
        int $status, 
        string $menssage
        
        ) {
        $response = new Response();
                $response->status(400);
                $response->json([
                    "status" => 400,
                    "menssage" => $menssage
                ]);
                exit;
    }
}