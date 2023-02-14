-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2023 at 04:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_esperojaya`
--
CREATE DATABASE IF NOT EXISTS `website_esperojaya` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `website_esperojaya`;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int NOT NULL AUTO_INCREMENT,
  `administrator_id` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `phone` varchar(24) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `administrator_id` (`administrator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id` int NOT NULL AUTO_INCREMENT,
  `event_id` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `subtitle` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `feedback_id` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `content` varchar(512) COLLATE utf8mb4_bin NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `feedback_id` (`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_id` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `filename` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `alt` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `image_id` (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `menu_id` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `parent_id` int NOT NULL,
  `url` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_bin NOT NULL,
  `type` varchar(64) COLLATE utf8mb4_bin NOT NULL,
  `new_tab` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menu_id` (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int NOT NULL AUTO_INCREMENT,
  `page_id` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `description` varchar(64) COLLATE utf8mb4_bin NOT NULL,
  `content` longtext COLLATE utf8mb4_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_id` (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_id` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `slug` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `content` longtext COLLATE utf8mb4_bin NOT NULL,
  `author` varchar(64) COLLATE utf8mb4_bin NOT NULL,
  `status` enum('active','draft') CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_id` (`post_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `post_image`
--

DROP TABLE IF EXISTS `post_image`;
CREATE TABLE IF NOT EXISTS `post_image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_id` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `post_id` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
