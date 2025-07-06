<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestTask;
use PHPUnit\Util\Test;

class TestTaskController extends Controller
{
    public function index()
    {
        $tasks = TestTask::all()->sort();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        // validate the data
        request()->validate([
            'task_title' => 'min:3|required',
            'task_description' => 'min:3|required'
        ]);

        // Store the data in the database
        TestTask::create([
            'task_title' => request()->task_title,
            'task_description' => request()->task_description
        ]);

        // redirect users
        return redirect('/tasks')->with('success', 'The task is created successfully');
    }

    public function show(TestTask $task)
    {
        return view('tasks.show', ['task' => $task]);
    }

    public function edit(TestTask $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(TestTask $task)
    {
        request()->validate([
            'task_title' => 'min:3|required',
            'task_description' => 'required'
        ]);

        $task->update([
            'task_title' => request('task_title'),
            'task_description' => request('task_description')
        ]);

        return redirect('/tasks')->with('success', 'The task is updated successfully');
    }

    public function destroy(TestTask $task)
    {
        $task->delete();

        return redirect('/tasks')->with('success', 'The task is deleted successfully');
    }
}
