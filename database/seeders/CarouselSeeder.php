<?php

namespace Database\Seeders;

use App\Models\Carousel;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => 'SOLUSI SEWA ALAT BERAT',
                'subtitle' => 'Sewa Alat Berat Berkualitas',
                'file' => 'file/carousel/carousel-1.JPG',
            ],
            [
                'title' => 'SOLUSI SEWA ALAT BERAT',
                'subtitle' => 'Harga Sewa Alat Berat Lebih Murah',
                'file' => 'file/carousel/carousel-2.JPG',
            ],
        ];

        foreach ($datas as $data) {
            Carousel::create($data);
        }

    }
}
