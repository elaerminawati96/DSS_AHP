<?php

namespace App\Services;

use Ramsey\Uuid\Uuid;

trait GenerateUUID {

    protected static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
}