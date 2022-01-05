-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2021 pada 14.34
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `no_antrian` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `terpanggil` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id`, `no_antrian`, `nama`, `tgl`, `keluhan`, `id_user`, `terpanggil`) VALUES
(42, '01', 'erwin', '2021-08-23', 'qwwer', 9, 0),
(43, '01', 'Erwin', '2021-08-25', 'sadasdasd', 9, 1),
(44, '02', 'erwin', '2021-08-25', 'sadsdas', 9, 1),
(45, '01', 'andi gazali', '2021-09-10', 'Sakit hati', 9, 0),
(48, '02', '', '2021-09-10', '', 15, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `spesialis` varchar(225) NOT NULL,
  `hari_praktek` varchar(225) NOT NULL,
  `jam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `jenis_kelamin`, `spesialis`, `hari_praktek`, `jam`) VALUES
(7, 'dr.J.PALIMBONG P.,SpB', 'LAKI-LAKI', 'SPESIALIS BEDAH', 'SENIN s/d SABTU', '17.00 - 20.00'),
(11, 'dr.RIRIN LISA TONDOK', 'PEREMPUAN', 'DOKTER UMUM', 'SENIN s/d SABTU', '16.00-20.00'),
(13, 'dr.PRARINDRA KHRISANTI TORIKI, Sp.A', 'PEREMPUAN', 'SPESIALIS ANAK', 'SELASA,KAMIS,SABTU', '14.00 - 17.00'),
(18, 'dr.ELY YURIS Sp.N.,M.Kes', 'PEREMPUAN', 'SPESIALIS SARAF', 'SELASA,RABU,JUMAT', '15.30 - 17.30'),
(19, 'dr.AHMAD MUDASSIR,Sp.PD', 'LAKI-LAKI', 'SPESIALIS PENYAKIT DALAM', 'SENIN s/d SABTU', '18.00 - 20.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `email`, `telepon`, `alamat`) VALUES
(1, 'dokteraja@gmail.com', '0822287654457', 'Rantepao');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontrol`
--

CREATE TABLE `kontrol` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pasien` varchar(225) NOT NULL,
  `jenis_kelamin` int(25) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `dokter` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontrol`
--

INSERT INTO `kontrol` (`id`, `tanggal`, `nama_pasien`, `jenis_kelamin`, `umur`, `alamat`, `dokter`) VALUES
(1, '2021-11-27', 'kiki', 0, 22, 'rantepao', 'ririn'),
(2, '2021-11-27', 'kiki', 0, 22, 'rantepao', 'ririn'),
(3, '2021-11-27', 'kiki', 0, 22, 'rantepao', 'ririn'),
(4, '2021-11-27', 'kiki', 0, 22, 'rantepao', 'ririn'),
(5, '2021-11-27', 'kiki', 0, 22, 'rantepao', 'ririn');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(225) NOT NULL,
  `umur` int(15) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `telepon` int(50) NOT NULL,
  `agama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama_pasien`, `umur`, `jenis_kelamin`, `telepon`, `agama`) VALUES
(1, 'ayu', 23, 'perempuan', 812345678, 'kristen'),
(4, 'kiki', 23, 'pria', 2147483647, ''),
(5, 'kiki', 22, 'pria', 2147483647, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemanggilan`
--

CREATE TABLE `pemanggilan` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(150) NOT NULL,
  `no_antrian` varchar(2) NOT NULL,
  `tgl` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `lama_pemeriksaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemanggilan`
--

INSERT INTO `pemanggilan` (`id`, `nama_pasien`, `no_antrian`, `tgl`, `waktu_mulai`, `lama_pemeriksaan`) VALUES
(1, 'Erwin', '01', '2021-08-25', '07:55:26', '20'),
(2, 'erwin', '02', '2021-08-25', '08:15:04', '40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `dokter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekam_medis`
--

INSERT INTO `rekam_medis` (`id`, `tanggal`, `nama`, `jenis_kelamin`, `umur`, `pekerjaan`, `alamat`, `diagnosa`, `dokter`) VALUES
(19, '2021-11-26', 'Ny. Yohana Sapan', 'perempuan', 70, '-', 'LEMPO,SESEAN', 'T=160/90, PUSING DAN SAKIT KAKI KANAN (NEUROPATY), NOROGIS TRY, CIPER 2x2/5. DARAH: GLU-109, THD-184, LEU-9,59, HB-11,9', 'dr.J PALIMBONG P. SpB'),
(20, '2021-11-27', 'Ny. YOHANA SANDE', 'PEREMPUAN', 85, '-', 'Jl PRAMUKA, KEC. RANTEPAO', 'T=160/90. PUSING dan BATUK. AMBNOXOL. DARAH: GLU:96, CHO:278, UA:4,1, LEU:6,63, HB:11,1. URINE: LEU:3-5, ENYT:1-1, EP.ULL:3-5', 'dr.J PALIMBONG P. SpB'),
(21, '2021-11-28', 'YELSI BETRICKS', 'PEREMPUAN', 16, 'PELAJAR', 'PARINDING KEC. SESEAN', 'T:100/70. srne. Cifro 2x1/5, Introin 2x1/5, Meulo sonbe 2x1/5. DARAH: LEU:823, HB:12,0. URINE: LEU:+2,ENYT:+1, Ep.all:+2', 'dr.J PALIMBONG P. SpB'),
(22, '2021-11-29', 'Ny. YOSPIN PAGITA', 'PEREMPUAN', 44, '-', 'BALUSU', 'T:140/90. neorlasme aceis. jr.0,5, cerno 2x1/5, mefinol 2x1/5. DARAH: glu:101,chol:183, leu:7,43, hb:12,7, golda:O. URINE: leu:+, enyt:3-5, ep.cell:+++', 'dr.J PALIMBONG P. SpB'),
(23, '2021-11-30', 'Nn.YUSRI DEVI', 'PEREMPUAN', 20, 'MAHASISWA', 'TALLUNGLIPU', 'T:110/70. srkt. DARAH: leu:7,04, hb:13,0. URINE: leu:+2, enyt:+, ep.cell:+2', 'dr.J PALIMBONG P. SpB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(20) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role_id`, `aktif`) VALUES
(1, 'yospin', 'yospinlumele@gmail.com', '227093da37fbd879ca327408d39559790c0efc54', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `token` varchar(150) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'dian.paulang@gmail.com', '/IxOtDZFFmWq1poPbGDhSI8FN0OOAIwhN0ec8U68E/o=', 1631279614);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontrol`
--
ALTER TABLE `kontrol`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemanggilan`
--
ALTER TABLE `pemanggilan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kontrol`
--
ALTER TABLE `kontrol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pemanggilan`
--
ALTER TABLE `pemanggilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
