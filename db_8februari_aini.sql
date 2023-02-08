-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2023 pada 09.02
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_8februari_aini`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_motor`
--

CREATE TABLE `tb_motor` (
  `id_motor` int(10) NOT NULL,
  `nomor_rangka` int(10) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `jenis_motor` varchar(20) NOT NULL,
  `tahun_motor` int(4) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_motor`
--

INSERT INTO `tb_motor` (`id_motor`, `nomor_rangka`, `merek`, `jenis_motor`, `tahun_motor`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(1, 1, 'honda', 'beat', 2015, '2023-02-01', '2023-02-08'),
(2, 2, 'yamaha', 'pcx', 2020, '2023-02-08', '2023-02-08'),
(17, 3, 'htehetwh', 'etbrtn', 3, '2023-02-06', '2023-02-23'),
(18, 2, 'grfg', 'ertger', 1321, '2023-02-08', '2023-02-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peminjam`
--

CREATE TABLE `tb_peminjam` (
  `id_peminjam` int(10) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `umur` int(10) NOT NULL,
  `keperluan` varchar(20) NOT NULL,
  `jaminan` varchar(20) NOT NULL,
  `id_motor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_peminjam`
--

INSERT INTO `tb_peminjam` (`id_peminjam`, `nama_peminjam`, `alamat`, `umur`, `keperluan`, `jaminan`, `id_motor`) VALUES
(1, 'aji', 'sayung', 25, 'pinjam', 'ktp', 1),
(2, 'ahmad', 'demak', 30, 'kredit', 'sim', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_motor`
--
ALTER TABLE `tb_motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indeks untuk tabel `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  ADD PRIMARY KEY (`id_peminjam`),
  ADD KEY `id_motor` (`id_motor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_motor`
--
ALTER TABLE `tb_motor`
  MODIFY `id_motor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  MODIFY `id_peminjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  ADD CONSTRAINT `peminjam_motor` FOREIGN KEY (`id_motor`) REFERENCES `tb_motor` (`id_motor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
