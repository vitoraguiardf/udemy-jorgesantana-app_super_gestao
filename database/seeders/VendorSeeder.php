<?php

namespace Database\Seeders;

use Database\Factories\VendorFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $factory = new VendorFactory(50);
        $factory->create();
    }
}
