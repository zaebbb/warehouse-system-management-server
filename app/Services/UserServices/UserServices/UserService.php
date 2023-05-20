<?php

namespace App\Services\UserServices\UserServices;

use App\Helpers\Response\Response;
use App\Http\Requests\UserRequest\UserRequest\UserRequest;
use App\Models\UserModel\UserTable;
use Illuminate\Http\JsonResponse;

class UserService implements UserServiceInterface
{
    public function all(): JsonResponse
    {
        return Response::success_data(UserTable::all());
    }

    public function one(int $id): JsonResponse
    {
        return UserTable::one($id);
    }

    public function add(UserRequest $request): JsonResponse
    {
        // TODO: Implement add() method.
    }

    public function update(UserRequest $request, int $id): JsonResponse
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id): JsonResponse
    {
        // TODO: Implement delete() method.
    }
}
