/*
Navicat MySQL Data Transfer

Source Server         : Laragon
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cce_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2025-09-26 22:14:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('5', 'Thancred Waters', 'thisisthancred@gmail.com', 'thancred_ff14', '$2y$10$R8/Ru0W91HrQuvcffnyxZuDO5qy8wkc.bP4A6lNsCHzzEKH6uj7y6');
