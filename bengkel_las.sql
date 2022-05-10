-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 12:41 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel_las`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Bayu', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chatting`
--

CREATE TABLE `chatting` (
  `id_chatting` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `admin_send` text NOT NULL,
  `pelanggan_send` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `nama_desa` varchar(30) NOT NULL,
  `ongkir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `kode`, `nama_desa`, `ongkir`) VALUES
(1, 1, 'ciawigebang', '1000'),
(2, 1, 'Ciawilor', '2000'),
(3, 1, 'Cigarukgak', '3000'),
(4, 1, 'cihaur', '4000'),
(5, 1, 'cihirup', '5000'),
(6, 1, 'cijagamulya', '6000'),
(7, 1, 'cikubangmulya', '7000'),
(8, 1, 'ciomas', '8000'),
(9, 1, 'ciputat', '9000'),
(10, 1, 'dukuhdalem', '10000'),
(11, 1, 'geresik', '11000'),
(12, 1, 'kadurama', '12000'),
(13, 1, 'kapandayan', '13000'),
(14, 1, 'karangkamulyan', '14000'),
(15, 1, 'kramatmulya', '15000'),
(16, 2, 'cibeureum', '16000'),
(17, 2, 'cimara', '17000'),
(18, 2, 'kawungsari', '18000'),
(19, 2, 'randusari', '19000'),
(20, 2, 'sukadana', '20000'),
(21, 3, 'bantarpanjang', '21000'),
(22, 3, 'ciangir', '22000'),
(23, 3, 'cibingbin', '23000'),
(24, 3, 'cipindok', '24000'),
(25, 3, 'cisaat', '25000'),
(26, 3, 'sitenjo', '26000'),
(27, 3, 'dukuhbadag', '27000'),
(28, 4, 'bunder', '28000'),
(29, 4, 'cibulan', '29000'),
(30, 4, 'cidahu', '30000'),
(31, 4, 'cieurih', '31000'),
(32, 4, 'cihidenggirang', '32000'),
(33, 4, 'cikesik', '33000'),
(34, 4, 'jatimulya', '34000'),
(35, 5, 'Babakanjati', '35000'),
(36, 5, 'Bunigeulis', '36000'),
(37, 5, 'Cibuntu', '37000'),
(38, 5, 'Indapatra', '38000'),
(39, 5, 'Jambugeulis', '39000'),
(40, 5, 'Karangmuncang', '40000'),
(41, 5, 'Koreak', '41000'),
(42, 5, 'Panawuanÿ', '42000'),
(43, 5, 'Sangkanmulya', '43000'),
(44, 5, 'Sangkanurip', '44000'),
(45, 5, 'Timbang', '45000'),
(46, 6, 'Babakanmulya', '46000'),
(47, 6, 'Cigadung', '47000'),
(48, 6, 'Cigugur', '48000'),
(49, 6, 'Cileuleuy', '49000'),
(50, 6, 'Cipari', '50000'),
(51, 6, 'Cisantana', '51000'),
(52, 6, 'Gunungkeling', '52000'),
(53, 6, 'Puncak', '53000'),
(54, 6, 'Sukamulya', '54000'),
(55, 6, 'Winduherang', '55000'),
(56, 7, 'Bungurberes', '56000'),
(57, 7, 'Cilebak', '57000'),
(58, 7, 'Cilimusari', '58000'),
(59, 7, 'Jalatrang', '59000'),
(60, 7, 'Legokherang', '60000'),
(61, 7, 'Mandapajayaÿ', '61000'),
(62, 7, 'Patala', '62000'),
(63, 8, 'Bandorasa Kulon', '63000'),
(64, 8, 'Bandorasa Wetan', '64000'),
(65, 8, 'Bojongÿ', '65000'),
(66, 8, 'Caracasÿ', '66000'),
(67, 8, 'Cibeureum', '67000'),
(68, 9, 'Sukajaya', '68000'),
(69, 9, 'Mulyajaya', '69000'),
(70, 9, 'Mekarjayaÿ', '70000'),
(71, 9, 'Margamukti', '71000'),
(72, 10, 'Cijemit', '72000'),
(73, 10, 'Ciniru', '73000'),
(74, 10, 'Cipedes', '74000'),
(75, 11, 'Mekarsari', '75000'),
(76, 11, 'Cimaranten', '76000'),
(77, 11, 'Cipicung', '77000'),
(78, 11, 'Karoya', '78000'),
(79, 12, 'Babakanmulya', '79000'),
(80, 12, 'Ciniru', '80000'),
(81, 12, 'Jalaksana', '81000'),
(82, 12, 'Maniskidulÿ', '82000'),
(83, 13, 'Awirarangan', '83000'),
(84, 13, 'Cibinuang', '84000'),
(85, 11, 'Kuningan', '85000'),
(86, 13, 'Purwawinangun', '86000'),
(87, 13, 'Cijoho', '87000'),
(88, 13, 'Ancaran', '88000'),
(89, 13, 'Karangtawang', '89000'),
(90, 13, 'Citangtuÿ', '90000'),
(91, 14, 'Arjawinangun', '91000'),
(92, 14, 'ÿBulak', '92000'),
(93, 14, 'Geyongan', '93000'),
(94, 14, 'Jungjang', '94000'),
(95, 14, 'Jungjang Wetan', '95000'),
(96, 14, 'Karangsambung', '96000'),
(97, 15, 'Astanajapura', '97000'),
(98, 15, 'Kanci Kulon', '98000'),
(99, 15, 'Kendal', '99000'),
(100, 15, 'Mertapada Kulon', '100000'),
(101, 15, 'Mertapada Wetan', '101000'),
(102, 16, 'Gembonganmekar', '102000'),
(103, 16, 'Karangwangun', '103000'),
(104, 16, 'Kudukeras', '104000'),
(105, 16, 'Kudumulya', '105000'),
(106, 16, 'Pakusamben', '106000'),
(107, 16, 'Serang Kulon', '107000'),
(108, 17, 'Kondangsari', '108000'),
(109, 17, 'Patapan', '109000'),
(110, 17, 'Sindanghayu', '110000'),
(111, 17, 'Sindangkasih', '111000'),
(112, 17, 'Wanayasaÿ', '112000'),
(113, 18, ' Damarguna', '113000'),
(114, 18, 'Jatiseeng', '114000'),
(115, 18, 'Jatiseeng Kidulÿ', '115000'),
(116, 18, 'Leuweunggajah', '116000'),
(117, 18, 'Tenjomaya', '117000'),
(118, 19, 'Babakanÿ', '118000'),
(119, 19, 'Bringin', '119000'),
(120, 19, 'Budur', '120000'),
(121, 19, 'Ciwaringinÿ', '121000'),
(122, 19, 'Galagamba', '122000'),
(123, 19, 'Gintung Kidul', '123000'),
(124, 19, 'Gintung Tengah', '124000'),
(125, 19, 'Gintungranjeng', '125000'),
(126, 20, 'Cikeduk', '126000'),
(127, 20, 'Depok', '127000'),
(128, 20, 'Getasan', '128000'),
(129, 20, 'Karangwangi ', '129000'),
(130, 20, 'Kasugengan Kidulÿ', '130000'),
(131, 20, 'Kasugengan Lorÿ', '131000'),
(132, 20, 'Keduananÿ', '132000'),
(133, 21, 'Baladÿ', '133000'),
(134, 21, 'Bobosÿ', '134000'),
(135, 21, 'Cangkoakÿ', '135000'),
(136, 21, 'Cikalahangÿ', '136000');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` varchar(15) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Besi'),
(3, 'Pipa'),
(5, 'Holo'),
(6, 'Stainless'),
(7, 'Besi Betton'),
(8, 'Cat'),
(9, 'Accesoris'),
(11, 'Pagar');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kode_kec` int(11) NOT NULL,
  `nama_kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kode_kec`, `nama_kecamatan`) VALUES
(1, 1, 'ciawigebang'),
(2, 1, 'cibeureum'),
(3, 1, 'cibingbin'),
(4, 1, 'cidahu'),
(5, 1, 'cigandamekar'),
(6, 1, 'cigugur'),
(7, 1, 'cilebak'),
(8, 1, 'cilimus'),
(9, 1, 'cimahi'),
(10, 1, 'ciniru'),
(11, 1, 'cipicung'),
(12, 1, 'jalaksana'),
(13, 1, 'kuningan'),
(14, 2, 'arjawinangun'),
(15, 2, 'astanajapura'),
(16, 2, 'babakan'),
(17, 2, 'beber'),
(18, 2, 'ciledug'),
(19, 2, 'ciwaringin'),
(20, 2, 'depok'),
(21, 2, 'dukupuntang');

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE `kritik` (
  `id_kritik` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `isi_kritik` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_telepon` varchar(13) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `harga_produk` varchar(20) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(30) DEFAULT NULL,
  `diskon` int(10) DEFAULT 0,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga_produk`, `deskripsi`, `stok`, `gambar`, `diskon`, `tipe`) VALUES
(1, 6, 'Seng Stainles', '15000', 'Seng stainles per meteran', 30, '1.jpg', 0, 1),
(2, 9, 'Aksesoris Bintang', '10000', 'Aksesoris Pagar satuan', 50, '2.jpg', 0, 1),
(3, 2, 'Besi 5\"', '75000', 'Besi per satuan', 80, '3.jpg', 0, 1),
(4, 2, 'Besi 4\"', '60000', 'Besi per satuan', 50, '4.png', 0, 1),
(5, 2, 'Besi 3\"', '50000', 'Besi per satuan', 70, '5.jpg', 0, 1),
(6, 2, 'Besi 2\"', '45000', 'Besi per satuan', 90, '6.jpg', 0, 1),
(7, 6, 'Baja Ringan', '75000', 'Baja Ringan Stainless', 40, '7.jpg', 0, 1),
(8, 8, 'Cat Emco | Coklat Tua', '65000', 'Cat Kayu Merk Emco', 80, '8.png', 0, 1),
(9, 8, 'Cat Avian', '60000', 'Cat Kayu Avian Coklat Muda', 60, '9.jpg', 0, 1),
(10, 5, 'Holo Pagar', '50000', 'Holo Pagar 4\"', 30, '13.jpg', 0, 1),
(11, 11, 'Besi Salur', '150000', 'Pagar Salur besi per meter warna putih', 60, 'coaster.png', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(15) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_desa` int(11) NOT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(125) DEFAULT NULL,
  `tgl_order` timestamp NULL DEFAULT current_timestamp(),
  `total_bayar` varchar(50) DEFAULT NULL,
  `ongkir` varchar(30) NOT NULL,
  `status_pembayaran` varchar(50) DEFAULT NULL,
  `bukti_bayar` varchar(30) DEFAULT '0',
  `status_order` int(1) DEFAULT NULL
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
-- Indexes for table `chatting`
--
ALTER TABLE `chatting`
  ADD PRIMARY KEY (`id_chatting`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id_kritik`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chatting`
--
ALTER TABLE `chatting`
  MODIFY `id_chatting` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id_kritik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
