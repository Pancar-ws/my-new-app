<?php

use App\Models\Project;
use App\Http\Controllers\RecruitmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = [
        (object)[
            'title' => 'Robot Line Follower',
            'summary' => 'Robot mengikuti garis untuk lomba antar-universitas.',
            'thumbnail_url' => '/images/robot1.jpg'
        ],
        (object)[
            'title' => 'Arm Manipulator',
            'summary' => 'Lengan robotik untuk tugas presisi.',
            'thumbnail_url' => '/images/robot2.jpg'
        ],
    ];
    return view('welcome', compact('projects'));
});

// Recruitment form submission
Route::post('/recruit/submit', [RecruitmentController::class, 'submit'])->name('recruit.submit');
