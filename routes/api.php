<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogControlleer;
use App\Http\Controllers\TestAPIControlleer;

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
Route::get('get-post',[PostController::class,'getPost']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

