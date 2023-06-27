<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\GenerateUUID;

class Benchmarks extends Model
{
    use HasFactory, GenerateUUID;

    //declare table name
    protected $table = 'benchmarks';

    protected $fillable = [
        'uuid',
        'rate_uuid',
        'criteria_uuid'
    ];

    public function rate()
    {
        return $this->belongsTo(Rate::class, 'rate_uuid', 'uuid');
    }

    public function criteria()
    {
        return $this->belongsTo(Criteria::class, 'criteria_uuid', 'uuid');
    }
}
