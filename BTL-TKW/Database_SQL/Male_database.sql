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
DROP TABLE IF EXISTS `image_library`;

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
    2,
    2,
    'imgs/male_shoes/shoe1/dem011700nau__3__5b4a31da5a974a20bd7e9b9ff4a84a98.jpg',
    1587486207,
    1587486207
  ),
  (
    3,
    2,
    'imgs/male_shoes/shoe1/dem011700nau__4__4922651aab1a4c6cae0206a02013fcf9.jpg',
    1587486207,
    1587486207
  ),
  (
    4,
    2,
    'imgs/male_shoes/shoe1/dem011700nau__5__625a3524a98643f0b100006536f4dbbf_grande.jpg',
    1587486207,
    1587486207
  ),
  (
    5,
    2,
    'imgs/male_shoes/shoe1/dem011700nau__6__11fb4a742c774f5fbe16b2e1ac3201c8.jpg',
    1587486207,
    1587486207
  );

--
-- Table structure for table `product`
--
DROP TABLE IF EXISTS `product`;

CREATE TABLE
  IF NOT EXISTS `product` (
    `id` int (11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `image` varchar(255) DEFAULT NULL,
    `price` float NOT NULL,
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
    `created_time`,
    `last_updated`
  )
VALUES
  (
    2,
    'Dép Eva Phun Nam Bitis DEM011700NAU (Nâu)',
    'imgs/male_shoes/shoe1/dem011700nau__5__625a3524a98643f0b100006536f4dbbf_grande.jpg',
    191000,
    1552615987,
    1552615987
  ),
  (
    3,
    'Sandal Da Nam SD0690000DEN (Đen)',
    'imgs/male_shoes/shoe2/sd0690000den__5__4672c8b91160477592c906927f39843c_grande.jpg',
    429000,
    1552615987,
    1552615987
  ),
  (
    4,
    'Dép Da Nam SD1580000NAU (Nâu)',
    'imgs/male_shoes/shoe3/sd1580000nau__5__263ee94b70564f23be531dd511fa2cc1_grande.jpg',
    323000,
    1552615987,
    1552615987
  ),
  (
    5,
    'Giày Thể Thao Nam Hunter X DSMH10500XAM (Xám)',
    'imgs/male_shoes/shoe4/dsmh10500xam__5__113fd43149a74ead82897abb58b78cf9_grande.jpg',
    1050000,
    1552615987,
    1552615987
  ),
  (
    6,
    'Giày Thể Thao Nam Hunter X DSMH10500DEN (Đen)',
    'imgs/male_shoes/shoe5/dsmh10500den__5__70792867b9754641810abe461efb97de_grande.jpg',
    684000,
    1552615987,
    1552615987
  ),
  (
    7,
    'Giày Thể Thao Nam Hunter X DSMH10500TRG (Trắng)',
    'imgs/male_shoes/shoe6/dsmh10500trg__5__ea0cda5998a642b29c279d6025ab5155_grande.jpg',
    580000,
    1552615987,
    1552615987
  );

-- --------------------------------------------------------
--
-- Table structure for table `user`
--
DROP TABLE IF EXISTS `user`;

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
ALTER TABLE `image_library` ADD CONSTRAINT `image_library_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;