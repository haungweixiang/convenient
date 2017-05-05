CREATE DATABASE  IF NOT EXISTS `convenient` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `convenient`;
-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: convenient
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

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
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `MemberID` int(10) NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `MemberAccount` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `MemberPassword` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `MemberBalance` int(10) NOT NULL,
  `MemberDatetime` datetime NOT NULL,
  PRIMARY KEY (`MemberID`),
  KEY `MemberName` (`MemberName`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'s','','',0,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `selectmember`
--

DROP TABLE IF EXISTS `selectmember`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `selectmember` (
  `SMID` int(10) NOT NULL AUTO_INCREMENT,
  `SConvenient` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SPrice` int(10) NOT NULL,
  `STotal` int(10) NOT NULL,
  `SM` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `SDatetimes` datetime NOT NULL,
  PRIMARY KEY (`SMID`),
  KEY `SM` (`SM`),
  KEY `SPrice` (`SPrice`),
  CONSTRAINT `MemberName` FOREIGN KEY (`SM`) REFERENCES `members` (`MemberName`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `StorePrice` FOREIGN KEY (`SPrice`) REFERENCES `stores` (`StorePrice`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `selectmember`
--

LOCK TABLES `selectmember` WRITE;
/*!40000 ALTER TABLE `selectmember` DISABLE KEYS */;
/*!40000 ALTER TABLE `selectmember` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stores`
--

DROP TABLE IF EXISTS `stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stores` (
  `StoreID` int(10) NOT NULL,
  `StoreName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `StroePhone` int(10) NOT NULL,
  `StroeDescription` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `StorePic` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `StorePrice` int(10) NOT NULL,
  `StoreDatetime` datetime NOT NULL,
  PRIMARY KEY (`StoreID`),
  KEY `StoreName` (`StoreName`),
  KEY `StorePic` (`StorePic`),
  KEY `StroePhone` (`StroePhone`),
  KEY `StorePrice` (`StorePrice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stores`
--

LOCK TABLES `stores` WRITE;
/*!40000 ALTER TABLE `stores` DISABLE KEYS */;
INSERT INTO `stores` VALUES (0,'s',0,'','',0,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `stores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `todaymenu`
--

DROP TABLE IF EXISTS `todaymenu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `todaymenu` (
  `TodayID` int(10) NOT NULL,
  `TodayStoreName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TodayStroePhone` int(10) NOT NULL,
  `TodayDatetime` datetime NOT NULL,
  PRIMARY KEY (`TodayID`),
  KEY `TodayStoreName` (`TodayStoreName`),
  KEY `TodayStroePhone` (`TodayStroePhone`),
  CONSTRAINT `TodayStoreName` FOREIGN KEY (`TodayStoreName`) REFERENCES `stores` (`StoreName`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `TodayStroePhone` FOREIGN KEY (`TodayStroePhone`) REFERENCES `stores` (`StroePhone`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todaymenu`
--

LOCK TABLES `todaymenu` WRITE;
/*!40000 ALTER TABLE `todaymenu` DISABLE KEYS */;
/*!40000 ALTER TABLE `todaymenu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-05 19:12:18
