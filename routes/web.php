<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// QUESTION: What is a route?
// QUESTION: Why do we use a route and where does it fit in the MVC model?
// QUESTION: Where are we using it in our code?

Route::get('/', function () {
    return view('welcome');
});

Route::get('students', [StudentController::class, 'getAllStudents']);
Route::get('overview', [StudentController::class, 'showAllStudents']);
