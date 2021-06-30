-- MySQL dump 10.19  Distrib 10.3.29-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: neonhouseled
-- ------------------------------------------------------
-- Server version	10.3.29-MariaDB-0ubuntu0.20.04.1

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Caferia y Juguería','cafeteria'),(2,'Arquitectura','arquitectura'),(3,'Cevicheria','cevicheria'),(4,'Hogar','hogar');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeria`
--

DROP TABLE IF EXISTS `galeria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) NOT NULL,
  `idcliente` int(2) NOT NULL,
  `image` varchar(150) NOT NULL,
  `imgstatus` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `idcliente` (`idcliente`),
  CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeria`
--

LOCK TABLES `galeria` WRITE;
/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
INSERT INTO `galeria` VALUES (182,'PACIFICO',36,'842021061006Vista_1 (1).png',1),(183,'PACIFICO',36,'242021061006Vista_8 (1).png',1),(184,'PACIFICO',36,'282021061006Vista_fachada_1.png',1),(185,'PACIFICO',36,'242021061006Vista_fachada_2.png',1),(186,'PACIFICO',36,'832021061006Vista_fachada_3.png',1),(187,'PACIFICO',36,'132021061006Vista_fachada_4.png',1),(188,'PACIFICO',36,'982021061006Vista_fachada_5.png',1),(189,'PACIFICO',36,'4120210610061.jpg',1),(190,'PACIFICO',36,'720210610062 (1).jpg',1),(191,'PACIFICO',36,'9620210610063.jpg',1),(192,'PACIFICO',36,'3920210610064.jpg',1),(193,'PACIFICO',36,'2320210610065.jpg',1),(194,'PACIFICO',36,'762021061006360-_1.jpg',1),(195,'PACIFICO',36,'672021061006360-_2.jpg',1),(196,'PACIFICO',36,'532021061006Vista_1 (1).png',1),(197,'PACIFICO',36,'522021061006Vista_8 (1).png',1),(198,'PACIFICO',36,'882021061006Vista_fachada_1.png',1),(199,'PACIFICO',36,'712021061006Vista_fachada_2.png',1),(200,'PACIFICO',36,'542021061006Vista_fachada_3.png',1),(201,'PACIFICO',36,'52021061006Vista_fachada_4.png',1),(202,'PACIFICO',36,'232021061006Vista_fachada_5.png',1),(203,'PACIFICO',36,'5720210610061.jpg',1),(204,'PACIFICO',36,'3420210610062 (1).jpg',1),(205,'PACIFICO',36,'7820210610063.jpg',1),(206,'PACIFICO',36,'2620210610064.jpg',1),(207,'PACIFICO',36,'8320210610065.jpg',1),(208,'PACIFICO',36,'542021061006360-_1.jpg',1),(209,'PACIFICO',36,'982021061006360-_2.jpg',1),(210,'asdasds',36,'682021062917loli2.jpg',1),(211,'asdasds',36,'302021062917loli2.jpg',1),(212,'asdasds',36,'832021062917loli2.jpg',1),(213,'asdasds',36,'612021062917loli2.jpg',1),(214,'asdasds',36,'672021062917loli2.jpg',1);
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idModelo` int(11) NOT NULL,
  `tipoModelo` varchar(50) NOT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `imagen` (`imagen`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES (1,1,'categoria','cafeteria1.webp'),(2,1,'categoria','cafeteria2.webp'),(3,3,'proyecto','imagenprueba'),(4,4,'categoria','hogar1.webp'),(5,4,'categoria','hogar2.webp');
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_groups`
--

DROP TABLE IF EXISTS `user_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(30) NOT NULL,
  `group_level` int(2) NOT NULL,
  `group_status` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_level` (`group_level`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_groups`
--

LOCK TABLES `user_groups` WRITE;
/*!40000 ALTER TABLE `user_groups` DISABLE KEYS */;
INSERT INTO `user_groups` VALUES (1,'admin',1,1),(2,'cliente',2,1),(3,'gestion',3,1);
/*!40000 ALTER TABLE `user_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(2) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `nombres` varchar(60) NOT NULL,
  `telefono` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_level` (`user_level`) USING BTREE,
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_level`) REFERENCES `user_groups` (`group_level`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','264bd9514616d32bd1ab5f8a4649abe6b8f3380b',1,1,'Juan Carlos',936910425),(2,'gestion','e66bb2fabbe7b86def4cb857aa62748ce7880394',3,1,'Valeria',2147483647),(33,'cliente','d94019fd760a71edf11844bb5c601a4de95aacaf',2,0,'cevicheria pacifico',998765410),(34,'piso II','9d86b21dda8c5b89f3b4b4b853d17b7bdbc733f9',2,0,'VERONICA',936910425),(35,'cevicheria picis','b7eb1410c393fb64e266ae958b3fb7b89c9fbf62',2,0,'picis',943057282),(36,'pacifico','1f37f42978e50f1acb5fbdad2243da5cbc5f6494',2,1,'cevicheria pacifico',936910425);
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

-- Dump completed on 2021-06-29 23:31:02
