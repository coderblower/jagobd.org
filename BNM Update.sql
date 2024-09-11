-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2024 at 01:04 AM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `versoidl_bnmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `name_bn` varchar(100) DEFAULT NULL,
  `ward_id` int(11) DEFAULT NULL,
  `city_code` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`, `name_bn`, `ward_id`, `city_code`, `created_at`) VALUES
(1, NULL, 'উত্তরা মডলে টাউন ১ হতে ১০নং সেক্টর', 1, 'dncc', '2023-08-28 10:42:40'),
(2, NULL, 'আব্দুল্লাপুর (আংশিক)', 1, 'dncc', '2023-08-28 10:42:40'),
(3, NULL, 'পুরাকরৈ (আংশিক)', 1, 'dncc', '2023-08-28 10:42:40'),
(4, NULL, 'শৈলপুর (আংশিক)', 1, 'dncc', '2023-08-28 10:42:40'),
(5, NULL, 'ফায়দাবাদ (আংশিক)', 1, 'dncc', '2023-08-28 10:42:40'),
(6, NULL, 'বাউনিয়া (আংশিক)', 1, 'dncc', '2023-08-28 10:42:40'),
(7, NULL, 'দক্ষিণ খান (আংশিক)', 1, 'dncc', '2023-08-28 10:42:40'),
(8, NULL, 'রানাভোলা (আংশিক)', 1, 'dncc', '2023-08-28 10:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `central_committees`
--

CREATE TABLE `central_committees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bn_name` varchar(255) DEFAULT NULL,
  `en_name` varchar(255) DEFAULT NULL,
  `rank_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `central_committees`
--

INSERT INTO `central_committees` (`id`, `bn_name`, `en_name`, `rank_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'শাহ্ মোহাম্মাদ আবু জাফর', 'Shah Mohammad Abu Zafar', '1', 'uploads-image/centralCommittee/1716270797.jpg', '2024-05-20 14:57:11', '2024-05-21 09:53:17'),
(2, 'ড. কামরুল আহসান', 'Dr. Kamrul Ahsan', '11', 'uploads-image/centralCommittee/profile.png', '2024-05-20 15:08:26', NULL),
(3, 'এ্যাডঃ মোঃ আব্দুল্লাহ', 'Ed: Md. Abdullah', '2', 'uploads-image/centralCommittee/profile.png', '2024-05-20 15:09:21', NULL),
(4, 'এ্যাডঃ মোঃ গোলাম মোস্তফা', 'Ed: Md Golam Mustafa', '2', 'uploads-image/centralCommittee/profile.png', '2024-05-20 15:09:55', NULL),
(5, 'মুক্তিযোদ্ধা ক্যাপ্টেন মোঃ আবুল কাশেম  (অব:)', 'Freedom Fighter Captain Md. Abul Kashem (Retd.)', '2', 'uploads-image/centralCommittee/profile.png', '2024-05-21 12:07:28', NULL),
(6, 'শাহেদ আলী জিন্নাহ', 'Shahed Ali Jinnah', '2', 'uploads-image/centralCommittee/profile.png', '2024-05-21 12:10:42', NULL),
(7, 'ডলি সায়ন্তনী', 'Doly Shaontoni', '2', 'uploads-image/centralCommittee/profile.png', '2024-05-21 12:11:11', NULL),
(8, 'এ্যাডঃ এ কে এম মতিউর রহমান মন্টু', 'Ed: AKM Matiur Rahman Montu', '2', 'uploads-image/centralCommittee/profile.png', '2024-05-21 12:21:28', NULL),
(9, 'ডঃ মোঃ সামছুল আলম', 'Dr. Md. Samchul Alam', '2', 'uploads-image/centralCommittee/profile.png', '2024-05-21 12:22:01', NULL),
(10, 'লেঃ কর্ণেল (অবঃ) মোয়াজ্জেম হোসেন', 'Lt. Col. (Retd.) Moazzem Hossain', '2', 'uploads-image/centralCommittee/profile.png', '2024-05-21 12:22:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`id`, `name`, `name_bn`, `created_at`) VALUES
(1, 'Central Executive Committee', 'কেন্দ্রীয় কার্যনির্বাহী কমিটি', '2023-10-28 07:34:32'),
(2, 'National Standing Committee', 'জাতীয় স্থায়ী কমিটি', '2023-10-28 07:34:32'),
(3, 'Advisory Committee', 'উপদেষ্টা কমিটি', '2023-10-28 07:35:19'),
(4, 'District/Metropolitan Committee', 'জেলা/ মহানগর কমিটি', '2023-10-28 07:35:19'),
(5, 'Thana / Upazila / Municipal Committee', 'থানা/ উপজেলা/ পৌরসভা কমিটি', '2023-10-28 07:35:55'),
(6, 'Union/Municipal Ward Committee', 'ইউনিয়ন/ পৌর ওয়ার্ড কমিটি', '2023-10-28 07:35:55'),
(7, 'Ward (Union) Committee', 'ওয়ার্ড (ইউনিয়ন এর) কমিটি', '2023-10-28 07:36:12');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `name_bn` varchar(25) NOT NULL,
  `lat` varchar(15) DEFAULT NULL,
  `lon` varchar(15) DEFAULT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `name_bn`, `lat`, `lon`, `url`) VALUES
