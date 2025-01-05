<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

// QUESTION: What is a controller?
// QUESTION: Why do we use a controller and where does it fit in the MVC model?
// QUESTION: Where are we using it in our code?

// You can generate this model by using the command: './vendor/bin/sail artisan make:controller StudentController'.

class StudentController extends Controller
{
    public function getAllStudents() {
       $data = Student::all();

       return response()->json($data, 200);
    }

    public function showAllStudents() {
        $data = Student::all();

        return view('overview', ['students' => $data]);
    }
}
