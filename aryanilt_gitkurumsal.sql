-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 25 Haz 2022, 22:19:28
-- Sunucu sürümü: 10.3.35-MariaDB
-- PHP Sürümü: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `aryanilt_gitkurumsal`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `dosya_adi` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gorsel` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif_pasif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `banner`
--

INSERT INTO `banner` (`id`, `dosya_adi`, `gorsel`, `link`, `aktif_pasif`, `created_at`, `updated_at`) VALUES
(1, 'index.jpg', 'uploads/gorseller/banner_gorsel-1655581372.jpg', 'asd2', 0, '2022-06-18 16:42:08', '2022-06-18 16:42:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `id` int(10) UNSIGNED NOT NULL,
  `baslik` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kisa_aciklama` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_etiketler` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gorsel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`id`, `baslik`, `slug`, `kisa_aciklama`, `meta_etiketler`, `aciklama`, `gorsel`, `created_at`, `updated_at`) VALUES
(4, 'Pres Baskı İşleri', 'pres-baski-isleri', 'Pres Baskı İşleri', 'Pres Baskı İşleri', '<p>Pres Baskı İşleri</p>', 'uploads/gorseller/hizmet_gorsel-1656095997.jpg', '2022-06-23 18:34:31', '2022-06-24 15:39:57'),
(5, 'CNC Abkant Büküm', 'cnc-abkant-bukum', 'CNC Abkant Büküm', 'CNC Abkant Büküm', '<p>CNC Abkant B&uuml;k&uuml;m</p>', 'uploads/gorseller/hizmet_gorsel-1656020125.png', '2022-06-23 18:35:25', '2022-06-23 18:35:25'),
(6, 'Plazma Kaynak', 'plazma-kaynak', 'Plazma Kaynak', 'Plazma Kaynak', '<p>Plazma Kaynak</p>', 'uploads/gorseller/hizmet_gorsel-1656020270.png', '2022-06-23 18:36:21', '2022-06-23 18:37:50'),
(7, 'Robot Kaynak', 'robot-kaynak', 'Robot Kaynak', 'Robot Kaynak', '<p>Robot Kaynak</p>', 'uploads/gorseller/hizmet_gorsel-1656096061.jpg', '2022-06-23 18:37:19', '2022-06-24 15:41:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `baslik` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif_pasif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`id`, `baslik`, `slug`, `aktif_pasif`, `created_at`, `updated_at`) VALUES
(1, 'Ana Menü', 'ana-menu', 0, NULL, '2022-06-18 15:23:48');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_06_17_092301_site_ayarlar', 1),
(5, '2022_06_17_092327_menuler', 1),
(6, '2022_06_17_092339_yazilar', 1),
(7, '2022_06_17_092349_sayfalar', 1),
(8, '2022_06_17_092400_projeler', 1),
(9, '2022_06_17_092811_hizmetler', 1),
(10, '2022_06_17_094142_site_slider', 1),
(11, '2022_06_17_094149_site_banner', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projeler`
--

