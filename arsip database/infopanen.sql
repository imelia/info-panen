-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 02:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(5) NOT NULL,
  `nama_akses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id_akses`, `nama_akses`) VALUES
(1, 'admin'),
(2, 'petani'),
(3, 'pembeli');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
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
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `nama_gambar`, `judul`, `sumber`, `tanggal`, `link`) VALUES
(1, 'file_1618336943.jpg', 'Darurat Petani Tahun 2063, Apa Kata Pakar?', 'Liputan 6', '2021-04-24', 'https://www.liputan6.com/regional/read/4530467/darurat-petani-tahun-2063-apa-kata-pakar'),
(2, '13265295544.jpg', 'Kesuburan Tanah Menurun, Kementan Turunkan Alokasi Pupuk Bersubsidi ', 'Kompas', '2021-04-30', 'https://money.kompas.com/read/2021/04/10/125233326/kesuburan-tanah-menurun-kementan-turunkan-alokasi-pupuk-bersubsidi'),
(3, '60238c6ba368e.jpg', 'Kepala Dinas di Malang Tersangkut Kasus Narkoba, Diberhentikan dan Tak Ada Bantuan Hukum, Ini Alasannya  ', 'Kompas', '2021-04-14', 'https://regional.kompas.com/read/2021/03/31/165354578/kepala-dinas-di-malang-tersangkut-kasus-narkoba-diberhentikan-dan-tak-ada');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pembeli`
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
-- Table structure for table `data_daftar_petani`
--

CREATE TABLE `data_daftar_petani` (
  `id_daftar_petani` int(5) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `komoditas` varchar(225) NOT NULL,
  `luas_sawah` varchar(255) NOT NULL,
  `alamat_sawah` varchar(255) NOT NULL,
  `desa_kelurahan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_daftar_petani`
--

INSERT INTO `data_daftar_petani` (`id_daftar_petani`, `ktp`, `komoditas`, `luas_sawah`, `alamat_sawah`, `desa_kelurahan`) VALUES
(1, 'file_1618345624.jpg', 'bawang merah', '12Ha', 'Desa Pekalen Barat Sungai Bapak Eri', 'Desa Maron Kidul');

-- --------------------------------------------------------

--
-- Table structure for table `form_tanam_panen`
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
  `harga_panen` varchar(255) NOT NULL,
  `kondisi_panen` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `no_briva` varchar(255) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `sebagai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_tanam_panen`
--

INSERT INTO `form_tanam_panen` (`id_tanam_panen`, `nama_petani`, `no_hp_petani`, `alamat_petani`, `desa`, `gambar_panen`, `komoditi`, `stok_tanam`, `tanggal_tanam`, `tanggal_panen`, `status_panen`, `hasil_panen`, `harga_panen`, `kondisi_panen`, `keterangan`, `no_briva`, `nama_bank`, `sebagai`) VALUES
(4, 'Sutri', '082330301301', 'Desa Maron Wetan Rt 15 Rw 02', 'Maron', 'file_1618346948.jpg', 'Tembakau', 4, '2021-04-15', '2021-05-08', 'panen', '5', '10000', 'bagus', 'produk hasilnya bagus dan tidak ada hama', '12345678910', 'BRI', 'petani'),
(9, 'Ely Sagita', '082330301301', 'Desa Maron Wetan Rt 15 Rw 02', 'Maron', 'cc01493c-6a04-4bea-b33d-3be0086c9f09_169.jpeg', 'Sayur', 0, '2021-04-23', '2021-05-28', 'panen', '11', '10000', 'bagus', 'produk hasilnya bagus dan tidak ada hama', '', '', ''),
(10, 'Imel', '082330301301', 'Desa Maron Wetan Rt 15 Rw 02', 'Maron', '1092541095.jpg', 'Biofarmaka', 0, '2021-04-16', '2021-04-24', 'Panen', '1', '12000', 'kurang bagus', 'kurang bagus karena dimakan hama', '', '', ''),
(11, 'Nizelia', '082330301301', 'Desa Maron Kidul Rt 18 Rw 05', 'Wonorejo', 'cabe_rawit_merah_mobile_product_4x.jpg', 'Sayur', 0, '2021-04-13', '2021-05-07', 'belum panen', '13', '26000', 'bagus', 'produk hasilnya bagus dan tidak ada hama', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
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
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `harga`, `komoditas`, `pasar`, `kecamatan`, `keterangan`, `tanggal_update`) VALUES
(1, 'Rp. 12.000', 'Buah', 'Pasar Gending', 'Gending', 'Naik', '2021-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `header_transaksi`
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
  `id_rekening` int(11) DEFAULT NULL,
  `tanggal_bayar` varchar(255) DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_transaksi`
