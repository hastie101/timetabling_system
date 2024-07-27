<?php

namespace App\Http\Controllers;

use App\Models\Class;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes = classes::all();
        return response()->json($classes);
        return classes::with('courses', 'students')->get();
    }

    public function show($id)
    {
        $class = classes::find($id);
        return response()->json($class);
    }

    public function store(Request $request)
    {
        // $class = new Class();
        // $class->name = $request->input('name');
        // $class->description = $request->input('description');
        // $class->save();
        // return response()->json($class);
        $validated = $request->validate([
            'ClassName' => 'required|string|max:255',
        ]);

        return classes::create($validated);
    }

    public function update(Request $request, $id)
    {
        $class = classes::find($id);
        $class->name = $request->input('name');
        $class->description = $request->input('description');
        $class->save();
        return response()->json($class);
    }

    public function destroy($id)
    {
        $class = classes::find($id);
        $class->delete();
        return response()->json(['message' => 'Class deleted successfully']);
    }
}
