<?php

namespace App\Models\UserModel\UserTableFunctions;

use Illuminate\Http\JsonResponse;

interface UserTableFunctionsInterface {
    public static function one(int $id): JsonResponse;
}