--

INSERT INTO `header_transaksi` (`id_header_transaksi`, `id_user`, `id_anggota`, `jumlah_transaksi`, `jumlah_bayar`, `status_bayar`, `nama_pembeli`, `nama_produk`, `role`, `rekening_pembayaran`, `rekening_pelanggan`, `bukti_bayar`, `tanggal_post`, `tanggal_update`, `id_rekening`, `tanggal_bayar`, `nama_bank`) VALUES
(101, 0, 4, 22000, 22000, 1, 'viqih', 'Sayur', 3, '0007899967871212', 'Viqih Ari', 'Bambu_Runcing_128x128.png', NULL, '2021-04-20 16:26:49', 1, '20-10-2021', 'BCA'),
(105, 0, 4, 12000, 12000, 1, 'viqih', 'Sayur', 3, '0007109089105656', 'Viqih Adnria', 'Save-Button-PNG-Transparent-Photo2.png', NULL, '2021-04-20 16:31:36', 1, '20-04-2021', 'BCA'),
(106, 0, 1, 10000, 10000, 1, 'imel', 'Sayur', 1, '998686433221324', 'jhjh', '1.jpg', NULL, '2021-04-21 07:02:07', 1, '21-04-2021', 'imel'),
(107, 0, 1, 12000, 0, 0, 'imel', 'Biofarmaka', 1, NULL, NULL, NULL, NULL, '2021-04-27 14:20:58', NULL, NULL, NULL),
(108, 0, 1, 0, 0, 0, 'imel', 'Sayur', 1, NULL, NULL, NULL, NULL, '2021-04-27 18:22:24', NULL, NULL, NULL),
(109, 0, 4, 0, 0, 1, 'viqih', 'Sayur', 3, '998686433221324', 'Imelia Rosita', '41ec5b336751532fb3d678dfd7183725.png', NULL, '2021-04-28 07:43:12', 3, '28-04-2021', 'BRI'),
(110, 0, 4, 10000, 10000, 1, 'viqih', 'Tembakau', 3, '998686433221324', 'Imelia Rosita', 'a0876416b20f745dd09cd0c534dece36.jpg', NULL, '2021-04-28 08:18:55', 4, '28-04-2021', 'BRI');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(5) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
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
-- Table structure for table `komoditas`
--

CREATE TABLE `komoditas` (
  `id_komoditas` int(5) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama_komoditas` varchar(255) NOT NULL,
  `nama_tanaman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komoditas`
--

INSERT INTO `komoditas` (`id_komoditas`, `gambar`, `nama_komoditas`, `nama_tanaman`) VALUES
(1, 'file_1618349986.jpeg', 'Biofarmaka', 'Lengkuas'),
(2, 'file_1618350020.jpg', 'Biofarmaka', 'Kunyit'),
(3, 'file_1618350048.jpg', 'Buah', 'Melon'),
(4, 'file_1618350079.jpg', 'Buah', 'Semangka'),
(5, 'wortel.jpg', 'Sayuran', 'Wortel'),
(6, 'cc01493c-6a04-4bea-b33d-3be0086c9f09_169.jpeg', 'Sayuran', 'Bayam'),
(7, 'cabe_rawit_merah_mobile_product_4x.jpg', 'Sayuran', 'Cabai Rawit'),
(8, 'unnamed.png', 'Padi Palawija', 'Padi');

-- --------------------------------------------------------

--
-- Table structure for table `login_anggota`
--

CREATE TABLE `login_anggota` (
  `id_anggota` int(5) NOT NULL,
  `id_akses` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_anggota`
--

INSERT INTO `login_anggota` (`id_anggota`, `id_akses`, `username`, `password`) VALUES
(1, 'admin', 'imel', '123'),
(2, 'pembeli', 'imel', '1234'),
(4, 'pembeli', 'viqih', '123'),
(9, 'admin', 'Vina', '123'),
(10, 'petani', 'seli', '123');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
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

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `nomor_rekening`, `nama_pemilik`, `gambar`, `tanggal_post`, `sebagai`) VALUES
(1, 'BCA', '0007198920001776', 'Imelda Triyanti', NULL, '2021-04-27 18:12:29', 'petani'),
(2, 'BRI', '0021909010904512', 'Vila Nella', NULL, '2021-04-27 18:12:29', 'petani');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pemesanan_pembeli`
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
-- Table structure for table `status_panen`
--

CREATE TABLE `status_panen` (
  `id_status_panen` int(5) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_panen`
