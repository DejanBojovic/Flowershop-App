-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 03:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flowershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` bigint(20) UNSIGNED NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `productID` int(11) DEFAULT NULL,
  `tekst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `userID`, `productID`, `tekst`, `created_at`, `updated_at`) VALUES
(10, 13, 3, 'Zaista mirise kao prolece :)', '2021-06-02 20:38:41', '2021-06-02 20:38:41'),
(12, 13, 34, 'Dobijen kao poklon za godisnjicu. Prelepo je.', '2021-06-02 20:39:37', '2021-06-02 20:39:37'),
(13, 13, 32, 'Jel ide i saksija uz ovo?', '2021-06-02 20:58:23', '2021-06-02 20:58:23'),
(14, 13, 10, 'Ovaj desno mi je omiljeni :D', '2021-06-02 20:59:43', '2021-06-02 20:59:43'),
(15, 12, 26, 'Za moju svalerku bice dosta.', '2021-06-02 21:00:18', '2021-06-02 21:00:18'),
(18, 15, 2, 'Za moju lepu bastu :)', '2021-06-02 21:04:28', '2021-06-02 21:04:28'),
(19, 15, 23, 'Jel radite aranzmane za svadbe?', '2021-06-02 21:04:53', '2021-06-02 21:04:53'),
(21, 10, 21, 'Kupujem za bastu!', '2021-06-02 21:07:26', '2021-06-02 21:07:26'),
(28, 21, 19, 'Osvezava radni prostor!! :)', '2021-06-05 22:40:07', '2021-06-05 22:40:51'),
(29, 21, 10, 'Bolji je ovaj levo!', '2021-06-05 22:40:44', '2021-06-05 22:40:44'),
(30, 14, 4, 'Kao u Holandiji :D', '2021-06-05 22:52:42', '2021-06-05 22:52:42'),
(31, 14, 17, 'Za terasu, milina :D', '2021-06-05 22:53:15', '2021-06-05 22:53:15'),
(32, 22, 4, 'Ok je', '2021-06-07 13:15:30', '2021-06-07 13:15:30'),
(33, 7, 5, 'Fino neko cvece!', '2021-06-07 15:24:04', '2021-06-07 15:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `likeID` bigint(20) UNSIGNED NOT NULL,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`likeID`, `userID`, `productID`, `created_at`, `updated_at`) VALUES
(4, 5, 3, '2021-06-01 19:53:12', '2021-06-01 19:53:12'),
(5, 5, 2, '2021-06-01 20:09:30', '2021-06-01 20:09:30'),
(7, 5, 16, '2021-06-02 20:35:57', '2021-06-02 20:35:57'),
(8, 5, 21, '2021-06-02 20:36:07', '2021-06-02 20:36:07'),
(9, 5, 22, '2021-06-02 20:36:16', '2021-06-02 20:36:16'),
(10, 5, 33, '2021-06-02 20:36:58', '2021-06-02 20:36:58'),
(11, 13, 3, '2021-06-02 20:38:26', '2021-06-02 20:38:26'),
(12, 13, 18, '2021-06-02 20:38:50', '2021-06-02 20:38:50'),
(13, 13, 34, '2021-06-02 20:39:38', '2021-06-02 20:39:38'),
(14, 13, 32, '2021-06-02 20:58:06', '2021-06-02 20:58:06'),
(15, 12, 26, '2021-06-02 21:00:19', '2021-06-02 21:00:19'),
(16, 12, 30, '2021-06-02 21:01:46', '2021-06-02 21:01:46'),
(17, 12, 24, '2021-06-02 21:01:51', '2021-06-02 21:01:51'),
(22, 15, 2, '2021-06-02 21:04:17', '2021-06-02 21:04:17'),
(23, 15, 23, '2021-06-02 21:05:02', '2021-06-02 21:05:02'),
(24, 15, 17, '2021-06-02 21:05:34', '2021-06-02 21:05:34'),
(26, 10, 12, '2021-06-02 21:07:35', '2021-06-02 21:07:35'),
(27, 10, 15, '2021-06-02 21:07:52', '2021-06-02 21:07:52'),
(31, 1, 21, '2021-06-04 00:59:36', '2021-06-04 00:59:36'),
(33, 21, 1, '2021-06-05 22:39:12', '2021-06-05 22:39:12'),
(34, 21, 4, '2021-06-05 22:39:23', '2021-06-05 22:39:23'),
(35, 21, 11, '2021-06-05 22:39:44', '2021-06-05 22:39:44'),
(36, 21, 19, '2021-06-05 22:40:12', '2021-06-05 22:40:12'),
(37, 21, 34, '2021-06-05 22:40:24', '2021-06-05 22:40:24'),
(38, 21, 5, '2021-06-05 22:40:59', '2021-06-05 22:40:59'),
(39, 21, 22, '2021-06-05 22:47:09', '2021-06-05 22:47:09'),
(40, 21, 20, '2021-06-05 22:48:20', '2021-06-05 22:48:20'),
(41, 14, 13, '2021-06-05 22:52:03', '2021-06-05 22:52:03'),
(42, 14, 15, '2021-06-05 22:52:12', '2021-06-05 22:52:12'),
(43, 14, 4, '2021-06-05 22:52:18', '2021-06-05 22:52:18'),
(44, 14, 17, '2021-06-05 22:52:58', '2021-06-05 22:52:58'),
(45, 14, 22, '2021-06-05 22:53:23', '2021-06-05 22:53:23'),
(46, 22, 4, '2021-06-07 13:13:48', '2021-06-07 13:13:48'),
(47, 7, 5, '2021-06-07 15:23:55', '2021-06-07 15:23:55');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageID` bigint(20) UNSIGNED NOT NULL,
  `ime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naslov` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tekst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Neprocitano'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageID`, `ime`, `email`, `naslov`, `tekst`, `created_at`, `updated_at`, `status`) VALUES
