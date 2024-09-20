-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2024 at 06:44 PM
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
-- Database: `freshmat`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shortTitle` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `listItemOne` varchar(255) NOT NULL,
  `listItemTwo` varchar(255) NOT NULL,
  `listItemThree` varchar(255) NOT NULL,
  `listItemFour` varchar(255) NOT NULL,
  `f1icon` varchar(255) NOT NULL,
  `f1title` varchar(255) NOT NULL,
  `f1description` text NOT NULL,
  `f2icon` varchar(255) NOT NULL,
  `f2title` varchar(255) NOT NULL,
  `f2description` text NOT NULL,
  `f3icon` varchar(255) NOT NULL,
  `f3title` varchar(255) NOT NULL,
  `f3description` text NOT NULL,
  `w1title` varchar(255) NOT NULL,
  `w1description` varchar(255) NOT NULL,
  `w2title` varchar(255) NOT NULL,
  `w2description` varchar(255) NOT NULL,
  `w3title` varchar(255) NOT NULL,
  `w3description` varchar(255) NOT NULL,
  `w4title` varchar(255) NOT NULL,
  `w4description` varchar(255) NOT NULL,
  `c1icon` varchar(255) NOT NULL,
  `c1number` varchar(255) NOT NULL,
  `c1text` varchar(255) NOT NULL,
  `c2icon` varchar(255) NOT NULL,
  `c2number` varchar(255) NOT NULL,
  `c2text` varchar(255) NOT NULL,
  `c3icon` varchar(255) NOT NULL,
  `c3number` varchar(255) NOT NULL,
  `c3text` varchar(255) NOT NULL,
  `c4icon` varchar(255) NOT NULL,
  `c4number` varchar(255) NOT NULL,
  `c4text` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `shortTitle`, `title`, `description`, `image`, `quote`, `listItemOne`, `listItemTwo`, `listItemThree`, `listItemFour`, `f1icon`, `f1title`, `f1description`, `f2icon`, `f2title`, `f2description`, `f3icon`, `f3title`, `f3description`, `w1title`, `w1description`, `w2title`, `w2description`, `w3title`, `w3description`, `w4title`, `w4description`, `c1icon`, `c1number`, `c1text`, `c2icon`, `c2number`, `c2text`, `c3icon`, `c3number`, `c3text`, `c4icon`, `c4number`, `c4text`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Welcome To Organic Agriculture Grocery Shop', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or mori words which slightly believable.', 'default/aboutUs/about_img.jpg', '“There are many variations its of passages of Lorem Ipsum nsi available, but the majority they suffered” Robart Day', 'Organic products who are so', 'Healthy food everyday', 'Local growth of fresh food', 'Demoralized charms of pleasure', 'default/aboutUs/why_choose_icon_1.png', 'All Kind Brand', 'There are many variations of passages of any Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or mori words....', 'default/aboutUs/why_choose_icon_2.png', 'Pesticide Free Goods', 'There are many variations of passages of any Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or mori words....', 'default/aboutUs/why_choose_icon_3.png', 'Curated Products', 'There are many variations of passages of any Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or mori words....', 'Choose The Item', 'There are many variations of Lorem Ipsum available but the ma have suffered.', 'Add to Cart', 'There are many variations of Lorem Ipsum available but the ma have suffered.', 'Payment Your Bill', 'There are many variations of Lorem Ipsum available but the ma have suffered.', 'Received Your Item', 'There are many variations of Lorem Ipsum available but the ma have suffered.', 'default/aboutUs/counter_icon_1.png', '950', 'Happy customers', 'default/aboutUs/counter_icon_2.png', '350', 'Expert farmers', 'default/aboutUs/counter_icon_3.png', '35', 'Award Wining', 'default/aboutUs/counter_icon_4.png', '4.9', 'Avarage Rating', '2024-08-11 08:46:17', '2024-09-16 09:02:44');

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `shortTitle` varchar(255) NOT NULL,
  `offerText` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `appleLink` varchar(255) NOT NULL,
  `playLink` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `image`, `image2`, `shortTitle`, `offerText`, `description`, `appleLink`, `playLink`, `created_at`, `updated_at`) VALUES
(1, 'uploads/assets/app_image.png', 'uploads/assets/app_image2.png', 'Download This App', 'Simple Way to Order Your Food Faster', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout The point.', 'https://www.apple.com/store', 'https://play.google.com/', '2024-08-11 08:46:17', '2024-08-11 08:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shortTitle` varchar(255) DEFAULT NULL,
  `offerText` text NOT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `backgroundImg` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `shortTitle`, `offerText`, `description`, `link`, `backgroundImg`, `created_at`, `updated_at`) VALUES
