<?php 
Route::get('users/', [\App\Http\Controllers\UserController::class, 'index']);
Route::get('users/{users}', [\App\Http\Controllers\UserController::class, 'show']);
Route::post('users/', [\App\Http\Controllers\UserController::class, 'store']);
Route::patch('users/{users}', [\App\Http\Controllers\UserController::class, 'update']);
Route::delete('users/{users}', [\App\Http\Controllers\UserController::class, 'destroy']);