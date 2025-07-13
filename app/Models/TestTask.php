<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestTask extends Model
{
    protected $table = 'test_task';
    protected $fillable = ['task_title', 'task_description'];
}
