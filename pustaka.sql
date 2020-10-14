-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 03:17 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pustaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` varchar(50) NOT NULL,
  `tgl_booking` date NOT NULL,
  `batas_ambil` date NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `id` int(11) NOT NULL,
  `id_booking` varchar(30) NOT NULL,
  `id_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(128) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `pengarang` varchar(64) NOT NULL,
  `penerbit` varchar(64) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `isbn` varchar(64) NOT NULL,
  `stok` int(11) NOT NULL,
  `dipinjam` int(11) NOT NULL,
  `dibooking` int(11) NOT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `id_kategori`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `stok`, `dipinjam`, `dibooking`, `image`) VALUES
(22, 'Statistika dengan program komputer', 5, 'Ahmad Kholikul Amin', 'Deep Publish', 2014, '9786022809432', 15, -2, 19, 'img1575818241.JPG'),
(23, 'Mudah belajar komputer untuk anak', 1, 'Bambang agus setiawan', 'Huta media', 2014, '9786025118500', 3, 5, 10, 'img1575852672.JPG'),
(24, 'Php komplet', 1, 'Jubilee', 'Elex media komputindo', 2017, '8346753547', -3, 1, 19, 'img1575853086.JPG'),
(26, 'Bahasa Indonesia', 2, 'Umri Nur''aini dan Indriyani', 'Pusat Perbukuan', 2015, '757254724884', 6, 1, 6, 'img1575854526.JPG'),
(27, 'Komunikasi Lintas Budaya', 5, 'Dr. Dedy Kurnia', 'Published', 2015, '87867464648', -1, 0, 20, 'img1575854710.JPG'),
(29, 'Kolaborasi Codeigneter dan Ajax dalam Perancangan', 1, 'Anton Subagia', 'Elex media komputindo', 2017, '43345356577', 0, 0, 15, 'img1575942786.JPG'),
(30, 'From Hobby to Monney', 4, 'Deasylawati', 'Elex media komputindo', 2015, '87968686787879', 8, 0, 7, 'img1575943652.JPG'),
(31, 'Buku Saku Pramuka', 8, 'Rudi Himawan', 'Pusat Perbukuan', 2016, '97868687978796', 6, 0, 28, 'img1575943892.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `no_pinjam` varchar(30) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pinjam`
--

INSERT INTO `detail_pinjam` (`no_pinjam`, `id_buku`, `denda`) VALUES
('07042020004', 22, 5000),
('10042020004', 23, 5000),
('11062020004', 23, 5000),
('12042020004', 23, 5000),
('15042020004', 22, 5000),
('16042020004', 26, 5000),
('18042020004', 26, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(5) NOT NULL,
  `kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'komputer'),
(2, 'bahasa'),
(3, 'sains'),
(4, 'hobby'),
(5, 'komunikasi'),
(6, 'hukum'),
(7, 'agama'),
(8, 'populer'),
(9, 'Komiks');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `no_pinjam` varchar(30) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `id_booking` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status` enum('Pinjam','Kembali') CHARACTER SET utf8mb4 NOT NULL,
  `total_denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`no_pinjam`, `tgl_pinjam`, `id_booking`, `id_user`, `tgl_kembali`, `tgl_pengembalian`, `status`, `total_denda`) VALUES
('07042020004', '2020-04-07', '06042020001', 125, '2020-04-10', '2020-04-12', 'Kembali', 0),
('10042020004', '2020-04-10', '10042020001', 125, '2020-04-13', '2020-04-12', 'Kembali', 0),
('11062020004', '2020-06-11', '11062020001', 125, '2020-06-14', '0000-00-00', 'Pinjam', 0),
('12042020004', '2020-04-12', '12042020001', 125, '2020-04-15', '2020-04-15', 'Kembali', 0),
('15042020004', '2020-04-15', '14042020001', 125, '2020-04-18', '2020-04-15', 'Kembali', 0),
('16042020004', '2020-04-16', '16042020001', 125, '2020-04-19', '2020-04-16', 'Kembali', 0),
('18042020004', '2020-04-18', '18042020001', 125, '2020-04-21', '2020-04-18', 'Kembali', 0),
('PB09042020004', '2020-04-09', 'PB09042020001', 125, '2020-04-12', '0000-00-00', 'Pinjam', 0),
('pk24032020002', '2020-03-24', 'pk24032020001', 125, '2020-03-27', '0000-00-00', 'Pinjam', 0),
('pk24032020003', '2020-03-24', 'pk24032020001', 125, '2020-03-27', '0000-00-00', 'Pinjam', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(10) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `tgl_booking` datetime NOT NULL,
  `id_user` varchar(12) NOT NULL,
  `email_user` varchar(128) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `penulis` varchar(128) NOT NULL,
  `penerbit` varchar(128) NOT NULL,
  `tahun_terbit` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `tgl_booking`, `id_user`, `email_user`, `id_buku`, `judul_buku`, `image`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(1, '2020-06-11 17:19:21', '125', 'hilman123@gmail.com', 30, 'From Hobby to Monney', 'img1575943652.JPG', 'Deasylawati', 'Elex media komputindo', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `telepon`, `alamat`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(125, 'Hilman Romadlan', 'laki-laki', 'Tangerang', '2000-12-05', 'Islam', '08989898900', 'tangerang', 'hilman123@gmail.com', 'pro1591196236.jpg', '$2y$10$1BsAIzx6xFY5HdJIhhALfeZg8LDKN7P6OaEqYRXi2otzv1MgRrY6W', 1, 1, 1575705537),
(128, 'hilman', '', 'Tangerang', '2000-12-05', 'Islam', '08817486648', 'tangerang', 'hilman089@gmail.com', 'pro1589688822.jpg', '$2y$10$1BsAIzx6xFY5HdJIhhALfeZg8LDKN7P6OaEqYRXi2otzv1MgRrY6W', 2, 1, 1575705537),
(147, 'Hilman Romadlan', 'laki-laki', 'Tangerang', '2000-12-05', 'Islam', '08989898900', 'tangerang', 'hilman123@gmail.com', 'pro1591196236.jpg', '$2y$10$3aGL0/gJexOrRUGeDFBhvuPs8hoItIAE/i6zftNhlXgmnkS3LkW/2', 2, 1, 1582677149),
(149, 'hilman', '', 'Tangerang', '2020-05-13', 'Islam', '08989898900', 'rancadulang', 'hilman124@gmail.com', 'pro1589520248.jpg', '$2y$10$Lnl6WlPHr4uahhapIaDvLuRZWNc7YIYB56tTs70oj4RcQyepqnzR.', 2, 1, 1585387665);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(5, 'auliakhusnul73@gmail.com', '42GZiVgryvmuASqnAUNrmn5cjzhYCtXVCCRTl1i5rxQ=', 1593149562),
(6, 'auliakhusnul73@gmail.com', 'vSMqMp3TH5qPxiSJ3LhtxE2iSsZ4ty1o+ot15qej5KA=', 1593150136),
(7, 'auliakhusnul73@gmail.com', 'nHl0E5bfU1AoBe7la0CTHYVoOxeLU2eGgld3B+/Dph4=', 1593151161),
(8, 'auliakhusnul73@gmail.com', 'we0LO0K4KjFfkQBsFxg01342F6zzxXUPaEAqc5/S+d0=', 1593151566),
(9, 'auliakhusnul73@gmail.com', 'V1u4Tl5gM0haWkeZ1rG+CbyyxgGHKnQ7ytfqBlK+8mE=', 1593151709);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_booking` (`id_booking`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD PRIMARY KEY (`no_pinjam`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`no_pinjam`),
  ADD KEY `id_booking` (`id_booking`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD CONSTRAINT `booking_detail_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_detail_ibfk_2` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id_booking`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD CONSTRAINT `detail_pinjam_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pinjam_ibfk_2` FOREIGN KEY (`no_pinjam`) REFERENCES `pinjam` (`no_pinjam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `temp`
--
ALTER TABLE `temp`
  ADD CONSTRAINT `temp_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
