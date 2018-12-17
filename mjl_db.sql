-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 07:21 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mjl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_thumb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `author`, `description`, `slug`, `blog_thumb`, `created_at`, `updated_at`) VALUES
(8, 'Don give a fuck', 'admin', 'I guess you did not understand the question. He wants to supply email in Eloquent find() method and wants it to match against emil column – Khan Shahrukh Dec 2 \'14 at 12:01 \r\nI edited my comment – Khan Shahrukh Dec 2 \'14 at 12:06\r\nWhy would you use the Query Builder for this when op has an Eloquent model setup? The problem is not that this cannot be done easily in Eloquent, but the fact there is no null checking before attempting to set properties on the object (See my answer) – Wader Dec\r\n@Wader yes, you\'re right. I\'d delete this if it wasn\'t accepted. That +1 on yours is from me. I\'ll update this to make it clearer – msturdy Dec 2 \'14 at 18:33 \r\nI wasn\'t saying this was wrong, simply questioning the benefits to using the Query Builder over Eloquent. I realise my comment sounds quite harsh, apologies – Wader Dec 3 \'14 at 9:02', 'don-give-a-fuck', 'img/blog/hqdefault.jpg', '2018-11-11 19:02:34', '2018-11-11 19:04:09'),
(14, 'dfggrtewtsahdsffj', 'sfdhdgnjhfg', 'dhfghdf', 'dfggrtewtsahdsffj', 'img/blog/Capture.JPG', '2018-11-11 19:31:02', '2018-11-11 19:31:02'),
(16, 'my new blog', 'mark jason landicho', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'my-new-blog', 'http://localhost:8000/img/2/my-first-porfolio-website.jpg', '2018-12-06 21:36:34', '2018-12-06 21:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'mark jason landicho', 'awsdnn@gmail.com', '098927835', 'ang gwapo  o', '2018-12-11 00:33:39', '2018-12-11 00:33:39'),
(2, 'wd', 'awd@afaf', 'awd', 'awd', '2018-12-11 00:35:15', '2018-12-11 00:35:15'),
(3, 'wd', 'awd@afaf', 'awd', 'awd', '2018-12-11 00:36:28', '2018-12-11 00:36:28'),
(4, 'mark jason landichop', 'anwd@adb', '234161661', 'lkahfhab hakujfkba kjahbwkjdf', '2018-12-11 00:39:28', '2018-12-11 00:39:28'),
(5, 'dawd', 'ad@adw', 'adwawd', 'awdadw', '2018-12-11 00:42:06', '2018-12-11 00:42:06'),
(6, 'aw', 'aww@ad', 'ww', 'wwdwd', '2018-12-11 00:42:29', '2018-12-11 00:42:29'),
(7, 'Marc Jacobs', 'media.windoway@gmail.com', 'amwdf@afwsknh', 'afdwafgasdf', '2018-12-11 01:11:15', '2018-12-11 01:11:15'),
(8, 'Marc Jacobs', 'media.windoway@gmail.com', '4545', 'afdasf', '2018-12-11 01:14:27', '2018-12-11 01:14:27'),
(9, 'Marc Jacobs', 'media.windoway@gmail.com', '4545', 'afdasf', '2018-12-11 01:15:57', '2018-12-11 01:15:57'),
(10, 'Marc Jacobs', 'media.windoway@gmail.com', 'awdawd', 'awdawdawd', '2018-12-11 01:16:49', '2018-12-11 01:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_10_23_072316_create_blogs_table', 1),
(6, '2018_10_23_071500_create_portfolios_table', 2),
(8, '2018_12_11_072220_create_messages_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `port_thumb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `category`, `description`, `content`, `port_thumb`, `slug`, `created_at`, `updated_at`) VALUES
(6, 'Website Portfolio', 'My first website portfolio', 'This is my first website portfolio i`ve made just in 1 week just to present only to the employer when im applying in my first job. This is a simple one page front-end website only, i used bootstrap on it to help me to achieve a responsive website. Here i was able to make my personal logo, to put in the my website. Because of this website, i\'ve been hired to my first job.', '<p>Here is the link of the website. <a href=\"/mjlandicho.co.nf\">mjlandicho.co.nf</a></p>\r\n<p><img class=\"img-fluid\" src=\"/img/2/page-header.JPG\" alt=\"\" /></p>\r\n<p><strong>Page Header</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>About Section</strong></p>', 'http://localhost:8000/img/2/first.JPG', 'website-portfolio', '2018-12-06 01:59:03', '2018-12-14 18:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mark Jason Landicho', 'lmarkjason.20@gmail.com', NULL, '$2y$10$Lbh/aESCkWircLdGYfAQ/.s3GzkPwc0kBfWdf7DtqaZcyxy1AH4B2', '677yFVhF506yzBGvBs86DHZRHEZMLLHeGUTcGQPyJNYP8uy6ZjfDFp7Az03c', '2018-12-01 01:02:58', '2018-12-01 01:02:58'),
(2, 'mjlandicho', 'markjason_landicho@yahoo.com', NULL, '$2y$10$XmyipAMu1P9vq3X.E71Zh.NyzlSGWIw/Cy9xsa8iUbwjnaypur4Ai', NULL, '2018-12-04 19:55:00', '2018-12-04 19:55:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portfolios_title_unique` (`title`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
