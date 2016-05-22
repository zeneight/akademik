-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2015 at 05:16 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen`
--

CREATE TABLE IF NOT EXISTS `data_dosen` (
  `nidn` int(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(20) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dosen`
--

INSERT INTO `data_dosen` (`nidn`, `nama`, `email`, `status`) VALUES
(192310, 'Lopas Loaa', 'lw@oas.zw', 'Cuti'),
(283012, 'Ray Cucoks', 'ray@lost.com', 'Aktif'),
(123134, 'FFFffff', 'saas@paos.cs', 'Aktif'),
(1927301, 'Karen Swell', 'Karen@los.ce', 'Aktif'),
(12800, 'Jay', 'rais@losa.zz', 'Aktif'),
(1238012, 'Richard Lionheart', 'Ric@li.on', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_jadwal`
--

CREATE TABLE IF NOT EXISTS `data_jadwal` (
  `kd_jadwal` int(3) NOT NULL,
  `waktu_in` varchar(5) NOT NULL,
  `waktu_out` varchar(5) NOT NULL,
  `kd_mk` int(6) NOT NULL,
  `nidn` int(8) NOT NULL,
  `kd_kelas` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_jadwal`
--

INSERT INTO `data_jadwal` (`kd_jadwal`, `waktu_in`, `waktu_out`, `kd_mk`, `nidn`, `kd_kelas`) VALUES
(401, '08:00', '09:00', 13006, 192310, 901),
(902, '08:30', '10:00', 13014, 12800, 905),
(120, '19:00', '20:30', 13007, 1927301, 921),
(97, '08:10', '09:40', 13010, 1927301, 909),
(102, '00:00', '03:00', 13006, 123134, 909);

-- --------------------------------------------------------

--
-- Table structure for table `data_kelas`
--

CREATE TABLE IF NOT EXISTS `data_kelas` (
  `kd_kelas` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kapasitas` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kelas`
--

INSERT INTO `data_kelas` (`kd_kelas`, `nama`, `kapasitas`) VALUES
(901, 'Ruang A', 32),
(905, 'Ruang C', 15),
(906, 'Lab Jaringan', 24),
(921, 'Auditorium', 200),
(909, 'Ruang E', 39);

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `data_mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`nim`, `nama`, `prodi`, `status`) VALUES
(10239, 'ALkdals', 'Teknik Informatika', 'Aktif'),
(12345, 'afFS', 'Teknik Informatika', 'Aktif'),
(12400, 'Agung Priambada', 'Teknik Informatika', 'Aktif'),
(241, 'Bayu Su', 'Komputer Akutansi', 'Aktif'),
(12310, 'SAHASA Shit', 'Teknik Informatika', 'Aktif'),
(129, 'Ganegetr', 'Komputer Akutansi', 'Cuti'),
(999, 'Cewss', 'Teknik Telekomunikasi', 'Aktif'),
(9999, 'banvv', 'Teknik Informatika', 'Aktif'),
(98, 'ppos', 'Teknik Informatika', 'Cuti'),
(1231, 'adasda', 'Teknik Informatika', 'Aktif'),
(12012, 'DSAsaAS', 'Teknik Telekomunikasi', 'Cuti'),
(100, 'dede ganteng', 'Teknik Informatika', 'Aktif'),
(12391, 'Zeneight', 'Teknik Telekomunikasi', 'Cuti'),
(121, 'Ayam goyzreng', 'Komputer Akutansi', 'Cuti'),
(12915, 'Rezky Uyyeaah', 'Teknik Informatika', 'Cuti'),
(67264, 'utama', 'Teknik Telekomunikasi', 'Aktif'),
(1230, 'Cihuuuy', 'Komputer Akutansi', 'Cuti'),
(4147, 'Zizussssyz', 'Komputer Akutansi', 'Aktif'),
(41741, 'Caz Opusz', 'Teknik Informatika', 'Cuti'),
(3828, 'Android-kun', 'Teknik Informatika', 'Cuti'),
(9123, 'Loturs', 'Teknik Telekomunikasi', 'Aktif'),
(91112, 'Jacsssiu Posr II', 'Komputer Akutansi', 'Aktif'),
(9231, 'Yuuki Rito', 'Teknik Telekomunikasi', 'Aktif'),
(132, 'Rezzu', 'Teknik Informatika', 'Cuti'),
(99213, 'Arya Wirajaya', 'Teknik Informatika', 'Aktif'),
(1313, 'nkdsfhdkhfdi', 'Teknik Informatika', 'Aktif'),
(1934, 'Rika-chan', 'Teknik Informatika', 'Cuti');

-- --------------------------------------------------------

--
-- Table structure for table `data_mk`
--

CREATE TABLE IF NOT EXISTS `data_mk` (
  `kd_mk` int(6) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `sks` int(2) NOT NULL,
  `semester` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mk`
--

INSERT INTO `data_mk` (`kd_mk`, `nama`, `sks`, `semester`) VALUES
(13001, 'Jaringan Komputer', 2, 2),
(13006, 'Sistem Informasi', 3, 1),
(13010, 'Sistem Operasi', 2, 2),
(13014, 'Algoritma', 3, 1),
(13007, 'Matematika Diskrit', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai`
--

CREATE TABLE IF NOT EXISTS `data_nilai` (
  `kd_nilai` int(5) NOT NULL,
  `nim` int(5) NOT NULL,
  `kd_mk` varchar(10) NOT NULL,
  `nilai` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_nilai`
--

INSERT INTO `data_nilai` (`kd_nilai`, `nim`, `kd_mk`, `nilai`) VALUES
(33001, 12012, '13007', 'A'),
(33004, 12345, '13007', 'C'),
(33002, 12345, '13001', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `user` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`user`, `pass`) VALUES
('zeneight', '223482'),
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
 ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `data_jadwal`
--
ALTER TABLE `data_jadwal`
 ADD PRIMARY KEY (`kd_jadwal`);

--
-- Indexes for table `data_kelas`
--
ALTER TABLE `data_kelas`
 ADD PRIMARY KEY (`kd_kelas`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `data_mk`
--
ALTER TABLE `data_mk`
 ADD PRIMARY KEY (`kd_mk`);

--
-- Indexes for table `data_nilai`
--
ALTER TABLE `data_nilai`
 ADD PRIMARY KEY (`kd_nilai`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
