<?php

namespace Database\Seeders;

use App\Models\TourPackage;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tourPackages = TourPackage::inRandomOrder()->get();
        $transactions = Transaction::get();

        foreach ($transactions as $v) {
            for ($i = 0; $i < rand(1, $tourPackages->count()); $i++) {
                $tourPackage = $tourPackages[$i];

                TransactionDetail::factory()->create([
                    'tour_package_id' => $tourPackage->id,
                    'transaction_id' => $v->id,
                    'name' => $tourPackage->name,
                    'price' => $tourPackage->price,
                ]);
            }
        }
    }
}
