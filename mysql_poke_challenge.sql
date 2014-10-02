/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50612
Source Host           : 127.0.0.1:3306
Source Database       : poke_challenge

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2014-10-01 22:55:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'administrador', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');
INSERT INTO `users` VALUES ('2', 'participante', 'participant', '7a2110450a94b44bd46974e65d3f36e05bdc42b8');
