-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 12:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datalive`
--

-- --------------------------------------------------------

--
-- Table structure for table `webbrif`
--

CREATE TABLE `webbrif` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `organizatio` varchar(250) NOT NULL,
  `websitename` varchar(250) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dicisionmaker` varchar(250) NOT NULL,
  `commentsarea` text NOT NULL,
  `productionser` text NOT NULL,
  `usp` text NOT NULL,
  `visionobjectives` text NOT NULL,
  `newweb` varchar(15) NOT NULL,
  `footballincrease` varchar(15) NOT NULL,
  `increaseonlinesell` varchar(15) NOT NULL,
  `sellproductiononline` varchar(15) NOT NULL,
  `productiveservice` varchar(15) NOT NULL,
  `collectioninfo` varchar(15) NOT NULL,
  `increasemimbership` varchar(15) NOT NULL,
  `showportfolio` varchar(15) NOT NULL,
  `increasevisitor` varchar(15) NOT NULL,
  `other` varchar(15) NOT NULL,
  `companyname1` varchar(150) NOT NULL,
  `comments1` text NOT NULL,
  `companyname2` varchar(150) NOT NULL,
  `comments2` text NOT NULL,
  `companyname3` varchar(150) NOT NULL,
  `comments3` text NOT NULL,
  `productcompetition` text NOT NULL,
  `permissiontotrade` text NOT NULL,
  `imagewebsite` varchar(15) NOT NULL,
  `websitecontant` varchar(15) NOT NULL,
  `FurtherInfo` text NOT NULL,
  `Functionalities` text NOT NULL,
  `otherfunctionalitiesordesigin` varchar(15) NOT NULL,
  `alreadydoman` varchar(150) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `loginip` varchar(100) NOT NULL,
  `otherinfor` text NOT NULL,
  `mainpage` varchar(100) NOT NULL,
  `Subpage` varchar(100) NOT NULL,
  `homepage` varchar(100) NOT NULL,
  `formpage` varchar(100) NOT NULL,
  `aboutus` varchar(100) NOT NULL,
  `aboutus1` varchar(100) NOT NULL,
  `contactus` varchar(100) NOT NULL,
  `contactus1` varchar(100) NOT NULL,
  `revies` varchar(250) NOT NULL,
  `revoes1` varchar(250) NOT NULL,
  `howmanyproduct` varchar(250) NOT NULL,
  `clientbuyerproduct` varchar(250) NOT NULL,
  `usingpaypal` varchar(100) NOT NULL,
  `shoporshopies` varchar(250) NOT NULL,
  `storecontrol` varchar(250) NOT NULL,
  `accountpackages` varchar(250) NOT NULL,
  `foreigncurrency` varchar(250) NOT NULL,
  `websitetheme` text NOT NULL,
  `websitetheme1` text NOT NULL,
  `websitetheme2` text NOT NULL,
  `colorscheme` text NOT NULL,
  `colorscheme1` text NOT NULL,
  `colorscheme2` text NOT NULL,
  `fontsize` varchar(50) NOT NULL,
  `fontsize1` varchar(50) NOT NULL,
  `fontsize2` varchar(50) NOT NULL,
  `approachable` text NOT NULL,
  `mantanance` varchar(250) NOT NULL,
  `leavecomments` text NOT NULL,
  `cms1` text NOT NULL,
  `anyanimation` varchar(250) NOT NULL,
  `facebook` varchar(15) NOT NULL,
  `twitter` varchar(15) NOT NULL,
  `instagram` varchar(15) NOT NULL,
  `pintrest` varchar(15) NOT NULL,
  `linkedin` varchar(15) NOT NULL,
  `othersocialmedia` varchar(15) NOT NULL,
  `othercommentsnow` text NOT NULL,
  `link1` text NOT NULL,
  `link2` text NOT NULL,
  `link3` text NOT NULL,
  `link4` text NOT NULL,
  `link5` text NOT NULL,
  `link6` text NOT NULL,
  `link7` text NOT NULL,
  `link8` text NOT NULL,
  `link9` text NOT NULL,
  `mediamanagement` varchar(250) NOT NULL,
  `anyothercomments` varchar(250) NOT NULL,
  `anyothercomments1` varchar(250) NOT NULL,
  `anyothercomments2` varchar(250) NOT NULL,
  `anyothercomments3` varchar(250) NOT NULL,
  `anyothercomments4` varchar(250) NOT NULL,
  `complatedetails` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webbrif`
--

INSERT INTO `webbrif` (`id`, `name`, `organizatio`, `websitename`, `phonenumber`, `email`, `dicisionmaker`, `commentsarea`, `productionser`, `usp`, `visionobjectives`, `newweb`, `footballincrease`, `increaseonlinesell`, `sellproductiononline`, `productiveservice`, `collectioninfo`, `increasemimbership`, `showportfolio`, `increasevisitor`, `other`, `companyname1`, `comments1`, `companyname2`, `comments2`, `companyname3`, `comments3`, `productcompetition`, `permissiontotrade`, `imagewebsite`, `websitecontant`, `FurtherInfo`, `Functionalities`, `otherfunctionalitiesordesigin`, `alreadydoman`, `firstname`, `loginip`, `otherinfor`, `mainpage`, `Subpage`, `homepage`, `formpage`, `aboutus`, `aboutus1`, `contactus`, `contactus1`, `revies`, `revoes1`, `howmanyproduct`, `clientbuyerproduct`, `usingpaypal`, `shoporshopies`, `storecontrol`, `accountpackages`, `foreigncurrency`, `websitetheme`, `websitetheme1`, `websitetheme2`, `colorscheme`, `colorscheme1`, `colorscheme2`, `fontsize`, `fontsize1`, `fontsize2`, `approachable`, `mantanance`, `leavecomments`, `cms1`, `anyanimation`, `facebook`, `twitter`, `instagram`, `pintrest`, `linkedin`, `othersocialmedia`, `othercommentsnow`, `link1`, `link2`, `link3`, `link4`, `link5`, `link6`, `link7`, `link8`, `link9`, `mediamanagement`, `anyothercomments`, `anyothercomments1`, `anyothercomments2`, `anyothercomments3`, `anyothercomments4`, `complatedetails`) VALUES
(25, 'Rasheed Ur Rehman', 'Internative', 'Internative.com', '546546', 'rasheedurrehman71@gmail.com', 'fghghfdh', 'SAFDJH', 'JUIOU8U', 'JKHUIY', 'IUIOUIO', 'New Webiste', 'yes', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'etc@internativelabs.com', 'ERTREWHY', 'etc@internativelabs.com', 'RTY', 'etc@internativelabs.com', 'GFDG', 'TYIYUI', 'TYUTRH', 'YES', 'YES', 'GFHJGFHJ', 'Blog, Clander, Ecommerce, Cart/Online, Store, Vadio Integration, FAQs, Flash Animation, Font Style Change, Multi Langauge, News Latter, PDF Form, Portfolio, Upload File, Illustration, Download, Price Comperission, Print Friendly, Social Network, SSL Certificate, Online Booking, Page Management, Case Studies, ', 'YES', 'FGHJ', 'FGHJGF', 'FHJ', 'FHJ', 'FHJ', 'FGHJ', 'FHJ', 'FGHJ', 'FGHJ', 'FGHJ', 'FGHJ', 'FGHJ', 'FHJ', 'FHJ', 'FGHJ', 'FGHJ', 'FHJ', 'HJ', 'FHJ', 'TYUJGF', 'JJHFJFGHJ', 'YUHJ', 'GFHJKRK', 'FGHJFHJ', 'TYUFGH', 'DFHGHY', 'VCTRHDHUJ', 'DFHG', 'DFGHSTRHD', 'GTHSH', 'Approachable, High tech, Corporate Modern, Authoritative, Natural Organic, Credible/ Expert, Playful Elegant, Sophisticated, Fresh Helpful, Funcky, Caring, Stylish, Humble, Prestigious, Simple Clean Slik, High tech, ', 'YES', 'DFGH', 'YES', 'DGHH', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'DFGH', 'DGH', 'FDG', 'DFGH', 'SRTDGF', 'DGH', 'DGH', 'DFGHFDG', 'SF', 'DFSGHD', 'YES', 'DSFG', 'FDHGFDG', 'FDSGFG', 'SDFG', 'DFSG', 'JHYSREGY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webbrif`
--
ALTER TABLE `webbrif`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webbrif`
--
ALTER TABLE `webbrif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
