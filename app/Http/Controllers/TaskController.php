<?php

namespace App\Http\Controllers;

use App\Events\TaskCompleted;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = auth()->user()->tasks;
        return response()->json($tasks);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'is_completed' => 'nullable|boolean'
        ]);

        $task = auth()->user()->tasks()->create($validated);

        return response()->json($task, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = auth()->user()->tasks()->findOrFail($id);
        return response()->json($task);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'is_completed' => 'nullable|boolean'
        ]);

        $task = auth()->user()->tasks()->findOrFail($id);

        $wasCompleted = $task->is_completed;

        $task->update($validated);

        if ($task->is_completed !== $wasCompleted) {
            event(new TaskCompleted($task));
        }

        return response()->json(['message' => 'Tarefa atualizada com sucesso!', 'task' => $task]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = auth()->user()->tasks()->findOrFail($id);
        $task->delete();
        return response()->json(['message' => 'Tarefa deletada com sucesso.'], 200);
    }

    public function destroy_all()
    {
        $tasks = auth()->user()->tasks()->delete();

        return response()->json(['message' => 'Todas as tarefas deletadas']);
    }
}
