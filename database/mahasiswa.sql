-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 04:11 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `No` int(4) NOT NULL,
  `NRP` varchar(15) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `JURUSAN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`No`, `NRP`, `NAMA`, `EMAIL`, `JURUSAN`) VALUES
(1, '173040041', 'Rio Erika Saputra', 'rioerika20@gmail.com', 'Teknik Informatika'),
(2, '173040040', 'dina apresiasi', 'dina@mail.com', 'teknik informatika'),
(3, '173040068', 'regi ', 'regi@mail.com', 'teknik informatika'),
(4, '173040052', 'Rico Aristama', 'ricoaristama@mail.com', 'teknik informatika'),
(5, '173020012', 'gilang', 'gilang@mail.com', 'Teknologi Pangan'),
(6, '173030021', 'regi doang', 'regi@mail.com', 'Teknik Mesin'),
(7, '173040069', 'dwiki', 'dwiki@mail.com', 'Teknik Informatika'),
(8, '12409148', 'asdlfk;jasd;f', 'laksjdf@Djlf.dco', 'Teknik Industri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `No` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
