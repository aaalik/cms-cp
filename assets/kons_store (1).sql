-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 05:01 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kons_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id_banner` int(8) NOT NULL,
  `title_banner` varchar(60) NOT NULL,
  `img_banner` varchar(65) NOT NULL,
  `order_banner` tinyint(1) NOT NULL,
  `status_banner` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_banner`
--

INSERT INTO `tb_banner` (`id_banner`, `title_banner`, `img_banner`, `order_banner`, `status_banner`) VALUES
(1, 'home1', '16300496_1348735431863816_5193151549802499072_o.jpg', 1, 1),
(2, 'Homiee', '18879409_469269070074042_359450816639139840_n.jpg', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id_gallery` int(8) NOT NULL,
  `title_gallery` varchar(60) NOT NULL,
  `upload_date` date NOT NULL,
  `img_gallery` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`id_gallery`, `title_gallery`, `upload_date`, `img_gallery`) VALUES
(1, 'Antono', '2018-02-23', '16300496_1348735431863816_5193151549802499072_o3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id` smallint(5) NOT NULL,
  `title` varchar(60) NOT NULL,
  `url_title` varchar(60) NOT NULL,
  `harga` int(8) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deskripsi` text NOT NULL,
  `itinerary` text NOT NULL,
  `fasilitas` text NOT NULL,
  `ketentuan` text NOT NULL,
  `img` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id`, `title`, `url_title`, `harga`, `tgl_berangkat`, `status`, `deskripsi`, `itinerary`, `fasilitas`, `ketentuan`, `img`) VALUES
