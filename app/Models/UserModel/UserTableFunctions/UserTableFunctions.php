<?php

namespace App\Models\UserModel\UserTableFunctions;

use App\Helpers\Response\Response;
use App\Models\UserModel\UserTableFormatter\UserTableFormatter;
use Illuminate\Http\JsonResponse;

class UserTableFunctions extends UserTableFormatter implements UserTableFunctionsInterface
{
    public static function one(int $id): JsonResponse
    {
        $searchUser = self::find($id);

        if(!$searchUser) {
            return Response::not_found('Пользователь не найден');
        }

        $searchUser->access;

        return Response::success_data($searchUser);
    }
}
