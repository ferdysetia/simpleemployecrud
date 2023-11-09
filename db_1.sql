-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 04:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `submitdate` datetime(6) DEFAULT NULL,
  `idemp` bigint(15) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `joindate` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`submitdate`, `idemp`, `firstname`, `lastname`, `department`, `joindate`) VALUES
('2023-11-09 09:51:49.000000', 2311095149, 'Karina', 'Citra Utami', 'Warehouse', '2023-11-09'),
('2023-11-09 09:55:00.000000', 2311095500, 'Alfa', 'Rizki Alam', 'Warehouse', '2023-11-09'),
('2023-11-09 09:55:53.000000', 2311095553, 'Riki', 'Akbar Hidayat', 'Warehouse', '2023-11-09'),
('2023-11-09 09:56:10.000000', 2311095610, 'Alfaina', 'Luthfi Annis', 'HR', '2023-11-09'),
('2023-11-09 10:02:22.000000', 2311100222, 'Indhika', 'Rizki Aprianto', 'Production', '2023-11-09'),
('2023-11-09 10:21:44.000000', 2311102144, 'Kintan', 'Aryantika Sekarningrum', 'HR', '2023-11-09'),
('2023-11-09 10:27:01.000000', 2311102701, 'Fuji', 'Astuti', 'Warehouse', '2023-11-09'),
('2023-11-09 11:23:27.000000', 2311112327, 'Indah', 'Pramadhani', 'Engineering', '2023-11-09'),
('2023-11-09 21:57:33.000000', 2311215733, 'Elang', 'Fatah Paramanaredtha', 'Warehouse', '2023-11-09'),
('2023-11-09 22:41:09.000000', 2311224109, 'Husein', '', 'Warehouse', '2023-11-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`idemp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
