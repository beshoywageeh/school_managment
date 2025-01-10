/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `acadmice_years`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `acadmice_years` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `year_start` date NOT NULL,
  `year_end` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `school_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `acadmice_years_created_by_foreign` (`created_by`),
  KEY `acadmice_years_updated_by_foreign` (`updated_by`),
  KEY `acadmice_years_school_id_foreign` (`school_id`),
  CONSTRAINT `acadmice_years_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `acadmice_years_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `acadmice_years_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `activity_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activity_logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `setting_id` bigint unsigned DEFAULT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_logs_user_id_foreign` (`user_id`),
  KEY `activity_logs_setting_id_foreign` (`setting_id`),
  CONSTRAINT `activity_logs_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE SET NULL,
  CONSTRAINT `activity_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `book_sheets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book_sheets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_qty` decimal(10,2) NOT NULL,
  `classroom_id` bigint unsigned NOT NULL,
  `grade_id` bigint unsigned NOT NULL,
  `school_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `sales_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `is_book` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `book_sheets_grade_id_foreign` (`grade_id`),
  KEY `book_sheets_classroom_id_foreign` (`classroom_id`),
  KEY `book_sheets_school_id_foreign` (`school_id`),
  KEY `book_sheets_user_id_foreign` (`user_id`),
  CONSTRAINT `book_sheets_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `class_rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `book_sheets_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `book_sheets_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `book_sheets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `book_sheets_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book_sheets_orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `auto_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` bigint unsigned DEFAULT NULL,
  `school_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `date` date NOT NULL,
  `type` smallint NOT NULL,
  `isset_order` tinyint(1) NOT NULL DEFAULT '1',
  `manual_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manual_date` date DEFAULT NULL,
  `is_payed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `book_sheets_orders_student_id_foreign` (`student_id`),
  KEY `book_sheets_orders_school_id_foreign` (`school_id`),
  KEY `book_sheets_orders_user_id_foreign` (`user_id`),
  CONSTRAINT `book_sheets_orders_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `book_sheets_orders_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `book_sheets_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `books_sheets_stocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `books_sheets_stocks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `books_sheets_id` bigint unsigned NOT NULL,
  `order_id` bigint unsigned NOT NULL,
  `quantity_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity_out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `books_sheets_stocks_books_sheets_id_foreign` (`books_sheets_id`),
  KEY `books_sheets_stocks_order_id_foreign` (`order_id`),
  CONSTRAINT `books_sheets_stocks_books_sheets_id_foreign` FOREIGN KEY (`books_sheets_id`) REFERENCES `book_sheets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `books_sheets_stocks_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `book_sheets_orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `class_rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `class_rooms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `school_id` bigint unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tameen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class_rooms_school_id_foreign` (`school_id`),
  KEY `class_rooms_user_id_foreign` (`user_id`),
  KEY `class_rooms_grade_id_foreign` (`grade_id`),
  CONSTRAINT `class_rooms_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `class_rooms_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `class_rooms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `classes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_id` bigint unsigned NOT NULL,
  `class_room_id` bigint unsigned NOT NULL,
  `school_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `tameen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `classes_grade_id_foreign` (`grade_id`),
  KEY `classes_class_room_id_foreign` (`class_room_id`),
  KEY `classes_school_id_foreign` (`school_id`),
  KEY `classes_user_id_foreign` (`user_id`),
  CONSTRAINT `classes_class_room_id_foreign` FOREIGN KEY (`class_room_id`) REFERENCES `class_rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `classes_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `classes_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `classes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `clothes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clothes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isset` tinyint(1) NOT NULL DEFAULT '0',
  `sales_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `sales_price_set` decimal(10,2) NOT NULL DEFAULT '0.00',
  `purchase_price` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `grade_id` bigint unsigned NOT NULL,
  `classroom_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `school_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clothes_grade_id_foreign` (`grade_id`),
  KEY `clothes_classroom_id_foreign` (`classroom_id`),
  KEY `clothes_school_id_foreign` (`school_id`),
  KEY `clothes_user_id_foreign` (`user_id`),
  CONSTRAINT `clothes_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `class_rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `clothes_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `clothes_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `clothes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `clothes_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clothes_orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `auto_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `school_id` bigint unsigned DEFAULT NULL,
  `date` date NOT NULL,
  `type` smallint NOT NULL,
  `isset_order` tinyint(1) NOT NULL DEFAULT '1',
  `manual_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manual_date` date DEFAULT NULL,
  `is_payed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clothes_orders_student_id_foreign` (`student_id`),
  KEY `clothes_orders_school_id_foreign` (`school_id`),
  KEY `clothes_orders_user_id_foreign` (`user_id`),
  CONSTRAINT `clothes_orders_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `clothes_orders_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `clothes_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `clothes_stocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clothes_stocks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `clothes_id` bigint unsigned NOT NULL,
  `order_id` bigint unsigned NOT NULL,
  `quantity_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity_out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clothes_stocks_order_id_foreign` (`order_id`),
  KEY `clothes_stocks_clothes_id_foreign` (`clothes_id`),
  CONSTRAINT `clothes_stocks_clothes_id_foreign` FOREIGN KEY (`clothes_id`) REFERENCES `clothes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `clothes_stocks_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `clothes_orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `exchange_bonds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `exchange_bonds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `manual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `academic_year_id` bigint unsigned NOT NULL,
  `student_id` bigint unsigned NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exchange_bonds_student_id_foreign` (`student_id`),
  KEY `exchange_bonds_academic_year_id_foreign` (`academic_year_id`),
  KEY `exchange_bonds_school_id_foreign` (`school_id`),
  KEY `exchange_bonds_user_id_foreign` (`user_id`),
  CONSTRAINT `exchange_bonds_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `acadmice_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `exchange_bonds_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `exchange_bonds_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `exchange_bonds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `excption_fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `excption_fees` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint unsigned NOT NULL,
  `grade_id` bigint unsigned NOT NULL,
  `class_id` bigint unsigned NOT NULL,
  `fee_id` bigint unsigned NOT NULL,
  `academic_year_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `school_id` bigint unsigned NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `excption_fees_student_id_foreign` (`student_id`),
  KEY `excption_fees_class_id_foreign` (`class_id`),
  KEY `excption_fees_grade_id_foreign` (`grade_id`),
  KEY `excption_fees_fee_id_foreign` (`fee_id`),
  KEY `excption_fees_academic_year_id_foreign` (`academic_year_id`),
  KEY `excption_fees_school_id_foreign` (`school_id`),
  KEY `excption_fees_user_id_foreign` (`user_id`),
  CONSTRAINT `excption_fees_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `acadmice_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `excption_fees_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `class_rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `excption_fees_fee_id_foreign` FOREIGN KEY (`fee_id`) REFERENCES `fee_invoices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `excption_fees_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `excption_fees_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `excption_fees_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `excption_fees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `fee_invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fee_invoices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `invoice_date` date NOT NULL,
  `student_id` bigint unsigned NOT NULL,
  `grade_id` bigint unsigned NOT NULL,
  `classroom_id` bigint unsigned NOT NULL,
  `academic_year_id` bigint unsigned NOT NULL,
  `school_fee_id` bigint unsigned NOT NULL,
  `school_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fee_invoices_student_id_foreign` (`student_id`),
  KEY `fee_invoices_grade_id_foreign` (`grade_id`),
  KEY `fee_invoices_classroom_id_foreign` (`classroom_id`),
  KEY `fee_invoices_academic_year_id_foreign` (`academic_year_id`),
  KEY `fee_invoices_school_fee_id_foreign` (`school_fee_id`),
  KEY `fee_invoices_school_id_foreign` (`school_id`),
  KEY `fee_invoices_user_id_foreign` (`user_id`),
  CONSTRAINT `fee_invoices_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `acadmice_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fee_invoices_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `class_rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fee_invoices_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fee_invoices_school_fee_id_foreign` FOREIGN KEY (`school_fee_id`) REFERENCES `school__fees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fee_invoices_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fee_invoices_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fee_invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `fund_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fund_accounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `receipt_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `school_id` bigint unsigned NOT NULL,
  `Debit` decimal(8,2) DEFAULT NULL,
  `Credit` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fund_accounts_receipt_id_foreign` (`receipt_id`),
  KEY `fund_accounts_school_id_foreign` (`school_id`),
  KEY `fund_accounts_user_id_foreign` (`user_id`),
  CONSTRAINT `fund_accounts_receipt_id_foreign` FOREIGN KEY (`receipt_id`) REFERENCES `recipt__payments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fund_accounts_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fund_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `grades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grades` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `grades_school_id_foreign` (`school_id`),
  KEY `grades_user_id_foreign` (`user_id`),
  CONSTRAINT `grades_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `grades_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` int NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `laboratories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `laboratories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_main` tinyint(1) NOT NULL DEFAULT '0',
  `sub_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `school_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `laboratories_location_id_foreign` (`location_id`),
  KEY `laboratories_school_id_foreign` (`school_id`),
  KEY `laboratories_user_id_foreign` (`user_id`),
  CONSTRAINT `laboratories_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `laboratories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `laboratories_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `laboratories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `nationalities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nationalities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `auto_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` smallint NOT NULL,
  `laboratory_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `school_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_laboratory_id_foreign` (`laboratory_id`),
  KEY `orders_school_id_foreign` (`school_id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_laboratory_id_foreign` FOREIGN KEY (`laboratory_id`) REFERENCES `laboratories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orders_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Father_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Father_National_Id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Father_Phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Father_Job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Father_Birth_Date` date DEFAULT NULL,
  `Father_Learning` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Father_Birth_Location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mother_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mother_National_Id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mother_Phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mother_Job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mother_Birth_Date` date DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `school_id` bigint unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parents_school_id_foreign` (`school_id`),
  KEY `parents_user_id_foreign` (`user_id`),
  CONSTRAINT `parents_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `parents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `payment_parts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment_parts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint unsigned NOT NULL,
  `grade_id` bigint unsigned NOT NULL,
  `class_id` bigint unsigned NOT NULL,
  `academic_year_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `school_id` bigint unsigned NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_status` tinyint NOT NULL DEFAULT '0',
  `school_fees_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payment_parts_student_id_foreign` (`student_id`),
  KEY `payment_parts_class_id_foreign` (`class_id`),
  KEY `payment_parts_grade_id_foreign` (`grade_id`),
  KEY `payment_parts_academic_year_id_foreign` (`academic_year_id`),
  KEY `payment_parts_school_fees_id_foreign` (`school_fees_id`),
  KEY `payment_parts_school_id_foreign` (`school_id`),
  KEY `payment_parts_user_id_foreign` (`user_id`),
  CONSTRAINT `payment_parts_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `fee_invoices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `payment_parts_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `class_rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `payment_parts_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `payment_parts_school_fees_id_foreign` FOREIGN KEY (`school_fees_id`) REFERENCES `school__fees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `payment_parts_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `payment_parts_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `payment_parts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `promotions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `promotions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint unsigned NOT NULL,
  `from_grade` bigint unsigned NOT NULL,
  `to_grade` bigint unsigned NOT NULL,
  `from_class` bigint unsigned NOT NULL,
  `to_class` bigint unsigned NOT NULL,
  `to_acc` bigint unsigned NOT NULL,
  `from_acc` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `school_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `promotions_student_id_foreign` (`student_id`),
  KEY `promotions_from_grade_foreign` (`from_grade`),
  KEY `promotions_to_grade_foreign` (`to_grade`),
  KEY `promotions_from_class_foreign` (`from_class`),
  KEY `promotions_to_class_foreign` (`to_class`),
  KEY `promotions_to_acc_foreign` (`to_acc`),
  KEY `promotions_from_acc_foreign` (`from_acc`),
  KEY `promotions_school_id_foreign` (`school_id`),
  KEY `promotions_user_id_foreign` (`user_id`),
  CONSTRAINT `promotions_from_acc_foreign` FOREIGN KEY (`from_acc`) REFERENCES `acadmice_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `promotions_from_class_foreign` FOREIGN KEY (`from_class`) REFERENCES `class_rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `promotions_from_grade_foreign` FOREIGN KEY (`from_grade`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `promotions_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `promotions_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `promotions_to_acc_foreign` FOREIGN KEY (`to_acc`) REFERENCES `acadmice_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `promotions_to_class_foreign` FOREIGN KEY (`to_class`) REFERENCES `class_rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `promotions_to_grade_foreign` FOREIGN KEY (`to_grade`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `promotions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `recipt__payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recipt__payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `manual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `academic_year_id` bigint unsigned NOT NULL,
  `student_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `school_id` bigint unsigned NOT NULL,
  `Debit` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `recipt__payments_student_id_foreign` (`student_id`),
  KEY `recipt__payments_academic_year_id_foreign` (`academic_year_id`),
  KEY `recipt__payments_school_id_foreign` (`school_id`),
  KEY `recipt__payments_user_id_foreign` (`user_id`),
  CONSTRAINT `recipt__payments_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `acadmice_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `recipt__payments_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `recipt__payments_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `recipt__payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `school__fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `school__fees` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_id` bigint unsigned DEFAULT NULL,
  `classroom_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `school_id` bigint unsigned DEFAULT NULL,
  `academic_year_id` bigint unsigned DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `school__fees_grade_id_foreign` (`grade_id`),
  KEY `school__fees_classroom_id_foreign` (`classroom_id`),
  KEY `school__fees_school_id_foreign` (`school_id`),
  KEY `school__fees_user_id_foreign` (`user_id`),
  KEY `school__fees_academic_year_id_foreign` (`academic_year_id`),
  CONSTRAINT `school__fees_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `acadmice_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `school__fees_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `class_rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `school__fees_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `school__fees_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `school__fees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_right` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_left` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_right` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_left` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `stocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stocks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_stock` decimal(8,2) DEFAULT NULL,
  `opening_stock_date` date DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `school_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `stocks_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stocks_order` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `stock_id` bigint unsigned DEFAULT NULL,
  `order_id` bigint unsigned DEFAULT NULL,
  `manual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manual_date` date DEFAULT NULL,
  `quantity_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity_out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stocks_order_order_id_foreign` (`order_id`),
  KEY `stocks_order_stock_id_foreign` (`stock_id`),
  CONSTRAINT `stocks_order_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `stocks_order_stock_id_foreign` FOREIGN KEY (`stock_id`) REFERENCES `stocks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `student_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student_accounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint unsigned NOT NULL,
  `grade_id` bigint unsigned NOT NULL,
  `classroom_id` bigint unsigned NOT NULL,
  `recipt__payments_id` bigint unsigned DEFAULT NULL,
  `fee_invoices_id` bigint unsigned DEFAULT NULL,
  `excpetion_id` bigint unsigned DEFAULT NULL,
  `exchange_bond_id` bigint unsigned DEFAULT NULL,
  `academic_year_id` bigint unsigned NOT NULL,
  `date` date NOT NULL,
  `type` tinyint NOT NULL COMMENT 'Invoice => 1 , Payment => 2 , Expcition => 3',
  `debit` decimal(10,2) NOT NULL,
  `credit` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_accounts_student_id_foreign` (`student_id`),
  KEY `student_accounts_grade_id_foreign` (`grade_id`),
  KEY `student_accounts_classroom_id_foreign` (`classroom_id`),
  KEY `student_accounts_recipt__payments_id_foreign` (`recipt__payments_id`),
  KEY `student_accounts_excpetion_id_foreign` (`excpetion_id`),
  KEY `student_accounts_fee_invoices_id_foreign` (`fee_invoices_id`),
  KEY `student_accounts_academic_year_id_foreign` (`academic_year_id`),
  KEY `student_accounts_exchange_bond_id_foreign` (`exchange_bond_id`),
  CONSTRAINT `student_accounts_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `acadmice_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_accounts_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `class_rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_accounts_exchange_bond_id_foreign` FOREIGN KEY (`exchange_bond_id`) REFERENCES `exchange_bonds` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_accounts_excpetion_id_foreign` FOREIGN KEY (`excpetion_id`) REFERENCES `excption_fees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_accounts_fee_invoices_id_foreign` FOREIGN KEY (`fee_invoices_id`) REFERENCES `fee_invoices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_accounts_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_accounts_recipt__payments_id_foreign` FOREIGN KEY (`recipt__payments_id`) REFERENCES `recipt__payments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_accounts_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date` date NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint DEFAULT NULL,
  `student_status` tinyint DEFAULT NULL,
  `birth_at_begin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` tinyint NOT NULL,
  `tameen` tinyint DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `school_id` bigint unsigned NOT NULL,
  `grade_id` bigint unsigned NOT NULL,
  `classroom_id` bigint unsigned NOT NULL,
  `class_id` bigint unsigned DEFAULT NULL,
  `acadmiecyear_id` bigint unsigned NOT NULL,
  `parent_id` bigint unsigned DEFAULT NULL,
  `nationality_id` bigint unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `students_name_index` (`name`),
  KEY `students_school_id_foreign` (`school_id`),
  KEY `students_user_id_foreign` (`user_id`),
  KEY `students_grade_id_foreign` (`grade_id`),
  KEY `students_classroom_id_foreign` (`classroom_id`),
  KEY `students_parent_id_foreign` (`parent_id`),
  KEY `students_acadmiecyear_id_foreign` (`acadmiecyear_id`),
  KEY `students_nationality_id_foreign` (`nationality_id`),
  KEY `students_class_id_foreign` (`class_id`),
  CONSTRAINT `students_acadmiecyear_id_foreign` FOREIGN KEY (`acadmiecyear_id`) REFERENCES `acadmice_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `students_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `students_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `class_rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `students_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `students_nationality_id_foreign` FOREIGN KEY (`nationality_id`) REFERENCES `nationalities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `students_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `students_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `teacher_grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teacher_grade` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `teacher_id` bigint unsigned NOT NULL,
  `grade_id` bigint unsigned NOT NULL,
  `school_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_grade_teacher_id_foreign` (`teacher_id`),
  KEY `teacher_grade_grade_id_foreign` (`grade_id`),
  KEY `teacher_grade_school_id_foreign` (`school_id`),
  CONSTRAINT `teacher_grade_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `teacher_grade_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `teacher_grade_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `grade_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_hiring` date DEFAULT NULL,
  `learning` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reiligon` tinyint DEFAULT NULL,
  `gender` tinyint DEFAULT NULL,
  `type` tinyint DEFAULT NULL,
  `job_id` bigint unsigned DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `login_allow` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance` tinyint(1) NOT NULL DEFAULT '0',
  `insurance_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_date` date DEFAULT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resign` tinyint(1) NOT NULL DEFAULT '0',
  `resign_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_phone_unique` (`phone`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_job_id_foreign` (`job_id`),
  KEY `users_school_id_foreign` (`school_id`),
  KEY `users_user_id_foreign` (`user_id`),
  CONSTRAINT `users_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `work_jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `users_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `work_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `work_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `is_main` tinyint NOT NULL DEFAULT '0',
  `main_job_id` bigint unsigned DEFAULT NULL,
  `school_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `work_jobs_created_by_foreign` (`created_by`),
  KEY `work_jobs_updated_by_foreign` (`updated_by`),
  KEY `work_jobs_main_job_id_foreign` (`main_job_id`),
  KEY `work_jobs_school_id_foreign` (`school_id`),
  CONSTRAINT `work_jobs_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `work_jobs_main_job_id_foreign` FOREIGN KEY (`main_job_id`) REFERENCES `work_jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `work_jobs_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `work_jobs_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1,'2014_10_12_000000_create_users_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (2,'2014_10_12_100000_create_password_reset_tokens_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (3,'2019_08_19_000000_create_failed_jobs_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (4,'2019_12_14_000001_create_personal_access_tokens_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (5,'2024_01_12_164040_create_settings_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (6,'2024_01_12_172841_create_images_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (7,'2024_01_17_180425_create_grades_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (8,'2024_01_18_181323_create_class_rooms_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (9,'2024_02_02_165625_create_parents_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (10,'2024_03_28_210218_create_school__fees_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (11,'2024_03_29_121647_create_students_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (12,'2024_05_13_192744_create_teacher_section_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (13,'2024_05_13_231155_create_work_jobs_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (14,'2024_05_17_123034_create_academicyear_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (15,'2024_05_19_223609_create_promotions_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (16,'2024_05_20_231543_create_fee_invoices_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (17,'2024_05_21_160603_create_student_accounts_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (18,'2024_05_21_205209_create_recipt__payments_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (19,'2024_05_24_212244_create_excption_fees_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (20,'2024_05_27_215242_create_payment_parts_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (21,'2024_06_03_210414_create_permission_tables',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (22,'2024_06_15_113708_create_jobs_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (23,'2024_09_30_215928_create_activity_logs_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (24,'2024_10_17_190319_create_stocks_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (25,'2024_10_18_155736_create_orders_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (26,'2024_10_18_191054_create_stocks_order',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (27,'2024_10_27_121139_create_clothes_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (28,'2024_10_27_122235_create_clothes_orders_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (29,'2024_10_27_122553_clothes_stocks',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (30,'2024_11_15_172938_create_book_sheets_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (31,'2024_11_22_125220_create_book_sheets_orders_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (32,'2024_11_22_125636_book_sheets__stocks',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (33,'2024_12_08_183511_create_nationalities_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (34,'2024_12_09_190719_create_classes_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (35,'2024_12_13_174215_create_laboratories_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (36,'2024_12_30_193737_create_fund_accounts_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (37,'2025_01_01_214912_create_exchange_bonds_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (38,'2025_12_30_194613_db_relations',1);
