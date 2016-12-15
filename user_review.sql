-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 12:36 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tarvis20_sharebee`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_review`
--

CREATE TABLE `user_review` (
  `id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `star_rating` float NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_review`
--

INSERT INTO `user_review` (`id`, `from_user_id`, `to_user_id`, `comment`, `star_rating`, `deleted_at`, `created_at`, `updated_at`) VALUES
(46, 2, 1, 'Testing', 2, '0000-00-00 00:00:00', '2016-12-12 07:04:44', '2016-12-12 07:04:44'),
(47, 2, 1, 'Test', 3.5, '0000-00-00 00:00:00', '2016-12-12 07:09:14', '2016-12-12 07:09:14'),
(48, 2, 1, 'fgfdg', 0, '0000-00-00 00:00:00', '2016-12-12 07:22:28', '2016-12-12 07:22:28'),
(49, 2, 1, 'Test', 2.5, '0000-00-00 00:00:00', '2016-12-12 08:47:13', '2016-12-12 08:47:13'),
(50, 2, 1, 'dsfdsf', 3, '0000-00-00 00:00:00', '2016-12-13 00:30:57', '2016-12-13 00:30:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_review`
--
ALTER TABLE `user_review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_review`
--
ALTER TABLE `user_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
