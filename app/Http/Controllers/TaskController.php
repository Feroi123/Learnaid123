<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Display a listing of the tasks
    public function index()
    {
        $tasks = Task::all(); // Fetch all tasks from the database
        return view('dashboard', compact('tasks')); // Pass tasks to the view
    }

    // Store a newly created task in storage
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Create a new task using the validated data
        Task::create($request->only('title'));

        // Redirect back to the tasks index
        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    // Display the specified task (optional for simple To-Do app)
    public function show(Task $task)
    {
        return view('tasks.show', compact('task')); // If you have a show view
    }

    // Show the form for editing the specified task (optional)
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task')); // If you have an edit view
    }

    // Update the specified task in storage (optional)
    public function update(Request $request, Task $task)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Update the task with the validated data
        $task->update($request->only('title'));

        // Redirect back to the tasks index
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    // Remove the specified task from storage
    public function destroy(Task $task)
    {
        try{
            $task->delete(); // Attempt to delete the task
            return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
        } catch (\Exception $e) {
            // Log the error message
            \Log::error('Task deletion failed: ' . $e->getMessage());
            return redirect()->route('tasks.index')->with('error', 'Task deletion failed.');
        }
    }
}