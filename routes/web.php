<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Task;
use App\Http\Controllers\TasksController;

/*
|--------------------------------------------------------------------------
|  Routes
|--------------------------------------------------------------------------

*/

Route::get('/', function () {
    return redirect()->route('login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     // $tasks = Task::all(); we are gonna use the controller for compact('tasks')
//     return view('dashboard', compact('tasks'));
// })->middleware(['auth', 'verified'])->name('tasks');
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::get('/dashboard', [TasksController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::post('/dashboard', [TasksController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('tasks.store');
Route::delete('/dashboard/{task}', [TasksController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('tasks.destroy');
Route::get('/dashboard/{task}/edit', [TasksController::class, 'edit'])
    ->middleware(['auth', 'verified'])
    ->name('tasks.edit');
Route::put('/dashboard/{task}', [TasksController::class, 'update'])
    ->middleware(['auth', 'verified'])
    ->name('tasks.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
