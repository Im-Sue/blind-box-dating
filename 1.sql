/*
Navicat MySQL Data Transfer

Source Server         : 天翼云-mh-0431
Source Server Version : 50647
Source Host           : 36.111.30.220:3306
Source Database       : 0431_yizhanhongt

Target Server Type    : MYSQL
Target Server Version : 50647
File Encoding         : 65001

Date: 2021-10-06 22:23:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for invitation_carry
-- ----------------------------
DROP TABLE IF EXISTS `invitation_carry`;
CREATE TABLE `invitation_carry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `user` varchar(20) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `surplus_money` varchar(20) DEFAULT NULL,
  `ali_pay` varchar(50) DEFAULT NULL,
  `ali_name` varchar(50) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '0',
  `create_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for invitation
-- ----------------------------
DROP TABLE IF EXISTS `invitation`;
CREATE TABLE `invitation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '0' COMMENT '0待开通;1已开通',
  `total_money` varchar(10) DEFAULT '0' COMMENT '总佣金',
  `surplus_money` varchar(10) DEFAULT '0' COMMENT '可提现佣金',
  `already_money` varchar(10) DEFAULT '0',
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;


-- ----------------------------
-- Records of auth_rule
-- ----------------------------
INSERT INTO `auth_rule` VALUES ('877', '分销提现', '55', 'InvitationCarry/index', '', '', '', '1', '0', '1633530329', '0', '1');
INSERT INTO `auth_rule` VALUES ('878', '添加', '877', 'InvitationCarry/add', '', '', '', '0', '0', '0', '0', '1');
INSERT INTO `auth_rule` VALUES ('879', '提交添加', '877', 'InvitationCarry/add_post', '', '', '', '0', '0', '0', '0', '1');
INSERT INTO `auth_rule` VALUES ('880', '编辑', '877', 'InvitationCarry/edit', '', '', '', '0', '0', '0', '0', '1');
INSERT INTO `auth_rule` VALUES ('881', '提交编辑', '877', 'InvitationCarry/edit_post', '', '', '', '0', '0', '0', '0', '1');
INSERT INTO `auth_rule` VALUES ('882', '删除', '877', 'InvitationCarry/delete', '', '', '', '0', '0', '0', '0', '1');
INSERT INTO `auth_rule` VALUES ('883', '排序', '877', 'InvitationCarry/setsort', '', '', '', '0', '0', '0', '0', '1');
INSERT INTO `auth_rule` VALUES ('884', '设置状态', '877', 'InvitationCarry/setstatus', '', '', '', '0', '0', '0', '0', '1');
INSERT INTO `auth_rule` VALUES ('885', '分销用户', '55', 'Invitation/index', '', '', '', '1', '0', '0', '0', '1');
INSERT INTO `auth_rule` VALUES ('886', '添加', '885', 'Invitation/add', '', '', '', '0', '0', '0', '0', '1');
INSERT INTO `auth_rule` VALUES ('887', '提交添加', '885', 'Invitation/add_post', '', '', '', '0', '0', '0', '0', '1');
INSERT INTO `auth_rule` VALUES ('888', '编辑', '885', 'Invitation/edit', '', '', '', '0', '0', '0', '0', '1');
INSERT INTO `auth_rule` VALUES ('889', '提交编辑', '885', 'Invitation/edit_post', '', '', '', '0', '0', '0', '0', '1');
INSERT INTO `auth_rule` VALUES ('890', '删除', '885', 'Invitation/delete', '', '', '', '0', '0', '0', '0', '1');
INSERT INTO `auth_rule` VALUES ('891', '排序', '885', 'Invitation/setsort', '', '', '', '0', '0', '0', '0', '1');
INSERT INTO `auth_rule` VALUES ('892', '设置状态', '885', 'Invitation/setstatus', '', '', '', '0', '0', '0', '0', '1');
