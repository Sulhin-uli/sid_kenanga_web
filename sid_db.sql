-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 06:49 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendakegiatan`
--

CREATE TABLE `agendakegiatan` (
  `id_agendakegiatan` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agendakegiatan`
--

INSERT INTO `agendakegiatan` (`id_agendakegiatan`, `judul`, `keterangan`, `foto`) VALUES
(4, 'Fooging Desaa', 'iHari ini pemerintah desa kenanga melakukan Fooging kepada seluruh masyarakat desa kenanga, untuk mencegah terjadinya DBD .', '.jpg'),
(5, 'Kunjungan Karang Taruna', 'Karang taruna desa kenanga melakukan kunjungan ke desa lain seperti desa kandanghaur, untuk menjalin silaturahmi', '.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `aparaturdesa`
--

CREATE TABLE `aparaturdesa` (
  `id_aparaturdesa` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aparaturdesa`
--

INSERT INTO `aparaturdesa` (`id_aparaturdesa`, `nama`, `jabatan`, `foto`) VALUES
(8, 'Andri Firmansyah', 'Lurah', 'Andri Firmansyah.jpg'),
(9, 'Nuni', 'Bendahara', 'Nuni.jpg'),
(10, 'Sulhin', 'Kuwu', 'Sulhin.jpg'),
(11, 'Nia', 'Sekretaris', 'Nia.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kabar_desa`
--

CREATE TABLE `kabar_desa` (
  `id_kabar_desa` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabar_desa`
--

INSERT INTO `kabar_desa` (`id_kabar_desa`, `judul`, `tanggal`, `gambar`, `isi`) VALUES
(1, 'Pembagian Zakat', '2021-05-12', 'Pembagian Zakat.jpg', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia volu'),
(8, 'Pengajian', '2021-05-17', 'Pengajian.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia .'),
(9, 'Bantuan Sosial', '2021-05-27', 'Bantuan Sosial.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co'),
(10, 'Kunjungan Karang Taruna', '2021-05-28', 'Kunjungan Karang Taruna.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum .');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(5, '2021_05_07_015746_create_pengaduan_table', 3),
(6, '2021_05_10_070625_create_permintaan_surat_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `aksi` varchar(50) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id_notifikasi`, `nik`, `nama`, `aksi`, `status`) VALUES
(57, '123456789', 'Andri', 'Mengirim Permintaan Pembuatan Surat', 'Terkirim'),
(58, '123456789', 'Andri', 'Mengirim Pesan Aduan', 'Dilihat'),
(59, '123456789', 'Andri', 'Mengirim Permintaan Pembuatan Surat', 'Dilihat');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sulhinhin8@gmail.com', '$2y$10$ArH.FTe9q.R8CzpC/pJ9VObr2sf6kkoGpYQWcRL.ItcWHfC/KbvDe', '2021-05-19 23:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `foto_penduduk` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `status_perkawinan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(21) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `nama`, `nik`, `alamat`, `tgl`, `isi`, `status`, `created_at`, `updated_at`) VALUES
(51, 'Andri', '123456789', 'Indonesia', '07-05-2021', 'test', 'Dilihat', '2021-05-27 02:15:49', '2021-05-27 02:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_surat`
--

CREATE TABLE `permintaan_surat` (
  `id_permintaan_surat` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_penduduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permintaan_surat`
--

INSERT INTO `permintaan_surat` (`id_permintaan_surat`, `nik`, `nama_penduduk`, `nama_surat`, `status`, `created_at`, `updated_at`) VALUES
(20, '123456789', 'Andri', 'Surat Keterangan Domisili', 'Terkirim', '2021-05-27 02:18:23', '2021-05-27 02:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 3, 'my-app-token', '986da3627ee2d7030c74b99f70bb91edb66daf513309a733f4a5dc3efc4cfe48', '[\"*\"]', NULL, '2021-05-05 18:39:23', '2021-05-05 18:39:23'),
(2, 'App\\Models\\User', 3, 'my-app-token', 'd2090549136e57236a7f1858657293411056d316ae070f720dfcfbe3b1eaaeab', '[\"*\"]', '2021-05-05 18:47:52', '2021-05-05 18:46:26', '2021-05-05 18:47:52'),
(3, 'App\\Models\\User', 4, 'my-app-token', 'e26ed17daae90c04478c4e9c9a9387351de9199f97653e0c069a8fed32bef7f7', '[\"*\"]', NULL, '2021-05-13 20:01:39', '2021-05-13 20:01:39'),
(4, 'App\\Models\\User', 4, 'my-app-token', 'e2d1f13a4e409072e6562d39247b3338ea56545eb0257bef093d626cdfaacb09', '[\"*\"]', NULL, '2021-05-14 06:43:43', '2021-05-14 06:43:43'),
(5, 'App\\Models\\User', 4, 'my-app-token', '018f26d53e8adb55df10a7ac782bd64a2b881e83fb4719f3d4586a3a41ff05b3', '[\"*\"]', NULL, '2021-05-14 06:53:57', '2021-05-14 06:53:57'),
(6, 'App\\Models\\User', 5, 'my-app-token', '45b6e905e7485325cfdaf72df9d99901f47c0092a7d8470d64d52dd94c343263', '[\"*\"]', NULL, '2021-05-14 06:55:53', '2021-05-14 06:55:53'),
(7, 'App\\Models\\User', 4, 'my-app-token', 'cdcebdaed2a735f767d49acf8f5fae72c5537c23530017c90b983abfbdb7620d', '[\"*\"]', NULL, '2021-05-14 06:56:58', '2021-05-14 06:56:58'),
(8, 'App\\Models\\User', 4, 'my-app-token', '18372d6bc9dcc57b56333e144c4d7aae8565e4b66c2e73908fd2c10eb06dd105', '[\"*\"]', NULL, '2021-05-14 07:02:35', '2021-05-14 07:02:35'),
(9, 'App\\Models\\User', 4, 'my-app-token', 'b98efddee5b585c9781630615e91047faa39e50ec2f5eedf6d8f2ec47c57c3eb', '[\"*\"]', NULL, '2021-05-14 07:06:32', '2021-05-14 07:06:32'),
(10, 'App\\Models\\User', 5, 'my-app-token', '22c5112c401d578e2bba0fe5b83d619121d2f5e871d525a245426450055cd431', '[\"*\"]', NULL, '2021-05-14 07:06:48', '2021-05-14 07:06:48'),
(11, 'App\\Models\\User', 5, 'my-app-token', 'ce50fb166d5182e8b0208be6dd6339433048a439f55fb10d7931f3b5c44ee069', '[\"*\"]', NULL, '2021-05-14 07:06:52', '2021-05-14 07:06:52'),
(12, 'App\\Models\\User', 5, 'my-app-token', '63acd83eba34f913508152659ba5f490779e7aa8878a9fa99cdb50bf00de0128', '[\"*\"]', NULL, '2021-05-14 07:06:53', '2021-05-14 07:06:53'),
(13, 'App\\Models\\User', 5, 'my-app-token', 'ee0af14a4df5b32c2ca345acb8a59cd679249197962afee1e9bf77ae26b1535c', '[\"*\"]', NULL, '2021-05-14 07:07:17', '2021-05-14 07:07:17'),
(14, 'App\\Models\\User', 4, 'my-app-token', '52c443468d5a6b841a2798fd2df7d5fda5758165d3620ab1d13639c22d244c7e', '[\"*\"]', NULL, '2021-05-14 07:07:30', '2021-05-14 07:07:30'),
(15, 'App\\Models\\User', 4, 'my-app-token', 'aa601aff7da044e5f254bd50d915dd396d4a85887a8e3af5bd337555e4e916a1', '[\"*\"]', NULL, '2021-05-14 07:07:32', '2021-05-14 07:07:32'),
(16, 'App\\Models\\User', 4, 'my-app-token', 'f08e9ceef96670f8807fc52e3a3f12ace061a59d90e896119313fd268619498e', '[\"*\"]', NULL, '2021-05-14 07:21:50', '2021-05-14 07:21:50'),
(17, 'App\\Models\\User', 5, 'my-app-token', '9803f439912141ae1b78ef10de31937cd978ede7ad8b0ca5324a1df0831ae473', '[\"*\"]', NULL, '2021-05-14 07:23:01', '2021-05-14 07:23:01'),
(18, 'App\\Models\\User', 5, 'my-app-token', '9638fbbb12e000fba9d05e6e698698294f9732f59a134d0e61813f9313cb46c2', '[\"*\"]', NULL, '2021-05-14 07:26:28', '2021-05-14 07:26:28'),
(19, 'App\\Models\\User', 5, 'my-app-token', 'd061f9ca95c2eb76b0da8eecab59503300426b20521cc816db580c263a7e321c', '[\"*\"]', NULL, '2021-05-14 07:30:50', '2021-05-14 07:30:50'),
(20, 'App\\Models\\User', 5, 'my-app-token', '051c7e68767eb165d9f631cf81715aee9b3c1bcf508ab2db1f43408fa345daee', '[\"*\"]', NULL, '2021-05-14 07:31:00', '2021-05-14 07:31:00'),
(21, 'App\\Models\\User', 5, 'my-app-token', 'e9eeacc5a03687e5ec34a27c045075c2335d6511e4ac5c5b5850e9f1efe522d7', '[\"*\"]', NULL, '2021-05-14 10:04:13', '2021-05-14 10:04:13'),
(22, 'App\\Models\\User', 5, 'my-app-token', 'b0eab83544e884543d80d1d051462bd49d0608c9fa9538192ac727982e6bdc23', '[\"*\"]', NULL, '2021-05-14 10:05:21', '2021-05-14 10:05:21'),
(23, 'App\\Models\\User', 5, 'my-app-token', '58bcebcbda3fd69175db7fee6e145a9ced4fe3ae300f3c9f5473e7f80d26855e', '[\"*\"]', NULL, '2021-05-14 10:35:35', '2021-05-14 10:35:35'),
(24, 'App\\Models\\User', 5, 'my-app-token', '13d7654b6c414f3fff0e8dfc1c1cffb63794be06f93477b5e01f7dd00446b192', '[\"*\"]', NULL, '2021-05-14 10:37:06', '2021-05-14 10:37:06'),
(25, 'App\\Models\\User', 5, 'my-app-token', '87af1038be2bf84ef10807991e1c770e74dafe70f04b24706c77c91f9805be58', '[\"*\"]', NULL, '2021-05-14 10:37:09', '2021-05-14 10:37:09'),
(26, 'App\\Models\\User', 5, 'my-app-token', '88f9a5da1241ff9ab85ab73e02eb1ed7284f061086a9548220544f59a102d4f1', '[\"*\"]', NULL, '2021-05-14 10:37:09', '2021-05-14 10:37:09'),
(27, 'App\\Models\\User', 5, 'my-app-token', '86a7b4d48c527db208928be5ada8a975d528c7eb1eb21b85fafb3b24704c0e7b', '[\"*\"]', NULL, '2021-05-14 10:37:10', '2021-05-14 10:37:10'),
(28, 'App\\Models\\User', 5, 'my-app-token', 'b0bb98305efaf8f6b78055e1beda6923c7fb49fa12665e625f791a182baa9cc1', '[\"*\"]', NULL, '2021-05-14 10:37:10', '2021-05-14 10:37:10'),
(29, 'App\\Models\\User', 5, 'my-app-token', '218bec8a6c99c965288e32279f5622ea680b37c319f72858b938e18c82127db9', '[\"*\"]', NULL, '2021-05-14 10:37:11', '2021-05-14 10:37:11'),
(30, 'App\\Models\\User', 5, 'my-app-token', 'e7b4f655e6b162ba484b8e76d65168f2f5000ab8edfdb316a9c8d2dc4dd3e73a', '[\"*\"]', NULL, '2021-05-14 10:37:11', '2021-05-14 10:37:11'),
(31, 'App\\Models\\User', 5, 'my-app-token', '2bf42e8f80523927d6cd3b24cdc5c43be7b28556b4f040100f2541c4f2a7b203', '[\"*\"]', NULL, '2021-05-14 10:37:12', '2021-05-14 10:37:12'),
(32, 'App\\Models\\User', 5, 'my-app-token', '7f0fb2da99c6b441468ca57e4d1f144c44a9e0b8e1841687f8b5d26e5ba43457', '[\"*\"]', NULL, '2021-05-14 10:37:12', '2021-05-14 10:37:12'),
(33, 'App\\Models\\User', 5, 'my-app-token', '8de8cc38a9246b77309ac465fd0065c3fd855bde7a225fde5b1369107d6eda2f', '[\"*\"]', NULL, '2021-05-14 10:37:12', '2021-05-14 10:37:12'),
(34, 'App\\Models\\User', 5, 'my-app-token', '7b68cebfde85894cd1892984dd5e45f2f1b74e40000cac0ab9a6b2b24c8eeb34', '[\"*\"]', NULL, '2021-05-14 10:37:13', '2021-05-14 10:37:13'),
(35, 'App\\Models\\User', 5, 'my-app-token', '59e2464b2039badcc3cb0bfaf6e6ffaf5647c6eb485804616244803b9813a7dc', '[\"*\"]', NULL, '2021-05-14 10:37:13', '2021-05-14 10:37:13'),
(36, 'App\\Models\\User', 5, 'my-app-token', '7de3cc5e861240ac11e45a107b8858465ca1293997689046482ccda35a39f832', '[\"*\"]', NULL, '2021-05-14 10:37:13', '2021-05-14 10:37:13'),
(37, 'App\\Models\\User', 5, 'my-app-token', 'e0e430979e66466daa5110928aeb0edadd3b2cc47a32bfd2cccb220fa0d86d85', '[\"*\"]', NULL, '2021-05-14 10:37:14', '2021-05-14 10:37:14'),
(38, 'App\\Models\\User', 5, 'my-app-token', 'b2381ccdf896e7aa11d4f618d20e50084911bf1aa71665ee14ab6a3ea5eb47a5', '[\"*\"]', NULL, '2021-05-14 10:37:14', '2021-05-14 10:37:14'),
(39, 'App\\Models\\User', 5, 'my-app-token', '93356614cb014458adf7940e016cfa8bf49de40d053b6d4f9e2512b84499a270', '[\"*\"]', NULL, '2021-05-14 10:37:44', '2021-05-14 10:37:44'),
(40, 'App\\Models\\User', 5, 'my-app-token', '3c380d7bfaca5a7c3d57a16a99efc1470e48b04ff4e0535bcaef04a6a289a9aa', '[\"*\"]', NULL, '2021-05-14 10:38:16', '2021-05-14 10:38:16'),
(41, 'App\\Models\\User', 5, 'my-app-token', '3187270ad49860d4b3629ef5776f519895095bdd4b1ee0a1772b601cfd5d5a8e', '[\"*\"]', NULL, '2021-05-14 10:39:41', '2021-05-14 10:39:41'),
(42, 'App\\Models\\User', 5, 'my-app-token', 'd432a319bc920a9ebc30be7a7816a2dc54e4304f77b6905d044f55810675687d', '[\"*\"]', NULL, '2021-05-15 19:18:50', '2021-05-15 19:18:50'),
(43, 'App\\Models\\User', 5, 'my-app-token', '0e9207cbd836fb3fd1771aed9fe50a9e93b235584b4e42954a674e50075fd3a9', '[\"*\"]', NULL, '2021-05-15 19:20:55', '2021-05-15 19:20:55'),
(44, 'App\\Models\\User', 5, 'my-app-token', '291dffcd045d77e161a10675b6f73bce6ba2108ff37f54870ef8bc1468c6e264', '[\"*\"]', NULL, '2021-05-16 06:48:33', '2021-05-16 06:48:33'),
(45, 'App\\Models\\User', 5, 'my-app-token', 'faa71cadf97bd223b1b00952c6a1d9afb01dfa6d814dd9ef7eea8b084a33ac1a', '[\"*\"]', NULL, '2021-05-16 06:48:58', '2021-05-16 06:48:58'),
(46, 'App\\Models\\User', 5, 'my-app-token', 'ad2ab9f975ea24775a335dff3bef72d437a629b7a62daeb38982e82396bc553c', '[\"*\"]', NULL, '2021-05-16 06:52:42', '2021-05-16 06:52:42'),
(47, 'App\\Models\\User', 5, 'my-app-token', 'edeb326d17bff7ac3891919d4e56ad4a52a481982d78c4153f3c1bc0a1dd62eb', '[\"*\"]', NULL, '2021-05-16 06:54:57', '2021-05-16 06:54:57'),
(48, 'App\\Models\\User', 5, 'my-app-token', '238c62c2328b03fcc2889212bcf9e1a5fc2be7650301132229b94e108b25c6c5', '[\"*\"]', NULL, '2021-05-16 07:16:11', '2021-05-16 07:16:11'),
(49, 'App\\Models\\User', 5, 'my-app-token', '4482b39abe61a3e6f0f3ee5c840b7e46abb01a8ef47bf184018d4dd200767421', '[\"*\"]', NULL, '2021-05-16 07:19:48', '2021-05-16 07:19:48'),
(50, 'App\\Models\\User', 5, 'my-app-token', 'a996600876bfbc12e2beba19b20782447258b78b8e459765f5f9c4ab1f6917b1', '[\"*\"]', NULL, '2021-05-16 09:17:25', '2021-05-16 09:17:25'),
(51, 'App\\Models\\User', 5, 'my-app-token', '337ab43dc2b03a260f51fcb7c1d7999083da681fd6821ce343edc12a8fe7c720', '[\"*\"]', NULL, '2021-05-16 09:19:34', '2021-05-16 09:19:34'),
(52, 'App\\Models\\User', 5, 'my-app-token', 'f5cd04a7c3159e22a027d90a1f386fa08cd37095805fba8f6e460fb65f4709d4', '[\"*\"]', NULL, '2021-05-16 09:25:36', '2021-05-16 09:25:36'),
(53, 'App\\Models\\User', 5, 'my-app-token', '659fd5c974483f86b39b512680f3a2e252959ab28364726bb1e8177bb692d8cd', '[\"*\"]', NULL, '2021-05-16 09:26:38', '2021-05-16 09:26:38'),
(54, 'App\\Models\\User', 5, 'my-app-token', '8c12abce0492adbb019c92cf5210a32c4bc42067ec8a733cb8c2c969811b85d6', '[\"*\"]', NULL, '2021-05-16 09:28:27', '2021-05-16 09:28:27'),
(55, 'App\\Models\\User', 5, 'my-app-token', '329132adc95e75922e7ad3ce3f6f857b3d48016692203791b399e2c79ca9f7b2', '[\"*\"]', NULL, '2021-05-16 18:51:26', '2021-05-16 18:51:26'),
(56, 'App\\Models\\User', 5, 'my-app-token', '26e50c2fedf1496f9020091c631a4057e9447cb41637a2669942bf4772aab75f', '[\"*\"]', NULL, '2021-05-16 18:52:14', '2021-05-16 18:52:14'),
(57, 'App\\Models\\User', 5, 'my-app-token', 'b8f0cacb45edbe11b6ac74e2d34f338902d063fa4cd938e32db255800525a555', '[\"*\"]', NULL, '2021-05-16 18:53:47', '2021-05-16 18:53:47'),
(58, 'App\\Models\\User', 5, 'my-app-token', 'efe8bae1a2d7b012c37a782032e09192a816eda360e4988e7c009730834e6539', '[\"*\"]', NULL, '2021-05-16 18:55:04', '2021-05-16 18:55:04'),
(59, 'App\\Models\\User', 5, 'my-app-token', 'e53e88f98b648f0b6e8d5f26bf55fe82d727879cc2c71e8c5aadce1db9e0b70a', '[\"*\"]', NULL, '2021-05-16 18:56:18', '2021-05-16 18:56:18'),
(60, 'App\\Models\\User', 5, 'my-app-token', '68d8511adfb70c8fb0c27185264598547cd645f09f22ba2f17f902b6ba77b9df', '[\"*\"]', NULL, '2021-05-16 20:03:40', '2021-05-16 20:03:40'),
(61, 'App\\Models\\User', 5, 'my-app-token', '79d65a45936482a05d1c2b6974e73efe240e055a906debcbae233762f92720ce', '[\"*\"]', NULL, '2021-05-16 20:09:40', '2021-05-16 20:09:40'),
(62, 'App\\Models\\User', 5, 'my-app-token', 'a027ef8b84a4862c110eeecdfc1fcbade6da8f5ccb826f3dd7bc6080fdec4561', '[\"*\"]', NULL, '2021-05-16 20:10:13', '2021-05-16 20:10:13'),
(63, 'App\\Models\\User', 5, 'my-app-token', '8491b3139bc3d0ca1de162377b022edc356bff48983052cace98784bdeeca75b', '[\"*\"]', NULL, '2021-05-16 20:13:23', '2021-05-16 20:13:23'),
(64, 'App\\Models\\User', 5, 'my-app-token', '5cd3d350dbae75ad2317e12d1628c02bc7d41845d508473b72104872f6af3b24', '[\"*\"]', NULL, '2021-05-16 20:14:18', '2021-05-16 20:14:18'),
(65, 'App\\Models\\User', 5, 'my-app-token', '4d3ca1e09fa17ee9259a24fa1409ab9fbe94a5d5a34009679a79841d7500efca', '[\"*\"]', NULL, '2021-05-16 20:15:22', '2021-05-16 20:15:22'),
(66, 'App\\Models\\User', 5, 'my-app-token', '1310ca6786996f607ffdb5aa8a90df9ac49fb37504ae338d9a967f8a5f697ed4', '[\"*\"]', NULL, '2021-05-16 20:16:45', '2021-05-16 20:16:45'),
(67, 'App\\Models\\User', 5, 'my-app-token', '4987077d93682f314f6302f0bbc47cc9630d3bd3ef91a48e47322ac0a3166ebd', '[\"*\"]', NULL, '2021-05-16 20:19:19', '2021-05-16 20:19:19'),
(68, 'App\\Models\\User', 5, 'my-app-token', '5fc4da3caff6735b88aaaa0f18f33da680e68e4c3b2dff3bd2969484cb7ed7f2', '[\"*\"]', NULL, '2021-05-16 20:20:32', '2021-05-16 20:20:32'),
(69, 'App\\Models\\User', 5, 'my-app-token', 'bc0e40bff2b9dabd877fc69618bfc0e4448c97ba49c8146c5938d0132b0b5742', '[\"*\"]', NULL, '2021-05-16 20:21:52', '2021-05-16 20:21:52'),
(70, 'App\\Models\\User', 5, 'my-app-token', '5633526f824378e1a84cd7500969d411b5cbd6f5ed0e600e8994fa5204f85d0d', '[\"*\"]', NULL, '2021-05-16 20:27:46', '2021-05-16 20:27:46'),
(71, 'App\\Models\\User', 5, 'my-app-token', 'dd4fcceca7feee184f21e311cea51f0d10eef949a75e71dc63abe5437c1870fa', '[\"*\"]', NULL, '2021-05-16 20:36:52', '2021-05-16 20:36:52'),
(72, 'App\\Models\\User', 5, 'my-app-token', '606d3b255b54a3a2777b8ea9922080ff63935564112e0e64e0e8ac15c9151532', '[\"*\"]', NULL, '2021-05-16 21:02:35', '2021-05-16 21:02:35'),
(73, 'App\\Models\\User', 5, 'my-app-token', 'bc83edaf1a65a4acc4e18c2053d688440d4e6941ec6725e9fb49b904ce7177e1', '[\"*\"]', NULL, '2021-05-16 21:11:29', '2021-05-16 21:11:29'),
(74, 'App\\Models\\User', 5, 'my-app-token', '726eeb2f1afd77f2fca7c22d2e1aac4d2f42a97f18b10c677d0ef19f1f6dcbde', '[\"*\"]', NULL, '2021-05-17 05:58:33', '2021-05-17 05:58:33'),
(75, 'App\\Models\\User', 5, 'my-app-token', '7318b43c031c16c0f0cacb9125bd1bc5c16dbd1c953a09f4f49a8296a39b8b1d', '[\"*\"]', NULL, '2021-05-17 06:07:11', '2021-05-17 06:07:11'),
(76, 'App\\Models\\User', 5, 'my-app-token', 'aa10d9e3f0b7a43f07bae4dd550aa749b4890a80a249510d43d6230c599ac9ca', '[\"*\"]', NULL, '2021-05-17 12:01:38', '2021-05-17 12:01:38'),
(77, 'App\\Models\\User', 5, 'my-app-token', '1715ce6d89e5fa41e311638ee25d4475ea8d3ac6fe38ea9ce313ad43df14d2ce', '[\"*\"]', NULL, '2021-05-17 18:13:26', '2021-05-17 18:13:26'),
(78, 'App\\Models\\User', 5, 'my-app-token', '4e4b47e3b293e542651cf8ebf5f8b68075d1eb14aeb71c69ae84d5dc962e20f4', '[\"*\"]', NULL, '2021-05-17 22:43:11', '2021-05-17 22:43:11'),
(79, 'App\\Models\\User', 5, 'my-app-token', '8af24688a927222b27d650f860ee31a3dccfe06e7479c8a8bb160a273e4f7074', '[\"*\"]', NULL, '2021-05-17 23:26:14', '2021-05-17 23:26:14'),
(80, 'App\\Models\\User', 5, 'my-app-token', '124218094c226ef42feed66aa397fff7af66c77311a940045fba24d286a21d4f', '[\"*\"]', NULL, '2021-05-19 20:50:59', '2021-05-19 20:50:59'),
(81, 'App\\Models\\User', 5, 'my-app-token', '33be07731d6080130e0499cd13979617e259b16a3aa317019045e0303a716a1b', '[\"*\"]', NULL, '2021-05-19 21:13:56', '2021-05-19 21:13:56'),
(82, 'App\\Models\\User', 5, 'my-app-token', '18a7473ba0d2add44fc61b6ef9d1b58d0237b940dde2c6ea28a9f7b376297bd8', '[\"*\"]', NULL, '2021-05-20 06:46:44', '2021-05-20 06:46:44'),
(83, 'App\\Models\\User', 5, 'my-app-token', '6ab87329316788f2967db5d40728e43cc2f1c550e81736f4fbf186bad20a68d7', '[\"*\"]', NULL, '2021-05-20 06:46:45', '2021-05-20 06:46:45'),
(84, 'App\\Models\\User', 5, 'my-app-token', '9c3a5f0987029a27dae38d6597071fad6b4851caaed52d565a9895d9673b258e', '[\"*\"]', NULL, '2021-05-20 06:46:46', '2021-05-20 06:46:46'),
(85, 'App\\Models\\User', 5, 'my-app-token', '8976564ab710c6461d672bf908a4fa36df78c18a272174adfe49c8fdf1fc4a4f', '[\"*\"]', NULL, '2021-05-20 06:46:46', '2021-05-20 06:46:46'),
(86, 'App\\Models\\User', 5, 'my-app-token', 'a534c84e7b4e5010027e7dce4b7ef176406fee9f99765e5826e7713122b53def', '[\"*\"]', NULL, '2021-05-20 06:46:47', '2021-05-20 06:46:47'),
(87, 'App\\Models\\User', 5, 'my-app-token', '2e5d670ab250aa7c33438f7ad69d3d443a156384292e2a5861dc9a857fa2ca60', '[\"*\"]', NULL, '2021-05-20 06:46:47', '2021-05-20 06:46:47'),
(88, 'App\\Models\\User', 5, 'my-app-token', '53060a1d6c9786facf353661a778830a8353a4131f3361eb8d3437c9961b902a', '[\"*\"]', NULL, '2021-05-20 06:46:48', '2021-05-20 06:46:48'),
(89, 'App\\Models\\User', 5, 'my-app-token', 'cc5f46f0add258562033f746a8da15e47f7ae74026bddca643b4fdb7238f0c2f', '[\"*\"]', NULL, '2021-05-20 06:46:48', '2021-05-20 06:46:48'),
(90, 'App\\Models\\User', 5, 'my-app-token', 'f4571343c4a97849becb78e202987246123207a3324798c488fd4d03eb4dd639', '[\"*\"]', NULL, '2021-05-20 06:47:56', '2021-05-20 06:47:56'),
(91, 'App\\Models\\User', 5, 'my-app-token', '787cf298cb78a2b0fb1a39b69fe1aa5d7c693ccc539335813f9bb5aade6a3e2e', '[\"*\"]', NULL, '2021-05-20 23:47:41', '2021-05-20 23:47:41'),
(92, 'App\\Models\\User', 5, 'my-app-token', 'dce46616b4da9a1cd4323712aa5e7a3811333c4b818cf00f76c09f0712858b64', '[\"*\"]', NULL, '2021-05-24 19:42:28', '2021-05-24 19:42:28'),
(93, 'App\\Models\\User', 5, 'my-app-token', 'ba1d455984a5455f3524ad81ff176e240d1b5186ae33bc2e7d0236b7bf350dee', '[\"*\"]', NULL, '2021-05-24 19:51:26', '2021-05-24 19:51:26'),
(94, 'App\\Models\\User', 5, 'my-app-token', 'a8c680a8b61da35260f57f1bd824950f504e838c7274add79ade54977aa40fcd', '[\"*\"]', NULL, '2021-05-24 19:52:53', '2021-05-24 19:52:53'),
(95, 'App\\Models\\User', 5, 'my-app-token', 'bdb48cdb4c678f8b0b040c7133c2f0278042a491d0583c302b6d5f72ce7d77f3', '[\"*\"]', NULL, '2021-05-24 19:57:03', '2021-05-24 19:57:03'),
(96, 'App\\Models\\User', 5, 'my-app-token', '696a7d8f4f943361d29660271bd1a05afe24c614ce9ffad9309d61f3106c2333', '[\"*\"]', NULL, '2021-05-24 21:39:19', '2021-05-24 21:39:19'),
(97, 'App\\Models\\User', 5, 'my-app-token', '36e16a5b14f565b2368a54bc55a3057deee1feecdd172ca86ea6ef7b196c4b50', '[\"*\"]', NULL, '2021-05-24 21:41:40', '2021-05-24 21:41:40'),
(98, 'App\\Models\\User', 5, 'my-app-token', '273966518a5e049e9a23266ee4fb1b5ec8c1043697e01d898aae8050692dd45d', '[\"*\"]', NULL, '2021-05-24 21:47:00', '2021-05-24 21:47:00'),
(99, 'App\\Models\\User', 5, 'my-app-token', 'd5241362ec702fb76dc8ed905a8e453ce70d1305768e9fc75c229a59e858f6b0', '[\"*\"]', NULL, '2021-05-27 02:15:08', '2021-05-27 02:15:08'),
(100, 'App\\Models\\User', 5, 'my-app-token', 'e958c3593f9c92e8b78ed112e34da48ece5105b634df1aabbb213af293e5dba7', '[\"*\"]', NULL, '2021-05-27 02:26:09', '2021-05-27 02:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `nama_surat` varchar(255) NOT NULL,
  `value_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `nama_surat`, `value_surat`) VALUES
(1, 'Surat Keterangan Usaha', 'surat_keterangan_usaha'),
(2, 'Surat Keterangan Domisili', 'surat_keterangan_domisili'),
(3, 'Surat Keterangan Domisili Perusahaan', 'surat_keterangan_domisili_perusahaan'),
(4, 'Surat Keterangan Domisili Bangunan', 'surat_keterangan_domisili_bangunan'),
(5, 'Surat Keterangan Domisili Kelompok Usaha', 'surat_keterangan_domisili_kelompokusaha'),
(6, 'Surat Gempur Gakin Sktm', 'surat_gempur_gakin_sktm'),
(8, 'Surat Keterangan Pindah', 'surat_keterangan_pindah'),
(9, 'Surat Pernyataan Sktm', 'surat_pernyataan_sktm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` int(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `pin` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik`, `name`, `email`, `alamat`, `no_hp`, `email_verified_at`, `pin`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Sulhin Ratwi', 'sulhinhin8@gmail.com', '', '', NULL, NULL, '$2y$10$d939Nk7i.C7Q0crLlexItOIrdacVMc18qHePu9ecx5PoQZjnCuP5K', '1', 'KCypjLQLsdj6A4EjiKzaqdVUtMj8uuKIxBXjvpY0XeeTzd830hlzw0AFWFXs', '2021-04-02 21:56:32', '2021-05-19 05:50:19'),
(4, NULL, 'Admin', 'admin@admin', '', '', NULL, NULL, '$2y$10$cKcDSQNIemCvpo9LRsUdvui8nBJg2hV7I29UMuXLZIkHhNcSnoMhe', '1', NULL, '2021-05-13 19:44:38', '2021-05-13 19:44:38'),
(5, 123456789, 'Andri', 'user@user', 'Pekandangan Jaya', '089327232129', NULL, 11, '$2y$10$AhneQyY7ithle5DkcD6B6eR3Je1CPlgcA55knTVBuEMuuTIHCSPqC', '0', NULL, '2021-05-13 19:44:38', '2021-05-26 00:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id_visimisi`, `visi`, `misi`) VALUES
(2, 'MANDIRI, MAJU, RELIGIUS dan SEJAHTERA', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . Aldus PageMaker including versions of Lorem Ipsum.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendakegiatan`
--
ALTER TABLE `agendakegiatan`
  ADD PRIMARY KEY (`id_agendakegiatan`);

--
-- Indexes for table `aparaturdesa`
--
ALTER TABLE `aparaturdesa`
  ADD PRIMARY KEY (`id_aparaturdesa`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kabar_desa`
--
ALTER TABLE `kabar_desa`
  ADD PRIMARY KEY (`id_kabar_desa`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `permintaan_surat`
--
ALTER TABLE `permintaan_surat`
  ADD PRIMARY KEY (`id_permintaan_surat`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

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
-- AUTO_INCREMENT for table `agendakegiatan`
--
ALTER TABLE `agendakegiatan`
  MODIFY `id_agendakegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aparaturdesa`
--
ALTER TABLE `aparaturdesa`
  MODIFY `id_aparaturdesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kabar_desa`
--
ALTER TABLE `kabar_desa`
  MODIFY `id_kabar_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `permintaan_surat`
--
ALTER TABLE `permintaan_surat`
  MODIFY `id_permintaan_surat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
