<?php

namespace Database\Seeders;

use Database\Factories\SaleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $factory = new SaleFactory(50);
        $factory->create();
    }
}
