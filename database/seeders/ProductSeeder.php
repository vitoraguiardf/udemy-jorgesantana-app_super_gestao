<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Database\Factories\ProductFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Vendor::all() as $key => $value) {
            (new ProductFactory(rand(2, 8)))->create(['vendor_id' => $value->id]);
        }
    }
}
