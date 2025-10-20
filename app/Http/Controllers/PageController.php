<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // ============================================================================
        // DUMMY DATA - Data sementara untuk development
        // ============================================================================

        $developer_name = "Kukhuh Agung Prasetyo";
        $developer_title = "Junior Web Developer";
        $profile_image = "https://avatars.githubusercontent.com/u/109121634?v=4";
        $developer_bio = "Saya seorang pengembang web junior yang bersemangat dalam membangun solusi web yang responsif dan inovatif. Spesialisasi saya meliputi PHP, Laravel, dan teknologi frontend modern.";
        $developer_email = "kukuhagung12@gmail.com";
        $developer_phone = "0815-5576-2605";

        // Experience Data
        $experiences = [
            [
                'position' => 'Web Developer Intern',
                'company' => 'Tech Corp Indonesia',
                'duration' => 'Jan 2024 - Des 2024',
                'description' => [
                    'Developed responsive web applications using PHP and Laravel',
                    'Collaborated with design team to implement UI/UX mockups',
                    'Fixed bugs and optimized database queries for better performance'
                ]
            ],
            [
                'position' => 'Frontend Developer',
                'company' => 'Digital Agency XYZ',
                'duration' => 'Sep 2023 - Dec 2023',
                'description' => [
                    'Built interactive interfaces using vanilla JavaScript and Tailwind CSS',
                    'Implemented RESTful API integration for frontend applications',
                    'Participated in Agile/Scrum development process'
                ]
            ],
            [
                'position' => 'Junior Developer',
                'company' => 'Startup Hub Jakarta',
                'duration' => 'Mar 2023 - Aug 2023',
                'description' => [
                    'Created static websites and landing pages using HTML, CSS, and JavaScript',
                    'Maintained and updated existing web applications',
                    'Assisted senior developers in code review and documentation'
                ]
            ]
        ];

        // Education Data
        $education = [
            [
                'degree' => 'Bachelor of Computer Science',
                'institution' => 'Universitas Indonesia',
                'major' => 'Information Technology',
                'year' => '2023'
            ],
            [
                'degree' => 'Certificate - Full Stack Web Development',
                'institution' => 'Bootcamp Code Academy',
                'major' => 'Web Development',
                'year' => '2022'
            ]
        ];

        // Organization Data
        $organizations = [
            [
                'position' => 'Secretary',
                'organization' => 'IT Community Campus',
                'year' => '2021 - 2022'
            ],
            [
                'position' => 'Volunteer',
                'organization' => 'Code for Good Initiative',
                'year' => '2022 - 2023'
            ]
        ];

        // Hard Skills Data
        $hard_skills = [
            ['name' => 'PHP', 'category' => 'back-end'],
            ['name' => 'Laravel', 'category' => 'back-end'],
            ['name' => 'MySQL', 'category' => 'back-end'],
            ['name' => 'HTML5', 'category' => 'front-end'],
            ['name' => 'CSS3', 'category' => 'front-end'],
            ['name' => 'JavaScript', 'category' => 'front-end'],
            ['name' => 'Tailwind CSS', 'category' => 'front-end'],
            ['name' => 'React', 'category' => 'front-end'],
            ['name' => 'Git & GitHub', 'category' => 'devops'],
            ['name' => 'Docker', 'category' => 'devops'],
            ['name' => 'AWS', 'category' => 'devops'],
            ['name' => 'REST API', 'category' => 'back-end']
        ];

        // Soft Skills Data
        $soft_skills = [
            'Problem Solving',
            'Communication',
            'Team Collaboration',
            'Critical Thinking',
            'Time Management',
            'Adaptability'
        ];

        // Projects Data
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'description' => 'Full-stack e-commerce solution with shopping cart, payment integration, and admin dashboard.',
                'technologies' => ['Laravel', 'MySQL', 'Tailwind CSS', 'Stripe API'],
                'github' => 'https://github.com/budisantoso/ecommerce-platform',
                'demo' => 'https://ecommerce-demo.example.com',
                'image' => 'https://images.unsplash.com/photo-1460925895917-aef4fa1b823c?w=600&h=400&fit=crop'
            ],
            [
                'title' => 'Task Management App',
                'description' => 'Interactive task management application with real-time updates and drag-and-drop functionality.',
                'technologies' => ['React', 'JavaScript', 'Firebase', 'Tailwind CSS'],
                'github' => 'https://github.com/budisantoso/task-manager',
                'demo' => 'https://task-manager-demo.example.com',
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop'
            ],
            [
                'title' => 'Personal Blog Platform',
                'description' => 'Blogging platform with markdown support, comment system, and SEO optimization.',
                'technologies' => ['PHP', 'Laravel', 'PostgreSQL', 'Alpine.js'],
                'github' => 'https://github.com/budisantoso/blog-platform',
                'demo' => 'https://blog-demo.example.com',
                'image' => 'https://images.unsplash.com/photo-1432457494886-d62e502021c3?w=600&h=400&fit=crop'
            ],
            [
                'title' => 'Weather Dashboard',
                'description' => 'Real-time weather application with location-based forecasting and interactive charts.',
                'technologies' => ['JavaScript', 'Weather API', 'Chart.js', 'CSS3'],
                'github' => 'https://github.com/budisantoso/weather-app',
                'demo' => 'https://weather-dashboard-demo.example.com',
                'image' => 'https://images.unsplash.com/photo-1526374965328-7f5af876318d?w=600&h=400&fit=crop'
            ],
            [
                'title' => 'Social Media Analytics',
                'description' => 'Analytics dashboard for tracking social media metrics with data visualization.',
                'technologies' => ['React', 'D3.js', 'Node.js', 'MongoDB'],
                'github' => 'https://github.com/budisantoso/social-analytics',
                'demo' => 'https://analytics-demo.example.com',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop'
            ],
            [
                'title' => 'Portfolio Website',
                'description' => 'Modern, responsive portfolio website showcasing projects and skills.',
                'technologies' => ['HTML5', 'Tailwind CSS', 'JavaScript', 'SEO'],
                'github' => 'https://github.com/budisantoso/portfolio',
                'demo' => 'https://portfolio-demo.example.com',
                'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&h=400&fit=crop'
            ]
        ];

        // Achievements Data
        $achievements = [
            [
                'title' => 'Full Stack Web Development Certification',
                'issuer' => 'Code Academy Indonesia',
                'year' => '2023'
            ],
            [
                'title' => 'Web Development Bootcamp Completion',
                'issuer' => 'Bootcamp Code Academy',
                'year' => '2022'
            ],
            [
                'title' => 'JavaScript Mastery Course',
                'issuer' => 'Udemy',
                'year' => '2023'
            ],
            [
                'title' => '2nd Place - Web Development Hackathon',
                'issuer' => 'Tech Innovation Summit 2023',
                'year' => '2023'
            ]
        ];

        // Social Links
        $social_links = [
            ['name' => 'LinkedIn', 'url' => 'https://linkedin.com/in/budisantoso', 'icon' => 'linkedin'],
            ['name' => 'GitHub', 'url' => 'https://github.com/budisantoso', 'icon' => 'github'],
            ['name' => 'Email', 'url' => 'mailto:budi@example.com', 'icon' => 'mail']
        ];

        // ============================================================================
        // PASS DATA KE VIEW
        // ============================================================================

        return view('pages.index', compact(
            'developer_name',
            'developer_title',
            'profile_image',
            'developer_bio',
            'developer_email',
            'developer_phone',
            'experiences',
            'education',
            'organizations',
            'hard_skills',
            'soft_skills',
            'projects',
            'achievements',
            'social_links'
        ));
    }
}