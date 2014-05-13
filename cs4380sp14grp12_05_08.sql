-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: dbhost-mysql.cs.missouri.edu    Database: cs4380sp14grp12
-- ------------------------------------------------------
-- Server version	5.1.73

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
-- Table structure for table `Admins`
--

DROP TABLE IF EXISTS `Admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Admins` (
  `uid` int(11) NOT NULL,
  `caneditusers` tinyint(1) NOT NULL,
  `candeleteusers` tinyint(1) NOT NULL,
  `canviewallusers` tinyint(1) NOT NULL,
  `cangiveinfraction` tinyint(1) NOT NULL,
  KEY `uid` (`uid`),
  CONSTRAINT `Admins_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `Users` (`uid`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Admins`
--

LOCK TABLES `Admins` WRITE;
/*!40000 ALTER TABLE `Admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `Admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Answer`
--

DROP TABLE IF EXISTS `Answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Answer` (
  `answerid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `questionid` int(11) DEFAULT NULL,
  `answerorder` varchar(11) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`answerid`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Answer`
--

LOCK TABLES `Answer` WRITE;
/*!40000 ALTER TABLE `Answer` DISABLE KEYS */;
INSERT INTO `Answer` VALUES (14,16,'a','True'),(15,16,'b','False'),(17,19,'a','True'),(18,19,'b','False'),(19,19,'c','Null'),(20,22,'','True'),(21,22,'','False'),(22,23,'','True'),(23,23,'','False'),(24,24,'','True'),(25,24,'','False'),(26,25,'a','\"Tell me your name or we can\'t talk.\"'),(27,25,'b','\"Tell me a little more about that.\"'),(28,25,'c','\"Are you suicidal?\"'),(29,25,'d','\"It sounds as if you\'re feeling sad.\"'),(30,25,'e','b & d'),(31,26,'a','\"Can you tell me more about that?\"'),(32,26,'b','\"Why do you feel that way?\"'),(33,26,'c','\"Does that seem like a good option for you?\"'),(34,26,'d','\"Are your having any thoughts about suicide?\"'),(35,26,'e','All of the above'),(36,28,'a','\"I think you should go see a therapist.\"'),(37,28,'b','\"I think you should take the medication.\"'),(38,28,'c','\"I\'m getting a bit confused. Could you tell me more?\"'),(39,28,'d','\"I think you\'d be better off leaving your husband.\"'),(40,28,'e','\"I can\'t believe you did that!\"'),(44,29,'','False'),(43,29,'','True'),(45,31,'','true'),(46,31,'','false'),(47,32,'','false'),(48,32,'','true'),(49,34,'','false'),(50,34,'','true'),(57,36,'','True'),(55,35,'','True'),(56,35,'','False'),(58,36,'','False'),(59,37,'','True'),(60,37,'','False'),(61,38,'','True'),(62,38,'','False'),(63,39,'','True'),(64,39,'','False'),(65,40,'','True'),(66,40,'','False'),(67,41,'','True'),(68,41,'','False');
/*!40000 ALTER TABLE `Answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Contact`
--

DROP TABLE IF EXISTS `Contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Contact` (
  `contactindex` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(48) NOT NULL,
  `message` varchar(2048) NOT NULL,
  `subject` varchar(48) NOT NULL,
  `name` varchar(48) NOT NULL DEFAULT '',
  PRIMARY KEY (`contactindex`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Contact`
--

LOCK TABLES `Contact` WRITE;
/*!40000 ALTER TABLE `Contact` DISABLE KEYS */;
INSERT INTO `Contact` VALUES (6,'1','4','3','2'),(7,'user1@gmail.com','Some message.','user1 subject','user1 name'),(8,'asdf','asdf','asdf','asdf');
/*!40000 ALTER TABLE `Contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Email`
--

DROP TABLE IF EXISTS `Email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Email` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `recipients` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Email`
--

LOCK TABLES `Email` WRITE;
/*!40000 ALTER TABLE `Email` DISABLE KEYS */;
INSERT INTO `Email` VALUES (1,'asdf','sadf',NULL),(2,'asdf','asdf',NULL),(3,'asdf','asdf',NULL),(4,'asdf','asdf','Bcc:a@a.com\n'),(5,'asdf','asdf','Bcc:a@a.com\n'),(6,NULL,NULL,'Bcc:\n'),(7,'asdf','asdf','Bcc:\n'),(8,'','','Bcc:\n'),(9,'','','Bcc:\n'),(10,'','','madness!'),(11,'asdf','asdf',''),(12,'asd','asdf',''),(13,'asd','asdf','Bcc:a@gmail.com\nBcc:admin1@gmail.com\nBcc:admin2@gmail.com\nBcc:admin3@gmail.com\nBcc:admin4@gmail.com\nBcc:admin@gmail.com\nBcc:user1@gmail.com\nBcc:user2@gmail.com\nBcc:user3@gmail.com\n'),(14,'asdf','asdf',''),(15,'asdf','asdf',''),(16,'asdf','asdf',''),(17,'asdf','asdf','Bcc:a@gmail.com\nBcc:admin1@gmail.com\nBcc:admin2@gmail.com\nBcc:admin3@gmail.com\nBcc:admin4@gmail.com\nBcc:admin@gmail.com\nBcc:user1@gmail.com\nBcc:user2@gmail.com\nBcc:user3@gmail.com\n'),(18,'1','1','Bcc:admin1@gmail.com\nBcc:admin2@gmail.com\n');
/*!40000 ALTER TABLE `Email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Infractions`
--

DROP TABLE IF EXISTS `Infractions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Infractions` (
  `infractionid` int(11) NOT NULL AUTO_INCREMENT,
  `infractiondesc` varchar(25) NOT NULL,
  PRIMARY KEY (`infractionid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Infractions`
--

LOCK TABLES `Infractions` WRITE;
/*!40000 ALTER TABLE `Infractions` DISABLE KEYS */;
INSERT INTO `Infractions` VALUES (1,'No Call No Show'),(2,'Late'),(3,'Shift Cancel');
/*!40000 ALTER TABLE `Infractions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NewsPosts`
--

DROP TABLE IF EXISTS `NewsPosts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `NewsPosts` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `message` varchar(2500) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `isprivate` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NewsPosts`
--

LOCK TABLES `NewsPosts` WRITE;
/*!40000 ALTER TABLE `NewsPosts` DISABLE KEYS */;
INSERT INTO `NewsPosts` VALUES (1,'Test Title News Post','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.\n\nDonec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.\n\nMorbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.\n\nPraesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.\n\nPhasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.\n\nPellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.\n\nSed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna.\n',22,'2014-04-24',0),(2,'Zhaolong Cures Cancer','  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.  Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.  Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.  Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.  Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.  Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.  Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna.',21,'2014-04-24',0),(3,'Tony is the best at everything','kjaosdfjaoiwdjfioawjfijawpfjewapoijf',22,'0000-00-00',0),(4,'Brett is Terrible at PHP','ljafjagjoafjofajlfw',22,'0000-00-00',0),(5,'Brett is bad at Candy Crush Saga','HAHAHAHAHAHA Noob',22,'0000-00-00',0),(6,'blabla','sdfsdfsdfsdfs',5,'0000-00-00',0),(7,'SDFSDFSDF','SKJDFKS;DFKLSKFLSF\';S;FDLS;DF',5,'2014-04-24',0),(8,'Brett is bad at Candy Crush Saga','HAHAHAHAHAHA Noob',22,'2014-04-24',0),(9,'Brett should stop playing Candy Crush','BRETT NO MORE CANDY ',22,'2014-04-24',0),(16,'asdf','asdf',0,'2014-04-27',NULL);
/*!40000 ALTER TABLE `NewsPosts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Question`
--

DROP TABLE IF EXISTS `Question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Question` (
  `questionid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `quizid` int(11) DEFAULT NULL,
  `questionorder` int(11) DEFAULT NULL,
  `questiontype` int(11) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `correctanswer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Question`
--

LOCK TABLES `Question` WRITE;
/*!40000 ALTER TABLE `Question` DISABLE KEYS */;
INSERT INTO `Question` VALUES (25,2,10,0,'Which of the following statements will help to establish rapport with the caller?',''),(26,2,11,0,'Which of the following questions may make the caller feel defensive?',''),(28,2,12,0,'Which of the following are appropriate \"I\" statements?',''),(29,3,1,0,'If a male caller asks about AIDS/HIV he is gay.',''),(30,3,2,0,'Callers who call about sexual problems are weirdos.',''),(35,1,1,0,'Active listening is listening for feelings.','false'),(36,1,2,0,'Listening and hearing are not the same thing.','true'),(37,1,3,0,'It is appropriate to maintain silence during a call.','false'),(38,1,4,0,'Crisis workers utilize the x-model when helping callers.','true'),(39,1,5,0,'The model used in crisis intervention begins with summarizing callers\' problems.','true'),(40,1,6,0,'After you have established rapport with the caller, crisis workers should next form a plan of action.','false'),(41,1,7,0,'Crisis workers should focus on as many of the callers\' problems as possible.','false');
/*!40000 ALTER TABLE `Question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Quiz`
--

DROP TABLE IF EXISTS `Quiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Quiz` (
  `qid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `quizid` int(11) DEFAULT NULL,
  `quiztitle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Quiz`
--

LOCK TABLES `Quiz` WRITE;
/*!40000 ALTER TABLE `Quiz` DISABLE KEYS */;
INSERT INTO `Quiz` VALUES (3,1,'Crisis Intervention'),(4,2,'Active Listening'),(5,3,'Personal Values & Sexual Issues');
/*!40000 ALTER TABLE `Quiz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `QuizAnswer`
--

DROP TABLE IF EXISTS `QuizAnswer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `QuizAnswer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `questionid` int(11) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `answer_text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `QuizAnswer`
--

LOCK TABLES `QuizAnswer` WRITE;
/*!40000 ALTER TABLE `QuizAnswer` DISABLE KEYS */;
INSERT INTO `QuizAnswer` VALUES (1,9,'a','Stimulant'),(2,9,'b','Depressant'),(3,8,'T','T'),(4,8,'F','F'),(5,9,'c','Hallucinogen'),(6,9,'d','Volitale substance'),(7,9,'e','Alochol is not a drug');
/*!40000 ALTER TABLE `QuizAnswer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `QuizQuestion`
--

DROP TABLE IF EXISTS `QuizQuestion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `QuizQuestion` (
  `questionid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `testid` int(11) DEFAULT NULL,
  `testorder` int(11) DEFAULT NULL,
  `istruefalse` int(11) DEFAULT NULL,
  `ismultiplechoice` int(11) DEFAULT NULL,
  `isinput` int(11) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `QuizQuestion`
--

LOCK TABLES `QuizQuestion` WRITE;
/*!40000 ALTER TABLE `QuizQuestion` DISABLE KEYS */;
INSERT INTO `QuizQuestion` VALUES (8,1,1,1,NULL,NULL,'A crisis is usually resolved within 6 weeks.'),(10,1,2,1,NULL,NULL,'During crisis, people are unable to resolve their own problems.'),(11,1,3,1,NULL,NULL,'People in crisis often experience a high level of energy.'),(12,1,4,1,NULL,0,'Crisis workers utilize the x-model when helping callers.'),(13,1,5,1,0,0,'The model used in crisis intervention begins with summarizing callers\' problems.'),(14,1,6,1,0,0,'After you have established rapport with the caller, crisis workers should next form a plan of action.'),(15,1,7,1,0,0,'Crisis workers should focus on as many of the callers\' problems as possible.');
/*!40000 ALTER TABLE `QuizQuestion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `QuizUserAnswer`
--

DROP TABLE IF EXISTS `QuizUserAnswer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `QuizUserAnswer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `answer` varchar(255) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `QuizUserAnswer`
--

LOCK TABLES `QuizUserAnswer` WRITE;
/*!40000 ALTER TABLE `QuizUserAnswer` DISABLE KEYS */;
INSERT INTO `QuizUserAnswer` VALUES (1,'T',8,2),(2,'b',9,2),(3,'Insert a bunch of text here',10,2);
/*!40000 ALTER TABLE `QuizUserAnswer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Schedule`
--

DROP TABLE IF EXISTS `Schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Schedule` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(50) NOT NULL,
  `date` varchar(10) DEFAULT NULL,
  `starttime` time DEFAULT NULL,
  `endtime` time DEFAULT NULL,
  KEY `sid` (`sid`),
  KEY `username` (`username`),
  CONSTRAINT `Schedule_ibfk_1` FOREIGN KEY (`username`) REFERENCES `Users` (`username`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Schedule`
--

LOCK TABLES `Schedule` WRITE;
/*!40000 ALTER TABLE `Schedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `Schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Survey`
--

DROP TABLE IF EXISTS `Survey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Survey` (
  `surveyindex` int(11) NOT NULL AUTO_INCREMENT,
  `q1` varchar(10) NOT NULL,
  `q2` varchar(10) NOT NULL,
  `q2_reason` varchar(2048) NOT NULL,
  `q3` varchar(10) NOT NULL,
  `q4` varchar(10) NOT NULL,
  `q4_reason` varchar(2048) NOT NULL DEFAULT '',
  PRIMARY KEY (`surveyindex`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Survey`
--

LOCK TABLES `Survey` WRITE;
/*!40000 ALTER TABLE `Survey` DISABLE KEYS */;
INSERT INTO `Survey` VALUES (9,'N','D','abc','SA','Y','abc');
/*!40000 ALTER TABLE `Survey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SystemLog`
--

DROP TABLE IF EXISTS `SystemLog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SystemLog` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `logdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `loguserid` int(11) NOT NULL,
  `logaction` varchar(100) NOT NULL,
  PRIMARY KEY (`logid`),
  KEY `loguserid` (`loguserid`),
  CONSTRAINT `SystemLog_ibfk_1` FOREIGN KEY (`loguserid`) REFERENCES `Users` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SystemLog`
--

LOCK TABLES `SystemLog` WRITE;
/*!40000 ALTER TABLE `SystemLog` DISABLE KEYS */;
INSERT INTO `SystemLog` VALUES (1,'2014-05-06 03:22:25',1,'New User has been added to the database'),(2,'2014-05-06 03:22:25',2,'New User has been added to the database'),(3,'2014-05-06 03:22:25',3,'New User has been added to the database'),(4,'2014-05-06 03:22:25',4,'New User has been added to the database'),(5,'2014-05-06 03:22:25',6,'New User has been added to the database'),(6,'2014-05-06 03:22:25',7,'New User has been added to the database'),(7,'2014-05-06 03:22:25',8,'New User has been added to the database'),(8,'2014-05-06 03:22:25',9,'New User has been added to the database'),(9,'2014-05-06 03:22:25',10,'New User has been added to the database'),(10,'2014-05-06 03:22:25',11,'New User has been added to the database'),(11,'2014-05-09 00:45:30',12,'New User has been added to the database'),(12,'2014-05-09 00:45:30',13,'New User has been added to the database'),(13,'2014-05-09 00:45:30',14,'New User has been added to the database'),(14,'2014-05-09 00:45:30',15,'New User has been added to the database'),(15,'2014-05-09 00:45:30',16,'New User has been added to the database'),(16,'2014-05-09 00:45:30',17,'New User has been added to the database'),(17,'2014-05-09 00:45:30',18,'New User has been added to the database'),(18,'2014-05-09 00:45:30',19,'New User has been added to the database'),(19,'2014-05-09 00:46:57',33,'New User has been added to the database'),(20,'2014-05-09 00:46:57',34,'New User has been added to the database'),(21,'2014-05-09 00:46:57',35,'New User has been added to the database'),(22,'2014-05-09 00:46:57',36,'New User has been added to the database');
/*!40000 ALTER TABLE `SystemLog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TimeSheetApproved`
--

DROP TABLE IF EXISTS `TimeSheetApproved`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TimeSheetApproved` (
  `timesheetid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `starttime` datetime NOT NULL,
  `endtime` datetime NOT NULL,
  `hoursworked` time DEFAULT NULL,
  `approvedbyadmin` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`timesheetid`),
  KEY `uid` (`uid`),
  CONSTRAINT `TimeSheetApproved_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `Users` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TimeSheetApproved`
--

LOCK TABLES `TimeSheetApproved` WRITE;
/*!40000 ALTER TABLE `TimeSheetApproved` DISABLE KEYS */;
INSERT INTO `TimeSheetApproved` VALUES (1,3,'2014-05-05 07:40:14','2014-05-05 12:20:14','04:40:00',6,''),(2,4,'2014-05-05 08:45:07','2014-05-05 12:34:07','03:49:00',1,''),(3,8,'2014-05-05 13:35:00','2014-05-05 17:35:00','04:00:00',6,''),(4,3,'2014-05-04 11:12:12','2014-05-04 17:12:10','05:59:58',0,''),(5,3,'2014-05-09 09:12:59','2014-05-09 15:12:59','06:00:00',7,''),(6,4,'2014-05-06 09:07:07','2014-05-06 14:14:03','05:06:56',1,''),(7,4,'2014-05-07 15:38:33','2014-05-07 18:45:33','03:07:00',1,''),(8,4,'2014-05-08 10:30:11','2014-05-08 17:00:11','06:30:00',7,''),(9,4,'2014-05-09 09:15:40','2014-05-09 12:30:40','03:15:00',7,''),(10,8,'2014-05-07 10:30:52','2014-05-07 14:30:52','04:00:00',1,''),(11,8,'2014-05-05 00:17:46','2014-05-05 02:17:46','02:00:00',0,''),(12,8,'2014-05-11 20:18:13','2014-05-11 23:57:13','03:39:00',0,''),(13,3,'2014-05-04 17:27:14','2014-05-04 19:27:14','02:00:00',0,''),(14,16,'2014-05-08 09:59:45','2014-05-08 16:59:46','07:00:01',0,'I was late again... SORRY :(');
/*!40000 ALTER TABLE `TimeSheetApproved` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`cs4380sp14grp12`@`%`*/ /*!50003 TRIGGER `OnTimeSheetApprovedInsert` BEFORE INSERT ON `TimeSheetApproved` FOR EACH ROW begin 

set new.hoursworked = timediff(new.endtime,new.starttime);

end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`cs4380sp14grp12`@`%`*/ /*!50003 TRIGGER `OnTimeSheetUpdate` BEFORE UPDATE ON `TimeSheetApproved` FOR EACH ROW begin 

set new.hoursworked = timediff(new.endtime,new.starttime);

end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `TimeSheetRequests`
--

DROP TABLE IF EXISTS `TimeSheetRequests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TimeSheetRequests` (
  `timesheetid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `starttime` datetime NOT NULL,
  `endtime` datetime NOT NULL,
  `hoursworked` time DEFAULT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`timesheetid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TimeSheetRequests`
--

LOCK TABLES `TimeSheetRequests` WRITE;
/*!40000 ALTER TABLE `TimeSheetRequests` DISABLE KEYS */;
INSERT INTO `TimeSheetRequests` VALUES (1,3,'2014-05-04 11:12:12','2014-05-04 17:12:10','05:59:58',''),(2,3,'2014-05-09 09:12:59','2014-05-09 15:12:59','06:00:00',''),(3,4,'2014-05-06 09:07:07','2014-05-06 14:14:03','05:06:56',''),(4,4,'2014-05-07 15:38:33','2014-05-07 18:45:33','03:07:00',''),(5,4,'2014-05-08 10:30:11','2014-05-08 17:00:11','06:30:00',''),(6,4,'2014-05-09 09:15:40','2014-05-06 11:30:40','-69:45:00',''),(7,8,'2014-05-07 10:30:52','2014-05-07 14:30:52','04:00:00',''),(8,8,'2014-05-05 00:17:46','2014-05-05 02:17:46','02:00:00',''),(9,8,'2014-05-11 20:18:13','2014-05-11 23:57:13','03:39:00',''),(10,3,'2014-05-04 17:27:14','2014-05-04 19:27:14','02:00:00',''),(11,16,'2014-05-08 09:59:45','2014-05-08 16:59:46','07:00:01','I was late again... SORRY :(');
/*!40000 ALTER TABLE `TimeSheetRequests` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`cs4380sp14grp12`@`%`*/ /*!50003 TRIGGER `OnTimeSheetInsert` BEFORE INSERT ON `TimeSheetRequests` FOR EACH ROW begin 

set new.hoursworked = timediff(new.endtime,new.starttime);

end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `UserAnswer`
--

DROP TABLE IF EXISTS `UserAnswer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UserAnswer` (
  `uaid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(50) DEFAULT NULL,
  `questionid` int(11) DEFAULT NULL,
  `useranswer` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`uaid`)
) ENGINE=MyISAM AUTO_INCREMENT=397 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserAnswer`
--

LOCK TABLES `UserAnswer` WRITE;
/*!40000 ALTER TABLE `UserAnswer` DISABLE KEYS */;
INSERT INTO `UserAnswer` VALUES (1,'admin2@gmail.com',35,'true','2014-05-02 19:03:09'),(2,'admin2@gmail.com',36,'false','2014-05-02 19:03:09'),(3,'admin2@gmail.com',37,'true','2014-05-02 19:03:09'),(4,'admin2@gmail.com',38,'false','2014-05-02 19:03:09'),(5,'admin2@gmail.com',39,'true','2014-05-02 19:03:09'),(6,'admin2@gmail.com',40,'false','2014-05-02 19:03:09'),(7,'admin2@gmail.com',41,'false','2014-05-02 19:03:09'),(8,'admin2@gmail.com',35,'false','2014-05-02 19:24:29'),(9,'admin2@gmail.com',36,'false','2014-05-02 19:24:29'),(10,'admin2@gmail.com',37,'false','2014-05-02 19:24:29'),(11,'admin2@gmail.com',38,'false','2014-05-02 19:24:29'),(12,'admin2@gmail.com',39,'false','2014-05-02 19:24:29'),(13,'admin2@gmail.com',40,'true','2014-05-02 19:24:29'),(14,'admin2@gmail.com',41,'true','2014-05-02 19:24:29'),(15,'admin2@gmail.com',35,'true','2014-05-02 19:25:03'),(16,'admin2@gmail.com',36,'false','2014-05-02 19:25:03'),(17,'admin2@gmail.com',37,'true','2014-05-02 19:25:03'),(18,'admin2@gmail.com',38,'false','2014-05-02 19:25:03'),(19,'admin2@gmail.com',39,'true','2014-05-02 19:25:03'),(20,'admin2@gmail.com',40,'false','2014-05-02 19:25:03'),(21,'admin2@gmail.com',41,'false','2014-05-02 19:25:03'),(22,'admin2@gmail.com',35,'true','2014-05-02 19:27:29'),(23,'admin2@gmail.com',36,'false','2014-05-02 19:27:29'),(24,'admin2@gmail.com',37,'true','2014-05-02 19:27:29'),(25,'admin2@gmail.com',38,'false','2014-05-02 19:27:29'),(26,'admin2@gmail.com',39,'true','2014-05-02 19:27:29'),(27,'admin2@gmail.com',40,'false','2014-05-02 19:27:29'),(28,'admin2@gmail.com',41,'false','2014-05-02 19:27:29'),(29,'admin2@gmail.com',35,'false','2014-05-02 19:28:55'),(30,'admin2@gmail.com',36,'false','2014-05-02 19:28:55'),(31,'admin2@gmail.com',37,'true','2014-05-02 19:28:55'),(32,'admin2@gmail.com',38,'false','2014-05-02 19:28:55'),(33,'admin2@gmail.com',39,'true','2014-05-02 19:28:55'),(34,'admin2@gmail.com',40,'false','2014-05-02 19:28:55'),(35,'admin2@gmail.com',41,'false','2014-05-02 19:28:55'),(36,'admin2@gmail.com',35,'true','2014-05-02 19:33:28'),(37,'admin2@gmail.com',36,'true','2014-05-02 19:33:28'),(38,'admin2@gmail.com',37,'true','2014-05-02 19:33:28'),(39,'admin2@gmail.com',38,'false','2014-05-02 19:33:28'),(40,'admin2@gmail.com',39,'false','2014-05-02 19:33:28'),(41,'admin2@gmail.com',40,'false','2014-05-02 19:33:28'),(42,'admin2@gmail.com',41,'true','2014-05-02 19:33:28'),(43,'admin2@gmail.com',35,'false','2014-05-02 19:34:44'),(44,'admin2@gmail.com',36,'false','2014-05-02 19:34:44'),(45,'admin2@gmail.com',37,'false','2014-05-02 19:34:44'),(46,'admin2@gmail.com',38,'true','2014-05-02 19:34:44'),(47,'admin2@gmail.com',39,'true','2014-05-02 19:34:44'),(48,'admin2@gmail.com',40,'true','2014-05-02 19:34:44'),(49,'admin2@gmail.com',41,'false','2014-05-02 19:34:44'),(50,'admin2@gmail.com',35,'false','2014-05-02 19:54:39'),(51,'admin2@gmail.com',36,'false','2014-05-02 19:54:39'),(52,'admin2@gmail.com',37,'false','2014-05-02 19:54:39'),(53,'admin2@gmail.com',38,'true','2014-05-02 19:54:39'),(54,'admin2@gmail.com',39,'true','2014-05-02 19:54:39'),(55,'admin2@gmail.com',40,'true','2014-05-02 19:54:39'),(56,'admin2@gmail.com',41,'false','2014-05-02 19:54:39'),(57,'admin2@gmail.com',35,'false','2014-05-02 19:56:40'),(58,'admin2@gmail.com',36,'false','2014-05-02 19:56:40'),(59,'admin2@gmail.com',37,'false','2014-05-02 19:56:40'),(60,'admin2@gmail.com',38,'true','2014-05-02 19:56:40'),(61,'admin2@gmail.com',39,'true','2014-05-02 19:56:40'),(62,'admin2@gmail.com',40,'true','2014-05-02 19:56:40'),(63,'admin2@gmail.com',41,'false','2014-05-02 19:56:40'),(64,'admin2@gmail.com',35,'true','2014-05-02 19:59:56'),(65,'admin2@gmail.com',36,'false','2014-05-02 19:59:56'),(66,'admin2@gmail.com',37,'false','2014-05-02 19:59:56'),(67,'admin2@gmail.com',38,'true','2014-05-02 19:59:56'),(68,'admin2@gmail.com',39,'true','2014-05-02 19:59:56'),(69,'admin2@gmail.com',40,'true','2014-05-02 19:59:56'),(70,'admin2@gmail.com',41,'false','2014-05-02 19:59:56'),(71,'admin2@gmail.com',35,'true','2014-05-02 20:00:14'),(72,'admin2@gmail.com',36,'false','2014-05-02 20:00:14'),(73,'admin2@gmail.com',37,'false','2014-05-02 20:00:14'),(74,'admin2@gmail.com',38,'true','2014-05-02 20:00:14'),(75,'admin2@gmail.com',39,'true','2014-05-02 20:00:14'),(76,'admin2@gmail.com',40,'true','2014-05-02 20:00:14'),(77,'admin2@gmail.com',41,'false','2014-05-02 20:00:14'),(78,'admin2@gmail.com',35,'true','2014-05-02 20:04:40'),(79,'admin2@gmail.com',36,'true','2014-05-02 20:04:40'),(80,'admin2@gmail.com',37,'false','2014-05-02 20:04:40'),(81,'admin2@gmail.com',38,'true','2014-05-02 20:04:40'),(82,'admin2@gmail.com',39,'true','2014-05-02 20:04:40'),(83,'admin2@gmail.com',40,'true','2014-05-02 20:04:40'),(84,'admin2@gmail.com',41,'false','2014-05-02 20:04:40'),(85,'admin2@gmail.com',35,'true','2014-05-02 20:09:08'),(86,'admin2@gmail.com',36,'true','2014-05-02 20:09:08'),(87,'admin2@gmail.com',37,'false','2014-05-02 20:09:08'),(88,'admin2@gmail.com',38,'true','2014-05-02 20:09:08'),(89,'admin2@gmail.com',39,'true','2014-05-02 20:09:08'),(90,'admin2@gmail.com',40,'true','2014-05-02 20:09:08'),(91,'admin2@gmail.com',41,'false','2014-05-02 20:09:08'),(92,'admin2@gmail.com',35,'false','2014-05-02 20:11:43'),(93,'admin2@gmail.com',36,'true','2014-05-02 20:11:43'),(94,'admin2@gmail.com',37,'false','2014-05-02 20:11:43'),(95,'admin2@gmail.com',38,'true','2014-05-02 20:11:43'),(96,'admin2@gmail.com',39,'true','2014-05-02 20:11:43'),(97,'admin2@gmail.com',40,'false','2014-05-02 20:11:43'),(98,'admin2@gmail.com',41,'false','2014-05-02 20:11:43'),(99,'admin2@gmail.com',35,'true','2014-05-04 18:44:43'),(100,'admin2@gmail.com',36,'false','2014-05-04 18:44:43'),(101,'admin2@gmail.com',37,'true','2014-05-04 18:44:43'),(102,'admin2@gmail.com',38,'false','2014-05-04 18:44:43'),(103,'admin2@gmail.com',39,'true','2014-05-04 18:44:43'),(104,'admin2@gmail.com',40,'true','2014-05-04 18:44:43'),(105,'admin2@gmail.com',41,'true','2014-05-04 18:44:43'),(106,'user3@gmail.com',36,'true','2014-05-04 18:58:31'),(107,'user3@gmail.com',37,'false','2014-05-04 18:58:31'),(108,'user3@gmail.com',38,'false','2014-05-04 18:58:31'),(109,'user3@gmail.com',39,'false','2014-05-04 18:58:31'),(110,'user3@gmail.com',40,'false','2014-05-04 18:58:31'),(111,'user3@gmail.com',41,'false','2014-05-04 18:58:31'),(112,'user3@gmail.com',36,'true','2014-05-04 19:04:30'),(113,'user3@gmail.com',37,'false','2014-05-04 19:04:30'),(114,'user3@gmail.com',38,'false','2014-05-04 19:04:30'),(115,'user3@gmail.com',39,'false','2014-05-04 19:04:30'),(116,'user3@gmail.com',40,'false','2014-05-04 19:04:30'),(117,'user3@gmail.com',41,'false','2014-05-04 19:04:30'),(118,'user3@gmail.com',36,'true','2014-05-04 19:05:08'),(119,'user3@gmail.com',37,'false','2014-05-04 19:05:08'),(120,'user3@gmail.com',38,'false','2014-05-04 19:05:08'),(121,'user3@gmail.com',39,'false','2014-05-04 19:05:08'),(122,'user3@gmail.com',40,'false','2014-05-04 19:05:08'),(123,'user3@gmail.com',41,'false','2014-05-04 19:05:08'),(124,'user3@gmail.com',26,'a','2014-05-04 19:06:47'),(125,'user3@gmail.com',28,'e','2014-05-04 19:06:47'),(126,'user3@gmail.com',26,'a','2014-05-04 19:07:43'),(127,'user3@gmail.com',28,'e','2014-05-04 19:07:43'),(128,'user3@gmail.com',26,'a','2014-05-04 19:08:52'),(129,'user3@gmail.com',28,'e','2014-05-04 19:08:52'),(130,'user3@gmail.com',26,'a','2014-05-04 19:10:39'),(131,'user3@gmail.com',28,'e','2014-05-04 19:10:39'),(132,'user3@gmail.com',26,'a','2014-05-04 19:13:01'),(133,'user3@gmail.com',28,'e','2014-05-04 19:13:01'),(134,'user3@gmail.com',26,'a','2014-05-04 19:13:45'),(135,'user3@gmail.com',28,'e','2014-05-04 19:13:45'),(136,'user3@gmail.com',26,'a','2014-05-04 19:15:06'),(137,'user3@gmail.com',28,'e','2014-05-04 19:15:06'),(138,'user3@gmail.com',36,'true','2014-05-04 19:15:25'),(139,'user3@gmail.com',37,'true','2014-05-04 19:15:25'),(140,'user3@gmail.com',38,'true','2014-05-04 19:15:25'),(141,'user3@gmail.com',39,'true','2014-05-04 19:15:25'),(142,'user3@gmail.com',40,'false','2014-05-04 19:15:25'),(143,'user3@gmail.com',41,'true','2014-05-04 19:15:25'),(144,'admin2@gmail.com',35,'false','2014-05-04 19:16:34'),(145,'admin2@gmail.com',36,'true','2014-05-04 19:16:34'),(146,'admin2@gmail.com',37,'true','2014-05-04 19:16:34'),(147,'admin2@gmail.com',38,'true','2014-05-04 19:16:34'),(148,'admin2@gmail.com',39,'false','2014-05-04 19:16:34'),(149,'admin2@gmail.com',40,'true','2014-05-04 19:16:34'),(150,'admin2@gmail.com',41,'false','2014-05-04 19:16:34'),(151,'admin2@gmail.com',35,'false','2014-05-04 19:17:52'),(152,'admin2@gmail.com',36,'true','2014-05-04 19:17:52'),(153,'admin2@gmail.com',37,'true','2014-05-04 19:17:52'),(154,'admin2@gmail.com',38,'true','2014-05-04 19:17:52'),(155,'admin2@gmail.com',39,'false','2014-05-04 19:17:52'),(156,'admin2@gmail.com',40,'true','2014-05-04 19:17:52'),(157,'admin2@gmail.com',41,'false','2014-05-04 19:17:52'),(158,'user3@gmail.com',36,'true','2014-05-04 19:18:00'),(159,'user3@gmail.com',37,'true','2014-05-04 19:18:00'),(160,'user3@gmail.com',38,'true','2014-05-04 19:18:00'),(161,'user3@gmail.com',39,'true','2014-05-04 19:18:00'),(162,'user3@gmail.com',40,'false','2014-05-04 19:18:00'),(163,'user3@gmail.com',41,'true','2014-05-04 19:18:00'),(164,'user3@gmail.com',25,'e','2014-05-04 19:18:20'),(165,'user3@gmail.com',26,'c','2014-05-04 19:18:20'),(166,'user3@gmail.com',28,'a','2014-05-04 19:18:20'),(167,'user3@gmail.com',36,'true','2014-05-04 19:18:34'),(168,'user3@gmail.com',37,'false','2014-05-04 19:18:34'),(169,'user3@gmail.com',38,'false','2014-05-04 19:18:34'),(170,'user3@gmail.com',39,'false','2014-05-04 19:18:34'),(171,'user3@gmail.com',40,'true','2014-05-04 19:18:34'),(172,'user3@gmail.com',41,'true','2014-05-04 19:18:34'),(173,'user3@gmail.com',36,'true','2014-05-04 19:18:49'),(174,'user3@gmail.com',37,'false','2014-05-04 19:18:49'),(175,'user3@gmail.com',38,'false','2014-05-04 19:18:49'),(176,'user3@gmail.com',39,'false','2014-05-04 19:18:49'),(177,'user3@gmail.com',40,'true','2014-05-04 19:18:49'),(178,'user3@gmail.com',41,'true','2014-05-04 19:18:49'),(179,'user3@gmail.com',36,'true','2014-05-04 19:19:54'),(180,'user3@gmail.com',37,'false','2014-05-04 19:19:54'),(181,'user3@gmail.com',38,'false','2014-05-04 19:19:54'),(182,'user3@gmail.com',39,'false','2014-05-04 19:19:54'),(183,'user3@gmail.com',40,'true','2014-05-04 19:19:54'),(184,'user3@gmail.com',41,'true','2014-05-04 19:19:54'),(185,'admin2@gmail.com',35,'true','2014-05-04 19:20:20'),(186,'admin2@gmail.com',36,'true','2014-05-04 19:20:20'),(187,'admin2@gmail.com',37,'true','2014-05-04 19:20:20'),(188,'admin2@gmail.com',38,'false','2014-05-04 19:20:20'),(189,'admin2@gmail.com',39,'true','2014-05-04 19:20:20'),(190,'admin2@gmail.com',40,'true','2014-05-04 19:20:20'),(191,'admin2@gmail.com',41,'false','2014-05-04 19:20:20'),(192,'user3@gmail.com',36,'true','2014-05-04 19:20:51'),(193,'user3@gmail.com',37,'false','2014-05-04 19:20:51'),(194,'user3@gmail.com',38,'false','2014-05-04 19:20:51'),(195,'user3@gmail.com',39,'false','2014-05-04 19:20:51'),(196,'user3@gmail.com',40,'true','2014-05-04 19:20:51'),(197,'user3@gmail.com',41,'true','2014-05-04 19:20:51'),(198,'admin2@gmail.com',35,'true','2014-05-04 19:22:07'),(199,'admin2@gmail.com',36,'true','2014-05-04 19:22:07'),(200,'admin2@gmail.com',37,'true','2014-05-04 19:22:07'),(201,'admin2@gmail.com',38,'true','2014-05-04 19:22:07'),(202,'admin2@gmail.com',39,'true','2014-05-04 19:22:07'),(203,'admin2@gmail.com',40,'false','2014-05-04 19:22:07'),(204,'admin2@gmail.com',41,'false','2014-05-04 19:22:07'),(205,'admin2@gmail.com',35,'true','2014-05-04 19:22:22'),(206,'admin2@gmail.com',36,'false','2014-05-04 19:22:22'),(207,'admin2@gmail.com',37,'true','2014-05-04 19:22:22'),(208,'admin2@gmail.com',39,'false','2014-05-04 19:22:22'),(209,'admin2@gmail.com',40,'false','2014-05-04 19:22:22'),(210,'admin2@gmail.com',41,'true','2014-05-04 19:22:22'),(211,'admin2@gmail.com',35,'false','2014-05-04 19:22:32'),(212,'admin2@gmail.com',35,'false','2014-05-04 19:22:47'),(213,'admin2@gmail.com',35,'false','2014-05-04 19:34:40'),(214,'admin2@gmail.com',35,'false','2014-05-04 19:34:49'),(215,'admin2@gmail.com',35,'false','2014-05-04 19:34:59'),(216,'admin2@gmail.com',36,'true','2014-05-04 19:34:59'),(217,'admin2@gmail.com',38,'true','2014-05-04 19:34:59'),(218,'admin2@gmail.com',39,'false','2014-05-04 19:34:59'),(219,'admin2@gmail.com',40,'true','2014-05-04 19:34:59'),(220,'admin2@gmail.com',41,'true','2014-05-04 19:34:59'),(221,'admin2@gmail.com',35,'false','2014-05-04 19:35:36'),(222,'admin2@gmail.com',36,'true','2014-05-04 19:35:36'),(223,'admin2@gmail.com',38,'true','2014-05-04 19:35:36'),(224,'admin2@gmail.com',39,'false','2014-05-04 19:35:36'),(225,'admin2@gmail.com',40,'true','2014-05-04 19:35:36'),(226,'admin2@gmail.com',41,'true','2014-05-04 19:35:36'),(227,'admin2@gmail.com',35,'false','2014-05-04 19:51:51'),(228,'admin2@gmail.com',36,'true','2014-05-04 19:51:51'),(229,'admin2@gmail.com',38,'true','2014-05-04 19:51:51'),(230,'admin2@gmail.com',39,'false','2014-05-04 19:51:51'),(231,'admin2@gmail.com',40,'true','2014-05-04 19:51:51'),(232,'admin2@gmail.com',41,'true','2014-05-04 19:51:51'),(233,'user3@gmail.com',35,'true','2014-05-04 23:00:32'),(234,'user3@gmail.com',36,'false','2014-05-04 23:00:32'),(235,'user3@gmail.com',37,'false','2014-05-04 23:00:32'),(236,'user3@gmail.com',38,'false','2014-05-04 23:00:32'),(237,'user3@gmail.com',39,'false','2014-05-04 23:00:32'),(238,'user3@gmail.com',40,'false','2014-05-04 23:00:32'),(239,'user3@gmail.com',41,'false','2014-05-04 23:00:32'),(240,'user3@gmail.com',35,'true','2014-05-04 23:01:19'),(241,'user3@gmail.com',36,'false','2014-05-04 23:01:19'),(242,'user3@gmail.com',37,'false','2014-05-04 23:01:19'),(243,'user3@gmail.com',38,'false','2014-05-04 23:01:19'),(244,'user3@gmail.com',39,'false','2014-05-04 23:01:19'),(245,'user3@gmail.com',40,'false','2014-05-04 23:01:19'),(246,'user3@gmail.com',41,'false','2014-05-04 23:01:19'),(247,'user3@gmail.com',36,'true','2014-05-04 23:02:52'),(248,'user3@gmail.com',37,'false','2014-05-04 23:02:52'),(249,'user3@gmail.com',38,'false','2014-05-04 23:02:52'),(250,'user3@gmail.com',39,'false','2014-05-04 23:02:52'),(251,'user3@gmail.com',40,'true','2014-05-04 23:02:52'),(252,'user3@gmail.com',41,'true','2014-05-04 23:02:52'),(253,'user3@gmail.com',36,'true','2014-05-04 23:03:21'),(254,'user3@gmail.com',37,'false','2014-05-04 23:03:21'),(255,'user3@gmail.com',38,'false','2014-05-04 23:03:21'),(256,'user3@gmail.com',39,'false','2014-05-04 23:03:21'),(257,'user3@gmail.com',40,'true','2014-05-04 23:03:21'),(258,'user3@gmail.com',41,'true','2014-05-04 23:03:21'),(259,'user3@gmail.com',36,'true','2014-05-04 23:03:40'),(260,'user3@gmail.com',37,'false','2014-05-04 23:03:40'),(261,'user3@gmail.com',38,'false','2014-05-04 23:03:40'),(262,'user3@gmail.com',39,'false','2014-05-04 23:03:40'),(263,'user3@gmail.com',40,'true','2014-05-04 23:03:40'),(264,'user3@gmail.com',41,'true','2014-05-04 23:03:40'),(265,'user3@gmail.com',36,'true','2014-05-04 23:03:54'),(266,'user3@gmail.com',37,'false','2014-05-04 23:03:54'),(267,'user3@gmail.com',38,'false','2014-05-04 23:03:54'),(268,'user3@gmail.com',39,'false','2014-05-04 23:03:54'),(269,'user3@gmail.com',40,'true','2014-05-04 23:03:54'),(270,'user3@gmail.com',41,'true','2014-05-04 23:03:54'),(271,'user3@gmail.com',36,'true','2014-05-04 23:04:13'),(272,'user3@gmail.com',37,'false','2014-05-04 23:04:13'),(273,'user3@gmail.com',38,'false','2014-05-04 23:04:13'),(274,'user3@gmail.com',39,'false','2014-05-04 23:04:13'),(275,'user3@gmail.com',40,'true','2014-05-04 23:04:13'),(276,'user3@gmail.com',41,'true','2014-05-04 23:04:13'),(277,'user3@gmail.com',36,'true','2014-05-04 23:06:56'),(278,'user3@gmail.com',37,'false','2014-05-04 23:06:56'),(279,'user3@gmail.com',38,'false','2014-05-04 23:06:56'),(280,'user3@gmail.com',39,'false','2014-05-04 23:06:56'),(281,'user3@gmail.com',40,'true','2014-05-04 23:06:56'),(282,'user3@gmail.com',41,'true','2014-05-04 23:06:56'),(283,'user3@gmail.com',25,'b','2014-05-04 23:07:11'),(284,'user3@gmail.com',26,'b','2014-05-04 23:07:11'),(285,'user3@gmail.com',28,'b','2014-05-04 23:07:11'),(286,'user1@gmail.com',35,'true','2014-05-04 23:16:01'),(287,'user1@gmail.com',36,'true','2014-05-04 23:16:01'),(288,'user1@gmail.com',38,'true','2014-05-04 23:16:01'),(289,'user1@gmail.com',35,'true','2014-05-04 23:16:05'),(290,'user1@gmail.com',36,'true','2014-05-04 23:16:05'),(291,'user1@gmail.com',38,'true','2014-05-04 23:16:05'),(292,'user1@gmail.com',35,'true','2014-05-04 23:16:30'),(293,'user1@gmail.com',36,'true','2014-05-04 23:16:30'),(294,'user1@gmail.com',38,'true','2014-05-04 23:16:30'),(295,'0',35,'false','2014-05-04 23:18:17'),(296,'user1@gmail.com',35,'true','2014-05-04 23:19:14'),(297,'user1@gmail.com',36,'false','2014-05-04 23:19:14'),(298,'user1@gmail.com',37,'false','2014-05-04 23:19:14'),(299,'user1@gmail.com',38,'true','2014-05-04 23:19:14'),(300,'user1@gmail.com',35,'true','2014-05-05 00:58:21'),(301,'user1@gmail.com',36,'false','2014-05-05 00:58:21'),(302,'user1@gmail.com',37,'false','2014-05-05 00:58:21'),(303,'user1@gmail.com',38,'false','2014-05-05 00:58:21'),(304,'user1@gmail.com',39,'true','2014-05-05 00:58:21'),(305,'user1@gmail.com',40,'true','2014-05-05 00:58:21'),(306,'user1@gmail.com',41,'true','2014-05-05 00:58:21'),(307,'user1@gmail.com',35,'true','2014-05-05 01:01:41'),(308,'user1@gmail.com',36,'true','2014-05-05 01:01:41'),(309,'user1@gmail.com',37,'true','2014-05-05 01:01:41'),(310,'user1@gmail.com',38,'true','2014-05-05 01:01:41'),(311,'user1@gmail.com',39,'true','2014-05-05 01:01:41'),(312,'user1@gmail.com',40,'true','2014-05-05 01:01:41'),(313,'user1@gmail.com',41,'true','2014-05-05 01:01:41'),(314,'admin1@gmail.com',35,'true','2014-05-05 01:09:51'),(315,'admin1@gmail.com',36,'true','2014-05-05 01:09:51'),(316,'admin1@gmail.com',37,'false','2014-05-05 01:09:51'),(317,'admin1@gmail.com',38,'true','2014-05-05 01:09:51'),(318,'admin1@gmail.com',39,'false','2014-05-05 01:09:51'),(319,'admin1@gmail.com',40,'true','2014-05-05 01:09:51'),(320,'admin1@gmail.com',41,'false','2014-05-05 01:09:51'),(321,'admin1@gmail.com',35,'true','2014-05-05 01:16:27'),(322,'admin1@gmail.com',36,'true','2014-05-05 01:16:27'),(323,'admin1@gmail.com',37,'false','2014-05-05 01:16:27'),(324,'admin1@gmail.com',38,'true','2014-05-05 01:16:27'),(325,'admin1@gmail.com',39,'false','2014-05-05 01:16:27'),(326,'admin1@gmail.com',40,'true','2014-05-05 01:16:27'),(327,'admin1@gmail.com',41,'false','2014-05-05 01:16:27'),(328,'admin1@gmail.com',35,'false','2014-05-05 01:16:44'),(329,'admin1@gmail.com',36,'false','2014-05-05 01:16:44'),(330,'admin1@gmail.com',37,'true','2014-05-05 01:16:44'),(331,'admin1@gmail.com',38,'true','2014-05-05 01:16:44'),(332,'admin1@gmail.com',39,'false','2014-05-05 01:16:44'),(333,'admin1@gmail.com',40,'true','2014-05-05 01:16:44'),(334,'admin1@gmail.com',41,'false','2014-05-05 01:16:44'),(335,'admin1@gmail.com',35,'false','2014-05-05 01:17:29'),(336,'admin1@gmail.com',36,'false','2014-05-05 01:17:29'),(337,'admin1@gmail.com',37,'true','2014-05-05 01:17:29'),(338,'admin1@gmail.com',38,'true','2014-05-05 01:17:29'),(339,'admin1@gmail.com',39,'false','2014-05-05 01:17:29'),(340,'admin1@gmail.com',40,'true','2014-05-05 01:17:29'),(341,'admin1@gmail.com',41,'false','2014-05-05 01:17:29'),(342,'user1@gmail.com',35,'true','2014-05-05 02:00:26'),(343,'user1@gmail.com',38,'true','2014-05-05 02:00:26'),(344,'user1@gmail.com',39,'true','2014-05-05 02:00:26'),(345,'user1@gmail.com',36,'true','2014-05-05 02:42:14'),(346,'user1@gmail.com',38,'true','2014-05-05 02:42:14'),(347,'user1@gmail.com',39,'true','2014-05-05 02:42:14'),(348,'user1@gmail.com',40,'true','2014-05-05 02:42:14'),(349,'user1@gmail.com',41,'true','2014-05-05 02:42:14'),(350,'user1@gmail.com',35,'true','2014-05-05 02:45:27'),(351,'user1@gmail.com',35,'true','2014-05-05 02:45:34'),(352,'user1@gmail.com',36,'true','2014-05-05 02:45:34'),(353,'user1@gmail.com',37,'true','2014-05-05 02:45:34'),(354,'user1@gmail.com',38,'true','2014-05-05 02:45:34'),(355,'user1@gmail.com',39,'true','2014-05-05 02:45:34'),(356,'user1@gmail.com',40,'true','2014-05-05 02:45:34'),(357,'user1@gmail.com',41,'true','2014-05-05 02:45:34'),(358,'a@gmail.com',35,'false','2014-05-05 02:45:36'),(359,'a@gmail.com',36,'true','2014-05-05 02:45:36'),(360,'a@gmail.com',37,'false','2014-05-05 02:45:36'),(361,'a@gmail.com',38,'false','2014-05-05 02:45:36'),(362,'a@gmail.com',39,'true','2014-05-05 02:45:36'),(363,'a@gmail.com',40,'true','2014-05-05 02:45:36'),(364,'a@gmail.com',41,'true','2014-05-05 02:45:36'),(365,'a@gmail.com',35,'true','2014-05-05 05:31:39'),(366,'a@gmail.com',36,'true','2014-05-05 05:31:39'),(367,'a@gmail.com',37,'true','2014-05-05 05:31:39'),(368,'a@gmail.com',38,'true','2014-05-05 05:31:39'),(369,'a@gmail.com',39,'true','2014-05-05 05:31:39'),(370,'a@gmail.com',40,'true','2014-05-05 05:31:39'),(371,'a@gmail.com',41,'true','2014-05-05 05:31:39'),(372,'a@gmail.com',35,'true','2014-05-05 06:00:29'),(373,'a@gmail.com',36,'false','2014-05-05 06:00:29'),(374,'a@gmail.com',37,'true','2014-05-05 06:00:29'),(375,'a@gmail.com',38,'true','2014-05-05 06:00:29'),(376,'a@gmail.com',39,'true','2014-05-05 06:00:29'),(377,'a@gmail.com',40,'true','2014-05-05 06:00:29'),(378,'a@gmail.com',41,'true','2014-05-05 06:00:29'),(379,'admin2@gmail.com',35,'true','2014-05-05 22:54:12'),(380,'admin2@gmail.com',36,'true','2014-05-05 22:54:12'),(381,'admin2@gmail.com',37,'false','2014-05-05 22:54:12'),(382,'admin2@gmail.com',38,'true','2014-05-05 22:54:12'),(383,'admin2@gmail.com',39,'true','2014-05-05 22:54:12'),(384,'admin2@gmail.com',40,'true','2014-05-05 22:54:12'),(385,'admin2@gmail.com',41,'false','2014-05-05 22:54:12'),(386,'zz@zz.com',35,'true','2014-05-09 01:44:10'),(387,'zz@zz.com',36,'true','2014-05-09 01:44:10'),(388,'zz@zz.com',37,'false','2014-05-09 01:44:10'),(389,'zz@zz.com',38,'true','2014-05-09 01:44:10'),(390,'zz@zz.com',39,'false','2014-05-09 01:44:10'),(391,'zz@zz.com',40,'false','2014-05-09 01:44:10'),(392,'zz@zz.com',41,'true','2014-05-09 01:44:10'),(393,'zz@zz.com',25,'b','2014-05-09 01:44:43'),(394,'zz@zz.com',26,'b','2014-05-09 01:44:43'),(395,'zz@zz.com',28,'a','2014-05-09 01:44:43'),(396,'zz@zz.com',29,'false','2014-05-09 01:44:56');
/*!40000 ALTER TABLE `UserAnswer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UserHasInfraction`
--

DROP TABLE IF EXISTS `UserHasInfraction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UserHasInfraction` (
  `infractioncasenumber` int(11) NOT NULL AUTO_INCREMENT,
  `infractionid` int(11) NOT NULL,
  `uidoffender` varchar(25) NOT NULL,
  `uidsupplier` varchar(25) NOT NULL,
  `dateofinfraction` datetime NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`infractioncasenumber`),
  KEY `infractionid` (`infractionid`),
  CONSTRAINT `UserHasInfraction_ibfk_1` FOREIGN KEY (`infractionid`) REFERENCES `Infractions` (`infractionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserHasInfraction`
--

LOCK TABLES `UserHasInfraction` WRITE;
/*!40000 ALTER TABLE `UserHasInfraction` DISABLE KEYS */;
/*!40000 ALTER TABLE `UserHasInfraction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `firstname` varchar(250) DEFAULT NULL,
  `lastname` varchar(250) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (1,'admin1@gmail.com','admin1@gmail.com','','',1),(2,'admin@gmail.com','admin@gmail.com','','',2),(3,'user1@gmail.com','user1@gmail.com','','',0),(4,'user2@gmail.com','user2@gmail.com','Kali','Parker',0),(6,'admin2@gmail.com','admin2@gmail.com','Brett','Koonce',1),(7,'admin3@gmail.com','admin3@gmail.com','Ben','Ernst',1),(8,'user3@gmail.com','user3@gmail.com','','',0),(9,'admin4@gmail.com','admin4@gmail.com','Joe','G',0),(10,'ben@sucks.com',NULL,'Ben','Jamin',0),(11,'zz@zz.com','zz@zz.com','','',0),(12,'Eval@tomorrow.com','test','Gavin','Wilkerson',0),(13,'zark@people.com','test','Zark','Son',0),(14,'Evangalianl@timbuck.com','test','Eva','Galion',0),(15,'Simba@Lionking.com','test','Sim','Ba',0),(16,'BenErnst@NeverGoingToGetAJob.com','test','Ben','Ernst',0),(17,'Rach@safeassign.com','test','Rachel','Peterson',0),(18,'Jimmy@JJ.com','test','Jimmy','John',0),(19,'DrMac@Md.com','test','Mickey','Donaldson',0),(33,'Dmx@run.com','test','Alec','Samson',0),(34,'aphc@mail.com','test','Atef','Jenkins',0),(35,'aarn2@mail.com','test','Ronald','Oxandale',0),(36,'Matt@mail.com','test','Matt','Orf',0);
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`cs4380sp14grp12`@`%`*/ /*!50003 TRIGGER `AfterInsertIntoUsers` AFTER INSERT ON `Users` FOR EACH ROW begin

INSERT INTO Volunteers (username,approved,activevolunteer,fname,lname) VALUES (new.username,false,false,new.firstname,new.lastname);
INSERT INTO SystemLog (logdate,loguserid,logaction) VALUES (NOW(),new.uid,'New User has been added to the database');

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`cs4380sp14grp12`@`%`*/ /*!50003 TRIGGER `AfterDeleteOnUsers` BEFORE DELETE ON `Users`
FOR EACH ROW 
begin

INSERT INTO SystemLog (logdate,loguserid,logaction) VALUES (NOW(),uid,'A User has been removed from the database!');

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `Volunteers`
--

DROP TABLE IF EXISTS `Volunteers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Volunteers` (
  `username` char(50) NOT NULL DEFAULT '',
  `age` int(11) DEFAULT NULL,
  `fname` char(30) DEFAULT NULL,
  `lname` char(30) DEFAULT NULL,
  `activevolunteer` tinyint(1) NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `streetaddress` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `statecode` varchar(2) DEFAULT NULL,
  `primaryphone` char(10) DEFAULT NULL,
  `altphone` char(10) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`username`),
  CONSTRAINT `Username` FOREIGN KEY (`username`) REFERENCES `Users` (`username`) ON DELETE CASCADE,
  CONSTRAINT `Volunteers_ibfk_1` FOREIGN KEY (`username`) REFERENCES `Users` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Volunteers`
--

LOCK TABLES `Volunteers` WRITE;
/*!40000 ALTER TABLE `Volunteers` DISABLE KEYS */;
INSERT INTO `Volunteers` VALUES ('aarn2@mail.com',NULL,'Ronald','Ronald',0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('admin1@gmail.com',0,'','',0,1,'','','','','',NULL,NULL),('admin2@gmail.com',NULL,NULL,NULL,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('admin3@gmail.com',NULL,NULL,NULL,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('admin4@gmail.com',NULL,NULL,NULL,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('admin@gmail.com',NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('aphc@mail.com',NULL,'Atef','Atef',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('ben@sucks.com',NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('BenErnst@NeverGoingToGetAJob.com',NULL,'Ben','Ben',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Dmx@run.com',NULL,'Alec','Alec',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('DrMac@Md.com',NULL,'Mickey','Mickey',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Eval@tomorrow.com',NULL,'Gavin','Gavin',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Evangalianl@timbuck.com',NULL,'Eva','Eva',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Jimmy@JJ.com',NULL,'Jimmy','Jimmy',0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Matt@mail.com',NULL,'Matt','Matt',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Rach@safeassign.com',NULL,'Rachel','Rachel',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Simba@Lionking.com',NULL,'Sim','Sim',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('user1@gmail.com',20,'','',0,1,'','','','','',NULL,NULL),('user2@gmail.com',NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('user3@gmail.com',NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('zark@people.com',NULL,'Zark','Zark',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('zz@zz.com',0,'','',0,1,'','','','','',NULL,NULL);
/*!40000 ALTER TABLE `Volunteers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-08 21:01:29
