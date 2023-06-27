<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\GenerateUUID;

class Criteria extends Model
{
    use HasFactory, GenerateUUID;

    protected $table = "criteria";

    protected $fillable = [
            'uuid',
            'subject_uuid',
            'name',
            'category'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_uuid', 'uuid');
    }

    public function benchmarks()
    {
        return $this->hasMany(Benchmarks::class, 'criteria_uuid', 'uuid');
    }
}
