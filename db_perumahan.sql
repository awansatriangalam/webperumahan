-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 02:39 PM
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
(10, 'Ahmad', 'ahmad11', 'Surabaya', '087898654321', '123456654678766542', '61ccbdceae8009992481563eae909a9a', 2),
(11, 'Imam', 'imammm', 'Malang', '089767554321', '1235467865890876', 'dce911619e82cf0889c647ff7710cb43', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(12) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `no_tlp` varchar(256) NOT NULL,
  `pesan_` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE `rumah` (
  `id_rumah` int(12) NOT NULL,
  `nama_rumah` varchar(256) NOT NULL,
  `kode_type` varchar(256) NOT NULL,
  `luas_bangunan` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `kamar_tidur` varchar(256) NOT NULL,
  `kamar_mandi` varchar(256) NOT NULL,
  `ruangan` varchar(256) NOT NULL,
  `lantai` varchar(256) NOT NULL,
  `garasi` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `kota` varchar(256) NOT NULL,
  `kode_pos` varchar(256) NOT NULL,
  `harga` varchar(256) NOT NULL,
  `gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumah`
--

INSERT INTO `rumah` (`id_rumah`, `nama_rumah`, `kode_type`, `luas_bangunan`, `status`, `lokasi`, `kamar_tidur`, `kamar_mandi`, `ruangan`, `lantai`, `garasi`, `deskripsi`, `alamat`, `kota`, `kode_pos`, `harga`, `gambar`) VALUES
(1, 'Rumah Tipe 36', '36 ', '6 x 6 meter ', '0', 'Perumahan 1', '2', '1', '3', '1', '0', 'Ukuran tipe rumah 36 tidak terlampau mungil dan harganya pun masih cukup terjangkau. Tipe rumah 36 biasanya menawarkan 1 – 2 kamar tidur, sebuah kamar mandi, ruang tamu, ruang makan, dan dapur.', 'Perumahan 1 blok 2 no,45C Malang', 'Malang', '65115', '700 Juta', 'rumah6.jpg'),
(5, 'Rumah Tipe 60', '60', '5x12 meter', '1', 'Perumahan 1', '2', '2', '4', '1', '0', 'Kalau hanya untuk menampung dua kamar tidur, tipe 60 terhitung luas, tentu saja dengan ragam dimensi 5x12 meter.Dengan kemungkinan ruangan dan taman yang lebih luas dari tipe tipe rumah di bawahnya, tipe 60 menarik dimiliki. ', 'Perumahan 1 blok 8 no,56A Malang', 'Malang', '65115', '1 Milyar', 'post-1617863126072389501.jpeg'),
(6, 'Rumah Tipe 45', '45 ', '6x7,5 meter', '0', 'Perumahan 2', '3 ', '2 ', '6 ', '2 ', '1 ', 'Model ini menjadi jalan keluar bagi yang merasa tipe rumah 36 sedang tapi belum cukup.Ini juga tipe yang tertangkap radar para end user dan investor properti.Karena formatnya lebih luas, ruang yang bisa ditampung pun lebih banyak.', 'Perumahan 2 blok 1 no,22A Malang', 'Malang', '65111', '920 Juta', 'rumah-tipe-4512.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_pesan` int(12) NOT NULL,
  `id_customer` int(12) NOT NULL,
  `id_rumah` int(12) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `harga` varchar(256) NOT NULL,
  `status_pesan` varchar(256) NOT NULL,
  `bukti_bayar` varchar(256) NOT NULL,
  `status_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_pesan`, `id_customer`, `id_rumah`, `tanggal_transaksi`, `harga`, `status_pesan`, `bukti_bayar`, `status_bayar`) VALUES
(16, 10, 1, '2021-11-11', '700 Juta', 'Belum Selesai', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ulas`
--

CREATE TABLE `ulas` (
  `id_ulasan` int(12) NOT NULL,
  `id_customer` int(12) NOT NULL,
  `id_rumah` int(12) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nama_pengguna` varchar(256) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

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
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `ulas`
--
ALTER TABLE `ulas`
  ADD PRIMARY KEY (`id_ulasan`);

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
  MODIFY `id_customer` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(12) NOT NULL AUTO_INCREMENT;
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
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_pesan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ulas`
--
ALTER TABLE `ulas`
  MODIFY `id_ulasan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
