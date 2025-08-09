<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Rotas de Autenticação sem proteção (para registrar e fazer login)
Route::get('/teste', function () {
    return response()->json([
        'message' => 'Comunicação bem-sucedida! 😎',
        'status' => 'ok'
    ]);
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/ranking', [RankingController::class, 'index']);

// Rotas protegidas pelo middleware do Sanctum (precisam de um token válido)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/tasks', [TaskController::class, 'index']);
    Route::post('/tasks', [TaskController::class, 'store']);
    Route::put('/tasks/{tasks}', [TaskController::class, 'update']);
    Route::delete('/tasks/{tasks}', [TaskController::class, 'destroy']);
    Route::delete('tasks', [TaskController::class, 'destroy_all']);
});
