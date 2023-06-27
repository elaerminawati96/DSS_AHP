<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\GenerateUUID;

class Employee extends Model
{
    use HasFactory, GenerateUUID;

    protected $table ="employee";

    protected $fillable = [
        'uuid',
        'name',
        'department',
        'position',
        'address',
        'email',
        'phone'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'employee_uuid', 'uuid');
    }

    public function candidates()
    {
        return $this->hasMany(Candidate::class, 'employee_uuid', 'uuid');
    }
}
