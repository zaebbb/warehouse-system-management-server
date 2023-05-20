<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest\UserRequest\UserRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

interface UserControllerInterface
{
    public function all(): JsonResponse;
    public function one(int $id): JsonResponse;
    public function add(UserRequest $request): JsonResponse;
    public function update(UserRequest $request, int $id): JsonResponse;
    public function delete(int $id): JsonResponse;
}
