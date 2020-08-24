-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 29 يونيو 2020 الساعة 15:46
-- إصدار الخادم: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13080821_paradowdb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo_header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_footer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sldier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_footer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `abouts`
--

INSERT INTO `abouts` (`id`, `logo_header`, `logo_footer`, `sldier`, `facebook_link`, `youtube_link`, `github_link`, `address`, `phone`, `email`, `about_footer`, `created_at`, `updated_at`) VALUES
(5, '1593007711.png', '1593287852.png', '1593007643.jpg', 'https://www.facebook.com/paradow.me/', 'https://www.youtube.com/channel/UCjeiAcdxzRn_fCi1VeobLzg?view_as=subscriber', 'https://github.com/', 'a:2:{s:2:\"en\";s:8:\"mansoura\";s:2:\"ar\";s:16:\"المنصوره\";}', 'a:2:{s:2:\"en\";s:13:\"0101119146893\";s:2:\"ar\";s:26:\"٠١٠١١١٩١٤٦٨٩٣\";}', 'paradow.me@gmail.com', 'a:2:{s:2:\"en\";s:100:\"ِParadow is a device that allows anyone to draw anything on a wall or a white board for decoration.\";s:2:\"ar\";s:96:\"بارادو هو جهاز يمكن لأي شخص ان يرسم أي \r\n شئ علي الحائط\";}', '2020-04-03 19:25:43', '2020-06-27 19:57:32');

-- --------------------------------------------------------

--
-- بنية الجدول `about_pages`
--

CREATE TABLE `about_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `about_pages`
--

INSERT INTO `about_pages` (`id`, `about_title`, `about_subtitle`, `about_text`, `created_at`, `updated_at`) VALUES
(10, 'a:2:{s:2:\"en\";s:4:\"what\";s:2:\"ar\";s:8:\"ماذا\";}}', 'a:2:{s:2:\"en\";s:5:\"what2\";s:2:\"ar\";s:9:\"ماذا1\";}', 'a:2:{s:2:\"en\";s:11:\"avshdjfkglh\";s:2:\"ar\";s:20:\"رءلايؤبرمل\";}', '2020-04-03 19:33:06', '2020-05-04 20:06:13'),
(12, 'a:2:{s:2:\"en\";s:3:\"who\";s:2:\"ar\";s:4:\"من\";}}', 'a:2:{s:2:\"en\";s:4:\"who1\";s:2:\"ar\";s:5:\"من1\";}', 'a:2:{s:2:\"en\";s:16:\"whojhbgvjEnglish\";s:2:\"ar\";s:28:\"كمسنيتبالتنArabic\";}', '2020-04-03 20:49:33', '2020-04-03 20:49:33'),
(13, 'a:2:{s:2:\"en\";s:5:\"where\";s:2:\"ar\";s:6:\"أين\";}', 'a:2:{s:2:\"en\";s:6:\"where1\";s:2:\"ar\";s:7:\"اين1\";}', 'a:2:{s:2:\"en\";s:22:\"Englishzsdcfvgbhjkjhds\";s:2:\"ar\";s:46:\"سيبلاىتةنمكطمنتالبيسArabic\";}', '2020-04-10 08:17:54', '2020-04-10 08:17:54'),
(17, 'a:2:{s:2:\"en\";s:4:\"what\";s:2:\"ar\";s:8:\"ماذا\";}', 'a:2:{s:2:\"en\";s:3:\"fff\";s:2:\"ar\";s:8:\"ماذا\";}', 'a:2:{s:2:\"en\";s:14:\"Englishhhhjuok\";s:2:\"ar\";s:24:\"Arabicختنللعهبر\";}', '2020-05-07 07:40:42', '2020-05-07 07:40:42');

-- --------------------------------------------------------

--
-- بنية الجدول `about_titles`
--

CREATE TABLE `about_titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `mainTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `about_titles`
--

INSERT INTO `about_titles` (`id`, `mainTitle`, `created_at`, `updated_at`) VALUES
(5, 'a:2:{s:2:\"en\";s:4:\"what\";s:2:\"ar\";s:8:\"ماذا\";}', '2020-04-03 19:28:57', '2020-04-03 19:28:57'),
(6, 'a:2:{s:2:\"en\";s:3:\"who\";s:2:\"ar\";s:4:\"من\";}', '2020-04-03 20:49:08', '2020-04-03 20:49:08'),
(7, 'a:2:{s:2:\"en\";s:5:\"where\";s:2:\"ar\";s:6:\"أين\";}', '2020-04-10 08:17:30', '2020-04-10 08:17:30'),
(8, 'a:2:{s:2:\"en\";s:5:\"ffdff\";s:2:\"ar\";s:5:\"dssff\";}', '2020-05-04 20:28:59', '2020-05-04 20:28:59'),
(9, 'a:2:{s:2:\"en\";s:5:\"ffdff\";s:2:\"ar\";s:12:\"الالال\";}', '2020-05-07 05:21:09', '2020-05-07 05:21:09');

-- --------------------------------------------------------

--
-- بنية الجدول `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `carts`
--

INSERT INTO `carts` (`id`, `cat_id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, '13', 5, '2020-04-05 21:11:39', '2020-04-05 21:11:39'),
(5, ',13,11,10', 54, '2020-05-02 05:59:54', '2020-05-03 02:34:08'),
(10, '8', 1, '2020-06-24 22:05:34', '2020-06-24 22:05:34'),
(11, '', 72, '2020-06-27 21:09:48', '2020-06-27 21:11:19');

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `offer_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `categoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double NOT NULL DEFAULT 0,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `priceAfterOff` int(11) NOT NULL DEFAULT 0,
  `state` tinyint(1) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `imageOnWall` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `no_of_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `favProduct` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `offer_id`, `categoryName`, `title`, `rate`, `description`, `price`, `priceAfterOff`, `state`, `image`, `is_approved`, `imageOnWall`, `width`, `height`, `no_of_color`, `views`, `favProduct`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'other', 'a:2:{s:2:\"en\";s:7:\"Paradow\";s:2:\"ar\";s:12:\"بارادو\";}', 0, 'a:2:{s:2:\"en\";s:18:\"Wall Drawing Robot\";s:2:\"ar\";s:35:\"جهاز رسم علي الحائط\";}', 185, 0, 1, '1593006692.png', 0, '', '', '', 'one', 8, 0, '2020-06-23 10:53:01', '2020-06-29 14:39:59'),
