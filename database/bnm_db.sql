-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2024 at 04:51 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image1`, `image2`, `description`, `created_at`, `updated_at`) VALUES
(1, 'আমাদের সম্পর্কে কিছু শব্দ', 'uploads-image/about-image/1717233992.jpg', 'uploads-image/about-image/1717320723.jpg', 'ক্ষমতা ও শাসন এই দুটি ঋণাত্মক শব্দ এবং এই দুটি শব্দ ”ব্যবস্থাপনা” শব্দ দ্বারা প্রতিস্থাপিত হবে। রাষ্ট্রযন্ত্রের কর্মকান্ডে দুর্নীতি রোধ, স্বচ্ছতা ও জবাবদিহিতা নিশ্চিতে রাষ্ট্রযন্ত্রের সকল চালিকা শক্তির ব্যবস্থাপনা প্রযুক্তি/ অটোমেশনের মাধ্যমে পরিচালিত হবে।\r\nক্ষমতা ও শাসন এই দুটি ঋণাত্মক শব্দ এবং এই দুটি শব্দ ”ব্যবস্থাপনা” শব্দ দ্বারা প্রতিস্থাপিত হবে। রাষ্ট্রযন্ত্রের কর্মকান্ডে দুর্নীতি রোধ, স্বচ্ছতা ও জবাবদিহিতা নিশ্চিতে রাষ্ট্রযন্ত্রের সকল চালিকা শক্তির ব্যবস্থাপনা প্রযুক্তি/ অটোমেশনের মাধ্যমে পরিচালিত হবে।\r\nক্ষমতা ও শাসন এই দুটি ঋণাত্মক শব্দ এবং এই দুটি শব্দ ”ব্যবস্থাপনা” শব্দ দ্বারা প্রতিস্থাপিত হবে। রাষ্ট্রযন্ত্রের কর্মকান্ডে দুর্নীতি রোধ, স্বচ্ছতা ও জবাবদিহিতা নিশ্চিতে রাষ্ট্রযন্ত্রের সকল চালিকা শক্তির ব্যবস্থাপনা প্রযুক্তি/ অটোমেশনের মাধ্যমে পরিচালিত হবে।\r\nক্ষমতা ও শাসন এই দুটি ঋণাত্মক শব্দ এবং এই দুটি শব্দ ”ব্যবস্থাপনা” শব্দ দ্বারা প্রতিস্থাপিত হবে। রাষ্ট্রযন্ত্রের কর্মকান্ডে দুর্নীতি রোধ, স্বচ্ছতা ও জবাবদিহিতা নিশ্চিতে রাষ্ট্রযন্ত্রের সকল চালিকা শক্তির ব্যবস্থাপনা প্রযুক্তি/ অটোমেশনের মাধ্যমে পরিচালিত হবে।\r\nক্ষমতা ও শাসন এই দুটি ঋণাত্মক শব্দ এবং এই দুটি শব্দ ”ব্যবস্থাপনা” শব্দ দ্বারা প্রতিস্থাপিত হবে। রাষ্ট্রযন্ত্রের কর্মকান্ডে দুর্নীতি রোধ, স্বচ্ছতা ও জবাবদিহিতা নিশ্চিতে রাষ্ট্রযন্ত্রের সকল চালিকা শক্তির ব্যবস্থাপনা প্রযুক্তি/ অটোমেশনের মাধ্যমে পরিচালিত হবে।\r\nক্ষমতা ও শাসন এই দুটি ঋণাত্মক শব্দ এবং এই দুটি শব্দ ”ব্যবস্থাপনা” শব্দ দ্বারা প্রতিস্থাপিত হবে। রাষ্ট্রযন্ত্রের কর্মকান্ডে দুর্নীতি রোধ, স্বচ্ছতা ও জবাবদিহিতা নিশ্চিতে রাষ্ট্রযন্ত্রের সকল চালিকা শক্তির ব্যবস্থাপনা প্রযুক্তি/ অটোমেশনের মাধ্যমে পরিচালিত হবে।\r\nক্ষমতা ও শাসন এই দুটি ঋণাত্মক শব্দ এবং এই দুটি শব্দ ”ব্যবস্থাপনা” শব্দ দ্বারা প্রতিস্থাপিত হবে। রাষ্ট্রযন্ত্রের কর্মকান্ডে দুর্নীতি রোধ, স্বচ্ছতা ও জবাবদিহিতা নিশ্চিতে রাষ্ট্রযন্ত্রের সকল চালিকা শক্তির ব্যবস্থাপনা প্রযুক্তি/ অটোমেশনের মাধ্যমে পরিচালিত হবে।', '2024-06-01 03:25:31', '2024-06-02 03:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `about_items`
--

CREATE TABLE `about_items` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_items`
--

