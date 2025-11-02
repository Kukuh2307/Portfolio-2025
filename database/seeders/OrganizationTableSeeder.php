<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //data
        $organizations = [
            [
                            'position' => 'Ketua',
            'organization' => 'PKM GFT PORSENASMA 2025',
            'description' => 'Sebagai Ketua Tim untuk kompetisi PKM-GFT PORSENASMA IV 2025, saya memimpin [Jumlah] anggota
dalam seluruh siklus proyek. Tanggung jawab saya meliputi perancangan gagasan awal, manajemen jadwal
dan pendelegasian tugas, serta memastikan kualitas proposal yang diajukan. Melalui kolaborasi dan
manajemen yang efektif, saya berhasil membawa tim meraih penghargaan sebagai Juara Harapan 1 di tingkat
nasional.',
            'year' => '2025',
            ],
            [
                'position' => 'lETIA',
                'organization' => "PKM GFT BELMAWA 2024",
                'description' => 'Sebagai Ketua Tim, saya memimpin proyek penyusunan proposal untuk Program Kreativitas Mahasiswa -
Gagasan Futuristik Tertulis (PKM-GFT). Saya bertanggung jawab penuh atas manajemen tim, pengembangan
konsep, dan finalisasi proposal. Melalui kepemimpinan dan kerja sama tim yang solid, proposal kami berhasil
lolos kompetisi tingkat nasional dan dianugerahi insentif pendanaan oleh Belmawa, Kemendikbudristek.',
                'year' => '2024',
            ],
            [
                'position' => 'AnggotaDivisi Litbang',
                'organization' => 'HIMADITI (Himpunan Mahasiswa Teknik Informatika',
                'description' => 'Sebagai Staf Divisi Litbang, saya bertanggung jawab untuk menjadi motor penggerak intelektual dan inovasi
di dalam himpunan. Peran saya meliputi melakukan riset kebutuhan mahasiswa, merancang program kerja
yang relevan berdasarkan data, serta mengelola basis pengetahuan akademik. Saya juga aktif
menyelenggarakan forum diskusi untuk memperkaya wawasan anggota mengenai tren teknologi terbaru dan
mengevaluasi program kerja yang berjalan untuk memastikan efektivitasnya.',
                'year' => '2022',
            ],
            [
                'position' => 'Pengurus Inti',
                'organization' => 'SINOMAN (karang Taruna',
                'description' => 'Sebagai bagian dari gugus tugas "Sinoman" Karang Taruna, saya berperan aktif dalam menyukseskan berbagai
acara kemasyarakatan. Tanggung jawab saya meliputi manajemen acara di lapangan, mulai dari koordinasi
logistik dan penyiapan lokasi hingga memastikan pelayanan terbaik bagi para tamu.',
                'year' => '2020',
            ],
        ];

        foreach ($organizations as $organization) {
            \App\Models\Organization::create($organization);
        }
    }
}
