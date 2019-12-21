-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 02:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_tomato`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'wahyudi', '123', 'Admin Wahyudi');

-- --------------------------------------------------------

--
-- Table structure for table `basispengetahuan`
--

CREATE TABLE `basispengetahuan` (
  `id` int(11) NOT NULL,
  `kode_hp` varchar(30) NOT NULL,
  `kode_gejala` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basispengetahuan`
--

INSERT INTO `basispengetahuan` (`id`, `kode_hp`, `kode_gejala`) VALUES
(2, 'HP13', 'G32'),
(3, 'HP13', 'G33'),
(4, 'HP13', 'G34'),
(5, 'HP12', 'G30'),
(6, 'HP12', 'G31'),
(7, 'HP11', 'G28'),
(8, 'HP11', 'G29'),
(9, 'HP10', 'G26'),
(10, 'HP10', 'G27'),
(11, 'HP09', 'G23'),
(12, 'HP09', 'G24'),
(13, 'HP09', 'G25'),
(14, 'HP08', 'G21'),
(15, 'HP08', 'G22'),
(16, 'HP07', 'G18'),
(17, 'HP07', 'G19'),
(18, 'HP07', 'G20'),
(19, 'HP06', 'G01'),
(20, 'HP06', 'G15'),
(21, 'HP06', 'G16'),
(22, 'HP06', 'G17'),
(23, 'HP05', 'G01'),
(24, 'HP05', 'G12'),
(25, 'HP05', 'G13'),
(26, 'HP05', 'G14'),
(27, 'HP04', 'G02'),
(28, 'HP04', 'G10'),
(29, 'HP04', 'G11'),
(30, 'HP03', 'G03'),
(31, 'HP03', 'G09'),
(32, 'HP02', 'G01'),
(33, 'HP02', 'G02'),
(34, 'HP02', 'G06'),
(35, 'HP02', 'G07'),
(36, 'HP02', 'G08'),
(37, 'HP01', 'G01'),
(38, 'HP01', 'G02'),
(39, 'HP01', 'G03'),
(40, 'HP01', 'G04'),
(41, 'HP01', 'G05');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` varchar(30) NOT NULL,
  `gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `gejala`) VALUES
('G01', 'Tanaman tumbuh kerdil'),
('G02', 'Daun tampak layu'),
('G03', 'Daun berwarna kuning'),
('G04', 'Daun warna kuning bagian bawah'),
('G05', 'Tulang daun pucat bagian atas '),
('G06', 'Ujung daun melintir'),
('G07', 'Batang banyak akar adventif'),
('G08', 'Daun mengering'),
('G09', 'Daun berkerut'),
('G10', 'Muncul noda air kecil di daun'),
('G11', 'Warna daun berwarna coklat tua'),
('G12', 'Daun menyempit seperti tali'),
('G13', 'Ruas tangkai daun pendek'),
('G14', 'Umbi dan buah mengecil'),
('G15', 'Muncul bercak kuning kecoklatan'),
('G16', 'Tangkai daun membusuk'),
('G17', 'Pada buah muncul titik kecoklatan'),
('G18', 'Daun bercak coklat kehitaman'),
('G19', 'Pangkal akar tampak bercak putih cendawan'),
('G20', 'Akar  mengeriput dan membusuk kecoklatan'),
('G21', 'Batang tanaman muda terpotong'),
('G22', 'Lubang tidak beraturan pada daun muda'),
('G23', 'Buah tampak berlubang'),
('G24', 'Buah membusuk'),
('G25', 'Buah jatuh ke tanah'),
('G26', 'Daun muda sobek dari tepi'),
('G27', 'Bekas air liur ulat putih transparan'),
('G28', 'Bunga layu dan gagal menjadi buah'),
('G29', 'Buah muda rontok tanpa sempat matang'),
('G30', 'Tampak guratan putih acak pada daun'),
('G31', 'Tanaman mongering dan tidak bertunas'),
('G32', 'Getah mengering di permukaan buah'),
('G33', 'Lubang kecil kehitaman bekas tusukan'),
('G34', 'Buah keriput dan rontok');

