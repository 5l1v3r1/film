-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 07:42 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(1) NOT NULL,
  `site_baslik` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `site_url` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `site_aciklama` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `site_keywords` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `site_analytics` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `site_logo` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `site_yazar` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `site_eposta` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `site_description` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `site_baslik`, `site_url`, `site_aciklama`, `site_keywords`, `site_analytics`, `site_logo`, `site_yazar`, `site_eposta`, `site_description`) VALUES
(1, 'asdasd', 'asdas', 'dasdas', 'dasdas', '<meta name=\"google-site-verification\" content=\"\" /> 		<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA--1\"></script> 		<script> 		  window.dataLayer = window.dataLayer || []; 		  function gtag(){dataLayer.push(arguments);} 		  gtag(\'js\', new Date()); 		  gtag(\'config\', \'UA--1\'); 		</script>', 'images/5a9471d418fd0', 'sdasd', 'asdasds', 'asdsa');

-- --------------------------------------------------------

--
-- Table structure for table `film_icerik`
--

CREATE TABLE `film_icerik` (
  `film_id` int(5) NOT NULL,
  `film_isim` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `film_imdb` int(2) NOT NULL,
  `film_puan` int(2) NOT NULL,
  `film_izlenme` int(11) NOT NULL,
  `film_aciklama` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `film_resim` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `film_yil` int(4) NOT NULL,
  `film_oyuncu` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `film_yazar` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `film_yonetmen` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `film_kategori` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `film_seo_link` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `film_fragman` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `film_link` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `film_link1` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `film_link2` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `film_link3` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `film_link4` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `film_link5` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `film_link6` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `film_link7` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `film_link8` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `film_link9` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `film_keywords` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `film_description` varchar(400) COLLATE utf8_turkish_ci NOT NULL,
  `film_slider` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `film_icerik`
--

INSERT INTO `film_icerik` (`film_id`, `film_isim`, `film_imdb`, `film_puan`, `film_izlenme`, `film_aciklama`, `film_resim`, `film_yil`, `film_oyuncu`, `film_yazar`, `film_yonetmen`, `film_kategori`, `film_seo_link`, `film_fragman`, `film_link`, `film_link1`, `film_link2`, `film_link3`, `film_link4`, `film_link5`, `film_link6`, `film_link7`, `film_link8`, `film_link9`, `film_keywords`, `film_description`, `film_slider`) VALUES
(21, 'Esaretin Bedeli', 9, 0, 52, 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency. ', 'images/5a946eb78e9c315964_3.jpg', 1994, ' Tim Robbins, Morgan Freeman, Bob Gunton', ' Stephen King , Frank Darabont', ' Frank Darabont ', 'Aksiyon', 'esaretin-bedeli', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/N3yY2uKS4bY\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/HiJuUg0wb68\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VsuR7_EsApU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '', '', '', '', '', '', '', '', 'Esaretin,Bedeli', 'Esaretin Bedeli', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(4) NOT NULL,
  `kategori_isim` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_seo_link` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_isim`, `kategori_seo_link`) VALUES
(2, 'Macera', 'macera'),
(3, 'Aksiyon', 'aksiyon');

-- --------------------------------------------------------

--
-- Table structure for table `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `kullanici_mail` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` enum('0','1') COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kullanici`
--

INSERT INTO `kullanici` (`id`, `kullanici_mail`, `kullanici_password`, `kullanici_yetki`) VALUES
(1, 'admin@admin.com', 'fe01ce2a7fbac8fafaed7c982a04e229 ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `yorum`
--

CREATE TABLE `yorum` (
  `yorum_id` int(11) NOT NULL,
  `yorum_icerik` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_tarih` date NOT NULL,
  `yorum_isim` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_eposta` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `film_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `yorum`
--

INSERT INTO `yorum` (`yorum_id`, `yorum_icerik`, `yorum_tarih`, `yorum_isim`, `yorum_eposta`, `film_id`) VALUES
(3, 'Soner', '2018-02-14', 'asddsasdaasdasdasdasdasdasdasd', 'asdasdasdasdaasdsadasdasssdasd', 11),
(4, 'adsddasasasdadsasd', '2018-02-14', 'asddsasdaasdasdasdasdasdasdasd', 'asdasdasdasdaasdsadasdasssdasd', 11),
(5, 'asdasdasdasds', '0000-00-00', 'asdasdas', 'qwdqwqwqwd@dwqdwqd.com', 11),
(11, 'Merhaba', '2018-02-26', 'Soner USTA', 'sonergames@gmail.com', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Indexes for table `film_icerik`
--
ALTER TABLE `film_icerik`
  ADD PRIMARY KEY (`film_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yorum`
--
ALTER TABLE `yorum`
  ADD PRIMARY KEY (`yorum_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `ayar_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `film_icerik`
--
ALTER TABLE `film_icerik`
  MODIFY `film_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yorum`
--
ALTER TABLE `yorum`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
