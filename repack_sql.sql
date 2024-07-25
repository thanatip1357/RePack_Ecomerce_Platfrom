-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 07:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repack`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `User_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Unit_Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 1,
  `TotalP` int(11) NOT NULL,
  `Cart_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Rewards` int(11) NOT NULL DEFAULT 0,
  `Primary_LocationID` int(11) NOT NULL DEFAULT 0,
  `DOB` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustID`, `Name`, `Email`, `Password`, `Rewards`, `Primary_LocationID`, `DOB`) VALUES
(1, 'John Doe', 'john.doe@email.com', 'pass123', 100, 101, '1990-05-15'),
(2, 'Jane Smith', 'jane.smith@emaill.com', 'pass456', 75, 102, '1985-08-20'),
(3, 'Bob Johnson', 'bob.johnson@email.com', 'pass789', 50, 103, '1995-02-10'),
(4, 'Alice Brown', 'alice.brown@email.com', 'passabc', 120, 104, '1982-11-25'),
(5, 'Charlie Davis', 'charlie.davis@email.com', 'passxyz', 90, 105, '1998-07-08'),
(6, 'Eva Wilson', 'eva.wilson@email.com', 'pass789', 80, 101, '1987-04-30'),
(7, 'David Miller', 'david.miller@email.com', 'pass123', 60, 102, '1993-09-12'),
(8, 'Grace Lee', 'grace.lee@email.com', 'pass456', 110, 103, '1980-03-18'),
(9, 'Frank White', 'frank.white@email.com', 'passxyz', 95, 104, '1991-06-22'),
(10, 'Helen Taylor', 'helen.taylor@email.com', 'passabc', 70, 105, '1989-12-05'),
(11, 'Ivan Perez', 'ivan.perez@email.com', 'pass123', 85, 101, '1997-01-14'),
(12, 'Jessica Davis', 'jessica.davis@email.com', 'pass456', 105, 102, '1984-10-28'),
(13, 'Kevin Anderson', 'kevin.anderson@email.com', 'pass789', 65, 103, '1994-04-03'),
(14, 'Laura Moore', 'laura.moore@email.com', 'passabc', 75, 104, '1983-07-17'),
(15, 'Megan Taylor', 'megan.taylor@email.com', 'passxyz', 115, 105, '1996-08-09'),
(16, 'Nathan Hall', 'nathan.hall@email.com', 'pass123', 55, 101, '1986-02-08'),
(17, 'Olivia Turner', 'olivia.turner@email.com', 'pass456', 100, 102, '1992-11-20'),
(18, 'Paul Carter', 'paul.carter@email.com', 'pass789', 45, 103, '1981-09-15'),
(19, 'Quincy Morris', 'quincy.morris@email.com', 'passxyz', 125, 104, '1999-03-01'),
(20, 'Rachel Johnson', 'rachel.johnson@email.com', 'passabc', 80, 105, '1988-06-14'),
(21, 'Samuel Brown', 'samuel.brown@email.com', 'pass123', 95, 101, '1995-12-27'),
(22, 'Tina Adams', 'tina.adams@email.com', 'pass456', 60, 102, '1984-07-10'),
(23, 'Ulysses Martinez', 'ulysses.martinez@email.com', 'pass789', 110, 103, '1991-02-22'),
(24, 'Victoria White', 'victoria.white@email.com', 'passabc', 70, 104, '1987-05-05'),
(25, 'William Turner', 'william.turner@email.com', 'passxyz', 85, 105, '1993-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Location ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL COMMENT 'foreign key',
  `Image_1_user` varchar(50) NOT NULL,
  `image_2` varchar(50) NOT NULL,
  `coordinates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Location ID`, `User_ID`, `Image_1_user`, `image_2`, `coordinates`) VALUES
(200, 1, 'image1_user_1.jpg', 'image2_1.jpg', '12.345,67.890'),
(201, 2, 'image1_user_2.jpg', 'image2_2.jpg', '23.456,78.901'),
(202, 3, 'image1_user_3.jpg', 'image2_3.jpg', '34.567,89.012'),
(203, 4, 'image1_user_4.jpg', 'image2_4.jpg', '45.678,90.123'),
(204, 5, 'image1_user_5.jpg', 'image2_5.jpg', '56.789,01.234'),
(205, 6, 'image1_user_6.jpg', 'image2_6.jpg', '67.890,12.345'),
(206, 7, 'image1_user_7.jpg', 'image2_7.jpg', '78.901,23.456'),
(207, 8, 'image1_user_8.jpg', 'image2_8.jpg', '89.012,34.567'),
(208, 9, 'image1_user_9.jpg', 'image2_9.jpg', '90.123,45.678'),
(209, 10, 'image1_user_10.jpg', 'image2_10.jpg', '01.234,56.789'),
(210, 11, 'image1_user_11.jpg', 'image2_11.jpg', '12.345,67.890'),
(211, 12, 'image1_user_12.jpg', 'image2_12.jpg', '23.456,78.901'),
(212, 13, 'image1_user_13.jpg', 'image2_13.jpg', '34.567,89.012'),
(213, 14, 'image1_user_14.jpg', 'image2_14.jpg', '45.678,90.123'),
(214, 15, 'image1_user_15.jpg', 'image2_15.jpg', '56.789,01.234'),
(215, 16, 'image1_user_16.jpg', 'image2_16.jpg', '67.890,12.345'),
(216, 17, 'image1_user_17.jpg', 'image2_17.jpg', '78.901,23.456'),
(217, 18, 'image1_user_18.jpg', 'image2_18.jpg', '89.012,34.567'),
(218, 19, 'image1_user_19.jpg', 'image2_19.jpg', '90.123,45.678'),
(219, 20, 'image1_user_20.jpg', 'image2_20.jpg', '01.234,56.789'),
(220, 21, 'image1_user_21.jpg', 'image2_21.jpg', '12.345,67.890'),
(221, 22, 'image1_user_22.jpg', 'image2_22.jpg', '23.456,78.901'),
(222, 23, 'image1_user_23.jpg', 'image2_23.jpg', '34.567,89.012'),
(223, 24, 'image1_user_24.jpg', 'image2_24.jpg', '45.678,90.123'),
(224, 25, 'image1_user_25.jpg', 'image2_25.jpg', '56.789,01.234');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_product`
--

