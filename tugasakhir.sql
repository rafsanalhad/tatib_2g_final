-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2023 pada 05.34
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
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `TTL` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_phone` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `TTL`, `jenis_kelamin`, `pendidikan`, `jabatan`, `email`, `no_phone`, `alamat`, `user_id`) VALUES
('12345', 'Unggul Pamenang', 'Malang, 12 desember 1980', 'L', 'S2', 'Dosen TI', 'unggul@gmail.com', 821212121, 'Jl. Soehat no 1 Malang', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `TTL` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_ortu` int(11) NOT NULL,
  `jumlah_pelanggaran` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `TTL`, `jenis_kelamin`, `jurusan`, `alamat`, `email`, `phone_ortu`, `jumlah_pelanggaran`, `user_id`) VALUES
('2241720228', 'arya', 'sorong, 30 juni 2004', 'L', 'Teknologi Informasi', 'Jl. kumis kucing no 42A Malang', 'arya@gmail.com', 812345678, 0, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `pelanggaran_id` int(11) NOT NULL,
  `pelanggaran` varchar(200) NOT NULL,
  `tingkat` int(11) NOT NULL,
  `sanksi_pelanggaran` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pelanggaran`
--

INSERT INTO `pelanggaran` (`pelanggaran_id`, `pelanggaran`, `tingkat`, `sanksi_pelanggaran`) VALUES
(1, 'Terlibat dalam tindakan kriminal dan dinyatakan bersalah oleh Pengadilan', 1, 'Sanksi atas pelanggaran tingkat I yang dilakukan oleh mahasiswa berupa:\r\na. Dinonaktifkan (Cuti Akademik/ Terminal) selama dua semester dan/atau;\r\nb. Diberhentikan sebagai mahasiswa.'),
(2, 'Mengancam, baik tertulis atau tidak tertulis kepada mahasiswa, dosen, dan/atau karyawan.', 2, 'a. Dikenakan penggantian kerugian atau penggantian benda/barang semacamnya dan/atau;\r\nb. Melakukan tugas layanan sosial dalam jangka waktu tertentu dan/atau;\r\nc. Diberikan nilai D pada mata kuliah terkait saat melakukan pelanggaran.'),
(3, 'Bertingkah laku kasar atau tidak sopan kepada mahasiswa, dosen, dan/atau karyawan.', 3, 'a. Membuat surat pernyataan tidak mengulangi perbuatan tersebut, dibubuhi materai, ditandatangani mahasiswa yang bersangkutan dan DPA;\r\nb. Melakukan tugas khusus, misalnya bertanggungjawab untuk memperbaiki atau membersihkan kembali, dan tugas-tugas lainnya.'),
(4, 'Makan, atau minum di dalam ruang kuliah/ laboratorium/ bengkel.', 4, 'Teguran tertulis disertai dengan surat pernyataan tidak mengulangi perbuatan tersebut, dibubuhi materai, ditandatangani mahasiswa yang bersangkutan dan DPA;');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `pengaduan_id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `pelanggaran_id` int(11) NOT NULL,
  `bukti_pelanggaran` blob NOT NULL,
  `tanggal_pengaduan` date NOT NULL,
  `status_pengaduan` enum('valid','tidak valid') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `riwayat_id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `pengaduan_id` int(11) NOT NULL,
  `status_kompen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `nama_staff` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`staff_id`, `nama_staff`, `user_id`) VALUES
(1, 'jojo', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `level`) VALUES
(1, 'jojo', '7510d498f23f5815d3376ea7bad64e29', 1),
(2, '12345', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(3, '2241720228', 'f4b21949fdeb4f38355f36d0536e903c', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `f_user` (`user_id`);

--
-- Indeks untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`pelanggaran_id`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`pengaduan_id`),
  ADD UNIQUE KEY `f_mahasiswa` (`nim`),
  ADD UNIQUE KEY `f_pelanggaran` (`pelanggaran_id`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`riwayat_id`),
  ADD UNIQUE KEY `f_mahasiswa` (`nim`),
  ADD UNIQUE KEY `f_pengaduan` (`pengaduan_id`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `f_user` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `pelanggaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `pengaduan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `riwayat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`pelanggaran_id`) REFERENCES `pelanggaran` (`pelanggaran_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengaduan_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_2` FOREIGN KEY (`pengaduan_id`) REFERENCES `pengaduan` (`pengaduan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `riwayat_ibfk_3` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
