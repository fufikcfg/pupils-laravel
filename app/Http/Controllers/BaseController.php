<?php

namespace App\Http\Controllers;

use App\Services\Student\Service;
use App\Services\ApiStudent\Service as Api;

/**
 * @SWG\Swagger(
 *   schemes={"http"},
 *   host="localhost:8000",
 *   basePath="/",
 *   @SWG\Info(
 *     title="Students API",
 *     version="1.0.0"
 *   )
 * )
 */
class BaseController extends Controller
{
    protected $service;
    protected $api;

    public function __construct(Service $service, Api $api)
    {
        $this->service = $service;
        $this->api = $api;
    }
}
