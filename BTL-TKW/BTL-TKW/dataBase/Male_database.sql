SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET
  AUTOCOMMIT = 0;

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_db`
--
-- --------------------------------------------------------
--
-- Table structure for table `image_library`
--
DROP TABLE
  IF EXISTS `image_library`;

CREATE TABLE
  IF NOT EXISTS `image_library` (
    `id` int (11) NOT NULL AUTO_INCREMENT,
    `product_id` int (11) NOT NULL,
    `path` varchar(255) NOT NULL,
    `created_time` int (11) NOT NULL,
    `last_updated` int (11) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `product_id` (`product_id`)
  ) ENGINE = InnoDB AUTO_INCREMENT = 18 DEFAULT CHARSET = utf8;

--
-- Dumping data for table `image_library`
--
INSERT INTO
  `image_library` (
    `id`,
    `product_id`,
    `path`,
    `created_time`,
    `last_updated`
  )
VALUES
  (
    12,
    20,
    'uploads/21-04-2020/nike-air-max-270-x-supreme-red-do-nam-nu_(1).jpg',
    1587486207,
    1587486207
  ),
  (
    13,
    20,
    'uploads/21-04-2020/nike-air-max-270-x-supreme-red-do-nam-nu-1(1).jpg',
    1587486375,
    1587486375
  ),
  (
    14,
    20,
    'uploads/21-04-2020/nike-air-max-270-x-supreme-red-do-nam-nu-2(1).jpg',
    1587486375,
    1587486375
  ),
  (
    15,
    20,
    'uploads/21-04-2020/nike-air-max-270-x-supreme-red-do-nam-nu-4(1).jpg',
    1587486375,
    1587486375
  ),
  (
    16,
    20,
    'uploads/21-04-2020/nike-air-max-270-x-supreme-red-do-nam-nu-5(1).jpg',
    1587486375,
    1587486375
  ),
  (
    17,
    20,
    'uploads/21-04-2020/nike-air-max-270-x-supreme-red-do-nam-nu-3(1).jpg',
    1587486397,
    1587486397
  );

-- --------------------------------------------------------
-- Table structure for table `product`
--
DROP TABLE
  IF EXISTS `product`;

CREATE TABLE
  IF NOT EXISTS `product` (
    `id` int (11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `image` varchar(255) DEFAULT NULL,
    `price` float NOT NULL,
    `content` text NOT NULL,
    `created_time` int (11) NOT NULL,
    `last_updated` int (11) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE = InnoDB AUTO_INCREMENT = 21 DEFAULT CHARSET = utf8;

--
-- Dumping data for table `product`
--
INSERT INTO
  `product` (
    `id`,
    `name`,
    `image`,
    `price`,
    `content`,
    `created_time`,
    `last_updated`
  )
VALUES
  (
    2,
    'Male Shoe 1',
    'uploads/06-03-2019/shoes-1.jpg',
    540000,
    'Male Shoe 1 Prenium',
    1552615987,
    1552615987
  ),
  (
    3,
    'Male Shoe 2',
    'uploads/06-03-2019/shoes-2.jpg',
    1500000,
    'Male Shoe 2 Prenium',
    1552615987,
    1552615987
  ),
  (
    4,
    'Male Shoe 3',
    'uploads/06-03-2019/shoes-3.jpg',
    780000,
    'Male Shoe 3 Prenium',
    1552615987,
    1552615987
  ),
  (
    5,
    'Male Shoe 4',
    'uploads/06-03-2019/shoes-4.jpg',
    657000,
    'Male Shoe 4 Prenium',
    1552615987,
    1552615987
  ),
  (
    6,
    'Male Shoe 5',
    'uploads/06-03-2019/shoes-5.jpg',
    684000,
    'Male Shoe 5 Prenium',
    1552615987,
    1552615987
  ),
  (
    7,
    'Male Shoe 6',
    'uploads/06-03-2019/shoes-6.jpg',
    580000,
    'Male Shoe 6 Prenium',
    1552615987,
    1552615987
  ),
  (
    8,
    'Male Shoe 7',
    'uploads/06-03-2019/shoes-7.jpg',
    1320000,
    'Male Shoe 7 Prenium',
    1552615987,
    1552615987
  ),
  (
    9,
    'Male Shoe 8',
    'uploads/06-03-2019/shoes-8.jpg',
    1450000,
    'Male Shoe 8 Prenium',
    1552615987,
    1552615987
  ),
  (
    10,
    'Sport Shoe',
    'uploads/06-03-2019/shoes-9.jpg',
    1000000,
    '<p>Gi&agrave;y b&oacute;ng Ä‘&aacute; 9 s&acirc;n cá»  nh&acirc;n táº¡o</p>\r\n',
    1552615987,
    1554822153
  ),
  (
    11,
    'Male Shoe 1',
    'uploads/06-03-2019/shoes-1.jpg',
    540000,
    'Male Shoe 1 Prenium',
    1552615987,
    1552615987
  ),
  (
    12,
    'Male Shoe 2',
    'uploads/06-03-2019/shoes-2.jpg',
    1500000,
    'Male Shoe 2 Prenium',
    1552615987,
    1552615987
  ),
  (
    13,
    'Male Shoe 3',
    'uploads/06-03-2019/shoes-3.jpg',
    780000,
    'Male Shoe 3 Prenium',
    1552615987,
    1552615987
  ),
  (
    14,
    'Male Shoe 4',
    'uploads/06-03-2019/shoes-4.jpg',
    657000,
    'Male Shoe 4 Prenium',
    1552615987,
    1552615987
  ),
  (
    15,
    'Male Shoe 5',
    'uploads/06-03-2019/shoes-5.jpg',
    684000,
    'Male Shoe 5 Prenium',
    1552615987,
    1552615987
  ),
  (
    16,
    'Male Shoe 6',
    'uploads/06-03-2019/shoes-6.jpg',
    580000,
    'Male Shoe 6 Prenium',
    1552615987,
    1552615987
  ),
  (
    17,
    'Male Shoe 7',
    'uploads/06-03-2019/shoes-7.jpg',
    1320000,
    'Male Shoe 7 Prenium',
    1552615987,
    1552615987
  ),
  (
    18,
    'Male Shoe 8',
    'uploads/06-03-2019/shoes-8.jpg',
    1450000,
    'Male Shoe 8 Prenium',
    1552615987,
    1552615987
  ),
  (
    20,
    'Nike air max 270 X supreme Red',
    'uploads/21-04-2020/nike-air-max-270-x-supreme-red-do-nam-nu-3(1).jpg',
    850000,
    '<p><span style=\"color:rgba(0, 0, 0, 0.8); 
    font-family:roboto,helvetica neue,helvetica,arial, wenquanyi zen hei,hiragino sans gb, lihei pro,heiti tc,microsoft jhenghei ui,microsoft jhenghei,sans-serif; font-size:14px\">
    #NIKE #Original #shoes #sneakers #airmax270 ã€ 100% originalã€‘ ã€ Ready stockã€‘ </span></p>\r\n\r\n
    <p><span style=\"color:rgba(0, 0, 0, 0.8); font-family:roboto,helvetica neue,helvetica,arial,wenquanyi zen hei,hiragino sans gb,lihei pro,heiti tc,microsoft jhenghei ui,microsoft jhenghei,sans-serif; font-size:14px\">
    ã€ Do not know choose size, please contact customer service, 24 hours for your serviceã€‘</span></p>\r\n\r\n
    <p><span style=\"color:rgba(0, 0, 0, 0.8); font-family:roboto,helvetica neue,helvetica,arial,wenquanyi zen hei,hiragino sans gb,lihei pro,heiti tc,microsoft jhenghei ui,microsoft jhenghei,sans-serif; font-size:14px\">
    Please read the following related instructions before purchasing. </span></p>\r\n\r\n
    <p><span style=\"color:rgba(0, 0, 0, 0.8); font-family:roboto,helvetica neue,helvetica,arial,wenquanyi zen hei,hiragino sans gb,lihei pro,heiti tc,microsoft jhenghei ui,microsoft jhenghei,sans-serif; font-size:14px\">
    1. Once you have purchased the product, the stock will be shipped within 24 hours. </span></p>\r\n\r\n
    <p><span style=\"color:rgba(0, 0, 0, 0.8); font-family:roboto,helvetica neue,helvetica,arial,wenquanyi zen hei,hiragino sans gb,lihei pro,heiti tc,microsoft jhenghei ui,microsoft jhenghei,sans-serif; font-size:14px\">
    2. Once you have purchased your product, we will ship it within 48 hours. ã€ shipping timeã€‘ Delivery Time: 7 days delivery Busy: Delivered 7-10 days. 
    Special day (holiday): 7-15 days When you accept the above suggestions, you can order in my store, thank you for your presence, like, and pay attention to this store, I will give you a small gift, I wish you a happy shopping! 
    #nikeshoes #menshoes #sportshoes #sneakesnike #womenshoes</span></p>\r\n',
    1587485911,
    1587486397
  );

-- --------------------------------------------------------
--
-- Table structure for table `user`
--
DROP TABLE
  IF EXISTS `user`;

CREATE TABLE
  IF NOT EXISTS `user` (
    `id` int (11) NOT NULL AUTO_INCREMENT,
    `username` varchar(100) NOT NULL,
    `fullname` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `birthday` int (11) NOT NULL,
    `created_time` int (11) NOT NULL,
    `last_updated` int (11) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE = MyISAM AUTO_INCREMENT = 2 DEFAULT CHARSET = utf8;

--
-- Dumping data for table `user`
--
INSERT INTO
  `user` (
    `id`,
    `username`,
    `fullname`,
    `password`,
    `birthday`,
    `created_time`,
    `last_updated`
  )
VALUES
  (
    1,
    'admin',
    'Andn',
    '25d55ad283aa400af464c76d713c07ad',
    123,
    123,
    1553185530
  );

--
-- Constraints for dumped tables
--
--
-- Constraints for table `image_library`
--
ALTER TABLE
  `image_library` ADD CONSTRAINT `image_library_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;