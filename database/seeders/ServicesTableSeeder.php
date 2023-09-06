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
                'description' => 'Excavator ini adalah Komatsu PC200',
                'file' => 'file/services/service-1.JPG',
            ],
            [
                'title' => 'Caterpillar 320D',
                'description' => 'Excavator ini adalah Caterpillar 320D',
                'file' => 'file/services/service-2.JPG',
            ],
            [
                'title' => 'Volvo EC200',
                'description' => 'Excavator ini adalah Volvo EC200',
                'file' => 'file/services/service-3.JPG',
            ],
        ];

        foreach ($data as $serviceData) {
            Services::create($serviceData);
        }

    }
}
