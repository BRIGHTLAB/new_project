<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Scores;

class ScoreController extends Controller
{
    public function index()
    {
        $scores = Scores::with('Students', 'Classes')->get();
        return response()->json($scores);

        // DB Query Builder

        // If i send query param 1, i want the data to be fetched from the first version

        // If qpraram is 2, then the 2nd version

    }

    public function show($id)
    {
        $score = Scores::with('students', 'classes')->findOrFail($id);
        return response()->json($score);
    }

    public function store(Request $request)
    {

        // qparam is actually a field that i pass in the body

        
        $score = Scores::create($request->all());
        return response()->json($score, 201);
    }

    public function update(Request $request, $id)
    {
        $score = Scores::findOrFail($id);
        $score->update($request->all());
        return response()->json($score);
    }

    public function destroy($id)
    {
        Scores::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
