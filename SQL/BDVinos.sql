-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: vinos
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `beadmin`
--

DROP TABLE IF EXISTS `beadmin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(300) DEFAULT NULL,
  `inicio` varchar(200) DEFAULT NULL,
  `quienesSomos` varchar(200) DEFAULT NULL,
  `nuestrosP` varchar(200) DEFAULT NULL,
  `contacto` varchar(200) DEFAULT NULL,
  `registro` varchar(200) DEFAULT NULL,
  `ingresar` varchar(200) DEFAULT NULL,
  `imgFondo` varchar(300) DEFAULT NULL,
  `footer` varchar(1000) DEFAULT NULL,
  `face` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beadmin`
--

LOCK TABLES `beadmin` WRITE;
/*!40000 ALTER TABLE `beadmin` DISABLE KEYS */;
INSERT INTO `beadmin` VALUES (1,'logo_vino.gif','Inicio','QuiÃ©nes somos?','Nuestros Productos','Contacto','Registro','Ingresar','fondo_vino_index.jpg','Jorge Omar Lezano - Representante de la Bodega y ViÃ±edos Familia CecchÃ­n. Telefono: 0294-154519915. San Carlos de Bariloche, RÃ­o Negro, Argentina.','https://www.facebook.com/facu.sautu');
/*!40000 ALTER TABLE `beadmin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `becontacto`
--

DROP TABLE IF EXISTS `becontacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `becontacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tituloCon` varchar(200) DEFAULT NULL,
  `subtituloCon` varchar(400) DEFAULT NULL,
  `nombreCon` varchar(150) DEFAULT NULL,
  `emailCon` varchar(150) DEFAULT NULL,
  `telefonoCon` varchar(150) DEFAULT NULL,
  `empresaCon` varchar(150) DEFAULT NULL,
  `mensajeCon` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `becontacto`
--

LOCK TABLES `becontacto` WRITE;
/*!40000 ALTER TABLE `becontacto` DISABLE KEYS */;
INSERT INTO `becontacto` VALUES (1,'Contacto','Escriba sus datos y dejenos su consulta. En la brevedad nos comunicaremos con usted!!','NOMBRE:','E-MAIL:','TELÃ‰FONO:','EMPRESA:','MENSAJE:');
/*!40000 ALTER TABLE `becontacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beingreso`
--

DROP TABLE IF EXISTS `beingreso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beingreso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tituloIng` varchar(200) DEFAULT NULL,
  `emailIng` varchar(150) DEFAULT NULL,
  `PHemailIng` varchar(200) DEFAULT NULL,
  `passIng` varchar(150) DEFAULT NULL,
  `PHpassIng` varchar(200) DEFAULT NULL,
  `regIng` varchar(300) DEFAULT NULL,
  `txtBtnIng` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beingreso`
--

LOCK TABLES `beingreso` WRITE;
/*!40000 ALTER TABLE `beingreso` DISABLE KEYS */;
INSERT INTO `beingreso` VALUES (1,'Ingrese con una cuenta registrada','E-Mail','vinicultores@gmail.com','ContraseÃ±a','Escriba contraseÃ±a','AÃºn no estoy registrado...','Ingresar');
/*!40000 ALTER TABLE `beingreso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beinicio`
--

DROP TABLE IF EXISTS `beinicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beinicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgCar1` varchar(300) DEFAULT NULL,
  `imgCar2` varchar(300) DEFAULT NULL,
  `imgCar3` varchar(300) DEFAULT NULL,
  `txtCar1` varchar(400) DEFAULT NULL,
  `txtCar2` varchar(400) DEFAULT NULL,
  `txtCar3` varchar(400) DEFAULT NULL,
  `tituloTxtPrin` varchar(200) DEFAULT NULL,
  `txtPrincipal` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beinicio`
--

LOCK TABLES `beinicio` WRITE;
/*!40000 ALTER TABLE `beinicio` DISABLE KEYS */;
INSERT INTO `beinicio` VALUES (1,'vinos_car3.jpg','cecchin_car.jpg','vinos_car4.jpg','Para disfrutar en todo momento','Una experiencia innolvidable','Gran selecciÃ³n de vinos en nuestra cava','La excelencia en vinos','Concebimos nuestro vino orgÃ¡nico y natural con las vides que conviven rodeadas de hierbas y todo tipo de  frutales, bajo el estricto control de mantener el equilibrio ecolÃ³gico, siendo la propia Naturaleza quien provee la protecciÃ³n de las enfermedades que podrÃ­an ocasionarse en\r\nnuestras plantaciones, gracias a lo cual no utilizamos ningÃºn tipo de quÃ­micos sobre el suelo o las plantas que nos regalan sus frutos en estado natural, para\r\nlograr NUESTRO REAL VINO ORGÃNICO, cumpliendo todos los estÃ¡ndares que las normas internacionales\r\nexigen.  Siendo calificados con el tÃ­tulo de AGRICULTORES ARTISTAS ARTESANOS, lo que nos acredita y permite llevar un verdadero VINO ORGÃNICO desde nuestras viÃ±as a su boca, sin los agregados\r\nen la botella que limitarÃ­a nuestra calificaciÃ³n Internacional.');
/*!40000 ALTER TABLE `beinicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `benuestrosp`
--

DROP TABLE IF EXISTS `benuestrosp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `benuestrosp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tituloNP` varchar(200) DEFAULT NULL,
  `subtituloNP` varchar(400) DEFAULT NULL,
  `txtExp` varchar(5000) DEFAULT NULL,
  `titVar` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `benuestrosp`
--

LOCK TABLES `benuestrosp` WRITE;
/*!40000 ALTER TABLE `benuestrosp` DISABLE KEYS */;
INSERT INTO `benuestrosp` VALUES (1,'Nuestros Productos','Familia Cecchin y Raices','Cosechamos los frutos en el tiempo y espacio preciso,\r\nadecuando asÃ­, nuestro proceso de producciÃ³n y \r\nelaboraciÃ³n natural acompaÃ±ando al medioambiente,\r\nsosteniendo siempre el no uso de agroquÃ­micos en el suelo\r\ny la viÃ±a, ni quÃ­micos en la botella para asÃ­ poder acercar el \r\nproducto a las mesas con todas sus propiedades orgÃ¡nicas intactas.\r\nVinos, aceites y jugos de uva, son trabajados con la misma filosofÃ­a\r\nque desde hace mÃ¡s de 100 aÃ±os, Santiago y MarÃ­a supieron transmitir\r\ncultivando este modo de generar verdaderos productos orgÃ¡nicos.','Nuestros Varietales');
/*!40000 ALTER TABLE `benuestrosp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bequieness`
--

DROP TABLE IF EXISTS `bequieness`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bequieness` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tituloQS` varchar(200) DEFAULT NULL,
  `subtituloQS` varchar(400) DEFAULT NULL,
  `txtPrincipalQS` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bequieness`
--

LOCK TABLES `bequieness` WRITE;
/*!40000 ALTER TABLE `bequieness` DISABLE KEYS */;
INSERT INTO `bequieness` VALUES (1,'Â¿Quienes Somos?','Nuestra Historia','Cargando sÃ³lo sus sueÃ±os y una aventura por descubrir, \r\nSantiago Cecchin y MarÃ­a pisan suelo argentino allÃ¡\r\npor 1910, dejando atrÃ¡s su tierra natal. Con claridad\r\ntransmitieron su amor por la madre tierra, a quien se\r\ndebÃ­a preservar con pasiÃ³n y cariÃ±o artesanal. AllÃ¡ por 1959\r\nDon Pedro y Jorge Cecchin abrazan esta tradiciÃ³n familiar,\r\nâ€‹apuntalando aquel sueÃ±o con sus productos naturales,\r\nrespetando el encanto por la vida natural y protegiendo a\r\nâ€œla madre de todos los frutosâ€. Hoy, Alberto Cecchin consolida\r\nmÃ¡s de 100 aÃ±os de productos artesanales libres de agregados quÃ­micos\r\ny nos invita a soÃ±ar un lugar mejor, a vivir el paisaje, a disfrutar\r\nesta casa, a apasionarse por el mundo orgÃ¡nico, un mundoâ€¦ para todos.');
/*!40000 ALTER TABLE `bequieness` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beregistro`
--

DROP TABLE IF EXISTS `beregistro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beregistro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tituloReg` varchar(400) DEFAULT NULL,
  `nombreReg` varchar(150) DEFAULT NULL,
  `PHnombreReg` varchar(200) DEFAULT NULL,
  `apellidoReg` varchar(150) DEFAULT NULL,
  `PHapellidoReg` varchar(200) DEFAULT NULL,
  `telefonoReg` varchar(150) DEFAULT NULL,
  `PHtelefonoReg` varchar(200) DEFAULT NULL,
  `emailReg` varchar(150) DEFAULT NULL,
  `PHemailReg` varchar(200) DEFAULT NULL,
  `passReg` varchar(150) DEFAULT NULL,
  `PHpassReg` varchar(200) DEFAULT NULL,
  `conPassReg` varchar(150) DEFAULT NULL,
  `PHconPassReg` varchar(200) DEFAULT NULL,
  `promReg` varchar(150) DEFAULT NULL,
  `txtPromReg` varchar(250) DEFAULT NULL,
  `txtBtnReg` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beregistro`
--

LOCK TABLES `beregistro` WRITE;
/*!40000 ALTER TABLE `beregistro` DISABLE KEYS */;
INSERT INTO `beregistro` VALUES (1,'Registre una cuenta de manera totalmente gratuita para realizar consultas, pedir presupuestos o recibir promociones!!','Nombre','Coloque aquÃ­ su nombre','Apellido','Coloque aquÃ­ su apellido','Tel.','0294-4******','E-Mail','vinicultores@gmail.com','ContraseÃ±a','Escriba contraseÃ±a','Confirmar ContraseÃ±a','Escriba contraseÃ±a','on','Desea recibir promociÃ³nes?','Registrarse');
/*!40000 ALTER TABLE `beregistro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Vinos Tintos'),(2,'Vinos Blancos'),(3,'Otros Productos');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `idCategory` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Product_Category1_idx` (`idCategory`),
  CONSTRAINT `fk_Product_Category1` FOREIGN KEY (`idCategory`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Blend',1,NULL),(2,'Malbec Roble',1,NULL),(3,'Malbec Natural s/sulfito',1,NULL),(4,'Malbec',1,NULL),(5,'Graciana (C/U)',1,NULL),(6,'Carignan (C/U)',1,NULL),(7,'Cabernet Sauvignon',1,NULL),(8,'Syrah',1,NULL),(9,'Merlot',1,NULL),(10,'Moscatel de Alejandría',2,NULL),(11,'Pedro Gimenez - Chardonnay',2,NULL),(12,'Rosé Malbec',2,NULL),(13,'Jugo de uvas naturales S/A',3,NULL),(14,'Aceite de Oliva',3,NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qouteproduct`
--

DROP TABLE IF EXISTS `qouteproduct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `qouteproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idQuote` int(11) DEFAULT NULL,
  `idProduct` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_QouteProduct_quotation1_idx` (`idQuote`),
  KEY `fk_QouteProduct_Product1_idx` (`idProduct`),
  CONSTRAINT `fk_QouteProduct_Product1` FOREIGN KEY (`idProduct`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_QouteProduct_quotation1` FOREIGN KEY (`idQuote`) REFERENCES `quotation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qouteproduct`
--

LOCK TABLES `qouteproduct` WRITE;
/*!40000 ALTER TABLE `qouteproduct` DISABLE KEYS */;
/*!40000 ALTER TABLE `qouteproduct` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotation`
--

DROP TABLE IF EXISTS `quotation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quotation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_quotation_Users_idx` (`idUser`),
  CONSTRAINT `fk_quotation_Users` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotation`
--

LOCK TABLES `quotation` WRITE;
/*!40000 ALTER TABLE `quotation` DISABLE KEYS */;
/*!40000 ALTER TABLE `quotation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `lastName` varchar(60) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT '0',
  `prom` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ramiro','Lezcano','2944632918','admin','relezcano369@gmail.com',1,0),(2,'Facundo','Sautú','2944824075','admin','facundo.sautu@gmail.com',1,0),(3,'Juan','Prueba','0294466666','admin','juan.prueba@gmail.com',0,1),(6,'Ignacio','Bressa','2944606247','intense','ignaciobressa@gmail.com',0,0),(10,'Esteban','Quito','0294466666','1234','estebanquito@gmail.com',0,1),(11,'elena ','Pustula','0294154519915','lalinda','epustula@hotmail.com',0,1),(12,'Paola ','Lucero','02944912656','ramiro','lucero84bari@hotmail.com',0,1),(13,'ezequiel','lopez','0294466666','1234','ezequiel@gmail.com',0,1),(14,'Carlos','lopez','02944666666','1234','carlos@gmail.com',0,1);
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

-- Dump completed on 2017-11-26 18:56:20
