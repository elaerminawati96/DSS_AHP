<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'uuid' => Uuid::uuid4()->toString(),
                'name' => "Mr A",
                'department' =>  "Tata Kota",
                'position' => "Chief",
                'address' => "Yogjakarta",
                'email' => "a@yopmail.com",
                'phone' => "081234567890",
            ],
            [
                'uuid' => Uuid::uuid4()->toString(),
                'name' => "Mr B",
                'department' =>  "Tata Kota",
                'position' => "Chief",
                'address' => "Yogjakarta",
                'email' => "b@yopmail.com",
                'phone' => "081234567890",
            ],
            [
                'uuid' => Uuid::uuid4()->toString(),
                'name' => "Mr C",
                'department' =>  "Tata Kota",
                'position' => "Chief",
                'address' => "Yogjakarta",
                'email' => "c@yopmail.com",
                'phone' => "081234567890",
            ],
            [
                'uuid' => Uuid::uuid4()->toString(),
                'name' => "Mr D",
                'department' =>  "Tata Kota",
                'position' => "Chief",
                'address' => "Yogjakarta",
                'email' => "d@yopmail.com",
                'phone' => "081234567890",
            ],
            [
                'uuid' => Uuid::uuid4()->toString(),
                'name' => "Mr E",
                'department' =>  "Tata Kota",
                'position' => "Chief",
                'address' => "Yogjakarta",
                'email' => "e@yopmail.com",
                'phone' => "081234567890",
            ]
        ];

        foreach($data as $data_employee)
        {
            $employee = Employee::updateOrCreate(['email' => $data_employee['email']], $data_employee);
            $user = User::updateOrCreate(
                ['email' => $data_employee['email']], [
                    'uuid' => Uuid::uuid4()->toString(),
                    'name' => $employee->name,
                    'email' => $employee->email,
                    'password' => Hash::make('staff123'),
                    'employee_uuid' => $employee->uuid,
                    'level' => "staff",
                    'status' => 1
                ]
            );
        }
    }
}
