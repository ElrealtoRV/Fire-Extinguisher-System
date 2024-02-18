<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function DisplayTodo()
    {
        $todos = Todo::all();

        return response()->json($todos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|string',
        ]);

        $todo = Todo::create([
            'text' => $request->input('text'),
            'completed' => false,
        ]);

        return response()->json($todo, 201);
    }
}