(3, 1, 0, 'animal', 'a:2:{s:2:\"en\";s:10:\"Cute Panda\";s:2:\"ar\";s:10:\"دبدوب\";}', 0, 'a:2:{s:2:\"en\";s:10:\"Cute Panda\";s:2:\"ar\";s:13:\"دب لطيف\";}', 10, 0, 0, '1593120195.svg', 1, '1593120195.png', '', '', 'one', 26, 1, '2020-06-21 01:27:47', '2020-06-29 14:39:51'),
(4, 1, 0, 'animal', 'a:2:{s:2:\"en\";s:9:\"Butterfly\";s:2:\"ar\";s:21:\"فراشه أموره\";}', 0, 'a:2:{s:2:\"en\";s:9:\"Butterfly\";s:2:\"ar\";s:10:\"فراشه\";}', 20, 0, 0, '1593120477.svg', 1, '1593120477.png', '', '', 'one', 23, 1, '2020-06-21 01:28:36', '2020-06-29 13:43:46'),
(5, 1, 0, 'other', 'a:2:{s:2:\"en\";s:7:\"Believe\";s:2:\"ar\";s:12:\"نص Believe\";}', 0, 'a:2:{s:2:\"en\";s:12:\"Believe text\";s:2:\"ar\";s:12:\"نص Believe\";}', 0, 0, 0, '1593125540.svg', 1, '1593125540.png', '', '', 'one', 36, 2, '2020-06-21 01:29:02', '2020-06-29 13:44:30'),
(10, 1, 10, 'other', 'a:2:{s:2:\"en\";s:16:\"Just breath Text\";s:2:\"ar\";s:15:\"فقط تنفس\";}', 0, 'a:2:{s:2:\"en\";s:16:\"Just breath Text\";s:2:\"ar\";s:22:\"نص.. فقط تنفس\";}', 13, 11, 0, '1593123564.svg', 1, '1593123564.png', '0', '0', 'one', 13, 0, '2020-06-24 17:45:06', '2020-06-27 17:33:02'),
(11, 1, 9, 'other', 'a:2:{s:2:\"en\";s:19:\"Life is better Text\";s:2:\"ar\";s:21:\"الحياه افضل\";}', 0, 'a:2:{s:2:\"en\";s:35:\"Life is better when you\'re laughing\";s:2:\"ar\";s:41:\"الحياه افضل عندما تضحك\";}', 14, 7, 0, '1593123145.svg', 1, '1593123145.png', '0', '0', 'one', 15, 2, '2020-06-24 18:49:32', '2020-06-29 13:44:43'),
(12, 1, 10, 'other', 'a:2:{s:2:\"en\";s:12:\"Coffee First\";s:2:\"ar\";s:21:\"القهوه أولا\";}', 0, 'a:2:{s:2:\"en\";s:17:\"Coffee First text\";s:2:\"ar\";s:21:\"القهوه أولا\";}', 12, 10, 0, '1593122746.svg', 1, '1593122746.png', '0', '0', 'one', 1, 0, '2020-06-24 19:08:46', '2020-06-27 17:12:16'),
(13, 1, 0, 'other', 'a:2:{s:2:\"en\";s:4:\"fjkl\";s:2:\"ar\";s:8:\"fghnm,l.\";}', 0, 'a:2:{s:2:\"en\";s:4:\"fgl;\";s:2:\"ar\";s:8:\"fghjl.;/\";}', 34, 0, 0, '1593120747.svg', 1, '1593120747.png', '0', '0', 'one', 16, 1, '2020-06-24 19:17:00', '2020-06-27 23:32:29'),
(14, 1, 0, 'people', 'a:2:{s:2:\"en\";s:5:\"color\";s:2:\"ar\";s:3:\"ت1\";}', 0, 'a:2:{s:2:\"en\";s:9:\"offer 50%\";s:2:\"ar\";s:26:\"زمورنللاتبنبن\";}', 22, 0, 0, '1593035525.svg', 1, '1593035525.jpg', '0', '0', 'one', 82, 1, '2020-06-24 21:52:05', '2020-06-29 14:39:35'),
(15, 66, 10, 'animal', 'a:2:{s:2:\"en\";s:11:\"Small Kitty\";s:2:\"ar\";s:17:\"قطه صغيره\";}', 0, 'a:2:{s:2:\"en\";s:11:\"Small Kitty\";s:2:\"ar\";s:21:\"قطه صغيرههه\";}', 10, 8, 0, '1593119805.svg', 1, '1593119805.jpg', '0', '0', 'one', 9, 0, '2020-06-25 20:26:58', '2020-06-29 13:44:20'),
(16, 66, 9, 'nature', 'a:2:{s:2:\"en\";s:4:\"Tree\";s:2:\"ar\";s:8:\"fvgbhnjm\";}', 0, 'a:2:{s:2:\"en\";s:19:\"Tree in office room\";s:2:\"ar\";s:8:\"fvgbhnjm\";}', 20, 11, 0, '1593119822.svg', 1, '1593119822.jpg', '0', '0', 'one', 30, 1, '2020-06-25 20:48:12', '2020-06-29 15:37:25');

-- --------------------------------------------------------

--
-- بنية الجدول `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` int(10) UNSIGNED NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `user_name`, `parent_id`, `body`, `commentable_id`, `commentable_type`, `created_at`, `updated_at`) VALUES
(32, 66, 'created_at', NULL, 'Nice', 14, 'App\\Category', '2020-06-26 15:48:29', '2020-06-26 15:48:42'),
(34, 75, 'aya mamdouh', NULL, 'nice', 4, 'App\\Category', '2020-06-29 13:43:35', '2020-06-29 13:43:35');

-- --------------------------------------------------------

--
-- بنية الجدول `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msgContent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `msgContent`, `created_at`, `updated_at`) VALUES
(1, 'mahewahed@yahoo.ccom', 'asdcfvgbhnj', '2020-03-27 20:26:07', '2020-03-27 20:26:07'),
(2, 'mahewahed@yahoo.ccom', 'zxcvb', '2020-03-27 20:26:47', '2020-03-27 20:26:47'),
(3, 'mahewahed@yahoo.ccom', 'sdfghnjmksd', '2020-03-27 20:28:11', '2020-03-27 20:28:11'),
(4, 'yousseftaha@moakt.cc', '2020كزموةنمىمنىتنى', '2020-05-02 21:02:16', '2020-05-02 21:02:16'),
(5, 'kemo.shabara@gmail.com', 'لو سمحت عايز اعمل اوردر', '2020-06-26 11:43:25', '2020-06-26 11:43:25');

-- --------------------------------------------------------

--
-- بنية الجدول `downloads`
--

CREATE TABLE `downloads` (
  `id` int(10) UNSIGNED NOT NULL,
  `text_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `downloads`