CREATE TABLE `ordered_product` (
  `Order_Item_ID` int(11) NOT NULL,
  `Order_Id` int(11) NOT NULL COMMENT 'foreign key',
  `Product_ID` int(11) NOT NULL COMMENT 'foreign key',
  `Product_Name` varchar(150) NOT NULL COMMENT 'foreign key',
  `Quantity` int(11) NOT NULL,
  `Unit_Price` int(11) NOT NULL COMMENT 'foreign key',
  `Total_Price` int(11) NOT NULL,
  `Discount` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordered_product`
--

INSERT INTO `ordered_product` (`Order_Item_ID`, `Order_Id`, `Product_ID`, `Product_Name`, `Quantity`, `Unit_Price`, `Total_Price`, `Discount`, `Status`) VALUES
(601, 300, 511, 'Ground Coffee', 2, 30, 60, 0, 'Active'),
(602, 300, 512, 'Aluminium Foil', 2, 30, 60, 0, 'Active'),
(603, 302, 520, 'Hand Soap', 3, 50, 150, 0, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `O_ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Total_Amt` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL COMMENT 'foreign key',
  `Packaging_ID` int(11) NOT NULL COMMENT 'foreign key',
  `Location_ID` int(11) NOT NULL COMMENT 'foreign key',
  `Status` varchar(50) NOT NULL COMMENT 'active/completed\r\n\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`O_ID`, `Date`, `Total_Amt`, `User_Id`, `Packaging_ID`, `Location_ID`, `Status`) VALUES
(300, '2024-01-27', 120, 3, 711, 222, 'Active'),
(302, '2024-01-28', 150, 7, 704, 213, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `packaging`
--

CREATE TABLE `packaging` (
  `P_ID` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Return_Status` char(50) NOT NULL COMMENT 'Accepted/Processed/Completed',
  `Order_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Deposit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packaging`
--

INSERT INTO `packaging` (`P_ID`, `Type`, `Return_Status`, `Order_ID`, `User_ID`, `Deposit`) VALUES
(704, 'Cardboard Packaging', 'Not Returned', 302, 7, 5),
(711, 'Cardboard Packaging', 'Not Returned', 300, 11, 8);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `P_ID` int(11) NOT NULL,
  `P_Name` varchar(50) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Price` int(11) NOT NULL,
  `Stock_Quantity` int(11) NOT NULL,
  `Category_ID` varchar(30) NOT NULL DEFAULT 'ALL',
  `Image` varchar(50) NOT NULL COMMENT 'image_name_stored',
  `Rating` int(11) NOT NULL,
  `Type` varchar(10) NOT NULL COMMENT 'pfand/notpfand',
  `CostP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`P_ID`, `P_Name`, `Description`, `Price`, `Stock_Quantity`, `Category_ID`, `Image`, `Rating`, `Type`, `CostP`) VALUES
