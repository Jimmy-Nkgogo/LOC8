-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 05:28 PM
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
-- Database: `loc8`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `incoming_msg_id`, `outgoing_msg_id`, `message`) VALUES
(3, 828859501, 484791823, 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `first_name`, `last_name`, `email`, `password`, `image`, `status`, `user_type`) VALUES
(2, 628860583, 'Sabelo', 'Ndlovu', 'sabelo@gmail.com', '$2y$10$aX0omEyPTbhkNCv5DolMf.gXXZiI.tg.6YarKjiD23a7V3JXHntLO', '1685826790sabelo.png', 'offline now', 'carpenter'),
(4, 338511559, 'Jimmy', 'Nkgogo', 'jimmy@gmail.com', '$2y$10$SxweZLMVJLskCgNyII/uFee1uUsoeerKy3ZSVYnuQUpryMVhS5v8S', '1685897236jimmy.jpeg', 'offline now', 'developer'),
(5, 484791823, 'Caleb', 'Diba', 'caleb@gmail.com', '$2y$10$8ltAAqGUvp68s40W6jeVoeB7C4qeG4ru6z533MsvYNLdusiMuT2ki', '1685964922caleb.jpg', 'Active now', 'personal trainer'),
(6, 828859501, 'Yoliswa', 'Mthethwa', 'yoliswamthethwa@gmail.com', '$2y$10$ZvHywWH/deaZA.8BBNVogekBfaOdlplKS2wyDlypZ1Ee/G81e/dFG', '1685964997yoliswa.png', 'Active now', 'user'),
(7, 1401528415, 'Sinalo', 'Ntuli', 'sinalo@gmail.com', '$2y$10$jaFvYAT910RuD1tqldjrsupBpCHVnrh/KZpavJP2MpNtl2aBCFH5e', '1685965083sinalo.png', 'offline now', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
