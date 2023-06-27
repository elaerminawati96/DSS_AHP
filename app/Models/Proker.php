<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\GenerateUUID;

class Proker extends Model
{
    use HasFactory, GenerateUUID;

    protected $table = "proker";

    protected $fillable = [
        'uuid',
        'subject_uuid',
        'name',
        'location',
        'date_time',
        'note'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_uuid', 'uuid');
    }
}
