/*
SQLyog Enterprise v12.09 (64 bit)
MySQL - 10.1.9-MariaDB : Database - infotheory
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`infotheory` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `infotheory`;

/*Table structure for table `tb_chapter` */

DROP TABLE IF EXISTS `tb_chapter`;

CREATE TABLE `tb_chapter` (
  `chapter_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`chapter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_chapter` */

insert  into `tb_chapter`(`chapter_id`,`title`) values (1,'第一章1'),(2,'第二章'),(3,'第三章'),(4,'3月2日课堂作业');

/*Table structure for table `tb_discussion` */

DROP TABLE IF EXISTS `tb_discussion`;

CREATE TABLE `tb_discussion` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT '2001-01-01 00:00:00',
  `comment_type` bigint(10) unsigned NOT NULL DEFAULT '0' COMMENT '讨论类型 心得：1 疑问：2 吐槽：3',
  `comment` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tb_discussion_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_discussion` */

insert  into `tb_discussion`(`id`,`user_id`,`comment_time`,`comment_type`,`comment`) values (2,1,'2001-01-01 00:00:00',1,'haha'),(3,22,'2016-05-29 00:00:00',1,'真正快乐的人是那种在走弯路时也不忘享受风景的人。'),(4,22,'2016-05-29 00:00:00',1,'真正快乐的人是那种在走弯路时也不忘享受风景的人。'),(7,22,'2016-05-29 15:50:59',3,'told tales of a giant sea monster, the kraken.That dragged men from their boats to the'),(8,22,'2016-05-29 15:52:03',3,'told tales of a giant sea monster, the kraken.That dragged men from their boats to the');

/*Table structure for table `tb_feedback` */

DROP TABLE IF EXISTS `tb_feedback`;

CREATE TABLE `tb_feedback` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `feedback_time` datetime NOT NULL DEFAULT '2001-01-01 00:00:00',
  `que1` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `que2` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `que3` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `que4` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `que5` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `que6` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `que7` varbinary(20) NOT NULL DEFAULT 'null',
  `que8` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `suggestion` varchar(300) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_feedback` */

insert  into `tb_feedback`(`id`,`user_id`,`feedback_time`,`que1`,`que2`,`que3`,`que4`,`que5`,`que6`,`que7`,`que8`,`suggestion`) values (13,13,'2016-05-25 17:01:17','是','非常好','非常好','非常好','非常大','非常好','非常满意','很大','喊口号'),(14,1,'2016-05-25 17:04:58','是','较差','较好','较好','非常大','较好','一般','较大','bucuo ');

/*Table structure for table `tb_question` */

DROP TABLE IF EXISTS `tb_question`;

CREATE TABLE `tb_question` (
  `que_id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `difficult` int(2) DEFAULT NULL,
  `type` int(20) DEFAULT NULL,
  `que_photo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chapter_id` int(10) DEFAULT NULL,
  `ans_photo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`que_id`),
  KEY `FK_Relationship_1` (`chapter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_question` */

insert  into `tb_question`(`que_id`,`question`,`answer`,`difficult`,`type`,`que_photo`,`chapter_id`,`ans_photo`) values (0,'','',1,4,'1430453557322.jpg',1,'1430453557324.jpg'),(1,'在本征半导体中加入(   )元素可形成N型半导体，加入(   )元素可形成P型半导体。<br/>A. 五价         B. 四价        C. 三价','A.  C.',1,1,NULL,1,NULL),(2,'当温度升高时，二极管的反向饱和电流将 (   )。<br/>A. 增大         B. 不变        C. 减小','A',1,1,NULL,1,NULL),(3,'工作在放大区的某三极管，如果当IB从12μA增大到22μA时，IC从1mA变为2mA，那么它的Β约为(   )。<br/> A. 83           B. 91           C. 100','C',1,1,NULL,1,NULL),(4,'当场效应管的漏极直流电流ID从2mA变为4mA时，它的低频跨导Gm将(   ) <br/>  A.增大          B.不变         C.减小     ','A',1,1,NULL,1,NULL),(5,'能否将1.5V的干电池以正向接法接到二极管两端？为什么？','解：不能。因为二极管的正向电流与其端电压成指数关系，当端电压为1.5V时，管子会因电流过大而烧坏。',2,2,NULL,1,NULL),(7,'电路如图所示，已知晶体管B＝50，在下列情况下，用直流电压表测晶体管的集电极电位，应分别为多少？设VCC＝12V，晶体管饱和管压降UCES＝0.5V。<br/>\r\n（1）正常情况 （2）Rb1短路（3）Rb1开路（4）Rb2开路（5）Rc短路','解：设UBE＝0.7V。则<br/>\r\n\r\n（1） 基极静态电流<br/>\r\n\r\n          \r\n\r\n（2）由于UBE＝0V，T截止，UC＝12V。<br/>\r\n\r\n（3）临界饱和基极电流<br/>\r\n\r\n          \r\n\r\n实际基极电流<br/>\r\n\r\n          \r\n\r\n由于IB＞IBS，故T饱和，UC＝UCES＝0.5V。<br/> \r\n\r\n（4）T截止，UC＝12V。<br/>\r\n\r\n（5）由于集电极直接接直流电源，UC＝VCC＝12V<br/>',3,4,NULL,2,NULL),(8,'半导体中有（ ）和（ ）两种载流子参与导电。','空穴  自由电子',1,2,NULL,1,NULL),(9,'集成运算放大器输入级一般采用（ ）电路，其作用是用来减小（ ）。','差分放大  零点漂移',2,2,NULL,1,NULL),(10,'放大电路中为了提高输入电阻引入（ ）反馈，为了降低输入电阻应引入（ ）反馈。','串联   并联',2,2,NULL,1,NULL),(11,'光电二极管能将（ ）转变为（ ），它工作时需加（ ）偏置电压。','光信号  电信号  反向',1,2,NULL,1,NULL),(12,'当温度升高时，二极管的反向饱和电流将增大，正向电压将减小。（  ）','正确',1,3,NULL,1,NULL),(13,'晶体管具有电流放大作用的外部条件是发射结反偏，集电结正偏。（  ）','错误，发射结正偏，集电结反偏。',1,3,NULL,1,NULL),(14,'差分放大电路对差模输入信号具有良好的放大作用，对共模输入信号具有很强的抑制作用，差分放大电路的零点漂移很小。（  ）','正确',2,3,NULL,1,NULL),(15,'当温度升高时，晶体管的参数增大，I减小，导通电压增大。（  ）','错误。当温度升高时，晶体管的参数增大，I增大，导通电压减小。',2,3,NULL,1,NULL),(16,'在图中，已知I=2A，求Uab和Pab。','解：Uab=IR+2-4=2×4+2-4=6V，<br/> 电流I与Uab为关联参考方向，<br/>因此  Pab=UabI=6×2=12W',1,4,'1428331069643.jpg',1,NULL),(17,'求图中的R和Uab、Uac。','解：对d点应用KCL得：I=4A，<br/>故有 RI=4R=4，R=1Ω  <br/>Uab=Uad+Udb=3×10＋（-4）=26V<br/> Uac=Uad-Ucd=3×10- (-7)×2=44V',1,4,'1428331164762.jpg',1,NULL),(18,'如题','在图（A）所示电路中，当二极管断开时，二极管两端的电压等于。所以<br/>\r\n当ui>=Vc时，二极管截止，u0=ui<br/>\r\n当ui<Vc时，二极管导通，u0=Vc=5V',2,4,'1428331697437.jpg',1,NULL),(19,'能否将1.5V的干电池以正向接法接到二极管两端？为什么','不能，因为二极管的正向电流与其端电压成指数关系，当端电压为1.5V时，管子会因为电压过大而烧坏。',1,4,NULL,1,NULL);

/*Table structure for table `tb_users` */

DROP TABLE IF EXISTS `tb_users`;

CREATE TABLE `tb_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '' COMMENT '用户名',
  `user_pass` varchar(64) NOT NULL DEFAULT '' COMMENT '登录密码；sp_password加密',
  `user_nicename` varchar(50) NOT NULL DEFAULT '' COMMENT '用户美名',
  `user_email` varchar(100) NOT NULL DEFAULT '' COMMENT '登录邮箱',
  `user_url` varchar(100) NOT NULL DEFAULT '' COMMENT '用户个人网站',
  `avatar` varchar(255) DEFAULT 'views/common/img/avatar.png' COMMENT '用户头像，相对于upload/avatar目录',
  `sex` smallint(1) DEFAULT '0' COMMENT '性别；0：保密，1：男；2：女',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `signature` varchar(255) DEFAULT NULL COMMENT '个性签名',
  `last_login_ip` varchar(16) DEFAULT NULL COMMENT '最后登录ip',
  `last_login_time` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' COMMENT '最后登录时间',
  `create_time` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' COMMENT '注册时间',
  `user_status` int(11) NOT NULL DEFAULT '1' COMMENT '用户状态 0：禁用； 1：正常 ；2：未验证',
  `user_type` smallint(1) DEFAULT '2' COMMENT '用户类型，1:admin ;2:会员',
  `mobile` varchar(20) NOT NULL DEFAULT '' COMMENT '手机号',
  PRIMARY KEY (`id`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='用户表';

/*Data for the table `tb_users` */

insert  into `tb_users`(`id`,`user_login`,`user_pass`,`user_nicename`,`user_email`,`user_url`,`avatar`,`sex`,`birthday`,`signature`,`last_login_ip`,`last_login_time`,`create_time`,`user_status`,`user_type`,`mobile`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3','admin','1179542335@qq.com','','views/common/img/avatar.png',0,NULL,NULL,'192.168.199.151','2016-05-28 22:41:42','2016-04-26 07:22:49',1,1,''),(21,'qwert','a384b6463fc216a5f8ecb6670f86456a','qwert','qwert@qq.com','','views/common/img/avatar.png',0,NULL,NULL,'192.168.199.151','2016-05-28 22:40:51','2016-05-28 22:22:04',1,1,''),(22,'varioxp','8306e8c1060421dffa6d53de342850f9','varioxp','varioxp@qq.com','','views/upload/avatar/20140824184032_NQHxT.jpeg',0,NULL,NULL,'192.168.199.151','2016-05-29 16:03:28','2016-05-28 22:47:59',1,1,''),(24,'Yuzhifan','e10adc3949ba59abbe56e057f20f883e','Yuzhifan','123456@qq.com','','views/common/img/avatar.png',0,NULL,NULL,NULL,'2016-05-30 00:55:42','2016-05-30 00:55:42',1,2,'');

/*Table structure for table `tb_video` */

DROP TABLE IF EXISTS `tb_video`;

CREATE TABLE `tb_video` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '未命名',
  `src` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cover` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_video` */

insert  into `tb_video`(`id`,`name`,`src`,`cover`) values (1,'视频1','views/video/video/test1.mp4','views/common/img/list-item3.jpg'),(2,'视频2','views/video/video/test2.mp4','views/common/img/list-item3.jpg'),(3,'视频3','views/video/video/test3.mp4','views/common/img/list-item3.jpg'),(4,'视频4','views/video/video/test3.mp4','views/video/video/pic.png'),(5,'视屏5','views/video/video/test3.mp4','views/video/video/pic.png'),(6,'视屏6','views/video/video/test3.mp4','views/video/video/pic.png');

/*Table structure for table `tb_videocomment` */

DROP TABLE IF EXISTS `tb_videocomment`;

CREATE TABLE `tb_videocomment` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `video_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT '2001-01-10 00:00:00',
  `comment` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tb_videocomment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_videocomment` */

insert  into `tb_videocomment`(`id`,`video_id`,`user_id`,`comment_time`,`comment`) values (21,1,1,'2016-05-08 16:31:49','gggggggggggggggggggggggggggggg'),(23,1,1,'2016-05-08 16:32:53','baba爱你'),(24,1,1,'2016-05-08 16:36:08','今天是母亲节，祝天下母亲快快乐乐！'),(28,1,1,'2016-05-26 14:50:45','快来点播视频吧 ----我是小尾巴'),(29,1,22,'2016-05-29 14:50:10','之前的默认头像与Win8/Win8.1中的相同,为白色的半身小人头像,而在10108中已经变成了白线轮廓形,这与Win10手机版的风格是相统一的。如下图所示 Win...'),(30,1,22,'2016-05-29 14:50:42','《蜡笔小新》（クレヨンしんちゃん）是由臼井仪人创作的漫画，1990年8月，在《weekly漫画action》上开始连载。1992年，根据漫画改编的同名动画《蜡笔小新》在朝日电视台播出。'),(31,1,22,'2016-05-29 15:12:14','真正快乐的人是那种在走弯路时也不忘享受风景的人。'),(32,1,1,'2016-09-23 19:51:48','hhhhhhhhhhhhhhhhhhhhhhh');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
