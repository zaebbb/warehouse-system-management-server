<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest\UserRequest\UserRequest;
use App\Services\UserServices\UserServices\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @property UserService $user_service
 */
class UserController extends Controller implements UserControllerInterface
{
    public function __construct()
    {
        $this->user_service = new UserService();
    }

    public function all(): JsonResponse
    {
        return $this->user_service->all();
    }

    public function one(int $id): JsonResponse
    {
        return $this->user_service->one($id);
    }

    public function add(UserRequest $request): JsonResponse
    {

    }

    public function update(
        UserRequest $request,
        int $id
    ): JsonResponse
    {

    }

    public function delete(int $id): JsonResponse
    {

    }
}
