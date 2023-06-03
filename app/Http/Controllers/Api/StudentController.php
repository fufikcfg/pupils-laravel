<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Requests\StudentsStoreRequest;
use App\Http\Resources\StudentResource;
use App\Models\Students;
use App\Responses\ApiJsonResponse;
use Illuminate\Http\Request;

class StudentController extends BaseController
{
    /**
     * @SWG\Post(
     *     path="/students/create",
     *     summary="Create new student",
     *     tags={"Students"},
     *     @SWG\Responses(
     *         response=200,
     *         description="Successful addition",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Students")
     *         ),
     *     ),
     *     @SWG\Responses(
     *         response="402",
     *         description="Unauthorized user",
     *     ),
     * )
     */
    public function store(StudentsStoreRequest $request)
    {
        $data = $request->validated();

        $this->api->storeStudent($data);

        return new StudentResource($data);
    }

    /**
     * @SWG\Post(
     *     path="/students/show",
     *     summary="Show list students by classes id",
     *     tags={"Students"},
     *     @SWG\Responses(
     *         response=200,
     *         description="Successful addition",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Students")
     *         ),
     *     ),
     *     @SWG\Responses(
     *         response="402",
     *         description="Unauthorized user",
     *     ),
     * )
     */
    public function showList(Request $request)
    {
        return $this->api->getList($request->valueElement);
    }

    /**
     * @SWG\Get(
     *     path="/students/destroy/{id}",
     *     summary="Deleted by id",
     *     tags={"Students"},
     *     @SWG\Responses(
     *         response=200,
     *         description="{id} - deleted",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Students")
     *         ),
     *     ),
     *     @SWG\Responses(
     *         response="402",
     *         description="Unauthorized user",
     *     ),
     * )
     */
    public function destroy($id)
    {
        return $this->api->destroy($id);
    }

    /**
     * @SWG\Get(
     *     path="/students/report",
     *     summary="Show report",
     *     tags={"Students"},
     *     @SWG\Responses(
     *         response=200,
     *         description="Show report",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Students")
     *         ),
     *     ),
     *     @SWG\Responses(
     *         response="402",
     *         description="Unauthorized user",
     *     ),
     * )
     */
    public function showReport()
    {
        return $this->api->getReport();
    }
}
