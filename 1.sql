-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 07:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author`) VALUES
(1, 'saman'),
(2, 'hamed');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'public'),
(2, 'private');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `state` enum('verify','unverify') DEFAULT 'unverify'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user`, `time`, `state`) VALUES
(1, 'hello', 'yashar', '100022333', 'unverify'),
(2, 'ok', 'ali', '12200000', 'verify');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `image` text DEFAULT NULL,
  `text` text DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `full_post` text DEFAULT NULL,
  `category_id` varchar(10) DEFAULT NULL,
  `author_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `text`, `time`, `full_post`, `category_id`, `author_id`) VALUES
(10, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(11, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(12, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(13, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(14, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(15, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(16, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(17, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(18, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(19, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(20, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(21, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(22, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(23, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(24, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(25, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(26, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(27, 'انتقال اسناد محرمانه اوکراین به غرب این کشور برای حمله احتمالی روسیه', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', 'ارتش اوکراین در حال انتقال اسنادی با نشان «محرمانه» از مقر خود در پایتخت اوکراین کیف به مکان امن‌تری در غرب این کشور است....', '4 ساعت قبل', NULL, 'اوکراین', '1'),
(28, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(29, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(30, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(31, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(32, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(33, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(34, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(35, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(36, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(37, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(38, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(39, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(40, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(41, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(42, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(43, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(44, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(45, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(46, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(47, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(48, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(49, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(50, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(51, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(52, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(53, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(54, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(55, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(56, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(57, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(58, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(59, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(60, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(61, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(62, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(63, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(64, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(65, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(66, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(67, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(68, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(69, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(70, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(71, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(72, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(73, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(74, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(75, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(76, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(77, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(78, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(79, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(80, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(81, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(82, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(83, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(84, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(85, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(86, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(87, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(88, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(89, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(90, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(91, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(92, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(93, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(94, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(95, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(96, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(97, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(98, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(99, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(100, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(101, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(102, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(103, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(104, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(105, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(106, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(107, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(108, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(109, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(110, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(111, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(112, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(113, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(114, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(115, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(116, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(117, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(118, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(119, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(120, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(121, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(122, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(123, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(124, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(125, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(126, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(127, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(128, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(129, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(130, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(131, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(132, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(133, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(134, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman'),
(135, 'iran', NULL, 'hello i am iranian', 'now', NULL, 'iran', 'saman');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, '46745745674567', '46745745674567'),
(3, 'dfsdfsdfsdf', 'dfsdfsdfsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
