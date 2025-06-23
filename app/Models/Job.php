<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use phpDocumentor\Reflection\Types\Self_;

class Job extends Model
{
    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];
}
