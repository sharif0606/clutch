-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 05:19 AM
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
(1, 'Rabiul', '10200', 1, '8911701232056.jpg', '42.00', '50.00', '55.00', '2023-11-28 22:27:36', '2023-12-19 21:52:46'),
(2, 'Fuad', '10300', 3, '4691701232086.jpg', '40.00', '48.00', '52.00', '2023-11-28 22:28:06', '2023-12-19 21:53:11'),
(3, 'Cargo', '17125', 1, '1391701490443.jpg', '370.00', '420.00', '650.00', '2023-12-01 22:14:04', '2023-12-01 22:14:04'),
(4, 'HP Computer', '17135', 6, '9371701490491.jpg', '320.00', '350.00', '380.00', '2023-12-01 22:14:51', '2023-12-01 22:14:51');

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
(1, 2, 'Rohoman', 'Freg', '01819736308', 'Agrabad,CTG', 3, NULL, '2023-11-28 01:20:40', '2023-11-28 01:20:40'),
(2, 1, 'Kamal', 'Rabiul', '01886084116', 'Dhaka', 1, 1, '2023-11-28 21:46:14', '2023-11-28 22:29:36'),
(3, 3, 'Raihan', 'Fuad', '01524512320', 'Dhaka', 1, 1, '2023-11-28 22:29:19', '2023-11-28 22:29:49'),
(4, 4, 'Sairatul', 'Freg', '01829500506', 'Chattogram', 1, NULL, '2023-12-01 22:24:52', '2023-12-01 22:24:52');

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
(1, 'IbMC', 'Shintiya', '01886084116', 'Agrabad,CTG', '4231701155903.jpg', 3, NULL, '2023-11-28 01:18:23', '2023-11-28 01:18:23'),
(2, 'Al Hiram', 'Freg', '01542015245', 'Halishahor Chottogram', '9131701155952.jpg', 3, NULL, '2023-11-28 01:19:12', '2023-11-28 01:19:12'),
(3, 'QyCL', 'Khalil', '01819736308', 'Bandorban', '7771701155995.jpg', 3, NULL, '2023-11-28 01:19:55', '2023-11-28 01:19:55'),
(4, 'AR,Z', 'Nitu', '01864042672', 'Bandorban', '8231701491027.jpg', 1, NULL, '2023-12-01 22:23:47', '2023-12-01 22:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contractnumber` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
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
(1, '01516154210', 1, NULL, 2, '2', '1', '50.00', '2023-11-29', '2023-11-30', 'Dhaka', 'Chattogram', '230.00', '250.00', '2023-11-28 22:55:55', '2023-11-28 22:55:55'),
(2, '01516154181', 1, NULL, 3, '1', '2', '48.00', '2023-11-29', '2023-12-29', 'Dhaka', 'Chattogram', '350.00', '550.00', '2023-11-28 22:56:33', '2023-11-28 22:56:33'),
(3, '01516154180', 1, NULL, 5, '2', '2', '52.00', '2023-12-02', '2023-12-09', 'Khulna', 'Chattogram', '350.00', '550.00', '2023-12-01 22:19:53', '2023-12-01 22:19:53'),
(4, '01819611532', 1, NULL, 2, '3', '1', '12.00', '2023-12-07', '2023-12-13', 'Dhaka', 'Chattogram', '350.00', '550.00', '2023-12-04 01:27:13', '2023-12-04 01:27:13');

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
(1, 'Riyad', 'Freg', '01886084116', 'riyad@gmail.com', 'Agrabad,CTG', '2023-11-28 22:23:43', '2023-11-28 22:23:43'),
(2, 'Rahul', 'Khalil', '01542015245', 'rahul@gmail.com', 'Halishahor Chottogram', '2023-11-28 22:24:22', '2023-11-28 22:24:22'),
(3, 'Saniya', 'Rabiul', '01819736308', 'saniya@gmail.com', 'Feni', '2023-11-28 22:24:55', '2023-11-28 22:24:55'),
(5, 'Minhaz', 'Moinul', '01819736307', 'minhaz6969@gmail.com', 'Rajshahi', '2023-12-01 22:16:30', '2023-12-01 22:16:30'),
(6, 'Arif', 'Mitu', '01542015246', 'arif@gmail.com', 'Gopalgong', '2023-12-01 22:17:43', '2023-12-01 22:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `driver_payrolls`
--

CREATE TABLE `driver_payrolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `number_of_load` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_payrolls`
--

INSERT INTO `driver_payrolls` (`id`, `driver_id`, `month`, `year`, `number_of_load`, `total_amount`, `created_at`, `updated_at`) VALUES
(4, '1', '12', 2023, '3', '15840', '2023-12-20 22:17:22', '2023-12-20 22:17:22');

-- --------------------------------------------------------

--
-- Table structure for table `driver_payroll_details`
--

CREATE TABLE `driver_payroll_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_payroll_id` int(11) NOT NULL,
  `load_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_payroll_details`
--

INSERT INTO `driver_payroll_details` (`id`, `driver_payroll_id`, `load_id`, `amount`, `created_at`, `updated_at`) VALUES
(7, 4, 1, '5280.00', '2023-12-20 22:17:22', '2023-12-20 22:17:22'),
(8, 4, 2, '5280.00', '2023-12-20 22:17:22', '2023-12-20 22:17:22'),
(9, 4, 3, '5280.00', '2023-12-20 22:17:22', '2023-12-20 22:17:22');

-- --------------------------------------------------------

--
-- Table structure for table `loads`
--

CREATE TABLE `loads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contract_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
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

INSERT INTO `loads` (`id`, `contract_id`, `driver_id`, `asset_id`, `product_id`, `startdate`, `finishdate`, `starttime`, `finishtime`, `totalweight`, `totaldistance`, `chargetype`, `amount`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '1', 1, '2023-12-20', '2023-12-20', '10:28:00', '12:30:00', '50.00', '550.00', '2', '26400.00', '2023-12-19 22:28:18', '2023-12-19 22:28:18'),
(2, 2, 1, '1', 1, '2023-12-20', '2023-12-20', '13:33:00', '16:33:00', '50.00', '550.00', '2', '26400.00', '2023-12-19 22:34:11', '2023-12-19 22:34:11'),
(3, 2, 1, '1', 1, '2023-12-21', '2023-12-21', '10:16:00', '16:16:00', '50.00', '550.00', '2', '26400.00', '2023-12-20 22:16:16', '2023-12-20 22:16:16'),
(4, 1, 1, '1', 2, '2023-12-21', '2023-12-21', '10:17:00', '12:17:00', '50.00', '250.00', '1', '2500.00', '2023-12-20 22:18:05', '2023-12-20 22:18:05');

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
(13, '2023_11_12_043129_create_permissions_table', 1),
(14, '2023_12_20_044503_create_driver_payrolls_table', 2),
(15, '2023_12_20_072453_create_driver_payroll_details_table', 3);

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
(1, 1, 'user.index', '2023-11-28 01:25:33', '2023-11-28 01:25:33'),
(2, 1, 'user.create', '2023-11-28 01:25:33', '2023-11-28 01:25:33'),
(3, 1, 'user.show', '2023-11-28 01:25:33', '2023-11-28 01:25:33'),
(4, 1, 'user.edit', '2023-11-28 01:25:33', '2023-11-28 01:25:33'),
(5, 1, 'user.destroy', '2023-11-28 01:25:33', '2023-11-28 01:25:33'),
(6, 1, 'role.index', '2023-11-28 01:25:33', '2023-11-28 01:25:33'),
(7, 1, 'role.create', '2023-11-28 01:25:33', '2023-11-28 01:25:33'),
(8, 1, 'role.show', '2023-11-28 01:25:33', '2023-11-28 01:25:33'),
(9, 1, 'role.edit', '2023-11-28 01:25:33', '2023-11-28 01:25:33'),
(10, 1, 'role.destroy', '2023-11-28 01:25:33', '2023-11-28 01:25:33'),
(11, 1, 'branch.index', '2023-11-28 01:25:33', '2023-11-28 01:25:33'),
(12, 1, 'branch.create', '2023-11-28 01:25:33', '2023-11-28 01:25:33'),
(13, 1, 'branch.show', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(14, 1, 'branch.edit', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(15, 1, 'branch.destroy', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(16, 1, 'companies.index', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(17, 1, 'companies.create', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(18, 1, 'companies.show', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(19, 1, 'companies.edit', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(20, 1, 'companies.destroy', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(21, 1, 'assets.index', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(22, 1, 'assets.create', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(23, 1, 'assets.show', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(24, 1, 'assets.edit', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(25, 1, 'assets.destroy', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(26, 1, 'customers.index', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(27, 1, 'customers.create', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(28, 1, 'customers.show', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(29, 1, 'customers.edit', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(30, 1, 'customers.destroy', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(31, 1, 'products.index', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(32, 1, 'products.create', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(33, 1, 'products.show', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(34, 1, 'products.edit', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(35, 1, 'products.destroy', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(36, 1, 'contracts.index', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(37, 1, 'contracts.create', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(38, 1, 'contracts.show', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(39, 1, 'contracts.edit', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(40, 1, 'contracts.destroy', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(41, 1, 'loads.index', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(42, 1, 'loads.create', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(43, 1, 'loads.show', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(44, 1, 'loads.edit', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(45, 1, 'loads.destroy', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(46, 1, 'product_types.index', '2023-11-28 01:25:34', '2023-11-28 01:25:34'),
(47, 1, 'product_types.create', '2023-11-28 01:25:35', '2023-11-28 01:25:35'),
(48, 1, 'product_types.show', '2023-11-28 01:25:35', '2023-11-28 01:25:35'),
(49, 1, 'product_types.edit', '2023-11-28 01:25:35', '2023-11-28 01:25:35'),
(50, 1, 'product_types.destroy', '2023-11-28 01:25:35', '2023-11-28 01:25:35'),
(51, 1, 'units.index', '2023-11-28 01:25:35', '2023-11-28 01:25:35'),
(52, 1, 'units.create', '2023-11-28 01:25:35', '2023-11-28 01:25:35'),
(53, 1, 'units.show', '2023-11-28 01:25:35', '2023-11-28 01:25:35'),
(54, 1, 'units.edit', '2023-11-28 01:25:35', '2023-11-28 01:25:35'),
(55, 1, 'units.destroy', '2023-11-28 01:25:35', '2023-11-28 01:25:35'),
(56, 1, 'permission.list', '2023-11-28 01:25:35', '2023-11-28 01:25:35'),
(57, 2, 'user.create', '2023-11-28 01:35:59', '2023-11-28 01:35:59'),
(58, 2, 'user.show', '2023-11-28 01:35:59', '2023-11-28 01:35:59'),
(59, 2, 'role.create', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(60, 2, 'role.show', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(61, 2, 'branch.index', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(62, 2, 'branch.create', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(63, 2, 'branch.show', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(64, 2, 'branch.edit', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(65, 2, 'branch.destroy', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(66, 2, 'companies.index', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(67, 2, 'companies.create', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(68, 2, 'companies.show', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(69, 2, 'companies.edit', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(70, 2, 'companies.destroy', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(71, 2, 'assets.create', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(72, 2, 'assets.show', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(73, 2, 'customers.index', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(74, 2, 'customers.create', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(75, 2, 'customers.show', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(76, 2, 'customers.edit', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(77, 2, 'customers.destroy', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(78, 2, 'products.index', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(79, 2, 'products.create', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(80, 2, 'products.show', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(81, 2, 'products.edit', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(82, 2, 'products.destroy', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(83, 2, 'contracts.index', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(84, 2, 'contracts.create', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(85, 2, 'contracts.show', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(86, 2, 'contracts.edit', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(87, 2, 'contracts.destroy', '2023-11-28 01:36:00', '2023-11-28 01:36:00'),
(88, 2, 'loads.index', '2023-11-28 01:36:01', '2023-11-28 01:36:01'),
(89, 2, 'loads.create', '2023-11-28 01:36:01', '2023-11-28 01:36:01'),
(90, 2, 'loads.show', '2023-11-28 01:36:01', '2023-11-28 01:36:01'),
(91, 2, 'loads.edit', '2023-11-28 01:36:01', '2023-11-28 01:36:01'),
(92, 2, 'loads.destroy', '2023-11-28 01:36:01', '2023-11-28 01:36:01'),
(93, 2, 'product_types.index', '2023-11-28 01:36:01', '2023-11-28 01:36:01'),
(94, 2, 'product_types.create', '2023-11-28 01:36:01', '2023-11-28 01:36:01'),
(95, 2, 'product_types.show', '2023-11-28 01:36:01', '2023-11-28 01:36:01'),
(96, 2, 'product_types.edit', '2023-11-28 01:36:01', '2023-11-28 01:36:01'),
(97, 2, 'product_types.destroy', '2023-11-28 01:36:01', '2023-11-28 01:36:01'),
(98, 2, 'units.create', '2023-11-28 01:36:01', '2023-11-28 01:36:01'),
(99, 2, 'units.show', '2023-11-28 01:36:01', '2023-11-28 01:36:01'),
(100, 3, 'products.index', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(101, 3, 'products.create', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(102, 3, 'products.show', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(103, 3, 'products.edit', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(104, 3, 'contracts.index', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(105, 3, 'contracts.create', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(106, 3, 'contracts.show', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(107, 3, 'contracts.edit', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(108, 3, 'contracts.destroy', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(109, 3, 'loads.create', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(110, 3, 'loads.show', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(111, 3, 'loads.edit', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(112, 3, 'product_types.index', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(113, 3, 'product_types.create', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(114, 3, 'product_types.show', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(115, 3, 'product_types.edit', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(116, 3, 'product_types.destroy', '2023-11-28 01:36:47', '2023-11-28 01:36:47'),
(117, 3, 'units.create', '2023-11-28 01:36:48', '2023-11-28 01:36:48'),
(118, 3, 'units.show', '2023-11-28 01:36:48', '2023-11-28 01:36:48'),
(119, 3, 'units.edit', '2023-11-28 01:36:48', '2023-11-28 01:36:48'),
(120, 4, 'products.show', '2023-11-28 01:37:20', '2023-11-28 01:37:20'),
(121, 4, 'contracts.show', '2023-11-28 01:37:20', '2023-11-28 01:37:20'),
(122, 4, 'loads.create', '2023-11-28 01:37:20', '2023-11-28 01:37:20'),
(123, 4, 'loads.show', '2023-11-28 01:37:20', '2023-11-28 01:37:20'),
(124, 4, 'loads.destroy', '2023-11-28 01:37:20', '2023-11-28 01:37:20'),
(125, 4, 'product_types.show', '2023-11-28 01:37:20', '2023-11-28 01:37:20'),
(126, 4, 'units.show', '2023-11-28 01:37:20', '2023-11-28 01:37:20');

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

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `product_type_id`, `unit_id`, `created_at`, `updated_at`) VALUES
(1, 'HP Computer', 4, 2, '2023-11-28 22:25:23', '2023-11-29 22:52:32'),
(2, 'Cargo', 5, 3, '2023-11-28 22:25:37', '2023-11-29 22:51:38'),
(3, 'Rabiul', 1, 1, '2023-11-28 22:25:58', '2023-11-29 22:51:23'),
(4, 'Noman', 3, 3, '2023-11-29 22:47:47', '2023-11-29 22:52:52'),
(5, 'Mitu', 2, 1, '2023-12-01 22:18:19', '2023-12-01 22:18:19');

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

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Metal', '2023-11-28 21:47:20', '2023-11-28 21:47:55'),
(2, 'Iron', '2023-11-28 21:48:10', '2023-11-28 21:48:10'),
(3, 'Furniture', '2023-11-28 21:48:23', '2023-11-28 21:48:23'),
(4, 'Garments', '2023-11-28 21:48:36', '2023-11-28 21:48:36'),
(5, 'Accessories', '2023-11-28 21:48:48', '2023-11-28 21:48:48'),
(6, 'Industrial', '2023-12-01 22:20:32', '2023-12-01 22:20:32'),
(7, 'Jute', '2023-12-01 22:20:48', '2023-12-01 22:20:48'),
(8, 'Cemical', '2023-12-01 22:21:04', '2023-12-01 22:21:04'),
(9, 'Electronics', '2023-12-01 22:21:26', '2023-12-01 22:21:26'),
(10, 'Medicin', '2023-12-01 22:41:06', '2023-12-01 22:41:06');

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
(1, 'Super Admin', 'superadmin', '2023-11-28 01:12:41', NULL),
(2, 'Admin', 'admin', '2023-11-28 01:12:41', NULL),
(3, 'Sales Manager', 'salesmanager', '2023-11-28 01:12:41', NULL),
(4, 'Sales Man', 'salesman', '2023-11-28 01:12:41', NULL);

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

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Fixed', '2023-11-28 23:00:07', '2023-11-28 23:01:24'),
(2, 'Kilomiter', '2023-11-28 23:00:23', '2023-11-28 23:01:39'),
(3, 'Weight', '2023-11-28 23:00:58', '2023-11-28 23:00:58');

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
(1, 'Freg', 'ফারেগ', '016', NULL, 'admin@gmail.com', 1, '$2y$12$ZwvbnUDF7v17I.XZQbcwsuLkHBpYgFx5GvpKcI/i1sibcllOfUG8S', 'en', '7561701585695.jpg', 1, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, '2023-12-03 00:41:35'),
(3, 'Rabiul', 'রবিউল', '015', NULL, 'rabiul@gmail.com', 2, '$2y$12$JubrXH9qUL0aRon5dyIsxunBJI.ZKII.WX10beIrBABgh.R.QlR1G', 'en', '1611701585715.jpg', 1, NULL, 1, 1, NULL, NULL, NULL, NULL, '2023-11-28 01:16:26', '2023-12-03 00:41:55'),
(5, 'Rohit', 'রোহিত', '01829500505', '০১৮২৯৫০০৫০৫', 'rohit@gmail.com', 3, '$2y$12$/rdShfNHWhA/xpxwNEmlvO6tAOi8TRx4aqSN3QlUUkr5a19i1cc7y', 'en', '6291701156306.jpg', 1, NULL, 0, 1, NULL, NULL, NULL, NULL, '2023-11-28 01:25:06', '2023-11-28 01:25:06'),
(6, 'Moinul', 'মইনুল', '01823696901', '০১৮২৩৬৯৬৯০১', 'moinul@gmail.com', 4, '$2y$12$v3h2cwgDSr4WUkmhjDwvwuInykObDqtq.QhE9ZwaR8mzjES6yD7fu', 'en', '5381701324313.jpg', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '2023-11-30 00:05:13', '2023-11-30 00:05:13');

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
-- Indexes for table `driver_payrolls`
--
ALTER TABLE `driver_payrolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_payroll_details`
--
ALTER TABLE `driver_payroll_details`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `driver_payrolls`
--
ALTER TABLE `driver_payrolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `driver_payroll_details`
--
ALTER TABLE `driver_payroll_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `loads`
--
ALTER TABLE `loads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
