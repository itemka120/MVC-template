<?php
namespace app\Controller;
class Errors
{
    public function show404(): bool
    {
        http_response_code(404);
        exit();
    }
}