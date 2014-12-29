-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 02 月 21 日 20:10
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `project`
--

-- --------------------------------------------------------

--
-- 表的结构 `pro_access_log`
--

CREATE TABLE IF NOT EXISTS `access_log` (
  `create_time` datetime NOT NULL,
  `client_ip` varchar(20) NOT NULL,
  `controller_name` varchar(20) NOT NULL,
  `action_name` varchar(20) NOT NULL,
  `server_ip` varchar(20) NOT NULL,
  `run_time` int(11) NOT NULL,
  `app_name` varchar(20) NOT NULL COMMENT '应用名称',
  PRIMARY KEY (`create_time`),
  KEY `create_time` (`create_time`),
  KEY `app_name` (`app_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='访问日志表';

-- --------------------------------------------------------

--
-- 表的结构 `pro_attachment`
--

CREATE TABLE IF NOT EXISTS `attachment` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `programid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `check_result` varchar(20) DEFAULT NULL,
  `college_id` int(3) NOT NULL,
  `create_uid` int(3) NOT NULL,
  `create_time` datetime NOT NULL,
  `TIME` int(3) NOT NULL COMMENT '批次',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `pro_attachment`
--

INSERT INTO `attachment` (`id`, `programid`, `name`, `type`, `address`, `description`, `check_result`, `college_id`, `create_uid`, `create_time`, `TIME`) VALUES
(3, 5, '姚善良_20130904.pdf', '项目申请材料', '530075af63f7e.pdf', '', NULL, 0, 1, '2014-02-16 16:24:15', 0),
(4, 9, '姚善良_20130901.pdf', '中期检查材料', '530080efc0fbc.pdf', '', NULL, 0, 1, '2014-02-16 17:12:15', 0),
(5, 1, '姚善良_20130907.pdf', '中期检查材料', '5300b22ae3142.pdf', '', NULL, 27, 70, '2014-02-16 20:42:18', 0),
(6, 1, '姚善良_20130904.pdf', '中期检查材料', 'project/5300b2b95981a.pdf', '', NULL, 27, 70, '2014-02-16 20:44:41', 0),
(7, 2, '姚善良_20130901.pdf', '中期检查材料', 'project/5300b2f64d499.pdf', '', NULL, 27, 70, '2014-02-16 20:45:42', 0),
(8, 2, '姚善良_20130901.pdf', '中期检查材料', 'project/5300b3b0d39c2.pdf', '', NULL, 27, 70, '2014-02-16 20:48:48', 0),
(9, 5, '姚善良_20130828.pdf', '中期检查材料', 'project/5300b4ad9b629.pdf', '', NULL, 0, 1, '2014-02-16 20:53:01', 0),
(10, 6, '姚善良_20130828.pdf', '中期检查材料', 'project/5300b4c2e3512.pdf', '', NULL, 0, 1, '2014-02-16 20:53:22', 0),
(12, 41, '姚善良_20130805.pdf', '项目申请材料', 'project/5307391a34cfd.pdf', '就', NULL, 27, 70, '2014-02-21 19:31:38', 0);

-- --------------------------------------------------------

--
-- 表的结构 `pro_college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `college_id` int(3) NOT NULL,
  `college_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `pro_college`
--

INSERT INTO `college` (`id`, `college_id`, `college_name`) VALUES
(1, 0, '苏州大学学生科技协会'),
(2, 27, '计算机科学与技术学院');

-- --------------------------------------------------------

--
-- 表的结构 `pro_debug_log`
--

CREATE TABLE IF NOT EXISTS `debug_log` (
  `create_time` datetime NOT NULL,
  `level_name` varchar(20) NOT NULL,
  `error_code` varchar(20) NOT NULL,
  `msg` text NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `line_number` int(4) NOT NULL,
  `app_name` varchar(20) NOT NULL COMMENT '应用名称',
  PRIMARY KEY (`create_time`),
  KEY `create_time` (`create_time`),
  KEY `app_name` (`app_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='系统日志表';

--
-- 转存表中的数据 `pro_debug_log`
--

INSERT INTO `debug_log` (`create_time`, `level_name`, `error_code`, `msg`, `file_path`, `line_number`, `app_name`) VALUES
('2014-02-16 09:23:59', 'WARN', '[2]', 'mysql_connect() [function.mysql-connect]: Access denied for user ''root''@''localhost'' (using password: NO)', 'C:\\xampp\\htdocs\\project\\Common\\Db\\DbMysql.class.php', 46, 'Member'),
('2014-02-16 12:08:43', 'SQL', '[256]', 'Table ''project.pro_news'' doesn''t exist[SQL]:SELECT COUNT(*) AS ts_count FROM `pro_news`  ', 'C:\\xampp\\htdocs\\project\\Library\\Log.class.php', 362, 'Home');

-- --------------------------------------------------------

--
-- 表的结构 `pro_kyjj`
--

CREATE TABLE IF NOT EXISTS `kyjj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program_id` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `type` varchar(20) CHARACTER SET utf8 NOT NULL,
  `college_id` int(3) NOT NULL,
  `uid` int(10) NOT NULL,
  `teacher` varchar(18) CHARACTER SET utf8 DEFAULT NULL,
  `member` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `telephone` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `highest_edu` varchar(8) CHARACTER SET utf8 NOT NULL,
  `totle_number` int(2) DEFAULT NULL,
  `middle_check` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `final_check` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `TIME` varchar(3) CHARACTER SET utf8 NOT NULL COMMENT '批次',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `pro_kyjj`
--

INSERT INTO `kyjj` (`id`, `program_id`, `title`, `type`, `college_id`, `uid`, `teacher`, `member`, `telephone`, `highest_edu`, `totle_number`, `middle_check`, `final_check`, `create_time`, `update_time`, `TIME`) VALUES
(1, 'KY2013001A', '基于。。。的。。。', '重大项目', 27, 70, '老师', '成员1', NULL, '', NULL, '', '', '2014-02-16 14:54:34', NULL, ''),
(2, 'KY2013002A', 'jiyu ..de ..', '一般项目', 27, 70, 'laoshi', 'chengyuan', '18896581232', '', NULL, '', '', '2014-02-16 14:57:08', NULL, ''),
(3, NULL, 'KY2013005', '一般项目', 27, 70, '来时', '来时是，hi', '18896581232', '', NULL, NULL, NULL, '2014-02-16 15:42:26', NULL, ''),
(5, NULL, '奇偶数', '一般项目', 0, 1, '行丢失东西', '才多少', '', '本科生', NULL, NULL, NULL, '2014-02-16 15:51:19', NULL, ''),
(6, NULL, '吃的撒长撒', '重点项目', 0, 1, '吃的撒', 'v苏大v刹', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 16:42:25', NULL, '15'),
(7, NULL, '大范甘迪', '一般项目', 0, 1, 'V大飞v', '成V大飞v', '18896581232', '', NULL, NULL, NULL, '2014-02-16 16:43:29', NULL, '15'),
(8, NULL, '行长撒', '', 0, 1, '出生地', '', '18896581232', '', NULL, NULL, NULL, '2014-02-16 16:44:13', NULL, '15'),
(9, NULL, '绯闻绯闻', '一般项目', 0, 1, 'CDC', '成V大送', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 16:47:05', NULL, '15'),
(10, NULL, 'v飞的v个', '一般项目', 0, 1, 'V大飞', '', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 20:18:18', NULL, '15'),
(11, NULL, 'V大飞V大飞', '一般项目', 27, 1, '菜单', '', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 20:18:30', NULL, '15'),
(12, NULL, '行山地车', '一般项目', 0, 1, '出生地', '才', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 20:19:30', NULL, ''),
(13, NULL, 'cv', '一般项目', 27, 1, '吃的撒', '才', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 20:20:44', NULL, ''),
(14, NULL, '电放费', '一般项目', 0, 1, '才', '', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 20:22:15', NULL, ''),
(15, NULL, 'vv', '一般项目', 27, 1, 'vv', '', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 20:23:18', NULL, ''),
(16, NULL, '调查', '一般项目', 0, 1, '此次', '', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 20:25:27', NULL, ''),
(17, NULL, '000', '一般项目', 0, 1, '0', '0', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 20:26:15', NULL, ''),
(18, NULL, 'z', '一般项目', 27, 1, 'z', 'z', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 20:29:24', NULL, ''),
(19, NULL, 'cd', '一般项目', 0, 1, 'cds', 'd', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 20:30:21', NULL, '15'),
(21, NULL, 'xs', '一般项目', 0, 1, 'ss', 's', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 20:31:01', NULL, '16'),
(22, NULL, 'dfvdd', '一般项目', 27, 70, 'vfdvdf', '', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 20:39:56', NULL, '16'),
(23, NULL, '的', '一般项目', 0, 1, '的', '', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-16 22:48:25', NULL, '16'),
(24, NULL, '12', '一般项目', 0, 1, '1', '', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-20 15:27:59', NULL, '16'),
(25, NULL, '1', '一般项目', 0, 1, 'S', 'Z,X。大学生', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-20 23:33:00', NULL, '16'),
(26, NULL, '是', '一般项目', 0, 1, '才', '1，对的，的,d,d，的', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-20 23:37:31', NULL, '16'),
(27, NULL, '1', '一般项目', 0, 1, '1', '1,2,3,4', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-20 23:45:51', NULL, '16'),
(28, NULL, '1', '重点项目', 0, 1, '1', '1,s，s', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-20 23:47:41', NULL, '16'),
(29, NULL, '1', '一般项目', 27, 1, '1', '记一下，你好,jiushi ，我', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-20 23:50:47', NULL, '16'),
(30, NULL, '12', '一般项目', 0, 1, '来', '你好 就是 我们的 hiu', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-20 23:51:58', NULL, '16'),
(31, NULL, '2012年11月8日', '一般项目', 0, 1, '的', '级     huhwe      何物    密度何物   ', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-20 23:52:46', NULL, '16'),
(32, NULL, '东五', '一般项目', 0, 1, '都是', '你肚饿  牛的很  你复读恶化  huew   阢', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-20 23:54:06', NULL, '16'),
(33, NULL, '1', '一般项目', 0, 1, '1', '12     uc     级     节     iu', '18896581232', '本科生', NULL, NULL, NULL, '2014-02-20 23:57:08', NULL, '16'),
(34, NULL, '1', '一般项目', 0, 1, '1', '1     就是     就是     就是     jiu', '18896581232', '本科生', 7, NULL, NULL, '2014-02-21 18:15:38', NULL, '16'),
(35, NULL, '2012年11月8日', '一般项目', 0, 1, '1', '1     胡黑山谷     i好', '18896581232', '本科生', 4, NULL, NULL, '2014-02-21 18:17:26', NULL, '16'),
(36, NULL, '1', '一般项目', 0, 1, '1', '1     2     3     4     5', '18896581232', '本科生', 6, NULL, NULL, '2014-02-21 18:18:02', '2014-02-21 18:18:15', '16'),
(37, NULL, '1', '一般项目', 0, 1, '1', '就是     hi     i就会     就会', '18896581232', '本科生', 5, NULL, NULL, '2014-02-21 18:18:59', NULL, '16'),
(38, NULL, '1', '一般项目', 0, 1, '就合适', '黎明     牛黄     弩弓     不义富贵，回顾', '18896581232', '本科生', 5, NULL, NULL, '2014-02-21 18:19:39', '2014-02-21 18:22:06', '16'),
(39, NULL, '1', '一般项目', 0, 1, '1', '1,2，就是，节，不，就是', '18896581232', '本科生', 7, NULL, NULL, '2014-02-21 18:46:32', '2014-02-21 18:46:45', '16'),
(40, NULL, '基于', '一般项目', 27, 1, '老师', '成员1，成员2,成员3', '18896581232', '本科生', 4, NULL, NULL, '2014-02-21 19:15:39', NULL, '16'),
(41, NULL, '基于', '一般项目', 27, 70, '就', '就是，呼应，就要，不应该', '18896581232', '本科生', 5, NULL, NULL, '2014-02-21 19:30:14', '2014-02-21 19:30:28', '16');

-- --------------------------------------------------------

--
-- 表的结构 `pro_manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `uid` int(3) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `realname` varchar(20) DEFAULT NULL,
  `password` varchar(32) NOT NULL COMMENT '密码',
  `college_id` int(3) DEFAULT NULL,
  `role_id` varchar(3) NOT NULL COMMENT '角色ID',
  `telephone` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `login_ip` varchar(17) DEFAULT NULL COMMENT '登录IP',
  `login_time` datetime DEFAULT NULL COMMENT '登录时间',
  `register_time` datetime NOT NULL COMMENT '注册时间',
  `state` varchar(10) NOT NULL DEFAULT 'U' COMMENT '状态(U为可用、D为锁定)',
  `login_num` int(11) NOT NULL DEFAULT '0' COMMENT '登录数',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员用户表' AUTO_INCREMENT=74 ;

--
-- 转存表中的数据 `pro_manager`
--

INSERT INTO `manager` (`uid`, `username`, `realname`, `password`, `college_id`, `role_id`, `telephone`, `email`, `login_ip`, `login_time`, `register_time`, `state`, `login_num`) VALUES
(1, 'admin', '超级管理员', '6dbfe7a892d450c519e687f885788213', 0, '1', '18896581232', 'iat.net.cn@gmail.com', '::1', '2014-02-21 20:09:01', '2011-07-16 17:33:43', 'U', 691),
(65, 'guest', '游客', 'e10adc3949ba59abbe56e057f20f883e', 0, '2', NULL, NULL, '127.0.0.1', '2012-12-12 17:23:18', '2012-03-27 13:00:09', 'U', 1),
(70, '1111', '姚善良', 'e10adc3949ba59abbe56e057f20f883e', 27, '10', '18896581232', 'yaoshanliang@foxmail', '::1', '2014-02-21 19:38:57', '2014-02-16 14:17:44', 'U', 10),
(71, '1112', '姚善良', '6dbfe7a892d450c519e687f885788213', 27, '11', '18896581232', '', '::1', '2014-02-21 20:06:21', '2014-02-16 14:52:01', 'U', 3),
(72, '1113', '姚善良', '6dbfe7a892d450c519e687f885788213', 27, '12', '18896581232', 'yaoshanliang@foxmail', '::1', '2014-02-21 20:08:08', '2014-02-18 12:57:22', 'U', 4),
(73, '1114', '11', '6dbfe7a892d450c519e687f885788213', 0, '13', '18896581232', '1329517386@qq.com', NULL, NULL, '2014-02-18 22:27:58', 'U', 0);

-- --------------------------------------------------------

--
-- 表的结构 `pro_module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `url` varchar(200) NOT NULL,
  `info` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '0' COMMENT '级别(0为链接、1为按钮)',
  `create_time` datetime NOT NULL COMMENT '创建时间',
  `target` varchar(50) NOT NULL DEFAULT 'navTab' COMMENT '弹出方式',
  `width` int(3) NOT NULL COMMENT '宽度',
  `height` int(3) NOT NULL COMMENT '高度',
  `number` int(3) NOT NULL COMMENT '序号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='模块表' AUTO_INCREMENT=273 ;

--
-- 转存表中的数据 `pro_module`
--

INSERT INTO `module` (`id`, `name`, `url`, `info`, `parent`, `level`, `create_time`, `target`, `width`, `height`, `number`) VALUES
(2, '账户管理', '', '', 29, 0, '2011-08-04 10:39:15', 'navTab', 0, 0, 0),
(3, '添加账户', 'Manager/add', '', 2, 0, '2011-08-04 10:41:06', 'dialog', 800, 500, 0),
(4, '修改账户', 'Manager/update', '', 2, 1, '2011-08-04 10:41:03', 'navTab', 0, 0, 0),
(5, '删除账户', 'Manager/delete', '', 2, 1, '2011-08-04 10:42:19', 'navTab', 0, 0, 0),
(6, '角色管理', '', '', 29, 0, '2011-08-04 10:59:23', 'navTab', 0, 0, 0),
(7, '添加角色', 'Role/add', '', 6, 0, '2011-08-04 11:00:53', 'dialog', 800, 550, 0),
(8, '修改角色', 'Role/update', '', 6, 1, '2011-08-04 11:01:18', 'navTab', 0, 0, 0),
(9, '删除角色', 'Role/delete', '', 6, 1, '2011-08-04 11:01:41', 'navTab', 0, 0, 0),
(10, '修改密码', 'Manager/setPwd', '', 134, 0, '2011-08-04 11:02:57', 'dialog', 800, 250, 0),
(11, '科研项目', '', '', 0, 0, '2011-08-04 11:05:48', 'navTab', 0, 0, 0),
(29, '账户管理', '', '', 0, 0, '2011-08-04 11:21:36', 'navTab', 0, 0, 2),
(30, '配置信息', 'system/phpinfo', '', 134, 0, '2011-08-04 11:22:38', '_blank', 0, 0, 0),
(31, '菜单管理', '', '', 29, 0, '2011-08-04 11:23:22', 'navTab', 0, 0, 0),
(32, '添加菜单', 'Module/add', '', 31, 0, '2011-08-04 11:23:44', 'navTab', 0, 0, 0),
(33, '修改菜单', 'Module/update', '', 31, 1, '2011-08-04 11:24:10', 'navTab', 0, 0, 0),
(34, '删除菜单', 'Module/delete', '', 31, 1, '2011-08-04 11:24:27', 'navTab', 0, 0, 0),
(35, '查找带回', 'Module/lookup', '', 31, 1, '2011-08-04 11:28:27', 'navTab', 0, 0, 0),
(36, '查询账户', 'Manager/index', '', 2, 0, '2011-08-04 12:06:30', 'navTab', 0, 0, 0),
(37, '查询角色', 'Role/index', '', 6, 0, '2011-08-04 12:33:06', 'navTab', 0, 0, 0),
(42, '查询菜单', 'Module/index', '', 31, 0, '2011-08-04 12:39:23', 'navTab', 0, 0, 0),
(44, '导出账号', 'Manager/export', '', 2, 0, '2011-08-04 13:01:22', '_self', 0, 0, 0),
(108, '缓存更新', 'System/index', '', 134, 0, '2011-08-22 21:46:50', 'navTab', 0, 0, 0),
(109, '更新表映射', 'System/updateTableMappend', '表映射', 108, 1, '2011-08-22 21:47:39', 'navTab', 0, 0, 0),
(134, '系统管理', '', '', 29, 0, '2011-12-08 16:59:56', 'navTab', 0, 0, 0),
(136, '系统日志', '', '', 0, 0, '2011-12-16 14:28:34', 'navTab', 0, 0, 3),
(135, '版本信息', 'System/about', '', 134, 0, '2011-12-16 10:14:32', 'dialog', 800, 300, 0),
(137, '访问日志', '', '', 136, 0, '2011-12-16 14:29:20', 'navTab', 0, 0, 0),
(138, '查询日志', 'AccessLog/index', '', 137, 0, '2011-12-16 14:30:26', 'navTab', 0, 0, 0),
(139, '系统日志', '', '', 136, 0, '2011-12-16 14:32:27', 'navTab', 0, 0, 0),
(140, '查询日志', 'DebugLog/index', '', 139, 0, '2011-12-16 14:32:47', 'navTab', 0, 0, 0),
(142, '导入日志', 'AccessLog/import', '', 137, 0, '2011-12-19 14:01:14', 'ajaxTodo', 0, 0, 0),
(143, '导入日志', 'DebugLog/import', '', 139, 0, '2011-12-19 14:01:36', 'ajaxTodo', 0, 0, 0),
(144, '日志报告', 'AccessLog/report', '', 137, 0, '2011-12-19 15:06:34', 'navTab', 0, 0, 0),
(145, '日志报告', 'DebugLog/report', '', 139, 0, '2011-12-19 15:07:00', 'navTab', 0, 0, 0),
(265, '添加科研基金项目', 'KYJJ/add', '', 259, 1, '2014-02-16 11:40:50', 'dialog', 800, 500, 0),
(260, '第十六批', 'KYJJ/sixteenth', '', 259, 0, '2014-02-16 10:56:42', 'navTab', 0, 0, 1),
(258, '文档管理', '', '', 0, 0, '2014-02-16 10:29:06', 'navTab', 0, 0, 1),
(259, '大学生课外学术科研基金项目', '', '', 11, 0, '2014-02-16 10:30:15', 'navTab', 0, 0, 0),
(266, '修改科研基金项目', 'KYJJ/update', '', 259, 1, '2014-02-16 11:41:52', 'dialog', 800, 500, 1),
(272, '模版下载按钮', 'Template/download', '', 264, 1, '2014-02-21 19:35:22', 'ajaxTodo', 0, 0, 0),
(271, '通知发文', 'KYJJ/notice', '', 259, 0, '2014-02-21 09:10:04', 'navTab', 0, 0, 0),
(270, '项目时间设置', 'System/project_time_set', '', 134, 0, '2014-02-17 19:00:12', 'navTab', 0, 0, 0),
(269, 'KYJJ里导出EXCEL', 'KYJJ/export', '', 259, 1, '2014-02-16 11:47:55', 'ajaxTodo', 0, 0, 0),
(268, 'KYJJ里查看附件', 'KYJJ/attachment', '', 259, 1, '2014-02-16 11:46:01', 'navTab', 0, 0, 0),
(267, '删除科研基金项目', 'KYJJ/delete', '', 259, 1, '2014-02-16 11:43:01', 'ajaxTodo', 0, 0, 0),
(181, '数据备份', 'Database/index', '', 197, 0, '2012-03-20 15:00:50', 'navTab', 0, 0, 0),
(182, '数据还原', 'Database/done', '', 197, 0, '2012-03-23 10:14:15', 'navTab', 0, 0, 0),
(183, '参数设置', 'System/param', '', 197, 0, '2012-03-26 14:05:41', 'navTab', 0, 0, 0),
(190, '文件管理', 'File/index', '', 223, 0, '2012-03-30 14:50:17', 'navTab', 0, 0, 0),
(191, '文件改名', 'File/rename', '', 189, 1, '2012-03-30 14:50:50', 'navTab', 0, 0, 0),
(192, '文件删除', 'File/delete', '', 189, 1, '2012-03-30 14:51:16', 'navTab', 0, 0, 0),
(193, '文件编辑', 'File/edit', '', 189, 1, '2012-03-30 14:51:43', 'navTab', 0, 0, 0),
(194, '文件移动', 'File/move', '', 189, 1, '2012-03-30 14:52:02', 'navTab', 0, 0, 0),
(195, '新建文件/目录', 'File/create', '', 189, 1, '2012-03-30 14:52:39', 'navTab', 0, 0, 0),
(196, '空间检查', 'File/space', '', 189, 1, '2012-03-30 14:53:25', 'navTab', 0, 0, 0),
(197, '系统设置', '', '', 29, 0, '2012-03-30 14:55:18', 'navTab', 0, 0, 0),
(198, '文件上传', 'File/upload', '', 189, 1, '2012-03-30 21:34:20', 'navTab', 0, 0, 0),
(200, '水印设置', 'System/mark', '', 197, 0, '2012-04-03 22:56:01', 'navTab', 0, 0, 0),
(261, '第十五批', 'KYJJ/fifteenth', '', 259, 0, '2014-02-16 10:57:49', 'navTab', 0, 0, 2),
(262, '浏览附件', 'Attachment/index', '', 258, 0, '2014-02-16 10:58:35', 'navTab', 0, 0, 0),
(263, '上传附件', 'Attachment/upload', '', 258, 0, '2014-02-16 11:36:27', 'dialog', 800, 500, 1),
(264, '模版下载', 'Template/index', '', 258, 0, '2014-02-16 11:37:04', 'navTab', 0, 0, 2),
(223, '实用工具', '', '', 29, 0, '2012-05-23 11:11:55', 'navTab', 0, 0, 0),
(224, 'Mysql管理', 'Tool/mysql', '', 223, 0, '2012-05-23 15:20:00', 'navTab', 0, 0, 0),
(225, '端口扫描', 'Tool/portscan', '', 223, 0, '2012-05-23 15:21:08', 'navTab', 0, 0, 0),
(226, '安全信息', 'Tool/secinfo', '', 223, 0, '2012-05-23 15:21:37', 'navTab', 0, 0, 0),
(227, 'PHP环境', 'Tool/phpenv', '', 223, 0, '2012-05-23 15:22:53', 'navTab', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `pro_role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(3) NOT NULL AUTO_INCREMENT COMMENT '角色id',
  `role_ID` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT '名称',
  `module_ids` varchar(500) DEFAULT NULL COMMENT '授权的模块ID,英文逗号分隔',
  `create_time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='角色表' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `pro_role`
--

INSERT INTO `role` (`id`, `role_ID`, `name`, `module_ids`, `create_time`) VALUES
(2, 'guest', '游客', '11,12,13,14,15,38', '2011-07-20 15:04:36'),
(1, 'super_admin', '超级管理员', '', '2011-07-20 17:04:08'),
(10, 'host_student', '项目主持人', '10,260,261,262,263,264,265,266,267,268,269,271,272', '2014-02-16 12:14:20'),
(11, 'college_manager', '学院管理员', '10,37,258,259,260,261,262,263,264,265,266,267,268,269,271,272', '2014-02-16 12:14:51'),
(12, 'counselor', '辅导员', '10,37,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272', '2014-02-16 12:15:25'),
(13, 'school_manager', '学校管理员', '10,37,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272', '2014-02-16 12:15:44');

-- --------------------------------------------------------

--
-- 表的结构 `pro_sys_config`
--

CREATE TABLE IF NOT EXISTS `sys_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `varname` varchar(40) NOT NULL,
  `info` varchar(100) NOT NULL,
  `groupid` smallint(6) NOT NULL,
  `type` varchar(20) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `varname` (`varname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='系统参数配置表' AUTO_INCREMENT=693 ;

--
-- 转存表中的数据 `pro_sys_config`
--

INSERT INTO `sys_config` (`id`, `varname`, `info`, `groupid`, `type`, `value`) VALUES
(2, 'cfg_basehost', '站点根网址', 1, 'string', 'http://iat.net.cn'),
(3, 'cfg_indexurl', '网页主页链接', 1, 'string', ''),
(4, 'cfg_indexname', '主页链接名', 1, 'string', '学生科研项目管理平台'),
(5, 'cfg_webname', '网站名称', 1, 'string', '学生科研项目管理平台'),
(6, 'cfg_powerby', '网站版权信息', 1, 'bstring', 'Copyright © 2014 Powered by <a href="http://iat.net.cn" target="_blank">iat</a>. All Rights Reserved'),
(7, 'cfg_keywords', '站点默认关键字', 1, 'string', '科研项目管理平台'),
(8, 'cfg_description', '站点描述', 1, 'bstring', '计算机科学与技术学院科研项目管理平台'),
(687, 'KYJJ_begin_add_time', '大学生课外学术科研基金项目开始报名时间', 8, 'string', '2014-02-20'),
(688, 'KYJJ_end_add_time', '大学生课外学术科研基金项目结束报名时间', 8, 'string', '2014-03-07'),
(689, 'KYJJ_begin_middle_check_time', '大学生课外学术科研基金项目开始中期检查时间', 8, 'string', '2014-05-01'),
(9, 'cfg_beian', '网站备案号', 1, 'string', ''),
(10, 'cfg_cmspath', 'EaglePHP CMS安装目录', 2, 'string', '/EaglePHP'),
(11, 'cfg_cookie_encode', 'cookie加密码', 2, 'string', 'dfergfddf454seddd'),
(12, 'cfg_backup_dir', '数据备份目录（在data目录内）', 2, 'string', 'Backup'),
(13, 'cfg_adminemail', '网站发信EMAIL', 2, 'string', 'iat.net.cn@gmail.com'),
(14, 'cfg_domain_cookie', '跨域共享cookie的域名(例如: .eaglephp.com)', 2, 'string', '/'),
(15, 'cfg_eag_log', '(是/否)开启管理日志', 2, 'bool', '0'),
(16, 'cfg_ftp_host', 'FTP主机', 2, 'string', 'localhost'),
(17, 'cfg_ftp_port', 'FTP端口', 2, 'string', '21'),
(18, 'cfg_ftp_user', 'FTP用户名', 2, 'string', 'maojian'),
(19, 'cfg_ftp_pwd', 'FTP密码', 2, 'string', '123456'),
(20, 'cfg_ftp_root', '网站根在FTP中的目录', 2, 'string', '/'),
(21, 'cfg_ftp_mkdir', '是否强制用FTP创建目录', 2, 'string', '1'),
(22, 'cfg_sendmail_bysmtp', '是否启用smtp方式发送邮件', 2, 'bool', '1'),
(23, 'cfg_smtp_server', 'smtp服务器', 2, 'string', 'smtp.163.com'),
(24, 'cfg_smtp_port', 'smtp服务器端口', 2, 'string', '25'),
(25, 'cfg_smtp_usermail', 'SMTP服务器的用户邮箱', 2, 'string', 'iatboy@163.com'),
(26, 'cfg_smtp_user', 'SMTP服务器的用户帐号', 2, 'string', 'iatboy@163.com'),
(27, 'cfg_smtp_password', 'SMTP服务器的用户密码', 2, 'string', 'ysl88842412'),
(28, 'cfg_admin_sysname', '管理后台名称', 1, 'string', '学生科研项目管理平台'),
(29, 'cfg_admin_sysdesc', '管理后台描述', 1, 'bstring', '“科研项目管理平台”是为方便管理科研项目而开发的平台，在同一平台的基础上，项目主持人、辅导员、学院管理员以及学校管理员可以方便的查看、统计、管理科研项目。'),
(685, 'cfg_project_dir', '科研项目附件目录', 3, 'string', 'project/'),
(686, 'cfg_template_dir', '模版目录', 3, 'string', 'template/'),
(30, 'cfg_sys_version', '系统版本', 1, 'string', 'v 1.0'),
(51, 'cfg_upload_switch', '删除文章时同时删除图片', 5, 'bool', '1'),
(31, 'cfg_access_log', '(是/否)开启访问日志', 2, 'bool', '0'),
(32, 'cfg_system_log', '(是/否)开启系统日志', 2, 'bool', '1'),
(33, 'cfg_debug_mode', '(是/否)开启调试模式', 2, 'bool', '1'),
(34, 'cfg_mysql_type', '数据库类型（支持mysql、mysqli、pdo）', 2, 'string', 'mysql'),
(35, 'cfg_orm_dir', '字段映射目录（在data目录内）', 2, 'string', 'Field'),
(36, 'cfg_session_dir', '会话存储目录（在data目录内）', 2, 'string', 'Session'),
(37, 'cfg_img_width', '缩略图默认宽度', 3, 'string', '300'),
(38, 'cfg_img_height', '缩略图默认高度', 3, 'string', '300'),
(39, 'cfg_original_imgdir', '原始图片目录（在upload目录内）', 3, 'string', 'photo/original/'),
(40, 'cfg_middle_imgdir', '中型图片目录（在upload目录内）', 3, 'string', 'photo/middle/'),
(41, 'cfg_thumbnail_imgdir', '缩略图目录（在upload目录内）', 3, 'string', 'photo/thumbnail/'),
(42, 'cfg_memcache_host', 'Memcache服务器', 4, 'string', '127.0.0.1'),
(43, 'cfg_memcache_port', 'Memcache服务器端口', 4, 'string', '11211'),
(44, 'cfg_auot_description', '自动摘要长度（0-250，0表示不启用）', 5, 'string', '100'),
(45, 'cfg_rm_remote', '远程图片本地化', 5, 'bool', '0'),
(46, 'cfg_arc_dellink', '删除非站内链接', 5, 'bool', '1'),
(47, 'cfg_arc_autopic', '提取第一张图片作为缩略图', 5, 'bool', '0'),
(48, 'cfg_arc_autokeyword', '自动提取关键字', 5, 'bool', '1'),
(49, 'cfg_title_maxlen', '文档标题最大长度', 5, 'string', '60'),
(50, 'cfg_check_title', '发布文档时是否检测重复标题', 5, 'bool', '1'),
(52, 'cfg_html_dir', '生成静态html文件目录（在Pub目录内）', 5, 'string', '/a'),
(53, 'cfg_html_make', '文章是否生成静态页面', 5, 'bool', '0'),
(54, 'cfg_adv_dir', '广告图片目录', 3, 'string', 'adv/'),
(55, 'cfg_filter_word', '禁用词语（系统将直接停止用户动作）\n用|分开，但不要在结尾加|', 6, 'bstring', '非典|艾滋病|阳痿|她妈|它妈|他妈|你妈|去死|贱人'),
(56, 'cfg_cache_dir', '数据缓存目录（在data目录内）', 2, 'string', 'File'),
(57, 'cfg_cache_type', '数据缓存类型', 2, 'string', 'File'),
(58, 'cfg_cache_time', '数据缓存时间（秒）', 2, 'string', '0'),
(59, 'cfg_login_email', '后台登录发送邮件', 2, 'bool', '0'),
(60, 'cfg_debug_email', '系统报错发送邮件', 2, 'bool', '0'),
(61, 'cfg_case_dir', '案例图片目录', 3, 'string', 'case/'),
(62, 'cfg_video_dir', '视频截图目录', 3, 'string', 'video/'),
(67, 'cfg_taobao_pid', '淘宝客PID', 7, 'string', '32251410'),
(66, 'cfg_taobao_callback', '淘宝App Callback', 7, 'string', ''),
(65, 'cfg_taobao_secret', '淘宝App Secret', 7, 'string', '6885676831c4b9837090c03b26c85819'),
(64, 'cfg_taobao_appkey', '淘宝APP Key', 7, 'string', '21072832'),
(63, 'cfg_taobao_isopen', '(是/否)开启淘宝接口', 7, 'bool', '0'),
(672, 'cfg_refresh_time', '页面防刷时间', 2, 'number', '0'),
(673, 'cfg_redis_host', 'Redis服务器', 4, 'string', '127.0.0.1'),
(674, 'cfg_redis_port', 'Redis服务器端口', 4, 'string', '6379'),
(675, 'cfg_ping_sites', 'SEO PING URL', 5, 'bstring', 'http://ping.baidu.com/ping/RPC2\r\nhttp://blogsearch.google.com/ping/RPC2\r\nhttp://blog.youdao.com/ping/RPC2\r\nhttp://rpc.pingomatic.com/\r\nhttp://www.feedsky.com/api/RPC2\r\nhttp://xianguo.com/xmlrpc/ping.php\r\nhttp://www.bloglines.com/ping'),
(676, 'cfg_open_rewrite', '开启伪静态', 5, 'bool', '0'),
(677, 'cfg_links_dir', '友情链接图片目录', 3, 'string', 'links/'),
(678, 'cfg_open_weather', '开启后台天气预报', 5, 'bool', '0'),
(680, 'cfg_open_cache', '(是否)开启缓存模式', 2, 'bool', '1'),
(681, 'qq_appid', 'QQ appid', 7, 'string', '100369006'),
(682, 'qq_appkey', 'QQ appkey', 7, 'string', 'e31f9797dd40c1e2259ef1cc317f19c9'),
(683, 'sina_client_id', 'Sina client_id', 7, 'string', '2822752406'),
(684, 'sina_client_secret', 'Sina client_secret', 7, 'string', '4873666fd3c395a6194f445977528c7b'),
(690, 'KYJJ_end_middle_check_time', '大学生课外学术科研基金项目结束中期检查时间', 8, 'string', '2014-05-15'),
(691, 'KYJJ_begin_final_check_time', '大学生课外学术科研基金项目开始结题评审时间', 8, 'string', '2014-10-01'),
(692, 'KYJJ_end_final_check_time', '大学生课外学术科研基金项目结束结题评审时间', 8, 'string', '2014-10-08');

-- --------------------------------------------------------

--
-- 表的结构 `pro_template`
--

CREATE TABLE IF NOT EXISTS `template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `program` varchar(50) CHARACTER SET utf8 NOT NULL,
  `uid` int(11) NOT NULL,
  `num` int(11) DEFAULT '0',
  `address` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `pro_template`
--

INSERT INTO `template` (`id`, `name`, `description`, `program`, `uid`, `num`, `address`) VALUES
(2, '十八大知识竞赛.doc', '签出v奋斗', '大学生课外学术科研基金项目', 1, 2, 'template/5300d96683ee7.doc'),
(4, '十八大知识竞赛.doc', 'V大飞v', '大学生课外学术科研基金项目', 1, 1, 'template/5300d9c2dc623.doc'),
(5, '十八大知识竞赛.doc', '宣传', '大学生课外学术科研基金项目', 1, 2, 'template/5300d9d862444.doc'),
(7, '十八大知识竞赛.doc', '报名', '大学生课外学术科研基金项目', 1, 5, 'template/5307366a0c4b7.doc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
