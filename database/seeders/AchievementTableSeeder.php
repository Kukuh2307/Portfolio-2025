<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchievementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // data
        $achievements = [
            [
                'title' => 'Mahasiswa Berprestasi 2025 ',
                'organizer' => 'Universitas Nusantara PGRI Kediri',
                'description' => 'Dianugerahi penghargaan di tingkat universitas berdasarkan penilaian holistik yang mencakup keunggulan
akademis, rekam jejak prestasi non-akademis, serta kualitas gagasan inovatif dalam karya tulis ilmiah.
',
                'image' => 'achievements/best_developer_award.jpg',
                'link' => 'https://techconference2023.com/awards/best-developer',
                'date' => '2023-05-15',
            ],
            [
                'title' => 'PORSENASMA 2025',
                'organizer' => 'Persatuan Guru Republik Indonesia (PGRI)',
                'description' => 'Meraih predikat Juara Harapan 1 dalam Pekan Olahraga dan Seni Nasional Mahasiswa (PORSENASMA) IV,
sebuah kompetisi tingkat nasional yang diikuti oleh mahasiswa dari berbagai perguruan tinggi di seluruh
Indonesia.',
                'image' => 'achievements/hackathon_winner.jpg',
                'link' => 'https://globalhackathon2022.com/winners',
                'date' => '2022-11-20',
            ],
            [
                'title' => 'HAKI (Sistem Informasi Layanan Bus bagi Penyandang Tunanetra Berbasis AI)',
                'organizer' => 'KEMENKUMHAM',
                'description' => 'Sebuah perlindungan hukum atas karya intelektual berupa program komputer berupa Sistem Informasi Bus
Berbasis AI untuk penyandang tunanetra',
                'image' => 'achievements/poetry_competition.jpg',
                'link' => 'https://kompetisisastraindonesia.com/puisi2024/winners',
                'date' => '2024-03-10',
            ],
            [
                'title' => 'HAKI (Next-Gen Bus System)',
                'organizer' => 'KEMENKUMHAM',
                'description' => 'Sebuah perlindungan hukum atas karya intelektual berupa gagasan inovasi dalam bentuk pengembangan
aplikasi mobile yang terintegrasi dengan AI
',
                'image' => 'achievements/digital_marketing_certificate.jpg',
                'link' => 'https://digitalmarketing.google.com/certificates',
                'date' => '2023-08-05',
            ],
            [
                'title' => 'Pekan Inovasi 2025',
                'organizer' => 'Universitas Nusantara PGRI Kediri',
                'description' => 'Sebagai peraih juara 3 pada pekan inovasi yang diselenggarakan oleh Fakultas Teknik dan Ilmu Komputer
Universitas Nusantara PGRI Kediri tahun 2025',                
                'image' => 'achievements/photography_award.jpg',
                'link' => 'https://photocompetition2023.com/awards',
                'date' => '2023-12-01',
            ],
            [
                'title' => 'Invited Speaker Prosiding Seminar Nasional TECHNOGUTURE 2025',
                'organizer' => 'Universitas PGRI Madiun',
                'description' => 'Dalam rangka Seminar Nasional yang diadakan oleh Universitas PGRI Madiun dengan tema
"TECHNOFUTURE (Teknologi Sebagai Penggerak Inovasi)',
                'image' => 'achievements/photography_award.jpg',
                'link' => 'https://globalhackathon2022.com/winners',
                'date' => '2022-11-20',
            ],
            [
                'title' => 'Pemateri Workshop “Pengenalan dan Pelatihan PKM 2025"',
                'organizer' => 'Prodi Keperawatan Universitas Nusantara PGRI Kediri',
                'description' => 'Dipercaya untuk berbagi pengetahuan sebagai pemateri dalam workshop dengan membahas secara mendalam tentang PKM-GFT secara luring',
                'image' => 'achievements/photography_award.jpg',
                'link' => 'https://kompetisisastraindonesia.com/puisi2024/winners',
                'date' => '2024-03-10',
            ],
            [
                'title' => 'Pemateri Webinar “Menuju Lolos PKM Belmawa Dikti”',
                'organizer' => 'UKM PPN Universitas Nusantara PGRI Kediri',
                'description' => 'Memberikan pelatihan dan pembekalan secara daring mengenai strategi efektif untuk lolos seleksi proposal Program Kreativitas Mahasiswa (PKM-GFT)',
                'image' => 'achievements/photography_award.jpg',
                'link' => 'https://digitalmarketing.google.com/certificates',
                'date' => '2023-08-05',
            ],
        ];

        foreach ($achievements as $achievement) {
            \App\Models\Achievement::create($achievement);
        }
    }
}
