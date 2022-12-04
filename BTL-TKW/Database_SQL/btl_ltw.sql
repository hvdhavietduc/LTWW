-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 04:58 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl_ltw`
--
-- --------------------------------------------------------
--
-- Table structure for table `tbldonhang`
--
CREATE TABLE
  `tbldonhang` (
    `code` varchar(10) NOT NULL,
    `priceDH` int (11) NOT NULL,
    `emailKH` varchar(50) DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Table structure for table `tblproduct`
--
CREATE TABLE
  `tblproduct` (
    `id` varchar(10) NOT NULL,
    `name` varchar(100) NOT NULL,
    `description` varchar(1000) NOT NULL,
    `linkimg` varchar(500) NOT NULL,
    `price` int (11) NOT NULL,
    `gender` int (11) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

INSERT INTO
  `tblproduct` (
    `id`,
    `name`,
    `description`,
    `linkimg`,
    `price`,
    `gender`
  )
VALUES
  (
    2,
    'Dép Eva Phun Nam Bitis DEM011700NAU (Nâu)',
    'Mua trước trả sau với Kredivo',
    'img_product/male_shoes/shoe1/dem011700nau__5__625a3524a98643f0b100006536f4dbbf_grande.jpg',
    191000,
    1
  );

-- --------------------------------------------------------
--
-- Table structure for table `tbluser`
--
CREATE TABLE
  `tbluser` (
    `email` varchar(50) NOT NULL,
    `phone` varchar(20) NOT NULL,
    `username` varchar(50) NOT NULL,
    `password` varchar(50) NOT NULL,
    `price` int (11) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Indexes for dumped tables
--
--
-- Indexes for table `tbldonhang`
--
ALTER TABLE `tbldonhang` ADD PRIMARY KEY (`code`),
ADD KEY `emailKH` (`emailKH`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser` ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--
--
-- Constraints for table `tbldonhang`
--
ALTER TABLE `tbldonhang` ADD CONSTRAINT `tbldonhang_ibfk_1` FOREIGN KEY (`emailKH`) REFERENCES `tbluser` (`email`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;