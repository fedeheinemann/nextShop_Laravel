-- MySQL dump 10.13  Distrib 8.0.18, for macos10.14 (x86_64)
--
-- Host: 127.0.0.1    Database: Nextshop_db
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Intel',NULL,NULL),(2,'AMD',NULL,NULL),(3,'Asus',NULL,NULL),(4,'Gigabyte',NULL,NULL),(5,'MSI',NULL,NULL),(6,'Adata',NULL,NULL),(7,'Corsair',NULL,NULL),(8,'G. Skill',NULL,NULL),(9,'Kingston',NULL,NULL),(10,'Novatech',NULL,NULL),(11,'Crucial',NULL,NULL),(12,'Hikvision',NULL,NULL),(13,'Seagate',NULL,NULL),(14,'Western Digital',NULL,NULL),(15,'Toshiba',NULL,NULL),(16,'SFX',NULL,NULL),(17,'Sentey',NULL,NULL),(18,'Corsair Gamer',NULL,NULL),(19,'EVGA Gamer',NULL,NULL),(20,'Gigabyte Gamer',NULL,NULL),(21,'NZXT Gamer',NULL,NULL),(22,'Raidmax Gamer',NULL,NULL),(23,'Thermaltake Gamer',NULL,NULL),(24,'Aureox Gamer',NULL,NULL),(25,'NZXT',NULL,NULL),(26,'Thermaltake',NULL,NULL),(27,'Deep Cool',NULL,NULL),(28,'Aerocool',NULL,NULL),(29,'Cooler Master',NULL,NULL),(30,'EVGA',NULL,NULL),(31,'Sapphire',NULL,NULL),(32,'Zotac',NULL,NULL),(33,'BenQ',NULL,NULL),(34,'Zowie',NULL,NULL),(35,'LG',NULL,NULL),(36,'Samsung',NULL,NULL),(37,'Acer',NULL,NULL),(38,'Dell',NULL,NULL),(39,'GX',NULL,NULL),(40,'Genius',NULL,NULL),(41,'Apple',NULL,NULL),(42,'Lenovo',NULL,NULL),(43,'Sony',NULL,NULL),(44,'Positivo BGH',NULL,NULL),(45,'HP',NULL,NULL),(46,'Silverstone',NULL,NULL),(47,'Ryzen Pro Basic',NULL,NULL),(48,'Ryzen Pro Premium',NULL,NULL),(49,'Acer Game Desk Predator',NULL,NULL),(50,'AMD Low Performance',NULL,NULL),(51,'Intel High Performance',NULL,NULL),(52,'Master Rac',NULL,NULL),(53,'Intel Basic PC',NULL,NULL),(54,'AMD Basic PC',NULL,NULL),(55,'Render High Performance',NULL,NULL);
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Microprocesadores',NULL,NULL),(2,'Motherboards',NULL,NULL),(3,'Memorias RAM',NULL,NULL),(4,'Almacenamiento',NULL,NULL),(5,'Gabinetes',NULL,NULL),(6,'Fuentes',NULL,NULL),(7,'Refrigeración',NULL,NULL),(8,'Placas de Video',NULL,NULL),(9,'Monitores',NULL,NULL),(10,'Audio',NULL,NULL),(11,'Notebooks',NULL,NULL),(12,'Equipos Armados',NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_11_20_150824_marcas_categorias_productos',1),(4,'2019_11_26_125824_add_admin_to_users_table',1),(5,'2019_11_26_130449_add_avatar_to_users_table',1),(6,'2019_11_26_191248_add_description_to_products_table',2),(7,'2019_11_26_191721_add_specifications_to_products_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` bigint(20) NOT NULL DEFAULT '0',
  `price` decimal(15,2) NOT NULL,
  `image_detail` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_home` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `specifications` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `products_brand_id_foreign` (`brand_id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DNI` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Federico','Giménez','federico@gimenez.com','2019-08-01 03:00:00','12345678','10101101',NULL,NULL,NULL,0,NULL),(2,'pepe',NULL,'pepe@pepe.com',NULL,'$2y$10$NqSW2Nr1ThCgqyXfWF9zkOBnlFL.8.F0WPcVrSKJbQonvdX2CL0MO',NULL,'GE9zA5Tt2DjyfqJT3VIQF3Jbkc0lPnYLHBxWK5VjPZEpe0AnshX2MrREtLjr','2019-11-27 16:48:32','2019-11-27 16:48:32',0,'CYnU1kPuOtbDor87VJE64UZPz5X6vYCw0P04YjJ7.jpeg'),(3,'Nicolás',NULL,'nicolas@nicolas.com',NULL,'$2y$10$dOuC4NA164sFndX8eVTUN.lh.gxI6LaHyuB8pzlfk8NERb4rIMo2K',NULL,NULL,'2019-11-27 16:55:54','2019-11-27 16:55:54',0,'HmWYEomkMQps5R1yfTgkkOJp2KgOg7YkLh73c5c3.jpeg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-27 12:26:02