INSERT INTO `about_items` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Lance Guerra Name', 'Quis porro reprehend Des', 'uploads-image/about-items/1717234290.jpg', '2024-06-01 03:30:57', '2024-06-01 03:31:30'),
(3, 'Mona Ellis', 'Ipsa sed omnis poss', 'uploads-image/no_silders_image.jpg', '2024-06-01 03:31:53', '2024-06-01 03:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `committees`
--

CREATE TABLE `committees` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'mostofa3', 'admin@gmail.com', '0326155555', 'Ad minim in consequu', 'bjhhjh', '2024-06-03 04:13:41', '2024-06-03 04:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint UNSIGNED NOT NULL,
  `division_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_pdfs`
--

CREATE TABLE `form_pdfs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_pdfs`
--

INSERT INTO `form_pdfs` (`id`, `title`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'মনোনয়ন আবেদন পত্র', 'uploads-pdf/formPdf/1717234532.pdf', '2024-06-01 03:35:32', '2024-06-01 22:34:40'),
(2, 'হলফ নামা', 'uploads-pdf/formPdf/1717234613.pdf', '2024-06-01 03:36:53', '2024-06-01 22:34:55'),
(3, 'প্রাপ্তি স্বীকার পত্র', 'uploads-pdf/formPdf/1717234677.pdf', '2024-06-01 03:37:57', '2024-06-01 22:35:09'),
(4, 'প্রাথমিক সদস্য ফরম', 'uploads-pdf/formPdf/1717234720.pdf', '2024-06-01 03:38:40', '2024-06-01 22:35:22'),
(5, 'সংবিধান', 'uploads-pdf/formPdf/1717234744.pdf', '2024-06-01 03:39:04', '2024-06-01 22:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `marquees`
--

CREATE TABLE `marquees` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(88, '2014_10_12_000000_create_users_table', 1),
(89, '2014_10_12_100000_create_password_resets_table', 1),
(90, '2019_08_19_000000_create_failed_jobs_table', 1),
(91, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(92, '2024_05_27_072216_create_site_settings_table', 1),
(93, '2024_05_27_081022_create_sliders_table', 1),
(94, '2024_05_27_081212_create_abouts_table', 1),
(95, '2024_05_27_081307_create_about_items_table', 1),
(96, '2024_05_27_081644_create_form_pdfs_table', 1),
(97, '2024_05_27_082106_create_programs_table', 1),
(98, '2024_05_27_082911_create_news_table', 1),
(99, '2024_05_27_083101_create_videos_table', 1),
(100, '2024_05_27_083249_create_party_members_table', 1),
(101, '2024_05_27_083821_create_profiles_table', 1),
(102, '2024_05_27_084528_create_rattings_table', 1),
(103, '2024_05_27_084914_create_committees_table', 1),
(104, '2024_05_27_085111_create_upazilas_table', 1),
(105, '2024_05_27_085343_create_divisions_table', 1),
(106, '2024_05_27_085540_create_districts_table', 1),
(107, '2024_05_27_085736_create_wards_table', 1),
(108, '2024_05_27_085952_create_unions_table', 1),
(109, '2024_05_27_090127_create_areas_table', 1),
(110, '2024_05_27_090318_create_organizations_table', 1),
(111, '2024_05_27_090507_create_tokens_table', 1),
(112, '2024_05_27_090647_create_payments_table', 1),
(113, '2024_05_27_090833_create_payment_charts_table', 1),
(114, '2024_05_27_091133_create_positions_table', 1),
(115, '2024_05_27_091311_create_marquees_table', 1),
(116, '2024_05_30_094007_create_contact_us_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `description`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'By Daniel Martin One', 'uploads-image/news/1717236663.jpg', 'Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet v', '2024-05-30', '1', '2024-06-01 04:11:03', '2024-06-01 04:14:48'),
(2, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা 3', 'uploads-image/news/1717236757.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nfগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-06-28', '1', '2024-06-01 04:12:37', '2024-06-02 23:46:27'),
(3, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা 2', 'uploads-image/news/1717236798.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-05-31', '1', '2024-06-01 04:13:18', '2024-06-02 03:58:18'),
(4, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা', 'uploads-image/news/1717236830.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-06-01', '1', '2024-06-01 04:13:50', '2024-06-02 03:57:29'),
(6, 'By Daniel Martin One', 'uploads-image/news/1717236663.jpg', 'Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet v', '2024-05-30', '1', '2024-06-01 04:11:03', '2024-06-01 04:14:48'),
(7, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা 3', 'uploads-image/news/1717236757.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-06-28', '1', '2024-06-01 04:12:37', '2024-06-02 03:59:03'),
(8, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা 2', 'uploads-image/news/1717236798.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-05-31', '1', '2024-06-01 04:13:18', '2024-06-02 03:58:18'),
(9, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা', 'uploads-image/news/1717236830.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-06-01', '1', '2024-06-01 04:13:50', '2024-06-02 03:57:29'),
(10, 'By Daniel Martin One', 'uploads-image/news/1717236663.jpg', 'Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet v', '2024-05-30', '1', '2024-06-01 04:11:03', '2024-06-01 04:14:48'),
(11, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা 3', 'uploads-image/news/1717236757.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-06-28', '1', '2024-06-01 04:12:37', '2024-06-02 03:59:03'),
(12, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা 2', 'uploads-image/news/1717236798.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-05-31', '1', '2024-06-01 04:13:18', '2024-06-02 03:58:18'),
(13, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা', 'uploads-image/news/1717236830.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-06-01', '1', '2024-06-01 04:13:50', '2024-06-02 03:57:29'),
(14, 'By Daniel Martin One', 'uploads-image/news/1717236663.jpg', 'Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet v', '2024-05-30', '1', '2024-06-01 04:11:03', '2024-06-01 04:14:48'),
(15, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা 3', 'uploads-image/news/1717236757.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-06-28', '1', '2024-06-01 04:12:37', '2024-06-02 03:59:03'),
(16, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা 2', 'uploads-image/news/1717236798.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-05-31', '1', '2024-06-01 04:13:18', '2024-06-02 03:58:18'),
(17, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা', 'uploads-image/news/1717236830.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-06-01', '1', '2024-06-01 04:13:50', '2024-06-02 03:57:29'),
(18, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা 5', 'uploads-image/news/1717236757.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে\r\nগ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-06-28', '1', '2024-06-01 04:12:37', '2024-06-03 00:48:53'),
(19, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা 4', 'uploads-image/news/1717236798.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-05-31', '1', '2024-06-01 04:13:18', '2024-06-03 00:48:43'),
(20, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা 3', 'uploads-image/news/1717236830.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-06-01', '1', '2024-06-01 04:13:50', '2024-06-03 00:48:32'),
(21, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা 2', 'uploads-image/news/1717236830.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-06-01', '1', '2024-06-01 04:13:50', '2024-06-03 00:48:23'),
(22, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা 1', 'uploads-image/news/1717236830.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-06-01', '1', '2024-06-01 04:13:50', '2024-06-03 00:48:15'),
(23, 'ড্যানিয়েল মার্টিন ট্রি দ্বারা ABC', 'uploads-image/news/1717236830.jpg', 'গ্রাহক নিজেই গ্রাহক। কিন্তু এটা মাঝে মাঝে পরিষ্কার হয়ে যায়। কিছু ব্যথা টিনসিডেন্ট মুক্ত হতে হবে', '2024-06-01', '1', '2024-06-01 04:13:50', '2024-06-03 00:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `status` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `currency` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `address`, `status`, `transaction_id`, `currency`) VALUES
(1, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Processing', '665e9d0f5e7b9', 'BDT');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `party_members`
--

CREATE TABLE `party_members` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `committee_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_charts`
--

CREATE TABLE `payment_charts` (
  `id` bigint UNSIGNED NOT NULL,
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_id` int DEFAULT NULL,
  `organization_id` int DEFAULT NULL,
  `committee_id` int DEFAULT NULL,
  `recommended_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` double(8,2) DEFAULT NULL,
  `father` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_front` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_back` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upazila_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `union_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `response_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `title`, `image`, `description`, `date`, `status`, `created_at`, `updated_at`) VALUES
(2, 'কোড  শেখা', 'uploads-image/program/1717235627.jpg', 'অ্যাডপিসিং প্রক্রিয়ার দিকে মনোযোগ দেওয়া গ্রাহকের জন্য খুবই গুরুত্বপূর্ণ। কেননা উপস্থিতদের কথাগুলো তাকে অন্ধ করে দিয়েছিল, আমাদের চেয়ে দুঃখের স্থপতি! কিংবা এটা কখনোই সহজ নয়। সত্য, এটা হতে দিন', '2024-05-31', '1', '2024-06-01 03:50:40', '2024-06-02 03:40:36'),
(3, 'কোড শেখা 1', 'uploads-image/program/1717235627.jpg', 'অ্যাডপিসিং প্রক্রিয়ার দিকে মনোযোগ দেওয়া গ্রাহকের জন্য খুবই গুরুত্বপূর্ণ। কেননা উপস্থিতদের কথাগুলো তাকে অন্ধ করে দিয়েছিল, আমাদের চেয়ে দুঃখের স্থপতি! কিংবা এটা কখনোই সহজ নয়। সত্য, এটা হতে দিন', '2024-05-31', '1', '2024-06-01 03:50:40', '2024-06-02 03:40:10'),
(4, 'কোড  শেখা 2', 'uploads-image/program/1717235627.jpg', 'অ্যাডপিসিং প্রক্রিয়ার দিকে মনোযোগ দেওয়া গ্রাহকের জন্য খুবই গুরুত্বপূর্ণ। কেননা উপস্থিতদের কথাগুলো তাকে অন্ধ করে দিয়েছিল, আমাদের চেয়ে দুঃখের স্থপতি! কিংবা এটা কখনোই সহজ নয়। সত্য, এটা হতে দিন', '2024-05-31', '1', '2024-06-01 03:50:40', '2024-06-02 03:39:22'),
(5, 'কোড  শেখা 4', 'uploads-image/program/1717235627.jpg', 'অ্যাডপিসিং প্রক্রিয়ার দিকে মনোযোগ দেওয়া গ্রাহকের জন্য খুবই গুরুত্বপূর্ণ। কেননা উপস্থিতদের কথাগুলো তাকে অন্ধ করে দিয়েছিল, আমাদের চেয়ে দুঃখের স্থপতি! কিংবা এটা কখনোই সহজ নয়। সত্য, এটা হতে দিন', '2024-05-31', '1', '2024-06-01 03:50:40', '2024-06-02 03:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `rattings`
--

CREATE TABLE `rattings` (
  `id` bigint UNSIGNED NOT NULL,
  `rating_user` int DEFAULT NULL,
  `rated_user` int DEFAULT NULL,
  `rating` double(8,2) DEFAULT NULL,
  `review` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `site_name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_hader_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `contact_description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_sec_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_name_en`, `site_name_bn`, `logo`, `page_hader_img`, `favicon`, `description`, `contact_description`, `about_subtitle`, `form_sec_title`, `program_subtitle`, `program_title`, `news_subtitle`, `news_title`, `video_subtitle`, `video_title`, `member_subtitle`, `member_title`, `email`, `phone`, `address`, `map_url`, `facebook_url`, `instagram_url`, `twitter_url`, `linkedin_url`, `created_at`, `updated_at`) VALUES
(1, 'BNM', 'বিএনএম', 'uploads-image/site-image/1717232901.png', NULL, NULL, 'কল্যাণ রাষ্ট্র প্রতিষ্ঠা। ধর্মীয় মূল্যবোধ, জাতীয়তাবাদ ও মুক্তিযুদ্ধের চেতনা সমুন্নত রাখা। বিদ্যমান সংঘাতের রাজনীতির অবসান ঘটিয়ে সুস্থ রাজনৈতিক পরিবেশ সৃষ্টি করা। রাজনীতিতে সৎ ও মেধাবী, দক্ষ ও যোগ্য (ট্যালেন্ট হান্ট) লোকদের সম্পৃক্ত করুন। 3C- দুর্নীতিবাজ, চরিত্রহীন ও বিতর্কিতদের দলে সদস্যপদ দেওয়া হবে না। দেশ ও দলের সর্বস্তরে গণতন্ত্রের কঠোর চর্চা নিশ্চিত করা। রাজনীতিতে স্বজনপ্রীতির অবসান।', 'কল্যাণ রাষ্ট্র প্রতিষ্ঠা। ধর্মীয় মূল্যবোধ, জাতীয়তাবাদ ও মুক্তিযুদ্ধের চেতনা সমুন্নত রাখা। বিদ্যমান সংঘাতের রাজনীতির অবসান ঘটিয়ে সুস্থ রাজনৈতিক পরিবেশ সৃষ্টি করা। রাজনীতিতে সৎ ও মেধাবী, দক্ষ ও যোগ্য (ট্যালেন্ট হান্ট) লোকদের সম্পৃক্ত করুন। test', 'আমাদের সম্পর্কে', 'ফরম ডাউনলোড করুন', 'আমাদের প্রোগ্রাম', 'প্রোগ্রাম এবং প্রেস রিলিজ', 'আমাদের খবর', 'সর্বশেষ সংবাদ', 'আমাদের ভিডিও', 'আমাদের প্রেস কনফারেন্স এবং ভিডিও', 'পার্টি সদস্য', 'কেন্দ্রীয় কার্যনির্বাহী কমিটি', 'info@bnmbd.org', '+8801871006627', 'Gulshan Palladium, Dhaka - 1212, Bangladesh', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6624600060018!2d90.4158686!3d23.795031200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a6f39d34d3%3A0x971d1135e4315c02!2sGulshan%20Palladium%2C%2001%20Madani%20Ave%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1717409925356!5m2!1sen!2sbd', 'https://www.facebook.com/', 'I', 'T', 'L', '2024-06-01 03:05:21', '2024-06-03 04:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'বিএনএমে স্বাগতম', 'ক্ষমতা ও শাসন এই দুটি ঋণাত্মক শব্দ এবং এই দুটি শব্দ ”ব্যবস্থাপনা” শব্দ দ্বারা প্রতিস্থাপিত হবে। রাষ্ট্রযন্ত্রের কর্মকান্ডে দুর্নীতি রোধ, স্বচ্ছতা ও জবাবদিহিতা নিশ্চিতে রাষ্ট্রযন্ত্রের সকল চালিকা শক্তির ব্যবস্থাপনা প্রযুক্তি/ অটোমেশনের মাধ্যমে পরিচালিত হবে।', 'uploads-image/sliders/1717233455.png', '1', '2024-06-01 03:17:35', '2024-06-02 03:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unions`
--

CREATE TABLE `unions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upazila_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` bigint UNSIGNED NOT NULL,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `active` int NOT NULL DEFAULT '0',
  `approved` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `is_admin` int NOT NULL DEFAULT '0',
  `is_verified` int NOT NULL DEFAULT '0',
  `register_date` date DEFAULT NULL,
  `submit_date` date DEFAULT NULL,
  `expired_date` date DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `member_id`, `name`, `email`, `password`, `phone`, `status`, `active`, `approved`, `is_admin`, `is_verified`, `register_date`, `submit_date`, `expired_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', 'admin@gmail.com', '$2y$10$gNvUbEw5sRQ9O9QhIPlAt.qAFWB0NHMc3LNnFjB6u4ydJ1vfpzvNm', NULL, 0, 0, '0', 0, 0, NULL, NULL, NULL, NULL, '2024-06-01 02:31:39', '2024-06-01 02:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_embed_src` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `youtube_url`, `video_embed_src`, `description`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'লারাভেল 10 জব পোর্টাল প্রকল্প 1', 'https://www.youtube.com/Fdny03reSrQ?si=RwU6TLHIUiRaByg5', 'https://www.youtube.com/embed/Fdny03reSrQ?si=RwU6TLHIUiRaByg5', 'এই ভিডিওতে আমরা বৈশিষ্ট্যযুক্ত কাজের কার্যকারিতা নিয়ে কাজ করব এবং আমরা কাজের স্থিতি (সক্রিয়/ব্লক)ও পরিবর্তন করব। অনুগ্রহ করে আমার চ্যানেলটি সাবস্ক্রাইব করুন এবং নোটিফিকেশন বেলটি টিপুন, যাতে আপনি আমার কোনও নতুন ভিডিও মিস করবেন না', '2024-05-31', '1', '2024-06-01 04:32:05', '2024-06-02 04:14:59'),
(2, 'লারাভেল 10 জব পোর্টাল প্রকল্প  2', 'https://www.youtube.com/Fdny03reSrQ?si=RwU6TLHIUiRaByg5', 'https://www.youtube.com/embed/Fdny03reSrQ?si=RwU6TLHIUiRaByg5', 'এই ভিডিওতে আমরা বৈশিষ্ট্যযুক্ত কাজের কার্যকারিতা নিয়ে কাজ করব এবং আমরা কাজের স্থিতি (সক্রিয়/ব্লক)ও পরিবর্তন করব। অনুগ্রহ করে আমার চ্যানেলটি সাবস্ক্রাইব করুন এবং নোটিফিকেশন বেলটি টিপুন, যাতে আপনি আমার কোনও নতুন ভিডিও মিস করবেন না।3', '2024-05-31', '1', '2024-06-01 04:32:05', '2024-06-02 04:14:36'),
(3, 'লারাভেল 10 জব পোর্টাল প্রকল্প', 'https://youtu.be/Fdny03reSrQ?si=f8N_SSrN6pGF_oYf', 'https://www.youtube.com/embed/Fdny03reSrQ?si=RwU6TLHIUiRaByg5', 'এই ভিডিওতে আমরা বৈশিষ্ট্যযুক্ত কাজের কার্যকারিতা নিয়ে কাজ করব এবং আমরা কাজের স্থিতি (সক্রিয়/ব্লক)ও পরিবর্তন করব। অনুগ্রহ করে আমার চ্যানেলটি সাবস্ক্রাইব করুন এবং নোটিফিকেশন বেলটি টিপুন, যাতে আপনি আমার কোনও নতুন ভিডিও মিস করবেন না', '2024-05-31', '1', '2024-06-01 04:32:05', '2024-06-02 04:14:05'),
(4, 'লারাভেল 10 জব পোর্টাল প্রকল্প', 'https://youtu.be/Fdny03reSrQ?si=f8N_SSrN6pGF_oYf', 'https://www.youtube.com/embed/Fdny03reSrQ?si=RwU6TLHIUiRaByg5', 'এই ভিডিওতে আমরা বৈশিষ্ট্যযুক্ত কাজের কার্যকারিতা নিয়ে কাজ করব এবং আমরা কাজের স্থিতি (সক্রিয়/ব্লক)ও পরিবর্তন করব। অনুগ্রহ করে আমার চ্যানেলটি সাবস্ক্রাইব করুন এবং নোটিফিকেশন বেলটি টিপুন, যাতে আপনি আমার কোনও নতুন ভিডিও মিস করবেন না।3', '2024-05-31', '1', '2024-06-01 04:32:05', '2024-06-02 04:13:21');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `union_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_items`
--
ALTER TABLE `about_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `form_pdfs`
--
ALTER TABLE `form_pdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marquees`
--
ALTER TABLE `marquees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `party_members`
--
ALTER TABLE `party_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_charts`
--
ALTER TABLE `payment_charts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rattings`
--
ALTER TABLE `rattings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unions`
--
ALTER TABLE `unions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_items`
--
ALTER TABLE `about_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `committees`
--
ALTER TABLE `committees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_pdfs`
--
ALTER TABLE `form_pdfs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `marquees`
--
ALTER TABLE `marquees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `party_members`
--
ALTER TABLE `party_members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_charts`
--
ALTER TABLE `payment_charts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rattings`
--
ALTER TABLE `rattings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unions`
--
ALTER TABLE `unions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
