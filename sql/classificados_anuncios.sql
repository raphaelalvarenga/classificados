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
-- Table structure for table `anuncios`
--

DROP TABLE IF EXISTS `anuncios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `anuncios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(100) NOT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `preco` varchar(15) NOT NULL,
  `estado` varchar(5) DEFAULT NULL,
  `data` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `anuncios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anuncios`
--

LOCK TABLES `anuncios` WRITE;
/*!40000 ALTER TABLE `anuncios` DISABLE KEYS */;
INSERT INTO `anuncios` VALUES (1,'Guitarra Fender','Novinha pra dedéu','3000,00','Usado','2019-04-05 17:51:44',1,1),(2,'Fazer 2008cc','Moto comprada em 2015','5000,00','Usado','2019-04-06 19:20:57',1,2),(3,'Samsung Duos','Celular usado','200,00','Usado','2019-04-06 19:25:04',1,3),(4,'Ventilador','Modelo novo','300,00','Novo','2019-04-06 21:56:19',1,4),(5,'iPhone 7','Celular bom demais','1500,00','Usado','2019-01-03 09:00:32',12,3),(6,'HD Externo','Espaço de 1tb de armazenamento','300,00','Usado','2019-01-05 15:15:41',2,5),(7,'Computador','Computador bom para trabalho apenas','1000,00','Usado','2019-01-05 15:30:39',1,5),(8,'Fone de Ouvido','Fone de ouvido com grave forte','60,00','Novo','2019-01-07 10:20:25',3,6),(9,'Luminária','Boa para trabalhar com luz escura','30,00','Novo','2019-01-10 20:56:54',18,6),(10,'Guarda-Roupas','Para apenas uma pessoa','800,00','Usado','2019-01-11 19:51:47',13,7),(11,'Cômoda','Boa para colocar desodorante e perfume em cima','500,00','Novo','2019-01-12 15:25:12',15,7),(12,'Violão','Violão de nylon','400,00','Novo','2019-01-15 16:16:43',4,1),(13,'Controle de XBOX 360','Controle filé','200,00','Novo','2019-01-17 19:23:14',4,5),(14,'Copo de Plástico','Copos para usar em casa','15,00','Usado','2019-01-20 08:28:27',11,8),(15,'Telefone fixo','Aparelho fixo','80,00','Usado','2019-01-22 12:57:42',14,9),(16,'Protetor Solar','Proteja-se na praia','15,00','Usado','2019-01-23 11:49:56',8,10),(17,'Estojo','Guarde lápis, caneta, sua maquiagem, etc','5,00','Usado','2019-01-26 10:36:32',17,6),(18,'Cama','Cama individual','600,00','Novo','2019-02-03 20:34:44',4,7),(19,'Mochila','Mochila tradicional para ir para a escola','80,00','Usado','2019-02-05 20:25:30',3,6),(20,'Violão','Violão de aço','350,00','Novo','2019-02-09 15:16:17',13,1),(21,'Cordador de unha','','8,00','Usado','2019-02-10 16:27:40',3,6),(22,'Tesoura','','7,00','Usado','2019-02-11 18:49:12',22,6),(23,'Webcam','Filma em HD','40,00','Novo','2019-02-16 16:53:35',2,5),(24,'Estojo','','9,10','Usado','2019-02-18 10:52:10',20,6),(25,'Mesa','Mesa para sala de estar','220,00','Novo','2019-02-20 20:16:54',4,7),(26,'Chinelo','','50,00','Usado','2019-02-23 17:24:22',16,11),(27,'Tênis','Marca muito boa','250,00','Usado','2019-02-27 10:26:47',12,11),(28,'Azulejo','O preço é por unidade','12,00','Usado','2019-03-01 14:16:53',22,12),(29,'Cobertor','','30,00','Usado','2019-03-05 15:35:29',1,14),(30,'Colchão','','90,00','Novo','2019-03-06 20:14:30',12,13),(31,'Lençol','','35,00','Usado','2019-03-06 21:56:48',15,14),(32,'Amplificador','30w','500,00','Usado','2019-03-09 16:54:15',11,1),(33,'Lâmpada','100w','20,00','Novo','2019-03-10 17:42:41',21,13),(34,'Cortina','Escurece o quarto','80,00','Novo','2019-03-17 18:24:27',20,13),(35,'Porta','Porta de madeira','120,00','Novo','2019-03-19 20:26:39',13,12),(36,'Perfume','Muito cheiroso','250,00','Usado','2019-03-22 23:34:28',17,15),(37,'Bíblia Sagrada','Deus seja louvado','100,00','Usado','2019-03-26 14:15:23',6,16),(38,'Estabilizador','Espaço para quatro entradas','50,00','Usado','2019-03-28 10:26:50',3,5),(39,'Capacete','Tamanho 60','120,00','Novo','2019-03-29 14:35:56',15,6),(40,'Agenda','Ano 2019','30,00','Novo','2019-03-30 16:55:20',6,16),(41,'Garrafa Térmica','Boa para praia','15,00','Usado','2019-03-30 16:56:31',18,8),(42,'Carregador de celular','Saída universal','15,00','Novo','2019-03-31 13:16:13',19,6),(43,'Cadeira','Bom para relaxar','40','Novo','2019-04-07 02:31:38',23,7);
/*!40000 ALTER TABLE `anuncios` ENABLE KEYS */;
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
