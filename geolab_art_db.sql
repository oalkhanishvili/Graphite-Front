/*
Navicat MySQL Data Transfer

Source Server         : geolab
Source Server Version : 50541
Source Host           : 176.28.22.210:3306
Source Database       : geolab_art_db

Target Server Type    : MYSQL
Target Server Version : 50541
File Encoding         : 65001

Date: 2015-07-15 14:51:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('2', 'art');

-- ----------------------------
-- Table structure for peaceofart
-- ----------------------------
DROP TABLE IF EXISTS `peaceofart`;
CREATE TABLE `peaceofart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `pic_name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of peaceofart
-- ----------------------------
INSERT INTO `peaceofart` VALUES ('4', '2', '2', 0x31322E706E67, 'title1', 0x6465736372697074696F6E31, '41.7', '44.8', '2015-07-14 17:48:05');
INSERT INTO `peaceofart` VALUES ('5', '2', '2', 0x3132332E6A7067, 'title2', 0x6465736372697074696F6E32, '41.6', '44.7', '2015-07-14 17:48:05');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fb_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `prof_img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('2', '1', 'lasha', 'tsatsashvili', '1.png');

-- ----------------------------
-- Table structure for wishlist
-- ----------------------------
DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `peaceofart_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of wishlist
-- ----------------------------
INSERT INTO `wishlist` VALUES ('3', '2', '4');
INSERT INTO `wishlist` VALUES ('4', '2', '5');
