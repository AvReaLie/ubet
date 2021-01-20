-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2021 at 03:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_ta_art`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'supri', 'supriono@gmail.com', 'supr1'),
(2, 'admin', 'admin@gmail.com', 'aaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `id_art` varchar(20) NOT NULL,
  `id_penyalur` varchar(20) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `nm_art` varchar(50) NOT NULL,
  `pass_art` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `keahlian` varchar(20) NOT NULL,
  `deskripsi` tinytext NOT NULL,
  `gaji` int(11) NOT NULL,
  `pengalaman_kerja` tinytext NOT NULL,
  `status_menikah` enum('Menikah','Belum Menikah') NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `s_dokter` varchar(20) NOT NULL,
  `pend_terakhir` varchar(50) NOT NULL,
  `takut_anjing` tinytext NOT NULL,
  `mengerti_bing` tinytext NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Buddha','Konghucu') NOT NULL,
  `foto_art` varchar(20) NOT NULL,
  `status_art` char(1) NOT NULL,
  `lastadd_a` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `balas_komplain`
--

CREATE TABLE `balas_komplain` (
  `id_balas_k` varchar(20) NOT NULL,
  `id_komplain` varchar(20) NOT NULL,
  `id_penyalur` varchar(20) NOT NULL,
  `isi_balas_k` tinytext NOT NULL,
  `tgl_jam_bk` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` varchar(20) NOT NULL,
  `nm_gambar` varchar(20) NOT NULL,
  `kat_gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `nm_gambar`, `kat_gambar`) VALUES
('GB0001', 'foto_p_1', 'foto'),
('GB0002', 'logo_p_1', 'logo'),
('GB0003', 'surat_izin_1', 'surat izin');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kab` char(4) NOT NULL,
  `id_prov` char(2) NOT NULL,
  `nm_kab` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kab`, `id_prov`, `nm_kab`) VALUES
('3501', '35', 'KAB. PACITAN'),
('3502', '35', 'KAB. PONOROGO'),
('3503', '35', 'KAB. TRENGGALEK'),
('3504', '35', 'KAB. TULUNGAGUNG'),
('3505', '35', 'KAB. BLITAR'),
('3506', '35', 'KAB. KEDIRI'),
('3507', '35', 'KAB. MALANG'),
('3508', '35', 'KAB. LUMAJANG'),
('3509', '35', 'KAB. JEMBER'),
('3510', '35', 'KAB. BANYUWANGI'),
('3511', '35', 'KAB. BONDOWOSO'),
('3512', '35', 'KAB. SITUBONDO'),
('3513', '35', 'KAB. PROBOLINGGO'),
('3514', '35', 'KAB. PASURUAN'),
('3515', '35', 'KAB. SIDOARJO'),
('3516', '35', 'KAB. MOJOKERTO'),
('3517', '35', 'KAB. JOMBANG'),
('3518', '35', 'KAB. NGANJUK'),
('3519', '35', 'KAB. MADIUN'),
('3520', '35', 'KAB. MAGETAN'),
('3521', '35', 'KAB. NGAWI'),
('3522', '35', 'KAB. BOJONEGORO'),
('3523', '35', 'KAB. TUBAN'),
('3524', '35', 'KAB. LAMONGAN'),
('3525', '35', 'KAB. GRESIK'),
('3526', '35', 'KAB. BANGKALAN'),
('3527', '35', 'KAB. SAMPANG'),
('3528', '35', 'KAB. PAMEKASAN'),
('3529', '35', 'KAB. SUMENEP'),
('3571', '35', 'KOTA KEDIRI'),
('3572', '35', 'KOTA BLITAR'),
('3573', '35', 'KOTA MALANG'),
('3574', '35', 'KOTA PROBOLINGGO'),
('3575', '35', 'KOTA PASURUAN'),
('3576', '35', 'KOTA MOJOKERTO'),
('3577', '35', 'KOTA MADIUN'),
('3578', '35', 'KOTA SURABAYA'),
('3579', '35', 'KOTA BATU');

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `id_keahlian` varchar(20) NOT NULL,
  `nm_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`id_keahlian`, `nm_keahlian`) VALUES
