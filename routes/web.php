<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;
use App\Models\TestTask;
use App\Http\Controllers\TestTaskController;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('job', JobController::class);
Route::resource('tasks', TestTaskController::class);

Route::get('/about', function () {
    return view('about');
});