--

INSERT INTO `downloads` (`id`, `text_en`, `image`, `width`, `height`, `created_at`, `updated_at`) VALUES
(1, 'a:3:{s:2:\"en\";s:10:\"hhgftghjhb\";s:2:\"es\";s:10:\"edrftghyuj\";s:2:\"ar\";s:12:\"منتالب\";}', '1585276208.418u78Dg9rL.jpg', '492', '500', '2020-03-27 00:30:08', '2020-03-27 00:30:08');

-- --------------------------------------------------------

--
-- بنية الجدول `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `features`
--

INSERT INTO `features` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(23, '1593007748.png', 'a:2:{s:2:\"en\";s:5:\"Color\";s:2:\"ar\";s:10:\"اللون\";}', 'a:2:{s:2:\"en\";s:95:\"You have a lot of images you can choose from it or upload your own photos to draw in your home.\";s:2:\"ar\";s:177:\"نوفر لك العديد من الصور التي تستطيع اختيارها وتجربتها علي حائط منزلك وايضا يمكنك رفع صوره خاصه بك\";}', '2020-04-08 03:22:40', '2020-06-24 14:09:08'),
(24, '1593128127.png', 'a:2:{s:2:\"en\";s:8:\"Feature2\";s:2:\"ar\";s:9:\"ميزه2\";}', 'a:2:{s:2:\"en\";s:116:\"We provide Augmented Reality technology by choosing a photo from a mobile application and then show it on your wall.\";s:2:\"ar\";s:170:\"بنوفر لك علي تطبيق الموبيل تكنولوجيا الواقع المعزز من خلال اختيارك لصوره وتجربتها علي الحائظ\";}', '2020-06-25 23:35:27', '2020-06-25 23:35:27'),
(25, '1593128243.png', 'a:2:{s:2:\"en\";s:8:\"Feature3\";s:2:\"ar\";s:9:\"ميزه3\";}', 'a:2:{s:2:\"en\";s:88:\"You can make an order for a device and we provide for you a cheapest price and shipping.\";s:2:\"ar\";s:74:\"تقدر تطلب الجهاز بأرخص سعر للجهاز وللشحن\";}', '2020-06-25 23:37:23', '2020-06-25 23:37:23'),
(26, '1593128328.png', 'a:2:{s:2:\"en\";s:8:\"Feature4\";s:2:\"ar\";s:9:\"ميزه4\";}', 'a:2:{s:2:\"en\";s:103:\"If you a proffessional graphic designer, you have a chance for selling your work here and make a money.\";s:2:\"ar\";s:108:\"لو انت مصمم محترف ، فبنوفرلك فرصه انك تعرض أعمالك ومشاركتها\";}', '2020-06-25 23:38:48', '2020-06-25 23:38:48');

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_03_15_152244_create_users_table', 1),
(2, '2020_03_15_155339_create_downloads_table', 1),
(3, '2020_03_15_214234_create_categories_table', 1),
(4, '2020_03_16_135058_create_abouts_table', 2),
(5, '2020_03_16_144523_create_about_pages_table', 3),
(6, '2020_03_16_144645_create_abouts_table', 4),
(7, '2020_03_16_222321_create_categories_table', 5),
(8, '2020_03_25_223639_create_categories_table', 6),
(9, '2020_03_26_221629_create_features_table', 7),
(10, '2020_03_27_002742_create_about_titles_table', 8),
(11, '2020_03_27_015055_create_features_table', 9),
(12, '2020_03_27_201708_create_offers_table', 10),
(13, '2020_03_27_221949_create_contacts_table', 10),
(14, '2020_03_28_013001_create_offers_table', 11),
(15, '2020_03_28_020115_create_categories_table', 12),
(16, '2020_03_28_042132_create_categories_table', 13),
(17, '2020_03_28_044021_create_categories_table', 14),
(18, '2020_03_29_001525_create_carts_table', 15),
(19, '2020_06_14_230818_create_photos_table', 16),
(20, '2020_06_15_000201_create_comments_table', 16),
(21, '2020_06_15_001536_create_stories_table', 16),
(22, '2020_06_15_185908_create_social_providers_table', 16),
(23, '2020_06_16_045852_create_user_follows_table', 16),
(24, '2020_06_18_160552_create_categories_table', 16),
(25, '2020_06_21_032220_create_categories_table', 17),
(26, '2020_06_21_065244_create_password_resets_table', 18),
(27, '2020_06_21_165851_create_user_follows_table', 19),
(28, '2020_06_21_222843_create_orders_table', 20),
(29, '2020_06_22_013516_create_products_table', 21),
(30, '2020_06_22_095739_create_carts2_table', 22),
(31, '2020_06_22_131755_create_password_resets_table', 23),
(32, '2020_06_23_132457_create_orders_table', 24);

-- --------------------------------------------------------

--
-- بنية الجدول `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('436767a8-06cc-42d8-a395-68702423f78b', 'App\\Notifications\\msgNotify', 1, 'App\\User', '{\"id\":2,\"is_approved\":1}', NULL, '2020-06-24 13:56:32', '2020-06-24 13:56:32'),
('07d7e7f7-bda7-4cf6-ace4-57451fc8e429', 'App\\Notifications\\msgNotify', 66, 'App\\User', '{\"id\":15,\"is_approved\":1}', NULL, '2020-06-25 20:28:17', '2020-06-25 20:28:17'),
('6a5cea5b-a973-4764-86e3-bcbd5c721125', 'App\\Notifications\\msgNotify', 66, 'App\\User', '{\"id\":16,\"is_approved\":1}', NULL, '2020-06-25 20:49:14', '2020-06-25 20:49:14'),
('51274c0b-bf3a-4dd3-8f3b-db7b8ee332e7', 'App\\Notifications\\msgNotify', 1, 'App\\User', '{\"id\":3,\"is_approved\":1}', NULL, '2020-06-25 21:24:11', '2020-06-25 21:24:11'),
('aa42ab45-3828-4b66-a308-210fb6a56b53', 'App\\Notifications\\msgNotify', 1, 'App\\User', '{\"id\":13,\"is_approved\":1}', NULL, '2020-06-25 22:52:28', '2020-06-25 22:52:28'),
('aaae0999-9932-4715-9e78-85fbc5ea5e52', 'App\\Notifications\\msgNotify', 1, 'App\\User', '{\"id\":12,\"is_approved\":1}', NULL, '2020-06-25 22:52:29', '2020-06-25 22:52:29'),
('ead97590-abf1-4c20-802b-873c032d63c9', 'App\\Notifications\\msgNotify', 1, 'App\\User', '{\"id\":11,\"is_approved\":1}', NULL, '2020-06-25 22:52:34', '2020-06-25 22:52:34'),
('774ad5e5-0573-422a-863c-9e51114ca4f2', 'App\\Notifications\\msgNotify', 1, 'App\\User', '{\"id\":4,\"is_approved\":1}', NULL, '2020-06-25 22:52:49', '2020-06-25 22:52:49'),
('5bfa0ea5-c5a2-431a-a556-820848f4ee41', 'App\\Notifications\\msgNotify', 1, 'App\\User', '{\"id\":5,\"is_approved\":1}', '2020-06-27 16:49:46', '2020-06-25 22:52:56', '2020-06-27 16:49:46'),
('b508c40c-b04e-4a1a-8d4b-34cecb637fe5', 'App\\Notifications\\msgNotify', 66, 'App\\User', '{\"id\":16,\"is_approved\":1}', NULL, '2020-06-25 22:53:04', '2020-06-25 22:53:04'),
('0dc72d0c-201e-4dab-ba96-3757e1eac1b6', 'App\\Notifications\\msgNotify', 66, 'App\\User', '{\"id\":15,\"is_approved\":1}', NULL, '2020-06-25 22:53:10', '2020-06-25 22:53:10'),
('cc584a0a-c3d4-419f-b442-5a78e4569da8', 'App\\Notifications\\followNotify', 66, 'App\\User', '{\"id\":66,\"user_id\":\"66\",\"follow_id\":\"1\"}', NULL, '2020-06-27 01:10:38', '2020-06-27 01:10:38'),
('395daed4-e2dd-4666-9e81-939e78dde2b0', 'App\\Notifications\\followNotify', 66, 'App\\User', '{\"id\":66,\"user_id\":\"66\",\"follow_id\":\"1\"}', NULL, '2020-06-27 16:50:35', '2020-06-27 16:50:35'),
('a4f13d35-9730-4b7d-917a-5ebe490392d0', 'App\\Notifications\\followNotify', 66, 'App\\User', '{\"id\":66,\"user_id\":\"66\",\"follow_id\":\"1\"}', NULL, '2020-06-29 13:46:17', '2020-06-29 13:46:17'),
('3d6614c7-d540-46c1-ae35-eecc933431d3', 'App\\Notifications\\followNotify', 66, 'App\\User', '{\"id\":66,\"user_id\":\"66\",\"follow_id\":\"1\"}', NULL, '2020-06-29 15:37:01', '2020-06-29 15:37:01'),
('e76d9bc2-eda6-4789-90c9-b7890ba0e25c', 'App\\Notifications\\followNotify', 75, 'App\\User', '{\"id\":76,\"user_id\":\"75\",\"follow_id\":\"66\"}', NULL, '2020-06-29 15:38:16', '2020-06-29 15:38:16');

