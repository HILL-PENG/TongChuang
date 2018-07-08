/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tc

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-07-09 00:51:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `about`
-- ----------------------------
DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `a_id` int(1) NOT NULL AUTO_INCREMENT,
  `a_p_name` varchar(20) NOT NULL COMMENT '导航',
  `a_title` varchar(20) NOT NULL COMMENT '标题',
  `a_con` varchar(10000) NOT NULL,
  `a_img` varchar(200) NOT NULL,
  `a_thum` varchar(150) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of about
-- ----------------------------
INSERT INTO `about` VALUES ('1', '公司简介', '666a', '&lt;p&gt;[1学习进行时]2017年5月14日，习近平主席出席“一带一路”国际合作高峰论坛开幕式并发表主旨演讲，强调将“一带一路”建成和平之路、繁荣之路、开放之路、创新之路、文明之路。一年来，习近平如何大力推动“一带一路”建设？新华社《学习进行时》原创品牌栏目“讲习所”推出文章，为您梳理解读。　　“今天，群贤毕至，少长咸集，我期待着大家集思广益、畅所欲言，为推动‘一带一路’建设献计献策，让这一世纪工程造福各国人民。”　　一年过去了，习近平主席在“一带一路”国际合作高峰论坛开幕式上的主旨演讲仍令人记忆深刻。　　这次高峰论坛是“一带一路”建设框架内层级最高、规模最大的国际会议，具有里程碑意义。作为论坛主办方和“一带一路”的首倡者，中方向国际社会作出了庄严承诺。　　为了“让这一世纪工程造福各国人民”，习近平运筹帷幄、亲力亲为，带领中国人民为建设“一带一路”作出了巨大努力，取得了辉煌成果，赢得世界广泛赞誉。　　让“一带一路”的成效惠及世界　　“一带一路”建设是习近平2013年提出的倡议，它源于习近平对世界发展&lt;/p&gt;', '20180515/201805151750385afaad6ee1b85.png', 'upload/20180515/201805151750385afaad6ee1b85_s.png');
INSERT INTO `about` VALUES ('2', '公司详情', '5555', '&lt;p style=&quot;margin-top: 0px; margin-bottom: 18px; padding: 0px; color: rgb(77, 79, 83); font-family: &amp;quot;Microsoft Yahei&amp;quot;, &amp;quot;\\5FAE软雅黑&amp;quot;, &amp;quot;STHeiti Light&amp;quot;, &amp;quot;\\534E文细黑&amp;quot;, SimSun, &amp;quot;\\5B8B体&amp;quot;, Arial, sans-serif; font-size: 18px; letter-spacing: 1px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;[学习进行时]2017年5月14日，习近平主席出席“一带一路”国际合作高峰论坛开幕式并发表主旨演讲，强调将“一带一路”建成和平之路、繁荣之路、开放之路、创新之路、文明之路。一年来，习近平如何大力推动“一带一路”建设？新华社《学习进行时》原创品牌栏目“讲习所”推出文章，为您梳理解读。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 18px; padding: 0px; color: rgb(77, 79, 83); font-family: &amp;quot;Microsoft Yahei&amp;quot;, &amp;quot;\\5FAE软雅黑&amp;quot;, &amp;quot;STHeiti Light&amp;quot;, &amp;quot;\\534E文细黑&amp;quot;, SimSun, &amp;quot;\\5B8B体&amp;quot;, Arial, sans-serif; font-size: 18px; letter-spacing: 1px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;　　“今天，群贤毕至，少长咸集，我期待着大家集思广益、畅所欲言，为推动‘一带一路’建设献计献策，让这一世纪工程造福各国人民。”&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 18px; padding: 0px; color: rgb(77, 79, 83); font-family: &amp;quot;Microsoft Yahei&amp;quot;, &amp;quot;\\5FAE软雅黑&amp;quot;, &amp;quot;STHeiti Light&amp;quot;, &amp;quot;\\534E文细黑&amp;quot;, SimSun, &amp;quot;\\5B8B体&amp;quot;, Arial, sans-serif; font-size: 18px; letter-spacing: 1px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;　　一年过去了，习近平主席在“一带一路”国际合作高峰论坛开幕式上的主旨演讲仍令人记忆深刻。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 18px; padding: 0px; color: rgb(77, 79, 83); font-family: &amp;quot;Microsoft Yahei&amp;quot;, &amp;quot;\\5FAE软雅黑&amp;quot;, &amp;quot;STHeiti Light&amp;quot;, &amp;quot;\\534E文细黑&amp;quot;, SimSun, &amp;quot;\\5B8B体&amp;quot;, Arial, sans-serif; font-size: 18px; letter-spacing: 1px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;　　这次高峰论坛是“一带一路”建设框架内层级最高、规模最大的国际会议，具有里程碑意义。作为论坛主办方和“一带一路”的首倡者，中方向国际社会作出了庄严承诺。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 18px; padding: 0px; color: rgb(77, 79, 83); font-family: &amp;quot;Microsoft Yahei&amp;quot;, &amp;quot;\\5FAE软雅黑&amp;quot;, &amp;quot;STHeiti Light&amp;quot;, &amp;quot;\\534E文细黑&amp;quot;, SimSun, &amp;quot;\\5B8B体&amp;quot;, Arial, sans-serif; font-size: 18px; letter-spacing: 1px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;　　为了“让这一世纪工程造福各国人民”，习近平运筹帷幄、亲力亲为，带领中国人民为建设“一带一路”作出了巨大努力，取得了辉煌成果，赢得世界广泛赞誉。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 18px; padding: 0px; color: rgb(77, 79, 83); font-family: &amp;quot;Microsoft Yahei&amp;quot;, &amp;quot;\\5FAE软雅黑&amp;quot;, &amp;quot;STHeiti Light&amp;quot;, &amp;quot;\\534E文细黑&amp;quot;, SimSun, &amp;quot;\\5B8B体&amp;quot;, Arial, sans-serif; font-size: 18px; letter-spacing: 1px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;　　&lt;span style=&quot;font-weight: 700 !important;&quot;&gt;让“一带一路”的成效惠及世界&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 18px; padding: 0px; color: rgb(77, 79, 83); font-family: &amp;quot;Microsoft Yahei&amp;quot;, &amp;quot;\\5FAE软雅黑&amp;quot;, &amp;quot;STHeiti Light&amp;quot;, &amp;quot;\\534E文细黑&amp;quot;, SimSun, &amp;quot;\\5B8B体&amp;quot;, Arial, sans-serif; font-size: 18px; letter-spacing: 1px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;　　“一带一路”建设是习近平2013年提出的倡议，它源于习近平对世界发展&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '20180515/201805151750565afaad80c5293.png', 'upload/20180515/201805151750565afaad80c5293_s.png');
INSERT INTO `about` VALUES ('3', '公司荣誉', '44444', '&lt;p&gt;[2学习进行时]2017年5月14日，习近平主席出席“一带一路”国际合作高峰论坛开幕式并发表主旨演讲，强调将“一带一路”建成和平之路、繁荣之路、开放之路、创新之路、文明之路。一年来，习近平如何大力推动“一带一路”建设？新华社《学习进行时》原创品牌栏目“讲习所”推出文章，为您梳理解读。　　“今天，群贤毕至，少长咸集，我期待着大家集思广益、畅所欲言，为推动‘一带一路’建设献计献策，让这一世纪工程造福各国人民。”　　一年过去了，习近平主席在“一带一路”国际合作高峰论坛开幕式上的主旨演讲仍令人记忆深刻。　　这次高峰论坛是“一带一路”建设框架内层级最高、规模最大的国际会议，具有里程碑意义。作为论坛主办方和“一带一路”的首倡者，中方向国际社会作出了庄严承诺。　　为了“让这一世纪工程造福各国人民”，习近平运筹帷幄、亲力亲为，带领中国人民为建设“一带一路”作出了巨大努力，取得了辉煌成果，赢得世界广泛赞誉。　　让“一带一路”的成效惠及世界　　“一带一路”建设是习近平2013年提出的倡议，它源于习近平对世界发展&lt;/p&gt;', '20180515/201805151751095afaad8d7d512.png', 'upload/20180515/201805151751095afaad8d7d512_s.png');

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `create_time` varchar(50) NOT NULL,
  `state` int(10) NOT NULL COMMENT '登录状态',
  `level_id` int(1) NOT NULL COMMENT '权限',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', '666', '666', '老王', '', '0', '0', '0', '0', '15');
INSERT INTO `admin` VALUES ('14', 'asdasd111', 'asdasd', '阿萨德的', 'asd@qq.com', '2147483647', '1', '2018-05-18 18:07:26', '0', '16');

-- ----------------------------
-- Table structure for `banner`
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `b_id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `b_name` varchar(20) NOT NULL,
  `b_thum` varchar(222) NOT NULL COMMENT '缩略图',
  `b_img` varchar(200) NOT NULL COMMENT '图片路径',
  `b_ctl` varchar(15) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('19', 'banner1', 'upload/20180517/201805171854425afd5f72c2fed_s.jpg', '20180517/201805171854425afd5f72c2fed.jpg', 'index');
INSERT INTO `banner` VALUES ('17', 'banner2', 'upload/20180518/201805181808445afea62c91c11_s.jpg', '20180518/201805181808445afea62c91c11.jpg', 'index');
INSERT INTO `banner` VALUES ('18', 'banner3', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'index');
INSERT INTO `banner` VALUES ('21', '1', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'about_us');
INSERT INTO `banner` VALUES ('22', '2', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'about_us');
INSERT INTO `banner` VALUES ('23', '3', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'contact_us');
INSERT INTO `banner` VALUES ('24', '4', 'upload/20180517/201805171856115afd5fcb2e154_s.jpg', '20180517/201805171856115afd5fcb2e154.jpg', 'contact_us');
INSERT INTO `banner` VALUES ('25', '5', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'contact_us');
INSERT INTO `banner` VALUES ('26', '6', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'news');
INSERT INTO `banner` VALUES ('27', '7', 'upload/20180517/201805171856115afd5fcb2e154_s.jpg', '20180517/201805171856115afd5fcb2e154.jpg', 'news');
INSERT INTO `banner` VALUES ('28', '8', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'news');
INSERT INTO `banner` VALUES ('29', '9', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'contact_us');
INSERT INTO `banner` VALUES ('30', '10', 'upload/20180517/201805171856115afd5fcb2e154_s.jpg', '20180517/201805171856115afd5fcb2e154.jpg', 'about_us');
INSERT INTO `banner` VALUES ('31', '11', 'upload/20180517/201805171856115afd5fcb2e154_s.jpg', '20180517/201805171856115afd5fcb2e154.jpg', 'contact_us');
INSERT INTO `banner` VALUES ('32', '12', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'contact_us');
INSERT INTO `banner` VALUES ('33', '13', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'product');
INSERT INTO `banner` VALUES ('34', '14', 'upload/20180517/201805171856115afd5fcb2e154_s.jpg', '20180517/201805171856115afd5fcb2e154.jpg', 'product');
INSERT INTO `banner` VALUES ('35', '15', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'product');
INSERT INTO `banner` VALUES ('36', '17', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'pro_details');
INSERT INTO `banner` VALUES ('37', '16', 'upload/20180517/201805171856115afd5fcb2e154_s.jpg', '20180517/201805171856115afd5fcb2e154.jpg', 'pro_details');
INSERT INTO `banner` VALUES ('38', '18', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'pro_details');
INSERT INTO `banner` VALUES ('39', '19', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'news_details');
INSERT INTO `banner` VALUES ('40', '20', 'upload/20180517/201805171856115afd5fcb2e154_s.jpg', '20180517/201805171856115afd5fcb2e154.jpg', 'news_details');
INSERT INTO `banner` VALUES ('41', '21', 'upload/20180517/201805171856225afd5fd6a13bc_s.jpg', '20180517/201805171856225afd5fd6a13bc.jpg', 'news_details');

-- ----------------------------
-- Table structure for `contact`
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `c_id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(10) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_phone` int(2) NOT NULL,
  `c_text` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contact
-- ----------------------------

-- ----------------------------
-- Table structure for `level`
-- ----------------------------
DROP TABLE IF EXISTS `level`;
CREATE TABLE `level` (
  `level_id` int(1) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(10) NOT NULL COMMENT '权限名',
  `level_arr` varchar(250) NOT NULL DEFAULT '' COMMENT '权限组',
  PRIMARY KEY (`level_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of level
-- ----------------------------
INSERT INTO `level` VALUES ('15', '超管', '[\"3\",\"4\",\"34\",\"35\",\"36\",\"5\",\"6\",\"38\",\"39\",\"40\",\"7\",\"8\",\"42\",\"43\",\"44\",\"9\",\"10\",\"46\",\"47\",\"48\",\"11\",\"12\",\"55\",\"56\",\"57\",\"32\",\"33\",\"58\",\"59\",\"60\",\"50\",\"51\",\"52\",\"53\",\"54\",\"73\",\"74\",\"75\",\"77\",\"78\"]');
INSERT INTO `level` VALUES ('16', '新闻人', '[\"5\",\"6\",\"38\",\"39\",\"40\"]');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `m_id` int(5) NOT NULL AUTO_INCREMENT,
  `m_pid` int(5) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `controller` varchar(20) NOT NULL,
  `action` varchar(20) NOT NULL,
  `m_create_time` varchar(50) NOT NULL,
  `m_edit_time` varchar(50) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('3', '0', '菜单管理', 'menu', '', '0', '0');
INSERT INTO `menu` VALUES ('4', '3', '菜单列表', 'menu', 'index', '0', '0');
INSERT INTO `menu` VALUES ('5', '0', '新闻管理', 'news', '0', '0', '0');
INSERT INTO `menu` VALUES ('6', '5', '新闻列表', 'news', 'index', '0', '0');
INSERT INTO `menu` VALUES ('7', '0', '用户管理', 'admin', '0', '0', '0');
INSERT INTO `menu` VALUES ('8', '7', '用户列表', 'admin', 'index', '0', '0');
INSERT INTO `menu` VALUES ('9', '0', '产品管理', 'prod', '0', '0', '0');
INSERT INTO `menu` VALUES ('10', '9', '产品列表', 'prod', 'index', '0', '0');
INSERT INTO `menu` VALUES ('11', '0', '权限管理', '0', '0', '0', '0');
INSERT INTO `menu` VALUES ('12', '11', '权限列表', 'level', 'index', '0', '0');
INSERT INTO `menu` VALUES ('32', '0', 'Banner图管理', '0', '0', '2018-05-04 10:49:51', '');
INSERT INTO `menu` VALUES ('33', '32', 'banner图列表', 'banner', 'index', '2018-05-04 10:50:47', '2018-05-04 11:06:23');
INSERT INTO `menu` VALUES ('34', '4', '菜单添加', 'menu', 'add', '2018-05-04 16:37:22', '2018-05-04 16:55:41');
INSERT INTO `menu` VALUES ('35', '4', '菜单删除', 'menu', 'del', '2018-05-04 16:37:39', '');
INSERT INTO `menu` VALUES ('36', '4', '菜单编辑', 'menu', 'edit', '2018-05-04 16:37:57', '');
INSERT INTO `menu` VALUES ('38', '6', '新闻添加', 'news', 'add', '2018-05-04 16:38:55', '');
INSERT INTO `menu` VALUES ('39', '6', '新闻删除', 'news', 'del', '2018-05-04 16:39:18', '');
INSERT INTO `menu` VALUES ('40', '6', '新闻编辑', 'news ', 'edit', '2018-05-04 16:39:42', '');
INSERT INTO `menu` VALUES ('42', '8', '用户添加', 'admin', 'add', '2018-05-04 16:40:26', '');
INSERT INTO `menu` VALUES ('43', '8', '用户删除', 'admin', 'del', '2018-05-04 16:40:50', '');
INSERT INTO `menu` VALUES ('44', '8', '用户编辑', 'admin', 'edit', '2018-05-04 16:41:10', '');
INSERT INTO `menu` VALUES ('46', '10', '产品添加', 'prod', 'add', '2018-05-04 16:41:47', '');
INSERT INTO `menu` VALUES ('47', '10', '产品删除', 'prod', 'del', '2018-05-04 16:42:00', '');
INSERT INTO `menu` VALUES ('48', '10', '产品编辑', 'prod', 'edit', '2018-05-04 16:42:16', '');
INSERT INTO `menu` VALUES ('50', '0', '导航栏管理', 'nav', '', '2018-05-14 11:23:57', '2018-05-14 11:30:29');
INSERT INTO `menu` VALUES ('51', '50', '导航栏列表', 'nav', 'index', '2018-05-14 11:24:26', '2018-05-14 11:25:26');
INSERT INTO `menu` VALUES ('52', '51', '导航栏添加', 'nav', 'add', '2018-05-14 11:25:43', '2018-05-14 11:26:57');
INSERT INTO `menu` VALUES ('53', '51', '导航栏编辑', 'nav', 'edit', '2018-05-14 11:26:02', '2018-05-14 11:27:05');
INSERT INTO `menu` VALUES ('54', '51', '导航栏删除', 'nav', 'del', '2018-05-14 11:27:35', '');
INSERT INTO `menu` VALUES ('55', '12', '权限添加', 'level', 'add', '2018-05-14 11:27:59', '');
INSERT INTO `menu` VALUES ('56', '12', '权限删除', 'level', 'del', '2018-05-14 11:28:13', '');
INSERT INTO `menu` VALUES ('57', '12', '权限编辑', 'level', 'edit', '2018-05-14 11:28:29', '');
INSERT INTO `menu` VALUES ('58', '33', 'banner图添加', 'banner', 'add', '2018-05-14 11:28:51', '');
INSERT INTO `menu` VALUES ('59', '33', 'banner图编辑', 'banner', 'edit', '2018-05-14 11:29:12', '');
INSERT INTO `menu` VALUES ('60', '33', 'banner图删除', 'banner', 'del', '2018-05-14 11:29:34', '');
INSERT INTO `menu` VALUES ('61', '0', '分类', '', '', '2018-05-14 15:27:31', '2018-05-14 15:45:42');
INSERT INTO `menu` VALUES ('62', '61', '新闻中心', 'news', '', '2018-05-14 15:28:13', '');
INSERT INTO `menu` VALUES ('63', '62', '市场动态', '', '', '2018-05-14 15:37:04', '');
INSERT INTO `menu` VALUES ('64', '62', '公司新闻', '', '', '2018-05-14 15:37:20', '');
INSERT INTO `menu` VALUES ('65', '62', '最新时事', '0', '0', '2018-05-14 15:37:30', '');
INSERT INTO `menu` VALUES ('66', '61', '产品中心', '', '', '2018-05-14 15:37:52', '');
INSERT INTO `menu` VALUES ('67', '66', '木门', '', '', '2018-05-14 15:39:15', '');
INSERT INTO `menu` VALUES ('68', '66', '橱柜', '', '', '2018-05-14 15:39:24', '');
INSERT INTO `menu` VALUES ('69', '66', '衣柜', '', '', '2018-05-14 15:39:33', '');
INSERT INTO `menu` VALUES ('70', '66', '桌椅', '', '', '2018-05-14 15:39:43', '');
INSERT INTO `menu` VALUES ('73', '0', '关于同创', '', '', '2018-05-15 17:15:45', '');
INSERT INTO `menu` VALUES ('74', '73', '关于同创列表', 'about', 'index', '2018-05-15 17:17:44', '2018-05-15 17:18:30');
INSERT INTO `menu` VALUES ('75', '0', '公司信息', '', '', '2018-05-16 16:59:43', '');
INSERT INTO `menu` VALUES ('77', '75', '信息列表', 'mes', 'index', '2018-05-16 17:00:52', '');
INSERT INTO `menu` VALUES ('78', '77', '信息修改', 'mes', 'edit', '2018-05-16 17:01:49', '');

-- ----------------------------
-- Table structure for `mes`
-- ----------------------------
DROP TABLE IF EXISTS `mes`;
CREATE TABLE `mes` (
  `mes_id` int(1) NOT NULL AUTO_INCREMENT,
  `mes_phone` int(5) NOT NULL,
  `mes_logo` varchar(150) NOT NULL,
  `mes_thum` varchar(150) NOT NULL,
  PRIMARY KEY (`mes_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mes
-- ----------------------------
INSERT INTO `mes` VALUES ('1', '88888111', '20180517/201805171854135afd5f55a3d3b.jpg', 'upload/20180517/201805171854135afd5f55a3d3b_s.jpg');

-- ----------------------------
-- Table structure for `nav`
-- ----------------------------
DROP TABLE IF EXISTS `nav`;
CREATE TABLE `nav` (
  `nav_id` int(1) NOT NULL AUTO_INCREMENT,
  `nav_name` varchar(20) NOT NULL,
  `nav_action` varchar(20) NOT NULL DEFAULT '',
  `nav_controller` varchar(20) NOT NULL DEFAULT '',
  `nav_create_time` varchar(55) NOT NULL DEFAULT '',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nav
-- ----------------------------
INSERT INTO `nav` VALUES ('2', '首页', 'index', 'home', '2018-05-14 14:47:35');
INSERT INTO `nav` VALUES ('3', '关于', 'about_us', 'home', '2018-05-14 14:47:39');
INSERT INTO `nav` VALUES ('4', '产品中心', 'product', 'home', '2018-05-14 14:47:43');
INSERT INTO `nav` VALUES ('5', '新闻中心', 'news', 'home', '2018-05-14 14:47:47');
INSERT INTO `nav` VALUES ('6', '联系我们', 'contact_us', 'home', '2018-05-14 14:47:51');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `n_id` int(5) NOT NULL AUTO_INCREMENT,
  `n_title` varchar(20) NOT NULL,
  `n_content` varchar(2000) NOT NULL,
  `n_author` varchar(20) NOT NULL,
  `n_create_time` varchar(50) NOT NULL,
  `n_view` int(10) NOT NULL COMMENT '访问量',
  `n_type` varchar(10) NOT NULL COMMENT '新闻类型',
  `n_thum` varchar(50) NOT NULL COMMENT '缩略图',
  `n_state` varchar(50) NOT NULL COMMENT '状态',
  `n_entry_time` varchar(50) NOT NULL COMMENT '录入时间',
  `n_img` varchar(100) NOT NULL COMMENT '图片',
  `n_img2` varchar(150) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('42', '外交部、国防部周六同时向谁“放狠话”？', '&lt;p&gt;海外网5月15日电据韩联社15日报道，日本外务省今年再次通过《外交蓝皮书》主张对日韩争议岛屿&amp;quot;独岛&amp;quot;(日本称&amp;quot;竹岛&amp;quot;)的主权。引发韩国外交部强烈不满，并将召见日本驻韩国大使馆总务公使表示抗议。\r\n\r\n报道说，日本政府15日向内阁会议提及包括&amp;quot;独岛是日本固有领土&amp;quot;内容的2018年《外交蓝皮书》。&lt;/p&gt;', '老王', '2018-05-16', '0', '65', 'upload/20180517/201805171943515afd6af732dd4_s.jpg', '', '2018-05-17 19:43:51', '20180517/201805171943515afd6af732dd4.jpg', '20180517/201805171943515afd6af739365.jpg');
INSERT INTO `news` VALUES ('43', '银行家杂志评2017十大金融人物：周小川', '&lt;p&gt;海外网5月15日电据韩联社15日报道，日本外务省今年再次通过《外交蓝皮书》主张对日韩争议岛屿&amp;quot;独岛&amp;quot;(日本称&amp;quot;竹岛&amp;quot;)的主权。引发韩国外交部强烈不满，并将召见日本驻韩国大使馆总务公使表示抗议。\r\n\r\n报道说，日本政府15日向内阁会议提及包括&amp;quot;独岛是日本固有领土&amp;quot;内容的2018年《外交蓝皮书》。&lt;/p&gt;', '老王', '2018-05-16', '0', '64', 'upload/20180517/201805171944135afd6b0d32aee_s.jpg', '', '2018-05-17 19:44:13', '20180517/201805171944135afd6b0d32aee.jpg', '20180517/201805171944135afd6b0d37527.jpg');
INSERT INTO `news` VALUES ('44', '刘新云任山西省公安厅党委书记', '&lt;p&gt;海外网5月15日电据韩联社15日报道，日本外务省今年再次通过《外交蓝皮书》主张对日韩争议岛屿&amp;quot;独岛&amp;quot;(日本称&amp;quot;竹岛&amp;quot;)的主权。引发韩国外交部强烈不满，并将召见日本驻韩国大使馆总务公使表示抗议。\r\n\r\n报道说，日本政府15日向内阁会议提及包括&amp;quot;独岛是日本固有领土&amp;quot;内容的2018年《外交蓝皮书》。&lt;/p&gt;', '老王', '2018-05-17', '0', '64', 'upload/20180517/201805171944455afd6b2d49d62_s.jpg', '', '2018-05-17 19:44:45', '20180517/201805171944455afd6b2d49d62.jpg', '20180517/201805171944455afd6b2d4dfcb.jpg');
INSERT INTO `news` VALUES ('45', '刘新云任山西省公安厅党委书记', '&lt;p&gt;海外网5月15日电据韩韩国外交部强烈本政府15日向内阁会议提及包括&amp;quot;独岛是日本表示抗议。\r\n\r\n报道说，日本政府15日向内阁会议提及包括&amp;quot;独岛是日本固有领土&amp;quot;内容的2018年《外交蓝皮书》。海外网5月15日电据韩联社15日报道，日本外务省今年再次通过《外交蓝皮书》主张对日韩争议岛屿&amp;quot;独岛&amp;quot;(日本称&amp;quot;竹岛&amp;quot;)的主权。引发韩国外交部强烈不满，并将召见日本驻韩国大使馆总务公使表示抗议。\r\n\r\n报道说，日本政府15日向内阁会议提及包括&amp;quot;独岛是日本固有领土&amp;quot;内容的2018年《外交蓝皮书》。海外网5月15日电据韩联社15日报道，日本外务省今年再次通过《外交蓝皮书》主张对日韩争议岛屿&amp;quot;独岛&amp;quot;(日本称&amp;quot;竹岛&amp;quot;)的主权。引发韩国外交部强烈不满，并将召见日本驻韩国大使馆总务公使表示抗议。\r\n\r\n报道说，日本政府15日向内阁会议提及包括&amp;quot;独岛是日本固有领土&amp;quot;内容的2018年《外交蓝皮书》。海外网5月15日电据韩联社15日报道，日本外务省今年再次通过《外交蓝皮书》主张对日韩争议岛屿&amp;quot;独岛&amp;quot;(日本称&amp;quot;竹岛&amp;quot;)的主权。引发韩国外交部强烈不满，并将召见日本驻韩国大使馆总务公使表示抗议。\r\n\r\n报道说，日本政府15日向内阁会议提及包括&amp;quot;独岛是日本固有领土&amp;quot;内容的2018年《外交蓝皮书》。海外网5月15日电据韩联社15日报道，日本外务省今年再次通过《外交蓝皮书》主张对日韩争议岛屿&amp;quot;独岛&amp;quot;(日本称&amp;quot;竹岛&amp;quot;)的主权。引发韩国外交部强烈不满，并将召见日本驻韩国大使馆总务公使表示抗议。\r\n\r\n报道说，日本政府15日向内阁会议提及包括&amp;quot;独岛是日本固有领土&amp;quot;内容的2018年《外交蓝皮书》。张对日韩争议岛屿&amp;quot;独岛&amp;quot;(日本称&amp;quot;竹岛&amp;quot;)的主权。引发韩国外交部强烈不满，并将召见日本驻韩国大使馆总务公使表示抗议。\r\n\r\n报道说，日本政府15日向内阁会议提及包括&amp;quot;独岛是日本固有领土&amp;quot;内容的2018年《外交蓝皮书》。&lt;/p&gt;', '老王', '2018-03-30', '0', '63', 'upload/20180517/201805171945165afd6b4c6b797_s.jpg', '', '2018-05-17 19:45:16', '20180517/201805171945165afd6b4c6b797.jpg', '20180517/201805171945165afd6b4c6fde8.jpg');
INSERT INTO `news` VALUES ('46', '刘新云任山西省公安厅党委书记', '&lt;p&gt;海外网5月15日电据韩联社15日报道，日本外务省今年再次通过《外交蓝皮书》主张对日韩争议岛屿&amp;quot;独岛&amp;quot;(日本称&amp;quot;竹岛&amp;quot;)的主权。引发韩国外交部强烈不满，并将召见日本驻韩国大使馆总务公使表示抗议。\r\n\r\n报道说，日本政府15日向内阁会议提及包括&amp;quot;独岛是日本固有领土&amp;quot;内容的2018年《外交蓝皮书》。&lt;/p&gt;', '老王', '2018-05-17', '0', '63', 'upload/20180517/201805171945345afd6b5ece5d4_s.jpg', '', '2018-05-17 19:45:34', '20180517/201805171945345afd6b5ece5d4.jpg', '20180517/201805171945345afd6b5ed33f5.jpg');
INSERT INTO `news` VALUES ('47', '刘新云任山西省公安厅党委书记', '&lt;p&gt;海外网5月15日电据韩联社15日报道，日本外务省今年再次通过《外交蓝皮书》主张对日韩争议岛屿&amp;quot;独岛&amp;quot;(日本称&amp;quot;竹岛&amp;quot;)的主权。引发韩国外交部强烈不满，并将召见日本驻韩国大使馆总务公使表示抗议。\r\n\r\n报道说，日本政府15日向内阁会议提及包括&amp;quot;独岛是日本固有领土&amp;quot;内容的2018年《外交蓝皮书》。&lt;/p&gt;', '老王', '2018-05-16', '0', '63', 'upload/20180517/201805171945515afd6b6f8ee09_s.jpg', '', '2018-05-17 19:45:51', '20180517/201805171945515afd6b6f8ee09.jpg', '20180517/201805171945515afd6b6f94fb3.jpg');
INSERT INTO `news` VALUES ('52', '中国空警3000外形亮相，可同时跟踪10', '&lt;p&gt;海外网5月15日电据韩联社15日报道，日本外务省今年再次通过《外交蓝皮书》主张对日韩争议岛屿&amp;quot;独岛&amp;quot;(日本称&amp;quot;竹岛&amp;quot;)的主权。引发韩国外交部强烈不满，并将召见日本驻韩国大使馆总务公使表示抗议。\r\n\r\n报道说，日本政府15日向内阁会议提及包括&amp;quot;独岛是日本固有领土&amp;quot;内容的2018年《外交蓝皮书》。&lt;/p&gt;', '老王', '2018-05-16', '0', '65', 'upload/20180517/201805171946155afd6b878ad15_s.jpg', '', '2018-05-17 19:46:15', '20180517/201805171946155afd6b878ad15.jpg', '20180517/201805171946155afd6b878eb96.jpg');
INSERT INTO `news` VALUES ('53', '中国空警3000外形亮相，可同时跟踪10', '&lt;p&gt;海外网5月15日电据韩联社15日报道，日本外务省今年再次通过《外交蓝皮书》主张对日韩争议岛屿&amp;quot;独岛&amp;quot;(日本称&amp;quot;竹岛&amp;quot;)的主权。引发韩国外交部强烈不满，并将召见日本驻韩国大使馆总务公使表示抗议。\r\n\r\n报道说，日本政府15日向内阁会议提及包括&amp;quot;独岛是日本固有领土&amp;quot;内容的2018年《外交蓝皮书》。&lt;/p&gt;', '老王', '2018-05-16', '0', '63', 'upload/20180517/201805171946325afd6b986b50a_s.jpg', '', '2018-05-17 19:46:32', '20180517/201805171946325afd6b986b50a.jpg', '20180517/201805171946325afd6b986ff43.jpg');
INSERT INTO `news` VALUES ('54', '一桥飞越港珠澳', '&lt;p&gt;海外网5月15日电据韩联社15日报道，日本外务省今年再次通过《外交蓝皮书》主张对日韩争议岛屿&amp;quot;独岛&amp;quot;(日本称&amp;quot;竹岛&amp;quot;)的主权。引发韩国外交部强烈不满，并将召见日本驻韩国大使馆总务公使表示抗议。\r\n\r\n报道说，日本政府15日向内阁会议提及包括&amp;quot;独岛是日本固有领土&amp;quot;内容的2018年《外交蓝皮书》。&lt;/p&gt;', '老王', '2018-05-16', '0', '63', 'upload/20180517/201805171946545afd6bae2398b_s.jpg', '', '2018-05-17 19:46:54', '20180517/201805171946545afd6bae2398b.jpg', '20180517/201805171946545afd6bae28f7d.jpg');
INSERT INTO `news` VALUES ('58', '阿萨德阿萨德', '&lt;p&gt;阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德11&lt;/p&gt;', '', '2018-05-18 18:04:32', '0', '64', 'upload/20180518/201805181804325afea53099edb_s.png', '', '2018-05-18 18:04:32', '20180518/201805181804325afea53099edb.png', '20180518/201805181804325afea530a91aa.jpg');

-- ----------------------------
-- Table structure for `prod`
-- ----------------------------
DROP TABLE IF EXISTS `prod`;
CREATE TABLE `prod` (
  `p_id` int(5) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(11) NOT NULL COMMENT '产品名字',
  `p_type` varchar(5) NOT NULL COMMENT '产品分类',
  `p_abstract` varchar(500) NOT NULL COMMENT '摘要',
  `p_content` varchar(1000) NOT NULL COMMENT '内容',
  `p_thumbnail` varchar(155) NOT NULL,
  `p_img` varchar(155) NOT NULL,
  `p_create_time` varchar(20) NOT NULL COMMENT '添加时间',
  `p_entry_time` varchar(20) NOT NULL COMMENT '录入时间',
  `p_author` varchar(5) NOT NULL COMMENT '添加人员',
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of prod
-- ----------------------------
INSERT INTO `prod` VALUES ('21', '14', '67', '666', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171920555afd659791e9c_s.jpg', '20180517/201805171920555afd659791e9c.jpg', '2018-05-14 10:15:50', '', '老王');
INSERT INTO `prod` VALUES ('22', '15', '67', '55', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171922265afd65f21c095_s.jpg', '20180517/201805171922265afd65f21c095.jpg', '2018-05-14 10:18:42', '', '老王');
INSERT INTO `prod` VALUES ('23', 'ghjhgj', '67', 'fads', '&lt;p&gt;afsd&lt;/p&gt;', 'upload/20180517/201805171920425afd658a70c54_s.jpg', '20180517/201805171920425afd658a70c54.jpg', '2018-05-14 10:18:52', '', '老王');
INSERT INTO `prod` VALUES ('24', '16', '68', 'fads', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171924445afd667c14710_s.jpg', '20180517/201805171924445afd667c14710.jpg', '2018-05-14 10:19:02', '', '老王');
INSERT INTO `prod` VALUES ('25', 'fghygf', '68', '44', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171924575afd668916938_s.jpg', '20180517/201805171924575afd668916938.jpg', '2018-05-14 10:19:11', '', '老王');
INSERT INTO `prod` VALUES ('26', '欧式极简橱柜', '67', '板厚度: 15mm   台板是否进口: 否   柜体环保级别: E0   柜板是否进口: 否   橱柜品牌: 法迪奥   型号: Q001   计价单位: 1延米门板是否进口: 否    颜色分类: Q007   材质: 石英石   柜体材质: 不锈钢    门板材质: 不锈钢   形状: 一字形   风格: 简约现代', '&lt;p&gt;设计中，本案力求营造出一种使空间尽情挥洒源远流长的神韵，在给予空间生命力的同时也饱含文化情趣。&amp;nbsp; 选材方面，除了欧式惯用的白色材质外，还用了玻璃、镜子等现代材料，大大提升了原质感的对比效果，在表现尊贵的同时还增添了几分现代感。与此同时，本案配搭了暖色的灯光，打破了传统布局沉闷的格调，使得空间的层次感、穿透性大大增强。&lt;/p&gt;', 'upload/20180517/201805171920105afd656a0ee7f_s.jpg', '20180517/201805171920105afd656a0ee7f.jpg', '2018-05-14 10:18:52', '', '老王');
INSERT INTO `prod` VALUES ('27', '13', '68', 'fads', '&lt;p&gt;afsd&lt;/p&gt;', 'upload/20180517/201805171925145afd669a62fd7_s.jpg', '20180517/201805171925145afd669a62fd7.jpg', '2018-05-14 10:18:52', '', '老王');
INSERT INTO `prod` VALUES ('28', '22', '68', '44', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171925305afd66aa9b9cf_s.jpg', '20180517/201805171925305afd66aa9b9cf.jpg', '2018-05-14 10:19:11', '', '老王');
INSERT INTO `prod` VALUES ('29', '32', '68', '44', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171925515afd66bf3bf42_s.jpg', '20180517/201805171925515afd66bf3bf42.jpg', '2018-05-14 10:19:11', '', '老王');
INSERT INTO `prod` VALUES ('30', '23', '70', '44', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171923315afd6633edb24_s.jpg', '20180517/201805171923315afd6633edb24.jpg', '2018-05-14 10:19:11', '', '老王');
INSERT INTO `prod` VALUES ('31', '24', '70', '44', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171923535afd66494ae88_s.jpg', '20180517/201805171923535afd66494ae88.jpg', '2018-05-14 10:19:11', '', '老王');
INSERT INTO `prod` VALUES ('33', '欧式极简橱柜', '67', '台板厚度: 15mm   台板是否进口: 否   柜体环保级别: E0   柜板是否进口: 否   橱柜品牌: 法迪奥   型号: Q001   计价单位: 1延米门板是否进口: 否    颜色分类: Q007   材质: 石英石   柜体材质: 不锈钢    门板材质: 不锈钢   形状: 一字形   风格: 简约现代', '&lt;p&gt;设计中，本案力求营造出一种使空间尽情挥洒源远流长的神韵，在给予空间生命力的同时也饱含文化情趣。&amp;nbsp; 选材方面，除了欧式惯用的白色材质外，还用了玻璃、镜子等现代材料，大大提升了原质感的对比效果，在表现尊贵的同时还增添了几分现代感。与此同时，本案配搭了暖色的灯光，打破了传统布局沉闷的格调，使得空间的层次感、穿透性大大增强。&lt;/p&gt;', 'upload/20180517/201805171923075afd661bba553_s.jpg', '20180517/201805171923075afd661bba553.jpg', '2018-05-14 10:18:42', '', '老王');
INSERT INTO `prod` VALUES ('34', 'ghjhgj', '70', '44', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171924215afd666524b91_s.jpg', '20180517/201805171924215afd666524b91.jpg', '2018-05-14 10:19:11', '', '老王');
INSERT INTO `prod` VALUES ('35', '3', '70', '44', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171924305afd666eaf0a4_s.jpg', '20180517/201805171924305afd666eaf0a4.jpg', '2018-05-14 10:19:11', '', '老王');
INSERT INTO `prod` VALUES ('36', 'fghfgh', '69', '44', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171926045afd66cc16890_s.jpg', '20180517/201805171926045afd66cc16890.jpg', '2018-05-14 10:19:11', '', '老王');
INSERT INTO `prod` VALUES ('37', 'v', '69', '44', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171926155afd66d767040_s.jpg', '20180517/201805171926155afd66d767040.jpg', '2018-05-14 10:19:11', '', '老王');
INSERT INTO `prod` VALUES ('38', 'x', '69', '44', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171926255afd66e1e1b89_s.jpg', '20180517/201805171926255afd66e1e1b89.jpg', '2018-05-14 10:19:11', '', '老王');
INSERT INTO `prod` VALUES ('39', 'z', '69', '44', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171926385afd66ee43b0c_s.jpg', '20180517/201805171926385afd66ee43b0c.jpg', '2018-05-14 10:19:11', '', '老王');
INSERT INTO `prod` VALUES ('40', 'b', '69', '44', '&lt;p&gt;fads&lt;/p&gt;', 'upload/20180517/201805171926475afd66f7edfde_s.jpg', '20180517/201805171926475afd66f7edfde.jpg', '2018-05-14 10:19:11', '', '老王');
INSERT INTO `prod` VALUES ('41', '简约现代橱柜', '67', '台板厚度: 15mm   台板是否进口: 否   柜体环保级别: E0   柜板是否进口: 否   橱柜品牌: 法迪奥   型号: Q001   计价单位: 1延米门板是否进口: 否    颜色分类: Q007   材质: 石英石   柜体材质: 不锈钢    门板材质: 不锈钢   形状: 一字形   风格: 简约现代', '&lt;p&gt;设计中，本案力求营造出一种使空间尽情挥洒源远流长的神韵，在给予空间生命力的同时也饱含文化情趣。&amp;nbsp; 选材方面，除了欧式惯用的白色材质外，还用了玻璃、镜子等现代材料，大大提升了原质感的对比效果，在表现尊贵的同时还增添了几分现代感。与此同时，本案配搭了暖色的灯光，打破了传统布局沉闷的格调，使得空间的层次感、穿透性大大增强。&lt;/p&gt;', 'upload/20180517/201805171918145afd64f6d86c3_s.jpg', '20180517/201805171918145afd64f6d86c3.jpg', '2018-05-14 10:19:11', '', '老王');
INSERT INTO `prod` VALUES ('42', '简约现代橱柜', '67', '台板厚度: 15mm   台板是否进口: 否   柜体环保级别: E0   柜板是否进口: 否   橱柜品牌: 法迪奥   型号: Q001   计价单位: 1延米门板是否进口: 否    颜色分类: Q007   材质: 石英石   柜体材质: 不锈钢    门板材质: 不锈钢   形状: 一字形   风格: 简约现代', '&lt;p&gt;设计中，本案力求营造出一种使空间尽情挥洒源远流长的神韵，在给予空间生命力的同时也饱含文化情趣。&amp;nbsp; 选材方面，除了欧式惯用的白色材质外，还用了玻璃、镜子等现代材料，大大提升了原质感的对比效果，在表现尊贵的同时还增添了几分现代感。与此同时，本案配搭了暖色的灯光，打破了传统布局沉闷的格调，使得空间的层次感、穿透性大大增强。&lt;/p&gt;', 'upload/20180517/201805171904065afd61a69660d_s.jpg', '20180517/201805171904065afd61a69660d.jpg', '2018-05-16 14:23:26', '', '老王');
INSERT INTO `prod` VALUES ('43', '阿萨德阿萨德', '69', '阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德', '&lt;p&gt;阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿', 'upload/20180518/201805181808125afea60ca80a6_s.png', '20180518/201805181808125afea60ca80a6.png', '2018-05-18 18:08:12', '', '老王');
