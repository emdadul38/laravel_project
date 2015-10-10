-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2015 at 04:18 অপরাহ্ণ
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `Articles`
--

CREATE TABLE IF NOT EXISTS `Articles` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) unsigned NOT NULL,
  `dept_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faculty_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_name`, `faculty_name`, `info`, `created_at`, `updated_at`) VALUES
(1, 'CSE', 'Engineering & Technology', 'CSE is the first established dept. of this faculty', '2015-08-10 00:51:05', '2015-08-10 00:51:05'),
(2, 'ETE', 'Engineering & Technology', 'ETE is the Last established dept. of this faculty', '2015-08-10 00:52:53', '2015-08-10 00:52:53'),
(3, 'Applied PHY', 'Engineering & Technology', 'Applied PHY is the Last established dept. of this faculty', '2015-08-10 00:55:51', '2015-08-10 00:55:51'),
(4, 'Sociology', 'Social Science', 'Sociology is the academic study of social behavior, including its origins, development, organization, and institutions. It is a social science that uses various methods of empirical investigation and critical analysis to develop a body of knowledge about social order, social disorder and social change.', '2015-08-10 02:18:46', '2015-08-10 02:18:46'),
(5, 'English', 'Arts', 'English is the International communication language !!!', '2015-08-10 07:57:15', '2015-08-10 07:57:15'),
(6, 'Management', 'Business Fuculty', 'Management in businesses and organizations is the function that coordinates the efforts of people to accomplish goals and objectives by using available resources efficiently and effectively. Management includes planning, organizing, staffing, leading or directing, and controlling an organization to accomplish the goal.', '2015-08-10 07:58:30', '2015-08-10 07:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `userhubs`
--

CREATE TABLE IF NOT EXISTS `userhubs` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `program` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userhubs`
--

INSERT INTO `userhubs` (`id`, `name`, `program`, `email`, `district`, `created_at`, `updated_at`) VALUES
(35, 'Emdadul', ' Mobile Application Design & Development ', 'emdadul225@gmail.com', 'Rangpur', '2015-08-11 02:30:18', '2015-08-11 02:30:18'),
(36, 'Md. Shamsuzzaman', ' Web Application Design & Development ', 'Szaman_409@yahoo.com', 'Rangpur', '2015-08-11 02:34:17', '2015-08-11 02:34:17'),
(37, 'S.M. Mahmudul Hasan', ' Certified User Interface Designer (CUID) ', 'shohan@therapservices.net', 'Dhaka', '2015-08-11 02:39:02', '2015-08-11 02:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Second Title', 'Second Body text here.. ', '2015-08-09 05:30:01', '2015-08-09 05:32:17'),
(2, 'Title here !!', 'Body Here !!', '2015-08-09 06:05:12', '2015-08-09 06:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE IF NOT EXISTS `writers` (
  `id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `program` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `first_name`, `last_name`, `program`, `email`, `password`, `gender`, `birthday`, `created_at`, `updated_at`) VALUES
(8, 'Emdadul', 'Huq', 'MADD', 'emdadul381@gmail.com', '1478963', 'Male', '2015-08-13', '2015-08-13 01:22:21', '2015-08-13 05:27:26'),
(9, 'Emdadul', 'Huq', 'MADD', 'ksemdadul225@gmail.com', '123456', 'Male', '2015-08-13', '2015-08-13 01:27:18', '2015-08-13 01:27:18'),
(12, 'Nasir', 'Uddin', 'MADD', 'Nasim@gmail.com', '123456', 'Male', '2015-08-17', '2015-08-17 11:40:12', '2015-08-17 11:40:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userhubs`
--
ALTER TABLE `userhubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Articles`
--
ALTER TABLE `Articles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `userhubs`
--
ALTER TABLE `userhubs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
