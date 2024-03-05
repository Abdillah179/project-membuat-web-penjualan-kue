-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Mar 2024 pada 06.02
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_website_roti2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat_user`
--

CREATE TABLE `alamat_user` (
  `id_alamat` int(11) NOT NULL,
  `nama_alamat` varchar(700) NOT NULL,
  `nama_penerima` varchar(600) NOT NULL,
  `no_handphone_penerima` char(13) NOT NULL,
  `alamat_lengkap` varchar(900) NOT NULL,
  `kecamatan` varchar(129) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `kota` varchar(700) NOT NULL,
  `provinsi` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `email_pengirim` varchar(130) NOT NULL,
  `no_handphone` char(12) NOT NULL,
  `pesan` varchar(140) NOT NULL,
  `tanggal_pengiriman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `nama_pengirim`, `email_pengirim`, `no_handphone`, `pesan`, `tanggal_pengiriman`) VALUES
(25, 'Abdillah', 'muhammadabdillahasyhar68@gmail.com', '081386052908', 'bagus', '2023-12-10'),
(28, 'Abdillah', 'muhammadabdillahasyhar68@gmail.com', '081386052908', 'Website Yang Bagus', '2023-12-11 13:48:48'),
(29, 'Abdillah', 'muhammadabdillahasyhar68@gmail.com', '081386052908', 'oke', '2024-01-04 20:48:56'),
(30, 'Abdillah', 'muhammadabdillahasyhar68@gmail.com', '081386052908', 'bagus', '2024-01-04 21:34:32'),
(31, 'Abdillah', 'muhammadabdillahasyhar68@gmail.com', '081386052908', 'TES', '2024-01-05 19:37:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(90) NOT NULL,
  `atas_nama` varchar(100) NOT NULL,
  `no_rek` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `atas_nama`, `no_rek`) VALUES
(2, 'MANDIRI', 'SUHENDRA', '129873163891908'),
(3, 'BNI', 'SUHENDRA', '91272895'),
(4, 'BCA', 'SUHENDRA', '178264329');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(900) NOT NULL,
  `keterangan_barang` varchar(800) NOT NULL,
  `kategori_barang` varchar(900) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `keterangan_barang`, `kategori_barang`, `id_kategori`, `harga_barang`, `berat`, `stok`, `gambar`) VALUES
