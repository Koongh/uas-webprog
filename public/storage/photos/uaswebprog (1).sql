-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 09:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uaswebprog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(0, 'wahyuni\r\n');

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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `stock` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `discount` double(8,2) NOT NULL DEFAULT 0.00,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `stock`, `discount`, `description`, `manufacturer`, `photo`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Knalpot CLD Racing type C2 BULAT seri MIO M3, MIO J, MIO 125 cc & X-RIDE Fullsystem', 620000, 2, 0.00, 'Tabung silinser panjang 200 mm.Inlet 38 mm.Saringan dalam Setengah ( 1/2 ).Bracket Gelang-gelang', 'CLD', 'photos/1.jpg', NULL, NULL, 0),
(2, 'Knalpot CLD Racing type C1 OVAL Kolong seri ALL VARIO 125 LED & VARIO 150 Fullsystem', 640000, 5, 0.00, 'Tabung silinser panjang 225 mm.Inlet 38 mm.Saringan dalam Penuh ( FULL ).Bracket Gelang-gelang', 'CLD', 'photos/2.jpg', NULL, NULL, 0),
(3, 'Knalpot CLD Racing type C1 OVAL Atas seri ALL VARIO 125 LED & VARIO 150 Fullsystem', 640000, 2, 0.00, 'Tabung silinser panjang 225 mm.Inlet 38 mm.Saringan dalam Penuh ( FULL ).Bracket Gelang-gelang', 'CLD', 'photos/3.jpg', NULL, NULL, 0),
(4, 'Knalpot CLD Racing type C1 OVAL Kolong seri ALL BEAT Fi, BEAT STREET, SCOOPY & GENIO Fullsystem', 620000, 3, 0.00, 'Tabung silinser panjang 225 mm.Inlet 38 mm.Saringan dalam Penuh ( FULL ).Bracket Gelang-gelang', 'CLD', 'photos/4.jpg', NULL, NULL, 0),
(5, 'Knalpot CLD Racing type C2 BULAT Kolong seri ALL VARIO 125 LED & VARIO 150 Fullsystem', 655000, 4, 0.00, 'Tabung silinser panjang 200 mm.Inlet 38 mm.Saringan dalam Setengah ( 1/2 ).Bracket Gelang-gelang', 'CLD', 'photos/5.jpg', NULL, NULL, 0),
(6, 'Knalpot CLD Racing type SHARK m Carbon ALL VARIO 150 Fullsystem', 950000, 3, 0.00, 'Tabung silinser panjang 250 mm.Inlet 38 mm..Saringan dalam Penuh ( FULL ).Bracket Paten', 'CLD', 'photos/6.jpg', NULL, NULL, 0),
(7, 'Knalpot CLD Racing type C2 OVAL Kolong seri ALL BEAT Fi, BEAT STREET, SCOOPY & GENIO Fullsystem', 665000, 4, 0.00, 'Tabung silinser panjang 200 mm.Inlet 38 mm.Saringan dalam Setengah ( 1/2 ).Bracket Gelang-gelang', 'CLD', 'photos/7.jpg', NULL, NULL, 0),
(8, 'Knalpot CLD Racing type NEW MONSTER X 165 mm Atas seri ALL BEAT Fi, BEAT STREET, SCOOPY & GENIO Full', 815000, 4, 0.00, 'Tabung silinser panjang 165 mm.Inlet 50 mm.Saringan dalam 1/2 ( Setengah ).Bracket Paten', 'CLD', 'photos/8.jpg', NULL, NULL, 0),
(9, 'Knalpot CLD Racing type MONSTER RACE 175mm Atas seri ALL BEAT Fi, BEAT STREET, SCOOPY & GENIO Fullsy', 815000, 6, 0.00, 'Tabung silinser panjang 175 mm.Inlet 50 mm.Saringan dalam 1/2 ( Setengah ).Bracket Paten', 'CLD', 'photos/9.jpg', NULL, NULL, 0),
(10, 'Knalpot DAYTONA Racing EVOLUTION seri NMAX & AEROX Fullsystem', 735000, 1, 0.00, 'Panjang Tabung 295 mm.Diameter Tabung 90 mm.Inlet 42 mm.Saringan Dalam Penuh ( Full )', 'DAYTONA', 'photos/10.jpg', NULL, NULL, 0),
(11, 'Knalpot CLD Racing type C3 BULAT Atas seri ALL BEAT Fi, BEAT STREET, SCOOPY & GENIO Fullsystem', 800000, 3, 0.00, 'Tabung silinser panjang 175 mm.Inlet 50 mm.Saringan dalam 1/2 ( Setengah ).Bracket Gelang-gelang', 'CLD', 'photos/11.jpg', NULL, NULL, 0),
(12, 'Knalpot CLD Racing type C1 BULAT seri XEON RC Injection Fullsystem', 620000, 3, 0.00, 'Tabung silinser panjang 225 mm.Inlet 38 mm.Saringan dalam Penuh ( FULL ).Bracket Gelang-gelang', 'CLD', 'photos/12.jpg', NULL, NULL, 0),
(13, 'Knalpot CLD Racing type SHARK MONSTER Kolong seri ALL VARIO 150 & VARIO 125 LED Fullsystem', 875000, 3, 0.00, 'Tabung silinser panjang 125 mm.Inlet 50 mm.Saringan dalam 1/2 ( Setengah ).Bracket Paten', 'CLD', 'photos/13.jpg', NULL, NULL, 0),
(14, 'Knalpot CLD Racing type C7 Kolong seri ALL VARIO 125 LED & VARIO 150 Fullsystem', 880000, 3, 0.00, 'Tabung silinser panjang 175 mm.Inlet 50 mm.Saringan dalam 1/2 ( Setengah ).Bracket Paten', 'CLD', 'photos/14.jpg', NULL, NULL, 0),
(15, 'Knalpot CLD Racing type NEW MONSTER X 165 mm seri MIO M3, MIO J, MIO 125 cc & X-RIDE Fullsystem', 815000, 2, 0.00, 'Tabung silinser panjang 165 mm.Inlet 50 mm.Saringan dalam 1/2 ( Setengah ).Bracket Paten', 'CLD', 'photos/15.jpg', NULL, NULL, 0),
(16, 'Knalpot CLD Racing type C3 Oval seri ALL VARIO 125 LED & VARIO 150 Fullsystem', 855000, 3, 0.00, 'Tabung silinser panjang 175 mm.Inlet 50 mm.Saringan dalam 1/2 ( Setengah ).Bracket Gelang-gelang', 'CLD', 'photos/16.jpg', NULL, NULL, 0),
(17, 'Knalpot CLD Racing type C3 Bulat seri ALL VARIO 125 LED & VARIO 150 Fullsystem', 820000, 5, 0.00, 'Tabung silinser panjang 175 mm.Inlet 50 mm.Saringan dalam 1/2 ( Setengah ).Bracket Gelang-gelang', 'CLD', 'photos/17.jpg', NULL, NULL, 0),
(18, 'Knalpot CLD Racing type SHARK m Carbon seri ALL R15 V3, V4 & MT 15 Fullsystem', 1025000, 1, 0.00, 'Tabung silinser panjang 250 mm.Inlet 50 mm.Saringan dalam Penuh ( FULL ).Bracket Paten', 'CLD', 'photos/18.jpg', NULL, NULL, 0),
(19, 'Knalpot CLD Racing type MONSTER X 200 mm seri ALL R15 V3, V4 & MT 15 Fullsystem', 950000, 2, 0.00, 'Tabung silinser panjang 200 mm.Inlet 50 mm.Saringan dalam Penuh ( FULL ).Bracket Paten', 'CLD', 'photos/19.jpg', NULL, NULL, 0),
(21, 'Knalpot CLD Racing type C1 BULAT Kolong seri ALL BEAT CARBU & VARIO 110 Fullsystem', 600000, 5, 0.00, 'Tabung silinser panjang 230 mm.Inlet 38 mm.Saringan dalam Penuh ( FULL ).Bracket Gelang-gelang', 'CLD', 'photos/21.jpg', NULL, NULL, 0),
(22, 'Knalpot CLD Racing type C2 OVAL Kolong seri ALL BEAT CARBU & VARIO 110 Fullsystem', 665000, 3, 0.00, 'Tabung silinser panjang 200 mm.Inlet 38 mm.Saringan dalam Setengah ( 1/2 ).Bracket Gelang-gelang', 'CLD', 'photos/22.jpg', NULL, NULL, 0),
(23, 'Knalpot CLD Racing type FALCON R seri SUZUKI GSX R 150 Fullsystem', 1000000, 3, 0.00, 'Tabung silinser panjang 250 mm.Inlet 50 mm.Saringan dalam Penuh ( Full ).Bracket Paten', 'CLD', 'photos/23.jpg', NULL, NULL, 0),
(24, 'Knalpot CLD Racing type C3 Bulat seri ALL BEAT CARBU & VARIO 110 Fullsystem', 800000, 1, 0.00, 'Tabung silinser panjang 175 mm.Inlet 50 mm.Saringan dalam Setengah ( 1/2 ).Bracket Gelang-gelang', 'CLD', 'photos/24.jpg', NULL, NULL, 0),
(25, 'Knalpot CLD Racing type MONSTER RACE 200 mm seri ALL BEAT CARBU & VARIO 110 Fullsystem', 855000, 7, 0.00, 'Tabung silinser panjang 200 mm.Inlet 50 mm.Saringan dalam Penuh ( FULL ).Bracket Paten', 'CLD', 'photos/25.jpg', NULL, NULL, 0),
(26, 'Knalpot CLD Racing type C7 175 mm Kolong seri ALL BEAT CARBU & VARIO 110 Fullsystem', 860000, 5, 0.00, 'Tabung silinser panjang 175 mm.Inlet 50 mm.Saringan dalam Setengah ( 1/2 ).Bracket Paten', 'CLD', 'photos/26.jpg', NULL, NULL, 0),
(27, 'Knalpot CLD Racing type SHARK MONSTER seri ALL BEAT CARBU & VARIO 110 Fullsystem', 875000, 3, 0.00, 'Tabung silinser panjang 125 mm.Inlet 50 mm.Saringan dalam Setengah ( 1/2 ).Bracket Paten', 'CLD', 'photos/27.jpg', NULL, NULL, 0),
(28, 'Knalpot CLD Racing type FALCON Atas seri ALL BEAT Fi, BEAT STREET, SCOOPY & GENIO Fullsystem', 945000, 2, 0.00, 'Tabung silinser panjang 175 mm.Inlet 50 mm.Saringan dalam Setengah ( 1/2 ).Bracket Paten', 'CLD', 'photos/28.jpg', NULL, NULL, 0),
(29, 'Knalpot CLD Racing type FALCON seri ALL VARIO 125 LED & VARIO 150 Fullsystem', 950000, 5, 0.00, 'Tabung silinser panjang 175 mm.Inlet 50 mm.Saringan dalam Setengah ( 1/2 ).Bracket Paten', 'CLD', 'photos/29.jpg', NULL, NULL, 0),
(30, 'Knalpot CLD Racing type MONSTER RACE 200 mm seri MX KING 150 Fullsystem', 1093000, 2, 0.00, 'Tabung silinser panjang 200 mm.Inlet 50 mm.Saringan dalam Penuh ( FULL ).Bracket Paten', 'CLD', 'photos/30.jpg', NULL, NULL, 0),
(31, 'Knalpot CLD Racing type MONSTER X 200mm seri ALL CB 150 R Fullsystem', 900000, 1, 0.00, 'Tabung silinser panjang 200 mm.Inlet 50 mm.Saringan dalam Penuh ( FULL ).Bracket Paten', 'CLD', 'photos/31.jpg', NULL, NULL, 0),
(32, 'Knalpot CLD Racing type GP MONSTER seri SUPRA GTR 150 & SONIC 150 Fullsystem', 875000, 1, 0.00, 'Tabung silinser panjang 200 mm.Inlet 50 mm.Saringan dalam Setengah ( 1/2 ).Bracket Paten', 'CLD', 'photos/32.jpg', NULL, NULL, 0),
(33, 'Knalpot CLD Racing type GP MONSTER seri AEROX & LEXI Fullsystem', 850000, 5, 0.00, 'Tabung silinser panjang 200 mm.Inlet 50 mm.Saringan dalam Setengah ( 1/2 ).Bracket Paten', 'CLD', 'photos/33.jpg', NULL, NULL, 0),
(34, 'Knalpot CLD Racing type GP MONSTER seri SATRIA FU 150 Fullsystem', 850000, 4, 0.00, 'Tabung silinser panjang 200 mm.Inlet 50 mm.Saringan dalam Setengah ( 1/2 ).Bracket Paten', 'CLD', 'photos/34.jpg', NULL, NULL, 0),
(35, 'Knalpot CLD Racing type GP MONSTER seri SUZUKI GSX R 150 Fullsystem', 875000, 3, 0.00, 'Tabung silinser panjang 200 mm.Inlet 50 mm.Saringan dalam Setengah ( 1/2 ).Bracket Paten', 'CLD', 'photos/35.jpg', NULL, NULL, 0),
(36, 'Knalpot CLD Racing type GP MONSTER seri ALL VIXION Fullsystem', 875000, 1, 0.00, 'Tabung silinser panjang 200 mm.Inlet 50 mm.Saringan dalam Setengah ( 1/2 ).Bracket Paten', 'CLD', 'photos/36.jpg', NULL, NULL, 0),
(37, 'Knalpot CLD Racing type GP MONSTER seri ALL CB 150 R Fullsystem', 875000, 3, 0.00, 'Tabung silinser panjang 200 mm.Inlet 50 mm.Saringan dalam Setengah ( 1/2 ).Bracket Paten', 'CLD', 'photos/37.jpg', NULL, NULL, 0),
(39, 'Knalpot CLD Racing type SPEED seri YAMAHA NMAX Fullsystem', 950000, 4, 0.00, 'Tabung silinser panjang 250 mm.Inlet 50 mm.Saringan dalam Penuh ( FULL ).Bracket Paten', 'CLD', 'photos/39.jpg', NULL, NULL, 0),
(40, 'Knalpot CLD Racing type NEW MONSTER X 165 mm Atas seri XEON RC Injection Fullsystem', 855000, 3, 0.00, 'Tabung silinser panjang 165 mm.Inlet 50 mm.Saringan dalam Setengah ( 1/2 ).Bracket Paten', 'CLD', 'photos/40.jpg', NULL, NULL, 0),
(41, 'Knalpot CLD Racing type MONSTER X 200 mm seri SUPRA GTR 150 & SONIC 150 Fullsystem', 875000, 2, 0.00, 'Tabung silinser panjang 200 mm.Inlet 50 mm.Saringan dalam Setengah ( 1/2 ).Bracket Paten', 'CLD', 'photos/41.jpg', NULL, NULL, 0),
(42, 'Knalpot DAYTONA Racing EVOLUTION seri ALL VARIO 125 LED & VARIO 150 Fullsystem', 735000, 2, 0.00, 'Tabung silinser panjang 295 mm.Inlet 45 mm.Saringan dalam Penuh ( FULL ).Bracket Paten', 'DAYTONA', 'photos/42.jpg', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `item_motorcycle`
--

CREATE TABLE `item_motorcycle` (
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `motorcycle_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_motorcycle`
--

INSERT INTO `item_motorcycle` (`item_id`, `motorcycle_id`) VALUES
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(2, 8),
(2, 9),
(3, 8),
(3, 9),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(5, 8),
(5, 9),
(6, 9),
(7, 3),
(7, 4),
(7, 5),
(7, 6),
(7, 7),
(8, 3),
(8, 4),
(8, 5),
(8, 6),
(8, 7),
(9, 3),
(9, 4),
(9, 5),
(9, 6),
(9, 7),
(10, 1),
(10, 2),
(11, 3),
(11, 4),
(11, 5),
(11, 6),
(11, 7),
(12, 10),
(13, 8),
(13, 9),
(14, 8),
(14, 9),
(15, 11),
(15, 12),
(15, 13),
(15, 14),
(16, 8),
(16, 9),
(17, 8),
(17, 9),
(18, 15),
(18, 16),
(18, 17),
(18, 18),
(19, 15),
(19, 16),
(19, 17),
(19, 18),
(21, 19),
(21, 20),
(22, 19),
(22, 20),
(23, 21),
(24, 19),
(24, 20),
(25, 19),
(25, 20),
(26, 19),
(26, 20),
(27, 19),
(27, 20),
(28, 3),
(28, 4),
(28, 5),
(28, 6),
(28, 7),
(29, 8),
(29, 9),
(30, 22),
(31, 23),
(32, 24),
(32, 25),
(33, 2),
(33, 26),
(34, 27),
(35, 21),
(36, 28),
(37, 23),
(39, 1),
(40, 10),
(41, 24),
(41, 25),
(42, 8),
(42, 9);

-- --------------------------------------------------------

--
-- Table structure for table `item_user`
--

CREATE TABLE `item_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `total` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_12_02_034337_add_role_column_to_users_table', 1),
(16, '2022_12_02_042056_create_motorcycles_table', 1),
(17, '2022_12_02_042316_create_items_table', 1),
(18, '2022_12_02_042439_create_categories_table', 1),
(19, '2022_12_03_010053_create_item_user_table', 1),
(20, '2022_12_03_010230_create_item_motorcycle_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `motorcycles`
--

CREATE TABLE `motorcycles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motorcycles`
--

INSERT INTO `motorcycles` (`id`, `name`, `manufacturer`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'NMAX 155', 'Yamaha', 'photos/motor1.jpg', NULL, NULL),
(2, 'AEROX 155', 'Yamaha', 'photos/motor2.jpg', NULL, NULL),
(3, 'BEAT Fi', 'Honda', 'photos/motor3.jpg', NULL, NULL),
(4, 'BEAT STREET', 'Honda', 'photos/motor4.jpg', NULL, NULL),
(5, 'BEAT DELUXE', 'Honda', 'photos/motor5.jpg', NULL, NULL),
(6, 'SCOOPY', 'Honda', 'photos/motor6.jpg', NULL, NULL),
(7, 'GENIO', 'Honda', 'photos/motor7.jpg', NULL, NULL),
(8, 'VARIO 125 LED', 'Honda', 'photos/motor8.jpg', NULL, NULL),
(9, 'VARIO 150', 'Honda', 'photos/motor9.jpg', NULL, NULL),
(10, 'XEON RC Injection', 'Yamaha', 'photos/motor10.jpg', '2022-12-07 13:32:52', '2022-12-07 13:32:52'),
(11, 'MIO J', 'Yamaha', 'photos/motor11.jpg', '2022-12-07 13:32:52', '2022-12-07 13:32:52'),
(12, 'MIO M3', 'Yamaha', 'photos/motor12.jpg', '2022-12-07 13:32:52', '2022-12-07 13:32:52'),
(13, 'MIO 125', 'Yamaha', 'photos/motor13.jpg', '2022-12-07 13:32:52', '2022-12-07 13:32:52'),
(14, 'X-RIDE', 'Yamaha', 'photos/motor14.jpg', '2022-12-07 13:32:52', '2022-12-07 13:32:52'),
(15, 'R15 V3', 'Yamaha', 'photos/motor15.jpg', '2022-12-07 13:32:52', '2022-12-07 13:32:52'),
(16, 'R15 V4', 'Yamaha', 'photos/motor16.jpg', '2022-12-07 13:32:52', '2022-12-07 13:32:52'),
(17, 'MT 15', 'Yamaha', 'photos/motor17.jpg', '2022-12-07 13:32:52', '2022-12-07 13:32:52'),
(18, 'XSR 155', 'Yamaha', 'photos/motor18.jpg', '2022-12-07 13:32:52', '2022-12-07 13:32:52'),
(19, 'BEAT CARBU', 'Honda', 'photos/motor19.jpg', '2022-12-09 02:02:58', '2022-12-09 02:02:58'),
(20, 'VARIO 110', 'Honda', 'photos/motor20.jpg', '2022-12-09 02:02:58', '2022-12-09 02:02:58'),
(21, 'GSX R 150', 'Suzuki', 'photos/motor21.jpg', '2022-12-09 02:02:58', '2022-12-09 02:02:58'),
(22, 'MX KING 150', 'Yamaha', 'photos/motor22.jpg', '2022-12-09 02:02:58', '2022-12-09 02:02:58'),
(23, 'CB 150 R', 'Honda', 'photos/motor23.jpg', '2022-12-09 02:02:58', '2022-12-09 02:02:58'),
(24, 'SUPRA GTR 150', 'Honda', 'photos/motor24.jpg', '2022-12-09 02:02:58', '2022-12-09 02:02:58'),
(25, 'SONIC 150', 'Honda', 'photos/motor25.jpg', '2022-12-09 02:02:58', '2022-12-09 02:02:58'),
(26, 'LEXI', 'Yamaha', 'photos/motor26.jpg', '2022-12-09 02:02:58', '2022-12-09 02:02:58'),
(27, 'SATRIA FU 150', 'Suzuki', 'photos/motor27.jpg', '2022-12-09 02:02:58', '2022-12-09 02:02:58'),
(28, 'VIXION', 'Yamaha', 'photos/motor28.jpg', '2022-12-09 02:02:58', '2022-12-09 02:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` smallint(6) NOT NULL DEFAULT 2 COMMENT '1. Admin 2. Karyawan 0. Resign'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_user`
--
ALTER TABLE `item_user`
  ADD PRIMARY KEY (`id`,`item_id`,`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motorcycles`
--
ALTER TABLE `motorcycles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `motorcycles_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `motorcycles`
--
ALTER TABLE `motorcycles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
