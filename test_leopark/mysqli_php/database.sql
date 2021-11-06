-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 10:04 AM
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
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `dmchuyenkhoa`
--

CREATE TABLE `dmchuyenkhoa` (
  `id` int(11) NOT NULL,
  `machuyenkhoa` varchar(50) NOT NULL,
  `tenchuyenkhoa` varchar(150) NOT NULL,
  `Tinhtrang` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dmduongdung`
--

CREATE TABLE `dmduongdung` (
  `id` int(11) NOT NULL,
  `maduongdung` varchar(50) NOT NULL,
  `tenduongdung` varchar(150) NOT NULL,
  `Tinhtrang` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dmduongdung`
--

INSERT INTO `dmduongdung` (`id`, `maduongdung`, `tenduongdung`, `Tinhtrang`) VALUES
(5, 'TEST111', 'tên đương dùng', 1),
(6, 's', 'sdddddddđ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dmchuyenkhoa`
--
ALTER TABLE `dmchuyenkhoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dmduongdung`
--
ALTER TABLE `dmduongdung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dmchuyenkhoa`
--
ALTER TABLE `dmchuyenkhoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dmduongdung`
--
ALTER TABLE `dmduongdung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