-- --------------------------------------------------------

--
-- بنية الجدول `offers`
--

CREATE TABLE `offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `offers`
--

INSERT INTO `offers` (`id`, `title`, `description`, `offer`, `created_at`, `updated_at`) VALUES
(9, 'a:2:{s:2:\"en\";s:5:\"color\";s:2:\"ar\";s:11:\"عرض 2020\";}', 'a:2:{s:2:\"en\";s:9:\"offer 50%\";s:2:\"ar\";s:10:\"خصم 20%\";}', 44, '2020-06-22 11:00:52', '2020-06-22 11:00:52'),
(10, 'a:2:{s:2:\"en\";s:8:\"colorwer\";s:2:\"ar\";s:11:\"عرض 2020\";}', 'a:2:{s:2:\"en\";s:12:\"offer 50% 11\";s:2:\"ar\";s:10:\"خصم 20%\";}', 13, '2020-06-22 11:01:53', '2020-06-22 11:01:53'),
(11, 'a:2:{s:2:\"en\";s:10:\"colorwerdd\";s:2:\"ar\";s:11:\"عرض 2020\";}', 'a:2:{s:2:\"en\";s:12:\"offer 50% 11\";s:2:\"ar\";s:11:\"خصم 20%d\";}', 23, '2020-06-22 11:02:02', '2020-06-22 11:02:02');

-- --------------------------------------------------------

--
-- بنية الجدول `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `orders`
--

INSERT INTO `orders` (`id`, `order`, `user_id`, `phone`, `city`, `address`, `notes`, `created_at`, `updated_at`) VALUES
(30, '1', 66, '01209873633', 'Egypt', 'Mansoura', NULL, '2020-06-28 18:24:23', '2020-06-28 18:24:23'),
(32, '1', 75, '01225476810', 'Egypt', 'mansoura', 'Nothing', '2020-06-28 18:48:01', '2020-06-28 18:48:01');

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('paradow.me@gmail.com', '$2y$10$tp6NNAkx6KRZUJ9jAdYqHeqKsF9uWKvBv9GFEOl.CsSKpdKyOqjy6', '2020-06-28 20:42:13'),
('ayayoyo510@gmail.com', '$2y$10$7RFHsquQOf1/MRFu2VUEWu7EzaA8TTxcTEYSPo1quhJPyUU7UDkh6', '2020-06-28 20:27:57');

-- --------------------------------------------------------

