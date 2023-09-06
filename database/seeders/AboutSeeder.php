<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'description' => 'PT. Perkasa Sarana Utama (PSU) adalah
                              perusahaan kontraktor umum dan sewa alat berat di Indonesia.
                              Perusahaan didirikan pada 9 Januari 2004. Spesialisasi kami
                              adalah menyediakan solusi sewa untuk konstruksi, industri,
                              pertambangan dan pasar pemilik rumah. Kami bertujuan untuk menjadi
                              perusahaan persewaan alat berat terkemuka dan menyediakan layanan
                              satu atap untuk memberikan layanan, produk, dan solusi terintegrasi
                              terbaik di kelasnya untuk memenuhi kebutuhan kami kebutuhan pelanggan.',
        ]);
    }
}
