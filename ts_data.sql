-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 08:48 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ts_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `ts_excel`
--

CREATE TABLE `ts_excel` (
  `id` int(40) NOT NULL,
  `department` varchar(60) NOT NULL,
  `type` varchar(60) NOT NULL,
  `sektor` varchar(60) DEFAULT NULL,
  `lokasi` varchar(60) DEFAULT NULL,
  `bangsa` varchar(60) DEFAULT NULL,
  `jantina` varchar(20) DEFAULT NULL,
  `umur` varchar(10) DEFAULT NULL,
  `skill` varchar(60) DEFAULT NULL,
  `applicant` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ts_excel`
--

INSERT INTO `ts_excel` (`id`, `department`, `type`, `sektor`, `lokasi`, `bangsa`, `jantina`, `umur`, `skill`, `applicant`) VALUES
(1, 'Military', 'Working', 'Construction', 'Negeri Sembilan', 'Melayu', 'lelaki', '30', 'electrician', 'ADS0201'),
(2, 'Military', 'Working', 'Construction', 'Negeri Sembilan', 'Melayu', 'lelaki', '30', 'electrician', 'ADS0202'),
(3, 'Military', 'Working', 'Construction', 'Negeri Sembilan', 'Melayu', 'lelaki', '30', 'electrician', 'ADS0203'),
(4, 'Military', 'Working', 'Construction', 'Negeri Sembilan', 'Melayu', 'lelaki', '30', 'electrician', 'ADS0204'),
(5, 'Military', 'Working', 'Construction', 'Negeri Sembilan', 'Melayu', 'lelaki', '30', 'electrician', 'ADS0205'),
(6, 'Military', 'Working', 'Construction', 'Negeri Sembilan', 'Melayu', 'lelaki', '30', 'electrician', 'ADS0206'),
(7, 'School', 'Education', 'Service', 'Selangor', 'Melayu', 'perempuan', '25', 'teaching', 'ADS0207'),
(8, 'School', 'Education', 'Service', 'Selangor', 'Melayu', 'perempuan', '25', 'teaching', 'ADS0208'),
(9, 'School', 'Education', 'Service', 'Selangor', 'Melayu', 'perempuan', '25', 'teaching', 'ADS0209'),
(10, 'School', 'Education', 'Service', 'Selangor', 'Melayu', 'perempuan', '25', 'teaching', 'ADS0210'),
(11, 'School', 'Education', 'Service', 'Selangor', 'Melayu', 'perempuan', '25', 'teaching', 'ADS0211'),
(12, 'School', 'Education', 'Service', 'Selangor', 'Melayu', 'perempuan', '25', 'teaching', 'ADS0212'),
(13, 'School', 'Education', 'Service', 'Selangor', 'Melayu', 'perempuan', '25', 'teaching', 'ADS0213');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ts_excel`
--
ALTER TABLE `ts_excel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ts_excel`
--
ALTER TABLE `ts_excel`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
