<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'title' => 'Robot Line Follower',
            'summary' => 'Robot mengikuti garis untuk lomba antar-universitas.',
            'thumbnail_url' => '/images/robot1.jpg',
            'repo_url' => 'https://github.com/your-org/line-follower',
            'is_featured' => true,
        ]);
        Project::create([
            'title' => 'Arm Manipulator',
            'summary' => 'Lengan robotik untuk tugas presisi.',
            'thumbnail_url' => '/images/robot2.jpg',
            'repo_url' => 'https://github.com/your-org/arm-manipulator',
        ]);
    }
}
