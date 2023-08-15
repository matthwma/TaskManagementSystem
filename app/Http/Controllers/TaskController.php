<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'max:255', // Max length of 255 characters
            'due_date' => 'required|date|after_or_equal:today', // Must be a valid date in the future
            'priority' => 'required|in:high,medium,low', // Must match the available options
        ], [

            'name.required' => 'The task name is required.',
            'name.max' => 'The task name must not exceed :max characters.',

            'description.max' => 'The task description must not exceed :max characters.',

            'description.required' => 'The description is required.',

            'due_date.required' => 'The due date is required.',
            'due_date.date' => 'Please enter a valid date.',
            'due_date.after:today' => 'Please enter a date in the future.',

            'priority.required' => 'The priority is required.',
            'priority.in' => 'Please select a valid priority.',
        ]);

        Task::create($validatedData);

        return redirect()->route('dashboard')->with('success', 'Task created successfully.');
    }



}

