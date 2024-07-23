<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'BlastTea',
            'email' => 'arya.jbr.999@gmail.com',
            'role' => 'admin',
            'password' => '$2y$12$LPU8Ibbfa7r6QtDHo3WVHurslDOKtrR48I6mad6.5flQlyGlfXm.2',
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => '$2y$12$LPU8Ibbfa7r6QtDHo3WVHurslDOKtrR48I6mad6.5flQlyGlfXm.2',
        ]);

        User::factory()->create([
            'name' => 'manager',
            'email' => 'manager@gmail.com',
            'role' => 'manager',
            'password' => '$2y$12$LPU8Ibbfa7r6QtDHo3WVHurslDOKtrR48I6mad6.5flQlyGlfXm.2',
        ]);

        User::factory()->create([
            'name' => 'visitor',
            'email' => 'visitor@gmail.com',
            'role' => 'visitor',
            'password' => '$2y$12$LPU8Ibbfa7r6QtDHo3WVHurslDOKtrR48I6mad6.5flQlyGlfXm.2',
        ]);
    }
}
