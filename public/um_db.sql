/*
Navicat MySQL Data Transfer

Source Server         : yes
Source Server Version : 80030
Source Host           : localhost:3306
Source Database       : um_db

Target Server Type    : MYSQL
Target Server Version : 80030
File Encoding         : 65001

Date: 2025-09-26 14:11:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `intrams_table`
-- ----------------------------
DROP TABLE IF EXISTS `intrams_table`;
CREATE TABLE `intrams_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of intrams_table
-- ----------------------------
