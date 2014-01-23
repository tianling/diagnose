/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50513
Source Host           : localhost:3306
Source Database       : diagnose

Target Server Type    : MYSQL
Target Server Version : 50513
File Encoding         : 65001

Date: 2012-12-08 17:18:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `acl`
-- ----------------------------
DROP TABLE IF EXISTS `acl`;
CREATE TABLE `acl` (
  `acl_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `acl_name` varchar(50) NOT NULL,
  `acl_controller` varchar(50) NOT NULL,
  `acl_action` varchar(50) NOT NULL,
  `acl_role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`acl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of acl
-- ----------------------------

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_real_name` varchar(50) NOT NULL,
  `admin_pwd` varchar(32) NOT NULL,
  `admin_role` int(10) unsigned NOT NULL,
  `admin_remain_times` tinyint(2) unsigned DEFAULT '15',
  `admin_lock` tinyint(1) unsigned DEFAULT '0',
  `admin_email` varchar(50) DEFAULT NULL,
  `admin_login_time` int(10) unsigned DEFAULT NULL,
  `admin_login_ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='InnoDB free: 4096 kB';

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '戴建豪', '21232f297a57a5a743894a0e4a801fc3', '1', '88', '0', 'toruneko@163.com', '1352883391', '127.0.0.1');

-- ----------------------------
-- Table structure for `dialog`
-- ----------------------------
DROP TABLE IF EXISTS `dialog`;
CREATE TABLE `dialog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `controller` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `time` int(11) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=296 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dialog
-- ----------------------------

-- ----------------------------
-- Table structure for `doctors`
-- ----------------------------
DROP TABLE IF EXISTS `doctors`;
CREATE TABLE `doctors` (
  `doctor_id` int(5) NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(10) NOT NULL,
  `doctor_office_id` int(5) NOT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of doctors
-- ----------------------------

-- ----------------------------
-- Table structure for `lm_office_symptom`
-- ----------------------------
DROP TABLE IF EXISTS `lm_office_symptom`;
CREATE TABLE `lm_office_symptom` (
  `lm_office_id` int(5) NOT NULL,
  `lm_symptom_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lm_office_symptom
-- ----------------------------
INSERT INTO `lm_office_symptom` VALUES ('1', '1');
INSERT INTO `lm_office_symptom` VALUES ('1', '2');
INSERT INTO `lm_office_symptom` VALUES ('1', '3');
INSERT INTO `lm_office_symptom` VALUES ('1', '4');
INSERT INTO `lm_office_symptom` VALUES ('1', '5');
INSERT INTO `lm_office_symptom` VALUES ('1', '6');
INSERT INTO `lm_office_symptom` VALUES ('1', '7');
INSERT INTO `lm_office_symptom` VALUES ('1', '8');
INSERT INTO `lm_office_symptom` VALUES ('1', '9');
INSERT INTO `lm_office_symptom` VALUES ('1', '10');
INSERT INTO `lm_office_symptom` VALUES ('1', '11');
INSERT INTO `lm_office_symptom` VALUES ('1', '12');
INSERT INTO `lm_office_symptom` VALUES ('1', '14');
INSERT INTO `lm_office_symptom` VALUES ('1', '15');
INSERT INTO `lm_office_symptom` VALUES ('1', '16');
INSERT INTO `lm_office_symptom` VALUES ('2', '17');
INSERT INTO `lm_office_symptom` VALUES ('2', '18');
INSERT INTO `lm_office_symptom` VALUES ('2', '16');
INSERT INTO `lm_office_symptom` VALUES ('2', '21');
INSERT INTO `lm_office_symptom` VALUES ('2', '20');
INSERT INTO `lm_office_symptom` VALUES ('2', '19');
INSERT INTO `lm_office_symptom` VALUES ('2', '22');
INSERT INTO `lm_office_symptom` VALUES ('2', '3');
INSERT INTO `lm_office_symptom` VALUES ('2', '4');
INSERT INTO `lm_office_symptom` VALUES ('2', '23');
INSERT INTO `lm_office_symptom` VALUES ('2', '24');
INSERT INTO `lm_office_symptom` VALUES ('2', '2');
INSERT INTO `lm_office_symptom` VALUES ('2', '25');
INSERT INTO `lm_office_symptom` VALUES ('2', '26');
INSERT INTO `lm_office_symptom` VALUES ('2', '27');
INSERT INTO `lm_office_symptom` VALUES ('2', '28');
INSERT INTO `lm_office_symptom` VALUES ('2', '29');
INSERT INTO `lm_office_symptom` VALUES ('3', '15');
INSERT INTO `lm_office_symptom` VALUES ('3', '27');
INSERT INTO `lm_office_symptom` VALUES ('3', '2');
INSERT INTO `lm_office_symptom` VALUES ('3', '16');
INSERT INTO `lm_office_symptom` VALUES ('3', '1');
INSERT INTO `lm_office_symptom` VALUES ('3', '30');
INSERT INTO `lm_office_symptom` VALUES ('3', '31');
INSERT INTO `lm_office_symptom` VALUES ('3', '32');
INSERT INTO `lm_office_symptom` VALUES ('3', '33');
INSERT INTO `lm_office_symptom` VALUES ('3', '34');
INSERT INTO `lm_office_symptom` VALUES ('3', '35');
INSERT INTO `lm_office_symptom` VALUES ('3', '36');
INSERT INTO `lm_office_symptom` VALUES ('3', '37');
INSERT INTO `lm_office_symptom` VALUES ('3', '39');
INSERT INTO `lm_office_symptom` VALUES ('3', '40');
INSERT INTO `lm_office_symptom` VALUES ('3', '41');
INSERT INTO `lm_office_symptom` VALUES ('3', '43');
INSERT INTO `lm_office_symptom` VALUES ('4', '26');
INSERT INTO `lm_office_symptom` VALUES ('4', '12');
INSERT INTO `lm_office_symptom` VALUES ('4', '15');
INSERT INTO `lm_office_symptom` VALUES ('4', '44');
INSERT INTO `lm_office_symptom` VALUES ('4', '45');
INSERT INTO `lm_office_symptom` VALUES ('4', '46');
INSERT INTO `lm_office_symptom` VALUES ('4', '47');
INSERT INTO `lm_office_symptom` VALUES ('4', '2');
INSERT INTO `lm_office_symptom` VALUES ('4', '48');
INSERT INTO `lm_office_symptom` VALUES ('4', '1');
INSERT INTO `lm_office_symptom` VALUES ('5', '49');
INSERT INTO `lm_office_symptom` VALUES ('5', '12');
INSERT INTO `lm_office_symptom` VALUES ('5', '50');
INSERT INTO `lm_office_symptom` VALUES ('5', '2');
INSERT INTO `lm_office_symptom` VALUES ('5', '51');
INSERT INTO `lm_office_symptom` VALUES ('5', '52');
INSERT INTO `lm_office_symptom` VALUES ('5', '53');
INSERT INTO `lm_office_symptom` VALUES ('5', '54');
INSERT INTO `lm_office_symptom` VALUES ('5', '55');
INSERT INTO `lm_office_symptom` VALUES ('5', '40');
INSERT INTO `lm_office_symptom` VALUES ('5', '16');
INSERT INTO `lm_office_symptom` VALUES ('5', '3');
INSERT INTO `lm_office_symptom` VALUES ('5', '4');
INSERT INTO `lm_office_symptom` VALUES ('5', '56');
INSERT INTO `lm_office_symptom` VALUES ('6', '1');
INSERT INTO `lm_office_symptom` VALUES ('6', '7');
INSERT INTO `lm_office_symptom` VALUES ('6', '3');
INSERT INTO `lm_office_symptom` VALUES ('6', '4');
INSERT INTO `lm_office_symptom` VALUES ('6', '25');
INSERT INTO `lm_office_symptom` VALUES ('6', '57');
INSERT INTO `lm_office_symptom` VALUES ('6', '58');
INSERT INTO `lm_office_symptom` VALUES ('6', '59');
INSERT INTO `lm_office_symptom` VALUES ('6', '60');
INSERT INTO `lm_office_symptom` VALUES ('6', '51');
INSERT INTO `lm_office_symptom` VALUES ('7', '8');
INSERT INTO `lm_office_symptom` VALUES ('7', '1');
INSERT INTO `lm_office_symptom` VALUES ('7', '7');
INSERT INTO `lm_office_symptom` VALUES ('7', '61');
INSERT INTO `lm_office_symptom` VALUES ('7', '62');
INSERT INTO `lm_office_symptom` VALUES ('7', '63');
INSERT INTO `lm_office_symptom` VALUES ('7', '64');
INSERT INTO `lm_office_symptom` VALUES ('7', '65');
INSERT INTO `lm_office_symptom` VALUES ('7', '66');
INSERT INTO `lm_office_symptom` VALUES ('7', '67');
INSERT INTO `lm_office_symptom` VALUES ('7', '68');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `menu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) NOT NULL,
  `menu_controller` varchar(50) DEFAULT NULL,
  `menu_action` varchar(50) DEFAULT NULL,
  `menu_father_id` int(10) unsigned DEFAULT '0',
  `menu_order` tinyint(2) DEFAULT '0',
  `menu_shortcut` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`menu_id`),
  UNIQUE KEY `id` (`menu_id`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '后台管理', '', '', '0', '0', '0');
INSERT INTO `menu` VALUES ('2', '管理菜单', 'menu', 'index', '1', '0', '0');
INSERT INTO `menu` VALUES ('3', '管理员管理', '', '', '0', '1', '0');
INSERT INTO `menu` VALUES ('4', '管理员账户', 'user', 'index', '3', '0', '0');
INSERT INTO `menu` VALUES ('5', '管理员角色', 'department', 'index', '3', '1', '0');
INSERT INTO `menu` VALUES ('6', '管理员权限', 'administrator', 'index', '3', '2', '0');
INSERT INTO `menu` VALUES ('7', '个人信息', 'person', 'index', '3', '3', '0');
INSERT INTO `menu` VALUES ('8', '操作日志', 'dialog', 'index', '1', '1', '0');
INSERT INTO `menu` VALUES ('15', '后台公告', 'announce', 'index', '1', '2', '0');
INSERT INTO `menu` VALUES ('40', '挂号管理', '', '', '0', '2', '0');
INSERT INTO `menu` VALUES ('41', '挂号信息', 'register', 'index', '40', '0', '0');
INSERT INTO `menu` VALUES ('42', '医生信息', 'doctor', 'index', '40', '1', '0');
INSERT INTO `menu` VALUES ('43', '科室信息', 'office', 'index', '40', '3', '0');

-- ----------------------------
-- Table structure for `notice`
-- ----------------------------
DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `message` text,
  `time` int(10) unsigned NOT NULL,
  `user` varchar(50) NOT NULL,
  `lock` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of notice
-- ----------------------------

-- ----------------------------
-- Table structure for `office`
-- ----------------------------
DROP TABLE IF EXISTS `office`;
CREATE TABLE `office` (
  `office_id` int(5) NOT NULL AUTO_INCREMENT,
  `office_name` varchar(20) NOT NULL,
  `office_matching` int(20) DEFAULT '0',
  PRIMARY KEY (`office_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of office
-- ----------------------------
INSERT INTO `office` VALUES ('1', '心血管内科', '0');
INSERT INTO `office` VALUES ('2', '呼吸内科', '0');
INSERT INTO `office` VALUES ('3', '肾内科', '0');
INSERT INTO `office` VALUES ('4', '内分泌科', '0');
INSERT INTO `office` VALUES ('5', '肛肠外科', '0');
INSERT INTO `office` VALUES ('6', '妇产科', '0');
INSERT INTO `office` VALUES ('7', '神经内科', '0');

-- ----------------------------
-- Table structure for `role`
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `role_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) NOT NULL,
  `role_power` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', '网站开发者', '0');
INSERT INTO `role` VALUES ('2', '系统管理员', '1');
INSERT INTO `role` VALUES ('4', '普通管理员', '2');

-- ----------------------------
-- Table structure for `symptom`
-- ----------------------------
DROP TABLE IF EXISTS `symptom`;
CREATE TABLE `symptom` (
  `symptom_id` int(5) NOT NULL AUTO_INCREMENT,
  `symptom_name` varchar(20) NOT NULL,
  PRIMARY KEY (`symptom_id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of symptom
-- ----------------------------
INSERT INTO `symptom` VALUES ('1', '头痛');
INSERT INTO `symptom` VALUES ('2', '乏力');
INSERT INTO `symptom` VALUES ('3', '恶心');
INSERT INTO `symptom` VALUES ('4', '呕吐');
INSERT INTO `symptom` VALUES ('5', '气促');
INSERT INTO `symptom` VALUES ('6', '烦躁');
INSERT INTO `symptom` VALUES ('7', '眼花');
INSERT INTO `symptom` VALUES ('8', '晕厥');
INSERT INTO `symptom` VALUES ('9', '虚弱');
INSERT INTO `symptom` VALUES ('10', '多汗');
INSERT INTO `symptom` VALUES ('11', '冷汗');
INSERT INTO `symptom` VALUES ('12', '眩晕');
INSERT INTO `symptom` VALUES ('14', '气短');
INSERT INTO `symptom` VALUES ('15', '疲乏');
INSERT INTO `symptom` VALUES ('16', '发热');
INSERT INTO `symptom` VALUES ('17', '鼻塞');
INSERT INTO `symptom` VALUES ('18', '喷嚏');
INSERT INTO `symptom` VALUES ('19', '咽痛');
INSERT INTO `symptom` VALUES ('20', '声嘶');
INSERT INTO `symptom` VALUES ('21', '咳嗽');
INSERT INTO `symptom` VALUES ('22', '畏寒');
INSERT INTO `symptom` VALUES ('23', '气急');
INSERT INTO `symptom` VALUES ('25', '胸闷');
INSERT INTO `symptom` VALUES ('26', '紫绀');
INSERT INTO `symptom` VALUES ('27', '厌食');
INSERT INTO `symptom` VALUES ('28', '咽干');
INSERT INTO `symptom` VALUES ('29', '咽痒');
INSERT INTO `symptom` VALUES ('30', '浮肿');
INSERT INTO `symptom` VALUES ('31', '血尿');
INSERT INTO `symptom` VALUES ('32', '水肿');
INSERT INTO `symptom` VALUES ('33', '尿少');
INSERT INTO `symptom` VALUES ('34', '苍白');
INSERT INTO `symptom` VALUES ('35', '萎靡');
INSERT INTO `symptom` VALUES ('36', '腰痛');
INSERT INTO `symptom` VALUES ('37', '水肿');
INSERT INTO `symptom` VALUES ('39', '骨痛');
INSERT INTO `symptom` VALUES ('40', '寒战');
INSERT INTO `symptom` VALUES ('41', '多尿');
INSERT INTO `symptom` VALUES ('43', '尿痛');
INSERT INTO `symptom` VALUES ('44', '嘴歪');
INSERT INTO `symptom` VALUES ('45', '口水');
INSERT INTO `symptom` VALUES ('46', '失语');
INSERT INTO `symptom` VALUES ('47', '难咽');
INSERT INTO `symptom` VALUES ('48', '摔倒');
INSERT INTO `symptom` VALUES ('49', '便血');
INSERT INTO `symptom` VALUES ('50', '气喘');
INSERT INTO `symptom` VALUES ('51', '腹痛');
INSERT INTO `symptom` VALUES ('52', '便秘');
INSERT INTO `symptom` VALUES ('53', '脱肛');
INSERT INTO `symptom` VALUES ('54', '腹泻');
INSERT INTO `symptom` VALUES ('55', '腹满');
INSERT INTO `symptom` VALUES ('56', '贫血');
INSERT INTO `symptom` VALUES ('57', '抽搐');
INSERT INTO `symptom` VALUES ('58', '痛经');
INSERT INTO `symptom` VALUES ('59', '腰酸');
INSERT INTO `symptom` VALUES ('60', '乳胀');
INSERT INTO `symptom` VALUES ('61', '幻视');
INSERT INTO `symptom` VALUES ('62', '盲点');
INSERT INTO `symptom` VALUES ('63', '眼胀');
INSERT INTO `symptom` VALUES ('64', '颤抖');
INSERT INTO `symptom` VALUES ('65', '流涎');
INSERT INTO `symptom` VALUES ('66', '失眠');
INSERT INTO `symptom` VALUES ('67', '抑郁');
INSERT INTO `symptom` VALUES ('68', '痴呆');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_sex` int(1) NOT NULL,
  `user_tel` varchar(20) NOT NULL,
  `user_adress` varchar(100) NOT NULL,
  `user_message` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