(501, 'Organic Brown Rice', 'High-quality organic brown rice for a healthy diet', 44, 100, 'Kitchen Supplies', 'organic_brown_rice.jpg', 5, 'NotPfand', 26),
(502, 'Whole Wheat Flour', 'Premium whole wheat flour for baking', 54, 150, 'Kitchen Supplies', 'whole_wheat_flour.jpg', 4, 'NotPfand', 22),
(503, 'Fresh Spinach', 'Fresh and nutritious spinach for your meals', 64, 50, 'Kitchen Supplies', 'fresh_spinach.jpg', 4, 'NotPfand', 28),
(504, 'Organic Milk (1 Gallon)', 'Organic milk for a rich and creamy taste', 60, 80, 'Chai-Shai Supplies', 'organic_milk.jpg', 5, 'NotPfand', 26),
(505, 'Tomato Sauce', 'High-quality tomato sauce for cooking', 40, 120, 'Fresh and Fast', 'tomato_sauce.jpg', 4, 'Pfand', 36),
(506, 'Toilet Paper (Pack of 12)', 'Soft and absorbent toilet paper for daily use', 64, 200, 'Fresh and Fast', 'toilet_paper.jpg', 5, 'NotPfand', 18),
(507, 'Chicken Breast (2 lbs)', 'Fresh and lean chicken breast for your meals', 50, 60, 'Kitchen Supplies', 'chicken_breast.jpg', 4, 'NotPfand', 20),
(508, 'Laundry Detergent', 'Effective laundry detergent for clean and fresh clothes', 52, 100, 'Fresh and Fast', 'laundry_detergent.jpg', 5, 'NotPfand', 30),
(509, 'Fresh Apples (3 lbs)', 'Crisp and juicy apples for snacking', 52, 80, 'Kitchen Supplies', 'fresh_apples.jpg', 5, 'Pfand', 38),
(510, 'Dish Soap', 'Gentle and effective dish soap for clean dishes', 36, 120, 'Fresh and Fast', 'dish_soap.jpg', 4, 'NotPfand', 26),
(511, 'Ground Coffee', 'Rich and flavorful ground coffee for a perfect brew', 30, 50, 'Chai-Shai Supplies', 'ground_coffee.jpg', 5, 'NotPfand', 16),
(512, 'Aluminum Foil', 'Durable aluminum foil for cooking and storage', 30, 100, 'Kitchen Supplies', 'aluminum_foil.jpg', 4, 'NotPfand', 24),
(513, 'Maggie Ready to Cook', 'Plump and ripe tomatoes for salads and cooking', 38, 60, 'Cleaning Products', 'Maggie.jpg', 4, 'Pfand', 42),
(514, 'Paper Towels (Pack of 6)', 'Absorbent paper towels for quick cleanups', 66, 150, 'Cleaning Products', 'paper_towels.jpg', 5, 'Pfand', 32),
(515, 'Salmon Fillets (1 lb)', 'Fresh and flavorful salmon fillets for seafood lovers', 68, 40, 'Kitchen Supplies', 'salmon_fillets.jpg', 5, 'Pfand', 32),
(516, 'Trash Bags (Pack of 30)', 'Durable trash bags for efficient waste disposal', 32, 80, 'Fresh and Fast', 'trash_bags.jpg', 4, 'Pfand', 36),
(517, 'Bananas (1 lb)', 'Sweet and nutritious bananas for a healthy snack', 54, 100, 'Kitchen Supplies', 'bananas.jpg', 4, 'Pfand', 42),
(518, 'All-Purpose Cleaner', 'Effective all-purpose cleaner for a clean home', 68, 120, 'Fresh and Fast', 'all_purpose_cleaner.jpg', 5, 'Pfand', 32),
(519, 'Broccoli', 'Fresh and nutritious broccoli for a balanced diet', 36, 50, 'Kitchen Supplies', 'broccoli.jpg', 4, 'NotPfand', 20),
(520, 'Hand Soap', 'Gentle and moisturizing hand soap for clean hands', 50, 80, 'Fresh and Fast', 'hand_soap.jpg', 5, 'NotPfand', 22),
(521, 'Whole Chicken', 'Whole chicken for roasting and delicious meals', 54, 30, 'Kitchen Supplies', 'whole_chicken.jpg', 4, 'NotPfand', 18),
(522, 'Sponges (Pack of 4)', 'Durable sponges for effective cleaning', 54, 100, 'Fresh and Fast', 'sponges.jpg', 4, 'Pfand', 50),
(523, 'Fresh Strawberries (1 lb)', 'Sweet and juicy strawberries for desserts and snacks', 66, 60, 'Kitchen Supplies', 'fresh_strawberries.jpg', 5, 'Pfand', 46),
(524, 'Garbage Bags (Pack of 20)', 'Strong and reliable garbage bags for waste disposal', 58, 80, 'Fresh and Fast', 'garbage_bags.jpg', 5, 'Pfand', 34),
(525, 'Ice Cream 1L', 'Amul Vanilla Tub Ice Cream', 32, 40, 'Sweet Cravings', 'ice_cream.jpg', 4, 'NotPfand', 20),
(526, 'Microwaveable Pizza', 'Delicious ready-to-eat pizza, perfect for a quick meal', 42, 50, 'Cleaning Products', 'pizza.jpg', 5, 'Pfand', 38),
(527, 'Instant Noodles', 'Quick and tasty noodles ready in minutes', 52, 100, 'Cleaning Products', 'noodles.jpg', 4, 'Pfand', 40),
(528, 'Frozen Burritos', 'Convenient frozen burritos, heat and enjoy', 30, 30, 'Cleaning Products', 'burritos.jpg', 4, 'NotPfand', 18),
(529, 'Pre-Packaged Salad', 'Fresh salad with dressing, ready to eat on the go', 52, 20, 'Cleaning Products', 'salad.jpg', 4, 'NotPfand', 30),
(530, 'Microwaveable Soup', 'Warm and comforting soup ready in minutes', 46, 40, 'Cleaning Products', 'soup.jpg', 4, 'Pfand', 36);

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `R_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL COMMENT 'foreign key',
  `Points` int(11) NOT NULL,
  `Expiry Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`R_ID`, `User_ID`, `Points`, `Expiry Date`) VALUES
