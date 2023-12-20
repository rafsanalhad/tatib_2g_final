-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2023 pada 16.12
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
  `nip` varchar(50) NOT NULL,
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
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `TTL`, `jenis_kelamin`, `jabatan`, `email`, `no_phone`, `alamat`, `dosen_img`, `user_id`) VALUES
('1976062520050120', 'Atiqah Nurul Asri, S.Pd., M.Pd', 'Malang, 19 Desember 1976', 'P', 'Dosen TI', 'atiqah.nurul@polinema.ac.id', 12314134, 'Jl. Soehat, Malang', '1703083458_Wha.jpg', 95);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
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
  `mahasiswa_img` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `prodi_id`, `nama`, `TTL`, `jenis_kelamin`, `alamat`, `email`, `no_phone`, `phone_ortu`, `jumlah_pelanggaran`, `mahasiswa_img`, `user_id`) VALUES
('2241720228', 1, 'Arya Chandra Kusuma', 'sorong, 123', 'L', 'Jl. Soehat, Malang', 'contoh@wkwk.com', '0812121212', '0812121212', 0, '1703083535_170.png', 96);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `pelanggaran_id` int(11) NOT NULL,
  `pelanggaran` varchar(500) NOT NULL,
  `tingkat` int(11) NOT NULL,
  `sanksi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pelanggaran`
--

