<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // return view('tasks.index', [
        //     'tasks' => Task::all()
        // ]);
        //return view dashboard with tasks
        return view('dashboard', [
            'tasks' => Task::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'status' => 'required|max:255',
            'category' => 'required|max:255',
        ]);
        $validated['user_id'] = $user->id;
        Task::create($validated);

        return redirect()->route('dashboard')->with('success', 'Et une de plus à la liste !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        // dd($task);
        return view('taskEdit', ['task' => $task]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $user = auth()->user();
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'status' => 'required|max:255',
            'category' => 'required|max:255',
        ]);
        $validated['user_id'] = $user->id;
        $task->update($validated);

        return redirect()->route('dashboard')->with('success', 'La tâche a été modifiée avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('dashboard')->with('success', 'La tâche a été supprimée avec succès.');
    }
}
