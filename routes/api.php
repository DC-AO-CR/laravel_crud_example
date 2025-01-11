<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

// QUESTION: What does each route do in this API?
// QUESTION: Why do we have different kinds of routes in our API?
// QUESTION: How do we call each route of this API when we're running the webapp?

Route::get('/students', [StudentController::class, 'showAll']);

Route::get('/students/{id}', [StudentController::class, 'showSingle']);

Route::post('/students', [StudentController::class, 'createSingle']);

Route::delete('/students/{id}', [StudentController::class, 'deleteSingle']);

Route::put('/students/{id}', [StudentController::class, 'updateSingle']);