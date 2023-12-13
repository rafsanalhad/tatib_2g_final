-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 05:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `TTL` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_phone` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `dosen_img` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `TTL`, `jenis_kelamin`, `jabatan`, `email`, `no_phone`, `alamat`, `dosen_img`, `user_id`) VALUES
('12345', 'Unggul Pamenang', 'Malang, 12 desember 1980', 'L', 'Dosen TI', 'unggul@gmail.com', 821212121, 'Jl. Soehat no 1 Malang', '1702083146_asu.jpg', 2),
('12346', 'Imam ', 'Malang, 12 desember 1980', 'L', 'Dosen TI', 'email@gmail.com', 821212121, 'Jl. Semanggi Barat', '', 28),
('12347', 'Dodit', 'Malang, 19 Desember 1976', 'L', 'Dosen TI', 'email@email.com', 812121212, 'Jl. Soehat, Malang', '', 29),
('12348', 'Khairy', 'Malang, 13 Mei 1990', 'L', 'Dosen TI', 'email@email.com', 812121212, 'Jl. Soehat, Malang', '', 30),
('12349', 'Annisa Puspa', 'Malang, 30 Agustus 1988', 'P', 'Dosen SIB', 'email@email.com', 812121212, 'Jl. Soehat, Malang', '', 31),
('123789', 'Anjay Tes', 'Blitar', 'L', 'Dosen', '131@gmail.com', 3442, '342', '1702083146_asu.jpg', 74),
('2324223', '2Anjayy', '2', 'L', '2', '22@gmail.com', 2, '2', '1701997944_Picture1.png', 69),
('23244234', 'Mikuuuu', '34223', 'L', '2', '0480@gmail.com', 324, '324', '1701998422_myw.jpg', 70),
('31', 'MIKUUUUU WIBUUU', '2', 'L', '2', '22@gmail.com', 2, '2', '1702190452_Pic.png', 87),
('31513', 'wrwerw jawir', '2', 'L', '2', '22@gmail.com', 2, '2', '1702085494_Pic.png', 76),
('323242', '2', '432232', 'L', '342', '0480@gmail.com', 32, '324', '1701998524_Pic.png', 71),
('324', 'fjalj', '3', 'L', '3', '3@gmail.com', 2, '3', '1702176521_Pic.png', 68),
('34224', 'Rafsan Wibuu', '342', 'L', '3', '131@gmail.com', 33, '3', '1701961701_asus.jpg', 66),
('3442934829', 'flajafljkjl', '3', 'L', '3', '3@gmail.com', 3, '3', '1702004754_Pic.jpg', 73),
('379972', 'zzzz', '3', 'L', '23', 'fajl@gmail.com', 313, '3', '1702083981_Pic.png', 75);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `TTL` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_phone` varchar(11) NOT NULL,
  `phone_ortu` varchar(20) NOT NULL,
  `jumlah_pelanggaran` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `prodi_id`, `nama`, `TTL`, `jenis_kelamin`, `alamat`, `email`, `no_phone`, `phone_ortu`, `jumlah_pelanggaran`, `user_id`) VALUES
('2241720040', 1, 'Rizky Arifiansyah', 'Jombang, 12 April 2003', 'L', 'Jl. Kembang Turi, Malang', 'email@email.com', '0812121212', '0812121212', 0, 24),
('2241720058', 1, 'Harafsan Alhad', 'Malang, 30 Mei 2004', 'L', 'Jl. Soehat, Malang', 'email@email.com', '0812121212', '0812121212', 0, 25),
('2241720127', 1, 'Hanifah Amany', 'Malang, 30 Agustus 2004', 'P', 'Jl. Soehat, Malang', 'email@email.com', '0812121212', '0812121212', 0, 26),
('2241720148', 1, 'Irshandy Aditya', 'Malang, 02 Januari 2003', 'L', 'Jl. Soehat, Malang', 'email@email.com', '0812121212', '0812121212', 0, 27),
('2241720228', 1, 'Arya Chandra', 'sorong, 30 juni 2004', 'L', 'Jl. Semanggi Barat, Malang', 'email@gmail.com', '0821212121', '0812345678', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `pelanggaran_id` int(11) NOT NULL,
  `pelanggaran` varchar(200) NOT NULL,
  `tingkat` int(11) NOT NULL,
  `sanksi_pelanggaran` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`pelanggaran_id`, `pelanggaran`, `tingkat`, `sanksi_pelanggaran`) VALUES
