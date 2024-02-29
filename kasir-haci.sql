-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Feb 2024 pada 08.01
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir-haci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpenjualan`
--

CREATE TABLE `detailpenjualan` (
  `DetailID` int(11) NOT NULL,
  `PenjualanID` int(11) NOT NULL,
  `ProdukID` int(11) NOT NULL,
  `JumlahProduk` int(11) NOT NULL,
  `Subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detailpenjualan`
--

INSERT INTO `detailpenjualan` (`DetailID`, `PenjualanID`, `ProdukID`, `JumlahProduk`, `Subtotal`) VALUES
(0, 1, 444, 1, 5000.00),
(3, 2, 444, 2, 5000.00),
(4, 3, 666, 1, 10000.00),
(4, 4, 444, 1, 5000.00),
(5, 5, 666, 1, 10000.00),
(5, 6, 444, 1, 5000.00),
(6, 7, 222, 5, 20000.00),
(7, 8, 764, 1, 30000.00),
(8, 9, 443, 1, 20000.00),
(9, 10, 764, 1, 30000.00),
(10, 11, 764, 1, 30000.00),
(11, 12, 666, 3, 10000.00),
(12, 13, 443, 2, 20000.00),
(14, 16, 444, 1, 5000.00),
(18, 23, 666, 1, 10000.00),
(18, 24, 445, 1, 25000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `PelangganID` int(11) NOT NULL,
  `NamaPelanggan` varchar(255) NOT NULL,
  `Nomeja` int(11) NOT NULL,
  `NomorTelepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`PelangganID`, `NamaPelanggan`, `Nomeja`, `NomorTelepon`) VALUES
(0, '', 3, ''),
(2, 'tt', 7, ''),
(3, 'tt', 7, ''),
(4, 'ernes', 2, ''),
(5, 'ernes', 2, ''),
(6, 'hhhh', 6, ''),
(7, 'jundi', 0, ''),
(8, 'jundi', 0, ''),
(9, 'jundi', 0, ''),
(10, 'jundi', 0, ''),
(11, 'beler', 0, ''),
(12, 'ichsan', 1, ''),
(13, 'jundi', 4, ''),
(14, 'b', 6, ''),
(15, 'paul', 5, ''),
(16, 'beler', 3, ''),
(17, 'jamet', 6, ''),
(18, 'haci', 4, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `PenjualanID` int(11) NOT NULL,
  `TanggalPenjualan` date NOT NULL,
  `TotalHarga` decimal(10,2) NOT NULL,
  `PelangganID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`PenjualanID`, `TanggalPenjualan`, `TotalHarga`, `PelangganID`) VALUES
(1, '0000-00-00', 0.00, 0),
(2, '2024-02-27', 0.00, 0),
(3, '2024-02-27', 0.00, 0),
(4, '2024-02-27', 0.00, 0),
(5, '2024-02-27', 0.00, 0),
(6, '2024-02-27', 0.00, 0),
(7, '2024-02-27', 0.00, 0),
(8, '2024-02-28', 0.00, 0),
(9, '2024-02-28', 0.00, 0),
(10, '2024-02-28', 0.00, 0),
(11, '2024-02-28', 0.00, 0),
(12, '2024-02-28', 0.00, 0),
(13, '2024-02-28', 0.00, 0),
(14, '2024-02-28', 0.00, 0),
(15, '2024-02-28', 0.00, 0),
(16, '2024-02-28', 0.00, 0),
(17, '2024-02-28', 0.00, 0),
(18, '2024-02-28', 0.00, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `ProdukID` int(11) NOT NULL,
  `NamaProduk` varchar(255) NOT NULL,
  `Harga` decimal(10,2) NOT NULL,
  `Stok` int(11) NOT NULL,
  `Terjual` int(11) NOT NULL,
  `Foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`ProdukID`, `NamaProduk`, `Harga`, `Stok`, `Terjual`, `Foto`) VALUES
(443, 'Nasi Goreng Saiton', 30000.00, 18, 7, '28022024051407.jfif'),
(444, 'Es teh Malabar', 8000.00, 9, 7, '28022024051712.jpg'),
(445, 'Ikan Bakar Malabar Session 2', 25000.00, 18, 2, '28022024034018.jpg'),
(543, 'Kopi Malabar', 20000.00, 4, 1, '27022024021015.jfif'),
(553, 'Susu Fanila Malabar', 10000.00, 10, 0, '29022024065423.webp'),
(666, 'Es Jeruk Standard', 10000.00, 24, 6, '27022024021529.jpg'),
(764, 'Udang Bakar Malabar Session 4', 30000.00, 44, 6, '27022024021214.jfif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `NamaUSer` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`UserID`, `NamaUSer`, `Password`, `level`) VALUES
(789, 'weli', '6777f802749c8b4ea805d0dbb1b88455', 'admin'),
(5464, 'admin', 'bcbe3365e6ac95ea2c0343a2395834dd', 'admin'),
(7443, 'petugas', '3d8e28caf901313a554cebc7d32e67e5', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD PRIMARY KEY (`PenjualanID`),
  ADD KEY `DetailID` (`DetailID`),
  ADD KEY `PenjualanID` (`PenjualanID`,`ProdukID`),
  ADD KEY `ProdukID` (`ProdukID`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`PelangganID`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`PenjualanID`),
  ADD KEY `PelangganID` (`PelangganID`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ProdukID`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  MODIFY `PenjualanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `PenjualanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
