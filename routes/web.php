<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;
use App\Models\TestTask;
use App\Http\Controllers\TestTaskController;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('job', JobController::class);

Route::get('/about', function () {
    return view('about');
});

Route::get('/tasks', [TestTaskController::class, 'index']);
Route::get('/tasks/create', [TestTaskController::class, 'create']);
Route::post('/tasks/store', [TestTaskController::class, 'store']);
Route::get('/tasks/{task}', [TestTaskController::class, 'show']);
Route::get('/tasks/{task}/edit', [TestTaskController::class, 'edit']);
Route::patch('/tasks/{task}/update', [TestTaskController::class, 'update']);
Route::delete('/tasks/{task}', [TestTaskController::class, 'destroy']);
