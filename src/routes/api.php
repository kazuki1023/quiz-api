<?php

use App\Http\Controllers\Api\V1\QuizController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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
Route::prefix('/v1')->group(function () {
    Route::apiResource('/quiz', QuizController::class);
    Route::get('/', [QuizController::class, 'index']);
});


// Route::middleware(['auth:api', 'role:admin'])->group(function () {
//     Route::prefix('/v1')->group(function () {
//         Route::apiResource('/quiz', QuizController::class);
//         Route::get('/', [QuizController::class, 'index']);
//     });
// });