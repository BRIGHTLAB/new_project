<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
    // public function index()
    // {
    //     echo 'here';exit;
    //     $students = Student::with('scores', 'classes')->get();
    //     return response()->json($students);
    // }

    public function index()
    {
        return Students::all();
    }

    // $student = Student::where('id','=',1)->get();
    //     $student_scores = $student->scores();

    //     $payload = [];
    //     $payload['student'] = $student;
    //     $payload['scores'] = $student_scores;
    //     return $payload;

    //     $students = Student::with('scores', 'classes')->get();
    //     return response()->json($students);

    public function show($id)
    {
        $student = Students::with('Scores')->findOrFail($id);
        return response()->json($student);
    }
    // public function show($id)
    // {
    //     return Student::find($id);
    // }

    public function store(Request $request)
    {
        $student = Students::create($request->all());
        return response()->json($student, 201);
    }
 
    // public function store(Request $request)
    // {

    //     // echo $validatedData = $request->validate([
            
    //     //     'first_name' => 'required|string|max:255',
    //     //     'last_name' => 'required|string|max:255',
    //     //     'email' => 'required|string|email|max:255|unique:students',
    //     //     'date_of_birth' => 'nullable|date',
    //     // ]);

    //     print_r($request->all());
    //     exit;

    //     $student = Student::create($request->all());
    //     echo 'here check';exit;
    //     return response()->json($student, 201);
    // }



public function update(Request $request, $id)
{
   
    $student = Students::findOrFail($id);
    echo 'here here';exit;
    $student->update($request->all());
   
    return response()->json($student);
    
}


public function destroy($id)
{
    Students::findOrFail($id)->delete();
    return response()->json(null, 204);
}
}



