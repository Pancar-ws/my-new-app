<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyekController extends Controller
{
    private function getProjects()
    {
        return [
            'robot-humanoid-h-01' => [
                'slug' => 'robot-humanoid-h-01',
                'title' => 'Robot Humanoid H-01',
                'subtitle' => 'Robot Humanoid AI dengan Vision System',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS17oulaDxIokVYwIYhQKWLBfrX27vC9FuNFQ&s',
                'shortDesc' => 'Robot humanoid dengan sistem AI untuk kompetisi Robocup. Dilengkapi vision system dan autonomous navigation.',
                'longDesc' => 'Robot Humanoid H-01 adalah inovasi terbaru dari Tim Robotika Soedirman yang dirancang khusus untuk kompetisi Robocup internasional. Dengan teknologi AI terkini dan sistem vision yang canggih, robot ini mampu melakukan autonomous navigation dan decision making yang kompleks.',
                'specs' => [
                    'Tinggi' => '60 cm',
                    'Berat' => '12 kg',
                    'Processor' => 'NVIDIA Jetson Xavier',
                    'Kamera' => '2x RGB-D Sensors',
                    'Bahasa Pemrograman' => 'Python, C++',
                    'OS' => 'ROS (Robot Operating System)',
                ],
                'features' => [
                    'AI-Powered Decision Making',
                    'Real-time Vision Processing',
                    'Autonomous Navigation',
                    'Object Recognition & Detection',
                    'Advanced Motion Control',
                    'Multi-sensor Fusion',
                ],
                'timeline' => [
                    [
                        'year' => '2023',
                        'event' => 'Konsep & Desain Awal',
                        'desc' => 'Perancangan konsep dan desain mekanisme robot'
                    ],
                    [
                        'year' => '2024',
                        'event' => 'Hardware Integration',
                        'desc' => 'Integrasi hardware dan system assembly'
                    ],
                    [
                        'year' => '2024',
                        'event' => 'Software Development',
                        'desc' => 'Pengembangan AI dan vision system'
                    ],
                    [
                        'year' => '2025',
                        'event' => 'Testing & Optimization',
                        'desc' => 'Testing dan optimalisasi performa'
                    ],
                ],
                'team' => [
                    [
                        'name' => 'Ahmad Rizki',
                        'role' => 'Project Lead',
                        'avatar' => 'https://via.placeholder.com/100'
                    ],
                    [
                        'name' => 'Siti Nurhaliza',
                        'role' => 'Lead Hardware Engineer',
                        'avatar' => 'https://via.placeholder.com/100'
                    ],
                    [
                        'name' => 'Budi Santoso',
                        'role' => 'Software Lead',
                        'avatar' => 'https://via.placeholder.com/100'
                    ],
                ],
                'gallery' => [
                    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS17oulaDxIokVYwIYhQKWLBfrX27vC9FuNFQ&s',
                    'https://via.placeholder.com/400x300?text=Robot+View+1',
                    'https://via.placeholder.com/400x300?text=Robot+View+2',
                ],
                'badges' => ['Hardware', 'AI'],
                'github' => '#',
                'status' => 'Active Development'
            ],
            'autonomous-drone-uav-x' => [
                'slug' => 'autonomous-drone-uav-x',
                'title' => 'Autonomous Drone UAV-X',
                'subtitle' => 'Drone Autonomous dengan Sistem Tracking',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTImi1uv090RHRFYiMpVrtiTulKF0PuO2rGHg&s',
                'shortDesc' => 'Drone autonomous dengan kemampuan tracking dan surveillance. Sistem kontrol real-time dan flight autonomy.',
                'longDesc' => 'UAV-X adalah drone autonomous hasil pengembangan Tim Robotika yang dilengkapi dengan sistem tracking dan surveillance canggih. Dirancang untuk berbagai aplikasi mulai dari aerial photography hingga inspeksi infrastruktur dengan presisi tinggi.',
                'specs' => [
                    'Diameter' => '50 cm',
                    'Berat' => '1.8 kg',
                    'Payload Capacity' => '500 g',
                    'Flight Time' => '25-30 menit',
                    'Max Speed' => '15 m/s',
                    'Operating Altitude' => '100 m',
                ],
                'features' => [
                    'GPS-based Autonomous Flight',
                    'Real-time Video Streaming',
                    'Obstacle Avoidance System',
                    'Thermal Imaging Capable',
                    'Return to Home Function',
                    '4K Camera Integration',
                ],
                'timeline' => [
                    [
                        'year' => '2022',
                        'event' => 'Frame Design',
                        'desc' => 'Desain frame dan structural analysis'
                    ],
                    [
                        'year' => '2023',
                        'event' => 'Flight Controller Development',
                        'desc' => 'Pengembangan sistem kontrol penerbangan'
                    ],
                    [
                        'year' => '2024',
                        'event' => 'Autonomous System Integration',
                        'desc' => 'Integrasi sistem autonomy dan GPS'
                    ],
                    [
                        'year' => '2025',
                        'event' => 'Field Testing',
                        'desc' => 'Pengujian lapangan dan validasi'
                    ],
                ],
                'team' => [
                    [
                        'name' => 'Reza Pratama',
                        'role' => 'Drone Lead',
                        'avatar' => 'https://via.placeholder.com/100'
                    ],
                    [
                        'name' => 'Dina Wijaya',
                        'role' => 'Electronics Engineer',
                        'avatar' => 'https://via.placeholder.com/100'
                    ],
                    [
                        'name' => 'Hendra Kusuma',
                        'role' => 'Flight Control Specialist',
                        'avatar' => 'https://via.placeholder.com/100'
                    ],
                ],
                'gallery' => [
                    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTImi1uv090RHRFYiMpVrtiTulKF0PuO2rGHg&s',
                    'https://via.placeholder.com/400x300?text=Drone+Aerial+1',
                    'https://via.placeholder.com/400x300?text=Drone+Aerial+2',
                ],
                'badges' => ['Drone', 'IoT'],
                'github' => '#',
                'status' => 'Active Development'
            ],
            'mobile-robot-abu-robocon' => [
                'slug' => 'mobile-robot-abu-robocon',
                'title' => 'Mobile Robot ABU Robocon',
                'subtitle' => 'Robot Mobile untuk Kompetisi ABU Robocon 2026',
                'image' => 'https://static.vecteezy.com/system/resources/thumbnails/055/098/161/small/autonomous-mobile-robot-moving-on-industrial-floor-with-red-lights-photo.jpg',
                'shortDesc' => 'Robot mobile untuk kompetisi ABU Robocon 2026. Sistem mekanik presisi dan kontrol pergerakan pintar.',
                'longDesc' => 'Mobile Robot adalah platform kompetisi yang dikembangkan khusus untuk mengikuti ABU Robocon 2026. Dengan sistem mekanik presisi tinggi dan kontrol pergerakan yang cerdas, robot ini mampu menyelesaikan task-task kompleks dalam waktu optimal.',
                'specs' => [
                    'Dimensi' => '60 x 50 x 40 cm',
                    'Berat' => '25 kg',
                    'Motor' => '4x DC Motor 100 rpm',
                    'Torque' => '15 Nm per wheel',
                    'Max Speed' => '1.5 m/s',
                    'Power Source' => '24V LiFePO4 Battery',
                ],
                'features' => [
                    'Precision Motion Control',
                    'Omni-directional Movement',
                    'Real-time Sensor Feedback',
                    'Mechanical Arm Integration',
                    'Wireless Communication',
                    'Emergency Stop System',
                ],
                'timeline' => [
                    [
                        'year' => '2024',
                        'event' => 'Challenge Analysis',
                        'desc' => 'Analisis challenge dan requirement'
                    ],
                    [
                        'year' => '2024',
                        'event' => 'Mechanical Design',
                        'desc' => 'Desain mekanik dan prototyping'
                    ],
                    [
                        'year' => '2025',
                        'event' => 'Control System Development',
                        'desc' => 'Pengembangan sistem kontrol dan electronics'
                    ],
                    [
                        'year' => '2025',
                        'event' => 'Competition',
                        'desc' => 'Kompetisi ABU Robocon 2026'
                    ],
                ],
                'team' => [
                    [
                        'name' => 'Fitra Gunawan',
                        'role' => 'Mechanical Lead',
                        'avatar' => 'https://via.placeholder.com/100'
                    ],
                    [
                        'name' => 'Lina Hartono',
                        'role' => 'Control Systems Engineer',
                        'avatar' => 'https://via.placeholder.com/100'
                    ],
                    [
                        'name' => 'Arif Budiman',
                        'role' => 'Integration Specialist',
                        'avatar' => 'https://via.placeholder.com/100'
                    ],
                ],
                'gallery' => [
                    'https://static.vecteezy.com/system/resources/thumbnails/055/098/161/small/autonomous-mobile-robot-moving-on-industrial-floor-with-red-lights-photo.jpg',
                    'https://via.placeholder.com/400x300?text=Mobile+Robot+1',
                    'https://via.placeholder.com/400x300?text=Mobile+Robot+2',
                ],
                'badges' => ['Mekanik', 'Control'],
                'github' => '#',
                'status' => 'Active Development'
            ],
        ];
    }

    public function show($slug)
    {
        $projects = $this->getProjects();

        if (!isset($projects[$slug])) {
            abort(404, 'Proyek tidak ditemukan');
        }

        $proyek = $projects[$slug];
        return view('proyek.detail', compact('proyek'));
    }
}
