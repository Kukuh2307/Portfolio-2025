<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // data
        $educations = [
            [
                'degree' => 'Teknik Informatika',
                'institution' => 'Universitas Nusantara PGRI Kediri',
                'start_date' => '2021-09-01',
                'end_date' => '2025-10-01',
            ],
            [
                'degree' => 'Teknik Komputer dan Jaringan',
                'institution' => 'SMK Negeri 1 Kras',
                'start_date' => '2017-09-01',
                'end_date' => '2019-06-01',
            ],
        ];

        foreach ($educations as $education) {
            \App\Models\Education::create($education);
        }
    }
}