(1, 'Paket Umrah Plus Turki 13 Hari', 'paket-umrah-plus-turki-13-hari', 3299, '2018-03-03', 1, 'Paket Umrah plus Turki merupakan paket Umrah dari Jannah Tour & Travel selama 13 hari perjalanan Ibadah + Tour Istanbul dan Bursa, Turki. Jamaah dapat Menunaikan Ibadah Di Madina dan Makkah. Perjalanan akan stay di Madina 4 Hari, di Makkah 5 Hari dan Turki 4 hari', 'Day 1 Jakarta – Madinah\r\nInsyaAllah Jama’ah berkumpul di Bandara Soekarno Hatta pukul 11.00 siang, untuk persiapan pelepasan dan pembekalan sebelum bersama-sama berangkat menuju Tanah suci menggunakan maskapai Saudi Airlines rute Jakarta langsung Madinah. InsyaAllah jama’ah tiba di Madinah pukul 23.20 ( Waktu Arab Saudi)\r\n\r\nDay 2 Madinah \r\nSholat Subuh di Masjid Nabawi, setelah makan pagi, berziaarah ke makam Rasulullah SAW dan para sahabatnya. Dan memperbanyak ibadah sunnah.\r\n\r\n\r\nDay 3 Madinah \r\nSholat Subuh di Masjid Nabawi , setelah makan pagi berziarah ketempat bersejarah disekitar kota Madinah ( Masjid Quba, Jabbal Uhud, Kebun Kurma, Masjid 7, Qiblatain). Memperbanyak ibadah sunnah.\r\n\r\nDay 4 Madinah – Makkah\r\nSetelah sholat Dhuhur berangkat ke Makkah dengan bus dan Jama’ah sudah dalam keadaan ber-ihram mengambil Miqat di Bir Ali. Setibanya disana langsung check in Hotel dan bersama – sama mengerjakan UMRAH ke I. \r\n\r\nDay 5 MAKKAH  \r\nMemperbanyak ibadah mandiri di Masjidil Haram. \r\n\r\nDay 6 MAKKAH  (UMROH II)\r\nSetelah sarapan pagi, jamaah berziarah mengunjungi Mina, Muzdalifah, Arafah, Jamarot, Jabal Tsur/Nur, Jabal Rahma, dan bagi jamaah yang hendak melaksanakan Umroh ke dua dapat mengambil Miqot dari Ji’ronah. Setelah ibadah umroh selesai jamaah memperbanyak Ibadah di Masjidil Haram . \r\n\r\nDay 7 MAKKAH \r\nMemperbanyak ibadah mandiri di Masjidil Haram. \r\n\r\nDay 8 : Makkah – Jeddah – Istanbul\r\nTawaf wada’ dan sholat subuh. Check out hotel, Perjalanan menuju Jeddah untuk mengunjungi Masjid Terapung dan berbelanja di Cornesh/Balad. Transfer airport, dengan penerbangan SV 261 pkl. 16.50 WSA perjalanan dilanjutkan menuju Istanbul. InsyaAllah tiba di Istanbul pkl. 20.35 waktu Istanbul, dan Check in langsung di hotel.\r\n\r\nDay 9 : Istanbul – Bursa\r\nSarapan pagi, kemudian dilanjutkan city tour dan mengunjungi : Green Mosque, Green Tomb, Grand Mosque, Silk Market, Leather House & Fashion Show.\r\n\r\n\r\nDay 10 : Bursa\r\nSarapan pagi, kemudian bersama-sama berlayar Bosporus Cruise, Mengunjungi Jewelry House & Grand Bazzar.\r\n\r\nDay 11 Bursa – Istanbul\r\nKembali ke Istanbul dan mengunjungi : Blue Mosque, Hippodrome, Hagia Shopia, Topkapi Palace dan Taskim Area.\r\n\r\nDay 12 Istanbul – Jeddah\r\nPagi Harinya, berlayar bersama bosphorus cruise, mengunjungi Suleymaniye Mosque. Kemudian Transfer ke airport menuju Jeddah.\r\n\r\nDay 13 : Jeddah – Jakarta\r\nTiba di Jeddah terbang menuju Jakarta perjalanan InsyaAllah tiba di Jakarta, Program selesai. Semoga ibadah kita diterima Allah SWT, dijadikan HajjanMabruran, Wa Umratan Maqbulatan. Amien Ya Rabbal Alamin….', 'Maskapai :\r\nSaudi Airlines\r\n\r\n \r\n\r\nHotel :\r\n- Shaza /Similar\r\n- Novotel / Similar\r\n \r\n\r\nInclude :\r\n\r\n1. penerbangan economy class return (PP)\r\n2. perlengkapan eksklusif\r\n3. akomodasi sesuai paket pilihan\r\n4. makan 3 kali sehari (buffet/prasmanan)\r\n5. visa umrah (non progresive) & umrah plus\r\n6. transportasi bus exclusive\r\n7. ziarah kota makkah dan madinah\r\n8. pembimbing ibadah dan tour leader\r\n9.manasik di hotel berbintang\r\n10. Zam-zam 5 Liter per Jamaah\r\n \r\n\r\nExclude :\r\n\r\n1. biaya airport handling rp 1.250.000 & umrah plus Rp. 2.000.000\r\n2. proses paspor & tambah nama\r\n3. visa progresif senilai USD 550**\r\n4. surat muhrim\r\n5. single suplement (sekamar sendiri)\r\n6. vaksin maningitis\r\n7. tour tambahan diluar program\r\n8. biaya tambahan (laundry, telp, dsb nya)', 'Ketentuan Umum\r\n\r\n1. Harga dan Jadwal bisa berubah sewaktu-waktu berdasarkan kondisi yang mempengaruhi.\r\n2. Kurs Pembayaran disesuaikan dengan kurs USD pada saat pembayaran/transaksi.\r\n3. Biaya pembatalan dikenakan kepada setiap jamaah berdasarkan waktu yang telah ditentukan (sk berlaku).\r\n4. Harga tidak termasuk Visa Progresif senilai Sar 2000 (Sesuai dengan peraturan pemerintah Arab Saudi, bagi jamaah yang pernah berangkat pada satu musim umrah terakhir).\r\n\r\n \r\n\r\nKetentuan Peserta\r\n\r\nHarga termasuk : \r\n1. Penerbangan Economy Class Return (PP). \r\n2. Perlengkapan Eksklusif. \r\n3. Akomodasi sesuai Paket Pilihan. \r\n4. Makan 3 Kali Sehari (Buffet/Prasmanan). \r\n5. Visa Umrah (Non Progresive) & Umrah Plus. \r\n6. Transportasi Bus Exclusive. \r\n7. Ziarah kota Makkah dan Madinah. \r\n8. Pembimbing Ibadah dan Tour Leader. \r\n9. Manasik di Hotel Berbintang. \r\n10. Zam-zam 5 Liter Per Jamaah\r\n\r\n \r\n\r\nHarga tidak termasuk : \r\n1. Biaya Airport Handling Rp. 1.250.000 & Umrah Plus Rp. 2.000.000. \r\n2. Proses Paspor & Tambah Nama. \r\n3. Visa Progresif Senilai USD 550** / SAR 2000. \r\n4. Surat Muhrim. \r\n5. Singgle Suplement (sekamar sendiri). \r\n6. Vaksin Maningitis. \r\n7. Tour Tambahan diluar Program. \r\n8. Biaya Tambahan (Laundry,Telp, dsb)', '16836387_1383788448358514_4721595794193248683_o1.jpg'),
(2, 'SATUU', 'satuu', 123, '2018-03-07', 1, 'asd', 'dfg', 'fgh', 'xcv', '16300496_1348735431863816_5193151549802499072_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` tinyint(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `email`, `name`, `password`, `level`, `status`) VALUES
(1, 'asepjason@gmail.com', 'Asep Jason', '$2y$10$3ql0ouNqeKu6FqCRlmDa7eMoTBrQLj/IN8PBZElzDP5vOcygjADLG', 1, 1),
(2, 'anothermalik@gmail.com', 'Abdul Malik', '$2y$10$eFqw9jOoqF.rMzeWViuhOO.IAmd2EWmRFxcoM7O4tkp9yToY8vr2C', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id_banner` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id_gallery` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
