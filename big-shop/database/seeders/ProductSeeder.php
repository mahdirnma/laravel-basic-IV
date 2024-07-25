<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'canon 200d',
            'description' => 'lorem ipsum',
            'price' => 200,
            'category_id' => '1',
        ]);
        Product::create([
            'title' => 'A55',
            'description' => 'lorem ipsum2',
            'price' => 150,
            'category_id' => '2',
        ]);

    }
}
