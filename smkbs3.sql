-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 06:41 AM
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
-- Database: `smkbs3`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `category_id`, `judul`, `slug`, `deskripsi`, `image`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Upacara Senin', 'upacara-senin', 'Upacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah PemudaUpacara hari Senin memperingati Sumpah Pemuda', '[\"berita\\/01JCZ1YDWJZET4GXDQPYRH3WDX.jpeg\",\"berita\\/01JCZ1YDX09FBC8M45ZYY3R13Z.jpeg\",\"berita\\/01JCZ1YDX8Y8HDNGM4TNHTFPDN.jpeg\"]', 1, '2024-11-16 07:13:11', '2024-11-19 20:39:30', '2024-11-19 20:39:30'),
(2, 4, 'Kepramukaan', 'kepramukaan', 'Kepramukaan di smk bina sejahtera 3 dan 4 Kepramukaan di smk bina sejahtera 3 dan 4Kepramukaan di smk bina sejahtera 3 dan 4Kepramukaan di smk bina sejahtera 3 dan 4Kepramukaan di smk bina sejahtera 3 dan 4Kepramukaan di smk bina sejahtera 3 dan 4', 'berita/01JCTT5G4RJMEBK7Q30F3MN14T.jpeg', 1, '2024-11-16 08:41:18', '2024-11-19 20:39:30', '2024-11-19 20:39:30'),
(3, 1, 'Maulid Nabi', 'maulid-nabi', 'Maulid nabi di smk bina sejahteraMaulid nabi di smk bina sejahteraMaulid nabi di smk bina sejahteraMaulid nabi di smk bina sejahteraMaulid nabi di smk bina sejahteraMaulid nabi di smk bina sejahteraMaulid nabi di smk bina sejahtera', 'berita/01JCTT74FRWD0VSZ9TDXGSN1YK.jpeg', 1, '2024-11-16 08:42:12', '2024-11-19 20:39:30', '2024-11-19 20:39:30'),
(4, 3, 'Lomba di SMKN1', 'lomba-di-smkn1', 'Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1Juara 2 di lomba SMKN 1', '[\"berita\\/01JCTT8AEQ6AJKTYDR9A7YE9F4.jpeg\",\"berita\\/01JCZ0Q6WTZ1GM270145QA1FX9.png\",\"berita\\/01JCZ0Q6X0NP8VF0Z3YYDG06YV.jpeg\",\"berita\\/01JCZ0Q6X2WG1DP43PWRWXCDXG.jpeg\"]', 1, '2024-11-16 08:42:51', '2024-11-19 20:39:30', '2024-11-19 20:39:30'),
(5, 1, 'Shalawat', 'shalawat', 'beritaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberitaberita', '[\"berita\\/01JCZ64B0QAK2YECPZGASHF10E.jpeg\",\"berita\\/01JCZ64B31GB0CXEZHS27308WX.jpeg\"]', 1, '2024-11-18 01:27:21', '2024-11-18 01:31:46', '2024-11-18 01:31:46'),
(6, 2, 'upacara', 'upacara', 'berita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita ajaberita aja', '[\"berita\\/01JCZ68K95FRSV0R930ZF3VGN2.jpeg\",\"berita\\/01JCZ68K9DZ6S49CM8MAVSRW4E.jpeg\"]', 1, '2024-11-18 01:29:41', '2024-11-19 20:39:30', '2024-11-19 20:39:30'),
(7, 3, 'Fauziah Nur Aqilla - Lomba Poster Digital', 'fauziah-nur-aqilla-lomba-poster-digital', 'Fauziah Nur Aqilla, siswa kelas XII MPLB 2 dari SMK Bina Sejahtera 3 Bogor, berhasil meraih prestasi gemilang dengan menjadi Juara 2 dalam Lomba Poster Digital yang diselenggarakan dalam rangka Lomba Palang Merah Remaja (PMR) tingkat SMK se-Bogor, yang berlangsung di SMKN 1 Bogor.\n\nKeberhasilan Fauziah ini tidak hanya menunjukkan bakat dan kreativitas luar biasa dalam desain grafis, tetapi juga dedikasinya dalam mempersembahkan karya terbaik untuk sekolah. Lomba ini menjadi ajang pembuktian bagi Fauziah untuk menampilkan kemampuannya dalam menciptakan poster digital yang menarik dan penuh makna, yang tentunya memberikan dampak positif dalam mengedukasi dan menginspirasi orang lain, khususnya di bidang kesehatan dan kemanusiaan.\n\nPrestasi ini tentunya membawa kebanggaan bagi SMK Bina Sejahtera 3, dan menjadi bukti bahwa siswa-siswinya mampu bersaing di tingkat yang lebih tinggi, serta mampu menunjukkan semangat dan kecakapan yang luar biasa di berbagai bidang. \n\nKami berharap prestasi Fauziah dapat menjadi inspirasi bagi seluruh siswa di SMK Bina Sejahtera 3 untuk terus berkreasi, berprestasi, dan memberikan yang terbaik. Semoga keberhasilan ini menjadi langkah awal bagi lebih banyak prestasi yang akan diraih oleh para siswa di masa depan.\n\nSelamat dan sukses terus, Fauziah! 🌟', '[\"berita\\/01JD3W7NS1DA35N2FVP5ZME4V4.jpeg\",\"berita\\/01JD3W7NSAXZN1NW21GB91PMC6.jpeg\",\"berita\\/01JD3W7NSKANPTMET4R7AC6WFJ.jpeg\"]', 1, '2024-11-19 21:10:37', '2024-11-19 21:10:37', NULL),
(8, 4, 'Penerimaan Tamu Ambalan 2024', 'penerimaan-tamu-ambalan-2024', 'Pada hari ini, SMK Bina Sejahtera 3 Bogor dengan bangga menyambut para tamu Ambalan Pramuka tahun 2024. Sebuah awal yang penuh semangat untuk memulai perjalanan baru yang penuh petualangan, kebersamaan, dan pembelajaran yang berharga.\n\nDengan semangat Pramuka yang mengedepankan nilai-nilai kebersamaan, kejujuran, dan kedisiplinan, para peserta diharapkan dapat mengasah keterampilan yang akan membentuk pribadi tangguh dan berintegritas. Di bawah bimbingan para pembina, perjalanan ini akan memberikan berbagai pengalaman yang tak terlupakan, mengajarkan tentang kepemimpinan, kerja tim, dan tanggung jawab, serta mempersiapkan generasi muda untuk menghadapi tantangan di masa depan.\n\nMelalui kegiatan Ambalan Pramuka ini, kami berharap setiap individu dapat tumbuh dan berkembang menjadi pribadi yang lebih baik, serta membawa semangat kebersamaan dan kemandirian dalam kehidupan sehari-hari.\n\nMari kita jadikan momen ini sebagai awal dari kisah inspiratif kita sebagai generasi Pramuka yang siap menghadapi dunia dan masa depan yang penuh tantangan! Selamat berpetualang dan semoga sukses selalu! ', '[\"berita\\/01JD3X1FG8QCXECAJH4Z78XP9C.JPG\",\"berita\\/01JD3X1FGRHHFYBKVEZM701HM2.JPG\",\"berita\\/01JD3X1FGZ2FZ2MZN0H2NS5FYW.jpeg\",\"berita\\/01JD3X1FHAJW05QSD9SMQ00VNQ.jpeg\",\"berita\\/01JD3X1FHFG3SXZW1JRG7823CW.jpeg\"]', 1, '2024-11-19 21:24:42', '2024-11-19 21:35:25', NULL),
(9, 4, 'Pelantikan PMR', 'pelantikan-pmr', 'SMK Bina Sejahtera 3 Kota Bogor dengan bangga mengumumkan bahwa pada tanggal 2–3 November 2024, telah dilantik anggota baru Palang Merah Remaja (PMR) yang siap untuk menjalankan misi kemanusiaan dan pengabdian. Acara pelantikan ini menjadi momen bersejarah yang menandai awal perjalanan anggota baru PMR dalam memberikan kontribusi positif bagi sesama.\n\nDengan semangat kemanusiaan dan rasa tanggung jawab yang tinggi, para anggota PMR baru ini siap menjadi garda terdepan dalam membantu mereka yang membutuhkan dan mempererat solidaritas di lingkungan sekolah serta masyarakat. Keterlibatan dalam PMR bukan hanya tentang mengasah keterampilan medis dan pertolongan pertama, tetapi juga tentang membangun kepedulian sosial yang kuat dan berdampak luas.\n\nPelantikan ini menjadi titik awal yang penuh inspirasi bagi para anggota untuk terus berkontribusi, mengabdi, dan memberikan manfaat kepada banyak orang dengan hati yang tulus dan tekad yang kuat. Semoga semangat pengabdian ini terus tumbuh dan berkembang, menjadikan PMR SMK Bina Sejahtera sebagai wadah yang produktif dan bermanfaat bagi masyarakat sekitar.\n\nSelamat bergabung dan semoga sukses selalu, anggota baru PMR SMK Bina Sejahtera 3! ', '[\"berita\\/01JD3XK253T0N7A6GAKYN5THT6.JPG\",\"berita\\/01JD3XK25NBKMB5MN7ZC26F3BF.JPG\",\"berita\\/01JD3XK2634NWQS5G5PDMYB3HG.JPG\",\"berita\\/01JD3XK26JMDC90HDETQ0GM3GA.JPG\",\"berita\\/01JD3XK2721P2PYA3AHDX3W5NW.JPG\"]', 1, '2024-11-19 21:34:18', '2024-11-19 21:34:18', NULL),
(10, 2, 'LDKS SMK Bina Sejahtera 3', 'ldks-smk-bina-sejahtera-3', 'SMK Bina Sejahtera 3 Bogor baru-baru ini sukses menyelenggarakan Latihan Dasar Kepemimpinan Siswa (LDKS) untuk para siswa kelas XI. Kegiatan ini berlangsung selama beberapa hari, bertujuan untuk membekali para peserta dengan keterampilan kepemimpinan, kedisiplinan, dan nilai-nilai positif yang dapat diterapkan dalam kehidupan sehari-hari.\n\nLDKS SMK Bina Sejahtera 3 Bogor kali ini diikuti oleh seluruh siswa kelas XI dan melibatkan berbagai kegiatan yang mendalam dan penuh tantangan. Mulai dari pelatihan fisik, simulasi kepemimpinan, hingga kegiatan-kegiatan yang mendorong pengembangan diri dan kerja sama tim. Setiap peserta diberikan kesempatan untuk mengasah kemampuan komunikasi, penyelesaian masalah, serta meningkatkan rasa tanggung jawab dan kepedulian terhadap sesama.\n\nKegiatan ini juga mengajak para siswa untuk lebih memahami pentingnya etika, integritas, serta semangat gotong royong dalam mencapai tujuan bersama. Dengan pengajaran dari para pembina yang berpengalaman, LDKS ini diharapkan dapat mencetak pemimpin-pemimpin muda yang tidak hanya unggul dalam prestasi akademik, tetapi juga memiliki karakter yang kuat untuk menghadapi tantangan di masa depan.\n\nLDKS SMK Bina Sejahtera 3 Bogor diharapkan dapat memberikan dampak positif yang berkelanjutan, serta menjadi bagian penting dalam pembentukan pribadi-pribadi yang berintegritas, mampu memimpin, dan siap berkontribusi untuk kemajuan sekolah, masyarakat, dan bangsa.\n\nSemoga pengalaman yang didapatkan selama LDKS ini dapat membawa setiap peserta menjadi pribadi yang lebih tangguh dan siap menjadi pemimpin masa depan.', '[\"berita\\/01JD3Y68RP35H1HXM3066SC24Q.jpeg\",\"berita\\/01JD3Y68RVT9PRZJW7G34HXGM7.jpeg\",\"berita\\/01JD3Y68RXQ98XKR546HDD7NEK.jpeg\",\"berita\\/01JD3Y68RZE3153N68JVPHA4E8.jpeg\"]', 1, '2024-11-19 21:44:48', '2024-11-19 21:44:48', NULL),
(11, 2, 'Uji Level Kompetensi Keahlian Akuntansi ', 'uji-level-kompetensi-keahlian-akuntansi', 'SMK Bina Sejahtera 3 Bogor kembali menyelenggarakan Uji Level Kompetensi bagi siswa-siswi program keahlian Akuntansi pada tahun 2024. Kegiatan ini menjadi ajang bagi para siswa untuk membuktikan kemampuan mereka sekaligus mempersiapkan diri untuk bersaing di dunia kerja.\n\nUji level ini melibatkan berbagai aspek penting dalam bidang akuntansi, seperti pengelolaan keuangan, penyusunan laporan keuangan, hingga analisis data akuntansi. Para siswa ditantang untuk menerapkan pengetahuan dan keterampilan yang telah mereka pelajari selama masa studi.\n\n“Kegiatan ini bertujuan untuk memastikan siswa-siswi kami memiliki kompetensi yang sesuai dengan kebutuhan dunia kerja. Uji level juga melatih mereka untuk bekerja dengan teliti, cepat, dan profesional,” ujar salah satu guru pembimbing program keahlian Akuntansi.\n\nMelalui uji level ini, para peserta tidak hanya diuji secara teknis, tetapi juga didorong untuk meningkatkan kemampuan berpikir kritis, penyelesaian masalah, serta penguasaan teknologi berbasis akuntansi. Hal ini diharapkan dapat mencetak lulusan yang tidak hanya kompeten, tetapi juga siap kerja dan mampu bersaing di era digital.\n\nSMK Bina Sejahtera 3 Bogor terus berkomitmen untuk mencetak lulusan yang unggul di bidangnya, menjadikan kegiatan seperti Uji Level Kompetensi sebagai bagian penting dalam kurikulum.\n\nBagi para siswa yang memiliki minat dan bakat di bidang akuntansi, SMK Bina Sejahtera 3 Bogor membuka pendaftaran untuk tahun ajaran 2024/2025. Bergabunglah dan persiapkan masa depan Anda bersama kami!', '[\"berita\\/01JD435ZWJVWAGGGBYTV2CNKMS.jpeg\",\"berita\\/01JD435ZX59D7VQSSJAS824Z6C.jpeg\",\"berita\\/01JD435ZXHNGD0Y91TZ24ZGV78.jpeg\",\"berita\\/01JD435ZXTHXHCEMY9R4EDDB9X.jpeg\",\"berita\\/01JD435ZY8H6QMW1XDTA33DY8T.jpeg\"]', 1, '2024-11-19 23:12:02', '2024-11-19 23:12:02', NULL);

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
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:2;', 1732846285),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1732846285;', 1732846285),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1733540385),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1733540385;', 1733540385);

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `judul`, `slug`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Keagamaan', 'keagamaan', 1, '2024-11-16 07:08:12', '2024-11-16 07:08:12'),
(2, 'Kegiatan', 'kegiatan', 1, '2024-11-16 07:08:30', '2024-11-16 07:08:30'),
(3, 'Prestasi', 'prestasi', 1, '2024-11-16 07:08:38', '2024-11-16 07:08:38'),
(4, 'Ekstrakulikuler', 'ekstrakulikuler', 1, '2024-11-16 07:08:50', '2024-11-16 07:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `judul`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mendidik dengan hati', 'Menekankan para prinsip panggilan jiwa sebagai dasar sebuah profesi guru yang disanjung tinggi. Mendidik dengan hati akan menyentuh aspek psikologis dari anak didik yang membuat proses pembelajaran dikelas penuh akan rasa kesadaran', 'choice/01JCPXHAYK1Q14KD6BN06NTSDF.png', '2024-11-14 20:23:14', '2024-11-14 20:23:14'),
(2, 'Guru berkompeten', 'Guru merupakan faktor penting dalam proses belajar-mengajar. Itulah kenapa kami mendatangkan guru-guru berkompeten dibidangnya.\n', 'choice/01JCPY6FKE7MWGQ21J6B1V8KB5.png', '2024-11-14 20:34:47', '2024-11-14 20:34:47'),
(3, 'Proses belajar interaktif', 'Kami membuat proses belajar mengajar menjadi lebih interatif, dengan demikian siswa lebih nyaman ketika belajar.', 'choice/01JCPYBCWEFWG8A1RWJJFB243X.png', '2024-11-14 20:37:28', '2024-11-14 20:37:28');

