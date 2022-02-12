-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 10:17 AM
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
-- Database: `onlinestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'airpods', '2021-10-10 06:23:53', '2021-10-10 06:23:53'),
(2, 'watch', '2021-10-10 06:44:24', '2021-10-10 06:44:24'),
(3, 'shoes', '2021-10-13 06:14:53', '2021-10-13 06:14:53'),
(4, 'Joemalone Women prefume', '2021-10-13 06:18:46', '2021-10-13 06:18:46'),
(5, 'Ploaroid one step camera', '2021-10-14 06:25:09', '2021-10-14 06:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hand free.jpg', '2021-10-10 07:15:58', '2021-10-10 07:15:58'),
(2, 2, 'applewatch1.jpg', '2021-10-10 09:24:52', '2021-10-10 09:24:52'),
(3, 2, 'applewatch2.jpg', '2021-10-11 05:43:25', '2021-10-11 05:43:25'),
(4, 3, 'Gray Nike running shoes.jpg', '2021-10-13 06:17:07', '2021-10-13 06:17:07'),
(5, 4, 'Joemalone Women prefume.jpg', '2021-10-13 06:22:12', '2021-10-13 06:22:12'),
(6, 5, 'Ploaroid one step camera.jpg', '2021-10-13 06:28:09', '2021-10-13 06:28:09'),
(7, 6, 'Air Jordan 12 gym red.jpg', '2021-10-13 06:37:23', '2021-10-13 06:37:23'),
(8, 7, 'Men silver Byron Watch.jpg', '2021-10-13 06:39:56', '2021-10-13 06:39:56'),
(9, 8, 'Red digital smartwatch.jpg', '2021-10-13 07:07:17', '2021-10-13 07:07:17'),
(10, 1, 'airpods.jpg', '2021-10-14 05:44:15', '2021-10-14 05:44:15'),
(11, 1, 'airpods2.jpg', '2021-10-14 05:44:15', '2021-10-14 05:44:15'),
(12, 1, 'airpods3.jpg', '2021-10-14 05:47:24', '2021-10-14 05:47:24'),
(13, 2, 'applewatch3.jpg', '2021-10-16 06:22:02', '2021-10-16 06:22:02'),
(14, 2, 'applewatch1.jpg', '2021-10-16 06:23:47', '2021-10-16 06:23:47');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_10_10_045714_create_categories_table', 1),
(5, '2021_10_10_050338_create_products_table', 1),
(6, '2021_10_10_051133_create_images_table', 1),
(7, '2021_10_10_051836_create_images_table', 2),
(8, '2021_10_21_094504_create_reviews_table', 3),
(9, '2021_11_01_102557_create_carts_table', 4),
(10, '2021_11_08_060707_create_banners_table', 5),
(11, '2021_11_10_074952_create_billing_details_table', 5),
(12, '2021_11_10_103034_create_orders_table', 6),
(13, '2021_11_10_105331_create_oders_table', 7),
(14, '2021_11_10_105622_create_billing_details_table', 8),
(15, '2021_11_10_105852_create_billing_details_table', 9),
(16, '2021_11_10_110621_create_orders_table', 10),
(17, '2021_11_10_110712_create_billing_details_table', 10),
(18, '2021_11_10_111308_create_billing_details_table', 11),
(19, '2021_11_10_111422_create_orders_table', 12),
(20, '2021_11_10_112422_create_orders_table', 13),
(21, '2021_11_23_052853_create_orders_table', 14),
(22, '2021_11_23_053504_create_order_products_table', 14),
(23, '2021_11_23_061419_create_order_items_table', 15),
(24, '2021_12_02_093116_create_order_items_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalQuantity` int(11) NOT NULL,
  `totalPrice` double(8,2) NOT NULL,
  `zipCode` int(11) NOT NULL,
  `tracking_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `first_name`, `last_name`, `email`, `phone_number`, `company_name`, `country`, `address_line1`, `address_line2`, `district`, `city`, `totalQuantity`, `totalPrice`, `zipCode`, `tracking_no`, `created_at`, `updated_at`) VALUES
(68, 2, 'Nita', 'Rosales', 'vedohim@mailinator.com', '+1 (657) 452-3255', 'Guerrero and King Inc', 'Qui voluptatem veli', '980 East Green Hague Freeway', 'Hic et quia et culpa', 'Esse proident aut', 'Non quia dignissimos', 2, 2000.00, 96769, 'TCS746899497', '2021-12-02 04:11:27', '2021-12-02 04:11:27'),
(70, 2, 'Cameron', 'Brewer', 'hihakub@mailinator.com', '+1 (603) 621-7283', 'Barron Levine Associates', 'Necessitatibus quis', '98 Hague Avenue', 'In omnis ex modi imp', 'Voluptatem Lorem ve', 'Labore facere volupt', 2, 2000.00, 76304, 'TCS267680487', '2021-12-02 04:11:34', '2021-12-02 04:11:34'),
(71, 2, 'Anastasia', 'Berg', 'soqa@mailinator.com', '+1 (957) 242-7987', 'Medina and Beck Plc', 'Placeat culpa atque', '57 West Rocky Nobel Court', 'Provident omnis sus', 'Non repellendus Sit', 'Culpa dolor vel pers', 2, 2000.00, 34441, 'TCS360941631', '2021-12-02 04:13:21', '2021-12-02 04:13:21'),
(72, 2, 'Samson', 'Holcomb', 'hajiw@mailinator.com', '+1 (728) 381-6442', 'Harper and Hanson Inc', 'Delectus sed sed do', '41 First Avenue', 'Sed minim natus earu', 'Enim dignissimos iru', 'Omnis incidunt duci', 2, 2000.00, 48863, 'TCS504257505', '2021-12-02 04:14:38', '2021-12-02 04:14:38'),
(73, 2, 'Ori', 'Casey', 'mocime@mailinator.com', '+1 (631) 656-8593', 'Graves Hoover Co', 'Lorem nihil labore o', '333 North Milton Extension', 'Velit esse do eveni', 'Veniam quia eum mai', 'Explicabo Amet rer', 2, 500.00, 57890, 'TCS876748814', '2021-12-02 04:15:52', '2021-12-02 04:15:52'),
(74, 2, 'Dane', 'Hess', 'tiwaloroz@mailinator.com', '+1 (772) 132-6637', 'Deleon and Henderson LLC', 'Consequuntur laborum', '504 North Milton Road', 'Consequatur Archite', 'Rerum nesciunt cons', 'Quas illum odio eni', 2, 500.00, 46135, 'TCS199368999', '2021-12-02 04:19:27', '2021-12-02 04:19:27'),
(75, 2, 'Libby', 'Taylor', 'bugicyh@mailinator.com', '+1 (447) 154-4069', 'Howe and Head Traders', 'Quod dignissimos eni', '33 First Court', 'Aut quod et est maio', 'Atque nulla quia aut', 'Necessitatibus lauda', 2, 500.00, 35668, 'TCS209677428', '2021-12-02 04:20:29', '2021-12-02 04:20:29'),
(76, 2, 'Wynne', 'Matthews', 'zerefa@mailinator.com', '+1 (155) 857-7345', 'Jordan and Briggs Co', 'Aliquam veniam poss', '381 White Oak Parkway', 'Sint nisi eu id cup', 'Earum voluptas moles', 'Excepteur iusto earu', 2, 500.00, 23177, 'TCS710133550', '2021-12-02 04:21:05', '2021-12-02 04:21:05'),
(77, 2, 'Bert', 'Mcmahon', 'locacicit@mailinator.com', '+1 (314) 335-1041', 'Suarez and Wall LLC', 'Ipsam iure id repell', '414 Milton Extension', 'Soluta tenetur eius', 'Voluptatem commodo c', 'Ut voluptatem molli', 2, 500.00, 44123, 'TCS951165500', '2021-12-02 04:22:13', '2021-12-02 04:22:13'),
(78, 2, 'Aurora', 'Solomon', 'wyrojyj@mailinator.com', '+1 (606) 265-8927', 'Dotson Murphy Traders', 'Ea sed rerum soluta', '767 North Second Boulevard', 'Ex exercitationem an', 'Nostrud est quas ven', 'Cupidatat anim ducim', 2, 500.00, 99059, 'TCS671463724', '2021-12-02 04:23:26', '2021-12-02 04:23:26'),
(79, 2, 'Keefe', 'Ayers', 'xaciwyn@mailinator.com', '+1 (956) 886-6669', 'Kane and Maxwell Inc', 'Fuga Qui sed corpor', '560 North Hague Drive', 'Aliqua Labore et ea', 'Cillum reiciendis su', 'Molestias in eligend', 2, 500.00, 20720, 'TCS341482630', '2021-12-02 04:36:15', '2021-12-02 04:36:15'),
(80, 2, 'Aristotle', 'Hobbs', 'qevode@mailinator.com', '+1 (888) 556-5663', 'Wood and Eaton Plc', 'Sint quo quas ab acc', '82 Green First Drive', 'Tempore est esse se', 'Et proident enim qu', 'Occaecat eaque maior', 2, 500.00, 38919, 'TCS180648447', '2021-12-02 04:41:18', '2021-12-02 04:41:18'),
(81, 2, 'Macey', 'Vargas', 'lepypadas@mailinator.com', '+1 (224) 657-5892', 'Aguilar and Ingram Plc', 'Ex consequatur Plac', '21 Nobel Avenue', 'Enim velit velit ex', 'Dolor voluptatum vol', 'Deserunt irure tempo', 2, 500.00, 16408, 'TCS557153426', '2021-12-02 04:41:58', '2021-12-02 04:41:58'),
(82, 2, 'Odysseus', 'Marquez', 'lagon@mailinator.com', '+1 (115) 982-3473', 'Edwards and Stewart Associates', 'Cum quia sed quia pr', '81 South Rocky Oak Freeway', 'Aliquam ea omnis vel', 'Maxime similique vol', 'In quis lorem quia f', 2, 500.00, 17088, 'TCS395656027', '2021-12-02 04:43:29', '2021-12-02 04:43:29'),
(83, 2, 'Ifeoma', 'Bullock', 'luteqodag@mailinator.com', '+1 (584) 503-5719', 'Aguirre Wright Inc', 'Nihil aperiam sint e', '504 South New Street', 'Suscipit eius sunt i', 'Ut nostrum maiores d', 'Voluptatem est susci', 2, 500.00, 19897, 'TCS454976594', '2021-12-02 04:44:58', '2021-12-02 04:44:58'),
(84, 2, 'Chelsea', 'Melton', 'paqy@mailinator.com', '+1 (408) 355-6688', 'Patton and Mcmillan LLC', 'Minim error et optio', '60 East White Hague Avenue', 'Ullamco incididunt p', 'Aut cum commodo do d', 'Exercitation dolorem', 2, 500.00, 13646, 'TCS598909417', '2021-12-02 04:47:46', '2021-12-02 04:47:46'),
(86, 2, 'Inga', 'Mckay', 'vuxawyb@mailinator.com', '+1 (749) 472-9499', 'Sweet and Douglas Plc', 'Sapiente ea eum assu', '960 Milton Boulevard', 'Nesciunt molestiae', 'Dolore non nobis off', 'Hic cupidatat porro', 2, 500.00, 97919, 'TCS769829236', '2021-12-02 05:14:47', '2021-12-02 05:14:47'),
(88, 2, 'Clarke', 'Sanford', 'tikicyfysu@mailinator.com', '+1 (472) 594-3488', 'Webb Bass Inc', 'Architecto ducimus', '493 First Road', 'Ipsa quis aut conse', 'Aut aspernatur tempo', 'Dolorum consequuntur', 2, 500.00, 23154, 'TCS437939152', '2021-12-02 05:14:55', '2021-12-02 05:14:55'),
(89, 2, 'Ina', 'Hunt', 'qadizodij@mailinator.com', '+1 (288) 497-7903', 'Warner and Strickland Trading', 'Tempore dignissimos', '22 White First Freeway', 'Quidem officiis adip', 'Sit dolorem reprehe', 'Dolores quisquam et', 2, 500.00, 52132, 'TCS294404905', '2021-12-02 05:15:39', '2021-12-02 05:15:39'),
(90, 2, 'Mallory', 'Duran', 'myni@mailinator.com', '+1 (319) 664-4377', 'Byers and Dejesus Inc', 'Qui reiciendis commo', '67 East New Extension', 'Veritatis eveniet r', 'Elit aut totam dolo', 'Illo nulla perspicia', 2, 500.00, 90845, 'TCS189031025', '2021-12-02 05:17:35', '2021-12-02 05:17:35'),
(91, 2, 'Sydney', 'Lancaster', 'rafobyxyky@mailinator.com', '+1 (989) 464-3916', 'Eaton and Mcgowan Trading', 'Aliqua Eu Nam sunt', '68 Cowley Drive', 'Aliquip consequatur', 'Reprehenderit facer', 'In nisi nostrud temp', 2, 500.00, 17396, 'TCS701844777', '2021-12-02 05:20:50', '2021-12-02 05:20:50'),
(92, 2, 'Jasper', 'Vang', 'gyqem@mailinator.com', '+1 (274) 813-3433', 'Nunez Vaughn Co', 'Dolor earum quam ali', '33 Oak Road', 'Ex laudantium sed a', 'Et molestias explica', 'Qui doloribus autem', 2, 500.00, 62811, 'TCS324513289', '2021-12-02 06:17:55', '2021-12-02 06:17:55'),
(94, 2, 'Kuame', 'Black', 'nobe@mailinator.com', '+1 (953) 588-4309', 'Roberson and Landry Traders', 'Cupiditate consectet', '72 New Parkway', 'Tenetur excepteur vo', 'Aliquip doloremque h', 'Quia pariatur Non u', 2, 500.00, 51566, 'TCS491070102', '2021-12-02 06:18:47', '2021-12-02 06:18:47'),
(96, 2, 'Kylee', 'Booth', 'hiwuri@mailinator.com', '+1 (975) 934-6873', 'Cross Roach Traders', 'Optio cillum pariat', '490 North White Nobel Lane', 'Asperiores et maiore', 'Numquam magnam labor', 'Ea perspiciatis con', 2, 500.00, 69378, 'TCS502988278', '2021-12-02 06:19:06', '2021-12-02 06:19:06'),
(97, 2, 'Hashim', 'Bradley', 'hohicu@mailinator.com', '+1 (285) 954-4735', 'Moody Stephens Plc', 'Repudiandae incididu', '27 South Green First Drive', 'Mollit quibusdam et', 'Earum non in expedit', 'Earum culpa explica', 2, 500.00, 85533, 'TCS585456569', '2021-12-02 06:19:53', '2021-12-02 06:19:53'),
(99, 2, 'Emi', 'Hicks', 'kizi@mailinator.com', '+1 (917) 842-2889', 'Rosales Mathis Co', 'Eiusmod laborum labo', '38 East Rocky Fabien Lane', 'Rerum deleniti dolor', 'Est ut eligendi aut', 'Esse officia qui qua', 2, 500.00, 32528, 'TCS274900357', '2021-12-02 06:21:14', '2021-12-02 06:21:14'),
(100, 2, 'Ina', 'Chan', 'zypatomajy@mailinator.com', '+1 (628) 734-1111', 'Petty Tyson Traders', 'Eum id qui voluptas', '61 Oak Extension', 'Cillum esse et aliq', 'Anim adipisicing sun', 'Impedit sunt labore', 2, 500.00, 23583, 'TCS578719541', '2021-12-02 06:21:54', '2021-12-02 06:21:54'),
(101, 2, 'Amal', 'Chen', 'dimuxyh@mailinator.com', '+1 (492) 852-9337', 'Stewart Wilcox Inc', 'Nisi sit rerum cum', '91 Clarendon Lane', 'Aut sunt nesciunt d', 'Adipisci illum est', 'Et aliquam dolor et', 2, 500.00, 33198, 'TCS565395097', '2021-12-02 06:22:24', '2021-12-02 06:22:24'),
(102, 2, 'Sandra', 'Adams', 'gasy@mailinator.com', '+1 (814) 378-1496', 'Blair Gutierrez Co', 'Autem ex voluptatum', '871 Fabien Road', 'Impedit sequi et te', 'Sunt ut laboris ess', 'Cupiditate quo eiusm', 2, 500.00, 14897, 'TCS784048927', '2021-12-02 06:22:43', '2021-12-02 06:22:43'),
(103, 2, 'Gloria', 'Small', 'soxiqesike@mailinator.com', '+1 (718) 665-9368', 'Abbott Swanson Co', 'Eius qui illo non ma', '56 East Green Nobel Street', 'Voluptatem hic expe', 'Sed id voluptatem de', 'Esse porro autem do', 2, 500.00, 82962, 'TCS220111958', '2021-12-02 06:23:06', '2021-12-02 06:23:06'),
(104, 2, 'Elizabeth', 'Byers', 'xaky@mailinator.com', '+1 (335) 553-8822', 'Cross and Barrera Traders', 'Cillum ut aut sint v', '692 First Freeway', 'Dolores molestias an', 'Vel ex veniam et so', 'Consequatur in culp', 2, 500.00, 47114, 'TCS114731474', '2021-12-02 06:23:22', '2021-12-02 06:23:22'),
(106, 2, 'April', 'Parsons', 'malabygoj@mailinator.com', '+1 (286) 881-5907', 'Kirkland Welch LLC', 'Totam ut dolore odio', '100 North Second Drive', 'Explicabo Incididun', 'Est alias ut cum la', 'Dignissimos ipsum re', 2, 500.00, 10859, 'TCS378044336', '2021-12-02 06:23:41', '2021-12-02 06:23:41'),
(107, 2, 'Blaine', 'Massey', 'zezene@mailinator.com', '+1 (658) 887-3122', 'Ellis and Cantu Inc', 'Et velit vero asperi', '746 West Green Fabien Drive', 'Voluptas ducimus au', 'Dolor minima illum', 'Debitis omnis nisi l', 2, 500.00, 22306, 'TCS244103287', '2021-12-02 06:24:03', '2021-12-02 06:24:03'),
(108, 2, 'Nina', 'Lee', 'kodameb@mailinator.com', '+1 (903) 319-2866', 'Day Serrano Associates', 'Labore et amet nequ', '36 North Green Fabien Street', 'Pariatur Optio vol', 'Saepe exercitation e', 'Aute qui quis eaque', 2, 500.00, 92376, 'TCS525086094', '2021-12-02 06:24:16', '2021-12-02 06:24:16'),
(109, 2, 'Owen', 'Hoffman', 'xoji@mailinator.com', '+1 (784) 345-8368', 'Oneal Curry Traders', 'Repudiandae dignissi', '53 South Old Lane', 'Nisi velit ipsum ut', 'Adipisci reprehender', 'Dolore nihil dolor a', 2, 500.00, 92781, 'TCS214460621', '2021-12-02 06:25:32', '2021-12-02 06:25:32'),
(110, 2, 'Edan', 'Dudley', 'nyhoza@mailinator.com', '+1 (279) 673-1784', 'Mann Rose Co', 'Sit occaecat eveniet', '188 East Fabien Parkway', 'Quis impedit est n', 'Autem amet veniam', 'Qui ea proident ut', 2, 500.00, 55982, 'TCS408426787', '2021-12-02 06:26:33', '2021-12-02 06:26:33'),
(111, 2, 'Ferris', 'Parrish', 'hosi@mailinator.com', '+1 (508) 668-8728', 'Pennington and Benson LLC', 'Qui reprehenderit fu', '49 North Green Second Freeway', 'Laudantium commodi', 'Sit Nam sit commodo', 'In dolore illo conse', 2, 500.00, 23153, 'TCS485427046', '2021-12-02 06:27:06', '2021-12-02 06:27:06'),
(112, 2, 'Dane', 'Salinas', 'jyqapas@mailinator.com', '+1 (248) 145-3162', 'Kelly and Lyons LLC', 'Quo velit aut et eni', '71 Rocky New Freeway', 'Modi ea nemo officii', 'Fugiat assumenda as', 'Blanditiis ab et qua', 2, 500.00, 98152, 'TCS872986037', '2021-12-02 06:27:36', '2021-12-02 06:27:36'),
(113, 2, 'Charles', 'Crosby', 'xiraxe@mailinator.com', '+1 (136) 694-2538', 'Harding and Pruitt Co', 'Dolore velit veniam', '992 West Cowley Street', 'Ea deleniti qui quis', 'Voluptas magni ipsam', 'Ex consequatur Offi', 2, 500.00, 51267, 'TCS758517962', '2021-12-02 06:29:49', '2021-12-02 06:29:49'),
(115, 2, 'Deborah', 'Fowler', 'xalicogen@mailinator.com', '+1 (782) 562-8473', 'Fischer Blackburn Associates', 'Proident rerum cons', '44 Nobel Road', 'Qui amet pariatur', 'Eu error reprehender', 'Odio molestias exped', 2, 500.00, 23040, 'TCS623803648', '2021-12-02 06:31:02', '2021-12-02 06:31:02'),
(116, 2, 'Nadine', 'Hansen', 'pomofizu@mailinator.com', '+1 (813) 484-5438', 'Davis and Watkins Inc', 'Officia quia dolores', '853 East First Road', 'Sed expedita sit od', 'Voluptates vel offic', 'Vero explicabo Iust', 1, 2500.00, 59969, 'TCS921383176', '2021-12-03 02:38:46', '2021-12-03 02:38:46'),
(118, 2, 'Ifeoma', 'Clay', 'ladomim@mailinator.com', '+1 (209) 773-9013', 'Warner and Kinney Traders', 'Reprehenderit ut un', '340 South First Lane', 'Dolorem assumenda di', 'Veniam quibusdam fa', 'In odio qui quis vol', 1, 2500.00, 70174, 'TCS628664270', '2021-12-03 02:58:21', '2021-12-03 02:58:21'),
(119, 2, 'Benedict', 'Walls', 'dimut@mailinator.com', '+1 (903) 456-7186', 'Montoya Lucas Plc', 'Libero quisquam duis', '297 Hague Road', 'Corporis libero dolo', 'Temporibus voluptate', 'Odio similique aut s', 1, 2500.00, 87994, 'TCS913892999', '2021-12-03 03:11:24', '2021-12-03 03:11:24'),
(120, 2, 'Meghan', 'Mclean', 'todegemyd@mailinator.com', '+1 (963) 555-5577', 'Mccullough Diaz LLC', 'Blanditiis qui neces', '288 Nobel Boulevard', 'Ut a et aliquid non', 'Nostrum sed repellen', 'Qui possimus incidu', 1, 2500.00, 79119, 'TCS624508871', '2021-12-03 03:13:53', '2021-12-03 03:13:53'),
(121, 2, 'Sage', 'Powell', 'mykib@mailinator.com', '+1 (433) 837-1836', 'Allison Rowland Traders', 'Dignissimos rerum la', '295 Second Drive', 'Soluta nesciunt seq', 'Odit laborum reprehe', 'Recusandae Cumque d', 1, 1450.00, 68884, 'TCS653272135', '2021-12-08 02:12:58', '2021-12-08 02:12:58'),
(122, 2, 'Rafael', 'Carpenter', 'cyziriryxy@mailinator.com', '+1 (359) 558-1847', 'Blake Mcbride Associates', 'Neque eos facere al', '71 North Oak Street', 'Ipsum laboriosam t', 'A maiores est quia', 'Veniam enim ea rem', 1, 1450.00, 50240, 'TCS123098678', '2021-12-08 02:18:39', '2021-12-08 02:18:39'),
(123, 2, 'Stella', 'Tyler', 'degyzi@mailinator.com', '+1 (903) 672-4001', 'Conrad and Molina Trading', 'Nostrud in est in te', '89 South Old Drive', 'Doloribus quo et lab', 'Eos aute fugit solu', 'Officiis pariatur V', 1, 1450.00, 13506, 'TCS896546633', '2021-12-08 02:19:00', '2021-12-08 02:19:00'),
(124, 2, 'Marshall', 'Cummings', 'witufyk@mailinator.com', '+1 (623) 467-8897', 'Estes and Simon Associates', 'Tempora voluptatibus', '91 West Oak Lane', 'Commodi quia rem del', 'Facilis eum nisi sun', 'Et laboris velit est', 1, 1450.00, 53390, 'TCS404426421', '2021-12-08 02:20:00', '2021-12-08 02:20:00'),
(125, 2, 'Jemima', 'Marks', 'hazokiqum@mailinator.com', '+1 (931) 132-5799', 'Moore and Bullock Inc', 'Commodi nostrud obca', '112 West White Clarendon Freeway', 'Sed quaerat ut quas', 'Sit eu anim mollit a', 'Qui numquam aliquip', 1, 1450.00, 92772, 'TCS740689538', '2021-12-08 02:22:13', '2021-12-08 02:22:13'),
(126, 2, 'Lee', 'Herring', 'dexanuq@mailinator.com', '+1 (616) 589-7455', 'Massey and Shields Trading', 'Est placeat duis q', '292 Milton Lane', 'Aut nulla aut accusa', 'Itaque consequatur', 'Id magni velit in i', 1, 2000.00, 48001, 'TCS927569165', '2022-01-13 06:04:47', '2022-01-13 06:04:47'),
(127, 2, 'Drew', 'Serrano', 'bunacicaz@mailinator.com', '+1 (306) 983-6065', 'Davis Love Traders', 'Et iste et eum fugit', '676 Green Clarendon Court', 'Voluptas consequuntu', 'Aut officiis volupta', 'Unde voluptatem dolo', 1, 2000.00, 64614, 'TCS766935829', '2022-01-13 06:06:22', '2022-01-13 06:06:22'),
(128, 2, 'Kasper', 'Hughes', 'pitiwici@mailinator.com', '+1 (252) 756-5082', 'Valentine Hart Inc', 'Impedit pariatur S', '739 West New Avenue', 'Aut sed hic quo qui', 'Est officia rerum c', 'Et quis aut ut ea en', 1, 880.00, 78370, 'TCS497090060', '2022-01-15 01:12:18', '2022-01-15 01:12:18'),
(129, 2, 'Rama', 'Tyson', 'naqus@mailinator.com', '+1 (794) 741-7141', 'Dickson and Horton LLC', 'Excepturi nihil est', '59 Milton Road', 'Labore illum enim e', 'Ea explicabo Dignis', 'Nisi obcaecati quis', 1, 750.00, 44855, 'TCS341666912', '2022-01-15 01:15:38', '2022-01-15 01:15:38'),
(130, 2, 'Zahir', 'Blackburn', 'cide@mailinator.com', '+1 (735) 963-5384', 'Simon and Gill Inc', 'Eiusmod ipsam volupt', '49 West Rocky Fabien Road', 'Magnam aut lorem qui', 'Ab vel aliqua Quia', 'Omnis nesciunt arch', 1, 2500.00, 45859, 'TCS597509869', '2022-01-15 01:16:55', '2022-01-15 01:16:55'),
(131, 2, 'Burke', 'Parks', 'woqo@mailinator.com', '+1 (213) 319-3794', 'Rice and Griffith Inc', 'Odio provident pari', '86 West Hague Drive', 'Vel incididunt quod', 'Aut vero debitis deb', 'Consectetur quia la', 1, 1450.00, 64473, 'TCS263954527', '2022-01-15 01:42:32', '2022-01-15 01:42:32'),
(132, 2, 'Skyler', 'Mcclain', 'cypunozo@mailinator.com', '+1 (213) 661-9949', 'Fulton Chambers Traders', 'Magnam dolor officia', '620 Clarendon Street', 'Laudantium illum o', 'Sit numquam aut quos', 'Nulla sunt laboriosa', 1, 1450.00, 55605, 'TCS890519039', '2022-01-15 01:49:04', '2022-01-15 01:49:04'),
(133, 2, 'Jenna', 'Hahn', 'mecixaryfi@mailinator.com', '+1 (198) 389-3654', 'Le and Walls Co', 'Exercitationem aut e', '93 North Old Avenue', 'Enim est in qui maxi', 'Eveniet perspiciati', 'Qui impedit error m', 1, 880.00, 53036, 'TCS625578631', '2022-01-15 01:51:47', '2022-01-15 01:51:47'),
(134, 2, 'Cedric', 'Cabrera', 'sozah@mailinator.com', '+1 (153) 848-1656', 'Terry Wells Traders', 'Voluptates magna id', '643 South Milton Lane', 'Itaque deserunt reru', 'Cupiditate qui aliqu', 'Omnis voluptas irure', 1, 1450.00, 51607, 'TCS647088267', '2022-01-15 02:01:10', '2022-01-15 02:01:10'),
(135, 2, 'Tyrone', 'Trevino', 'niciloku@mailinator.com', '+1 (348) 432-4016', 'Chan and Carter LLC', 'Autem ipsum nulla d', '76 Fabien Lane', 'Magnam nulla qui ad', 'Voluptatem Repudian', 'Dolore consequatur i', 1, 750.00, 96519, 'TCS837800034', '2022-01-15 02:39:05', '2022-01-15 02:39:05'),
(136, 2, 'Iris', 'Marquez', 'kuqeg@mailinator.com', '+1 (262) 126-6504', 'Ward and Watts Trading', 'Molestias quis optio', '70 Fabien Freeway', 'Esse in cillum quos', 'Dolore nulla id per', 'Consequatur esse po', 1, 1450.00, 39070, 'TCS132452654', '2022-01-15 03:04:23', '2022-01-15 03:04:23'),
(137, 2, 'Hyacinth', 'Black', 'qoqixurifa@mailinator.com', '+1 (911) 233-3992', 'Vang Warren Plc', 'Ex autem consectetur', '46 West Nobel Street', 'Velit dolor exercita', 'Ipsa adipisicing qu', 'Culpa tempor in sed', 1, 880.00, 98318, 'TCS852156397', '2022-01-15 04:16:15', '2022-01-15 04:16:15'),
(138, 2, 'Kimberly', 'Simon', 'rixeqihaf@mailinator.com', '+1 (949) 593-4841', 'Dunn and Matthews Trading', 'Vitae veniam aliqui', '34 Nobel Drive', 'Voluptatum qui omnis', 'Id excepturi Nam an', 'Repellendus Sint pa', 1, 880.00, 91117, 'TCS309112999', '2022-01-15 04:19:23', '2022-01-15 04:19:23'),
(139, 2, 'Aladdin', 'Hancock', 'wosagetop@mailinator.com', '+1 (189) 251-5954', 'Young and Bates Plc', 'Officiis doloribus c', '647 Green Milton Freeway', 'Quos quis illo ullam', 'Deleniti eius sed er', 'Laboris aut deserunt', 1, 2000.00, 60684, 'TCS221282395', '2022-01-15 04:21:31', '2022-01-15 04:21:31'),
(140, 2, 'Todd', 'Pate', 'haxedasyfe@mailinator.com', '+1 (447) 945-8131', 'Woodward and Boyd Co', 'Eos dolore ipsam in', '60 West Green Hague Drive', 'Quia anim ut sint qu', 'Excepturi minim in m', 'Veniam sunt velit', 1, 880.00, 80873, 'TCS134202590', '2022-01-15 04:26:10', '2022-01-15 04:26:10'),
(141, 2, 'Kennan', 'Jarvis', 'woqufody@mailinator.com', '+1 (387) 721-7128', 'Hodges and Miranda Traders', 'Sit eius dolorum el', '859 East Clarendon Street', 'Hic aliquip magna su', 'Ullam facilis labori', 'Nulla sed blanditiis', 1, 880.00, 63044, 'TCS156892865', '2022-01-15 04:43:13', '2022-01-15 04:43:13'),
(142, 2, 'Yuri', 'Powers', 'jyraja@mailinator.com', '+1 (278) 329-3611', 'Kerr Snider Plc', 'Non delectus autem', '92 Green Old Road', 'Dolore nostrum delen', 'Aperiam anim aut qui', 'Debitis ipsum qui q', 1, 1450.00, 55258, 'TCS843114264', '2022-01-15 05:33:37', '2022-01-15 05:33:37'),
(143, 2, 'Tara', 'Harrington', 'jirupyhezu@mailinator.com', '+1 (659) 996-5916', 'Larson Meyers Inc', 'Minima hic tempore', '434 Green Cowley Drive', 'Reiciendis blanditii', 'Aut voluptatum volup', 'Sit eius temporibus', 1, 1450.00, 30110, 'TCS263769135', '2022-01-15 05:38:19', '2022-01-15 05:38:19'),
(144, 2, 'Ivor', 'Guzman', 'jusycur@mailinator.com', '+1 (344) 286-5053', 'Sloan Foreman Plc', 'Incididunt iste et c', '39 Fabien Boulevard', 'Elit unde id rem vo', 'Itaque impedit esse', 'Laboris eos elit di', 1, 1450.00, 60868, 'TCS744874796', '2022-01-16 01:31:53', '2022-01-16 01:31:53'),
(145, 2, 'Vivien', 'Hubbard', 'bofidylalu@mailinator.com', '+1 (392) 117-2674', 'Ryan Browning Plc', 'Et amet voluptas et', '926 Nobel Parkway', 'Sunt explicabo Et m', 'Consequat Ea quo a', 'Tempor officiis ut r', 1, 1450.00, 20974, 'TCS994377292', '2022-01-16 02:14:58', '2022-01-16 02:14:58'),
(146, 2, 'Omar', 'Heath', 'qumefah@mailinator.com', '+1 (711) 515-6035', 'Wade and Blanchard Co', 'Quo elit ea culpa', '392 North Fabien Extension', 'Excepteur velit non', 'Officiis ducimus vo', 'Vero qui illum reru', 1, 880.00, 96545, 'TCS820259286', '2022-01-16 02:21:48', '2022-01-16 02:21:48'),
(147, 2, 'Walter', 'Bartlett', 'zotuqykega@mailinator.com', '+1 (305) 774-7493', 'Mullen Blankenship Trading', 'Vitae libero dolorem', '276 North Rocky Old Extension', 'Ea eveniet aut veni', 'Cumque fugiat exped', 'Irure omnis eu bland', 1, 880.00, 67131, 'TCS217302151', '2022-01-16 02:24:41', '2022-01-16 02:24:41'),
(148, 2, 'Nell', 'Workman', 'fecepo@mailinator.com', '+1 (642) 472-1366', 'Anderson Trujillo Associates', 'Sint enim est sapien', '98 New Lane', 'Nesciunt adipisicin', 'Fugit est hic in do', 'Est incididunt elig', 1, 1450.00, 25801, 'TCS603313711', '2022-01-16 02:55:55', '2022-01-16 02:55:55'),
(149, 2, 'Brian', 'Dalton', 'nuzuno@mailinator.com', '+1 (867) 517-8717', 'Gould and Lyons LLC', 'Ut voluptatibus veli', '428 Fabien Lane', 'Natus ipsa fugiat', 'Nostrud quis rem bla', 'Quaerat quia aliquam', 1, 1700.00, 25823, 'TCS185793555', '2022-01-16 02:58:44', '2022-01-16 02:58:44'),
(150, 2, 'Xantha', 'Stuart', 'zade@mailinator.com', '+1 (376) 225-7564', 'Gonzalez and Garza Co', 'Esse atque quibusda', '91 Rocky Cowley Boulevard', 'Veniam dolorum opti', 'Distinctio Sed dolo', 'Officiis duis dolor', 1, 880.00, 27440, 'TCS563561277', '2022-01-17 01:47:49', '2022-01-17 01:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` double(8,2) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(12, NULL, NULL, NULL, NULL, '2022-01-13 06:04:47', '2022-01-13 06:04:47'),
(13, NULL, NULL, NULL, NULL, '2022-01-13 06:06:22', '2022-01-13 06:06:22'),
(14, NULL, NULL, NULL, NULL, '2022-01-15 01:12:18', '2022-01-15 01:12:18'),
(15, 129, 1, 1.00, 750, NULL, NULL),
(16, 130, 6, 1.00, 2000, NULL, NULL),
(17, 130, 2, 1.00, 1450, NULL, NULL),
(18, 130, 8, 1.00, 2500, NULL, NULL),
(19, 131, 3, 4.00, 3520, NULL, NULL),
(20, 131, 2, 1.00, 1450, NULL, NULL),
(21, 132, 2, 1.00, 1450, NULL, NULL),
(22, 133, 3, 1.00, 880, NULL, NULL),
(23, 134, 2, 1.00, 1450, NULL, NULL),
(24, 135, 3, 1.00, 880, NULL, NULL),
(25, 135, 1, 1.00, 750, NULL, NULL),
(26, 136, 2, 1.00, 1450, NULL, NULL),
(27, 137, 3, 1.00, 880, NULL, NULL),
(28, 138, 3, 1.00, 880, NULL, NULL),
(29, 139, 6, 1.00, 2000, NULL, NULL),
(30, 140, 3, 1.00, 880, NULL, NULL),
(31, 141, 3, 1.00, 880, NULL, NULL),
(32, 142, 2, 1.00, 1450, NULL, NULL),
(33, 143, 2, 1.00, 1450, NULL, NULL),
(34, 144, 2, 1.00, 1450, NULL, NULL),
(35, 145, 2, 1.00, 1450, NULL, NULL),
(36, 146, 3, 1.00, 880, NULL, NULL),
(37, 147, 3, 1.00, 880, NULL, NULL),
(38, 148, 2, 1.00, 1450, NULL, NULL),
(39, 149, 5, 1.00, 1700, NULL, NULL),
(40, 150, 3, 1.00, 880, NULL, NULL);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `retail_price` double(8,2) NOT NULL,
  `sale_price` double(8,2) NOT NULL,
  `sku` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `name`, `quantity`, `description`, `long_description`, `retail_price`, `sale_price`, `sku`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kui Ye Chen’s AirPods', 34, 'Kui Ye Chen’s AirPods The new AirPods deliver the wireless headphone experience, reimagined. Just pull them out of the charging case and they’re ready to use with your iPhone, Apple Watch, iPad, or Mac.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 700.00, 750.00, 93, 1, '2021-10-10 06:25:07', '2021-10-10 06:25:07'),
