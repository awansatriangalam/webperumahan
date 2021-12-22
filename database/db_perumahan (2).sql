-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2021 pada 09.20
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(16) NOT NULL,
  `nama_bank` varchar(256) NOT NULL,
  `no_rekening` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `no_rekening`) VALUES
(1, 'Bank BRI', '009812567532111'),
(2, 'Bank BNI', '0098122111'),
(5, 'Bank Mandiri', '0097654238971');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(12) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_tlp` varchar(256) NOT NULL,
  `email_customer` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `role_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `no_tlp`, `email_customer`, `pass`, `role_id`) VALUES
(10, 'Ahmad', 'ahmad11', 'Surabaya', '087898654321', 'ahm4d@gmail.com', '61ccbdceae8009992481563eae909a9a', 2),
(11, 'Imam', 'imammm', 'Malang', '089767554321', 'mam11@gmail.com', 'dce911619e82cf0889c647ff7710cb43', 2),
(12, 'Sholeh', 'sholehhh', 'Malang', '089767554321', 'shol3hh@gmail.com', '737e47060e31562f8014614eaa1302b4', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(12) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `no_tlp` varchar(256) NOT NULL,
  `pesan_` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `no_tlp`, `pesan_`) VALUES
(6, 'Mansoer', 'mansoer990@gmail.com', '081267652098', 'Mantap sekali websitenya, semoga perusahaan ini semakin maju dan berkembang dengan pesat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah`
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
  `map` varchar(256) NOT NULL,
  `gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumah`
--

INSERT INTO `rumah` (`id_rumah`, `nama_rumah`, `kode_type`, `luas_bangunan`, `status`, `lokasi`, `kamar_tidur`, `kamar_mandi`, `ruangan`, `lantai`, `garasi`, `deskripsi`, `alamat`, `kota`, `kode_pos`, `harga`, `map`, `gambar`) VALUES
(1, 'Rumah Tipe 36', '36', '6 x 6 meter ', '1', 'Perumahan 1', '2', '1', '3', '1', '0', 'Ukuran tipe rumah 36 tidak terlampau mungil dan harganya pun masih cukup terjangkau. Tipe rumah 36 biasanya menawarkan 1 – 2 kamar tidur, sebuah kamar mandi, ruang tamu, ruang makan, dan dapur.', 'Perumahan 1 blok 2 no,40C Malang', 'Malang', '65115', '700 Juta', 'Perumahan_1.jpg', 'rumah6.jpg'),
(5, 'Rumah Tipe 60', '60', '5x13 meter', '0', 'Perumahan 1', '2', '2', '4', '1', '0', 'Kalau hanya untuk menampung dua kamar tidur, tipe 60 terhitung luas, tentu saja dengan ragam dimensi 5x13 meter.Dengan kemungkinan ruangan dan taman yang lebih luas dari tipe tipe rumah di bawahnya, tipe 60 menarik dimiliki. ', 'Perumahan 1 blok 8 no,56A Malang', 'Malang', '65115', '1 Milyar', 'Perumahan_11.jpg', 'post-1617863126072389501.jpeg'),
(6, 'Rumah Tipe 45', '45', '6x7,5 meter', '0', 'Perumahan 2', '3 ', '2 ', '6 ', '2 ', '1 ', 'Model ini menjadi jalan keluar bagi yang merasa tipe rumah 45 sedang tapi belum cukup.Ini juga tipe yang tertangkap radar para end user dan investor properti.Karena formatnya lebih luas, ruang yang bisa ditampung pun lebih banyak.', 'Perumahan 2 blok 1 no,22A Malang', 'Malang', '65111', '920 Juta', 'Perumahan_2.jpg', 'rumah-tipe-4512.jpg'),
(9, 'Holicast Valley', '12', '15 x 15 m', '1', 'Perumahan 2', '5', '3', '8', '3', '2', 'Rumah yang didesain dengan semuanya yang serba besar sehingga memungkinkan untuk memberikan lebih kenyamanan pada penghuninya', '8', 'Surabaya', '65198', '2.000.000.000', 'Perumahan_221.jpg', '1623052261_162305226160bdcfe5c7c86ads_images_51323.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe`
--

CREATE TABLE `tipe` (
  `id_type` int(12) NOT NULL,
  `kode_type` int(12) NOT NULL,
  `nama_type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe`
--

INSERT INTO `tipe` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 36, 'Middle'),
(5, 60, 'Middle Up'),
(6, 45, 'Middle Low'),
(10, 12, 'High');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_pesan` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_rumah` int(12) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `harga` varchar(256) NOT NULL,
  `status_pesan` varchar(256) NOT NULL,
  `bukti_bayar` varchar(256) NOT NULL,
  `status_bayar` int(11) NOT NULL,
  `status_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_pesan`, `id_user`, `id_rumah`, `id_bank`, `tanggal_transaksi`, `harga`, `status_pesan`, `bukti_bayar`, `status_bayar`, `status_transaksi`) VALUES
(11, 7, 6, 5, '2021-11-30', ' Rp. 920 Juta', 'Selesai', 'ci.PNG', 1, 1),
(15, 7, 5, 1, '2021-12-09', ' Rp. 1 Milyar', 'Selesai', '2021-04-08_(3)1.png', 1, 1),
(17, 7, 1, 1, '2021-12-15', ' Rp. 700 Juta', 'Belum Selesai', '', 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulas`
--

CREATE TABLE `ulas` (
  `id_ulasan` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_rumah` int(12) NOT NULL,
  `nama_user` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ulas`
--

INSERT INTO `ulas` (`id_ulasan`, `id_user`, `id_rumah`, `nama_user`, `email`, `ulasan`, `rating`) VALUES
(2, 11, 5, 'Imam', 'imammm', 'Desain rumah bagus dan jika dilihat dari luar terlihat bagus', 0),
(3, 10, 1, 'Ahmad', 'ahmad11', 'Rumah terlihat simple tetapi terlihat nyaman untuk ditinggali\r\n', 0),
(4, 10, 6, 'Ahmad', 'ahmad11', 'Terlihat sangat luas dengan taman kecil halaman rumah', 0),
(5, 11, 6, 'Imam', 'imammm', 'Rumah terlihat nyaman ditinggali\r\n', 0),
(6, 3, 5, 'Awan Satria Ngalam', 'awan@gmail.com', 'asd', 0),
(7, 3, 5, 'Awan Satria Ngalam', 'awan@gmail.com', '12345', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `nama_user` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `alamat_user` varchar(256) NOT NULL,
  `no_tlp` varchar(256) NOT NULL,
  `gambar_user` varchar(256) NOT NULL,
  `pass_user` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `tanggal_buat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `alamat_user`, `no_tlp`, `gambar_user`, `pass_user`, `role_id`, `tanggal_buat`) VALUES
(6, 'Muhammad Ashif', 'admin@gmail.com', 'Jakarta', '082156483654', '60165171_640325543099596_6227643171212361728_n.jpg', '$2y$10$a1LZDWfeSjVjlVikwCjcO.iVvcVtuhoKBKd4Mml6SYyuVv8JpbYCm', 1, 1638243599),
(7, 'Andi', 'andi@gmail.com', 'Kepanjen', '082109182210', 'BLOK_E.jpg', '$2y$10$tyjP2pa/C7ipIRdG/lsxmOhFQ67mvV9JxYdu0T/WJX46crl95QrhK', 2, 1638243858),
(8, 'Rico', 'rico56@gmail.com', 'Surabaya', '081265092287', 'default.jpg', '$2y$10$9MEAVxnyVWnnXRxanHYv.uMI3Sq6N4eMG.O7SxhZFUu0BpL9E/snK', 2, 1638419350);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`id_rumah`);

--
-- Indeks untuk tabel `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_type`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `ulas`
--
ALTER TABLE `ulas`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rumah`
--
ALTER TABLE `rumah`
  MODIFY `id_rumah` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id_type` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_pesan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `ulas`
--
ALTER TABLE `ulas`
  MODIFY `id_ulasan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
