<?php

namespace Database\Seeders;

use App\Models\Sale;
use Database\Factories\SaleProductsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaleProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Sale::all() as $key => $value) {
            (new SaleProductsFactory(rand(2, 8)))->create(['sale_id' => $value->id]);
        }
    }
}
