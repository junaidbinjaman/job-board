<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use \App\Models\Employer;

class Job extends Model
{

    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
