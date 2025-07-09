-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: himatekfors
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `background_berita`
--

DROP TABLE IF EXISTS `background_berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `background_berita` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `background_berita`
--

LOCK TABLES `background_berita` WRITE;
/*!40000 ALTER TABLE `background_berita` DISABLE KEYS */;
INSERT INTO `background_berita` VALUES (1,'1750772156_background-informasi.png',NULL,'2025-06-24 06:35:56');
/*!40000 ALTER TABLE `background_berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `berita_beranda`
--

DROP TABLE IF EXISTS `berita_beranda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `berita_beranda` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `detail_berita` text NOT NULL,
  `jenis_berita` enum('BERITA','KEGIATAN','PENGUMUMAN') NOT NULL,
  `random_code` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `is_active` enum('AKTIF','NONAKTIF') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita_beranda`
--

LOCK TABLES `berita_beranda` WRITE;
/*!40000 ALTER TABLE `berita_beranda` DISABLE KEYS */;
INSERT INTO `berita_beranda` VALUES (14,'IBADAH KUNCI BULAN','Tema: Kematian dan Kebangkitan Yesus\r\nPemateri: Pdt. Jimy Papilaya\r\nLiturgi: Dian Agata Pasaribu\r\n\r\nDi akhir bulan ini, kita diajak untuk berhenti sejenak dari rutinitas dan membuka hati, merenungkan satu kisah yang telah mengubah sejarah dan memberi harapan bagi seluruh umat manusia — kisah tentang salib dan kubur kosong.\r\n\r\nYesus disalibkan — bukan karena Ia kalah, tapi karena kasih-Nya terlalu besar untuk membiarkan kita tetap terpisah dari Allah. Ia mati, bukan karena Ia tak berdaya, tetapi karena itulah jalan menuju kemenangan sejati. Namun kisah ini tidak berhenti di kayu salib. Kubur tidak dapat menahan-Nya. Pada hari ketiga, Ia bangkit, dan bersama kebangkitan-Nya, bangkit pula harapan bagi dunia.\r\n\r\nIbadah Kunci Bulan kali ini bukan sekadar acara penutup bulan, tapi sebuah perjalanan iman untuk melihat kembali kasih-Nya yang tak bersyarat dan kuasa-Nya yang membangkitkan.\r\n\r\nMelalui penyampaian firman oleh Pdt. Jimy Papilaya, dan liturgi yang dipimpin oleh Dian Agata Pasaribu, mari kita bersama-sama menyelami makna kematian dan kebangkitan Kristus yang tidak hanya menjadi doktrin, tapi menjadi pengalaman hidup kita sehari-hari.\r\n\r\nMari hadir dan rasakan hadirat Tuhan yang hidup. Mari pulang dari ibadah ini dengan hati yang diperbarui, iman yang diteguhkan, dan semangat baru untuk melangkah di bulan berikutnya.\r\n\r\n\"Yesus mati menggantikan kita. Dan karena Dia bangkit, kita memiliki hidup yang penuh pengharapan.\"','KEGIATAN','N2jJyZ','2025-05-01','AKTIF','2025-06-24 08:53:11','2025-06-24 08:53:11'),(15,'HIMATEKFORS UNIMUDA','kjjk','BERITA','hiwjIn','2025-06-07','AKTIF','2025-06-24 23:32:02','2025-06-24 23:32:02');
/*!40000 ALTER TABLE `berita_beranda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `demisioner`
--

DROP TABLE IF EXISTS `demisioner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `demisioner` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nph` varchar(36) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `is_active` enum('AKTIF','NONAKTIF') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `demisioner`
--

LOCK TABLES `demisioner` WRITE;
/*!40000 ALTER TABLE `demisioner` DISABLE KEYS */;
INSERT INTO `demisioner` VALUES (2,'Hadulian Siregar','123456770112123','2022/2023','NONAKTIF','pimpinan.jpg','__mhfann','-','-',NULL,'2025-06-17 20:16:33'),(3,'Accep Irawan','123456787909875','2021/2024','AKTIF','pimpinan.jpg','msnidwi','-','-',NULL,'2025-06-17 20:12:17'),(4,'Luluk Rizki Asmariah','1510-04-2122-01','2021/2022','AKTIF','pimpinan.jpg','lulukrizki.as','-','-',NULL,'2025-06-23 07:47:01'),(7,'Hadulian Siregar','1510-05-2223-01','2022/2023','AKTIF','1750216547_musni-dewi.jpg','srrggrr','Lhyant Siregar','-','2025-06-17 20:15:47','2025-06-23 07:44:46'),(8,'Musni Dewi','1510-06-2324-01','2023/2024','AKTIF','1750690988_musni-dewi.jpg','msnidwi','-','-','2025-06-17 22:41:45','2025-06-23 08:03:08');
/*!40000 ALTER TABLE `demisioner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeri_beranda`
--

DROP TABLE IF EXISTS `galeri_beranda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeri_beranda` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  `is_active` enum('AKTIF','NONAKTIF') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeri_beranda`
--

LOCK TABLES `galeri_beranda` WRITE;
/*!40000 ALTER TABLE `galeri_beranda` DISABLE KEYS */;
INSERT INTO `galeri_beranda` VALUES (16,'1750777011_.png','AKTIF','2025-06-24 07:56:51','2025-06-25 01:30:01','-'),(17,'1750777025_.png','AKTIF','2025-06-24 07:57:05','2025-06-24 07:57:05','-'),(18,'1750777036_.png','AKTIF','2025-06-24 07:57:16','2025-06-24 07:57:16','-'),(19,'1750777048_.png','AKTIF','2025-06-24 07:57:28','2025-06-24 07:57:28','-'),(20,'1750780572_.png','AKTIF','2025-06-24 08:56:12','2025-06-24 08:56:12','N2jJyZ'),(21,'1750780879_.png','AKTIF','2025-06-24 09:01:19','2025-06-24 09:01:19','N2jJyZ'),(22,'1750780897_.png','AKTIF','2025-06-24 09:01:37','2025-06-24 09:01:37','N2jJyZ');
/*!40000 ALTER TABLE `galeri_beranda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hero`
--

DROP TABLE IF EXISTS `hero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hero` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `url_youtube` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` enum('AKTIF','NONAKTIF') NOT NULL DEFAULT 'AKTIF',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hero`
--

LOCK TABLES `hero` WRITE;
/*!40000 ALTER TABLE `hero` DISABLE KEYS */;
INSERT INTO `hero` VALUES (1,'HIMATEKFORS UNIMUDA SORONG','1750771105.png','Kreativitas Tanpa Batas!!!','https://youtu.be/qce9kxdMKHM?si=_qzXfqL1v0w-B3dv','2025-04-14 22:52:58','2025-06-24 06:18:25','AKTIF');
/*!40000 ALTER TABLE `hero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `masukan_beranda`
--

DROP TABLE IF EXISTS `masukan_beranda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masukan_beranda` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `masukan_beranda`
--

LOCK TABLES `masukan_beranda` WRITE;
/*!40000 ALTER TABLE `masukan_beranda` DISABLE KEYS */;
INSERT INTO `masukan_beranda` VALUES (1,'Musni Dewi','musnidewi13@gmail.com','SARAN','Lebih maju','2025-04-18 23:33:47','2025-04-18 23:33:47'),(2,'Musni Dewi','musnidewi13@gmail.com','SARAN','lbdjhbfui','2025-04-18 23:39:57','2025-04-18 23:39:57'),(3,'Musni Dewi','musnidewi13@gmail.com','SARAN','a','2025-04-18 23:41:26','2025-04-18 23:41:26'),(4,'Muhammad Irwan','musnidewi13@gmail.com','SARAN','ab','2025-04-18 23:56:50','2025-04-18 23:56:50'),(5,'Muhammad F','musnidewi13@gmail.com','SARANN','ac','2025-04-19 00:00:04','2025-04-19 00:00:04'),(6,'Mustika Dewi','musnidewi13@gmail.com','SARANNN','ad','2025-04-19 00:01:12','2025-04-19 00:01:12'),(7,'Musni Dewi','musnidewi13@gmail.com','SARAN','ae','2025-04-19 00:04:21','2025-04-19 00:04:21'),(8,'Musni Dewi','musnidewi13@gmail.com','SARAN','aaaa','2025-04-19 00:14:00','2025-04-19 00:14:00'),(9,'Musni Dewi','musnidewi13@gmail.com','SARAN','amsa','2025-04-19 00:15:56','2025-04-19 00:15:56'),(10,'Musni Dewi','musnidewi13@gmail.com','SARANNN','kakasjkask','2025-04-19 00:19:08','2025-04-19 00:19:08');
/*!40000 ALTER TABLE `masukan_beranda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'2025_04_12_081552_create_users_table',1),(3,'2025_04_15_054221_create_hero_table',2),(4,'2025_04_17_021013_add_is_active_to_hero_table',3),(5,'2025_04_17_023316_create_profil_beranda_table',4),(6,'2025_04_17_050732_create_struktur_beranda_table',5),(7,'2025_04_17_052156_add_is_active_to_struktur_beranda_table',6),(8,'2025_04_17_052955_add_posisi_to_struktur_beranda_table',7),(9,'2025_04_17_072132_add_url_youtube_to_hero_table',8),(10,'2025_04_17_073834_create_berita_beranda_table',9),(11,'2025_04_19_031105_change_nama_column_type_on_profil_beranda_table',10),(12,'2025_04_19_044534_create_background_berita_table',11),(13,'2025_04_19_054321_create_galeri_beranda_table',12),(14,'2025_04_19_061735_create_masukan_beranda_table',13),(15,'2025_04_22_040323_create__visi_misi_table',14),(16,'2025_05_08_053805_create_galeris_table',15),(17,'2025_05_13_033814_create_unduhan_table',15),(18,'2025_05_13_041642_create_struktur_organisasi_table',16),(19,'2025_05_13_055724_add_periode_to_struktur_organisasi_table',17),(20,'2025_05_13_074034_add_divisi_and_posisi_to_struktur_organisasi_table',18),(21,'2025_05_20_031052_create_demisoners_table',19),(22,'2025_05_20_032209_rename_demisoners_to_demisioners',20),(23,'2025_05_20_060439_add_link_to_demisioners_table',21),(24,'2025_06_11_061616_change_nph_column_type_in_struktur_organisasi_table',22),(25,'2025_06_11_062103_change_default_posisi_in_struktur_organisasi_table',23),(26,'2025_06_12_081558_change_nph_column_type_in_demisioner_table',24),(27,'2025_06_18_021707_ubah_gambar_nullable_di_berita_beranda',25),(28,'2025_06_19_062823_update_berita_and_galeri_tables',26),(29,'2025_07_01_063918_add_bypass_to_users_table',27);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profil_beranda`
--

DROP TABLE IF EXISTS `profil_beranda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profil_beranda` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `gambar_depan` varchar(255) NOT NULL,
  `gambar_belakang` varchar(255) NOT NULL,
  `is_active` enum('AKTIF','NONAKTIF') NOT NULL DEFAULT 'AKTIF',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profil_beranda`
--

LOCK TABLES `profil_beranda` WRITE;
/*!40000 ALTER TABLE `profil_beranda` DISABLE KEYS */;
INSERT INTO `profil_beranda` VALUES (1,'Organisasi ini bernama Himpunan Mahasiswa Pendidikan Teknologi Informasi (HIMATEKFORS) Universitas Pendidikan Muhammadiyah (UNIMUDA) Sorong. HIMATEKFORS UNIMUDA Sorong dibentuk di UNIMUDA Sorong pada tanggal 15 Oktober 2015. Tempat kedudukan HIMATEKFORS di UNIMUDA Sorong. Himpunan Mahasiswa Pendidikan Teknologi Informasi (HIMATEKFORS) Universitas Pendidikan Muhammadiyah (UNIMUDA) Sorong berasaskan Pancasila. Struktur organisasi HIMATEKFORS UNIMUDA Sorong terdiri atas: Pelindung, Pembina Organisasi, Badan Penasehat Organisasi, Pimpinan, Sekretaris Umum, Bendahara Umum, Pimpinan Divisi, Anggota Divisi dan Mahasiswa Pendidikan Teknologi Informasi. HIMATEKFORS UNIMUDA Sorong terdiri dari enam divisi diantaranya: Divisi Keorganisasian, Divisi Humas, Divisi Minat dan Bakat, Divisi Media, Divisi Kewirausahaan dan Divisi Kerohanian.','depan_1750771771.png','belakang_1750228476.jpg','AKTIF',NULL,'2025-06-24 06:29:31');
/*!40000 ALTER TABLE `profil_beranda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `struktur_organisasi`
--

DROP TABLE IF EXISTS `struktur_organisasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `struktur_organisasi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nph` varchar(30) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `divisi` varchar(255) DEFAULT NULL,
  `posisi` int(11) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `is_active` enum('AKTIF','NONAKTIF') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `struktur_organisasi`
--

LOCK TABLES `struktur_organisasi` WRITE;
/*!40000 ALTER TABLE `struktur_organisasi` DISABLE KEYS */;
INSERT INTO `struktur_organisasi` VALUES (1,'Laode Arham Aziz Pratamasakti','1510-07-2425-01','PIMPINAN','-',1,'2024/2025','AKTIF','1750689013_1.png',NULL,'2025-06-23 07:30:13'),(2,'Riska Koedoeboen','510-07-2425-02','SEKRETARIS','-',2,'2024/2025','AKTIF','1750689066_2.png',NULL,'2025-06-23 07:31:06'),(3,'Nova Siang Saribunga','510-07-2425-03','BENDAHARA','-',3,'2024/2025','AKTIF','1750689119_3.png',NULL,'2025-06-23 07:31:59'),(4,'Salahudin Alayubi Djafar','1510-07-2425-04','PIMPINAN DIVISI','KEORGANISASIAN',4,'2024/2025','AKTIF','1750690507_4(1).png',NULL,'2025-06-23 07:55:07'),(5,'Rinelce Talarima','1510-07-2425-05','ANGGOTA DIVISI','KEORGANISASIAN',4,'2024/2025','AKTIF','1750690522_4(2).png',NULL,'2025-06-23 07:55:22'),(6,'Moh. Akbar S. Wairoy','1510-07-2425-06','ANGGOTA DIVISI','KEORGANISASIAN',4,'2024/2025','AKTIF','1750690541_4(3).png',NULL,'2025-06-23 07:55:41'),(7,'Mawar','1510-07-2425-08','ANGGOTA DIVISI','KEORGANISASIAN',4,'2024/2025','AKTIF','1750690558_4(4).png',NULL,'2025-06-23 07:55:58'),(9,'Siti Aminah Boinauw','1510-07-2425-09','ANGGOTA DIVISI','KEORGANISASIAN',4,'2024/2025','AKTIF','1750690572_4(5).png',NULL,'2025-06-23 07:56:12'),(10,'Sofronius Renaldino Eku','1510-07-2425-10','ANGGOTA DIVISI','KEORGANISASIAN',4,'2024/2025','AKTIF','1750690594_4(6).png',NULL,'2025-06-23 07:56:34'),(16,'Arni Aprilia','1234-123-123-123','PIMPINAN DIVISI','KEWIRAUSAHAAN',6,'2024/2025','AKTIF','1750165784_arni-aprilia.png','2025-06-17 06:09:44','2025-06-17 06:10:39');
/*!40000 ALTER TABLE `struktur_organisasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unduhan`
--

DROP TABLE IF EXISTS `unduhan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unduhan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unduhan`
--

LOCK TABLES `unduhan` WRITE;
/*!40000 ALTER TABLE `unduhan` DISABLE KEYS */;
INSERT INTO `unduhan` VALUES (1,'Lomba-Cerdas-Cermat-1.pdf',NULL,NULL);
/*!40000 ALTER TABLE `unduhan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bypass` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('a989bd1f-67d6-421f-9b5a-592af1e44a86','Admin Himatekfors','admin','$2y$12$Z3GegUBsNqd7rWWNAyvn6u7PWa1LBwdn5/aXYIL3K9usOFKOnHptG','password1234','2025-06-30 23:44:41','2025-06-30 23:48:07');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visi_misi`
--

DROP TABLE IF EXISTS `visi_misi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visi_misi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visi_misi`
--

LOCK TABLES `visi_misi` WRITE;
/*!40000 ALTER TABLE `visi_misi` DISABLE KEYS */;
INSERT INTO `visi_misi` VALUES (1,'Tujuan','Menjadikan Himpunan Mahasiswa Pendidikan Teknologi Informasi (HIMATEKFORS) Universitas Pendidikan Muhammadiyah (UNIMUDA) Sorong sebagai wadah pengembangan bakat dan aspirasi mahasiswa Pendidikan Teknologi Informasi (PTI) sekaligus menjadi himpunan yang unggul dalam IPTEK, Sosial, Budaya, dan Spritual.',NULL,'2025-06-23 06:35:39'),(2,'Usaha','Membentuk Mahasiswa menjadi pribadi yang berintelektual dan spiritual, Membangun pola hubungan yang baik dengan lembaga-lembaga lain, Mengembangkan kreatifitas mahasiswa dalam bidang keilmuan, sosial dan budaya, Mengelola pengembangan ilmu pengetahuan dan teknologi bagi kemaslahatan Bangsa dan Negara, Berperan aktif dalam dunia kemahasiswaan, perguruan tinggi dan kepemudaan, Usaha-usaha lain yang sesuai dengan asas organisasi serta berguna untuk mencapai tujuan.',NULL,'2025-06-23 06:35:39'),(3,'Sifat','Himpunan Mahasiswa Pendidikan Teknologi Informasi (HIMATEKFORS) Universitas Pendidikan Muhammadiyah (UNIMUDA) Sorong bersifat independen sesuai dengan Anggaran Dasar (AD) dan Anggaran Rumah Tangga (ART).',NULL,'2025-06-23 06:35:39');
/*!40000 ALTER TABLE `visi_misi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-07-09 13:48:01
