/*

Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : foodorderingsystem

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-01-19 19:26:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for customer_feedbacks
-- ----------------------------
DROP TABLE IF EXISTS `customer_feedbacks`;
CREATE TABLE `customer_feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `rating` float(10,0) DEFAULT NULL,
  `feedback` text,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of customer_feedbacks
-- ----------------------------

-- ----------------------------
-- Table structure for deals
-- ----------------------------
DROP TABLE IF EXISTS `deals`;
CREATE TABLE `deals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of deals
-- ----------------------------

-- ----------------------------
-- Table structure for meals
-- ----------------------------
DROP TABLE IF EXISTS `meals`;
CREATE TABLE `meals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of meals
-- ----------------------------

-- ----------------------------
-- Table structure for meal_deals
-- ----------------------------
DROP TABLE IF EXISTS `meal_deals`;

CREATE TABLE `meal_deals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meal_id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of meal_deals
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` enum('admin','customer','restaurant') NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `openinghours` time DEFAULT NULL,
  `closinghours` time DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `approval_status` tinyint(3) DEFAULT '1' COMMENT 'Approval Status 1= Pending , 2=Approved , 3=Not Approved',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
insert  into `users`(`id`,`name`,`email`,`password`,`user_type`,`username`,`phone`,`url`,`openinghours`,`closinghours`,`image`,`address`,`approval_status`,`created_by`,`updated_by`,`created_at`,`updated_at`,`is_deleted`) values (1,'admin','admin@example.com','21232f297a57a5a743894a0e4a801fc3','admin','admin user','+920001234567',NULL,NULL,NULL,NULL,'Shah rah e faisal',1,NULL,NULL,NULL,NULL,0)
