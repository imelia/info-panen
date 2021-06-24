-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2021 pada 05.06
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
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `panen_id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `barang_keluar`
--
DELIMITER $$
CREATE TRIGGER `t_keluar` AFTER INSERT ON `barang_keluar` FOR EACH ROW BEGIN
	UPDATE form_tanam_panen SET stok_tanam = stok_tanam - NEW.jumlah WHERE id_tanam_panen = NEW.panen_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL,
  `panen_id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `barang_masuk`
--
DELIMITER $$
CREATE TRIGGER `t_masuk` AFTER INSERT ON `barang_masuk` FOR EACH ROW BEGIN
	UPDATE form_tanam_panen SET stok_tanam = stok_tanam + NEW.jumlah WHERE id_tanam_panen = NEW.panen_id;
END
$$
DELIMITER ;

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
(2, 'file_1622389838.png', 'Kesuburan Tanah Menurun, Kementan Turunkan Alokasi Pupuk Bersubsidi ', 'Kompas', '2021-04-30', 'https://money.kompas.com/read/2021/04/10/125233326/kesuburan-tanah-menurun-kementan-turunkan-alokasi-pupuk-bersubsidi'),
(5, 'letter_K.png', 'Penanaman', 'Kompas1', '2021-05-31', 'https://regional.kompas.com/read/2021/03/31/165354578/kepala-dinas-di-malang-tersangkut-kasus-narkoba-diberhentikan-dan-tak-ada');

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
(6, 'letter_L.png', 'Buah', '144Ha', 'Jl Kemiri Sedaya', 'Kilimanuk', 17),
(7, 'letter_E.png', 'Buah', '122Ha', 'Jl Kemiri Sedaya', 'Kilimanuk', 19),
(8, 'avatar3.png', 'Jeruk', '12Ha', 'Jl Kuncingan', 'Majakencing', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_tanam_panen`
--

CREATE TABLE `form_tanam_panen` (
  `id_tanam_panen` int(5) NOT NULL,
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
  `id_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `form_tanam_panen`
--

INSERT INTO `form_tanam_panen` (`id_tanam_panen`, `desa`, `gambar_panen`, `komoditi`, `stok_tanam`, `tanggal_tanam`, `tanggal_panen`, `status_panen`, `hasil_panen`, `harga_panen`, `kondisi_panen`, `keterangan`, `id_anggota`) VALUES
(19, 'Sumber', 'prod-3.jpg', 'Biofarmaka', 5, '2021-05-10', '2021-05-13', 'Belum Panen', '6000', 1000, 'Baik', 'Baik tahan hama', 21),
(20, 'Sukapura', 'letter_B1.png', 'Kunyit', 7, '2021-06-02', '2021-06-03', 'Belum Panen', '120', 1250, 'Baik', 'Baik tahan hama', 20),
(21, 'Kuripan', 'letter_J1.png', 'Biofarmaka', 30, '2021-06-02', '2021-06-03', 'Belum Panen', '312', 2450, 'Baik', 'Baik tahan hama', 20),
(22, 'Leces', 'letter_A1.png', 'Biofarmaka', 22, '2021-06-12', '2021-06-12', 'Panen', '400', 13000, 'Fresh', 'Baik tahan hama', 20),
(23, 'Tegalsiwalan', 'letter_P.png', 'Kunyit', 42, '2021-06-12', '2021-06-13', 'Panen', '140', 15000, 'Fresh', 'Masih Segar dan utuh', 21);

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
  `id_anggota` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `status_bayar` int(11) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `rekening_pembayaran` varchar(255) DEFAULT NULL,
  `rekening_pelanggan` varchar(255) DEFAULT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_update` datetime DEFAULT NULL,
  `time` date DEFAULT NULL,
  `id_penjual` int(11) NOT NULL,
  `id_rekening` int(11) DEFAULT NULL,
  `tanggal_bayar` varchar(255) DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(9, 'file_1623258028.png', 'Biofarmaka', 'Kunyit');

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
  `atas_nama` varchar(256) NOT NULL,
  `nama_bank` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login_anggota`
--

INSERT INTO `login_anggota` (`id_anggota`, `id_akses`, `username`, `password`, `image`, `no_telp`, `alamat`, `no_rekening`, `atas_nama`, `nama_bank`, `date_created`) VALUES
(1, 'admin', 'imel', '123', 'file_1620166604.png', '087566234343', 'Jalan Puyuh', '0', '', '', 0),
(15, 'pembeli', 'viqih', '123', 'file_1620174270.png', '087566234111', 'JL Sundari RT 06', '0021987654541298', '', '', 1620147938),
(18, 'pembeli', 'feri', '123', 'file_1620173809.png', '087566237332', 'JL Macau Payau', '0007818134813415', '', '', 1620172239),
(20, 'petani', 'Ely99', '123', 'file_1620595051.png', '087566788900', 'JL Ely segundang', '0007818134541222', 'Ely Susilowati', 'BRI', 1620579027),
(21, 'petani', 'sagita77', '123', 'file_1620595226.png', '087566909876', 'JL Sagita segundang', '0007818134813415', 'Sagita Watiasih', 'BRI', 1620580959),
(41, 'pembeli', 'Fila', '123', 'default.png', '', '', '', '', '', 1623508306);

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
(5, '', 'Kunyit', '1455', '1005', '1215', '25005', 'Rp. 19.005', '20175', 0),
(6, '', 'Jahe', '1236', '1006', '1216', '26006', 'Rp. 19.006', '20176', 0);

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
(5, 'Kunyit', '343', '133', '453', '143', '23', '153', 'Rp. 16.663', '2023', 0),
(6, 'Kunyit', '344', '134', '454', '144', '23', '154', 'Rp. 17.884', '2024', 0);

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
(9, 'Sukapura', '120', '140', '230', '560', '2020', 0),
(10, 'Sumber', '121', '141', '231', '451', '2021', 0),
(11, 'Kuripan', '34', '41', '12', '34', '2017', 0);

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
(5, 'Kunyit', '452', '762', '342', '352', '172', 'Rp. 15.632', '23452', '2022', 0),
(6, 'Kunyit', '451', '761', '341', '351', '171', 'Rp. 15.631', '23451', '2021', 0),
(7, 'Kunyit', '4511', '76', '15', '351', '17', 'Rp. 1.454', '2555', '2019', 0);

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
  `total_harga` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `id_header_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indeks untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `daftar_pembeli`
--
ALTER TABLE `daftar_pembeli`
  MODIFY `id_pembeli` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_daftar_petani`
--
ALTER TABLE `data_daftar_petani`
  MODIFY `id_daftar_petani` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `form_tanam_panen`
--
ALTER TABLE `form_tanam_panen`
  MODIFY `id_tanam_panen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id_header_transaksi` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `id_tpadi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tanaman_sayuran`
--
ALTER TABLE `tanaman_sayuran`
  MODIFY `id_tsayur` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
