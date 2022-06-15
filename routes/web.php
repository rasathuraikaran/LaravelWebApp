<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class,'index']);
Route::post('/posts',[PostController::class,'store']);

Route::get('/posts/{post}/edit',[PostController::class,'edit']);
Route::put('/posts/{post}',[PostController::class,'update']);
Route::get('/posts/create',[PostController::class,'create']);
Route::delete('/posts/{post}',[PostController::class,'destroy']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

Route::resource('user',UserController::class);
Route::resource('role',RoleController::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