(1, 1, 'Comilla', 'কুমিল্লা', '23.4682747', '91.1788135', 'www.comilla.gov.bd'),
(2, 1, 'Feni', 'ফেনী', '23.023231', '91.3840844', 'www.feni.gov.bd'),
(3, 1, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', '23.9570904', '91.1119286', 'www.brahmanbaria.gov.bd'),
(4, 1, 'Rangamati', 'রাঙ্গামাটি', NULL, NULL, 'www.rangamati.gov.bd'),
(5, 1, 'Noakhali', 'নোয়াখালী', '22.869563', '91.099398', 'www.noakhali.gov.bd'),
(6, 1, 'Chandpur', 'চাঁদপুর', '23.2332585', '90.6712912', 'www.chandpur.gov.bd'),
(7, 1, 'Lakshmipur', 'লক্ষ্মীপুর', '22.942477', '90.841184', 'www.lakshmipur.gov.bd'),
(8, 1, 'Chattogram', 'চট্টগ্রাম', '22.335109', '91.834073', 'www.chittagong.gov.bd'),
(9, 1, 'Coxsbazar', 'কক্সবাজার', NULL, NULL, 'www.coxsbazar.gov.bd'),
(10, 1, 'Khagrachhari', 'খাগড়াছড়ি', '23.119285', '91.984663', 'www.khagrachhari.gov.bd'),
(11, 1, 'Bandarban', 'বান্দরবান', '22.1953275', '92.2183773', 'www.bandarban.gov.bd'),
(12, 2, 'Sirajganj', 'সিরাজগঞ্জ', '24.4533978', '89.7006815', 'www.sirajganj.gov.bd'),
(13, 2, 'Pabna', 'পাবনা', '23.998524', '89.233645', 'www.pabna.gov.bd'),
(14, 2, 'Bogura', 'বগুড়া', '24.8465228', '89.377755', 'www.bogra.gov.bd'),
(15, 2, 'Rajshahi', 'রাজশাহী', NULL, NULL, 'www.rajshahi.gov.bd'),
(16, 2, 'Natore', 'নাটোর', '24.420556', '89.000282', 'www.natore.gov.bd'),
(17, 2, 'Joypurhat', 'জয়পুরহাট', NULL, NULL, 'www.joypurhat.gov.bd'),
(18, 2, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ', '24.5965034', '88.2775122', 'www.chapainawabganj.gov.bd'),
(19, 2, 'Naogaon', 'নওগাঁ', NULL, NULL, 'www.naogaon.gov.bd'),
(20, 3, 'Jashore', 'যশোর', '23.16643', '89.2081126', 'www.jessore.gov.bd'),
(21, 3, 'Satkhira', 'সাতক্ষীরা', NULL, NULL, 'www.satkhira.gov.bd'),
(22, 3, 'Meherpur', 'মেহেরপুর', '23.762213', '88.631821', 'www.meherpur.gov.bd'),
(23, 3, 'Narail', 'নড়াইল', '23.172534', '89.512672', 'www.narail.gov.bd'),
(24, 3, 'Chuadanga', 'চুয়াডাঙ্গা', '23.6401961', '88.841841', 'www.chuadanga.gov.bd'),
(25, 3, 'Kushtia', 'কুষ্টিয়া', '23.901258', '89.120482', 'www.kushtia.gov.bd'),
(26, 3, 'Magura', 'মাগুরা', '23.487337', '89.419956', 'www.magura.gov.bd'),
(27, 3, 'Khulna', 'খুলনা', '22.815774', '89.568679', 'www.khulna.gov.bd'),
(28, 3, 'Bagerhat', 'বাগেরহাট', '22.651568', '89.785938', 'www.bagerhat.gov.bd'),
(29, 3, 'Jhenaidah', 'ঝিনাইদহ', '23.5448176', '89.1539213', 'www.jhenaidah.gov.bd'),
(30, 4, 'Jhalakathi', 'ঝালকাঠি', NULL, NULL, 'www.jhalakathi.gov.bd'),
(31, 4, 'Patuakhali', 'পটুয়াখালী', '22.3596316', '90.3298712', 'www.patuakhali.gov.bd'),
(32, 4, 'Pirojpur', 'পিরোজপুর', NULL, NULL, 'www.pirojpur.gov.bd'),
(33, 4, 'Barisal', 'বরিশাল', NULL, NULL, 'www.barisal.gov.bd'),
(34, 4, 'Bhola', 'ভোলা', '22.685923', '90.648179', 'www.bhola.gov.bd'),
(35, 4, 'Barguna', 'বরগুনা', NULL, NULL, 'www.barguna.gov.bd'),
(36, 5, 'Sylhet', 'সিলেট', '24.8897956', '91.8697894', 'www.sylhet.gov.bd'),
(37, 5, 'Moulvibazar', 'মৌলভীবাজার', '24.482934', '91.777417', 'www.moulvibazar.gov.bd'),
(38, 5, 'Habiganj', 'হবিগঞ্জ', '24.374945', '91.41553', 'www.habiganj.gov.bd'),
(39, 5, 'Sunamganj', 'সুনামগঞ্জ', '25.0658042', '91.3950115', 'www.sunamganj.gov.bd'),
(40, 6, 'Narsingdi', 'নরসিংদী', '23.932233', '90.71541', 'www.narsingdi.gov.bd'),
(41, 6, 'Gazipur', 'গাজীপুর', '24.0022858', '90.4264283', 'www.gazipur.gov.bd'),
(42, 6, 'Shariatpur', 'শরীয়তপুর', NULL, NULL, 'www.shariatpur.gov.bd'),
(43, 6, 'Narayanganj', 'নারায়ণগঞ্জ', '23.63366', '90.496482', 'www.narayanganj.gov.bd'),
(44, 6, 'Tangail', 'টাঙ্গাইল', NULL, NULL, 'www.tangail.gov.bd'),
(45, 6, 'Kishoreganj', 'কিশোরগঞ্জ', '24.444937', '90.776575', 'www.kishoreganj.gov.bd'),
(46, 6, 'Manikganj', 'মানিকগঞ্জ', NULL, NULL, 'www.manikganj.gov.bd'),
(47, 6, 'Dhaka', 'ঢাকা', '23.7115253', '90.4111451', 'www.dhaka.gov.bd'),
(48, 6, 'Munshiganj', 'মুন্সিগঞ্জ', NULL, NULL, 'www.munshiganj.gov.bd'),
(49, 6, 'Rajbari', 'রাজবাড়ী', '23.7574305', '89.6444665', 'www.rajbari.gov.bd'),
(50, 6, 'Madaripur', 'মাদারীপুর', '23.164102', '90.1896805', 'www.madaripur.gov.bd'),
(51, 6, 'Gopalganj', 'গোপালগঞ্জ', '23.0050857', '89.8266059', 'www.gopalganj.gov.bd'),
(52, 6, 'Faridpur', 'ফরিদপুর', '23.6070822', '89.8429406', 'www.faridpur.gov.bd'),
(53, 7, 'Panchagarh', 'পঞ্চগড়', '26.3411', '88.5541606', 'www.panchagarh.gov.bd'),
(54, 7, 'Dinajpur', 'দিনাজপুর', '25.6217061', '88.6354504', 'www.dinajpur.gov.bd'),
(55, 7, 'Lalmonirhat', 'লালমনিরহাট', NULL, NULL, 'www.lalmonirhat.gov.bd'),
(56, 7, 'Nilphamari', 'নীলফামারী', '25.931794', '88.856006', 'www.nilphamari.gov.bd'),
(57, 7, 'Gaibandha', 'গাইবান্ধা', '25.328751', '89.528088', 'www.gaibandha.gov.bd'),
(58, 7, 'Thakurgaon', 'ঠাকুরগাঁও', '26.0336945', '88.4616834', 'www.thakurgaon.gov.bd'),
(59, 7, 'Rangpur', 'রংপুর', '25.7558096', '89.244462', 'www.rangpur.gov.bd'),
(60, 7, 'Kurigram', 'কুড়িগ্রাম', '25.805445', '89.636174', 'www.kurigram.gov.bd'),
(61, 8, 'Sherpur', 'শেরপুর', '25.0204933', '90.0152966', 'www.sherpur.gov.bd'),
(62, 8, 'Mymensingh', 'ময়মনসিংহ', '24.7465670', '90.4072093', 'www.mymensingh.gov.bd'),
(63, 8, 'Jamalpur', 'জামালপুর', '24.937533', '89.937775', 'www.jamalpur.gov.bd'),
(64, 8, 'Netrokona', 'নেত্রকোণা', '24.870955', '90.727887', 'www.netrokona.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `name_bn` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `name_bn`, `url`) VALUES
(1, 'Chattagram', 'চট্টগ্রাম', 'www.chittagongdiv.gov.bd'),
(2, 'Rajshahi', 'রাজশাহী', 'www.rajshahidiv.gov.bd'),
(3, 'Khulna', 'খুলনা', 'www.khulnadiv.gov.bd'),
(4, 'Barisal', 'বরিশাল', 'www.barisaldiv.gov.bd'),
(5, 'Sylhet', 'সিলেট', 'www.sylhetdiv.gov.bd'),
(6, 'Dhaka', 'ঢাকা', 'www.dhakadiv.gov.bd'),
(7, 'Rangpur', 'রংপুর', 'www.rangpurdiv.gov.bd'),
(8, 'Mymensingh', 'ময়মনসিংহ', 'www.mymensinghdiv.gov.bd');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `category`, `image`, `updated_at`, `created_at`) VALUES
(56, 'gallery', '1697455959.jpg', '2023-10-16 15:32:39', '2023-10-16 15:32:39'),
(50, 'gallery', '1697455864.jpg', '2023-10-16 15:31:04', '2023-10-16 15:31:04'),
(51, 'gallery', '1697455890.jpg', '2023-10-16 15:31:30', '2023-10-16 15:31:30'),
(52, 'gallery', '1697455899.jpg', '2023-10-16 15:31:39', '2023-10-16 15:31:39'),
(53, 'gallery', '1697455916.jpg', '2023-10-16 15:31:56', '2023-10-16 15:31:56'),
(54, 'gallery', '1697455927.jpg', '2023-10-16 15:32:07', '2023-10-16 15:32:07'),
(47, 'gallery', '1697448552.jpg', '2023-10-16 13:29:12', '2023-10-16 13:29:12'),
(58, 'Slider', '1697525617.jpg', '2023-12-09 09:37:30', '2023-10-17 10:53:37'),
(60, 'Slider', '1697525617.jpg', '2023-12-09 09:37:35', '2023-10-17 10:57:34'),
(61, 'Slider', '1697525617.jpg', '2023-12-09 09:37:39', '2023-10-17 10:58:43'),
(62, 'Slider', '1697525617.jpg', '2023-12-09 09:37:42', '2023-10-17 10:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `marquee`
--

CREATE TABLE `marquee` (
  `id` int(11) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `text_bn` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marquee`
--

INSERT INTO `marquee` (`id`, `category`, `text`, `text_bn`, `created_at`) VALUES
(1, 'text', 'Let\'s build a wonderful Bangladesh together', NULL, '2023-10-16 10:20:39');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_19_112313_add_column_to_users', 2),
(6, '2023_08_19_113118_update_column_to_users', 3);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bn` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `name`, `name_bn`, `created_at`) VALUES
(1, 'Nationalist Youth Movement', 'জাতীয়তাবাদী তরুন আন্দোলন', '2023-08-26 11:05:56'),
(2, 'Nationalist Youth Movement', 'জাতীয়তাবাদী যুব আন্দোলন', '2023-08-26 11:05:56'),
(3, 'Nationalist Freedom Fighter Movement', 'জাতীয়তাবাদী মুক্তিযোদ্ধা আন্দোলন', '2023-08-26 11:05:56'),
(4, 'Nationalist Liberation Fighter Generation Movement', 'জাতীয়তাবাদী মুক্তিযোদ্ধা প্রজন্ম আন্দোলন', '2023-08-26 11:05:56'),
(5, 'Nationalist Lawyers Movement', 'জাতীয়তাবাদী আইনজীবী আন্দোলন', '2023-08-26 11:05:56'),
(6, 'Nationalist Women\'s Movement', 'জাতীয়তাবাদী মহিলা আন্দোলন', '2023-08-26 11:05:56'),
(7, 'Nationalist Young Womens Movement', 'জাতীয়তাবাদী তরুন মহিলা আন্দোলন', '2023-08-26 11:05:56'),
(8, 'Nationalist peasant movement', 'জাতীয়তাবাদী কৃষক আন্দোলন', '2023-08-26 11:05:56'),
(9, 'Nationalist cultural movement', 'জাতীয়তাবাদী সাংস্কৃতিক আন্দোলন', '2023-08-26 11:05:56'),
(10, 'Nationalist Ulama movement', 'জাতীয়তাবাদী ওলামা আন্দোলন', '2023-08-26 11:05:56'),
(11, 'Nationalist Ex-Army Movement', 'জাতীয়তাবাদী প্রাক্তন সেনা আন্দোলন', '2023-08-26 11:05:56'),
(12, 'Nationalist mass media movement', 'জাতীয়তাবাদী গনমাধ্যম আন্দোলন', '2023-08-26 11:05:56'),
(13, 'Nationalist Information Technology Movement', 'জাতীয়তাবাদী তথ্য প্রযুক্তি আন্দোলন', '2023-08-26 11:05:56'),
(14, 'Nationalist diaspora movement', 'জাতীয়তাবাদী প্রবাসী আন্দোলন', '2023-08-26 11:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `pay_method` varchar(50) NOT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `trx_id` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_chart`
--

CREATE TABLE `payment_chart` (
  `id` bigint(20) NOT NULL,
  `rank_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(6, 'App\\Models\\User', 19, 'RestApi', '56aaa28ef31652e84a6f2cfae8697ec845242344ce23af05389ec81279db7f74', '[\"*\"]', '2023-09-07 01:45:03', '2023-09-07 01:45:01', '2023-09-07 01:45:03'),
(8, 'App\\Models\\User', 19, 'RestApi', '0f0479372643d2c6ffc4952b734da4359e36ec38f78f280e87b7a073e8185e50', '[\"*\"]', '2023-09-07 02:50:20', '2023-09-07 02:50:18', '2023-09-07 02:50:20'),
(9, 'App\\Models\\User', 19, 'RestApi', 'aea7834356535b34fad0efe401211b42fd3410a842017bf460cc39e12b60beb5', '[\"*\"]', '2023-09-07 03:14:27', '2023-09-07 03:14:24', '2023-09-07 03:14:27'),
(10, 'App\\Models\\User', 19, 'RestApi', 'ade1a7d52e7704c834f1b4ed92c01fb9768b5e0c7ce64da6692d8f14cad97a38', '[\"*\"]', '2023-09-07 04:21:19', '2023-09-07 04:21:15', '2023-09-07 04:21:19'),
(11, 'App\\Models\\User', 19, 'RestApi', '5aa0d934170d1eff2d9c5b66a3e2971c3c0383aa6d46df80b6ab72c288607e1c', '[\"*\"]', '2023-09-07 06:46:26', '2023-09-07 06:05:49', '2023-09-07 06:46:26'),
(12, 'App\\Models\\User', 19, 'RestApi', '1fe9c164d4d022358241db398c3573454a71804f6e5deb8f3a5d207bc50249a8', '[\"*\"]', '2023-09-07 06:51:19', '2023-09-07 06:50:47', '2023-09-07 06:51:19'),
(13, 'App\\Models\\User', 19, 'RestApi', '4d1014d11547e0ba8efcc5f3442406a887180aea4ba77d95713266001858bf98', '[\"*\"]', '2023-09-07 06:57:44', '2023-09-07 06:56:21', '2023-09-07 06:57:44'),
(14, 'App\\Models\\User', 19, 'RestApi', 'fbb87d034ed28d2dc4a738235eafbbc9ef95f92db79d51bdd12370fdeb4b5a62', '[\"*\"]', '2023-09-10 05:40:27', '2023-09-07 06:59:26', '2023-09-10 05:40:27'),
(15, 'App\\Models\\User', 21, 'RestApi', '22764d7ffd5a4d762624dff2bb5f7bb3a764c809791499b9a1a3ebce261bb6aa', '[\"*\"]', NULL, '2023-09-11 03:17:45', '2023-09-11 03:17:45'),
(16, 'App\\Models\\User', 22, 'RestApi', '13ddc9e73c3efef1378d13b41449b134879c2077349b062017e491dde98d48f1', '[\"*\"]', NULL, '2023-09-11 03:31:15', '2023-09-11 03:31:15'),
(17, 'App\\Models\\User', 23, 'RestApi', '7c518b9534c4bf0b6dd4328692066cb6e6c7d9107a3ae8ea492507d92c859612', '[\"*\"]', NULL, '2023-09-11 03:32:26', '2023-09-11 03:32:26'),
(18, 'App\\Models\\User', 24, 'RestApi', '3b692350612541983f7a05f960c09f1ced5d66554c5d417c72e91d8229899ec2', '[\"*\"]', NULL, '2023-09-11 03:32:59', '2023-09-11 03:32:59'),
(20, 'App\\Models\\User', 25, 'RestApi', '18ffd18be5d2375da026e5310f08b48bd30037b0fad722d75a38477df0e97980', '[\"*\"]', NULL, '2023-09-11 04:04:54', '2023-09-11 04:04:54'),
(30, 'App\\Models\\User', 9, 'RestApi', '061f3a83c437fb82bab406efd4d8b5ef395e761661c82d457bc7b840b1b93753', '[\"*\"]', '2023-09-14 05:35:43', '2023-09-14 05:34:10', '2023-09-14 05:35:43'),
(34, 'App\\Models\\User', 8, 'RestApi', '5fe3239cf3337d78b73d142eefaac488dd915049e311a32965a86b48267e13c3', '[\"*\"]', '2023-09-16 00:56:48', '2023-09-16 00:56:07', '2023-09-16 00:56:48'),
(35, 'App\\Models\\User', 8, 'RestApi', 'bf6ad624fc751686430aa1e54a11319b9ecc2d3cb2101f51a7462e9a6842bfd9', '[\"*\"]', NULL, '2023-09-17 05:17:28', '2023-09-17 05:17:28'),
(36, 'App\\Models\\User', 8, 'RestApi', '39556d34728688ad428eda5dc50347f590820e45a5763296765db4ca09e7d2bc', '[\"*\"]', '2023-09-17 07:02:27', '2023-09-17 05:28:25', '2023-09-17 07:02:27'),
(37, 'App\\Models\\User', 21, 'RestApi', 'd5762f01ccbde42c171bdcd86ea580c966a1921168a0e8760c6a00a47d7b148d', '[\"*\"]', '2023-09-19 00:19:31', '2023-09-17 07:05:18', '2023-09-19 00:19:31'),
(42, 'App\\Models\\User', 21, 'RestApi', '570f4fe2a5644dc3fc931cf99d163d74466861ae9a1e833beb6dd7399edc07d8', '[\"*\"]', '2023-09-18 01:15:41', '2023-09-18 01:15:13', '2023-09-18 01:15:41'),
(49, 'App\\Models\\User', 27, 'RestApi', '8309c38e64270c2a45c45742de36cd168690aa7c2ddff1183e9d310dd8887f90', '[\"*\"]', NULL, '2023-09-22 09:42:23', '2023-09-22 09:42:23'),
(57, 'App\\Models\\User', 8, 'RestApi', 'a86deee31ddfa924a6a670399421899bd8a95a5e2ad9e07053161606ba8efe46', '[\"*\"]', '2023-09-24 16:23:19', '2023-09-24 09:45:31', '2023-09-24 16:23:19'),
(82, 'App\\Models\\User', 31, 'RestApi', 'aee225ac207b73caa39faa18394b14e1164cac3ef0acc501dc7a2235489a8bd6', '[\"*\"]', NULL, '2023-09-26 11:35:12', '2023-09-26 11:35:12'),
(83, 'App\\Models\\User', 32, 'RestApi', 'a1cf48e2438e9023dbdb6b9e547ceec632ebb2f6945880ae9ec48dcb96ea0408', '[\"*\"]', NULL, '2023-09-26 11:37:03', '2023-09-26 11:37:03'),
(84, 'App\\Models\\User', 33, 'RestApi', 'a1c37f41e1fa124b8b6f80f2b1b6fb7ff35fb4e895b4dadbaab1040502d289c5', '[\"*\"]', NULL, '2023-09-26 11:44:47', '2023-09-26 11:44:47'),
(85, 'App\\Models\\User', 34, 'RestApi', '09d21b3863e19503e8161b81e72554aeb42abf7fee7ae57be818ee7e07559d33', '[\"*\"]', NULL, '2023-09-26 11:46:13', '2023-09-26 11:46:13'),
(86, 'App\\Models\\User', 35, 'RestApi', '0d0dc293d7344f918666be4f8faea26d3ece0a9aa2829ce9f7bab018ebb2188a', '[\"*\"]', NULL, '2023-09-26 11:55:27', '2023-09-26 11:55:27'),
(87, 'App\\Models\\User', 36, 'RestApi', 'fdabdaea3f272c7c3e20022debdc9049d003c31bd8c945f42459e81650018dff', '[\"*\"]', NULL, '2023-09-26 12:07:25', '2023-09-26 12:07:25'),
(90, 'App\\Models\\User', 39, 'RestApi', '7542f86b8e7d1335f660a014a55e8075514fe36e888f212ef6e94eb495290614', '[\"*\"]', NULL, '2023-09-26 12:14:50', '2023-09-26 12:14:50'),
(127, 'App\\Models\\User', 37, 'RestApi', '235ad882ff3da37e101cb38bb165202789f9c83c4eb5ee1b7415ee6f9b409a54', '[\"*\"]', '2023-09-27 15:54:14', '2023-09-27 15:33:05', '2023-09-27 15:54:14'),
(128, 'App\\Models\\User', 37, 'RestApi', '0aa8184b20416801fc1e90de41fc8c8e8d4dafa04618f01e4ccef7c67fc8cc4a', '[\"*\"]', '2023-09-27 17:49:49', '2023-09-27 15:52:38', '2023-09-27 17:49:49'),
(176, 'App\\Models\\User', 46, 'RestApi', 'f2b94a35f75678d59af9e0cc385264940370f6ce561f4dd99154de2598fcb69e', '[\"*\"]', NULL, '2023-10-10 18:14:14', '2023-10-10 18:14:14'),
(177, 'App\\Models\\User', 46, 'RestApi', '61a2920dca0617b00142ff9720f32a647a0e9f5b4ea03d3b00a7a2f7d79c76c0', '[\"*\"]', '2023-10-10 18:33:04', '2023-10-10 18:15:07', '2023-10-10 18:33:04'),
(198, 'App\\Models\\User', 45, 'RestApi', '092cf527a371134dd04c9fde73a4d77e72de94d8d4ba39ea3db911edc31e6679', '[\"*\"]', NULL, '2023-10-12 16:04:58', '2023-10-12 16:04:58'),
(199, 'App\\Models\\User', 46, 'RestApi', 'e70720ba6a2b7814cda4e9f981cb084d11b79d28c7a890d8590ad5aafc69dab4', '[\"*\"]', NULL, '2023-10-12 16:10:27', '2023-10-12 16:10:27'),
(200, 'App\\Models\\User', 47, 'RestApi', 'eced5e11cd44079017a1953323ceeacaae3ed7d1dec3cc4c29e4a231169eb644', '[\"*\"]', NULL, '2023-10-12 16:12:07', '2023-10-12 16:12:07'),
(201, 'App\\Models\\User', 48, 'RestApi', 'ea3b9ede27b18f0d65321055058af1096e62ef629c351bd80411a68503a79096', '[\"*\"]', NULL, '2023-10-12 16:15:52', '2023-10-12 16:15:52'),
(202, 'App\\Models\\User', 49, 'RestApi', '4c98da2f8a78457babcd8d8ed3a5828c4360ed4066bd9a7b225edcd6259223f5', '[\"*\"]', NULL, '2023-10-12 16:26:51', '2023-10-12 16:26:51'),
(203, 'App\\Models\\User', 50, 'RestApi', '9de6e9f7883daa801601e0e132ec0abf93c1c94a863db68025ea655caf1d4a89', '[\"*\"]', NULL, '2023-10-12 16:32:21', '2023-10-12 16:32:21'),
(204, 'App\\Models\\User', 51, 'RestApi', 'df8e5eaa13eb5c776d9c00f6f25c420b8a8c67878523dda388688505f8436775', '[\"*\"]', NULL, '2023-10-12 16:37:42', '2023-10-12 16:37:42'),
(249, 'App\\Models\\User', 53, 'RestApi', '94b421742aa51cf98bc2fce5b86f178ee0d3c7fc0e0ab596edc55b0967022a55', '[\"*\"]', NULL, '2023-10-24 10:18:22', '2023-10-24 10:18:22'),
(270, 'App\\Models\\User', 54, 'RestApi', 'de3cf58818c31aca6d557fbc0ef803fa1234c749b44ec9a2dfc47cc0b0506977', '[\"*\"]', '2023-10-28 11:50:22', '2023-10-28 11:50:19', '2023-10-28 11:50:22'),
(293, 'App\\Models\\User', 56, 'RestApi', '61231e3c16406de4b2862f89b9801570e47a21224db6a72fff5042ada08d68af', '[\"*\"]', NULL, '2023-11-04 18:22:08', '2023-11-04 18:22:08'),
(306, 'App\\Models\\User', 58, 'RestApi', '27dbae356647f8acd88184fefa60ba2f1de18a2109447d996747c6d9e8be8428', '[\"*\"]', NULL, '2023-11-16 16:33:23', '2023-11-16 16:33:23'),
(323, 'App\\Models\\User', 40, 'RestApi', 'f6fc328ff3d819379e1aeb4e805f48339340d925b832b2ca997b958c3bc8ee3b', '[\"*\"]', NULL, '2023-11-28 15:38:29', '2023-11-28 15:38:29'),
(324, 'App\\Models\\User', 40, 'RestApi', 'e3cb5affa2d68addf6622e9c96577eeee956fb4c2221a296fd30d6c680e2e9b4', '[\"*\"]', NULL, '2023-11-28 15:40:52', '2023-11-28 15:40:52'),
(325, 'App\\Models\\User', 40, 'RestApi', 'fb87177bdc08dc49a234c24c5e4dce23d84165d07cb642cdfbbb0cb785bc3397', '[\"*\"]', NULL, '2023-11-28 15:41:59', '2023-11-28 15:41:59'),
(326, 'App\\Models\\User', 40, 'RestApi', 'fbe294824d704a22b141b63577ccb689b6f80f767df413fbe40a3ebac14af469', '[\"*\"]', NULL, '2023-11-28 15:42:29', '2023-11-28 15:42:29'),
(408, 'App\\Models\\User', 39, 'RestApi', '3d4d68daf40739309892b248f7ec2397abdb2be678b01fd3487fcb98411e6884', '[\"*\"]', NULL, '2024-05-13 02:07:50', '2024-05-13 02:07:50'),
(409, 'App\\Models\\User', 61, 'RestApi', 'c22c280d09df5d387c1e7c1c96315e5c4b3c727976f832eff0b482cc5bcf6479', '[\"*\"]', NULL, '2024-05-13 02:10:15', '2024-05-13 02:10:15'),
(410, 'App\\Models\\User', 61, 'RestApi', '6eb91e021cd933acc415fd557cb121e8cf12fc5a4707e6704291230fa650ad75', '[\"*\"]', '2024-05-13 02:54:26', '2024-05-13 02:12:26', '2024-05-13 02:54:26'),
(411, 'App\\Models\\User', 41, 'RestApi', '36ede4263c86601a0ab6b33ec299893775b4cd5ee49b006635df76ca84b5c5bb', '[\"*\"]', NULL, '2024-05-20 12:47:01', '2024-05-20 12:47:01'),
(412, 'App\\Models\\User', 62, 'RestApi', 'dae6c8e3865b7c1072242b3462c7fc9d35f454e17437df0e575cb032de223668', '[\"*\"]', NULL, '2024-05-20 12:52:19', '2024-05-20 12:52:19'),
(413, 'App\\Models\\User', 62, 'RestApi', 'cb6beb2a5506e0d1ed9024edad6af79420b5de556da8e356b1dc9a4dd37875a4', '[\"*\"]', NULL, '2024-05-20 12:52:44', '2024-05-20 12:52:44'),
(414, 'App\\Models\\User', 63, 'RestApi', '11ff449fe8f21fc887c1a860b8a0670a60bbd49fea2efcc9ceabfdfc102642f6', '[\"*\"]', NULL, '2024-05-20 12:58:20', '2024-05-20 12:58:20'),
(415, 'App\\Models\\User', 63, 'RestApi', 'e7ea7e333026666bb90420cafb6d52d31092ee0a4caf00ca2b1998e4a97a9cd0', '[\"*\"]', NULL, '2024-05-20 12:58:45', '2024-05-20 12:58:45'),
(416, 'App\\Models\\User', 41, 'RestApi', 'f83ac79cddffd833e771e7d0702b5ad24563ae83ba186563d683e90f1e291ce1', '[\"*\"]', '2024-05-30 09:53:43', '2024-05-20 14:06:27', '2024-05-30 09:53:43'),
(417, 'App\\Models\\User', 41, 'RestApi', '25c00e42f018b983fc97fa6b8fe924a01c53d08a2d9ea908afd18de5127ba10c', '[\"*\"]', '2024-05-21 10:44:26', '2024-05-20 14:08:36', '2024-05-21 10:44:26'),
(418, 'App\\Models\\User', 41, 'RestApi', 'd796297078eacba42f2a16f0cfe3eeaa84c83357f546421fc77df85b1b43ddcc', '[\"*\"]', '2024-05-28 11:01:50', '2024-05-20 16:07:19', '2024-05-28 11:01:50'),
(419, 'App\\Models\\User', 41, 'RestApi', '5f95714d0c0d6076746bf53b5b1d5308075fe620f523c4a6c9f4805069cb3a3f', '[\"*\"]', '2024-05-27 11:04:52', '2024-05-22 15:02:17', '2024-05-27 11:04:52'),
(420, 'App\\Models\\User', 41, 'RestApi', '96adfa3d9a0e8917f917b30d369270a7864570122ed360461f0e6cb9f65896b3', '[\"*\"]', NULL, '2024-05-23 15:22:35', '2024-05-23 15:22:35'),
(421, 'App\\Models\\User', 41, 'RestApi', '2d65be3313610369cc5c0d69623165c7e9eb3d2129526c74aa1d891c45314fbc', '[\"*\"]', NULL, '2024-05-26 09:35:48', '2024-05-26 09:35:48'),
(422, 'App\\Models\\User', 64, 'RestApi', '3d82d1bf96121e45101f7e14cd15f1064f8822ed851146403efbb5914fecc9b2', '[\"*\"]', NULL, '2024-05-27 11:07:29', '2024-05-27 11:07:29'),
(423, 'App\\Models\\User', 64, 'RestApi', '1a24999bf1696ca499d4e8885d73528c4c3d82e963cb46e704ffc41c010a47a3', '[\"*\"]', '2024-05-28 14:48:37', '2024-05-27 11:07:48', '2024-05-28 14:48:37'),
(424, 'App\\Models\\User', 41, 'RestApi', '0c7720f1a24ef9bca9827544aff37266c52224a1ce5a7826d3380bb418466478', '[\"*\"]', '2024-06-03 14:36:15', '2024-05-28 14:49:54', '2024-06-03 14:36:15'),
(426, 'App\\Models\\User', 41, 'RestApi', '5d92ef461e855204536ca5d5082b701f74431139e98db9fb3d43bffd742468d8', '[\"*\"]', '2024-05-30 10:02:22', '2024-05-30 09:59:41', '2024-05-30 10:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) NOT NULL,
  `mem_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_name` varchar(255) DEFAULT NULL,
  `id_name_bn` varchar(255) DEFAULT NULL,
  `farther` varchar(100) DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `nid_front` varchar(255) DEFAULT NULL,
  `nid_back` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` tinyint(4) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `placeOfBirth` varchar(255) DEFAULT NULL,
  `nid_number` varchar(255) DEFAULT NULL,
  `document_type` varchar(255) DEFAULT NULL,
  `division` tinyint(4) DEFAULT NULL,
  `district` tinyint(4) DEFAULT NULL,
  `upazila` int(11) DEFAULT NULL,
  `up` varchar(100) DEFAULT NULL,
  `ward` varchar(100) DEFAULT NULL,
  `requestId` varchar(255) DEFAULT NULL,
  `responseID` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `mem_id`, `id_name`, `id_name_bn`, `farther`, `profile_photo`, `nid_front`, `nid_back`, `dob`, `age`, `gender`, `placeOfBirth`, `nid_number`, `document_type`, `division`, `district`, `upazila`, `up`, `ward`, `requestId`, `responseID`, `updated_at`, `created_at`) VALUES
(1, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-11 08:04:13', '2023-10-09 04:26:07'),
(2, 'BNM000000001', 'HABIB ETESHAMUL ALAM', 'হাবীবএহতেশামুল আলম', '13', 'profile_01511223344.jpg', 'farhad_front_01511223344.jpg', 'farhad_back_01511223344.jpg', '1998-09-09', 25, 'M', 'KHULNA', '3754460651', 'Smart ID Card', 1, 1, 1, 'kanpur', 'Ward No-3', '7b800598-207d-4b18-9bd4-ea58f92be1ff', '90cc20ea0d2840998b5ab4bb38bc8803', '2024-05-19 05:59:27', '2023-10-09 05:05:47'),
(4, 'BNM000000002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 33, 123, 'example', '2 no', NULL, NULL, '2023-10-09 12:28:41', '2023-10-09 12:28:41'),
(5, 'BNM000000003', 'MD FARHAD HOSSAIN', 'মোঃফরহাদ হোসাইন', 'মোঃ ফরিদ উদ্দিন', 'profile_01810800802.png', 'farhad_front_01810800802.png', 'farhad_back_01810800802.png', '1997-11-07', 25, 'M', 'COMILLA', '7802330543', 'Smart ID Card', 2, 33, 123, 'example', '2 no', 'ee2be744-9b8e-45cb-b280-e9016bc6ac81', '33d6333ca61845bc968ed1e2ae2dba73', '2023-10-11 01:06:39', '2023-10-09 12:34:00'),
(6, 'BNM000000004', 'HABIB ETESHAMUL ALAM', 'হাবীবএহতেশামুল আলম', '13', 'profile_01311223344.jpg', 'Sadik Hossain_front_01311223344.jpg', 'Sadik Hossain_back_01311223344.jpg', '1998-09-09', 25, 'M', 'KHULNA', '3754460651', 'Smart ID Card', 3, 22, 187, 'Sadar', 'Ward No-2', '19a87183-3b04-43e6-9a50-ea3853699047', '5231334a3cef4020849fdf4491fa1818', '2023-10-11 05:57:29', '2023-10-11 09:14:09'),
(7, 'BNM000000005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 32, 243, 'Basidpur', 'Ward No-5', NULL, NULL, '2023-10-14 10:53:56', '2023-10-14 10:39:52'),
(8, 'BNM000000015', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 7, 'raor', 'Ward No-8', NULL, NULL, '2023-10-24 06:28:02', '2023-10-24 06:28:02'),
(9, 'BNM000000017', 'HABIB ETESHAMUL ALAM', 'হাবীবএহতেশামুল আলম', '13', 'profile_01244556677.jpg', 'Safin_front_01244556677.jpg', 'Safin_back_01244556677.jpg', '1998-09-09', 25, 'M', 'KHULNA', '3754460651', 'Smart ID Card', 2, 13, 119, 'fdggshsh', 'Ward No-4', '31778276-6eea-4b25-a0b8-a7b12f3cdf1c', '172c72d4df5241d58c501b0a1b935857', '2023-10-24 13:38:14', '2023-10-24 07:19:10'),
(10, 'BNM000000007', 'HABIB ETESHAMUL ALAM', 'হাবীবএহতেশামুল আলম', '13', 'profile_01811223344.jpg', 'dalim_front_01811223344.jpg', 'dalim_back_01811223344.jpg', '1998-09-09', 25, 'M', 'KHULNA', '3754460651', 'Smart ID Card', 3, 25, 199, 'badalpur', 'Ward No-3', 'c0194d79-ad94-4284-8c95-42f0cf95d663', '2aba98f67ab44736906d9ef0b8c0e267', '2023-11-08 11:08:47', '2023-10-30 05:58:36'),
(11, 'BNM000000006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 32, 245, 'nagar', 'Ward No-3', NULL, NULL, '2023-10-30 06:02:58', '2023-10-30 06:02:58'),
(12, 'BNM000000020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, 45, 'Gopalpur', 'Ward No-2', NULL, NULL, '2023-11-04 14:30:30', '2023-11-04 14:30:30'),
(13, 'BNM000000023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'Santahar', '2 no', NULL, NULL, '2023-11-28 12:43:07', '2023-11-28 12:43:07'),
(14, 'BNM000000024', 'HABIB ETESHAMUL ALAM', 'হাবীবএহতেশামুল আলম', 'Alomgir Alom', NULL, NULL, NULL, '1998-09-09', 25, 'M', 'KHULNA', '3754460651', 'Smart ID Card', 2, 33, 123, 'example', '2 no', 'c0194d79-ad94-4284-8c95-42f0cf95d663', '2aba98f67ab44736906d9ef0b8c0e267', '2024-05-13 02:35:15', '2024-05-13 08:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_bn` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `name`, `name_bn`, `created_at`) VALUES
(1, 'Chairman', 'চেয়ারম্যান', '2023-08-26 12:40:03'),
(2, 'Vice-Chairman', 'ভাইস চেয়ারম্যান', '2023-08-26 12:40:03'),
(3, 'Secretary General', 'মহাসচিব', '2023-08-26 12:40:03'),
(4, 'Joint Secretary General', 'যুগ্ন-মহাসচিব', '2023-08-26 12:40:03'),
(5, 'President', 'সভাপতি', '2023-08-26 12:40:03'),
(6, 'Senior Vice President', 'সিনিয়র সহ-সভাপতি', '2023-08-26 12:40:03'),
(7, 'General Secretary', 'সাধারন সম্পাদক', '2023-08-26 12:40:03'),
(8, 'Joint General Secretary', 'সহ সাধারন সম্পাদক', '2023-08-26 12:40:03'),
(9, 'Organizing Secretary', 'সাঙ্গঠনিক সম্পাদক', '2023-08-26 12:40:03'),
(10, 'Member', 'সদস্য', '2023-09-17 12:19:55'),
(11, 'Co-Chairman', 'কো-চেয়ারম্যান', '2024-05-20 15:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `rate_user`
--

CREATE TABLE `rate_user` (
  `id` bigint(20) NOT NULL,
  `rating_user` int(11) NOT NULL,
  `rated_user` int(11) NOT NULL,
  `rating` float NOT NULL,
  `review` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` bigint(20) NOT NULL,
  `member_id` varchar(255) DEFAULT NULL,
  `token_type` varchar(100) DEFAULT NULL,
  `token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abilities` varchar(50) DEFAULT NULL,
  `last_used` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id`, `member_id`, `token_type`, `token`, `abilities`, `last_used`, `updated_at`, `created_at`) VALUES
(25, 'BNM000000017', 'member_request', 'emrGiFPgR5KWF_vDs1tLa0:APA91bH5zKIU-Pjdt-FtOfpWVn0U6Fk6FjmFASpXojQvjjR4NvlHY0hNmwT0-CbqL9FcMlkHc_AeM7mCrgryt33QA7tn7H0eegZLHEkXFladzX6GIJM5yZNs69X1HSgpsI2XMSraFxt3', NULL, NULL, '2023-10-28 07:50:22', '2023-10-28 07:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `unions`
--

CREATE TABLE `unions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `name_bn` varchar(100) DEFAULT NULL,
  `upazila_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `name_bn` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `district_id`, `name`, `name_bn`, `url`) VALUES
(1, 1, 'Debidwar', 'দেবিদ্বার', 'debidwar.comilla.gov.bd'),
(2, 1, 'Barura', 'বরুড়া', 'barura.comilla.gov.bd'),
(3, 1, 'Brahmanpara', 'ব্রাহ্মণপাড়া', 'brahmanpara.comilla.gov.bd'),
(4, 1, 'Chandina', 'চান্দিনা', 'chandina.comilla.gov.bd'),
(5, 1, 'Chauddagram', 'চৌদ্দগ্রাম', 'chauddagram.comilla.gov.bd'),
(6, 1, 'Daudkandi', 'দাউদকান্দি', 'daudkandi.comilla.gov.bd'),
(7, 1, 'Homna', 'হোমনা', 'homna.comilla.gov.bd'),
(8, 1, 'Laksam', 'লাকসাম', 'laksam.comilla.gov.bd'),
(9, 1, 'Muradnagar', 'মুরাদনগর', 'muradnagar.comilla.gov.bd'),
(10, 1, 'Nangalkot', 'নাঙ্গলকোট', 'nangalkot.comilla.gov.bd'),
(11, 1, 'Comilla Sadar', 'কুমিল্লা সদর', 'comillasadar.comilla.gov.bd'),
(12, 1, 'Meghna', 'মেঘনা', 'meghna.comilla.gov.bd'),
(13, 1, 'Monohargonj', 'মনোহরগঞ্জ', 'monohargonj.comilla.gov.bd'),
(14, 1, 'Sadarsouth', 'সদর দক্ষিণ', 'sadarsouth.comilla.gov.bd'),
(15, 1, 'Titas', 'তিতাস', 'titas.comilla.gov.bd'),
(16, 1, 'Burichang', 'বুড়িচং', 'burichang.comilla.gov.bd'),
(17, 1, 'Lalmai', 'লালমাই', 'lalmai.comilla.gov.bd'),
(18, 2, 'Chhagalnaiya', 'ছাগলনাইয়া', 'chhagalnaiya.feni.gov.bd'),
(19, 2, 'Feni Sadar', 'ফেনী সদর', 'sadar.feni.gov.bd'),
(20, 2, 'Sonagazi', 'সোনাগাজী', 'sonagazi.feni.gov.bd'),
(21, 2, 'Fulgazi', 'ফুলগাজী', 'fulgazi.feni.gov.bd'),
(22, 2, 'Parshuram', 'পরশুরাম', 'parshuram.feni.gov.bd'),
(23, 2, 'Daganbhuiyan', 'দাগনভূঞা', 'daganbhuiyan.feni.gov.bd'),
(24, 3, 'Brahmanbaria Sadar', 'ব্রাহ্মণবাড়িয়া সদর', 'sadar.brahmanbaria.gov.bd'),
(25, 3, 'Kasba', 'কসবা', 'kasba.brahmanbaria.gov.bd'),
(26, 3, 'Nasirnagar', 'নাসিরনগর', 'nasirnagar.brahmanbaria.gov.bd'),
(27, 3, 'Sarail', 'সরাইল', 'sarail.brahmanbaria.gov.bd'),
(28, 3, 'Ashuganj', 'আশুগঞ্জ', 'ashuganj.brahmanbaria.gov.bd'),
(29, 3, 'Akhaura', 'আখাউড়া', 'akhaura.brahmanbaria.gov.bd'),
(30, 3, 'Nabinagar', 'নবীনগর', 'nabinagar.brahmanbaria.gov.bd'),
(31, 3, 'Bancharampur', 'বাঞ্ছারামপুর', 'bancharampur.brahmanbaria.gov.bd'),
(32, 3, 'Bijoynagar', 'বিজয়নগর', 'bijoynagar.brahmanbaria.gov.bd    '),
(33, 4, 'Rangamati Sadar', 'রাঙ্গামাটি সদর', 'sadar.rangamati.gov.bd'),
(34, 4, 'Kaptai', 'কাপ্তাই', 'kaptai.rangamati.gov.bd'),
(35, 4, 'Kawkhali', 'কাউখালী', 'kawkhali.rangamati.gov.bd'),
(36, 4, 'Baghaichari', 'বাঘাইছড়ি', 'baghaichari.rangamati.gov.bd'),
(37, 4, 'Barkal', 'বরকল', 'barkal.rangamati.gov.bd'),
(38, 4, 'Langadu', 'লংগদু', 'langadu.rangamati.gov.bd'),
(39, 4, 'Rajasthali', 'রাজস্থলী', 'rajasthali.rangamati.gov.bd'),
(40, 4, 'Belaichari', 'বিলাইছড়ি', 'belaichari.rangamati.gov.bd'),
(41, 4, 'Juraichari', 'জুরাছড়ি', 'juraichari.rangamati.gov.bd'),
(42, 4, 'Naniarchar', 'নানিয়ারচর', 'naniarchar.rangamati.gov.bd'),
(43, 5, 'Noakhali Sadar', 'নোয়াখালী সদর', 'sadar.noakhali.gov.bd'),
(44, 5, 'Companiganj', 'কোম্পানীগঞ্জ', 'companiganj.noakhali.gov.bd'),
(45, 5, 'Begumganj', 'বেগমগঞ্জ', 'begumganj.noakhali.gov.bd'),
(46, 5, 'Hatia', 'হাতিয়া', 'hatia.noakhali.gov.bd'),
(47, 5, 'Subarnachar', 'সুবর্ণচর', 'subarnachar.noakhali.gov.bd'),
(48, 5, 'Kabirhat', 'কবিরহাট', 'kabirhat.noakhali.gov.bd'),
(49, 5, 'Senbug', 'সেনবাগ', 'senbug.noakhali.gov.bd'),
(50, 5, 'Chatkhil', 'চাটখিল', 'chatkhil.noakhali.gov.bd'),
(51, 5, 'Sonaimori', 'সোনাইমুড়ী', 'sonaimori.noakhali.gov.bd'),
(52, 6, 'Haimchar', 'হাইমচর', 'haimchar.chandpur.gov.bd'),
(53, 6, 'Kachua', 'কচুয়া', 'kachua.chandpur.gov.bd'),
(54, 6, 'Shahrasti', 'শাহরাস্তি	', 'shahrasti.chandpur.gov.bd'),
(55, 6, 'Chandpur Sadar', 'চাঁদপুর সদর', 'sadar.chandpur.gov.bd'),
(56, 6, 'Matlab South', 'মতলব দক্ষিণ', 'matlabsouth.chandpur.gov.bd'),
(57, 6, 'Hajiganj', 'হাজীগঞ্জ', 'hajiganj.chandpur.gov.bd'),
(58, 6, 'Matlab North', 'মতলব উত্তর', 'matlabnorth.chandpur.gov.bd'),
(59, 6, 'Faridgonj', 'ফরিদগঞ্জ', 'faridgonj.chandpur.gov.bd'),
(60, 7, 'Lakshmipur Sadar', 'লক্ষ্মীপুর সদর', 'sadar.lakshmipur.gov.bd'),
(61, 7, 'Kamalnagar', 'কমলনগর', 'kamalnagar.lakshmipur.gov.bd'),
(62, 7, 'Raipur', 'রায়পুর', 'raipur.lakshmipur.gov.bd'),
(63, 7, 'Ramgati', 'রামগতি', 'ramgati.lakshmipur.gov.bd'),
(64, 7, 'Ramganj', 'রামগঞ্জ', 'ramganj.lakshmipur.gov.bd'),
(65, 8, 'Rangunia', 'রাঙ্গুনিয়া', 'rangunia.chittagong.gov.bd'),
(66, 8, 'Sitakunda', 'সীতাকুন্ড', 'sitakunda.chittagong.gov.bd'),
(67, 8, 'Mirsharai', 'মীরসরাই', 'mirsharai.chittagong.gov.bd'),
(68, 8, 'Patiya', 'পটিয়া', 'patiya.chittagong.gov.bd'),
(69, 8, 'Sandwip', 'সন্দ্বীপ', 'sandwip.chittagong.gov.bd'),
(70, 8, 'Banshkhali', 'বাঁশখালী', 'banshkhali.chittagong.gov.bd'),
(71, 8, 'Boalkhali', 'বোয়ালখালী', 'boalkhali.chittagong.gov.bd'),
(72, 8, 'Anwara', 'আনোয়ারা', 'anwara.chittagong.gov.bd'),
(73, 8, 'Chandanaish', 'চন্দনাইশ', 'chandanaish.chittagong.gov.bd'),
(74, 8, 'Satkania', 'সাতকানিয়া', 'satkania.chittagong.gov.bd'),
(75, 8, 'Lohagara', 'লোহাগাড়া', 'lohagara.chittagong.gov.bd'),
(76, 8, 'Hathazari', 'হাটহাজারী', 'hathazari.chittagong.gov.bd'),
(77, 8, 'Fatikchhari', 'ফটিকছড়ি', 'fatikchhari.chittagong.gov.bd'),
(78, 8, 'Raozan', 'রাউজান', 'raozan.chittagong.gov.bd'),
(79, 8, 'Karnafuli', 'কর্ণফুলী', 'karnafuli.chittagong.gov.bd'),
(80, 9, 'Coxsbazar Sadar', 'কক্সবাজার সদর', 'sadar.coxsbazar.gov.bd'),
(81, 9, 'Chakaria', 'চকরিয়া', 'chakaria.coxsbazar.gov.bd'),
(82, 9, 'Kutubdia', 'কুতুবদিয়া', 'kutubdia.coxsbazar.gov.bd'),
(83, 9, 'Ukhiya', 'উখিয়া', 'ukhiya.coxsbazar.gov.bd'),
(84, 9, 'Moheshkhali', 'মহেশখালী', 'moheshkhali.coxsbazar.gov.bd'),
(85, 9, 'Pekua', 'পেকুয়া', 'pekua.coxsbazar.gov.bd'),
(86, 9, 'Ramu', 'রামু', 'ramu.coxsbazar.gov.bd'),
(87, 9, 'Teknaf', 'টেকনাফ', 'teknaf.coxsbazar.gov.bd'),
(88, 10, 'Khagrachhari Sadar', 'খাগড়াছড়ি সদর', 'sadar.khagrachhari.gov.bd'),
(89, 10, 'Dighinala', 'দিঘীনালা', 'dighinala.khagrachhari.gov.bd'),
(90, 10, 'Panchari', 'পানছড়ি', 'panchari.khagrachhari.gov.bd'),
(91, 10, 'Laxmichhari', 'লক্ষীছড়ি', 'laxmichhari.khagrachhari.gov.bd'),
(92, 10, 'Mohalchari', 'মহালছড়ি', 'mohalchari.khagrachhari.gov.bd'),
(93, 10, 'Manikchari', 'মানিকছড়ি', 'manikchari.khagrachhari.gov.bd'),
(94, 10, 'Ramgarh', 'রামগড়', 'ramgarh.khagrachhari.gov.bd'),
(95, 10, 'Matiranga', 'মাটিরাঙ্গা', 'matiranga.khagrachhari.gov.bd'),
(96, 10, 'Guimara', 'গুইমারা', 'guimara.khagrachhari.gov.bd'),
(97, 11, 'Bandarban Sadar', 'বান্দরবান সদর', 'sadar.bandarban.gov.bd'),
(98, 11, 'Alikadam', 'আলীকদম', 'alikadam.bandarban.gov.bd'),
(99, 11, 'Naikhongchhari', 'নাইক্ষ্যংছড়ি', 'naikhongchhari.bandarban.gov.bd'),
(100, 11, 'Rowangchhari', 'রোয়াংছড়ি', 'rowangchhari.bandarban.gov.bd'),
(101, 11, 'Lama', 'লামা', 'lama.bandarban.gov.bd'),
(102, 11, 'Ruma', 'রুমা', 'ruma.bandarban.gov.bd'),
(103, 11, 'Thanchi', 'থানচি', 'thanchi.bandarban.gov.bd'),
(104, 12, 'Belkuchi', 'বেলকুচি', 'belkuchi.sirajganj.gov.bd'),
(105, 12, 'Chauhali', 'চৌহালি', 'chauhali.sirajganj.gov.bd'),
(106, 12, 'Kamarkhand', 'কামারখন্দ', 'kamarkhand.sirajganj.gov.bd'),
(107, 12, 'Kazipur', 'কাজীপুর', 'kazipur.sirajganj.gov.bd'),
(108, 12, 'Raigonj', 'রায়গঞ্জ', 'raigonj.sirajganj.gov.bd'),
(109, 12, 'Shahjadpur', 'শাহজাদপুর', 'shahjadpur.sirajganj.gov.bd'),
(110, 12, 'Sirajganj Sadar', 'সিরাজগঞ্জ সদর', 'sirajganjsadar.sirajganj.gov.bd'),
(111, 12, 'Tarash', 'তাড়াশ', 'tarash.sirajganj.gov.bd'),
(112, 12, 'Ullapara', 'উল্লাপাড়া', 'ullapara.sirajganj.gov.bd'),
(113, 13, 'Sujanagar', 'সুজানগর', 'sujanagar.pabna.gov.bd'),
(114, 13, 'Ishurdi', 'ঈশ্বরদী', 'ishurdi.pabna.gov.bd'),
(115, 13, 'Bhangura', 'ভাঙ্গুড়া', 'bhangura.pabna.gov.bd'),
(116, 13, 'Pabna Sadar', 'পাবনা সদর', 'pabnasadar.pabna.gov.bd'),
(117, 13, 'Bera', 'বেড়া', 'bera.pabna.gov.bd'),
(118, 13, 'Atghoria', 'আটঘরিয়া', 'atghoria.pabna.gov.bd'),
(119, 13, 'Chatmohar', 'চাটমোহর', 'chatmohar.pabna.gov.bd'),
(120, 13, 'Santhia', 'সাঁথিয়া', 'santhia.pabna.gov.bd'),
(121, 13, 'Faridpur', 'ফরিদপুর', 'faridpur.pabna.gov.bd'),
(122, 14, 'Kahaloo', 'কাহালু', 'kahaloo.bogra.gov.bd'),
(123, 14, 'Bogra Sadar', 'বগুড়া সদর', 'sadar.bogra.gov.bd'),
(124, 14, 'Shariakandi', 'সারিয়াকান্দি', 'shariakandi.bogra.gov.bd'),
(125, 14, 'Shajahanpur', 'শাজাহানপুর', 'shajahanpur.bogra.gov.bd'),
(126, 14, 'Dupchanchia', 'দুপচাচিঁয়া', 'dupchanchia.bogra.gov.bd'),
(127, 14, 'Adamdighi', 'আদমদিঘি', 'adamdighi.bogra.gov.bd'),
(128, 14, 'Nondigram', 'নন্দিগ্রাম', 'nondigram.bogra.gov.bd'),
(129, 14, 'Sonatala', 'সোনাতলা', 'sonatala.bogra.gov.bd'),
(130, 14, 'Dhunot', 'ধুনট', 'dhunot.bogra.gov.bd'),
(131, 14, 'Gabtali', 'গাবতলী', 'gabtali.bogra.gov.bd'),
(132, 14, 'Sherpur', 'শেরপুর', 'sherpur.bogra.gov.bd'),
(133, 14, 'Shibganj', 'শিবগঞ্জ', 'shibganj.bogra.gov.bd'),
(134, 15, 'Paba', 'পবা', 'paba.rajshahi.gov.bd'),
(135, 15, 'Durgapur', 'দুর্গাপুর', 'durgapur.rajshahi.gov.bd'),
(136, 15, 'Mohonpur', 'মোহনপুর', 'mohonpur.rajshahi.gov.bd'),
(137, 15, 'Charghat', 'চারঘাট', 'charghat.rajshahi.gov.bd'),
(138, 15, 'Puthia', 'পুঠিয়া', 'puthia.rajshahi.gov.bd'),
(139, 15, 'Bagha', 'বাঘা', 'bagha.rajshahi.gov.bd'),
(140, 15, 'Godagari', 'গোদাগাড়ী', 'godagari.rajshahi.gov.bd'),
(141, 15, 'Tanore', 'তানোর', 'tanore.rajshahi.gov.bd'),
(142, 15, 'Bagmara', 'বাগমারা', 'bagmara.rajshahi.gov.bd'),
(143, 16, 'Natore Sadar', 'নাটোর সদর', 'natoresadar.natore.gov.bd'),
(144, 16, 'Singra', 'সিংড়া', 'singra.natore.gov.bd'),
(145, 16, 'Baraigram', 'বড়াইগ্রাম', 'baraigram.natore.gov.bd'),
(146, 16, 'Bagatipara', 'বাগাতিপাড়া', 'bagatipara.natore.gov.bd'),
(147, 16, 'Lalpur', 'লালপুর', 'lalpur.natore.gov.bd'),
(148, 16, 'Gurudaspur', 'গুরুদাসপুর', 'gurudaspur.natore.gov.bd'),
(149, 16, 'Naldanga', 'নলডাঙ্গা', 'naldanga.natore.gov.bd'),
(150, 17, 'Akkelpur', 'আক্কেলপুর', 'akkelpur.joypurhat.gov.bd'),
(151, 17, 'Kalai', 'কালাই', 'kalai.joypurhat.gov.bd'),
(152, 17, 'Khetlal', 'ক্ষেতলাল', 'khetlal.joypurhat.gov.bd'),
(153, 17, 'Panchbibi', 'পাঁচবিবি', 'panchbibi.joypurhat.gov.bd'),
(154, 17, 'Joypurhat Sadar', 'জয়পুরহাট সদর', 'joypurhatsadar.joypurhat.gov.bd'),
(155, 18, 'Chapainawabganj Sadar', 'চাঁপাইনবাবগঞ্জ সদর', 'chapainawabganjsadar.chapainawabganj.gov.bd'),
(156, 18, 'Gomostapur', 'গোমস্তাপুর', 'gomostapur.chapainawabganj.gov.bd'),
(157, 18, 'Nachol', 'নাচোল', 'nachol.chapainawabganj.gov.bd'),
(158, 18, 'Bholahat', 'ভোলাহাট', 'bholahat.chapainawabganj.gov.bd'),
(159, 18, 'Shibganj', 'শিবগঞ্জ', 'shibganj.chapainawabganj.gov.bd'),
(160, 19, 'Mohadevpur', 'মহাদেবপুর', 'mohadevpur.naogaon.gov.bd'),
(161, 19, 'Badalgachi', 'বদলগাছী', 'badalgachi.naogaon.gov.bd'),
(162, 19, 'Patnitala', 'পত্নিতলা', 'patnitala.naogaon.gov.bd'),
(163, 19, 'Dhamoirhat', 'ধামইরহাট', 'dhamoirhat.naogaon.gov.bd'),
(164, 19, 'Niamatpur', 'নিয়ামতপুর', 'niamatpur.naogaon.gov.bd'),
(165, 19, 'Manda', 'মান্দা', 'manda.naogaon.gov.bd'),
(166, 19, 'Atrai', 'আত্রাই', 'atrai.naogaon.gov.bd'),
(167, 19, 'Raninagar', 'রাণীনগর', 'raninagar.naogaon.gov.bd'),
(168, 19, 'Naogaon Sadar', 'নওগাঁ সদর', 'naogaonsadar.naogaon.gov.bd'),
(169, 19, 'Porsha', 'পোরশা', 'porsha.naogaon.gov.bd'),
(170, 19, 'Sapahar', 'সাপাহার', 'sapahar.naogaon.gov.bd'),
(171, 20, 'Manirampur', 'মণিরামপুর', 'manirampur.jessore.gov.bd'),
(172, 20, 'Abhaynagar', 'অভয়নগর', 'abhaynagar.jessore.gov.bd'),
(173, 20, 'Bagherpara', 'বাঘারপাড়া', 'bagherpara.jessore.gov.bd'),
(174, 20, 'Chougachha', 'চৌগাছা', 'chougachha.jessore.gov.bd'),
(175, 20, 'Jhikargacha', 'ঝিকরগাছা', 'jhikargacha.jessore.gov.bd'),
(176, 20, 'Keshabpur', 'কেশবপুর', 'keshabpur.jessore.gov.bd'),
(177, 20, 'Jessore Sadar', 'যশোর সদর', 'sadar.jessore.gov.bd'),
(178, 20, 'Sharsha', 'শার্শা', 'sharsha.jessore.gov.bd'),
(179, 21, 'Assasuni', 'আশাশুনি', 'assasuni.satkhira.gov.bd'),
(180, 21, 'Debhata', 'দেবহাটা', 'debhata.satkhira.gov.bd'),
(181, 21, 'Kalaroa', 'কলারোয়া', 'kalaroa.satkhira.gov.bd'),
(182, 21, 'Satkhira Sadar', 'সাতক্ষীরা সদর', 'satkhirasadar.satkhira.gov.bd'),
(183, 21, 'Shyamnagar', 'শ্যামনগর', 'shyamnagar.satkhira.gov.bd'),
(184, 21, 'Tala', 'তালা', 'tala.satkhira.gov.bd'),
(185, 21, 'Kaliganj', 'কালিগঞ্জ', 'kaliganj.satkhira.gov.bd'),
(186, 22, 'Mujibnagar', 'মুজিবনগর', 'mujibnagar.meherpur.gov.bd'),
(187, 22, 'Meherpur Sadar', 'মেহেরপুর সদর', 'meherpursadar.meherpur.gov.bd'),
(188, 22, 'Gangni', 'গাংনী', 'gangni.meherpur.gov.bd'),
(189, 23, 'Narail Sadar', 'নড়াইল সদর', 'narailsadar.narail.gov.bd'),
(190, 23, 'Lohagara', 'লোহাগড়া', 'lohagara.narail.gov.bd'),
(191, 23, 'Kalia', 'কালিয়া', 'kalia.narail.gov.bd'),
(192, 24, 'Chuadanga Sadar', 'চুয়াডাঙ্গা সদর', 'chuadangasadar.chuadanga.gov.bd'),
(193, 24, 'Alamdanga', 'আলমডাঙ্গা', 'alamdanga.chuadanga.gov.bd'),
(194, 24, 'Damurhuda', 'দামুড়হুদা', 'damurhuda.chuadanga.gov.bd'),
(195, 24, 'Jibannagar', 'জীবননগর', 'jibannagar.chuadanga.gov.bd'),
(196, 25, 'Kushtia Sadar', 'কুষ্টিয়া সদর', 'kushtiasadar.kushtia.gov.bd'),
(197, 25, 'Kumarkhali', 'কুমারখালী', 'kumarkhali.kushtia.gov.bd'),
(198, 25, 'Khoksa', 'খোকসা', 'khoksa.kushtia.gov.bd'),
(199, 25, 'Mirpur', 'মিরপুর', 'mirpurkushtia.kushtia.gov.bd'),
(200, 25, 'Daulatpur', 'দৌলতপুর', 'daulatpur.kushtia.gov.bd'),
(201, 25, 'Bheramara', 'ভেড়ামারা', 'bheramara.kushtia.gov.bd'),
(202, 26, 'Shalikha', 'শালিখা', 'shalikha.magura.gov.bd'),
(203, 26, 'Sreepur', 'শ্রীপুর', 'sreepur.magura.gov.bd'),
(204, 26, 'Magura Sadar', 'মাগুরা সদর', 'magurasadar.magura.gov.bd'),
(205, 26, 'Mohammadpur', 'মহম্মদপুর', 'mohammadpur.magura.gov.bd'),
(206, 27, 'Paikgasa', 'পাইকগাছা', 'paikgasa.khulna.gov.bd'),
(207, 27, 'Fultola', 'ফুলতলা', 'fultola.khulna.gov.bd'),
(208, 27, 'Digholia', 'দিঘলিয়া', 'digholia.khulna.gov.bd'),
(209, 27, 'Rupsha', 'রূপসা', 'rupsha.khulna.gov.bd'),
(210, 27, 'Terokhada', 'তেরখাদা', 'terokhada.khulna.gov.bd'),
(211, 27, 'Dumuria', 'ডুমুরিয়া', 'dumuria.khulna.gov.bd'),
(212, 27, 'Botiaghata', 'বটিয়াঘাটা', 'botiaghata.khulna.gov.bd'),
(213, 27, 'Dakop', 'দাকোপ', 'dakop.khulna.gov.bd'),
(214, 27, 'Koyra', 'কয়রা', 'koyra.khulna.gov.bd'),
(215, 28, 'Fakirhat', 'ফকিরহাট', 'fakirhat.bagerhat.gov.bd'),
(216, 28, 'Bagerhat Sadar', 'বাগেরহাট সদর', 'sadar.bagerhat.gov.bd'),
(217, 28, 'Mollahat', 'মোল্লাহাট', 'mollahat.bagerhat.gov.bd'),
(218, 28, 'Sarankhola', 'শরণখোলা', 'sarankhola.bagerhat.gov.bd'),
(219, 28, 'Rampal', 'রামপাল', 'rampal.bagerhat.gov.bd'),
(220, 28, 'Morrelganj', 'মোড়েলগঞ্জ', 'morrelganj.bagerhat.gov.bd'),
(221, 28, 'Kachua', 'কচুয়া', 'kachua.bagerhat.gov.bd'),
(222, 28, 'Mongla', 'মোংলা', 'mongla.bagerhat.gov.bd'),
(223, 28, 'Chitalmari', 'চিতলমারী', 'chitalmari.bagerhat.gov.bd'),
(224, 29, 'Jhenaidah Sadar', 'ঝিনাইদহ সদর', 'sadar.jhenaidah.gov.bd'),
(225, 29, 'Shailkupa', 'শৈলকুপা', 'shailkupa.jhenaidah.gov.bd'),
(226, 29, 'Harinakundu', 'হরিণাকুন্ডু', 'harinakundu.jhenaidah.gov.bd'),
(227, 29, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.jhenaidah.gov.bd'),
(228, 29, 'Kotchandpur', 'কোটচাঁদপুর', 'kotchandpur.jhenaidah.gov.bd'),
(229, 29, 'Moheshpur', 'মহেশপুর', 'moheshpur.jhenaidah.gov.bd'),
(230, 30, 'Jhalakathi Sadar', 'ঝালকাঠি সদর', 'sadar.jhalakathi.gov.bd'),
(231, 30, 'Kathalia', 'কাঠালিয়া', 'kathalia.jhalakathi.gov.bd'),
(232, 30, 'Nalchity', 'নলছিটি', 'nalchity.jhalakathi.gov.bd'),
(233, 30, 'Rajapur', 'রাজাপুর', 'rajapur.jhalakathi.gov.bd'),
(234, 31, 'Bauphal', 'বাউফল', 'bauphal.patuakhali.gov.bd'),
(235, 31, 'Patuakhali Sadar', 'পটুয়াখালী সদর', 'sadar.patuakhali.gov.bd'),
(236, 31, 'Dumki', 'দুমকি', 'dumki.patuakhali.gov.bd'),
(237, 31, 'Dashmina', 'দশমিনা', 'dashmina.patuakhali.gov.bd'),
(238, 31, 'Kalapara', 'কলাপাড়া', 'kalapara.patuakhali.gov.bd'),
(239, 31, 'Mirzaganj', 'মির্জাগঞ্জ', 'mirzaganj.patuakhali.gov.bd'),
(240, 31, 'Galachipa', 'গলাচিপা', 'galachipa.patuakhali.gov.bd'),
(241, 31, 'Rangabali', 'রাঙ্গাবালী', 'rangabali.patuakhali.gov.bd'),
(242, 32, 'Pirojpur Sadar', 'পিরোজপুর সদর', 'sadar.pirojpur.gov.bd'),
(243, 32, 'Nazirpur', 'নাজিরপুর', 'nazirpur.pirojpur.gov.bd'),
(244, 32, 'Kawkhali', 'কাউখালী', 'kawkhali.pirojpur.gov.bd'),
(245, 32, 'Zianagar', 'জিয়ানগর', 'zianagar.pirojpur.gov.bd'),
(246, 32, 'Bhandaria', 'ভান্ডারিয়া', 'bhandaria.pirojpur.gov.bd'),
(247, 32, 'Mathbaria', 'মঠবাড়ীয়া', 'mathbaria.pirojpur.gov.bd'),
(248, 32, 'Nesarabad', 'নেছারাবাদ', 'nesarabad.pirojpur.gov.bd'),
(249, 33, 'Barisal Sadar', 'বরিশাল সদর', 'barisalsadar.barisal.gov.bd'),
(250, 33, 'Bakerganj', 'বাকেরগঞ্জ', 'bakerganj.barisal.gov.bd'),
(251, 33, 'Babuganj', 'বাবুগঞ্জ', 'babuganj.barisal.gov.bd'),
(252, 33, 'Wazirpur', 'উজিরপুর', 'wazirpur.barisal.gov.bd'),
(253, 33, 'Banaripara', 'বানারীপাড়া', 'banaripara.barisal.gov.bd'),
(254, 33, 'Gournadi', 'গৌরনদী', 'gournadi.barisal.gov.bd'),
(255, 33, 'Agailjhara', 'আগৈলঝাড়া', 'agailjhara.barisal.gov.bd'),
(256, 33, 'Mehendiganj', 'মেহেন্দিগঞ্জ', 'mehendiganj.barisal.gov.bd'),
(257, 33, 'Muladi', 'মুলাদী', 'muladi.barisal.gov.bd'),
(258, 33, 'Hizla', 'হিজলা', 'hizla.barisal.gov.bd'),
(259, 34, 'Bhola Sadar', 'ভোলা সদর', 'sadar.bhola.gov.bd'),
(260, 34, 'Borhan Sddin', 'বোরহান উদ্দিন', 'borhanuddin.bhola.gov.bd'),
(261, 34, 'Charfesson', 'চরফ্যাশন', 'charfesson.bhola.gov.bd'),
(262, 34, 'Doulatkhan', 'দৌলতখান', 'doulatkhan.bhola.gov.bd'),
(263, 34, 'Monpura', 'মনপুরা', 'monpura.bhola.gov.bd'),
(264, 34, 'Tazumuddin', 'তজুমদ্দিন', 'tazumuddin.bhola.gov.bd'),
(265, 34, 'Lalmohan', 'লালমোহন', 'lalmohan.bhola.gov.bd'),
(266, 35, 'Amtali', 'আমতলী', 'amtali.barguna.gov.bd'),
(267, 35, 'Barguna Sadar', 'বরগুনা সদর', 'sadar.barguna.gov.bd'),
(268, 35, 'Betagi', 'বেতাগী', 'betagi.barguna.gov.bd'),
(269, 35, 'Bamna', 'বামনা', 'bamna.barguna.gov.bd'),
(270, 35, 'Pathorghata', 'পাথরঘাটা', 'pathorghata.barguna.gov.bd'),
(271, 35, 'Taltali', 'তালতলি', 'taltali.barguna.gov.bd'),
(272, 36, 'Balaganj', 'বালাগঞ্জ', 'balaganj.sylhet.gov.bd'),
(273, 36, 'Beanibazar', 'বিয়ানীবাজার', 'beanibazar.sylhet.gov.bd'),
(274, 36, 'Bishwanath', 'বিশ্বনাথ', 'bishwanath.sylhet.gov.bd'),
(275, 36, 'Companiganj', 'কোম্পানীগঞ্জ', 'companiganj.sylhet.gov.bd'),
(276, 36, 'Fenchuganj', 'ফেঞ্চুগঞ্জ', 'fenchuganj.sylhet.gov.bd'),
(277, 36, 'Golapganj', 'গোলাপগঞ্জ', 'golapganj.sylhet.gov.bd'),
(278, 36, 'Gowainghat', 'গোয়াইনঘাট', 'gowainghat.sylhet.gov.bd'),
(279, 36, 'Jaintiapur', 'জৈন্তাপুর', 'jaintiapur.sylhet.gov.bd'),
(280, 36, 'Kanaighat', 'কানাইঘাট', 'kanaighat.sylhet.gov.bd'),
(281, 36, 'Sylhet Sadar', 'সিলেট সদর', 'sylhetsadar.sylhet.gov.bd'),
(282, 36, 'Zakiganj', 'জকিগঞ্জ', 'zakiganj.sylhet.gov.bd'),
(283, 36, 'Dakshinsurma', 'দক্ষিণ সুরমা', 'dakshinsurma.sylhet.gov.bd'),
(284, 36, 'Osmaninagar', 'ওসমানী নগর', 'osmaninagar.sylhet.gov.bd'),
(285, 37, 'Barlekha', 'বড়লেখা', 'barlekha.moulvibazar.gov.bd'),
(286, 37, 'Kamolganj', 'কমলগঞ্জ', 'kamolganj.moulvibazar.gov.bd'),
(287, 37, 'Kulaura', 'কুলাউড়া', 'kulaura.moulvibazar.gov.bd'),
(288, 37, 'Moulvibazar Sadar', 'মৌলভীবাজার সদর', 'moulvibazarsadar.moulvibazar.gov.bd'),
(289, 37, 'Rajnagar', 'রাজনগর', 'rajnagar.moulvibazar.gov.bd'),
(290, 37, 'Sreemangal', 'শ্রীমঙ্গল', 'sreemangal.moulvibazar.gov.bd'),
(291, 37, 'Juri', 'জুড়ী', 'juri.moulvibazar.gov.bd'),
(292, 38, 'Nabiganj', 'নবীগঞ্জ', 'nabiganj.habiganj.gov.bd'),
(293, 38, 'Bahubal', 'বাহুবল', 'bahubal.habiganj.gov.bd'),
(294, 38, 'Ajmiriganj', 'আজমিরীগঞ্জ', 'ajmiriganj.habiganj.gov.bd'),
(295, 38, 'Baniachong', 'বানিয়াচং', 'baniachong.habiganj.gov.bd'),
(296, 38, 'Lakhai', 'লাখাই', 'lakhai.habiganj.gov.bd'),
(297, 38, 'Chunarughat', 'চুনারুঘাট', 'chunarughat.habiganj.gov.bd'),
(298, 38, 'Habiganj Sadar', 'হবিগঞ্জ সদর', 'habiganjsadar.habiganj.gov.bd'),
(299, 38, 'Madhabpur', 'মাধবপুর', 'madhabpur.habiganj.gov.bd'),
(300, 39, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর', 'sadar.sunamganj.gov.bd'),
(301, 39, 'South Sunamganj', 'দক্ষিণ সুনামগঞ্জ', 'southsunamganj.sunamganj.gov.bd'),
(302, 39, 'Bishwambarpur', 'বিশ্বম্ভরপুর', 'bishwambarpur.sunamganj.gov.bd'),
(303, 39, 'Chhatak', 'ছাতক', 'chhatak.sunamganj.gov.bd'),
(304, 39, 'Jagannathpur', 'জগন্নাথপুর', 'jagannathpur.sunamganj.gov.bd'),
(305, 39, 'Dowarabazar', 'দোয়ারাবাজার', 'dowarabazar.sunamganj.gov.bd'),
(306, 39, 'Tahirpur', 'তাহিরপুর', 'tahirpur.sunamganj.gov.bd'),
(307, 39, 'Dharmapasha', 'ধর্মপাশা', 'dharmapasha.sunamganj.gov.bd'),
(308, 39, 'Jamalganj', 'জামালগঞ্জ', 'jamalganj.sunamganj.gov.bd'),
(309, 39, 'Shalla', 'শাল্লা', 'shalla.sunamganj.gov.bd'),
(310, 39, 'Derai', 'দিরাই', 'derai.sunamganj.gov.bd'),
(311, 40, 'Belabo', 'বেলাবো', 'belabo.narsingdi.gov.bd'),
(312, 40, 'Monohardi', 'মনোহরদী', 'monohardi.narsingdi.gov.bd'),
(313, 40, 'Narsingdi Sadar', 'নরসিংদী সদর', 'narsingdisadar.narsingdi.gov.bd'),
(314, 40, 'Palash', 'পলাশ', 'palash.narsingdi.gov.bd'),
(315, 40, 'Raipura', 'রায়পুরা', 'raipura.narsingdi.gov.bd'),
(316, 40, 'Shibpur', 'শিবপুর', 'shibpur.narsingdi.gov.bd'),
(317, 41, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.gazipur.gov.bd'),
(318, 41, 'Kaliakair', 'কালিয়াকৈর', 'kaliakair.gazipur.gov.bd'),
(319, 41, 'Kapasia', 'কাপাসিয়া', 'kapasia.gazipur.gov.bd'),
(320, 41, 'Gazipur Sadar', 'গাজীপুর সদর', 'sadar.gazipur.gov.bd'),
(321, 41, 'Sreepur', 'শ্রীপুর', 'sreepur.gazipur.gov.bd'),
(322, 42, 'Shariatpur Sadar', 'শরিয়তপুর সদর', 'sadar.shariatpur.gov.bd'),
(323, 42, 'Naria', 'নড়িয়া', 'naria.shariatpur.gov.bd'),
(324, 42, 'Zajira', 'জাজিরা', 'zajira.shariatpur.gov.bd'),
(325, 42, 'Gosairhat', 'গোসাইরহাট', 'gosairhat.shariatpur.gov.bd'),
(326, 42, 'Bhedarganj', 'ভেদরগঞ্জ', 'bhedarganj.shariatpur.gov.bd'),
(327, 42, 'Damudya', 'ডামুড্যা', 'damudya.shariatpur.gov.bd'),
(328, 43, 'Araihazar', 'আড়াইহাজার', 'araihazar.narayanganj.gov.bd'),
(329, 43, 'Bandar', 'বন্দর', 'bandar.narayanganj.gov.bd'),
(330, 43, 'Narayanganj Sadar', 'নারায়নগঞ্জ সদর', 'narayanganjsadar.narayanganj.gov.bd'),
(331, 43, 'Rupganj', 'রূপগঞ্জ', 'rupganj.narayanganj.gov.bd'),
(332, 43, 'Sonargaon', 'সোনারগাঁ', 'sonargaon.narayanganj.gov.bd'),
(333, 44, 'Basail', 'বাসাইল', 'basail.tangail.gov.bd'),
(334, 44, 'Bhuapur', 'ভুয়াপুর', 'bhuapur.tangail.gov.bd'),
(335, 44, 'Delduar', 'দেলদুয়ার', 'delduar.tangail.gov.bd'),
(336, 44, 'Ghatail', 'ঘাটাইল', 'ghatail.tangail.gov.bd'),
(337, 44, 'Gopalpur', 'গোপালপুর', 'gopalpur.tangail.gov.bd'),
(338, 44, 'Madhupur', 'মধুপুর', 'madhupur.tangail.gov.bd'),
(339, 44, 'Mirzapur', 'মির্জাপুর', 'mirzapur.tangail.gov.bd'),
(340, 44, 'Nagarpur', 'নাগরপুর', 'nagarpur.tangail.gov.bd'),
(341, 44, 'Sakhipur', 'সখিপুর', 'sakhipur.tangail.gov.bd'),
(342, 44, 'Tangail Sadar', 'টাঙ্গাইল সদর', 'tangailsadar.tangail.gov.bd'),
(343, 44, 'Kalihati', 'কালিহাতী', 'kalihati.tangail.gov.bd'),
(344, 44, 'Dhanbari', 'ধনবাড়ী', 'dhanbari.tangail.gov.bd'),
(345, 45, 'Itna', 'ইটনা', 'itna.kishoreganj.gov.bd'),
(346, 45, 'Katiadi', 'কটিয়াদী', 'katiadi.kishoreganj.gov.bd'),
(347, 45, 'Bhairab', 'ভৈরব', 'bhairab.kishoreganj.gov.bd'),
(348, 45, 'Tarail', 'তাড়াইল', 'tarail.kishoreganj.gov.bd'),
(349, 45, 'Hossainpur', 'হোসেনপুর', 'hossainpur.kishoreganj.gov.bd'),
(350, 45, 'Pakundia', 'পাকুন্দিয়া', 'pakundia.kishoreganj.gov.bd'),
(351, 45, 'Kuliarchar', 'কুলিয়ারচর', 'kuliarchar.kishoreganj.gov.bd'),
(352, 45, 'Kishoreganj Sadar', 'কিশোরগঞ্জ সদর', 'kishoreganjsadar.kishoreganj.gov.bd'),
(353, 45, 'Karimgonj', 'করিমগঞ্জ', 'karimgonj.kishoreganj.gov.bd'),
(354, 45, 'Bajitpur', 'বাজিতপুর', 'bajitpur.kishoreganj.gov.bd'),
(355, 45, 'Austagram', 'অষ্টগ্রাম', 'austagram.kishoreganj.gov.bd'),
(356, 45, 'Mithamoin', 'মিঠামইন', 'mithamoin.kishoreganj.gov.bd'),
(357, 45, 'Nikli', 'নিকলী', 'nikli.kishoreganj.gov.bd'),
(358, 46, 'Harirampur', 'হরিরামপুর', 'harirampur.manikganj.gov.bd'),
(359, 46, 'Saturia', 'সাটুরিয়া', 'saturia.manikganj.gov.bd'),
(360, 46, 'Manikganj Sadar', 'মানিকগঞ্জ সদর', 'sadar.manikganj.gov.bd'),
(361, 46, 'Gior', 'ঘিওর', 'gior.manikganj.gov.bd'),
(362, 46, 'Shibaloy', 'শিবালয়', 'shibaloy.manikganj.gov.bd'),
(363, 46, 'Doulatpur', 'দৌলতপুর', 'doulatpur.manikganj.gov.bd'),
(364, 46, 'Singiar', 'সিংগাইর', 'singiar.manikganj.gov.bd'),
(365, 47, 'Savar', 'সাভার', 'savar.dhaka.gov.bd'),
(366, 47, 'Dhamrai', 'ধামরাই', 'dhamrai.dhaka.gov.bd'),
(367, 47, 'Keraniganj', 'কেরাণীগঞ্জ', 'keraniganj.dhaka.gov.bd'),
(368, 47, 'Nawabganj', 'নবাবগঞ্জ', 'nawabganj.dhaka.gov.bd'),
(369, 47, 'Dohar', 'দোহার', 'dohar.dhaka.gov.bd'),
(370, 48, 'Munshiganj Sadar', 'মুন্সিগঞ্জ সদর', 'sadar.munshiganj.gov.bd'),
(371, 48, 'Sreenagar', 'শ্রীনগর', 'sreenagar.munshiganj.gov.bd'),
(372, 48, 'Sirajdikhan', 'সিরাজদিখান', 'sirajdikhan.munshiganj.gov.bd'),
(373, 48, 'Louhajanj', 'লৌহজং', 'louhajanj.munshiganj.gov.bd'),
(374, 48, 'Gajaria', 'গজারিয়া', 'gajaria.munshiganj.gov.bd'),
(375, 48, 'Tongibari', 'টংগীবাড়ি', 'tongibari.munshiganj.gov.bd'),
(376, 49, 'Rajbari Sadar', 'রাজবাড়ী সদর', 'sadar.rajbari.gov.bd'),
(377, 49, 'Goalanda', 'গোয়ালন্দ', 'goalanda.rajbari.gov.bd'),
(378, 49, 'Pangsa', 'পাংশা', 'pangsa.rajbari.gov.bd'),
(379, 49, 'Baliakandi', 'বালিয়াকান্দি', 'baliakandi.rajbari.gov.bd'),
(380, 49, 'Kalukhali', 'কালুখালী', 'kalukhali.rajbari.gov.bd'),
(381, 50, 'Madaripur Sadar', 'মাদারীপুর সদর', 'sadar.madaripur.gov.bd'),
(382, 50, 'Shibchar', 'শিবচর', 'shibchar.madaripur.gov.bd'),
(383, 50, 'Kalkini', 'কালকিনি', 'kalkini.madaripur.gov.bd'),
(384, 50, 'Rajoir', 'রাজৈর', 'rajoir.madaripur.gov.bd'),
(385, 51, 'Gopalganj Sadar', 'গোপালগঞ্জ সদর', 'sadar.gopalganj.gov.bd'),
(386, 51, 'Kashiani', 'কাশিয়ানী', 'kashiani.gopalganj.gov.bd'),
(387, 51, 'Tungipara', 'টুংগীপাড়া', 'tungipara.gopalganj.gov.bd'),
(388, 51, 'Kotalipara', 'কোটালীপাড়া', 'kotalipara.gopalganj.gov.bd'),
(389, 51, 'Muksudpur', 'মুকসুদপুর', 'muksudpur.gopalganj.gov.bd'),
(390, 52, 'Faridpur Sadar', 'ফরিদপুর সদর', 'sadar.faridpur.gov.bd'),
(391, 52, 'Alfadanga', 'আলফাডাঙ্গা', 'alfadanga.faridpur.gov.bd'),
(392, 52, 'Boalmari', 'বোয়ালমারী', 'boalmari.faridpur.gov.bd'),
(393, 52, 'Sadarpur', 'সদরপুর', 'sadarpur.faridpur.gov.bd'),
(394, 52, 'Nagarkanda', 'নগরকান্দা', 'nagarkanda.faridpur.gov.bd'),
(395, 52, 'Bhanga', 'ভাঙ্গা', 'bhanga.faridpur.gov.bd'),
(396, 52, 'Charbhadrasan', 'চরভদ্রাসন', 'charbhadrasan.faridpur.gov.bd'),
(397, 52, 'Madhukhali', 'মধুখালী', 'madhukhali.faridpur.gov.bd'),
(398, 52, 'Saltha', 'সালথা', 'saltha.faridpur.gov.bd'),
(399, 53, 'Panchagarh Sadar', 'পঞ্চগড় সদর', 'panchagarhsadar.panchagarh.gov.bd'),
(400, 53, 'Debiganj', 'দেবীগঞ্জ', 'debiganj.panchagarh.gov.bd'),
(401, 53, 'Boda', 'বোদা', 'boda.panchagarh.gov.bd'),
(402, 53, 'Atwari', 'আটোয়ারী', 'atwari.panchagarh.gov.bd'),
(403, 53, 'Tetulia', 'তেতুলিয়া', 'tetulia.panchagarh.gov.bd'),
(404, 54, 'Nawabganj', 'নবাবগঞ্জ', 'nawabganj.dinajpur.gov.bd'),
(405, 54, 'Birganj', 'বীরগঞ্জ', 'birganj.dinajpur.gov.bd'),
(406, 54, 'Ghoraghat', 'ঘোড়াঘাট', 'ghoraghat.dinajpur.gov.bd'),
(407, 54, 'Birampur', 'বিরামপুর', 'birampur.dinajpur.gov.bd'),
(408, 54, 'Parbatipur', 'পার্বতীপুর', 'parbatipur.dinajpur.gov.bd'),
(409, 54, 'Bochaganj', 'বোচাগঞ্জ', 'bochaganj.dinajpur.gov.bd'),
(410, 54, 'Kaharol', 'কাহারোল', 'kaharol.dinajpur.gov.bd'),
(411, 54, 'Fulbari', 'ফুলবাড়ী', 'fulbari.dinajpur.gov.bd'),
(412, 54, 'Dinajpur Sadar', 'দিনাজপুর সদর', 'dinajpursadar.dinajpur.gov.bd'),
(413, 54, 'Hakimpur', 'হাকিমপুর', 'hakimpur.dinajpur.gov.bd'),
(414, 54, 'Khansama', 'খানসামা', 'khansama.dinajpur.gov.bd'),
(415, 54, 'Birol', 'বিরল', 'birol.dinajpur.gov.bd'),
(416, 54, 'Chirirbandar', 'চিরিরবন্দর', 'chirirbandar.dinajpur.gov.bd'),
(417, 55, 'Lalmonirhat Sadar', 'লালমনিরহাট সদর', 'sadar.lalmonirhat.gov.bd'),
(418, 55, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.lalmonirhat.gov.bd'),
(419, 55, 'Hatibandha', 'হাতীবান্ধা', 'hatibandha.lalmonirhat.gov.bd'),
(420, 55, 'Patgram', 'পাটগ্রাম', 'patgram.lalmonirhat.gov.bd'),
(421, 55, 'Aditmari', 'আদিতমারী', 'aditmari.lalmonirhat.gov.bd'),
(422, 56, 'Syedpur', 'সৈয়দপুর', 'syedpur.nilphamari.gov.bd'),
(423, 56, 'Domar', 'ডোমার', 'domar.nilphamari.gov.bd'),
(424, 56, 'Dimla', 'ডিমলা', 'dimla.nilphamari.gov.bd'),
(425, 56, 'Jaldhaka', 'জলঢাকা', 'jaldhaka.nilphamari.gov.bd'),
(426, 56, 'Kishorganj', 'কিশোরগঞ্জ', 'kishorganj.nilphamari.gov.bd'),
(427, 56, 'Nilphamari Sadar', 'নীলফামারী সদর', 'nilphamarisadar.nilphamari.gov.bd'),
(428, 57, 'Sadullapur', 'সাদুল্লাপুর', 'sadullapur.gaibandha.gov.bd'),
(429, 57, 'Gaibandha Sadar', 'গাইবান্ধা সদর', 'gaibandhasadar.gaibandha.gov.bd'),
(430, 57, 'Palashbari', 'পলাশবাড়ী', 'palashbari.gaibandha.gov.bd'),
(431, 57, 'Saghata', 'সাঘাটা', 'saghata.gaibandha.gov.bd'),
(432, 57, 'Gobindaganj', 'গোবিন্দগঞ্জ', 'gobindaganj.gaibandha.gov.bd'),
(433, 57, 'Sundarganj', 'সুন্দরগঞ্জ', 'sundarganj.gaibandha.gov.bd'),
(434, 57, 'Phulchari', 'ফুলছড়ি', 'phulchari.gaibandha.gov.bd'),
(435, 58, 'Thakurgaon Sadar', 'ঠাকুরগাঁও সদর', 'thakurgaonsadar.thakurgaon.gov.bd'),
(436, 58, 'Pirganj', 'পীরগঞ্জ', 'pirganj.thakurgaon.gov.bd'),
(437, 58, 'Ranisankail', 'রাণীশংকৈল', 'ranisankail.thakurgaon.gov.bd'),
(438, 58, 'Haripur', 'হরিপুর', 'haripur.thakurgaon.gov.bd'),
(439, 58, 'Baliadangi', 'বালিয়াডাঙ্গী', 'baliadangi.thakurgaon.gov.bd'),
(440, 59, 'Rangpur Sadar', 'রংপুর সদর', 'rangpursadar.rangpur.gov.bd'),
(441, 59, 'Gangachara', 'গংগাচড়া', 'gangachara.rangpur.gov.bd'),
(442, 59, 'Taragonj', 'তারাগঞ্জ', 'taragonj.rangpur.gov.bd'),
(443, 59, 'Badargonj', 'বদরগঞ্জ', 'badargonj.rangpur.gov.bd'),
(444, 59, 'Mithapukur', 'মিঠাপুকুর', 'mithapukur.rangpur.gov.bd'),
(445, 59, 'Pirgonj', 'পীরগঞ্জ', 'pirgonj.rangpur.gov.bd'),
(446, 59, 'Kaunia', 'কাউনিয়া', 'kaunia.rangpur.gov.bd'),
(447, 59, 'Pirgacha', 'পীরগাছা', 'pirgacha.rangpur.gov.bd'),
(448, 60, 'Kurigram Sadar', 'কুড়িগ্রাম সদর', 'kurigramsadar.kurigram.gov.bd'),
(449, 60, 'Nageshwari', 'নাগেশ্বরী', 'nageshwari.kurigram.gov.bd'),
(450, 60, 'Bhurungamari', 'ভুরুঙ্গামারী', 'bhurungamari.kurigram.gov.bd'),
(451, 60, 'Phulbari', 'ফুলবাড়ী', 'phulbari.kurigram.gov.bd'),
(452, 60, 'Rajarhat', 'রাজারহাট', 'rajarhat.kurigram.gov.bd'),
(453, 60, 'Ulipur', 'উলিপুর', 'ulipur.kurigram.gov.bd'),
(454, 60, 'Chilmari', 'চিলমারী', 'chilmari.kurigram.gov.bd'),
(455, 60, 'Rowmari', 'রৌমারী', 'rowmari.kurigram.gov.bd'),
(456, 60, 'Charrajibpur', 'চর রাজিবপুর', 'charrajibpur.kurigram.gov.bd'),
(457, 61, 'Sherpur Sadar', 'শেরপুর সদর', 'sherpursadar.sherpur.gov.bd'),
(458, 61, 'Nalitabari', 'নালিতাবাড়ী', 'nalitabari.sherpur.gov.bd'),
(459, 61, 'Sreebordi', 'শ্রীবরদী', 'sreebordi.sherpur.gov.bd'),
(460, 61, 'Nokla', 'নকলা', 'nokla.sherpur.gov.bd'),
(461, 61, 'Jhenaigati', 'ঝিনাইগাতী', 'jhenaigati.sherpur.gov.bd'),
(462, 62, 'Fulbaria', 'ফুলবাড়ীয়া', 'fulbaria.mymensingh.gov.bd'),
(463, 62, 'Trishal', 'ত্রিশাল', 'trishal.mymensingh.gov.bd'),
(464, 62, 'Bhaluka', 'ভালুকা', 'bhaluka.mymensingh.gov.bd'),
(465, 62, 'Muktagacha', 'মুক্তাগাছা', 'muktagacha.mymensingh.gov.bd'),
(466, 62, 'Mymensingh Sadar', 'ময়মনসিংহ সদর', 'mymensinghsadar.mymensingh.gov.bd'),
(467, 62, 'Dhobaura', 'ধোবাউড়া', 'dhobaura.mymensingh.gov.bd'),
(468, 62, 'Phulpur', 'ফুলপুর', 'phulpur.mymensingh.gov.bd'),
(469, 62, 'Haluaghat', 'হালুয়াঘাট', 'haluaghat.mymensingh.gov.bd'),
(470, 62, 'Gouripur', 'গৌরীপুর', 'gouripur.mymensingh.gov.bd'),
(471, 62, 'Gafargaon', 'গফরগাঁও', 'gafargaon.mymensingh.gov.bd'),
(472, 62, 'Iswarganj', 'ঈশ্বরগঞ্জ', 'iswarganj.mymensingh.gov.bd'),
(473, 62, 'Nandail', 'নান্দাইল', 'nandail.mymensingh.gov.bd'),
(474, 62, 'Tarakanda', 'তারাকান্দা', 'tarakanda.mymensingh.gov.bd'),
(475, 63, 'Jamalpur Sadar', 'জামালপুর সদর', 'jamalpursadar.jamalpur.gov.bd'),
(476, 63, 'Melandah', 'মেলান্দহ', 'melandah.jamalpur.gov.bd'),
(477, 63, 'Islampur', 'ইসলামপুর', 'islampur.jamalpur.gov.bd'),
(478, 63, 'Dewangonj', 'দেওয়ানগঞ্জ', 'dewangonj.jamalpur.gov.bd'),
(479, 63, 'Sarishabari', 'সরিষাবাড়ী', 'sarishabari.jamalpur.gov.bd'),
(480, 63, 'Madarganj', 'মাদারগঞ্জ', 'madarganj.jamalpur.gov.bd'),
(481, 63, 'Bokshiganj', 'বকশীগঞ্জ', 'bokshiganj.jamalpur.gov.bd'),
(482, 64, 'Barhatta', 'বারহাট্টা', 'barhatta.netrokona.gov.bd'),
(483, 64, 'Durgapur', 'দুর্গাপুর', 'durgapur.netrokona.gov.bd'),
(484, 64, 'Kendua', 'কেন্দুয়া', 'kendua.netrokona.gov.bd'),
(485, 64, 'Atpara', 'আটপাড়া', 'atpara.netrokona.gov.bd'),
(486, 64, 'Madan', 'মদন', 'madan.netrokona.gov.bd'),
(487, 64, 'Khaliajuri', 'খালিয়াজুরী', 'khaliajuri.netrokona.gov.bd'),
(488, 64, 'Kalmakanda', 'কলমাকান্দা', 'kalmakanda.netrokona.gov.bd'),
(489, 64, 'Mohongonj', 'মোহনগঞ্জ', 'mohongonj.netrokona.gov.bd'),
(490, 64, 'Purbadhala', 'পূর্বধলা', 'purbadhala.netrokona.gov.bd'),
(491, 64, 'Netrokona Sadar', 'নেত্রকোণা সদর', 'netrokonasadar.netrokona.gov.bd'),
(542, 47, 'Adabor', 'আদাবর', 'Adabor'),
(543, 47, 'Airport', 'এয়ারপোর্ট', 'Airport'),
(544, 47, 'Badda', 'বাড্ডা', 'Badda'),
(545, 47, 'Banani', 'বনানী', 'Banani'),
(546, 47, 'Bangshal', 'বংশাল', 'Bangshal'),
(547, 47, 'Bhashantek', 'ভাশানটেক', 'Bhashantek'),
(548, 47, 'Cantonment', 'কেন্টনমেন্ট', 'Cantonment'),
(549, 47, 'Chackbazar', 'চকবাজার', 'Chackbazar'),
(550, 47, 'Darussalam', 'দারূসসালাম', 'Darussalam'),
(551, 47, 'Daskhinkhan', 'দক্ষিনখান', 'Daskhinkhan'),
(552, 47, 'Demra', 'ডেমরা', 'Demra'),
(553, 47, 'Dhanmondi', 'ধানমন্ডি', 'Dhanmondi'),
(554, 47, 'Gandaria', 'গেন্ডারিয়া', 'Gandaria'),
(555, 47, 'Gulshan', 'গূলশান', 'Gulshan'),
(556, 47, 'Hazaribag', 'হাজারিবাগ', 'Hazaribag'),
(557, 47, 'Jatrabari', 'যাত্রাবাড়ি', 'Jatrabari'),
(558, 47, 'Kafrul', 'কাফ্রুল', 'Kafrul'),
(559, 47, 'Kalabagan', 'কলাবাগান', 'Kalabagan'),
(560, 47, 'Kamrangirchar', 'কামরাংগিচর', 'Kamrangirchar'),
(561, 47, 'Khilgaon', 'খিলগাও', 'Khilgaon'),
(562, 47, 'Khilkhet', 'খিলখেত', 'Khilkhet'),
(563, 47, 'Kotwali', 'কতোয়ালি', 'Kotwali'),
(564, 47, 'Lalbag', 'লালবাগ', 'Lalbag'),
(565, 47, 'Mirpur Model', 'মিরপূর মডেল', 'Mirpur Model'),
(566, 47, 'Mohammadpur', 'মোহাম্মাদপুর', 'Mohammadpur'),
(567, 47, 'Motijheel', 'মাতিঝিল', 'Motijheel'),
(568, 47, 'Mugda', 'মুগদা', 'Mugda'),
(569, 47, 'New Market', 'নিউমার্কেট', 'New Market'),
(570, 47, 'Pallabi', 'পল্লবী', 'Pallabi'),
(571, 47, 'Paltan', 'পল্টন', 'Paltan'),
(572, 47, 'Ramna', 'রমনা', 'Ramna'),
(573, 47, 'Rampura', 'রামপুরা', 'Rampura'),
(574, 47, 'Rupnagar', 'রুপনগর', 'Rupnagar'),
(575, 47, 'Sabujbag', 'সবুজবাগ', 'Sabujbag'),
(576, 47, 'Shah Ali', 'শাহ আলী', 'Shah Ali'),
(577, 47, 'Shahbag', 'শাহবাগ', 'Shahbag'),
(578, 47, 'Shahjahanpur', 'শাহজাহানপুর', 'Shahjahanpur'),
(579, 47, 'Sherebanglanagar', 'শেরেবাংলানগর', 'Sherebanglanagar'),
(580, 47, 'Shyampur', 'শেমপুর', 'Shyampur'),
(581, 47, 'Sutrapur', 'সুত্রাপুর', 'Sutrapur'),
(582, 47, 'Tejgaon', 'তেজগাও', 'Tejgaon'),
(583, 47, 'Tejgaon I/A', 'তেজগাও I/A', 'Tejgaon I/A'),
(584, 47, 'Turag', 'তুরাগ', 'Turag'),
(585, 47, 'Uttara', 'উত্তরা', 'Uttara'),
(586, 47, 'Uttara West', 'উত্তরা পুর্ব', 'Uttara West'),
(587, 47, 'Uttarkhan', 'উত্তরখান', 'Uttarkhan'),
(588, 47, 'Vatara', 'ভাটারা', 'Vatara'),
(589, 47, 'Wari', 'ওয়ারী', 'Wari');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `rank_id` varchar(255) DEFAULT NULL,
  `organization_id` varchar(255) DEFAULT NULL,
  `committee_id` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=Not_registered\r\n1=registered\r\n2=following\r\n3=incomplete',
  `rating` double NOT NULL DEFAULT 0,
  `active` int(11) NOT NULL DEFAULT 0,
  `recommended_by` varchar(50) DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0= not approved,\r\n1=approved,\r\n2=reject',
  `is_admin` int(11) NOT NULL DEFAULT 0,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `register_date` date DEFAULT NULL,
  `expired_date` date DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `member_id`, `name`, `email`, `password`, `phone`, `rank_id`, `organization_id`, `committee_id`, `status`, `rating`, `active`, `recommended_by`, `approved`, `is_admin`, `is_verified`, `register_date`, `expired_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(38, 'BNM000000001', 'farhad', 'farhad50@gmail.com', '$2y$10$zRccnOdf2xE/goiJUie18u8rYG6MvGGsbmA3ZFle6BBj/wFzEUqOS', '01511223344', '10', '8', '5', 3, 0, 1, '01311223344', 1, 1, 1, NULL, NULL, NULL, '2023-10-07 03:19:22', '2024-05-13 11:06:24'),
(39, 'BNM000000002', 'farhad', 'ron2@example.com', '$2y$10$GCJAesTM8AChbPkDh.LFIOL0ePAF8igLtwNbj4XkISWLSYjnZfis.', '01810800801', '10', '2', NULL, 0, 0, 0, '01766332211', 0, 0, 0, NULL, NULL, NULL, '2023-10-09 06:28:06', '2023-10-09 06:28:41'),
(40, 'BNM000000003', 'farhad', 'farhad@gmail.com', '$2y$10$8K6wVd3ZxmS5ofJoYOU0O.jYnkCSy0ahfHh6TJknS5deUl94E6Ahm', '01627013936', '10', '2', NULL, 1, 0, 1, '01511223344', 1, 1, 1, NULL, NULL, NULL, '2023-10-09 06:33:02', '2023-10-11 11:12:22'),
(41, 'BNM000000004', 'Sadik Hossain', 'sadik45@gmail.com', '$2y$10$hg/5CeieonQ3caJGCzX2z.8wKxYM8/5MJd7qrCuHsd4VoTT7zt1wC', '01311223344', '10', '11', NULL, 1, 0, 1, '01511223344', 1, 1, 1, NULL, NULL, NULL, '2023-10-11 03:03:00', '2023-12-03 10:58:50'),
(42, 'BNM000000005', 'sahid', 'sahid22@gmail.com', '$2y$10$MUKm.vleL5pffz0se6..L.33A3Bz82mO9hm3g6Qc3V55zQgdJZ9ru', '01322334455', '10', '9', NULL, 3, 0, 0, '01511223344', 0, 0, 0, NULL, NULL, NULL, '2023-10-12 13:49:29', '2023-10-14 14:53:56'),
(43, 'BNM000000006', 'sabbir', 'sabbir66@gmail.com', '$2y$10$mintgy973YYTcEE7kJLncOk5OxhCfWbQ4UoXl4rCY8A7czFoBfZRm', '01411223344', '10', '8', '4', 0, 0, 0, '01311223344', 0, 0, 0, NULL, NULL, NULL, '2023-10-12 15:49:33', '2023-10-30 10:02:58'),
(44, 'BNM000000007', 'dalim', 'dalim50@gmail.com', '$2y$10$RaqKMbi.O6YQ.ojEwMbv3uU78HZBOjxx/n2bnaS8fe68ZcUGVmFiG', '01811223344', '10', '1', '5', 3, 0, 0, '01311223344', 0, 0, 1, NULL, NULL, NULL, '2023-10-12 16:03:04', '2023-11-08 11:08:47'),
(45, 'BNM000000008', 'kalam', NULL, '$2y$10$6XWPcZHHLb6aqrPB3DpuQO2TIUD5mWbZ1YQR95vupMvIWD4gxbs/C', '01911223344', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2023-10-12 16:04:58', '2023-10-12 16:04:58'),
(46, 'BNM000000009', 'farid', NULL, '$2y$10$j6K7GD1yGESiQ9Wkg7RhrOKLaYqVAREll3JTu8C4Z78sl/MJHs9WG', '01922334455', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2023-10-12 16:10:27', '2023-10-12 16:10:27'),
(47, 'BNM000000010', 'faruk', NULL, '$2y$10$zW.OWyJH99uKcTZ6JITGFeSduK9u0/k7Z5B6/R4dSiRJfrpX.v.2K', '01822334455', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2023-10-12 16:12:07', '2023-10-12 16:12:07'),
(48, 'BNM000000011', 'titul', NULL, '$2y$10$j/gO3wLeUq.aUVghzN/PI.8lcWpE4eOASQAMu.Oo0E6tdcl9UR.Ga', '01833445566', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2023-10-12 16:15:52', '2023-10-12 16:15:52'),
(49, 'BNM000000012', 'raihan', NULL, '$2y$10$sATHoc68uyoCEDnB18VN6uuFydR/c7sBKiTRRg2sNSSB50XMmaJlO', '01933445566', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2023-10-12 16:26:51', '2023-10-12 16:26:51'),
(50, 'BNM000000013', 'sakil', NULL, '$2y$10$41CI4JPuOcb4nfBlY/n8..dYh0jxj5TIGvbwNudjiyo0Z0ZWLBFYi', '01944556677', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2023-10-12 16:32:21', '2023-10-12 16:32:21'),
(51, 'BNM000000014', 'rajjak', NULL, '$2y$10$.JFnEvUQ1vHjTtmqWFjJO.lPfENhoh65Y1mQ4TN9aQU7Q4QWdwDAm', '01611223344', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2023-10-12 16:37:42', '2023-10-12 16:37:42'),
(52, 'BNM000000015', 'farhad12', 'farhad100@gmail.com', '$2y$10$aNIWEGx1RzWaHByrX8r9rujKE391IBmjVlXZXuJl9ht5mDjD7JVzS', '01871006624', '10', '5', NULL, 3, 0, 0, '01311223344', 0, 0, 0, NULL, NULL, NULL, '2023-10-24 10:13:50', '2023-10-24 10:28:02'),
(53, 'BNM000000016', 'Zahid', NULL, '$2y$10$h6xB3WJ9.Ys1ivtPnSPrte3p4OiWEdysRHBCTc8Yh13spWmhnPGvi', '01633445566', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2023-10-24 10:18:22', '2023-10-24 10:18:22'),
(54, 'BNM000000017', 'Safin', 'dummy55@gmail.com', '$2y$10$GNy5/g0lXLF9wgpcHnZmu.cXyVsv1N9CtP1gaqKQ8bgXZ80I4SUxS', '01244556677', '10', '9', NULL, 1, 0, 0, '01311223344', 0, 0, 1, NULL, NULL, NULL, '2023-10-24 10:25:50', '2023-10-24 13:40:52'),
(55, 'BNM000000018', 'Babul Rahman', NULL, '$2y$10$SdU0Ea7c.sGg1bJEHVuVNunPqUm/dgca99PC9p1/t2InTNIV/Ir1m', '011122334455', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2023-11-04 15:33:39', '2023-11-04 15:33:39'),
(56, 'BNM000000019', 'Sojib', NULL, '$2y$10$DDMMcS/B8ESpOfxI3aLEIuPxx0f0yVXZ.tUKtMgwzA51VCfA4Gj9W', '01644332211', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2023-11-04 18:22:08', '2023-11-04 18:22:08'),
(57, 'BNM000000020', 'Easin', 'easin@gmail.com', '$2y$10$s0OK/pcTVviKWfKdODeu7.UvpWlOzPbO7KAdDmZaxySpiHGPLn2p2', '01878574040', '10', '1', '6', 0, 0, 0, '01311223344', 0, 0, 0, NULL, NULL, NULL, '2023-11-04 18:27:39', '2023-11-04 19:50:09'),
(58, 'BNM000000021', 'Shovon Lal', NULL, '$2y$10$86Kf7VL3DWDoUS88ANzn8.bhiT00FxrprnhvhOkBWrYAITNBTLzoG', '01522334455', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2023-11-16 16:33:23', '2023-11-16 16:33:23'),
(59, 'BNM000000022', 'Shakil Hossain', NULL, '$2y$10$LUBqIs5AL5xtEl7SuA7nCes7Qrd788DR5Gnch3F4NHM4isa2GFHU6', '01422334455', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2023-11-16 16:41:06', '2023-11-16 16:41:06'),
(60, 'BNM000000023', 'Mridul Hasan', 'mridul.hasan@gmail.com', '$2y$10$6M0doSCKAJiQDQ3acJ148uvBGqMC53fN910IqBf.aUTmblWz0AsG.', '01333445566', '10', '5', '3', 0, 0, 0, '01311223344', 0, 0, 0, NULL, NULL, NULL, '2023-11-28 15:55:41', '2023-11-28 17:43:07'),
(61, 'BNM000000024', 'farhad2', 'Saddik20@example.com', '$2y$10$CvWsW.bAiSKSs3UfOePs/.YlXGUQcbGNSRwwWbpz8fE4LHpK8xmRa', '01810800803', '10', '2', '5', 3, 0, 0, '01311223344', 0, 0, 1, NULL, NULL, NULL, '2024-05-13 02:10:15', '2024-05-13 02:35:15'),
(62, 'BNM000000025', 'sabbir f', NULL, '$2y$10$5monu6YOessHHAAgY3J3eOPPs/1PDco42CxDTSkgcwmRAdv.ijTuq', '01577665544', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2024-05-20 12:52:19', '2024-05-20 12:52:19'),
(63, 'BNM000000026', 'shakil', NULL, '$2y$10$bjQwCmctsPthzoviHGUOGuEIWGkjE7M8bR4vZq1s0jli.mgiqU8Yu', '01566554433', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2024-05-20 12:58:20', '2024-05-20 12:58:20'),
(64, 'BNM000000027', 'Mostafa', NULL, '$2y$10$DV/SbKLX5rqXYLlCJAe7.e7uwhuu5pwqp0rJ2VEoRg6f9SRScpCe6', '01699887766', NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, '2024-05-27 11:07:29', '2024-05-27 11:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `id` int(11) NOT NULL,
  `ward_no` varchar(100) DEFAULT NULL,
  `ward_no_bn` varchar(100) DEFAULT NULL,
  `union_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `central_committees`
--
ALTER TABLE `central_committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marquee`
--
ALTER TABLE `marquee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_chart`
--
ALTER TABLE `payment_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `member_id` (`mem_id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate_user`
--
ALTER TABLE `rate_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unions`
--
ALTER TABLE `unions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `central_committees`
--
ALTER TABLE `central_committees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=427;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