-- --------------------------------------------------------

--
-- Table structure for table `hamapenyakit`
--

CREATE TABLE `hamapenyakit` (
  `kode_hp` varchar(30) NOT NULL,
  `hamapenyakit` varchar(30) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hamapenyakit`
--

INSERT INTO `hamapenyakit` (`kode_hp`, `hamapenyakit`, `solusi`) VALUES
('HP01', 'Layu Fusarium', 'mengukur kadar makanan yang cukup dengan memberi pupuk '),
('HP02', 'Layu Bakteri', 'menggunakan teknologi sambung pucuk, dengan cara memotong bagian batang tanaman thomat lalu celupkan ke air beberapa menit sehingga lendir putih keruh akan mengalir keluar'),
('HP03', 'Mozaik Tembakau', 'apabila tanaman thomat sudah terinfeksi virus tersebut maka tidak dapat sembuh dari virus tersebut, namun dapat dicegah dengan cara gunakan bibit tanaman yang sehat, jangan tanam dengan jenis yang sama dalam jangka waktu minimal 7 bulan, tanam pada suhu 70 derajat selama 2-4 hari untuk mengerakdiksi virus yang terbawa dalam endosperm.'),
('HP04', 'Busuk Batang', 'dapat ditangani dengan cara memotong bagian batang yang terinfeksi.'),
('HP05', 'Mosaik Mentimun', 'apabila tanaman thomat sudah terinfeksi virus tersebut maka tidak dapat sembuh dari virus tersebut, namun dapat dicegah dengan cara gunakan bibit tanaman yang sehat, jangan tanam dengan jenis yang sama dalam jangka waktu minimal 7 bulan, tanam pada suhu 70 derajat selama 2-4 hari untuk mengerakdiksi virus yang terbawa dalam endosperm.'),
('HP06', 'Antraknosa', 'apabila tanaman tomat telah terinveksi virus tersebut maka dapat dicegah dengan cara memperlebar jarak tanam, rajin melakukan penyiraman dan melakukan penyemprotan fungisida sistemik seminggu sekali.'),
('HP07', 'Busuk Akar Buah dan Rebah', 'dapat ditangani dengan cara memotong bagian akar buah yang terinfeksi.'),
('HP08', 'Ulat Tanah', 'pengendaliannya dapat dilakukan dengan cara membersihkan gulma, sehingga tidak ada tempat persembunyian bagi ulat ini. Secara kimiawi dapat disemprot dengan insektisida coracron, regent atau prevaton'),
('HP09', 'Ulat Buah', 'pengendaliannya dapat dilakukan dengan cara membersihkan gulma, membuang dan membunuh ulat secara manual. Secara kimiawi dapat disemprot dengan insektisida abamectin, regent atau prevaton.'),
('HP10', 'Ulat Jengkal', 'pemangkasan daun yang terserang atau dimakan oleh ulat jengkal atau penyemprotan insektisida, regent atau prevaton.'),
('HP11', 'Wereng Daun', 'dengan menggunakan mulsa plastik perak, dan penyemprotan akarisida berbahan aktif abamectin.'),
('HP12', 'Penggorok Daun', 'berdasarkan kultur teknis adalah pembersihan lahan dari gulma, berdasarkan mekanis dengan menggunakan perangkap kuning yang telah dioleskan dengan vaselin, oli atau minyak goreng pada perangkap tersebut, berdasarkan biologis dengan membudidayakan musuh alami hama penggorok daun yaitu liriomyza sp. berdasarkan kimia dengan menyemprotkan pestisida dari golongan hidroklorin.'),
('HP13', 'Lalat Buah', 'menggunakan perangkap lalat buah untuk mengurangi populasi lalat buah. Kebersihan dan sanitasi area budidaya harus diperhatikan dan penyemprotan insektisida curacron.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `basispengetahuan`
--
ALTER TABLE `basispengetahuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `hamapenyakit`
--
ALTER TABLE `hamapenyakit`
  ADD PRIMARY KEY (`kode_hp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basispengetahuan`
--
ALTER TABLE `basispengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
