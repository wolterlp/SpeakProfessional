<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//Rutas no autenticadas
Route::get('/', [DashboardController::class, 'index']);


//Rutas autenticadas
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/lessons', LessonController::class);
    Route::resource('/role', RoleController::class);
});

