/*
Navicat MySQL Data Transfer

Source Server         : bendi
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : thinkphp52

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-12-02 10:35:57
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `think_menu`
-- ----------------------------
DROP TABLE IF EXISTS `think_menu`;
CREATE TABLE `think_menu` (
  `main_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `id` char(255) NOT NULL,
  `autoRefresh` char(255) DEFAULT 'false',
  `title` char(255) NOT NULL,
  `ico` char(255) DEFAULT 'x-ico-default',
  `url` char(255) NOT NULL,
  `fixed` char(255) DEFAULT 'true',
  PRIMARY KEY (`main_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_menu
-- ----------------------------
INSERT INTO `think_menu` VALUES ('4', 'menu', 'false', '菜单管理', 'x-ico-default', './menu/index.html', 'true');
INSERT INTO `think_menu` VALUES ('9', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
INSERT INTO `think_menu` VALUES ('13', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
INSERT INTO `think_menu` VALUES ('15', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
INSERT INTO `think_menu` VALUES ('17', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
INSERT INTO `think_menu` VALUES ('18', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
INSERT INTO `think_menu` VALUES ('19', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
INSERT INTO `think_menu` VALUES ('20', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
INSERT INTO `think_menu` VALUES ('21', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');

-- ----------------------------
-- Table structure for `think_student`
-- ----------------------------
DROP TABLE IF EXISTS `think_student`;
CREATE TABLE `think_student` (
  `main_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `id` char(255) NOT NULL,
  `autoRefresh` char(255) DEFAULT 'false',
  `title` char(255) NOT NULL,
  `ico` char(255) DEFAULT 'x-ico-default',
  `url` char(255) NOT NULL,
  `fixed` char(255) DEFAULT 'true',
  PRIMARY KEY (`main_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_student
-- ----------------------------
INSERT INTO `think_student` VALUES ('4', 'menu', 'false', '菜单管理', 'x-ico-default', './menu/index.html', 'true');
INSERT INTO `think_student` VALUES ('9', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
INSERT INTO `think_student` VALUES ('13', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
INSERT INTO `think_student` VALUES ('15', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
INSERT INTO `think_student` VALUES ('17', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
INSERT INTO `think_student` VALUES ('18', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
INSERT INTO `think_student` VALUES ('19', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
INSERT INTO `think_student` VALUES ('20', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
INSERT INTO `think_student` VALUES ('21', 'FormUnit', 'false', '表单组件', 'x-ico-default', './form_unit/index.html', 'true');
