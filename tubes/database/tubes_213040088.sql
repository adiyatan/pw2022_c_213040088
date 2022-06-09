-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 08:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_213040088`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_sabun_cart` varchar(255) NOT NULL,
  `bahan_sabun_cart` text NOT NULL,
  `kegunaan_sabun_cart` text NOT NULL,
  `harga_sabun_cart` int(11) NOT NULL,
  `gambar_sabun_cart` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_user`, `nama_sabun_cart`, `bahan_sabun_cart`, `kegunaan_sabun_cart`, `harga_sabun_cart`, `gambar_sabun_cart`, `quantity`, `created`) VALUES
(1, 6, 'KNITTED SOAP BAG', 'Serat bambu pilihan', 'Mencerahkan', 52000, '../asset/uploaded-img/62a189a2922f7.jpg', '3', '2022-06-09 13:14:16'),
(2, 5, 'HONEY GOAT MILK SOAP', 'Madu, Susu kambing, Olive oil, Coconut oil dan Castor oil', 'Melembabkan kulit dan menyembukan iritasi', 47000, '../asset/uploaded-img/62a18ba3b0d0d.jpg', '1', '2022-06-09 13:36:28'),
(3, 5, 'UNSCENTED CASTILLE SOAP', '100% Olive oil', 'Menghaluskan kulit, melindungi kulit dari sinar UV, dan dapat melembabkan kulit', 66000, '../asset/uploaded-img/62a18ddfdb11e.jpg', '1', '2022-06-09 13:36:36'),
(4, 5, 'INDIAN HEALING SOAP', 'Activated charcoal, Olive oil, Coconut oil dan Castor oil', 'Menarik minyak berlebih dan zat berbahaya lain dari pori-pori, mensterilkan luka dan gigitan beracun. menenangkan Kulit Iritasi dan Gigitan Serangga', 49000, '../asset/uploaded-img/62a192c264478.jpg', '1', '2022-06-09 13:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `data_sabun`
--

CREATE TABLE `data_sabun` (
  `id_sabun` int(11) NOT NULL,
  `nama_sabun` varchar(200) NOT NULL,
  `bahan_sabun` text NOT NULL,
  `kegunaan_sabun` text NOT NULL,
  `harga_sabun` int(11) NOT NULL,
  `gambar_sabun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_sabun`
--

INSERT INTO `data_sabun` (`id_sabun`, `nama_sabun`, `bahan_sabun`, `kegunaan_sabun`, `harga_sabun`, `gambar_sabun`) VALUES
(1, 'KNITTED SOAP BAG', 'Serat bambu pilihan', 'Mencerahkan', 52000, '62a189a2922f7.jpg'),
(2, 'LEMONGRASS SOAP', 'Cymbopogon Citratus (Lemongrass) essential oil Olive oil, Coconut oil, dan Castor oil', 'Menghaluskan kulit, Merawat kulit dan menghilangkan jerawat\r\n\r\n', 48000, '62a18a928210d.jpg'),
(3, 'BINAHONG ACNE SOAP', 'Daun binahong, Lavender dan Essential oil', 'Mengecilkan pori pori dan menghilangkan minyak berlebih', 70000, '62a18b1cba361.jpg'),
(4, 'HONEY GOAT MILK SOAP', 'Madu, Susu kambing, Olive oil, Coconut oil dan Castor oil', 'Melembabkan kulit dan menyembukan iritasi', 47000, '62a18ba3b0d0d.jpg'),
(5, 'COCOA BUTTER SOAP', 'Cacao butter, Olive oil, Coconut oil, dan Castor oil', 'Memberi nutrisi pada kulit dan melembabkan kulit', 47000, '62a18c6a7333f.jpg'),
(6, 'KEFIR CANOLA SOAP', 'Kefir, Canola oil, Olive oil, Cocos Nucifera Oil, dan Ricinus Communis Oil', 'Mengangkat sel kulit mati dan membunuh bakteri jerawat', 65000, '62a18d554627c.jpg'),
(7, 'UNSCENTED CASTILLE SOAP', '100% Olive oil', 'Menghaluskan kulit, melindungi kulit dari sinar UV, dan dapat melembabkan kulit', 66000, '62a18ddfdb11e.jpg'),
(8, 'ACTIVATED SPIRULINA SOAP', 'Spirulina, Plant base oil, Essential oil, Lavender, Coconut oil, Castor oil, Lavender dan Actived Charcoal', 'Mencerahkan kulit, mengatasi iritasi, membersihkan bakteri, menghilangkan bekas luka dan mencegah penuaan dini', 63000, '62a18ef27bf42.jpg'),
(9, 'CHOCOLATE SOAP', 'Oats premium, Cocoa powder, Olive oil, Coconut oil, Castor oil', 'Mengatasi semua jenis jerawat, melembabkan kulit, efektif dalam mengatasi gejala kulit kering seperti gatal, ruam, atau, mengelupas.', 47000, '62a190cf971ae.jpg'),
(10, 'RICE &amp; MILK SOAP', 'Nasi dan Susu kambing', 'Mencerahkan kulit dan menghilangkan bekas luka', 47000, '62a1912273666.jpg'),
(11, 'MATCHA YUMMY SOAP', 'Green tea, Olive oil, Coconut oil dan Castor oil', 'Mengurangi peradangan kulit, menjaga kelembaban kulit dan dapat mengurangi jerawat\r\n', 47000, '62a191af9264e.jpg'),
(12, 'ROSE OATS SOAP', 'Rose, Oat premium, Olive oil, Coconut oil dan Castor oil', 'Membantu mengurangi kemerahan pada kulit, mengontrol minyak berlebih pada kulit dan membersihkan sisa kotoran yang menumpuk di pori-pori yang menyebabkan komedo', 47000, '62a19231e6e9a.jpg'),
(13, 'INDIAN HEALING SOAP', 'Activated charcoal, Olive oil, Coconut oil dan Castor oil', 'Menarik minyak berlebih dan zat berbahaya lain dari pori-pori, mensterilkan luka dan gigitan beracun. menenangkan Kulit Iritasi dan Gigitan Serangga', 49000, '62a192c264478.jpg'),
(14, 'ALMOND COCO MYLK SOAP', 'Almond dan Goat Milk', 'Melembabkan, membantu mencerahkan dan menutrisi kulit mu', 57000, '62a193366ad28.jpg'),
(15, 'COFFEE LATTE SOAP', '100% COFFEE', 'Memutihkan kulit dan menghilangkan bekas luka', 60000, '62a1939e12d1c.jpg'),
(16, 'YOGHURT LAVENDER SOAP', 'Plain yoghurt, Lavender, Coconut oil, Olive oil dan Castor oil', 'Mencegah munculnya garis-garis halus dan keriput dan meredakan iritasi akibat infeksi atau terbakar matahari', 47000, '62a1942aa3372.jpg'),
(17, 'DEAD SEA MUD SOAP', 'Peppermint essential oils and Bentonite clay', 'Memutihkan kulit', 60000, '62a194727ab3e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `nomor_user` char(13) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota_user` varchar(255) NOT NULL,
  `postcode_user` char(5) NOT NULL,
  `total_produk` varchar(255) NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `waktupesan` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `id_user`, `nama_user`, `nomor_user`, `email_user`, `method`, `alamat_user`, `provinsi`, `kota_user`, `postcode_user`, `total_produk`, `total_harga`, `status`, `waktupesan`) VALUES
