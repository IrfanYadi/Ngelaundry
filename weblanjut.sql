-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 01:34 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblanjut`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `struk` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggan` varchar(128) NOT NULL,
  `berat` varchar(128) NOT NULL,
  `harga` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`struk`, `tanggal`, `pelanggan`, `berat`, `harga`, `status`) VALUES
(1, '2021-11-07', 'Irfan Yadi', '3', '18000', 'Selesai'),
(2, '2021-12-07', 'Abbie Syeh Nahri', '5', '30000', 'Proses'),
(3, '2021-11-07', 'Raihan Akbar', '7', '42000', 'Proses'),
(4, '2021-11-08', 'Elon Musk', '5', '30000', 'Selesai'),
(5, '2021-11-08', 'Mark Zuckerberg', '6', '36000', 'Proses'),
(6, '2021-11-10', 'Jeff Bezos', '25', '150000', 'Proses'),
(7, '2021-12-01', 'Anya Geraldine', '5', '30000', 'Proses'),
(8, '2021-12-02', 'Ghea Khanza Naila', '7', '42000', 'Selesai'),
(9, '2021-12-05', 'Azizi Asadel', '3', '18000', 'Proses'),
(10, '2021-12-06', 'Eunicetjoaa', '4', '24000', 'Selesai'),
(11, '2021-12-07', 'Amelia Andani', '8', '48000', 'Proses'),
(12, '2021-12-05', 'Erika', '2', '12000', 'Proses'),
(13, '2021-12-07', 'Aurelia', '3', '18000', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Irfan Yadi', 'irfanyadi@gmail.com', '$2y$10$1kf.29BC2FQs1YneUhZO4e/JkeUjLFtCfjDAtRMBydzpK0cbWFW8e', 1, 1, 1638873530);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`struk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `struk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
