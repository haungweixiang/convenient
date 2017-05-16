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
  `MemberDeposit` int(10) NOT NULL,
  `MDDatetime` datetime NOT NULL,
  `MemberBalance` int(10) NOT NULL,
  `MemberDatetime` datetime NOT NULL,
  `memberscol` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MemberID`),
  KEY `MemberName` (`MemberName`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `selectmembers`
--

DROP TABLE IF EXISTS `selectmembers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `selectmembers` (
  `SMID` int(10) NOT NULL AUTO_INCREMENT,
  `SConvenient` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SPrice` int(10) NOT NULL,
  `STotal` int(10) NOT NULL,
  `SM` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `STodayStore` int(10) NOT NULL,
  `SDatetimes` datetime NOT NULL,
  PRIMARY KEY (`SMID`),
  KEY `SM` (`SM`),
  KEY `SPrice` (`SPrice`),
  KEY `STodayStore` (`STodayStore`),
  KEY `StoreConvenient_idx` (`SConvenient`),
  CONSTRAINT `MemberName` FOREIGN KEY (`SM`) REFERENCES `members` (`MemberName`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `STodayStore` FOREIGN KEY (`STodayStore`) REFERENCES `todaymenu` (`TodayID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `selectmembers`
--

LOCK TABLES `selectmembers` WRITE;
/*!40000 ALTER TABLE `selectmembers` DISABLE KEYS */;
/*!40000 ALTER TABLE `selectmembers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stores`
--

DROP TABLE IF EXISTS `stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stores` (
  `StoreID` int(10) NOT NULL AUTO_INCREMENT,
  `StoreName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `StroePhone` int(10) NOT NULL,
  `StroeDescription` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `StorePic` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `StoreConvenient` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SCPrice` int(10) NOT NULL,
  `StoreDatetime` datetime NOT NULL,
  PRIMARY KEY (`StoreID`),
  KEY `StoreName` (`StoreName`),
  KEY `StorePic` (`StorePic`),
  KEY `StroePhone` (`StroePhone`),
  KEY `StoreConvenient` (`StoreConvenient`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stores`
--

LOCK TABLES `stores` WRITE;
/*!40000 ALTER TABLE `stores` DISABLE KEYS */;
INSERT INTO `stores` VALUES (8,'a',1,'aa','','aaa',11,'0000-00-00 00:00:00'),(9,'b',2,'bb','','bbb',22,'0000-00-00 00:00:00'),(10,'c',3,'cc','','ccc',333,'0000-00-00 00:00:00'),(11,'d',4,'dd','','ddd',11,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `stores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `todaymenu`
--

DROP TABLE IF EXISTS `todaymenu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `todaymenu` (
  `TodayID` int(10) NOT NULL AUTO_INCREMENT,
  `TodayStoreName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TodayStorePhone` int(10) NOT NULL,
  `TodayDatetime` datetime NOT NULL,
  PRIMARY KEY (`TodayID`),
  KEY `TodayStoreName` (`TodayStoreName`),
  KEY `TodayStroePhone` (`TodayStorePhone`),
  CONSTRAINT `TodayStoreName` FOREIGN KEY (`TodayStoreName`) REFERENCES `stores` (`StoreName`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `TodayStroePhone` FOREIGN KEY (`TodayStorePhone`) REFERENCES `stores` (`StroePhone`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todaymenu`
--

LOCK TABLES `todaymenu` WRITE;
/*!40000 ALTER TABLE `todaymenu` DISABLE KEYS */;
INSERT INTO `todaymenu` VALUES (9,'a',1,'0000-00-00 00:00:00');
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

-- Dump completed on 2017-05-16 17:42:16