--
-- بنية الجدول `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `photos`
--

INSERT INTO `photos` (`id`, `user_id`, `title`, `image`, `width`, `height`, `no_of_color`, `created_at`, `updated_at`) VALUES
(1, 1, 'nature', '1592736285.jpg', '250', '400', 'one', '2020-06-21 08:44:45', '2020-06-21 08:44:45'),
(3, 66, 'animal', '1593436772.jpg', '200', '100', 'one', '2020-06-29 13:19:32', '2020-06-29 13:19:32'),
(4, 66, 'people', '1593437330.jpg', '100', '1100', 'one', '2020-06-29 13:28:50', '2020-06-29 13:28:50'),
(5, 66, 'people', '1593437502.jpg', '100', '11', 'one', '2020-06-29 13:31:42', '2020-06-29 13:31:42'),
(6, 75, 'nature', '1593437739.jpg', '300', '400', 'two', '2020-06-29 13:35:39', '2020-06-29 13:35:39'),
(7, 75, 'people', '1593437938.jpg', '250', '350', 'two', '2020-06-29 13:38:58', '2020-06-29 13:38:58'),
(8, 75, 'people', '1593438108.jpg', '250', '350', 'two', '2020-06-29 13:41:48', '2020-06-29 13:41:48'),
(9, 66, 'people', '1593438204.jpg', '1', '11', 'one', '2020-06-29 13:43:24', '2020-06-29 13:43:24'),
(10, 66, 'people', '1593438513.jpg', '11', '1', 'one', '2020-06-29 13:48:33', '2020-06-29 13:48:33'),
(11, 66, 'people', '1593438971.jpg', '20', '20', 'one', '2020-06-29 13:56:11', '2020-06-29 13:56:11');

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'paradow', '1592792037.jpg', 150, '2020-06-22 00:13:57', '2020-06-22 00:13:57');

-- --------------------------------------------------------

--
-- بنية الجدول `social_providers`
--

CREATE TABLE `social_providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `stories`
--

