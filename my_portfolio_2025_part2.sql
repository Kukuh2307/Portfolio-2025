-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2025 at 06:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_portfolio_2025_part2`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `organizer` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id`, `title`, `organizer`, `description`, `image`, `link`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Mahasiswa Berprestasi 2025 ', 'Universitas Nusantara PGRI Kediri', 'Dianugerahi penghargaan di tingkat universitas berdasarkan penilaian holistik yang mencakup keunggulan\nakademis, rekam jejak prestasi non-akademis, serta kualitas gagasan inovatif dalam karya tulis ilmiah.\n', 'achievements/best_developer_award.jpg', 'https://techconference2023.com/awards/best-developer', '2023-05-15', '2025-11-02 11:00:48', '2025-11-02 11:00:48'),
(2, 'PORSENASMA 2025', 'Persatuan Guru Republik Indonesia (PGRI)', 'Meraih predikat Juara Harapan 1 dalam Pekan Olahraga dan Seni Nasional Mahasiswa (PORSENASMA) IV,\nsebuah kompetisi tingkat nasional yang diikuti oleh mahasiswa dari berbagai perguruan tinggi di seluruh\nIndonesia.', 'achievements/hackathon_winner.jpg', 'https://globalhackathon2022.com/winners', '2022-11-20', '2025-11-02 11:00:48', '2025-11-02 11:00:48'),
(3, 'HAKI (Sistem Informasi Layanan Bus bagi Penyandang Tunanetra Berbasis AI)', 'KEMENKUMHAM', 'Sebuah perlindungan hukum atas karya intelektual berupa program komputer berupa Sistem Informasi Bus\nBerbasis AI untuk penyandang tunanetra', 'achievements/poetry_competition.jpg', 'https://kompetisisastraindonesia.com/puisi2024/winners', '2024-03-10', '2025-11-02 11:00:48', '2025-11-02 11:00:48'),
(4, 'HAKI (Next-Gen Bus System)', 'KEMENKUMHAM', 'Sebuah perlindungan hukum atas karya intelektual berupa gagasan inovasi dalam bentuk pengembangan\naplikasi mobile yang terintegrasi dengan AI\n', 'achievements/digital_marketing_certificate.jpg', 'https://digitalmarketing.google.com/certificates', '2023-08-05', '2025-11-02 11:00:48', '2025-11-02 11:00:48'),
(5, 'Pekan Inovasi 2025', 'Universitas Nusantara PGRI Kediri', 'Sebagai peraih juara 3 pada pekan inovasi yang diselenggarakan oleh Fakultas Teknik dan Ilmu Komputer\nUniversitas Nusantara PGRI Kediri tahun 2025', 'achievements/photography_award.jpg', 'https://photocompetition2023.com/awards', '2023-12-01', '2025-11-02 11:00:48', '2025-11-02 11:00:48'),
(6, 'Invited Speaker Prosiding Seminar Nasional TECHNOGUTURE 2025', 'Universitas PGRI Madiun', 'Dalam rangka Seminar Nasional yang diadakan oleh Universitas PGRI Madiun dengan tema\n\"TECHNOFUTURE (Teknologi Sebagai Penggerak Inovasi)', 'achievements/photography_award.jpg', 'https://globalhackathon2022.com/winners', '2022-11-20', '2025-11-02 11:00:48', '2025-11-02 11:00:48'),
(7, 'Pemateri Workshop “Pengenalan dan Pelatihan PKM 2025\"', 'Prodi Keperawatan Universitas Nusantara PGRI Kediri', 'Dipercaya untuk berbagi pengetahuan sebagai pemateri dalam workshop dengan membahas secara mendalam tentang PKM-GFT secara luring', 'achievements/photography_award.jpg', 'https://kompetisisastraindonesia.com/puisi2024/winners', '2024-03-10', '2025-11-02 11:00:48', '2025-11-02 11:00:48'),
(8, 'Pemateri Webinar “Menuju Lolos PKM Belmawa Dikti”', 'UKM PPN Universitas Nusantara PGRI Kediri', 'Memberikan pelatihan dan pembekalan secara daring mengenai strategi efektif untuk lolos seleksi proposal Program Kreativitas Mahasiswa (PKM-GFT)', 'achievements/photography_award.jpg', 'https://digitalmarketing.google.com/certificates', '2023-08-05', '2025-11-02 11:00:48', '2025-11-02 11:00:48');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1765305034),
('laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1765305034;', 1765305034),
('laravel-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1765383771),
('laravel-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1765383771;', 1765383771);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `degree`, `institution`, `major`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Informatika', 'Universitas Nusantara PGRI Kediri', 'Fakultas Teknik dan Ilmu Komputer', '2021-09-01', '2025-10-01', '2025-11-02 09:40:07', '2025-11-03 04:16:46'),
(2, 'Teknik Komputer dan Jaringan', 'SMK Negeri 1 Kras', NULL, '2017-09-01', '2019-06-01', '2025-11-02 09:40:07', '2025-11-02 09:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `position`, `company`, `start_date`, `end_date`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Web Developer', 'SDN 1 Betet', '2025-04-01', '2025-07-01', '<ul><li>Merancang alur sistem pakar edukasi digital untuk mendeteksi dan memberikan rekomendasi edukatif terkait dampak penggunaan HP berlebihan pada siswa.&nbsp;</li><li>Mendesain database sistem pakar yang memuat basis pengetahuan (knowledge base) berupa gejala, aturan, dan solusi yang sesuai konteks pendidikan anak.&nbsp;</li><li>Mengembangkan antarmuka UI/UX interaktif dengan pendekatan edukatif sehingga siswa dapat lebih mudah memahami hasil diagnosa dan saran penggunaan HP.&nbsp;</li><li>Membuat level akses pengguna yang berbeda, meliputi admin dan guru untuk proses monitoring dan pembelajaran.&nbsp;</li><li>Mengimplementasikan keamanan aplikasi web, meliputi: Validasi input untuk mencegah manipulasi data siswa, Proteksi login multi-user dengan sistem autentikasi yang aman, Enkripsi data hasil evaluasi siswa untuk menjaga kerahasiaan&nbsp;</li><li>Melakukan pengujian, pemantauan kinerja, serta deployment sistem ke server sekolah, agar dapat diakses dengan stabil dan mendukung proses belajar mengajar.&nbsp;</li></ul>', '2025-11-02 09:26:53', '2025-11-02 09:28:08'),
(3, 'Web Developer', 'Ekowisata Tempurejo', '2024-04-01', '2025-05-01', '<ul><li>Menyusun alur sistem informasi wisata mulai dari reservasi, jadwal kunjungan, hingga publikasi konten promosi digital.&nbsp;</li><li>Mendesain dan mengonfigurasi struktur database WordPress dengan menyesuaikan kebutuhan informasi wisata, fasilitas, serta data pengunjung.&nbsp;</li><li>Mengembangkan tampilan UI/UX website berbasis WordPress theme agar lebih interaktif, responsif, dan mudah diakses oleh wisatawan. \" Mengimplementasikan aspek keamanan website, seperti: Instalasi dan konfigurasi plugin keamanan (firewall, anti-spam, anti-malware), Penerapan SSL/TLS untuk keamanan transaksi online, Rutin melakukan backup data dan pemulihan sistem&nbsp;</li><li>Melakukan monitoring performa website, optimasi kecepatan (caching, image optimization), serta deployment website ke server production.</li></ul>', '2025-11-02 09:26:53', '2025-11-02 09:29:00'),
(4, 'Web Developer', 'RS Petrokimia Gresik', '2024-03-01', '2024-05-01', '<ul><li>Merancang flowchart sistem sebagai dasar alur kerja aplikasi pengelolaan dokumen pasien.&nbsp;</li><li>Mendesain dan mengimplementasikan database relasional untuk mendukung manajemen data pasien, dokter, dan administrasi rumah sakit.</li><li>&nbsp;Membuat desain UI/UX web yang responsif dan user-friendly agar mudah digunakan oleh admin maupun pasien.&nbsp;</li><li>Membangun fitur role-based access control untuk membedakan hak akses antara admin dan pasien.&nbsp;</li><li>Merancang dan menerapkan keamanan website, termasuk: Enkripsi data pasien (data at rest dan data in transit), Implementasi secure authentication &amp;amp; authorization, Perlindungan dari SQL Injection, XSS, dan CSRF&nbsp;</li><li>Melakukan monitoring, maintenance, serta deployment website ke lingkungan production agar sistem berjalan optimal dan stabil.&nbsp;</li></ul>', '2025-11-02 09:26:53', '2025-11-02 09:30:21'),
(5, 'MSIB Fullstack Developer', 'PT. Otak Kanan Indonesia', '2024-02-01', '2024-06-01', '<ul><li>Memimpin tim final project dalam siklus pengembangan penuh (end-to-end), mulai dari tahap perancangan, pengembangan, hingga deployment sistem manajemen gym.&nbsp;</li><li>Merancang dan mengembangkan arsitektur back-end dan basis data menggunakan Laravel, termasuk membangun RESTful API untuk pengelolaan data member, jadwal kelas, dan transaksi.&nbsp;</li><li>Mengimplementasikan antarmuka pengguna (UI) yang dinamis dan interaktif menggunakan Livewire, serta membangun panel admin yang komprehensif dan powerful dengan Filament.&nbsp;</li><li>Berhasil mengintegrasikan payment gateway (misalnya: Midtrans atau Xendit) untuk menangani proses pembayaran membership dan langganan secara online dan real-time.&nbsp;</li><li>Bertanggung jawab atas manajemen tugas tim, version control menggunakan Git, dan memastikan kualitas kode serta fungsionalitas aplikasi sesuai dengan target yang ditentukan.</li></ul>', '2025-11-02 09:26:53', '2025-11-02 09:31:40'),
(6, 'Admin', 'TK Mardisiwi Kepuhrejo', '2021-10-01', '2024-10-01', '<ul><li>Mengelola data lembaga pendidikan, termasuk data guru, siswa, laporan keuangan (BOP), serta rapor sekolah setiap semester.&nbsp;</li><li>Menangani administrasi surat menyurat (surat masuk/keluar) dan memastikan dokumentasi arsip terorganisir dengan baik.&nbsp;</li><li>Membantu penyusunan laporan akademik dan keuangan untuk kebutuhan internal maupun eksternal (dinas pendidikan).&nbsp;</li><li>Menyediakan layanan informasi dan administrasi bagi orang tua/wali siswa terkait proses penerimaan siswa baru, pembayaran, dan kebutuhan akademik.&nbsp;</li><li>Menggunakan aplikasi komputer (Microsoft Office/Google Workspace) untuk pengolahan data, penyusunan laporan, serta presentasi sekolah.&nbsp;</li></ul>', '2025-11-02 09:26:53', '2025-11-02 09:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hardskills`
--

CREATE TABLE `hardskills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_name` varchar(255) DEFAULT NULL,
  `category` enum('back-end','front-end','version-control','devops','database','design','network','cybersecurity','framework','library','operating-system','programming-language','other') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hardskills`
--

INSERT INTO `hardskills` (`id`, `skill_name`, `category`, `created_at`, `updated_at`) VALUES
(51, 'Tailwind CSS', 'front-end', '2025-11-02 21:41:59', '2025-11-02 21:41:59'),
(52, 'React', 'framework', '2025-11-02 21:41:59', '2025-11-03 03:46:52'),
(53, 'Git ', 'version-control', '2025-11-02 21:41:59', '2025-12-09 20:49:58'),
(54, 'Docker', 'devops', '2025-11-02 21:41:59', '2025-11-02 21:41:59'),
(55, 'AWS', 'devops', '2025-11-02 21:41:59', '2025-11-02 21:41:59'),
(56, 'REST API', 'back-end', '2025-11-02 21:41:59', '2025-11-02 21:41:59'),
(57, 'PHP', 'programming-language', '2025-11-02 21:43:15', '2025-11-03 03:46:01'),
(58, 'Laravel', 'framework', '2025-11-02 21:43:15', '2025-11-03 03:47:08'),
(59, 'MySQL', 'back-end', '2025-11-02 21:43:15', '2025-11-02 21:43:15'),
(60, 'HTML5', 'front-end', '2025-11-02 21:43:15', '2025-11-02 21:43:15'),
(61, 'CSS3', 'front-end', '2025-11-02 21:43:15', '2025-11-02 21:43:15'),
(69, 'Javascript', 'programming-language', '2025-12-09 20:08:14', '2025-12-09 20:08:14'),
(70, 'Java', 'programming-language', '2025-12-09 20:08:28', '2025-12-09 20:08:28'),
(71, 'Bootstrap', 'front-end', '2025-12-09 20:10:06', '2025-12-09 20:10:06'),
(72, 'SCSS', 'front-end', '2025-12-09 20:10:19', '2025-12-09 20:10:19'),
(73, 'Next.JS', 'front-end', '2025-12-09 20:10:55', '2025-12-09 20:10:55'),
(74, 'Filament', 'library', '2025-12-09 20:11:27', '2025-12-09 20:11:27'),
(75, 'Linux', 'operating-system', '2025-12-09 20:11:51', '2025-12-09 20:11:51'),
(76, 'Windows', 'operating-system', '2025-12-09 20:12:02', '2025-12-09 20:12:02'),
(77, 'Spatie', 'library', '2025-12-09 20:12:55', '2025-12-09 20:47:45'),
(78, 'Livewire', 'library', '2025-12-09 20:13:48', '2025-12-09 20:13:48'),
(79, 'Inertia', 'library', '2025-12-09 20:14:01', '2025-12-09 20:14:01'),
(80, 'Cisco', 'network', '2025-12-09 20:14:40', '2025-12-09 20:16:58'),
(81, 'Mikrotik', 'network', '2025-12-09 20:17:13', '2025-12-09 20:17:13'),
(82, 'Python', 'programming-language', '2025-12-09 20:19:49', '2025-12-09 20:19:49'),
(83, 'CI/CD', 'devops', '2025-12-09 20:28:58', '2025-12-09 20:28:58'),
(84, 'Breeze', 'library', '2025-12-09 20:48:58', '2025-12-09 20:48:58'),
(85, 'GitHub', 'version-control', '2025-12-09 20:50:07', '2025-12-09 20:50:07'),
(86, 'Xendit', 'library', '2025-12-09 20:50:47', '2025-12-09 20:50:47'),
(87, 'OWAPS', 'cybersecurity', '2025-12-09 22:23:44', '2025-12-09 22:23:44'),
(88, 'SQL Injection', 'cybersecurity', '2025-12-09 22:23:59', '2025-12-09 22:23:59'),
(89, 'XSS', 'cybersecurity', '2025-12-09 22:24:10', '2025-12-09 22:24:10'),
(90, 'Secure Coding', 'cybersecurity', '2025-12-09 22:25:57', '2025-12-09 22:25:57'),
(91, 'SSM', 'cybersecurity', '2025-12-09 22:26:33', '2025-12-10 09:22:12'),
(92, 'SSH', 'other', '2025-12-09 23:14:41', '2025-12-09 23:14:41'),
(93, 'Web Server', 'other', '2025-12-09 23:15:56', '2025-12-09 23:15:56'),
(94, 'WordPress', 'framework', '2025-12-09 23:17:41', '2025-12-09 23:17:41'),
(95, 'AI', 'other', '2025-12-09 23:21:13', '2025-12-09 23:21:13'),
(96, 'ML', 'other', '2025-12-09 23:21:27', '2025-12-09 23:21:27'),
(97, 'NLP', 'other', '2025-12-09 23:21:40', '2025-12-09 23:21:40'),
(98, 'Figma', 'design', '2025-12-09 23:25:28', '2025-12-09 23:25:28'),
(99, 'Typescript', 'programming-language', '2025-12-10 09:22:56', '2025-12-10 09:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_10_20_161920_create_profiles_table', 1),
(5, '2025_10_20_162250_create_experiences_table', 1),
(6, '2025_10_20_162408_create_education_table', 1),
(7, '2025_10_20_162657_create_organizations_table', 1),
(8, '2025_10_20_162902_create_softskills_table', 1),
(9, '2025_10_20_163025_create_hardskills_table', 1),
(10, '2025_10_20_163616_create_projects_table', 1),
(11, '2025_10_20_163843_create_achievements_table', 1),
(12, '2025_10_20_164138_create_social_media_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `position`, `organization`, `description`, `year`, `created_at`, `updated_at`) VALUES
(1, 'Ketua', 'PKM GFT PORSENASMA 2025', 'Sebagai Ketua Tim untuk kompetisi PKM-GFT PORSENASMA IV 2025, saya memimpin [Jumlah] anggota\ndalam seluruh siklus proyek. Tanggung jawab saya meliputi perancangan gagasan awal, manajemen jadwal\ndan pendelegasian tugas, serta memastikan kualitas proposal yang diajukan. Melalui kolaborasi dan\nmanajemen yang efektif, saya berhasil membawa tim meraih penghargaan sebagai Juara Harapan 1 di tingkat\nnasional.', '2025', '2025-11-02 10:25:22', '2025-11-02 10:25:22'),
(2, 'Ketua', 'PKM GFT BELMAWA 2024', 'Sebagai Ketua Tim, saya memimpin proyek penyusunan proposal untuk Program Kreativitas Mahasiswa -\nGagasan Futuristik Tertulis (PKM-GFT). Saya bertanggung jawab penuh atas manajemen tim, pengembangan\nkonsep, dan finalisasi proposal. Melalui kepemimpinan dan kerja sama tim yang solid, proposal kami berhasil\nlolos kompetisi tingkat nasional dan dianugerahi insentif pendanaan oleh Belmawa, Kemendikbudristek.', '2024', '2025-11-02 10:25:22', '2025-11-02 10:26:20'),
(3, 'Anggota Divisi Litbang', 'HIMADITI (Himpunan Mahasiswa Teknik Informatika', 'Sebagai Staf Divisi Litbang, saya bertanggung jawab untuk menjadi motor penggerak intelektual dan inovasi\ndi dalam himpunan. Peran saya meliputi melakukan riset kebutuhan mahasiswa, merancang program kerja\nyang relevan berdasarkan data, serta mengelola basis pengetahuan akademik. Saya juga aktif\nmenyelenggarakan forum diskusi untuk memperkaya wawasan anggota mengenai tren teknologi terbaru dan\nmengevaluasi program kerja yang berjalan untuk memastikan efektivitasnya.', '2022', '2025-11-02 10:25:22', '2025-11-02 10:25:58'),
(4, 'Pengurus Inti', 'SINOMAN (karang Taruna', 'Sebagai bagian dari gugus tugas \"Sinoman\" Karang Taruna, saya berperan aktif dalam menyukseskan berbagai\nacara kemasyarakatan. Tanggung jawab saya meliputi manajemen acara di lapangan, mulai dari koordinasi\nlogistik dan penyiapan lokasi hingga memastikan pelayanan terbaik bagi para tamu.', '2020', '2025-11-02 10:25:22', '2025-11-02 10:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `title`, `image`, `bio`, `created_at`, `updated_at`, `email`, `phone`, `address`, `subtitle`) VALUES
(1, 'Kukhuh Agung Prasetyo', 'Junior Web Developer', 'profiles/01K94KGAWET94KXF3EW82DGF1T.jpeg', '<p>Lulusan Sarjana Komputer dengan keahlian mendalam dalam Full-Stack Web Development dan pemahaman kuat mengenai infrastruktur DevOps. Mahir membangun aplikasi web modern yang skalabel menggunakan Laravel, Filament,&nbsp; Livewire, dan Next.js, serta menguasai implementasi CI/CD, manajemen server Linux, dan jaringan (MikroTik). Memiliki rekam jejak teruji dalam memimpin tim pengembangan proyek melalui program MSIB Kampus Merdeka dan kompetisi nasional PKM-GFT</p>', '2025-11-02 09:15:57', '2025-12-09 21:01:42', 'kukuhagung12@gmail.com', '081555762605', 'Tulungagung Jawa Timur', 'Saya adalah seorang developer yang passionate dalam menciptakan solusi digital yang inovatif dan berkualitas tinggi. Dengan pengalaman lebih dari 3 tahun di industri teknologi.');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `technology` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `description`, `technology`, `image`, `link`, `created_at`, `updated_at`) VALUES
(8, 'Ekowisata Jembangan', '<p>Platform informasi wisata dengan fitur reservasi, jadwal kunjungan, dan konten promosi. Dibangun dengan UI/UX responsif, database terstruktur, serta keamanan dan performa yang teroptimasi.</p>', '[\"Laravel\",\"TailwinCSS\",\"Filament\",\"Mysql\",\"Javascript\"]', 'projects/01KC229CV2M4SVW0S6P6NNQVK2.png', 'http://ekowisatatempurejo.com', '2025-11-02 21:05:41', '2025-12-09 10:47:58'),
(9, 'SICANTIK-RSPG', '<p>sistem informasi berbasis web yang digunakan untuk penyimpanan berkas, otomatisasi laporan, dan mempermudah admin maupun pasien dalam mengelola dokumen harian di RS Petrokimia Gresik.</p>', '[\"Laravel\",\"Tailwindcss\",\"Filament\",\"Mysql\",\"PDFDom\"]', 'projects/01K94P7Q58YT2BCP4G5RAS0PWF.png', NULL, '2025-11-03 04:04:32', '2025-12-09 10:48:15'),
(10, 'Sistem Pakar SDN 1 Betet Kediri', '<p>AWebsite ini menyediakan layanan assasement penggunaan smartphone bagi siswa, membantu orang tua dan guru dalam mengdiaknosa gejala, risiko serta rekomendasi berbasis metode Certainty Factor</p>', '[\"Laravel\",\"PHP\",\"Mysql\",\"Javascript\",\"TailwinCSS\",\"PDFDom\"]', 'projects/01KC22RVRNC13EK177S0DCKNR6.png', 'https://sistem-pakar-inklusi.com/login.php', '2025-12-09 10:32:59', '2025-12-09 10:32:59'),
(11, 'Sistem Informasi Layanan Bus bagi Penyandang Tunanetra', '<p>Sistem papan informasi bus berbasis web yang ramah tunanetra, menghadirkan navigasi suara, pencarian cerdas, dan informasi perjalanan akurat menggunakan TF-IDF, fuzzy, dan NLP.</p>', '[\"Laravel\",\"PHP\",\"Javascript\",\"Mysql\",\"TailwinCSS\",\"Filament\"]', 'projects/01KC231H3CRRYMMCH0SKCCCWWT.png', NULL, '2025-12-09 10:37:43', '2025-12-09 10:37:43'),
(12, 'BMI AND FOOD RECOMENDATION', '<p>Website perhitungan BMI dengan rekomendasi makanan sehat berbasis kebutuhan pengguna, menyediakan analisis cepat, saran nutrisi personal, dan panduan hidup sehat secara interaktif dan mudah diakses</p>', '[\"Python\",\"Jupyter_Notebook\",\"Streamlit\"]', 'projects/01KC23GD8AZV14SBFM24P7F6GM.png', 'https://bmiandfoodrecommendationgit-yk92uk3vgqnn4msjeimtgn.streamlit.app/', '2025-12-09 10:45:51', '2025-12-09 10:45:51'),
(14, 'Papan Informasi Taman Sekartaji Kediri', '<p>Website informasi Taman Sekartaji yang menampilkan fasilitas, denah, kegiatan, dan panduan kunjungan secara interaktif, membantu pengunjung mengenal area taman dengan lebih nyaman dan informatif</p>', '[\"Laravel\",\"PHP\",\"Filament\",\"Tailwindcss\",\"SwipperJS\"]', 'projects/01KC25BW108VWBQ6N2B6P0BBP8.jpg', NULL, '2025-12-09 11:18:19', '2025-12-09 11:19:17'),
(15, 'Sistem Informasi Management Fitness', '<p>Website manajemen fitness yang mengelola data member, jadwal latihan, instruktur, dan progres olahraga secara terstruktur, membantu gym meningkatkan layanan, efisiensi operasional, dan pengalaman pengguna</p>', '[\"Laravel\",\"PHP\",\"Javascript\",\"Filamet\",\"Xendit\",\"TailwinCSS\",\"Livewire\"]', 'projects/01KC260JCTB2T058WVSWP8ZCWN.png', NULL, '2025-12-09 11:29:37', '2025-12-09 11:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2K9St5vOaOAnaudLLfId1ccjcyFnKwB84GDy1sfH', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiemVpQTRRWGhBdTlubGFySkZWTGZwWnlWTDZ5V1pCZ2RKbWdZWHhxciI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0NjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2hhcmRza2lsbHMvNTUvZWRpdCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vaGFyZHNraWxscy81NS9lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1765340194),
('2M4O3T6LF7vtrclZzrEGvUUrYYVnMUWnLoUS18RH', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiazFsRHVZcWdrUW9IT3BrUW5KRmVCZFdGWFYwODVjOHFVam1WR3M4TCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL3Byb2plY3RzIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1765350512),
('5GbFkUzXdHBPWvGn4SZ2Y7U5cZ0iTAJw7QXy1FjH', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiQmZaUkR6RlJCZ1B6T2pPVnljWU9rU2ZBZE53V2RQNlFzV0lhUm5GTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkbC4yVUhNam1GQWk2TmhodkphY09oT0VLbXNVR3BOZkQwVS5IcXVmVmlQSVg2bk96emRNYWEiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1765383847),
('9sUjy4OGqmnzmoJSZNB9iRYjMeUzI6OTnpXHbUbB', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS21WRHlTend4NGxxS3Z3eTlDdVVaZTVLNWNEYzJHNEtLdFZId3RSRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1765341906),
('FEts4rz7Y4ZJWde83qJEbfN8QNuPPzYILYxZqZkA', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicDk3SFFrd1JBTW8xM3RmYUtjSGREY05kdEQxclZOWkdvbFVRMkYzbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1765346831),
('ijFFeK0CbQv3cwtEhtIVaQb0GMzalsaJ749br65t', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieVUzbU9ITDNhcjRUT1VYYXdJWk9PUlZiOGZ6cFRoQ1JQNkdYVUxOZCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL3Byb2ZpbGVzIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wcm9maWxlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1765341906),
('JXH11ni1fyzq19BqTtUYBhe5rNEjsJoSRrfKi8Xf', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOGZXaGlQdUp1d0lKMng0a0FkeXRybU9uUWd3bndaMHN2UndHbkFndiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0NjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2hhcmRza2lsbHMvODAvZWRpdCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vaGFyZHNraWxscy84MC9lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1765340191),
('kufo498K3x0bW5oRhAq8tgtC0Cd3wbx2RTTRk9Ue', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiTTdxTGd1dnkyTllvbEdmajdZVHdMSkVWRTQzN09HVUJsUlVuYlNRMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkbC4yVUhNam1GQWk2TmhodkphY09oT0VLbXNVR3BOZkQwVS5IcXVmVmlQSVg2bk96emRNYWEiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1765350682),
('m3WvYjYx9yIMrtl2pXcje3cGDUS53IV5VTkB9frd', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieGdWYmFjZk9ZTkxvaVZyWGxIcE5RUDVURkN5Zk4xMGtWRHhzVlJrYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1765340194),
('On5JztfilI1wcy9pfsC2eu3ZTASgaZcRjDjLRJ4r', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0QxSTBMMm4ySjFnME9UWE1hUGoxZmRmRkduOUxZU1hzN2w4VDVHbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1765344751),
('QWO1CwTfhtw5TPbHFZvlu2gIFHdlB2RBraceA9GG', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ0NEdEJOS1Rjczd4czRhZ0w5S0c3OVZZUzRQajhyOEtFWk1kejJqTSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2hhcmRza2lsbHMvNTMiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2hhcmRza2lsbHMvNTMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1765340825),
('yHfDDHadKIdG97C02HSPHnqiDnweqDonq9WNk2jo', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRGR3ZkxuenFqWkdGNXZraXVLQlByN2hCYnpoTlZPdWlENHNaRjRPeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1765340825),
('ZTsQHWxDpCQKA5y5dZYqDuZdWDHFtcSkFkwi581n', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWlpVYU1FNmNMU3BHbExjMlhSZmVIWWJtZ0k5NVAxaUVFSTFEekttZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1765340191);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `platform` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `softskills`
--

CREATE TABLE `softskills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `softskills`
--

INSERT INTO `softskills` (`id`, `skill_name`, `description`, `created_at`, `updated_at`) VALUES
(7, 'Problem Solving', 'Kemampuan untuk menganalisis masalah dan menemukan solusi yang efektif.', '2025-11-02 21:43:15', '2025-11-02 21:43:15'),
(8, 'Communication', 'Kemampuan untuk menyampaikan ide dan informasi dengan jelas kepada orang lain.', '2025-11-02 21:43:15', '2025-11-02 21:43:15'),
(9, 'Teamwork', 'Kemampuan untuk bekerja sama dengan orang lain dalam mencapai tujuan bersama.', '2025-11-02 21:43:15', '2025-11-02 21:43:15'),
(10, 'Adaptability', 'Kemampuan untuk beradaptasi dengan perubahan dan situasi baru.', '2025-11-02 21:43:15', '2025-11-02 21:43:15'),
(11, 'Time Management', 'Kemampuan untuk mengatur waktu secara efektif guna menyelesaikan tugas tepat waktu.', '2025-11-02 21:43:15', '2025-11-02 21:43:15'),
(12, 'Creativity', 'Kemampuan untuk berpikir di luar kotak dan menghasilkan ide-ide baru.', '2025-11-02 21:43:15', '2025-11-02 21:43:15'),
(13, 'Leadership', 'Kemampuan untuk memimpin dan memotivasi tim menuju pencapaian tujuan.', '2025-11-02 21:43:15', '2025-11-02 21:43:15'),
(14, 'Critical Thinking', 'Kemampuan untuk mengevaluasi informasi secara objektif dan membuat keputusan yang tepat.', '2025-11-02 21:43:15', '2025-11-02 21:43:15'),
(15, 'Emotional Intelligence', 'Kemampuan untuk mengenali, memahami, dan mengelola emosi sendiri dan orang lain.', '2025-11-02 21:43:15', '2025-11-02 21:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$l.2UHMjmFAi6NhhvJacOhOEKmsUGpNfD0U.HqufViPIX6nOzzdMaa', NULL, '2025-11-02 09:15:57', '2025-11-02 09:15:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hardskills`
--
ALTER TABLE `hardskills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `softskills`
--
ALTER TABLE `softskills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hardskills`
--
ALTER TABLE `hardskills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `softskills`
--
ALTER TABLE `softskills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
