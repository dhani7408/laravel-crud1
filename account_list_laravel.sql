-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 09:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account_list_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(8, 'testing', 'testing@gmail.com', 'eyJpdiI6IktLempNRHBEeWNvSUpFb0FFVmgzZUE9PSIsInZhbHVlIjoiTXY2b1Z3dUlNTWpTcmFCQTRlZ29vUT09IiwibWFjIjoiZTRhMDBmMTYxNzBjYTk3NWJmMTQ1ZDBjODczOTlkMjMzNzIwZGYxNjYzNGJjN2M3OTYwZjg0MDA0NTUwMzA0ZSJ9'),
(9, 'admin', 'admin@gmail.com', 'eyJpdiI6ImxBOGtOclU1SmZVS0JueDN1NWNqYmc9PSIsInZhbHVlIjoiYS84RGJuUXU2ZFNZMExzVmFienE0QT09IiwibWFjIjoiN2ViYjg4NDFlNDllZDhiMTBiODZiZjBiOTgzMDQzMmJlYTQwOTI1NjlkNWRlYTcyYWNiOTBkOGFhNGY2N2Q5MSJ9'),
(10, 'demo', 'demo@gmail.com', 'eyJpdiI6IlZZV0FuYUtrVlV4Uy9UUlA1WnE1QUE9PSIsInZhbHVlIjoiVVI1TW16NGhaQ2d2aWUyMS9xWnlSdz09IiwibWFjIjoiM2RkNTg2NDM0NmI3ZGI3ZTIwZTcwMmYxMzBjMzQxMWEyZTUwZDQ2YWZkYTU2ZDI4YjZjMDY0NjM4M2ZmMWYxOCJ9'),
(11, 'Dhani Ram', 'dhani@gmail.com', 'eyJpdiI6IjExVGJXU3o0eFBFZDFIZHJwTmRTcHc9PSIsInZhbHVlIjoiODRHSGp1SnBrQ2I5OFJMeERaSUJudz09IiwibWFjIjoiYTMxZTU5ODg3MmM1NDIzMDM1MzY5ZDM4YTQxZmE0MjNjYTA3NWZiODVhZTIzZjdiZDhmMWZmMTUxMjRjMjEzYyJ9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
