-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2023 at 02:20 PM
-- Server version: 5.7.42-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `propert9_propertymap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role_as`, `status`, `created_at`) VALUES
(11, 'admin', 'admin@propertymap.com', '123456', 1, 0, '2023-04-11 20:03:02'),
(12, 'aadmins', 'aadmin@propertymap.com', '123456', 1, 0, '2023-05-15 08:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(50) NOT NULL,
  `p_slug` varchar(191) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `name` varchar(191) NOT NULL,
  `type` varchar(100) NOT NULL,
  `p_status` varchar(50) NOT NULL,
  `p_usage` varchar(100) NOT NULL,
  `beds` int(50) NOT NULL,
  `baths` int(50) NOT NULL,
  `hall` int(50) NOT NULL,
  `garage` int(50) NOT NULL,
  `size` int(50) NOT NULL,
  `address` varchar(191) NOT NULL,
  `city` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `location` text NOT NULL,
  `description` mediumtext,
  `image` varchar(191) DEFAULT NULL,
  `image1` varchar(191) DEFAULT NULL,
  `image2` varchar(191) DEFAULT NULL,
  `image3` varchar(191) DEFAULT NULL,
  `image4` varchar(191) DEFAULT NULL,
  `add_features` longtext CHARACTER SET utf8,
  `price` int(50) NOT NULL,
  `land_fees` int(50) NOT NULL,
  `oqod_amount` int(50) NOT NULL,
  `app_fees` int(50) NOT NULL,
  `first_hand` int(50) NOT NULL,
  `on_hand` int(50) NOT NULL,
  `three_month` int(50) NOT NULL,
  `six_month` int(50) NOT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `p_slug`, `meta_title`, `meta_description`, `meta_keyword`, `name`, `type`, `p_status`, `p_usage`, `beds`, `baths`, `hall`, `garage`, `size`, `address`, `city`, `area`, `location`, `description`, `image`, `image1`, `image2`, `image3`, `image4`, `add_features`, `price`, `land_fees`, `oqod_amount`, `app_fees`, `first_hand`, `on_hand`, `three_month`, `six_month`, `is_featured`, `status`, `created_at`) VALUES
