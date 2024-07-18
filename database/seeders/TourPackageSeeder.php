<?php

namespace Database\Seeders;

use App\Models\TourPackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TourPackage::factory()->create([
            'name' => 'Paket Agroteknologi',
            'price' => 10000.0,
        ]);

        TourPackage::factory()->create([
            'name' => 'Paket Peternakan Modern',
            'price' => 10000.0,
        ]);

        TourPackage::factory()->create([
            'name' => 'Paket Edukasi',
            'price' => 15000.0,
        ]);

        TourPackage::factory()->create([
            'name' => 'Paket VIP',
            'price' => 50000.0,
        ]);
    }
}