('1', 'Cleaning Service'),
('2', 'Baby Sitter'),
('3', 'Perawat Lansia'),
('4', 'Tukang Kebun'),
('5', 'Sopir'),
('6', 'Juru Masak'),
('7', 'Satpam'),
('8', 'Pengasuh Hewan Peliharaan');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` char(6) NOT NULL,
  `id_kab` char(4) NOT NULL,
  `nm_kec` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `id_kab`, `nm_kec`) VALUES
('350601', '3506', 'Semen'),
('350602', '3506', 'Mojo'),
('350603', '3506', 'Kras'),
('350604', '3506', 'Ngadiluwih'),
('350605', '3506', 'Kandat'),
('350606', '3506', 'Wates'),
('350607', '3506', 'Ngancar'),
('350608', '3506', 'Puncu'),
('350609', '3506', 'Plosoklaten'),
('350610', '3506', 'Gurah'),
('350611', '3506', 'Pagu'),
('350612', '3506', 'Gampengrejo'),
('350613', '3506', 'Grogol'),
('350614', '3506', 'Papar'),
('350615', '3506', 'Purwoasri'),
('350616', '3506', 'Plemahan'),
('350617', '3506', 'Pare'),
('350618', '3506', 'Kepung'),
('350619', '3506', 'Kandangan'),
('350620', '3506', 'Tarokan'),
('350621', '3506', 'Kunjang'),
('350622', '3506', 'Banyakan'),
('350623', '3506', 'Ringinrejo'),
('350624', '3506', 'Kayen Kidul'),
('350625', '3506', 'Ngasem'),
('350626', '3506', 'Badas');

-- --------------------------------------------------------

--
-- Table structure for table `komplain`
--

CREATE TABLE `komplain` (
  `id_komplain` varchar(20) NOT NULL,
  `id_kontrak` varchar(20) NOT NULL,
  `id_majikan` varchar(20) NOT NULL,
  `isi_komplain` tinytext NOT NULL,
  `tgl_jam_k` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
--

CREATE TABLE `kontrak` (
  `id_kontrak` varchar(20) NOT NULL,
  `id_majikan` varchar(20) NOT NULL,
  `id_art` varchar(20) NOT NULL,
  `status_k` char(1) NOT NULL,
  `massa_k` varchar(20) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id_lowongan` varchar(20) NOT NULL,
  `id_majikan` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `detail` tinytext NOT NULL,
  `keahlian_l` varchar(20) NOT NULL,
  `gaji_l` int(11) NOT NULL,
  `status_l` char(1) NOT NULL,
  `lastadd_l` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `majikan`
--

