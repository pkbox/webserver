/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : webserver

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-05-29 13:11:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `star` smallint(6) DEFAULT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '15', '1', 'Enter text here...', null, '1527161309');
INSERT INTO `comment` VALUES ('2', '14', '1', 'Enter text here...', null, '1527161328');
INSERT INTO `comment` VALUES ('3', '14', '1', '', null, '1527161335');
INSERT INTO `comment` VALUES ('4', '14', '1', 'Enter text here...', null, '1527161397');
INSERT INTO `comment` VALUES ('5', '14', '1', '', null, '1527161410');
INSERT INTO `comment` VALUES ('6', '14', '1', '45646545', null, '1527161443');
INSERT INTO `comment` VALUES ('7', '15', '1', 'Enter text here...', null, '1527161940');
INSERT INTO `comment` VALUES ('8', '9', '1', 'Enter text here...', null, '1527219272');

-- ----------------------------
-- Table structure for picture
-- ----------------------------
DROP TABLE IF EXISTS `picture`;
CREATE TABLE `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `tag` smallint(6) NOT NULL DEFAULT '1',
  `url` varchar(255) NOT NULL,
  `authorid` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `tagname` varchar(20) NOT NULL,
  `avgrating` smallint(6) DEFAULT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of picture
-- ----------------------------
INSERT INTO `picture` VALUES ('10', '4', '444895', '1', './data/picture/1527125484189.jpg', '1', 'admin', 'car', null, '1527125484');
INSERT INTO `picture` VALUES ('12', '6', '341942', '1', './data/picture/1527125506435.jpg', '1', 'admin', 'car', null, '1527125506');
INSERT INTO `picture` VALUES ('14', '7', '315663', '1', './data/picture/1527125533211.jpg', '1', 'admin', 'nature', null, '1527125533');
INSERT INTO `picture` VALUES ('16', '45645456', '8293', '1', './data/picture/1527222938257.jpg', '1', 'admin', 'car', null, '1527222938');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'jkljklkl', 'jkljlkjlkj', '0');
INSERT INTO `user` VALUES ('2', 'hehe', 'e10adc3949ba59abbe56e057f20f883e', 'jkljklj', 'jkljkljl', '0');
INSERT INTO `user` VALUES ('3', 'hehe1', 'e10adc3949ba59abbe56e057f20f883e', 'jkljklj', 'jkljkljl', '0');
INSERT INTO `user` VALUES ('4', 'a123456', '25f9e794323b453885f5181f1b624d0b', '7894651432', 'wang', '1527078471');
INSERT INTO `user` VALUES ('5', '456123', 'f3ae1e93f5f0671e75ae22cb07aa41c2', '456789', '789456', '1527078534');
INSERT INTO `user` VALUES ('6', '4564', 'ab233b682ec355648e7891e66c54191b', '465', '45656', '1527078573');
INSERT INTO `user` VALUES ('7', 'wang123', 'e10adc3949ba59abbe56e057f20f883e', '465456', 'ceshi', '1527078725');
INSERT INTO `user` VALUES ('8', 'admin123', 'e10adc3949ba59abbe56e057f20f883e', 'jkjkljk', '嘿嘿', '1527078841');
INSERT INTO `user` VALUES ('9', 'admin456', 'e10adc3949ba59abbe56e057f20f883e', '7894566132', 'name', '1527078913');
INSERT INTO `user` VALUES ('10', 'admin456798', 'e10adc3949ba59abbe56e057f20f883e', '7894566132', 'name', '1527078953');
INSERT INTO `user` VALUES ('11', 'amdin', 'e10adc3949ba59abbe56e057f20f883e', '465789465', '456789', '1527078965');
INSERT INTO `user` VALUES ('12', '123455', '68053af2923e00204c3ca7c6a3150cf7', '456', '456789', '1527078994');
INSERT INTO `user` VALUES ('13', '123456', 'e10adc3949ba59abbe56e057f20f883e', '132465', '123456', '1527079010');
INSERT INTO `user` VALUES ('14', '132132380931890', 'e10adc3949ba59abbe56e057f20f883e', '809809', '89089080', '1527079053');
INSERT INTO `user` VALUES ('15', 'haha', 'e10adc3949ba59abbe56e057f20f883e', 'jkljlk', 'heieh', '1527079085');
INSERT INTO `user` VALUES ('16', '456456', 'e10adc3949ba59abbe56e057f20f883e', '456456', '456456655', '1527217304');
