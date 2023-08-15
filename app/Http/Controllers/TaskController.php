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

}

