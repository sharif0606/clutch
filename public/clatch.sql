-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 08:29 AM
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
  `gml(10,2)` decimal(8,2) NOT NULL DEFAULT 1.00,
  `cml(10,2)` decimal(8,2) NOT NULL DEFAULT 1.00,
  `hml(10,2)` decimal(8,2) NOT NULL DEFAULT 1.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `logo` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `company_id`, `name`, `contactperson`, `contactnumber`, `address`, `logo`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Noman', 'Rabiul', '01829500505', '2no gate, Chattogram.', '9131700889006.jpg', 1, NULL, '2023-11-24 23:10:06', '2023-11-24 23:10:06'),
(2, 1, 'Mojammel', 'Freg', '01819736308', 'Rangamathi', '6051700894415.jpg', 1, NULL, '2023-11-25 00:40:15', '2023-11-25 00:40:15');

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
(1, 'Momin', 'Rabiul', '01886084116', 'Comilla', '4481700892149.jpg', 1, 1, '2023-11-25 00:02:29', '2023-11-25 00:04:11'),
(4, 'Saniya', 'Freg', '01542015245', 'Feni', '3731700892524.jpg', 1, NULL, '2023-11-25 00:08:44', '2023-11-25 00:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contractnumber` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `chargetype` varchar(255) NOT NULL,
  `amount(10,2)` decimal(8,2) NOT NULL DEFAULT 0.00,
  `startdate` date DEFAULT NULL,
  `finishdate` date DEFAULT NULL,
  `collectform` varchar(255) DEFAULT NULL,
  `deliveredto` varchar(255) DEFAULT NULL,
  `totalweight(10,2)` decimal(8,2) DEFAULT NULL,
  `totaldistance(10,2)` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Mojammel', 'Freg', '01819736308', 'mojammel@gmail.com', 'Rangamathi', '2023-11-25 00:56:27', '2023-11-25 01:22:11'),
(2, 'Sinthia', 'Rabiul', '01554309034', 'sinthia@gmail.com', 'Bandorban', '2023-11-25 01:23:08', '2023-11-25 01:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `loads`
--

CREATE TABLE `loads` (
  `integer` bigint(20) UNSIGNED NOT NULL,
  `contract_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `asset_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `startdate` date DEFAULT NULL,
  `finishdate` date DEFAULT NULL,
  `starttime` time DEFAULT NULL,
  `finishtime` time DEFAULT NULL,
  `totalweight(10,2)` decimal(8,2) DEFAULT NULL,
  `totaldistance(10,2)` decimal(8,2) DEFAULT NULL,
  `chargetype` varchar(255) NOT NULL,
  `amount(10,2)` decimal(8,2) NOT NULL DEFAULT 1.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_09_062426_create_companies_table', 1),
(6, '2023_11_09_062453_create_branches_table', 1),
(7, '2023_11_09_062513_create_roles_table', 2),
(8, '2023_11_09_062701_create_product_types_table', 2),
(9, '2023_11_09_064251_create_units_table', 2),
(10, '2023_11_09_064440_create_products_table', 2),
(11, '2023_11_09_070019_create_assets_table', 2),
(12, '2023_11_11_031518_create_customers_table', 2),
(13, '2023_11_11_032107_create_contracts_table', 2),
(14, '2023_11_11_035816_create_loads_table', 2),
(15, '2023_11_11_043945_create_users_table', 2),
(16, '2023_11_12_043129_create_permissions_table', 2);

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
(1, 1, 'user.index', '2023-11-24 23:10:36', '2023-11-24 23:10:36'),
(2, 1, 'user.create', '2023-11-24 23:10:36', '2023-11-24 23:10:36'),
(3, 1, 'user.show', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(4, 1, 'user.edit', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(5, 1, 'user.destroy', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(6, 1, 'role.index', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(7, 1, 'role.create', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(8, 1, 'role.show', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(9, 1, 'role.edit', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(10, 1, 'role.destroy', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(11, 1, 'branch.index', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(12, 1, 'branch.create', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(13, 1, 'branch.show', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(14, 1, 'branch.edit', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(15, 1, 'branch.destroy', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(16, 1, 'companies.index', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(17, 1, 'companies.create', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(18, 1, 'companies.show', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(19, 1, 'companies.edit', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(20, 1, 'companies.destroy', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(21, 1, 'permission.list', '2023-11-24 23:10:37', '2023-11-24 23:10:37'),
(22, 2, 'user.edit', '2023-11-24 23:11:28', '2023-11-24 23:11:28'),
(23, 2, 'role.create', '2023-11-24 23:11:28', '2023-11-24 23:11:28'),
(24, 2, 'branch.create', '2023-11-24 23:11:28', '2023-11-24 23:11:28'),
(25, 2, 'branch.show', '2023-11-24 23:11:28', '2023-11-24 23:11:28'),
(26, 2, 'branch.edit', '2023-11-24 23:11:28', '2023-11-24 23:11:28'),
(27, 2, 'companies.show', '2023-11-24 23:11:28', '2023-11-24 23:11:28'),
(28, 2, 'permission.list', '2023-11-24 23:11:28', '2023-11-24 23:11:28');

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
(1, 'Super Admin', 'superadmin', '2023-11-24 22:41:58', NULL),
(2, 'Admin', 'admin', '2023-11-24 22:41:58', NULL),
(3, 'Sales Manager', 'salesmanager', '2023-11-24 22:41:58', NULL),
(4, 'Sales Man', 'salesman', '2023-11-24 22:41:58', NULL);

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
(1, 'Rabiul', 'রবিউল', '01537005005', '০১৫৩৭০০৫০০৫', 'rabiul@gmail.com', 1, '$2y$12$vJqVOUy9x8rGmZ4P.YAh4e4bsey4H7ZCjudDkeQ7f58xrhR/a3C1q', 'en', '2771700888586.jpg', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, '2023-11-24 22:43:54', '2023-11-24 23:03:06'),
(2, 'Rohit', 'রোহিত', '01815122938', NULL, 'rohit@gmail.com', 2, '$2y$12$97LRi.MVu0K6segIEcGnK.05Vsmkcy.sFLTC/ejk9XU5vSyhamAiK', 'en', '1901700888959.jpg', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, '2023-11-24 23:08:41', '2023-11-24 23:12:43');

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
  ADD PRIMARY KEY (`integer`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loads`
--
ALTER TABLE `loads`
  MODIFY `integer` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