(1, 'Terlibat dalam tindakan kriminal dan dinyatakan bersalah oleh Pengadilan', 1, 'Sanksi atas pelanggaran tingkat I yang dilakukan oleh mahasiswa berupa:\na. Dinonaktifkan (Cuti Akademik/ Terminal) selama dua semester dan/atau;\nb. Diberhentikan sebagai mahasiswa.'),
(2, 'Mengancam, baik tertulis atau tidak tertulis kepada mahasiswa, dosen, dan/atau karyawan.', 2, 'a. Dikenakan penggantian kerugian atau penggantian benda/barang semacamnya dan/atau;\r\nb. Melakukan tugas layanan sosial dalam jangka waktu tertentu dan/atau;\r\nc. Diberikan nilai D pada mata kuliah terkait saat melakukan pelanggaran.'),
(3, 'Bertingkah laku kasar atau tidak sopan kepada mahasiswa, dosen, dan/atau karyawan.', 3, 'a. Membuat surat pernyataan tidak mengulangi perbuatan tersebut, dibubuhi materai, ditandatangani mahasiswa yang bersangkutan dan DPA;\r\nb. Melakukan tugas khusus, misalnya bertanggungjawab untuk memperbaiki atau membersihkan kembali, dan tugas-tugas lainnya.'),
(4, 'Makan, atau minum di dalam ruang kuliah/ laboratorium/ bengkel.', 4, 'Teguran tertulis disertai dengan surat pernyataan tidak mengulangi perbuatan tersebut, dibubuhi materai, ditandatangani mahasiswa yang bersangkutan dan DPA;');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `pengaduan_id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `pelanggaran_id` int(11) NOT NULL,
  `bukti_pelanggaran` varchar(200) NOT NULL,
  `tanggal_pengaduan` date NOT NULL,
  `status_pengaduan` enum('valid','tidak valid','proses') NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`pengaduan_id`, `nip`, `nim`, `pelanggaran_id`, `bukti_pelanggaran`, `tanggal_pengaduan`, `status_pengaduan`, `catatan`) VALUES
(2, '12345', '2241720058', 3, '', '2023-12-04', 'valid', 'Mikuuuufajjfdaljdjkfjladjfldajfldajfldajflajdljfladkjflkadjflkdjflkajfldakjfldakjfldajfljfdkajfda'),
(3, '12345', '2241720148', 4, '', '2023-12-04', 'tidak valid', 'Miku'),
(4, '12345', '2241720148', 1, '1702180490_Pic.jpg', '2023-12-10', 'tidak valid', 'Wibu'),
(8, '12345', '2241720228', 1, '1702190876_Pic.png', '2023-12-10', 'tidak valid', '');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `prodi_id` int(11) NOT NULL,
  `prodi_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`prodi_id`, `prodi_nama`) VALUES
(1, 'Teknik Informatika'),
(2, 'Sistem Informasi Bisnis');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `riwayat_id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `pengaduan_id` int(11) NOT NULL,
  `status_kompen` enum('baru','sedang dikerjakan','proses','ditolak','selesai') NOT NULL,
  `catatan_kompen` text DEFAULT NULL,
  `bukti_kompen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`riwayat_id`, `nim`, `pengaduan_id`, `status_kompen`, `catatan_kompen`, `bukti_kompen`) VALUES
