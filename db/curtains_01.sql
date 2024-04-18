-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2024 at 03:47 AM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curtains_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `type` enum('input','select','radio','checkbox') NOT NULL,
  `content` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `new_product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hidden` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `heading`, `type`, `content`, `description`, `new_product_id`, `hidden`) VALUES
(2, 'Width (mm)', 'input', NULL, 'Please Enter a number from 250 to 5500', 1, 0),
(3, 'Drop (mm)', 'input', NULL, 'Please enter a number from 500 to 3200.', 1, 0),
(4, 'select fabric', 'select', 'uniline dawn blockout,belic blockout (Premier),uniview 10% (Sunscreen), belice light filtering, palermo (Sheer)', NULL, 1, 1),
(6, 'Width (mm)', 'input', NULL, 'Please enter a number from 250 to 4500.', 3, 0),
(7, 'Drop (mm)', 'input', NULL, 'lease enter a number from 500 to 3500.\r\n', 3, 0),
(8, 'Pick Your Size & Fabric', 'select', '89mm Vibe Vertical,89mm Karma Vertical,100mm Vibe Vertical,127mm Vibe Vertical,127mm Karma Vertical', NULL, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `billing_addresses`
--

CREATE TABLE `billing_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `company_name` varchar(191) DEFAULT NULL,
  `country` varchar(191) NOT NULL,
  `street_address` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `state` varchar(191) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billing_addresses`
--

INSERT INTO `billing_addresses` (`id`, `name`, `company_name`, `country`, `street_address`, `city`, `state`, `postcode`, `created_at`, `updated_at`, `user_id`) VALUES
(9, 'Priya Rathi', NULL, 'New Zealand', '45', 'iopi', '3', '4656', '2022-10-18 02:43:53', '2022-10-18 02:43:53', NULL),
(10, 'Priya Rathi', NULL, 'New Zealand', '45', 'iopi', '3', '4656', '2022-10-18 02:47:29', '2022-10-18 02:47:29', NULL),
(11, 'Anand Bairagi', NULL, 'New Zealand', '87', 'iopi', '3', '4656', '2022-10-18 04:40:45', '2022-10-18 04:40:45', NULL),
(12, 'Anand Bairagi', NULL, 'New Zealand', '87', 'iopi', '3', '4656', '2022-10-18 04:41:15', '2022-10-18 04:41:15', NULL),
(13, 'Anand Bairagi', NULL, 'New Zealand', '45', 'iopi', '1', '1456', '2022-10-18 04:45:11', '2022-10-18 04:45:11', NULL),
(14, 'Keshav Sugaliya', NULL, 'New Zealand', '45', 'Dhar', '4', '4589', '2022-10-18 04:47:06', '2022-10-18 04:47:06', NULL),
(15, 'Anand Bairagi', NULL, 'New Zealand', '45', 'Dutch', '1', '5487', '2022-10-18 04:48:22', '2022-10-18 04:48:22', NULL),
(16, 'Anand Bairagi', NULL, 'New Zealand', '54', 'Dutch', '1', '1111', '2022-10-18 05:30:22', '2022-10-18 05:30:22', NULL),
(17, 'Anand Bairagi', NULL, 'New Zealand', '45', 'Dhar', '5', '4584', '2022-10-18 06:13:43', '2022-10-18 06:13:43', NULL),
(18, 'Anand Bairagi', 'Pi Noodies', 'New Zealand', '45', 'Dutch', '4', '5487', '2022-11-10 23:03:57', '2022-11-10 23:03:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `width` bigint(20) UNSIGNED NOT NULL,
  `drop` bigint(20) UNSIGNED NOT NULL,
  `fabric_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `side_winder` varchar(191) NOT NULL,
  `bottom_rail` varchar(191) NOT NULL,
  `roll` varchar(191) NOT NULL,
  `chain_motor` varchar(191) NOT NULL,
  `control_side` varchar(191) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `sunscreen` varchar(100) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `width`, `drop`, `fabric_id`, `color_id`, `side_winder`, `bottom_rail`, `roll`, `chain_motor`, `control_side`, `price`, `sunscreen`, `comment`, `created_at`, `updated_at`, `user_id`, `quantity`) VALUES
(1, 500, 500, 1, 85, 'white', 'silver', 'front', 'white plastic', 'left', 30.00, NULL, NULL, NULL, NULL, 29, 1),
(2, 0, 0, 3, 108, 'white', 'silver', 'front', 'white plastic', 'rechargeable battery', 0.00, NULL, NULL, NULL, NULL, 32, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `img_name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `img_name`) VALUES
(1, 'roller blinds', 'We’re always looking for ways to improve modern living and our custom made roller blinds do just that. New Zealand owned and operated, our products are high on quality but low in cost, coming with a 5-year warranty for a stress-free purchase. Buying online not only saves money, it saves you time and energy as Blinds 4U support you through the entire process. Please click on any of the headings below for more details, or to just order a roller blind', 'The-roller-blinds.jpeg'),
(2, 'vertical blinds', 'Vertical blinds are just as stylish and popular as they have always been. This contemporary solution to sunlight control brings simple shade and privacy in a timeless design. Choose from a selection of modern colours to match your interior and save money whilst doing so with Blinds 4U.Both options of blinds provide incredible shelter from sunlight. Choosing between the two is down to personal preference. The main differences are the vertical vs horizontal shadows the blinds will cast in your home. How would you prefer sunlight to shine through? And lastly, vertical blinds are arguably easier to open as they slide to the side, whereas horizontal blinds lift from above so you have the added weight of the blinds as you open them. This said, there is no difference between the two when adjusting the angle of your blinds.', 'home-interior-vertical-blinds-sliding-door-blinds.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fabrics`
--

CREATE TABLE `fabrics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `price` decimal(2,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `new_product_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fabrics`
--

INSERT INTO `fabrics` (`id`, `name`, `price`, `created_at`, `updated_at`, `new_product_id`) VALUES
(1, 'Dawn (Basic Blackout)', 0.12, NULL, NULL, 1),
(2, 'Belice Blockout (Premier)', 0.15, NULL, NULL, 1),
(3, 'Belice Light Filtering', 0.19, NULL, NULL, 1),
(4, 'Unview 10% (Sunscreen)', 0.20, NULL, NULL, 1),
(5, 'aluminium', 0.11, NULL, NULL, 5),
(6, 'Wooden', 0.05, NULL, NULL, 5),
(7, 'faux wood', 0.16, NULL, NULL, 5),
(8, '89mm width blades', 0.15, NULL, NULL, 3),
(9, '100mm width blades', 0.20, NULL, NULL, 3),
(10, '127mm width blades', 0.05, NULL, NULL, 3),
(11, 'palermo (sheer)', 0.12, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fabric_images`
--

CREATE TABLE `fabric_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `fabric_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fabric_images`
--

INSERT INTO `fabric_images` (`id`, `name`, `fabric_id`, `created_at`, `updated_at`) VALUES
(22, 'arum.jpg', 8, NULL, NULL),
(23, 'ash blue.jpg', 8, NULL, NULL),
(24, 'black.jpg', 8, NULL, NULL),
(25, 'cotton.jpg', 8, NULL, NULL),
(26, 'crane.jpg', 8, NULL, NULL),
(27, 'dark grey.jpg', 8, NULL, NULL),
(28, 'dune.jpg', 8, NULL, NULL),
(29, 'grey.jpg', 8, NULL, NULL),
(30, 'linen.jpg', 8, NULL, NULL),
(31, 'mariah.jpg', 8, NULL, NULL),
(32, 'misty.jpg', 8, NULL, NULL),
(33, 'natural.jpg', 8, NULL, NULL),
(34, 'nutmeg.jpg', 8, NULL, NULL),
(35, 'putty.jpg', 8, NULL, NULL),
(36, 'royal blue.jpg', 8, NULL, NULL),
(37, 'shale.jpg', 8, NULL, NULL),
(38, 'slate.jpg', 8, NULL, NULL),
(39, 'soft grey.jpg', 8, NULL, NULL),
(40, 'white.jpg', 8, NULL, NULL),
(41, 'arum.jpg', 9, NULL, NULL),
(42, 'ash blue.jpg', 9, NULL, NULL),
(43, 'black.jpg', 9, NULL, NULL),
(44, 'cotton.jpg', 9, NULL, NULL),
(45, 'crane.jpg', 9, NULL, NULL),
(46, 'dark grey.jpg', 9, NULL, NULL),
(47, 'dune.jpg', 9, NULL, NULL),
(48, 'grey.jpg', 9, NULL, NULL),
(49, 'linen.jpg', 9, NULL, NULL),
(50, 'mariah.jpg', 9, NULL, NULL),
(51, 'misty.jpg', 9, NULL, NULL),
(52, 'natural.jpg', 9, NULL, NULL),
(53, 'nutmeg.jpg', 9, NULL, NULL),
(54, 'putty.jpg', 9, NULL, NULL),
(55, 'royal blue.jpg', 9, NULL, NULL),
(56, 'shale.jpg', 9, NULL, NULL),
(57, 'slate.jpg', 9, NULL, NULL),
(58, 'soft grey.jpg', 9, NULL, NULL),
(59, 'white.jpg', 9, NULL, NULL),
(60, 'arum.jpg', 10, NULL, NULL),
(61, 'ash blue.jpg', 10, NULL, NULL),
(62, 'black.jpg', 10, NULL, NULL),
(63, 'cotton.jpg', 10, NULL, NULL),
(64, 'crane.jpg', 10, NULL, NULL),
(65, 'dark grey.jpg', 10, NULL, NULL),
(66, 'dune.jpg', 10, NULL, NULL),
(67, 'grey.jpg', 10, NULL, NULL),
(68, 'linen.jpg', 10, NULL, NULL),
(69, 'mariah.jpg', 10, NULL, NULL),
(70, 'misty.jpg', 10, NULL, NULL),
(71, 'natural.jpg', 10, NULL, NULL),
(72, 'nutmeg.jpg', 10, NULL, NULL),
(73, 'putty.jpg', 10, NULL, NULL),
(74, 'royal blue.jpg', 10, NULL, NULL),
(75, 'shale.jpg', 10, NULL, NULL),
(76, 'slate.jpg', 10, NULL, NULL),
(77, 'soft grey.jpg', 10, NULL, NULL),
(78, 'white.jpg', 10, NULL, NULL),
(79, 'white.jpg', 1, NULL, NULL),
(80, 'linen.jpg', 1, NULL, NULL),
(81, 'arum.jpg', 1, NULL, NULL),
(82, 'cotton.jpg', 1, NULL, NULL),
(83, 'mariah.jpg', 1, NULL, NULL),
(84, 'natural.jpg', 1, NULL, NULL),
(85, 'dune.jpg', 1, NULL, NULL),
(86, 'oyester.jpg', 1, NULL, NULL),
(87, 'warm white.jpg', 1, NULL, NULL),
(88, 'putty.jpg', 1, NULL, NULL),
(89, 'nutmeg.jpg', 1, NULL, NULL),
(90, 'misty.jpg', 1, NULL, NULL),
(91, 'shale.jpg', 1, NULL, NULL),
(92, 'slate.jpg', 1, NULL, NULL),
(93, 'ash blue.jpg', 1, NULL, NULL),
(94, 'soft grey.jpg', 1, NULL, NULL),
(95, 'grey.jpg', 1, NULL, NULL),
(96, 'mid grey.jpg', 1, NULL, NULL),
(97, 'crane.jpg', 1, NULL, NULL),
(98, 'dark grey.jpg', 1, NULL, NULL),
(99, 'black.jpg', 1, NULL, NULL),
(100, 'royal blue.jpg', 1, NULL, NULL),
(101, 'alaska.jpg', 2, NULL, NULL),
(102, 'ash.jpg', 2, NULL, NULL),
(103, 'birch.jpg', 2, NULL, NULL),
(104, 'gosling.jpg', 2, NULL, NULL),
(105, 'haze.jpg', 2, NULL, NULL),
(106, 'lime stone.jpg', 2, NULL, NULL),
(107, 'pumice.jpg', 2, NULL, NULL),
(108, 'alaska.jpg', 3, NULL, NULL),
(109, 'ash.jpg', 3, NULL, NULL),
(110, 'birch.jpg', 3, NULL, NULL),
(111, 'gosling.jpg', 3, NULL, NULL),
(112, 'haze.jpg', 3, NULL, NULL),
(113, 'lime stone.jpg', 3, NULL, NULL),
(114, 'pumice.jpg', 3, NULL, NULL),
(115, 'white grey.jpg', 4, NULL, NULL),
(116, 'toffee.jpg', 4, NULL, NULL),
(117, 'warm grey.jpg', 4, NULL, NULL),
(118, 'storm.jpg', 4, NULL, NULL),
(119, 'pebble.jpg', 4, NULL, NULL),
(120, 'off white.jpg', 4, NULL, NULL),
(121, 'new slate.jpg', 4, NULL, NULL),
(122, 'moss.jpg', 4, NULL, NULL),
(123, 'mist.jpg', 4, NULL, NULL),
(124, 'cream.jpg', 4, NULL, NULL),
(125, 'grey.jpg', 4, NULL, NULL),
(126, 'chalk white.jpg', 4, NULL, NULL),
(127, 'black ash.jpg', 4, NULL, NULL),
(128, 'black grey.jpg', 4, NULL, NULL),
(129, 'black charcoal.jpg', 4, NULL, NULL),
(130, 'biscuit.jpg', 4, NULL, NULL),
(131, 'baltic.jpg', 4, NULL, NULL),
(132, 'white.jpg', 11, NULL, NULL),
(133, 'steel.jpg', 11, NULL, NULL),
(134, 'smoke.jpg', 11, NULL, NULL),
(135, 'natural.jpg', 11, NULL, NULL),
(136, 'mist.jpg', 11, NULL, NULL),
(137, 'dune.jpg', 11, NULL, NULL),
(138, 'drift wood.jpg', 11, NULL, NULL),
(139, 'cloud.jpg', 11, NULL, NULL),
(140, 'charcoal.jpg', 11, NULL, NULL),
(141, 'night.jpg', 5, NULL, NULL),
(142, 'metallic.jpg', 5, NULL, NULL),
(143, 'white.jpg', 5, NULL, NULL),
(144, 'bone.jpg', 5, NULL, NULL),
(145, 'cream.jpg', 5, NULL, NULL),
(146, 'stirling.png', 5, NULL, NULL),
(147, 'storm.jpg', 5, NULL, NULL),
(148, 'arctic.png', 6, NULL, NULL),
(149, 'antique.png', 6, NULL, NULL),
(150, 'black.jpg', 6, NULL, NULL),
(151, 'redwood.png', 6, NULL, NULL),
(152, 'teak.png', 6, NULL, NULL),
(153, 'white.jpg', 7, NULL, NULL),
(154, 'calico.jpg', 7, NULL, NULL),
(155, 'cloud.jpg', 7, NULL, NULL),
(156, 'mist.jpg', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hidden_attributes`
--

CREATE TABLE `hidden_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) NOT NULL,
  `type` enum('radio','checkbox') NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `new_fabric_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hidden_attributes`
--

INSERT INTO `hidden_attributes` (`id`, `heading`, `type`, `description`, `content`, `new_fabric_id`) VALUES
(1, 'Would you like to add a sunscreen behind this blockout blind?', 'checkbox', 'Sunscreens are amazing for giving privacy during the day, blocking 90% of the UV rays and you can see out of them clearly.', 'Add a uniview 10%,Add a Palermo (Sheer)', 1),
(2, 'Dawn', 'radio', '', 'skye black out.jpg,duo block black out.jpg,vibe black out.jpg,mantra blackout.jpg,orora FR.jpg,spectre.jpg', 1),
(3, 'Side Winder/Brackets', 'radio', '', 'white,off white,black,grey', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_10_10_113203_create_products_table', 1),
(5, '2022_10_12_072004_create_users_table', 2),
(6, '2022_10_13_065725_create_billing_addresses_table', 3),
(7, '2022_10_13_070529_create_shipping_addresses_table', 3),
(8, '2022_10_13_143012_create_states_table', 4),
(9, '2022_10_13_150809_add_user_id_to_billing_addresses', 5),
(10, '2022_10_13_151108_add_user_id_to_shipping_addresses', 6),
(11, '2022_10_17_051953_create_fabrics_table', 7),
(12, '2022_10_17_081408_create_fabric_images_table', 8),
(13, '2022_10_18_082432_create_carts_table', 9),
(14, '2022_10_18_091851_add_user_id_to_carts', 10),
(15, '2022_10_19_064348_add_quantity_to_carts', 11),
(16, '2022_10_30_102405_add_product_id_to_categories', 12),
(17, '2022_10_30_125948_add_attribute_id_to_products', 13),
(18, '2022_10_30_133939_add_category_id_to_products', 14),
(19, '2022_10_30_181452_add_product_id_to_attributes', 15),
(20, '2022_10_31_055514_create_new_products_table', 16),
(21, '2022_10_31_062058_add_new_product_id_to_fabrics', 17),
(22, '2022_10_31_062229_add_new_product_id_to_attributes', 17),
(23, '2022_10_31_065520_add_description_to_new_products', 18),
(24, '2022_10_31_091150_add_img_name_to_categories', 19),
(25, '2022_10_31_124319_add_hidden_to_attributes', 20),
(26, '2022_11_01_052539_create_hidden_attributes_table', 21),
(27, '2022_11_01_053420_add_hidden_to_attributes', 22),
(28, '2022_11_01_054232_create_new_fabrics_table', 23),
(29, '2022_11_01_061133_add_new_fabric_id_to_hidden_attributes', 24);

-- --------------------------------------------------------

--
-- Table structure for table `new_fabrics`
--

CREATE TABLE `new_fabrics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_fabrics`
--

INSERT INTO `new_fabrics` (`id`, `name`) VALUES
(2, 'belic blockout (Premier)'),
(4, 'belice light filtering'),
(5, 'palermo (Sheer)'),
(1, 'uniline dawn blockout'),
(3, 'uniview 10% (Sunscreen)');

-- --------------------------------------------------------

--
-- Table structure for table `new_products`
--

CREATE TABLE `new_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `img_name` varchar(191) NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_description` text DEFAULT NULL,
  `fabrics` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_products`
--

INSERT INTO `new_products` (`id`, `name`, `img_name`, `category_id`, `product_description`, `fabrics`) VALUES
(1, 'roller blinds', 'The-roller-blinds.jpeg', 1, 'Please enter in your width and drop - please do not do any deductions, for a roller blind on the inside of the window frame - please give the tight inside measurements. Make sure you measure at the top of the window frame as this is where it will fit. For an outside fit roller blind - please measure to where you want the outside of the brackets to be. We will make sure the blind fits inside the measurements you give.', 'Dawn (Basic Blackout),Belice Blockout (Premier),Belice Light Filtering,Unview 10% (Sunscreen),palermo (sheer)'),
(3, 'vertical blinds', 'home-interior-vertical-blinds-sliding-door-blinds.jpg', 2, 'Please enter in your width and drop to get a pricing for all our vertical blind options, we currently have three blades types, 89,100 and 127mm wide blades.', '89mm width blades,100mm width blades,127mm width blades'),
(5, 'venetian blinds', 'venetian-blinds-by-window-blinds-window-ceiling-lamp-beam-blinds-window-decoration-concept_55877-454.png', NULL, 'Venetian blinds suit most design and fit perfectly in any office or home. It gives great control over light and shade, privacy and design as you can chose a range of materials and colours. Blades in venetian blinds give control over the light and shade you want inside your room. It blocks harmful UV lights and protects furnishing and furniture in the home.', 'aluminium,wooden,faux wood'),
(6, 'dual blinds', 'dual.jpg', NULL, 'Two sets of standard blinds combine to form one high-quality roller shade. The blackout style is perfect for those mornings when you\'re trying to sleep in, and the sunscreen variety ensures that your room will be refreshingly cool during the hot summer months.\r\n\r\nDual blinds offer a refreshing cooling breeze that will make sure you\'re not sweating from the heat. Whether they\'re being used as blackout shades or as screens, these adjustable window coverings are the perfect solution to keep your home comfortably cool in those scorching months.', 'Dawn (Basic Blackout),Belice Blockout (Premier),Belice Light Filtering,Unview 10% (Sunscreen)'),
(7, 'motorized blinds', 'Motorised.png', NULL, 'We specialize in motorized roller blinds. Our professional team can help you to install motorized blinds at your place. We provide a complete range of options for motorized blinds.\r\n\r\nMotorized blinds are great addition to any place and these are hassle free as it can be operated with remote control or wall mounted switches. Motorized roller blinds add style and elegance to your home and office. These fully automated blinds are controlled by remote. These blinds are operated without any chains which gives clean and hassle-free look. We provide automated blinds in different fabric and colors.', 'Dawn (Basic Blackout),Belice Blockout (Premier),Belice Light Filtering,Unview 10% (Sunscreen),palermo (sheer)');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `company_name` varchar(191) DEFAULT NULL,
  `country` varchar(191) NOT NULL,
  `street_address` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `state` varchar(191) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_addresses`
--

INSERT INTO `shipping_addresses` (`id`, `name`, `company_name`, `country`, `street_address`, `city`, `state`, `postcode`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Anand', 'Pi Noodies', 'New Zealand', '45', 'Dutch', '4', '5487', '2022-11-10 23:05:38', '2022-11-10 23:05:52', 25);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Northland', NULL, NULL),
(2, 'Auckland', NULL, NULL),
(3, 'Waikato', NULL, NULL),
(4, 'Bay of Plenty', NULL, NULL),
(5, 'Taranaki', NULL, NULL),
(6, 'Gisborne', NULL, NULL),
(7, 'Hawkey\'s Bay', NULL, NULL),
(8, 'Manawatu Wanganui', NULL, NULL),
(9, 'Wellington', NULL, NULL),
(10, 'Nelson', NULL, NULL),
(11, 'Marlborough', NULL, NULL),
(12, 'Tasman', NULL, NULL),
(13, 'West Coast', NULL, NULL),
(14, 'Canterbury', NULL, NULL),
(15, 'Otago', NULL, NULL),
(16, 'Southland', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(191) DEFAULT NULL,
  `email_verified_at` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(25, 'Anand', 'anandbairagi500@gmail.com', '$2y$10$kaFMZ7bmRyQlWEWmNkRlzOUwN9QqygQp1iuV9Mb9SbdmjMF4oUR6O', NULL, NULL, '2022-10-18 04:02:13', '2022-11-10 23:04:57'),
(26, 'Bhavesh Jain', 'bj@gmail.com', '$2y$10$ltrZsa4msD6Vvt5eA5k8neb0jU.3/GmMQPhd02hY4tl/uPuWQLu9y', NULL, NULL, '2022-10-18 06:15:00', '2022-10-18 06:15:00'),
(27, 'Harshit', 'h@gmail.com', '$2y$10$tVJUYyYGimpD6Bk0fSGahO8I89I4tayiM7Yutlv.c7XHnj6qMJXUS', NULL, NULL, '2022-10-18 06:16:26', '2022-10-18 06:16:26'),
(28, 'Keshav Sugaliya', '45@gmail.com', '$2y$10$SXu7sh0tLLs0bS3wWkmBjeTfLvTKtAeziWbA7.pHB3z5N7TQ985tO', NULL, NULL, '2022-10-20 06:48:44', '2022-10-20 06:48:44'),
(29, 'BHAVESH RAJENDRAKUMAR JAIN', 'admin@gmail.com', '$2y$10$CcGUpqLmfpfPMZayl1MfmeATk1hyx5ao7TpGbPu7BtV79NHZR/1RS', NULL, NULL, '2022-11-02 20:37:59', '2022-11-02 20:37:59'),
(30, 'Quantum IT Innovation', 'qt@gmail.com', '$2y$10$yYu0efDfpdQrnMVVXCjCS.AVKbt6BCZ1s6.nBiOHMIlg6V2b7LGhy', NULL, NULL, '2022-11-03 19:04:32', '2022-11-03 19:04:32'),
(31, 'Admin', 'admin@gmail.com', '$2y$10$oIBLkMvzeeySrT7awsFgo.LqBXW1xMg16tiY9yaybUgf61aJF2Y9O', NULL, NULL, NULL, '2022-11-08 11:05:19'),
(32, 'ashutosh chauhan', 'aashutosh.quantum@gmail.com', '$2y$10$TIT.IzkDYa1.WKJ2LuXXUuEqVZMEHOdfZykHHGt2Quso9K.Z6o86G', NULL, NULL, '2022-12-21 13:02:15', '2022-12-21 13:02:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributes_new_product_id_foreign` (`new_product_id`);

--
-- Indexes for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billing_addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_fabric_id_foreign` (`fabric_id`),
  ADD KEY `carts_color_id_foreign` (`color_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fabrics`
--
ALTER TABLE `fabrics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fabrics_new_product_id_foreign` (`new_product_id`);

--
-- Indexes for table `fabric_images`
--
ALTER TABLE `fabric_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fabric_images_fabric_id_foreign` (`fabric_id`);

--
-- Indexes for table `hidden_attributes`
--
ALTER TABLE `hidden_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hidden_attributes_new_fabric_id_foreign` (`new_fabric_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_fabrics`
--
ALTER TABLE `new_fabrics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `new_fabrics_name_unique` (`name`);

--
-- Indexes for table `new_products`
--
ALTER TABLE `new_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `new_products_category_id_foreign` (`category_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipping_addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fabrics`
--
ALTER TABLE `fabrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fabric_images`
--
ALTER TABLE `fabric_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `hidden_attributes`
--
ALTER TABLE `hidden_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `new_fabrics`
--
ALTER TABLE `new_fabrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `new_products`
--
ALTER TABLE `new_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attributes`
--
ALTER TABLE `attributes`
  ADD CONSTRAINT `attributes_new_product_id_foreign` FOREIGN KEY (`new_product_id`) REFERENCES `new_products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  ADD CONSTRAINT `billing_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `fabric_images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_fabric_id_foreign` FOREIGN KEY (`fabric_id`) REFERENCES `fabrics` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fabrics`
--
ALTER TABLE `fabrics`
  ADD CONSTRAINT `fabrics_new_product_id_foreign` FOREIGN KEY (`new_product_id`) REFERENCES `new_products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fabric_images`
--
ALTER TABLE `fabric_images`
  ADD CONSTRAINT `fabric_images_fabric_id_foreign` FOREIGN KEY (`fabric_id`) REFERENCES `fabrics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hidden_attributes`
--
ALTER TABLE `hidden_attributes`
  ADD CONSTRAINT `hidden_attributes_new_fabric_id_foreign` FOREIGN KEY (`new_fabric_id`) REFERENCES `new_fabrics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `new_products`
--
ALTER TABLE `new_products`
  ADD CONSTRAINT `new_products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD CONSTRAINT `shipping_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
