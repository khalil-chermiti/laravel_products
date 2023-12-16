<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            Product::create([
                'name' => $faker->text(5),
                'price' => $faker->randomFloat(2, 0, 1000),
                'description' => $faker->text,
            ]);
        }
    }
}
