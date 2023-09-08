<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Farid F ',
                'title' => 'Gen Z',
                'description' => 'Ipsum dolor, sit amet  adipisicing elit. Molestias repudiandae amet deserunt nisiz',
                'file' => 'file/testimonial/testimonial-2.jpg',
            ],
            [
                'nama' => 'Yudis',
                'title' => 'Gen Z',
                'description' => 'Lorem ipsum , sit amet consectetur adipisicing elit.  repudiandae amet deserunt nisiz',
                'file' => 'file/testimonial/testimonial-3.jpg',
            ],
        ];

        foreach ($data as $testimoni) {
            Testimoni::create($testimoni);
        }

    }
}