(2, 2, 'Apple watch', 34, 'Apple watch is best watch in the world', 'Apple Watch is a wearable smartwatch that allows users to accomplish a variety of tasks, including making phone calls, sending text messages and reading email. Apple released the Apple Watch on April 24, 2015.', 670.00, 1450.00, 94, 1, '2021-10-10 06:45:37', '2021-10-10 06:45:37'),
(3, 3, 'Gray Nike running shoes', 23, 'Gray Nike running shoes best ', 'Dominate your run and find the right fit for your running style with the latest men\'s running shoes from Nike.\r\n', 700.00, 880.00, 951, 1, '2021-10-09 07:45:00', '2021-10-09 07:45:00'),
(4, 4, 'Joemalone Women prefume', 99, 'Joemalone Women prefume best', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ', 290.00, 500.00, 999, 1, '2021-10-13 06:19:28', '2021-10-13 06:19:28'),
(5, 5, 'Ploaroid one step Camera', 239, 'Ploaroid one step camera best camera', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ', 1500.00, 1700.00, 9519, 1, '2021-10-13 06:26:23', '2021-10-13 06:26:23'),
(6, 3, 'Air Jordan 12 gym red', 99, 'Air Jordan gym ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ', 700.00, 2000.00, 938, 0, '2021-10-13 06:34:18', '2021-10-13 06:34:18'),
(7, 2, 'Men silver Byron Watch', 999, 'Men silver Byron Watch best', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ', 2900.00, 3000.00, 90, 0, '2021-10-13 06:38:49', '2021-10-13 06:38:49'),
(8, 2, 'Red digital smartwatch', 95, 'Red digital smartwatch best', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ', 1500.00, 2500.00, 9999, 0, '2021-10-13 07:06:14', '2021-10-13 07:06:14');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `comment`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'this product very amazing ', '2021-10-22', '2021-10-22 06:59:56', '2021-10-22 06:59:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'majid', 'majid@gmail.com', NULL, '$2y$10$MdPSgWO2MUqJz1k8C4lRu.bH7aNuORLPcqCTDmMQ1puCraSwXtJiq', 'admin', NULL, '2021-10-22 00:15:44', '2021-10-22 00:15:44'),
(2, 'ali shah', 'ali@gmail.com', NULL, '$2y$10$i6EpVfRCdF3sC/pdp5jzNetF.m/INdU3eN1FTC39WE5r6uT64CCkq', 'user', NULL, '2021-10-22 00:16:08', '2021-10-22 00:16:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_email_unique` (`email`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_categorie_id_foreign` (`categorie_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
