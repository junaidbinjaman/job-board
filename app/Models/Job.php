<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use \App\Models\Employer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{

    protected $table = 'job_listings';

    protected $guarded = [];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id" );
    }
}