-- --------------------------------------------------------

--
-- Table structure for table `deskeskuls`
--

CREATE TABLE `deskeskuls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `alasan` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deskeskuls`
--

INSERT INTO `deskeskuls` (`id`, `judul`, `deskripsi`, `alasan`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Alasan Ekskul', 'Ekstrakurikuler memiliki peran yang sangat penting dalam perkembangan siswa. Dengan mengikuti kegiatan ekstrakurikuler, siswa tidak hanya dapat mengembangkan keterampilan yang tidak didapatkan dalam pelajaran akademik, tetapi juga membentuk karakter, meningkatkan rasa percaya diri, serta memperluas jaringan sosial mereka. Oleh karena itu, siswa sebaiknya memanfaatkan kesempatan ini untuk tumbuh dan berkembang dalam berbagai aspek kehidupan.', 'Mengembangkan Bakat dan Minat\nMeningkatkan Keterampilan Sosial\nMenumbuhkan Disiplin dan Tanggung Jawab\nMeningkatkan Kesehatan Fisik dan Mental\nMemperluas Wawasan dan Pengalaman\nMembangun Kepercayaan Diri', 'deskeskul/01JD1868QESQ5T24QMRDH9GTR6.jpeg', '2024-11-18 20:27:57', '2024-11-18 20:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `deskprestasis`
--

CREATE TABLE `deskprestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikulers`
--

CREATE TABLE `ekstrakulikulers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekstrakulikulers`
--

INSERT INTO `ekstrakulikulers` (`id`, `judul`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Thurfan', 'https://wa.me/628561227618', 'ekstrakulikuler/01JCZ7XJ96ETP7N1DAXKKJC4J4.jpeg', '2024-11-18 01:58:36', '2024-11-18 02:01:51'),
(2, 'Bela diri Matahari', 'https://wa.me/6285710404897', 'ekstrakulikuler/01JD16E4GC12RVJM8E4YYRB106.jpeg', '2024-11-18 20:11:11', '2024-11-18 20:11:11'),
(3, 'Pramuka', 'https://wa.me/628987749023', 'ekstrakulikuler/01JD3R3YPKW1E6Q8NVTFVQ3A62.jpeg', '2024-11-18 20:12:10', '2024-11-19 19:58:41'),
(4, 'PMR', 'https://wa.me/628978534267', 'ekstrakulikuler/01JD3VCHCDYBVZF5J0BERT7Q83.jpeg', '2024-11-19 20:55:47', '2024-11-19 23:18:23'),
(5, 'Badminton', 'https://wa.me/6289527820126', 'ekstrakulikuler/01JD43E0YTDKB2Z3CS6AAQA9CD.jpeg', '2024-11-19 23:16:25', '2024-11-19 23:16:25'),
(6, 'English Club', 'https://wa.me/6285225019639', 'ekstrakulikuler/01JD43G0G0PRYVK2Z4P3KAHQ70.jpeg', '2024-11-19 23:17:30', '2024-11-19 23:17:30'),
(7, 'Paskibra', 'https://wa.me/6281252824233', 'ekstrakulikuler/01JD43GPN2W0SG6D55TZMW7ACK.jpeg', '2024-11-19 23:17:53', '2024-11-19 23:17:53'),
(8, 'Basket', 'https://wa.me/6281252824233\n', 'ekstrakulikuler/01JDTTY8ERKY3P4FKWHWREKY80.jpeg', '2024-11-28 19:10:32', '2024-11-28 19:10:32'),
(9, 'Hadroh', 'https://wa.me/6287880551179', 'ekstrakulikuler/01JDTTZVWEMXVP98KGV6DZCHGP.jpeg', '2024-11-28 19:11:24', '2024-11-28 19:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `start_at` datetime NOT NULL,
  `end_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start_at`, `end_at`, `created_at`, `updated_at`) VALUES
(7, ' Asesmen Sumatif Akhir Semester', '#14ff00', '2024-12-02 00:01:12', '2024-12-06 12:51:31', '2024-11-28 22:51:38', '2024-11-28 22:52:36'),
(8, 'Pemilihan Kepala Daerah', '#ff0000', '2024-11-27 12:51:56', '2024-11-27 12:52:06', '2024-11-28 22:52:11', '2024-11-28 22:52:11');

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
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `judul`, `image`, `created_at`, `updated_at`) VALUES
(3, 'SMK Bina Sejahtera 3', 'galeri/01JDBM2P1Y97QPPQYQMKHXM3X7.jpg', '2024-11-22 21:22:00', '2024-11-22 21:22:00'),
(4, 'Lapangan', 'galeri/01JDBNE5WJ73XRK4XT4X4CBR3H.jpeg', '2024-11-22 21:23:25', '2024-11-22 21:45:45'),
(5, 'Masjid', 'galeri/01JDBM5SQXRENBGS7ECS9BQ6R6.jpeg', '2024-11-22 21:23:42', '2024-11-22 21:23:42'),
(6, 'Perpustakaan', 'galeri/01JDBNC95QTD8K1QA80EGJTXFN.jpeg', '2024-11-22 21:44:43', '2024-11-22 21:44:43'),
(7, 'Lab komputer', 'galeri/01JDBNFV141RN3JA49R9XTK61K.jpeg', '2024-11-22 21:46:40', '2024-11-22 21:46:40'),
(8, 'Ruangan kelas', 'galeri/01JDBNGMKNBM6KF5SZBCF0507Z.jpeg', '2024-11-22 21:47:06', '2024-11-22 21:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `judul`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Selamat datang di SMK Bina Sejahtera 3', 'Sekolah Impian bersama, kami wujudkan pendidikan yang komprehensif untuk menciptakan generasi berprestasi, berakhlakul mulia dan siap menyongsong masa depan', 'hero/01JDEEZ5D6QBF3B13WYJFKEFMY.png', '2024-11-23 23:47:41', '2024-11-23 23:50:25');

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
-- Table structure for table `kepseks`
--

CREATE TABLE `kepseks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepseks`
--

INSERT INTO `kepseks` (`id`, `judul`, `deskripsi`, `nama`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Sekolah', 'Perkembangan teknologi informasi saat ini membawa pengaruh besar bagi perkembangan dunia. Berita yang terjadi di belahan bumi ini dapat dengan mudah di akses dari mana saja. Sebagai lembaga pendidikan, SMK Bina Sejahtera 3 Kota Bogor tanggap dengan perkembangan teknologi tersebut. Dengan dukungan SDM yang di miliki sekolah ini siap untuk berkompetisi dengan sekolah lain dalam pelayanan informasi kepada publik. Teknologi Informasi Web khususnya, menjadi sarana bagi SMK Bina Sejahtera 3 Kota Bogor untuk memberi pelayanan informasi secara cepat, jelas, dan akuntable. Dari layanan ini pula, sekolah siap menerima saran, tanggapan konstruktif dari semua pihak yang akhirnya sekolah akan mampu menjawab keinginan yang di butuhkan masyarakat yaitu; membekali peserta didik yang kompeten dan berkarakter sesuai dengan visi dan misi SMK Bina Sejahtera 3 Kota Bogor.\n\nSemoga Allah SWT memberikan pertolongan dan bimbingan-Nya kepada kita semua. Aamiin YRA\n\nAssalaamu’alaikum warohmatullohi wabarokaatuh', 'Nurul Hidayati, SE., M.Pd.', 'kepsek/01JCTTNXR53TGZJPPT1JK6BCX4.png', '2024-11-14 23:48:59', '2024-11-16 08:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `sosmed` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kontak` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontaks`
--

INSERT INTO `kontaks` (`id`, `alamat`, `sosmed`, `created_at`, `updated_at`, `kontak`) VALUES
(1, 'Jl. Radar Baru No. 08 Dramaga RT 03/02 Kel. Margajaya Kec. Bogor Barat 16116', 'instagram: @smkbinasejahtera34\nyoutube: @smkbinasejahtera34\ntiktok: @smkbinasejahtera\nemail: smkbinasejahtera3.bogor@gmail.com', '2024-11-19 01:21:51', '2024-12-05 23:21:06', '081289381652\n081289381638\n02518623120');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulums`
--

CREATE TABLE `kurikulums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurikulums`
--

INSERT INTO `kurikulums` (`id`, `judul`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Kurikulum', 'SMK Bina Sejahtera 3 Bogor mengimplementasikan Kurikulum Merdeka untuk memberikan pendidikan yang fleksibel, adaptif, dan berfokus pada pengembangan kompetensi serta karakter siswa. Kurikulum ini memberi kebebasan kepada sekolah untuk menyesuaikan pembelajaran dengan kebutuhan dan potensi siswa, serta mengutamakan pengembangan keterampilan praktis yang relevan dengan dunia industri. Selain itu, SMK Bina Sejahtera 3 Bogor juga memperkuat pembentukan karakter siswa melalui proyek Penguatan Profil Pelajar Pancasila (P5), yang melibatkan nilai-nilai integritas, kreatifitas, dan inovasi. Dengan menjalin kerjasama erat dengan dunia industri, sekolah ini memastikan siswa siap menghadapi tantangan dunia kerja melalui program magang dan praktik industri. Kurikulum Merdeka di SMK Bina Sejahtera 3 Bogor bertujuan untuk mencetak lulusan yang tidak hanya unggul secara akademik, tetapi juga kompeten dalam keterampilan praktis dan siap berkontribusi dalam pembangunan masyarakat dan bangsa.', NULL, '2024-11-18 21:01:43', '2024-11-19 20:57:17');

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
(4, '2024_11_06_013951_create_heroes_table', 1),
(5, '2024_11_06_015106_create_choices_table', 1),
(6, '2024_11_06_015235_create_tentangs_table', 1),
(7, '2024_11_06_015338_create_statistiks_table', 1),
(8, '2024_11_06_015516_create_testimonis_table', 1),
(9, '2024_11_06_021326_create_categories_table', 1),
(10, '2024_11_06_021612_create_beritas_table', 1),
(11, '2024_11_06_022050_create_pengajars_table', 1),
(12, '2024_11_06_023015_create_kepseks_table', 1),
(13, '2024_11_06_023250_create_sejarahs_table', 1),
(14, '2024_11_06_023502_create_visis_table', 1),
(15, '2024_11_06_023721_create_misis_table', 1),
(16, '2024_11_06_025534_create_kurikulums_table', 1),
(17, '2024_11_06_030428_create_deskeskuls_table', 1),
(18, '2024_11_06_030607_create_ekstrakulikulers_table', 1),
(19, '2024_11_06_030821_create_deskprestasis_table', 1),
(20, '2024_11_06_030958_create_prestasis_table', 1),
(21, '2024_11_06_031335_create_kontaks_table', 1),
(22, '2024_11_06_031605_create_pesans_table', 1),
(23, '2024_11_06_032006_create_galeris_table', 1),
(24, '2024_11_06_032115_create_ppdbs_table', 1),
(25, '2024_11_15_052801_create_tujuans_table', 2),
(26, '2024_11_23_124640_create_events_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `misis`
--

CREATE TABLE `misis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `misis`
--

INSERT INTO `misis` (`id`, `judul`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Keimanan & Ketakwaan', 'Meningkatkan keimanan dan ketakwaan dalam lingkungan Sekolah dan masyarakat', 'misi/01JCQ25S6NDFJGY8WXRG1CKW4Y.png', '2024-11-14 21:44:19', '2024-11-14 21:44:19'),
(2, 'Kualitas KBM', 'Meningkatkan kualitas KBM dalam mencapai kompetensi siswa berdasarkan Standar Nasional Pendidikan', 'misi/01JCQ2VH18QH24ND62HFHZ1BY0.png', '2024-11-14 21:56:11', '2024-11-14 21:56:11'),
(3, 'Penguasaan IPTEK', 'Meningkatkan kuantitas dan kualitas sarana dan prasarana pendidikan dalam mendukung penguasaan IPTEK', 'misi/01JCQ31KRBYBXF7MZRMS6RQ9JV.png', '2024-11-14 21:59:30', '2024-11-14 21:59:30'),
(4, 'Kemitraan', 'Meningkatkan kemitraan dengan DU/DI sesuai dengan prinsip Laju Permintaan Pasar', 'misi/01JCQ37YPE1MPBJBP92KRNSJFM.png', '2024-11-14 22:02:58', '2024-11-14 22:02:58'),
(5, 'Business Center', 'Meningkatkan kualitas pengelolaan Business Center dalam menunjang kualitas Sumber Daya Manusia', 'misi/01JCQ3CEKY49FF32QEA59143WT.png', '2024-11-14 22:05:26', '2024-11-14 22:05:26'),
(6, 'Berakhlakul Karimah', 'Mempersiapkan dan mewujudkan lulusan yang berakhlakul karimah dengan pendidikan keagamaan dan budi pekerti', 'misi/01JCQ40Z3FZ37PRYNGY180YRS7.png', '2024-11-14 22:16:38', '2024-11-14 22:16:38'),
(7, 'Lulusan Berkompeten', 'Mempersiapkan lulusan menjadi tenaga yang disiplin, terampil, produktif dan kompeten di bidang kejuruan', 'misi/01JCQ43JD83DG1D8CMD2D769W8.png', '2024-11-14 22:18:03', '2024-11-14 22:18:03');

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
-- Table structure for table `pengajars`
--

CREATE TABLE `pengajars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajars`
--

INSERT INTO `pengajars` (`id`, `nama`, `keterangan`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Nurul Hidayati, S.E., M.Pd.', 'Kepala Sekolah', 'pengajar/01JCYJ66E4DRSN4708JJVN5AHH.png', '2024-11-14 23:21:47', '2024-11-17 19:38:50'),
(2, 'Ir. Syahrul Bariyah', 'Matematika', 'pengajar/01JCYM1KX1ZKB42BB73GE1HJBA.png', '2024-11-14 23:24:33', '2024-11-17 20:11:17'),
(3, 'Jihan Farahwati, S.E.', 'Produktif OTKP', 'pengajar/01JCYM3Q0YE13R2TSB12KNXB2N.png', '2024-11-14 23:25:45', '2024-11-17 20:12:26'),
(4, 'Nurani Rizkiati, S.T', 'Matematika, IPAS', 'pengajar/01JCYM62424EZ6CG0CA2XQ39JR.png', '2024-11-14 23:26:17', '2024-11-17 20:13:43'),
(5, 'Slamet Hilmawan, S.Pd.', 'Pendidikan Jasmani dan Kesehatan', 'pengajar/01JCYM894NMC67N305JGK18BBJ.png', '2024-11-14 23:26:36', '2024-11-17 20:14:56'),
(7, 'Wiwit Wiharsono, A.Md', 'Informatika', 'pengajar/01JCYMBYJP3ZCMSFEG6X5DGSMH.png', '2024-11-14 23:31:36', '2024-11-17 20:16:56'),
(8, 'Ananda Fatimah Azzahro, S.Sos.', 'Produktif OTKP', 'pengajar/01JCYMFZMFBMVKH2J8A8YKZW0X.png', '2024-11-14 23:32:06', '2024-11-17 20:19:08'),
(9, 'Yosi Patmi, S.Ak.', 'Akuntansi', 'pengajar/01JCYMKNRG7XJT4MVBRVVC701M.png', '2024-11-14 23:32:32', '2024-11-17 20:21:09'),
(10, 'Hilda Aspurnawati, S.Kom.', 'Informatika', 'pengajar/01JCYMN13FR4F2CQDAGE9GMMV8.png', '2024-11-14 23:32:49', '2024-11-17 20:21:54'),
(11, 'Ayu Yulianti', 'Pengelolaan Keuangan Sederhana', 'pengajar/01JCYMNZC1CEYKNMW2B7T62XSY.png', '2024-11-14 23:33:27', '2024-11-17 20:22:25'),
(12, 'Robi Mardani, S.Pdi.', 'Pendidikan Agama', 'pengajar/01JCYMQF5B3VM33N1GV16CTEX5.png', '2024-11-15 00:14:13', '2024-11-17 20:23:13'),
(13, 'Lilies Syamsiah, S.Pd.', 'Bahasa Inggris', 'pengajar/01JCYMSV2KA50NP196YQXRSFX5.png', '2024-11-15 00:45:04', '2024-11-17 20:24:31'),
(14, 'Azis Munandar, S.Pd.', 'Pendidikan Jasmani dan Kesehatan', 'pengajar/01JCYMVP52AA5PCFE9E1BHWSN2.png', '2024-11-15 00:45:47', '2024-11-17 20:25:32'),
(15, 'Ghozali Mahmud, S.Pd', 'Sejarah Indonesia', 'pengajar/01JCYMWWNG8Y1CQ8FCBT784X0E.png', '2024-11-15 00:46:34', '2024-11-17 20:26:11'),
(16, 'Ile Putriani, S.Pd.', 'Pengelolaan Sumber Daya Manusia', 'pengajar/01JCYMYCMPZZR5MP4X0AQN0SEV.png', '2024-11-15 00:47:37', '2024-11-17 20:27:00'),
(17, 'Maya Ismayanti, S.E.', 'Komunikasi Bisnis', 'pengajar/01JCYMZ76CWKMAQM9PBQZ21EPR.png', '2024-11-15 00:49:16', '2024-11-17 20:27:27'),
(18, 'Rafika Kurnia K, S.Bns.', 'Ekonomi Bisnis dan Adminitstrasi Umum', 'pengajar/01JCYN2C94YXY1YJE9ZDTZFSCF.png', '2024-11-15 00:50:09', '2024-11-17 20:29:11'),
(19, 'Basirun, S.Pdi.', 'PKN', 'pengajar/01JCYN3FF0Q8VM0JAG2YJG1FNM.png', '2024-11-15 00:50:53', '2024-11-17 20:29:47'),
(20, 'Edah Jubaedah, S.Kom.', 'Bahasa Sunda', 'pengajar/01JCYN4EWQCQH4GN3BY3FEEFXY.png', '2024-11-15 00:51:28', '2024-11-17 20:30:19'),
(21, 'Ina Rosmina, S.Pd.', 'Bahasa Sunda', 'pengajar/01JCYN56MGZ6ZSHN2VM9VB4BH3.png', '2024-11-15 00:51:50', '2024-11-17 20:30:43'),
(22, 'Richia Servita Sari, S.Pd.', 'Sejarah Indonesia', 'pengajar/01JCYN6KRHJ3RNKZFWG7HN6GKM.png', '2024-11-15 00:53:35', '2024-11-17 20:31:30'),
(23, 'Siti Asroin, S.Ag.', 'Pendidikan Agama', 'pengajar/01JCYN7C82SYQSH20H5M7EX634.png', '2024-11-15 00:54:47', '2024-11-17 20:31:55'),
(24, 'Kartika Fatimah, S.E.', 'Seni dan Budaya', 'pengajar/01JCYN8SVD5RHRRNKCM42V9VMN.png', '2024-11-15 00:55:47', '2024-11-17 20:32:41'),
(25, 'Lusiana Hendrika, S.Pd.', 'Bahasa Indonesia', 'pengajar/01JCYN9XJST0GX1C1YDN096CZ0.png', '2024-11-15 00:56:32', '2024-11-17 20:33:18'),
(26, 'Fahruz Zulfa, S.Ak.', 'Administrasi Pajak', 'pengajar/01JCYNAS82TSG6WGV1ZZXS4GXT.png', '2024-11-15 00:58:20', '2024-11-17 20:33:46'),
(27, 'Rendi Permana, S.Kom.', 'Keamanan Jaringan', 'pengajar/01JCYNC8G12HAY2RDEG30BNQ10.png', '2024-11-15 00:58:53', '2024-11-17 20:34:35'),
(28, 'Dian Sri Mulyani, S.E.', 'Akuntansi Keuangan', 'pengajar/01JCYNDY08NZ0VEWBNSVDYQ5W5.png', '2024-11-15 01:00:04', '2024-11-17 20:35:30'),
(29, 'Mukhtar Azizi, S.Pdi.', 'Pendidikan Agama', 'pengajar/01JCYNF2HTK1XYCWC7R14GVAVV.png', '2024-11-15 01:05:51', '2024-11-17 20:36:07'),
(30, 'Tri Mulyani, S.Si.', 'Matematika, Ms.Office', 'pengajar/01JCYNFYE3EA59M1CHP5E3T834.png', '2024-11-15 01:10:21', '2024-11-17 20:36:36'),
(31, 'Akmal Arsyad Mudzakkir, S.Kom.', 'Keamanan Jaringan', 'pengajar/01JCYNGVM7C87GVCMZ3SAYNFX5.png', '2024-11-16 08:55:01', '2024-11-17 20:37:05'),
(32, 'Djembar Purnarasa S.Kom', 'Produktif TKJ', 'pengajar/01JCYNMH342DZ3FHPD447HTWNN.png', '2024-11-16 08:55:51', '2024-11-17 20:39:06'),
(33, 'Endah Pratiwi, S.Pd.', 'Bahasa Inggris', 'pengajar/01JCYNR78WWRJGCPYW5S7P1RVZ.png', '2024-11-17 20:41:07', '2024-11-17 20:41:07'),
(34, 'Lutfiah AbSari, S.Sos.', 'Bahasa Indonesia, BK', 'pengajar/01JCYNTQN8MXP3EX3RCEPPVFHX.png', '2024-11-17 20:42:29', '2024-11-17 20:42:29'),
(35, 'Ririn Apriyani, S.S.', 'Bahasa Inggris', 'pengajar/01JCYNZYHDGM2PQH7SCADJD5DP.png', '2024-11-17 20:45:20', '2024-11-17 20:45:20'),
(36, 'Tri Puryanti, S.E.', 'Ekonomi', 'pengajar/01JCYTZXCE7K39Q8MRB2K6951A.png', '2024-11-17 22:12:42', '2024-11-17 22:12:42'),
(37, 'Rivany Sari, S.Kom.', 'Marketing', 'pengajar/01JCYV1QD51PX601FXD0Z1941E.png', '2024-11-17 22:13:41', '2024-11-17 22:13:41'),
(38, 'Dili Putra, S.Pd.', 'Bahasa Indonesia', 'pengajar/01JCYV2RN5CSDGPZ62CSDCBRG4.png', '2024-11-17 22:14:15', '2024-11-17 22:14:15'),
(39, 'Anis Purwanti, S.E.', 'Kewirausahaan, Public Speaking', 'pengajar/01JCYV3Z1PY90J0RPVSY7XKZME.png', '2024-11-17 22:14:54', '2024-11-17 22:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_depan` varchar(255) DEFAULT NULL,
  `nama_belakang` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `pesan` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppdbs`
--

CREATE TABLE `ppdbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ppdbs`
--

INSERT INTO `ppdbs` (`id`, `judul`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PPDB', 'Assalamu\'alaikum warahmatullahi wabarakatuh,  \nSalam sejahtera bagi kita semua,  \nOm Swastiastu, Namo Buddhaya,  \nSalam Kebajikan.\n\nYang saya hormati,  \nKetua Panitia Penerimaan Peserta Didik Baru (PPDB) SMK Bina Sejahtera 3 Bogor,  \nBapak/Ibu Guru,  \nOrang tua/wali siswa,  \nSerta para calon peserta didik baru yang kami banggakan.\n\nAlhamdulillah, puji syukur kita panjatkan ke hadirat Allah SWT, karena berkat rahmat dan karunia-Nya, kita dapat berkumpul dalam acara Penerimaan Peserta Didik Baru (PPDB) SMK Bina Sejahtera 3 Bogor tahun ajaran 2024/2025 ini dengan penuh semangat dan harapan.\n\nSelamat datang kepada seluruh calon siswa yang telah memilih SMK Bina Sejahtera 3 Bogor sebagai tempat untuk melanjutkan pendidikan dan mengembangkan potensi diri. Kami merasa bangga dan terhormat atas kepercayaan yang diberikan kepada kami untuk menjadi bagian dari perjalanan pendidikan anak-anak kita semua.\n\nSebagai lembaga pendidikan yang berkomitmen untuk menghasilkan lulusan yang kompeten dan siap menghadapi tantangan dunia kerja, SMK Bina Sejahtera 3 Bogor menyediakan berbagai program keahlian yang akan membekali siswa dengan keterampilan praktis dan pengetahuan yang relevan dengan kebutuhan industri. Dengan fasilitas yang lengkap, pengajaran yang berkualitas, serta dukungan dari tenaga pendidik yang berkompeten, kami yakin siswa-siswi SMK Bina Sejahtera 3 Bogor akan siap menghadapi masa depan yang cerah.\n\nKami juga ingin menyampaikan apresiasi yang sebesar-besarnya kepada orang tua dan wali yang telah memberikan dukungan penuh kepada anak-anak dalam memilih SMK Bina Sejahtera 3 Bogor. Kerjasama yang baik antara sekolah dan orang tua akan sangat mendukung kesuksesan pendidikan siswa di masa yang akan datang.\n\nSemoga melalui PPDB ini, kita dapat mencetak generasi yang tidak hanya cerdas secara akademik, tetapi juga unggul dalam keterampilan, berakhlak mulia, dan siap berkontribusi untuk kemajuan bangsa dan negara.\n\nTerakhir, saya mengucapkan terima kasih kepada semua pihak yang telah bekerja keras untuk menyukseskan kegiatan PPDB ini. Semoga Allah SWT senantiasa memberikan petunjuk dan keberkahan dalam setiap langkah kita.\n\nWassalamu\'alaikum warahmatullahi wabarakatuh.  \nSalam sejahtera untuk kita semua.\n\n\nSemoga sambutan ini sesuai dengan acara yang akan dilaksanakan! Jika ada tambahan atau perubahan, silakan disesuaikan.', NULL, '2024-11-18 21:06:09', '2024-11-19 20:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sejarahs`
--

CREATE TABLE `sejarahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sejarahs`
--

INSERT INTO `sejarahs` (`id`, `judul`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah SMK Bina Sejahtera 3', 'SMK Bina Sejahtera 3 merupakan salah satu sekolah menengah kejuruan yang telah berdiri di Kota Bogor, Jawa Barat. Didirikan dengan tujuan untuk memberikan pendidikan kejuruan yang berkualitas kepada siswa, sekolah ini fokus pada pengembangan keterampilan praktis yang sesuai dengan kebutuhan dunia kerja. Sejak awal berdirinya, SMK Bina Sejahtera 3 berkomitmen untuk menyiapkan generasi muda yang siap bekerja dan memiliki keahlian dalam berbagai bidang, seperti Teknik Jaringan Komputer dan Telekomunikasi, Akuntansi, dan Pemasaran.\n\nSeiring berjalannya waktu, SMK Bina Sejahtera 3 terus berkembang dan berinovasi, mengikuti perkembangan teknologi dan kebutuhan industri. Dengan akreditasi \"A\", sekolah ini menunjukkan kualitas pendidikan yang tinggi dan terus berusaha mencetak lulusan yang tidak hanya terampil secara teknis, tetapi juga siap menghadapi tantangan global dalam dunia kerja. Fasilitas yang memadai, tenaga pengajar yang berkompeten, serta program keahlian yang relevan menjadi dasar bagi SMK Bina Sejahtera 3 untuk terus berperan dalam mencetak tenaga kerja terampil di wilayah Bogor dan sekitarnya.', 'sejarah/01JCQ0Q7Y6FWG65F4JV1Z3D1XZ.png', '2024-11-14 21:18:54', '2024-11-14 21:18:54');

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
('8oMLxSP2FeO0GUzQAneQ9shSme6y2CzYlPP6Mm9c', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibXM4REhJblRKUjY2Um5wUkdvVGVCUUExVnNLc0NLNGZqYXN1ZENTSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkOGljai82SmRmVEwzVUJDSEx5MkJCLkpxbndRTElvOE5RbjVDNWt3S1RkL0ZLRENpajFjZTYiO30=', 1733549981),
('mMDDC8qI3SOOt7CzLjnDuL4spP8hyDty8vEojZhK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZTN6bkg0eVZwSXN0Z0dEQTZsZm9BNGJYZGZrdWdvMm9jd2NIOXR5SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733538325);

-- --------------------------------------------------------

--
-- Table structure for table `statistiks`
--

CREATE TABLE `statistiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statistiks`
--

INSERT INTO `statistiks` (`id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'Siswa', '435', '2024-11-16 06:13:45', '2024-11-16 06:16:22'),
(3, 'Guru', '40', '2024-11-16 06:18:30', '2024-11-17 21:02:46'),
(4, 'Kompetensi Keahlian', '4', '2024-11-16 06:18:38', '2024-12-05 23:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `tentangs`
--

CREATE TABLE `tentangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tentangs`
--

INSERT INTO `tentangs` (`id`, `judul`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, 'SMK Bina Sejahtera 3 adalah sekolah menengah kejuruan swasta yang terletak di Kota Bogor, Jawa Barat, tepatnya di Jalan Radar Baru No. 8, Margajaya, Kecamatan Bogor Barat. Sekolah ini memiliki akreditasi \"A\", yang menunjukkan standar pendidikan yang tinggi. SMK Bina Sejahtera 3 menawarkan berbagai program keahlian yang bertujuan untuk mempersiapkan siswa dengan keterampilan praktis untuk dunia kerja, seperti Teknik Jaringan Komputer dan Telekomunikasi, Pemasaran, Manajemen Perkantoran dan Layanan Bisnis, serta Akuntansi dan Keuangan Lembaga.\n\nSaat ini, sekolah ini memiliki sekitar 435 siswa yang tersebar di berbagai program keahlian. SMK Bina Sejahtera 3 terus berperan penting dalam pengembangan pendidikan kejuruan di wilayah Bogor.', 'tentang/01JCPYRR9QKG42MJ3TZJY6V62Y.png', '2024-11-14 20:44:46', '2024-11-17 20:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `nama`, `keterangan`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dinda Kusuma', NULL, 'Saya merasa bangga menjadi bagian dari SMK Bina Sejahtera 3. Program keahlian yang ditawarkan sangat relevan dengan dunia industri, seperti Teknik Jaringan Komputer dan Pemasaran. Pengajaran yang diberikan oleh para guru sangat profesional dan mendalam, tidak hanya teori, tetapi juga banyak praktik yang membantu kami lebih siap untuk bekerja. Fasilitas yang ada juga mendukung untuk belajar dengan nyaman, dan saya merasa siap menghadapi tantangan di dunia kerja setelah lulus dari sini.', 'testimoni/01JCPZB2TZ98NKBSDRWJXG27VK.jpg', '2024-11-14 20:54:47', '2024-11-14 20:54:47'),
(2, 'Ramdan', NULL, 'Belajar di SMK Bina Sejahtera 3 sangat menyenangkan dan memotivasi. Selain mendapatkan ilmu yang aplikatif, seperti di bidang Akuntansi dan Keuangan, saya juga dibekali dengan keterampilan yang siap diterapkan langsung di dunia kerja. Para guru sangat membantu, dan suasana di sekolah ini membuat kami merasa nyaman untuk belajar dan berkembang. Saya yakin pendidikan yang saya dapatkan di sini akan membuka banyak peluang kerja setelah lulus.', 'testimoni/01JCPZFM3Y04EPHQS75V59TF15.jpeg', '2024-11-14 20:57:15', '2024-11-14 20:57:15'),
(3, 'Yusuf Kusuma', NULL, 'SMK Bina Sejahtera 3 memberikan saya banyak pengalaman berharga. Saya mengikuti program Manajemen Perkantoran dan Layanan Bisnis, dan saya merasa mendapatkan pemahaman yang mendalam tentang dunia kerja, terutama dalam hal manajemen administrasi dan komunikasi bisnis. Selain itu, sekolah ini juga sangat mendukung dalam mengembangkan soft skills kami, seperti kemampuan bekerja dalam tim dan komunikasi yang efektif. Fasilitas yang ada juga sangat memadai untuk menunjang kegiatan belajar kami', 'testimoni/01JCPZHPJZRCN0XA86MY2A2G80.jpeg', '2024-11-14 20:58:23', '2024-11-14 20:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `tujuans`
--

CREATE TABLE `tujuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tujuans`
--

INSERT INTO `tujuans` (`id`, `created_at`, `updated_at`, `deskripsi`) VALUES
(1, '2024-11-14 22:34:35', '2024-11-14 22:34:35', 'Mempersiapkan peserta didik menjadi manusia produktif, mampu bekerja mandiri, dan dapat diserap oleh DU/DI sebagai tenaga kerja tingkat menengah sesuai dengan kompetensi yang dimilikinya'),
(2, '2024-11-14 22:36:04', '2024-11-14 22:36:04', 'Memberikan pembekalan agar mampu berkarir, ulet dan giat dalam berkompetensi, mampu beradaptasi di lingkungan kerja dan dapat mengembangkan sikap professional sesuai kompetensi yang dimilikinya'),
(3, '2024-11-14 22:36:13', '2024-11-14 22:36:13', 'Membekali peserta didik dalam ilmu pengetahuan, teknologi, seni dan wawasan entreprener agar mampu mengembangkan diri di kemudian hari baik secara mandiri dan bekerja sesuai dengan kompetensi yang dimiliki');

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
(1, 'admin', 'smkbinasejahtera34@gmail.com', NULL, '$2y$12$8icj/6JdfTL3UBCHLy2BB.JqnwQLIo8NQn5C5kwKTd/FKDCij1ce6', NULL, '2024-11-05 22:14:48', '2024-11-05 22:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `visis`
--

CREATE TABLE `visis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visis`
--

INSERT INTO `visis` (`id`, `judul`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Visi SMK Bina Sejahtera 3', 'Terwujudnya Pendidikan yang Menghasilkan Sumber Daya yang Berakhlak Mulia, Mandiri, Kreatif dan Inovatif', 'visi/01JCQ15YAWR9ZBSQNCVGN8X5RS.png', '2024-11-14 21:26:55', '2024-11-14 21:26:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `beritas_slug_unique` (`slug`),
  ADD KEY `beritas_category_id_foreign` (`category_id`);

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deskeskuls`
--
ALTER TABLE `deskeskuls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deskprestasis`
--
ALTER TABLE `deskprestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekstrakulikulers`
--
ALTER TABLE `ekstrakulikulers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
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
-- Indexes for table `kepseks`
--
ALTER TABLE `kepseks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurikulums`
--
ALTER TABLE `kurikulums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misis`
--
ALTER TABLE `misis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pengajars`
--
ALTER TABLE `pengajars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdbs`
--
ALTER TABLE `ppdbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarahs`
--
ALTER TABLE `sejarahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `statistiks`
--
ALTER TABLE `statistiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentangs`
--
ALTER TABLE `tentangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tujuans`
--
ALTER TABLE `tujuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visis`
--
ALTER TABLE `visis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deskeskuls`
--
ALTER TABLE `deskeskuls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deskprestasis`
--
ALTER TABLE `deskprestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ekstrakulikulers`
--
ALTER TABLE `ekstrakulikulers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kepseks`
--
ALTER TABLE `kepseks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kurikulums`
--
ALTER TABLE `kurikulums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `misis`
--
ALTER TABLE `misis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengajars`
--
ALTER TABLE `pengajars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppdbs`
--
ALTER TABLE `ppdbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sejarahs`
--
ALTER TABLE `sejarahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statistiks`
--
ALTER TABLE `statistiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tentangs`
--
ALTER TABLE `tentangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tujuans`
--
ALTER TABLE `tujuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visis`
--
ALTER TABLE `visis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
