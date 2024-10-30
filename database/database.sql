-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: immigration-v2-db
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `assurance_requests`
--

DROP TABLE IF EXISTS `assurance_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assurance_requests` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `assurance` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assurance_requests`
--

LOCK TABLES `assurance_requests` WRITE;
/*!40000 ALTER TABLE `assurance_requests` DISABLE KEYS */;
INSERT INTO `assurance_requests` VALUES (1,'Nom complete','10/10/1990','male','06162617617','emailaddress@gmail.com','ADESLAS','2024-09-04 18:10:38','2024-09-04 18:10:38');
/*!40000 ALTER TABLE `assurance_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int unsigned DEFAULT NULL,
  `order` int NOT NULL DEFAULT '1',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_rows` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int unsigned NOT NULL,
  `field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),(2,1,'name','text','Nom',1,1,1,1,1,1,NULL,2),(3,1,'email','text','Email',1,1,1,1,1,1,NULL,3),(4,1,'password','password','Mot de passe',1,0,0,1,1,0,NULL,4),(5,1,'remember_token','text','Token de rappel',0,0,0,0,0,0,NULL,5),(6,1,'created_at','timestamp','Créé le',0,1,1,0,0,0,NULL,6),(7,1,'updated_at','timestamp','Mis à jour le',0,0,0,0,0,0,NULL,7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,NULL,8),(9,1,'user_belongsto_role_relationship','relationship','Rôle',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),(10,1,'user_belongstomany_role_relationship','relationship','voyager::seeders.data_rows.roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,NULL,12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Nom',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Créé le',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Mis à jour le',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Nom',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Créé le',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Mis à jour le',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Nom d\'affichage',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Rôle',1,1,1,1,1,1,NULL,9),(47,6,'id','text','Id',1,0,0,0,0,0,'{}',1),(48,6,'name','text','Name',1,1,1,1,1,1,'{}',2),(49,6,'date','text','Date',1,1,1,1,1,1,'{}',3),(50,6,'sex','text','Sex',1,1,1,1,1,1,'{}',4),(51,6,'phone','text','Phone',1,1,1,1,1,1,'{}',5),(52,6,'email','text','Email',1,1,1,1,1,1,'{}',6),(53,6,'assurance','text','Assurance',1,1,1,1,1,1,'{}',7),(54,6,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',8),(55,6,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',9),(56,7,'id','text','Id',1,0,0,0,0,0,'{}',1),(57,7,'title','text','Title',0,1,1,1,1,1,'{}',3),(58,7,'image','image','Image',0,1,1,1,1,1,'{}',2),(59,7,'price','text','Price',0,1,1,1,1,1,'{}',4),(60,7,'description','code_editor','Description',0,0,1,1,1,1,'{}',5),(61,7,'hidden_description','code_editor','Hidden Description',0,0,1,1,1,1,'{}',6),(62,7,'active','checkbox','Active',0,1,1,1,1,1,'{\"on\":\"Actif\",\"off\":\"Inactif\",\"checked\":true}',7),(63,7,'language','select_dropdown','Language',0,0,1,1,1,1,'{\"default\":\"es\",\"options\":{\"es\":\"Spanish\",\"fr\":\"Frencais\"}}',8),(64,7,'translate','hidden','Translate',0,1,1,1,1,1,'{}',9),(65,7,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',10),(66,7,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',11),(67,8,'id','text','Id',1,0,0,0,0,0,'{}',1),(68,8,'title','text','Title',0,1,1,1,1,1,'{}',3),(69,8,'image','image','Image',0,1,1,1,1,1,'{}',2),(70,8,'price','number','Price',0,1,1,1,1,1,'{}',4),(71,8,'active','checkbox','Active',0,1,1,1,1,1,'{\"on\":\"Actif\",\"off\":\"Inactif\",\"checked\":true}',5),(72,8,'language','select_dropdown','Language',0,0,1,1,1,1,'{\"default\":\"es\",\"options\":{\"es\":\"Spanish\",\"fr\":\"Frencais\"}}',10),(73,8,'year','number','Year',0,0,1,1,1,1,'{}',6),(74,8,'group','select_dropdown','Programmes de',0,0,1,1,1,1,'{\"default\":\"linguistique\",\"options\":{\"linguistique\":\"S\\u00e9jour linguistique\",\"selectividad\":\"Selectividad\",\"master\":\"Licence\",\"licence\":\"Master\",\"grade_sup_a\":\"Grado superior\"}}',9),(75,8,'city','text','City',0,1,1,1,1,1,'{}',7),(76,8,'duree_de_programme','text','Duree De Programme',0,0,1,1,1,1,'{}',8),(77,8,'deleted_at','timestamp','Deleted At',0,0,0,0,0,1,'{}',11),(78,8,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',12),(79,8,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',13),(80,10,'id','text','Id',1,0,0,0,0,0,'{}',1),(81,10,'author_id','text','Author Id',1,0,0,0,0,0,'{}',2),(82,10,'title','text','Title',1,1,1,1,1,1,'{}',4),(83,10,'excerpt','text_area','Excerpt',0,0,1,1,1,1,'{}',6),(84,10,'body','rich_text_box','Body',0,0,1,1,1,1,'{}',7),(85,10,'image','image','Image',0,1,1,1,1,1,'{}',3),(86,10,'slug','text','Slug (url)',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}',5),(87,10,'meta_description','text_area','Meta Description (seo)',0,0,1,1,1,1,'{}',8),(88,10,'meta_keywords','text_area','Meta Keywords (seo)',0,0,1,1,1,1,'{}',9),(90,10,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',11),(91,10,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',12),(92,10,'active','select_dropdown','Active',1,1,1,1,1,1,'{\"default\":\"1\",\"options\":{\"0\":\"Inactif\",\"1\":\"Actif\"}}',10),(93,10,'lang','select_dropdown','Langue',1,0,1,1,1,1,'{\"default\":\"es\",\"options\":{\"es\":\"Spanish\",\"fr\":\"Frencais\"}}',13),(94,13,'id','text','Id',1,0,0,0,0,0,'{}',1),(95,13,'author_id','text','Author Id',0,0,0,0,0,0,'{}',2),(96,13,'category_id','text','Category Id',0,0,0,0,0,0,'{}',5),(97,13,'title','text','Title',1,1,1,1,1,1,'{}',6),(98,13,'seo_title','text','Seo Title',0,0,0,0,0,0,'{}',8),(99,13,'excerpt','text_area','Excerpt',0,0,1,1,1,1,'{}',9),(100,13,'body','rich_text_box','Body',1,0,1,1,1,1,'{}',10),(101,13,'image','image','Image',0,1,1,1,1,1,'{}',3),(102,13,'slug','text','Slug',0,0,0,0,0,0,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}',7),(103,13,'meta_description','text_area','Description  (seo)',0,0,1,1,1,1,'{}',11),(104,13,'meta_keywords','text_area','Keywords (seo)',0,0,1,1,1,1,'{}',12),(105,13,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"0\",\"options\":{\"0\":\"Inactif\",\"1\":\"Actif\"}}',13),(106,13,'featured','text','Featured',1,0,0,0,0,0,'{}',14),(107,13,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',15),(108,13,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',16),(109,13,'lang','select_dropdown','Lang',1,1,1,1,1,1,'{\"default\":\"es\",\"options\":{\"es\":\"Spanish\",\"fr\":\"Frencais\"}}',17),(110,13,'picture','image','Image',0,0,0,0,0,0,'{}',4),(111,14,'id','text','Id',1,0,0,0,0,0,'{}',1),(112,14,'name','text','Nom',0,1,1,1,1,1,'{}',2),(113,14,'textimonial','text_area','Témoignage',0,0,1,1,1,1,'{}',3),(114,14,'lang','select_dropdown','Langue',1,1,1,1,1,1,'{\"default\":\"fr\",\"options\":{\"fr\":\"Fran\\u00e7ais\",\"es\":\"Espagnol\"}}',4),(115,14,'active','checkbox','Statut',1,1,1,1,1,1,'{\"on\":\"Actif\",\"off\":\"Inactif\",\"checked\":true}',5),(116,14,'deleted_at','timestamp','Deleted At',0,0,0,0,0,0,'{}',6),(117,14,'created_at','timestamp','Créé à',0,1,1,1,0,1,'{}',7),(118,14,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',8),(119,17,'id','text','Id',1,0,0,0,0,0,'{}',1),(120,17,'question','text','Question',0,1,1,1,1,1,'{}',2),(121,17,'answer','text_area','Répondre',0,0,1,1,1,1,'{}',3),(122,17,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',5),(123,17,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',6),(124,17,'deleted_at','timestamp','Deleted At',0,0,0,0,0,0,'{}',7),(125,17,'lang','select_dropdown','Langue',1,1,1,1,1,1,'{\"default\":\"es\",\"options\":{\"es\":\"Spanish\",\"fr\":\"Frencais\"}}',4);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_types` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint NOT NULL DEFAULT '0',
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','Utilisateur','Utilisateurs','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','',1,0,NULL,'2024-09-02 14:58:28','2024-09-02 14:58:28'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2024-09-02 14:58:28','2024-09-02 14:58:28'),(3,'roles','roles','Rôle','Rôles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2024-09-02 14:58:28','2024-09-02 14:58:28'),(6,'assurance_requests','assurance-requests','Assurance Request','Assurance Requests',NULL,'App\\Models\\AssuranceRequest',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2024-09-04 18:09:40','2024-09-04 18:09:40'),(7,'packs','packs','Pack','Packs',NULL,'App\\Models\\Pack',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2024-09-04 19:14:03','2024-09-04 19:14:03'),(8,'programmes','programmes','Programme','Programmes',NULL,'App\\Models\\Programme',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2024-09-04 20:34:47','2024-09-09 12:32:28'),(10,'pages','pages','Page','Pages',NULL,'App\\Models\\Page',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2024-09-09 12:47:35','2024-09-09 13:20:46'),(13,'posts','posts','Post','Posts',NULL,'App\\Models\\Post',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2024-09-09 14:22:40','2024-09-09 15:24:02'),(14,'testimonials','testimonials','Testimonial','Testimonials',NULL,'App\\Models\\Testimonial',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2024-10-03 11:49:28','2024-10-03 11:49:28'),(17,'faq','faq','Faq','Faqs',NULL,'App\\Models\\Faq',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2024-10-03 21:51:47','2024-10-03 21:58:10');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faq` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `lang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'es',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (1,'Can I apply for a visa online?','Some countries offer online visa application systems, while others require in-person or postal applications. We can guide you on the appropriate application method for your chosen destination.','2024-10-03 21:53:21','2024-10-03 21:53:21',NULL,'es'),(2,'What should I do if my visa application is denied?','If your application is denied, you may reapply with updated information or appeal the decision. Understanding the rejection reasons is crucial to rectify any issues before reapplying.','2024-10-03 21:53:49','2024-10-03 21:53:49',NULL,'es'),(3,'Can I apply for a visa without confirmed travel plans?','Yes, you can apply for a visa without confirmed travel plans. However, providing a tentative itinerary or explaining your travel intentions may enhance your application.','2024-10-03 21:54:20','2024-10-03 21:54:20',NULL,'es'),(4,'Is it necessary to have travel insurance for a visa?','While it may not always be mandatory, having travel insurance is highly recommended to cover unexpected events during your trip, such as medical emergencies or trip cancellations.','2024-10-03 21:54:48','2024-10-03 21:54:48',NULL,'es');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `housing_item_housing_space`
--

DROP TABLE IF EXISTS `housing_item_housing_space`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `housing_item_housing_space` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `housing_item_housing_space`
--

LOCK TABLES `housing_item_housing_space` WRITE;
/*!40000 ALTER TABLE `housing_item_housing_space` DISABLE KEYS */;
/*!40000 ALTER TABLE `housing_item_housing_space` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `housing_items`
--

DROP TABLE IF EXISTS `housing_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `housing_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `housing_items`
--

LOCK TABLES `housing_items` WRITE;
/*!40000 ALTER TABLE `housing_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `housing_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `housing_spaces`
--

DROP TABLE IF EXISTS `housing_spaces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `housing_spaces` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bedroom',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `housing_spaces`
--

LOCK TABLES `housing_spaces` WRITE;
/*!40000 ALTER TABLE `housing_spaces` DISABLE KEYS */;
/*!40000 ALTER TABLE `housing_spaces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_items` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int unsigned DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Tableau de bord','','_self','dashboard','#000000',NULL,1,'2024-09-02 14:58:29','2024-09-02 15:42:12','voyager.dashboard','null'),(3,1,'Utilisateurs','','_self','users-group','#000000',NULL,3,'2024-09-02 14:58:29','2024-09-02 15:44:02','voyager.users.index','null'),(4,1,'Rôles','','_self','lock-access','#000000',NULL,2,'2024-09-02 14:58:29','2024-09-02 15:43:39','voyager.roles.index','null'),(5,1,'Outils','','_self','tools','#000000',NULL,9,'2024-09-02 14:58:29','2024-09-02 15:44:54',NULL,''),(6,1,'Créateur de menus','','_self','category-2','#000000',5,10,'2024-09-02 14:58:29','2024-09-02 15:46:54','voyager.menus.index','null'),(7,1,'Base de données','','_self','database','#000000',5,11,'2024-09-02 14:58:29','2024-09-02 15:47:16','voyager.database.index','null'),(9,1,'BREAD','','_self','bread','#000000',5,13,'2024-09-02 14:58:29','2024-09-02 15:47:48','voyager.bread.index','null'),(10,1,'Paramètres','','_self','adjustments','#000000',NULL,14,'2024-09-02 14:58:29','2024-09-02 15:45:45','voyager.settings.index','null'),(13,1,'Demandes d\'assurance','','_self','basket-filled','#000000',NULL,15,'2024-09-04 18:09:41','2024-09-04 19:19:38','voyager.assurance-requests.index','null'),(14,1,'Paquets','','_self','box','#000000',NULL,16,'2024-09-04 19:14:03','2024-10-03 11:52:24','voyager.packs.index','null'),(15,1,'Programmes','','_self','calendar-check','#000000',NULL,17,'2024-09-04 20:34:48','2024-09-04 20:35:35','voyager.programmes.index','null'),(16,1,'Pages','','_self','brand-pagekit','#000000',NULL,18,'2024-09-09 12:47:35','2024-09-09 12:48:30','voyager.pages.index','null'),(17,1,'Articles','','_self','news','#000000',NULL,19,'2024-09-09 14:22:40','2024-10-03 11:57:18','voyager.posts.index','null'),(18,1,'Testimonials','','_self','message','#000000',NULL,20,'2024-10-03 11:49:28','2024-10-03 11:58:05','voyager.testimonials.index','null'),(20,1,'Faqs','','_self','message-question','#000000',NULL,21,'2024-10-03 21:51:48','2024-10-03 21:52:28','voyager.faq.index','null');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2024-09-02 14:58:29','2024-09-02 14:58:29');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_03_11_000000_add_user_settings',1),(21,'2018_03_14_000000_add_details_to_data_types_table',1),(22,'2018_03_16_000000_make_settings_value_nullable',1),(23,'2019_08_19_000000_create_failed_jobs_table',1),(24,'2019_12_14_000001_create_personal_access_tokens_table',1),(25,'2016_01_01_000000_create_pages_table',2),(26,'2016_02_15_204651_create_categories_table',2),(27,'2016_02_15_204655_create_posts_table',2),(28,'2017_04_11_000000_alter_post_nullable_fields_table',2),(29,'2023_12_15_200425_create_orders_table',2),(30,'2023_12_16_112419_create_housing_spaces_table',2),(31,'2023_12_16_112432_create_housing_items_table',2),(32,'2023_12_16_113117_create_housing_item_housing_space_table',2),(33,'2024_09_03_184253_create_assurance_requests_table',2),(34,'2024_09_04_125317_create_services_table',3),(35,'2024_09_04_125319_create_testimonials_table',4),(36,'2024_09_04_125320_create_sliders_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_de_famille` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jour` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mois` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payed` tinyint(1) NOT NULL DEFAULT '0',
  `house_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packs`
--

DROP TABLE IF EXISTS `packs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `packs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int unsigned DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `hidden_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` int DEFAULT NULL,
  `language` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `translate` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packs`
--

LOCK TABLES `packs` WRITE;
/*!40000 ALTER TABLE `packs` DISABLE KEYS */;
INSERT INTO `packs` VALUES (1,'Pack renouvellement de la carte de séjour','packs/September2024/YlgeIDeTnyN1OIFw9iEU.jpg',300,'Un pack complet et personnalisé pour un recours administratif','<ul>\r\n<li class=\"p1\"><strong>✅ Traitement en 24 heures</strong></li>\r\n<li class=\"p1\"><strong>✅ Assistance disponible 7j/7</strong></li>\r\n<li class=\"p1\"><strong>✅ Suivie de dossier</strong></li>\r\n<li class=\"p1\"><strong>✅ Contact direct avec nos avocats</strong></li>\r\n</ul>',1,'fr',NULL,'2024-09-04 19:16:00','2024-09-09 13:59:53');
/*!40000 ALTER TABLE `packs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL DEFAULT '1',
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fr',
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,1,'Préparation de dossier visa','Immiworld propose un service de préparation de dossier de visa personnalisé pour les étudiants marocains souhaitant étudier en Espagne. Nous sommes passionnés par notre mission d\'aider les étudiants à réaliser leur rêve d\'étudier à l\'étranger et nous mettons tout en œuvre pour vous accompagner tout au long du processus de demande de visa étudiant. Notre équipe d\'experts a une connaissance approfondie des exigences et garanties nécessaires pour la demande de visa étudiant pour l\'Espagne, et nous sommes toujours prêts à vous aider à rédiger une lettre de motivation qui mettra en valeur votre profil et vos aspirations. Nous sommes là pour vous guider pas à pas dans la préparation de votre dossier, afin de vous permettre de présenter une demande solide et professionnelle. Chez Immiworld, nous croyons que chaque étudiant mérite une chance de réaliser ses rêves, c\'est pourquoi nous vous offrons un service personnalisé et de qualité supérieure, avec amour et dévouement. Nous sommes disponibles pour répondre à vos questions et vous soutenir à chaque étape de votre demande de visa étudiant, et nous mettons tout en œuvre pour que votre expérience avec nous soit la plus positive et réussie possible. Faites confiance à Immiworld pour vous aider à obtenir votre visa étudiant pour l\'Espagne, et rejoignez des milliers d\'étudiants qui ont réalisé leur rêve d\'étudier à l\'étranger grâce à notre accompagnement professionnel et personnalisé.','<h2><strong>C’est quoi</strong><br><strong>le procédure?</strong></h2><h3><strong>2.</strong></h3><h4><strong>Assistance personnalisée</strong></h4><p>Immiworld fournit des services et un soutien personnalisés tout au long du processus de demande de visa.</p><p>Notre équipe d\'experts vous guidera à travers le processus et s\'assurera que vous avez une demande solide.</p><h3><strong>4.</strong></h3><h4><strong>Lettre de motivation</strong></h4><p>Immiworld peut vous aider à rédiger une lettre de motivation convaincante qui met en évidence vos réalisations académiques, votre parcours personnel et vos aspirations futures.</p><p>Cette lettre aidera à démontrer aux autorités espagnoles que vous êtes un candidat solide pour un visa étudiant.</p><h3><strong>6.</strong></h3><h4><strong>Réussite!</strong></h4><p>Une fois que votre demande est approuvée, Immiworld vous fournira toutes les informations dont vous avez besoin pour préparer votre déménagement en Espagne et commencer vos études.</p><p>Félicitations, vous avez obtenu avec succès votre visa étudiant espagnol avec l\'aide d\'Immiworld!</p><h3><strong>1.</strong></h3><h4><strong>Consultation initiale</strong></h4><p>Contactez Immiworld pour planifier une consultation initiale afin de discuter de vos objectifs d\'études à l\'étranger et des exigences pour obtenir un visa étudiant espagnol.</p><h3><strong>3.</strong></h3><h4><strong>Préparation de la documentation</strong></h4><p>Immiworld aide à la préparation de tous les documents et papiers nécessaires pour votre demande de visa étudiant.</p><p>Nous veillerons à ce que votre demande respecte toutes les exigences et soit soumise correctement.</p><h3><strong>55.</strong></h3><h4><strong>Soumission et suivi</strong></h4><p>Immiworld soumettra votre demande complétée et fera le suivi avec les autorités espagnoles tout au long du processus.</p><p>Ils veilleront à ce que toute information ou documentation supplémentaire soit fournie rapidement et que votre demande soit traitée le plus rapidement possible.</p>','pages/September2024/FQGxC9TwX3sxzE8kMdW8.jpg','preparation-de-dossier-visa','description for seo','keywords, for, seo',1,'2024-09-09 13:01:43','2024-09-09 15:18:47','fr');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
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
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(71,1),(72,1),(73,1),(74,1),(75,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2024-09-02 14:58:29','2024-09-02 14:58:29'),(2,'browse_bread',NULL,'2024-09-02 14:58:29','2024-09-02 14:58:29'),(3,'browse_database',NULL,'2024-09-02 14:58:29','2024-09-02 14:58:29'),(4,'browse_media',NULL,'2024-09-02 14:58:29','2024-09-02 14:58:29'),(5,'browse_compass',NULL,'2024-09-02 14:58:29','2024-09-02 14:58:29'),(6,'browse_menus','menus','2024-09-02 14:58:29','2024-09-02 14:58:29'),(7,'read_menus','menus','2024-09-02 14:58:29','2024-09-02 14:58:29'),(8,'edit_menus','menus','2024-09-02 14:58:29','2024-09-02 14:58:29'),(9,'add_menus','menus','2024-09-02 14:58:29','2024-09-02 14:58:29'),(10,'delete_menus','menus','2024-09-02 14:58:29','2024-09-02 14:58:29'),(11,'browse_roles','roles','2024-09-02 14:58:29','2024-09-02 14:58:29'),(12,'read_roles','roles','2024-09-02 14:58:29','2024-09-02 14:58:29'),(13,'edit_roles','roles','2024-09-02 14:58:29','2024-09-02 14:58:29'),(14,'add_roles','roles','2024-09-02 14:58:29','2024-09-02 14:58:29'),(15,'delete_roles','roles','2024-09-02 14:58:29','2024-09-02 14:58:29'),(16,'browse_users','users','2024-09-02 14:58:29','2024-09-02 14:58:29'),(17,'read_users','users','2024-09-02 14:58:29','2024-09-02 14:58:29'),(18,'edit_users','users','2024-09-02 14:58:29','2024-09-02 14:58:29'),(19,'add_users','users','2024-09-02 14:58:29','2024-09-02 14:58:29'),(20,'delete_users','users','2024-09-02 14:58:29','2024-09-02 14:58:29'),(21,'browse_settings','settings','2024-09-02 14:58:29','2024-09-02 14:58:29'),(22,'read_settings','settings','2024-09-02 14:58:29','2024-09-02 14:58:29'),(23,'edit_settings','settings','2024-09-02 14:58:29','2024-09-02 14:58:29'),(24,'add_settings','settings','2024-09-02 14:58:29','2024-09-02 14:58:29'),(25,'delete_settings','settings','2024-09-02 14:58:30','2024-09-02 14:58:30'),(36,'browse_assurance_requests','assurance_requests','2024-09-04 18:09:40','2024-09-04 18:09:40'),(37,'read_assurance_requests','assurance_requests','2024-09-04 18:09:40','2024-09-04 18:09:40'),(38,'edit_assurance_requests','assurance_requests','2024-09-04 18:09:40','2024-09-04 18:09:40'),(39,'add_assurance_requests','assurance_requests','2024-09-04 18:09:41','2024-09-04 18:09:41'),(40,'delete_assurance_requests','assurance_requests','2024-09-04 18:09:41','2024-09-04 18:09:41'),(41,'browse_packs','packs','2024-09-04 19:14:03','2024-09-04 19:14:03'),(42,'read_packs','packs','2024-09-04 19:14:03','2024-09-04 19:14:03'),(43,'edit_packs','packs','2024-09-04 19:14:03','2024-09-04 19:14:03'),(44,'add_packs','packs','2024-09-04 19:14:03','2024-09-04 19:14:03'),(45,'delete_packs','packs','2024-09-04 19:14:03','2024-09-04 19:14:03'),(46,'browse_programmes','programmes','2024-09-04 20:34:47','2024-09-04 20:34:47'),(47,'read_programmes','programmes','2024-09-04 20:34:47','2024-09-04 20:34:47'),(48,'edit_programmes','programmes','2024-09-04 20:34:47','2024-09-04 20:34:47'),(49,'add_programmes','programmes','2024-09-04 20:34:48','2024-09-04 20:34:48'),(50,'delete_programmes','programmes','2024-09-04 20:34:48','2024-09-04 20:34:48'),(51,'browse_pages','pages','2024-09-09 12:47:35','2024-09-09 12:47:35'),(52,'read_pages','pages','2024-09-09 12:47:35','2024-09-09 12:47:35'),(53,'edit_pages','pages','2024-09-09 12:47:35','2024-09-09 12:47:35'),(54,'add_pages','pages','2024-09-09 12:47:35','2024-09-09 12:47:35'),(55,'delete_pages','pages','2024-09-09 12:47:35','2024-09-09 12:47:35'),(56,'browse_posts','posts','2024-09-09 14:22:40','2024-09-09 14:22:40'),(57,'read_posts','posts','2024-09-09 14:22:40','2024-09-09 14:22:40'),(58,'edit_posts','posts','2024-09-09 14:22:40','2024-09-09 14:22:40'),(59,'add_posts','posts','2024-09-09 14:22:40','2024-09-09 14:22:40'),(60,'delete_posts','posts','2024-09-09 14:22:40','2024-09-09 14:22:40'),(61,'browse_testimonials','testimonials','2024-10-03 11:49:28','2024-10-03 11:49:28'),(62,'read_testimonials','testimonials','2024-10-03 11:49:28','2024-10-03 11:49:28'),(63,'edit_testimonials','testimonials','2024-10-03 11:49:28','2024-10-03 11:49:28'),(64,'add_testimonials','testimonials','2024-10-03 11:49:28','2024-10-03 11:49:28'),(65,'delete_testimonials','testimonials','2024-10-03 11:49:28','2024-10-03 11:49:28'),(71,'browse_faq','faq','2024-10-03 21:51:47','2024-10-03 21:51:47'),(72,'read_faq','faq','2024-10-03 21:51:48','2024-10-03 21:51:48'),(73,'edit_faq','faq','2024-10-03 21:51:48','2024-10-03 21:51:48'),(74,'add_faq','faq','2024-10-03 21:51:48','2024-10-03 21:51:48'),(75,'delete_faq','faq','2024-10-03 21:51:48','2024-10-03 21:51:48');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fr',
  `picture` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,NULL,NULL,'Les Meilleures Villes pour Vivre en Espagne : Un Guide Comparatif des villes',NULL,'L\'Espagne offre une grande diversité de villes, chacune avec son propre charme, sa culture unique et ses avantages distincts. Dans ce guide comparatif, nous explorerons quelques-unes des meilleures villes pour vivre en Espagne, en mettant en lumière leurs caractéristiques, leurs attraits et ce qui les rend si attrayantes pour les résidents nationaux et internationaux.','<p><strong>Barcelone - La Capitale Catalane de l\'Innovation et de la Culture</strong> Dans cette section, nous découvrirons pourquoi Barcelone est l\'une des villes les plus populaires en Espagne, avec son mélange dynamique de vie urbaine, de plages méditerranéennes, d\'architecture moderniste et de scène culturelle vibrante.</p><p>&nbsp;</p><p><strong>Madrid - Le Cœur Économique et Culturel de l\'Espagne</strong> Nous explorerons les charmes de Madrid, la capitale espagnole, connue pour sa vie nocturne animée, ses musées de renommée mondiale, ses parcs verdoyants et son atmosphère cosmopolite.</p><p>&nbsp;</p><p><strong>Valence - Entre Tradition et Modernité sur la Côte Méditerranéenne</strong> Dans cette section, nous mettrons en avant les atouts de Valence, avec ses plages magnifiques, son patrimoine historique, sa cuisine délicieuse et son ambiance détendue, en faisant d\'elle une ville attrayante pour les familles et les expatriés.</p><p>&nbsp;</p><p><strong>Séville - L\'Âme de l\'Andalousie, Entre Histoire et Passion</strong> Nous découvrirons la beauté envoûtante de Séville, avec ses rues étroites, ses patios fleuris, ses festivals flamboyants et son héritage mauresque, faisant d\'elle une ville idéale pour ceux qui cherchent à s\'imprégner de la culture espagnole.</p><p>&nbsp;</p><p><strong>Bilbao - Une Métropole Élégante Entre Montagnes et Océan</strong> Enfin, nous explorerons les charmes de Bilbao, une ville dynamique du nord de l\'Espagne, célèbre pour son architecture moderne, son art contemporain, sa gastronomie raffinée et sa proximité avec la nature.</p><p>&nbsp;</p><p>Que vous préfériez l\'effervescence urbaine de Barcelone, l\'élégance classique de Madrid, l\'atmosphère décontractée de Valence, la passion enflammée de Séville ou l\'élégance moderne de Bilbao, l\'Espagne offre une variété de villes où chacun peut trouver son bonheur. Nous espérons que ce guide vous a fourni un aperçu des meilleures villes pour vivre en Espagne et vous a aidé à choisir votre prochain foyer méditerranéen.</p>','posts/October2024/mHt2uq0WQ14NnSqqDBBW.jpg',NULL,'L\'Espagne offre une grande diversité de villes, chacune avec son propre charme, sa culture unique et ses avantages distincts. Dans ce guide comparatif, nous explorerons quelques-unes des meilleures villes pour vivre en Espagne, en mettant en lumière leurs caractéristiques, leurs attraits et ce qui les rend si attrayantes pour les résidents nationaux et internationaux.','keywords, for, seo',1,0,'2024-09-09 14:59:14','2024-10-03 22:08:14','es','posts/September2024/9FRm7C0n67OfAu2urr6O.jpg');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programmes`
--

DROP TABLE IF EXISTS `programmes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `programmes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int unsigned DEFAULT NULL,
  `active` int unsigned DEFAULT '1',
  `language` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree_de_programme` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programmes`
--

LOCK TABLES `programmes` WRITE;
/*!40000 ALTER TABLE `programmes` DISABLE KEYS */;
INSERT INTO `programmes` VALUES (1,'Etudier la langue a Malaga','programmes/September2024/7dH4PfhEAJopDabV0BIO.jpeg',2650,1,'fr','2025','linguistique','Malaga','6-12 mois',NULL,'2024-09-09 12:34:46','2024-09-09 12:35:49');
/*!40000 ALTER TABLE `programmes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2024-09-02 14:40:40','2024-09-02 14:40:40'),(2,'user','Utilisateur standard','2024-09-02 14:58:29','2024-09-02 14:58:29');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mini_description` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slug` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Immiworld v2','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','settings/October2024/IUFlDlZuikSwZHaRr7Ie.png','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','settings/May2023/pJYawA2iWK6yHgHwd3EZ.png','','image',5,'Admin'),(6,'admin.title','Admin Title','IMW','','text',1,'Admin'),(7,'admin.description','Admin Description','consulting services and solutions','','text',2,'Admin'),(8,'admin.loader','Admin Loader','settings/September2024/YpkIyoR9wiJsuwdNqfZR.png','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','settings/September2024/QDHOP5ZMVdTsQd7I7HAE.png','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin'),(12,'site.whatsapp','Whatsapp number','+34 (657) 933 788',NULL,'text',6,'Site'),(13,'site.facebook','Facebook link','https://www.facebook.com/',NULL,'text',7,'Site'),(14,'site.instagram','Instagram link','https://instagram.com/',NULL,'text',8,'Site'),(15,'site.working-ours','Working hours','09:00-16:00',NULL,'text',9,'Site'),(16,'site.live-chat-link','Live chat link',NULL,NULL,'text',10,'Site'),(17,'site.address','Address','Calle maestro locuona 1 local 7 Málaga, 29006 - Spain',NULL,'text',11,'Site'),(18,'site.whatsapp_link','Whatsapp link','https://wa.me/+34657933788',NULL,'text',12,'Site'),(19,'pages.politique_de_confidentialite_francais','Politique de confidentialité Francais','<h2>Politique de confidentialit&eacute;</h2>\r\n<p>Chez Immiworld, nous accordons une grande importance &agrave; la confidentialit&eacute; et &agrave; la protection des informations personnelles de nos utilisateurs. Cette politique de confidentialit&eacute; explique comment nous collectons, utilisons, stockons et prot&eacute;geons vos donn&eacute;es lorsque vous utilisez notre site web.<br><br></p>\r\n<p>Collecte et utilisation des informations :</p>\r\n<p>Lorsque vous visitez notre site web, nous pouvons collecter certaines informations personnelles vous concernant, telles que votre nom, votre adresse e-mail, votre num&eacute;ro de t&eacute;l&eacute;phone et toute autre information que vous choisissez de nous fournir. Nous utilisons ces informations pour r&eacute;pondre &agrave; vos demandes, vous fournir des services personnalis&eacute;s, am&eacute;liorer notre site web et communiquer avec vous.<br><br></p>\r\n<p>Cookies et technologies similaires :</p>\r\n<p>Nous utilisons des cookies et d\'autres technologies similaires pour collecter des informations sur votre utilisation de notre site web. Les cookies sont de petits fichiers textes stock&eacute;s sur votre appareil qui nous aident &agrave; personnaliser votre exp&eacute;rience en ligne. Vous avez la possibilit&eacute; de d&eacute;sactiver les cookies dans les param&egrave;tres de votre navigateur, mais cela peut limiter certaines fonctionnalit&eacute;s de notre site web.<br><br></p>\r\n<p>Partage des informations :</p>\r\n<p>Nous ne vendons, ne louons ni ne partageons vos informations personnelles avec des tiers, sauf dans les cas suivants : lorsque cela est n&eacute;cessaire pour fournir les services que vous avez demand&eacute;s, avec votre consentement, ou lorsque la loi l\'exige.<br><br></p>\r\n<p>S&eacute;curit&eacute; des donn&eacute;es :</p>\r\n<p>Nous prenons des mesures de s&eacute;curit&eacute; appropri&eacute;es pour prot&eacute;ger vos informations personnelles contre tout acc&egrave;s, utilisation ou divulgation non autoris&eacute;. Cependant, veuillez noter qu\'aucune m&eacute;thode de transmission de donn&eacute;es sur Internet ou de stockage &eacute;lectronique n\'est totalement s&eacute;curis&eacute;e.<br><br></p>\r\n<p>Liens vers des sites tiers :</p>\r\n<p>Notre site web peut contenir des liens vers des sites tiers. Nous ne sommes pas responsables des pratiques de confidentialit&eacute; ou du contenu de ces sites. Nous vous encourageons &agrave; consulter les politiques de confidentialit&eacute; de ces sites avant de fournir vos informations personnelles.<br><br></p>\r\n<p>Modifications de la politique de confidentialit&eacute; :</p>\r\n<p>Nous pouvons mettre &agrave; jour cette politique de confidentialit&eacute; de temps &agrave; autre. Toute modification sera affich&eacute;e sur cette page, et la date de la derni&egrave;re mise &agrave; jour sera indiqu&eacute;e en haut de la page. Veuillez v&eacute;rifier r&eacute;guli&egrave;rement cette politique de confidentialit&eacute; pour rester inform&eacute; de toute modification.<br><br></p>\r\n<p>Contact :</p>\r\n<p>Si vous avez des questions concernant notre politique de confidentialit&eacute;, veuillez nous contacter &agrave; l\'adresse suivante :&nbsp;<a href=\"mailto:support@immiworld.es\" target=\"_blank\" rel=\"noopener\">support@immiworld.es</a><br><br></p>\r\n<p>En utilisant notre site web, vous acceptez les termes de notre politique de confidentialit&eacute;. Merci de faire confiance &agrave; Immiworld pour la protection de vos informations personnelles.</p>',NULL,'rich_text_box',14,'Pages'),(24,'pages.politique_de_confidentialite_espagnol','Politique de confidentialité Espagnol','<h2>pol&iacute;tica de confidencialidad</h2>\r\n<p>En Immiworld, damos gran importancia a la privacidad y protecci&oacute;n de la informaci&oacute;n personal de nuestros usuarios. Esta pol&iacute;tica de privacidad explica c&oacute;mo recopilamos, usamos, almacenamos y protegemos sus datos cuando utiliza nuestro sitio web.</p>\r\n<p>&nbsp;</p>\r\n<p>Recopilaci&oacute;n y uso de la informaci&oacute;n:</p>\r\n<p>Cuando visita nuestro sitio web, podemos recopilar cierta informaci&oacute;n personal sobre usted, como su nombre, direcci&oacute;n de correo electr&oacute;nico, n&uacute;mero de tel&eacute;fono y cualquier otra informaci&oacute;n que elija proporcionarnos. Usamos esta informaci&oacute;n para responder a sus solicitudes, brindarle servicios personalizados, mejorar nuestro sitio web y comunicarnos con usted.</p>\r\n<p>&nbsp;</p>\r\n<p>Cookies y tecnolog&iacute;as similares:</p>\r\n<p>Utilizamos cookies y otras tecnolog&iacute;as similares para recopilar informaci&oacute;n sobre su uso de nuestro sitio web. Las cookies son peque&ntilde;os archivos de texto almacenados en su dispositivo que nos ayudan a personalizar su experiencia en l&iacute;nea. Tiene la opci&oacute;n de deshabilitar las cookies en la configuraci&oacute;n de su navegador, pero esto puede limitar ciertas funciones de nuestro sitio web.</p>\r\n<p>&nbsp;</p>\r\n<p>El intercambio de informaci&oacute;n:</p>\r\n<p>No vendemos, alquilamos ni compartimos su informaci&oacute;n personal con terceros excepto en los siguientes casos: cuando sea necesario para proporcionar los servicios que ha solicitado, con su consentimiento o cuando lo exija la ley.</p>\r\n<p>&nbsp;</p>\r\n<p>Seguridad de datos:</p>\r\n<p>Tomamos las medidas de seguridad adecuadas para proteger su informaci&oacute;n personal contra el acceso, uso o divulgaci&oacute;n no autorizados. Sin embargo, tenga en cuenta que ning&uacute;n m&eacute;todo de transmisi&oacute;n por Internet o m&eacute;todo de almacenamiento electr&oacute;nico es completamente seguro.</p>\r\n<p>&nbsp;</p>\r\n<p>Enlaces a sitios de terceros:</p>\r\n<p>Nuestro sitio web puede contener enlaces a sitios de terceros. No somos responsables de las pr&aacute;cticas de privacidad ni del contenido de dichos sitios. Le recomendamos que revise las pol&iacute;ticas de privacidad de esos sitios antes de proporcionar su informaci&oacute;n personal.</p>\r\n<p>&nbsp;</p>\r\n<p>Cambios en la pol&iacute;tica de privacidad:</p>\r\n<p>Podemos actualizar esta pol&iacute;tica de privacidad de vez en cuando. Cualquier cambio se publicar&aacute; en esta p&aacute;gina y la fecha de la &uacute;ltima actualizaci&oacute;n se indicar&aacute; en la parte superior de la p&aacute;gina. Consulte esta Pol&iacute;tica de privacidad regularmente para mantenerse informado de cualquier cambio.</p>\r\n<p>&nbsp;</p>\r\n<p>Contactar :</p>\r\n<p>Si tiene alguna pregunta sobre nuestra pol&iacute;tica de privacidad, cont&aacute;ctenos en: support@immiworld.es</p>\r\n<p>&nbsp;</p>\r\n<p>Al utilizar nuestro sitio web, usted acepta los t&eacute;rminos de nuestra pol&iacute;tica de privacidad. Gracias por confiar en Immiworld para proteger su informaci&oacute;n personal.</p>\r\n<p>&nbsp;</p>',NULL,'rich_text_box',15,'Pages'),(25,'site.avis_lien','Avis lien','https://www.google.com/maps/place/Immiworld/@36.7117375,-4.436239,15.39z/data=!4m6!3m5!1s0xd72f708bd115dd9:0x5f84e88420f6341b!8m2!3d36.7134488!4d-4.4355173!16s%2Fg%2F11kq7vr9sw?entry=ttu',NULL,'text',13,'Site'),(26,'site.consultation_fr_code','Consultation français code','<!-- Calendly inline widget begin --><div class=\"calendly-inline-widget\" data-url=\"https://calendly.com/d/y5v-9f3-ztd/marouane?primary_color=ff6524\" style=\"min-width:320px;height:700px;\"></div><script type=\"text/javascript\" src=\"https://assets.calendly.com/assets/external/widget.js\" async></script><!-- Calendly inline widget end -->',NULL,'code_editor',16,'Site'),(27,'site.consultation_es_code','Consultation espanyol code','<!-- Calendly inline widget begin --><div class=\"calendly-inline-widget\" data-url=\"https://calendly.com/d/y5v-9f3-ztd/marouane?primary_color=ff6524\" style=\"min-width:320px;height:700px;\"></div><script type=\"text/javascript\" src=\"https://assets.calendly.com/assets/external/widget.js\" async></script><!-- Calendly inline widget end -->',NULL,'code_editor',17,'Site'),(30,'pages.mention_legal','Mention legal Francais','<h2>INMI BEY S.L.</h2>\r\n<p><strong>CIF:</strong> B70633243</p>\r\n<p><strong>Nombre Comercial:</strong> Immiworld</p>\r\n<p><strong>Direcci&oacute;n:</strong> Calle Maestro Lecuano 1, Local 7</p>\r\n<p><strong>Code Postal: </strong>29006 M&aacute;laga</p>\r\n<p><strong>Courrier &Eacute;lectronique:</strong> <a href=\"mailto:hola@immiworld.es\">hola@immiworld.es</a></p>\r\n<p><strong>P&aacute;gina Web:</strong> <span style=\"color: rgb(230, 126, 35);\"><a href=\"http://www.immiworld.es/\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=http://www.immiworld.es/&amp;source=gmail&amp;ust=1708790338610000&amp;usg=AOvVaw1lOi_2utbjiITy7tHFjY-q\">www.immiworld.es</a></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>Propri&eacute;t&eacute; Intellectuelle et Industrielle</strong></span></p>\r\n<p>Tous les droits de propri&eacute;t&eacute; intellectuelle et industrielle du site web&nbsp;<a href=\"http://www.immiworld.es/\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=http://www.immiworld.es/&amp;source=gmail&amp;ust=1708790338610000&amp;usg=AOvVaw1lOi_2utbjiITy7tHFjY-q\">www.immiworld.es</a>&nbsp;et de ses contenus (textes, images, sons, audio, vid&eacute;o, dessins, cr&eacute;ations, logiciels) appartiennent &agrave; <em>INMI BEY S.L.</em> ou, le cas &eacute;ch&eacute;ant, &agrave; des tiers. L\'utilisateur peut visualiser tous les &eacute;l&eacute;ments, les imprimer, les copier et les stocker sur le disque dur de son ordinateur ou sur tout autre support physique, uniquement et exclusivement pour son usage personnel et priv&eacute;. Par cons&eacute;quent, toute utilisation &agrave; des fins commerciales, leur distribution, ainsi que leur modification, alt&eacute;ration ou d&eacute;compilation sont strictement interdites.</p>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>Protection des Donn&eacute;es Personnelles</strong></span></p>\r\n<p>Conform&eacute;ment au R&egrave;glement (UE) 2016/679 du Parlement europ&eacute;en et du Conseil, du <em>27 avril 2016</em>, relatif &agrave; la protection des personnes physiques &agrave; l\'&eacute;gard du traitement des donn&eacute;es &agrave; caract&egrave;re personnel et &agrave; la libre circulation de ces donn&eacute;es (GDPR), ainsi qu\'&agrave; la l&eacute;gislation nationale en mati&egrave;re de protection des donn&eacute;es, nous informons que les donn&eacute;es personnelles collect&eacute;es via le site web&nbsp;<a href=\"http://immiworld.es/\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=http://immiworld.es&amp;source=gmail&amp;ust=1708790338610000&amp;usg=AOvVaw38ySMTYfMuOAzZG_7jQ6qQ\">immiworld.es</a>&nbsp;seront trait&eacute;es conform&eacute;ment &agrave; la Politique de Confidentialit&eacute; disponible sur ledit site web.</p>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>L&eacute;gislation et Comp&eacute;tence Juridictionnelle Applicables</strong></span></p>\r\n<p>Cet avis l&eacute;gal est r&eacute;gi dans tous ses aspects par la loi espagnole. Pour toute question litigieuse d&eacute;coulant de l\'existence, de l\'acc&egrave;s, de l\'utilisation ou du contenu de l\'Avis L&eacute;gal, tant le Client que<em> INMI BEY S.L.</em> renoncent express&eacute;ment &agrave; tout autre tribunal qui pourrait leur &ecirc;tre comp&eacute;tent, se soumettant express&eacute;ment &agrave; la juridiction et comp&eacute;tence des tribunaux de M&aacute;laga.</p>',NULL,'rich_text_box',16,'Pages'),(31,'site.defaultSlide','Default slide image','settings/June2023/CJffp8FnNCVkmmHWPfX6.png',NULL,'image',18,'Site'),(32,'pages.mention_legal_espagnol','Mention legal Espagnol','<h2>INMI BEY S.L.</h2>\r\n<p><strong>CIF:</strong> B70633243</p>\r\n<p><strong>Nom Commercial:</strong> Immiworld</p>\r\n<p><strong>Adresse:</strong> Calle Maestro Lecuano 1, Local 7, C.P. 29006 M&aacute;laga</p>\r\n<p><strong>Correo Electr&oacute;nico:</strong> <a href=\"mailto:hola@immiworld.es\">hola@immiworld.es</a></p>\r\n<p><strong>P&aacute;gina Web:</strong> <span style=\"color: rgb(230, 126, 35);\"><a href=\"http://www.immiworld.es/\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=http://www.immiworld.es/&amp;source=gmail&amp;ust=1708790338610000&amp;usg=AOvVaw1lOi_2utbjiITy7tHFjY-q\">www.immiworld.es</a></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>Propiedad Intelectual e Industrial</strong></span></p>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><span style=\"color: rgb(0, 0, 0);\">Todos los derechos de propiedad intelectual e industrial del sitio web</span>&nbsp;<a href=\"http://www.immiworld.es/\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=http://www.immiworld.es/&amp;source=gmail&amp;ust=1708790338610000&amp;usg=AOvVaw1lOi_2utbjiITy7tHFjY-q\">www.immiworld.es</a>&nbsp;<span style=\"color: rgb(0, 0, 0);\">y de sus contenidos (textos, im&aacute;genes, sonidos, audio, v&iacute;deo, dise&ntilde;os, creatividades, software) pertenecen a <em>INMI BEY S.L</em>. o, en su caso, a terceras personas. El usuario puede visualizar todos los elementos, imprimirlos, copiarlos y almacenarlos en el disco duro de su computadora o en cualquier otro soporte f&iacute;sico siempre y cuando sea, &uacute;nica y exclusivamente, para su uso personal y privado, quedando, por tanto, terminantemente prohibida su utilizaci&oacute;n con fines comerciales, su distribuci&oacute;n, as&iacute; como su modificaci&oacute;n, alteraci&oacute;n o descompilaci&oacute;n.</span></span></p>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>Protecci&oacute;n de Datos Personales</strong></span></p>\r\n<p><span style=\"color: rgb(0, 0, 0);\">De conformidad con lo dispuesto en el Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo, de <em>27 de abril de 2016</em>, relativo a la protecci&oacute;n de las personas f&iacute;sicas en lo que respecta al tratamiento de datos personales y a la libre circulaci&oacute;n de estos datos (GDPR), as&iacute; como en la normativa nacional en materia de protecci&oacute;n de datos, se informa que los datos personales recabados a trav&eacute;s del sitio web&nbsp;<a href=\"http://immiworld.es/\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=http://immiworld.es&amp;source=gmail&amp;ust=1708790338610000&amp;usg=AOvVaw38ySMTYfMuOAzZG_7jQ6qQ\">immiworld.es</a> ser&aacute;n tratados de acuerdo con la Pol&iacute;tica de Privacidad disponible en dicho sitio web.</span></p>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>Legislaci&oacute;n y Jurisdicci&oacute;n Aplicable</strong></span></p>\r\n<p><span style=\"color: rgb(0, 0, 0);\">Este aviso legal se rige en todos y cada uno de sus extremos por la ley espa&ntilde;ola. Para cualquier cuesti&oacute;n litigiosa derivada de la existencia, acceso, utilizaci&oacute;n o contenido del Aviso Legal, tanto el Cliente como <em>INMI BEY S.L</em>. renuncian expresamente a cualquier otro fuero que pudiera corresponderles, someti&eacute;ndose expresamente a la jurisdicci&oacute;n y competencia de los Juzgados y Tribunales de M&aacute;laga.</span></p>\r\n<p>&nbsp;</p>',NULL,'rich_text_box',17,'Pages'),(33,'pages.terms_et_conditions_francais','Terms et conditions Francais','<h2>Terms et conditions</h2>\r\n<p>Les pr&eacute;sents termes et conditions r&eacute;gissent l\'utilisation du site web&nbsp;<a href=\"http://immiworld.es/\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=http://immiworld.es&amp;source=gmail&amp;ust=1708790338604000&amp;usg=AOvVaw1lZhrLXOX0b9s6wlcz7Lw0\">immiworld.es</a>&nbsp;et des services propos&eacute;s par <em>INMI BEY S.L.</em> (ci-apr&egrave;s d&eacute;nomm&eacute;s \"Immiworld\"). En utilisant ce site web, vous acceptez ces termes et conditions dans leur int&eacute;gralit&eacute;. Si vous n\'acceptez pas ces termes et conditions, vous &ecirc;tes pri&eacute; de ne pas utiliser ce site web.<br><br></p>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>1. Utilisation du Site</strong></span></p>\r\n<ul>\r\n<li style=\"text-align: left;\"><span style=\"color: rgb(0, 0, 0);\">1</span>.1. Vous devez &ecirc;tre &acirc;g&eacute; d\'au moins 18 ans pour utiliser ce site web. En utilisant ce site, vous garantissez avoir au moins 18 ans.</li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">1</span>.2. Vous &ecirc;tes responsable de votre acc&egrave;s &agrave; ce site web et de toutes les activit&eacute;s qui s\'y d&eacute;roulent sous votre nom d\'utilisateur.</li>\r\n</ul>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>2. Services</strong></span></p>\r\n<ul>\r\n<li>2.1. Immiworld se r&eacute;serve le droit de modifier ou d\'interrompre, temporairement ou d&eacute;finitivement, tout service ou fonctionnalit&eacute; du site web, avec ou sans pr&eacute;avis.</li>\r\n<li>2.2. Nous nous effor&ccedil;ons de garantir que toutes les informations fournies sur ce site web sont exactes et &agrave; jour, cependant, nous ne garantissons pas l\'exactitude, l\'exhaustivit&eacute; ou la pertinence de ces informations.</li>\r\n</ul>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>3. Propri&eacute;t&eacute; Intellectuelle</strong></span></p>\r\n<ul>\r\n<li>3.1. Tous les contenus pr&eacute;sents sur ce site web, y compris mais sans s\'y limiter, le texte, les images, les vid&eacute;os, les graphiques, les logos et les marques, sont la propri&eacute;t&eacute; d\'Immiworld ou de ses conc&eacute;dants de licence, et sont prot&eacute;g&eacute;s par les lois sur la propri&eacute;t&eacute; intellectuelle en vigueur.</li>\r\n<li>3.2. Aucun &eacute;l&eacute;ment de ce site web ne peut &ecirc;tre reproduit, modifi&eacute;, distribu&eacute;, diffus&eacute;, vendu, c&eacute;d&eacute;, lou&eacute;, conc&eacute;d&eacute; sous licence ou exploit&eacute; de quelque mani&egrave;re que ce soit sans le consentement &eacute;crit pr&eacute;alable d\'Immiworld</li>\r\n</ul>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>4. Responsabilit&eacute;</strong></span></p>\r\n<ul>\r\n<li>4.1. Immiworld ne sera en aucun cas responsable des dommages directs, indirects, sp&eacute;ciaux, fortuits ou cons&eacute;cutifs d&eacute;coulant de l\'utilisation ou de l\'impossibilit&eacute; d\'utiliser ce site web ou des services qui y sont propos&eacute;s.</li>\r\n<li>4.2. Vous utilisez ce site web &agrave; vos propres risques. Ce site web est fourni \"tel quel\" et \"tel que disponible\", sans garantie d\'aucune sorte, expresse ou implicite.</li>\r\n</ul>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>5. Modifications des Conditions</strong></span></p>\r\n<ul>\r\n<li>5.1. Immiworld se r&eacute;serve le droit de modifier ces termes et conditions &agrave; tout moment. Les modifications entreront en vigueur d&egrave;s leur publication sur ce site web.</li>\r\n</ul>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>6. Loi Applicable et Juridiction</strong></span></p>\r\n<ul>\r\n<li>6.1. Les pr&eacute;sentes conditions sont r&eacute;gies par la loi espagnole. Tout litige d&eacute;coulant de ces termes et conditions sera soumis &agrave; la juridiction exclusive des tribunaux de M&aacute;laga.</li>\r\n</ul>',NULL,'rich_text_box',18,'Pages'),(34,'pages.terms_et_conditions_espagnol','Terms et conditions Espagnol','<h2><strong>T&eacute;rminos y Condiciones</strong></h2>\r\n<p>Estos t&eacute;rminos y condiciones regulan el uso del sitio web&nbsp;<a href=\"http://immiworld.es/\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=http://immiworld.es&amp;source=gmail&amp;ust=1708790338605000&amp;usg=AOvVaw08cjxyywMpkRWn8v5Nb8BF\">immiworld.es</a>&nbsp;y los servicios ofrecidos por<em> INMI BEY S.L</em>. (en adelante \"Immiworld\"). Al utilizar este sitio web, aceptas estos t&eacute;rminos y condiciones en su totalidad. Si no est&aacute;s de acuerdo con estos t&eacute;rminos y condiciones, te rogamos que no utilices este sitio web.<br><br></p>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>1. Uso del Sitio</strong></span></p>\r\n<ul>\r\n<li>1.1. Debes tener al menos 18 a&ntilde;os de edad para utilizar este sitio web. Al utilizar este sitio, garantizas tener al menos 18 a&ntilde;os.</li>\r\n<li>1.2. Eres responsable de tu acceso a este sitio web y de todas las actividades que ocurran bajo tu nombre de usuario.</li>\r\n</ul>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>2. Servicios</strong></span></p>\r\n<ul>\r\n<li>2.1. Immiworld se reserva el derecho de modificar o discontinuar, temporal o permanentemente, cualquier servicio o funcionalidad del sitio web, con o sin previo aviso.</li>\r\n<li>2.2. Nos esforzamos por garantizar que toda la informaci&oacute;n proporcionada en este sitio web sea precisa y actualizada; sin embargo, no garantizamos la exactitud, integridad o relevancia de dicha informaci&oacute;n.</li>\r\n</ul>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>3. Propiedad Intelectual</strong></span></p>\r\n<ul>\r\n<li>3.1. Todo el contenido presente en este sitio web, incluyendo pero no limit&aacute;ndose a texto, im&aacute;genes, videos, gr&aacute;ficos, logotipos y marcas, es propiedad de Immiworld o de sus licenciantes, y est&aacute; protegido por las leyes de propiedad intelectual vigentes.</li>\r\n<li>3.2. Ning&uacute;n elemento de este sitio web puede ser reproducido, modificado, distribuido, transmitido, vendido, cedido, alquilado, concesionado o explotado de ninguna manera sin el consentimiento previo por escrito de Immiworld.</li>\r\n</ul>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>4. Responsabilidad</strong></span></p>\r\n<ul>\r\n<li>4.1. Immiworld no ser&aacute; responsable en ning&uacute;n caso de da&ntilde;os directos, indirectos, especiales, incidentales o consecuentes derivados del uso o la imposibilidad de uso de este sitio web o de los servicios ofrecidos en el mismo.</li>\r\n<li>4.2. Utilizas este sitio web bajo tu propio riesgo. Este sitio web se proporciona \"tal cual\" y \"seg&uacute;n disponibilidad\", sin garant&iacute;a de ning&uacute;n tipo, expresa o impl&iacute;cita.</li>\r\n</ul>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>5. Modificaciones de los T&eacute;rminos</strong></span></p>\r\n<ul>\r\n<li>5.1. Immiworld se reserva el derecho de modificar estos t&eacute;rminos y condiciones en cualquier momento. Las modificaciones entrar&aacute;n en vigencia una vez publicadas en este sitio web.</li>\r\n</ul>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>6. Ley Aplicable y Jurisdicci&oacute;n</strong></span></p>\r\n<ul>\r\n<li>6.1. Estos t&eacute;rminos y condiciones se rigen por la ley espa&ntilde;ola. Cualquier disputa derivada de estos t&eacute;rminos y condiciones estar&aacute; sujeta a la jurisdicci&oacute;n exclusiva de los tribunales de M&aacute;laga.&nbsp;</li>\r\n</ul>',NULL,'rich_text_box',19,'Pages'),(40,'site.phone_call_link','Phone number to call','tel:+0034657933788',NULL,'text',6,'Site'),(41,'site.footer-description','Footer description',NULL,NULL,'text_area',20,'Site');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` char(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textimonial` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'es',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'Gregory Rodriguez','Lorem ipsum dolor sit amet consectetur, adipisicing elit. In architecto saepe quaerat quisquam voluptas exercitationem vero quia at, laudantium maxime facere deserunt necessitatibus tenetur atque minima id eum quis blanditiis illo, sapiente, omnis praesentium rem. Beatae est, soluta blanditiis molestias saepe illo obcaecati voluptatibus officia minima earum fuga exercitationem eveniet ratione quibusdam iste a in corrupti porro facere nihil id esse perferendis praesentium? Fugit neque vero aspernatur, sint aperiam placeat optio perspiciatis, facilis impedit obcaecati veniam assumenda delectus quo harum eius, vitae eaque deleniti corporis ex quasi! Vero rerum accusamus velit in id tenetur beatae? Molestias ab expedita asperiores exercitationem.','es',1,NULL,'2024-10-03 11:59:18','2024-10-03 11:59:18'),(2,'Gregory Rodriguez','Lorem ipsum dolor sit amet consectetur, adipisicing elit. In architecto saepe quaerat quisquam voluptas exercitationem vero quia at, laudantium maxime facere deserunt necessitatibus tenetur atque minima id eum quis blanditiis illo, sapiente, omnis praesentium rem. Beatae est, soluta blanditiis molestias saepe illo obcaecati voluptatibus officia minima earum fuga exercitationem eveniet ratione quibusdam iste a in corrupti porro facere nihil id esse perferendis praesentium? Fugit neque vero aspernatur, sint aperiam placeat optio perspiciatis, facilis impedit obcaecati veniam assumenda delectus quo harum eius, vitae eaque deleniti corporis ex quasi! Vero rerum accusamus velit in id tenetur beatae? Molestias ab expedita asperiores exercitationem.','fr',1,NULL,'2024-10-03 11:59:18','2024-10-03 11:59:18'),(3,'Gregory Rodriguez','Lorem ipsum dolor sit amet consectetur, adipisicing elit. In architecto saepe quaerat quisquam voluptas exercitationem vero quia at, laudantium maxime facere deserunt necessitatibus tenetur atque minima id eum quis blanditiis illo, sapiente, omnis praesentium rem. Beatae est, soluta blanditiis molestias saepe illo obcaecati voluptatibus officia minima earum fuga exercitationem eveniet ratione quibusdam iste a in corrupti porro facere nihil id esse perferendis praesentium? Fugit neque vero aspernatur, sint aperiam placeat optio perspiciatis, facilis impedit obcaecati veniam assumenda delectus quo harum eius, vitae eaque deleniti corporis ex quasi! Vero rerum accusamus velit in id tenetur beatae? Molestias ab expedita asperiores exercitationem.','es',1,NULL,'2024-10-03 11:59:18','2024-10-03 11:59:18'),(4,'Gregory Rodriguez','Lorem ipsum dolor sit amet consectetur, adipisicing elit. In architecto saepe quaerat quisquam voluptas exercitationem vero quia at, laudantium maxime facere deserunt necessitatibus tenetur atque minima id eum quis blanditiis illo, sapiente, omnis praesentium rem. Beatae est, soluta blanditiis molestias saepe illo obcaecati voluptatibus officia minima earum fuga exercitationem eveniet ratione quibusdam iste a in corrupti porro facere nihil id esse perferendis praesentium? Fugit neque vero aspernatur, sint aperiam placeat optio perspiciatis, facilis impedit obcaecati veniam assumenda delectus quo harum eius, vitae eaque deleniti corporis ex quasi! Vero rerum accusamus velit in id tenetur beatae? Molestias ab expedita asperiores exercitationem.','es',1,NULL,'2024-10-03 11:59:18','2024-10-03 11:59:18'),(5,'Gregory Rodriguez','Lorem ipsum dolor sit amet consectetur, adipisicing elit. In architecto saepe quaerat quisquam voluptas exercitationem vero quia at, laudantium maxime facere deserunt necessitatibus tenetur atque minima id eum quis blanditiis illo, sapiente, omnis praesentium rem. Beatae est, soluta blanditiis molestias saepe illo obcaecati voluptatibus officia minima earum fuga exercitationem eveniet ratione quibusdam iste a in corrupti porro facere nihil id esse perferendis praesentium? Fugit neque vero aspernatur, sint aperiam placeat optio perspiciatis, facilis impedit obcaecati veniam assumenda delectus quo harum eius, vitae eaque deleniti corporis ex quasi! Vero rerum accusamus velit in id tenetur beatae? Molestias ab expedita asperiores exercitationem.','fr',1,NULL,'2024-10-03 11:59:18','2024-10-03 11:59:18'),(6,'Gregory Rodriguez','Lorem ipsum dolor sit amet consectetur, adipisicing elit. In architecto saepe quaerat quisquam voluptas exercitationem vero quia at, laudantium maxime facere deserunt necessitatibus tenetur atque minima id eum quis blanditiis illo, sapiente, omnis praesentium rem. Beatae est, soluta blanditiis molestias saepe illo obcaecati voluptatibus officia minima earum fuga exercitationem eveniet ratione quibusdam iste a in corrupti porro facere nihil id esse perferendis praesentium? Fugit neque vero aspernatur, sint aperiam placeat optio perspiciatis, facilis impedit obcaecati veniam assumenda delectus quo harum eius, vitae eaque deleniti corporis ex quasi! Vero rerum accusamus velit in id tenetur beatae? Molestias ab expedita asperiores exercitationem.','es',1,NULL,'2024-10-03 11:59:18','2024-10-03 11:59:18'),(7,'Gregory Rodriguez','Lorem ipsum dolor sit amet consectetur, adipisicing elit. In architecto saepe quaerat quisquam voluptas exercitationem vero quia at, laudantium maxime facere deserunt necessitatibus tenetur atque minima id eum quis blanditiis illo, sapiente, omnis praesentium rem. Beatae est, soluta blanditiis molestias saepe illo obcaecati voluptatibus officia minima earum fuga exercitationem eveniet ratione quibusdam iste a in corrupti porro facere nihil id esse perferendis praesentium? Fugit neque vero aspernatur, sint aperiam placeat optio perspiciatis, facilis impedit obcaecati veniam assumenda delectus quo harum eius, vitae eaque deleniti corporis ex quasi! Vero rerum accusamus velit in id tenetur beatae? Molestias ab expedita asperiores exercitationem.','fr',1,NULL,'2024-10-03 11:59:18','2024-10-03 11:59:18'),(8,'Gregory Rodriguez','Lorem ipsum dolor sit amet consectetur, adipisicing elit. In architecto saepe quaerat quisquam voluptas exercitationem vero quia at, laudantium maxime facere deserunt necessitatibus tenetur atque minima id eum quis blanditiis illo, sapiente, omnis praesentium rem. Beatae est, soluta blanditiis molestias saepe illo obcaecati voluptatibus officia minima earum fuga exercitationem eveniet ratione quibusdam iste a in corrupti porro facere nihil id esse perferendis praesentium? Fugit neque vero aspernatur, sint aperiam placeat optio perspiciatis, facilis impedit obcaecati veniam assumenda delectus quo harum eius, vitae eaque deleniti corporis ex quasi! Vero rerum accusamus velit in id tenetur beatae? Molestias ab expedita asperiores exercitationem.','fr',1,NULL,'2024-10-03 11:59:18','2024-10-03 11:59:18');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int unsigned NOT NULL,
  `locale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_roles` (
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@gmail.com','users/default.png',NULL,'$2y$10$c5tvfyZ7KQplW9bJuSgmjexGcMzsCQXsbsQjXMsISy7dJOngKjJYK','7PQXCyOmWRFjnDvoMmNjurB4EKFemTNAYwSvtUooWEeLWxtQITNWR8rTOjA9',NULL,'2024-09-02 14:40:40','2024-10-02 12:59:32');
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

-- Dump completed on 2024-10-29  0:58:07
