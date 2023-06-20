-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 11:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_ratumerakshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bukti_pembayaran`
--

CREATE TABLE `tbl_bukti_pembayaran` (
  `id` int(11) NOT NULL,
  `kode_user` varchar(15) NOT NULL,
  `kode_order` varchar(15) NOT NULL,
  `tgl_pembayaran` varchar(20) NOT NULL,
  `bank_pengirim` varchar(50) NOT NULL,
  `nama_rekening` varchar(20) NOT NULL,
  `jumlah_pembayaran` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `bukti_pembayaran` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `id` int(11) NOT NULL,
  `kode_user` varchar(15) NOT NULL,
  `kode_order` varchar(15) NOT NULL,
  `wa` varchar(14) NOT NULL,
  `tgl_pengantaran` varchar(15) NOT NULL,
  `sistem_pengambilan` varchar(30) NOT NULL,
  `alamat_pengantaran` text NOT NULL,
  `status_pembayaran` int(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`id`, `kode_user`, `kode_order`, `wa`, `tgl_pengantaran`, `sistem_pengambilan`, `alamat_pengantaran`, `status_pembayaran`, `date`) VALUES
(17, 'user-608', 'order-214', '343434343', '2022-08-26', 'Sistem Jemput', 'ererererere', 0, '2022-08-26 02:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL,
  `kode_kategori` varchar(15) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `kode_kategori`, `nama_kategori`, `slug`, `date`) VALUES
(1, 'KT-001', 'Premium Rice', 'premium-rice', '2022-08-15 01:58:37'),
(2, 'KT-002', 'Healthy Rice', 'healthy-rice', '2022-08-15 02:00:40'),
(3, 'KT-003', 'Medium Rice', 'Medium-Rice', '2022-08-15 03:56:04'),
(4, 'KT-004', 'Glutinous Rice', 'Glutinous-Rice', '2022-08-15 03:56:04'),
(5, 'KT-005', 'Spesial Promo Product', 'Spesial-Promo-Product', '2022-08-15 03:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `kode_order` varchar(15) NOT NULL,
  `kode_produk` varchar(15) NOT NULL,
  `kode_user` varchar(50) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `qty` varchar(5) NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `total_pembayaran` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `kode_order`, `kode_produk`, `kode_user`, `nama_produk`, `kategori`, `harga`, `qty`, `total_harga`, `total_pembayaran`, `date`) VALUES
(27, 'order-3125', 'PR-003', 'user-608', 'Beras An-dong 2kg', 'KT-001', '30999', '1', '30999', '30999', '2022-08-26 02:53:23'),
(28, 'order-214', 'PR-003', 'user-608', 'Beras An-dong 2kg', 'KT-001', '30999', '1', '30999', '30999', '2022-08-26 02:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` int(11) NOT NULL,
  `kode_produk` varchar(15) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `kode_produk`, `nama_produk`, `kategori`, `harga`, `ket`, `gambar`, `date`) VALUES
(1, 'PR-001', 'Beras An-Dong 10kg', 'KT-001', '122999', 'Beras An-Dong 10kg\r\nSetra Ramos Premium\r\nTanpa Pemutih, Pengawet dan Pewangi', 'beras.png', '2022-08-15 02:42:40'),
(2, 'PR-002', 'Beras An-Dong 5kg', 'KT-001', '61999', 'Beras An-Dong 5kg\r\nSetra Ramos Premium\r\nTanpa Pemutih, Pengawet dan Pewangi', 'beras2.png', '2022-08-15 02:19:50'),
(3, 'PR-003', 'Beras An-dong 2kg', 'KT-001', '30999', 'Beras An-Dong 2,5kg\r\nSetra Ramos Premium\r\nTanpa Pemutih, Pengawet dan Pewangi', 'beras3.jpg', '2022-08-19 06:43:18'),
(4, 'PR-004', 'Kokoku Japonica 5kg', 'KT-002', '124999', 'Kokoku Japonica Beras Jepang\nCocok untuk sushi, Tekstur Pulen, Mudah Dibentuk dan Dipadatkan, Mengandung Antioksidan membantu proses detoksifikasi tubuh, Tinggi Serat dan Rendah Gula', 'beras4.jpg', '2022-08-15 02:45:13'),
(5, 'PR-005', 'Premium Gold Basmati 5kg', 'KT-002', '179999', 'Beras Basmati Kualitas Terbaik\r\n- Baik bagi Penderita Diabetes\r\n- Rendah Gula\r\n- Dapat Menunda Rasa Lapar\r\n- Kandungan Serat Tinggi\r\n- Mengurangi Risiko Penyakit Jantung dan Stroke\r\n- Kaya akan Vitamin dan Mineral', 'beras5.jpg', '2022-08-15 04:05:26'),
(6, 'PR-006', 'Premium Gold Basmati 2kg', 'KT-002', '79999', 'ras Basmati Kualitas Terbaik\r\n- Baik bagi Penderita Diabetes\r\n- Rendah Gula\r\n- Dapat Menunda Rasa Lapar\r\n- Kandungan Serat Tinggi\r\n- Mengurangi Risiko Penyakit Jantung dan Stroke\r\n- Kaya akan Vitamin dan Mineral', 'beras6.png', '2022-08-15 04:00:07'),
(7, 'PR-007', 'Tomat 50 Kg', 'KT-001', '595000', 'Sentra Ramos', 'beras7.jpg', '2022-08-15 04:04:27'),
(8, 'PR-008', 'Tiga Tomat 50 Kg', 'KT-003', '490000', 'Sentra Ramos', 'beras8.jpg', '2022-08-15 04:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(11) NOT NULL,
  `kode_user` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kode_otp` varchar(13) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `kode_user`, `name`, `email`, `kode_otp`, `pass`, `status`, `date`) VALUES
(5, 'user-608', 'Aldi', 'alldii1956@gmail.com', '5165', '$2y$10$LHt4xc9nlMKaDYeMsgIY6ezfFsnoiQREYHd7C0qTGqoLtFKCkHdO6', 1, '2022-08-23 06:56:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bukti_pembayaran`
--
ALTER TABLE `tbl_bukti_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bukti_pembayaran`
--
ALTER TABLE `tbl_bukti_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
