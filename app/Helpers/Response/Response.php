<?php

namespace App\Helpers\Response;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\MessageBag;

class Response implements ResponseInterface
{
    private const STATUS_SUCCESS = 201;
    private const STATUS_NOT_VALID_DATA = 404;
    private const STATUS_NOT_FOUND = 404;
    private const STATUS_ACCESS_DENIED = 403;
    private const STATUS_INTERNAL_SERVER_ERROR = 500;

    public static function success_data(
        $data,
        string $message = '',
    ): JsonResponse {
        return response()
            ->json([
                'status' => true,
                'message' => $message,
                'data' => $data
            ], self::STATUS_SUCCESS);
    }

    public static function error_data(
        MessageBag $errors,
        string $message = ''
    ): JsonResponse {
        return response()
            ->json([
                'status' => false,
                'message' => $message,
                'data' => $errors
            ], self::STATUS_NOT_VALID_DATA);
    }

    public static function internal_error(): JsonResponse {
        return response()
            ->setStatusCode()
            ->json([
                'status' => false,
                'message' => 'Internal Server Error'
            ], self::STATUS_INTERNAL_SERVER_ERROR);
    }

    public static function access_denied(
        string $message = ''
    ): JsonResponse {
        return response()
            ->json([
                'status' => false,
                'message' => $message,
            ], self::STATUS_ACCESS_DENIED);
    }

    public static function not_found(
        string $message = ''
    ): JsonResponse {
        return response()
            ->json([
                'status' => false,
                'message' => $message
            ], self::STATUS_NOT_FOUND);
    }

    public static function success_login(
        string $jwt = '',
        string $message = ''
    ): JsonResponse {
        $cookie = Cookie::make('token', $jwt, 60 * 24 * 5);

        return response()
            ->json([
                'status' => false,
                'message' => $message,
            ], self::STATUS_NOT_FOUND)
            ->cookie($cookie);
    }

    public static function success_logout(
        string $message = ''
    ): JsonResponse {
        $cookie = Cookie::make('token', null);

        return response()
            ->json([
                'status' => false,
                'message' => $message
            ], self::STATUS_NOT_FOUND)
            ->cookie($cookie);
    }
}
