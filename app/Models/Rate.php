<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\GenerateUUID;

class Rate extends Model
{
    use HasFactory, GenerateUUID;

    protected $table = "rate";

    protected $fillable = [
        'uuid',
        'uuid_x',
        'uuid_y',
        'rate',
        'category'
    ];

    public function benchmarks()
    {
        return $this->hasMany(Benchmarks::class, 'rate_uuid', 'uuid');
    }
}
