<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
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

// Authentication
Route::post('/auth/signup', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'createToken']);

// User
Route::get('/user/{id}/items', [ItemController::class, 'getItemsOfUser']);

// Items
Route::resource('items', ItemController::class)->only([
    'index', 'show'
]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
