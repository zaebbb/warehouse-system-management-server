<?php

use App\Http\Controllers\UserControllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/system')->group(function() {
    Route::prefix('/users')->group(function() {
        Route::get('/all', [UserController::class, 'all']);
        Route::get('/view/{id}', [UserController::class, 'one']);
    });
});

Route::get('/users', function(){
    $oneUser = \App\Models\UserModel\UserTable::find(1);
    $oneUser->access;

    return response()
        ->json($oneUser);
});
