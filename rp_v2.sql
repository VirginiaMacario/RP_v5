-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: rp_v2
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos` (
  `codalum` int(11) NOT NULL AUTO_INCREMENT,
  `dnia` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `nombrea` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidoa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codpad` int(11) NOT NULL,
  `fecha_naci` date NOT NULL,
  `genero` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `grupo_san` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `codclase` int(11) NOT NULL,
  `codsec` int(11) NOT NULL,
  `codgra` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usualu` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fechare` date NOT NULL,
  `estado` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `codasig` int(11) NOT NULL,
  PRIMARY KEY (`codalum`),
  KEY `codpad` (`codpad`),
  KEY `codclase` (`codclase`),
  KEY `codsec` (`codsec`),
  KEY `codgra` (`codgra`),
  KEY `alumnos_ibfk_5` (`codasig`),
  CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`codpad`) REFERENCES `padres` (`codpad`),
  CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`codclase`) REFERENCES `clase` (`codclase`),
  CONSTRAINT `alumnos_ibfk_3` FOREIGN KEY (`codsec`) REFERENCES `seccion` (`codsec`),
  CONSTRAINT `alumnos_ibfk_4` FOREIGN KEY (`codgra`) REFERENCES `grado` (`codgra`),
  CONSTRAINT `alumnos_ibfk_5` FOREIGN KEY (`codasig`) REFERENCES `asignacion` (`codasig`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (1,'75534334','Dylan','Rodrigo',2,'2018-01-24','Masculino','O+','el indio castilla','Perú',1,1,1,'002-actor.png','dylan22','$2y$10$MTX5rF7MV.cCGhvfetxXo.vGth6WCzc.WYtqyMCZZWXtQhiYSkRUC','Alumnos','2021-01-27','1','2022-05-26 04:56:24',1),(2,'75534343','Jordan','Roke Seminario',1,'2001-01-11','Masculino','O-','el indio castilla','Ecuador',2,2,2,'005-ninja.png','jjroker22','$2y$10$guuk4nBcYbeAnovZq7Nmi.b288KtMSguNCJvqUmCxrtOKq7G568yy','Alumnos','2021-01-27','1','2022-05-26 04:56:27',1),(13,'','kan','Hernández',1,'2022-05-25','Masculino','','Manzana i, Lote 2, Col los Celajes Zona 4, Santa Cruz del Quiche, El Quiché','',2,1,1,'blog_thumb_productos-mas-vendidos-en-internet_670x419.webp','kan@gmail.com','','','2022-05-26','1','2022-05-26 05:03:31',3),(14,'','kan','Hernández',1,'2022-05-25','Masculino','','Manzana i, Lote 2, Col los Celajes Zona 4, Santa Cruz del Quiche, El Quiché','',1,1,1,'Captura de pantalla 2021-11-12 192458.png','kan@gmail.com','','','2022-05-26','1','2022-05-26 05:29:05',1),(15,'','kan','Hernández',1,'2022-05-25','Femenino','','Manzana i, Lote 2, Col los Celajes Zona 4, Santa Cruz del Quiche, El Quiché','',2,2,1,'Captura de pantalla 2021-11-12 194228.png','asd@gmail.com','','','2022-05-26','1','2022-05-26 05:31:52',2);
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anoaca`
--

DROP TABLE IF EXISTS `anoaca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anoaca` (
  `codano` int(11) NOT NULL AUTO_INCREMENT,
  `nomano` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`codano`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anoaca`
--

LOCK TABLES `anoaca` WRITE;
/*!40000 ALTER TABLE `anoaca` DISABLE KEYS */;
INSERT INTO `anoaca` VALUES (1,'2021','Año 2021 ','2021-01-27 22:14:13'),(2,'2022','Año 2022','2021-01-28 10:29:09');
/*!40000 ALTER TABLE `anoaca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asignacion`
--

DROP TABLE IF EXISTS `asignacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asignacion` (
  `codasig` int(11) NOT NULL AUTO_INCREMENT,
  `tituloa` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fechaini` date NOT NULL,
  `fecha_limite` time NOT NULL,
  `coddoce` int(11) NOT NULL,
  `codclase` int(11) NOT NULL,
  `codsec` int(11) NOT NULL,
  `archiv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `horaini` time NOT NULL,
  PRIMARY KEY (`codasig`),
  KEY `coddoce` (`coddoce`),
  KEY `codclase` (`codclase`),
  KEY `codsec` (`codsec`),
  CONSTRAINT `asignacion_ibfk_1` FOREIGN KEY (`coddoce`) REFERENCES `docente` (`coddoce`),
  CONSTRAINT `asignacion_ibfk_2` FOREIGN KEY (`codclase`) REFERENCES `clase` (`codclase`),
  CONSTRAINT `asignacion_ibfk_3` FOREIGN KEY (`codsec`) REFERENCES `seccion` (`codsec`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignacion`
--

LOCK TABLES `asignacion` WRITE;
/*!40000 ALTER TABLE `asignacion` DISABLE KEYS */;
INSERT INTO `asignacion` VALUES (1,'Tarea º1','2021-01-27','00:00:00',1,1,1,'doc(5).pdf','1','2021-01-27 22:35:20','00:00:00'),(2,'Tarea º2','2021-01-27','00:00:00',2,2,2,'doc(5).pdf','1','2021-01-27 22:35:42','00:00:00'),(3,'Bienvenida','2022-05-25','06:08:00',1,2,2,NULL,'1','2022-05-25 06:05:38','00:00:00'),(4,'Hola','2022-05-25','06:12:00',2,1,1,NULL,'1','2022-05-25 06:06:33','00:00:00'),(5,'Prueba','2022-05-25','04:14:00',1,2,1,NULL,'1','2022-05-25 06:09:39','00:00:00'),(6,'1','2022-05-25','06:19:00',1,1,1,NULL,'1','2022-05-25 06:13:29','00:00:00'),(7,'6','2022-05-25','07:20:00',1,1,2,NULL,'1','2022-05-25 06:14:54','00:00:00'),(9,'txtarch','2022-05-25','06:28:00',1,2,1,'04:26','1','2022-05-25 06:22:35','00:00:00'),(10,'final','2022-05-25','06:36:00',2,2,1,NULL,'1','2022-05-25 06:36:08','00:00:00'),(11,'FIinal si','2022-05-25','05:37:00',2,2,1,NULL,'1','2022-05-25 06:37:25','00:37:00');
/*!40000 ALTER TABLE `asignacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asisalum`
--

DROP TABLE IF EXISTS `asisalum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asisalum` (
  `codasis` int(11) NOT NULL AUTO_INCREMENT,
  `codalum` int(11) NOT NULL,
  `presen` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fechare` date NOT NULL,
  PRIMARY KEY (`codasis`),
  KEY `codalum` (`codalum`),
  CONSTRAINT `asisalum_ibfk_1` FOREIGN KEY (`codalum`) REFERENCES `alumnos` (`codalum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asisalum`
--

LOCK TABLES `asisalum` WRITE;
/*!40000 ALTER TABLE `asisalum` DISABLE KEYS */;
/*!40000 ALTER TABLE `asisalum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asisdoc`
--

DROP TABLE IF EXISTS `asisdoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asisdoc` (
  `codasidoc` int(11) NOT NULL AUTO_INCREMENT,
  `coddoce` int(11) NOT NULL,
  `presen` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fechare` date NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`codasidoc`),
  KEY `coddoce` (`coddoce`),
  CONSTRAINT `asisdoc_ibfk_1` FOREIGN KEY (`coddoce`) REFERENCES `docente` (`coddoce`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asisdoc`
--

LOCK TABLES `asisdoc` WRITE;
/*!40000 ALTER TABLE `asisdoc` DISABLE KEYS */;
INSERT INTO `asisdoc` VALUES (1,1,'Presente','2021-01-27','2021-01-26 23:00:00'),(2,2,'Presente','2021-01-27','2021-01-26 23:00:00');
/*!40000 ALTER TABLE `asisdoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bus`
--

DROP TABLE IF EXISTS `bus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bus` (
  `codbus` int(11) NOT NULL AUTO_INCREMENT,
  `nombrcon` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `apecon` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `dnicon` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `direcc` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `celular` char(9) COLLATE utf8_unicode_ci NOT NULL,
  `fijo` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tiposan` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `placa` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `ruta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hentr` time NOT NULL,
  `hsali` time NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechare` date NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`codbus`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bus`
--

LOCK TABLES `bus` WRITE;
/*!40000 ALTER TABLE `bus` DISABLE KEYS */;
INSERT INTO `bus` VALUES (1,'Piero Aldair','Rosales Ramires','75435435','el indio','999988887','452322','pieroalda@gmailcom','Masculino','O+','041-teacher.png','ASE-434','NISSAN','NISSAN FIULUX','Amarillo','hasta la bolognesi','08:30:00','12:30:00','buse.png','2021-01-28','2021-01-28 18:47:40');
/*!40000 ALTER TABLE `bus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cali`
--

DROP TABLE IF EXISTS `cali`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cali` (
  `codcali` int(11) NOT NULL AUTO_INCREMENT,
  `codano` int(11) NOT NULL,
  `codper` int(11) NOT NULL,
  `coddoce` int(11) NOT NULL,
  `codclase` int(11) NOT NULL,
  `codsec` int(11) NOT NULL,
  `codalum` int(11) NOT NULL,
  `praccali` decimal(10,1) NOT NULL,
  `examparc` decimal(10,1) NOT NULL,
  `indiv` decimal(10,1) NOT NULL,
  `fechare` date NOT NULL,
  PRIMARY KEY (`codcali`),
  KEY `codano` (`codano`),
  KEY `codper` (`codper`),
  KEY `coddoce` (`coddoce`),
  KEY `codclase` (`codclase`),
  KEY `codsec` (`codsec`),
  KEY `codalum` (`codalum`),
  CONSTRAINT `cali_ibfk_1` FOREIGN KEY (`codano`) REFERENCES `anoaca` (`codano`),
  CONSTRAINT `cali_ibfk_2` FOREIGN KEY (`codper`) REFERENCES `periodo` (`codper`),
  CONSTRAINT `cali_ibfk_3` FOREIGN KEY (`coddoce`) REFERENCES `docente` (`coddoce`),
  CONSTRAINT `cali_ibfk_4` FOREIGN KEY (`codclase`) REFERENCES `clase` (`codclase`),
  CONSTRAINT `cali_ibfk_5` FOREIGN KEY (`codsec`) REFERENCES `seccion` (`codsec`),
  CONSTRAINT `cali_ibfk_6` FOREIGN KEY (`codalum`) REFERENCES `alumnos` (`codalum`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cali`
--

LOCK TABLES `cali` WRITE;
/*!40000 ALTER TABLE `cali` DISABLE KEYS */;
INSERT INTO `cali` VALUES (1,1,1,1,1,1,1,12.0,12.0,12.0,'2021-01-28'),(2,1,2,1,1,1,1,11.0,10.0,11.5,'2021-01-28'),(3,1,4,1,1,1,1,10.0,11.0,11.0,'2021-01-28'),(4,1,1,2,2,2,2,8.0,8.0,11.0,'2021-01-28'),(5,1,2,2,2,2,2,10.0,10.0,11.0,'2021-01-28'),(6,1,4,2,2,2,2,14.0,15.0,16.0,'2021-01-28');
/*!40000 ALTER TABLE `cali` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clase`
--

DROP TABLE IF EXISTS `clase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clase` (
  `codclase` int(11) NOT NULL AUTO_INCREMENT,
  `nomclase` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `coddoce` int(11) DEFAULT NULL,
  `codgra` int(11) DEFAULT NULL,
  `codano` int(11) DEFAULT NULL,
  `tipo` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`codclase`),
  KEY `coddoce` (`coddoce`),
  KEY `codgra` (`codgra`),
  KEY `codano` (`codano`),
  CONSTRAINT `clase_ibfk_1` FOREIGN KEY (`coddoce`) REFERENCES `docente` (`coddoce`),
  CONSTRAINT `clase_ibfk_2` FOREIGN KEY (`codgra`) REFERENCES `grado` (`codgra`),
  CONSTRAINT `clase_ibfk_3` FOREIGN KEY (`codano`) REFERENCES `anoaca` (`codano`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clase`
--

LOCK TABLES `clase` WRITE;
/*!40000 ALTER TABLE `clase` DISABLE KEYS */;
INSERT INTO `clase` VALUES (1,'Matemática',1,1,1,'Obligatorio','es obligatorio','2021-01-27 22:31:30'),(2,'Comunicación',2,2,1,'Opcional','Esto es opcional','2021-01-27 22:31:52'),(6,'Tecnologia',1,1,1,'','asd','2022-05-25 06:57:31'),(7,'Redes',1,1,1,'','Redes basicas','2022-05-25 07:02:16');
/*!40000 ALTER TABLE `clase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configge`
--

DROP TABLE IF EXISTS `configge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configge` (
  `codconf` int(11) NOT NULL AUTO_INCREMENT,
  `nombc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sitio` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `telefo` char(9) COLLATE utf8_unicode_ci NOT NULL,
  `direcc` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`codconf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configge`
--

LOCK TABLES `configge` WRITE;
/*!40000 ALTER TABLE `configge` DISABLE KEYS */;
INSERT INTO `configge` VALUES (1,'Ricardo Palma','ricardopalma@riki.edu.pe','www.ricardopalma.edu.pe','998787676','Piura','Perú','Castilla','2021-03-27 13:37:27');
/*!40000 ALTER TABLE `configge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docente`
--

DROP TABLE IF EXISTS `docente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `docente` (
  `coddoce` int(11) NOT NULL AUTO_INCREMENT,
  `dnido` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `nomprof` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `apeprof` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fech_naci` date NOT NULL,
  `sex` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `telef` char(9) COLLATE utf8_unicode_ci NOT NULL,
  `direc` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `dia_ing` date NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomusu` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `passw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`coddoce`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docente`
--

LOCK TABLES `docente` WRITE;
/*!40000 ALTER TABLE `docente` DISABLE KEYS */;
INSERT INTO `docente` VALUES (1,'74545645','Miguel Angel','Rosales Requena','1993-01-06','Masculino','rosarequ@gmail.com','987757567','el indio castilla','2021-01-27','453375.jpg','rosareque','$2y$10$IJdTNHY5uDmdBsK3ICschOgbBkNeox5Sng5NMck3PkuKY8WOE6RV2','1','Profesor','2022-05-25 09:32:31'),(2,'74435345','Yovani Ursula','Torres Guerrero','1993-01-20','Femenino','urusu@gmail.com','976645464','el indio castilla','2021-01-27','595215.jpg','ursuro','$2y$10$qAeebQc7SOwfepy2OoXZve40l7Ci9O7flD71hGML2Ng3kGFLhLQ22','1','Profesor','2021-01-27 22:23:46'),(3,'','kan','Hernández','2022-05-25','Masculino','kankehs06@gmail.com','42268737','Manzana i, Lote 2, Col los Celajes Zona 4, Santa Cruz del Quiche, El Quiché','2022-05-25','632826.png','kan','','1','','2022-05-25 18:27:17');
/*!40000 ALTER TABLE `docente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `hini` time NOT NULL,
  `hfinal` time NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `color` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'fsdfsd','08:30:00','12:30:00','2021-01-21 00:00:00','2021-01-22 00:00:00','#40E0D0'),(2,'Tarea','08:15:00','16:30:00','2021-03-31 00:00:00','2021-04-01 00:00:00','#008000');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grado`
--

DROP TABLE IF EXISTS `grado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grado` (
  `codgra` int(11) NOT NULL AUTO_INCREMENT,
  `nomgra` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`codgra`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grado`
--

LOCK TABLES `grado` WRITE;
/*!40000 ALTER TABLE `grado` DISABLE KEYS */;
INSERT INTO `grado` VALUES (1,'Primer grado','2021-01-27 22:19:19'),(2,'Segundo grado','2021-01-27 22:19:28'),(3,'Tercer grado','2021-01-27 22:19:37'),(4,'Cuarto grado','2021-01-27 22:19:50'),(5,'Quinto grado','2021-01-27 22:19:58'),(6,'Sexto grado','2021-01-27 22:20:07');
/*!40000 ALTER TABLE `grado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libro`
--

DROP TABLE IF EXISTS `libro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libro` (
  `codlibro` int(11) NOT NULL AUTO_INCREMENT,
  `codigol` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `titu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `canti` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `subt` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `aut` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `archi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anopu` date NOT NULL,
  `edito` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `idiom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `pagi` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `pes` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `codgra` int(11) NOT NULL,
  `esta` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fecreg` date NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`codlibro`),
  KEY `codgra` (`codgra`),
  CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`codgra`) REFERENCES `grado` (`codgra`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libro`
--

LOCK TABLES `libro` WRITE;
/*!40000 ALTER TABLE `libro` DISABLE KEYS */;
INSERT INTO `libro` VALUES (1,'0B439','la caperucita','20','la caperucita y el lobo','el admin','uno.jpg','MatCP_FichaPreInscripcionCP(1).pdf','1977-01-06','corefo','Español','22','22MB',1,'Disponible','2021-01-27','2021-01-27 22:41:14');
/*!40000 ALTER TABLE `libro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mainlogin`
--

DROP TABLE IF EXISTS `mainlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mainlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mainlogin`
--

LOCK TABLES `mainlogin` WRITE;
/*!40000 ALTER TABLE `mainlogin` DISABLE KEYS */;
INSERT INTO `mainlogin` VALUES (1,'admin','admin@gmail.com','12345678','admin','2021-01-27 21:10:35');
/*!40000 ALTER TABLE `mainlogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensaje`
--

DROP TABLE IF EXISTS `mensaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensaje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `men` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codalum` int(11) NOT NULL,
  `coddoce` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensaje`
--

LOCK TABLES `mensaje` WRITE;
/*!40000 ALTER TABLE `mensaje` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `padres`
--

DROP TABLE IF EXISTS `padres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `padres` (
  `codpad` int(11) NOT NULL AUTO_INCREMENT,
  `dni` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `nompadr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apepa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `propa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `telef` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `celular` char(9) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `direcc` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `usuaP` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`codpad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `padres`
--

LOCK TABLES `padres` WRITE;
/*!40000 ALTER TABLE `padres` DISABLE KEYS */;
INSERT INTO `padres` VALUES (1,'75432432','Robin','Roque Yarleke','Mecánico','rokerobin@gmail.com','422121','966745645','Masculino','el indio castilla','294682.png','1','Padre','robinro','$2y$10$3AsxOGPIof7mRjInfx5rtehh4l1yhO6GkFtMQnw2hgAyBkfFnHxpe','2021-01-27 22:28:00'),(2,'74345433','Victoria','Roke Yarleke','Sistemas','vicky@gmail.com','465646','965767656','Femenino','el indio castilla','327914.png','1','Padre','vickyroe','$2y$10$VvHjAx5W6NwfZdZwPbP/EecLS/9L4pca5CWshED0evKgC5Q54kFMW','2021-01-27 22:29:21');
/*!40000 ALTER TABLE `padres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodo`
--

DROP TABLE IF EXISTS `periodo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodo` (
  `codper` int(11) NOT NULL AUTO_INCREMENT,
  `nompe` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`codper`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodo`
--

LOCK TABLES `periodo` WRITE;
/*!40000 ALTER TABLE `periodo` DISABLE KEYS */;
INSERT INTO `periodo` VALUES (1,'Bimestre 1','2021-01-27 23:51:58'),(2,'Bimestre 2','2021-01-27 23:52:33'),(4,'Bimestre 3','2021-01-28 00:01:51');
/*!40000 ALTER TABLE `periodo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan`
--

DROP TABLE IF EXISTS `plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan` (
  `codplane` int(11) NOT NULL AUTO_INCREMENT,
  `titu` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `descrp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codclase` int(11) NOT NULL,
  `archi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`codplane`),
  KEY `codclase` (`codclase`),
  CONSTRAINT `plan_ibfk_1` FOREIGN KEY (`codclase`) REFERENCES `clase` (`codclase`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan`
--

LOCK TABLES `plan` WRITE;
/*!40000 ALTER TABLE `plan` DISABLE KEYS */;
INSERT INTO `plan` VALUES (1,'Plan de matemáticas','este es un plan',1,'MatCP_FichaPreInscripcionCP(1).pdf','1','2021-01-27 22:34:15'),(2,'Plan de comunicacón','este es el plan de comunicación',2,'Bol202012_2020122218094930000602920001.pdf','1','2021-01-27 22:34:43');
/*!40000 ALTER TABLE `plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pres`
--

DROP TABLE IF EXISTS `pres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pres` (
  `codpres` int(11) NOT NULL AUTO_INCREMENT,
  `codlibro` int(11) NOT NULL,
  `codalum` int(11) NOT NULL,
  `finicio` date NOT NULL,
  `ffinal` date NOT NULL,
  `estado` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `can` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `fere` date NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`codpres`),
  KEY `codlibro` (`codlibro`),
  KEY `codalum` (`codalum`),
  CONSTRAINT `pres_ibfk_1` FOREIGN KEY (`codlibro`) REFERENCES `libro` (`codlibro`),
  CONSTRAINT `pres_ibfk_2` FOREIGN KEY (`codalum`) REFERENCES `alumnos` (`codalum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pres`
--

LOCK TABLES `pres` WRITE;
/*!40000 ALTER TABLE `pres` DISABLE KEYS */;
/*!40000 ALTER TABLE `pres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seccion`
--

DROP TABLE IF EXISTS `seccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seccion` (
  `codsec` int(11) NOT NULL AUTO_INCREMENT,
  `nomsec` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `codclase` int(11) NOT NULL,
  `coddoce` int(11) NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ubicacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `codasig` int(11) NOT NULL,
  PRIMARY KEY (`codsec`),
  KEY `codclase` (`codclase`),
  KEY `coddoce` (`coddoce`),
  KEY `seccion_ibfk_3` (`codasig`),
  CONSTRAINT `seccion_ibfk_1` FOREIGN KEY (`codclase`) REFERENCES `clase` (`codclase`),
  CONSTRAINT `seccion_ibfk_2` FOREIGN KEY (`coddoce`) REFERENCES `docente` (`coddoce`),
  CONSTRAINT `seccion_ibfk_3` FOREIGN KEY (`codasig`) REFERENCES `asignacion` (`codasig`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seccion`
--

LOCK TABLES `seccion` WRITE;
/*!40000 ALTER TABLE `seccion` DISABLE KEYS */;
INSERT INTO `seccion` VALUES (1,'Salón 1 ','15',1,1,'2022-05-26 05:14:28','Guatemala','1',1),(2,'B','15',2,2,'2022-05-26 05:31:01','','1',2),(4,'Salon 3','50',1,1,'2022-05-26 05:14:36','Quiche','1',1);
/*!40000 ALTER TABLE `seccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tema`
--

DROP TABLE IF EXISTS `tema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tema` (
  `codtem` int(11) NOT NULL AUTO_INCREMENT,
  `nomtema` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `codclase` int(11) NOT NULL,
  `coddoce` int(11) NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`codtem`),
  KEY `codclase` (`codclase`),
  KEY `coddoce` (`coddoce`),
  CONSTRAINT `tema_ibfk_1` FOREIGN KEY (`codclase`) REFERENCES `clase` (`codclase`),
  CONSTRAINT `tema_ibfk_2` FOREIGN KEY (`coddoce`) REFERENCES `docente` (`coddoce`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tema`
--

LOCK TABLES `tema` WRITE;
/*!40000 ALTER TABLE `tema` DISABLE KEYS */;
INSERT INTO `tema` VALUES (1,'Suma y resta',1,1,'2021-01-27 22:33:15'),(2,'La oración',2,2,'2021-01-27 22:33:29');
/*!40000 ALTER TABLE `tema` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-25 23:53:33
