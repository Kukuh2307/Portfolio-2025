<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Kukhuh Agung Prasetyo',
            'title' => 'Full Stack Developer',
            'bio' => 'Passionate developer with experience in building web applications.',
            'image' => 'profiles/default.jpg',
        ]);
    }
}
