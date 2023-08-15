<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Import the TaskController

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [TaskController::class, 'index'])->name('dashboard'); // Use the TaskController's index method
    Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create'); // Add this line for task creation
});
