-- MySQL dump 10.13  Distrib 8.0.30, for macos12 (x86_64)
--
-- Host: 127.0.0.1    Database: hostels
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
-- Table structure for table `Administrator`
--

DROP TABLE IF EXISTS `Administrator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Administrator` (
  `idAdministrator` int NOT NULL,
  `Login` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idAdministrator`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Administrator`
--

LOCK TABLES `Administrator` WRITE;
/*!40000 ALTER TABLE `Administrator` DISABLE KEYS */;
/*!40000 ALTER TABLE `Administrator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Hostels`
--

DROP TABLE IF EXISTS `Hostels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Hostels` (
  `idHostels` int NOT NULL,
  `num_hostel` int DEFAULT NULL,
  `type_hostel` varchar(45) DEFAULT NULL,
  `size` int DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `id_university` int DEFAULT NULL,
  `cost` int DEFAULT NULL,
  `adress` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idHostels`),
  KEY `univ_idx` (`id_university`),
  CONSTRAINT `univ` FOREIGN KEY (`id_university`) REFERENCES `University` (`idUniversity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Hostels`
--

LOCK TABLES `Hostels` WRITE;
/*!40000 ALTER TABLE `Hostels` DISABLE KEYS */;
INSERT INTO `Hostels` VALUES (1,1,'Коридорного',86,'0',1,1500,'вул, Ніжинська 12'),(2,3,'Коридорного',152,'0',1,1500,'вул.Гарматна 51'),(3,4,'Коридорного',140,'Відкрито',1,1500,'вул.Гарматна 53'),(4,5,'Коридорного',144,'Відкрито',1,1500,'вул Борщагівська,193'),(5,6,'Блочна система',176,'Відкрито',1,1500,'вул.Ніжинська,14'),(6,7,'Секційна система\n\n',228,'Відкрито',1,1500,'вул.Ніжинська 29,а'),(7,8,'Секційна система',256,'Відкрито',1,1500,'вул Ніжинська 29, Б'),(8,9,'Секційна система',264,'Відкрито',1,1500,'вул. Ніжинська 29,В'),(9,10,'Блочна система готельного типу',136,'Відкрито',1,1500,'вул.Л.Кумача 7а'),(10,11,'Блочна система',256,'Відкрито',1,1500,'вул.Ніжинська 29 д'),(11,13,'Блочна система',168,'Відкрито',1,1500,'М.Голего, 7-а'),(12,1,'Коридорного',86,'Відкрито',2,1700,'вул. Янгеля, 5'),(13,3,'Коридорного',53,'Відкрито',2,1700,'вул. Янгеля, 22'),(14,4,'Коридорного',143,'Відкрито',2,1700,'вул. Янгеля,7'),(15,5,'Коридорного',193,'Відкрито',2,1700,'вул. Янгеля,34'),(16,6,'Коридорного',111,'Відкрито',2,1700,'вул. Янгеля 18/20'),(17,7,'Коридорного',129,'Відкрито',2,1700,'вул. Металістів, 3'),(18,8,'Коридорного',135,'Відкрито',2,1700,'вул. Олекси Тихого, 6'),(19,9,'Коридорного',53,'Відкрито',2,1700,' вул. Академіка Янгеля 22 .'),(20,10,'Блочна система',150,'Відкрито',2,1700,'вул. Олекси Тихого 2/24'),(21,11,'Коридорного та блочного',85,'Відкрито',2,1700,'вул. Металістів, 4'),(22,12,'Коридорного',175,'Відкрито',2,1700,'вул. Металістів,7.'),(23,13,'Коридорного',100,'Відкрито',2,1700,'вул. Металістів, 8'),(24,14,'Блочна система',53,'Відкрито',2,1700,'пров. Ковальський, 5'),(25,15,'Блочна система',96,'Відкрито',2,1700,'вул. Металістів 5.'),(26,16,'Блочна система',280,'Відкрито',2,1700,'вул. Олекси Тихого 3'),(27,17,'Блочна система',300,'Відкрито',2,1700,'вул. Олекси Тихого, 1'),(28,18,'Блочна система',480,'Відкрито',2,1700,'вул. Борщагівська, 148'),(29,19,'Блочна система',325,'Відкрито',2,1700,'вул. Борщагівська, 146'),(30,20,'Блочна система',375,'Відкрито',2,1700,'вул. Борщагівська, 144'),(31,21,'Сімейного типу ',205,'Відкрито',2,1700,'пров. Ковальський 22а,'),(32,22,'Сімейного типу ',221,'Відкрито',2,1700,'ул. Металістів, 6.'),(33,1,'Коридорного',244,'Відкрито',3,1100,'вул. Желябова, 8'),(34,2,'Коридорного',276,'Відкрито',3,1100,'вул. Дегтярівська, 49а'),(35,3,'Коридорного',175,'Відкрито',3,1100,'вул. Желябова, 4'),(36,4,'Блочна система',356,'Відкрито',3,1100,'вул. Дегтярівська, 49'),(37,5,'Блочна система',346,'Відкрито',3,1100,' пр. Перемоги, 54а'),(38,1,'Коридорного',134,'Відкрито',4,1463,'вул. Герцена, 2'),(39,2,'Коридорного',245,'Відкрито',4,1463,'вул. Литвинського , 70'),(40,3,'Коридорного',289,'Відкрито',4,1463,'вул. Коновальця, 36'),(41,1,'Блочна система',375,'Відкрито',5,2000,'вул. М. Цвєтаєвої, 14-Б'),(42,2,'Блочна система',334,'Відкрито',5,2000,'Харківське шосе, 17'),(43,3,'Блочна система',113,'Відкрито',5,2000,'вул. Дж. Маккейна, 31-А\n'),(44,4,'Коридорного',69,'Відкрито',5,2000,' смт Ворзель, вул. Кленова, 6-А'),(45,1,'Коридорного',368,'Відкрито',6,1920,'Трьохсвятительська, 4-А'),(46,2,'Блочна система',537,'Відкрито',6,1920,'вул. Полковника Шутова 14'),(47,3,'Коридорного',504,'Відкрито',6,1920,'вул Полковника Шутова 14А'),(48,4,'Блочна система',480,'Відкрито',6,1920,'вул. Полковника Шутова 14Б'),(49,5,'Коридорного',400,'Відкрито',6,1920,'вул. Полковника Шутова 14В'),(50,6,'Блочна система',1072,'Відкрито',6,1920,'Бул. Чоколівський 39'),(51,1,'Коридорного',354,'Відкрито',7,1570,'вул. Генерала Родімцева, 1'),(52,2,'Коридорного',351,'Відкрито',7,1570,'вул. Еллана-Блакитного, 10'),(53,3,'Коридорного',156,'Відкрито',7,1570,'вул. Еллана-Блакитного, 4'),(54,4,'Коридорного',265,'Відкрито',7,1570,'вул. Бурмистенка, 4'),(55,5,'Коридорного',145,'Відкрито',7,1570,'вул. Юлії Здановської, 63'),(56,6,'Блочна система',363,'Відкрито',7,1570,'вул. Юлії Здановської, 65'),(57,7,'Блочна система',256,'Відкрито',7,1570,'вул. Ломоносова, 67'),(58,8,'Блочна система',264,'Відкрито',7,1570,'вул. Еллана-Блакитного, 8'),(59,9,'Сімейного типу ',363,'Відкрито',7,1570,'вул. Горіхуватський шлях, 1'),(60,10,'Сімейного типу ',125,'Відкрито',7,1570,'вул. Горіхуватський шлях, 7А'),(61,11,'Блочна система',267,'Відкрито',7,1570,'вул. Горіхуватський шлях, 7Б'),(62,1,'Блочна система',489,'Відкрито',8,2010,' вул. Ломоносова, 35'),(63,2,'Блочна система',515,'Відкрито',8,2010,'вул. Ломоносова 37'),(64,3,'Коридорного',499,'Відкрито',8,2010,'вул. Ломоносова, 41'),(65,4,'Коридорного',476,'Відкрито',8,2010,'вул. Ломоносова, 47'),(66,5,'Блочна система',512,'Відкрито',8,2010,'вул. Ломоносова, 51'),(67,6,'Коридорного',612,'Відкрито',8,2010,'вул. Ломоносова 59'),(68,7,'Коридорного',488,'Відкрито',8,2010,'вул. Ломоносова, 61'),(69,8,'Блочна система',556,'Відкрито',8,2010,'вул. Ломоносова, 55'),(70,9,'Блочна система',565,'Відкрито',8,2010,'вул. Ломоносова, 57'),(71,10,'Блочна система',500,'Відкрито',8,2010,'вул. Ломоносова, 49'),(72,11,'Блочна система',559,'Відкрито',8,2010,'вул. Ломоносова 45'),(73,12,'Блочна система',519,'Відкрито',8,2010,'вул.  Ломоносова, 43'),(74,13,'Блочна система',517,'Відкрито',8,2010,'вул. Ломоносова, 39'),(75,14,'Коридорного',112,'Відкрито',8,2010,'проспект Валерія Лобановського, 3'),(76,15,'Сімейного типу ',606,'Відкрито',8,2010,'вул. Ломоносова, 81'),(77,16,'Блочна система',563,'Відкрито',8,2010,' вул.Сєченова 6'),(78,17,'Блочна система',600,'Відкрито',8,2010,'вул.Сєченова, 6а'),(79,18,'Коридорного',338,'Відкрито',8,2010,' вул. Єреванська, 14д'),(80,19,'Сімейного типу ',456,'Відкрито',8,2010,'вул.Васильківська, 94'),(81,20,'Блочна система',481,'Відкрито',8,2010,'вул. Юрія Іллєнка, 36'),(82,22,'Блочна система',276,'Відкрито',8,2010,'вул. Літня, 25'),(83,23,'Блочна система',193,'Відкрито',8,2010,'вул. Євгенії Мірошниченко, 5'),(84,24,'Блочна система',476,'Відкрито',8,2010,'вул. Юрія Іллєнка, 36/1');
/*!40000 ALTER TABLE `Hostels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pays`
--

DROP TABLE IF EXISTS `Pays`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Pays` (
  `idPays` int NOT NULL,
  `id_Student` int DEFAULT NULL,
  `cost` varchar(45) DEFAULT NULL,
  `date_pay` date DEFAULT NULL,
  PRIMARY KEY (`idPays`),
  KEY `idstudent_idx` (`id_Student`),
  CONSTRAINT `idstudent` FOREIGN KEY (`id_Student`) REFERENCES `Student` (`idStudent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pays`
--

LOCK TABLES `Pays` WRITE;
/*!40000 ALTER TABLE `Pays` DISABLE KEYS */;
INSERT INTO `Pays` VALUES (1,1,'4567','2023-02-12'),(2,2,'1550','2021-10-03'),(3,3,'2000','2022-03-12');
/*!40000 ALTER TABLE `Pays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room` (
  `idroom` int NOT NULL,
  `id_Hostels` int DEFAULT NULL,
  `size_room` int DEFAULT NULL,
  `num_room` int DEFAULT NULL,
  PRIMARY KEY (`idroom`),
  KEY `idhostel_idx` (`id_Hostels`),
  CONSTRAINT `idhostel` FOREIGN KEY (`id_Hostels`) REFERENCES `Hostels` (`idHostels`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` VALUES (1,13,3,254),(2,22,4,24),(3,11,3,245);
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Student`
--

DROP TABLE IF EXISTS `Student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Student` (
  `idStudent` int NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Surname` varchar(45) DEFAULT NULL,
  `Fathername` varchar(45) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `tel_num` varchar(45) DEFAULT NULL,
  `med_paper` varchar(45) DEFAULT NULL,
  `addres` varchar(100) DEFAULT NULL,
  `Father_name` varchar(45) DEFAULT NULL,
  `Father_tel` int DEFAULT NULL,
  `Mother_name` varchar(45) DEFAULT NULL,
  `Mother_tel` int DEFAULT NULL,
  `id_Unuversity` int DEFAULT NULL,
  `id_Hostel` int DEFAULT NULL,
  `Course` varchar(45) DEFAULT NULL,
  `faculty` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idStudent`),
  KEY `univid_idx` (`id_Unuversity`),
  KEY `hostelid_idx` (`id_Hostel`),
  CONSTRAINT `hostelid` FOREIGN KEY (`id_Hostel`) REFERENCES `Hostels` (`idHostels`),
  CONSTRAINT `univid` FOREIGN KEY (`id_Unuversity`) REFERENCES `University` (`idUniversity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Student`
--

LOCK TABLES `Student` WRITE;
/*!40000 ALTER TABLE `Student` DISABLE KEYS */;
INSERT INTO `Student` VALUES (1,'Влад','Усатюк','Сергійович','2001-10-10','380967515755','53493-2','київ','Усатюк',943245123,'Усатюк',2562,1,10,'4','ФКПІ'),(2,'Данило','Рибак','Олександрович','2002-04-20','380923241355','43535-2','київ','Рибак ',380981341,'Рибак',56256,2,4,'2','ФІОТ'),(3,'Олександр','Насон','Володимирович','2001-02-28','380915326284','34563-2','київ','Насон',35325235,'Насон',253626,8,80,'3','ФІТ');
/*!40000 ALTER TABLE `Student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `University`
--

DROP TABLE IF EXISTS `University`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `University` (
  `idUniversity` int NOT NULL,
  `name` varchar(70) DEFAULT NULL,
  `id_hostels` int DEFAULT NULL,
  PRIMARY KEY (`idUniversity`),
  KEY `idhost_idx` (`id_hostels`),
  CONSTRAINT `idhost` FOREIGN KEY (`id_hostels`) REFERENCES `Hostels` (`idHostels`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `University`
--

LOCK TABLES `University` WRITE;
/*!40000 ALTER TABLE `University` DISABLE KEYS */;
INSERT INTO `University` VALUES (1,'Національний авіацій університет',NULL),(2,'КПІ ім. Ігоря Сікорського',NULL),(3,'Київський національний економічний університет',NULL),(4,'Київський національний університет культури і мистецтв',NULL),(5,'Національний університет «Києво-Могилянська академія»',NULL),(6,'Національний медичний університет',NULL),(7,'Національний університет біоресурсів і природокористування ',NULL),(8,'Київський національний університет імені Тараса Шевченка',NULL);
/*!40000 ALTER TABLE `University` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'hostels'
--

--
-- Dumping routines for database 'hostels'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-08 10:49:30
