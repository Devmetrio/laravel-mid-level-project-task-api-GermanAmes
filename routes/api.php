<?php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;

Route::apiResource('projects', ProyectoController::class);
Route::apiResource('tasks', TareaController::class);