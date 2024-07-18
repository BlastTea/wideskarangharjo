<?php

namespace Database\Factories;

use App\Models\TourPackage;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransactionDetail>
 */
class TransactionDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaction_id' => 1,
            'tour_package_id' => 1,
            'name' => fake()->word(),
            'price' => rand(1, 10) * 1000,
            'quantity' => rand(1, 10),
        ];
    }
}
