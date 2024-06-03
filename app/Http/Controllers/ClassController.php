<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;

class ClassController extends Controller
{
    public function index()
    {
        $classes = Classes::with('students')->get();
        return response()->json($classes);
    }

    public function show($id)
    {
        $class = Classes::with('scores', 'students')->findOrFail($id);
        return response()->json($class);
    }

    public function store(Request $request)
    {
        $class = Classes::create($request->all());
        return response()->json($class, 201);
    }

    public function update(Request $request, $id)
    {
        $class = Classes::findOrFail($id);
        $class->update($request->all());
        return response()->json($class);
    }

    public function destroy($id)
    {
        Classes::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
