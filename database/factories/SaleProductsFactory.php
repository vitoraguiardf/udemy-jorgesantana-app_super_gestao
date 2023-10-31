<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SaleProducts>
 */
class SaleProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sale_id' => $this->faker->numberBetween(Sale::first()->id, Sale::latest()->first()->id),
            'product_id' => $this->faker->numberBetween(Product::first()->id, Product::latest()->first()->id),
            'cost' => $this->faker->numberBetween(1, 25),
            'rebate' => $this->faker->numberBetween(1, 15),
        ];
    }
}