(1, 'Black Friday Offer', 'Organic Foods Up To 45% Off', NULL, 'http://127.0.0.1:8000/shop/', 'uploads/banners/home-one-banner-one.jpg', '2024-08-11 08:46:17', '2024-09-16 08:34:49'),
(2, 'Daily Offer', 'Vegetables Up To 65% Off', NULL, '#', 'uploads/banners/home-one-banner-two.jpg', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(3, 'Weekly Discounts on', 'Fruits and Vegetables', 'It is a long established fact that a reader acted by the readable content.', '#', 'uploads/banners/home-one-special_pro_banner_img.jpg', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(4, 'Daily Offer', 'Fresh Organic Food Up To 65% Off', NULL, 'http://127.0.0.1:8000/shop/product/officiis-rerum-error-neque-perspiciatis-ipsum.', 'uploads/banners/product-details-banner.png', '2024-08-11 08:46:17', '2024-09-16 08:35:52'),
(5, 'Up to 20% all Products', 'Everyday Fresh & Clean With Our Products', 'Don’t miss avail the saving opportunity.', '#', 'uploads/banners/home_two_special_pro_banner_img_2.jpg', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(6, 'Up To 50% Off', 'Organic Food Collection', 'Don’t miss avail the saving opportunity', '#', 'uploads/banners/home_two_regular_banner_one.jpg', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(7, 'Organic Food', 'Best For Your Family', 'Limited Time Offer', '#', 'uploads/banners/home_two_regular_banner_two.jpg', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(8, 'Organic Food', 'Fresh Foods Up To 45% Off', NULL, '#', 'uploads/banners/home_two_special_pro_banner_img_3.jpg', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(9, 'Select Only Grocery Products', 'Get 30% Discount Of Your First Shopping', 'Contrary to popular belief, Lorem Ipsum is not simply random text piece of classical Latin literature.', 'http://127.0.0.1:8000/shop/product/est-quas-perspiciati', 'uploads/banners/home_two_main_banner.jpg', '2024-08-11 08:46:17', '2024-09-16 08:35:33'),
(10, NULL, 'Fresh Fruits Healthy Juice', 'Get 50% Off on Selected Organic Items', '#', 'uploads/banners/home_two_special_pro_banner_img_4.jpg', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(11, 'Summer Offer', 'Healthy Organic Food', NULL, 'http://127.0.0.1:8000/shop/', 'uploads/banners/home_three_banner_one.jpg', '2024-08-11 08:46:17', '2024-09-16 08:35:44'),
(12, 'Summer Offer', 'Fresh Organic Food', NULL, '#', 'uploads/banners/home_three_banner_two.jpg', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(13, NULL, 'Up to 50% off on Special Item', 'Shop our selection of organic fresh vegetables in a discounted price. 50% off', '#', 'uploads/banners/home_three_discount_one.jpg', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(14, NULL, 'Get 10% off on Fruits Item', 'Shop our selection of organic fresh vegetables in a discounted price. 10% off', '#', 'uploads/banners/home_three_discount_two.jpg', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(15, NULL, 'Get 75% Organic Vegetable', 'Shop our selection of organic fresh vegetables in a discounted price. 75% off', '#', 'uploads/banners/home_three_discount_three.jpg', '2024-08-11 08:46:17', '2024-08-11 08:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Uncategorized', 'uncategorized', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(2, 'Blueberry', 'blueberry', '2024-09-09 17:14:42', '2024-09-09 17:14:42'),
(4, 'Tutorial', 'tutorial', '2024-09-09 17:17:32', '2024-09-09 17:17:32'),
(6, '100TK', '100tk', '2024-09-10 15:48:31', '2024-09-10 15:48:31'),
(7, 'Blueberry', 'blueberry', '2024-09-10 15:50:05', '2024-09-10 15:50:05'),
(8, 'Mahidul Islam', 'mahidul-islam', '2024-09-10 16:08:22', '2024-09-10 16:08:22'),
(9, 'Blueberry', 'blueberry', '2024-09-10 16:10:36', '2024-09-10 16:10:36'),
(10, 'Orange', 'orange', '2024-09-10 16:11:04', '2024-09-10 16:11:04'),
(11, 'News', 'news', '2024-09-10 16:13:38', '2024-09-10 16:13:38'),
(13, 'News', 'news', '2024-09-10 16:24:32', '2024-09-10 16:24:32'),
(14, 'Blueberry', 'blueberry', '2024-09-10 16:28:26', '2024-09-10 16:28:26'),
(15, 'News', 'news', '2024-09-10 16:29:21', '2024-09-10 16:29:21'),
(17, 'Blueberry', 'blueberry', '2024-09-10 16:30:35', '2024-09-10 16:30:35'),
(18, 'News', 'news', '2024-09-10 16:30:57', '2024-09-10 16:30:57'),
(19, 'Mahidul Islam', 'mahidul-islam', '2024-09-10 16:34:54', '2024-09-17 10:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `categoryId` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `react` int(11) NOT NULL DEFAULT 0,
  `seoTitle` varchar(255) DEFAULT NULL,
  `seoDescription` varchar(255) DEFAULT NULL,
  `status` enum('publish','draft') NOT NULL DEFAULT 'publish',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `userId`, `categoryId`, `title`, `description`, `slug`, `thumbnail`, `react`, `seoTitle`, `seoDescription`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 18, 'Mollit consequunturvvv', 'Dolores magnam et om', 'repudiandae-unde-nih', 'uploads/thumbnails/thumbnail-580ac67e-ef84-4f99-ad34-35f4c4cb4541.JPG', 0, 'Est nemo ipsam moles', 'Velit soluta odio d', 'publish', '2024-09-15 20:27:48', '2024-09-16 08:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `postId` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `status` enum('pending','approve') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `userId`, `postId`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Nice', 'approve', '2024-09-15 20:31:12', '2024-09-15 14:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `comments_replies`
--

CREATE TABLE `comments_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commentId` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `reply` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments_replies`
--

INSERT INTO `comments_replies` (`id`, `commentId`, `userId`, `reply`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Thank You', '2024-09-15 20:31:42', '2024-09-15 20:31:42'),
(2, 1, 1, 'Wow', '2024-09-15 20:32:59', '2024-09-15 20:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `contact_pages`
--

CREATE TABLE `contact_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `b1icon` varchar(255) NOT NULL,
  `b2icon` varchar(255) NOT NULL,
  `b3icon` varchar(255) NOT NULL,
  `b4icon` varchar(255) NOT NULL,
  `b1title` varchar(255) NOT NULL,
  `b2title` varchar(255) NOT NULL,
  `b3title` varchar(255) NOT NULL,
  `b4title` varchar(255) NOT NULL,
  `b1text` varchar(255) NOT NULL,
  `b2textOne` varchar(255) NOT NULL,
  `b2textTwo` varchar(255) DEFAULT NULL,
  `b3textOne` varchar(255) NOT NULL,
  `b3textTwo` varchar(255) DEFAULT NULL,
  `b4textOne` varchar(255) NOT NULL,
  `b4textTwo` varchar(255) DEFAULT NULL,
  `b4textUrlOne` varchar(255) NOT NULL,
  `b4textUrlTwo` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `googleMap` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_pages`
--

INSERT INTO `contact_pages` (`id`, `b1icon`, `b2icon`, `b3icon`, `b4icon`, `b1title`, `b2title`, `b3title`, `b4title`, `b1text`, `b2textOne`, `b2textTwo`, `b3textOne`, `b3textTwo`, `b4textOne`, `b4textTwo`, `b4textUrlOne`, `b4textUrlTwo`, `image`, `googleMap`, `created_at`, `updated_at`) VALUES
(1, 'default/contact/contact_icon_1.png', 'default/contact/contact_icon_2.png', 'default/contact/contact_icon_3.png', 'default/contact/contact_icon_4.png', 'Address', 'Phone Number', 'Email Address', 'Website Address', '16/A, Romadan House City Tower New York, United States', '+880 1234 567895', '+880 9876 543217', 'example@gmail.com', 'jhondeo@gmail.com', 'exampleFreshmat.com', 'exampleFreshmat.com', 'https:www.example.com', 'https:www.example.com', 'default/contact/contact_img.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1824.8667200308832!2d90.42592680669435!3d23.828076048215905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c646adb2897f%3A0x4b007974289814ab!2sInternational%20Convention%20City%20Bashundhara%2C%20Joar%20Sahara%2C%20Khilkhet%20(Beside%20300ft%20Purbachal%20Link%20Road)%2C%20Purbachal%20Expy%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1697389294376!5m2!1sen!2sbd', '2024-08-11 08:46:17', '2024-08-11 08:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `type` enum('fixed','flat') NOT NULL,
  `minOrder` int(11) DEFAULT NULL,
  `maxOrder` int(11) DEFAULT NULL,
  `limit` int(11) DEFAULT NULL,
  `expireDate` date NOT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `discount`, `type`, `minOrder`, `maxOrder`, `limit`, `expireDate`, `status`, `created_at`, `updated_at`) VALUES
(1, '100TK', 100, 'fixed', 100, 20000, 10, '2024-09-07', 'active', '2024-08-16 11:57:12', '2024-08-16 05:58:54'),
(2, '10Percent10Percent', 1010, 'flat', 100100, 50005000, 100100, '2024-09-28', 'active', '2024-08-16 12:04:46', '2024-09-16 11:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency` varchar(255) NOT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'deactive',
  `default` enum('no','yes') NOT NULL DEFAULT 'no',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `currency`, `status`, `default`, `created_at`, `updated_at`) VALUES
(1, 'USD', 'active', 'yes', '2024-08-18 19:52:41', '2024-08-18 19:52:41'),
(2, 'AWG', 'active', 'no', '2024-08-19 11:48:18', '2024-08-19 07:21:51'),
(4, 'ARS', 'active', 'no', '2024-08-19 11:49:15', '2024-08-19 07:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shortTitle` varchar(255) DEFAULT NULL,
  `offerText` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `backgroundImg` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `shortTitle`, `offerText`, `description`, `link`, `date`, `backgroundImg`, `created_at`, `updated_at`) VALUES
(1, 'Sales on Weekly Offers', 'Our special products deal of the day', 'There are many variations of passages of Lorem Ipsum available butmajority have suffered alteration in some form.', 'http://127.0.0.1:8000/shop', '2024-12-27', 'uploads/deals/home_one_deals_bg.jpg', '2024-08-11 08:46:17', '2024-09-16 08:46:14'),
(2, 'Monthly Offers', 'Our Specials Products deal of the day', 'There are many variations of passages of Lorem Ipsum butmajority have suffered.', '#', '2023-08-12', 'uploads/deals/home_two_deals_bg.jpg', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(3, NULL, 'Deals Of The Weeks', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod incididunt ut labore et dolore magna aliqua quis ipsum', '#', '2023-08-12', 'uploads/deals/home_three_deals_bg.jpg', '2024-08-11 08:46:17', '2024-08-11 08:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_locations`
--

CREATE TABLE `delivery_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `charge` double(8,2) NOT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_locations`
--

INSERT INTO `delivery_locations` (`id`, `address`, `charge`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Inside Dhaka', 60.00, 'active', '2024-08-11 09:26:53', '2024-08-11 09:26:53'),
(2, 'Out Side Dhaka', 120.00, 'active', '2024-08-11 09:27:01', '2024-08-11 09:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `email_configurations`
--

CREATE TABLE `email_configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mailHost` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `smtpUserName` varchar(255) DEFAULT NULL,
  `smtpPassword` varchar(255) DEFAULT NULL,
  `mailPort` varchar(255) DEFAULT NULL,
  `mailEncryption` enum('tls','ssl') NOT NULL DEFAULT 'tls',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_configurations`
--

INSERT INTO `email_configurations` (`id`, `mailHost`, `email`, `smtpUserName`, `smtpPassword`, `mailPort`, `mailEncryption`, `created_at`, `updated_at`) VALUES
(1, 'sandbox.smtp.mailtrap.io', 'admin@freshmat.com', '4eea572e18e140', '85f6d52cdd2107', '2525', 'ssl', '2024-08-11 03:34:31', '2024-08-11 03:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `title`, `subject`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Contact Email', 'Contact Email', '<p><b>Name:&nbsp;</b>{{name}}\r\n</p><p><b>Email:</b>&nbsp;{{email}}</p><p><span style=\"font-weight: bolder;\">Subject:</span>&nbsp;{{subject}}</p><p><b>Message:&nbsp;</b>{{message}}</p>', '2024-08-13 13:21:02', '2024-08-16 10:11:35'),
(2, 'Order Successfully', 'Order Successfully Test', '<p>Hi {{user_name}}</p><p>\r\n                        Thanks for your new order. Your order id has been submited .\r\n</p><p>\r\n                        Total Amount : {{total_amount}}</p><p>\r\n                        Payment Method : {{payment_method}}</p><p>\r\n                        Payment Status : {{payment_status}}</p><p>\r\n                        Order Status : {{order_status}}</p><p>\r\n                        Order Date: {{order_date}}</p>', '2024-08-18 10:55:14', '2024-08-18 06:54:18'),
(3, 'Password Reset', 'Password Reset', '<p>Dear {{user_name}},\r\n</p><p>            Do you want to reset your password? Please Click the following link and Reset Your Password.</p>', '2024-08-19 15:53:05', '2024-08-19 10:00:17'),
(4, 'Verify Email Address', 'Verify Email Address', '<p>Dear {{user_name}},\r\n</p><p>            Congratulations! Your Account has been created successfully. Please Click the following link and Active your Account.</p>', '2024-08-19 15:53:05', '2024-08-19 15:58:42');

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
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shortInfo` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `copyrightText` varchar(255) NOT NULL DEFAULT 'Copyright © {year} {mySite}. All rights reserved.',
  `paymentGetwayImage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `shortInfo`, `email`, `copyrightText`, `paymentGetwayImage`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, cons ectetur adipiscing elit sed.', 'support@mail.com', 'Copyright © {year} {mySite}. All rights reserved.', 'uploads/assets/payment_getway_image.jpg', '2024-08-11 08:46:17', '2024-08-11 08:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `footer_tops`
--

CREATE TABLE `footer_tops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_tops`
--

INSERT INTO `footer_tops` (`id`, `icon`, `heading`, `subheading`, `created_at`, `updated_at`) VALUES
(1, 'uploads/assets/footer_info_icon_1.png', 'Free Shipping', 'Worldwide', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(2, 'uploads/assets/footer_info_icon_2.png', 'Helpline', '+1256 25632 565', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(3, 'uploads/assets/footer_info_icon_3.png', '24/7 Support', 'Free For Customers', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(4, 'uploads/assets/footer_info_icon_4.png', 'Returns', '30 Days Free Exchanges', '2024-08-11 08:46:17', '2024-08-11 08:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'What is its purpose?', 'Any answer', 'active', '2024-08-11 14:14:02', '2024-08-11 08:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `h3_videos`
--

CREATE TABLE `h3_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `backgroundImg` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `h3_videos`
--

INSERT INTO `h3_videos` (`id`, `heading`, `description`, `link`, `backgroundImg`, `video`, `created_at`, `updated_at`) VALUES
(1, '50% Off In This Week', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua.', '#', 'uploads/assets/home_three_video_bg.jpg', 'https://youtu.be/nqye02H_H6I', '2024-08-11 08:46:17', '2024-08-11 08:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `home_video_galleries`
--

CREATE TABLE `home_video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shortTitle` varchar(255) NOT NULL,
  `offerText` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `thumbnail1` varchar(255) NOT NULL,
  `video1` varchar(255) NOT NULL,
  `thumbnail2` varchar(255) NOT NULL,
  `video2` varchar(255) NOT NULL,
  `thumbnail3` varchar(255) NOT NULL,
  `video3` varchar(255) NOT NULL,
  `thumbnail4` varchar(255) NOT NULL,
  `video4` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_video_galleries`
--

INSERT INTO `home_video_galleries` (`id`, `shortTitle`, `offerText`, `description`, `link`, `thumbnail1`, `video1`, `thumbnail2`, `video2`, `thumbnail3`, `video3`, `thumbnail4`, `video4`, `created_at`, `updated_at`) VALUES
(1, 'New Tech Farming', 'Watch Our Farming And Cultivations', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which slightly believable.', '#', 'default/thumbnails/thumbnail-one.jpg', 'https://youtu.be/nqye02H_H6I', 'default/thumbnails/thumbnail-two.png', 'https://youtu.be/nqye02H_H6I', 'default/thumbnails/thumbnail-three.jpg', 'https://youtu.be/nqye02H_H6I', 'default/thumbnails/thumbnail-four.jpg', 'https://youtu.be/nqye02H_H6I', '2024-08-11 08:46:17', '2024-08-11 08:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `instagram_posts`
--

CREATE TABLE `instagram_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `invoiceNumber` varchar(255) NOT NULL,
  `subTotal` varchar(255) NOT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `deliveryCharge` varchar(255) DEFAULT NULL,
  `total` varchar(255) NOT NULL,
  `status` enum('new','delevery-in-process','complete','cancel') NOT NULL DEFAULT 'new',
  `payment` enum('pending','success') NOT NULL DEFAULT 'pending',
  `note` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `userId`, `invoiceNumber`, `subTotal`, `discount`, `deliveryCharge`, `total`, `status`, `payment`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, '1001', '60', '0', '60', '120', 'new', 'success', NULL, '2024-08-11 09:27:36', '2024-08-11 03:28:50'),
(2, 1, '1002', '83', '0', '60', '143', 'new', 'success', NULL, '2024-08-11 09:34:58', '2024-08-11 03:35:10'),
(3, 1, '1003', '86', '0', '60', '146', 'new', 'success', NULL, '2024-08-11 16:02:20', '2024-08-11 10:03:30'),
(4, 1, '1004', '57', '0', '0', '57', 'new', 'pending', NULL, '2024-08-11 16:05:16', '2024-08-11 16:05:16'),
(5, 1, '1005', '23', '0', '60', '83', 'new', 'pending', NULL, '2024-08-12 07:05:18', '2024-08-12 07:05:18'),
(6, 1, '1006', '23', '0', '60', '83', 'new', 'pending', NULL, '2024-08-12 07:13:59', '2024-08-12 07:13:59'),
(7, 1, '1007', '23', '0', '60', '83', 'new', 'pending', NULL, '2024-08-12 07:16:16', '2024-08-12 07:16:16'),
(8, 1, '1008', '23', '0', '120', '143', 'new', 'pending', NULL, '2024-08-12 07:16:29', '2024-08-12 07:16:29'),
(9, 1, '1009', '23', '0', '120', '143', 'new', 'success', NULL, '2024-08-12 07:17:26', '2024-08-12 01:34:39'),
(10, 1, '1010', '23', '0', '60', '83', 'new', 'success', NULL, '2024-08-12 07:36:19', '2024-08-12 01:40:12'),
(11, 1, '1011', '23', '0', '60', '83', 'new', 'pending', NULL, '2024-08-12 10:35:51', '2024-08-12 10:35:51'),
(12, 2, '1012', '23', '0', '60', '83', 'new', 'success', NULL, '2024-08-12 17:57:17', '2024-08-12 11:58:27'),
(13, 2, '1013', '80', '0', '60', '140', 'new', 'success', NULL, '2024-08-13 07:11:16', '2024-08-13 01:22:12'),
(14, 1, '1014', '109', '0', '60', '169', 'new', 'success', NULL, '2024-08-13 07:11:48', '2024-08-13 01:20:12'),
(15, 1, '1015', '143', '0', '60', '203', 'new', 'pending', NULL, '2024-08-13 07:20:55', '2024-08-13 01:21:19'),
(16, 1, '1016', '23', '0', '60', '83', 'new', 'pending', NULL, '2024-08-13 16:03:13', '2024-08-13 16:03:13'),
(17, 1, '1017', '23', '0', '0', '23', 'new', 'pending', NULL, '2024-08-13 16:11:14', '2024-08-13 16:11:14'),
(18, 1, '1018', '23', '0', '60', '83', 'new', 'pending', NULL, '2024-08-15 14:44:49', '2024-08-15 14:44:49'),
(19, 1, '1019', '1478', '0', '0', '1478', 'new', 'pending', NULL, '2024-08-16 13:48:34', '2024-08-16 13:48:34'),
(20, 1, '1020', '1478', '147.8', '60', '1390.2', 'new', 'pending', NULL, '2024-08-16 14:14:05', '2024-08-16 14:14:05'),
(21, 1, '1021', '1478', '147.8', '120', '1450.2', 'new', 'pending', NULL, '2024-08-16 14:16:14', '2024-08-16 14:16:14'),
(22, 1, '1022', '1478', '147.8', '0', '1330.2', 'new', 'pending', NULL, '2024-08-16 14:16:29', '2024-08-16 14:16:29'),
(23, 1, '1023', '23', '0', '60', '83', 'new', 'pending', NULL, '2024-08-18 11:18:36', '2024-08-18 05:19:57'),
(24, 1, '1024', '23', '0', '60', '83', 'new', 'pending', NULL, '2024-08-18 11:20:28', '2024-08-18 05:21:51'),
(25, 1, '1025', '57', '0', '60', '117', 'new', 'success', NULL, '2024-08-18 11:22:34', '2024-08-18 05:22:47'),
(26, 1, '1026', '57', '0', '120', '177', 'new', 'pending', NULL, '2024-08-18 11:34:38', '2024-08-18 05:35:39'),
(27, 1, '1027', '57', '0', '60', '117', 'new', 'pending', NULL, '2024-08-18 11:35:56', '2024-08-18 05:36:50'),
(28, 1, '1028', '23', '0', '60', '83', 'new', 'success', NULL, '2024-08-18 11:37:08', '2024-08-18 05:37:21'),
(29, 1, '1029', '57', '0', '60', '117', 'new', 'success', NULL, '2024-08-18 11:42:04', '2024-08-18 05:42:16'),
(30, 1, '1030', '57', '0', '60', '117', 'new', 'success', NULL, '2024-08-18 11:45:22', '2024-08-18 05:45:35'),
(31, 1, '1031', '23', '0', '60', '83', 'new', 'pending', NULL, '2024-08-18 11:52:04', '2024-08-18 05:56:41'),
(32, 1, '1032', '23', '0', '60', '83', 'new', 'success', NULL, '2024-08-18 11:57:00', '2024-08-18 05:57:13'),
(33, 1, '1033', '23', '0', '60', '83', 'new', 'success', NULL, '2024-08-18 12:40:24', '2024-08-18 06:41:10'),
(34, 1, '1034', '86', '0', '60', '146', 'new', 'pending', NULL, '2024-08-18 12:42:27', '2024-08-18 06:44:47'),
(35, 1, '1035', '57', '0', '60', '117', 'new', 'pending', NULL, '2024-08-18 12:45:04', '2024-08-18 06:46:57'),
(36, 1, '1036', '188', '0', '60', '248', 'new', 'success', NULL, '2024-08-18 12:47:25', '2024-08-18 06:47:38'),
(37, 1, '1037', '86', '0', '60', '146', 'complete', 'success', NULL, '2024-08-18 12:51:00', '2024-09-09 10:45:57'),
(38, 1, '1038', '57', '0', '120', '177', 'new', 'success', NULL, '2024-08-18 12:52:13', '2024-08-18 06:52:25'),
(39, 1, '1039', '69', '0', '60', '129', 'new', 'success', NULL, '2024-08-18 12:54:33', '2024-08-18 06:54:46'),
(40, 1, '1040', '23', '0', '60', '83', 'delevery-in-process', 'pending', NULL, '2024-08-18 13:02:30', '2024-09-09 10:50:15'),
(41, 1, '1041', '23', '0', '60', '83', 'complete', 'pending', NULL, '2024-08-20 10:23:04', '2024-09-09 10:46:31'),
(42, 1, '1042', '23', '0', '60', '83', 'cancel', 'pending', NULL, '2024-08-20 15:35:12', '2024-09-09 10:46:52'),
(43, 1, '1043', '23', '0', '60', '83', 'cancel', 'pending', NULL, '2024-08-20 15:51:29', '2024-09-09 10:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `invoices_products`
--

CREATE TABLE `invoices_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productId` bigint(20) UNSIGNED NOT NULL,
  `invoiceId` bigint(20) UNSIGNED NOT NULL,
  `quantity` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices_products`
--

INSERT INTO `invoices_products` (`id`, `productId`, `invoiceId`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '3', '2024-08-11 09:28:50', '2024-08-11 09:28:50'),
(2, 1, 2, '3', '2024-08-11 09:35:10', '2024-08-11 09:35:10'),
(3, 7, 2, '1', '2024-08-11 09:35:10', '2024-08-11 09:35:10'),
(4, 5, 3, '1', '2024-08-11 16:03:30', '2024-08-11 16:03:30'),
(5, 7, 9, '1', '2024-08-12 07:34:39', '2024-08-12 07:34:39'),
(6, 7, 10, '1', '2024-08-12 07:40:12', '2024-08-12 07:40:12'),
(7, 7, 12, '1', '2024-08-12 17:58:27', '2024-08-12 17:58:27'),
(8, 7, 14, '1', '2024-08-13 07:17:54', '2024-08-13 07:17:54'),
(9, 5, 14, '1', '2024-08-13 07:17:54', '2024-08-13 07:17:54'),
(10, 7, 14, '1', '2024-08-13 07:20:12', '2024-08-13 07:20:12'),
(11, 5, 14, '1', '2024-08-13 07:20:12', '2024-08-13 07:20:12'),
(12, 6, 15, '1', '2024-08-13 07:21:19', '2024-08-13 07:21:19'),
(13, 5, 15, '1', '2024-08-13 07:21:19', '2024-08-13 07:21:19'),
(14, 7, 13, '1', '2024-08-13 07:22:12', '2024-08-13 07:22:12'),
(15, 6, 13, '1', '2024-08-13 07:22:12', '2024-08-13 07:22:12'),
(16, 7, 23, '1', '2024-08-18 11:19:12', '2024-08-18 11:19:12'),
(17, 7, 23, '1', '2024-08-18 11:19:57', '2024-08-18 11:19:57'),
(18, 7, 24, '1', '2024-08-18 11:20:43', '2024-08-18 11:20:43'),
(19, 7, 24, '1', '2024-08-18 11:21:51', '2024-08-18 11:21:51'),
(20, 6, 25, '1', '2024-08-18 11:22:47', '2024-08-18 11:22:47'),
(21, 6, 26, '1', '2024-08-18 11:34:52', '2024-08-18 11:34:52'),
(22, 6, 26, '1', '2024-08-18 11:35:39', '2024-08-18 11:35:39'),
(23, 6, 27, '1', '2024-08-18 11:36:08', '2024-08-18 11:36:08'),
(24, 6, 27, '1', '2024-08-18 11:36:50', '2024-08-18 11:36:50'),
(25, 7, 28, '1', '2024-08-18 11:37:21', '2024-08-18 11:37:21'),
(26, 6, 29, '1', '2024-08-18 11:42:16', '2024-08-18 11:42:16'),
(27, 6, 30, '1', '2024-08-18 11:45:35', '2024-08-18 11:45:35'),
(28, 7, 31, '1', '2024-08-18 11:52:17', '2024-08-18 11:52:17'),
(29, 7, 31, '1', '2024-08-18 11:56:41', '2024-08-18 11:56:41'),
(30, 7, 32, '1', '2024-08-18 11:57:13', '2024-08-18 11:57:13'),
(31, 7, 33, '1', '2024-08-18 12:41:10', '2024-08-18 12:41:10'),
(32, 5, 34, '1', '2024-08-18 12:42:40', '2024-08-18 12:42:40'),
(33, 5, 34, '1', '2024-08-18 12:44:47', '2024-08-18 12:44:47'),
(34, 6, 35, '1', '2024-08-18 12:45:17', '2024-08-18 12:45:17'),
(35, 6, 35, '1', '2024-08-18 12:46:57', '2024-08-18 12:46:57'),
(36, 2, 36, '1', '2024-08-18 12:47:38', '2024-08-18 12:47:38'),
(37, 6, 36, '2', '2024-08-18 12:47:38', '2024-08-18 12:47:38'),
(38, 5, 37, '1', '2024-08-18 12:51:14', '2024-08-18 12:51:14'),
(39, 6, 38, '1', '2024-08-18 12:52:26', '2024-08-18 12:52:26'),
(40, 7, 39, '3', '2024-08-18 12:54:46', '2024-08-18 12:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('read','unread') NOT NULL DEFAULT 'unread',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mahidul Islam', 'mahedul045@gmail.com', '01751660934', 'Ad non consequatur', 'sdfsadfsd sdf', 'read', '2024-08-11 16:13:29', '2024-08-14 02:41:21'),
(2, 'Pandora Hale', 'loretikota@mailinator.com', '+1 (776) 868-8835', 'Nobis dolores sed ut', 'Autem et amet volup', 'unread', '2024-08-13 14:30:20', '2024-08-13 14:30:20'),
(3, 'Anika Case', 'dysy@mailinator.com', '+1 (685) 286-7635', 'Quod reiciendis aliq', 'Magnam aliqua Beata', 'read', '2024-08-13 14:31:20', '2024-09-06 10:51:58'),
(4, 'Karleigh Rivers', 'vumacilu@mailinator.com', '+1 (738) 706-1432', 'Voluptatem Quo quis', 'Sunt Nam perspiciati', 'unread', '2024-08-13 14:45:10', '2024-08-13 14:45:10'),
(5, 'Ginger Ware', 'titeb@mailinator.com', '+1 (547) 379-8336', 'Minus quia ea ipsa', 'Doloribus molestias', 'unread', '2024-08-13 14:46:59', '2024-08-13 14:46:59'),
(6, 'Carter Stuart', 'cojyxeleg@mailinator.com', '+1 (621) 569-3503', 'Veniam esse iste e', 'Incidunt pariatur', 'read', '2024-08-13 14:48:09', '2024-08-14 02:41:01'),
(7, 'Dara Joyner', 'cogurewyz@mailinator.com', '+1 (564) 261-3169', 'Sapiente amet numqu', 'Dolor consectetur ul', 'read', '2024-08-13 14:48:33', '2024-08-14 02:40:48'),
(8, 'Dara Dotson', 'vybokebuw@mailinator.com', '+1 (421) 534-9838', 'Eligendi maxime offi', 'Dolor explicabo Ut', 'read', '2024-08-13 14:50:22', '2024-08-14 02:41:05'),
(9, 'Cameran Blanchard', 'doniwemo@mailinator.com', '+1 (897) 675-2153', 'Consequuntur non min', 'Qui et laboris et au', 'read', '2024-08-13 14:51:07', '2024-08-14 02:41:08'),
(10, 'Logan Estes', 'hahaz@mailinator.com', '+1 (918) 336-8618', 'Culpa nemo id repreh', 'Ad quia architecto u', 'read', '2024-08-13 14:51:37', '2024-08-14 02:41:11'),
(11, 'India Hodge', 'dusatykeko@mailinator.com', '+1 (545) 226-8375', 'Recusandae Nemo ad', 'Perspiciatis est a', 'unread', '2024-08-13 14:53:00', '2024-08-13 14:53:00'),
(12, 'Echo Ellison', 'vixufe@mailinator.com', '+1 (954) 654-3888', 'Ut cumque nemo ut co', 'Ratione et dolore re', 'unread', '2024-08-13 14:53:30', '2024-08-13 14:53:30'),
(13, 'Riley Eaton', 'sacyker@mailinator.com', '+1 (586) 109-9755', 'Harum quia in nobis', 'Ullam modi ducimus', 'unread', '2024-08-13 14:55:43', '2024-08-13 14:55:43'),
(14, 'Clementine Wilkerson', 'vofyvekus@mailinator.com', '+1 (342) 955-6665', 'Voluptate quae quae', 'Vero omnis cum sint', 'unread', '2024-08-13 14:59:20', '2024-08-13 14:59:20'),
(15, 'Shana Bennett', 'xeviny@mailinator.com', '+1 (415) 223-9353', 'Nesciunt nemo volup', 'Natus in incididunt', 'unread', '2024-08-13 15:00:58', '2024-08-13 15:00:58'),
(16, 'Kaye Horne', 'remazeh@mailinator.com', '+1 (955) 802-2785', 'Quos atque iure cons', 'Non ullamco voluptat', 'unread', '2024-08-13 15:01:52', '2024-08-13 15:01:52'),
(17, 'Farrah Bond', 'gukiki@mailinator.com', '+1 (449) 643-7039', 'Qui et reiciendis eu', 'Deserunt in ea nulla', 'unread', '2024-08-13 15:49:42', '2024-08-13 15:49:42'),
(18, 'Basia Kline', 'rekineb@mailinator.com', '+1 (956) 202-4943', 'Vel nesciunt sequi', 'Quis non irure volup', 'read', '2024-08-13 15:50:07', '2024-08-14 02:42:36');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_03_27_160146_create_f_a_q_s_table', 1),
(7, '2024_03_29_210658_create_blog_categories_table', 1),
(8, '2024_03_30_060311_create_blog_posts_table', 1),
(9, '2024_04_01_200516_create_comments_table', 1),
(10, '2024_04_02_183705_create_comments_replies_table', 1),
(11, '2024_04_20_202156_create_product_categories_table', 1),
(12, '2024_04_21_194207_create_products_table', 1),
(13, '2024_04_22_034055_create_product_galleries_table', 1),
(14, '2024_04_22_155723_create_coupons_table', 1),
(15, '2024_04_24_141534_create_wishlists_table', 1),
(16, '2024_04_26_111955_create_user_profiles_table', 1),
(17, '2024_04_26_114449_create_invoices_table', 1),
(18, '2024_04_26_114513_create_invoices_products_table', 1),
(19, '2024_04_29_071928_create_delivery_locations_table', 1),
(20, '2024_05_02_140741_create_settings_table', 1),
(21, '2024_05_07_055917_create_banners_table', 1),
(22, '2024_05_08_123055_create_sliders_table', 1),
(23, '2024_05_10_152855_create_home_video_galleries_table', 1),
(24, '2024_05_11_150050_create_partners_table', 1),
(25, '2024_05_16_073636_create_apps_table', 1),
(26, '2024_05_21_065919_create_section_titles_table', 1),
(27, '2024_05_22_174517_create_testimonials_table', 1),
(28, '2024_05_23_071809_create_about_us_table', 1),
(29, '2024_05_23_140614_create_contact_pages_table', 1),
(30, '2024_05_24_142157_create_messages_table', 1),
(31, '2024_06_02_133114_create_email_configurations_table', 1),
(32, '2024_06_03_062741_create_topbars_table', 1),
(33, '2024_06_03_091752_create_social_links_table', 1),
(34, '2024_06_04_150456_create_deals_table', 1),
(35, '2024_06_05_060414_create_footer_tops_table', 1),
(36, '2024_06_05_074826_create_footers_table', 1),
(37, '2024_06_05_142237_create_instagram_posts_table', 1),
(38, '2024_06_06_055109_create_policies_table', 1),
(39, '2024_06_06_081532_create_h3_videos_table', 1),
(40, '2024_07_03_112853_create_reviews_table', 1),
(41, '2024_07_17_142543_create_privacy_policies_table', 1),
(42, '2024_07_17_164416_create_terms_conditions_table', 1),
(43, '2024_08_10_060833_create_email_templates_table', 1),
(44, '2024_08_15_143421_create_paypals_table', 2),
(45, '2024_08_15_143458_create_stripes_table', 2),
(46, '2024_08_15_143508_create_mollies_table', 2),
(47, '2024_08_18_192048_create_currencies_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mollies`
--

CREATE TABLE `mollies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('enable','disable') NOT NULL DEFAULT 'disable',
  `countryName` varchar(255) NOT NULL DEFAULT 'United States of America',
  `currencyName` varchar(255) NOT NULL DEFAULT 'USD',
  `currencyRatePerUSD` varchar(255) DEFAULT NULL,
  `mollieKey` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default/mollie.png',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mollies`
--

INSERT INTO `mollies` (`id`, `status`, `countryName`, `currencyName`, `currencyRatePerUSD`, `mollieKey`, `image`, `created_at`, `updated_at`) VALUES
(1, 'enable', 'United Kingdom', 'USD', '1', 'test_faxQ4s3jyxvvEQHwmnBMmTz6q6UyaG', 'uploads/paymentGetway/mollie-payment-getway.png', '2024-08-15 15:34:50', '2024-08-18 07:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/partner/82a9431b-b5eb-4f9e-b0d7-b208579c0abf.png', 'active', '2024-09-10 13:44:33', '2024-09-10 13:44:33');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('testuser@gmail.com', '$2y$12$gON6S.QZGcNn0gWHfei3r.zHwcNN2ISXTrh6rQZyuyzoOehkKQYHW', '2024-08-19 15:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `paypals`
--

CREATE TABLE `paypals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('enable','disable') NOT NULL DEFAULT 'disable',
  `accountMode` enum('live','sandbox') NOT NULL DEFAULT 'sandbox',
  `countryName` varchar(255) NOT NULL DEFAULT 'United States of America',
  `currencyName` varchar(255) NOT NULL DEFAULT 'USD',
  `currencyRatePerUSD` varchar(255) DEFAULT NULL,
  `paypalClientId` varchar(255) DEFAULT NULL,
  `paypalClientSecret` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default/paypal.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paypals`
--

INSERT INTO `paypals` (`id`, `status`, `accountMode`, `countryName`, `currencyName`, `currencyRatePerUSD`, `paypalClientId`, `paypalClientSecret`, `image`, `created_at`, `updated_at`) VALUES
(1, 'enable', 'sandbox', 'United States of America', 'USD', '1', 'AexojidjqAvTI_B-zDf-co5O_yKcMtq2Y40bQhipc4Qr9FAhWQuo3UY-aYA-jUa9IzpsO1nMtJpztyJn', 'ENLX26raNgcFYbKQcMUki13FAgtGDNZK8gSGDS1axKv_E-jwINkroVwJXNkYe19wiR4yadwLdGdgtcTj', 'uploads/paymentGetway/paypal-payment-getway.jpg', '2024-08-15 15:33:58', '2024-08-18 13:06:09');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `icon`, `heading`, `subheading`, `created_at`, `updated_at`) VALUES
(1, 'uploads/assets/policy/policy-icon-1.jpg', 'Return Policy', 'Money back guarantee', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(2, 'uploads/assets/policy/policy-icon-2.jpg', 'Free shipping', 'On all orders over $60.00', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(3, 'uploads/assets/policy/policy-icon-3.jpg', 'Store locator', 'Find your nearest store', '2024-08-11 08:46:17', '2024-08-11 08:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `shortDescription` text NOT NULL,
  `description` longtext DEFAULT NULL,
  `regularPrice` int(11) DEFAULT NULL,
  `selePrice` int(11) NOT NULL,
  `unitType` enum('kg','gram','pics','dozen','liter') NOT NULL,
  `categoryId` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `shortDescription`, `description`, `regularPrice`, `selePrice`, `unitType`, `categoryId`, `thumbnail`, `sku`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Eos dolor ut ut eveniet eum et ducimus dolore.', 'alias-culpa-enim-quis.', 'Ut ut et consectetur impedit autem asperiores sunt adipisci corporis deleniti a accusantium quae quia et eum eveniet tenetur.', 'Et eos incidunt est similique asperiores. Veritatis autem itaque nihil repellendus. Sed velit doloremque dolorum veniam adipisci.', NULL, 20, 'gram', 2, 'uploads/products/feature/66b87fae99c48.jpg', '6475800473448', 'active', '2024-08-11 03:09:49', '2024-08-11 03:09:49'),
(2, 'Et et consequatur sed culpa asperiores suscipit.', 'voluptatem-sequi-est-ipsam-accusantium.', 'Odio similique necessitatibus perferendis recusandae libero sed quia beatae dolor et molestiae aut.', 'Numquam neque fugit vitae deserunt reprehenderit itaque. Corrupti provident laboriosam aspernatur minus facilis tenetur sapiente. Doloremque nostrum vero ut corporis accusantium. Quia ab voluptatibus eaque rerum facere laboriosam facere.', NULL, 74, 'gram', 2, 'uploads/products/feature/66b88042f3b18.jpg', '4169271290797', 'active', '2024-08-11 03:11:52', '2024-08-11 03:11:52'),
(3, 'Natus iste unde deserunt.', 'aut-itaque-architecto-assumenda-nobis-quia.', 'Aliquam facere ipsa deserunt est porro nesciunt ut voluptate non labore quis omnis voluptatem necessitatibus consectetur velit.', 'Reiciendis voluptas et quia eius sequi. Optio dolore aut sunt ut rem. Veniam voluptatem voluptas facilis molestiae nostrum recusandae.', NULL, 8, 'dozen', 1, 'uploads/products/feature/66b8804651e97.jpg', '7917689177752', 'active', '2024-08-11 03:12:05', '2024-08-11 03:12:05'),
(4, 'Id nihil repellat nam consectetur vel asperiores aliquid.', 'porro-veritatis-omnis-voluptas-culpa-quia.', 'Sit nobis quia ea quia sit saepe earum fugiat numquam eos ab doloribus porro.', 'Esse qui nesciunt qui voluptas commodi velit atque. Ratione architecto exercitationem a est ea. Id laborum dolor et aliquam dolores vitae hic.', NULL, 5, 'kg', 2, 'uploads/products/feature/66b8804890df3.jpg', '9505179938167', 'active', '2024-08-11 03:12:11', '2024-08-11 03:12:11'),
(5, 'Id non sit cum sunt consequatur aperiam commodi.', 'a-quis-et-ut-sunt-vero-qui-tempora-neque.', 'Non rerum recusandae voluptatem vel qui et corporis voluptate eum qui numquam consequatur in ut atque tempore qui labore.', 'Eius eum qui eos nulla. Aut ut facilis rerum et fugiat consectetur. Nobis culpa optio vel in rerum.', NULL, 86, 'liter', 1, 'uploads/products/feature/66b882e46ffde.jpg', '8668482071196', 'active', '2024-08-11 03:23:03', '2024-08-11 03:23:03'),
(6, 'Est sit placeat illum.', 'quo-id-error-earum-debitis-in-dolorum.', 'Magni fugiat officia excepturi ullam et neque rerum earum voluptas accusamus quia et rerum animi ab.', 'Veritatis voluptas deleniti aut enim. Veritatis ut sed ad et sint blanditiis. Incidunt eaque quam itaque et. Sit a autem magnam maxime neque.', NULL, 57, 'liter', 1, 'uploads/products/feature/66b8836880c5c.jpg', '4870455297890', 'active', '2024-08-11 03:25:18', '2024-08-11 03:25:18'),
(7, 'Aut recusandae est iste aut nam ducimus.', 'harum-vitae-et-facere-aut-vel.', 'Voluptatem voluptatem ad tenetur dolorem cum itaque ipsam doloremque quaerat omnis asperiores eius qui aliquid iusto earum vitae et.', 'Esse esse voluptatem quas ipsam aut molestias. Sed eum rerum optio repudiandae reiciendis architecto. Ex sint delectus id magnam rerum ex voluptas. Quis accusantium reiciendis in.', NULL, 23, 'liter', 1, 'uploads/products/feature/66b883733115f.jpg', '2935679913642', 'active', '2024-08-11 03:25:25', '2024-08-11 03:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `icon`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Blueberry', 'uploads/category-icon/blueberry-e55a9ca3-4ee5-4862-9473-b49c3acf752c.png', 'blueberry', 'active', '2024-08-11 09:05:21', '2024-08-11 09:05:21'),
(2, 'Orange', 'uploads/category-icon/orange-cbc7f785-f6e2-4c24-899c-aa5b7ba51552.png', 'orange', 'active', '2024-08-11 09:05:33', '2024-08-11 09:05:33'),
(3, 'Blueberry', 'uploads/category-icon/blueberry-a4723fd0-3328-48e8-99c5-1d6242ea2066.png', 'blueberry', 'active', '2024-09-10 16:31:46', '2024-09-10 16:31:46'),
(4, 'Blueberry', 'uploads/category-icon/blueberry-64e3c4db-a703-4c8b-9a28-2c95bf9022e8.png', 'blueberry', 'active', '2024-09-10 16:32:31', '2024-09-10 16:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productId` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `productId`, `photo`, `created_at`, `updated_at`) VALUES
(1, 2, 'uploads/products/gallery/66b88058635a6.jpg', '2024-08-11 03:12:05', '2024-08-11 03:12:05'),
(2, 2, 'uploads/products/gallery/66b8805ca3ace.jpg', '2024-08-11 03:12:05', '2024-08-11 03:12:05'),
(3, 2, 'uploads/products/gallery/66b8805ddfe8c.jpg', '2024-08-11 03:12:05', '2024-08-11 03:12:05'),
(4, 3, 'uploads/products/gallery/66b880656d696.jpg', '2024-08-11 03:12:11', '2024-08-11 03:12:11'),
(5, 3, 'uploads/products/gallery/66b88068c0ddf.jpg', '2024-08-11 03:12:11', '2024-08-11 03:12:11'),
(6, 3, 'uploads/products/gallery/66b8806a16d44.jpg', '2024-08-11 03:12:11', '2024-08-11 03:12:11'),
(7, 6, 'uploads/products/gallery/66b8837ede209.jpg', '2024-08-11 03:25:25', '2024-08-11 03:25:25'),
(8, 6, 'uploads/products/gallery/66b88382183aa.jpg', '2024-08-11 03:25:25', '2024-08-11 03:25:25'),
(9, 6, 'uploads/products/gallery/66b88383ad75a.jpg', '2024-08-11 03:25:25', '2024-08-11 03:25:25'),
(10, 7, 'uploads/products/gallery/66b883855e2d7.jpg', '2024-08-11 03:25:36', '2024-08-11 03:25:36'),
(11, 7, 'uploads/products/gallery/66b883871b4bf.jpg', '2024-08-11 03:25:36', '2024-08-11 03:25:36'),
(12, 7, 'uploads/products/gallery/66b8838a4313c.jpg', '2024-08-11 03:25:36', '2024-08-11 03:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `productId` bigint(20) UNSIGNED NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL,
  `status` enum('pending','approved') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `userId`, `productId`, `review`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 'Nice', 5, 'approved', '2024-08-11 12:05:21', '2024-08-11 06:05:56'),
(2, 1, 7, 'Good', 5, 'approved', '2024-08-11 12:05:29', '2024-08-11 06:05:59'),
(3, 1, 7, 'Good Product', 5, 'approved', '2024-08-11 12:05:39', '2024-08-11 06:06:02'),
(4, 1, 6, 'Nice Product', 5, 'approved', '2024-08-11 12:23:11', '2024-08-11 06:34:47'),
(5, 1, 3, 'Good', 5, 'approved', '2024-08-11 12:23:22', '2024-08-11 06:34:52'),
(6, 1, 6, 'Nice', 5, 'approved', '2024-08-11 12:34:38', '2024-08-11 06:34:56'),
(7, 1, 6, 'Valo', 5, 'approved', '2024-08-11 12:36:24', '2024-09-06 07:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `section_titles`
--

CREATE TABLE `section_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subheading` varchar(255) DEFAULT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_titles`
--

INSERT INTO `section_titles` (`id`, `subheading`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Our Products', 'Our Fresh Products', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(2, 'Our Partners', 'Our Organic Farm Partners', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(3, 'Special Products', 'Our Special Products', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(4, 'Testimonials', 'What Our Customer Say', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(5, 'Our Blog Posts', 'Latest News & Articles', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(6, 'Our Features', 'Why Choose Us', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(7, 'How We Works', 'Our Working Process', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(8, 'Checkout New Products', 'Today’s new hotest products available now', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(9, 'Best Sells Products', 'Organic Bestseller Product', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(10, 'Special Products', 'Our Special Brand Products', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(11, 'Our Testimonials', 'What Our Customer Talking About Us', 'Lorem ipsum dolor sit amet, elit sed, ading do eiusmod tempor incididunt labore et dolore elit, sed do eiusmod.', '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(12, 'Our Blog Posts', 'Latest News & Articles', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(13, 'Our Partners', 'Our Organic Farm Partners', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(14, NULL, 'What Do You Looking For', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(15, NULL, 'Our Sweeet Client Say', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(16, NULL, 'Latest News & Articles', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(17, NULL, 'Our Freshmat Farm Partners', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17'),
(18, NULL, 'Our Popular Products', NULL, '2024-08-11 08:46:17', '2024-08-11 08:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL DEFAULT 'default/logo.png',
  `footerLogo` varchar(255) NOT NULL DEFAULT 'default/footer-logo.png',
  `favicon` varchar(255) NOT NULL DEFAULT 'default/favicon.png',
  `topbar` enum('show','hide') NOT NULL DEFAULT 'show',
  `theme` enum('all','one','two','three') NOT NULL DEFAULT 'all',
  `flstatus` enum('enable','disable') NOT NULL DEFAULT 'disable',
  `fbAppId` varchar(255) DEFAULT NULL,
  `fbSecretKey` varchar(255) DEFAULT NULL,
  `fbRedirectUrl` varchar(255) DEFAULT NULL,
  `glstatus` enum('enable','disable') NOT NULL DEFAULT 'disable',
  `glClientId` varchar(255) DEFAULT NULL,
  `glSecretKey` varchar(255) DEFAULT NULL,
  `glRedirectUrl` varchar(255) DEFAULT NULL,
  `fbPixelStatus` enum('enable','disable') NOT NULL DEFAULT 'disable',
  `fbAppIdPixel` varchar(255) DEFAULT NULL,
  `glanalyticStatus` enum('enable','disable') NOT NULL DEFAULT 'disable',
  `analiticTrackingId` varchar(255) DEFAULT NULL,
  `glrecaptchaStatus` enum('enable','disable') NOT NULL DEFAULT 'disable',
  `captchaSiteKey` varchar(255) DEFAULT NULL,
  `captchaSecretKey` varchar(255) DEFAULT NULL,
  `messageReceiveEmail` varchar(255) DEFAULT NULL,
  `messageSaveOnDB` enum('yess','no') NOT NULL DEFAULT 'yess',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `footerLogo`, `favicon`, `topbar`, `theme`, `flstatus`, `fbAppId`, `fbSecretKey`, `fbRedirectUrl`, `glstatus`, `glClientId`, `glSecretKey`, `glRedirectUrl`, `fbPixelStatus`, `fbAppIdPixel`, `glanalyticStatus`, `analiticTrackingId`, `glrecaptchaStatus`, `captchaSiteKey`, `captchaSecretKey`, `messageReceiveEmail`, `messageSaveOnDB`, `created_at`, `updated_at`) VALUES
(1, 'default/logo.png', 'default/footer-logo.png', 'default/favicon.png', 'show', 'all', 'disable', NULL, NULL, NULL, 'disable', NULL, NULL, NULL, 'disable', NULL, 'disable', NULL, 'enable', '6LeuxSYqAAAAAHz16rSaQViWLwz5twEoRgWFHb0a', '6LeuxSYqAAAAAETtCMQOr7nUdx3Om-4fY0FhRUEd', NULL, 'yess', '2024-08-11 08:46:17', '2024-08-15 06:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shortTitle` varchar(255) NOT NULL,
  `offerText` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `backgroundImg` varchar(255) NOT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `shortTitle`, `offerText`, `description`, `link`, `backgroundImg`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Organic 100% Genuine Product', '30 Days Offer Buy one Get 1', 'Contrary to popular belief, Lorem Ipsum is not random text classical Latin literature.', 'http://127.0.0.1:8000/shop/', 'uploads/slider/fb5fae44-b915-4d4a-a7b8-fd1833ba6c31.jpg', 'active', '2024-09-09 18:36:01', '2024-09-09 18:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `icon`, `url`, `created_at`, `updated_at`) VALUES
(1, 'fab fa-facebook-f', 'https://www.reddit.com/mahiudl', '2024-09-10 16:45:05', '2024-09-10 16:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `stripes`
--

CREATE TABLE `stripes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('enable','disable') NOT NULL DEFAULT 'disable',
  `countryName` varchar(255) NOT NULL DEFAULT 'United States of America',
  `currencyName` varchar(255) NOT NULL DEFAULT 'USD',
  `currencyRatePerUSD` varchar(255) DEFAULT NULL,
  `stripeClientId` varchar(255) DEFAULT NULL,
  `stripeSecretKey` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default/stripe.png',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stripes`
--

INSERT INTO `stripes` (`id`, `status`, `countryName`, `currencyName`, `currencyRatePerUSD`, `stripeClientId`, `stripeSecretKey`, `image`, `created_at`, `updated_at`) VALUES
(1, 'enable', 'United States of America', 'USD', '1', 'pk_test_51PmBKeHfjPqSriCgRUCKHJ4wf025RetkioYyZQQlE8bNtfRAsL6x7OyvqQjqYE96kuSuZuVwpgSoZVc8h59JZd1N00TYjao1jy', 'sk_test_51PmBKeHfjPqSriCgi0jlFZ6gKn1pNlGcqeBsYcY0l26f045CLOzLQlNQ06GmbfoOWUJMreUDQKCL8xdMwatGit7o008wiSgTtv', 'uploads/paymentGetway/stripe-payment-getway.png', '2024-08-15 15:34:50', '2024-08-18 07:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE `terms_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_conditions`
--

INSERT INTO `terms_conditions` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Write your terms and condition', '2024-08-11 08:46:17', '2024-08-11 08:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` double NOT NULL,
  `quote` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `rating`, `quote`, `name`, `designation`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'Wow wow wow wow', 'Mahidul Islam', 'Web Developer', 'uploads/testimonial/b82a96c6-3f8b-4eaf-862a-89fb1482c064.png', 'active', '2024-09-09 18:02:19', '2024-09-09 12:12:54');

-- --------------------------------------------------------

--
-- Table structure for table `topbars`
--

CREATE TABLE `topbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `supportNumber` varchar(255) DEFAULT NULL,
  `supportText` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topbars`
--

INSERT INTO `topbars` (`id`, `phone`, `email`, `location`, `supportNumber`, `supportText`, `created_at`, `updated_at`) VALUES
(1, '+1 (700) 230-0035', 'company@gmail.com', 'New York, United States', '55 0562-256', '24/7 Support Center', '2024-08-11 08:46:17', '2024-08-11 08:46:17');

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
  `role` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Mahidul Islam', 'admin@freshmat.com', NULL, '$2y$12$cIZrNbU0zr83DmVlt1yweuJuFbtPgWa.o.H5N1G9a0jIiUaiJ90uK', NULL, '2', '2024-08-11 02:46:17', '2024-09-19 10:10:19'),
(2, 'Test User', 'testuser@gmail.com', NULL, '$2y$12$Wgkhu6FOzLHI2/1IWbXQOOzxDdwVwGuglrOu.s6H2HARvqcEOFTqa', NULL, '1', '2024-08-12 11:56:34', '2024-08-12 11:56:34'),
(3, 'Hollee Grimes', 'soditebeli@mailinator.com', NULL, '$2y$12$.dno0wg1/Z.PFzouRwwkc.cR6gPfK9aHXBvQYxxgfA1wIK59Fgyxe', NULL, '1', '2024-08-14 08:19:13', '2024-08-14 08:19:13'),
(4, 'Jocelyn Gibson', 'syqatiny@mailinator.com', NULL, '$2y$12$/14xV/7XvlIW9ViBiQmQK.ZYUcoeFisS6VBYBi3EHswogNesY7KrS', NULL, '1', '2024-08-14 08:35:25', '2024-08-14 08:35:25'),
(5, 'Garrison Castillo', 'wuqi@mailinator.com', NULL, '$2y$12$ZOarIXIIvXwrlnSQFfxGdu2hnY6XzJvOzWxY0634z3i9eRBQVxDnm', NULL, '1', '2024-08-14 08:35:50', '2024-08-14 08:35:50'),
(6, 'Alice Kane', 'syke@mailinator.com', NULL, '$2y$12$fnCMl6kmHmz/R8aH1jCCWOBa/n1F9x.SL.OPPIzHLz3OhP7ToVAt.', NULL, '1', '2024-08-14 08:43:45', '2024-08-14 08:43:45'),
(7, 'Orange', 'vewiway205@chaladas.com', NULL, '$2y$12$0yMGf4Fi4qCKOPnvaUD0RewYKaFzfAs9HMCYWWcDYsDHbRlkL0ALi', NULL, '1', '2024-08-19 09:30:59', '2024-08-19 09:30:59'),
(8, 'Test Table', 'kobeho4386@acpeak.com', '2024-08-19 09:35:21', '$2y$12$p.pxOTCqEtIw2fCMDH7.Luy1quzVEfA3C3fww9Ilsvo6JgDW8Uyge', 'JlLELsbwNp7pZmYPBKOfQX8usLaxERmoqSZE3AwJcJ6ZtAyqlBRmBSrdCgrF', '1', '2024-08-19 09:34:22', '2024-08-19 15:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default/user-default-avator.jpg',
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `userId`, `phone`, `photo`, `city`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, '01751660934', 'default/user-default-avator.jpg', 'Dhaka', 'Dhanmondi, Dhaka, Bangladesh', '2024-08-11 02:46:17', '2024-08-20 09:51:29'),
(2, 2, '015758558', 'default/user-default-avator.jpg', 'Dhaka', 'Dhaka', '2024-08-12 17:56:34', '2024-08-13 01:11:16'),
(3, 3, NULL, 'default/user-default-avator.jpg', NULL, NULL, '2024-08-14 14:19:13', '2024-08-14 14:19:13'),
(4, 4, NULL, 'default/user-default-avator.jpg', NULL, NULL, '2024-08-14 14:35:25', '2024-08-14 14:35:25'),
(5, 5, NULL, 'default/user-default-avator.jpg', NULL, NULL, '2024-08-14 14:35:50', '2024-08-14 14:35:50'),
(6, 6, NULL, 'default/user-default-avator.jpg', NULL, NULL, '2024-08-14 14:43:45', '2024-08-14 14:43:45'),
(7, 7, NULL, 'default/user-default-avator.jpg', NULL, NULL, '2024-08-19 15:30:59', '2024-08-19 15:30:59'),
(8, 8, NULL, 'default/user-default-avator.jpg', NULL, NULL, '2024-08-19 15:34:22', '2024-08-19 15:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `productId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_posts_userid_foreign` (`userId`),
  ADD KEY `blog_posts_categoryid_foreign` (`categoryId`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_userid_foreign` (`userId`),
  ADD KEY `comments_postid_foreign` (`postId`);

--
-- Indexes for table `comments_replies`
--
ALTER TABLE `comments_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_replies_commentid_foreign` (`commentId`),
  ADD KEY `comments_replies_userid_foreign` (`userId`);

--
-- Indexes for table `contact_pages`
--
ALTER TABLE `contact_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_locations`
--
ALTER TABLE `delivery_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_configurations`
--
ALTER TABLE `email_configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_tops`
--
ALTER TABLE `footer_tops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h3_videos`
--
ALTER TABLE `h3_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_video_galleries`
--
ALTER TABLE `home_video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagram_posts`
--
ALTER TABLE `instagram_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_userid_foreign` (`userId`);

--
-- Indexes for table `invoices_products`
--
ALTER TABLE `invoices_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_products_productid_foreign` (`productId`),
  ADD KEY `invoices_products_invoiceid_foreign` (`invoiceId`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mollies`
--
ALTER TABLE `mollies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `paypals`
--
ALTER TABLE `paypals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_categoryid_foreign` (`categoryId`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_galleries_productid_foreign` (`productId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_userid_foreign` (`userId`),
  ADD KEY `reviews_productid_foreign` (`productId`);

--
-- Indexes for table `section_titles`
--
ALTER TABLE `section_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stripes`
--
ALTER TABLE `stripes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topbars`
--
ALTER TABLE `topbars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profiles_userid_foreign` (`userId`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_userid_foreign` (`userId`),
  ADD KEY `wishlists_productid_foreign` (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments_replies`
--
ALTER TABLE `comments_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_pages`
--
ALTER TABLE `contact_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery_locations`
--
ALTER TABLE `delivery_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `email_configurations`
--
ALTER TABLE `email_configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_tops`
--
ALTER TABLE `footer_tops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `h3_videos`
--
ALTER TABLE `h3_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_video_galleries`
--
ALTER TABLE `home_video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instagram_posts`
--
ALTER TABLE `instagram_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `invoices_products`
--
ALTER TABLE `invoices_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `mollies`
--
ALTER TABLE `mollies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paypals`
--
ALTER TABLE `paypals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `section_titles`
--
ALTER TABLE `section_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stripes`
--
ALTER TABLE `stripes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topbars`
--
ALTER TABLE `topbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_categoryid_foreign` FOREIGN KEY (`categoryId`) REFERENCES `blog_categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `blog_posts_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_postid_foreign` FOREIGN KEY (`postId`) REFERENCES `blog_posts` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `comments_replies`
--
ALTER TABLE `comments_replies`
  ADD CONSTRAINT `comments_replies_commentid_foreign` FOREIGN KEY (`commentId`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_replies_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `invoices_products`
--
ALTER TABLE `invoices_products`
  ADD CONSTRAINT `invoices_products_invoiceid_foreign` FOREIGN KEY (`invoiceId`) REFERENCES `invoices` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `invoices_products_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_categoryid_foreign` FOREIGN KEY (`categoryId`) REFERENCES `product_categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD CONSTRAINT `product_galleries_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlists_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
