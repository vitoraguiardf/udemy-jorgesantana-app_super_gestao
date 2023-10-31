<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vendor_id' => $this->faker->numberBetween(Vendor::first()->id, Vendor::latest()->first()->id),
            'customer_id' => $this->faker->numberBetween(Customer::first()->id, Customer::latest()->first()->id),
        ];
    }
}
