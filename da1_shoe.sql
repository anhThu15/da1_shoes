-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 24, 2023 lúc 06:04 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `da1_shoe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `brand_id` int NOT NULL,
  `brand_name` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `brand_descriptionText` text COLLATE utf8mb3_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_descriptionText`) VALUES
(1, 'Nike', 'Nike - một trong các hãng giày thể thao nổi tiếng nhất trên thế giới. Nike đã trở thành một biểu tượng văn hóa với các sản phẩm chất lượng cao và công nghệ tiên tiến như giày chạy bộ, giày bóng rổ và đồ thể thao khác. Ngoài giày thể thao, Nike còn sản xuất quần áo và phụ kiện thể thao cho nam và nữ, phục vụ nhu cầu đa dạng của khách hàng.\n\nNike- một trong những thương hiệu giày và thể thao nổi tiếng nhất trên thế giới\n\nNike - một trong những thương hiệu giày thể thao nổi tiếng nhất trên thế giới'),
(2, 'Vans', 'Vans được yêu thích bởi những người yêu thích văn hóa skate và streetwear. Những sản phẩm giày của Vans thường có thiết kế đơn giản, màu sắc đa dạng và được trang trí bằng các họa tiết độc đáo, tạo nên một phong cách thời trang cá tính và đặc trưng.'),
(3, 'Adidas', 'Adidas là viết tắt của tên của người sáng lập, Adi Dassler. Adidas nổi tiếng với những sản phẩm chất lượng cao, được thiết kế và sản xuất với công nghệ tiên tiến, đáp ứng nhu cầu và sở thích của người sử dụng. Adidas cũng nổi tiếng với việc tài trợ cho nhiều đội tuyển, vận động viên và sự kiện thể thao lớn trên toàn thế giới, đặc biệt là liên quan đến môn bóng đá.\n\n\n\nLionel Messi là một trong đại sứ thương hiệu nổi tiếng nhất của Adidas'),
(4, 'Ananas', 'Thương hiệu giày Ananas là thương hiệu nổi tiếng ở Việt Nam. Nhưng mức độ nhận biết của đôi giày này với bộ phận giới trẻ vẫn còn khá ít trong đó có cả mình. \nAnanas sở hữu kinh nghiệm sản xuất những đôi giày chất lượng cho các thương hiệu trên thế giới. Với kinh nghiệm đã có trên 20 năm Ananas mong mỏi mang đến những đôi giày chất lượng có giả cả phải chăng dành cho người tiêu dùng Việt Nam. \n\nNhóm đối tượng mà Ananas hướng tới là giới trẻ, năng động, di chuyển nhiều và thích khám phá. Thương hiệu in slogan riêng của mình là “Discover You” để nói lên khẩu hiệu của bản thân. Những người biết và chuyên sử dụng giày Ananas gọi giày của thương hiệu là “giày dứa” vì logo của nó là hình quả dứa.'),
(5, 'Puma', 'Thương hiệu này được biết đến với nhiều sản phẩm giày chất lượng cao, thiết kế độc đáo và tiên tiến về công nghệ sản xuất. Puma cũng nổi tiếng với việc tài trợ cho nhiều đội tuyển và vận động viên hàng đầu thế giới. Với phong cách trẻ trung, hiện đại và độc đáo, Puma luôn đáp ứng nhu cầu và sở thích của khách hàng trên toàn thế giới.\n'),
(6, 'New Balance', 'Thương hiệu New Balance được thành lập vào năm 1906 tại Mỹ và nổi tiếng với những sản phẩm chất lượng cao, thiết kế đơn giản nhưng rất ấn tượng. New Balance là thương hiệu chuyên sản xuất giày chạy bộ và đã được nhiều vận động viên hàng đầu tin dùng. Ngoài giày chạy bộ, New Balance cũng sản xuất nhiều loại giày thể thao khác với nhiều phong cách và màu sắc đa dạng.'),
(7, 'Skechers', 'Tại Mỹ, Skechers là thương hiệu thời trang được yêu thích đứng ở vị trí top đầu. Skechers đã chiếm được lòng tin vững chắc không chỉ những khách hàng ở Mỹ mà còn ở nhiều quốc gia khác nhau trên thế giới. Maison Online cũng là nhà phân phối độc quyền của thương hiệu giày thể thao này tại Việt Nam.'),
(8, 'Reebok', 'REEBOK luôn tập trung vào việc nghiên cứu và phát triển các sản phẩm giày thể thao chất lượng cao, đáp ứng nhu cầu của người dùng trong các hoạt động thể thao và tập luyện. Thương hiệu này còn có nhiều dòng sản phẩm giày thể thao khác nhau với nhiều kiểu dáng và màu sắc phong phú.\n\n'),
(9, 'Asic', 'ASICS là một thương hiệu giày thể thao nổi tiếng của Nhật Bản, được thành lập vào năm 1949. Thương hiệu này nổi tiếng với các sản phẩm giày chạy bộ chất lượng cao, được thiết kế với công nghệ tiên tiến và tính năng tối ưu để giúp người dùng cải thiện hiệu suất chạy bộ của mình.'),
(10, 'ON RUNNING', 'Thương hiệu On Running là một thương hiệu thể thao nổi tiếng đến từ Thụy Sĩ, được thành lập vào năm 2010 bởi ba vận động viên chuyên nghiệp - Olivier Bernhard, David Allemann và Caspar Coppetti. Với công nghệ độc đáo mang tên \"CloudTec\", những đôi giày của On Running được thiết kế tối ưu để đáp ứng nhu cầu của các vận động viên chuyên nghiệp cũng như những người yêu thích chạy bộ trên toàn thế giới. Bên cạnh giày chạy bộ, On Running còn thiết kế các sản phẩm thời trang khác như quần áo, nón, vớ,....'),
(11, 'Under Armour', 'Under Armour luôn tập trung vào việc nghiên cứu và phát triển các sản phẩm giày thể thao chất lượng cao, với sự kết hợp giữa công nghệ tiên tiến và thiết kế đẹp mắt. Thương hiệu này cũng có các dòng sản phẩm giày thể thao khác như giày bóng rổ và giày đá bóng.'),
(12, 'Converse', 'Thương hiệu này nổi tiếng với sản phẩm giày cao cổ với thiết kế đơn giản. Giày Converse không chỉ có sản phẩm giày cao cổ mà còn sản xuất các sản phẩm giày thể thao khác với nhiều kiểu dáng và màu sắc khác nhau. Ngoài ra, Converse cũng tạo ra các sản phẩm phụ kiện thời trang như ba lô, túi xách và quần áo, đáp ứng nhu cầu của khách hàng đa dạng trên toàn thế giới.\n\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categorys`
--

CREATE TABLE `categorys` (
  `categorys_id` int NOT NULL,
  `categorys_name` varchar(225) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categorys`
--

INSERT INTO `categorys` (`categorys_id`, `categorys_name`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Kid');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coment`
--

CREATE TABLE `coment` (
  `coment_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `coment_text` text COLLATE utf8mb3_unicode_ci,
  `coment_day` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coment`
--

INSERT INTO `coment` (`coment_id`, `user_id`, `product_id`, `coment_text`, `coment_day`) VALUES
(1, 3, 3, 'aaa', '2023-11-22'),
(2, 4, 2, 'giày này đẹp quá \r\n', '2023-11-22'),
(3, 4, 5, 'giày dc đó em ', '2023-11-22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `orders_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `orders_paymentStatus` set('not-yet','deal','ship','') CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT 'not-yet',
  `orders_totalPrice` text COLLATE utf8mb3_unicode_ci,
  `orders_coment` text COLLATE utf8mb3_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_detail`
--

CREATE TABLE `orders_detail` (
  `orders_detail_id` int NOT NULL,
  `orders_detail_day` date DEFAULT NULL,
  `order_quality` int DEFAULT NULL,
  `orders_id` int DEFAULT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `product_price` int DEFAULT NULL,
  `product_img` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `product_day` date DEFAULT NULL,
  `product_description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `brand_id` int DEFAULT NULL,
  `categorys_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_img`, `product_day`, `product_description`, `brand_id`, `categorys_id`) VALUES
(1, 'Nike Air Force 1 \'07', 2929000, 'Nike Air Force 1 \'07', '2023-11-14', 'The radiance lives on in the Nike Air Force 1 \'07, the basketball original that puts a fresh spin on what you know best: durably stitched overlays, clean finishes and the perfect amount of flash to make you shine.', 1, 1),
(2, 'TRACK 6 I.S.E.E - PURE WHITE/ICY BLUE', 1490000, 'screenshot_1700293215', '2023-11-14', 'Đây là một trong những chi tiết nổi bật thể hiện sự đặc biệt của phiên bản Track 6 I.S.E.E vừa ra mắt:\r\n- Track 6 Lacetag lần đầu tiên được giới thiệu.\r\n- Rập chữ A có thể tách rời cho cảm giác \"phá phách\" hơn.\r\n- Chữ I.S.E.E được \"đông đá\" bên trong chiếc tem lưỡi gà độc đáo.', 4, 1),
(3, 'GIÀY ULTRABOOST 1.0', 3150000, 'GIÀY ULTRABOOST 1.0', '2023-11-14', 'ĐÔI GIÀY SNEAKER ĐÀN HỒI, GIẢM PHÁT THẢI SO VỚI PHIÊN BẢN TRƯỚC.\r\nChạy xa hơn. Chạy nhanh hơn. Nhờ thiết kế đổi mới, đôi giày adidas Ultraboost này giúp bạn lướt qua những ngày bận rộn nhất. Thân giày adidas PRIMEKNIT ôm chân vừa vặn và nâng đỡ giúp hỗ trợ chuyển động, còn đế ngoài Continental™ Rubber đảm bảo độ bám và độ đàn hồi vượt trội trên mọi loại địa hình. Công nghệ adidas BOOST mang đến cảm giác thoải mái tuyệt đối để bạn chỉ muốn đi mỗi đôi giày sneaker này.\r\n\r\nChúng tôi đã giảm lượng phát thải carbon của đôi giày này xuống tối thiểu 10% so với phiên bản trước đó. Giảm phát thải khí nhà kính, bao gồm CO2, cho toàn bộ vòng đời — từ lúc hình thành cho tới khi kết thúc.', 3, 2),
(4, 'Knu Skool Shoe', 1827525, 'Knu Skool Shoe', '2023-11-14', 'A Puffy 90s Style Inspired by the Past, But Built for Today\r\n\r\nThe Knu Skool is a modern interpretation of a classic 90s style, defined by its puffed up tongue and 3D-molded Sidestripe, and tied off with oversized, chunky laces. With its in-your-face profile and dramatic style details, the Knu Skool plays off of the original Old Skool™ while blending an icon of the past with today’s trends.', 2, 1),
(5, 'Palermo Sneakers', 2192940, 'Palermo Sneakers', '2023-11-14', 'A terrace legend from our archives returns: The Palermo. The silhouette debuted back in the early \'80s, where it quickly became', 5, 2),
(6, 'Fresh Foam X 840v1', 3411276, 'Fresh Foam X 840v1', '2023-11-14', 'With a technical look and feel featuring an understated color and design, the New Balance Fresh Foam X 840v1 is a stylish and practical shoe ideal for low-impact activities or general everyday wear. The synthetic upper with no sew overlays provides a snug, comfortable fit and a sleek look, while the Fresh Foam X midsole, no-sew mid-foot support, and molded heel deliver exceptional comfort where you need it most.', 6, 2),
(7, 'Hi-Lite - Stellar Shine', 1266980, 'screenshot_1700293353', '2023-11-14', 'Show off your style in high-top fashion with Skechers Street™ Hi-Lite - Stellar Shine. This lace-up sneaker features a synthetic metallic upper with star detail and chain accent, a cushioned comfort insole, and glitter trim.', 7, 3),
(8, 'ENERGEN LUX WOMEN\'S RUNNING SHOES', 1432000, 'ENERGEN LUX WOMEN\'S RUNNING SHOES', '2023-11-14', NULL, 8, 2),
(9, 'GEL-RESOLUTION 9', 3055418, 'GEL-RESOLUTION 9', '2023-11-14', 'Giày quần vợt GEL-RESOLUTION 9 tạo độ ổn định và giảm chấn nâng cao cho những người chơi muốn kiểm soát trận đấu ngay từ đầu. DYNAWALL™công nghệ ở đế giữa giờ mở rộng đến gót chân để tăng độ ổn định trong các chuyển động ngang. Đó là một tính năng hữu hiệu khi bạn đang chạy ở cả hai phía của đường cơ sở.\r\n\r\nCông nghệ DYNAWRAP™đã được thiết kế lại một cách chiến lược để tăng cường sự hỗ trợ tối ưu. Điều này cho phép bạn trải nghiệm cảm giác linh hoạt khi thực hiện chuyển đổi nhanh.\r\n\r\nCuối cùng, đế ngoài dài hết cỡ và gót tách rời giúp tạo ra cú tiếp đất ổn định hơn để phục hồi nhanh hơn giữa các cú đánh.', 9, 1),
(10, 'Cloudhero Mid Waterproof', 1432000, 'screenshot_1700293315', '2023-11-14', 'A mid-cut, waterproof shoe for 8-15 year olds. Engineered with a Missiongrip™ outsole, it\'s ready for outdoor adventure.', 10, 3),
(11, 'Unisex UA HOVR™ Phantom 3 SE Day Of The Dead Running Shoes', 3655200, 'Unisex UA HOVR™ Phantom 3 SE Day Of The Dead Running Shoes', '2023-11-14', 'Lightweight, comfortable UA IntelliKnit upper with stretch where you need it\r\nLayered mesh & foam midfoot panel for added structure with increased breathability\r\nBootie construction for elevated ease of entry combined with a contoured fit\r\nExternal heel counter creates the ultimate in stable support\r\nResponsive UA HOVR™ cushioning reduces impact, returns energy & helps propel you forward\r\nFull rubber outsole with strategic pattern for elevated traction & durability', 11, 2),
(12, 'Unisex Converse Chuck Taylor All Star', 1240000, 'Unisex Converse Chuck Taylor All Star', '2023-11-14', 'Bắt đầu từ những năm 1917, đôi giày cổ cao Converse Chuck Taylor All Star đã trở thành biểu tượng thời trang của toàn cầu với các chi tiết đặc trưng – thân giày bằng vải canvas, mũi giày hoa văn kim cương và logo Chuck Taylor ở mắt cá chân đã mang lại sự phối hợp hoàn hảo về kiểu dáng cũng như độ bền bỉ của dôi giày này. Giày được tích hợp lớp đế lót OrthoLite mang lại sự êm ái cho bàn chân. Đơn giản nhưng luôn phong cách.', 12, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `user_fullname` varchar(225) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_name` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_email` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_pass` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_img` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_address` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_permission` int DEFAULT NULL COMMENT '1:user/2:collaborators/3:admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_fullname`, `user_name`, `user_email`, `user_pass`, `user_img`, `user_address`, `user_permission`) VALUES
(2, 'Ng trần Anh Thư', 'admin', 'admin@gmail.com', '123456', NULL, NULL, 3),
(3, 'Thư Nguyễn Trần Anh', 'user', 'user@gmail.com', '123456', NULL, NULL, 1),
(4, 'Mr.Thu', 'thunta', 'thunta', '123456', 'user.png', 'kha van can ', 2),
(5, 'Văn Huy', 'huyvan', 'vanhuy15@gmail.com', '123456', 'user.png', 'qts15', 1),
(6, 'Phương Uyên', 'uyenphuong', 'uyenphuong@gmail.com', '123456', 'user.png', 'qts15', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`categorys_id`);

--
-- Chỉ mục cho bảng `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`coment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`orders_detail_id`,`product_id`),
  ADD KEY `orders_id` (`orders_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_brand` (`brand_id`),
  ADD KEY `categorys_id` (`categorys_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `categorys`
--
ALTER TABLE `categorys`
  MODIFY `categorys_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `coment`
--
ALTER TABLE `coment`
  MODIFY `coment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `orders_detail_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `coment`
--
ALTER TABLE `coment`
  ADD CONSTRAINT `coment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `coment_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_ibfk_1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`orders_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_brand` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categorys_id`) REFERENCES `categorys` (`categorys_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
