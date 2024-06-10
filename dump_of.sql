-- MariaDB dump 10.19-11.2.1-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: terminoppgave_vg2
-- ------------------------------------------------------
-- Server version	11.2.1-MariaDB

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
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `imgs` tinytext NOT NULL,
  `stars` float(10,1) NOT NULL COMMENT 'cringe',
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movie`
--

LOCK TABLES `movie` WRITE;
/*!40000 ALTER TABLE `movie` DISABLE KEYS */;
INSERT INTO `movie` VALUES
(1,'Tetris','https://www.apple.com/tv-pr/shows-and-films/t/tetris/images/show-home-graphic-header/key-art-01/4x1/Apple_TV_Tetris_key_art_graphic_header_4_1_show_home.jpg.og.jpg?1679955333330',7.4),
(2,'Openheimer','    https://aumiekjrpq.cloudimg.io/v7/_intoprodweb_/uploads/2023/07/mv5bnmnknwu5nzutnmvkns00zde2ltg0njgtntixnwyxowiym2flxkeyxkfqcgdeqwfkcmlly2xh.-v1-.jpg?auto=format&auto=compress&fit=crop&gravity=face&w=1536&h=800',8.5),
(3,'Barbie','https://www.barbie-themovie.com/images/share.jpg',7.1),
(4,'Dungeons & Dragons: Honor Among Thieves','https://coolmusicltd.com/wp-content/uploads/2023/03/DD-1.jpg',7.3),
(5,'The Little Mermaid','https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/34DFD0B161142821AD93F62B4DC3DBD82DAB42533D8A721DB54FA2C04AC854AD/scale?width=1200&aspectRatio=1.78&format=jpeg',7.3),
(6,'Spider-Man: Across the Spider-Verse','https://images.thedirect.com/media/article_full/spider-verse-posters_VMqW9U1.jpg',8.7),
(7,'Guardians of the Galaxy Vol. 3','https://flxt.tmsimg.com/assets/p17845781_v_h10_an.jpg',7.9),
(8,'The Creator','https://hebdenbridgepicturehouse.co.uk/images/3415.jpg',7.1),
(9,'Mission: Impossible - Dead Reckoning Part One','https://images.squarespace-cdn.com/content/v1/63bb3e8a824d7e2f7eedf0d3/8a225826-3c04-42d0-a654-eb1552f23d7f/Mission+Impossible+7+Horizontal.jpeg',7.9),
(10,'The Hunger Games: The Ballad of Songbirds & Snakes','https://movies.sterkinekor.co.za/CDN/media/entity/get/FilmTitleGraphic/HO00002860?referenceScheme=HeadOffice&allowPlaceHolder=true',7.2);
/*!40000 ALTER TABLE `movie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `pwd` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'a','a','a@a.a',1),
(2,'test','test','t@t.t',1),
(3,'b','b','b@b.b',0),
(4,'test2','bbb','t2@t.t',0),
(8,'jorgen','jorgen','jorgen@jorjor.jor',0),
(9,'jor','jor','jor.@jorjor.jor',0);
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

-- Dump completed on 2024-04-08  9:44:19
