<?php

namespace App\Responses;

use Illuminate\Http\JsonResponse;

class ApiJsonResponse extends JsonResponse
{
    public function __construct($content = '', int $status = 200, array $headers = [])
    {
        parent::__construct($content, $status, $headers);
    }
}
