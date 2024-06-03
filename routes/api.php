<?php

use App\Http\Controllers\Api\AttendeeController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\EnrollmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login',[AuthController::class, 'login']);
Route::post('/logout',[AuthController::class, 'logout']);

Route::apiResource('students', StudentController::class);
Route::apiResource('classes', ClassController::class);
Route::apiResource('scores', ScoreController::class);
Route::apiResource('enrollments', EnrollmentController::class);
// Route::get('students', [ StudentController::class, 'index']);
// Route::post('students', [ StudentController::class, 'store']);
// Route::get('classes/{id}', [ StudentController::class, 'show']);
// Route::post('classes', [ StudentController::class, 'store']);
