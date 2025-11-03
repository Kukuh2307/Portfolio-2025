<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HardskillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //data\
        $hard_skills = [
            ['skill_name' => 'PHP', 'category' => 'back-end'],
            ['skill_name' => 'Laravel', 'category' => 'back-end'],
            ['skill_name' => 'MySQL', 'category' => 'back-end'],
            ['skill_name' => 'HTML5', 'category' => 'front-end'],
            ['skill_name' => 'CSS3', 'category' => 'front-end'],
            ['skill_name' => 'JavaScript', 'category' => 'front-end'],
            ['skill_name' => 'Tailwind CSS', 'category' => 'front-end'],
            ['skill_name' => 'React', 'category' => 'front-end'],
            ['skill_name' => 'Git & GitHub', 'category' => 'devops'],
            ['skill_name' => 'Docker', 'category' => 'devops'],
            ['skill_name' => 'AWS', 'category' => 'devops'],
            ['skill_name' => 'REST API', 'category' => 'back-end']
        ];

        foreach ($hard_skills as $hardskill) {
            \App\Models\Hardskill::create($hardskill);
        }
    }
}
