-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 04:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `device_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `device_type` varchar(50) DEFAULT NULL,
  `device_id` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `problem_description` text DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `staff_id` varchar(50) DEFAULT NULL,
  `date_received` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `device_type`, `device_id`, `department`, `problem_description`, `status`, `user_name`, `contact`, `staff_id`, `date_received`) VALUES
(7, 'Scanner', 'DVC006', 'Logistics', 'Driver installation issue', 'Fixed', 'William Clark', '2233445566', 'STF006', '2023-10-06'),
(8, 'Mobile', 'DVC007', 'Sales', 'Screen cracked', 'In Progress', 'Sophia Wilson', '3344556677', 'STF007', '2023-10-07'),
(9, 'Router', 'DVC008', 'Admin', 'No internet connectivity', 'Pending', 'Chris Lee', '4455667788', 'STF008', '2023-10-08'),
(10, 'Projector', 'DVC009', 'Training', 'Not turning on', 'Pending', 'David Miller', '5566778899', 'STF009', '2023-10-09'),
(11, 'Laptop', 'DVC010', 'Legal', 'Keyboard not responsive', 'Pending', 'Emma Taylor', '6677889901', 'STF010', '2023-10-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