(4, 'Milovan', 'milovan@gmail.com', 'Kupus', 'Kolko kosta bate?', '2021-05-31 23:09:57', '2021-06-05 11:21:15', 'Neprocitano'),
(7, 'Predrag', 'predrag@gmail.com', 'Buket ruza', 'Kad mogu da svratim po ruze za zenu?', '2021-06-02 19:49:06', '2021-06-05 11:21:15', 'Neprocitano'),
(8, 'Dejan', 'dejan@gmail.com', 'Sajt', 'Ovaj sajt vam stvarno smece izgleda. Jel vam treba neko da sredi to?', '2021-06-02 19:49:51', '2021-06-05 11:21:15', 'Neprocitano'),
(9, 'Marjan', 'marjan@gmail.com', 'Jorgovan', 'Jel moze da se naruci 60 buketa jorgovana, i da li postoji kolicinski popust?', '2021-06-02 19:56:00', '2021-06-05 11:21:15', 'Procitano'),
(10, 'Jovana', 'jovana@gmail.com', 'Posao', 'Da li vam je potrebna jos jedna radnica?', '2021-06-02 19:56:47', '2021-06-05 11:21:15', 'Procitano'),
(11, 'Sladjana', 'sladjana@gmail.com', 'Orhideje', 'Kad vam stizu one lepe bele orhideje?', '2021-06-02 19:57:27', '2021-06-05 11:21:15', 'Procitano'),
(12, 'Milica', 'milica@gmail.com', 'Telefon', 'Zasto vam ne radi telefon sa kontakt stranice?', '2021-06-02 19:58:09', '2021-06-05 11:21:15', 'Procitano'),
(13, 'Jelica', 'jelica@gmail.com', 'Radno vreme', 'Jel vam je promenjeno radno vreme tokom pandemije?', '2021-06-02 19:58:47', '2021-06-05 11:21:15', 'Procitano'),
(14, 'Slavica', 'slavica@gmail.com', 'Ljubicice', 'Jel prodajete sadnice ljubicica ili u saksiji?', '2021-06-02 19:59:31', '2021-06-05 11:21:15', 'Procitano'),
(15, 'Ana', 'ana@gmail.com', 'Svadba', 'Jel mozete da obezbedite aranzman za svadbu?', '2021-06-02 20:00:21', '2021-06-05 11:21:15', 'Procitano'),
(16, 'okioafasf', 'qwr@sdgs', 'asd', 'poy tebra', '2021-06-07 15:22:51', '2021-06-07 15:22:51', 'Neprocitano');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2021_05_27_194207_create_products_table', 1),
(17, '2021_05_28_230005_add_img_to_products_table', 2),
(18, '2021_06_01_002539_create_messages_table', 3),
(19, '2021_06_01_010418_add_status_to_messages_table', 4),
(20, '2021_06_01_010824_add_status_to_messages_table', 5),
(21, '2021_06_01_130812_create_comments_table', 6),
(22, '2021_06_01_161424_rename_comments_column', 7),
(26, '2021_06_01_162002_rename_users_column', 8),
(27, '2021_06_01_162106_rename_products_column', 8),
(28, '2021_06_01_162219_rename_messages_column', 8),
(29, '2021_06_01_192907_create_likes_table', 9),
(30, '2021_06_02_152313_create_orders_table', 10),
(31, '2021_06_02_210805_resize_products_column', 11),
(32, '2021_06_04_012723_add_type_to_users_table', 12),
(33, '2021_06_05_235628_add_unique_to_users_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` bigint(20) UNSIGNED NOT NULL,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `userID`, `productID`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(4, 13, 12, 1, 'Odobreno', '2021-06-02 20:57:46', '2021-06-07 15:32:00'),
(5, 13, 32, 1, 'Pending', '2021-06-02 20:58:05', '2021-06-05 11:13:11'),
(10, 15, 2, 1, 'Odobreno', '2021-06-02 21:04:16', '2021-06-05 11:13:11'),
(11, 15, 23, 5, 'Odobreno', '2021-06-02 21:04:58', '2021-06-05 11:13:11'),
(12, 10, 21, 1, 'Odobreno', '2021-06-02 21:07:27', '2021-06-05 11:13:11'),
(13, 10, 12, 2, 'Odobreno', '2021-06-02 21:07:40', '2021-06-05 11:13:11'),
(14, 10, 15, 3, 'Odobreno', '2021-06-02 21:07:56', '2021-06-05 11:13:11'),
(18, 21, 1, 10, 'Pending', '2021-06-05 22:39:17', '2021-06-05 22:39:17'),
(19, 21, 20, 3, 'Pending', '2021-06-05 22:48:26', '2021-06-05 22:48:26'),
(20, 21, 18, 6, 'Pending', '2021-06-05 22:49:11', '2021-06-05 22:49:11'),
(21, 21, 34, 2, 'Pending', '2021-06-05 22:49:59', '2021-06-05 22:49:59'),
(22, 14, 4, 11, 'Pending', '2021-06-05 22:52:26', '2021-06-05 22:52:26'),
(23, 14, 17, 4, 'Pending', '2021-06-05 22:53:05', '2021-06-05 22:53:05'),
(24, 14, 22, 2, 'Pending', '2021-06-05 22:53:27', '2021-06-05 22:53:27'),
(25, 22, 4, 10, 'Pending', '2021-06-07 13:14:00', '2021-06-07 13:14:00'),
(26, 21, 2, 1, 'Pending', '2021-06-07 14:29:37', '2021-06-07 14:29:37'),
(27, 21, 2, 1, 'Pending', '2021-06-07 14:30:56', '2021-06-07 14:30:56'),
(28, 7, 5, 1, 'Pending', '2021-06-07 15:24:36', '2021-06-07 15:24:36'),
(29, 21, 5, 1, 'Pending', '2021-06-07 18:16:01', '2021-06-07 18:16:01'),
(30, 21, 16, 2, 'Pending', '2021-06-07 18:22:15', '2021-06-07 18:22:15'),
(31, 21, 16, 2, 'Pending', '2021-06-07 18:23:12', '2021-06-07 18:23:12'),
(32, 21, 2, 3, 'Pending', '2021-06-07 18:27:33', '2021-06-07 18:27:33'),
(33, 21, 16, 5, 'Pending', '2021-06-08 00:01:50', '2021-06-08 00:01:50'),
(34, 21, 16, 3, 'Pending', '2021-06-08 00:02:33', '2021-06-08 00:02:33'),
(35, 21, 16, 1, 'Pending', '2021-06-08 00:02:54', '2021-06-08 00:02:54'),
(36, 21, 21, 3, 'Pending', '2021-06-08 00:14:52', '2021-06-08 00:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` bigint(20) UNSIGNED NOT NULL,
  `naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` double DEFAULT NULL,
  `naStanju` int(11) DEFAULT NULL,
  `dimenzije` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opis` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `naziv`, `cena`, `naStanju`, `dimenzije`, `opis`, `created_at`, `updated_at`, `img`) VALUES
(1, 'Ruza', 450, 2, '20x40', 'Ruža (lat. Rosa) je rod zeljastih biljaka iz porodice ruža (Rosaceae). Uzgaja se zbog lepih mirisnih cvetova i do danas postoje mnogi hibridi i kultivari ruža koji se međusobno razlikuju po boji i izgledu cveta, mirisu i postojanju trnova. Postoji veliki broj divljih ruža, čiji se plod (šipak, šipurak) bogat vitaminom C koristi u ishrani i za pripremu čajeva. Od oko 100 vrsta roda ruža u Srbiji raste dvadesetak.', NULL, '2021-06-07 15:28:49', 'images/flowers/Ruza.jpg'),
(2, 'Ljubicica', 300, 5, '10x20', 'Ljubičica (lat. Viola), engleski naziv Violet, je rod dikotiledonih skrivenosemenica i potiče iz porodice ljubičica (lat. Violaceae). Obuhvata otprilike 500 vrsta koje su smeštene uglavnom u umerenim severnim predelima zemlje - Australija, Andi u Južnoj Americi, takođe je u našim krajevima veoma rasprostranjena i popularna biljka.', NULL, '2021-06-07 18:27:33', 'images/flowers/Ljubicica.jpg'),
(3, 'Jorgovan', 600, 12, '30x30', 'Jorgovan svakako spada pod baštovanski „klasik“, jer svojim divnim mirisom i prolećnim cvetanjem ulepšava svaki vrt već na samom početku sezone. Ono što ga zaista čini posebnim jesu cvetovi  koji rastu u „grozdovima“ i pre svega očaravajući miris. Ako ste se pitali kako miriše proleće – miriše na jorgovan.', NULL, NULL, ' images/flowers/Jorgovan.jpg'),
(4, 'Lale', 200, 2, '30x35', 'Ovo lepo ukrasno cveće donešeno je u Evropu iz Turkestana, svoje postojbine. Do danas je u Holandiji, njihovoj drugoj domovini, odgojeno više hiljada vrsta.\r\n\r\nNa tržištu se pojavljuje samo nekoliko stotina najlepših sorti. Lukovica lale je osrednje veličine, duguljasta ili kruškasta, pri dnu okruglasta, pri vrhu zašiljena, odevena iznutra zadebljanom, spolja glatkom, tankom i suvom ljuskom.', NULL, '2021-06-07 13:14:00', 'images/flowers/Lale.jpg'),
(5, 'Orhideja', 750, 0, '20x40', 'Iako su tropske i suptropske vlažne šume njihovo prirodno stanište uspešno naseljavaju sve krajeve sveta, osim Antarktika. Svojim očaravajućim mirisom privlače pažnju ljudi. Dok pred njihovim nežnim, egzotičnim cvetovima niko ne ostaje ravnodušan. Te ne čudi što se svi slažu da su one najlepše saksijsko cveće.', NULL, '2021-06-07 18:16:01', 'images/flowers/Orhideja.jpg'),
(10, 'Kaktus', 340, 3, '30x60', 'Kaktusi predstavljaju biljke skromnih zahteva, fiziološki odnosno morfološki se svrstavaju u mesnatice koje čine i mnogi drugi primerci poput agava, rustike, aloe. Jednom kada kupite kaktus zaljubićete se u njega i slano ćete uvećavavati svoju zbirku ovih predivnih biljaka', '2021-06-01 15:03:49', '2021-06-01 15:03:49', 'images/flowers/Kaktus.jpg'),
(11, 'Buket', 860, 4, '50x60', 'Buket cveća je uvek dobar izbor kada niste sigurni šta da poklonite. Izaberite omiljeni iz naše bogate online prodavnice ili na licu mesta u cvećari opišite kako želite da vaš buket iz snova izgleda. Pomoći', '2021-06-02 17:48:09', '2021-06-02 17:48:09', 'images/flowers/Buket.jpg'),
(12, 'Aloe Vera', 1800, 12, '60x40', 'Aloe vera je drevna afrička biljka, o kojoj prvi zapisi postoje još na mesopotamijskoj pločici iz 2200. godine p.n.e., a danas je jedna od najpopularnijih biljaka zbog lekovitih svojstava i široke primene u kozmetičkoj i farmaceutskoj industriji.', '2021-06-02 20:46:57', '2021-06-02 21:07:40', 'images/flowers/Aloe-vera.jpg'),
(13, 'SISC Sanseverija cilindrična', 4100, 8, '80x40', 'U narodu poznata kao „cilindrična sablja“, „afričko koplje“, je višegodišnja sukulenta koja potiče iz južne Afrike. Ova atraktivna i neobična zimzelena biljka ima mesnate listove koji u osnovi čine rozetu.', '2021-06-02 20:46:57', '2021-06-05 21:29:34', 'images/flowers/Sisc.jpg'),
(14, 'Phalaenopsis orhideja sa 2 grane', 2750, 15, '40x40', 'Phalaenopsis orhideja je biljka za koju se smatra da je jedna od najlakših za održavanje. Ne traže mnogo svetlosti, te im najviše odgovara istočna strana prozora. Temperatura koja joj odgovara je od 15°C do 30°C. ', '2021-06-02 20:46:57', NULL, 'images/flowers/Orhideja-dve.jpg'),
(15, 'Yucca', 1300, 11, '50x30', 'Poznato je trideset do četrdeset vrsta roda Yucca, koje prirodno rastu u južnoj americi. Mnoge se mogu uzgajati vani u umerenim područjima, a neke mogu podneti čak i oštre mrazeve.', '2021-06-02 20:46:57', '2021-06-02 21:07:56', 'images/flowers/Yucca.jpg'),
(16, 'Kaktus sa cvetom', 550, 2, '20x20', 'Predivni kaktusi sa cvetom u razlicitim bojama.', '2021-06-02 20:46:57', '2021-06-08 00:02:55', 'images/flowers/Kaktus-cvet.jpg'),
(17, 'Dracena', 2100, 11, '30x30', 'Dracena je veoma popularna među ljubiteljima sobnog zelenila. Nije zahtevna za održavanje, a ubraja se u biljke čistače vazduha, što je još jedna od njenih prednosti.', '2021-06-02 20:46:57', '2021-06-05 22:53:05', 'images/flowers/Dracena.jpg'),
(18, 'Chamaedorea', 700, 9, '20x40', 'Brdska palma ili šamadorea je vrsta patuljaste i spororastuće palme. Ova sobna biljka je veoma dekorativna, nije preterano osetljiva i jednostavna je za gajenje. Visine oko 60 cm. Pored toga što oplemenjuje enterijer doma lepim izgledom, ona je i pročišćivac vazduha.', '2021-06-02 20:46:57', '2021-06-05 22:49:11', 'images/flowers/Chamaedorea.jpg'),
(19, 'Areca', 600, 13, '30x70', 'Areka palma (Chrysalidocarpus lutescens), poznata i kao areca ili kućna leptir palma, jedna je od najkorišćenijih vrsta palmi za svetle enterijere. Karakterišu je uski, uspravni i peroliki listovi koji se pri vrhu savijaju formirajući kitnjaste lepeze.', '2021-06-02 20:46:57', '2021-06-02 21:03:28', 'images/flowers/Areca.jpg'),
(20, 'Bozicna zvezda', 650, 11, '30x30', 'Božićna zvezda (Euphorbia pulcherrima) je višegodišnja biljka koja svojim raskošnim crvenim listovima može oplemeniti i ulepšati vaš dom. Idealna temperatura na kojoj božićna zvezda raste jeste od 12 do 25 stepeni.', '2021-06-02 20:46:57', '2021-06-05 22:48:26', 'images/flowers/Bozicna-zvezda.jpg'),
(21, 'Vrisea', 1100, 11, '30x50', 'Vrisea je veoma dekorativna sobna biljka zbog svog cveta u obliku plamenog mača, te predstavlja izuzetan detalj u enterijeru. Odgovara im indirektna sunčeva svetlost ili polusenka i temperatura od 18°C do 21°C.\r\n', '2021-06-02 20:46:57', '2021-06-08 00:14:52', 'images/flowers/Vrisea.jpg'),
(22, 'Lucky Bambus\r\n', 1800, 13, '30x40', 'Za entuzijaste koji tek počinju da se bave hortikulturom, Lucky bambus je idealna polazna tačka. Naime, bambus je izuzetno lak za održavanje i jako brzo raste. Fascinantna karakteristika ove biljke je da kao podlogu koristi vodu i/ili zemlju. Može se naći u različitim formama, a od više stabljika prave se izuzetno interesantni aranžmani.', '2021-06-02 21:13:16', '2021-06-05 22:53:27', 'images/flowers/Lucky-bambus.jpg'),
(23, 'Buket - Ljiljan, gipsofila i zelenilo', 1850, 10, '40x40', 'Prelep buket ljuljana, gipsofila i zelenila.', '2021-06-02 21:13:16', '2021-06-02 21:04:58', 'images/flowers/Buket-ljiljan.jpeg'),
(24, 'Buket - Gerberi i irisi sa dekoracijom', 1950, 15, '30x60', 'Buket je napravljen sa žutim gerberima i plavim irisima koji su poput leptirića koji slete na mirisno lepo cveće. Iznenadite dragu osobu simpatičnim buketom i ulepšajte joj dan.', '2021-06-02 21:13:16', NULL, 'images/flowers/Buket-gerberi.jpg'),
(25, 'Bele orhideje, paprat i gipsofila u korpici', 1600, 15, '30x40', 'Aranžman je napravljen u pletenoj crno-beloj korpici sa belim orhidejama i dekoracijom od gipsofile i paprati. Pogodan je kao dekoracija na Vašem radnom stolu, u kancelariji ili nekom mestu gdje će doći do izražaja i oplemeniti prostor.', '2021-06-02 21:13:16', NULL, ' images/flowers/Bele-orhideje.jpg'),
(26, 'Ruže, mini ruže, solidago i gipsofila\r\n', 2100, 15, '30x30', 'Aranžman je napravljen u beloj pletenoj drvenoj korpici sa crvenim ružama, crveno-žutim mini ružama i dekoracijom od solidaga i gipsofile. Pogodan je da ga nosite kao poklon kada krenete u posetu dragim prijateljima i sasvim sigurno će uneti toplinu u njihov dom.', '2021-06-02 21:13:16', NULL, ' images/flowers/Korpa-ruze.jpg'),
(27, 'Žute ruže, margarete, kermit, gipsofila i molucela', 1950, 15, '60x30', 'Aranžman je napravljen u drvenoj korpici sa žutim ružama, ljubičastim margaretama i dekoracijom od gipsofile, paprati i molucele. Kombinacija ovih vatrenih boja je idealna kada nekoga želite da ostavite bez teksta i da dragoj osobi tek tako bez nekog posebnog razloga ulepšate dan.', '2021-06-02 21:13:16', NULL, ' images/flowers/Zute-ruze.jpg'),
(28, 'Buket - Narandžaste ruže i alstromerije, trefern i šamalacijum', 1900, 15, '40x40', 'Šarmantan buket napravljen od narandžastih ruža i alstromerije sa dekoracijom od treferna i šamalacijuma, uneće lepu energiju  za svaku priliku, preneće iskrene čestitke prijateljima, a oduševiti Vašu voljenu osobu. ', '2021-06-02 21:13:16', NULL, ' images/flowers/Narandzaste-ruze.jpg'),
(29, 'Buket - Suncokreti sa dekoracijom', 1450, 15, '40x30', 'Prelep buket suncokreta sa dekoracijom.', '2021-06-02 21:13:16', NULL, ' images/flowers/Suncokret.jpg'),
(30, 'Buket - Alstromerije sa dekoracijom', 1500, 15, '30x40', 'Prelep buket Alstromerije sa dekoracijom.', '2021-06-02 21:13:16', NULL, ' images/flowers/Alstromerije.jpg'),
(31, 'Buket - Orhideje, soldago i zelenilo', 1950, 15, '40x60', 'Buket je napravljen sa belim orhidejama i dekoracijom od soldaga i dekorativnog zelenila. Dama kojoj poklonite ovakav buket sigurno neće ostati ravnodušna, jer su orhideje simbol, lepote, poštovanja i elegancije.', '2021-06-02 21:13:16', NULL, ' images/flowers/Buket-orhideje.jpg'),
(32, 'Buket - Crvene ruže, hiperikum i žuti soldago', 4100, 14, '40x40', 'Ovaj prelepi i elegantni buket je napravljen od crvenih ruža sa dekoracijom od crvenog hiperikuma, žutog soldaga i zelenila. Crvene ruže su simbol kako ljubavi i romantike, tako i lepote i savršenstva. ', '2021-06-02 22:32:11', '2021-06-02 20:58:05', 'images/flowers/Buket-hiperkum.jpg'),
(33, '101 bela ruža u buketu', 18000, 15, '50x50', 'Kada želite da nekome iskažete zahvalnost, poštovanje i iskrene osećaje 101 bela ruža u buketu je savršen poklon. Uz par lepih reči izmamićete dragoj osobi osmeh na lice i ostavićete nezaboravan utisak.', '2021-06-02 22:32:11', NULL, 'images/flowers/Buket-bele.jpg'),
(34, '101 crvena ruža u buketu', 15000, 12, '50x50', 'Kada želite da voljenoj dami izmamite osmeh na lice, da joj čestitate rođendan, godišnjicu ili neku drugu posebnu priliku 101 crvena ruža u buketu je savršen poklon. Crvene ruže kao simbol iskrene ljubavi, ostavljaju bez teksta i sigurno su pun pogodak pri izboru poklona za Vašu dragu.\r\n\r\n', '2021-06-02 22:32:11', '2021-06-05 22:49:59', 'images/flowers/Buket-crvene.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(5, 'pericaa', 'perica@gmail.com', NULL, '$2y$10$5A1yuTPhDJkUTB9.BMAP0.ZffzIGMor09lXqycNsjXW9xgTkTlMIi', NULL, '2021-06-01 19:53:03', '2021-06-05 22:10:33', 'user'),
(7, 'mikica', 'mikica@gmail.com', NULL, '$2y$10$AjXlF0.bsf8qpDX71kc8Du3WP2l9OiKoUFy9AZZjc.72YqmPShxum', NULL, '2021-06-02 19:42:05', '2021-06-02 19:42:05', 'user'),
(8, 'sibica', 'sibica@gmail.com', NULL, '$2y$10$cAPkrlNy.7R0v2gg7UDNl.VJQgBMINh9fySnszDjwIFyxv9msTJoG', NULL, '2021-06-02 19:42:19', '2021-06-02 19:42:19', 'editor'),
(9, 'jovica', 'jovica@gmail.com', NULL, '$2y$10$D/Nc9Cgw8xoXKBCpU3U9gO62VBVXGi5wssWB/litQeDOOMTaLGxQO', NULL, '2021-06-02 19:42:31', '2021-06-02 19:42:31', 'user'),
(10, 'bozur', 'bozur@gmail.com', NULL, '$2y$10$mf.OJtanyVhUFIofiq0isOZOa8g1ygJTN1AoBHG2Nhcm3JylDPXaO', NULL, '2021-06-02 19:42:46', '2021-06-02 19:42:46', 'user'),
(12, 'james', 'james@gmail.com', NULL, '$2y$10$FO1rFIvRgpypPd6Q3I6Zz.A5AIDqDi8XTFdiIj015B80QN8eIEin2', NULL, '2021-06-02 19:48:06', '2021-06-02 19:48:06', 'user'),
(13, 'jovana', 'jovana@gmail.com', NULL, '$2y$10$Ewfy76yAmbLm0FpcdFZqwOi739gbOEMZnHTfw9SB9vx.09HXrY2KW', NULL, '2021-06-02 20:37:56', '2021-06-02 20:37:56', 'user'),
(14, 'milica', 'milica@gmail.com', NULL, '$2y$10$Nq1Y7eeqtaW6ny0Z3zjYTuNVRt6IxVncNWurC2.wUJ2BOh3yq/3vO', NULL, '2021-06-02 20:38:06', '2021-06-02 20:38:06', 'user'),
(15, 'sladjana', 'sladjana@gmail.com', NULL, '$2y$10$eqbx8bwCHnwcElHdxPhR/uyq8cYG2GqBv/P3L0qOvNE3ym0LeboB.', NULL, '2021-06-02 20:38:17', '2021-06-02 20:38:17', 'user'),
(16, 'johnny', 'bravo@gmail.com', NULL, '$2y$10$4CzxYUoefgJ/5N6CkmnThu5/j7ViSL31d.4RJmboJhM8wX98fI5TO', NULL, '2021-06-04 00:45:00', '2021-06-04 00:45:00', 'user'),
(17, 'nekoo', 'nekoo@gmail.com', NULL, '$2y$10$pFXPgpDECqZCyLbwjlroTexs1nk5kMJieTQGZwWf1iA..VU3olKMS', NULL, '2021-06-04 00:46:38', '2021-06-04 00:46:38', 'user'),
(18, 'aaaaaaa', 'aaaaaa@gmail.com', NULL, '$2y$10$dikqRw0yCsuwhS//74JlVuo6GlxTFSGckq78iH0nNSigt697VU/TK', NULL, '2021-06-04 00:48:26', '2021-06-04 00:48:26', 'editor'),
(20, 'perica', 'sikimiki@gmail.com', NULL, '$2y$10$M5xXX1dyW7vvp5mvc6pnM.hlSp/YN.iF3mskel15iDN2SWCnUybLK', NULL, '2021-06-05 21:59:37', '2021-06-05 21:59:37', 'user'),
(21, 'dejan', 'dejan@gmail.com', NULL, '$2y$10$8/dIfmbsZEtkweZ7evPspuP/bjs1I8mYueB2ACjYEzlK2hSO13Moi', NULL, '2021-06-05 22:36:00', '2021-06-05 22:54:30', 'admin'),
(22, '12345', '12345@gmail.com', NULL, '$2y$10$zlzWiJrN0jyUr0vjB58aouyyEjUSv5MFhR0ES.a0Pqw7oI2HAJEzC', NULL, '2021-06-07 13:12:52', '2021-06-07 13:12:52', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`likeID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `likeID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
