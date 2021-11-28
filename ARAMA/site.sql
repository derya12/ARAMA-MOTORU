-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Oca 2021, 13:16:05
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `araproject`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `site`
--

INSERT INTO `site` (`id`, `baslik`, `url`, `description`) VALUES
(18, 'instagram', 'https://www.instagram.com/?hl=tr', 'sosyal medya'),
(19, 'ingizce_türkçe çeviri', 'https://translate.google.com/?hl=tr', 'dünyanın en hızlı çeviri sitesi'),
(21, 'Twitter', 'https://twitter.com/?lang=tr', 'Sosyal medya'),
(22, 'Twitter', 'https://twitter.com/login?lang=tr', 'Twittera giriş yap'),
(23, 'Facebook', 'https://tr-tr.facebook.com/', 'Fcebok giriş sayfası'),
(24, 'Facebook', 'https://tr-tr.facebook.com/r.php', 'Facebook hesabı oluştur'),
(25, 'Classroom', 'https://classroom.google.com/u/0/h', 'Clasrooma hoşgeldiniz.'),
(26, 'Onedio', 'https://onedio.com/', 'Sosyal içerik platformu'),
(27, 'Outlook', 'https://outlook.live.com/owa/', 'Kayıt yap\r\n'),
(28, 'Muş Alparslan Üniversitesi', 'http://www.alparslan.edu.tr/', 'Sitemize HOŞGELDİNİZ...'),
(29, 'Youtube', 'https://www.youtube.com/?hl=tr&gl=TR', 'Sevdiğiniz videoların ve müziklerin keyfini çıkarın'),
(30, 'MŞÜ', 'http://www.alparslan.edu.tr/', ''),
(31, 'GOOGLE', 'https://www.google.com.tr/', ''),
(32, 'google', 'https://www.google.com.tr/', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
