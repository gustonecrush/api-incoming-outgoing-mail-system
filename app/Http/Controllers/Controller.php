<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

<<<<<<< HEAD
    protected function sendResponse($result, $message, $code = 200)
    {
        $response = [
            "success" => true,
            "status_code" => $code,
            "message" => $message,
            "data" => $result,
        ];

        return response()->json($response, $code);
=======
    protected function sendResponse($result, $message, $total=0)
    {
        $response = [
            "success" => true,
            "status_code" => 200,
            "message" => $message,
            "total" => $total,
            "data" => $result,
        ];

        return response()->json($response, 200);
>>>>>>> 37005da (reupload sisuka)
    }

    protected function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            "success" => false,
            "status_code" => $code,
            "message" => $error,
        ];

        if (!empty($errorMessages)) {
            $response["errors"] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}