CREATE TABLE `majikan` (
  `id_majikan` varchar(20) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `nm_lengkap_m` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email_m` varchar(50) NOT NULL,
  `password_m` varchar(50) NOT NULL,
  `provinsi_m` char(2) NOT NULL,
  `kab_m` char(4) NOT NULL,
  `kec_m` char(6) NOT NULL,
  `foto_m` varchar(20) NOT NULL,
  `lastadd_m` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(20) NOT NULL,
  `id_kontrak` varchar(20) NOT NULL,
  `sistem_bayar` varchar(20) NOT NULL,
  `nm_bank` varchar(20) NOT NULL,
  `bukti_b` varchar(20) NOT NULL,
  `jumlah_b` int(11) NOT NULL,
  `status_b` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penyalur`
--

CREATE TABLE `penyalur` (
  `id_penyalur` varchar(20) NOT NULL,
  `nm_yayasan` varchar(80) NOT NULL,
  `nm_penyalur` varchar(50) NOT NULL,
  `no_tlp_p` varchar(20) NOT NULL,
  `email_p` varchar(50) NOT NULL,
  `password_p` varchar(50) NOT NULL,
  `provinsi_p` char(2) DEFAULT NULL,
  `kab_p` char(4) DEFAULT NULL,
  `kec_p` char(6) DEFAULT NULL,
  `kd_pos_p` int(11) DEFAULT NULL,
  `foto_p` varchar(20) DEFAULT NULL,
  `logo_p` varchar(20) DEFAULT NULL,
  `surat_izin` varchar(20) DEFAULT NULL,
  `set_gaji` int(11) DEFAULT NULL,
  `bank_pn` varchar(50) DEFAULT NULL,
  `no_rek` int(11) DEFAULT NULL,
  `status_p` int(11) NOT NULL DEFAULT 0,
  `last_add` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyalur`
--

INSERT INTO `penyalur` (`id_penyalur`, `nm_yayasan`, `nm_penyalur`, `no_tlp_p`, `email_p`, `password_p`, `provinsi_p`, `kab_p`, `kec_p`, `kd_pos_p`, `foto_p`, `logo_p`, `surat_izin`, `set_gaji`, `bank_pn`, `no_rek`, `status_p`, `last_add`) VALUES
('PID-200121062748', 'Tri Tunggal. CV', 'Tri Pudjiono', '08421241224', 'supriono@gmail.com', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-01-20 12:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` char(2) NOT NULL,
  `nm_prov` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nm_prov`) VALUES
('11', 'Aceh'),
('12', 'Sumatera Utara'),
('13', 'Sumatera Barat'),
('14', 'Riau'),
('15', 'Jambi'),
('16', 'Sumatera Selatan'),
('17', 'Bengkulu'),
('18', 'Lampung'),
('19', 'Kepulauan Bangka Belitung'),
('21', 'Kepulauan Riau'),
('31', 'DKI Jakarta'),
('32', 'Jawa Barat'),
('33', 'Jawa Tengah'),
('34', 'DI Yogyakarta'),
('35', 'Jawa Timur'),
('36', 'Banten'),
('51', 'Bali'),
('52', 'Nusa Tenggara Barat'),
('53', 'Nusa Tenggara Timur'),
('61', 'Kalimantan Barat'),
('62', 'Kalimantan Tengah'),
('63', 'Kalimantan Selatan'),
('64', 'Kalimantan Timur'),
('65', 'Kalimantan Utara'),
('71', 'Sulawesi Utara'),
('72', 'Sulawesi Tengah'),
('73', 'Sulawesi Selatan'),
('74', 'Sulawesi Tenggara'),
('75', 'Gorontalo'),
('76', 'Sulawesi Barat'),
('81', 'Maluku'),
('82', 'Maluku Utara'),
('91', 'Papua Barat'),
('92', 'Papua');

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id_lowongan` varchar(20) NOT NULL,
  `id_art` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` varchar(20) NOT NULL,
  `id_majikan` varchar(20) NOT NULL,
  `id_art` varchar(20) NOT NULL,
  `rating` float NOT NULL,
  `isi_komentar` tinytext NOT NULL,
  `tgl_jam` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `track_record`
--

CREATE TABLE `track_record` (
  `id_track` varchar(20) NOT NULL,
  `id_art` varchar(20) NOT NULL,
  `isi_track` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id_art`),
  ADD KEY `id_penyalur` (`id_penyalur`),
  ADD KEY `foto_art` (`foto_art`),
  ADD KEY `keahlian` (`keahlian`),
  ADD KEY `s_dokter` (`s_dokter`);

--
-- Indexes for table `balas_komplain`
--
ALTER TABLE `balas_komplain`
  ADD PRIMARY KEY (`id_balas_k`),
  ADD KEY `id_penyalur` (`id_penyalur`),
  ADD KEY `id_komplain` (`id_komplain`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kab`),
  ADD KEY `id_prov` (`id_prov`);

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`),
  ADD KEY `id_kab` (`id_kab`);

--
-- Indexes for table `komplain`
--
ALTER TABLE `komplain`
  ADD PRIMARY KEY (`id_komplain`),
  ADD KEY `id_kontrak` (`id_kontrak`),
  ADD KEY `id_majikan` (`id_majikan`);

--
-- Indexes for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`id_kontrak`),
  ADD KEY `id_majikan` (`id_majikan`),
  ADD KEY `id_art` (`id_art`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `id_majikan` (`id_majikan`),
  ADD KEY `keahlian_l` (`keahlian_l`);

--
-- Indexes for table `majikan`
--
ALTER TABLE `majikan`
  ADD PRIMARY KEY (`id_majikan`),
  ADD KEY `kab_m` (`kab_m`),
  ADD KEY `kab_m_2` (`kab_m`),
  ADD KEY `foto_m` (`foto_m`),
  ADD KEY `kec_m` (`kec_m`),
  ADD KEY `provinsi_m` (`provinsi_m`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_kontrak` (`id_kontrak`),
  ADD KEY `bukti_b` (`bukti_b`);

--
-- Indexes for table `penyalur`
--
ALTER TABLE `penyalur`
  ADD PRIMARY KEY (`id_penyalur`),
  ADD KEY `provinsi_p` (`provinsi_p`),
  ADD KEY `kab_p` (`kab_p`),
  ADD KEY `kec_p` (`kec_p`),
  ADD KEY `foto_p` (`foto_p`),
  ADD KEY `logo_p` (`logo_p`),
  ADD KEY `surat_izin` (`surat_izin`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indexes for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD KEY `id_art` (`id_art`),
  ADD KEY `id_lowongan` (`id_lowongan`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_majikan` (`id_majikan`),
  ADD KEY `id_art` (`id_art`);

--
-- Indexes for table `track_record`
--
ALTER TABLE `track_record`
  ADD PRIMARY KEY (`id_track`),
  ADD KEY `id_art` (`id_art`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `art`
--
ALTER TABLE `art`
  ADD CONSTRAINT `art_ibfk_1` FOREIGN KEY (`foto_art`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `art_ibfk_2` FOREIGN KEY (`id_penyalur`) REFERENCES `penyalur` (`id_penyalur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `art_ibfk_3` FOREIGN KEY (`keahlian`) REFERENCES `keahlian` (`id_keahlian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `art_ibfk_4` FOREIGN KEY (`s_dokter`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `balas_komplain`
--
ALTER TABLE `balas_komplain`
  ADD CONSTRAINT `balas_komplain_ibfk_1` FOREIGN KEY (`id_penyalur`) REFERENCES `penyalur` (`id_penyalur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `balas_komplain_ibfk_2` FOREIGN KEY (`id_komplain`) REFERENCES `komplain` (`id_komplain`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD CONSTRAINT `kabupaten_ibfk_1` FOREIGN KEY (`id_prov`) REFERENCES `provinsi` (`id_prov`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_ibfk_1` FOREIGN KEY (`id_kab`) REFERENCES `kabupaten` (`id_kab`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komplain`
--
ALTER TABLE `komplain`
  ADD CONSTRAINT `komplain_ibfk_1` FOREIGN KEY (`id_kontrak`) REFERENCES `kontrak` (`id_kontrak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komplain_ibfk_2` FOREIGN KEY (`id_majikan`) REFERENCES `majikan` (`id_majikan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD CONSTRAINT `kontrak_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `art` (`id_art`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kontrak_ibfk_2` FOREIGN KEY (`id_majikan`) REFERENCES `majikan` (`id_majikan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `loker`
--
ALTER TABLE `loker`
  ADD CONSTRAINT `loker_ibfk_1` FOREIGN KEY (`id_majikan`) REFERENCES `majikan` (`id_majikan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `loker_ibfk_2` FOREIGN KEY (`keahlian_l`) REFERENCES `keahlian` (`id_keahlian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `majikan`
--
ALTER TABLE `majikan`
  ADD CONSTRAINT `majikan_ibfk_1` FOREIGN KEY (`kec_m`) REFERENCES `kecamatan` (`id_kec`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `majikan_ibfk_2` FOREIGN KEY (`provinsi_m`) REFERENCES `provinsi` (`id_prov`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `majikan_ibfk_3` FOREIGN KEY (`kab_m`) REFERENCES `kabupaten` (`id_kab`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `majikan_ibfk_4` FOREIGN KEY (`foto_m`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_kontrak`) REFERENCES `kontrak` (`id_kontrak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`bukti_b`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penyalur`
--
ALTER TABLE `penyalur`
  ADD CONSTRAINT `penyalur_ibfk_1` FOREIGN KEY (`surat_izin`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penyalur_ibfk_2` FOREIGN KEY (`logo_p`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penyalur_ibfk_3` FOREIGN KEY (`kab_p`) REFERENCES `kabupaten` (`id_kab`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penyalur_ibfk_4` FOREIGN KEY (`provinsi_p`) REFERENCES `provinsi` (`id_prov`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penyalur_ibfk_5` FOREIGN KEY (`kec_p`) REFERENCES `kecamatan` (`id_kec`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penyalur_ibfk_6` FOREIGN KEY (`foto_p`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD CONSTRAINT `rekomendasi_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `art` (`id_art`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekomendasi_ibfk_2` FOREIGN KEY (`id_lowongan`) REFERENCES `loker` (`id_lowongan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `art` (`id_art`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_majikan`) REFERENCES `majikan` (`id_majikan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `track_record`
--
ALTER TABLE `track_record`
  ADD CONSTRAINT `track_record_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `art` (`id_art`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
