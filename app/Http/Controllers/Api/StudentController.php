<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Student\BaseController;
use App\Http\Requests\StudentsStoreRequest;
use Illuminate\Http\Request;

class StudentController extends BaseController
{
    /**
     * @SWG\Post(
     *     path="/students/create",
     *     summary="Create new student",
     *     tags={"Students"},
     *     @SWG\Response(
     *         response=200,
     *         description="Successful addition",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Students")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="402",
     *         description="Unauthorized user",
     *     ),
     * )
     */
    public function store(StudentsStoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return [
            'message' => 'Successful addition',
            'data' => $data
        ];
    }

    /**
     * @SWG\Post(
     *     path="/students/show",
     *     summary="Show list students by classes id",
     *     tags={"Students"},
     *     @SWG\Response(
     *         response=200,
     *         description="Successful addition",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Students")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="402",
     *         description="Unauthorized user",
     *     ),
     * )
     */
    public function showList(Request $request)
    {
        return $this->service->getList($request->valueElement);
    }

    /**
     * @SWG\Get(
     *     path="/students/destroy/{id}",
     *     summary="Deleted by id",
     *     tags={"Students"},
     *     @SWG\Response(
     *         response=200,
     *         description="{id} - deleted",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Students")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="402",
     *         description="Unauthorized user",
     *     ),
     * )
     */
    public function destroy($id)
    {
        $this->service->destroy($id);

        return sprintf('%d - deleted', $id);
    }

    /**
     * @SWG\Get(
     *     path="/students/report",
     *     summary="Show report",
     *     tags={"Students"},
     *     @SWG\Response(
     *         response=200,
     *         description="Show report",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Students")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="402",
     *         description="Unauthorized user",
     *     ),
     * )
     */
    public function showReport()
    {
        return $this->service->getReport();
    }
}
