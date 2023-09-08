<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Komatsu PC200',
                'description' => 'Excavator ini adalah Komatsu PC200. Ini adalah mesin berat yang kuat digunakan untuk berbagai pekerjaan konstruksi.',
                'file' => 'file/services/service-1.JPG',
            ],
            [
                'title' => 'Caterpillar 320D',
                'description' => 'Excavator ini adalah Caterpillar 320D. Caterpillar adalah merek terkenal dalam industri konstruksi',
                'file' => 'file/services/service-2.JPG',
            ],
            [
                'title' => 'Forklift',
                'description' => 'Forklift adalah sejenis truk yang dioperasikan untuk mengangkat, memindahkan, dan menurunkan barang-barang berat dari satu tempat ke tempat',
                'file' => 'file/services/service-3.JPG',
            ],
        ];

        foreach ($data as $serviceData) {
            Services::create($serviceData);
        }

    }
}
