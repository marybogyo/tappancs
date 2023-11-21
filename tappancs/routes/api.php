<?php

use App\Http\Controllers\TappancsController;
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
Route::get('tappancs', [TappancsController::class, 'index']);
Route::get('tappancs/{id}', [TappancsController::class, 'show']);
Route::put('tappancs/{id}', [TappancsController::class, 'update']);
Route::post('tappancs', [TappancsController::class, 'store']);
Route::delete('tappancs/{id}', [TappancsController::class, 'destroy']);