<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::factory()->create([
            'tour_package_id' => 1,
            'name' => 'Belajar Menyenangkan bersama Sultan Hidroponik',
        ]);

        Service::factory()->create([
            'tour_package_id' => 2,
            'name' => 'Edukasi Produksi Goting (Magot Kering)',
        ]);

        Service::factory()->create([
            'tour_package_id' => 3,
            'name' => 'Outbond learning',
        ]);

        Service::factory()->create([
            'tour_package_id' => 4,
            'name' => 'Tour Edukasi Lengkap',
        ]);
        Service::factory()->create([
            'tour_package_id' => 4,
            'name' => 'Free Snack & Minuman',
        ]);
    }
}
