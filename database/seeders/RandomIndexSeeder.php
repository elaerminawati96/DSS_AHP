<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RandomIndex;
use Ramsey\Uuid\Uuid;

class RandomIndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['matrix_size' => 1, 'value' => 0.0, 'uuid' => Uuid::uuid4()->toString()],
            ['matrix_size' => 2, 'value' => 0.0, 'uuid' => Uuid::uuid4()->toString()],
            ['matrix_size' => 3, 'value' => 0.58, 'uuid' => Uuid::uuid4()->toString()],
            ['matrix_size' => 4, 'value' => 0.90, 'uuid' => Uuid::uuid4()->toString()],
            ['matrix_size' => 5, 'value' => 1.12, 'uuid' => Uuid::uuid4()->toString()],
            ['matrix_size' => 6, 'value' => 1.24, 'uuid' => Uuid::uuid4()->toString()],
            ['matrix_size' => 7, 'value' => 1.32, 'uuid' => Uuid::uuid4()->toString()],
            ['matrix_size' => 8, 'value' => 1.41, 'uuid' => Uuid::uuid4()->toString()],
            ['matrix_size' => 9, 'value' => 1.45, 'uuid' => Uuid::uuid4()->toString()],
            ['matrix_size' => 10, 'value' => 1.49, 'uuid' => Uuid::uuid4()->toString()],
            ['matrix_size' => 11, 'value' => 1.51, 'uuid' => Uuid::uuid4()->toString()],
            ['matrix_size' => 12, 'value' => 1.48, 'uuid' => Uuid::uuid4()->toString()],
            ['matrix_size' => 13, 'value' => 1.56, 'uuid' => Uuid::uuid4()->toString()],
            ['matrix_size' => 14, 'value' => 1.57, 'uuid' => Uuid::uuid4()->toString()],
            ['matrix_size' => 15, 'value' => 1.59, 'uuid' => Uuid::uuid4()->toString()]
        ];

        RandomIndex::upsert($data, ['matrix_size'], ['value']);
    }
}
