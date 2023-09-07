<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => 'Kemudahan pemesanan alat berat terpercaya',
            'description' => 'PT. Nuryeni adalah sebuah perusahaan yang bergerak dibidang Waste (LB3) management mulai dari jasa pengangkutan, pengumpulan dan pengelolaan limbah B3, serta jasa penyediaan, penyewaan alat berat dan jasa penyediaan bus karyawan.',
            'file' => 'file/about/service-2.jpg',
        ]);
    }
}
