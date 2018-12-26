-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 26, 2018 at 08:50 AM
-- Server version: 10.2.3-MariaDB-log
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_file`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_donasi`
--

CREATE TABLE `tb_donasi` (
  `donasi_id` int(11) NOT NULL,
  `donasi_user_uname` char(12) NOT NULL,
  `donasi_tgl` int(11) NOT NULL,
  `donasi_jumlah` mediumint(9) NOT NULL,
  `donasi_bukti` char(100) NOT NULL,
  `donasi_tgl_confrm` int(11) NOT NULL COMMENT 'tgl konfirmasi donasi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_download`
--

CREATE TABLE `tb_download` (
  `down_id` int(11) NOT NULL,
  `down_guest_id` int(11) NOT NULL,
  `down_user_uname` char(12) DEFAULT NULL,
  `down_file_id` int(11) NOT NULL,
  `down_tgl` int(11) NOT NULL COMMENT 'tanggal/waktu download',
  `down_ref` varchar(250) NOT NULL COMMENT 'referensi user dapat link'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_file`
--

CREATE TABLE `tb_file` (
  `file_id` int(11) NOT NULL,
  `file_nama` char(50) NOT NULL,
  `file_nama_asli` char(255) NOT NULL,
  `file_type` char(10) NOT NULL,
  `file_user_uname` char(12) NOT NULL,
  `file_jenis` char(7) NOT NULL COMMENT 'musik, gambar, doc, video, lainnya',
  `file_size` smallint(6) NOT NULL COMMENT 'Kb',
  `file_token` char(10) NOT NULL,
  `file_tgl_upload` int(11) NOT NULL,
  `file_view` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_file`
--

INSERT INTO `tb_file` (`file_id`, `file_nama`, `file_nama_asli`, `file_type`, `file_user_uname`, `file_jenis`, `file_size`, `file_token`, `file_tgl_upload`, `file_view`) VALUES
(1, '0_68193600_1545025357.txt', 'logo', 'png', 'onyet', 'gambar', 2000, 'OnyetFiles', 1545022025, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_guest`
--

CREATE TABLE `tb_guest` (
  `guest_id` int(11) NOT NULL,
  `guest_ip` char(20) NOT NULL,
  `guest_tgl_masuk` int(11) NOT NULL,
  `guest_platform` char(250) NOT NULL,
  `guest_agent` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guest`
--

INSERT INTO `tb_guest` (`guest_id`, `guest_ip`, `guest_tgl_masuk`, `guest_platform`, `guest_agent`) VALUES
(1, '127.0.0.1', 1544502286, 'Windows 10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36'),
(2, '127.0.0.1', 1544745684, 'Windows 10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36'),
(3, '127.0.0.1', 1545019872, 'Windows 10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36'),
(4, '127.0.0.1', 1545154255, 'Windows 10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36'),
(5, '127.0.0.1', 1545229935, 'Windows 10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36'),
(6, '127.0.0.1', 1545457995, 'Windows 10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36'),
(7, '127.0.0.1', 1545549144, 'Windows 10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_iklan`
--

CREATE TABLE `tb_iklan` (
  `iklan_id` int(11) NOT NULL,
  `iklan_nama` char(100) NOT NULL,
  `iklan_donasi_id` int(11) NOT NULL,
  `iklan_jml` mediumint(9) NOT NULL,
  `iklan_tayang` mediumint(9) NOT NULL,
  `iklan_url` char(250) NOT NULL,
  `iklan_img` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `login_id` int(11) NOT NULL,
  `login_user_uname` char(12) NOT NULL,
  `login_tgl` int(11) NOT NULL,
  `login_guest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`login_id`, `login_user_uname`, `login_tgl`, `login_guest_id`) VALUES
(1, 'onyet', 1544568993, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_reset_pwd`
--

CREATE TABLE `tb_reset_pwd` (
  `reset_id` int(11) NOT NULL,
  `reset_token` char(100) NOT NULL,
  `reset_user_uname` char(12) NOT NULL,
  `reset_tgl_request` int(11) NOT NULL,
  `reset_tgl_sukses` int(11) NOT NULL,
  `reset_tgl_expired` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_uname` char(12) NOT NULL,
  `user_email` char(100) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_nama` char(50) NOT NULL,
  `user_guest_id` int(11) DEFAULT NULL,
  `user_tgl_daftar` int(11) NOT NULL,
  `user_tgl_verify` int(11) DEFAULT NULL,
  `user_status` char(7) NOT NULL COMMENT '1=active, 2=block, drop=0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_uname`, `user_email`, `user_pass`, `user_nama`, `user_guest_id`, `user_tgl_daftar`, `user_tgl_verify`, `user_status`) VALUES
(1, 'onyet', 'onyetcorp@gmail.com', 'a53fff8dd075bed169e164743231ff533d8b9260b0b8073f0a4c1d20', 'Onyet Corp', 1, 1544502471, 1544502471, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_verify`
--

CREATE TABLE `tb_verify` (
  `verify_id` int(11) NOT NULL,
  `verify_token` varchar(100) NOT NULL,
  `verify_user_uname` char(12) NOT NULL,
  `verify_tgl_expired` int(11) NOT NULL,
  `verify_status` char(5) NOT NULL COMMENT 'done = selesai, wait = menunggu'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  ADD PRIMARY KEY (`donasi_id`),
  ADD KEY `donasi_user_uname` (`donasi_user_uname`);

--
-- Indexes for table `tb_download`
--
ALTER TABLE `tb_download`
  ADD PRIMARY KEY (`down_id`),
  ADD KEY `down_guest_id` (`down_guest_id`),
  ADD KEY `down_user_uname` (`down_user_uname`),
  ADD KEY `down_file_id` (`down_file_id`);

--
-- Indexes for table `tb_file`
--
ALTER TABLE `tb_file`
  ADD PRIMARY KEY (`file_id`),
  ADD UNIQUE KEY `file_token` (`file_token`),
  ADD KEY `file_user_uname` (`file_user_uname`);

--
-- Indexes for table `tb_guest`
--
ALTER TABLE `tb_guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `tb_iklan`
--
ALTER TABLE `tb_iklan`
  ADD PRIMARY KEY (`iklan_id`),
  ADD KEY `iklan_donasi_id` (`iklan_donasi_id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `login_user_uname` (`login_user_uname`),
  ADD KEY `login_guest_id` (`login_guest_id`);

--
-- Indexes for table `tb_reset_pwd`
--
ALTER TABLE `tb_reset_pwd`
  ADD PRIMARY KEY (`reset_id`),
  ADD UNIQUE KEY `reset_token` (`reset_token`),
  ADD KEY `reset_user_uname` (`reset_user_uname`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_uname` (`user_uname`),
  ADD KEY `user_guest_id` (`user_guest_id`);

--
-- Indexes for table `tb_verify`
--
ALTER TABLE `tb_verify`
  ADD PRIMARY KEY (`verify_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  MODIFY `donasi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_download`
--
ALTER TABLE `tb_download`
  MODIFY `down_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_file`
--
ALTER TABLE `tb_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_guest`
--
ALTER TABLE `tb_guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_iklan`
--
ALTER TABLE `tb_iklan`
  MODIFY `iklan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_reset_pwd`
--
ALTER TABLE `tb_reset_pwd`
  MODIFY `reset_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_verify`
--
ALTER TABLE `tb_verify`
  MODIFY `verify_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
