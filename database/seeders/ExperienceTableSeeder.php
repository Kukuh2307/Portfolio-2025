<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // data
        $experiences = [
            [
                'position' => 'Web Developer',
                'company' => 'SDN 1 Betet',
                'start_date' => '2025-04-01',
                'end_date' => '2025-07-01',
                'description' => '• Merancang alur sistem pakar edukasi digital untuk mendeteksi dan memberikan rekomendasi edukatif
terkait dampak penggunaan HP berlebihan pada siswa.
• Mendesain database sistem pakar yang memuat basis pengetahuan (knowledge base) berupa gejala,
aturan, dan solusi yang sesuai konteks pendidikan anak.
• Mengembangkan antarmuka UI/UX interaktif dengan pendekatan edukatif sehingga siswa dapat lebih
mudah memahami hasil diagnosa dan saran penggunaan HP.
• Membuat level akses pengguna yang berbeda, meliputi admin dan guru untuk proses monitoring dan
pembelajaran.
• Mengimplementasikan keamanan aplikasi web, meliputi: Validasi input untuk mencegah manipulasi
data siswa, Proteksi login multi-user dengan sistem autentikasi yang aman, Enkripsi data hasil evaluasi
siswa untuk menjaga kerahasiaan
• Melakukan pengujian, pemantauan kinerja, serta deployment sistem ke server sekolah, agar dapat
diakses dengan stabil dan mendukung proses belajar mengajar'
            ],
            [
                'position' => 'Web Developer',
                'company' => 'Ekowisata Tempurejo',
                'start_date' => '2024-04-01',
                'end_date' => '2025-05-01',
                'description' => '• Mengembangkan website dinamis menggunakan framework Laravel untuk menampilkan
                                    informasi destinasi wisata, paket tur, dan layanan pemesanan secara real-time.
                                    • Mengintegrasikan sistem pemesanan online yang memungkinkan pengunjung untuk memesan paket
                                    wisata secara langsung melalui website dengan notifikasi otomatis.
                                    • Menerapkan fitur manajemen konten yang memudahkan admin dalam memperbarui informasi
                                    destinasi, harga paket, dan promosi tanpa perlu pengetahuan teknis.
                                    • Mengoptimalkan performa website agar dapat diakses dengan cepat dan responsif di berbagai perangkat
                                    dan layar.
                                    • Melakukan pengujian fungsionalitas dan keamanan website untuk memastikan pengalaman pengguna yang
                                    aman dan lancar.
                                    • Melakukan deployment website ke server hosting dan memastikan ketersediaan layanan 24/7.'
            ],
            [
                'position' => 'Web Developer',
                'company' => 'RS Petrokimia Gresik',
                'start_date' => '2024-03-01',
                'end_date' => '2024-05-01',
                'description' => '• Merancang flowchart sistem sebagai dasar alur kerja aplikasi pengelolaan dokumen pasien.
• Mendesain dan mengimplementasikan database relasional untuk mendukung manajemen data pasien,
dokter, dan administrasi rumah sakit.
• Membuat desain UI/UX web yang responsif dan user-friendly agar mudah digunakan oleh admin
maupun pasien.
• Membangun fitur role-based access control untuk membedakan hak akses antara admin dan pasien.
• Merancang dan menerapkan keamanan website, termasuk: Enkripsi data pasien (data at rest dan data
in transit), Implementasi secure authentication &amp; authorization, Perlindungan dari SQL Injection,
XSS, dan CSRF
• Melakukan monitoring, maintenance, serta deployment website ke lingkungan production agar sistem
berjalan optimal dan stabil.'
            ],
            [
                'position' => 'MSIB Fullstack Developer',
                'company' => 'PT. Otak Kanan Indonesia',
                'start_date' => '2024-02-01',
                'end_date' => '2024-06-01',
                'description' => '• Mengembangkan website dinamis menggunakan framework Laravel untuk menampilkan
                                    informasi layanan rumah sakit, jadwal dokter, dan fasilitas kesehatan secara real-time.
                                    • Mengintegrasikan sistem pendaftaran online yang memungkinkan pasien untuk mendaftar
                                    konsultasi secara langsung melalui website dengan notifikasi otomatis.
                                    • Menerapkan fitur manajemen konten yang memudahkan admin dalam memperbarui informasi  
                                    layanan, jadwal dokter, dan promosi tanpa perlu pengetahuan teknis.
                                    • Mengoptimalkan performa website agar dapat diakses dengan cepat dan responsif di berbagai
                                    perangkat dan layar.
                                    • Melakukan pengujian fungsionalitas dan keamanan website untuk memastikan pengalaman pengguna yang
                                    aman dan lancar.
                                    • Melakukan deployment website ke server hosting dan memastikan ketersediaan layanan 24/
7.'
            ],
            [
                'position' => 'Admin',
                'company' => 'TK Mardisiwi Kepuhrejo',
                'start_date' => '2021-10-01',
                'end_date' => '2024-10-01',
                'description' => '• Mengembangkan website company profile menggunakan CMS WordPress untuk menampilkan
                                    informasi perusahaan, layanan, portofolio, dan kontak secara profesional.
                                    • Menerapkan tema dan plugin yang sesuai untuk meningkatkan fungsionalitas dan tampilan
                                    website sesuai kebutuhan klien.
                                    • Melakukan kustomisasi desain agar sesuai dengan identitas merek perusahaan.
                                    • Mengoptimalkan performa website agar dapat diakses dengan cepat dan responsif di berbagai perangkat
                                    dan layar.
                                    • Melakukan pengujian fungsionalitas dan kompatibilitas website di berbagai browser untuk memastikan
                                    pengalaman pengguna yang konsisten.
                                    • Melakukan deployment website ke server hosting dan memastikan ketersediaan layanan 24/7.'
            ]
        ];

        foreach ($experiences as $experience) {
            \App\Models\Experience::create($experience);
        }
    }
}
