-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 09:24 PM
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
-- Database: `chat`
--

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
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `first_name`, `last_name`, `email`, `password`, `image`, `status`) VALUES
(9, 518047864, 'Jimmy', 'Nkgogo', 'jimmy@gmail.com', '$2y$10$79fJN1JX/XlXyItPP7GGiO7gyJJWbrZOW0LJFbaMTSaFJZUALFzLS', '1685576620jimmy.jpeg', 'Active now'),
(10, 1424124372, 'Sabelo', 'Ndlovu', 'sabelo@gmail.com', '$2y$10$pPJxX580oSc.QgsJyUmJYOdxnrjqpNxbmwWr1EV45LSUCvA4dsBq6', '1685576686sabelo.png', 'Active now'),
(11, 1050000028, 'Caleb', 'Diba', 'caleb@gmail.com', '$2y$10$bSDXfVeptUt42V0W/TCK8.bi0XnEYlNJvT3pZQFEml190L/A2kI7G', '1685576726caleb.jpg', 'Active now'),
(12, 1639630537, 'Yoliswa', 'Mthethwa', 'yoliswamthethwa@gmail.com', '$2y$10$pJfVeWTNvcF44ibMGpNP9.poLTeLIwUIqk2ENZg160M9Z2LIc.wnK', '1685576772yoliswa.png', 'Active now'),
(13, 222779578, 'Sinalo', 'Ntuli', 'sinalo@gmail.com', '$2y$10$FtkZapMSufv33EXnzowDau/.6k19dHWg69tfoToOV0GPy.f2Hjv6C', '1685576805sinalo.png', 'Active now'),
(14, 267047620, 'Promise', 'Maila', 'promise@gmail.com', '$2y$10$nfImYTe7ENATmDYdA/EE5e0/tI/54KKTltfrrWli0Q4poyBUtNI4.', '1685576839promise.png', 'Active now'),
(15, 261961433, 'Mukelani', 'Mashoba', 'mashoba@gmail.com', '$2y$10$yNiTnI/DUiq7RfkZiODz2e0513l74Qe4iB7AzwiPhKsS0roquhBH2', '1685619163Mukelani.jpg', 'Active now'),
(16, 1080132600, '123', '45', '123@gmail.com', '$2y$10$nf04MI6ml9R/KJyFK3dVneXItxF7eOcasqFWbR9yNo4xFUgyIjtli', '1685619888cropped.jpg', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
