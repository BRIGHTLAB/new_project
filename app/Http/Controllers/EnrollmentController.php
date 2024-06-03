<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollments;
class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollments::with('students', 'classes')->get();
        return response()->json($enrollments);
    }

    public function show($id)
    {
        $enrollment = Enrollments::with('students', 'classes')->findOrFail($id);
        return response()->json($enrollment);
    }

    public function store(Request $request)
    {
        $enrollment = Enrollments::create($request->all());
        return response()->json($enrollment, 201);
    }

    public function update(Request $request, $id)
    {
        $enrollment = Enrollments::findOrFail($id);
        $enrollment->update($request->all());
        return response()->json($enrollment);
    }

    public function destroy($id)
    {
        Enrollments::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
