<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller {
    public function getAllStudents() {
       $data = Student::all();

       return response()->json($data, 200);
    }

    public function showAll() {
        $data = Student::all();

        return view('overview', ['students' => $data]);
    }

    public function showSingle($id) {
        $student = Student::findOrfail($id);

        return response()->json($student, 200);
    }

    public function createSingle(Request $request) {
        $payload = [
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName')
        ];

        $student = Student::create($payload);

        return response()->json($student, 201);
    }

    public function deleteSingle($id) {
        $student = Student::findOrFail($id);
        $student->delete();

        return response()->json($student, 200);
    }
}
