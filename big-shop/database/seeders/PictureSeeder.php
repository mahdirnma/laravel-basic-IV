<?php

namespace Database\Seeders;

use App\Models\Picture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Picture::create([
            'main_picture' => 'pic1.jpg',
            'picture_1' => 'pic2.jpg',
            'picture_2' => 'pic3.jpg',
            'product_id' => '1',
        ]);
        Picture::create([
            'main_picture' => 'pic4.jpg',
            'picture_1' => 'pic5jpg',
            'picture_2' => 'pic6.jpg',
            'product_id' => '2',
        ]);

    }
}
