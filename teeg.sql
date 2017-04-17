-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 04 月 17 日 06:10
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `teeg`
--

-- --------------------------------------------------------

--
-- 表的结构 `areasofexpertise`
--

CREATE TABLE IF NOT EXISTS `areasofexpertise` (
  `expertiseId` int(20) NOT NULL AUTO_INCREMENT,
  `userId` int(20) NOT NULL,
  `courseId` int(20) NOT NULL,
  PRIMARY KEY (`expertiseId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `areasofinterest`
--

CREATE TABLE IF NOT EXISTS `areasofinterest` (
  `interestId` int(20) NOT NULL AUTO_INCREMENT,
  `userId` int(20) NOT NULL,
  `courseId` int(20) NOT NULL,
  PRIMARY KEY (`interestId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `contentId` int(20) NOT NULL AUTO_INCREMENT,
  `userId` int(20) NOT NULL,
  `courseId` int(20) NOT NULL,
  `name` text NOT NULL,
  `fileType` text NOT NULL,
  `contentRef` text NOT NULL,
  `uploadTime` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`contentId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `courseId` int(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `uniID` int(20) NOT NULL,
  PRIMARY KEY (`courseId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `uniId` int(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `country` text NOT NULL,
  PRIMARY KEY (`uniId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `accessLevel` int(11) NOT NULL,
  `password` text NOT NULL,
  `uniId` int(20) NOT NULL,
  `courseId` int(20) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userId`, `name`, `accessLevel`, `password`, `uniId`, `courseId`, `email`) VALUES
(1, '', 0, '698d51a19d8a121ce581499d7b701668', 0, 0, '123@qq.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
