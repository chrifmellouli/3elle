-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: 3elle
-- ------------------------------------------------------
-- Server version	8.0.22-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `authorization`
--

DROP TABLE IF EXISTS `authorization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `authorization` (
  `permission` tinyint(1) DEFAULT NULL,
  `id_user` int NOT NULL,
  `id_privilege` int NOT NULL,
  PRIMARY KEY (`id_user`,`id_privilege`),
  KEY `authorization___fk2` (`id_privilege`),
  CONSTRAINT `authorization___fk1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authorization___fk2` FOREIGN KEY (`id_privilege`) REFERENCES `privilege` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authorization`
--

LOCK TABLES `authorization` WRITE;
/*!40000 ALTER TABLE `authorization` DISABLE KEYS */;
/*!40000 ALTER TABLE `authorization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_code_uindex` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_ar`
--

DROP TABLE IF EXISTS `category_ar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_ar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) DEFAULT NULL,
  `id_category` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_ar_category_id_fk` (`id_category`),
  CONSTRAINT `category_ar_category_id_fk` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_ar`
--

LOCK TABLES `category_ar` WRITE;
/*!40000 ALTER TABLE `category_ar` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_ar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_fr`
--

DROP TABLE IF EXISTS `category_fr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_fr` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) DEFAULT NULL,
  `id_category` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_fr_category_id_fk` (`id_category`),
  CONSTRAINT `category_fr_category_id_fk` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_fr`
--

LOCK TABLES `category_fr` WRITE;
/*!40000 ALTER TABLE `category_fr` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_fr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discount`
--

DROP TABLE IF EXISTS `discount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discount` (
  `id` int NOT NULL AUTO_INCREMENT,
  `value` int DEFAULT NULL,
  `id_promoted_act` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `discount_promotion_act_id_fk` (`id_promoted_act`),
  CONSTRAINT `discount_promotion_act_id_fk` FOREIGN KEY (`id_promoted_act`) REFERENCES `promotion_act` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discount`
--

LOCK TABLES `discount` WRITE;
/*!40000 ALTER TABLE `discount` DISABLE KEYS */;
/*!40000 ALTER TABLE `discount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discount_on_order`
--

DROP TABLE IF EXISTS `discount_on_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discount_on_order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_amount` float DEFAULT NULL,
  `id_discount` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `discount_on_order_discount_id_fk` (`id_discount`),
  CONSTRAINT `discount_on_order_discount_id_fk` FOREIGN KEY (`id_discount`) REFERENCES `discount` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discount_on_order`
--

LOCK TABLES `discount_on_order` WRITE;
/*!40000 ALTER TABLE `discount_on_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `discount_on_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discount_on_product`
--

DROP TABLE IF EXISTS `discount_on_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discount_on_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_number` int DEFAULT NULL,
  `id_discount` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `discount_on_product_discount_id_fk` (`id_discount`),
  CONSTRAINT `discount_on_product_discount_id_fk` FOREIGN KEY (`id_discount`) REFERENCES `discount` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discount_on_product`
--

LOCK TABLES `discount_on_product` WRITE;
/*!40000 ALTER TABLE `discount_on_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `discount_on_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `free_delivery`
--

DROP TABLE IF EXISTS `free_delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `free_delivery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_promotion_act` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `free_delivery_promotion_act_id_fk` (`id_promotion_act`),
  CONSTRAINT `free_delivery_promotion_act_id_fk` FOREIGN KEY (`id_promotion_act`) REFERENCES `promotion_act` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `free_delivery`
--

LOCK TABLES `free_delivery` WRITE;
/*!40000 ALTER TABLE `free_delivery` DISABLE KEYS */;
/*!40000 ALTER TABLE `free_delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `free_delivery_order`
--

DROP TABLE IF EXISTS `free_delivery_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `free_delivery_order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_amount` float DEFAULT NULL,
  `id_free_delivery` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `free_delivery_order_free_delivery_id_fk` (`id_free_delivery`),
  CONSTRAINT `free_delivery_order_free_delivery_id_fk` FOREIGN KEY (`id_free_delivery`) REFERENCES `free_delivery` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `free_delivery_order`
--

LOCK TABLES `free_delivery_order` WRITE;
/*!40000 ALTER TABLE `free_delivery_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `free_delivery_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `free_delivery_product`
--

DROP TABLE IF EXISTS `free_delivery_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `free_delivery_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_number` int DEFAULT NULL,
  `id_free_delivery` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `free_delivery_product_free_delivery_id_fk` (`id_free_delivery`),
  CONSTRAINT `free_delivery_product_free_delivery_id_fk` FOREIGN KEY (`id_free_delivery`) REFERENCES `free_delivery` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `free_delivery_product`
--

LOCK TABLES `free_delivery_product` WRITE;
/*!40000 ALTER TABLE `free_delivery_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `free_delivery_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gift`
--

DROP TABLE IF EXISTS `gift`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gift` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_act_promotion` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gift_promotion_act_id_fk` (`id_act_promotion`),
  CONSTRAINT `gift_promotion_act_id_fk` FOREIGN KEY (`id_act_promotion`) REFERENCES `promotion_act` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gift`
--

LOCK TABLES `gift` WRITE;
/*!40000 ALTER TABLE `gift` DISABLE KEYS */;
/*!40000 ALTER TABLE `gift` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gift_on_product`
--

DROP TABLE IF EXISTS `gift_on_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gift_on_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_number` int DEFAULT NULL,
  `id_gift` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gift_on_product_gift_id_fk` (`id_gift`),
  CONSTRAINT `gift_on_product_gift_id_fk` FOREIGN KEY (`id_gift`) REFERENCES `gift` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gift_on_product`
--

LOCK TABLES `gift_on_product` WRITE;
/*!40000 ALTER TABLE `gift_on_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `gift_on_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `git_on_order`
--

DROP TABLE IF EXISTS `git_on_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `git_on_order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_amount` float DEFAULT NULL,
  `id_gift` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `git_on_order_gift_id_fk` (`id_gift`),
  CONSTRAINT `git_on_order_gift_id_fk` FOREIGN KEY (`id_gift`) REFERENCES `gift` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `git_on_order`
--

LOCK TABLES `git_on_order` WRITE;
/*!40000 ALTER TABLE `git_on_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `git_on_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `history` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `history_user_id_fk` (`id_user`),
  CONSTRAINT `history_user_id_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `multimedia`
--

DROP TABLE IF EXISTS `multimedia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `multimedia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `multimedia`
--

LOCK TABLES `multimedia` WRITE;
/*!40000 ALTER TABLE `multimedia` DISABLE KEYS */;
/*!40000 ALTER TABLE `multimedia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `option`
--

DROP TABLE IF EXISTS `option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `option` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `option`
--

LOCK TABLES `option` WRITE;
/*!40000 ALTER TABLE `option` DISABLE KEYS */;
/*!40000 ALTER TABLE `option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `option_ar`
--

DROP TABLE IF EXISTS `option_ar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `option_ar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) DEFAULT NULL,
  `id_option` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `option_ar_option_id_fk` (`id_option`),
  CONSTRAINT `option_ar_option_id_fk` FOREIGN KEY (`id_option`) REFERENCES `option` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `option_ar`
--

LOCK TABLES `option_ar` WRITE;
/*!40000 ALTER TABLE `option_ar` DISABLE KEYS */;
/*!40000 ALTER TABLE `option_ar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `option_fr`
--

DROP TABLE IF EXISTS `option_fr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `option_fr` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) DEFAULT NULL,
  `id_option` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `option_fr_option_id_fk` (`id_option`),
  CONSTRAINT `option_fr_option_id_fk` FOREIGN KEY (`id_option`) REFERENCES `option` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `option_fr`
--

LOCK TABLES `option_fr` WRITE;
/*!40000 ALTER TABLE `option_fr` DISABLE KEYS */;
/*!40000 ALTER TABLE `option_fr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `option_value`
--

DROP TABLE IF EXISTS `option_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `option_value` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_product` int NOT NULL,
  `id_option` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `option_value_id_option_id_product_uindex` (`id_option`,`id_product`),
  KEY `option_value_product_id_fk` (`id_product`),
  CONSTRAINT `option_value_option_id_fk` FOREIGN KEY (`id_option`) REFERENCES `option` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `option_value_product_id_fk` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `option_value`
--

LOCK TABLES `option_value` WRITE;
/*!40000 ALTER TABLE `option_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `option_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `option_value_ar`
--

DROP TABLE IF EXISTS `option_value_ar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `option_value_ar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `value` varchar(50) DEFAULT NULL,
  `id_option_value` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `option_value_ar_option_value_id_fk` (`id_option_value`),
  CONSTRAINT `option_value_ar_option_value_id_fk` FOREIGN KEY (`id_option_value`) REFERENCES `option_value` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `option_value_ar`
--

LOCK TABLES `option_value_ar` WRITE;
/*!40000 ALTER TABLE `option_value_ar` DISABLE KEYS */;
/*!40000 ALTER TABLE `option_value_ar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `option_value_fr`
--

DROP TABLE IF EXISTS `option_value_fr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `option_value_fr` (
  `id` int NOT NULL AUTO_INCREMENT,
  `value` varchar(50) DEFAULT NULL,
  `id_option_value` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `option_value_fr_option_value_id_fk` (`id_option_value`),
  CONSTRAINT `option_value_fr_option_value_id_fk` FOREIGN KEY (`id_option_value`) REFERENCES `option_value` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `option_value_fr`
--

LOCK TABLES `option_value_fr` WRITE;
/*!40000 ALTER TABLE `option_value_fr` DISABLE KEYS */;
/*!40000 ALTER TABLE `option_value_fr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `id_multimedia` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_code_uindex` (`code`),
  KEY `post_multimedia_id_fk` (`id_multimedia`),
  CONSTRAINT `post_multimedia_id_fk` FOREIGN KEY (`id_multimedia`) REFERENCES `multimedia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privilege`
--

DROP TABLE IF EXISTS `privilege`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `privilege` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privilege`
--

LOCK TABLES `privilege` WRITE;
/*!40000 ALTER TABLE `privilege` DISABLE KEYS */;
/*!40000 ALTER TABLE `privilege` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `vat` float DEFAULT NULL,
  `price_ex_vat` float DEFAULT NULL,
  `mark` varchar(50) DEFAULT NULL,
  `id_post` int NOT NULL,
  `id_category` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_category_id_fk` (`id_category`),
  KEY `product_post_id_fk` (`id_post`),
  CONSTRAINT `product_category_id_fk` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `product_post_id_fk` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_ar`
--

DROP TABLE IF EXISTS `product_ar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_ar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) DEFAULT NULL,
  `description` text,
  `id_product` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_ar_product_id_fk` (`id_product`),
  CONSTRAINT `product_ar_product_id_fk` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_ar`
--

LOCK TABLES `product_ar` WRITE;
/*!40000 ALTER TABLE `product_ar` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_ar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_fr`
--

DROP TABLE IF EXISTS `product_fr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_fr` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) DEFAULT NULL,
  `description` text,
  `id_product` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_fr_product_id_fk` (`id_product`),
  CONSTRAINT `product_fr_product_id_fk` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_fr`
--

LOCK TABLES `product_fr` WRITE;
/*!40000 ALTER TABLE `product_fr` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_fr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_promoted`
--

DROP TABLE IF EXISTS `product_promoted`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_promoted` (
  `product` int NOT NULL,
  `promotion` int NOT NULL,
  PRIMARY KEY (`product`,`promotion`),
  KEY `product_promoted___fk2` (`promotion`),
  CONSTRAINT `product_promoted___fk1` FOREIGN KEY (`product`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `product_promoted___fk2` FOREIGN KEY (`promotion`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_promoted`
--

LOCK TABLES `product_promoted` WRITE;
/*!40000 ALTER TABLE `product_promoted` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_promoted` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promoted_gift`
--

DROP TABLE IF EXISTS `promoted_gift`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `promoted_gift` (
  `promotion` int NOT NULL,
  `product` int NOT NULL,
  `number` int DEFAULT NULL,
  PRIMARY KEY (`promotion`,`product`),
  KEY `promoted_gift_post_id_fk_2` (`product`),
  CONSTRAINT `promoted_gift_post_id_fk_1` FOREIGN KEY (`promotion`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `promoted_gift_post_id_fk_2` FOREIGN KEY (`product`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promoted_gift`
--

LOCK TABLES `promoted_gift` WRITE;
/*!40000 ALTER TABLE `promoted_gift` DISABLE KEYS */;
/*!40000 ALTER TABLE `promoted_gift` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `promotion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `id_act_promoted` int NOT NULL,
  `id_post` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `promotion_promotion_act_id_fk` (`id_act_promoted`),
  KEY `promotion_post_id_fk` (`id_post`),
  CONSTRAINT `promotion_post_id_fk` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `promotion_promotion_act_id_fk` FOREIGN KEY (`id_act_promoted`) REFERENCES `promotion_act` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion`
--

LOCK TABLES `promotion` WRITE;
/*!40000 ALTER TABLE `promotion` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotion_act`
--

DROP TABLE IF EXISTS `promotion_act`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `promotion_act` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion_act`
--

LOCK TABLES `promotion_act` WRITE;
/*!40000 ALTER TABLE `promotion_act` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotion_act` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotion_ar`
--

DROP TABLE IF EXISTS `promotion_ar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `promotion_ar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `id_promotion` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `promotion_ar_promotion_id_fk` (`id_promotion`),
  CONSTRAINT `promotion_ar_promotion_id_fk` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion_ar`
--

LOCK TABLES `promotion_ar` WRITE;
/*!40000 ALTER TABLE `promotion_ar` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotion_ar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotion_fr`
--

DROP TABLE IF EXISTS `promotion_fr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `promotion_fr` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `id_promotion` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `promotion_fr_promotion_id_fk` (`id_promotion`),
  CONSTRAINT `promotion_fr_promotion_id_fk` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion_fr`
--

LOCK TABLES `promotion_fr` WRITE;
/*!40000 ALTER TABLE `promotion_fr` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotion_fr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `is_connected` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'mellouliuser','pwwdj','chrif','mellouli','developer',1,0),(2,'chourauser','lsk','heni','choura','manager',1,0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-03  7:04:12
