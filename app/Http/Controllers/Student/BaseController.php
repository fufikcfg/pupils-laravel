<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Services\Student\Service;
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

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
