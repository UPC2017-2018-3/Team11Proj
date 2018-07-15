-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 07 月 15 日 00:15
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `yinyongshui`
--

-- --------------------------------------------------------

--
-- 表的结构 `allusers`
--

CREATE TABLE IF NOT EXISTS `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `cx` varchar(50) DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `allusers`
--

INSERT INTO `allusers` (`id`, `username`, `pwd`, `cx`, `addtime`) VALUES
(1, 'ass', 'ass', '系统管理员', '2018-07-08 05:27:46'),
(2, 'zcl', 'zcl', '营业录入员', '2018-07-14 10:36:40'),
(3, 'zxqp', 'zxqp', '营业受理员', '2018-07-14 10:36:58'),
(4, 'cc', 'cc', '配送管理员', '2018-07-14 10:37:10');

-- --------------------------------------------------------

--
-- 表的结构 `caiwuzhanghu`
--

CREATE TABLE IF NOT EXISTS `caiwuzhanghu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghubianhao` varchar(50) DEFAULT NULL,
  `zhanghumingcheng` varchar(300) DEFAULT NULL,
  `zhanghuleixing` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `caiwuzhanghu`
--

INSERT INTO `caiwuzhanghu` (`id`, `zhanghubianhao`, `zhanghumingcheng`, `zhanghuleixing`, `addtime`) VALUES
(2, '001', 'zhifubao ', 'A类', '2018-07-08 05:27:46'),
(3, '002', 'weixin ', 'B类', '2018-07-08 05:27:46');

-- --------------------------------------------------------

--
-- 表的结构 `cangkuxinxi`
--

CREATE TABLE IF NOT EXISTS `cangkuxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cangkubianhao` varchar(50) DEFAULT NULL,
  `cangkumingcheng` varchar(50) DEFAULT NULL,
  `cangkumianji` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `cangkuxinxi`
--

INSERT INTO `cangkuxinxi` (`id`, `cangkubianhao`, `cangkumingcheng`, `cangkumianji`, `beizhu`, `addtime`) VALUES
(1, '001', 'A仓', '200', '桶装水仓库', '2018-07-08 05:27:46'),
(2, '002', 'B仓', '100', '饮水机仓库', '2018-07-08 05:27:46'),
(3, '003', 'C仓', '30', '限电插排仓库', '2018-07-08 05:27:46');

-- --------------------------------------------------------

--
-- 表的结构 `jinhuodan`
--

CREATE TABLE IF NOT EXISTS `jinhuodan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `danjubianhao` varchar(50) DEFAULT NULL,
  `goumaidanwei` varchar(50) DEFAULT NULL,
  `zhidanren` varchar(50) DEFAULT NULL,
  `jingshouren` varchar(50) DEFAULT NULL,
  `cunhuocangku` varchar(50) DEFAULT NULL,
  `shangpinbianhao` varchar(50) DEFAULT NULL,
  `shangpinmingcheng` varchar(50) DEFAULT NULL,
  `guige` varchar(50) DEFAULT NULL,
  `shengchanriqi` varchar(50) DEFAULT NULL,
  `danjia` varchar(50) DEFAULT NULL,
  `shuliang` varchar(50) DEFAULT NULL,
  `jine` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `fukuanzhanghu` varchar(50) DEFAULT NULL,
  `fukuanjine` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(2) DEFAULT '否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `kehuxinxi`
--

CREATE TABLE IF NOT EXISTS `kehuxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kehubianhao` varchar(50) DEFAULT NULL,
  `kehumingcheng` varchar(300) DEFAULT NULL,
  `kehulianxifangshi` varchar(50) DEFAULT NULL,
  `kehudizhi` varchar(300) DEFAULT NULL,
  `gonghuoleixing` varchar(50) DEFAULT NULL,
  `yinxingkaihuzhanghao` varchar(300) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `kehuxinxi`
--

INSERT INTO `kehuxinxi` (`id`, `kehubianhao`, `kehumingcheng`, `kehulianxifangshi`, `kehudizhi`, `gonghuoleixing`, `yinxingkaihuzhanghao`, `beizhu`, `addtime`) VALUES
(1, '001', '皮卡丘', '10101010', '中国石油大学（华东）', NULL, NULL, NULL, '2018-07-14 11:17:08'),
(2, '002', '小鲤鱼', '01001010', '中国石油大学（华东）', NULL, NULL, NULL, '2018-07-14 11:19:53'),
(3, '003', '哆啦A梦', '20202022', '中国石油大学（华东）', NULL, NULL, NULL, '2018-07-14 11:21:10');

-- --------------------------------------------------------

--
-- 表的结构 `shangpinxinxi`
--

