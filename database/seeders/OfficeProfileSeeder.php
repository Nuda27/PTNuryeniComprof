<?php

namespace Database\Seeders;

use App\Models\OfficeProfile;
use Illuminate\Database\Seeder;

class OfficeProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OfficeProfile::create([
            'name' => 'PT. Nuryeni ',
            'email' => 'pt.nuryeni2018@gmail.com',
            'telepon' => '(0264) 88305518',
            'alamat' => 'Cilangkap, Kec. Babakancikao, Kabupaten Purwakarta, Jawa Barat 41151',
            'whatsapp' => null,
            'instagram' => null,
            'facebook' => null,
            'linkedin' => null,
            'youtube' => null,
            'maps' => 'https://goo.gl/maps/TSFRY1FHQkHWhtoK9',
            'logo' => 'file/profilePT/nyn.png',
            'about' => 'PT. Nuryeni adalah sebuah perusahaan yang bergerak dibidang Waste (LB3) management mulai dari penyewaan alat berat dll',
            'pengalaman' => '0',
            'anggota' => '0',
            'penilaian' => '0',
            'proyek' => '0',
        ]);
    }
}