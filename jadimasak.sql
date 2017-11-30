-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Nov 2017 pada 16.55
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadimasak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_user_cart` int(11) NOT NULL,
  `id_resep_cart` int(11) NOT NULL,
  `namaresep_cart` varchar(100) NOT NULL,
  `harga_cart` varchar(100) NOT NULL,
  `stock_cart` int(11) NOT NULL,
  `gambar_cart` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `namaresep` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id_resep`, `id_user`, `namaresep`, `harga`, `kategori`, `stock`, `deskripsi`, `gambar`) VALUES
(2, 1, 'Sayur Asem Jakarta', '50000', 'Berkuah', 4, 'Home\r\nAneka Sayur\r\nResep Sayur Asem Jakarta Enak dan Komplit\r\nResep Sayur Asem Jakarta Enak dan Komplit\r\nResepNona Aneka Sayur\r\n\r\nResep sayur asem jakarta atau sayur asem betawi dengan kuah segar menggugah selera. Sayur asem termasuk dalam salah satu sayuran Nusantara yang mempunyai cita rasa tersendiri. Yap dengan rasanya yang manis dan asem, sehingga sayuran yang satu ini sangat cocok jika dihidangkan bersama ikan goreng, ikan asin, ayam goreng dan sambal tentunya.  Resep sayur asem jakarta ini hampir sama dengan resep sayur asem jawa ataupun sunda, yang membedakannya hanya terletak pada beberapa tambahan sayuran dan bumbu. Rasanya pun dijamin enak dan segar.', 'assets/images/resep/resep_Sayur Asem Jakarta.jpg'),
(3, 1, 'Sayur Lodeh', '45000', 'Berkuah', 3, 'Home\r\nAneka Sayur\r\nResep Sayur Lodeh Labu Siam Tempe Gurih dan Nikmat\r\nResep Sayur Lodeh Labu Siam Tempe Gurih dan Nikmat\r\nResepNona Aneka Sayur\r\n\r\nResep Sayur Lodeh Labu Siam Tempe Gurih dan Nikmat – Sayur lodeh terdiri dari berbagai macam variasi, mulai dari sayur lodeh nangka muda (tewel), sayur lodeh labu siam (manisa), sayur lodeh labu kuning dan sayur lodeh terong. Meskipun terdiri dari bermacam-macam jenis, namun yang sering kita jumpai hanya sayur lodeh nangka dan sayur lodeh labu siam. Sebenarnya jika dilihat dari bahan, kuah dan rasanya, setiap jenis sayur lodeh mempunyai cita rasa yang bereda-beda.', 'assets/images/resep/resep_Sayur Lodeh.jpg'),
(4, 1, 'bbb', '666', 'Berkuah', 4, 'fff', 'assets/images/resep/resep_bbb.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_number` varchar(12) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `mobile_number`, `level`) VALUES
(1, 'admin', 'Ardia', 'RP', 'ardia@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '081213141516', 'Admin'),
(3, 'putriani1111', 'Putriani', 'Puput', 'pupud@gmail.com', '9b31faf63880fbcad2fc51b69a45ebba', '089687123476', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
