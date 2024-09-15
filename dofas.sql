-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2024 at 04:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jagobd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dofas`
--

CREATE TABLE `dofas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image-mini` varchar(255) DEFAULT NULL,
  `image-large` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dofas`
--

INSERT INTO `dofas` (`id`, `image-mini`, `image-large`, `title`, `description`, `created_at`, `updated_at`) VALUES
(15, 'uploads-image/dofa/প্রবাসীদের_অধিকার_সংস্কারের_১৭_দফা_15.jpg', 'uploads-image/dofa/প্রবাসীদের_অধিকার_সংস্কারের_১৭_দফা_15.jpg', 'প্রবাসীদের অধিকার সংস্কারের ১৭ দফা', '<p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">১। </strong><span style=\"color: black;\">অভিবাসন ব্যয়ের অর্ধেক সরকার থেকে প্রনোদনা হিসেবে নিশ্চিত করা যাতে সরকার বিদেশে শ্রমিক পাঠানোর ব্যয়ে সরাসরি সম্পৃক্ত থেকে স্তরভিত্তিক মধ্যস্বত্ত্বভোগীদের বিলোপ করতে হবে।</span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">২। </strong><span style=\"color: black;\">বিদেশী দুতাবাসগুলোতে প্রবাসীদের কল্যান নিশ্চিতে প্রযুক্তির সহায়তা নিতে হবে এবং আউটসোর্সিং প্রতিষ্ঠানের মাধ্যমে প্রবাসীদের দোরগোড়ায় সেবা নিশ্চিত করতে হবে।</span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">৩। </strong><span style=\"color: black;\">স্থানীয় সরকার নির্বাচনে যোগ্য প্রবাসীদের জন্য ৫% আসন সংরক্ষন রাখতে হবে। জাতীয় সংসদ নির্বাচনের ক্ষেত্রে যোগ্য প্রার্থীদের নির্বাচনী ব্যয় নির্বাচন কমিশনকে বহন করতে হবে।</span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">৪। </strong><span style=\"color: black;\">বিশেষ</span><strong style=\"color: rgb(3, 101, 36);\"> </strong><span style=\"color: black;\">স্মার্ট কার্ডের মাধ্যমে সকল প্রবাসীরা যেন অগ্রাধিকার ভিত্তিতে সরকারী-বেসরকারী প্রতিষ্ঠান, আদালত, ব্যাংকসহ যে কোন প্রতিষ্ঠান থেকে সুবিধা গ্রহন করতে পারে সে ব্যবস্থা করতে হবে।</span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">৫। </strong><span style=\"color: black;\">জনশক্তি রপ্তানিতে সকল ধরনের সিন্ডিকেট বিলুপ্ত এবং পূর্বে সম্পৃক্তদের কঠোর শাস্তি নিশ্চিত করতে হবে।</span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">৬। </strong><span style=\"color: black;\">বিদেশে শ্রমিক পাঠানোর ক্ষেত্রে রিক্রুটিং এজেন্সীদেরকে নজরদারির ক্ষেত্রে কৃত্রিম বুদ্ধিমত্তা ভিত্তিক প্রযুক্তি ব্যবহারের মাধ্যমে অতিরিক্ত অর্থ আদায় ও বিভ্রান্তিকর তথ্য প্রদান বন্ধ করতে হবে। </span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">৭। </strong><span style=\"color: black;\">প্রবাসীদের বাংলাদেশে ও বিদেশে অবস্থানরত অবস্থায় সকল কল্যান নজরদারি করা এবং নিশ্চিতকরণে সেনাবাহিনীর একটি দলকে দায়িত্ব দিতে হবে।</span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">৮। </strong><span style=\"color: black;\">প্রবাসীদের অনলাইন ভোটের&nbsp;মাধ্যমে প্রবাসী কল্যাণ মন্ত্রলায়ের মন্ত্রীর নিয়োগ হতে হবে।</span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">৯। </strong><span style=\"color: black;\">প্রবাসী কল্যাণ ব্যংকের পরিচালনা পর্ষদে প্রবাসীদের প্রতিনিধিত্ব থাকতে হবে।</span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">১০। </strong><span style=\"color: black;\">এয়ারপোর্টে \"প্রবাস লাউঞ্জ\" ব্যবস্থা করতে হবে৷ লাগেজ পরিবহনে সতর্কতা ও সততা নিশ্চিত করে যে কোন ক্ষতিতে \"স্পট ক্যাশ“ ক্ষতিপূরন ব্যবস্থা চালু করতে হবে।</span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">১১। </strong><span style=\"color: black;\">এক যুগ প্রবাসে বৈধভাবে চাকুরী এবং নিয়মিত রেমিট্যান্স পাঠানোর প্রমাণ সাপেক্ষে উক্ত প্রবাসীকে পেনশনের আওতায় আনতে হবে। </span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">১২। </strong><span style=\"color: black;\">প্রবাসীদের অঙ্গহানি কিংবা কর্মক্ষেত্রে মৃত্যু হলে ২০ লক্ষ টাকা ক্ষতিপূরণ প্রদানসহ ৭২ ঘন্টার মধ্যে লাশ দেশে ফেরত পাঠানোর ব্যবস্থা করতে হবে।</span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">১৩। </strong><span style=\"color: black;\">বিদেশে অবস্থিত বাংলাদেশি দূতাবাসে প্রবাসীদের যে কোন যৌক্তিক সমস্যার ক্ষেত্রে ৭২ ঘন্টার মধ্যে পদক্ষেপ নেয়া হয়েছে মর্মে দালিলিক প্রমাণ জনসমক্ষে উপস্থাপন করতে হবে।</span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">১৪। </strong><span style=\"color: black;\">সকল ক্ষেত্রে প্রবাসীদের সাথে সেবা প্রদানকারী সংশ্লিষ্ট সকলকে আচরণগত পরিবর্তন আনতে হবে এবং সম্বোধনে \" স্যার\" কিংবা \"মিষ্টার\" বাধ্যতামূলক&nbsp;করতে&nbsp;হবে। </span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">১৫। </strong><span style=\"color: black;\">সহজভাবে রেমিট্যান্স পাঠানোর ক্ষেত্রে জটিলতা নিরসনে ই-রেমিট্যন্স কার্যক্রম চালু, আকর্ষণীয় প্রণোদনা ঘোষণাসহ প্রবাসে অবস্থানরত শিক্ষিত তরুণদের উদ্যোক্তা হিসেবে তৈরী করার প্রক্রিয়া গ্রহণ করতে হবে।</span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">১৬। </strong><span style=\"color: black;\">বিদেশে যেসব বাংলাদেশী প্রবাসীদের যারা&nbsp;বিভিন্ন প্রকার দালালি, নিরীহ প্রবাসীদের হয়রানি, কিডন্যাপ, হুন্ডি ব্যবসাসহ বিভিন্ন অপকর্মে জড়িত আছে তাদেরকে চিহ্নিত করে আইনের আওতায় আনতে হবে। বাংলাদেশ দূতাবাসে প্রেষণে নিযুক্ত গোয়েন্দাসংস্থার ব্যক্তিদেরকে এই দায়িত্ব দিতে হবে এবং জবাবদিহিতা নিশ্চিত করতে হবে।</span></p><p class=\"ql-align-justify\"><strong style=\"color: rgb(3, 101, 36);\">১৭। </strong><span style=\"color: black;\">প্রবাসী মন্ত্রণালয়ের লিখিত অনুমোদন ছাড়া কোন প্রবাসীর নামে মামলা নেয়া যাবেনা। অনুরূপভাবে প্রবাসীদের সম্পদ ও পরিবারের সদস্যদের জান মালের রক্ষার জন্য প্রতিটি থানায় \"প্রবাসী ওয়ান ষ্টপ সেন্টার“ প্রতিষ্ঠাসহ মোবাইল এপ্লিকেশন ভিত্তিক সেবা চালু করতে হবে। প্রয়োজনে ট্যুরিষ্ট পুলিশের মত\" প্রবাসী পুলিশ“ নামে একটি ডিপার্টমেন্ট খুলতে হবে।</span></p><p><br></p>', '2024-09-15 08:07:35', '2024-09-15 08:07:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dofas`
--
ALTER TABLE `dofas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dofas`
--
ALTER TABLE `dofas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
