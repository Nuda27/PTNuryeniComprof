<?php

namespace Database\Seeders;

use App\Models\Whychoose;
use App\Models\whychooseDetail;
use Illuminate\Database\Seeder;

class WhychooseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $why = Whychoose::create([
            'title' => 'MENGAPA MEMILIH KAMI',
            'subtitle' => 'Beberapa Alasan Mengapa Orang Memilih Kami',
            'file' => 'file/whychoose/why.jpg',
        ]);

        $data = [
            [
                'whychoose_id' => $why->id,
                'title' => 'Experienced Workers ',
                'description' => 'Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet ',
            ],
            [
                'whychoose_id' => $why->id,
                'title' => 'Reliable Industrial Services ',
                'description' => 'Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet ',
            ],
            [
                'whychoose_id' => $why->id,
                'title' => '24/7 Customer Support ',
                'description' => 'Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet ',
            ],
            [
                'whychoose_id' => $why->id,
                'title' => 'Customer Support ',
                'description' => 'Erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat ame ',
            ],
        ];

        foreach ($data as $serviceData) {
            whychooseDetail::create($serviceData);
        }

    }
}