-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2022 pada 03.25
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Bayu', 'admin', 'admin'),
(2, 'Upi Mariani edit', 'username', 'ahmas'),
(3, 'Rizki', 'username', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chatting`
--

CREATE TABLE `chatting` (
  `id_chatting` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `admin_send` text NOT NULL,
  `pelanggan_send` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chatting`
--

INSERT INTO `chatting` (`id_chatting`, `id_admin`, `id_pelanggan`, `admin_send`, `pelanggan_send`, `time`) VALUES
(2, 1, 3, 'hai', '0', '2021-12-12 07:21:40'),
(3, 1, 3, 'hai juga', '0', '2021-12-12 07:23:10'),
(4, 1, 3, '0', 'izin bertanya', '2021-12-12 07:42:48'),
(5, 1, 4, '0', 'apakah ini ada?\r\n', '2021-12-12 07:46:26'),
(6, 1, 3, 'boleh', '0', '2021-12-14 02:04:55'),
(7, 1, 3, 'boleh', '0', '2021-12-14 02:05:16'),
(8, 1, 4, 'ada', '0', '2021-12-29 23:52:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `nama_desa` varchar(30) NOT NULL,
  `ongkir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desa`
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
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` varchar(15) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `id_transaksi`, `id_produk`, `qty`) VALUES
(1, '202110175UXOEYK', 2, '2'),
(2, '202110175UXOEYK', 1, '1'),
(3, '20211123OXE4SRW', 2, '1'),
(4, '20211123OXE4SRW', 6, '1'),
(5, '20211123TVW5OUG', 2, '1'),
(6, '20211127G3S1FOO', 12, '6'),
(7, '20211127G3S1FOO', 2, '1'),
(8, '20211127G3S1FOO', 5, '1'),
(9, '202111306BIWZ2D', 1, '2'),
(10, '202111306BIWZ2D', 6, '1'),
(11, '20211212QKZZ0JM', 1, '3'),
(12, '20211214IECFKX9', 2, '1'),
(13, '20211214IJXB3MC', 2, '1'),
(14, '20211214IJXB3MC', 3, '1'),
(15, '20211214QQYPJMI', 3, '1'),
(16, '20211214QQYPJMI', 4, '1'),
(17, '20211214SPM8R9M', 3, '2'),
(18, '20211214SPM8R9M', 2, '1'),
(19, '20211230F3BKSTL', 3, '1'),
(20, '20211230ZNH06RB', 4, '3'),
(21, '20211230ZNH06RB', 3, '1'),
(22, '20220104VTBD2LY', 3, '3'),
(23, '20220206EYIHOGO', 6, '6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
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
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kode_kec` int(11) NOT NULL,
  `nama_kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
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
-- Struktur dari tabel `kritik`
--

CREATE TABLE `kritik` (
  `id_kritik` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `isi_kritik` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_telepon` varchar(13) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_telepon`, `username`, `password`) VALUES
(1, 'Bayu', 'Kuningan', '085156727368', 'bayu', 'user'),
(2, 'Lusy', 'Winduherang', '085156727368', 'lusy', 'lusyds'),
(3, 'Upi Mariani', 'jln ramajaksa rt.07/03 winduherang', '085523369874', 'username', 'password'),
(4, 'Dani', 'jln ramajaksa rt.07/03 winduherang', '085523369874', 'upi', 'mariani'),
(5, 'LUSY DWIE', 'WINDUHERANG', '085523369874', 'lusy', 'lusydwie');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
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
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga_produk`, `deskripsi`, `stok`, `gambar`, `diskon`, `tipe`) VALUES
(2, 6, 'Stainless', '50000', 'Stainless Tipis', 0, '1.jpg', 5, 1),
(3, 9, 'Aksesoris Bunga', '10000', 'Aksesoris Pagar', 15, '2.jpg', 0, 1),
(4, 5, 'Hollow', '25000', 'Hollow', 17, '10.jpg', 0, 1),
(5, 11, 'cek', '12121', 'sungguh enak banget', 121, 'new-php-logo1.png', 0, 2),
(6, 11, 'Upi Mariani', '50000', 'sungguh enak banget', 115, 'pager21.jpg', 0, 2),
(7, 11, 'Baju', '50000', 'sungguh enak banget', 100, 'pager41.png', 0, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
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
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_desa`, `atas_nama`, `alamat`, `tgl_order`, `total_bayar`, `ongkir`, `status_pembayaran`, `bukti_bayar`, `status_order`) VALUES
('20211214IECFKX9', 3, 0, 'upi mariani', 'jln ramajaksa rt.07/03 winduherang', '2021-12-14 13:22:14', '50000', '', '1', 'img1102.jpg', 4),
('20211214IJXB3MC', 3, 0, 'MMan', 'jln ramajaksa rt.07/03 winduherang', '2021-12-14 20:51:37', '60000', '', '1', 'img115.jpg', 3),
('20211214QQYPJMI', 3, 0, 'ahmad', 'jln ramajaksa rt.07/03 winduherang', '2021-12-14 20:58:31', '35000', '', '1', 'img117.jpg', 4),
('20211214SPM8R9M', 3, 0, 'dani', 'jln ramajaksa rt.07/03 winduherang', '2021-12-14 21:01:53', '67500', '', '0', '0', 0),
('20211230F3BKSTL', 1, 38, NULL, 'trt', '2021-12-29 23:43:27', '10000', '38000', '1', 'img109.jpg', 0),
('20211230ZNH06RB', 1, 39, 'Bayu', 'rt 03 rw 4', '2021-12-29 23:44:58', '85000', '39000', '0', '0', 0),
('20220104VTBD2LY', 1, 38, 'Bayu', 'rt 07', '2022-01-04 11:52:26', '30000', '38000', '1', 'bca.jpg', 4),
('20220206EYIHOGO', 4, 58, 'Dani', 'rt 07', '2022-02-06 22:16:15', '300000', '58000', '1', 'link.jpg', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `chatting`
--
ALTER TABLE `chatting`
  ADD PRIMARY KEY (`id_chatting`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id_kritik`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `chatting`
--
ALTER TABLE `chatting`
  MODIFY `id_chatting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id_kritik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