CREATE TABLE `stories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `stories`
--

INSERT INTO `stories` (`id`, `user_id`, `name`, `story`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Company', 'it\'s a very Good Robot , all decoration companies should use it ,\r\nwhich is cheap and fast to finish draw .', '1593123564.png', '2020-06-21 00:52:49', '2020-06-21 00:52:49'),
(2, 1, 'Restaurant', 'This robot help me to finish the wall decoration in my Restaurant  .\r\nit is very useful and use it so easy .', '1593119822.jpg', '2020-06-21 00:54:47', '2020-06-21 00:54:47'),
(3, 1, 'Home', 'PARADOW is the best solution for everyone who want to change the decor of home .\r\ni recommend with this amazing robot .', '1593122746.png', '2020-06-21 00:58:35', '2020-06-21 00:58:35');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `repassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) DEFAULT 0,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creditNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favProduct` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitor` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `repassword`, `role`, `photo`, `phone`, `city`, `creditNo`, `favProduct`, `visitor`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'paradow', 'paradow.me@gmail.com', '$2y$10$/9Y7k.eXulR6ci9o7id/putlWB/PSikpTNDGDmiFdrvnJa74o73AS', '$2y$10$/9Zl.tSihnAwHDiJD58JMOy41oqyubbnYWBRZzK5pmMJNkU2abCFa', 1, '1593018269.png', '01097987069', 'Egypt', '012223', '3,4,6,5', 0, '9CLL4gtlqw7x48pkKWskke675vWU8Mr9vvDWefjkX7Tl1oeRwmlFMw8ksw1k', '2020-03-15 22:09:21', '2020-06-29 15:33:36'),
(3, 'maitarek98', 'maitarek_1998@yahoo.com', '$2y$10$y9qhGwscgp23705gfT/OgONEt7SPETG4XNkq/YbSZrbQrvuIVBtTm', '$2y$10$jAALqcXsntzAy2hpBV11EeiDmIlNCjUr/ZZao.pbdrlITcRy1vnLe', 0, '1593011308.png', '01097987069', NULL, NULL, '1,2,3', 0, NULL, '2020-03-17 10:32:25', '2020-06-24 15:08:28'),
(4, 'maitarektt', 'maita22rek@yahoo.com', '$2y$10$1bc/c5LgYqh83TldHfToIeuUk3JLrTu.82g.lJLr1p15300fFAEQq', '$2y$10$XNUQfx/.zh8knnxlnZVLMO9qYb67uU8Wne92paqfsydGx7c79KvoS', 0, 'person2.png', NULL, NULL, NULL, ',1,2,3', 0, NULL, '2020-04-05 21:08:56', '2020-04-05 21:08:56'),
(5, 'Mahmoud Ali', 'mahmoudalee2@gmail.com', '$2y$10$kxc3hHepgDluoyqT2HgSmOMbNMkGod3KnvVGWpmxVrtB5Y87Z052S', '$2y$10$vJGKmu.q/d3XW8VaALTIl./o859e.9fX2AyZdt1fqIFSyzMOdOA.S', 0, 'person2.png', NULL, NULL, NULL, ',12,11,5', 1, '3NxC2BBhBLipgEhhy11V0LrTREFlAw6BTZZImbkcLm6TUtsvHikTVsSMWsKS', '2020-04-05 21:09:03', '2020-06-27 23:42:06'),
(6, 'لمياء عبد الحميد احمد', 'lamia02468@gmail.com', '$2y$10$BiDkrNuyJVXm5SdE.rOA7.YDnz17EJQqq4/3AlsWxW1.XWXcpX1ZW', '$2y$10$L84jhVeoalknuyYr.I93yObNhViPGk2DBhpONBP/CzQ3qremSRaNO', 0, 'person2.png', NULL, NULL, NULL, ',1,2', 0, 'AkFXUP0JvQk0W9LCPDKS5IKy6Ztip3gLVd5APqpFJn9mGZFYrI5d9IdtfMph', '2020-04-06 18:51:14', '2020-04-06 18:53:48'),
(10, 'ahmed', 'ahmedkk@gmail.com', '$2y$10$foiyV8KsRQLH.E5rDkItdOMMEziCwXg4rJfzBI5E97cgqKy09n3rG', '$2y$10$2mJZ7e7ePUo2NRAzytbWbOVRHL/AKf9qFzHXaqd8rPh5rJrD1h6FG', 70, 'user_img.png', NULL, NULL, NULL, '1,2', 0, NULL, '2020-04-06 22:06:26', '2020-04-06 22:06:26'),
(11, 'ahmed', 'ahmed23@gmail.com', '$2y$10$2HT.2btZJMBBHKPXWthvBOkX.TCfFGc0x7m9gkIYCfyvbecdt3522', '$2y$10$KEES0P4tI9Z6igB8JTqDmuN9J3jHV79crLlPxURWrO.1cRaYkAaEe', 14, 'user_img.png', NULL, NULL, NULL, '1,2', 0, NULL, '2020-04-06 22:08:38', '2020-04-06 22:08:38'),
(13, 'ahmed', 'mahmoud1010@gmail.com', '$2y$10$fPWuytR3qYDPb6G5phS/uunaekjHR0KLXZ8TwXb8rstA2aU4c2CpC', '$2y$10$77FO1axl..rwuyzlk1ZgYehITRANvjEC3r4TZryZq4dk9j3hpv/Be', 28, 'user_img.png', NULL, NULL, NULL, '1,2', 0, NULL, '2020-04-06 22:19:12', '2020-04-06 22:19:12'),
(14, 'mahmoud', 'mahmoud2010@gmail.com', '$2y$10$uybBitNN.UQxrJC5IYa5Keo75hfI2sN/B9YxzUKCP6pk1zk39Qs.C', '$2y$10$8pGaOmsRAEp4FPhNCc.ElOuDaGDjBKwv9pVVTLDm8m03Cdd1fNhp2', 13, 'user_img.png', NULL, NULL, NULL, '1,2', 0, NULL, '2020-04-06 22:23:49', '2020-04-06 22:23:49'),
(15, 'ahmed', 'mahmoud2019@gmail.com', '$2y$10$d3ymshGFSqstWjH/chGWiexq/Fnt/4RaM48SB/RkZ5oTwXaPufkWe', '$2y$10$GuGxu49i6j.CvhGzESw3d.N0/c1QRXfAn2HNape6yNlaO8ieLPJQm', 13, 'user_img.png', NULL, NULL, NULL, '1,2', 0, NULL, '2020-04-06 22:24:41', '2020-04-06 22:24:41'),
(16, 'alex', 'alex@gmail.com', '$2y$10$Y1A/PcavfkozLfmN2poWG.kX.GB/cUTrswnbS8vDbe1b1zQoYSXom', '$2y$10$LseZigxfqPKe.iz88qzEZOu3XjEa9rT61eDq8P0Bq/KBnOLU2kxGy', 0, 'user_img.png', NULL, NULL, NULL, '1,2', 0, NULL, '2020-04-06 22:36:16', '2020-04-06 22:36:16'),
(17, 'mohamed', 'mohamed998@yahoo.com', '$2y$10$NIB4piMUvw647hNKCeR2FuZcGLrIRuw2eEODHk1yX4/uT/vAGV4h6', '$2y$10$fmgS/nKsdL27pRGcvqk4XusPD7wJwlOXrF3xYYSixt6Miyl7U5z22', 0, 'person2.png', NULL, NULL, NULL, '1,2', 0, 'UMeheH0VBcz9J7g8JQFJUw25mtZqywqzJFxSjh17F21XVfYRWazTzfTrnnjC', '2020-04-06 22:54:21', '2020-04-06 23:12:30'),
(18, 'paradow1', 'paradow1.me@gmail.com', '$2y$10$5ZsBYbWj8ZqzyQxvQQbMZeJed7/lHs0b/q9vzL9S8rVX4Qz6TaCfG', '$2y$10$lT9GegSCV2Zh.4bhLBWree2ju.5.NuHA8wg6T9V2NpitrwiWXkLcu', NULL, 'user_img.png', NULL, NULL, NULL, '1,2', 0, NULL, '2020-04-06 22:58:35', '2020-04-06 22:58:35'),
(19, 'paradow2', 'paradow2.me@gmail.com', '$2y$10$WXe7ctHUvGKxuKZMQYusdOmvki0nqk9R8CEwnuFwZszwTUXxJBVMS', '$2y$10$dDXXMJYRwsX4Oqn9Gkaz4.mwlBcpmVgr1augCglBkm8RVgpUoeEBO', NULL, 'user_img.png', NULL, NULL, NULL, NULL, 0, NULL, '2020-04-06 23:31:05', '2020-04-06 23:31:05'),
(20, 'ahmed111', 'ahmedabou@yahoo.com', '$2y$10$0GuLLtR4qFYxaaVYCyIkWewsbgy/W.uFs8ZIaZPQfbgVjK30xzT1C', '$2y$10$A5Lbth0zVSrhjtnrXuB8uuaWZ0/X7eUev9YtCksQzp/I8sktidMCW', NULL, 'user_img.png', NULL, NULL, NULL, NULL, 0, NULL, '2020-04-06 23:58:01', '2020-04-06 23:58:01'),
(21, 'paradow', 'paradow@gmail.com', '$2y$10$4ThnEFCwzkx0200SpuIGGO4LMFx3P0JaS0aKFeq8f90ChC.Y6rtwO', '$2y$10$9YG8kvoP045jjGnPb7HNwuKwBNf8v1j58TE7g2/.8d6ntXNTgmiI.', NULL, 'user_img.png', NULL, NULL, NULL, NULL, 0, NULL, '2020-04-06 23:58:20', '2020-04-06 23:58:20'),
(22, 'ahmed111', 'ahmedabo1111u@yahoo.com', '$2y$10$cOgKant8V2a5GcSzaXpErO8iDm9zgAJGCjBR0jpfWYxBjw6xcsz1q', '$2y$10$F5BRWv.OM2jeT/GZaCAkM.EYJ1oMDz5sGq3geZYHuj9oSrETVn53i', NULL, 'user_img.png', NULL, NULL, NULL, NULL, 0, NULL, '2020-04-07 00:00:12', '2020-04-07 00:00:12'),
(23, 'paradow', 'paradoww@gmail.com', '$2y$10$1DMq9MZtd/BvtHNh9FhBPeJQp7.pmzWwsvlIhp76MzGB3/yJdpoCC', '$2y$10$bnuFtf7ExnsfQZj.FubMGuWzpdEQOvsTEehvcvumqa6zm052rfvc.', NULL, 'user_img.png', NULL, NULL, NULL, NULL, 0, NULL, '2020-04-07 00:00:45', '2020-04-07 00:00:45'),
(33, 'Mahmoud Salama', 'mahmoud@mail.com', '$2y$10$8g08HSakRnErAa/gckbSAOrYYaeOmHaGLNLKA.6EfAc0OmuURY/cK', '$2y$10$.715pSbuATSnkTofwWYMT.SpjFcM/Oy6Jqgnd5sgCkGqP3HlMAKzO', NULL, 'user_img.png', NULL, NULL, NULL, NULL, 0, NULL, '2020-05-01 01:38:37', '2020-05-01 01:38:37'),
(53, 'mai', 'ma112331jj2@yahoo.com', '$2y$10$Dd8PGDmVV7rfmPBg40Pnl.JE/iR58xsYBfiVljI9PPfvvRN.foRTK', '$2y$10$JzJJW.aRYILeAVK30jczL.DObLQniHS0X4vu04s5neZDmrbX2Cmdi', NULL, 'person2.png', NULL, NULL, NULL, NULL, 0, '4ktN2z4n3jsoqSTYhEzFPQZS4zsiHtWGUVuLD9NUp5bWVnjBSm7GthMcuScw', '2020-05-02 00:24:00', '2020-05-02 00:24:00'),
(54, 'youssef', 'yousseftaha@moakt.cc', '$2y$10$uawP3sZ.aT3bYDiovduqreENIhlrb.aDfXvuQnP3vLf/CzsGn6W/u', '$2y$10$B0Ocwk7xabyg2ZZ7VBzSgujhYXNceSOIwsJHSB73lYNDsXIjyu3b.', NULL, 'person2.png', NULL, NULL, NULL, '', 1, NULL, '2020-05-02 05:54:28', '2020-05-04 06:48:09'),
(56, 'ahmed', 'aa@gmail.com', '$2y$10$lUcPZ.xR2pDR8BOwCHYKbu1rPbW0w.6JwGiEnUJpy3iEH6KN.OsvS', '$2y$10$.HcEzm0aH8ewRg0SveRiKeFqsK5NHqIkEPhAz2AlXnfUbGZ2pLHi.', NULL, 'person2.png', NULL, NULL, NULL, NULL, 0, '8mk8h3cRBMLvKUtsMFqHuA5l9HKW4rcxSJlFjYES52e0ytBJbyV83HLn9rkB', '2020-05-02 08:22:22', '2020-05-02 08:22:22'),
(59, 'ahmed111', 'ahmed11@yahoo.com', '$2y$10$pvh2s6g4xzwilatI8pfSWekzxcij1GLiovvl6Dath8X2.fPxdrsdG', '$2y$10$/UxmGFs5KwRW4lNI8wt6eug91Y/6OOdASocsAk4wD9LjcMAl8G8TG', 0, 'person2.png', NULL, NULL, NULL, ',1,2,3', 1, 'uC3L8IPIetK9dVpigyqmxohcEhT6RIIlB6t9I47BbyZNJ2cMK760DxFABLxt', '2020-05-03 05:40:59', '2020-05-04 05:45:45'),
(61, 'mohamed', 'mdai311118@yahoo.com', '$2y$10$ga8Hp.sOoeftdA1ShmNd8.euKlYAzt.3f6kvDlQ08cQgGfE/4n3Qy', '$2y$10$4/f.P0ArDsZqMKK9z5XTIO3saaBszTqOu5NHXM5t6QK6DDIUwSxuC', 0, 'user_img.png', '010209384512', NULL, NULL, NULL, 0, NULL, '2020-05-04 05:59:01', '2020-05-04 05:59:01'),
(62, 'test', 'test@gmail.com', '$2y$10$i4zG9JQy2ngkpgQLxRDiIu6Bn6SlAvS/zKjCotl2xY7sicYe89SJ2', '$2y$10$uKVS/oajBaDHiVuyNznSW.AIsXDgphNfptxGlwVFZSS4d0rh2aXI.', NULL, 'person2.png', NULL, NULL, NULL, NULL, 0, 'CJFPcM9oY0k6H5Qs02rcnZ68synyC4vljR25n6USA33rEBNedYzTiursdkDf', '2020-05-15 19:48:58', '2020-05-15 19:48:58'),
(63, 'mai', 'mai292228@yahoo.com', '$2y$10$usZSmsYAEnUV0Vpr/506S.dLQQc51h.2dXgeOJwGdpJ3FC7rD.hS.', '$2y$10$1oH.azss/aWZ/rTc7fRMEeR3QU6UeYab3/GY6o4ccl3YEJbX1ItSu', NULL, 'person2.png', NULL, NULL, NULL, NULL, 0, 'oNr2w5LI6TwwjABUXNEvtA1sjTgjklauehHne1BOtAV9OHK7AkF53w7L3s5B', '2020-05-15 20:19:32', '2020-05-15 20:19:32'),
(64, 'Mahmoud Salama', 'testo@mail.com', '$2y$10$o8AUQ0krkeEssVbDqUObxe3Y9ttc.g4hOJUkZ/qumTI05It.cBoWu', '$2y$10$M1Pszm6KXdkv2WV2QPNu.OxLu4xTNdXz1ojztQYqcHSwJWFusX5Uy', NULL, 'person2.png', NULL, NULL, NULL, NULL, 0, 'VQVBGaxa8tCBLYs4SNJegDpWg9nftjWieNyUVNYVllriHKxJGLo0PLOZ5jKo', '2020-05-16 23:10:58', '2020-05-16 23:10:58'),
(65, 'Mahmoud Salama', 'mahmoudalee2@gmail.comm', '$2y$10$2Hla0STX.7ni9c.vmmhXmeft4M79322DLvrBNIV1lTgyY4bhu3VV2', '$2y$10$O0c9MyItTpwe1P2sPXeYke4p7VGaTf/.9MA8rtP1y3lhUgOmFmWpq', NULL, 'person2.png', NULL, NULL, NULL, NULL, 0, 'EzKOuwOGsKx9SCUHYzvo9KPDhinOKEV4xWwFYlngMI8n3ZMFC8RZfj3v1Lyc', '2020-05-17 00:39:03', '2020-05-17 00:39:03'),
(66, 'created_at', 'mahe1234@yahoo.com', '$2y$10$8EW7yz4ZAnSqJLClU0cqD.UBrp2hQIQ.u1NalWHr2/BvPLli59f3C', '$2y$10$MgXU2cVS/scpsjS6aXQQ3ezdZFySWY3Ss0kYXp.3/SFOU.Q2BTrji', NULL, 'person2.png', '0', NULL, NULL, ',6,1,2,14', 1, '73nUzRyjPPsMTgdgFFTT7ZIzBVyRHPO77urEHhX65njHD942H4zFJUElsK0Y', '2020-06-22 12:14:00', '2020-06-29 15:40:44'),
(67, 'Ahmed', 'ahmed.nagdy39@gmail.com', '$2y$10$TuqE7B5Z7ix/F3Ae7CavsOKwDMWq.dEsY3KMrCUSOWoyePTi1saWq', '$2y$10$.qBAozL5Yd4Pt9ri127W6OnDfgYlQ7gYaHx80.m5khOSERsNrZxVq', 0, 'person2.png', NULL, NULL, NULL, NULL, 1, NULL, '2020-06-24 14:50:15', '2020-06-24 14:50:30'),
(69, 'maimai98', 'maimai98@yahoo.com', '$2y$10$BhkZN2cZmL2LQndC7WoxuOz2MLibYKZj./pHfxF0iZ1fgqIgf.0hG', '$2y$10$gBD1JV9ZT3Fx.2SM5ES6r.oRdg4SBQraKQB8vtMDMMolYWsvqwpaK', 0, 'person2.png', NULL, NULL, NULL, NULL, 1, 'qCVTjsxb1ZnAFe5vTSx01LhAJO8IqIQOCUPNey0hO3ILZrqZrLcIagIax1Bw', '2020-06-25 23:45:25', '2020-06-26 17:16:12'),
(70, 'Karem', 'kemo.shabara@gmail.com', '$2y$10$eSyrQoOCkEhx8zkUrJn6IuMFEtVvizh.3QBJxG126zAFBxnvu0Xaq', '$2y$10$sywLIZxrEc982DPVi.z/x.Aje6BkyxPsc/nXeiM0EGtlygVhCuEYO', 0, 'person2.png', NULL, NULL, NULL, NULL, 1, NULL, '2020-06-26 11:44:52', '2020-06-26 11:45:59'),
(71, 'Someone', 'Someone@gmail.com', '$2y$10$MAFKfOZtdhK9ndSveKQwAO4uOF/pzF0De3NUrBOPXxYBLHDh1hTLS', '$2y$10$JJx.LSaayVI40B1Fn7vuae8MsLMPungL7FbBA.wz.q9LSSVPx7oIK', 0, 'person2.png', NULL, NULL, NULL, ',13', 1, NULL, '2020-06-27 00:10:35', '2020-06-27 00:12:42'),
(72, 'khaled', 'khaledelbialy@moakt.cc', '$2y$10$DUdanfCNWDRj.SSMe/0oRu1wNnJZTDispEfNYE8F32/8hKbN9DT9y', '$2y$10$DB.NXLKUmV/ZL9qrpbgxD.YI2gJbTftpd1vMaVGWCGyuFue1bdjZG', 0, NULL, NULL, NULL, NULL, NULL, 1, 'vy94LlmoTGEU3JQOOrU8guxWd6Gp3C1Zu4YmAfCLOBDpOXKY1AGFyxTxR7Pr', '2020-06-27 16:25:18', '2020-06-27 21:13:09'),
(73, 'Khaled', 'khaled@mail.com', '$2y$10$/pzdfBiBCDUejbwjs0k8muoOKkfP01L06evywJcaAeOzYlJHssYuW', '$2y$10$94ffcNMybaej5JRwO.7X3eEM2w69M/hVYjfaviX2NHz14bR3CekP.', 0, 'person2.png', NULL, NULL, NULL, NULL, 0, 'iU2qab9bgbI872T4bxVBe33DwOrmUNfAeriQeIgB6UG3rk1BlgcaJGGiCzJE', '2020-06-27 18:15:18', '2020-06-27 18:15:18'),
(74, 'hhhh', 'hhhh10@hhhh.com', '$2y$10$6yCw8QNpkUk37mURuqU0r.S3wXBZ9iv4Sch/OFTs/C8YlYgIYLK/C', '$2y$10$.kiwwvNeIFsDDoAEG1hd4uteuO6zgKTDqPn.W7w1p7ejtnT8a06Nm', 0, 'person2.png', NULL, NULL, NULL, ',11,3', 0, 'euJcBP8I4c4I6fgoINy06DIhjzotSgvenZO0o2ehhQdg2xiUEfnkRkwEeEyb', '2020-06-27 23:52:56', '2020-06-29 14:07:22'),
(75, 'aya mamdouh', 'ayayoyo510@gmail.com', '$2y$10$JBWjH5kefdLhtbWayyCdoOzDscayA5KlvLgBoOg1Zdcgq2ZB.uNFm', '$2y$10$rirIM5VmKeUlVdxBtUOYTuA.4WPD/tvhuzqFgQTagXujRrcDECsLq', 0, 'person2.png', NULL, NULL, NULL, ',4', 1, 'FIbt4EWJ7bD5ZEvRJpnfwKmEXHGf0AGfBA3Ctv1Tn0VcclVepHe5DTwxYK6w', '2020-06-28 18:46:43', '2020-06-29 13:54:17'),
(76, 'Mai Tarek', 'maitarekttt@gmail.com', '$2y$10$nEQEtb8RZvotK0RhbDiveuYmODS2kvltgVk2Vo71wS4ZDj1hXbRLC', '$2y$10$8k7dWS3ct7wiC.qgUSx43uhV77HXGUyurINGBReih/K1ZspAhDBD2', 0, 'person2.png', NULL, NULL, NULL, ',16', 1, NULL, '2020-06-29 15:36:26', '2020-06-29 15:37:25');

