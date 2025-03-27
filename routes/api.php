<?php
use App\Http\Controllers\TaskController;

...

Route::get('task/{id}', [TaskController::class, 'getTask']);
Route::post('task', [TaskController::class, 'addTask']);
Route::put('task', [TaskController::class, 'editTask']);
Route::delete('task/{id}', [TaskController::class, 'deleteTask']);
// Route::get('/medicos', [MedicoController::class, 'index'])->name('medicos.index');
// Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