(1, '2241720040', 3, 'sedang dikerjakan', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `nama_staff` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `nama_staff`, `user_id`) VALUES
(1, 'jojo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `level`) VALUES
(1, 'jojo', '7510d498f23f5815d3376ea7bad64e29', 1),
(2, '12345', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(3, '2241720228', 'f4b21949fdeb4f38355f36d0536e903c', 3),
(24, '2241720040', 'fe729d1ba6c8d534f4c26eb90752066b', 3),
(25, '2241720058', 'd9203392b9db5681d1a7111085bc8843', 3),
(26, '2241720127', '78a79fcce51625ece4270bda329eed77', 3),
(27, '2241720148', '1937f9832b38ea2b59e97d3391b6bc20', 3),
(28, '12346', '12346', 2),
(29, '12347', '12347', 2),
(30, '12348', '12348', 2),
(31, '12349', '12349', 2),
(32, '39482', '39482', 2),
(33, '', '', 2),
(34, '934', '934', 2),
(35, '4823', '4823', 2),
(36, '24', '24', 2),
(37, '2', '2', 2),
(38, '2', '2', 2),
(39, '2', '2', 2),
(40, '2', '2', 2),
(41, '2', '2', 2),
(42, '2', '2', 2),
(43, '2', '2', 2),
(44, '23231132', '23231132', 2),
(45, '223', '223', 2),
(46, '2311412', '2311412', 2),
(47, '324432', '324432', 2),
(48, '2034980', '2034980', 2),
(49, '3', '3', 2),
(50, '3', '3', 2),
(51, '3', '3', 2),
(52, '3', '3', 2),
(53, '3', '3', 2),
(54, '3', '3', 2),
(55, '3332', '3332', 2),
(56, '3342341424321', '3342341424321', 2),
(57, '3342341424321', '3342341424321', 2),
(58, '43234', '43234', 2),
(59, '43234', '43234', 2),
(60, '3432235', '3432235', 2),
(61, '3432235', '3432235', 2),
(62, '4252342', '4252342', 2),
(63, '3422532', '3422532', 2),
(64, '233243', '233243', 2),
(65, '43242', '43242', 2),
(66, '34224', '34224', 2),
(67, '39482', '39482', 2),
(68, '324', '324', 2),
(69, '2324223', '2324223', 2),
(70, '23244234', '23244234', 2),
(71, '323242', '323242', 2),
(72, '34252', '34252', 2),
(73, '3442934829', '3442934829', 2),
(74, '123789', '55587a910882016321201e6ebbc9f595', 2),
(75, '379972', '0dd72d32634fa44c7b3e1b093fe9a2db', 2),
(76, '31513', '8a9707913ae744d57924ed5450567889', 2),
(77, '2324223', '15f6af49f7580a1cd257b10a3bf27a44', 2),
(78, '2324223', '15f6af49f7580a1cd257b10a3bf27a44', 2),
(79, '2324223', '15f6af49f7580a1cd257b10a3bf27a44', 2),
(80, '2324223', '15f6af49f7580a1cd257b10a3bf27a44', 2),
(81, '2324223', '15f6af49f7580a1cd257b10a3bf27a44', 2),
(82, '2324223', '15f6af49f7580a1cd257b10a3bf27a44', 2),
(83, '2324223', '15f6af49f7580a1cd257b10a3bf27a44', 2),
(84, '2324223', '15f6af49f7580a1cd257b10a3bf27a44', 2),
(85, '324', 'f2fc990265c712c49d51a18a32b39f0c', 2),
(86, '2241720059', 'b22128a17242c96ecec46424e0938857', 2),
(87, '31', 'c16a5320fa475530d9583c34fd356ef5', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `f_user` (`user_id`),
  ADD KEY `f_prodi` (`prodi_id`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`pelanggaran_id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`pengaduan_id`),
  ADD KEY `f_mahasiswa` (`nim`) USING BTREE,
  ADD KEY `f_pelanggaran` (`pelanggaran_id`) USING BTREE,
  ADD KEY `f_dosen` (`nip`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`prodi_id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`riwayat_id`),
  ADD UNIQUE KEY `f_mahasiswa` (`nim`),
  ADD UNIQUE KEY `f_pengaduan` (`pengaduan_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `f_user` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `pelanggaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `pengaduan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `prodi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `riwayat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`prodi_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`pelanggaran_id`) REFERENCES `pelanggaran` (`pelanggaran_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengaduan_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengaduan_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_2` FOREIGN KEY (`pengaduan_id`) REFERENCES `pengaduan` (`pengaduan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `riwayat_ibfk_3` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