(1, 'Roti Coklat Susu', '-', 'ROTI', 1, 6000, 100, 74, 'foto_1.jpg'),
(2, 'Roti Kismis', '-', 'ROTI', 1, 5000, 100, 1, 'foto 2.jpg'),
(3, 'Roti Kacang', '-', 'ROTI', 1, 5500, 100, 17, 'foto 3.jpg'),
(4, 'Roti Kacang Coklat', '-', 'ROTI', 1, 6000, 100, 12, 'foto 4.jpg'),
(5, 'Roti Kosongan Meses', '-', 'ROTI', 1, 7000, 100, 49, 'foto 5.jpg'),
(6, 'Roti Blueberry', '-', 'ROTI', 1, 6000, 100, 13, 'foto 6.jpg'),
(7, 'Roti Coklat', '-', 'ROTI', 1, 6000, 100, 37, 'foto 7.jpg'),
(8, 'Roti Cream Strawberry', '-', 'ROTI', 1, 6000, 100, 52, 'foto 8.jpg'),
(9, 'Roti Cream Vanilla', '-', 'ROTI', 1, 6000, 100, 90, 'foto 9.jpg'),
(10, 'Roti Cream Durian', '-', 'ROTI', 1, 5500, 100, 50, 'foto 10.jpg'),
(11, 'Roti Meses Wijen', '-', 'ROTI', 1, 6000, 100, 30, 'foto 11.jpg'),
(12, 'Roti Selai Nanas', '-', 'ROTI', 1, 6000, 100, 70, 'foto 12.jpg'),
(17, 'Roll Pandan', '-', 'Roll Cakes', 2, 20000, 300, 90, 'foto 17.jpg'),
(18, 'Roll Mocca', '-', 'Roll Cakes', 2, 27000, 300, 30, 'foto 18.jpg'),
(19, 'Roll Zebra', '-', 'Roll Cakes', 2, 23000, 300, 37, 'foto 19.jpg'),
(20, 'Roll Selai', '-', 'Roll Cakes', 2, 23000, 300, 20, 'foto 20.jpg'),
(21, 'Roll Banana', '-', 'Roll Cakes', 2, 29000, 300, 50, 'foto 21.jpg'),
(22, 'Roll Vanilla', '-', 'Roll Cakes', 2, 27000, 300, 27, 'foto 22.jpg'),
(23, 'Roll Strawberry', '-', 'Roll Cakes', 2, 25000, 300, 70, 'foto 23.jpg'),
(24, 'Roll Coklat', '-', 'Roll Cakes', 2, 20000, 300, 38, 'foto 24.jpg'),
(25, 'Roll Pandan Zebra', '-', 'Roll Cakes', 2, 29000, 300, 34, 'foto 25.jpg'),
(26, 'Roll Durian', '-', 'Roll Cakes', 2, 24000, 300, 25, 'foto 26.jpg'),
(27, 'Roll Rainbow', '-', 'Roll Cakes', 2, 22000, 300, 46, 'foto 27.jpg'),
(28, 'Roll Taro', '', 'Roll Cakes', 2, 23000, 300, 19, 'foto 28.jpg'),
(41, 'Donut Meses Warna Warni', '-', 'Donut', 3, 6000, 100, 70, 'foto 41.jpg'),
(42, 'Donut Meses Warna Warni', '-', 'Donut', 3, 5000, 100, 37, 'foto 42.jpg'),
(43, 'Donut Meses Coklat', '-', 'Donut', 3, 6000, 100, 50, 'foto 49.jpg'),
(44, 'Donut Meses Warna Warni', '-', 'Donut', 3, 6000, 100, 49, 'foto 43.jpg'),
(45, 'Donut Meses Warna Warni', '-', 'Donut', 3, 6000, 100, 90, 'foto 44.jpg'),
(46, 'Donut Keju', '-', 'Donut', 3, 6000, 100, 50, 'foto 45.jpg'),
(47, 'Donut Daging', '-', 'Donut', 3, 6000, 100, 39, 'foto 46.jpg'),
(48, 'Donut Ayam Jamur', '-', 'Donut', 3, 6000, 100, 65, 'foto 47.jpg'),
(49, 'Donut Ayam', '-', 'Donut', 3, 6000, 100, 79, 'foto 48.jpg'),
(50, 'Cake Coklat Keju', '-', 'Cake/Kue', 4, 29000, 317, 18, 'foto 50.jpg'),
(51, 'Cake Pandan Keju', '-', 'Cake/Kue', 4, 28000, 317, 59, 'foto 51.jpg'),
(52, 'Cake Original', '-', 'Cake/Kue', 4, 27000, 317, 40, 'foto 52.jpg'),
(53, 'Cake Taro Keju', '-', 'Cake/Kue', 4, 24000, 317, 70, 'foto 53.jpg'),
(54, 'Cake Durian Keju', '-', 'Cake/Kue', 4, 23000, 317, 37, 'foto 54.jpg'),
(55, 'Cake Tiramisu Keju', '-', 'Cake/Keju', 4, 23000, 317, 45, 'foto 55.jpg'),
(56, 'Cake Red Velvet', '-', 'Cake/Kue', 4, 28000, 317, 75, 'foto 56.jpg'),
(57, 'Cake Oensbekoek', '-', 'Cake/Kue', 4, 20000, 317, 90, 'foto 57.jpg'),
(58, 'Cake Choco Chip', '-', 'Cake/Kue', 4, 29000, 317, 73, 'foto 58.jpg'),
(59, 'Cake Mocca', '-', 'Cake/Kue', 4, 27000, 317, 41, 'foto 59.jpg'),
(60, 'Cake Kukus Pelangi', '-', 'Cake/Kue', 4, 25000, 317, 70, 'foto 61.jpg'),
(61, 'Cake Mandarin', '-', 'Cake/Kue', 4, 27000, 317, 31, 'foto 62.jpg'),
(65, 'Puding Variasi Blackforest', '-', 'Pudding', 5, 10000, 100, 90, 'foto 66.jpg'),
(66, 'Puding Variasi Orange', '-', 'Pudding', 5, 10000, 100, 70, 'foto 67.jpg'),
(67, 'Puding Variasi Banana', '-', 'Pudding', 5, 10000, 100, 40, 'foto 68.jpg'),
(68, 'Puding Variasi Cherry', '-', 'Pudding', 5, 10000, 100, 98, 'foto 69.jpg'),
(69, 'Puding Variasi Mocca', '-', 'Pudding', 5, 10000, 100, 79, 'foto 70.jpg'),
(70, 'Puding Cherry', '-', 'Pudding', 5, 10000, 100, 89, 'foto 71.jpg'),
(71, 'Puding Leci', '-', 'Pudding', 5, 10000, 100, 52, 'foto 72.jpg'),
(72, 'Puding Jeruk', '-', 'Puddding', 5, 10000, 100, 70, 'foto 73.jpg'),
(73, 'Mente Kuning', '-', 'Cookies', 6, 30000, 700, 70, 'foto 74.jpg'),
(74, 'Mente Coklat', '-', 'Cookies', 6, 30000, 700, 90, 'foto 75.jpg'),
(75, 'Coklat Chips', '-', 'Cookies', 6, 30000, 700, 60, 'foto 76.jpg'),
(76, 'Choco Cheese', '-', 'Cookies', 6, 30000, 700, 70, 'foto 77.jpg'),
(77, 'Lapis Singkong', '-', 'Lapis', 7, 7000, 90, 27, 'foto 78.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Bread'),
(2, 'Roll Cakes'),
(3, 'Donut'),
(4, 'Cake'),
(5, 'Pudding'),
(6, 'Cookies'),
(7, 'Lapis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rinci_transaksi`
--

CREATE TABLE `tb_rinci_transaksi` (
  `id_rinci` int(11) NOT NULL,
  `no_order` varchar(290) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `nama_barang` varchar(900) DEFAULT NULL,
  `harga_barang` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `kategori_barang` varchar(908) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_rinci_transaksi`
--

INSERT INTO `tb_rinci_transaksi` (`id_rinci`, `no_order`, `id_barang`, `gambar`, `nama_barang`, `harga_barang`, `berat`, `qty`, `subtotal`, `kategori_barang`) VALUES
(190, '202401057OK1BAH3', 4, 'foto 4.jpg', 'Roti Kacang Coklat', 6000, 100, 1, 6000, 'ROTI'),
(191, '20240111FW9VYFJG', 8, 'foto 8.jpg', 'Roti Cream Strawberry', 6000, 100, 1, 6000, 'ROTI'),
(192, '20240114FE7JIGGD', 8, 'foto 8.jpg', 'Roti Cream Strawberry', 6000, 100, 20, 120000, 'ROTI'),
(193, '20240115BRMDBUAV', 8, 'foto 8.jpg', 'Roti Cream Strawberry', 6000, 100, 5, 30000, 'ROTI'),
(194, '20240115IM94ZEAD', 6, 'foto 6.jpg', 'Roti Blueberry', 6000, 100, 3, 18000, 'ROTI'),
(195, '2024011509ZPBYVJ', 5, 'foto 5.jpg', 'Roti Kosongan Meses', 7000, 100, 1, 7000, 'ROTI'),
(196, '20240115BLCTTZ5F', 8, 'foto 8.jpg', 'Roti Cream Strawberry', 6000, 100, 1, 6000, 'ROTI'),
(197, '20240115WEL0Z7FT', 8, 'foto 8.jpg', 'Roti Cream Strawberry', 6000, 100, 9, 54000, 'ROTI'),
(198, '20240115STJXCQGW', 6, 'foto 6.jpg', 'Roti Blueberry', 6000, 100, 5, 30000, 'ROTI'),
(199, '202401150WXQS2ZT', 6, 'foto 6.jpg', 'Roti Blueberry', 6000, 100, 9, 54000, 'ROTI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pembeli` int(11) DEFAULT NULL,
  `no_order` varchar(290) DEFAULT NULL,
  `tgl_order` varchar(90) DEFAULT NULL,
  `nama_alamat` varchar(200) DEFAULT NULL,
  `nama_penerima` varchar(300) DEFAULT NULL,
  `no_handphone_penerima` varchar(19) DEFAULT NULL,
  `alamat_lengkap_penerima` varchar(700) DEFAULT NULL,
  `kecamatan` varchar(80) DEFAULT NULL,
  `kode_pos` varchar(90) DEFAULT NULL,
  `kota` varchar(90) DEFAULT NULL,
  `provinsi` varchar(90) DEFAULT NULL,
  `berat_total` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `status_bayar` int(1) DEFAULT NULL,
  `metode_pembayaran` varchar(200) DEFAULT NULL,
  `bank_pembayaran` varchar(900) NOT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `atas_nama` varchar(95) DEFAULT NULL,
  `nama_bank` varchar(95) DEFAULT NULL,
  `no_rek` varchar(95) DEFAULT NULL,
  `status_order` int(1) DEFAULT NULL,
  `bukti_diterima` text DEFAULT NULL,
  `penilaian_barang` varchar(900) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_pembeli`, `no_order`, `tgl_order`, `nama_alamat`, `nama_penerima`, `no_handphone_penerima`, `alamat_lengkap_penerima`, `kecamatan`, `kode_pos`, `kota`, `provinsi`, `berat_total`, `total_bayar`, `status_bayar`, `metode_pembayaran`, `bank_pembayaran`, `bukti_bayar`, `atas_nama`, `nama_bank`, `no_rek`, `status_order`, `bukti_diterima`, `penilaian_barang`) VALUES
(131, 130, '202401057OK1BAH3', '2024-01-05 19:21:57', 'Rumah', 'Muhammad Abdillah Asyhar', '081386052908', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'TelukJambe Timur', '41361', 'Karawang', 'JAWA BARAT', 100, 6000, 1, 'transfer_bank', '', 'IMG202207261706204.jpg', 'MUHAMMAD ABDILLAH ASYHAR', 'mandiri', '7869869', 3, 'Halaman_Histori_Pembelian.png', 'PENGIRIMAN CEPAT'),
(132, 112, '20240111FW9VYFJG', '2024-01-11 22:17:51', 'Rumah', 'Muhammad Abdillah Asyhar', '081386052908', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'TelukJambe Timur', '41361', 'Karawang', 'JAWA BARAT', 100, 6000, 1, 'cod', '', NULL, NULL, NULL, NULL, 0, NULL, NULL),
(133, 112, '20240114FE7JIGGD', '2024-01-14 19:06:41', 'Rumah', 'Muhammad Abdillah Asyhar', '081386052908', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'TelukJambe Timur', '41361', 'Karawang', 'JAWA BARAT', 2000, 108000, 0, NULL, '', NULL, NULL, NULL, NULL, 4, NULL, NULL),
(134, 112, '20240115BRMDBUAV', '2024-01-15 10:10:42', 'Rumah', 'Muhammad Abdillah Asyhar', '081386052908', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'TelukJambe Timur', '41361', 'Karawang', 'JAWA BARAT', 500, 30000, 1, 'transfer_bank', 'MANDIRI', 'Screenshot_2023-12-26_222126.jpg', 'MUHAMMAD ABDILLAH ASYHAR', 'mandiri', '0707707077909', 0, NULL, NULL),
(135, 112, '20240115IM94ZEAD', '2024-01-15 11:13:24', 'Rumah', 'Muhammad Abdillah Asyhar', '081386052908', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'TelukJambe Timur', '41361', 'Karawang', 'JAWA BARAT', 300, 18000, 1, 'transfer_bank', 'MANDIRI', 'Screenshot_2023-12-31_073337.jpg', 'MUHAMMAD ABDILLAH ASYHAR', 'MANDIR', '7869869', 0, NULL, NULL),
(136, 112, '2024011509ZPBYVJ', '2024-01-15 12:52:07', 'Pilih Tipe Alamat', 'Muhammad Abdillah Asyhar', '081386052908', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'TelukJambe Timur', '41361', 'Karawang', 'JAWA BARAT', 100, 7000, 1, 'transfer_bank', 'MANDIRI', 'Screenshot_2023-12-31_072945.jpg', 'MUHAMMAD ABDILLAH ASYHAR', 'BCA', '7869869', 0, NULL, NULL),
(137, 112, '20240115BLCTTZ5F', '2024-01-15 12:56:24', 'Rumah', 'Muhammad Abdillah Asyhar', '081386052908', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'TelukJambe Timur', '41361', 'Karawang', 'JAWA BARAT', 100, 6000, 1, 'transfer_bank', 'BCA', 'Screenshot_2023-12-26_2221261.jpg', 'MUHAMMAD ABDILLAH ASYHAR', 'BCA', '7869869', 0, NULL, NULL),
(138, 112, '20240115WEL0Z7FT', '2024-01-15 13:02:58', 'Rumah', 'Muhammad Abdillah Asyhar', '081386052908', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'TelukJambe Timur', '41361', 'Karawang', 'JAWA BARAT', 900, 54000, 1, 'transfer_bank', 'BNI', 'Tampilan_Home_Dark_mode_dark.jpg', 'MUHAMMAD ABDILLAH ASYHAR', 'BNI', '1979719', 0, NULL, NULL),
(139, 112, '20240115STJXCQGW', '2024-01-15 14:09:58', 'Rumah', 'Muhammad Abdillah Asyhar', '081386052908', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'TelukJambe Timur', '41361', 'Karawang', 'JAWA BARAT', 500, 30000, 1, 'transfer_bank', 'BCA', 'foto_login_user.jpg', 'abdillah', 'BCA', '18978577', 0, NULL, NULL),
(140, 112, '202401150WXQS2ZT', '2024-01-15 14:16:17', 'Rumah', 'Muhammad Abdillah Asyhar', '081386052908', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'TelukJambe Timur', '41361', 'Karawang', 'JAWA BARAT', 900, 54000, 1, 'transfer_bank', 'BNI', 'Screenshot_2023-12-27_170749.jpg', 'abdillahhh', 'BNI', '08197173', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id_toko`, `active`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `alamat` varchar(900) NOT NULL,
  `jenis_kelamin` varchar(900) NOT NULL,
  `tempat_lahir` varchar(900) NOT NULL,
  `tanggal_lahir` varchar(1000) NOT NULL,
  `no_telepon` char(13) NOT NULL,
  `email` varchar(900) NOT NULL,
  `password` varchar(900) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` varchar(110) NOT NULL,
  `image` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_pembeli`, `nama`, `alamat`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `no_telepon`, `email`, `password`, `role_id`, `is_active`, `date_created`, `image`) VALUES
(112, 'Muhammad Abdillah', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'pria', 'Cirebon', '2003-06-01', '081386052908', 'muhammadabdillahasyhar68@gmail.com', '$2y$10$bjcXcKu1QLd7Sx7f3Jzmr.RWHUevoq.UKtcMR/l11skKt29MJvwXy', 2, 1, '1702276605', 'Abdillah_ok_-_Copy5.jpg'),
(130, 'Muhammad Abdillah Asyhar', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'pria', 'Cirebon', '2003-06-01', '081386052908', 'mabdillahasyhar758@gmail.com', '$2y$10$p9IQXLo3RinCaccAplGwQOj4QRajNcPAXXEdkZYicepgFhxv.hnnO', 2, 1, '1704457015', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(900) NOT NULL,
  `alamat` varchar(900) NOT NULL,
  `jenis_kelamin` varchar(900) NOT NULL,
  `tempat_lahir` varchar(700) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telepon` char(13) NOT NULL,
  `email` varchar(900) NOT NULL,
  `password2` varchar(900) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` varchar(900) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id_admin`, `nama`, `alamat`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `no_telepon`, `email`, `password2`, `role_id`, `is_active`, `date_created`, `image`) VALUES
(22, 'Muhammad Abdillah ', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', 'pria', 'Cirebon', '2023-12-23', '081386052908', 'cahayabakery89@gmail.com', '$2y$10$C/27Sjfi/4DtdoeoiQyhLec4iis17hvexq.Hyw/GjceBCGu.uN3Fi', 1, 1, '1702283205', 'Untitled-313.jpg'),
(23, 'Muhammad Abdillah Asyhar', '', '', '', '0000-00-00', '', 'muhammadabdillahasyhar68@gmail.com', '$2y$10$K.L0oXMxj00F7IyBcA4Ug.mchWjcVDQ8Lmf7TnfDHkNC/5RXlhYIK', 0, 1, '1703687403', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(52, 'cahayabakery89@gmail.com', 'ZgbI3tVGlTjKk0bw2KWn5iORMv20K7TK3AvWk3PYGNc=', 1704376585);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamat_user`
--
ALTER TABLE `alamat_user`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_rinci_transaksi`
--
ALTER TABLE `tb_rinci_transaksi`
  ADD PRIMARY KEY (`id_rinci`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alamat_user`
--
ALTER TABLE `alamat_user`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_rinci_transaksi`
--
ALTER TABLE `tb_rinci_transaksi`
  MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
