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
        $product1=Product::create([
            'title' => 'canon 200d',
            'description' => 'lorem ipsum1',
            'price' => '200000',
            'entity' => '1',
            'category_id' => '1',
        ]);
        Product::create([
            'title' => 'A55',
            'description' => 'lorem ipsum2',
            'price' => '300000',
            'entity' => '1',
            'category_id' => '2',
        ]);
        $product1->tags()->attach([1,2]);
    }
}
