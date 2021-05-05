-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2021 pada 02.18
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infopanen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(5) NOT NULL,
  `nama_akses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akses`
--

INSERT INTO `akses` (`id_akses`, `nama_akses`) VALUES
(1, 'admin'),
(2, 'petani'),
(3, 'pembeli');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `nama_gambar`, `judul`, `sumber`, `tanggal`, `link`) VALUES
(1, 'file_1618336943.jpg', 'Darurat Petani Tahun 2063, Apa Kata Pakar?', 'Liputan 6', '2021-04-24', 'https://www.liputan6.com/regional/read/4530467/darurat-petani-tahun-2063-apa-kata-pakar'),
(2, '13265295544.jpg', 'Kesuburan Tanah Menurun, Kementan Turunkan Alokasi Pupuk Bersubsidi ', 'Kompas', '2021-04-30', 'https://money.kompas.com/read/2021/04/10/125233326/kesuburan-tanah-menurun-kementan-turunkan-alokasi-pupuk-bersubsidi'),
(3, '60238c6ba368e.jpg', 'Kepala Dinas di Malang Tersangkut Kasus Narkoba, Diberhentikan dan Tak Ada Bantuan Hukum, Ini Alasannya  ', 'Kompas', '2021-04-14', 'https://regional.kompas.com/read/2021/03/31/165354578/kepala-dinas-di-malang-tersangkut-kasus-narkoba-diberhentikan-dan-tak-ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_pembeli`
--

CREATE TABLE `daftar_pembeli` (
  `id_pembeli` int(5) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `email_pembeli` varchar(255) NOT NULL,
  `alamat_pembeli` varchar(255) NOT NULL,
  `no_telp_pembeli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_daftar_petani`
--

CREATE TABLE `data_daftar_petani` (
  `id_daftar_petani` int(5) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `komoditas` varchar(225) NOT NULL,
  `luas_sawah` varchar(255) NOT NULL,
  `alamat_sawah` varchar(255) NOT NULL,
  `desa_kelurahan` varchar(255) NOT NULL,
  `id_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_daftar_petani`
--

INSERT INTO `data_daftar_petani` (`id_daftar_petani`, `ktp`, `komoditas`, `luas_sawah`, `alamat_sawah`, `desa_kelurahan`, `id_anggota`) VALUES
(5, 'file_1620155115.png', 'Jeruk', '12Ha', 'Jl Kuncingan', 'Majakencinga', 16),
(6, 'letter_L.png', 'Buah', '144Ha', 'Jl Kemiri Sedaya', 'Kilimanuk', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_tanam_panen`
--

CREATE TABLE `form_tanam_panen` (
  `id_tanam_panen` int(5) NOT NULL,
  `nama_petani` varchar(255) NOT NULL,
  `no_hp_petani` varchar(255) NOT NULL,
  `alamat_petani` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `gambar_panen` varchar(255) NOT NULL,
  `komoditi` varchar(255) NOT NULL,
  `stok_tanam` int(11) NOT NULL,
  `tanggal_tanam` varchar(255) NOT NULL,
  `tanggal_panen` varchar(255) NOT NULL,
  `status_panen` varchar(255) NOT NULL,
  `hasil_panen` varchar(255) NOT NULL,
  `harga_panen` int(11) NOT NULL,
  `kondisi_panen` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `no_briva` varchar(255) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `sebagai` varchar(255) NOT NULL,
  `id_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `form_tanam_panen`
--

INSERT INTO `form_tanam_panen` (`id_tanam_panen`, `nama_petani`, `no_hp_petani`, `alamat_petani`, `desa`, `gambar_panen`, `komoditi`, `stok_tanam`, `tanggal_tanam`, `tanggal_panen`, `status_panen`, `hasil_panen`, `harga_panen`, `kondisi_panen`, `keterangan`, `no_briva`, `nama_bank`, `sebagai`, `id_anggota`) VALUES
(13, 'Ely', '089776564123', 'Jalan Kalimantan, Kedayunan, Banyuanyar', 'Kuripan', 'letter_D.png', 'Kunyit', 6, '2021-05-05', '2021-05-08', 'Belum Panen', '1000', 1000, 'Baik', 'Baik tahan hama', '0021987654541298', 'BRI', 'Petani', 16),
(14, 'Ely', '089776560987', 'Jalan Jawa', 'Kraksaan', 'letter_J.png', 'Biofarmaka', 5, '2021-05-05', '2021-05-08', 'Belum Panen', '1000', 1000, 'Baik', 'Baik tahan hama', '0021987654541298', 'BRI', 'Petani', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(5) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `komoditas` varchar(255) NOT NULL,
  `pasar` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id_harga`, `harga`, `komoditas`, `pasar`, `kecamatan`, `keterangan`, `tanggal_update`) VALUES
(1, 'Rp. 12.000', 'Buah', 'Pasar Gending', 'Gending', 'Naik', '2021-04-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `header_transaksi`
--

CREATE TABLE `header_transaksi` (
  `id_header_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `status_bayar` int(11) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `rekening_pembayaran` varchar(255) DEFAULT NULL,
  `rekening_pelanggan` varchar(255) DEFAULT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `tanggal_post` datetime DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_penjual` int(11) NOT NULL,
  `id_rekening` int(11) DEFAULT NULL,
  `tanggal_bayar` varchar(255) DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `header_transaksi`
--

INSERT INTO `header_transaksi` (`id_header_transaksi`, `id_user`, `id_anggota`, `jumlah_transaksi`, `jumlah_bayar`, `status_bayar`, `nama_pembeli`, `nama_produk`, `role`, `rekening_pembayaran`, `rekening_pelanggan`, `bukti_bayar`, `tanggal_post`, `tanggal_update`, `id_penjual`, `id_rekening`, `tanggal_bayar`, `nama_bank`) VALUES
(111, 0, 15, 24000, 24000, 0, 'viqih', 'Kunyit', 3, '0021987654541298', '0007776565441122', 'bukti_bayar1.jpg', '2021-05-05 05:37:19', '2021-05-04 22:50:23', 16, 1, '22 September 2021', 'BNI'),
(112, 0, 15, 32000, 32000, 0, 'viqih', 'Sayur', 3, '0021987654541298', '0007776565441122', 'bukti_bayar2.jpg', '2021-05-05 05:37:19', '2021-05-04 23:15:41', 16, 1, '22 September 2021', 'BNI'),
(116, 0, 15, 1000, 1000, 1, 'viqih', 'Biofarmaka', 3, '4545678712344432', 'Viqih Ardiansyah', 'letter_S.png', NULL, '2021-05-04 23:23:25', 0, 13, '05-05-2021', 'BANK PEMBANGUNAN DAERAH JAWA TIMUR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(5) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Sukapura'),
(2, 'Sumber'),
(3, 'Kuripan'),
(4, 'Bantaran'),
(5, 'Leces'),
(6, 'Tegalsiwalan'),
(7, 'Banyuanyar'),
(8, 'Tiris'),
(9, 'Krucil'),
(10, 'Gading'),
(11, 'Pakuniran'),
(12, 'Kotaanyar'),
(13, 'Paiton'),
(14, 'Besuk'),
(15, 'Kraksaan'),
(16, 'Krejengan'),
(17, 'Pajarakan'),
(18, 'Maron'),
(19, 'Gending'),
(20, 'Dringu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komoditas`
--

CREATE TABLE `komoditas` (
  `id_komoditas` int(5) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama_komoditas` varchar(255) NOT NULL,
  `nama_tanaman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komoditas`
--

INSERT INTO `komoditas` (`id_komoditas`, `gambar`, `nama_komoditas`, `nama_tanaman`) VALUES
(9, 'letter_J.png', 'Biofarmaka', 'Kunyit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_anggota`
--

CREATE TABLE `login_anggota` (
  `id_anggota` int(5) NOT NULL,
  `id_akses` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(128) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_rekening` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login_anggota`
--

INSERT INTO `login_anggota` (`id_anggota`, `id_akses`, `username`, `password`, `image`, `no_telp`, `alamat`, `no_rekening`, `date_created`) VALUES
(1, 'admin', 'imel', '123', 'file_1620166604.png', '087566234343', 'Jalan Puyuh', '0', 0),
(15, 'pembeli', 'viqih', '123', 'default.png', '', '', '0', 1620147938),
(16, 'petani', 'ely', '123', 'file_1620165783.png', '087566234111', 'JL Kemuning0000', '0021987654541298', 1620147962),
(17, 'petani', 'sagita', '123', 'file_1620165763.png', '087566234512', 'JL Kemuning2', '0007818134541312', 1620154629),
(18, 'pembeli', 'feri', '123', 'file_1620173809.png', '087566237332', 'JL Macau Payau', '0007818134813415', 1620172239);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nomor_rekening` varchar(20) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sebagai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pemesanan_pembeli`
--

CREATE TABLE `riwayat_pemesanan_pembeli` (
  `id_riwayat_pembeli` int(5) NOT NULL,
  `nama_petani` varchar(255) NOT NULL,
  `komoditas_petani` varchar(255) NOT NULL,
  `tanggal_pesan` varchar(255) NOT NULL,
  `jumlah_pesan` varchar(255) NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `status_pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_panen`
--

CREATE TABLE `status_panen` (
  `id_status_panen` int(5) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_panen`
--

INSERT INTO `status_panen` (`id_status_panen`, `status`) VALUES
(1, 'belum panen'),
(2, 'panen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_pesan`
--

CREATE TABLE `status_pesan` (
  `id_status_pesan` int(5) NOT NULL,
  `status_pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanaman_biofarmaka`
--

CREATE TABLE `tanaman_biofarmaka` (
  `id_tbiofarmaka` int(5) NOT NULL,
  `id` varchar(255) NOT NULL,
  `komoditi_biofarmaka` varchar(255) NOT NULL,
  `luas_panen` varchar(255) NOT NULL,
  `luas_tanam` varchar(255) NOT NULL,
  `provitas` varchar(255) NOT NULL,
  `produksi_biofarmaka` varchar(255) NOT NULL,
  `harga_biofarmaka` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `id_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanaman_biofarmaka`
--

INSERT INTO `tanaman_biofarmaka` (`id_tbiofarmaka`, `id`, `komoditi_biofarmaka`, `luas_panen`, `luas_tanam`, `provitas`, `produksi_biofarmaka`, `harga_biofarmaka`, `tahun`, `id_anggota`) VALUES
(5, '', 'Jahe', '145', '100', '121', '2500', '1900', '2017', 0),
(6, '', 'Jahe', '123', '100', '121', '2600', '1900', '2017', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanaman_buah`
--

CREATE TABLE `tanaman_buah` (
  `id_tbuah` int(5) NOT NULL,
  `nama_tanaman` varchar(255) NOT NULL,
  `jumlah_tanaman` varchar(255) NOT NULL,
  `tanaman_baru` varchar(255) NOT NULL,
  `tanaman_menghasilkan` varchar(255) NOT NULL,
  `tanaman_produktif` varchar(255) NOT NULL,
  `produksi_buah` varchar(255) NOT NULL,
  `provitas` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `id_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanaman_buah`
--

INSERT INTO `tanaman_buah` (`id_tbuah`, `nama_tanaman`, `jumlah_tanaman`, `tanaman_baru`, `tanaman_menghasilkan`, `tanaman_produktif`, `produksi_buah`, `provitas`, `harga`, `tahun`, `id_anggota`) VALUES
(5, 'Kunyit', '34', '13', '45', '14', '23', '15', 'Rp. 1.666', '2020', 0),
(6, 'Kunyit', '34', '13', '45', '14', '23', '15', 'Rp. 1.788', '2020', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanaman_padi_palawija`
--

CREATE TABLE `tanaman_padi_palawija` (
  `id_tpadi` int(5) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `tanam` varchar(255) NOT NULL,
  `panen` varchar(255) NOT NULL,
  `provitas` varchar(255) NOT NULL,
  `produksi` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `id_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanaman_padi_palawija`
--

INSERT INTO `tanaman_padi_palawija` (`id_tpadi`, `nama_kecamatan`, `tanam`, `panen`, `provitas`, `produksi`, `tahun`, `id_anggota`) VALUES
(9, 'Leces', '12', '14', '23', '56', '2019', 0),
(10, 'Leces', '12', '14', '23', '45', '2019', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanaman_sayuran`
--

CREATE TABLE `tanaman_sayuran` (
  `id_tsayur` int(5) NOT NULL,
  `komoditi` varchar(255) NOT NULL,
  `luas_tanam` varchar(255) NOT NULL,
  `luas_panen` varchar(255) NOT NULL,
  `produksi_habis_dibongkar` varchar(255) NOT NULL,
  `produksi_belum_dibongkar` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `harga_min` varchar(255) NOT NULL,
  `harga_max` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `id_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanaman_sayuran`
--

INSERT INTO `tanaman_sayuran` (`id_tsayur`, `komoditi`, `luas_tanam`, `luas_panen`, `produksi_habis_dibongkar`, `produksi_belum_dibongkar`, `total`, `harga_min`, `harga_max`, `tahun`, `id_anggota`) VALUES
(5, 'Kunyit', '45', '76', '34', '35', '17', 'Rp. 1.563', '2345', '2020', 0),
(6, 'Kunyit', '45', '76', '34', '35', '17', 'Rp. 1.563', '2345', '2020', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_product` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_anggota`, `id_produk`, `nama_product`, `harga`, `jumlah`, `total_harga`) VALUES
(91, 15, 13, 'Kunyit', 1000, 1, 1000),
(92, 15, 14, 'Biofarmaka', 1000, 1, 1000),
(93, 15, 13, 'Kunyit', 1000, 1, 1000),
(94, 15, 14, 'Biofarmaka', 1000, 1, 1000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `daftar_pembeli`
--
ALTER TABLE `daftar_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `data_daftar_petani`
--
ALTER TABLE `data_daftar_petani`
  ADD PRIMARY KEY (`id_daftar_petani`);

--
-- Indeks untuk tabel `form_tanam_panen`
--
ALTER TABLE `form_tanam_panen`
  ADD PRIMARY KEY (`id_tanam_panen`);

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indeks untuk tabel `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD PRIMARY KEY (`id_header_transaksi`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `komoditas`
--
ALTER TABLE `komoditas`
  ADD PRIMARY KEY (`id_komoditas`);

--
-- Indeks untuk tabel `login_anggota`
--
ALTER TABLE `login_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`),
  ADD UNIQUE KEY `nomor_rekening` (`nomor_rekening`);

--
-- Indeks untuk tabel `riwayat_pemesanan_pembeli`
--
ALTER TABLE `riwayat_pemesanan_pembeli`
  ADD PRIMARY KEY (`id_riwayat_pembeli`);

--
-- Indeks untuk tabel `status_panen`
--
ALTER TABLE `status_panen`
  ADD PRIMARY KEY (`id_status_panen`);

--
-- Indeks untuk tabel `status_pesan`
--
ALTER TABLE `status_pesan`
  ADD PRIMARY KEY (`id_status_pesan`);

--
-- Indeks untuk tabel `tanaman_biofarmaka`
--
ALTER TABLE `tanaman_biofarmaka`
  ADD PRIMARY KEY (`id_tbiofarmaka`);

--
-- Indeks untuk tabel `tanaman_buah`
--
ALTER TABLE `tanaman_buah`
  ADD PRIMARY KEY (`id_tbuah`);

--
-- Indeks untuk tabel `tanaman_padi_palawija`
--
ALTER TABLE `tanaman_padi_palawija`
  ADD PRIMARY KEY (`id_tpadi`);

--
-- Indeks untuk tabel `tanaman_sayuran`
--
ALTER TABLE `tanaman_sayuran`
  ADD PRIMARY KEY (`id_tsayur`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akses`
--
ALTER TABLE `akses`
  MODIFY `id_akses` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `daftar_pembeli`
--
ALTER TABLE `daftar_pembeli`
  MODIFY `id_pembeli` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_daftar_petani`
--
ALTER TABLE `data_daftar_petani`
  MODIFY `id_daftar_petani` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `form_tanam_panen`
--
ALTER TABLE `form_tanam_panen`
  MODIFY `id_tanam_panen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id_header_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `komoditas`
--
ALTER TABLE `komoditas`
  MODIFY `id_komoditas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `login_anggota`
--
ALTER TABLE `login_anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `riwayat_pemesanan_pembeli`
--
ALTER TABLE `riwayat_pemesanan_pembeli`
  MODIFY `id_riwayat_pembeli` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status_panen`
--
ALTER TABLE `status_panen`
  MODIFY `id_status_panen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `status_pesan`
--
ALTER TABLE `status_pesan`
  MODIFY `id_status_pesan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tanaman_biofarmaka`
--
ALTER TABLE `tanaman_biofarmaka`
  MODIFY `id_tbiofarmaka` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tanaman_buah`
--
ALTER TABLE `tanaman_buah`
  MODIFY `id_tbuah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tanaman_padi_palawija`
--
ALTER TABLE `tanaman_padi_palawija`
  MODIFY `id_tpadi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tanaman_sayuran`
--
ALTER TABLE `tanaman_sayuran`
  MODIFY `id_tsayur` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
