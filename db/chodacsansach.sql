-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 18, 2019 lúc 06:08 AM
-- Phiên bản máy phục vụ: 10.2.27-MariaDB
-- Phiên bản PHP: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `u178368257_cdss`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id_account` int(4) NOT NULL,
  `name_account` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pass_account` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email_account` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_account` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `address_account` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id_account`, `name_account`, `pass_account`, `email_account`, `phone_account`, `address_account`, `level`, `status`) VALUES
(1, 'ADMIN', '370194ff6e0f93a7432e16cc9badd9427e8b4e13', 'admin@gmail.com', '0934061273', 'TP HCM', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `award`
--

CREATE TABLE `award` (
  `id_award` int(4) NOT NULL,
  `images_award` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `award`
--

INSERT INTO `award` (`id_award`, `images_award`) VALUES
(1, 'F.jpg'),
(2, 'F1.jpg'),
(3, 'F2.jpg'),
(4, 'F3.jpg'),
(6, 'F5.jpg'),
(7, 'F4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(4) NOT NULL,
  `images_banner` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_banner` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `des_banner` text COLLATE utf8_unicode_ci NOT NULL,
  `link_banner` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id_banner`, `images_banner`, `title_banner`, `des_banner`, `link_banner`) VALUES
(9, 'dac-san-tay-bac.png', 'Đặc Sản Vùng Miền', 'Chúng tôi chuyên cung cấp sỉ và lẻ các mặt hàng đặc sản cho tất cả quý khách hàng', 'http://google.com'),
(10, 'ca-kho-lang-vu-dai-tran-luan-60.jpg', 'Cá Kho Trần Luận', 'Chuyên cung cấp sỉ và lẻ...', 'http://cakhotranluanhcm.chodacsansach.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(4) NOT NULL,
  `name_category` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(2, 'Đặc sản Hà Giang'),
(6, 'Cá kho Trần Luân'),
(7, 'Ẩm thực Tây Bắc'),
(8, 'Các loại khô miền cao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(4) NOT NULL,
  `id_account` int(4) NOT NULL,
  `name_comment` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email_comment` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(4) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_comment`, `id_account`, `name_comment`, `email_comment`, `id_product`, `content`, `status`) VALUES
(4, 1, 'Nguyễn Ngọc Sáng', 'admin@gmail.com', 1, 'Cá kho ăn rất ngon', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(4) NOT NULL,
  `name` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `phone`, `content`, `status`) VALUES
(2, 'sáng', 'sang@gmail.com', '01234567890', 'content', 1),
(3, 'sáng', 'sang@gmail.com', '01234567890', 'content', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `home_setting`
--

CREATE TABLE `home_setting` (
  `id_home_setting` int(4) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(165) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `home_setting`
--

INSERT INTO `home_setting` (`id_home_setting`, `title`, `description`, `keywords`, `logo`) VALUES
(1, 'Đặc sản Tây Bắc - Chợ Đặc Sản Sạch | ChoDacSan.VN', 'Đặc Sản Tây Bắc - Chợ Đặc Sản Sạch - ChoDacSan.VN - Chúng tôi chuyên cung cấp sỉ và lẻ các mặt hàng đặc sản cho tất cả quý khách hàng ', 'Đặc Sản Tây Bắc, Chợ Đặc Sản Sạch, ChoDacSan.VN, chuyên cung cấp sỉ và lẻ các mặt hàng đặc sản ngon, chợ đặc sản giá rẻ ', 'logo-white.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lp_evaluate`
--