CREATE TABLE IF NOT EXISTS `shangpinxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shangpinbianhao` varchar(50) DEFAULT NULL,
  `shangpinmingcheng` varchar(300) DEFAULT NULL,
  `guige` varchar(300) DEFAULT NULL,
  `chandi` varchar(50) DEFAULT NULL,
  `baozhiqi` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kucun` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `shangpinxinxi`
--

INSERT INTO `shangpinxinxi` (`id`, `shangpinbianhao`, `shangpinmingcheng`, `guige`, `chandi`, `baozhiqi`, `beizhu`, `addtime`, `kucun`) VALUES
(5, '001', '桶装水', '8L', '北京', '7天', '优质水源，质量保证', '2018-07-14 10:38:17', 1),
(6, '002', '饮水机', '300*350*450（mm）', '上海', '3年', '购买80桶水免费赠送饮水机', '2018-07-14 10:39:58', 1),
(7, '003', '限电插排', '16孔', '美国', '3年', '适合在校大学生于宿舍使用', '2018-07-14 10:40:49', 1);

-- --------------------------------------------------------

--
-- 表的结构 `shouhoujilu`
--

CREATE TABLE IF NOT EXISTS `shouhoujilu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `danjubianhao` varchar(50) DEFAULT NULL,
  `shangpinmingcheng` varchar(50) DEFAULT NULL,
  `kehuxingming` varchar(50) DEFAULT NULL,
  `kehudianhua` varchar(50) DEFAULT NULL,
  `shouhouyaoqiu` varchar(500) DEFAULT NULL,
  `fuwuneirong` varchar(500) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(255) DEFAULT '否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `shouhoujilu`
--

INSERT INTO `shouhoujilu` (`id`, `danjubianhao`, `shangpinmingcheng`, `kehuxingming`, `kehudianhua`, `shouhouyaoqiu`, `fuwuneirong`, `beizhu`, `addtime`, `issh`) VALUES
(4, '002', '限电插排', '皮卡丘', '10101010', '维修，电坏了', '维修/更换', '两天之内维修完成并回复客户\r\n', '2018-07-14 10:56:01', '否'),
(5, '003', '饮水机', '海绵宝宝', '01010101', '更换', '更换', '急用，当天完成', '2018-07-14 10:57:59', '是');

-- --------------------------------------------------------

--
-- 表的结构 `xiaoshoudan`
--

CREATE TABLE IF NOT EXISTS `xiaoshoudan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `danjubianhao` varchar(50) DEFAULT NULL,
  `goumaidanwei` varchar(50) DEFAULT NULL,
  `zhidanren` varchar(50) DEFAULT NULL,
  `jingshouren` varchar(50) DEFAULT NULL,
  `fahuocangku` varchar(50) DEFAULT NULL,
  `shangpinbianhao` varchar(50) DEFAULT NULL,
  `shangpinmingcheng` varchar(50) DEFAULT NULL,
  `guige` varchar(50) DEFAULT NULL,
  `shengchanriqi` varchar(50) DEFAULT NULL,
  `danjia` varchar(50) DEFAULT NULL,
  `shuliang` varchar(50) DEFAULT NULL,
  `jine` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `fukuanzhanghu` varchar(50) DEFAULT NULL,
  `fukuanjine` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(2) DEFAULT '否',
  `zt` varchar(50) DEFAULT '待发货',
  `shengshi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `xiaoshoudan`
--

INSERT INTO `xiaoshoudan` (`id`, `danjubianhao`, `goumaidanwei`, `zhidanren`, `jingshouren`, `fahuocangku`, `shangpinbianhao`, `shangpinmingcheng`, `guige`, `shengchanriqi`, `danjia`, `shuliang`, `jine`, `beizhu`, `fukuanzhanghu`, `fukuanjine`, `addtime`, `issh`, `zt`, `shengshi`) VALUES
(7, '001', '小鲤鱼', 'ass', 'zcl', 'A仓', '001', '桶装水', '8L', '2018-07-10', '10', '1', '10', '当晚送达', '001', '10', '2018-07-14 10:47:16', '否', '待发货', ''),
(8, '002', '皮卡丘', 'ass', 'zcl', 'C仓', '003', '限电插排', '16孔', '2018-05-10', '25', '1', '25', '两天之内送达', '001', '25', '2018-07-14 10:51:14', '否', '待发货', ''),
(9, '003', '哆啦A梦', 'ass', 'zcl', 'B仓', '002', '饮水机', '300*350*450（mm）', '2018-05-10', '60', '1', '60', '需要专业人员安装', '001', '60', '2018-07-14 10:52:31', '否', '配送中', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
