# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.25)
# Database: theforum
# Generation Time: 2013-06-21 00:56:02 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table userInfo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `userInfo`;

CREATE TABLE `userInfo` (
  `userID` int(100) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(12) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(50) DEFAULT NULL,
  `userPass` varchar(50) NOT NULL,
  `favArtist` varchar(20) NOT NULL,
  `userBio` varchar(200) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `userInfo` WRITE;
/*!40000 ALTER TABLE `userInfo` DISABLE KEYS */;

INSERT INTO `userInfo` (`userID`, `firstName`, `userName`, `userEmail`, `userPass`, `favArtist`, `userBio`)
VALUES
	(3,'Anthony','thechamp123','asdsad@sdfd.com','1a1dc91c907325c69271ddf0c944bc72','the roots','Anthony is a simply amazing!'),
	(4,'James','Jame0987','james@james.com','1a1dc91c907325c69271ddf0c944bc72','Snoop Lion',''),
	(5,'Joliane','jojo','janedoetheend@hhh.com','1a1dc91c907325c69271ddf0c944bc72','The Fugees','I am from the south originally but moved to CT as a kid and lived here ever since.'),
	(6,'Aquan','aquanM','a@pretend.com','1a1dc91c907325c69271ddf0c944bc72','Eminem','Aquan likes trucks! All types of tucks. '),
	(8,'Denise','den123','den@den.com','1a1dc91c907325c69271ddf0c944bc72','Kendrick Lamar',''),
	(10,'Tony','ant123','anthony@gmail.com','1a1dc91c907325c69271ddf0c944bc72','eminem',''),
	(11,'Melissa','MelMel','m@fake.com','1a1dc91c907325c69271ddf0c944bc72','James Blunt',''),
	(12,'Jack','champ3','casdas@asasxs.com','1a1dc91c907325c69271ddf0c944bc72','Blu','Hello! My name is Jack Black.'),
	(15,'Jose','thebeast','fake@fake.com','1a1dc91c907325c69271ddf0c944bc72','nicki minaj',''),
	(16,'Antonio','farmHand','farm@hand.com','1a1dc91c907325c69271ddf0c944bc72','rascal flatts',''),
	(17,'Kevin','k1','k@vin.com','1a1dc91c907325c69271ddf0c944bc72','Kenny G',''),
	(21,'Jimmy','jim1','jim@jim.com','1a1dc91c907325c69271ddf0c944bc72','Kanye West',''),
	(22,'Keith','!beast!','keith@keith.com','75aee20356351f897d76825ea1fa6757','frank sinatra','I am awesome!!!'),
	(23,'Martha','littlemissy','adasdas@gmai.com','81dc9bdb52d04dc20036dbd8313ed055','Missy Elliott','');

/*!40000 ALTER TABLE `userInfo` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
