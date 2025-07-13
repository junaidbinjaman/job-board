<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;
use App\Models\TestTask;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);

Route::get('/about', function () {
    return view('about');
});

Route::get('/tasks', function() {
    $tasks = TestTask::all();

    return view('tasks', ['tasks' => $tasks]);
});
