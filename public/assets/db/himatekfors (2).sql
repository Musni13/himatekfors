-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2025 pada 07.20
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himatekfors`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `background_berita`
--

CREATE TABLE `background_berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `background_berita`
--

INSERT INTO `background_berita` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(1, '1750233667_1750128553.jpg', NULL, '2025-06-18 01:01:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_beranda`
--

CREATE TABLE `berita_beranda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `detail_berita` text NOT NULL,
  `jenis_berita` enum('BERITA','KEGIATAN','PENGUMUMAN') NOT NULL,
  `random_code` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `is_active` enum('AKTIF','NONAKTIF') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita_beranda`
--

INSERT INTO `berita_beranda` (`id`, `nama`, `detail_berita`, `jenis_berita`, `random_code`, `tanggal`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 'HIMATEKFORS UNIMUDA', 'HARI INI KAMI MELAKUKAN KEGIATAN YANG SEHAT. KAMI PERGI KE PASAR MEMBELI SAYUR,BUAH-BUAHAN, DAN BERAS.', 'BERITA', '1750228224_himatekfors-unimuda.jpg', '2025-05-02', 'NONAKTIF', '2025-05-28 01:08:57', '2025-06-18 01:03:16'),
(6, 'HIMATEKFORS UNIMUDA', 'ksakakakka', 'BERITA', '1750233557_himatekfors-unimuda.jpg', '2025-05-02', 'AKTIF', '2025-05-28 01:10:17', '2025-06-18 00:59:27'),
(7, 'HIMATEKFORS UNIMUDA', 'ksakakakka', 'KEGIATAN', '1750233591_himatekfors-unimuda.jpg', '2025-05-02', 'AKTIF', '2025-05-28 01:18:13', '2025-06-18 00:59:51'),
(8, 'MUSHPRO 2025', 'AKU ADALAH SEORANG KAPITEN MEMPUNYAI PEDANG PANJANG KALAU BERJALAN PROK PROK PROK', 'BERITA', '1750233608_akakak.jpg', '2025-05-01', 'AKTIF', '2025-05-28 01:19:27', '2025-06-18 06:30:37'),
(9, 'CANTIK', 'Musni Cantik', 'PENGUMUMAN', '1750233621_cantik.jpg', '2025-05-25', 'AKTIF', '2025-05-30 22:59:04', '2025-06-18 01:00:21'),
(10, 'Ex sunt commodi et o', 'Possimus aspernatur', 'PENGUMUMAN', '1750233633_ex-sunt-commodi-et-o.jpg', '1982-07-04', 'AKTIF', '2025-06-17 23:07:36', '2025-06-18 01:00:33'),
(11, 'Recusandae Rerum ob', 'Maxime qui nisi fugi', 'BERITA', '1750233645_recusandae-rerum-ob.jpg', '2024-02-21', 'AKTIF', '2025-06-17 23:16:59', '2025-06-18 01:00:55'),
(12, 'HIMATEKFORS UNIMUDA', 'ASA', 'BERITA', 'AJQS7R', '2025-06-07', 'AKTIF', '2025-06-18 23:56:02', '2025-06-18 23:56:02'),
(13, 'HIMATEKFORS UNIMUDA', 'qqq', 'KEGIATAN', '2vQwfW', '2025-06-06', 'AKTIF', '2025-06-19 00:09:30', '2025-06-19 00:38:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `demisioner`
--

CREATE TABLE `demisioner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nph` varchar(36) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `is_active` enum('AKTIF','NONAKTIF') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `demisioner`
--

INSERT INTO `demisioner` (`id`, `nama`, `nph`, `periode`, `is_active`, `gambar`, `instagram`, `facebook`, `twitter`, `created_at`, `updated_at`) VALUES
(2, 'Hadulian Siregar', '123456770112123', '2022/2023', 'NONAKTIF', 'pimpinan.jpg', '__mhfann', '-', '-', NULL, '2025-06-17 20:16:33'),
(3, 'Accep Irawan', '123456787909875', '2021/2024', 'AKTIF', 'pimpinan.jpg', 'msnidwi', '-', '-', NULL, '2025-06-17 20:12:17'),
(4, 'Laode Arham', '923456789', '2019/2020', 'AKTIF', 'pimpinan.jpg', 'msnidwi', NULL, NULL, NULL, NULL),
(7, 'Musni Dewi', '1234-123-1--333', '2019/2020', 'AKTIF', '1750216547_musni-dewi.jpg', NULL, NULL, NULL, '2025-06-17 20:15:47', '2025-06-17 20:15:47'),
(8, 'Sit eveniet conseq', 'Magnam dignissimos a', 'Officiis reprehender', 'NONAKTIF', '1750225422_sit-eveniet-conseq.jpg', 'Magnam vel officiis', 'Id nostrum aliquid', 'Voluptatum non sapie', '2025-06-17 22:41:45', '2025-06-17 23:01:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_beranda`
--

CREATE TABLE `galeri_beranda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `is_active` enum('AKTIF','NONAKTIF') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeri_beranda`
--

INSERT INTO `galeri_beranda` (`id`, `gambar`, `is_active`, `created_at`, `updated_at`, `code`) VALUES
(3, 'berita.jpg', 'NONAKTIF', NULL, '2025-06-17 18:55:40', NULL),
(4, 'berita.jpg', 'AKTIF', NULL, NULL, NULL),
(5, 'berita.jpg', 'AKTIF', NULL, NULL, NULL),
(7, '1749521893_.png', 'AKTIF', '2025-06-09 19:18:13', '2025-06-09 19:18:13', NULL),
(11, '1750212400_.jpg', 'AKTIF', '2025-06-17 19:06:40', '2025-06-17 19:06:40', NULL),
(13, '1750225687_.jpg', 'AKTIF', '2025-06-17 22:48:07', '2025-06-17 22:48:07', 'AJQS7R'),
(14, '1750317312_.jpg', 'AKTIF', '2025-06-19 00:15:12', '2025-06-19 00:15:12', '2vQwfW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hero`
--

CREATE TABLE `hero` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `url_youtube` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` enum('AKTIF','NONAKTIF') NOT NULL DEFAULT 'AKTIF'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hero`
--

INSERT INTO `hero` (`id`, `nama`, `logo`, `slogan`, `url_youtube`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'HIMATEKFORS UNIMUDA SORONG', '1750584474.jpg', 'Kreativitas Tanpa Batas!!!', 'https://youtu.be/qce9kxdMKHM?si=_qzXfqL1v0w-B3dv', '2025-04-14 22:52:58', '2025-06-22 02:27:54', 'AKTIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masukan_beranda`
--

CREATE TABLE `masukan_beranda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `masukan_beranda`
--

INSERT INTO `masukan_beranda` (`id`, `nama`, `email`, `judul`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Musni Dewi', 'musnidewi13@gmail.com', 'SARAN', 'Lebih maju', '2025-04-18 23:33:47', '2025-04-18 23:33:47'),
(2, 'Musni Dewi', 'musnidewi13@gmail.com', 'SARAN', 'lbdjhbfui', '2025-04-18 23:39:57', '2025-04-18 23:39:57'),
(3, 'Musni Dewi', 'musnidewi13@gmail.com', 'SARAN', 'a', '2025-04-18 23:41:26', '2025-04-18 23:41:26'),
(4, 'Muhammad Irwan', 'musnidewi13@gmail.com', 'SARAN', 'ab', '2025-04-18 23:56:50', '2025-04-18 23:56:50'),
(5, 'Muhammad F', 'musnidewi13@gmail.com', 'SARANN', 'ac', '2025-04-19 00:00:04', '2025-04-19 00:00:04'),
(6, 'Mustika Dewi', 'musnidewi13@gmail.com', 'SARANNN', 'ad', '2025-04-19 00:01:12', '2025-04-19 00:01:12'),
(7, 'Musni Dewi', 'musnidewi13@gmail.com', 'SARAN', 'ae', '2025-04-19 00:04:21', '2025-04-19 00:04:21'),
(8, 'Musni Dewi', 'musnidewi13@gmail.com', 'SARAN', 'aaaa', '2025-04-19 00:14:00', '2025-04-19 00:14:00'),
(9, 'Musni Dewi', 'musnidewi13@gmail.com', 'SARAN', 'amsa', '2025-04-19 00:15:56', '2025-04-19 00:15:56'),
(10, 'Musni Dewi', 'musnidewi13@gmail.com', 'SARANNN', 'kakasjkask', '2025-04-19 00:19:08', '2025-04-19 00:19:08'),
(11, 'Musni Dewi', 'musnidewi13@gmail.com', 'SARAN', 'nnn', '2025-04-19 00:26:38', '2025-04-19 00:26:38'),
(12, 'Musni Dewi', 'musnidewi13@gmail.com', 'SARAN', 'ssss', '2025-04-19 00:28:32', '2025-04-19 00:28:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2025_04_12_081552_create_users_table', 1),
(3, '2025_04_15_054221_create_hero_table', 2),
(4, '2025_04_17_021013_add_is_active_to_hero_table', 3),
(5, '2025_04_17_023316_create_profil_beranda_table', 4),
(6, '2025_04_17_050732_create_struktur_beranda_table', 5),
(7, '2025_04_17_052156_add_is_active_to_struktur_beranda_table', 6),
(8, '2025_04_17_052955_add_posisi_to_struktur_beranda_table', 7),
(9, '2025_04_17_072132_add_url_youtube_to_hero_table', 8),
(10, '2025_04_17_073834_create_berita_beranda_table', 9),
(11, '2025_04_19_031105_change_nama_column_type_on_profil_beranda_table', 10),
(12, '2025_04_19_044534_create_background_berita_table', 11),
(13, '2025_04_19_054321_create_galeri_beranda_table', 12),
(14, '2025_04_19_061735_create_masukan_beranda_table', 13),
(15, '2025_04_22_040323_create__visi_misi_table', 14),
(16, '2025_05_08_053805_create_galeris_table', 15),
(17, '2025_05_13_033814_create_unduhan_table', 15),
(18, '2025_05_13_041642_create_struktur_organisasi_table', 16),
(19, '2025_05_13_055724_add_periode_to_struktur_organisasi_table', 17),
(20, '2025_05_13_074034_add_divisi_and_posisi_to_struktur_organisasi_table', 18),
(21, '2025_05_20_031052_create_demisoners_table', 19),
(22, '2025_05_20_032209_rename_demisoners_to_demisioners', 20),
(23, '2025_05_20_060439_add_link_to_demisioners_table', 21),
(24, '2025_06_11_061616_change_nph_column_type_in_struktur_organisasi_table', 22),
(25, '2025_06_11_062103_change_default_posisi_in_struktur_organisasi_table', 23),
(26, '2025_06_12_081558_change_nph_column_type_in_demisioner_table', 24),
(27, '2025_06_18_021707_ubah_gambar_nullable_di_berita_beranda', 25),
(28, '2025_06_19_062823_update_berita_and_galeri_tables', 26);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_beranda`
--

CREATE TABLE `profil_beranda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` text NOT NULL,
  `gambar_depan` varchar(255) NOT NULL,
  `gambar_belakang` varchar(255) NOT NULL,
  `is_active` enum('AKTIF','NONAKTIF') NOT NULL DEFAULT 'AKTIF',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profil_beranda`
--

INSERT INTO `profil_beranda` (`id`, `nama`, `gambar_depan`, `gambar_belakang`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Organisasi ini bernama Himpunan Mahasiswa Pendidikan Teknologi Informasi (HIMATEKFORS) Universitas Pendidikan Muhammadiyah (UNIMUDA) Sorong. Himpunan Mahasiswa Pendidikan Teknologi Informasi (HIMATEKFORS) Universitas Pendidikan Muhammadiyah (UNIMUDA) Sorong dibentuk di Universitas Pendidikan Muhammadiyah (UNIMUDA) Sorong pada tanggal 15 Oktober 2015. Tempat kedudukan Himpunan Mahasiswa Pendidikan Teknologi Informasi (HIMATEKFORS) Universitas Pendidikan Muhammadiyah (UNIMUDA) Sorong di Universitas Pendidikan Muhammadiyah (UNIMUDA) Sorong. Himpunan Mahasiswa Pendidikan Teknologi Informasi (HIMATEKFORS) Universitas Pendidikan Muhammadiyah (UNIMUDA) Sorong berasaskan Pancasila.', 'depan_1750228476.jpg', 'belakang_1750228476.jpg', 'AKTIF', NULL, '2025-06-17 23:34:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nph` varchar(30) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `divisi` varchar(255) DEFAULT NULL,
  `posisi` int(11) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `is_active` enum('AKTIF','NONAKTIF') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id`, `nama`, `nph`, `jabatan`, `divisi`, `posisi`, `periode`, `is_active`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Arham', '1234567876', 'PIMPINAN', '-', 1, '2024/2025', 'AKTIF', '1750228881_1750215327_officia-ipsum-sit.jpg', NULL, '2025-06-17 23:41:27'),
(2, 'Riska', '1234567898', 'SEKRETARIS', '-', 2, '2024/2025', 'NONAKTIF', 'caesar.jpg', NULL, '2025-06-17 06:39:58'),
(3, 'Nova', '1234567877', 'BENDAHARA', NULL, 3, '2024/2025', 'AKTIF', 'cake.jpg', NULL, NULL),
(4, 'Ayubi', '1234567878', 'PIMPINAN DIVISI', 'KEORGANISASIAN', 4, '2024/2025', 'AKTIF', 'cake.jpg', NULL, NULL),
(5, 'Ronal', '1234567891', 'ANGGOTA DIVISI', 'KEORGANISASIAN', 4, '2024/2025', 'AKTIF', 'cake.jpg', NULL, NULL),
(6, 'Rinel', '1234567870', 'ANGGOTA DIVISI', 'KEORGANISASIAN', 4, '2024/2025', 'AKTIF', 'cake.jpg', NULL, NULL),
(7, 'Akbar', '1234567891', 'ANGGOTA DIVISI', 'KEORGANISASIAN', 4, '2024/2025', 'AKTIF', 'cake.jpg', NULL, NULL),
(9, 'Irfan', '1234567894', 'ANGGOTA DIVISI', 'KEORGANISASIAN', 4, '2024/2025', 'AKTIF', 'cake.jpg', NULL, NULL),
(10, 'Rizki', '1234567875', 'PIMPINAN DIVISI', 'HUMAS', 5, '2024/2025', 'AKTIF', 'cake.jpg', NULL, '2025-06-11 22:17:49'),
(16, 'Arni Aprilia', '1234-123-123-123', 'PIMPINAN DIVISI', 'KEWIRAUSAHAAN', 6, '2024/2025', 'AKTIF', '1750165784_arni-aprilia.png', '2025-06-17 06:09:44', '2025-06-17 06:10:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unduhan`
--

CREATE TABLE `unduhan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `unduhan`
--

INSERT INTO `unduhan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Lomba-Cerdas-Cermat-1.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `created_at`, `updated_at`) VALUES
('be548cc3-dded-4ee0-b1e4-6773553090c4', 'Admin Himatekfors', 'admin', '$2y$12$RKROUDW333IIxE6de50sO.Ei0W/keCu1yy9/hMHDuTPGPlx.EUmjO', '2025-04-12 01:37:17', '2025-04-12 01:37:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Tujuan', 'Menjadikan Himpunan Mahasiswa Pendidikan Teknologi Informasi (HIMATEKFORS) Universitas Pendidikan Muhammadiyah (UNIMUDA) Sorong sebagai wadah pengembangan bakat dan aspirasi mahasiswa PTI sekaligus menjadi himpunan yang unggul dalam IPTEK, Sosial, Budaya, dan Spritual.', NULL, '2025-06-17 19:28:33'),
(2, 'Usaha', '1.	Membentuk Mahasiswa menjadi pribadi yang berintelektual dan spiritual\r\n2.	Membangun pola hubungan yang baik dengan lembaga-lembaga lain\r\n3.	Mengembangkan kreatifitas mahasiswa dalam bidang keilmuan, sosial dan budaya.\r\n4.	Mengelola pengembangan ilmu pengetahuan dan teknologi bagi kemaslahatan Bangsa dan Negara\r\n5.	Berperan aktif dalam dunia kemahasiswaan, perguruan tinggi dan kepemudaan.\r\n6.	Usaha-usaha lain yang sesuai dengan asas organisasi serta berguna untuk mencapai tujuan.', NULL, '2025-06-17 19:28:33'),
(3, 'Sifat', 'Himpunan Mahasiswa Pendidikan Teknologi Informasi (HIMATEKFORS) Universitas Pendidikan Muhammadiyah (UNIMUDA) Sor', NULL, '2025-06-17 19:28:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `background_berita`
--
ALTER TABLE `background_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita_beranda`
--
ALTER TABLE `berita_beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `demisioner`
--
ALTER TABLE `demisioner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri_beranda`
--
ALTER TABLE `galeri_beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `masukan_beranda`
--
ALTER TABLE `masukan_beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `profil_beranda`
--
ALTER TABLE `profil_beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `unduhan`
--
ALTER TABLE `unduhan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `background_berita`
--
ALTER TABLE `background_berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita_beranda`
--
ALTER TABLE `berita_beranda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `demisioner`
--
ALTER TABLE `demisioner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `galeri_beranda`
--
ALTER TABLE `galeri_beranda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `hero`
--
ALTER TABLE `hero`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `masukan_beranda`
--
ALTER TABLE `masukan_beranda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profil_beranda`
--
ALTER TABLE `profil_beranda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `unduhan`
--
ALTER TABLE `unduhan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
