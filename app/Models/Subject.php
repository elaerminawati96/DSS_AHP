<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\GenerateUUID;

class Subject extends Model
{
    use HasFactory, GenerateUUID;

    protected $table = "subject";

    protected $fillable = [
        'uuid',
        'name',
        'description'
    ];

    public function candidates()
    {
        return $this->hasMany(Candidate::class, 'subject_uuid', 'uuid');
    }

    public function criterias()
    {
        return $this->hasMany(Criteria::class, 'subject_uuid', 'uuid');
    }

    public function prokers()
    {
        return $this->hasMany(Proker::class, 'subject_uuid', 'uuid');
    }

    public function consistencies()
    {
        return $this->hasMany(Consistency::class, 'subject_uuid', 'uuid');
    }

}
