<?php
namespace app\Controllers;

class ErrorController
{
    public function show404(): bool
    {
        return http_response_code(404);
    }
}