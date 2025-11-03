<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectTableSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
    [
        'project_name' => 'E-Commerce Platform',
        'description' => 'Full-stack e-commerce solution with shopping cart, payment integration, and admin dashboard.',
        'technology' => ['Laravel', 'MySQL', 'Tailwind CSS', 'Stripe API'],
        'image' => 'https://images.unsplash.com/photo-1460925895917-aef4fa1b823c?w=600&h=400&fit=crop'
    ],
    [
        'project_name' => 'Task Management App',
        'description' => 'Interactive task management application with real-time updates and drag-and-drop functionality.',
        'technology' => ['React', 'JavaScript', 'Firebase', 'Tailwind CSS'],
        'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop'
    ],
    [
        'project_name' => 'Personal Blog Platform',
        'description' => 'Blogging platform with markdown support, comment system, and SEO optimization.',
        'technology' => ['PHP', 'Laravel', 'PostgreSQL', 'Alpine.js'],
        'image' => 'https://images.unsplash.com/photo-1432457494886-d62e502021c3?w=600&h=400&fit=crop'
    ],
    [
        'project_name' => 'Weather Dashboard',
        'description' => 'Real-time weather application with location-based forecasting and interactive charts.',
        'technology' => ['JavaScript', 'Weather API', 'Chart.js', 'CSS3'],
        'image' => 'https://images.unsplash.com/photo-1526374965328-7f5af876318d?w=600&h=400&fit=crop'
    ],
    [
        'project_name' => 'Social Media Analytics',
        'description' => 'Analytics dashboard for tracking social media metrics with data visualization.',
        'technology' => ['React', 'D3.js', 'Node.js', 'MongoDB'],
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop'
    ],
    [
        'project_name' => 'Portfolio Website',
        'description' => 'Modern, responsive portfolio website showcasing projects and skills.',
        'technology' => ['HTML5', 'Tailwind CSS', 'JavaScript', 'SEO'],
        'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&h=400&fit=crop'
    ]
];


        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}


