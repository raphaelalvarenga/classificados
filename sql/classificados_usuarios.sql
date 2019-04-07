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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Raphael Alvarenga do Carmo','raphaelalvarenga2@gmail.com','202cb962ac59075b964b07152d234b70'),(2,'João da Silva','joaodasilva@gmail.com','202cb962ac59075b964b07152d234b70'),(3,'Maria das Graças','mariadasgracas@gmail.com','202cb962ac59075b964b07152d234b70'),(4,'John Lennon','johnlennon@yahoo.com','202cb962ac59075b964b07152d234b70'),(5,'Paul McCartney','paulmccartney@yahoo.com','202cb962ac59075b964b07152d234b70'),(6,'George Harrison','georgeharrison@gmail.com','202cb962ac59075b964b07152d234b70'),(7,'Ringo Starr','ringostarr@gmail.com','202cb962ac59075b964b07152d234b70'),(8,'Bruce Dickinson','brucedickinson@gmail.com','202cb962ac59075b964b07152d234b70'),(9,'Steve Harris','steveharris@hotmail.com','202cb962ac59075b964b07152d234b70'),(10,'Dave Murray','davemurray@hotmail.com','202cb962ac59075b964b07152d234b70'),(11,'Adrian Smith','adriansmith@yahoo.com','202cb962ac59075b964b07152d234b70'),(12,'Janick Gers','janickgers@yahoo.com','202cb962ac59075b964b07152d234b70'),(13,'Clive Burr','cliveburr@hotmail.com','202cb962ac59075b964b07152d234b70'),(14,'Nicko McBrain','nickomcbrain@yahoo.com','202cb962ac59075b964b07152d234b70'),(15,'Paul DiAnno','pauldianno@yahoo.com','202cb962ac59075b964b07152d234b70'),(16,'Blaze Bailey','blazebailey@yahoo.com','202cb962ac59075b964b07152d234b70'),(17,'James Hetfield','jameshetfield@gmail.com','202cb962ac59075b964b07152d234b70'),(18,'Lars Ulrich','larsulrich@hotmail.com','202cb962ac59075b964b07152d234b70'),(19,'Kirk Hammet','kirkhammet@gmail.com','202cb962ac59075b964b07152d234b70'),(20,'Cliff Burton','cliffburton@gmail.com','202cb962ac59075b964b07152d234b70'),(21,'Jason Newsted','jasonnewsted@hotmail.com','202cb962ac59075b964b07152d234b70'),(22,'Robert Trujillo','roberttrujillo@hotmail.com','202cb962ac59075b964b07152d234b70'),(23,'Michael Jackson','michaeljackson@hotmail.com','202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
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
