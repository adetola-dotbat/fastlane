<?php
namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

trait ApiResponse
{
    /**
     * @param array $data
     * @param string $message
     * @param int $statusCode
     * @return JsonResponse
     */
    public function onSuccessResponse(string $status="success", array $data, string $message="", int $statusCode=Response::HTTP_OK):JsonResponse
    {
        return response()->json([
                'status' => $status,
                'data' => $data,
                'message' => $message,
            ], $statusCode
        );
    }


    /**
     * @param string $message
     * @param $statusCode
     * @return JsonResponse
     */
    public function onFailedResponse(string $status="failed", string $message = "", int $statusCode = Response::HTTP_BAD_REQUEST):JsonResponse
    {
        return response()->json([
            'status' => $status,
            'message'=>$message,
        ], $statusCode);
    }
}
