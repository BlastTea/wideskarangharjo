<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::factory(10)->create();
        
        Transaction::factory(10)->create([
            'user_id' => 2,
        ]);
        
        Transaction::factory(10)->create([
            'user_id' => 3,
        ]);

        Transaction::factory(10)->create([
            'user_id' => 4,
        ]);
    }
}
