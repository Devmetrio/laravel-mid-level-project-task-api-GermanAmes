<?php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;

Route::apiResource('proyectos', ProyectoController::class);
Route::apiResource('tareas', TareaController::class);