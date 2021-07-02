-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 10:10 AM
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
-- Table structure for table `tbl_token_auth`
--

CREATE TABLE `tbl_token_auth` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `selector_hash` varchar(255) NOT NULL,
  `is_expired` int(11) NOT NULL DEFAULT 0,
  `expiry_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_token_auth`
--

INSERT INTO `tbl_token_auth` (`id`, `username`, `password_hash`, `selector_hash`, `is_expired`, `expiry_date`) VALUES
(17, 'admin', '$2y$10$/HROGVi8933b.Q9Q6xrd/..Xz5HzSCv/AboGCR6DH/9gibEELXTv2', '$2y$10$y/fyIwyXbe7tlArhBRPvJOv7iLpHb01v1V/jQMgBDpyBJ4V6lBZVS', 1, '2021-06-04 13:56:37'),
(18, 'admin', '$2y$10$b998ZepJXHvlDVptxKEFWuzRC0XBN5soXGUP/JFXBmArFa5uvdIRy', '$2y$10$Ac.09GG1SOINVR6jMQRHS.63BFuCK1Yhbor0fxGGijfn1sphfQW8a', 1, '2021-06-05 04:39:56'),
(19, 'admin', '$2y$10$sfqet1vSrE8Iozs9sd1fg.tJUkDUFl2tT2sT.1xzkFYfTJkUNHf2m', '$2y$10$tqQzSkQF3s9CtcKpCAP6le7JsLtKzuqenVqnysDmdOMwPWw0zHbGu', 1, '2021-06-07 11:09:09'),
(20, 'admin', '$2y$10$N49xrtTuhNa22ugTGHevNeySm7atAfsIYZyicbm0Fs0gnWs6.I./C', '$2y$10$x0wcQMHTmzLmgJR0mucL7.ML9KC09QE/Rif1xhbx2ezHvKCJl1WBm', 1, '2021-06-07 11:12:01'),
(21, 'admin', '$2y$10$WVy2hu7yMF9d1Slq8YDvgeOrfmWSLMTLGhjYDx0IrqsyS.1XAv.1.', '$2y$10$6jrjiMBJD0snuxqxriRTFegNWPZGvDISnyXSdr4./KPPqrQQQ3DdG', 0, '2021-07-07 05:12:01'),
(22, 'musabojang', '$2y$10$PdMFjTkv6ZFmy48dV5fHYOHpNGKEkXdwziXq0OYI4QiDD3My/XoL6', '$2y$10$p8EMVaQKfr8cSL67KaxMKeeyIrUSTFiApXyiMSsxVNVFtxDLRwxoK', 0, '2021-07-10 06:56:25'),
(23, 'user1', '$2y$10$UCML3q6j622jApKH8S.y3e6LwqK.l0YDGsMjyexP67lP6GtRuvNnW', '$2y$10$EjD1iGGqJIXJU8mascirA.nYF4OYN7fmWSEk93BDY9dawI2HtdRqS', 0, '2021-07-30 06:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `ts_excel`
--

CREATE TABLE `ts_excel` (
  `id` int(12) NOT NULL,
  `applicant_id` varchar(10) DEFAULT NULL,
  `department` varchar(60) DEFAULT NULL,
  `career` varchar(60) DEFAULT NULL,
  `sektor` varchar(60) DEFAULT NULL,
  `sub_sektor` varchar(60) DEFAULT NULL,
  `lokasi` varchar(60) DEFAULT NULL,
  `daerah` varchar(60) DEFAULT NULL,
  `bangsa` varchar(30) DEFAULT NULL,
  `jantina` varchar(20) DEFAULT NULL,
  `umur` varchar(10) DEFAULT NULL,
  `skill` varchar(30) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'available',
  `remarks` varchar(300) DEFAULT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user',
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `uploadby` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ts_excel`
--

INSERT INTO `ts_excel` (`id`, `applicant_id`, `department`, `career`, `sektor`, `sub_sektor`, `lokasi`, `daerah`, `bangsa`, `jantina`, `umur`, `skill`, `status`, `remarks`, `role`, `username`, `password`, `uploadby`) VALUES
(61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, 'admin', 'admin', '$2y$10$PTvqUpSIBLAkPT/EsiysZuZsQkiDFo/EkHTLtIal0VizkuPHkOZPS', NULL),
(62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, 'user', 'user1', '$2y$10$U2GfAZeLZOlYvIZ6b0pAA.a1aqt3yp3.LVXS/tHU3ylt54BdKL5.q', NULL),
(63, 'MARA001', 'MARA', 'Working', 'Pembinaan', 'sub-sector', 'Johor', 'District1', 'Melayu', 'lelaki', '30', 'skill1', 'Not Available', 'working at factory', 'user', NULL, NULL, '62'),
(64, 'MARA002', 'MARA', 'Working', 'Perkilangan', 'sub-sector', 'Kedah', 'District2', 'Indian', 'perempuan', '30', 'skill2', 'Not Available', 'found job', 'user', NULL, NULL, '62'),
(65, 'MARA003', 'MARA', 'Education', 'Perkhidmatan', 'sub-sector', 'Kelantan', 'District3', 'Cina', 'perempuan', '30', 'skill3', 'available', NULL, 'user', NULL, NULL, '62'),
(66, 'MARA004', 'MARA', 'entrepreneurship', 'Pertanian', 'sub-sector', 'Malacca', 'District4', 'Melayu', 'lelaki', '30', 'skill4', 'Available', 'he is sick', 'user', NULL, NULL, '62'),
(67, 'MARA005', 'MARA', 'Working', 'Perladangan', 'sub-sector', 'Negeri Sembilan', 'District5', 'Indian', 'lelaki', '30', 'skill5', 'available', NULL, 'user', NULL, NULL, '62'),
(68, 'MARA006', 'MARA', 'Education', 'Pendidikan', 'sub-sector', 'Pahang', 'District6', 'Indian', 'lelaki', '30', 'skill6', 'available', NULL, 'user', NULL, NULL, '62'),
(69, 'MARA007', 'MARA', 'Working', 'Perubatan', 'sub-sector', 'Penang', 'District7', 'Melayu', 'lelaki', '30', 'skill7', 'Available', 'dddd', 'user', NULL, NULL, '62'),
(70, 'MARA008', 'MARA', 'entrepreneurship', 'Perkapalan', 'sub-sector', 'Perak', 'District8', 'Melayu', 'lelaki', '30', 'skill8', 'available', NULL, 'user', NULL, NULL, '62'),
(71, 'MARA009', 'MARA', 'Education', 'Teknologi', 'sub-sector', 'Perlis', 'District9', 'Indian', 'perempuan', '30', 'skill9', 'available', NULL, 'user', NULL, NULL, '62'),
(72, 'MARA010', 'MARA', 'Working', 'Perladangan', 'sub-sector', 'Sabah', 'District10', 'Melayu', 'perempuan', '30', 'skill10', 'available', NULL, 'user', NULL, NULL, '62'),
(73, 'MARA011', 'MARA', 'Working', 'Perkilangan', 'sub-sector', 'Sarawak', 'District11', 'Indian', 'perempuan', '30', 'skill11', 'available', NULL, 'user', NULL, NULL, '62'),
(74, 'MARA012', 'MARA', 'entrepreneurship', 'Pembinaan', 'sub-sector', 'Selangor', 'District12', 'Cina', 'perempuan', '30', 'skill12', 'available', NULL, 'user', NULL, NULL, '62'),
(75, 'MARA013', 'MARA', 'Working', 'Pembinaan', 'sub-sector', 'Terengganu', 'District13', 'Indian', 'perempuan', '30', 'skill13', 'available', NULL, 'user', NULL, NULL, '62'),
(76, 'MARA014', 'MARA', 'entrepreneurship', 'Perladangan', 'sub-sector', 'Kuala Lumpur', 'District14', 'Cina', 'perempuan', '30', 'skill14', 'available', NULL, 'user', NULL, NULL, '62'),
(77, 'MARA015', 'MARA', 'Working', 'Perkhidmatan', 'sub-sector', 'Labuan', 'District15', 'Cina', 'lelaki', '30', 'skill15', 'available', NULL, 'user', NULL, NULL, '62'),
(78, 'MARA016', 'MARA', 'Education', 'Teknologi', 'sub-sector', 'Putrajaya', 'District16', 'Indian', 'lelaki', '30', 'skill16', 'available', NULL, 'user', NULL, NULL, '62'),
(79, 'MARA017', 'MARA', 'entrepreneurship', 'Perkilangan', 'sub-sector', 'Kuala Lumpur', 'District17', 'Melayu', 'perempuan', '30', 'skill17', 'available', NULL, 'user', NULL, NULL, '62'),
(80, 'MARA018', 'MARA', 'Education', 'Pertanian', 'sub-sector', 'Kuala Lumpur', 'District18', 'Melayu', 'lelaki', '30', 'skill18', 'available', NULL, 'user', NULL, NULL, '62'),
(81, 'MARA019', 'MARA', 'Education', 'Pendidikan', 'sub-sector', 'Kuala Lumpur', 'District19', 'Melayu', 'lelaki', '30', 'skill19', 'available', NULL, 'user', NULL, NULL, '62'),
(82, 'MARA020', 'MARA', 'entrepreneurship', 'Pendidikan', 'sub-sector', 'Kuala Lumpur', 'District20', 'Indian', 'lelaki', '30', 'skill20', 'available', NULL, 'user', NULL, NULL, '62');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_token_auth`
--
ALTER TABLE `tbl_token_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_excel`
--
ALTER TABLE `ts_excel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_token_auth`
--
ALTER TABLE `tbl_token_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ts_excel`
--
ALTER TABLE `ts_excel`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
