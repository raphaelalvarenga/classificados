-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: classificados
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
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
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) NOT NULL,
  `icone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Música','<i class=\"fas fa-guitar\"></i>'),(2,'Automóvel','<i class=\"fas fa-car\"></i>'),(3,'Celular','<i class=\"fas fa-mobile-alt\"></i>'),(4,'Eletrodoméstico','<i class=\"fas fa-blender\"></i>'),(5,'Informática','<i class=\"fas fa-keyboard\"></i>'),(6,'Acessórios','<i class=\"fas fa-pen\"></i>'),(7,'Móvel','<i class=\"fas fa-chair\"></i>'),(8,'Cozinha','<i class=\"fas fa-utensils\"></i>'),(9,'Telefone','<i class=\"fas fa-tty\"></i>'),(10,'Estética','<i class=\"fas fa-female\"></i>'),(11,'Roupa','<i class=\"fas fa-tshirt\"></i>'),(12,'Construção','<i class=\"fas fa-tools\"></i>'),(13,'Decoração','<i class=\"fas fa-home\"></i>'),(14,'Tecido','<i class=\"fas fa-home\"></i>'),(15,'Perfume','<i class=\"fas fa-spray-can\"></i>'),(16,'Livro','<i class=\"fas fa-book\"></i>');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-07 15:52:01
