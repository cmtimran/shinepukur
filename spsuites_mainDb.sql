-- MySQL dump 10.13  Distrib 5.6.49, for Linux (x86_64)
--
-- Host: localhost    Database: spsuites_mainDb
-- ------------------------------------------------------
-- Server version	5.6.49

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `spsuites_mainDb`
--


--
-- Table structure for table `banquetphotos`
--

DROP TABLE IF EXISTS `banquetphotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banquetphotos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banquetphotos`
--

LOCK TABLES `banquetphotos` WRITE;
/*!40000 ALTER TABLE `banquetphotos` DISABLE KEYS */;
INSERT INTO `banquetphotos` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES (1,'public/uploads/banquetphotos/1584954613shinepukursuites-hall-g7.jpg',1,'2020-03-23 03:10:13','2020-03-23 03:10:32'),(2,'public/uploads/banquetphotos/1584954646shinepukursuites-hall-g6.jpg',1,'2020-03-23 03:10:46','2020-03-23 03:10:46'),(3,'public/uploads/banquetphotos/1584954659shinepukursuites-hall-g5.jpg',1,'2020-03-23 03:10:59','2020-03-23 03:10:59'),(4,'public/uploads/banquetphotos/1584954674shinepukursuites-hall-g4.jpg',1,'2020-03-23 03:11:14','2020-03-23 03:11:14'),(5,'public/uploads/banquetphotos/1584954691shinepukursuites-hall-g2.jpg',1,'2020-03-23 03:11:31','2020-03-23 03:11:31'),(6,'public/uploads/banquetphotos/1584954707shinepukursuites-hall-g1.jpg',1,'2020-03-23 03:11:47','2020-03-23 03:11:47'),(7,'public/uploads/banquetphotos/1584954719shinepukursuites-hall.jpg',1,'2020-03-23 03:11:59','2020-03-23 03:11:59'),(8,'public/uploads/banquetphotos/1584954736shinepukursuites-hall-g3.jpg',1,'2020-03-23 03:12:16','2020-03-23 03:12:16');
/*!40000 ALTER TABLE `banquetphotos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banquetvideos`
--

DROP TABLE IF EXISTS `banquetvideos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banquetvideos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banquetvideos`
--

LOCK TABLES `banquetvideos` WRITE;
/*!40000 ALTER TABLE `banquetvideos` DISABLE KEYS */;
INSERT INTO `banquetvideos` (`id`, `video`, `status`, `created_at`, `updated_at`) VALUES (1,'O4T7HCKjTgQ',1,'2020-03-24 03:09:38','2020-03-24 03:09:38'),(2,'O4T7HCKjTgQ',1,'2020-03-24 03:09:47','2020-03-24 03:09:47'),(3,'O4T7HCKjTgQ',1,'2020-03-24 03:10:03','2020-03-24 03:10:03');
/*!40000 ALTER TABLE `banquetvideos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogcategories`
--

DROP TABLE IF EXISTS `blogcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogcategories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogcategories`
--

LOCK TABLES `blogcategories` WRITE;
/*!40000 ALTER TABLE `blogcategories` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `title`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES (4,'Conference room...','Conference-room...','<p><span style=\"color: rgb(99, 106, 118); font-family: Poppins, sans-serif;\">Office Conference in Shinepukur Suites...</span><br></p>','public/uploads/blog/1585801299shinepukursuites-hall-g1.jpg',1,'2020-04-01 22:21:39','2020-04-01 22:21:39'),(5,'Executive Suites Lake View Balcony','Executive-Suites-Lake-View-Balcony','<p>Best lake view in the..</p>','public/uploads/blog/1585804938shinepukursuites-news.jpg',1,'2020-04-01 22:39:10','2020-10-11 05:05:57'),(6,'Traditional Fair','Traditional-Fair','<p><span style=\"color: rgb(99, 106, 118); font-family: Poppins, sans-serif;\">Traditional Fair in Shinepukur Suites...</span><br></p>','public/uploads/blog/15858050722.jpg',1,'2020-04-01 23:24:32','2020-04-01 23:24:32');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactinfos`
--

DROP TABLE IF EXISTS `contactinfos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactinfos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactinfos`
--

LOCK TABLES `contactinfos` WRITE;
/*!40000 ALTER TABLE `contactinfos` DISABLE KEYS */;
INSERT INTO `contactinfos` (`id`, `phone`, `address`, `time`, `email`, `status`, `created_at`, `updated_at`) VALUES (1,'+8802-55045681-5\r\n+8801958-606044','House # 8/C | Road # 143 | Gulshan-1 | Dhaka-1212','24/7','it@shinepukursuites.com',1,'2020-03-24 03:06:13','2020-10-05 09:15:02');
/*!40000 ALTER TABLE `contactinfos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES (1,'public/uploads/gallery/15849354387.jpg',1,'2020-03-22 21:50:38','2020-03-22 21:50:54'),(2,'public/uploads/gallery/15849354676.jpg',1,'2020-03-22 21:51:07','2020-03-22 21:51:07'),(3,'public/uploads/gallery/15849354965.jpg',1,'2020-03-22 21:51:36','2020-03-22 21:51:36'),(4,'public/uploads/gallery/1584935612shinepukursuites-g5.jpg',1,'2020-03-22 21:53:32','2020-03-22 21:53:32'),(5,'public/uploads/gallery/1584935643shinepukursuites-g4.jpg',1,'2020-03-22 21:54:03','2020-03-22 21:54:03'),(6,'public/uploads/gallery/1584935663shinepukursuites-g3.jpg',1,'2020-03-22 21:54:23','2020-03-22 21:54:23'),(7,'public/uploads/gallery/1584935685shinepukursuites-g2.jpg',1,'2020-03-22 21:54:45','2020-03-22 21:54:45'),(8,'public/uploads/gallery/1584935727shinepukursuites-g1.jpg',1,'2020-03-22 21:55:27','2020-03-22 21:55:27');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logos`
--

DROP TABLE IF EXISTS `logos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logotype` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logos`
--

LOCK TABLES `logos` WRITE;
/*!40000 ALTER TABLE `logos` DISABLE KEYS */;
INSERT INTO `logos` (`id`, `image`, `logotype`, `status`, `created_at`, `updated_at`) VALUES (3,'public/uploads/logo/1573035216gatewayit-logo.png',1,1,'2019-11-06 04:13:36','2019-11-06 04:27:30'),(4,'public/uploads/logo/1573035821gatewayit-footer-logo.png',2,1,'2019-11-06 04:23:41','2019-11-06 04:23:41');
/*!40000 ALTER TABLE `logos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (20,'2014_10_12_000000_create_users_table',1),(21,'2014_10_12_100000_create_password_resets_table',1),(22,'2019_07_30_113236_create_roles_table',1),(26,'2019_07_31_064441_create_logos_table',1),(65,'2019_11_06_103500_create_sliders_table',2),(67,'2019_11_06_104125_create_testimonials_table',4),(68,'2019_12_07_034624_create_blogs_table',5),(69,'2020_03_22_031449_create_specialpackages_table',5),(70,'2020_03_23_032618_create_galleries_table',6),(71,'2020_03_23_082258_create_specialmenus_table',7),(72,'2020_03_23_090604_create_banquetphotos_table',8),(75,'2019_12_08_044303_create_packages_table',9),(76,'2020_03_23_100143_create_banquetvideos_table',9),(77,'2020_03_23_103418_create_contactinfos_table',9),(78,'2020_03_24_081937_create_productimages_table',9),(79,'2019_12_07_042103_create_blogcategories_table',10),(80,'2020_03_30_045750_create_roomservices_table',10);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packageservice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oldprice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newprice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perday` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `offer` int(10) unsigned DEFAULT '0',
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
INSERT INTO `packages` (`id`, `title`, `slug`, `size`, `capacity`, `bed`, `packageservice`, `oldprice`, `newprice`, `perday`, `description`, `offer`, `status`, `created_at`, `updated_at`) VALUES (5,'Studio Suite','Studio-Suite','270 Sq.ft','Maximum Person 1','Queen Size Beds','Wifi, Television, Bathroom',NULL,'150++','/ Per Day','<p>Naturally lit, with a classic color palette, clean lines and rich wooden\r\n furnishings; a queen bed and an ensuite bathroom. These rooms are a \r\nharmony of heritage and modern conveniences, with beautiful views. Relax\r\n in the peace and comfort of your own private abode.<br></p>',NULL,1,'2020-04-01 20:37:03','2020-04-10 05:53:29'),(6,'Premier Suite (Lake View)','Premier-Suite-(Lake-View)','320 Sq.ft','Maximum Person 2','King Size Beds','Wifi, Television, Bathroom',NULL,'200++','/ Per Day','<p>Take a break from the bustle of the city and relax in your own private \r\nspace. Unwind on your balcony beside beautiful views. Stretch out on \r\nyour king Size bed or sink into the classically upholstered armchair.<br></p>',NULL,1,'2020-04-01 20:40:03','2020-04-10 05:54:19'),(7,'Premier Suite Twin','Premier-Suite-Twin','400 Sq.ft','Maximum Person 2','Two Single Beds','Wifi, Television, Bathroom',NULL,'250++','/ Per Day','<p>From the grand Twin beds to the ottoman and classically designed sofa; \r\nevery element speaks of timeless luxury. Clean lines and simple patterns\r\n are interspersed with ornate hand carved touches. Perfect for business \r\nor leisure travelers to the city.<br></p>',NULL,1,'2020-04-01 20:45:28','2020-04-10 05:53:49'),(8,'Executive Suite','Executive-Suite','420 Sq.ft','Maximum Person 2','King Size Beds','Wifi, Television, Bathroom',NULL,'300++','/ Per Day','<p>Thoughtfully furnished with wooden furnishings interspersed with \r\nhandwoven Turkish rugs, our royal Suites are aptly named. They offer \r\nundefined city’s lake view, quadrant garden or city views\r\nfrom large private balconies. There is also a king size bedroom with an \r\nensuite bathroom, a comfortable living space and a walk in wardrobe. \r\nContemporary artworks add a touch of elegance.&nbsp;<br></p>',NULL,1,'2020-04-01 20:48:20','2020-04-10 05:53:10'),(9,'Shinepukur Royal Suite','Shinepukur-Royal-Suite','2000 Sq.ft','Maximum Person 6','King Size Beds','Wifi, Television, Bathroom',NULL,'350++','/ Per Day','<p>Thoughtfully furnished with wooden furnishings interspersed with \r\nhandwoven Turkish rugs, our royal Suites are aptly named. They offer \r\nundefined city’s lake view, quadrant garden or city views.<br></p>',NULL,1,'2020-04-01 20:56:00','2020-04-08 05:16:21'),(14,'Conference Room','Conference-Room',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>Safety Practices:</p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">* Deep cleaned hal</span><br></p><p>* Follow no mask no service guideline</p><p>* Maintain social distance on table set up</p><p>* Regularly sanitised table, chairs &amp; linen</p><p>* White board &amp; marker</p><p>* Note pad &amp; pen for daylong event</p><p>* High speed Wi-Fi access</p><p>* IT&amp; maintenance support</p><p>* 24/7 generator support</p><p>* Multimedia projector &amp; pa system (on charge)</p><p>Address: House # 8/C | Road # 143 | Gulshan-1 | Dhaka-1212</p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">Offer Includes:</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">* Capacity up to 100 persons</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">Call for reservation: +8801739-039818</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">*Terms &amp; Conditions Apply.</span><br></p>',1,1,'2020-10-14 03:37:55','2020-10-14 03:37:55'),(15,'Buy 1 Get 2 Free','Buy-1-Get-2-Free',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>BDT-2000</p><p>Buffet Lunch everyday only at BDT-1999/- (All Inclusive), Dinner Buffet at weekend (Thursday, Friday &amp; Saturday) only at BDT-2399/- (All Inclusive)</p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">BUY 1 GET 2 Free on selected Bank Cards.</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">Dine-in at one of the city\'s most eclectic and elegant atmospheres - the Shinepukur Suites Buffet brings to you a variety of mouthwatering flavours consisting of your favourite local, Indian, continental, Thai &amp; Chinese dishes all in one place!</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">*Terms &amp; Conditions Apply.</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">*For Booking: +8801739-039818</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">Address: House #8/C | Road #143 | Gulshan-1 | Dhaka-1212</span><br></p>',1,1,'2020-10-14 03:42:15','2020-10-14 03:42:15'),(16,'Couple Buffet Lunch Complimentary','Couple-Buffet-Lunch-Complimentary',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>Experience a royal treatment at our luxurious suites and indulge in a complimentary buffet in our premium restaurant, The Cinnamon Tree. We make sure your stay becomes memorable at the Shinepukur Suites.</p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">*** Premier Suite with Buffet Lunch at BDT- 5555/- Net</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">*** Executive Suite with Buffet Lunch at BDT- 6666/- Net</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">Offer Includes:</span></p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">* Welcome drinks on arrival</span><br></p><p>* Queen / King size sanitised bed</p><p>* Entire hotel premises deep cleaned &amp; sanitised regularly</p><p>* Couple buffet lunch</p><p>* Secure free parking</p><p>* High speed Wi-Fi access</p><p>* Fitness center</p><p>* In room tea / coffee</p><p>* Private balcony lake facing</p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">Birthday, Anniversary &amp; Honeymoon packages are also available.</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">Address: House # 8/C | Road # 143 | Gulshan-1 | Dhaka-1212</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">* Terms &amp; Conditions Apply.</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">To book your stay call: 8801739-039818</span><br></p>',1,1,'2020-10-14 03:45:22','2020-10-14 03:45:22');
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `productimages`
--

DROP TABLE IF EXISTS `productimages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productimages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productimages`
--

LOCK TABLES `productimages` WRITE;
/*!40000 ALTER TABLE `productimages` DISABLE KEYS */;
INSERT INTO `productimages` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES (2,1,'public/uploads/product/1585040234-shinepukursuites-room-2.jpg','2020-03-24 02:57:14','2020-03-24 02:57:14'),(3,1,'public/uploads/product/1585040234-shinepukursuites-room-3.jpg','2020-03-24 02:57:14','2020-03-24 02:57:14'),(4,2,'public/uploads/product/1585285304-shinepukursuites-room-2.jpg','2020-03-26 23:01:44','2020-03-26 23:01:44'),(5,2,'public/uploads/product/1585285304-shinepukursuites-room-4.jpg','2020-03-26 23:01:44','2020-03-26 23:01:44'),(6,3,'public/uploads/product/1585566713-shinepukursuites-room-1.jpg','2020-03-30 05:11:53','2020-03-30 05:11:53'),(7,3,'public/uploads/product/1585566893-shinepukursuites-room-1.jpg','2020-03-30 05:14:53','2020-03-30 05:14:53'),(8,4,'public/uploads/product/1585649134-shinepukursuites-room-3 - Copy.jpg','2020-03-31 04:05:34','2020-03-31 04:05:34'),(9,4,'public/uploads/product/1585649134-shinepukursuites-room-3.jpg','2020-03-31 04:05:34','2020-03-31 04:05:34'),(10,5,'public/uploads/product/1585795023-shinepukursuites-room-1.jpg','2020-04-01 20:37:03','2020-04-01 20:37:03'),(12,7,'public/uploads/product/1585795528-shinepukursuites-room-3.jpg','2020-04-01 20:45:28','2020-04-01 20:45:28'),(13,8,'public/uploads/product/1585795701-shinepukursuites-room-4.jpg','2020-04-01 20:48:21','2020-04-01 20:48:21'),(14,8,'public/uploads/product/1585795969-shinepukursuites-room-4.jpg','2020-04-01 20:52:49','2020-04-01 20:52:49'),(15,7,'public/uploads/product/1585796000-shinepukursuites-room-3.jpg','2020-04-01 20:53:20','2020-04-01 20:53:20'),(17,5,'public/uploads/product/1585796032-shinepukursuites-room-1.jpg','2020-04-01 20:53:52','2020-04-01 20:53:52'),(18,9,'public/uploads/product/1585796160-shinepukursuites-room-5.jpg','2020-04-01 20:56:00','2020-04-01 20:56:00'),(19,9,'public/uploads/product/1585796175-shinepukursuites-room-5.jpg','2020-04-01 20:56:15','2020-04-01 20:56:15'),(22,10,'public/uploads/product/1585796955-shinepukursuites-g6.jpg','2020-04-01 21:09:15','2020-04-01 21:09:15'),(26,6,'public/uploads/product/1586519070-shinepukursuites-g4.jpg','2020-04-10 05:44:30','2020-04-10 05:44:30'),(27,6,'public/uploads/product/1586519128-shinepukursuites-room-2.jpg','2020-04-10 05:45:28','2020-04-10 05:45:28'),(34,12,'public/uploads/product/1602157958-Buffe.jpg','2020-10-08 05:52:38','2020-10-08 05:52:38'),(35,11,'public/uploads/product/1602158641-Hall-Room.jpg','2020-10-08 06:04:01','2020-10-08 06:04:01'),(36,13,'public/uploads/product/1602159344-Room.jpg','2020-10-08 06:15:44','2020-10-08 06:15:44'),(37,14,'public/uploads/product/1602668275-3.jpg','2020-10-14 03:37:55','2020-10-14 03:37:55'),(38,15,'public/uploads/product/1602668535-2.jpg','2020-10-14 03:42:15','2020-10-14 03:42:15'),(39,16,'public/uploads/product/1602668722-1.jpg','2020-10-14 03:45:22','2020-10-14 03:45:22');
/*!40000 ALTER TABLE `productimages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `user_role`, `created_at`, `updated_at`) VALUES (1,'Super admin',NULL,NULL),(2,'Admin',NULL,NULL),(3,'Editor',NULL,NULL),(4,'Author',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roomservices`
--

DROP TABLE IF EXISTS `roomservices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roomservices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_id` int(10) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roomservices`
--

LOCK TABLES `roomservices` WRITE;
/*!40000 ALTER TABLE `roomservices` DISABLE KEYS */;
INSERT INTO `roomservices` (`id`, `title`, `package_id`, `image`, `status`, `created_at`, `updated_at`) VALUES (1,'Air Conditioning',0,'public/uploads/roomservice/1585548425icon1.png',1,'2020-03-29 23:10:52','2020-03-30 00:07:05'),(2,'Service 24/24',3,'public/uploads/roomservice/1585648000icon6.png',1,'2020-03-31 03:46:40','2020-03-31 03:47:09'),(3,'Unlimited Wifi',4,'public/uploads/roomservice/1585649346icon5.png',1,'2020-03-31 04:09:06','2020-03-31 04:09:06'),(4,'Service 24/24',5,'public/uploads/roomservice/1586520096icon6.png',1,'2020-04-10 05:59:51','2020-04-10 06:01:36'),(5,'Unlimited Wifi',5,'public/uploads/roomservice/1586520146icon5.png',1,'2020-04-10 06:00:19','2020-04-10 06:02:26'),(6,'Restaurant quality',5,'public/uploads/roomservice/1586520219icon3.png',1,'2020-04-10 06:03:39','2020-04-10 06:03:39'),(7,'Free drinks',5,'public/uploads/roomservice/1586520242icon2.png',1,'2020-04-10 06:04:02','2020-04-10 06:04:02'),(8,'Air Conditioning',5,'public/uploads/roomservice/1586520263icon1.png',1,'2020-04-10 06:04:23','2020-04-10 06:04:23'),(9,'Service 24/24',6,'public/uploads/roomservice/1586520461icon6.png',1,'2020-04-10 06:07:41','2020-04-10 06:07:41'),(10,'Unlimited Wifi',6,'public/uploads/roomservice/1586520485icon5.png',1,'2020-04-10 06:08:05','2020-04-10 06:08:05'),(11,'Cable TV',6,'public/uploads/roomservice/1586520506icon4.png',1,'2020-04-10 06:08:26','2020-04-10 06:08:26'),(12,'Restaurant quality',6,'public/uploads/roomservice/1586520527icon3.png',1,'2020-04-10 06:08:47','2020-04-10 06:08:47'),(13,'Free drinks',6,'public/uploads/roomservice/1586520551icon2.png',1,'2020-04-10 06:09:11','2020-04-10 06:09:11'),(14,'Air Conditioning',6,'public/uploads/roomservice/1586520579icon1.png',1,'2020-04-10 06:09:39','2020-04-10 06:09:39'),(15,'Service 24/24',7,'public/uploads/roomservice/1586520653icon6.png',1,'2020-04-10 06:10:53','2020-04-10 06:10:53'),(16,'Unlimited Wifi',7,'public/uploads/roomservice/1586520672icon5.png',1,'2020-04-10 06:11:12','2020-04-10 06:11:12'),(17,'Cable TV',7,'public/uploads/roomservice/1586520690icon4.png',1,'2020-04-10 06:11:30','2020-04-10 06:11:30'),(18,'Restaurant quality',7,'public/uploads/roomservice/1586520711icon3.png',1,'2020-04-10 06:11:51','2020-04-10 06:11:51'),(19,'Free drinks',7,'public/uploads/roomservice/1586520731icon2.png',1,'2020-04-10 06:12:11','2020-04-10 06:12:11'),(20,'Air Conditioning',7,'public/uploads/roomservice/1586520751icon1.png',1,'2020-04-10 06:12:31','2020-04-10 06:12:31'),(21,'Service 24/24',8,'public/uploads/roomservice/1586520870icon6.png',1,'2020-04-10 06:14:30','2020-04-10 06:14:30'),(22,'Unlimited Wifi',8,'public/uploads/roomservice/1586520898icon5.png',1,'2020-04-10 06:14:58','2020-04-10 06:14:58'),(23,'Cable TV',8,'public/uploads/roomservice/1586520928icon4.png',1,'2020-04-10 06:15:28','2020-04-10 06:15:28'),(24,'Restaurant quality',8,'public/uploads/roomservice/1586520951icon3.png',1,'2020-04-10 06:15:51','2020-04-10 06:15:51'),(25,'Free drinks',8,'public/uploads/roomservice/1586520972icon2.png',1,'2020-04-10 06:16:12','2020-04-10 06:16:12'),(26,'Air Conditioning',8,'public/uploads/roomservice/1586521003icon1.png',1,'2020-04-10 06:16:43','2020-04-10 06:16:43'),(27,'Service 24/24',9,'public/uploads/roomservice/1586521028icon6.png',1,'2020-04-10 06:17:08','2020-04-10 06:17:08'),(28,'Unlimited Wifi',9,'public/uploads/roomservice/1586521048icon5.png',1,'2020-04-10 06:17:28','2020-04-10 06:17:28'),(29,'Cable TV',9,'public/uploads/roomservice/1586521090icon4.png',1,'2020-04-10 06:18:10','2020-04-10 06:18:10'),(30,'Restaurant quality',9,'public/uploads/roomservice/1586521117icon3.png',1,'2020-04-10 06:18:37','2020-04-10 06:18:37'),(31,'Free drinks',9,'public/uploads/roomservice/1586521136icon2.png',1,'2020-04-10 06:18:56','2020-04-10 06:18:56'),(32,'Air Conditioning',9,'public/uploads/roomservice/1586521155icon1.png',1,'2020-04-10 06:19:15','2020-04-10 06:19:15');
/*!40000 ALTER TABLE `roomservices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES (2,'public/uploads/slider/1586517639shinepukursuites-slider-1.jpg',1,'2020-03-19 09:07:35','2020-04-10 05:20:39'),(3,'public/uploads/slider/1586517657shinepukursuites-slider-2.jpg',1,'2020-03-19 09:07:48','2020-04-10 05:20:57'),(4,'public/uploads/slider/1586517933shinepukursuites-slider-3.jpg',1,'2020-03-19 09:08:56','2020-04-10 05:25:33'),(5,'public/uploads/slider/1585561075shinepukursuites-slider-4.jpg',1,'2020-03-30 03:37:55','2020-03-30 03:37:55'),(12,'public/uploads/slider/1586517790shinepukursuites-slider-5.jpg',1,'2020-04-10 05:23:10','2020-04-10 05:23:10'),(13,'public/uploads/slider/1586517804shinepukursuites-slider-6.jpg',1,'2020-04-10 05:23:24','2020-04-10 05:23:24'),(14,'public/uploads/slider/1586518106shinepukursuites-slider-7.jpg',1,'2020-04-10 05:28:26','2020-04-10 05:28:26');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specialmenus`
--

DROP TABLE IF EXISTS `specialmenus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specialmenus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialmenus`
--

LOCK TABLES `specialmenus` WRITE;
/*!40000 ALTER TABLE `specialmenus` DISABLE KEYS */;
INSERT INTO `specialmenus` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES (1,'public/uploads/specialmenu/1584952206item4.jpg',1,'2020-03-23 02:30:06','2020-03-23 02:30:22'),(2,'public/uploads/specialmenu/1584952299item3.jpg',1,'2020-03-23 02:30:35','2020-03-23 02:31:39'),(3,'public/uploads/specialmenu/1584952316item2.jpg',1,'2020-03-23 02:30:49','2020-03-23 02:31:56'),(4,'public/uploads/specialmenu/1584952331item1.jpg',1,'2020-03-23 02:31:10','2020-03-23 02:32:11');
/*!40000 ALTER TABLE `specialmenus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specialpackages`
--

DROP TABLE IF EXISTS `specialpackages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specialpackages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packageservice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialpackages`
--

LOCK TABLES `specialpackages` WRITE;
/*!40000 ALTER TABLE `specialpackages` DISABLE KEYS */;
/*!40000 ALTER TABLE `specialpackages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` (`id`, `name`, `description`, `city`, `image`, `status`, `created_at`, `updated_at`) VALUES (1,'Vishal','<p><b>“ Just Wow for Lake View Balcony</b> Nice and clean hotel. Staffs very forthcoming and helpful. All our requests were addressed as a priority. Lake views from the balcony was truly awesome. Good beds and excellent interiors. It’s really good for leisure time with Hi-Speed WiFi Internet.”<br></p>','India','public/uploads/testimonial/158484577311.jpg',1,'2020-03-21 20:56:13','2020-03-21 21:04:04'),(2,'Flora','<p><b>“ Just Wow for Lake View Balcony</b> Nice and clean hotel. Staffs very forthcoming and helpful. All our requests were addressed as a priority. Lake views from the balcony was truly awesome. Good beds and excellent interiors. It’s really good for leisure time with Hi-Speed WiFi Internet.”<br></p>','United States','public/uploads/testimonial/158484587710.jpg',1,'2020-03-21 20:57:57','2020-03-21 21:03:47');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public/avatar/avatar.png',
  `status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `email`, `phone`, `designation`, `password`, `image`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES (1,1,'superadmin','User01','superadmin@gmail.com','+8801877100001','CEO','$2y$10$oSrBaWP0HEdiGDfT9NSCJujpA/68.TzJ.VVx3CtpricIdV9ymYcuu','public/avatar/avatar.png',1,NULL,NULL,NULL),(7,1,'Quicktech IT Limited','Quicktech','info@quicktech-ltd.com','01993335988','Superadmin','$2y$10$4es.lO.x.oPV5LFTJp6gSeAGTfEkPIN6/I4XVTnU6oVjW4ALGALhu','public/uploads/user/quicktech-IT-limited-linkdin-page-profile-images.jpg',1,NULL,'2020-03-27 18:40:38','2020-03-30 01:48:33'),(8,1,'Shinepukur Suites','shinepukur','shinepukursuites@gmail.com','+8801958606044','MD','$2y$10$oEbgXdvzAc2laxIOWZS3nON23rsKdjd59V.ETh.Jo8D3PsLctgJZe','public/uploads/user/A2D06C18-FBDF-419C-B3B1-64A36C3D366E.png',1,NULL,'2020-09-05 22:56:01','2020-09-05 22:56:01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'spsuites_mainDb'
--

--
-- Dumping routines for database 'spsuites_mainDb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-22 15:35:23