(1, 6, 'Shalwe', '2131213', 'adiyazam03@gmail.com', 'cash on delivery', 'Jalan Dago', 'Allantis', 'Surabaya', '40132', 'KNITTED SOAP BAG (3) ', '156000', 'Penjual Memproses pesanan', '2022-06-09 13:15:30'),
(2, 5, '123', '08222222222', '123@gmail.com', 'cash on delivery', 'Jalan PIK', 'Jakarta Barat', 'Jakarta', '00911', 'HONEY GOAT MILK SOAP (1) , UNSCENTED CASTILLE SOAP (1) , INDIAN HEALING SOAP (1) ', '162000', 'Penjual Memproses pesanan', '2022-06-09 13:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `gambar_user` varchar(255) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `postcode_user` char(5) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota_user` varchar(255) NOT NULL,
  `nomor_user` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_user`, `username`, `password`, `email_user`, `role`, `gambar_user`, `alamat_user`, `postcode_user`, `provinsi`, `kota_user`, `nomor_user`) VALUES
(1, 'Adiya', 'mrk', '$2y$10$ubTfxbgBpYIx9Mpx345xX.QYaiwGYhjvO0b7YKaaeoNjVX4ONZAe2', 'adiyazam03@gmail.com', 'admin', '', '', '', '', '', ''),
(2, 'Shamira', 'shamira', '$2y$10$653jPOmkGDgTj8lWA.ScdOLKz9kab9ru0ZRn0MOB4ZdFZoTlpojnG', 'shamira@gmail.com', 'user', '', '', '', '', '', ''),
(5, '123', '123', '$2y$10$9uA0.2fkbiP1EoOZ5g6aiuAFb7Ri5a64wqbVtnUxzdWnGzGZjja1G', '123@gmail.com', 'user', '', 'Jalan PIK', '00911', 'Jakarta Barat', 'Jakarta', '08222222222'),
(6, 'Shalwe', '234', '$2y$10$jt0dzA0CHRLiUQ.EarQnIu.r8JNGZDotNv5YCqUCB7kCpH4.Z3tw6', 'adiyazam03@gmail.com', 'user', '62947c7d26079.jpeg', 'Jalan Dago', '40132', 'Allantis', 'Surabaya', '2131213');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `user` (`id_user`);

--
-- Indexes for table `data_sabun`
--
ALTER TABLE `data_sabun`
  ADD PRIMARY KEY (`id_sabun`);
ALTER TABLE `data_sabun` ADD FULLTEXT KEY `bahansabun` (`bahan_sabun`);
ALTER TABLE `data_sabun` ADD FULLTEXT KEY `kegunaansabun` (`kegunaan_sabun`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_sabun`
--
ALTER TABLE `data_sabun`
  MODIFY `id_sabun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
