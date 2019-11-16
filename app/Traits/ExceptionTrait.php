<?php

namespace App\Traits;

use App\Models\Exception;

trait ExceptionTrait
{
    /**
     * Catch general exception and log it to the table
     * @param Exception $exception
     * @param string $message
     * @param int $risk (1:low risk, 5:high risk)
     * @return bool
     */
    public function handleException($exception, string $message = "", string $method, int $risk = 1): bool
    {
        try {
            Exception::create([
                'manual_message' => $message,
                'error_message' => $exception->getMessage(),
                'method' => $method,
                'risk' => $risk,
                'send' => $risk > 3 ? true : false
            ]);
            return true;
        } catch (QueryException $exception) {
            dd($exception->getMessage());
            return false;
        }
    }
}