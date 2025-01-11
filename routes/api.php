<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'showAll']);

Route::get('/students/{id}', [StudentController::class, 'showSingle']);

Route::post('/students', [StudentController::class, 'createSingle']);

Route::delete('/students/{id}', [StudentController::class, 'deleteSingle']);