(1, 'Tycoon-tower', 'Tycoon tower', 'Tycoon tower', 'Tycoon tower properties property for sale cash installment propertymap', 'Tycoon tower', 'sale', 'installment', 'residential', 0, 0, 0, 0, 100, 'New Administrative Capital', 'cairo', 'new-capital', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d55192.59516832724!2d31.554741000000003!3d30.164645000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581db5bc858e1b%3A0xb427a94b06c52085!2z2K3Yr9mK2YLYqSDYp9mE2K_Ysdin2KzYp9iqINmF2K_ZitmG2Kkg2KfZhNmF2LPYqtmC2KjZhA!5e0!3m2!1sen!2sus!4v1681601117019!5m2!1sen!2sus', 'Tycoon Tower, the tallest hotel in Africa, is poised to become the most recognizable hotel in the New Administrative Capital.\r\n The hotels luxury and unobstructed views of the Green River attract both locals and tourists from all over the world, proving that it is a unique property in one of the most interesting cities in the world.\r\n Tycoon Tower is one of our rapidly expanding portfolios most intriguing investment options due to these high-quality descriptions.', 'tower2.jpeg', 'tower3.jpeg', 'tower1.jpeg', '', '', '<p><strong>Location:</strong><br>Tycoon Tower is located at the golden point of the New Administrative Capital.<br>Tycoon Tower has the best location in the New Capital because it is close to 80% of the administrative<br>capitals landmarks and enjoys a 360-degree view. As a result of its strategic location, which makes it<br>easy to access from all major axes, the project site is known as the golden point of the New<br>Administrative Capital.<br>You only need to inquire about the Administrative Capitals golden point to find out how to get to<br>Tycoon Tower project.</p>\r\n<p><strong>Facilities:</strong><br>The building has a stunning design, modern interiors, and an infinity pool on the roof that will provide<br>lovely 365-degree views of the entire downtown and the administrative capital. Grand Millennium,<br>which has more than 150 hotels in more than 80 places around the world, will run and manage it.<br>- MIDDLE OF THE GREEN RIVER<br>- LUXURIOUS INFINITY POOL<br>- FIRST-CLASS RESTAURANTS<br>- SPA<br>- ROOFTOP<br>- MODERN GYM<br>- BUSINESS MEETING ROOM<br>- RECEPTION SERVICE 24/7<br>- MULTI-STOREY PARKING</p>', 2980000, 0, 0, 0, 10, 8, 0, 0, 1, 0, '2023-04-15 20:22:23'),
(10, 'Seazen-north-coast', 'Seazen north coast', 'Seazen north coast', 'Seazen north coast', 'Seazen north coast', 'sale', 'installment', 'residential', 0, 0, 0, 0, 100, 'north coast', 'North Coast', 'North Coast', '', 'Developed by Al Qamzi Developments across 204 acres of land in the North Coast, Seazen Egypt has a\r\n690-meter wide beachfront. Seazen North Coast features a wide range of services and facilities that\r\nallows you to truly unwind and enjoy your vacation.\r\n\r\nThese amenities include entertainment areas, swimmable lagoons, commercial areas, game rooms, and\r\nbeach restaurants. As well as beach cabanas, spas, beach promenade, lakes, beach bar, heated\r\n\r\nswimming pools, indoor and outdoor sports facilities\r\n\r\n\r\nSeazen North Coast boasts a collection of luxurious townhouses, twin houses, chalets and standalone\r\nvillas. Inspired by the modern and coastal architecture styles, the properties in Seazen North Coast have\r\na perfect blend of minimalist and beachy vibes. That can be clearly seen in the coastal color palettes,\r\n\r\nclear sharp lines and the subtle nods to the beachy surroundings.\r\n', 'north.jpeg', 'north1.jpeg', 'north2.jpeg', 'north3.jpeg', '', '<p class=\"MsoNormal\"><strong>Location</strong></p>\r\n<p class=\"MsoNormal\">Seazen has a prime location in the North Coast, exactly at the 170th km of Alexandria - Marsa Matrouh Desert Road. Easily accessible from the international coastal road, Seazen North Coast location is only:</p>\r\n<p class=\"MsoNormal\">- 20 minutes from Al Alamein International Airport</p>\r\n<p class=\"MsoNormal\">- 30 minutes away from Sidi Abdelrahman&nbsp;</p>\r\n<p class=\"MsoNormal\">- 50 minutes to El Alamein City&nbsp;</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Additionally, Seazen Egypt is in close proximity to numerous other popular destinations such as</p>\r\n<p class=\"MsoNormal\">- La Vista Bay</p>\r\n<p class=\"MsoNormal\">- The Waterway North Coast</p>\r\n<p class=\"MsoNormal\">- La Serina</p>\r\n<p class=\"MsoNormal\">- D-Bay Tatweer&nbsp;</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Facilities; </strong></p>\r\n<p class=\"MsoNormal\">entertainment areas, swimmable lagoons, commercial areas, game rooms, and beach restaurants. As well as beach cabanas, spas, beach promenade, lakes, beach bar, heated swimming pools, indoor and outdoor sports facilities</p>\r\n<p class=\"MsoNormal\"><strong>&nbsp;</strong></p>\r\n<p class=\"MsoNormal\"><strong>Amenities;</strong></p>\r\n<p class=\"MsoNormal\">Clubhouse</p>\r\n<p class=\"MsoNormal\">Outdoor Pools</p>\r\n<p class=\"MsoNormal\">Commercial Strip</p>\r\n<p class=\"MsoNormal\">Finishing</p>', 2365000, 0, 0, 0, 1000000, 8, 0, 0, 1, 0, '2023-05-08 08:36:59'),
(12, 'Creek-Town', 'Creek Town', 'Creek Town', 'Creek Town', 'Creek Town', 'sale', 'installment', 'apartment', 0, 0, 0, 0, 100, 'new cairo', 'cairo', 'new-cairo', '', 'Creek Town is located directly on the new Suez Road over 100 acres. All units overlooking water features & greenery ', 'WhatsApp Image 2023-05-13 at 9.41.09 PM.jpeg', 'WhatsApp Image 2023-05-13 at 9.41.07 PM.jpeg', 'WhatsApp Image 2023-05-13 at 9.41.10 PM (1).jpeg', 'WhatsApp Image 2023-05-13 at 9.41.12 PM.jpeg', '', '<p class=\"MsoNormal\"><strong>Facilities; </strong></p>\n<p class=\"MsoNormal\">- Commercial Areas</p>\n<p class=\"MsoNormal\">- Administrative Offices</p>\n<p class=\"MsoNormal\">- Clinics</p>\n<p class=\"MsoNormal\">- Smart Gates</p>\n<p class=\"MsoNormal\">- Club Houses</p>\n<p class=\"MsoNormal\">- Hotel services</p>\n<p class=\"MsoNormal\">- Swimming Pools</p>\n<p class=\"MsoNormal\">- Restaurants &amp; Cafes</p>\n<p class=\"MsoNormal\">&nbsp;</p>\n<p class=\"MsoNormal\">Designed by: <strong>Hany Saad Innovations</strong> (HSI) </p>\n<p class=\"MsoNormal\">Landscape by: <strong>OKO</strong> PLAN</p>\n<p class=\"MsoNormal\">80% Creeks and landscape</p>\n<p class=\"MsoNormal\">-Commercial and administration design by <strong>YBA</strong></p>\n<p class=\"MsoNormal\"><strong>&nbsp;</strong></p>\n<p class=\"MsoNormal\"><strong>Twin villas / town houses / apartments / duplexes / penthouses </strong></p>', 326524, 0, 0, 0, 265365, 6, 0, 0, 1, 0, '2023-05-14 15:09:03'),
(13, 'Ninety-avenue-', 'Ninety avenue ', 'Ninety avenue ', 'Ninety avenue ', 'Ninety avenue ', 'sale', 'installment', 'apartment', 0, 0, 0, 0, 100, 'Fifth Settlement', 'cairo', 'new-cairo', '', '90 Avenue Compound extends over a huge area of 50 acres in the Fifth Settlement, and the company chose this space to allow it to implement various facilities and services that make the project an integrated residential city in New Cairo.\r\nThe company allocated most of the space for the construction of green spaces, facilities, and recreational services, as it allocated only 18% of the space for the construction of residential units and commercial facilities.\r\nThe compound includes the following phases:\r\n-Pavilion\r\n-Greenville\r\n-Serenity\r\n', 'aven.jpeg', 'anen.jpeg', 'ner.jpeg', 'bn.jpeg', '', '<p>Location; in the heart of New Cairo, especially in the Fifth Settlement area, with a distinctive view of 90th Street, where 90 Avenue is located close to several vital places, including:<br>-It is located in front of the American University<br>-20 km from the Ring Road<br>-17 km through Suez<br>-25 km from Cairo Airport<br>-20 km from the New Administrative Capital</p>\r\n<p><br>Facilities:&nbsp;<br>Mega club house 2.5 Acres (Paddle Court, CrossFit Center, swimming pools, Tennis court, Football Court, Kids area, Barbecue area, Events area, Lounge).<br>Underground Parking<br>Strip Mall. G+1<br>Hotel Apartments operated by 5-star Hotel Branded.<br>84% Landscape and water features<br>16% Footprint</p>', 326524, 0, 0, 0, 1000000, 10, 0, 0, 1, 0, '2023-05-15 08:23:25'),
(15, 'Talah', 'Talah', 'The compound was designed with the latest international designs in a high-end creative architectural style, so it was designed on the â€œALTO CASAâ€ system and with the best engineering capabilities and strategies by international rules and laws and also using the best building materials to be resistant to environmental disasters.\r\nThe developer has taken care of the engineering decoration works for the compound and residential units from the inside and outside, in addition to designing green spaces on a large area in the middle of the artificial lakes and a group of trees so that they harmonize and give you a view at the top of splendor and all units overlook a direct view of the landscape that excites you and gives you a sense of comfort and recreation\r\n', 'Talah', 'Talah', 'sale', 'installment', 'residential', 0, 0, 0, 0, 100, 'New Administrative Capital', 'cairo', 'new-capital', '', 'The compound was designed with the latest international designs in a high-end creative architectural style, so it was designed on the ALTO CASA system and with the best engineering capabilities and strategies by international rules and laws and also using the best building materials to be resistant to environmental disasters.\r\nThe developer has taken care of the engineering decoration works for the compound and residential units from the inside and outside, in addition to designing green spaces on a large area in the middle of the artificial lakes and a group of trees so that they harmonize and give you a view at the top of splendor and all units overlook a direct view of the landscape that excites you and gives you a sense of comfort and recreation\r\n', 'talha1.jpeg', 'talha.jpeg', 'talha2.jpeg', '', '', '<p class=\"MsoNormal\"><strong>Location:</strong></p>\r\n<p class=\"MsoNormal\">Talat New Administrative Capital is located in the seventh residential district R7, specifically in plot No. 1L, and among the most important roads and areas near the compound are the following:</p>\r\n<p class=\"MsoNormal\">- Talah is located in the new administrative capital near the central park and the green river.</p>\r\n<p class=\"MsoNormal\">-It is only 25 minutes away from Cairo International Airport.</p>\r\n<p class=\"MsoNormal\">-The distance between Talah New Plan and the New Administrative Capital Airport is only about 20 minutes.</p>\r\n<p><strong>Facilities:</strong></p>\r\n<p>-18%footprint</p>\r\n<p>&nbsp;- 82% Landscape</p>\r\n<p>- Water features</p>\r\n<p>-Jogging track</p>\r\n<p>- Bike track</p>\r\n<p>- Medical services</p>\r\n<p>- Medical services</p>\r\n<p>- First Aid clinic</p>\r\n<p>- Ambulance service</p>\r\n<p>- Lamborghinis Kitchen</p>\r\n<p>- Security Surveillance</p>\r\n<p>- Club house</p>\r\n<p>- GYM &amp; Spa &amp; Jacuzzi</p>\r\n<p>- Indoor &amp; outdoor Pools</p>\r\n<p>- Games Hall</p>\r\n<p>- Indoor &amp; outdoor social areas</p>\r\n<p>-Cinema Hall</p>\r\n<p>&nbsp;- BBQ Area</p>\r\n<p>- Multi-purpose area</p>\r\n<p>- Event Area</p>\r\n<p>- Paddle tennis</p>\r\n<p>- Praying Area</p>', 2130000, 0, 0, 0, 227012, 10, 0, 0, 1, 0, '2023-05-15 09:08:15'),
(16, 'Aster-Residence', 'Aster Residence', 'Aster Residence is crowning the heart of New Cairo. It is located directly on one of the 5th Settlementâ€™s most attractive spots, offering a wide range of units, pedestrian streets, greenery, and water features. It openly overlooks New Cairo landmarks with numerous access points to all main roads. Moreover, it is situated inside the golden square, where everything is easily accessible.', 'Aster Residence', 'Aster Residence', 'sale', 'installment', 'residential', 0, 0, 0, 0, 100, 'new cairo', 'cairo', 'new-cairo', '', 'Aster Residence is crowning the heart of New Cairo. It is located directly on one of the 5th Settlementâ€™s most attractive spots, offering a wide range of units, pedestrian streets, greenery, and water features. It openly overlooks New Cairo landmarks with numerous access points to all main roads. Moreover, it is situated inside the golden square, where everything is easily accessible.', 'aster.jpeg', 'aster1.jpeg', 'aster2.jpeg', '', '', '<p class=\"MsoNormal\"><strong>Location: </strong></p>\r\n<p class=\"MsoNormal\">Golden Square beside Mivida, Galleria, Lake view Residence</p>\r\n<p class=\"MsoNormal\"><strong>Project Area:</strong> 35 Acres</p>\r\n<p class=\"MsoNormal\">Footprint: 16%</p>\r\n<p class=\"MsoNormal\">Building Floors: G+5</p>\r\n<p class=\"MsoNormal\">Mega Clubhouse built on 2.5Acres</p>\r\n<p class=\"MsoNormal\">Underground Parking</p>\r\n<p class=\"MsoNormal\">Strip Mall</p>\r\n<p class=\"MsoNormal\">Hotel Apartments / last phase</p>\r\n<p class=\"MsoNormal\">Only Apartments</p>\r\n<p class=\"MsoNormal\">Semi-Finished</p>\r\n<p class=\"MsoNormal\"><strong>Payment Plan: </strong></p>\r\n<p class=\"MsoNormal\">10% Down payment</p>\r\n<p class=\"MsoNormal\">10% Delivery Payment</p>\r\n<p class=\"MsoNormal\">Over 8 years equal installments</p>\r\n<p class=\"MsoNormal\">Maintenance 8% over 2 years (8 Quarters)</p>\r\n<p class=\"MsoNormal\">Cash Discount 30%</p>', 5000000, 0, 0, 0, 1000000, 10, 0, 0, 1, 0, '2023-05-15 09:55:51'),
(17, 'Eastshire-', 'Eastshire ', 'Eastshire ', 'Eastshire ', 'Eastshire ', 'sale', 'cash', 'residential', 0, 0, 0, 0, 100, 'new cairo', 'cairo', 'new-cairo', '', 'Conveniently and artistically nestled over 26 acres in the heart of New Cairo, where beauty meets an exquisite layout. The strikingly harmonious design provides you with utmost privacy where homes are carefully designed to be a mix of standalone villas and neighboring townhouses. It is a genuine haven of majestic natural beauty and absolute privacy through the perfect symmetry of architecture and natural views.', 'east .jpeg', 'east1.jpeg', 'east2.jpeg', 'east3.jpeg', '', '<p class=\"MsoNormal\"><strong>Location</strong></p>\r\n<p class=\"MsoNormal\">3 MINUTES from the American University in Cairo.</p>\r\n<p class=\"MsoNormal\">25 MINUTES from the Cairo International Airport.</p>\r\n<p class=\"MsoNormal\">5 MINUTES from the Median Ring Road.</p>\r\n<p class=\"MsoNormal\">3 MINUTES from Point 90 Mall.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Facilities;</strong></p>\r\n<p class=\"MsoNormal\">CLUB HOUSE</p>\r\n<p class=\"MsoNormal\">GYM</p>\r\n<p class=\"MsoNormal\">POOL</p>\r\n<p class=\"MsoNormal\">LOUNGE &amp; RESTAURANT</p>\r\n<p class=\"MsoNormal\">CO-WORKING SPACE</p>\r\n<p class=\"MsoNormal\">COMMERCIAL STRIP</p>\r\n<p class=\"MsoNormal\"><strong>&nbsp;</strong></p>\r\n<p class=\"MsoNormal\"><strong>Payment Plan</strong></p>\r\n<p class=\"MsoNormal\">Down Payment; Starting from 10%</p>\r\n<p class=\"MsoNormal\">Installment Period; Up to 8 Years</p>', 5000000, 0, 0, 0, 1000000, 10, 0, 0, 1, 0, '2023-05-15 11:51:42'),
(18, 'Oro-new-capital', 'Oro new capital', 'Oro new capital', 'Oro new capital', 'Oro new capital', 'sale', 'installment', 'residential', 0, 0, 0, 0, 100, 'New Administrative Capital', 'cairo', 'new-capital', '', 'Compound Oro is provided with a distinguished location in a vital area in the New Capital, in addition to a wonderful design. Green spaces possess the highest percentage of area in Oro AMG project, and spacious units are presented, so that residents can feel comfortable during their accommodation.Commercial Mall: Compound Oro New Capital includes an integrated commercial mall on an area of 2,200 square meters and contains the most famous brands and international restaurants.\r\nEntertainment Area: There is a huge entertainment area within the Oro New Capital, covering an area of 5440 meters, so that different age groups can enjoy it and spend happy times together.\r\nAbout Oro New Capital: Oro New Administrative Capital has an area of 38 acres, and that space was used in a wonderful way to harmonize the facilities between the wide green spaces, gardens, and various recreational parks.\r\nOro New Capital Compound Location: Oro New Administrative Capital is located in plot No. E4 in the R7 area, with a view very close to the embassy district, and is very close to the Green River, and the project is close to a number of important roads and main axes in the Administrative Capital.\r\nOro New Administrative Capital is located a few minutes from the British University and the Swedish University.\r\nCompound Oro New Capital is separated by a few steps from the presidential district, which is located to the north of the compound. Oro New Administrative Capital is only 30 minutes away from the capitals airport. Compound Oro New Capital is approaching the investors area.', 'oro.jpeg', 'oro1.jpeg', 'oro2.jpeg', 'oro3.jpeg', '', '<p class=\"MsoNormal\"><strong>Facilities:</strong></p>\r\n<p class=\"MsoNormal\">- An integrated medical building, consisting of clinics, laboratories, and a pharmacy, to provide health care to residents of Compound Oro.</p>\r\n<p class=\"MsoNormal\">- Oro Compound New Capital includes a social sporting club to spend enjoyable moments.</p>\r\n<p class=\"MsoNormal\">- Oro Ava mina has well-trained security guards to maintain the safety of residents.</p>\r\n<p class=\"MsoNormal\">- A commercial mall, with international brands and restaurants, is built on an area of â€‹â€‹220 m<sup>2</sup>&nbsp;in Compound Oro.</p>\r\n<p class=\"MsoNormal\">- Oro AMG project contains an amusement park, covering an area of â€‹â€‹5440 m<sup>2</sup>, where families can spend some quality time together.</p>\r\n<p class=\"MsoNormal\">- A mosque is included in Oro Compound New Capital for performing prayers.</p>\r\n<p class=\"MsoNormal\">- Avamina Oro also offers a nursery for children.</p>\r\n<p>- Multi-use playground&nbsp;</p>\r\n<p>- gym and spa are available in Oro Compound to do exercises at any time.</p>\r\n<p class=\"MsoNormal\">- Residents of Oro New Capital get to enjoy green spaces and swimming pools.</p>\r\n<p class=\"MsoNormal\">- Compound Oro New Capital is fully equipped with surveillance cameras to preserve the security and safety of residents.</p>\r\n<p class=\"MsoNormal\">- Each building in Oro New Capital project contains trash cans.</p>\r\n<p class=\"MsoNormal\">- Car parking areas are also available in Oro AMG project.</p>\r\n<p>&nbsp;</p>', 21300000, 0, 0, 0, 227012, 10, 0, 0, 1, 0, '2023-05-15 13:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(1, 'maherfared@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
