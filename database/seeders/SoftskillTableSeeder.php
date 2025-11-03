<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Softskill;

class SoftskillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar soft skills
        $soft_skills = [
            [
                'skill_name' => 'Problem Solving',
                'description' => 'Kemampuan untuk menganalisis masalah dan menemukan solusi yang efektif.'
            ],
            [
                'skill_name' => 'Communication',
                'description' => 'Kemampuan untuk menyampaikan ide dan informasi dengan jelas kepada orang lain.'
            ],
            [
                'skill_name' => 'Teamwork',
                'description' => 'Kemampuan untuk bekerja sama dengan orang lain dalam mencapai tujuan bersama.'
            ],
            [
                'skill_name' => 'Adaptability',
                'description' => 'Kemampuan untuk beradaptasi dengan perubahan dan situasi baru.'
            ],
            [
                'skill_name' => 'Time Management',
                'description' => 'Kemampuan untuk mengatur waktu secara efektif guna menyelesaikan tugas tepat waktu.'
            ],
            [
                'skill_name' => 'Creativity',
                'description' => 'Kemampuan untuk berpikir di luar kotak dan menghasilkan ide-ide baru.'
            ],
            [
                'skill_name' => 'Leadership',
                'description' => 'Kemampuan untuk memimpin dan memotivasi tim menuju pencapaian tujuan.'
            ],
            [
                'skill_name' => 'Critical Thinking',
                'description' => 'Kemampuan untuk mengevaluasi informasi secara objektif dan membuat keputusan yang tepat.'
            ],
            [
                'skill_name' => 'Emotional Intelligence',
                'description' => 'Kemampuan untuk mengenali, memahami, dan mengelola emosi sendiri dan orang lain.'
            ],
        ];

        // Loop dan insert ke database
        foreach ($soft_skills as $skill) {
            Softskill::create([
                'skill_name' => $skill['skill_name'],
                'description' => $skill['description'],
            ]);
        }
    }
}
