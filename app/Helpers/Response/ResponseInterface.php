<?php

namespace App\Helpers\Response;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\MessageBag;

interface ResponseInterface
{
    public static function success_data(
        $data,
        string $message
    ): JsonResponse;

    public static function success_login(
        string $jwt,
        string $message
    ): JsonResponse;

    public static function error_data(
        MessageBag $errors,
        string $message
    ): JsonResponse;

    public static function access_denied(string $message): JsonResponse;
    public static function not_found(string $message): JsonResponse;
    public static function internal_error(): JsonResponse;
    public static function success_logout(string $message): JsonResponse;
}
