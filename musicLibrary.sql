-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 12, 2017 at 09:18 PM
-- Server version: 5.5.50
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicLibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `album` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `post_id`, `album`, `year`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Let Go', 2002, '2017-02-12 17:02:15', '2017-02-12 17:02:15', NULL),
(3, 2, 'Mutter', 2001, '2017-02-12 17:09:38', '2017-02-12 17:09:38', NULL),
(4, 4, 'Anti', 2016, '2017-02-12 17:16:54', '2017-02-12 17:16:54', NULL),
(5, 2, 'Reise, Reise', 2004, '2017-02-12 17:24:00', '2017-02-12 17:24:00', NULL),
(6, 2, 'Rammlied', 2009, '2017-02-12 17:33:10', '2017-02-12 17:33:10', NULL),
(7, 3, 'Untouchables', 2002, '2017-02-12 17:39:47', '2017-02-12 17:39:47', NULL),
(8, 3, 'Take a Look in the Morror', 2003, '2017-02-12 17:45:39', '2017-02-12 17:45:39', NULL),
(9, 6, 'Sale el Sol', 2010, '2017-02-12 17:47:35', '2017-02-12 17:47:35', NULL),
(10, 5, 'Infinite', 1996, '2017-02-12 17:53:14', '2017-02-12 17:53:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_07_23_203935_create_posts_table', 1),
('2016_07_26_203838_ad_column_to_table_posts', 1),
('2017_02_08_172827_create_albums_table', 1),
('2017_02_08_190450_ad_column_to_table_albums', 1),
('2017_02_10_162049_create_songs_table', 1),
('2017_02_10_162152_ad_column_to_table_songs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Avril Lavigne', '2017-02-12 14:01:48', '2017-02-12 14:01:48', NULL),
(2, 'Rammstein', '2017-02-12 14:07:11', '2017-02-12 14:07:11', NULL),
(3, 'Korn', '2017-02-12 14:14:46', '2017-02-12 14:14:46', NULL),
(4, 'Rihanna', '2017-02-12 14:15:45', '2017-02-12 14:15:45', NULL),
(5, 'Eminem', '2017-02-12 14:15:59', '2017-02-12 14:15:59', NULL),
(6, 'Shakira', '2017-02-12 14:16:07', '2017-02-12 14:16:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(10) unsigned NOT NULL,
  `album_id` int(10) unsigned NOT NULL,
  `track_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `album_id`, `track_title`, `duration`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Loosing Grip', '3:54', '2017-02-12 14:02:38', '2017-02-12 14:02:38', NULL),
(2, 1, 'Complicated', '4:05', '2017-02-12 14:03:02', '2017-02-12 14:03:02', NULL),
(3, 1, 'Skater Boy', '3:24', '2017-02-12 14:03:24', '2017-02-12 14:03:24', NULL),
(4, 1, 'I''m With You', '3:44', '2017-02-12 14:03:49', '2017-02-12 14:03:49', NULL),
(5, 1, 'Mobile', '3:32', '2017-02-12 14:04:09', '2017-02-12 14:04:09', NULL),
(6, 1, 'Unwanted', '3:41', '2017-02-12 14:04:25', '2017-02-12 14:04:25', NULL),
(7, 1, 'Tomorrow', '3:49', '2017-02-12 14:04:42', '2017-02-12 14:04:42', NULL),
(8, 1, 'Anything But Ordinary', '4:11', '2017-02-12 14:05:13', '2017-02-12 14:05:13', NULL),
(9, 1, 'Things I''ll Never Say', '3:44', '2017-02-12 14:05:39', '2017-02-12 14:05:39', NULL),
(10, 1, 'My World', '3:27', '2017-02-12 14:05:58', '2017-02-12 14:05:58', NULL),
(11, 1, 'Nobody''s Fool', '3:57', '2017-02-12 14:06:18', '2017-02-12 14:06:18', NULL),
(12, 1, 'Too Much to Ask', '3:45', '2017-02-12 14:06:40', '2017-02-12 14:06:40', NULL),
(13, 1, 'Naked', '4:28', '2017-02-12 14:06:56', '2017-02-12 14:06:56', NULL),
(15, 3, 'Mein Herz Brennt', '4:40', '2017-02-12 14:10:00', '2017-02-12 14:10:00', NULL),
(16, 3, 'Links 2-3-4', '3:37', '2017-02-12 14:11:11', '2017-02-12 14:11:11', NULL),
(17, 3, 'Sonne', '4:33', '2017-02-12 14:11:29', '2017-02-12 14:11:29', NULL),
(18, 3, 'Ich Will', '3:38', '2017-02-12 14:11:47', '2017-02-12 14:11:47', NULL),
(19, 3, 'Feuer Frei!', '3:11', '2017-02-12 14:12:12', '2017-02-12 14:12:12', NULL),
(20, 3, 'Mutter', '4:32', '2017-02-12 14:12:29', '2017-02-12 14:12:29', NULL),
(21, 3, 'Spieluhr', '4:46', '2017-02-12 14:12:56', '2017-02-12 14:12:56', NULL),
(22, 3, 'Zwitter', '4:17', '2017-02-12 14:13:12', '2017-02-12 14:13:12', NULL),
(23, 3, 'Rein Raus', '3:10', '2017-02-12 14:13:36', '2017-02-12 14:13:36', NULL),
(24, 3, 'Adios', '3:48', '2017-02-12 14:13:51', '2017-02-12 14:13:51', NULL),
(25, 3, 'Nebel', '4:55', '2017-02-12 14:14:06', '2017-02-12 14:14:06', NULL),
(26, 4, 'Consideration', '2:41', '2017-02-12 14:17:25', '2017-02-12 14:17:25', NULL),
(27, 4, 'James Joint', '1:12', '2017-02-12 14:18:28', '2017-02-12 14:18:28', NULL),
(28, 4, 'Kiss It Better', '4:13', '2017-02-12 14:19:00', '2017-02-12 14:19:00', NULL),
(29, 4, 'Work', '3:39', '2017-02-12 14:19:16', '2017-02-12 14:19:16', NULL),
(30, 4, 'Desperado', '3:06', '2017-02-12 14:19:41', '2017-02-12 14:19:41', NULL),
(31, 4, 'Woo', '3:56', '2017-02-12 14:19:55', '2017-02-12 14:19:55', NULL),
(32, 4, 'Needed Me', '3:12', '2017-02-12 14:20:13', '2017-02-12 14:20:13', NULL),
(33, 4, 'Yeah, I Said It', '2:13', '2017-02-12 14:20:38', '2017-02-12 14:20:38', NULL),
(34, 4, 'Some OI''Mistakes', '6:31', '2017-02-12 14:21:08', '2017-02-12 14:21:08', NULL),
(35, 4, 'Never Ending', '3:23', '2017-02-12 14:21:27', '2017-02-12 14:21:27', NULL),
(36, 4, 'Love On the Brain', '3:44', '2017-02-12 14:21:59', '2017-02-12 14:21:59', NULL),
(37, 4, 'Heigher', '2:01', '2017-02-12 14:22:17', '2017-02-12 14:22:17', NULL),
(38, 4, 'Close to You', '3:43', '2017-02-12 14:22:35', '2017-02-12 14:22:35', NULL),
(39, 5, 'Reise, Reise', '4:11', '2017-02-12 14:25:05', '2017-02-12 14:25:05', NULL),
(40, 5, 'Mein Teil', '4:32', '2017-02-12 14:25:26', '2017-02-12 14:25:26', NULL),
(41, 5, 'Dalai Lama', '5:38', '2017-02-12 14:25:45', '2017-02-12 14:25:45', NULL),
(42, 5, 'Keine Lust', '3:45', '2017-02-12 14:26:06', '2017-02-12 14:26:06', NULL),
(43, 5, 'Los', '4:25', '2017-02-12 14:26:21', '2017-02-12 14:26:21', NULL),
(44, 5, 'Amerika', '3:47', '2017-02-12 14:26:43', '2017-02-12 14:26:43', NULL),
(45, 5, 'Moskau', '4:16', '2017-02-12 14:26:59', '2017-02-12 14:26:59', NULL),
(46, 5, 'Morgenstern', '4:00', '2017-02-12 14:27:23', '2017-02-12 14:27:23', NULL),
(47, 5, 'Stein um Stein', '3:56', '2017-02-12 14:27:44', '2017-02-12 14:27:44', NULL),
(48, 5, 'Ohne Dich', '4:32', '2017-02-12 14:28:05', '2017-02-12 14:28:05', NULL),
(49, 5, 'Amour', '4:51', '2017-02-12 14:28:26', '2017-02-12 14:28:26', NULL),
(50, 6, 'Rammlied', '5:19', '2017-02-12 14:33:31', '2017-02-12 14:33:31', NULL),
(51, 6, 'Ich Tu dir Weh', '5:02', '2017-02-12 14:33:57', '2017-02-12 14:33:57', NULL),
(52, 6, 'Waidmanns Heil', '3:33', '2017-02-12 14:34:23', '2017-02-12 14:34:23', NULL),
(53, 6, 'Heifisch', '3:45', '2017-02-12 14:34:49', '2017-02-12 14:34:49', NULL),
(54, 6, 'B********', '4:15', '2017-02-12 14:35:07', '2017-02-12 14:35:07', NULL),
(55, 6, 'Fruhling in Paris', '4:45', '2017-02-12 14:35:37', '2017-02-12 14:35:37', NULL),
(56, 6, 'Wiener Blut', '3:53', '2017-02-12 14:36:00', '2017-02-12 14:36:00', NULL),
(57, 5, 'Pussy', '4:00', '2017-02-12 14:36:18', '2017-02-12 14:36:18', NULL),
(58, 6, 'Liebe ist fur alle Da', '3:26', '2017-02-12 14:36:53', '2017-02-12 14:36:53', NULL),
(59, 6, 'Mehr', '4:09', '2017-02-12 14:37:10', '2017-02-12 14:37:10', NULL),
(60, 6, 'Roter Sand', '3:59', '2017-02-12 14:37:34', '2017-02-12 14:37:34', NULL),
(61, 6, 'Fuhre Mich', '4:34', '2017-02-12 14:37:55', '2017-02-12 14:37:55', NULL),
(62, 6, 'Donaukinder', '5:18', '2017-02-12 14:38:19', '2017-02-12 14:38:19', NULL),
(63, 6, 'Halt', '4:21', '2017-02-12 14:38:35', '2017-02-12 14:38:35', NULL),
(64, 6, 'Liese', '3:56', '2017-02-12 14:38:54', '2017-02-12 14:38:54', NULL),
(65, 7, 'Here To Stay', '4:32', '2017-02-12 14:40:14', '2017-02-12 14:40:14', NULL),
(66, 7, 'Make Believe', '4:37', '2017-02-12 14:40:38', '2017-02-12 14:40:38', NULL),
(67, 7, 'Blame', '3:51', '2017-02-12 14:40:54', '2017-02-12 14:40:54', NULL),
(68, 7, 'Hollow Life', '4:09', '2017-02-12 14:41:18', '2017-02-12 14:41:18', NULL),
(69, 7, 'Bottled Up Inside', '4:00', '2017-02-12 14:41:43', '2017-02-12 14:41:43', NULL),
(70, 7, 'Thoughtless', '4:33', '2017-02-12 14:42:01', '2017-02-12 14:42:01', NULL),
(71, 7, 'Hating', '5:10', '2017-02-12 14:42:18', '2017-02-12 14:42:18', NULL),
(72, 7, 'One More Time', '4:39', '2017-02-12 14:42:37', '2017-02-12 14:42:37', NULL),
(73, 7, 'Alone I Break', '4:17', '2017-02-12 14:42:59', '2017-02-12 14:42:59', NULL),
(74, 7, 'Embrace', '4:27', '2017-02-12 14:43:16', '2017-02-12 14:43:16', NULL),
(75, 7, 'Beat It Upright', '4:16', '2017-02-12 14:43:51', '2017-02-12 14:43:51', NULL),
(76, 7, 'Wake Up Hate', '3:13', '2017-02-12 14:44:22', '2017-02-12 14:44:22', NULL),
(77, 7, 'I''m Hiding', '3:57', '2017-02-12 14:44:45', '2017-02-12 14:44:45', NULL),
(78, 7, 'No One''s There', '5:01', '2017-02-12 14:45:06', '2017-02-12 14:45:06', NULL),
(79, 9, 'Sale el Sol', '3:20', '2017-02-12 14:47:57', '2017-02-12 14:47:57', NULL),
(80, 9, 'Loka', '3:13', '2017-02-12 14:48:15', '2017-02-12 14:48:15', NULL),
(81, 9, 'Antes de las Seis', '2:55', '2017-02-12 14:48:48', '2017-02-12 14:48:48', NULL),
(82, 9, 'Gordita', '3:26', '2017-02-12 14:49:08', '2017-02-12 14:49:08', NULL),
(83, 9, 'Addicted to You', '2:27', '2017-02-12 14:49:28', '2017-02-12 14:49:28', NULL),
(84, 9, 'Lo que mas', '2:27', '2017-02-12 14:49:49', '2017-02-12 14:49:49', NULL),
(85, 9, 'Mariposa', '3:47', '2017-02-12 14:50:11', '2017-02-12 14:50:11', NULL),
(86, 9, 'Rabiosa', '2:50', '2017-02-12 14:50:34', '2017-02-12 14:50:34', NULL),
(87, 9, 'Devocion', '3:30', '2017-02-12 14:50:53', '2017-02-12 14:50:53', NULL),
(88, 9, 'Islands', '2:43', '2017-02-12 14:51:10', '2017-02-12 14:51:10', NULL),
(89, 9, 'Tu Boca', '3:26', '2017-02-12 14:51:30', '2017-02-12 14:51:30', NULL),
(90, 9, 'Waka Waka', '3:04', '2017-02-12 14:51:49', '2017-02-12 14:51:49', NULL),
(91, 10, 'Infinite', '4:01', '2017-02-12 14:53:33', '2017-02-12 14:53:33', NULL),
(92, 10, 'W.E.G.O', '2:56', '2017-02-12 14:53:54', '2017-02-12 14:53:54', NULL),
(93, 10, 'It''s OK', '3:29', '2017-02-12 14:54:13', '2017-02-12 14:54:13', NULL),
(94, 10, 'Tonite', '3:43', '2017-02-12 14:54:33', '2017-02-12 14:54:33', NULL),
(95, 1, '313', '4:11', '2017-02-12 14:54:53', '2017-02-12 14:54:53', NULL),
(96, 10, 'Maxine', '3:55', '2017-02-12 14:55:09', '2017-02-12 14:55:09', NULL),
(97, 10, 'Open Mic', '4:02', '2017-02-12 14:55:26', '2017-02-12 14:55:26', NULL),
(98, 10, 'Never 2 Far', '3:38', '2017-02-12 14:55:51', '2017-02-12 14:55:51', NULL),
(99, 10, 'Searchin', '3:45', '2017-02-12 14:56:14', '2017-02-12 14:56:14', NULL),
(100, 10, 'Backstabber', '3:24', '2017-02-12 14:56:35', '2017-02-12 14:56:35', NULL),
(101, 10, 'Jealousy Woes II', '3:19', '2017-02-12 14:57:03', '2017-02-12 14:57:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