(400, 1, 50, '2024-03-01'),
(402, 2, 75, '2024-04-15'),
(403, 3, 100, '2024-05-20'),
(404, 4, 30, '2024-06-10'),
(405, 5, 60, '2024-07-05'),
(406, 6, 80, '2024-08-12'),
(407, 7, 45, '2024-09-30'),
(408, 8, 90, '2024-10-25'),
(409, 9, 55, '2024-11-18'),
(410, 10, 120, '2024-12-15'),
(411, 11, 70, '2025-01-02'),
(412, 12, 40, '2025-02-20'),
(413, 13, 85, '2025-03-15'),
(414, 14, 110, '2025-04-28'),
(415, 15, 95, '2025-05-10'),
(416, 16, 65, '2025-06-22'),
(417, 17, 50, '2025-07-30'),
(418, 18, 75, '2025-08-05'),
(419, 19, 100, '2025-09-18'),
(420, 20, 30, '2025-10-12'),
(421, 21, 60, '2025-11-25'),
(422, 22, 80, '2025-12-31'),
(423, 23, 45, '2026-01-15'),
(424, 24, 90, '2026-02-28'),
(425, 25, 55, '2026-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `users_admin`
--

CREATE TABLE `users_admin` (
  `User_ID` int(50) NOT NULL COMMENT 'primary ',
  `Name` varchar(50) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Contact_Number` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_admin`
--

INSERT INTO `users_admin` (`User_ID`, `Name`, `Email_ID`, `Password`, `Contact_Number`) VALUES
(1001, 'Hemant Tripathi', 'hemant.tripathi@bca.christuniversity.in', 'pass123', '8240266922'),
(1002, 'Thanatip Singpee', 'thanatip.singpee@bca.christuniversity.in', 'strongpass', '9876543210'),
(1003, 'Rose ', 'rose.peter@bca.christuniversity.in', 'mypassword', '8765432109'),
(1004, 'Alice Brown', 'alice.brown@example.com', 'pass123', '7654321098'),
(1005, 'Charlie White', 'charlie.white@example.com', 'password123', '6543210987');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Product_ID` (`Cart_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `CustID` (`CustID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Location ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `ordered_product`
--
ALTER TABLE `ordered_product`
  ADD PRIMARY KEY (`Order_Item_ID`),
  ADD KEY `Order_Id` (`Order_Id`,`Product_ID`,`Product_Name`,`Unit_Price`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`O_ID`),
  ADD KEY `User_Id` (`User_Id`,`Packaging_ID`,`Location_ID`),
  ADD KEY `Packaging_ID` (`Packaging_ID`,`Location_ID`),
  ADD KEY `Location_ID` (`Location_ID`);

--
-- Indexes for table `packaging`
--
ALTER TABLE `packaging`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `Order_ID` (`Order_ID`,`User_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `FK_Parent_Category` (`Category_ID`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`R_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `users_admin`
--
ALTER TABLE `users_admin`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Unique_Phone` (`Contact_Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=534;

--
-- AUTO_INCREMENT for table `users_admin`
--
ALTER TABLE `users_admin`
  MODIFY `User_ID` int(50) NOT NULL AUTO_INCREMENT COMMENT 'primary ', AUTO_INCREMENT=1006;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `customer` (`CustID`);

--
-- Constraints for table `ordered_product`
--
ALTER TABLE `ordered_product`
  ADD CONSTRAINT `ordered_product_ibfk_1` FOREIGN KEY (`Order_Id`) REFERENCES `orders` (`O_ID`),
  ADD CONSTRAINT `ordered_product_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `products` (`P_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `customer` (`CustID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Packaging_ID`) REFERENCES `packaging` (`P_ID`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`Location_ID`) REFERENCES `location` (`Location ID`);

--
-- Constraints for table `packaging`
--
ALTER TABLE `packaging`
  ADD CONSTRAINT `packaging_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `customer` (`CustID`),
  ADD CONSTRAINT `packaging_ibfk_2` FOREIGN KEY (`Order_ID`) REFERENCES `orders` (`O_ID`);

--
-- Constraints for table `rewards`
--
ALTER TABLE `rewards`
  ADD CONSTRAINT `rewards_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `customer` (`CustID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
