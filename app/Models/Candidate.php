<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\GenerateUUID;

class Candidate extends Model
{
    use HasFactory, GenerateUUID;

    protected $table="candidate";

    protected $fillable = [
        'uuid',
        'subject_uuid',
        'employee_uuid',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_uuid', 'uuid');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_uuid', 'uuid');
    }

}