-- --------------------------------------------------------

--
-- بنية الجدول `user_follows`
--

CREATE TABLE `user_follows` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `follow_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `user_follows`
--

INSERT INTO `user_follows` (`id`, `user_id`, `follow_id`, `created_at`, `updated_at`) VALUES
(66, 66, 1, '2020-06-22 23:40:47', '2020-06-22 23:40:47'),
(73, 1, 66, '2020-06-27 16:50:35', '2020-06-27 16:50:35'),
(74, 75, 1, '2020-06-29 13:45:14', '2020-06-29 13:45:14'),
(76, 75, 66, '2020-06-29 13:46:17', '2020-06-29 13:46:17'),
(77, 76, 66, '2020-06-29 15:37:01', '2020-06-29 15:37:01'),
(78, 66, 76, '2020-06-29 15:38:16', '2020-06-29 15:38:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_pages`
--
ALTER TABLE `about_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_titles`
--
ALTER TABLE `about_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `commentable_id` (`commentable_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(250));

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_providers`
--
ALTER TABLE `social_providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_follows`
--
ALTER TABLE `user_follows`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_follows_user_id_follow_id_unique` (`user_id`,`follow_id`),
  ADD KEY `user_follows_user_id_index` (`user_id`),
  ADD KEY `user_follows_follow_id_index` (`follow_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `about_pages`
--
ALTER TABLE `about_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `about_titles`
--
ALTER TABLE `about_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_providers`
--
ALTER TABLE `social_providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `user_follows`
--
ALTER TABLE `user_follows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`commentable_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `stories_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `user_follows`
--
ALTER TABLE `user_follows`
  ADD CONSTRAINT `user_follows_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_follows_ibfk_2` FOREIGN KEY (`follow_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
