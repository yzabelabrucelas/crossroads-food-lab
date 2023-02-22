-- MySQL dump 10.13  Distrib 5.6.41, for Linux (x86_64)
--
-- Host: localhost    Database: crossroa_crossroads
-- ------------------------------------------------------
-- Server version	5.6.41-log

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
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about_us` (
  `history` text NOT NULL,
  `core_values` text NOT NULL,
  `vision` text NOT NULL,
  `mission` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_us`
--

-- LOCK TABLES `about_us` WRITE;
-- /*!40000 ALTER TABLE `about_us` DISABLE KEYS */;
-- INSERT INTO `about_us` (`history`, `core_values`, `vision`, `mission`) VALUES ('<p style=\"text-align:justify\"><span style=\"font-size:28px\">Crossroads Food Lab is the home of unlimited in Bacoor, Cavite owned by Mr. Emherson S. Mu&ntilde;oz. The business started in 2016 in his garage. Everything you can see in the restaurant is all about the roads and signage, because they serve food-on-the go. </span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:28px\">The client slowly increased from friends and family to &quot;friends of friendsâ€Ÿ. Word of mouth and social media is truly a powerful thing. </span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:28px\">He was the pioneer in offering unlimited menu in Bacoor, Cavite from Burgers to Chicken with two flavors, Shawarma, and Lechon Kawali. </span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:28px\">Currently, the establishment offers variety comfort foods, also the all the food they offer are the proprietor&#39;s best picks.</span></p>\r\n','<p><span style=\"font-size:28px\">We provide quality food at a lower price.</span></p>\r\n','<p style=\"text-align:justify\"><span style=\"font-size:28px\">Aside from selling food and satisfying our customers, The proprietor also want to provide employment to his fellow Filipinos, especially to the LGBT community. &nbsp;As a gay individual, it is very rare for them to accept and employ us especially in the present day and that is his primary advocacy. 80% of his employee belongs to the LGBT community.</span></p>\r\n','<p style=\"text-align:justify\"><span style=\"font-size:28px\">Our mission is to make our customers happy and satisfied. We are eager to expand and grow our business and </span><strong><span style=\"font-size:28px\">WE WANT YOU TO BE PART OF IT!&nbsp;<img alt=\"laugh\" src=\"https://cdn.ckeditor.com/4.10.1/full/plugins/smiley/images/teeth_smile.png\" style=\"height:23px; width:23px\" title=\"laugh\" /></span></strong></p>\r\n');
-- /*!40000 ALTER TABLE `about_us` ENABLE KEYS */;
-- UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `user_ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_pic` text NOT NULL,
  PRIMARY KEY (`user_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`user_ID`, `user_email`, `user_pass`, `user_pic`) VALUES (6,'crossroad','8-1uk:PZlD41yY','watermark.png');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `archive_inquiry`
--

DROP TABLE IF EXISTS `archive_inquiry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archive_inquiry` (
  `inq_no` varchar(50) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `contact_no` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `inq_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archive_inquiry`
--

LOCK TABLES `archive_inquiry` WRITE;
/*!40000 ALTER TABLE `archive_inquiry` DISABLE KEYS */;
/*!40000 ALTER TABLE `archive_inquiry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `archive_reservation`
--

DROP TABLE IF EXISTS `archive_reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archive_reservation` (
  `res_id` varchar(50) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `contact_no` text NOT NULL,
  `pax` text NOT NULL,
  `res_date` text NOT NULL,
  `res_time` text NOT NULL,
  `sent_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archive_reservation`
--

LOCK TABLES `archive_reservation` WRITE;
/*!40000 ALTER TABLE `archive_reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `archive_reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_info`
--

DROP TABLE IF EXISTS `contact_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_info` (
  `contact_name` text NOT NULL,
  `contact_address` text NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_info`
--

LOCK TABLES `contact_info` WRITE;
/*!40000 ALTER TABLE `contact_info` DISABLE KEYS */;
INSERT INTO `contact_info` (`contact_name`, `contact_address`, `contact_no`, `contact_email`, `id`) VALUES ('','KM19 Aguinaldo Highway Brgy Panapaan VI, 4102 Bacoor, Cavite                                                                            ',' 09157907161                                                    ','@crossroadsfoodlab                                 ',1);
/*!40000 ALTER TABLE `contact_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_testimonial`
--

DROP TABLE IF EXISTS `customer_testimonial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_testimonial` (
  `ct_id` int(11) NOT NULL AUTO_INCREMENT,
  `ct_name` text NOT NULL,
  `ct_desc` text NOT NULL,
  `ct_date` text NOT NULL,
  `ct_pic` text NOT NULL,
  PRIMARY KEY (`ct_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_testimonial`
--

LOCK TABLES `customer_testimonial` WRITE;
/*!40000 ALTER TABLE `customer_testimonial` DISABLE KEYS */;
INSERT INTO `customer_testimonial` (`ct_id`, `ct_name`, `ct_desc`, `ct_date`, `ct_pic`) VALUES (7,'@tigasouthkaba','Found a new tambayan in Bacoor, Cavite. Perfect hangout to chillax and bond with your friends. Tara Lets!','February 23, 2018','Screenshot_20180722-075452.png');
/*!40000 ALTER TABLE `customer_testimonial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_place`
--

DROP TABLE IF EXISTS `gallery_place`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery_place` (
  `gp_id` int(11) NOT NULL AUTO_INCREMENT,
  `gp_title` text NOT NULL,
  `gp_pic` text NOT NULL,
  PRIMARY KEY (`gp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_place`
--

LOCK TABLES `gallery_place` WRITE;
/*!40000 ALTER TABLE `gallery_place` DISABLE KEYS */;
INSERT INTO `gallery_place` (`gp_id`, `gp_title`, `gp_pic`) VALUES (1,'pic 1','IMG_2888.jpg'),(2,'pic 2','IMG_2887.jpg'),(3,'pic 3','gp2.jpeg');
/*!40000 ALTER TABLE `gallery_place` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inquiry`
--

DROP TABLE IF EXISTS `inquiry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inquiry` (
  `inq_no` varchar(500) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `inq_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` text NOT NULL,
  PRIMARY KEY (`inq_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inquiry`
--

LOCK TABLES `inquiry` WRITE;
/*!40000 ALTER TABLE `inquiry` DISABLE KEYS */;
/*!40000 ALTER TABLE `inquiry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logo`
--

DROP TABLE IF EXISTS `logo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logo`
--

LOCK TABLES `logo` WRITE;
/*!40000 ALTER TABLE `logo` DISABLE KEYS */;
INSERT INTO `logo` (`id`, `logo`) VALUES (1,'crossroads.ico');
/*!40000 ALTER TABLE `logo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `menu_ID` varchar(100) NOT NULL,
  `menu_name` text NOT NULL,
  `packages` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `menu_image` text NOT NULL,
  PRIMARY KEY (`menu_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`menu_ID`, `menu_name`, `packages`, `details`, `menu_image`) VALUES ('CFL-MENU-01819','Sizzling Crispy Pork Sisig','XROADSXTREME99,TEAMPUTOKBATOK199,CHICKBOY249,UNLIA','','pork sisig.JPG'),('CFL-MENU-03032','Leche Flan','Ala Carte','P50.00','Leche Flan.png'),('CFL-MENU-05455','Coffee Jelly','Ala Carte','P35.00','Coffee Jelly.png'),('CFL-MENU-06454','Sizzling Chicharon Bulaklak','XROADSXTREME99,TEAMPUTOKBATOK199,CHICKBOY249,UNLIA','','chicharon bulaklak.JPG'),('CFL-MENU-08294','Sizzling Lechon Kawali','XROADSXTREME99,TEAMPUTOKBATOK199,CHICKBOY249,UNLIA','','lechon kawali.JPG'),('CFL-MENU-17751','Shawarma Wrap','UNLIALL250,UNLI150','','shawarma wrap.JPG'),('CFL-MENU-23878','Shrimp','UNLISHRIMP299,UNLIALL349','Garlic Buttered Shrimp, Fried Shrimp with Garlic Mayo or Toyomansi Dip, Hilabos Shrimp with Garlic Mayo or Toyomansi Dip','shrimp.png'),('CFL-MENU-54724','Ultimate Double Decker Burger','UNLIALL250,UNLI150','','double decker burger.jpg'),('CFL-MENU-58084','Special Thin Crust Pizza','UNLIALL250,UNLI150','','pizza.png'),('CFL-MENU-63179','Ramen','UNLIALL250,UNLI150','','ramen.jpg'),('CFL-MENU-75781','10 Flavored Chicken','UNLINOK199,CHICKBOY249,UNLIALL349','Crossroads Signature Gravy, Spicy Buffalo Chicken in Garlic Mayo, Sweet Chicken Teriyaki, Chili Cheesy Chicken, Soy Chicken, Korean Classic BBQ, Korean Style Chicken in Ginger Sauce, Sweet and Sour Chiken, Buttered Garlic, Classic Fried Chicken','chicken.JPG'),('CFL-MENU-88207','Burger Steak','UNLIALL250,XROADSXTREME99,UNLI150','','burger steak.jpg'),('CFL-MENU-95806','Shawarma Rice','UNLIALL250,UNLI150','','shawarma rice.JPG');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` text NOT NULL,
  `news_desc` text NOT NULL,
  `news_pic` text NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`news_id`, `news_title`, `news_desc`, `news_pic`) VALUES (1,'Unli Crossroads Special Thin Crust Pizza!','OMG! Who does not love PIZZA?! Everyone loves it specially if it is UNLIMITED! Starting on August 5 an additional to our list of unlimited meals will be served hot and crispy!\r\n','pizza.jpeg');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `package`
--

DROP TABLE IF EXISTS `package`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `package` (
  `package_ID` varchar(100) NOT NULL,
  `package_title` text NOT NULL,
  `package_price` double(10,2) NOT NULL,
  `package_desc` text NOT NULL,
  PRIMARY KEY (`package_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `package`
--

LOCK TABLES `package` WRITE;
/*!40000 ALTER TABLE `package` DISABLE KEYS */;
INSERT INTO `package` (`package_ID`, `package_title`, `package_price`, `package_desc`) VALUES ('CFL-PCKG-09766','UNLIALL349',349.00,'Unlimited of ALL food choices, Unlimited Rice, Unlimited Drinks'),('CFL-PCKG-19008','XROADSXTREME99',99.00,'Portion of Ulam, Unlimited Rice, Unlimited Drinks'),('CFL-PCKG-28174','UNLINOK199',199.00,'Unlimited 10 Flavored Chicken, Unlimited Rice, Unlimited Drinks'),('CFL-PCKG-32519','TEAMPUTOKBATOK199',199.00,'Unlimited Pork, Unlimited Rice, Unlimited Drinks'),('CFL-PCKG-51442','UNLI150',150.00,'Unlimited of 1 food choice, Unlimited Rice, Unlimited Drinks\r\n'),('CFL-PCKG-59036','UNLISHRIMP299',299.00,'Unlimited Shrimp, Unlimited Rice, Unlimited Drinks'),('CFL-PCKG-70467','CHICKBOY249',249.00,'Unlimited 10 Flavored Chicken, Unlimited Pork, Unlimited Rice, Unlimited Drinks');
/*!40000 ALTER TABLE `package` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `q1` varchar(50) NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `q6` text NOT NULL,
  `q7` text NOT NULL,
  `q8` text NOT NULL,
  `q9` text NOT NULL,
  `q10` text NOT NULL,
  `q11` text NOT NULL,
  `q12` text NOT NULL,
  `q13` text NOT NULL,
  `q14` text NOT NULL,
  `q15` text NOT NULL,
  `date_taken` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating`
--

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
INSERT INTO `rating` (`id`, `fname`, `lname`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `date_taken`) VALUES (1,'Ana','Brucelas','Satisfied','Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Satisfied','Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','2018-09-02 11:06:07'),(2,'John Denver','Isic','Very Satisfied','Satisfied','Satisfied','Satisfied','Okay','Satisfied','Very Satisfied','Very Satisfied','Okay','Satisfied','Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','2018-09-02 12:23:27'),(3,'Marvin','Baloaloa','Very Satisfied','Very Satisfied','Satisfied','Okay','Okay','Very Satisfied','Okay','Okay','Very Satisfied','Satisfied','Okay','Satisfied','Satisfied','Satisfied','Satisfied','2018-09-02 12:37:52'),(5,'Christian','Serilla','Very Satisfied','Satisfied','Satisfied','Very Satisfied','Satisfied','Very Satisfied','Very Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Very Satisfied','Very Satisfied','2018-09-02 13:13:37'),(6,'Reynan','Dagar','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','2018-09-02 13:15:22'),(7,'Matthew ','Lagasca','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','2018-09-02 13:18:04'),(9,'John Paulo','Malinis','Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Satisfied','Satisfied','Satisfied','Very Satisfied','Okay','Satisfied','Satisfied','Very Satisfied','Satisfied','Very Satisfied','Very Satisfied','2018-09-02 13:29:58'),(10,'Aj','Litonjua','Satisfied','Satisfied','Very Satisfied','Satisfied','Satisfied','Okay','Very Satisfied','Okay','Very Satisfied','Okay','Okay','Okay','Okay','Satisfied','Satisfied','2018-09-02 13:31:48'),(12,'Jonas','Pernes','Satisfied','Very Satisfied','Very Satisfied','Satisfied','Satisfied','Very Satisfied','Okay','Disatisfied','Okay','Okay','Satisfied','Okay','Okay','Very Satisfied','Satisfied','2018-09-02 13:55:12'),(13,'megan','capili','Okay','Very Satisfied','Very Satisfied','Very Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Okay','Satisfied','Okay','Okay','Very Satisfied','Satisfied','Satisfied','2018-09-02 14:01:45'),(14,'Jacob','Constantino','Very Satisfied','Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Satisfied','Very Satisfied','Satisfied','Okay','Satisfied','Satisfied','Satisfied','Satisfied','2018-09-03 00:12:15'),(15,'Ron','Balatuti','Very Satisfied','Very Satisfied','Very Satisfied','Okay','Very Satisfied','Satisfied','Satisfied','Satisfied','Okay','Very Satisfied','Okay','Satisfied','Satisfied','Very Satisfied','Satisfied','2018-09-03 00:19:17'),(16,'Sweet','Lazona','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','2018-09-03 00:24:10'),(17,'Jannah','Vencio','Very Satisfied','Very Satisfied','Satisfied','Satisfied','Satisfied','Very Satisfied','Okay','Okay','Okay','Satisfied','Satisfied','Satisfied','Very Satisfied','Very Satisfied','Satisfied','2018-09-03 01:56:57'),(18,'Leonardo','Torepalma','Very Satisfied','Very Satisfied','Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Satisfied','Very Satisfied','Very Satisfied','2018-09-03 04:56:39'),(19,'Celine','Cabalquinto','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','2018-09-03 05:16:09'),(23,'Jessica','Marcena','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','2018-09-03 11:47:53'),(24,'Mae Lim ','Echavez','Very Satisfied','Satisfied','Very Satisfied','Very Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','2018-09-03 17:00:32'),(25,'Jonathan','Gersalia','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Okay','Okay','Okay','Satisfied','Satisfied','Satisfied','Very Satisfied','Satisfied','Very Satisfied','2018-09-04 11:00:20'),(26,'Ivan','Relatado','Very Satisfied','Very Satisfied','Very Satisfied','Satisfied','Very Satisfied','Very Satisfied','Satisfied','Okay','Okay','Satisfied','Okay','Satisfied','Satisfied','Satisfied','Satisfied','2018-09-04 11:02:02'),(27,'Rachel','Jocame','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Satisfied','Satisfied','Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Satisfied','Satisfied','Very Satisfied','2018-09-04 11:04:23'),(28,'Mark Louie','Torepalma','Satisfied','Very Satisfied','Satisfied','Very Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','2018-09-04 11:12:05'),(29,'Lemuel','Antonio','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Okay','Okay','Okay','Okay','Okay','Okay','Okay','Okay','Okay','2018-09-04 14:36:12'),(30,'Jolina','Francisco','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','2018-09-04 14:39:26'),(31,'Gilmer','De Leon','Okay','Okay','Satisfied','Okay','Satisfied','Very Satisfied','Satisfied','Okay','Satisfied','Satisfied','Okay','Very Satisfied','Satisfied','Satisfied','Okay','2018-09-04 14:41:34'),(32,'Rupert ','Villanueva','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','2018-09-04 14:51:17'),(33,'Raymond','Villas','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Satisfied','Okay','Satisfied','Okay','Okay','Okay','Okay','Satisfied','Okay','2018-09-04 15:00:39'),(34,'Kai','Baldove','Satisfied','Okay','Okay','Satisfied','Satisfied','Satisfied','Satisfied','Okay','Satisfied','Okay','Okay','Okay','Okay','Satisfied','Okay','2018-09-04 15:01:52'),(35,'Marthy','Poliquit','Satisfied','Satisfied','Very Satisfied','Very Satisfied','Satisfied','Okay','Satisfied','Very Satisfied','Okay','Satisfied','Disatisfied','Okay','Satisfied','Satisfied','Okay','2018-09-04 15:03:15'),(38,'Sebastian ','Rancap','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','Very Satisfied','2018-09-05 14:54:27');
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `res_id` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `contact_no` text NOT NULL,
  `pax` text NOT NULL,
  `res_date` text NOT NULL,
  `res_time` varchar(50) NOT NULL,
  `sent_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slider` text NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider`
--

LOCK TABLES `slider` WRITE;
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` (`id`, `slider`, `title`) VALUES (1,'pic.jpg','logo'),(2,'IMG_2924.jpg','food'),(3,'IMG_2887.jpg','pic 1'),(4,'IMG_2880.jpg','pic 2'),(5,'IMG_2913.jpg','pic 3');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `contact_no` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`username`, `password`, `fname`, `lname`, `email`, `contact_no`) VALUES ('yzabelabrucelas','kwonjiyong','Ana Yzabela Marie','Brucelas','yzabelabrucelas@gmail.com','09266658429'),('harty','dabam','Hearthly','Torepalma','lds.hearth@gmail.com','09753806654'),('justine28','justine28','Justine','Rosales','amphionxd@gmail.com','09357351130'),('bob','bob','bob','condino','lds.hearth@gmail.com','09266658429');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `walkins`
--

DROP TABLE IF EXISTS `walkins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `walkins` (
  `res_id` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `pax` varchar(10) NOT NULL,
  `res_date` varchar(50) NOT NULL,
  `res_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `walkins`
--

LOCK TABLES `walkins` WRITE;
/*!40000 ALTER TABLE `walkins` DISABLE KEYS */;
INSERT INTO `walkins` (`res_id`, `fname`, `lname`, `pax`, `res_date`, `res_time`) VALUES ('CFL-RES-52461','Ana','Brucelas','6','2018-09-30','7:00-9:00 pm'),('CFL-RES-39819','Ian','Rosales','15','2018-09-30','7:00-9:00 pm'),('CFL-RES-54426','Jared','Rolda','5','2018-09-30','7:00-9:00 pm'),('CFL-RES-74592','Hearthly','Torepalma','16','2018-09-30','7:00-9:00 pm'),('CFL-RES-32572','Ana Yzabela Marie','Brucelas','8','2018-10-01','9:00-10:30 pm'),('CFL-RES-01409','Hearthly','Torepalma','9','2018-10-01','7:00-9:00 pm'),('CFL-RES-78021','John','Doe','6','2018-10-01','7:00-9:00 pm');
/*!40000 ALTER TABLE `walkins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'crossroa_crossroads'
--

--
-- Dumping routines for database 'crossroa_crossroads'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-23 15:18:15
