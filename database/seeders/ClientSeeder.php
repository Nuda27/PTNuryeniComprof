<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'file' => 'file/client/placeholder.jpg',
            ],
            [
                'file' => 'file/client/placeholder.jpg',
            ],
            [
                'file' => 'file/client/placeholder.jpg',
            ],
            [
                'file' => 'file/client/placeholder.jpg',
            ],
            [
                'file' => 'file/client/placeholder.jpg',
            ],
            [
                'file' => 'file/client/placeholder.jpg',
            ],
            [
                'file' => 'file/client/placeholder.jpg',
            ],
            [
                'file' => 'file/client/placeholder.jpg',
            ],
            [
                'file' => 'file/client/placeholder.jpg',
            ],
        ];

        foreach ($data as $testimoni) {
            Client::create($testimoni);
        }

    }
}