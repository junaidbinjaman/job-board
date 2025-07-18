<?php

use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TestTaskController;
use App\Http\Controllers\SessionController;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('job', JobController::class);
Route::resource('tasks', TestTaskController::class);

Route::get('/about', function () {
    return view('about');
});

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
