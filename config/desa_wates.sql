-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 05:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa_wates`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `user_admin` varchar(15) NOT NULL,
  `pass_admin` varchar(32) NOT NULL,
  `id_aparat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `user_admin`, `pass_admin`, `id_aparat`) VALUES
(11, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `aparat`
--

CREATE TABLE `aparat` (
  `id_aparat` int(5) NOT NULL,
  `nama_aparat` varchar(50) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `priode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aparat`
--

INSERT INTO `aparat` (`id_aparat`, `nama_aparat`, `foto`, `jabatan`, `priode`) VALUES
(1, 'SEPTI ERLY WAHYUNI', 'septi.png', 'Kepala Dusun VIII', '2019-2024'),
(3, 'SUYAT', 'suyat.jpg', 'Kepala Dusun VII', '2019-2024'),
(4, 'MUSTAFA KAMIL. SE', 'mustafa.png', 'Kepala Dusun VI', '2019-2024'),
(5, 'KARSIMAN', 'karsiman.png', 'Kepala Dusun V', '2019-2024'),
(6, 'SUPOYO', 'supoto.png', 'Kepala Dusun IV', '2019-2024'),
(7, 'DEWI MUNINGGAR', 'dewi.png', 'Kepala Dusun III', '2019-2024'),
(8, 'BASTIAN PRANA JAYA', 'prana.png', 'Kepala Dusun II', '2019-2024'),
(9, 'HENRIX APRIRIA VALENTINE', 'henrix.png', 'Kepala Dusun I', '2019-2024'),
(10, 'ENDANG WIJIATI', 'endang.png', 'ENDANG WIJIATI', '2019-2024'),
(11, 'SUPRIYANTO', 'supriyanto.png', 'Kepala Urusan Umum ', '2019-2024'),
(12, 'EMSIYATI', 'emsiyati.png', 'Kepala Seksi Pelayanan', '2019-2024'),
(13, 'INDRA SETIAWAN', 'indra.png', 'Kepala Seksi Kesejahteraan', '2019-2024'),
(14, 'LUHUR HANTARIKSA JAYA', 'luhur han.png', 'Kepala Seksi Pemerintahan', '2019-2024'),
(15, 'IKA RATNASARI', 'ika r.png', 'Sekretaris Kampung', '2019-2024'),
(16, 'WAHYU BINTORO', 'wahyu b.png', 'Kepala kampung', '2019-2024');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `gambar_berita` varchar(150) NOT NULL,
  `tanggal_berita` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_aparat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `id_kategori`, `gambar_berita`, `tanggal_berita`, `id_aparat`) VALUES
(8, 'Mewujudkan Kampung Sehat di Bidang Kawasan Pemukiman', '<p>Dalam rangka mewujudkan Kampung Sehat dan Program Pelaksanaan Pembangunan Kampung Sub Bidang Kawasan Pemukiman maka Kampung kami saat ini membantu masyarakat dalam pembuatan WC Sehat, dari total 15 unit WC yang kami rencanakan saat ini masih berjalan 4 unit dan akan di kerjakan secara bertahap menyesuaikan anggaran Kampung karena tidak mungkin kita laksanakan secara keseluruhan semua kegiatan pembangunan tersebut.&nbsp;</p>\r\n\r\n<p>Untuk Pembangunan tahap pertama ini baru 4 Kepala Keluarga yang menerima yaitu dari Dusun I 2 KK yaitu Bapak Madsanuri dan Bapak Udin sedangkan Dusun VI 2 KK yaitu Bapak Sugio dan Bapak Imam, hal ini bertujuan agar masyarakat dapat hidup lebih sehat lagi di lingkungan Kampung. Dan ini juga merupakan program dari Dinas Kesehatan untuk pencegahan Stunting di kawasan pemukiman penduduk, sehingga terciptanya lingkungan yang sehat dan tidak tercemar polusi udara .</p>\r\n\r\n<p>Masyarakat juga menyambut dengan senang program Kampung untuk membuat kawasan pemukiman yang lebih sehat dengan adanya pembangunan WC ini, dan selanjutnya Kampung Wates juga akan merencanakan pembuatan WC umum di lingkungan Pasar Wates, selain akan membuat lingkungan Pasar lebih bersih diharapkan juga dapat menyerap tanaga kerja untuk pengelolaan WC terutama untuk disekitar Pasar tersebut.&nbsp;</p>\r\n\r\n<p>Selain itu Pemerintahan Kampung juga mengarapkan partisipasi dari masyarakat untuk mendukung program-program Kampung yang sudah di anggarkan melalui RPJM-Kamp Tahun Anggaran 2017-2022. Karena tanpa adanya dukungan dari masyarakat program Kampung yang sudah di rencanakan tidak akan bisa berjalan dan mencapai hasil dengan maksimal hal ini juga tidak lepas dari peran serta aparatur Kampung baik dari Kepala Dusun sampai ke ketua RT dalam hal sosialisi kepada masyarakat terutama di lingkungan tempat tinggal masing-masing.&nbsp;</p>\r\n', 1, 'kampung sht.jpg', '2021-02-11 14:06:58', 14),
(9, 'Sebagian Pembangunan yang Sudah Terealisasi', '<p>Dalam rangka untuk peningkatan pelayanan terhadap masyarakat Kampung maka Pemerintahan Kampung membenahi dalam segi infrastruktur maupun aplikasi sehingga akan lebih mempermudah lagi dalam berbagai segi pelayanan hal ini juga yang memacu Pemerintahan Kampung lebih mudah dalam pendataan masyarakat karena sudah menggunakan sistem komputerisasi ditingkat Pemerintahan Kampung.</p>\r\n\r\n<p>dan juga selain itu slogan Kepala Kampung Wates Bapak Wahyu Bintoro adalah pelayanan satu surat kurang dari 5 (lima) menit dalam pengerjaannya sehingga masyarakat tidak terlalu lama menunggu. di tambah dengan kondisi pandemi saat ini mengurangi keruman masa.&nbsp;</p>\r\n', 1, 'gsg.jpg', '2021-02-11 14:09:24', 16),
(10, 'Sosialisasi Penggunaan Masker', '<p>Dewasa ini banyak kasus penambahan virus corona di berbagai daerah baik dari tingkat kampung, kecamatan, kabupaten bahkan ditingkat propinsi sekalipun tiap harinya daftar pasien yang terjangkit virus corona selalu meningkat khususnya untuk di wilayah Lampung Tengah sendiri pertanggal kemarin sudah 91 pasien yang tercatat positif mengidap virus corona. Maka dari pada itu Kampung Wates bersama dengan Camat Bumi Ratu Nuban beserta FORKOMPIMCAM kemarin hari Rabu, 23 September 2020 telah melakukan sosialisasi tentang wajib penggunaan masker di lingkungan pasar Wates dengan sasaran para pedagang dan juga pembeli yang sering tidak mentaati peraturan wajib menggunakan masker. Selain itu juga menjaga agar kegiatan jual beli di pasar Wates tidak menjadi klester dalam penyebaran virus corona ini, dan kedepannya pemerintahan Bumi Ratu Nuban khususnya Kampung Wates akan sering mengadakan razia masker di mana barang siapa yang kedapatan tidak memakai masker akan diberi sangsi baik berupa sangsi bersih - bersih lingkung sampai sangsi fisiki ( push up atau skotjump ) atau dengan sangsi materi sebesar Rp. 250.000,-.</p>\r\n\r\n<p>Hal ini bertujuan agar seluruh masyarakat Kampung Wates khusus nya sadar akan bahaya dan efek samping dari virus corona ini jangan jadikan banyak alasan entah itu kawan dekat bahkan saudara, karena virus ini tidak mengenal status dan juga siapa orangnya. Maka Kepala Kampung Wates Bapak Wahyu Bintoro sering berpesan kepada warga Kampung agar selalu taat dalam menggunakan masker untuk memutus tali penyebaran virus corona ini. Bahkan barang siapa yang telah melakukan perjalanan jauh atau keluar kota bahkan keluar propinsi hendaknya melaporkan kepada petugas Puskesmas dan segera melakukan isolasi mandiri di rumah karena seandainya&nbsp; mereka tidak mau Kepala Kampung Wates sudah menyiapkan tempat isolasi mandiri di gudang SMK N 1 Bumi Ratu Nuban.</p>\r\n', 1, 'masker.jpg', '2021-02-11 14:13:19', 16);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'berita'),
(2, 'agenda');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(5) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_pengirim`, `email`, `subject`, `pesan`) VALUES
(1, 'regg', 'eeeeee', 'fffff', 'jdefhudhf sdjfu'),
(2, 'tr', 'regita.beningkusuma@gmail.com', 'fff', ' XXX');

-- --------------------------------------------------------

--
-- Table structure for table `potensi`
--

CREATE TABLE `potensi` (
  `id_potensi` int(5) NOT NULL,
  `nama_potensi` varchar(20) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `gambar_potensi` varchar(150) NOT NULL,
  `id_aparat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potensi`
--

INSERT INTO `potensi` (`id_potensi`, `nama_potensi`, `jumlah`, `gambar_potensi`, `id_aparat`) VALUES
(5, 'Pertanian', 'Total luas lahan: 357 Ha', 'pertanian.jpg', 8),
(6, 'Peternakan', 'total hewan ternak : 1579 ', 'ternak.jpg', 8),
(7, 'Perikanan', 'Tambak Ikan : 6 Ha            ', 'nila.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `profil_wilayah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `id_aparat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `profil_wilayah`, `visi`, `misi`, `id_aparat`) VALUES
(1, '<h3><span style=\"font-size:14px\">Berdirinya dan bukaannya pada tahun 1936 yang dirintis oleh Alm. Buang, Musiro, sarwi, jamari dan beberapa orang terdahulu. Pada saat itu Wates masih menginduk pada Kampung Gunung Sugih, Kawedanan Way Seputih Kabupaten Lampung Tengah yang merupakan sebagian masih hutan, sebagian kebun lada, kebun kopi, yang dimiliki oleh orang &ndash; orang dari umbul terdekat antara lain :</span></h3>\r\n\r\n<p>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Umbul Kebagusan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Umbul Perigi</p>\r\n\r\n<p>3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Umbul Kucing Temanggung</p>\r\n\r\n<p>4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Umbul Kota kalong</p>\r\n\r\n<p>5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Umbul gunung Sugih</p>\r\n\r\n<p>6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Umbul tulung kapas</p>\r\n\r\n<p>7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Umbul Ati Bumi</p>\r\n\r\n<p>8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Umbul Wates</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Umbul Wates saat itu disebut Kampung Sukajawa kemudian dengan perubahan jaman,aslinya jaman dulu Wates ini adalah namanya Perigi. Umbul-umbul tersebut merupakan wilayah dari beberapa Kampung dan beberapa Kecamatan yaitu : Kecamatan Sukadana, Kecamatan terbanggi Besar, Kecamatan Gunung Sugih, yang meliputi Kampung Induk antara lain : Kampung Terbanggi Agung, Terbanggi Subing, Kampung Komering Agung, Kampung Komering Putih,&nbsp; kampung&nbsp; fajar&nbsp; Bulan, Kampung&nbsp; gunung Sugih dan Kampung gunung Sugih pasar.</p>\r\n\r\n<p>Sehubungan dengan Perkembangan jaman dengan turunnya harga lada, maka kebun lada dibiarkan sehingga begitu saja akhirnya berubah menjadi Repong / Kebun diantaranya Durian, Nangka, Cempedak, Duku, Petai, Jengkol dan lain-lain.Kemudian satu persatukebun tersebut ditinggalkan oleh pemiliknya yang masing-masing asalnya.</p>\r\n\r\n<p>Pada Tahun 1946 terjadi perpindahan penduduk kembali dari beberapa tempat yang sebagian besar penduduknya terdiri dari Suka jawa yang telah lama tinggal di darah Lampung sehingga akhirnya pada tahun 1946 Wates menjadi Desa Susukan dengan nama PERIGI yang dipecah dari Kampung Induk yaitu Kampung Gunung Sugih Pasar.Adapun Kepala Suku pada saat itu pada Tahun 1947 dijabat oleh Bapak SARWI dan Jumlah KK : 800 KK dan Jumlah Penduduk 4.500 Orang.</p>\r\n\r\n<p>Kemudian pada Tahun 1951 karena Susukan Wates / Perigi yang telah dipecah / dimekarkan maka diadakan Pemilihan Kepala Kampung dengan 2 ( dua )orang calon yaitu :</p>\r\n\r\n<ol>\r\n	<li>SARWIK</li>\r\n	<li>MINUN</li>\r\n</ol>\r\n\r\n<p>Maka setelah Pemilihan , terpilihlanh Bapak SARWIK oleh masyarakat kemudian sejak Pemilihan itu Kampung Wates menjadi Kampung Definitif sedangkan kampung Sukajawa yang tadinya masih menginduk pada Kampung Gunung Sugih, Kampung yang memisahkan diri, Kampung Sukajawa dengan nama Susukan Sukajawa ,Kemudiah yang tadinya Perigi diganti dengan Kampung Wates dengan mempunyai wilayah kerja pada saat itu antara lain :</p>\r\n\r\n<ol>\r\n	<li>Dusun Bedeng Empat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 6. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dusun Umbul Rakaat</li>\r\n	<li>Dusun Kebagusan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 7. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dusun Banyuwangi</li>\r\n	<li>Dusun Tulung Meraksa &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dusun Tulung Kapas</li>\r\n	<li>Dusun Margo Dadi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dusun Karang Rejo</li>\r\n	<li>Dusun Sri Mulyo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; 10.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dusun Kucing Temanggung</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kemudian pada Tahun 1956 diadakan Pemilihan Kepala Kampung&nbsp; dengan 2 ( dua ) orang calon Pemilihan Kepala Kampung tahun 1951 yaitu : SARWIK dan MINUN.Maka setelah diadakan Pemilihan Kembali Bapak SARWIK terpilih menjadi Kepala Kampung Wates lagi dengan wilayah kerja seperti tahun 1951 yaitu 10 Dusun, KK yang semula 800 menjadi 900 KK dan penduduk menjadi 4.500 orang / jiwa. Kemudian pada Tahun 1968 diadakan pemilihan kembali, Pemilihan Kepala Desa dengan 3 ( tiga ) orang calon yaitu :</p>\r\n\r\n<ol>\r\n	<li>MANGKU DIHARJO</li>\r\n	<li>KUSNUN</li>\r\n	<li>BUNYAMIN</li>\r\n</ol>\r\n\r\n<p>Sedangkan Kepala Kampung lama ( Bapak SARWIK ) mengundurkan diri dikarenakan usianya.Selanjutnya setelah diadakan Pemilihan maka terpilihlah Bapak MANGKU DIHARJO sebagai Kepala Desa Wates yan</p>\r\n\r\n<p>&nbsp;g masih mempunyai Wilayah kerja 10 Dusun dengan KK 900 dan penduduk 4.700 orang/jiwa.</p>\r\n\r\n<p>Pada tahun yang sama beberapa bulan saja Bapak Mangku Diharjo menjabat Kepala Desa turun instruksi dari Daerah bagi&nbsp; desa yang terluas diadakan Pemekaran Wilayah termasuk Desa Wates terkena pemekaran sehingga dari 10 wilayah kerja hanya tinggal 1 wilayah kerja / dusun sedangkan yang tiga wilayah kerja sebagian&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.Desa Bumiratu Jumlah KK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 350</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.Desa Sukajawa Jumlah KK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 200</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.Desa Sidokerto&nbsp; jumlah KK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 150</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sehingga wilayah kerja Desa Wates 200 KK dengan Luas Wilayah 350 H.</p>\r\n\r\n<p>Pada Tahun yang sama pula Kepala Desa Wates Bapak MANGKU DIHARJO&nbsp; karena sesuatu hal diberhentikan dari&nbsp; Jabatannya sebagai Kepala Desa Wates , kemudian atas dasar Keputusan Rapat LMD dan tokoh Masyarakat , Sdr.HASIM MAKRUP sebagai Pjs.Kepala Desa Wates tepatnya tahun 1972.Selanjutnya belum satu Tahun karena sesuatu hal HASIM MAKRUP diberhentikan oleh Bupati Tingkat II Lampung Tengah sebagai Pjs, kemudian diadakan Pemilihan Kepala Desa.Terpilihlah Sdr.SUWANDI S sebagai Kepala Desa Wates.</p>\r\n\r\n<p>Beberapa tahun kemudian Bapak SUWANDI S menjabat Kepala Desa Wates mendapat musibah kecelakaan Lalu Lintas Jalan Raya sehingga Beliau meninggal dunia, Kemudian atas kesepakatan LMD dan Tokohn Masyarakat , bapak ALM BATIN HASAN dipercayakan menjabat Pjs Kepala Desa Wates. Kemudian pada tahun 1982 diadakan Pemilihan Kepala Desa dengan 2 ( dua ) orang Calon yakni : ALAM BATIN HASAN dan ARBAIN, Maka terpilihlah Bapak ALAM BATIN HASAN Sebagai Kepala Desa terpilih sampai Tahun 1990.Kemudian diangkat Pjs. Bapak M SOHARI .Pada Tahun 1990 diadakan Pemilihan Kepala Desa dengan calon Tunggal Bapak SUMINTO MELAWAN Kotak Kosong dan terpilihlah Bapak SUMINTO sebagai Kepala Desa Wates sampai tahun 1999.</p>\r\n\r\n<p>Kemudian pada tahun 1999 &ndash; 2001 dijabat oleh Bapak M SOHARI sebagai Pjs Kepala Desa Wates.Kemudian Tahun 2001 iadakan Pemilihan Kepala Desa dengan 2 ( dua ) orang Calon yaitu Bapak SUMINTO dan NARYANTO.Terpilihlah Bapak NARYANTO sebagai Kepala Desa Wates, selanjutnya Bapak NARYANTO setelah 6 Bulan menjabat sebagai Kepala Desa Melarikan diri karena menggelapkan Mobil Waskita Karya, untuk mengisi kekosongan oleh Bapak Camat atas nama Bupati ditunjuk Bapak M SOHARI sebagai Pjs Kepala Desa Wates dari Tahun 2001 &ndash; 2003.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Selanjutnya pada tahun yang sama diadakan Pemilihan Kepala Kampung kembali dengan 2 ( dua ) orang Calon yaitu&nbsp; Bapak WAHYU BINTORO dan Bapak SUMINTO, pada saat itu terpilihlah Bapak WAHYU BINTORO dengan suara mutlak, dengan masa bakti Tahun 2003 &ndash; 2008 ( 5 Tahun ).</p>\r\n\r\n<p>Kemudian pada Tahun 2008 Bapak WAHYU BINTORO habis masa baktinya kemudian diadakan Pemilihan Kepala Kampung kembali pada Tahun 2008, dengan ( tiga ) 3 Calon yaitu : Bapak SUMINTO, Bapak Drs.FATHONI dan Bapak SAHRI ISKANDAR , maka terpilihlah Bapak SAHRI ISKANDAR sebagai Kepala Kampung Wates masa bakti 2008 &ndash; 2014.Karena masa Jabatan Bapak SAHRI ISKANDAR berakhir maka untuk mengisi kekosonga Kepala Kampung Wates , maka pada tanggal 31 Maret 2015 diangkat oleh Bupati Lampung Tengah Bapak MIRSEPTOWI S.IP,MM yang juga saat itu menjabat sebagai Camat Bumiratu Nuban sebagai PJ Kepala Kampung Wates.</p>\r\n\r\n<p>Pada tanggal 24 maret 2016 diadakan Pemilihan Kepala Kampung dengan 2 ( dua ) orang Calon yaitu : Bapak HERMANTO alias KASTURIK dan Bapak WAHYU BINTORO,maka terpilihlah Bapak WAHYU BINTORO sebagai Kepala Kampung Wates masa Bakti 6 tahun ( 2016 &ndash; 2025 ) dengan mempunyai Wilayah Kerja 8 Dusun&nbsp; dan Jumlah Perangkat Kampung 14&nbsp; orang dan KK&nbsp; : 957 KK dan Jumlah Penduduk total 3.601 orang / jiwa dari Laki-laki : 1.853 orang dan Perempuan&nbsp; : 1.748 orang.</p>\r\n\r\n<p>Saat ini Kampung Wates membawahi &nbsp;8&nbsp; ( delapan ) dusun yaitu :</p>\r\n\r\n<ol>\r\n	<li>Dusun I dengan nama dusun Perigi</li>\r\n	<li>Dusun II dengan nama dusun Dwi Mulya</li>\r\n	<li>Dusun III dengan nama dusun Tri Rahayu</li>\r\n	<li>Dusun IV dengan nama dusun Sri Rejo</li>\r\n	<li>Dusun V dengan nama dusun Karang Rejo</li>\r\n	<li>Dusun VI dengan nama dusun Banyuwangi</li>\r\n	<li>Dusun VII dengan nama dusun Bumirejo</li>\r\n	<li>Dusun VIII dengan nama dusun Karang Sembung</li>\r\n</ol>\r\n', '<p><strong>Visi Kampung</strong></p>\r\n\r\n<p><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em></p>\r\n\r\n<p><strong><em>&ldquo;</em></strong><strong><em>MEWUJUDKAN KAMPUNG WATES MENJADI KAMPUNG YANG MANDIRI DAN SEJAHTERA</em></strong><strong><em>&rdquo;</em></strong></p>\r\n\r\n<p>Rumusan Visi tersebut merupakan suatu ungkapan dari suatu niat yang luhur untuk memperbaiki dalam Penyelenggaraan Pemerintahan dan Pelaksanaan Pembangunan di Kampung Wates baik secara individu maupun kelembagaan sehingga 6 ( enam ) tahun Kampung Wates mengalami suatu&nbsp;&nbsp; yang lebih baik dan peningkatan kesejahteraan masyarakat dilihat dari segi ekonomi dengan dilandasi semangat kebersamaan dalam Penyelenggaraan Pemerintahan dan Pelaksanaan Pembangunan.</p>\r\n\r\n<p>Dalam kontek perubahan yang bergerak cepat akibat globalisasi dan implementasi otonomi daerah, menuntut setiap Kampung untuk mampu merancang program pembangunan yang jelas komperhensif dan berkelanjutan. Sehingga dapat mendapatkan potensi dan peluang yang ada serta mengantisipasi dinamika perubahan ekonomi, sosial dan budaya masyarkat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pernyataan visi merupakan pandangan jauh kedepan dan merupakan cita-cita yang ingin dicapai suatu pemerintah Kampung kedepan disususn dengan mempertimbangkan gagasan, ide, informasi dan identifikasi. Yakni pemikiran tentang kemungkinan yang akan terjadi di masa depan serta memperhatikan keinginan masyarakat dalam membangun Kampung.</p>\r\n\r\n<p>Beberapa alasan dan kesepakatan tentang perlunya visi Kampung Wates tahun 2016-2025 adalah :</p>\r\n\r\n<ol>\r\n	<li>Adanya kebutuhan untuk mengendalikan cita-cita dan keinginan masyakat. Visi pada dasarnya mencerminkan apa yang ingin dicapai oleh sebuah Kampung. Fungsi visi dalam hal ini sebagai kendali sehingga memiliki arah yang jelas dalam membangun kampung.</li>\r\n	<li>Adanya kebutuhan untuk mengeksploitasi kesempatan untuk mengatasi tantangan baru. Visi akan mengarahkan langkah koperatif kampung dalam mengantisipasi perubahn lingkungan yang mengharuskan kajian ulang strategi kampung.</li>\r\n	<li>Adanya kebutuhan terhadap visi bersama, dan merasa sebagai sebuah kesatuan. Visi merupakan perekat yang menyatukan gagasan strategi sehingga dapat menimbulkan saling pengertian dalam merumuskan peran dan fungsi masing-masing jajaran dalam mewujudkan cita-cita kampung.</li>\r\n</ol>\r\n\r\n<p>Berdasarkan kebutuhan-kebutuhan diatas maka visi Kampung Wates ditetapkan adalah <strong>Terwujudnya Kampung Wates yang Tertib, Sejahtera, Nyaman, Aman, Maju, Mandiri dan Berintegritas.</strong></p>\r\n\r\n<p>Visi tersebut mengandung 7 (tujuh) kata yang menjadi fokus utama dalam pembangunan Kampung Wates yaitu :</p>\r\n\r\n<ol>\r\n	<li><strong>Tertib </strong></li>\r\n</ol>\r\n\r\n<p>Suatu kondisi yang mengedepankan ketertiban baik di bidang pelayanan administrasi keuangan serta tertib dalam lingkungan masyarakat.</p>\r\n\r\n<ol start=\"2\">\r\n	<li><strong>Sejahtera </strong></li>\r\n</ol>\r\n\r\n<p>Suatu kondisi terpenuhinya kebutuhan pokok masyakat sandang, pangan dan papan serta kebutuhan untuk mendapatkan pendidikan dan pelayanan kesehatan yang layak.</p>\r\n\r\n<ol start=\"3\">\r\n	<li><strong>Nyaman </strong></li>\r\n</ol>\r\n\r\n<p>Suatu kondisi dimana masyarakat dalam beraktifitas ada rasa kedamaian dan kesejukan serta ketentraman berdasarkan supermasi hukum yang berkeadilan yang terjamin.</p>\r\n\r\n<ol start=\"4\">\r\n	<li><strong>Aman </strong></li>\r\n</ol>\r\n\r\n<p>Suatu kondisi yang menjamin terciptanya suasana yang kondusif serta terhindar dari ancaman Tantangan, Hambatan dan Gangguan ( ATHG )</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>untuk itu perlu adanya sistem keamanan lingkungan melalui ronda di masing-masing lingkungan / Dusun/ RT</p>\r\n\r\n<ol start=\"5\">\r\n	<li><strong>Maju </strong></li>\r\n</ol>\r\n\r\n<p>Suatu kondisi yang menggambarkan tinggi kualitas Sumber Daya Manusia (SDM) tingginya tingkat perkembangan ekonomi dan kemakmuran, berkembangnya sektor usaha, serta memiliki sistem kelembagaan dan hukum yang mantap</p>\r\n\r\n<ol start=\"6\">\r\n	<li><strong>Mandiri </strong></li>\r\n</ol>\r\n\r\n<p>Suatu kondisi dimana masyarakat mempunyai hak dan kesempatanm yang sama untuk berusaha dan bertkarya dengan memanfaatkan potensi dan skill yang ada. Untuk itu perlu adanya pemeberdayaan masyarakat dan membentuk pada Badan Usaha Milik Kampung ( BUMK ) menuju perekonomian kerakyatan.</p>\r\n\r\n<ol start=\"7\">\r\n	<li><strong>Integritas </strong></li>\r\n</ol>\r\n\r\n<p>Suatu kondisi yang mencerminkan untuk kualitas pelayanan aparatur Kampung dalam melayani masyarakat dengan jujur punya karakter dapat dipercaya dan bertanggung jawab.</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Menjadikan Pemerintahan Kampung yang baik, Tertib, mampu memberikan pelayanan kepada masyarakat yang baik dan bermasyarakat</li>\r\n	<li>Meningkatkan rasa persatuan dan Kesatuan Masyarakat melalui kedekatan keagamaan, sosial budaya, politik, hukum serta pemahaman NKRI</li>\r\n	<li>Memotifasi kesadaran masyarakat untuk berpartisipasi dan berperan aktif dalam mewujudkan program pembangunan kampung baik fisik maupun non fisik</li>\r\n	<li>Meningkatkan pembanguan infrastruktur yang seimbang, selaras dan serasi</li>\r\n	<li>Meningkatkan sumberdaya manusia yang mandiri, berbudaya, berakhlak, unggul dan berdaya saing</li>\r\n	<li>Mendorong dan meningkatkan aktifitas perekonomian menuju ekonomi kerakyatan, dari masyarakat, oleh masyarakat dan untuk masyarakat melalui pembentukan badan usaha milik kampung (BUMK)</li>\r\n	<li>Mendorong Masyarakat untuk berperan aktif mewujudkan kampung wates yang bersih, nyaman, aman, ,melalaui kegiatan gotong royong dan siskamling</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&nbsp;PENJELASAN 7 MISI KAMPUNG WATES &ldquo; TERSENYUM &ldquo;</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>MISI 1.</strong></p>\r\n\r\n<p><strong>&rdquo;<em>Mewujudkan pemerintah Kampung yang baik tertib, mampu memberikan pelayanan kepada masyarakat degan baik dan bertanggung jawab&rdquo;</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pelaksanaan misi 1 bertujuan untuk mewujudkan tata pemerintah yang baik, transparan, akuntabel sesuai prinsip-prinsip good goverment yang ditunjang oleh berdasarkan fungsinya kelembagaan, aparatur pemerintah kampung yang profesional dan berintegritas, serta pera aktif masyarakat</p>\r\n\r\n<ol>\r\n	<li>Peningkatan dan pengembangan kapasitas aparatur pemerintah kampung.</li>\r\n	<li>Pengembangan kapasitas dan penataan kelembagaan kampung</li>\r\n	<li>Peningkatan kualitas pelayanan administrasi aparatur kampung kepada masyarakat</li>\r\n	<li>Peningkatan dan pengembangan perencanaan, pelaksanaan dan pengawasan dalam pembangunan.</li>\r\n</ol>\r\n\r\n<p><strong>MISI 2</strong></p>\r\n\r\n<p><strong>&rdquo;<em>Meningkatkan rasa persatuan dan kesatuan masyarakat melalui pendekatan keagamaan, sosial, budaya, politik dan hukum&nbsp; serta pemahaman NKRI&rdquo;</em></strong></p>\r\n\r\n<p><strong><em>&nbsp;</em></strong></p>\r\n\r\n<p>Pelaksanaan misi ini di landasi oleh kesadaran bahwa keberhasilan pembangunan juga ditentukan oleh adanya persatuan dan kesatuan masyarakat dalam pelaksanaan, pengawasan dan pemeliharaan pembangunan.</p>\r\n\r\n<p>Persatuan dan kesatuan yang terjalin atas pendekatan keagamaan, sosial, politik, hukum, serta pemahaman NKRI, tidak akan mudah terpengaruh , terpropokasi dan terpecah belah.</p>\r\n\r\n<p>Kebijakan yang di kembangkan untuk misi ini adalah :</p>\r\n\r\n<ol>\r\n	<li>Peningkatan peran dan fungsi agama sebagai landasan akhlak, etika dan moralitas dalam pembangunan.</li>\r\n	<li>Peningkatan wawasan kebangsaan, pelestarian nilai-nilai budaya dan pemahaman Negara Kesatuan Republik Indonesia ( NKRI ).</li>\r\n	<li>Meningkatkan kesadaran peran aktif dalam sosial kemasyarakatan</li>\r\n	<li>Pengembangan dan pemahaman kehidupan berpolitik yang sehat dan demokratis.</li>\r\n	<li>Peningkatan kesadaran masyarakat tentang Supermasi Hukum.</li>\r\n</ol>\r\n\r\n<p><strong>MISI 3</strong></p>\r\n\r\n<p><strong>&ldquo;Memotovasi kesadaran masyarakat untuk berpartisipasi dan berperan aktif dalam mewujudkan program pembangunan Kampung baik fisik maupun Non fisik&rdquo;</strong></p>\r\n\r\n<p>Pelaksanaan misi 3 ini bertujuan untuk mewujudkan program-program pembangunan yang berkesinambungan dan berkelanjutan, baik pembangunan fisik maupun non fisik.</p>\r\n\r\n<p>Langkah-langkah yang dikembangkan untuk mewujudkan misi ini adalah :</p>\r\n\r\n<ol>\r\n	<li>Meningkatkan dan mengembangkan pola pembinaan kapda masyarakat dengan sistem naik bertangga turun berjenjang.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol start=\"2\">\r\n	<li>Mendorong dan meningkatkan peran aktif lembaga-lembaga pemberdayaan masyarakat melalui kegiatan-kegiatan yang berdaya guna dan berhasil guna.</li>\r\n	<li>Menumbuh kembangkan daya kreatifitas</li>\r\n	<li>Mendorong dan meningkatkan kegiatan dan peran aktif Majelis Taklim.</li>\r\n</ol>\r\n\r\n<p><strong>MISI 4</strong></p>\r\n\r\n<p><strong>&ldquo; Meningkatkan pembangunan insfrastruktur yang seimbang selaras dan serasi&rdquo;</strong></p>\r\n\r\n<p>Pelaksanaan misi 4 ini dititk beratkan pada pembangunan insfrastruktur jalan dan jembatan, gorong-gorong, jaringa irigasi, telekomunikasi dan pemerataan pembangunan antar wilayah / Dusun.</p>\r\n\r\n<p>Kebijakan yang dikembangkan untuk mendukung misi ini adalah :</p>\r\n\r\n<ol>\r\n	<li>Meingkatkan pembngunan insfrastruktur jalan dan jembatan, gorong-gorong, talut dan drainase di dusun-dusun.</li>\r\n	<li>Pembangunan dan pengembangan jaringan irigasi melalui pemberdayaan P3A.</li>\r\n	<li>Pembuatan dan pembangunan jalan-jalan baru antar kewilayahan / Dusun.</li>\r\n	<li>Pembangunan dan pengembangan telekomunikasi yang berbasis internet.</li>\r\n</ol>\r\n\r\n<p><strong>MISI 5</strong></p>\r\n\r\n<p><strong>&ldquo;Meningkatkan Sumber Daya Manusia yang mandiri berbudaya, berakhlak, unggul dan berdaya saing&rdquo;</strong></p>\r\n\r\n<p>Pelaksanaan misi 5 ini dilandasi oleh kesadaran bahwa keberhasilan pembangunan sangat ditentukan oleh kualitas Sumber Daya Manusia, yang meliputi beberapa aspek,</p>\r\n\r\n<p>Yaitu aspek Pendidikan, Kesehatan, Akhlak dan aspek Perilaku.</p>\r\n\r\n<p>Kebijakan yang dikembankan untuk mendukung misi ini adalah :</p>\r\n\r\n<ol>\r\n	<li>Peningkatan dan pengembangan pendidikan dengan menerapkan wajib belajar 12 tahun.</li>\r\n	<li>Terjaminnya kesehatan masyarakat, ibu dan anak.</li>\r\n	<li>Membangun dan meningkatkan akhlak dan perilaku masyarakat melalui kegiatan keagamaan.</li>\r\n	<li>Peningkatan kualitas ketenaga kerjaan melalui pendidikan dan latihan.</li>\r\n</ol>\r\n\r\n<p><strong>MISI 6</strong></p>\r\n\r\n<p><strong>&ldquo;mendorong dan meningkatkan aktifitas perekonomian menuju ekonomi kerakyatan, dari masyarakat, oleh masyarakat dan untuk masyarakat melalui pembentukan Badan Usaha Milik Kampung ( BUMK )&rdquo;</strong></p>\r\n\r\n<p>Pelaksanaan misi 6 ini bertujuan untuk meningkatkan kesejahteraan masyarakat.</p>\r\n\r\n<p>Yang harus dikembangkan dalam pencapaian misi ini adalah :</p>\r\n\r\n<ol>\r\n	<li>Melakukan pendataan dan merekrut usaha-usaha kerajinan masyarakat untuk dijadikan Kelompok Usaha Bersama ( KUBE ).</li>\r\n	<li>Meningkatkan pemanfaatan lahan pekarangan yang tidur untuk dijadikan lahan yang produktif.</li>\r\n	<li>Membentuk usaha simpan pinjam, kelompok di setiap dusun dengan harapan bisa mencegah masuknya para renternir.</li>\r\n	<li>Membentuk Badan Usaha Milik Kampung ( BUMK ) yang bergerak di bidang perdagangan, simpan pinjam, transportasi dan biro jasa.</li>\r\n</ol>\r\n\r\n<p><strong>MISI 7</strong></p>\r\n\r\n<p><strong>&ldquo;Mendorong masyarakat untuk berperan aktif mewujudkan Kampung Wates yang bersih Nyaman, Aman melalui kegiatan gotong royong dan ronda siskamling&rdquo;</strong></p>\r\n\r\n<p>Pelaksanaan misi 7 ini dilandasi dengan kesadaran masyarakat dalam kebersihan, kenyamanan dan keamanan menjadi satu kebutuhan.</p>\r\n\r\n<p>Langkah yang dikembangkan untuk tercapainya misi ini adalah :</p>\r\n\r\n<ol>\r\n	<li>Menumbuh kembangkan kesadaran masyarakat untuk melaksanakan kegiatan gotong royong.</li>\r\n	<li>Mendorong dan meningkatkan peran masyarakat untuk menciptakan dan menajaga kebersihan lingkungan.</li>\r\n	<li>Meciptakan dan meningkatkan kerukunan antar warga dengan saling Asah, saling Asih dan saling Asuh.</li>\r\n	<li>Mendorong dan menigkatkan kesadaran masyarakat untuk menjaga keamanan lingkungan dengan melaksananakan ronda siskamling.</li>\r\n</ol>\r\n', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_aparat` (`id_aparat`);

--
-- Indexes for table `aparat`
--
ALTER TABLE `aparat`
  ADD PRIMARY KEY (`id_aparat`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`,`id_aparat`),
  ADD KEY `id_aparat` (`id_aparat`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `potensi`
--
ALTER TABLE `potensi`
  ADD PRIMARY KEY (`id_potensi`),
  ADD KEY `id_admin` (`id_aparat`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `id_admin` (`id_aparat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `aparat`
--
ALTER TABLE `aparat`
  MODIFY `id_aparat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `potensi`
--
ALTER TABLE `potensi`
  MODIFY `id_potensi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_aparat`) REFERENCES `aparat` (`id_aparat`);

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`id_aparat`) REFERENCES `aparat` (`id_aparat`);

--
-- Constraints for table `potensi`
--
ALTER TABLE `potensi`
  ADD CONSTRAINT `potensi_ibfk_1` FOREIGN KEY (`id_aparat`) REFERENCES `aparat` (`id_aparat`);

--
-- Constraints for table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`id_aparat`) REFERENCES `aparat` (`id_aparat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