CREATE TABLE `projeler` (
  `id` int(10) UNSIGNED NOT NULL,
  `baslik` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kisa_aciklama` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_etiketler` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gorsel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `projeler`
--

INSERT INTO `projeler` (`id`, `baslik`, `slug`, `kisa_aciklama`, `meta_etiketler`, `aciklama`, `gorsel`, `created_at`, `updated_at`) VALUES
(4, 'Isıtma ve Soğutma', 'isitma-ve-sogutma', 'Isıtma ve Soğutma', 'Isıtma ve Soğutma', '<p>G&uuml;neş enerjisi, boiler kazanları, katı ve sıvı yakıt kazanları i&ccedil;indeki bombeler derinlik ve şekillerine g&ouml;re değişiklik g&ouml;stererek işinde uzman ve deneyimli personellerimiz tarafından demir, paslanmaz &ccedil;elik, bakır, al&uuml;minyum malzemeler arasından yapılan tercih ile &uuml;retimi yapılmaktadır.</p>', 'uploads/gorseller/proje_gorsel-1656021335.jpg', '2022-06-23 18:45:48', '2022-06-23 19:00:23'),
(5, 'Havalandırma – Fan', 'havalandirma-fan', 'Havalandırma – Fan', 'Havalandırma – Fan', '<p>Jet noz&uuml;ller(menfez) ve jet fan aynaları alanında isteğe bağlı olarak se&ccedil;ilen malzeme kullanılarak, işinde deneyim sahibi olan personellerimiz tarafından b&uuml;y&uuml;k bir titizlik i&ccedil;erisinde bombe &uuml;retimi yapılmaktadır.</p>', 'uploads/gorseller/proje_gorsel-1656021601.jpg', '2022-06-23 19:00:01', '2022-06-23 19:00:01'),
(6, 'Aydınlatma Sistemleri', 'aydinlatma-sistemleri', 'Aydınlatma Sistemleri - Talep doğrultusunda sac, alüminyum,bakır, krom gibi malzeme seçimi yapılarak iyi bir işçilik ile isteğe bağlı olan ölçülerde aydınlatma sistemleri ihtiyaçlarınız için özel sıvama ve bombe üretimi yapılmaktadır.', 'Aydınlatma Sistemleri', '<p>Talep doğrultusunda sac, al&uuml;minyum,bakır, krom gibi malzeme se&ccedil;imi yapılarak iyi bir iş&ccedil;ilik ile isteğe bağlı olan &ouml;l&ccedil;&uuml;lerde aydınlatma sistemleri ihtiya&ccedil;larınız i&ccedil;in &ouml;zel sıvama ve bombe &uuml;retimi yapılmaktadır.</p>', 'uploads/gorseller/proje_gorsel-1656021683.jpg', '2022-06-23 19:01:23', '2022-06-23 19:01:23'),
(7, 'Mutfak Eşyaları', 'mutfak-esyalari', 'Mutfak Eşyaları', 'Mutfak Eşyaları', '<p>Profesyonel ve Ev Mutfak gere&ccedil;leri i&ccedil;in sac, al&uuml;minyum,bakır, krom gibi malzeme se&ccedil;enekleriyle isteğinize uygun bombe &ouml;l&ccedil;&uuml;lerinde &uuml;retimleriniz ger&ccedil;ekleştirilmektedir.</p>', 'uploads/gorseller/proje_gorsel-1656021906.jpg', '2022-06-23 19:05:06', '2022-06-23 19:05:06'),
(8, 'Otomotiv Sanayi', 'otomotiv-sanayi', 'Otomotiv Sanayi', 'Otomotiv Sanayi', '<p><strong>Otomotiv Sanayi</strong></p>', 'uploads/gorseller/proje_gorsel-1656021948.jpg', '2022-06-23 19:05:48', '2022-06-23 19:05:48'),
(9, 'Savunma Sanayi', 'savunma-sanayi', 'Savunma Sanayi', 'Savunma Sanayi', '<p><strong>Savunma Sanayi</strong><br />\r\n&nbsp;</p>', 'uploads/gorseller/proje_gorsel-1656021989.jpg', '2022-06-23 19:06:29', '2022-06-23 19:06:29'),
(10, 'Tarım ve Hayvancılık Endüstrisi', 'tarim-ve-hayvancilik-endustrisi', 'Tarım ve Hayvancılık Endüstrisi', 'Tarım ve Hayvancılık Endüstrisi', '<p><strong>Tarım ve Hayvancılık End&uuml;strisi</strong><br />\r\n&nbsp;</p>', 'uploads/gorseller/proje_gorsel-1656022027.jpg', '2022-06-23 19:07:07', '2022-06-23 19:07:07'),
(11, 'Tıbbi Cihazlar', 'tibbi-cihazlar', 'Tıbbi Cihazlar', 'Tıbbi Cihazlar', '<p>Tıbbi cihazlar i&ccedil;in pres baskı bombe işlemi uzman bir ekip tarafından &uuml;retilmektedir.</p>', 'uploads/gorseller/proje_gorsel-1656022077.jpg', '2022-06-23 19:07:57', '2022-06-23 19:07:57');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `id` int(10) UNSIGNED NOT NULL,
  `baslik` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kisa_aciklama` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_etiketler` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gorsel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_ayarlar`
--

CREATE TABLE `site_ayarlar` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_adi` varchar(450) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_baslik` varchar(450) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_keywords` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_meta_aciklama` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_adres` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_telefon` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_mail` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_header_tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_body_tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_aktif_pasif` tinyint(1) NOT NULL DEFAULT 0,
  `banners_aktif_pasif` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `site_ayarlar`
--

INSERT INTO `site_ayarlar` (`id`, `site_adi`, `site_baslik`, `site_keywords`, `site_meta_aciklama`, `site_adres`, `site_telefon`, `site_mail`, `logo`, `favicon`, `site_header_tag`, `site_body_tag`, `site_facebook`, `site_instagram`, `site_twitter`, `site_youtube`, `slider_aktif_pasif`, `banners_aktif_pasif`, `created_at`, `updated_at`) VALUES
(1, 'EgeBombeSanayi', 'Ege Bombe Sanayi', 'asd', 'asd', 'Karacaoğlan Mh. 6170 Sk. No: 17/D Bornova/İZMİR', '+90 232 472 22 16', 'info@egebombe.com.tr', 'uploads/gorseller/logo-1656018533.png', 'uploads/gorseller/favicon-1655572582.jpg', '<p>asdas</p>', '<p>asd</p>', '#', '#', '#', '#', 0, 0, '2022-06-18 16:05:46', '2022-06-23 18:13:37');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `dosya_adi` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gorsel` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yazi` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif_pasif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `dosya_adi`, `gorsel`, `yazi`, `link`, `aktif_pasif`, `created_at`, `updated_at`) VALUES
(3, 'bombe.jpeg', 'uploads/gorseller/slayt_gorsel-1656063262.png', '<p>Slayt Deneme 1</p>', '#', 1, '2022-06-24 06:34:22', '2022-06-24 06:34:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(10) UNSIGNED NOT NULL,
  `baslik` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kisa_aciklama` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_etiketler` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gorsel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `baslik`, `slug`, `kisa_aciklama`, `meta_etiketler`, `aciklama`, `gorsel`, `created_at`, `updated_at`) VALUES
(6, 'BOMBE', 'bombe', 'bombe', 'bombe', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li>\r\n				<p>Bombeler kordonlu ve yakalı olarak &uuml;retilebilir.</p>\r\n				</li>\r\n				<li>\r\n				<p>Derinlik ve kordon &ccedil;apı isteğe g&ouml;re belirlenir.</p>\r\n				</li>\r\n				<li>\r\n				<p>Yakalı bombelerde dış &ccedil;ap &ouml;l&ccedil;&uuml;leri siparişe g&ouml;re belirlenir.</p>\r\n				</li>\r\n				<li>\r\n				<p>Bombelerde istenilen &ouml;l&ccedil;&uuml;ye g&ouml;re delik a&ccedil;ılabilir.</p>\r\n				</li>\r\n			</ul>\r\n			</td>\r\n			<td><img alt=\"\" src=\"https://cny.com.tr/wp-content/uploads/2021/04/bombe-cizim.jpg\" style=\"height:500px; width:500px\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<thead>\r\n					<tr>\r\n						<th colspan=\"3\" rowspan=\"1\">&Ccedil;AP &Ouml;L&Ccedil;&Uuml;LERİ</th>\r\n					</tr>\r\n				</thead>\r\n				<tbody>\r\n					<tr>\r\n						<td>170 mm</td>\r\n						<td>360 mm</td>\r\n						<td>800 mm</td>\r\n					</tr>\r\n					<tr>\r\n						<td>200 mm</td>\r\n						<td>400 mm</td>\r\n						<td>850 mm</td>\r\n					</tr>\r\n					<tr>\r\n						<td>220 mm</td>\r\n						<td>450 mm</td>\r\n						<td>900 mm</td>\r\n					</tr>\r\n					<tr>\r\n						<td>250 mm</td>\r\n						<td>480 mm</td>\r\n						<td>960 mm</td>\r\n					</tr>\r\n					<tr>\r\n						<td>273 mm</td>\r\n						<td>500 mm</td>\r\n						<td>1050 mm</td>\r\n					</tr>\r\n					<tr>\r\n						<td>280 mm</td>\r\n						<td>550 mm</td>\r\n						<td>1100 mm</td>\r\n					</tr>\r\n					<tr>\r\n						<td>300 mm</td>\r\n						<td>600 mm</td>\r\n						<td>1200 mm</td>\r\n					</tr>\r\n					<tr>\r\n						<td>320 mm</td>\r\n						<td>640 mm</td>\r\n						<td>1280 mm</td>\r\n					</tr>\r\n					<tr>\r\n						<td>350 mm</td>\r\n						<td>700 mm</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<br />\r\n			&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th colspan=\"1\" rowspan=\"1\">MALZEME KALINLIĞI</th>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2,00 mm</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7,00 mm</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th colspan=\"1\" rowspan=\"1\">&nbsp;</th>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th colspan=\"1\" rowspan=\"1\">&nbsp;</th>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'uploads/gorseller/urun_gorsel-1656019332.jpg', '2022-06-23 18:22:12', '2022-06-23 18:22:12'),
(7, 'DERİN SIVAMA', 'derin-sivama', 'DERİN SIVAMA', 'DERİN SIVAMA', '<ul>\r\n	<li>\r\n	<p>Derin sıvamalarda istenilen şekilde delik a&ccedil;ılabilir.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Derin sıvamalar kordonlu olarak &uuml;retilebilir.</p>\r\n	</li>\r\n	<li>\r\n	<p>Derinlik ve kordon &ccedil;apı istenilen &ouml;l&ccedil;&uuml;de belirlenir.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"https://cny.com.tr/wp-content/uploads/2021/04/derin-sivama-cizim.jpg\" style=\"height:400px; width:400px\" /></p>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th colspan=\"3\" rowspan=\"1\">&Ccedil;AP &Ouml;L&Ccedil;&Uuml;LERİ</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>170 mm</td>\r\n			<td>200 mm</td>\r\n			<td>220 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>250 mm</td>\r\n			<td>273 mm</td>\r\n			<td>280 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>300 mm</td>\r\n			<td>320 mm</td>\r\n			<td>350 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>360 mm</td>\r\n			<td>380 mm</td>\r\n			<td>400 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>450 mm</td>\r\n			<td>480 mm</td>\r\n			<td>500 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>550 mm</td>\r\n			<td>600 mm</td>\r\n			<td>640 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>700 mm</td>\r\n			<td>750 mm</td>\r\n			<td>800 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>850 mm</td>\r\n			<td>900 mm</td>\r\n			<td>960 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1050 mm</td>\r\n			<td>1100 mm</td>\r\n			<td>1200 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1280 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th colspan=\"1\" rowspan=\"1\">MALZEME KALINLIĞI</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>2,00 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4,00 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'uploads/gorseller/urun_gorsel-1656019521.jpg', '2022-06-23 18:25:21', '2022-06-23 18:25:21'),
(8, 'TANKLAR', 'tanklar', 'TANKLAR', 'TANKLAR', '<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" style=\"width:800px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li>\r\n				<p>Tanklarda istenilen şekilde delik a&ccedil;ılabilir.&nbsp;</p>\r\n\r\n				<ul>\r\n					<li>\r\n					<p>Derinlik ve kordon &ccedil;apı istenilen &ouml;l&ccedil;&uuml;de belirlenir.</p>\r\n					</li>\r\n				</ul>\r\n				</li>\r\n			</ul>\r\n			</td>\r\n			<td><img alt=\"\" src=\"https://cny.com.tr/wp-content/uploads/2021/04/tanklar-cizim.jpg\" style=\"height:400px; width:400px\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th colspan=\"1\" rowspan=\"1\">HACİM (L)</th>\r\n			<th colspan=\"1\" rowspan=\"1\">D (&Oslash;)</th>\r\n			<th colspan=\"1\" rowspan=\"1\">H</th>\r\n			<th colspan=\"1\" rowspan=\"1\">t</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>24 L</td>\r\n			<td>250 mm</td>\r\n			<td>390 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>30 L</td>\r\n			<td>320 mm</td>\r\n			<td>450 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>50 L</td>\r\n			<td>380 mm</td>\r\n			<td>510 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>50 L</td>\r\n			<td>320 mm</td>\r\n			<td>690 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>60 L</td>\r\n			<td>390 mm</td>\r\n			<td>570 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>60 L</td>\r\n			<td>380 mm</td>\r\n			<td>640 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>80 L</td>\r\n			<td>430 mm</td>\r\n			<td>630 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>100 L</td>\r\n			<td>430 mm</td>\r\n			<td>660 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>100 L</td>\r\n			<td>450 mm</td>\r\n			<td>640 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>120 L</td>\r\n			<td>395 mm</td>\r\n			<td>1070 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>160 L</td>\r\n			<td>395 mm</td>\r\n			<td>1200 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>200 L</td>\r\n			<td>480 mm</td>\r\n			<td>1200 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>200 L</td>\r\n			<td>600 mm</td>\r\n			<td>880 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>300 L</td>\r\n			<td>640 mm</td>\r\n			<td>940 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>500 L</td>\r\n			<td>750 mm</td>\r\n			<td>390 mm</td>\r\n			<td>2-4 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'uploads/gorseller/urun_gorsel-1656019790.jpg', '2022-06-23 18:29:50', '2022-06-23 18:29:50'),
(9, 'DÜZ DERİN SIVAMA', 'duz-derin-sivama', 'DÜZ DERİN SIVAMA', 'DÜZ DERİN SIVAMA', '<h1>D&Uuml;Z DERİN SIVAMA</h1>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Derin sıvamalarda istenilen şekilde delik a&ccedil;ılabilir.</p>\r\n	</li>\r\n	<li>\r\n	<p>Derin sıvamalar kordonlu olarak &uuml;retilebilir.</p>\r\n	</li>\r\n	<li>\r\n	<p>Derinlik ve kordon &ccedil;apı istenilen &ouml;l&ccedil;&uuml;de belirlenir.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><a href=\"https://cny.com.tr/wp-content/uploads/2021/04/duz-derin-sivama-cizim-1024x1024.jpg\" target=\"_self\"><img alt=\"\" src=\"https://cny.com.tr/wp-content/uploads/2021/04/duz-derin-sivama-cizim.jpg\" style=\"height:400px; width:400px\" /></a></p>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th colspan=\"2\" rowspan=\"1\">&Ccedil;AP &Ouml;L&Ccedil;&Uuml;LERİ</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>200 mm</td>\r\n			<td>220 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>250 mm</td>\r\n			<td>280 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>300 mm</td>\r\n			<td>320 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>380 mm</td>\r\n			<td>400 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>450 mm</td>\r\n			<td>500 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>600 mm</td>\r\n			<td>750 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>900 mm</td>\r\n			<td>958 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>450 mm</td>\r\n			<td>500 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>600 mm</td>\r\n			<td>750 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>900 mm</td>\r\n			<td>958 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th colspan=\"1\" rowspan=\"1\">MALZEME KALINLIĞI</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>2,00 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3,00 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'uploads/gorseller/urun_gorsel-1656019912.jpg', '2022-06-23 18:31:52', '2022-06-23 18:31:52'),
(10, 'KONİK', 'konik', 'KONİK', 'KONİK', '<h1>KONİK</h1>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Konikler kaynaksız &uuml;retilmektedir.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><a href=\"https://cny.com.tr/wp-content/uploads/2021/04/konik-cizim-1024x1024.jpg\" target=\"_self\"><img alt=\"\" src=\"https://cny.com.tr/wp-content/uploads/2021/04/konik-cizim.jpg\" style=\"height:400px; width:400px\" /></a></p>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th colspan=\"1\" rowspan=\"1\">D (&Oslash;)</th>\r\n			<th colspan=\"1\" rowspan=\"1\">d</th>\r\n			<th colspan=\"1\" rowspan=\"1\">H</th>\r\n			<th colspan=\"1\" rowspan=\"1\">t</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>220 mm</td>\r\n			<td>60 mm</td>\r\n			<td>374 mm</td>\r\n			<td>3 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>250 mm</td>\r\n			<td>60 mm</td>\r\n			<td>490 mm</td>\r\n			<td>3 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>280 mm</td>\r\n			<td>60 mm</td>\r\n			<td>505 mm</td>\r\n			<td>3 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>380 mm</td>\r\n			<td>60 mm</td>\r\n			<td>500 mm</td>\r\n			<td>3 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>400 mm</td>\r\n			<td>60 mm</td>\r\n			<td>520 mm</td>\r\n			<td>3 mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'uploads/gorseller/urun_gorsel-1656020009.jpg', '2022-06-23 18:33:29', '2022-06-23 18:33:29');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE `yazilar` (
  `id` int(10) UNSIGNED NOT NULL,
  `baslik` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kisa_aciklama` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_etiketler` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gorsel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `projeler`
--
ALTER TABLE `projeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sayfalar_menu_id_foreign` (`menu_id`);

--
-- Tablo için indeksler `site_ayarlar`
--
ALTER TABLE `site_ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `yazilar`
--
ALTER TABLE `yazilar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `projeler`
--
ALTER TABLE `projeler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `site_ayarlar`
--
ALTER TABLE `site_ayarlar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `yazilar`
--
ALTER TABLE `yazilar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD CONSTRAINT `sayfalar_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
