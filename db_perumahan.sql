-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 05:20 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perumahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(12) NOT NULL,
  `nama_admin` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `role_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `pass`, `role_id`) VALUES
(1, 'admin1', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(12) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_tlp` varchar(256) NOT NULL,
  `no_ktp` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `role_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `no_tlp`, `no_ktp`, `pass`, `role_id`) VALUES
(2, 'Sholeh', 'sholehhh', 'Malang', '089767554321', '1235467865890876', '9a9c9b4322eec704b91097ecc627c9f1', 2),
(3, 'Iman', 'admin', 'Malang', '098898765654', '1234567890987654', 'admin', 1),
(5, 'Imam', 'imam', 'Jakarta', '089767554322', '1235467865890098', 'beeccdb438355c029a66dbec333fa1c8', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE `rumah` (
  `id_rumah` int(12) NOT NULL,
  `nama_rumah` varchar(256) NOT NULL,
  `kode_type` varchar(256) NOT NULL,
  `luas_tanah` varchar(256) NOT NULL,
  `luas_bangunan` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `interior` varchar(256) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `kamar_tidur` varchar(256) NOT NULL,
  `kamar_mandi` varchar(256) NOT NULL,
  `harga` varchar(256) NOT NULL,
  `gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumah`
--

INSERT INTO `rumah` (`id_rumah`, `nama_rumah`, `kode_type`, `luas_tanah`, `luas_bangunan`, `status`, `interior`, `deskripsi`, `kamar_tidur`, `kamar_mandi`, `harga`, `gambar`) VALUES
(1, 'Rumah Tipe 36', '36', '72 Meter Persegi', '6 x 6 meter ', '1', 'Tidak Berperabot', 'Ukuran tipe rumah 36 tidak terlampau mungil dan harganya pun masih cukup terjangkau. Bagi pengembang yang memasang target segmen middle – middle low', '2', '1', '700 Juta', 'rumah6.jpg'),
(5, 'Rumah Tipe 60', '60', '150 meter persegi', '5x12 meter', '1', 'Tidak Berperabot', 'Kalau hanya untuk menampung dua kamar tidur, tipe 60 terhitung luas, tentu saja dengan ragam dimensi seperti 6x10 meter atau 5x12 meter. Meski begitu, ini model rumah sedang. ', '3', '2', '1 Milyar', 'post-1617863126072389501.jpeg'),
(6, 'Rumah 45', '45', '90 meter persegi', '6x7,5 meter', '0', 'Tidak Berperabot', 'Model ini menjadi jalan keluar bagi yang merasa tipe rumah 36 sedang tapi belum cukup. Harganya yang di atas setengah miliar rupiah membuatnya masuk segmen middle-low. Ini juga tipe yang tertangkap radar para end user dan investor properti', '3', '2', '900 Juta', 'rumah-tipe-4512.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id_type` int(12) NOT NULL,
  `kode_type` int(12) NOT NULL,
  `nama_type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 36, 'Middle'),
(4, 45, 'Middle Low'),
(5, 60, 'Middle Up');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`id_rumah`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `id_rumah` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id_type` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
