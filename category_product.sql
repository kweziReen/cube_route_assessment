-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 09:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cube_route_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(553, 1123, NULL, NULL),
(553, 1349, NULL, NULL),
(638, 1349, NULL, NULL),
(553, 27, NULL, NULL),
(553, 28, NULL, NULL),
(553, 29, NULL, NULL),
(553, 30, NULL, NULL),
(553, 31, NULL, NULL),
(553, 32, NULL, NULL),
(553, 33, NULL, NULL),
(553, 34, NULL, NULL),
(553, 35, NULL, NULL),
(553, 36, NULL, NULL),
(553, 37, NULL, NULL),
(553, 38, NULL, NULL),
(553, 39, NULL, NULL),
(553, 40, NULL, NULL),
(553, 41, NULL, NULL),
(553, 42, NULL, NULL),
(553, 43, NULL, NULL),
(553, 44, NULL, NULL),
(553, 45, NULL, NULL),
(553, 46, NULL, NULL),
(553, 47, NULL, NULL),
(553, 48, NULL, NULL),
(553, 49, NULL, NULL),
(553, 50, NULL, NULL),
(553, 51, NULL, NULL),
(553, 52, NULL, NULL),
(553, 53, NULL, NULL),
(553, 54, NULL, NULL),
(553, 55, NULL, NULL),
(553, 56, NULL, NULL),
(553, 57, NULL, NULL),
(553, 58, NULL, NULL),
(553, 59, NULL, NULL),
(553, 60, NULL, NULL),
(553, 61, NULL, NULL),
(553, 62, NULL, NULL),
(553, 63, NULL, NULL),
(553, 64, NULL, NULL),
(553, 65, NULL, NULL),
(553, 66, NULL, NULL),
(553, 67, NULL, NULL),
(553, 68, NULL, NULL),
(553, 69, NULL, NULL),
(553, 70, NULL, NULL),
(553, 71, NULL, NULL),
(553, 72, NULL, NULL),
(553, 73, NULL, NULL),
(553, 74, NULL, NULL),
(553, 75, NULL, NULL),
(553, 76, NULL, NULL),
(553, 77, NULL, NULL),
(553, 78, NULL, NULL),
(553, 79, NULL, NULL),
(553, 80, NULL, NULL),
(553, 81, NULL, NULL),
(553, 82, NULL, NULL),
(553, 83, NULL, NULL),
(553, 84, NULL, NULL),
(553, 85, NULL, NULL),
(553, 86, NULL, NULL),
(635, 87, NULL, NULL),
(635, 88, NULL, NULL),
(635, 89, NULL, NULL),
(635, 90, NULL, NULL),
(635, 91, NULL, NULL),
(635, 94, NULL, NULL),
(635, 95, NULL, NULL),
(635, 96, NULL, NULL),
(553, 105, NULL, NULL),
(553, 106, NULL, NULL),
(553, 107, NULL, NULL),
(553, 110, NULL, NULL),
(553, 117, NULL, NULL),
(553, 118, NULL, NULL),
(553, 119, NULL, NULL),
(635, 121, NULL, NULL),
(553, 122, NULL, NULL),
(553, 123, NULL, NULL),
(553, 124, NULL, NULL),
(553, 125, NULL, NULL),
(553, 126, NULL, NULL),
(553, 127, NULL, NULL),
(553, 128, NULL, NULL),
(553, 129, NULL, NULL),
(553, 130, NULL, NULL),
(553, 131, NULL, NULL),
(553, 132, NULL, NULL),
(553, 133, NULL, NULL),
(553, 134, NULL, NULL),
(553, 135, NULL, NULL),
(553, 136, NULL, NULL),
(553, 137, NULL, NULL),
(553, 138, NULL, NULL),
(553, 139, NULL, NULL),
(553, 140, NULL, NULL),
(553, 141, NULL, NULL),
(553, 142, NULL, NULL),
(635, 158, NULL, NULL),
(635, 159, NULL, NULL),
(635, 160, NULL, NULL),
(635, 161, NULL, NULL),
(635, 162, NULL, NULL),
(635, 163, NULL, NULL),
(553, 187, NULL, NULL),
(553, 189, NULL, NULL),
(553, 191, NULL, NULL),
(553, 192, NULL, NULL),
(553, 193, NULL, NULL),
(553, 194, NULL, NULL),
(553, 195, NULL, NULL),
(553, 197, NULL, NULL),
(553, 198, NULL, NULL),
(553, 201, NULL, NULL),
(553, 202, NULL, NULL),
(553, 203, NULL, NULL),
(553, 204, NULL, NULL),
(553, 205, NULL, NULL),
(553, 206, NULL, NULL),
(553, 209, NULL, NULL),
(553, 211, NULL, NULL),
(553, 212, NULL, NULL),
(553, 213, NULL, NULL),
(553, 214, NULL, NULL),
(553, 215, NULL, NULL),
(553, 216, NULL, NULL),
(590, 286, NULL, NULL),
(590, 287, NULL, NULL),
(590, 288, NULL, NULL),
(590, 289, NULL, NULL),
(590, 290, NULL, NULL),
(590, 291, NULL, NULL),
(590, 292, NULL, NULL),
(590, 293, NULL, NULL),
(590, 294, NULL, NULL),
(590, 295, NULL, NULL),
(635, 301, NULL, NULL),
(590, 301, NULL, NULL),
(635, 311, NULL, NULL),
(553, 339, NULL, NULL),
(635, 428, NULL, NULL),
(590, 450, NULL, NULL),
(553, 467, NULL, NULL),
(553, 468, NULL, NULL),
(553, 527, NULL, NULL),
(553, 528, NULL, NULL),
(553, 529, NULL, NULL),
(553, 563, NULL, NULL),
(590, 583, NULL, NULL),
(590, 586, NULL, NULL),
(590, 603, NULL, NULL),
(553, 614, NULL, NULL),
(553, 615, NULL, NULL),
(590, 620, NULL, NULL),
(590, 621, NULL, NULL),
(590, 624, NULL, NULL),
(590, 629, NULL, NULL),
(635, 636, NULL, NULL),
(590, 636, NULL, NULL),
(553, 638, NULL, NULL),
(553, 639, NULL, NULL),
(635, 659, NULL, NULL),
(590, 659, NULL, NULL),
(590, 672, NULL, NULL),
(590, 677, NULL, NULL),
(590, 683, NULL, NULL),
(635, 685, NULL, NULL),
(590, 699, NULL, NULL),
(635, 702, NULL, NULL),
(590, 711, NULL, NULL),
(590, 717, NULL, NULL),
(590, 718, NULL, NULL),
(590, 741, NULL, NULL),
(590, 742, NULL, NULL),
(590, 743, NULL, NULL),
(590, 744, NULL, NULL),
(590, 745, NULL, NULL),
(590, 752, NULL, NULL),
(590, 753, NULL, NULL),
(590, 754, NULL, NULL),
(590, 755, NULL, NULL),
(590, 756, NULL, NULL),
(590, 770, NULL, NULL),
(590, 776, NULL, NULL),
(590, 790, NULL, NULL),
(590, 804, NULL, NULL),
(590, 808, NULL, NULL),
(590, 819, NULL, NULL),
(635, 862, NULL, NULL),
(590, 872, NULL, NULL),
(553, 879, NULL, NULL),
(590, 891, NULL, NULL),
(590, 892, NULL, NULL),
(590, 893, NULL, NULL),
(590, 916, NULL, NULL),
(553, 925, NULL, NULL),
(553, 985, NULL, NULL),
(635, 988, NULL, NULL),
(590, 1012, NULL, NULL),
(590, 1013, NULL, NULL),
(590, 1014, NULL, NULL),
(590, 1015, NULL, NULL),
(590, 1016, NULL, NULL),
(590, 1017, NULL, NULL),
(590, 1018, NULL, NULL),
(590, 1019, NULL, NULL),
(590, 1020, NULL, NULL),
(590, 1021, NULL, NULL),
(590, 1022, NULL, NULL),
(590, 1023, NULL, NULL),
(590, 1024, NULL, NULL),
(590, 1025, NULL, NULL),
(590, 1026, NULL, NULL),
(590, 1027, NULL, NULL),
(590, 1028, NULL, NULL),
(590, 1032, NULL, NULL),
(590, 1033, NULL, NULL),
(590, 1034, NULL, NULL),
(635, 1064, NULL, NULL),
(635, 1065, NULL, NULL),
(590, 1070, NULL, NULL),
(590, 1071, NULL, NULL),
(590, 1072, NULL, NULL),
(590, 1073, NULL, NULL),
(590, 1118, NULL, NULL),
(590, 1119, NULL, NULL),
(590, 1120, NULL, NULL),
(553, 1123, NULL, NULL),
(635, 1142, NULL, NULL),
(590, 1176, NULL, NULL),
(590, 1177, NULL, NULL),
(553, 1183, NULL, NULL),
(635, 1189, NULL, NULL),
(635, 1190, NULL, NULL),
(553, 1195, NULL, NULL),
(553, 1209, NULL, NULL),
(553, 1216, NULL, NULL),
(553, 1217, NULL, NULL),
(553, 1218, NULL, NULL),
(553, 1220, NULL, NULL),
(635, 1224, NULL, NULL),
(590, 1224, NULL, NULL),
(553, 1226, NULL, NULL),
(553, 1227, NULL, NULL),
(553, 1228, NULL, NULL),
(553, 1229, NULL, NULL),
(553, 1230, NULL, NULL),
(553, 1247, NULL, NULL),
(553, 1248, NULL, NULL),
(553, 1249, NULL, NULL),
(553, 1250, NULL, NULL),
(553, 1251, NULL, NULL),
(553, 1252, NULL, NULL),
(553, 1253, NULL, NULL),
(635, 1258, NULL, NULL),
(553, 1267, NULL, NULL),
(553, 1269, NULL, NULL),
(553, 1270, NULL, NULL),
(553, 1271, NULL, NULL),
(553, 1272, NULL, NULL),
(553, 1273, NULL, NULL),
(553, 1274, NULL, NULL),
(553, 1275, NULL, NULL),
(553, 1276, NULL, NULL),
(553, 1277, NULL, NULL),
(553, 1278, NULL, NULL),
(553, 1279, NULL, NULL),
(635, 1298, NULL, NULL),
(553, 1299, NULL, NULL),
(590, 1300, NULL, NULL),
(590, 1301, NULL, NULL),
(590, 1304, NULL, NULL),
(590, 1305, NULL, NULL),
(635, 1311, NULL, NULL),
(635, 1312, NULL, NULL),
(635, 1313, NULL, NULL),
(553, 1314, NULL, NULL),
(553, 1315, NULL, NULL),
(553, 1316, NULL, NULL),
(553, 1320, NULL, NULL),
(553, 1321, NULL, NULL),
(553, 1327, NULL, NULL),
(553, 1328, NULL, NULL),
(553, 1329, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD KEY `category_product_category_id_foreign` (`category_id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
