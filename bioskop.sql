-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 09:04 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul_film` varchar(50) DEFAULT NULL,
  `gambar_film` varchar(50) NOT NULL,
  `deskripsi_film` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul_film`, `gambar_film`, `deskripsi_film`) VALUES
(1, 'Beauty and The Beast', 'bbe.png', 'Film Beauty and the Beast akan menceritakan kisah dari seorang wanita muda, cantik dan pintar bernama Belle (Emma Watson) yang ditawan oleh "Beast" (Dan Stevens) diistananya yang besar. Belle melakukan hal tersebut karena perjanjian untuk kebebasan ayahnya, Maurice (Kevin Kline). Meskipun ia ketakutan, ia dapat berteman dengan para staff disana yang telah tersihir dan berusaha belajar untuk memahami sikap dari Beast agar ia bisa membuatnya menjadi bersikap baik dan menghilangkan sifat menyeramkannya. Tanpa Belle sadari, ia telah mengeluarkan sisi pangeran yang ada didalam dirinya Beast, namun dapatkah Beast keluar dari kutukan yang menyeramkan tersebut dan kembali menjadi pangeran?'),
(2, 'Spiderman Homecomming', 'spidere.png', 'Beberapa bulan setelah kejadian difilm Captain America: Civil War, Peter Parker (Tom Holland), seorang anak muda yang memperlihatkan aksinya dalam film tersebut kembali kekehidupannya bersama bibi May dibawah pengawasan sang mentor, Tony Stark (Robert Downey Jr) yang mempersiapkan Spidey dalam kelompok ''Avengers''. Dengan kostum pemberiannya yang super canggih, Peter berusaha untuk menunjukan kehebatannya. Namun ia harus berhadapan dengan Vulture (Michael Keaton), sang villain yang berusaha mengancam orang-orang terdekatnya.'),
(3, 'Wonder Woman', 'wwe.png', 'Setelah seorang pilot Amerika bernama Steve Trevor (Chris Pine) mengalami kecelakaan dan jatuh di sebuah pulau bernama Themyscira, ia bertemu dengan Diana Prince (Gal Gadot) dan menceritakan kepadanya tentang apa yang sedang terjadi yaitu perang dunia. Diana berusaha menolong dengan meninggalkan tempat asalnya dan berusaha untuk menghentikan perang dunia pertama dengan menjadi Wonder Woman.');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id_jam` int(11) NOT NULL,
  `jam` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id_jam`, `jam`) VALUES