--

INSERT INTO `status_panen` (`id_status_panen`, `status`) VALUES
(1, 'belum panen'),
(2, 'panen');

-- --------------------------------------------------------

--
-- Table structure for table `status_pesan`
--

CREATE TABLE `status_pesan` (
  `id_status_pesan` int(5) NOT NULL,
  `status_pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tanaman_biofarmaka`
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
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanaman_biofarmaka`
--

INSERT INTO `tanaman_biofarmaka` (`id_tbiofarmaka`, `id`, `komoditi_biofarmaka`, `luas_panen`, `luas_tanam`, `provitas`, `produksi_biofarmaka`, `harga_biofarmaka`, `tahun`) VALUES
(3, '', 'Wortel', '11899', '1223', '134', '3000', 'Rp. 123', '2017'),
(4, '', 'Jahe', '12324', '12243', '1313', '4000', 'Rp. 12.334', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `tanaman_buah`
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
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanaman_buah`
--

INSERT INTO `tanaman_buah` (`id_tbuah`, `nama_tanaman`, `jumlah_tanaman`, `tanaman_baru`, `tanaman_menghasilkan`, `tanaman_produktif`, `produksi_buah`, `provitas`, `harga`, `tahun`) VALUES
(4, 'Kunyit', '131235', '1232435435', '2536455', '14235246', '1000', '142535', '8', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `tanaman_padi_palawija`
--

CREATE TABLE `tanaman_padi_palawija` (
  `id_tpadi` int(5) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `tanam` varchar(255) NOT NULL,
  `panen` varchar(255) NOT NULL,
  `provitas` varchar(255) NOT NULL,
  `produksi` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanaman_padi_palawija`
--

INSERT INTO `tanaman_padi_palawija` (`id_tpadi`, `nama_kecamatan`, `tanam`, `panen`, `provitas`, `produksi`, `tahun`) VALUES
(2, 'Bantaran', '134', '324', '1334', '100', '2016'),
(3, 'Leces', '8000', '12300', '12300', '5000', '2016'),
(4, 'Sumber', '1234', '1234', '122424', '2000', '2018'),
(8, 'Bantaran', '1200', '1200', '1500', '3000', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `tanaman_sayuran`
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
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanaman_sayuran`
--

INSERT INTO `tanaman_sayuran` (`id_tsayur`, `komoditi`, `luas_tanam`, `luas_panen`, `produksi_habis_dibongkar`, `produksi_belum_dibongkar`, `total`, `harga_min`, `harga_max`, `tahun`) VALUES
(3, 'Bawang Merah', '12', '11', '10', '1', '1.000', 'Rp. 6.000', 'Rp. 6.000', '2017'),
(4, 'Bayam', '123', '123', '123', '123', '1200', 'Rp. 12.000', '6000', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
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
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_anggota`, `id_produk`, `nama_product`, `harga`, `jumlah`, `total_harga`) VALUES
(81, 4, 3, 'Sayur', 12000, 1, 22000),
(82, 4, 4, 'Tembakau', 10000, 1, 22000),
(83, 4, 10, 'Biofarmaka', 12000, 1, 22000),
(84, 4, 4, 'Tembakau', 10000, 1, 22000),
(85, 4, 3, 'Sayur', 12000, 1, 12000),
(86, 1, 9, 'Sayur', 10000, 1, 10000),
(87, 1, 10, 'Biofarmaka', 12000, 1, 12000),
(88, 1, 3, 'Sayur', 0, 1, 0),
(89, 4, 3, 'Sayur', 0, 1, 0),
(90, 4, 4, 'Tembakau', 10000, 1, 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `daftar_pembeli`
--
ALTER TABLE `daftar_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `data_daftar_petani`
--
ALTER TABLE `data_daftar_petani`
  ADD PRIMARY KEY (`id_daftar_petani`);

--
-- Indexes for table `form_tanam_panen`
--
ALTER TABLE `form_tanam_panen`
  ADD PRIMARY KEY (`id_tanam_panen`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD PRIMARY KEY (`id_header_transaksi`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `komoditas`
--
ALTER TABLE `komoditas`
  ADD PRIMARY KEY (`id_komoditas`);

--
-- Indexes for table `login_anggota`
--
ALTER TABLE `login_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`),
  ADD UNIQUE KEY `nomor_rekening` (`nomor_rekening`);

--
-- Indexes for table `riwayat_pemesanan_pembeli`
--
ALTER TABLE `riwayat_pemesanan_pembeli`
  ADD PRIMARY KEY (`id_riwayat_pembeli`);

--
-- Indexes for table `status_panen`
--
ALTER TABLE `status_panen`
  ADD PRIMARY KEY (`id_status_panen`);

--
-- Indexes for table `status_pesan`
--
ALTER TABLE `status_pesan`
  ADD PRIMARY KEY (`id_status_pesan`);

--
-- Indexes for table `tanaman_biofarmaka`
--
ALTER TABLE `tanaman_biofarmaka`
  ADD PRIMARY KEY (`id_tbiofarmaka`);

--
-- Indexes for table `tanaman_buah`
--
ALTER TABLE `tanaman_buah`
  ADD PRIMARY KEY (`id_tbuah`);

--
-- Indexes for table `tanaman_padi_palawija`
--
ALTER TABLE `tanaman_padi_palawija`
  ADD PRIMARY KEY (`id_tpadi`);

--
-- Indexes for table `tanaman_sayuran`
--
ALTER TABLE `tanaman_sayuran`
  ADD PRIMARY KEY (`id_tsayur`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akses`
--
ALTER TABLE `akses`
  MODIFY `id_akses` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daftar_pembeli`
--
ALTER TABLE `daftar_pembeli`
  MODIFY `id_pembeli` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_daftar_petani`
--
ALTER TABLE `data_daftar_petani`
  MODIFY `id_daftar_petani` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form_tanam_panen`
--
ALTER TABLE `form_tanam_panen`
  MODIFY `id_tanam_panen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id_header_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `komoditas`
--
ALTER TABLE `komoditas`
  MODIFY `id_komoditas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login_anggota`
--
ALTER TABLE `login_anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `riwayat_pemesanan_pembeli`
--
ALTER TABLE `riwayat_pemesanan_pembeli`
  MODIFY `id_riwayat_pembeli` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_panen`
--
ALTER TABLE `status_panen`
  MODIFY `id_status_panen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_pesan`
--
ALTER TABLE `status_pesan`
  MODIFY `id_status_pesan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tanaman_biofarmaka`
--
ALTER TABLE `tanaman_biofarmaka`
  MODIFY `id_tbiofarmaka` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tanaman_buah`
--
ALTER TABLE `tanaman_buah`
  MODIFY `id_tbuah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tanaman_padi_palawija`
--
ALTER TABLE `tanaman_padi_palawija`
  MODIFY `id_tpadi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tanaman_sayuran`
--
ALTER TABLE `tanaman_sayuran`
  MODIFY `id_tsayur` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
