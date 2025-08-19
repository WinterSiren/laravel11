<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Menampilkan semua task
    public function index()
    {
        return response()->json(Task::all());
    }

    // Menyimpan task baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'completed' => 'boolean',
        ]);

        $task = Task::create($request->all());

        return response()->json($task, 201); // 201 Created
    }

    // Menampilkan satu task spesifik
    public function show(Task $task)
    {
        return response()->json($task);
    }

    // Memperbarui task yang ada
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'string|max:255',
            'description' => 'nullable|string',
            'completed' => 'boolean',
        ]);

        $task->update($request->all());

        return response()->json($task);
    }

    // Menghapus task
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json(null, 204); // 204 No Content
    }
}