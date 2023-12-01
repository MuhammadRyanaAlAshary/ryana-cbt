-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2019 at 09:35 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `fullname`) VALUES
(1, 'ryana', '841cc63460b928b1025c9d9fa5482bc7', 'Ryana Alkatiri');

-- --------------------------------------------------------

--
-- Table structure for table `tb_calon_mahasiswa`
--

CREATE TABLE `tb_calon_mahasiswa` (
  `id_calon_mahasiswa` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `id_jurusan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `status_test` varchar(10) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_calon_mahasiswa`
--

INSERT INTO `tb_calon_mahasiswa` (`id_calon_mahasiswa`, `password`, `nama_lengkap`, `jenis_kelamin`, `id_jurusan`, `alamat`, `asal_sekolah`, `status_test`) VALUES
('TIF100920191', 'TIF100920191', 'Hamdan', 'l', 'TIF', 'Bogor', 'SMK Bogor', 'false'),
('TIF100920192', 'TIF100920192', 'Iqbal', 'l', 'TIF', 'Bandung', 'SMK Bandung', 'false'),
('TIF100920193', 'TIF100920193', 'Indra', 'l', 'TIF', 'Jakarta Barat', 'SMA Jakbar', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` varchar(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
('AKT', 'Akutansi'),
('ARS', 'Arsitektur'),
('IKM', 'Ilmu Komunikasi'),
('IKS', 'Ilmu Kesejahteraan Sosial'),
('ILH', 'Ilmu Hukum'),
('IPM', 'Ilmu Pemerintahan'),
('KEP', 'D3 Kepolisian'),
('MNJ', 'Manajemen'),
('PEA', 'Pendidikan Ekonomi Akutasi'),
('PGS', 'Pendidikan Guru Sekolah Dasar'),
('PMT', 'Pendidikan Matematika'),
('TEL', 'Teknik Elektro'),
('TID', 'Teknik Industri'),
('TIF', 'Teknik Informatika'),
('TSI', 'Teknik Sipil');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pilihan_jawaban`
--

CREATE TABLE `tb_pilihan_jawaban` (
  `id_pilihan_jawaban` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `pilihan_a` text NOT NULL,
  `pilihan_b` text NOT NULL,
  `pilihan_c` text NOT NULL,
  `pilihan_d` text NOT NULL,
  `pilihan_e` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pilihan_jawaban`
--

INSERT INTO `tb_pilihan_jawaban` (`id_pilihan_jawaban`, `id_soal`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `pilihan_e`) VALUES
(2, 1, 'Bachroedin Jusuf Habibie', 'Megawati Soekaro Putri', 'Ir. H Soekarno', 'Ir. H Djuanda', 'Jendral Soeharto'),
(3, 2, ' Bahasa mesin\r\n', ' Bahasa e-mail\r\n', 'Bahasa HTML\r\n', 'Bahasa Pascal\r\n', 'Bahasa Komputer'),
(4, 3, ' Keyboard\r\n\r\n', 'Monitor\r\n', 'Scanner\r\n', ' Modem\r\n', 'Mouse'),
(5, 4, 'System operasi\r\n', 'Program utilitas\r\n', 'Program aplikasi\r\n', 'Program paket\r\n', 'Bahasa pemrograman'),
(7, 5, 'UNIX\r\n', 'MS MICROSOFT\r\n', 'BIOS\r\n', 'MS WINDOWS\r\n', 'MS OFFICE'),
(8, 6, '.dat\r\n', '*.htm\r\n', '*.Ftp\r\n', '*.doc\r\n', ' 8.nml'),
(9, 7, 'Grafis bitmap dan raster\r\n', 'Grafis vector dan raster\r\n', 'Grafis raster dan grafis resolusi\r\n', 'Grafis bitmap dan grafis vector\r\n', 'Garis dan kurva'),
(10, 8, 'Akan terlihat pecah atau kabur\r\n', 'Akan terlihat makin jelas\r\n', 'Memiliki kemampuan untuk tidak pecah\r\n', 'Gradasi akan berkurang\r\n', 'Detail warna hilang'),
(11, 9, 'Tool zoom\r\n', 'Tool pick\r\n', 'Tool polygon\r\n', 'Tool rectangle\r\n', 'Tool ellips'),
(12, 10, 'Mengatur tampilan\r\n', 'Mengisi bidang dengan pilihan warna tertentu atau obyek isian tertentu\r\n', 'Memindahkan obyek\r\n', 'Membesarkan dan mengecilkan\r\n', 'Membuat tulisan yang sesuai dengan tulisan'),
(13, 11, 'Klik edit pilih properties\r\n', 'Klik edit pilih paste\r\n', 'Klik file pilih save\r\n', 'Klik file pilih new\r\n', 'Klik file pilih open'),
(14, 12, 'Sonique\r\n', 'Winamp\r\n', 'Xing\r\n', 'Cowon Jet Audio\r\n', 'Corel Photo Paint'),
(15, 13, 'Menghapus File\r\n', 'Membuat duplikat file\r\n', 'Memainkan file dalam album management\r\n', 'Mengurutkan file\r\n', 'Mencari file'),
(16, 14, 'Backspace\r\n', 'Page Up\r\n', 'Alt\r\n', 'Page Down\r\n', 'Shift'),
(17, 15, 'By file name\r\n', 'By file extension\r\n', 'By description\r\n', 'By folder\r\n', 'Shuffle'),
(18, 16, 'Format > side design dari menu bar > pilih template > dan klik apply\r\n', 'Format > slide layout dari menu bar, pilih layout yang diinginkan dan klik apply\r\n', 'Slide show > hide slide\r\n', 'Slide show > View show > klik next\r\n', 'Insert > slide number > klik from file'),
(19, 17, 'Bahasa mesin\r\n', 'Bahasa e-mail\r\n', 'Bahasa HTML\r\n', 'Bahasa Pascal\r\n', 'Bahasa Komputer'),
(20, 18, 'Keyboard\r\n', 'Monitor\r\n', 'Scanner\r\n', 'Modem\r\n', 'Mouse'),
(21, 19, '1), 2) dan 3)', '1), 2) dan 4)\r\n\r\n', '2), 3) dan 4)\r\n\r\n', '2), 4) dan 5)\r\n\r\n', '3), 4) dan 5)'),
(22, 20, 'Bank Indonesia\r\n\r\n', 'bank umum milik swasta asing\r\n\r\n', 'bank koperasi\r\n\r\n', 'bank perkreditan\r\n\r\n', 'bank daerah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `jawaban` varchar(11) NOT NULL,
  `type_soal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_soal`
--

INSERT INTO `tb_soal` (`id_soal`, `soal`, `jawaban`, `type_soal`) VALUES
(1, 'Siapakah presiden Ke 3 RI ?', 'A', 'PANCASILA'),
(2, 'Bahasa yang digunakan secara default pada aplikasi Front Page adalah', 'C', ''),
(3, 'Berikut ini yang termasuk perangkat input sekaligus output pada komputer adalah', 'C', ''),
(4, 'Perangkat lunak komputer yang berfungsi sebagai perangkat pemelihara komputer seperti anti-virus, partisi harddisk dan lain-lain termasuk klasifikasi', 'A', ''),
(5, 'Salah satu system operasi (operating system) yang mulai banyak digunakan karena merupakan Open Source dan dapat diperoleh tanpa membayar (tinggal download di internet) adalah ….', 'E', ''),
(6, 'Tampilan halaman pada aplikasi Front Page dengan posisi normal memiliki ekstension ….', 'A', ''),
(7, 'Secara garis besar, desain grafis terbagi menjadi 2 jenis yaitu….', 'C', ''),
(8, 'Apabila image bitmap diperbesar melebihi kemampuan maksimalnya, maka hasilnya adalah ….', 'A', ''),
(9, 'Untuk membesarkan dan mengecilkan tampilan, tool yang dipergunakan adalah ….', 'D', ''),
(10, 'Fill tool adalah alat dari program aplikasi CorelDRAW yang dipergunakan untuk ….', 'A', ''),
(11, 'Setiap pekerjaan yang telah kita buat tentu harus disimpan. Cara menyimpan hasil kerja dimulai dengan ….', 'E', ''),
(12, 'Program aplikasi untuk menjalankan editing suara, gambar, ataupun video banyak sekali diantaranya berikut ini, kecuali….', 'E', ''),
(13, 'Menu Tool, kemudian pilih file copy adalah perintah untuk ….', 'B', ''),
(14, 'Untuk berpindah slide berikutnya dalam melakukan presentasi tombol yang digunakan adalah ….', 'D', ''),
(15, 'Untuk melakukan pengurutan sesuai dengan nama extensi file, maka harus dipilih …', 'B', ''),
(16, 'Untuk mengubah tampilan tata letak slide, langkahnya adalah ….\r\n', 'A', ''),
(17, 'Bahasa yang digunakan secara default pada aplikasi Front Page adalah ….', 'C', ''),
(18, 'Berikut ini yang termasuk perangkat input sekaligus output pada komputer adalah ….', 'C', ''),
(19, 'Fungsi dari bank adalah sebagai berikut:\r\n\r\n1) Menyediakan jasa perbankan.\r\n\r\n2) Menghimpun dana dari masyarakat dalam bentuk simpanan.\r\n\r\n3) Mengatur dan menjaga sistem pembayaran.\r\n\r\n4) Memberi pinjaman atau kredit kepada masyarakat.\r\n\r\n5) Mengatur dan mengawasi bank di Indonesia.\r\n\r\nPernyataan yang merupakan fungsi dari bank umum adalah ....', 'A', ''),
(20, 'Untuk mengeluarkan dan mengedarkan uang rupiah serta mencabut, menarik dan memusnahkan dari peredaran merupakan tugas wewenang dari ....', 'D', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_test_jawaban`
--

CREATE TABLE `tb_test_jawaban` (
  `id_tb_test_jawaban` int(11) NOT NULL,
  `id_calon_mahasiswa` varchar(100) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_type_soal`
--

CREATE TABLE `tb_type_soal` (
  `id_type_soal` int(11) NOT NULL,
  `type_soal` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_type_soal`
--

INSERT INTO `tb_type_soal` (`id_type_soal`, `type_soal`, `keterangan`) VALUES
(1, 'TEST_LOGIKA_ARITMATIKA', 'Selesaikanlah deret-deret ini dengan memilih salah satu jawaban yang tepat.'),
(2, 'SINONIM', 'Pilihlah satu jawaban yang mempunyai arti sama atau paling dekat dengan arti kata yang dicetak dengan huruf kapital'),
(3, 'ANTONIM ', 'Pilihlah satu jawaban yang mempunyai lawan kata dengan huruf kapital'),
(4, 'PADANAN_KATA ', 'Pilihlah satu jawaban yang mempunyai padanan kata yang tepat untuk dari soal'),
(5, 'TEST_MATEMATIKA_DASAR', 'Isilah Jawaban Dengan tepat'),
(6, 'PANCASILA', 'jawabanlah pilihan ganda di bawah ini dengan benar !\r\nMATERI : PANCASILA DAN UUD 1945'),
(7, 'BAHASA_INGGRIS ', 'jawabanlah pilihan ganda di bawah ini dengan benar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_calon_mahasiswa`
--
ALTER TABLE `tb_calon_mahasiswa`
  ADD PRIMARY KEY (`id_calon_mahasiswa`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_pilihan_jawaban`
--
ALTER TABLE `tb_pilihan_jawaban`
  ADD PRIMARY KEY (`id_pilihan_jawaban`);

--
-- Indexes for table `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tb_test_jawaban`
--
ALTER TABLE `tb_test_jawaban`
  ADD PRIMARY KEY (`id_tb_test_jawaban`);

--
-- Indexes for table `tb_type_soal`
--
ALTER TABLE `tb_type_soal`
  ADD PRIMARY KEY (`id_type_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pilihan_jawaban`
--
ALTER TABLE `tb_pilihan_jawaban`
  MODIFY `id_pilihan_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_test_jawaban`
--
ALTER TABLE `tb_test_jawaban`
  MODIFY `id_tb_test_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `tb_type_soal`
--
ALTER TABLE `tb_type_soal`
  MODIFY `id_type_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
