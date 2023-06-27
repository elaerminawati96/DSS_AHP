<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\GenerateUUID;

class PriorityVector extends Model
{
    use HasFactory, GenerateUUID;

    protected $table = "priority_vector";

    protected $fillable = [
        'uuid',
        'uuid_x',
        'uuid_y',
        'value',
        'category'
    ];
}
