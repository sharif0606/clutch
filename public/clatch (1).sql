-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 08:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `registrationnumber` varchar(255) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `registrationcard` varchar(255) DEFAULT NULL,
  `gml` decimal(8,2) NOT NULL DEFAULT 0.00,
  `cml` decimal(8,2) NOT NULL DEFAULT 0.00,
  `hml` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `name`, `registrationnumber`, `driver_id`, `registrationcard`, `gml`, `cml`, `hml`, `created_at`, `updated_at`) VALUES
(1, 'Fuad', '10300', 1, '6661701065873.jpg', '420.00', '550.00', '650.00', '2023-11-27 00:17:53', '2023-11-27 00:17:53'),
(2, 'Kabir', '10200', 1, '6211701068278.jpg', '420.00', '550.00', '650.00', '2023-11-27 00:57:38', '2023-11-27 00:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contactperson` varchar(255) DEFAULT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `company_id`, `name`, `contactperson`, `contactnumber`, `address`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 3, 'Jashim', 'Khalil', '01819736308', 'Muradpur, CTG.', 1, NULL, '2023-11-27 00:12:23', '2023-11-27 00:12:23'),
(2, 1, 'Siam', 'Istiak', '01829500505', 'Agrabad,CTG', 1, NULL, '2023-11-27 00:20:31', '2023-11-27 00:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contactperson` varchar(255) DEFAULT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `contactperson`, `contactnumber`, `address`, `logo`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Al Hiram', 'Noman', '01886084116', 'Agrabad,CTG', '4981701065368.jpg', 1, 1, '2023-11-27 00:09:10', '2023-11-27 00:09:28'),
(2, 'Chattogram', 'Istiak', '01542015245', 'Hlishahar,Chattogram', '3041701065444.jpg', 1, NULL, '2023-11-27 00:10:44', '2023-11-27 00:10:44'),
(3, 'Easyway', 'Khalil', '01819736308', 'Muradpur, CTG.', '7281701065496.jpg', 1, NULL, '2023-11-27 00:11:36', '2023-11-27 00:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contractnumber` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `chargetype` varchar(255) NOT NULL,
  `amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `startdate` date DEFAULT NULL,
  `finishdate` date DEFAULT NULL,
  `collectform` varchar(255) DEFAULT NULL,
  `deliveredto` varchar(255) DEFAULT NULL,
  `totalweight` decimal(8,2) DEFAULT NULL,
  `totaldistance` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `contractnumber`, `company_id`, `branch_id`, `customer_id`, `product_id`, `chargetype`, `amount`, `startdate`, `finishdate`, `collectform`, `deliveredto`, `totalweight`, `totaldistance`, `created_at`, `updated_at`) VALUES
(1, '101', 0, 0, 0, NULL, '', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contactperson` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `contactperson`, `contactnumber`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Jashim', 'Khalil', '01886084116', 'jashim@gmail.com', 'Oxyzen,Chattogram', '2023-11-27 00:19:22', '2023-11-27 00:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `loads`
--

CREATE TABLE `loads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contract_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `asset_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `startdate` date DEFAULT NULL,
  `finishdate` date DEFAULT NULL,
  `starttime` time DEFAULT NULL,
  `finishtime` time DEFAULT NULL,
  `totalweight` decimal(8,2) DEFAULT NULL,
  `totaldistance` decimal(8,2) DEFAULT NULL,
  `chargetype` varchar(255) NOT NULL,
  `amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loads`
--

INSERT INTO `loads` (`id`, `contract_id`, `driver_id`, `customer_id`, `asset_id`, `product_id`, `startdate`, `finishdate`, `starttime`, `finishtime`, `totalweight`, `totaldistance`, `chargetype`, `amount`, `created_at`, `updated_at`) VALUES
(1, 102, 403, 20, '1720', 306, '2023-11-27', '2023-11-30', '12:55:00', '17:00:00', '230.00', '190.00', 'hml', '12000.00', '2023-11-27 00:56:09', '2023-11-27 00:56:09'),
(2, 1, 1, 20, '1720', 305, '2023-11-27', '2023-11-30', '13:44:00', '06:49:00', '230.00', '190.00', 'gml', '29000.00', '2023-11-27 01:44:39', '2023-11-27 01:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_09_062426_create_companies_table', 1),
(3, '2023_11_09_062453_create_branches_table', 1),
(4, '2023_11_09_062513_create_roles_table', 1),
(5, '2023_11_09_062701_create_product_types_table', 1),
(6, '2023_11_09_064251_create_units_table', 1),
(7, '2023_11_09_064440_create_products_table', 1),
(8, '2023_11_09_070019_create_assets_table', 1),
(9, '2023_11_11_031518_create_customers_table', 1),
(10, '2023_11_11_032107_create_contracts_table', 1),
(11, '2023_11_11_035816_create_loads_table', 1),
(12, '2023_11_11_043945_create_users_table', 1),
(13, '2023_11_12_043129_create_permissions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'user.index', '2023-11-27 00:13:46', '2023-11-27 00:13:46'),
(2, 1, 'user.create', '2023-11-27 00:13:46', '2023-11-27 00:13:46'),
(3, 1, 'user.show', '2023-11-27 00:13:46', '2023-11-27 00:13:46'),
(4, 1, 'user.edit', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(5, 1, 'user.destroy', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(6, 1, 'role.index', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(7, 1, 'role.create', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(8, 1, 'role.show', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(9, 1, 'role.edit', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(10, 1, 'role.destroy', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(11, 1, 'branch.index', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(12, 1, 'branch.create', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(13, 1, 'branch.show', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(14, 1, 'branch.edit', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(15, 1, 'branch.destroy', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(16, 1, 'companies.index', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(17, 1, 'companies.create', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(18, 1, 'companies.show', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(19, 1, 'companies.edit', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(20, 1, 'companies.destroy', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(21, 1, 'assets.index', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(22, 1, 'assets.create', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(23, 1, 'assets.show', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(24, 1, 'assets.edit', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(25, 1, 'assets.destroy', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(26, 1, 'customers.index', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(27, 1, 'customers.create', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(28, 1, 'customers.show', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(29, 1, 'customers.edit', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(30, 1, 'customers.destroy', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(31, 1, 'products.index', '2023-11-27 00:13:47', '2023-11-27 00:13:47'),
(32, 1, 'products.create', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(33, 1, 'products.show', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(34, 1, 'products.edit', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(35, 1, 'products.destroy', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(36, 1, 'contracts.index', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(37, 1, 'contracts.create', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(38, 1, 'contracts.show', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(39, 1, 'contracts.edit', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(40, 1, 'contracts.destroy', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(41, 1, 'loads.index', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(42, 1, 'loads.create', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(43, 1, 'loads.show', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(44, 1, 'loads.edit', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(45, 1, 'loads.destroy', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(46, 1, 'product_types.index', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(47, 1, 'product_types.create', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(48, 1, 'product_types.show', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(49, 1, 'product_types.edit', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(50, 1, 'product_types.destroy', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(51, 1, 'units.index', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(52, 1, 'units.create', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(53, 1, 'units.show', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(54, 1, 'units.edit', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(55, 1, 'units.destroy', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(56, 1, 'permission.list', '2023-11-27 00:13:48', '2023-11-27 00:13:48'),
(57, 2, 'user.index', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(58, 2, 'user.create', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(59, 2, 'user.show', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(60, 2, 'user.edit', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(61, 2, 'user.destroy', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(62, 2, 'role.create', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(63, 2, 'branch.index', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(64, 2, 'branch.create', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(65, 2, 'branch.show', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(66, 2, 'branch.edit', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(67, 2, 'branch.destroy', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(68, 2, 'companies.index', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(69, 2, 'companies.create', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(70, 2, 'companies.show', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(71, 2, 'companies.edit', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(72, 2, 'companies.destroy', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(73, 2, 'assets.index', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(74, 2, 'assets.create', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(75, 2, 'assets.show', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(76, 2, 'assets.edit', '2023-11-27 00:14:57', '2023-11-27 00:14:57'),
(77, 2, 'customers.index', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(78, 2, 'customers.create', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(79, 2, 'customers.show', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(80, 2, 'customers.edit', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(81, 2, 'customers.destroy', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(82, 2, 'products.index', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(83, 2, 'products.create', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(84, 2, 'products.show', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(85, 2, 'products.edit', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(86, 2, 'products.destroy', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(87, 2, 'contracts.create', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(88, 2, 'contracts.show', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(89, 2, 'loads.index', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(90, 2, 'loads.create', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(91, 2, 'loads.show', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(92, 2, 'loads.edit', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(93, 2, 'loads.destroy', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(94, 2, 'product_types.index', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(95, 2, 'product_types.create', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(96, 2, 'product_types.show', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(97, 2, 'product_types.edit', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(98, 2, 'product_types.destroy', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(99, 2, 'units.index', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(100, 2, 'units.create', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(101, 2, 'units.show', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(102, 2, 'units.edit', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(103, 2, 'units.destroy', '2023-11-27 00:14:58', '2023-11-27 00:14:58'),
(104, 3, 'branch.show', '2023-11-27 00:16:05', '2023-11-27 00:16:05'),
(105, 3, 'companies.show', '2023-11-27 00:16:05', '2023-11-27 00:16:05'),
(106, 3, 'assets.show', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(107, 3, 'customers.create', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(108, 3, 'customers.edit', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(109, 3, 'products.index', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(110, 3, 'products.create', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(111, 3, 'products.show', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(112, 3, 'products.edit', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(113, 3, 'products.destroy', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(114, 3, 'contracts.create', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(115, 3, 'contracts.show', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(116, 3, 'contracts.edit', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(117, 3, 'product_types.create', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(118, 3, 'product_types.show', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(119, 3, 'product_types.edit', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(120, 3, 'units.show', '2023-11-27 00:16:06', '2023-11-27 00:16:06'),
(121, 4, 'products.show', '2023-11-27 00:16:58', '2023-11-27 00:16:58'),
(122, 4, 'loads.create', '2023-11-27 00:16:58', '2023-11-27 00:16:58'),
(123, 4, 'loads.show', '2023-11-27 00:16:58', '2023-11-27 00:16:58'),
(124, 4, 'loads.edit', '2023-11-27 00:16:58', '2023-11-27 00:16:58'),
(125, 4, 'loads.destroy', '2023-11-27 00:16:58', '2023-11-27 00:16:58'),
(126, 4, 'product_types.create', '2023-11-27 00:16:58', '2023-11-27 00:16:58'),
(127, 4, 'product_types.show', '2023-11-27 00:16:58', '2023-11-27 00:16:58'),
(128, 4, 'product_types.edit', '2023-11-27 00:16:58', '2023-11-27 00:16:58'),
(129, 4, 'units.show', '2023-11-27 00:16:58', '2023-11-27 00:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `identity` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `identity`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', '2023-11-26 23:01:31', NULL),
(2, 'Admin', 'admin', '2023-11-26 23:01:31', NULL),
(3, 'Sales Manager', 'salesmanager', '2023-11-26 23:01:31', NULL),
(4, 'Sales Man', 'salesman', '2023-11-26 23:01:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `contact_no_en` varchar(255) NOT NULL,
  `contactnumber_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `image` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `brunch_id` int(11) DEFAULT NULL,
  `full_access` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>yes 0=>no',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 active 0 inactive',
  `remember_token` varchar(100) DEFAULT NULL,
  `access_block` text DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_en`, `name_bn`, `contact_no_en`, `contactnumber_bn`, `email`, `role_id`, `password`, `language`, `image`, `company_id`, `brunch_id`, `full_access`, `status`, `remember_token`, `access_block`, `token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'kamal', NULL, '01537005004', NULL, 'kamal@gmail.com', 4, '$2y$12$lgzVB9stbLemuyPItNbBS.DCt6f7qTpT0asu9C6.WgKZthNTMDoMm', 'en', '8031701065569.jpg', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, '2023-11-26 23:03:16', '2023-11-27 00:12:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_contactnumber_unique` (`contactnumber`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `loads`
--
ALTER TABLE `loads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_identity_unique` (`identity`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_contact_no_en_unique` (`contact_no_en`),
  ADD UNIQUE KEY `users_contactnumber_bn_unique` (`contactnumber_bn`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loads`
--
ALTER TABLE `loads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
