<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\GenerateUUID;

class RandomIndex extends Model
{
    use GenerateUUID;

    protected $table = "random_index";

    protected $fillable = [
        'uuid',
        'matrix_size',
        'value'
    ];
}
