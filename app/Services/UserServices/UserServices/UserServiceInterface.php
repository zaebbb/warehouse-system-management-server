<?php

namespace App\Services\UserServices\UserServices;

use App\Http\Requests\UserRequest\UserRequest\UserRequest;
use Illuminate\Http\JsonResponse;

interface UserServiceInterface
{
    public function all(): JsonResponse;
    public function one(int $id): JsonResponse;
    public function add(UserRequest $request): JsonResponse;
    public function update(UserRequest $request, int $id): JsonResponse;
    public function delete(int $id): JsonResponse;
}
