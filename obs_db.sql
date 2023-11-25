-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 03:24 PM
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
-- Database: `obs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_stamby`
--

CREATE TABLE `bus_stamby` (
  `id` int(100) NOT NULL,
  `bus_no` int(100) NOT NULL,
  `route_destination` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `cor_number` int(100) NOT NULL,
  `drivers_name` varchar(100) NOT NULL,
  `conductors_name` varchar(100) NOT NULL,
  `departure_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departure_tb`
--

CREATE TABLE `departure_tb` (
  `id` int(50) NOT NULL,
  `bus_no` int(50) NOT NULL,
  `time_dept` varchar(50) NOT NULL,
  `route_destination` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `passenger` int(50) NOT NULL,
  `drivers_name` varchar(50) NOT NULL,
  `conductors_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_tb`
--

CREATE TABLE `main_tb` (
  `id` int(100) NOT NULL,
  `bus_no` int(100) NOT NULL,
  `time_dept` varchar(100) NOT NULL,
  `route_destination` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `cor_number` int(100) NOT NULL,
  `pass_ticket` int(100) NOT NULL,
  `bagg_ticket` int(100) NOT NULL,
  `passenger` int(100) NOT NULL,
  `drivers_name` varchar(100) NOT NULL,
  `conductors_name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `management_tb`
--

CREATE TABLE `management_tb` (
  `id` int(50) NOT NULL,
  `bus_no` int(50) NOT NULL,
  `time_dept` varchar(50) NOT NULL,
  `route_destination` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `cor_number` int(50) NOT NULL,
  `pass_ticket` int(50) NOT NULL,
  `bagg_ticket` int(50) NOT NULL,
  `passenger` int(50) NOT NULL,
  `drivers_name` varchar(50) NOT NULL,
  `conductors_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_stamby`
--
ALTER TABLE `bus_stamby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departure_tb`
--
ALTER TABLE `departure_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_tb`
--
ALTER TABLE `main_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management_tb`
--
ALTER TABLE `management_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_stamby`
--
ALTER TABLE `bus_stamby`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `departure_tb`
--
ALTER TABLE `departure_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `main_tb`
--
ALTER TABLE `main_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `management_tb`
--
ALTER TABLE `management_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
