<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Project 1',
                'file' => 'file/project/project-1.JPG',
            ],
            [
                'title' => 'Project 2',
                'file' => 'file/project/project-2.JPG',
            ],
            [
                'title' => 'Project 3',
                'file' => 'file/project/project-3.JPG',
            ],
            [
                'title' => 'Project 4',
                'file' => 'file/project/project-4.JPG',
            ],
            [
                'title' => 'Project 5',
                'file' => 'file/project/project-5.JPG',
            ],
            [
                'title' => 'Project 6',
                'file' => 'file/project/project-6.JPG',
            ],
        ];

        foreach ($data as $project) {
            Project::create($project);
        }

    }
}
