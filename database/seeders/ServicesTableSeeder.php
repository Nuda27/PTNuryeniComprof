<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Services::create([
            'title' => 'Komatsu PC200',
            'description' => 'Excavator ini adalah komatsu pc200',
            'file' => null
        ]);
    }
}