CREATE TABLE `lp_evaluate` (
  `id_lp_evaluate` int(4) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lp_evaluate`
--

INSERT INTO `lp_evaluate` (`id_lp_evaluate`, `name`, `text`, `images`) VALUES
(3, 'Nguyễn Ngọc Sáng', 'Nội dung đánh giá', 'user.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lp_intro`
--

CREATE TABLE `lp_intro` (
  `id_lp_intro` int(4) NOT NULL,
  `intro` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `intro_2` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `intro_3` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `intro_4` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `root` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lp_intro`
--

INSERT INTO `lp_intro` (`id_lp_intro`, `intro`, `intro_2`, `intro_3`, `intro_4`, `root`) VALUES
(1, 'Cá Kho Trần Luận là thương hiệu đứng đầu Việt Nam', 'Mang đến gia vị & hương vị đồng quê Việt Nam', 'Là tâm huyết của những nghệ nhân giỏi nhất', 'Chỉ kho phần thân cá trắm đen thịt ngon & chắc', 'Món cá kho làng Vũ Đại hay còn gọi là Cá kho Đại Hoàng là đặc sản nổi tiếng của làng Nhân Hậu, xã Hòa Hậu, huyện Lý Nhân, tỉnh Hà Nam. Món ăn này có từ rất lâu, do là vùng trũng nên trong làng ngày trước nhiều ao hồ, cứ đến tết tát ao, chọn những con cá trắm đen to và ngon nhất để kho theo công thức gia truyền cùng với gia vị là gừng, giềng, hành, ớt, nước cốt chanh, nước cốt cua đồng....đặc biệt là cá được kho trong niêu đất, trên bếp lửa trong thời gian 16 đến 20 tiếng nên vừa có vị thơm của lửa, vừa phảng phất những hương vị đồng quê, ăn rất tốn cơm, người già trẻ nhỏ không lo hóc xương, ai ai cũng thích.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lp_library`
--

CREATE TABLE `lp_library` (
  `id_lp_library` int(4) NOT NULL,
  `images` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lp_library`
--

INSERT INTO `lp_library` (`id_lp_library`, `images`) VALUES
(6, 'maxresdefault.jpg'),
(7, 'mua-ca-kho-lang-vu-dai-tai-quang-ngai(1).jpg'),
(8, 'mua-ca-kho-lang-vu-dai-tai-son-la.jpg'),
(9, 'para-01.jpg'),
(10, 'para-1.jpg'),
(12, 's-2.jpg'),
(13, 'thanhhuong-165822095833-ca-kho.jpg'),
(21, 'nieudat1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lp_order`
--

CREATE TABLE `lp_order` (
  `id_lp_order` int(4) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(130) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lp_order`
--

INSERT INTO `lp_order` (`id_lp_order`, `name`, `phone`, `address`, `text`, `date`, `status`) VALUES
(2, 'sáng', '01234567890', 'Vũng tàu city', 'Order 1 cá kho nhé', '14:12:00 11-6-2019', 1),
(3, 'sáng', '01234567890', 'Vũng tàu city', 'Order 1 cá kho nhé', '12:1:00 11-6-2019', 1),
(13, 'sáng', '01234567890', 'Vũng tàu city', 'Order 1 cá kho nhé', '12:12:00 11-6-2019', 1),
(14, 'sáng', '01234567890', 'Vũng tàu city', 'Order 1 cá kho nhé', '12:12:00 11-6-2019', 1),
(16, 'Sáng', '0123123123', 'Ho Chi Minh', 'Order thêm 1 cá kho nhé', '12:02:00 11-6-2019', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lp_plan`
--

CREATE TABLE `lp_plan` (
  `id_lp_plan` int(4) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lp_plan`
--

INSERT INTO `lp_plan` (`id_lp_plan`, `title`, `text`, `images`) VALUES
(1, 'Niêu đất', 'Niêu đất chuẩn phải lấy từ Nghệ An vì chất đất ở đây tốt có thể đảm bảo độ bền trong quá trình kho gần 24 tiếng, vung của niêu phải lấy từ Thanh Hóa vì loại vung ở đây được thiết kế theo kiểu vòm lên dễ hơn trong việc kho cá. Trước khi kho phải cho 1 nắm gạo vào niêu đất để “tôi” sau đó phơi nắng cho niêu thêm chắc chắn.', 'nieudat1.jpg'),
(2, 'Củi lửa', 'Cá kho bằng củi nhãn, vì theo người dân ở làng, nồi đất kho bằng củi nhãn sẽ làm mất mùi đất nung và làm cho món cá có hương thơm hấp dẫn hơn và củi nhãn cho lửa rất đượm. Trong quá trình kho cần phải ủ trấu để giữ nhiệt cho nồi luôn trong trạng thái sôi lục bục.', 'cuilua1.jpg'),
(3, 'Gia vị', 'Phải chọn toàn bộ gia vị tự nhiên: gừng, giềng , chanh, nước cốt cua đồng, hành , tiêu (hoặc ớt ), nước cốt xương sườn lợn ….', 'giavi1.png'),
(4, 'Kho cá', 'Niêu đất sau khi rửa sạch phải lót ở bên dưới một lớp giềng lát để cá không bị cháy Cá được chọn để kho phải là loại cá tươi, hiện tại có 2 loại cá người dân thường kho là cá trắm đen và cá rô đồng. Sau khi mổ cá, bỏ lại đầu và đuôi, cho cá luôn vào niêu đất sau đó phủ một lớp giềng + gừng + hành khô giã lên trên, cho mắm , muối, gia vị vào và bắt đầu kho.', 'khoca1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lp_setting`
--

CREATE TABLE `lp_setting` (
  `id_lp_setting` int(4) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(165) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lp_setting`
--

INSERT INTO `lp_setting` (`id_lp_setting`, `title`, `description`, `keywords`, `logo`) VALUES
(1, 'Cá Kho Trần Luận', 'Tạo nên bữa cơm ngon cho mọi gia đình.', 'cá kho trần luận, cá kho Hồ Chí Minh, cá kho làng vũ đại', 'logo-white.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(4) NOT NULL,
  `name_product` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `price_product` double(10,0) NOT NULL,
  `sale_product` double(10,0) NOT NULL,
  `image_product` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_product_2` varchar(200) COLLATE utf8_unicode_ci DEFAULT 'default.jpg',
  `describe_product` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `des_seo` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `key_seo` varchar(165) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vip_product` tinyint(1) DEFAULT 0,
  `id_category` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price_product`, `sale_product`, `image_product`, `image_product_2`, `describe_product`, `des_seo`, `key_seo`, `vip_product`, `id_category`) VALUES
(1, 'Cá Trắm Đen kho niêu làng Vũ Đại', 550000, 0, 'ca-tram.jpg', 'ca-tram.jpg', '<p>Thịt lợn hun kh&oacute;i của đồng b&agrave;o d&acirc;n tộc ở H&agrave; Giang đ&atilde; c&oacute; rất l&acirc;u, v&agrave; trở th&agrave;nh một đặc sản của địa phương. Thịt lợn hun kh&oacute;i ở đ&acirc;y mang đậm phong vị n&uacute;i rừng cao nguy&ecirc;n đ&aacute;, ăn rồi mới thấy kh&aacute;c. Người d&acirc;n chọn những miếng thịt ngon về , th&aacute;i mỏng rồi treo l&ecirc;n g&aacute;c bếp. Hơi n&oacute;ng của lửa sẽ l&agrave;m cho miếng thịt săn lại, mở chảy ra, thịt hun kh&oacute;i được chế biến th&agrave;nh nhiều m&oacute;n kh&aacute;c nhau như: nướng, x&agrave;o, luộc hoặc kho c&ugrave;ng củ cải&hellip;rất đa dạng. Th&ocirc;ng thường, người ta chỉ d&ugrave;ng thịt lợn ba chỉ, đ&ocirc;i khi l&agrave; thịt m&ocirc;ng, vai. C&aacute;c m&oacute;n ăn được chế biến từ thịt lợn hun kh&oacute;i ngọn hơn so với c&aacute;c loại thịt lợn kh&ocirc;ng treo g&aacute;c bếp, bởi miếng thịt chắc, kh&ocirc;ng bị n&aacute;t, c&oacute; m&ugrave;i thơm rất đặc trưng. Sau khi tẩm ướp c&aacute;c gia vị như: muối,gừng, hạt ti&ecirc;u rừng&hellip; thịt được treo tr&ecirc;n khu đốt lửa cho đến khi kh&ocirc;. L&uacute;c lấy xuống d&ugrave;ng th&igrave; miếng thịt gần như đ&atilde; ch&iacute;n từ b&ecirc;n trong, người d&acirc;n chỉ việc sơ chế qua l&agrave; c&oacute; thể d&ugrave;ng được lu&ocirc;n. Khi thưởng thức, thịt c&oacute; vị thơm ngon v&agrave; đặc biệt kh&ocirc;ng &ldquo;ngấy&rdquo;.</p>\r\n', NULL, NULL, 1, 6),
(23, 'Cá Chạch kho niêu làng Vũ Đại', 650000, 0, 'Ca-trach.jpg', 'Ca-trach.jpg', '<p>Đặc Sản C&aacute; Chạch</p>\r\n', 'Cá Chạch', '', 1, 6),
(24, 'Cá diếc kho niêu làng Vũ Đại', 500000, 0, 'Cá-diếc.jpg', 'Cá-diếc.jpg', '<p>C&aacute; diếc 1kg</p>\r\n', '', '', 1, 6),
(25, 'Cá bống kho niêu làng Vũ Đại', 650000, 0, 'Ca-bong.png', 'Ca-bong.png', '<p>C&aacute; bống kho ni&ecirc;u l&agrave;ng Vũ Đại 1kg</p>\r\n', 'Cá bống kho niêu làng Vũ Đại', '', 1, 6),
(26, 'Giò bê thái miếng vùng cao Hà Giang', 350000, 0, 'Screenshot_20190619-150059_Zalo.jpg', 'Screenshot_20190619-150059_Zalo.jpg', '<p>Gi&ograve; b&ecirc; th&aacute;i miếng v&ugrave;ng cao H&agrave; Giang</p>\r\n', 'Giò bê thái miếng vùng cao Hà Giang', '', 0, 2),
(27, 'Gà đồi muối vùng cao Hà Giang', 420000, 0, 'Screenshot_20190519-101528_Zalo.jpg', 'Screenshot_20190519-101528_Zalo.jpg', '<p>G&agrave; đồi muối v&ugrave;ng cao H&agrave; Giang</p>\r\n', 'Gà đồi muối vùng cao Hà Giang', '', 0, 2),
(28, 'Chân giò muối thịt lợn đen vùng cao Hà Giang', 290000, 0, 'Screenshot_20190425-110551_Zalo.jpg', 'Screenshot_20190425-110551_Zalo.jpg', '<p>Ch&acirc;n gi&ograve; muối thịt lợn đen v&ugrave;ng cao H&agrave; Giang</p>\r\n', 'Chân giò muối thịt lợn đen vùng cao Hà Giang', '', 0, 2),
(29, 'Giò ngựa vùng cao Hà Giang', 420000, 0, 'Screenshot_20190425-110504_Zalo.jpg', 'Screenshot_20190425-110504_Zalo.jpg', '<p>Gi&ograve; ngựa v&ugrave;ng cao H&agrave; Giang</p>\r\n', 'Giò ngựa vùng cao Hà Giang', '', 0, 2),
(30, 'Xúc xích đặc biệt', 240000, 0, 'Screenshot_20190425-110515_Zalo.jpg', 'Screenshot_20190425-110515_Zalo.jpg', '<p>X&uacute;c x&iacute;ch đặc biệt</p>\r\n', 'Xúc xích đặc biệt', '', 0, 2),
(31, 'Giò dăm bông thịt lợn đen vùng cao Hà Giang', 280000, 0, 'Screenshot_20190425-110600_Zalo.jpg', 'Screenshot_20190425-110600_Zalo.jpg', '<p>Gi&ograve; dăm b&ocirc;ng thịt lợn đen v&ugrave;ng cao H&agrave; Giang</p>\r\n', 'Giò dăm bông thịt lợn đen vùng cao Hà Giang', '', 0, 2),
(32, 'Thịt trâu gác bếp vùng cao Hà Giang', 1000000, 0, 'Screenshot_20190425-110610_Zalo.jpg', 'Screenshot_20190425-110610_Zalo.jpg', '<p>Thịt tr&acirc;u g&aacute;c bếp v&ugrave;ng cao H&agrave; Giang</p>\r\n', 'Thịt trâu gác bếp vùng cao Hà Giang', '', 0, 2),
(33, 'Lạp sườn gác bếp thịt lơn đen vùng cao Hà Giang', 390000, 0, 'Screenshot_20190425-110627_Zalo.jpg', 'Screenshot_20190425-110627_Zalo.jpg', '<p>Lạp sườn g&aacute;c bếp thịt lơn đen v&ugrave;ng cao H&agrave; Giang</p>\r\n', 'Lạp sườn gác bếp thịt lơn đen vùng cao Hà Giang', '', 0, 2),
(34, 'Thịt lợn đen gác bếp vùng cao Hà Giang', 390000, 0, 'Screenshot_20190519-101831_Zalo.jpg', 'Screenshot_20190519-101831_Zalo.jpg', '<p>Thịt lợn đen g&aacute;c bếp v&ugrave;ng cao H&agrave; Giang</p>\r\n', 'Thịt lợn đen gác bếp vùng cao Hà Giang', '', 0, 2),
(35, 'Miến rong 100% xã vũ phúc huyện lí nhân Hà Nam', 65000, 0, 'mien-1.jpg', 'mien-2.jpg', '<p>Miến x&atilde; vũ ph&uacute;c huyện l&iacute; nh&acirc;n H&agrave; Nam</p>\r\n', 'Miến xã vũ phúc huyện lí nhân Hà Nam', '', 0, 8),
(36, 'Nấm hương rừng vùng cao Hà Giang', 380000, 0, 'nam-huong-rung.jpg', 'nam-huong-rung.jpg', '<p>Nấm hương rừng v&ugrave;ng cao H&agrave; Giang</p>\r\n', 'Nấm hương rừng vùng cao Hà Giang', '', 0, 8),
(37, 'Măng lưỡi lợn vùng cao Hà Giang', 340000, 0, 'mang-luoi-lon.jpg', 'mang-luoi-lon.jpg', '<p>Măng lưỡi lợn v&ugrave;ng cao H&agrave; Giang</p>\r\n', 'Măng lưỡi lợn vùng cao Hà Giang', '', 0, 8);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Chỉ mục cho bảng `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`id_award`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `fk_id_acc` (`id_account`),
  ADD KEY `fk_id_product` (`id_product`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Chỉ mục cho bảng `home_setting`
--
ALTER TABLE `home_setting`
  ADD PRIMARY KEY (`id_home_setting`);

--
-- Chỉ mục cho bảng `lp_evaluate`
--
ALTER TABLE `lp_evaluate`
  ADD PRIMARY KEY (`id_lp_evaluate`);

--
-- Chỉ mục cho bảng `lp_intro`
--
ALTER TABLE `lp_intro`
  ADD PRIMARY KEY (`id_lp_intro`);

--
-- Chỉ mục cho bảng `lp_library`
--
ALTER TABLE `lp_library`
  ADD PRIMARY KEY (`id_lp_library`);

--
-- Chỉ mục cho bảng `lp_order`
--
ALTER TABLE `lp_order`
  ADD PRIMARY KEY (`id_lp_order`);

--
-- Chỉ mục cho bảng `lp_plan`
--
ALTER TABLE `lp_plan`
  ADD PRIMARY KEY (`id_lp_plan`);

--
-- Chỉ mục cho bảng `lp_setting`
--
ALTER TABLE `lp_setting`
  ADD PRIMARY KEY (`id_lp_setting`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fk_id_cata` (`id_category`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `award`
--
ALTER TABLE `award`
  MODIFY `id_award` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `home_setting`
--
ALTER TABLE `home_setting`
  MODIFY `id_home_setting` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lp_evaluate`
--
ALTER TABLE `lp_evaluate`
  MODIFY `id_lp_evaluate` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `lp_intro`
--
ALTER TABLE `lp_intro`
  MODIFY `id_lp_intro` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `lp_library`
--
ALTER TABLE `lp_library`
  MODIFY `id_lp_library` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `lp_order`
--
ALTER TABLE `lp_order`
  MODIFY `id_lp_order` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `lp_plan`
--
ALTER TABLE `lp_plan`
  MODIFY `id_lp_plan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `lp_setting`
--
ALTER TABLE `lp_setting`
  MODIFY `id_lp_setting` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_id_acc` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_id_cata` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