INSERT INTO `pelanggaran` (`pelanggaran_id`, `pelanggaran`, `tingkat`, `sanksi_id`) VALUES
(1, 'Terlibat dalam tindakan kriminal dan dinyatakan bersalah oleh Pengadilan', 1, 1),
(2, 'Mengancam, baik tertulis atau tidak tertulis kepada mahasiswa, dosen, dan/atau karyawan.', 2, 2),
(3, 'Bertingkah laku kasar atau tidak sopan kepada mahasiswa, dosen, dan/atau karyawan.', 3, 3),
(4, 'Makan, atau minum di dalam ruang kuliah/ laboratorium/ bengkel.', 4, 4),
(5, 'Berkomunikasi dengan tidak sopan, baik tertulis atau tidak tertulis kepada mahasiswa, dosen, karyawan, atau orang lain', 5, 5),
(6, 'Berbusana tidak sopan dan tidak rapi. Yaitu antara lain adalah: berpakaian ketat, transparan, memakai t-shirt (baju kaos tidak berkerah), tank top, hipster, you can see, rok mini, backless, celana pendek, celana tiga per empat, legging, model celana atau baju koyak, sandal, sepatu sandal di lingkungan kampus', 4, 4),
(7, 'Mahasiswa Iaki-laki berambut tidak rapi, gondrong yaitu panjang rarnbutnya melewati batas alis mata di bagian depan, telinga di bagian sarnping atau menyentuh kerah baju di bagian leher', 4, 4),
(8, 'Mahasiswa berambut dengan model punk, dicat selain hitam dan/ atau skinned.', 4, 4),
(9, 'Melanggar peraturan/ ketentuan yang berlaku di Polinema baik di Jurusan/ Program Studi', 3, 3),
(10, 'Tidak menjaga kebersihan di seluruh area Polinema', 3, 3),
(11, 'Membuat kegaduhan yang mengganggu pelaksanaan perkuliahan atau praktikum yang sedang berlangsung.', 3, 3),
(12, 'Merokok di luar area kawasan merokok', 3, 3),
(13, 'Bermain kartu, game online di area kampus', 3, 3),
(14, 'Mengotori atau mencoret-coret meja, kursi, tembok, dan lain-lain di lingkungan Polinema', 3, 3),
(15, 'Merusak sarana dan prasarana yang ada di area Polinema', 2, 2),
(16, 'Tidak menjaga ketertiban dan keamanan di seluruh area Polinema (misalnya: parkir tidak pada tempatnya, konvoi selebrasi wisuda dll)', 2, 2),
(17, 'Melakukan pengotoran/ pengrusakan barang milik orang lain termasuk milik Politeknik Negeri Malang', 2, 2),
(18, 'Mengakses materi pornografi di kelas atau area kampus', 2, 2),
(19, 'Membawa dan/atau menggunakan senjata tajam dan/atau senjata api untuk hal kriminal', 2, 2),
(20, 'Melakukan perkelahian, serta membentuk geng/ kelompok yang bertujuan negatif.', 2, 2),
(21, 'Melakukan kegiatan politik praktis di dalam kampus', 2, 2),
(22, 'Melakukan tindakan kekerasan atau perkelahian di dalam kampus.', 2, 2),
(23, 'Melakukan penyalahgunaan identitas untuk perbuatan negatif', 2, 2),
(24, 'Mencuri dalam bentuk apapun', 2, 2),
(25, 'Melakukan kecurangan dalam bidang akademik, administratif, dan keuangan.', 2, 2),
(26, 'Melakukan pemerasan dan/atau penipuan', 2, 2),
(27, 'Melakukan pelecehan dan/atau tindakan asusila dalam segala bentuk di dalam dan di luar kampus', 2, 2),
(28, 'Berjudi, mengkonsumsi minum-minuman keras, dan/ atau bermabuk-mabukan di lingkungan dan di luar lingkungan Kampus Polinema', 2, 2),
(29, 'Mengikuti organisasi dan atau menyebarkan faham-faham yang dilarang oleh Pemerintah.', 2, 2),
(30, 'Melakukan pemalsuan data / dokumen / tanda tangan.', 2, 2),
(31, 'Melakukan plagiasi (copy paste) dalam tugas-tugas atau karya ilmiah', 2, 2),
(32, 'Melakukan plagiasi (copy paste) dalam tugas-tugas atau karya ilmiah', 1, 1),
(33, 'Mencuri dalam bentuk apapun', 1, 1),
(34, 'Melakukan kecurangan dalam bidang akademik, administratif, dan keuangan.', 1, 1),
(35, 'Melakukan pemerasan dan/atau penipuan', 1, 1),
(36, 'Melakukan pelecehan dan/atau tindakan asusila dalam segala bentuk di dalam dan di luar kampus', 1, 1),
(37, 'Berjudi, mengkonsumsi minum-minuman keras, dan/ atau bermabuk-mabukan di lingkungan dan di luar lingkungan Kampus Polinema', 1, 1),
(38, 'Mengikuti organisasi dan atau menyebarkan faham-faham yang dilarang oleh Pemerintah.', 1, 1),
(39, 'Melakukan pemalsuan data / dokumen / tanda tangan.', 1, 1),
(40, 'Tidak menjaga nama baik Polinema di masyarakat dan/ atau mencemarkan nama baik Polinema melalui media apapun', 1, 1),
(41, 'Melakukan kegiatan atau sejenisnya yang dapat menurunkan kehormatan atau martabat Negara, Bangsa dan Polinema.', 1, 1),
(42, 'Menggunakan barang-barang psikotropika dan/ atau zat-zat Adiktif lainnya', 1, 1),
(43, 'Mengedarkan serta menjual barang-barang psikotropika dan/ atau zat-zat Adiktif lainnya', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
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
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`pengaduan_id`, `nip`, `nim`, `pelanggaran_id`, `bukti_pelanggaran`, `tanggal_pengaduan`, `status_pengaduan`, `catatan`) VALUES
(16, '1976062520050120', '2241720228', 3, '1703083588_170.jpg', '2023-12-20', 'valid', ''),
(17, '1976062520050120', '2241720228', 1, '1703083614_170.png', '2023-12-20', 'tidak valid', ''),
(18, '1976062520050120', '2241720228', 3, '1703083644_170.jpg', '2023-12-20', 'valid', ''),
(19, '1976062520050120', '2241720228', 3, '1703083673_170.jpg', '2023-12-20', 'valid', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `prodi_id` int(11) NOT NULL,
  `prodi_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`prodi_id`, `prodi_nama`) VALUES
(1, 'Teknik Informatika'),
(2, 'Sistem Informasi Bisnis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
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
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`riwayat_id`, `nim`, `pengaduan_id`, `status_kompen`, `catatan_kompen`, `bukti_kompen`) VALUES
(12, '2241720228', 16, 'selesai', '', '1703083772_170.jpg'),
(13, '2241720228', 18, 'ditolak', 'salah', '1703085030_170.jpg'),
(14, '2241720228', 19, 'baru', NULL, NULL),
(15, '2241720228', 17, 'baru', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sanksi_pelanggaran`
--

CREATE TABLE `sanksi_pelanggaran` (
  `sanksi_id` int(11) NOT NULL,
  `nama_sanksi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `sanksi_pelanggaran`
--

INSERT INTO `sanksi_pelanggaran` (`sanksi_id`, `nama_sanksi`) VALUES
(1, 'Sanksi atas pelanggaran tingkat I yang dilakukan oleh mahasiswa berupa:\r\na. Dinonaktifkan (Cuti Akademik/ Terminal) selama dua semester dan/atau;\r\nb. Diberhentikan sebagai mahasiswa.'),
(2, 'Sanksi atas pelanggaran Tingkat II yang dilakukan oleh mahasiswa berupa:\r\na. Dikenakan penggantian kerugian atau penggantian benda/barang semacamnya dan/atau;\r\nb. Melakukan tugas layanan sosial dalam jangka waktu tertentu dan/atau;\r\nc. Diberikan nilai D pada mata kuliah terkait saat melakukan pelanggaran.'),
(3, 'Sanksi atas pelanggaran Tingkat III yang dilakukan oleh mahasiswa berupa:\r\na. Membuat surat pernyataan tidak mengulangi perbuatan tersebut, dibubuhi materai, ditandatangani mahasiswa yang bersangkutan dan DPA;\r\nb. Melakukan tugas khusus, misalnya bertanggungjawab untuk memperbaiki atau membersihkan kembali, dan tugas-tugas lainnya.'),
(4, 'Sanksi atas pelanggaran Tingkat IV yang dilakukan oleh mahasiswa berupa: Teguran tertulis disertai dengan surat pernyataan tidak mengulangi perbuatan tersebut, dibubuhi materai, ditandatangani mahasiswa yang bersangkutan dan DPA;'),
(5, 'Sanksi atas pelanggaran Tingkat V yang dilakukan oleh mahasiswa berupa: Teguran lisan disertai dengan surat pernyataan tidak mengulangi perbuatan tersebut, dibubuhi materai, ditandatangani mahasiswa yang bersangkutan dan DPA;');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `nama_staff` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(94, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(95, '1976062520050120', '178974e8ca228bcc05f6c9af45fbe39d', 2),
(96, '2241720228', 'f4b21949fdeb4f38355f36d0536e903c', 3);

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
  ADD UNIQUE KEY `f_user` (`user_id`),
  ADD KEY `f_prodi` (`prodi_id`);

--
-- Indeks untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`pelanggaran_id`),
  ADD KEY `f_sanksi` (`sanksi_id`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`pengaduan_id`),
  ADD KEY `f_mahasiswa` (`nim`) USING BTREE,
  ADD KEY `f_pelanggaran` (`pelanggaran_id`) USING BTREE,
  ADD KEY `f_dosen` (`nip`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`prodi_id`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`riwayat_id`),
  ADD UNIQUE KEY `f_pengaduan` (`pengaduan_id`),
  ADD KEY `riwayat_ibfk_3` (`nim`);

--
-- Indeks untuk tabel `sanksi_pelanggaran`
--
ALTER TABLE `sanksi_pelanggaran`
  ADD PRIMARY KEY (`sanksi_id`);

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
  MODIFY `pelanggaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `pengaduan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `prodi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `riwayat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `sanksi_pelanggaran`
--
ALTER TABLE `sanksi_pelanggaran`
  MODIFY `sanksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

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
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`prodi_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `f_sanksi` FOREIGN KEY (`sanksi_id`) REFERENCES `sanksi_pelanggaran` (`sanksi_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`pelanggaran_id`) REFERENCES `pelanggaran` (`pelanggaran_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengaduan_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengaduan_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

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
