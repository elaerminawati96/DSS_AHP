<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\GenerateUUID;

class Consistency extends Model
{
    use HasFactory, GenerateUUID;

    protected $tablle = "consistency";

    protected $fillable = [
        'uuid',
        'subject_uuid',
        'category',
        'pev',
        'ci',
        'cr',
        'ri',
        'status',
        'criteria_category'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_uuid', 'uuid');
    }
}
