<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ResponseTrait
{
    use ResponseCode;


    /**
     * return http success response
     * @param $data
     * @param string $message
     * @param array $extra
     * @param int $code
     * @return JsonResponse
     */
    public function success($data, string $message = "", array $extra = [], int $code = 200): JsonResponse
    {
        return response()->json([
            'data' => $data,
            'message' => $this->getMessage($code, $message),
            'extra' => $extra
        ], $code);
    }


    /**
     * return http error response
     * @param string $message
     * @param array $extra
     * @param int $code
     * @return JsonResponse
     */
    public function error(string $message = "", array $extra = [], int $code = 400): JsonResponse
    {
        return response()->json([
            'message' => $this->getMessage($code, $message),
            'extra' => $extra
        ], $code);
    }

    /**
     * return http unauthorized response
     * @param string $message
     * @param int $code
     * @return JsonResponse
     */
    public function unauthorized(string $message = "", int $code = 403): JsonResponse
    {
        return response()->json([
            'message' => $this->getMessage($code, $message),
        ], $code);
    }


    /**
     * Make http dynamic message
     * @param int $code
     * @param string $message
     * @return string
     */
    private function getMessage(int $code, string $message = ""): string
    {
        return !empty($message) ? $message: self::$statusTexts[$code];
    }

}