<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    return 'Maassalam';
});

Route::get('/questions', [QuestionController::class, 'index']);
Route::post('/question/add', [QuestionController::class, 'store']);

Route::get('/students', [StudentController::class, 'index']);
Route::post('/student/add', [StudentController::class, 'store']);

Route::get('/users', [UserController::class, 'index']);