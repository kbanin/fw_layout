-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: fw
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.23.10.1

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `idx_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Константин','user1@mail.com','$2y$10$cmmfHZPB9w7wn3IalJDJluU4wXa14g3JUSFPCsQQd4jAZzTTjHKdG'),(2,'Павел','user2@mail.com','$2y$10$4VkY.wlBgaASCoG2MwMxbe06OUvMKoFVE3VTl6KO4xIMSZCGBWFji'),(3,'Николай','user3@mail.com','$2y$10$3kyon77/oEvBCOtWjrK2ceHCjhsi2HKW5PlIhElH3KLg/4/T3YW2m');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Продукт 1','Краткое описание продукта 1'),(2,'Продукт 2','Краткое описание продукта 2'),(3,'Продукт 3','Краткое описание продукта 3'),(4,'Продукт 4','Краткое описание продукта 4'),(5,'Продукт 5','Краткое описание продукта 5'),(6,'Продукт 6','Краткое описание продукта 6'),(7,'Продукт 7','Краткое описание продукта 7'),(8,'Продукт 8','Краткое описание продукта 8'),(9,'Продукт 9','Краткое описание продукта 9'),(10,'Продукт 10','Краткое описание продукта 10'),(11,'Продукт 11','Краткое описание продукта 11'),(12,'Продукт 12','Краткое описание продукта 12'),(13,'Продукт 13','Краткое описание продукта 13'),(14,'Продукт 14','Краткое описание продукта 14'),(15,'Продукт 15','Краткое описание продукта 15'),(16,'Продукт 16','Краткое описание продукта 16'),(17,'Продукт 17','Краткое описание продукта 17'),(18,'Продукт 18','Краткое описание продукта 18'),(19,'Продукт 19','Краткое описание продукта 19'),(20,'Продукт 20','Краткое описание продукта 20'),(21,'Продукт 21','Краткое описание продукта 21'),(22,'Продукт 22','Краткое описание продукта 22'),(23,'Продукт 23','Краткое описание продукта 23'),(24,'Продукт 24','Краткое описание продукта 24'),(25,'Продукт 25','Краткое описание продукта 25');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Услуга 1','Краткое описание услуги 1'),(2,'Услуга 2','Краткое описание услуги 2'),(3,'Услуга 3','Краткое описание услуги 3'),(4,'Услуга 4','Краткое описание услуги 4'),(5,'Услуга 5','Краткое описание услуги 5'),(6,'Услуга 6','Краткое описание услуги 6'),(7,'Услуга 7','Краткое описание услуги 7'),(8,'Услуга 8','Краткое описание услуги 8'),(9,'Услуга 9','Краткое описание услуги 9'),(10,'Услуга 10','Краткое описание услуги 10'),(11,'Услуга 11','Краткое описание услуги 11'),(12,'Услуга 12','Краткое описание услуги 12'),(13,'Услуга 13','Краткое описание услуги 13'),(14,'Услуга 14','Краткое описание услуги 14'),(15,'Услуга 15','Краткое описание услуги 15'),(16,'Услуга 16','Краткое описание услуги 16'),(17,'Услуга 17','Краткое описание услуги 17'),(18,'Услуга 18','Краткое описание услуги 18'),(19,'Услуга 19','Краткое описание услуги 19'),(20,'Услуга 20','Краткое описание услуги 20'),(21,'Услуга 21','Краткое описание услуги 21'),(22,'Услуга 22','Краткое описание услуги 22'),(23,'Услуга 23','Краткое описание услуги 23'),(24,'Услуга 24','Краткое описание услуги 24'),(25,'Услуга 25','Краткое описание услуги 25');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `text` text,
  `product_id` int DEFAULT NULL,
  `service_id` int DEFAULT NULL,
  `rating_options` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name_id` (`user_id`),
  KEY `product_id` (`product_id`),
  KEY `service_id` (`service_id`),
  CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `reviews_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`),
  CONSTRAINT `reviews_chk_1` CHECK (((`rating_options` >= 1) and (`rating_options` <= 5)))
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,1,'Отличный товар ! Всё понравилось, быстрая доставка, качественная упаковка!',1,NULL,5),(2,1,'Товар некачественный не понравился, упакован небрежно! Не рекомендую!',2,NULL,1),(3,1,'Товар качественный, но доставка слишком долгая!',3,NULL,3),(4,1,'Всё ок! На высшем уровне!            ',NULL,1,5),(5,1,'Разочарован работой мастера!            ',NULL,2,1),(6,1,'Неплохо сделали ремонт, буду вас рекомендовать!            ',NULL,3,4),(7,2,'Некачественный товар, сломался через 2 дня, пришлось вернуть!            ',1,NULL,2),(8,2,'Отличный товар, пользуюсь уже неделю, очень доволен. Единственное сроки доставки великоваты!            ',2,NULL,4),(9,2,'Ощущения от качества товара фифти фифти, упаковали кое как, благо пришёл быстро!            ',3,NULL,3),(10,2,'Быстро, качественно и бонусом кран подтянул и ванной! Спасибо вам!            ',NULL,1,5),(11,2,'Цена качество явно не соотвтетсвует результату!            ',NULL,2,2),(12,2,'Лучше бы сам сделал!((            ',NULL,3,2),(13,3,'На картинке всё выглядело гораздо лучше!            ',1,NULL,3),(14,3,'Очень доволен качество, в других магазинах такой товар стоит на порядок выше!',2,NULL,5),(15,3,'Расстроился после приобретения. Заявленные характеристики не соответствуют действительности!            ',3,NULL,1),(16,3,' Доволен ремонтом, всё быстро и качественно. Но могли бы и скидку сделать постоянному клиенту!           ',NULL,1,4),(17,3,'Разочарован качеством оказанной услуги!            ',NULL,2,2),(18,3,'Это первый и последний раз когда я к вам обратился! Ужасное обслуживание , никакого сервиса за такие деньги!            ',NULL,3,1),(19,1,'Хренотень какая-то, вернул сразу как получил!            ',15,NULL,1);
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-12  1:12:30
