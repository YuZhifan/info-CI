/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50635
Source Host           : localhost:3306
Source Database       : infotheory

Target Server Type    : MYSQL
Target Server Version : 50635
File Encoding         : 65001

Date: 2017-03-01 14:27:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_chapter`
-- ----------------------------
DROP TABLE IF EXISTS `tb_chapter`;
CREATE TABLE `tb_chapter` (
  `chapter_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`chapter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_chapter
-- ----------------------------
INSERT INTO `tb_chapter` VALUES ('1', '第一章');
INSERT INTO `tb_chapter` VALUES ('2', '第二章');
INSERT INTO `tb_chapter` VALUES ('3', '第三章');
INSERT INTO `tb_chapter` VALUES ('4', '3月2日课堂作业');

-- ----------------------------
-- Table structure for `tb_discussion`
-- ----------------------------
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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_discussion
-- ----------------------------
INSERT INTO `tb_discussion` VALUES ('2', '1', '2001-01-01 00:00:00', '1', 'haha');
INSERT INTO `tb_discussion` VALUES ('3', '22', '2016-05-29 00:00:00', '1', '真正快乐的人是那种在走弯路时也不忘享受风景的人。');
INSERT INTO `tb_discussion` VALUES ('4', '22', '2016-05-29 00:00:00', '1', '真正快乐的人是那种在走弯路时也不忘享受风景的人。');
INSERT INTO `tb_discussion` VALUES ('7', '22', '2016-05-29 15:50:59', '3', 'told tales of a giant sea monster, the kraken.That dragged men from their boats to the');
INSERT INTO `tb_discussion` VALUES ('8', '22', '2016-05-29 15:52:03', '3', 'told tales of a giant sea monster, the kraken.That dragged men from their boats to the');
INSERT INTO `tb_discussion` VALUES ('9', '1', '2017-02-27 10:31:31', '3', 'hhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('10', '1', '2017-02-27 10:33:39', '3', 'hhhhhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('11', '1', '2017-02-27 10:33:50', '2', 'hhhhhhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('12', '1', '2017-02-27 10:33:59', '1', '111111111111111111');
INSERT INTO `tb_discussion` VALUES ('13', '1', '2017-02-27 16:31:28', '1', '哈喽大家好的点点滴滴多多多多多多多多多多多多多多多多多');
INSERT INTO `tb_discussion` VALUES ('14', '1', '2017-02-27 16:32:47', '1', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhjj');
INSERT INTO `tb_discussion` VALUES ('15', '1', '2017-02-28 10:53:16', '2', 'fffffffffffffffffffffffffffffffffffffffff');
INSERT INTO `tb_discussion` VALUES ('16', '1', '2001-01-01 00:00:00', '1', 'haha');
INSERT INTO `tb_discussion` VALUES ('17', '22', '2016-05-29 00:00:00', '1', '真正快乐的人是那种在走弯路时也不忘享受风景的人。');
INSERT INTO `tb_discussion` VALUES ('18', '22', '2016-05-29 00:00:00', '1', '真正快乐的人是那种在走弯路时也不忘享受风景的人。');
INSERT INTO `tb_discussion` VALUES ('19', '22', '2016-05-29 15:50:59', '3', 'told tales of a giant sea monster, the kraken.That dragged men from their boats to the');
INSERT INTO `tb_discussion` VALUES ('20', '22', '2016-05-29 15:52:03', '3', 'told tales of a giant sea monster, the kraken.That dragged men from their boats to the');
INSERT INTO `tb_discussion` VALUES ('21', '1', '2017-02-27 10:31:31', '3', 'hhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('22', '1', '2017-02-27 10:33:39', '3', 'hhhhhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('23', '1', '2017-02-27 10:33:50', '2', 'hhhhhhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('24', '1', '2017-02-27 10:33:59', '1', '111111111111111111');
INSERT INTO `tb_discussion` VALUES ('25', '1', '2017-02-27 16:31:28', '1', '哈喽大家好的点点滴滴多多多多多多多多多多多多多多多多多');
INSERT INTO `tb_discussion` VALUES ('26', '1', '2017-02-27 16:32:47', '1', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhjj');
INSERT INTO `tb_discussion` VALUES ('27', '1', '2017-02-28 10:53:16', '2', 'fffffffffffffffffffffffffffffffffffffffff');
INSERT INTO `tb_discussion` VALUES ('28', '1', '2001-01-01 00:00:00', '1', 'haha');
INSERT INTO `tb_discussion` VALUES ('29', '22', '2016-05-29 00:00:00', '1', '真正快乐的人是那种在走弯路时也不忘享受风景的人。');
INSERT INTO `tb_discussion` VALUES ('30', '22', '2016-05-29 00:00:00', '1', '真正快乐的人是那种在走弯路时也不忘享受风景的人。');
INSERT INTO `tb_discussion` VALUES ('31', '22', '2016-05-29 15:50:59', '3', 'told tales of a giant sea monster, the kraken.That dragged men from their boats to the');
INSERT INTO `tb_discussion` VALUES ('32', '22', '2016-05-29 15:52:03', '3', 'told tales of a giant sea monster, the kraken.That dragged men from their boats to the');
INSERT INTO `tb_discussion` VALUES ('33', '1', '2017-02-27 10:31:31', '3', 'hhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('34', '1', '2017-02-27 10:33:39', '3', 'hhhhhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('35', '1', '2017-02-27 10:33:50', '2', 'hhhhhhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('36', '1', '2017-02-27 10:33:59', '1', '111111111111111111');
INSERT INTO `tb_discussion` VALUES ('37', '1', '2017-02-27 16:31:28', '1', '哈喽大家好的点点滴滴多多多多多多多多多多多多多多多多多');
INSERT INTO `tb_discussion` VALUES ('38', '1', '2017-02-27 16:32:47', '1', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhjj');
INSERT INTO `tb_discussion` VALUES ('39', '1', '2017-02-28 10:53:16', '2', 'fffffffffffffffffffffffffffffffffffffffff');
INSERT INTO `tb_discussion` VALUES ('40', '1', '2001-01-01 00:00:00', '1', 'haha');
INSERT INTO `tb_discussion` VALUES ('41', '22', '2016-05-29 00:00:00', '1', '真正快乐的人是那种在走弯路时也不忘享受风景的人。');
INSERT INTO `tb_discussion` VALUES ('42', '22', '2016-05-29 00:00:00', '1', '真正快乐的人是那种在走弯路时也不忘享受风景的人。');
INSERT INTO `tb_discussion` VALUES ('43', '22', '2016-05-29 15:50:59', '3', 'told tales of a giant sea monster, the kraken.That dragged men from their boats to the');
INSERT INTO `tb_discussion` VALUES ('44', '22', '2016-05-29 15:52:03', '3', 'told tales of a giant sea monster, the kraken.That dragged men from their boats to the');
INSERT INTO `tb_discussion` VALUES ('45', '1', '2017-02-27 10:31:31', '3', 'hhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('46', '1', '2017-02-27 10:33:39', '3', 'hhhhhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('47', '1', '2017-02-27 10:33:50', '2', 'hhhhhhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('48', '1', '2017-02-27 10:33:59', '1', '111111111111111111');
INSERT INTO `tb_discussion` VALUES ('49', '1', '2017-02-27 16:31:28', '1', '哈喽大家好的点点滴滴多多多多多多多多多多多多多多多多多');
INSERT INTO `tb_discussion` VALUES ('50', '1', '2017-02-27 16:32:47', '1', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhjj');
INSERT INTO `tb_discussion` VALUES ('51', '1', '2017-02-28 10:53:16', '2', 'fffffffffffffffffffffffffffffffffffffffff');
INSERT INTO `tb_discussion` VALUES ('52', '1', '2001-01-01 00:00:00', '1', 'haha');
INSERT INTO `tb_discussion` VALUES ('53', '22', '2016-05-29 00:00:00', '1', '真正快乐的人是那种在走弯路时也不忘享受风景的人。');
INSERT INTO `tb_discussion` VALUES ('54', '22', '2016-05-29 00:00:00', '1', '真正快乐的人是那种在走弯路时也不忘享受风景的人。');
INSERT INTO `tb_discussion` VALUES ('55', '22', '2016-05-29 15:50:59', '3', 'told tales of a giant sea monster, the kraken.That dragged men from their boats to the');
INSERT INTO `tb_discussion` VALUES ('56', '22', '2016-05-29 15:52:03', '3', 'told tales of a giant sea monster, the kraken.That dragged men from their boats to the');
INSERT INTO `tb_discussion` VALUES ('57', '1', '2017-02-27 10:31:31', '3', 'hhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('58', '1', '2017-02-27 10:33:39', '3', 'hhhhhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('59', '1', '2017-02-27 10:33:50', '2', 'hhhhhhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `tb_discussion` VALUES ('60', '1', '2017-02-27 10:33:59', '1', '111111111111111111');
INSERT INTO `tb_discussion` VALUES ('61', '1', '2017-02-27 16:31:28', '1', '哈喽大家好的点点滴滴多多多多多多多多多多多多多多多多多');
INSERT INTO `tb_discussion` VALUES ('62', '1', '2017-02-27 16:32:47', '1', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhjj');
INSERT INTO `tb_discussion` VALUES ('63', '1', '2017-02-28 10:53:16', '2', 'fffffffffffffffffffffffffffffffffffffffff');
INSERT INTO `tb_discussion` VALUES ('64', '22', '2017-03-01 14:02:46', '1', 'asdasdsssssssssssssssssssssss');

-- ----------------------------
-- Table structure for `tb_feedback`
-- ----------------------------
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
  `que7` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'null',
  `que8` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `suggestion` varchar(300) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_feedback
-- ----------------------------
INSERT INTO `tb_feedback` VALUES ('13', '13', '2016-05-25 17:01:17', '是', '非常好', '非常好', '非常好', '非常大', '非常好', '非常满意', '很大', '喊口号');
INSERT INTO `tb_feedback` VALUES ('14', '1', '2016-05-25 17:04:58', '是', '较差', '较好', '较好', '非常大', '较好', '一般', '较大', 'bucuo ');
INSERT INTO `tb_feedback` VALUES ('15', '1', '2017-02-27 13:30:21', '是', '非常好', '非常好', '非常好', '非常大', '非常好', '非常满意', '很大', 'hfhfFff发发发');

-- ----------------------------
-- Table structure for `tb_question`
-- ----------------------------
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
  `uptime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`que_id`),
  KEY `FK_Relationship_1` (`chapter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_question
-- ----------------------------
INSERT INTO `tb_question` VALUES ('1', '在本征半导体中加入(   )元素可形成N型半导体，加入(   )元素可形成P型半导体。<br/>A. 五价         B. 四价        C. 三价', 'A.  C.', '1', '1', null, '2', null, '2017-02-28 14:08:20');
INSERT INTO `tb_question` VALUES ('2', '当温度升高时，二极管的反向饱和电流将 (   )。<br/>A. 增大         B. 不变        C. 减小', 'A', '1', '1', null, '1', null, '2017-02-28 13:52:17');
INSERT INTO `tb_question` VALUES ('3', '工作在放大区的某三极管，如果当IB从12μA增大到22μA时，IC从1mA变为2mA，那么它的Β约为(   )。<br/> A. 83           B. 91           C. 100', 'C', '1', '1', null, '1', null, '2017-02-28 13:52:21');
INSERT INTO `tb_question` VALUES ('4', '当场效应管的漏极直流电流ID从2mA变为4mA时，它的低频跨导Gm将(   ) <br/>  A.增大          B.不变         C.减小     ', 'A', '1', '1', null, '3', null, '2017-02-28 14:08:39');
INSERT INTO `tb_question` VALUES ('5', '能否将1.5V的干电池以正向接法接到二极管两端？为什么？', '解：不能。因为二极管的正向电流与其端电压成指数关系，当端电压为1.5V时，管子会因电流过大而烧坏。', '2', '2', null, '1', null, '2017-02-28 13:52:31');
INSERT INTO `tb_question` VALUES ('7', '电路如图所示，已知晶体管B＝50，在下列情况下，用直流电压表测晶体管的集电极电位，应分别为多少？设VCC＝12V，晶体管饱和管压降UCES＝0.5V。<br/>\r\n（1）正常情况 （2）Rb1短路（3）Rb1开路（4）Rb2开路（5）Rc短路', '解：设UBE＝0.7V。则<br/>\r\n\r\n（1） 基极静态电流<br/>\r\n\r\n          \r\n\r\n（2）由于UBE＝0V，T截止，UC＝12V。<br/>\r\n\r\n（3）临界饱和基极电流<br/>\r\n\r\n          \r\n\r\n实际基极电流<br/>\r\n\r\n          \r\n\r\n由于IB＞IBS，故T饱和，UC＝UCES＝0.5V。<br/> \r\n\r\n（4）T截止，UC＝12V。<br/>\r\n\r\n（5）由于集电极直接接直流电源，UC＝VCC＝12V<br/>', '3', '4', null, '2', null, '2017-02-28 13:52:34');
INSERT INTO `tb_question` VALUES ('8', '半导体中有（ ）和（ ）两种载流子参与导电。', '空穴  自由电子', '1', '2', null, '2', null, '2017-02-28 14:08:24');
INSERT INTO `tb_question` VALUES ('9', '集成运算放大器输入级一般采用（ ）电路，其作用是用来减小（ ）。', '差分放大  零点漂移', '2', '2', null, '1', null, '2017-02-28 13:52:49');
INSERT INTO `tb_question` VALUES ('10', '放大电路中为了提高输入电阻引入（ ）反馈，为了降低输入电阻应引入（ ）反馈。', '串联   并联', '2', '2', null, '1', null, '2017-02-28 13:52:53');
INSERT INTO `tb_question` VALUES ('11', '光电二极管能将（ ）转变为（ ），它工作时需加（ ）偏置电压。', '光信号  电信号  反向', '1', '2', null, '1', null, '2017-02-28 13:52:56');
INSERT INTO `tb_question` VALUES ('12', '当温度升高时，二极管的反向饱和电流将增大，正向电压将减小。（  ）', '正确', '1', '3', null, '2', null, '2017-02-28 14:08:27');
INSERT INTO `tb_question` VALUES ('13', '晶体管具有电流放大作用的外部条件是发射结反偏，集电结正偏。（  ）', '错误，发射结正偏，集电结反偏。', '1', '3', null, '1', null, '2017-02-28 13:53:02');
INSERT INTO `tb_question` VALUES ('14', '差分放大电路对差模输入信号具有良好的放大作用，对共模输入信号具有很强的抑制作用，差分放大电路的零点漂移很小。（  ）', '正确', '2', '3', null, '1', null, '2017-02-28 13:53:08');
INSERT INTO `tb_question` VALUES ('15', '当温度升高时，晶体管的参数增大，I减小，导通电压增大。（  ）', '错误。当温度升高时，晶体管的参数增大，I增大，导通电压减小。', '2', '3', null, '1', null, '2017-02-28 13:53:35');
INSERT INTO `tb_question` VALUES ('16', '在图中，已知I=2A，求Uab和Pab。', '解：Uab=IR+2-4=2×4+2-4=6V，<br/> 电流I与Uab为关联参考方向，<br/>因此  Pab=UabI=6×2=12W', '1', '4', '1428331069643.jpg', '3', null, '2017-02-28 14:08:29');
INSERT INTO `tb_question` VALUES ('17', '求图中的R和Uab、Uac。', '解：对d点应用KCL得：I=4A，<br/>故有 RI=4R=4，R=1Ω  <br/>Uab=Uad+Udb=3×10＋（-4）=26V<br/> Uac=Uad-Ucd=3×10- (-7)×2=44V', '1', '4', '1428331164762.jpg', '1', null, '2017-02-28 13:53:40');
INSERT INTO `tb_question` VALUES ('18', '如题', '在图（A）所示电路中，当二极管断开时，二极管两端的电压等于。所以<br/>\r\n当ui>=Vc时，二极管截止，u0=ui<br/>\r\n当ui<Vc时，二极管导通，u0=Vc=5V', '2', '4', '1428331697437.jpg', '1', null, '2017-02-28 13:53:42');
INSERT INTO `tb_question` VALUES ('19', '能否将1.5V的干电池以正向接法接到二极管两端？为什么', '不能，因为二极管的正向电流与其端电压成指数关系，当端电压为1.5V时，管子会因为电压过大而烧坏。', '1', '4', null, '5', null, '2017-02-28 15:13:06');

-- ----------------------------
-- Table structure for `tb_resource`
-- ----------------------------
DROP TABLE IF EXISTS `tb_resource`;
CREATE TABLE `tb_resource` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '未命名',
  `src` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cover` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `type` tinyint(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_resource
-- ----------------------------
INSERT INTO `tb_resource` VALUES ('1', '视频1', 'views/video/video/test1.mp4', 'views/common/img/list-item3.jpg', '1');
INSERT INTO `tb_resource` VALUES ('2', '视频2', 'views/video/video/test2.mp4', 'views/common/img/list-item3.jpg', '2');
INSERT INTO `tb_resource` VALUES ('3', '视频3', 'views/video/video/test3.mp4', 'views/common/img/list-item3.jpg', '3');
INSERT INTO `tb_resource` VALUES ('4', '视频4', 'views/video/video/test3.mp4', 'views/video/video/pic.png', '1');
INSERT INTO `tb_resource` VALUES ('5', '视屏5', 'views/video/video/test3.mp4', 'views/video/video/pic.png', '2');
INSERT INTO `tb_resource` VALUES ('6', '视屏6', 'views/video/video/test3.mp4', 'views/video/video/pic.png', '3');
INSERT INTO `tb_resource` VALUES ('7', '未命名7', 'views/video/video/test3.mp4', 'views/video/video/pic.png', '4');
INSERT INTO `tb_resource` VALUES ('8', '未命名8', 'views/video/video/test3.mp4', 'views/video/video/pic.png', '4');

-- ----------------------------
-- Table structure for `tb_users`
-- ----------------------------
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

-- ----------------------------
-- Records of tb_users
-- ----------------------------
INSERT INTO `tb_users` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1179542335@qq.com', '', 'views/common/img/avatar.png', '0', null, null, '192.168.199.151', '2016-05-28 22:41:42', '2016-04-26 07:22:49', '1', '1', '');
INSERT INTO `tb_users` VALUES ('21', 'qwert', 'a384b6463fc216a5f8ecb6670f86456a', 'qwert', 'qwert@qq.com', '', 'views/common/img/avatar.png', '0', null, null, '192.168.199.151', '2016-05-28 22:40:51', '2016-05-28 22:22:04', '1', '1', '');
INSERT INTO `tb_users` VALUES ('22', 'varioxp', '8306e8c1060421dffa6d53de342850f9', 'varioxp', 'varioxp@qq.com', '', 'views/upload/avatar/20140824184032_NQHxT.jpeg', '0', null, null, '192.168.199.151', '2016-05-29 16:03:28', '2016-05-28 22:47:59', '1', '1', '');
INSERT INTO `tb_users` VALUES ('24', 'Yuzhifan', 'e10adc3949ba59abbe56e057f20f883e', 'Yuzhifan', '123456@qq.com', '', 'views/common/img/avatar.png', '0', null, null, null, '2016-05-30 00:55:42', '2016-05-30 00:55:42', '1', '2', '');

-- ----------------------------
-- Table structure for `tb_video`
-- ----------------------------
DROP TABLE IF EXISTS `tb_video`;
CREATE TABLE `tb_video` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '未命名',
  `src` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cover` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_video
-- ----------------------------
INSERT INTO `tb_video` VALUES ('1', '视频1', 'views/video/video/test1.mp4', 'views/common/img/list-item3.jpg');
INSERT INTO `tb_video` VALUES ('2', '视频2', 'views/video/video/test2.mp4', 'views/common/img/list-item3.jpg');
INSERT INTO `tb_video` VALUES ('3', '视频3', 'views/video/video/test3.mp4', 'views/common/img/list-item3.jpg');
INSERT INTO `tb_video` VALUES ('4', '视频4', 'views/video/video/test3.mp4', 'views/video/video/pic.png');
INSERT INTO `tb_video` VALUES ('5', '视屏5', 'views/video/video/test3.mp4', 'views/video/video/pic.png');
INSERT INTO `tb_video` VALUES ('6', '视屏6', 'views/video/video/test3.mp4', 'views/video/video/pic.png');

-- ----------------------------
-- Table structure for `tb_videocomment`
-- ----------------------------
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

-- ----------------------------
-- Records of tb_videocomment
-- ----------------------------
INSERT INTO `tb_videocomment` VALUES ('21', '1', '1', '2016-05-08 16:31:49', 'gggggggggggggggggggggggggggggg');
INSERT INTO `tb_videocomment` VALUES ('23', '1', '1', '2016-05-08 16:32:53', 'baba爱你');
INSERT INTO `tb_videocomment` VALUES ('24', '1', '1', '2016-05-08 16:36:08', '今天是母亲节，祝天下母亲快快乐乐！');
INSERT INTO `tb_videocomment` VALUES ('28', '1', '1', '2016-05-26 14:50:45', '快来点播视频吧 ----我是小尾巴');
INSERT INTO `tb_videocomment` VALUES ('29', '1', '22', '2016-05-29 14:50:10', '之前的默认头像与Win8/Win8.1中的相同,为白色的半身小人头像,而在10108中已经变成了白线轮廓形,这与Win10手机版的风格是相统一的。如下图所示 Win...');
INSERT INTO `tb_videocomment` VALUES ('30', '1', '22', '2016-05-29 14:50:42', '《蜡笔小新》（クレヨンしんちゃん）是由臼井仪人创作的漫画，1990年8月，在《weekly漫画action》上开始连载。1992年，根据漫画改编的同名动画《蜡笔小新》在朝日电视台播出。');
INSERT INTO `tb_videocomment` VALUES ('31', '1', '22', '2016-05-29 15:12:14', '真正快乐的人是那种在走弯路时也不忘享受风景的人。');
INSERT INTO `tb_videocomment` VALUES ('32', '1', '1', '2016-09-23 19:51:48', 'hhhhhhhhhhhhhhhhhhhhhhh');