(1, '13:00:00'),
(2, '15:05:00'),
(17, '17:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` int(11) NOT NULL,
  `id_studio` int(11) DEFAULT NULL,
  `no_kursi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `id_studio`, `no_kursi`) VALUES
(7, 1, '01'),
(8, 1, '02'),
(9, 2, '01'),
(10, 2, '02'),
(11, 3, '01'),
(12, 3, '02');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `id_pembeli` int(11) DEFAULT NULL,
  `tgl_pembelian` date DEFAULT NULL,
  `grandtotal` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `bukti` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `id_pembeli`, `tgl_pembelian`, `grandtotal`, `status`, `bukti`) VALUES
(4, NULL, NULL, 1000, '', 'profil.jpg'),
(5, NULL, NULL, 2000, 'lunas', 'profil1.jpg'),
(6, NULL, NULL, 2000, 'Lunas', 'profil2.jpg'),
(7, NULL, NULL, 2000, 'LUNAS', 'profil3.jpg'),
(8, NULL, NULL, 2000, '', ''),
(9, NULL, NULL, 2000, '', ''),
(10, NULL, NULL, 2000, '', ''),
(11, NULL, NULL, 2000, '', ''),
(12, NULL, NULL, 2000, 'LUNAS', 'profil4.jpg'),
(13, NULL, NULL, 2000, '', 'profil5.jpg'),
(14, NULL, NULL, 1000, '', ''),
(15, NULL, NULL, 0, '', ''),
(16, NULL, NULL, 1000, '', '0b9428a7363092fc0f7b9e9c35095ce2.jpg'),
(17, NULL, NULL, 1000, '', 'UNSET.png');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(20) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `username`, `password`) VALUES
(1, 'Tasya', '', ''),
(2, 'Amalia', '', ''),
(3, 'Salsabila', '', ''),
(4, 'Salma', '', ''),
(11, '12', '12', 'c20ad4d76fe97759aa27a0c99bff6710'),
(12, 'r', 'r', '4b43b0aee35624cd95b910189b3dc231'),
(13, 'a', 'a', '0cc175b9c0f1b6a831c399e269772661'),
(14, 'tasya', 'tasya', 'a208fb8e30446eb35afa20a299a94962'),
(15, 'tasya', 'tasya', 'a208fb8e30446eb35afa20a299a94962'),
(16, '123', '123', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_nota` int(11) DEFAULT NULL,
  `id_film` int(11) DEFAULT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_nota`, `id_film`, `jumlah`) VALUES
(6, 4, 1, 1),
(7, 5, 2, 1),
(8, 5, 3, 1),
(9, 6, 1, 1),
(10, 6, 2, 1),
(11, 7, 1, 1),
(12, 7, 2, 1),
(13, 8, 1, 1),
(14, 8, 2, 1),
(15, 9, 1, 1),
(16, 9, 2, 1),
(17, 10, 1, 1),
(18, 10, 2, 1),
(19, 11, 2, 1),
(20, 11, 1, 1),
(21, 12, 2, 1),
(22, 12, 1, 1),
(23, 13, 1, 1),
(24, 13, 2, 1),
(25, 14, 1, 1),
(26, 16, 1, 1),
(27, 17, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `status`) VALUES
(1, 'Dina', 'Teller'),
(2, 'Raja', 'Manager'),
(3, 'Rafa', 'Teller');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id_studio` int(11) NOT NULL,
  `studio` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id_studio`, `studio`) VALUES
(1, 'Studio 1'),
(2, 'Studio 2'),
(3, 'Studio 3');

-- --------------------------------------------------------

--
-- Table structure for table `tayang`
--

CREATE TABLE `tayang` (
  `id_tayang` int(11) NOT NULL,
  `id_film` int(11) DEFAULT NULL,
  `id_jam` int(11) DEFAULT NULL,
  `id_studio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tayang`
--

INSERT INTO `tayang` (`id_tayang`, `id_film`, `id_jam`, `id_studio`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 3, 17, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_pembeli` int(11) DEFAULT NULL,
  `id_tayang` int(11) DEFAULT NULL,
  `id_kursi` int(11) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `id_pembeli`, `id_tayang`, `id_kursi`, `id_petugas`, `tanggal`) VALUES
(1, 1, 1, 7, 1, '2017-09-13'),
(2, 2, 2, 9, 2, '2017-09-15'),
(3, 3, 1, 8, 1, '2017-09-13'),
(4, 4, 2, 10, 2, '2017-09-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`),
  ADD KEY `fk_studio` (`id_studio`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_nota` (`id_nota`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id_studio`);

--
-- Indexes for table `tayang`
--
ALTER TABLE `tayang`
  ADD PRIMARY KEY (`id_tayang`),
  ADD KEY `fk_film` (`id_film`),
  ADD KEY `fk_jam` (`id_jam`),
  ADD KEY `fk_studio2` (`id_studio`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `fk_pembeli` (`id_pembeli`),
  ADD KEY `fk_tayang` (`id_tayang`),
  ADD KEY `fk_kursi` (`id_kursi`),
  ADD KEY `fk_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id_kursi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id_studio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tayang`
--
ALTER TABLE `tayang`
  MODIFY `id_tayang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kursi`
--
ALTER TABLE `kursi`
  ADD CONSTRAINT `fk_studio` FOREIGN KEY (`id_studio`) REFERENCES `studio` (`id_studio`);

--
-- Constraints for table `tayang`
--
ALTER TABLE `tayang`
  ADD CONSTRAINT `fk_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `fk_jam` FOREIGN KEY (`id_jam`) REFERENCES `jam` (`id_jam`),
  ADD CONSTRAINT `fk_studio2` FOREIGN KEY (`id_studio`) REFERENCES `studio` (`id_studio`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `fk_kursi` FOREIGN KEY (`id_kursi`) REFERENCES `kursi` (`id_kursi`),
  ADD CONSTRAINT `fk_pembeli` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`),
  ADD CONSTRAINT `fk_petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `fk_tayang` FOREIGN KEY (`id_tayang`) REFERENCES `tayang` (`id_tayang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
