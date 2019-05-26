-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 26, 2019 lúc 05:31 PM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `l03_projectwebmaytinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_camera`
--

CREATE TABLE `tbl_camera` (
  `id_camera` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hangsx_id` int(11) DEFAULT NULL,
  `ten_camera` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia_camera` float DEFAULT NULL,
  `dophangiai` float DEFAULT NULL,
  `ongkinh` float DEFAULT NULL,
  `gocquansat` int(11) DEFAULT NULL,
  `url_camera` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh_camera` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loai_camera` int(11) DEFAULT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitiethd`
--

CREATE TABLE `tbl_chitiethd` (
  `id_chitiethd` int(11) NOT NULL,
  `hoadon_id` int(11) DEFAULT NULL,
  `loaisp` int(11) DEFAULT NULL,
  `sanpham_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hangsx`
--

CREATE TABLE `tbl_hangsx` (
  `id_hangsx` int(11) NOT NULL,
  `loaisp` int(11) DEFAULT NULL,
  `tenhangsx` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh_hangsx` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hangsx`
--

INSERT INTO `tbl_hangsx` (`id_hangsx`, `loaisp`, `tenhangsx`, `anh_hangsx`) VALUES
(3, 1, 'Dell', 'assets/images/hangsx/Dell.jpg'),
(4, 1, 'HP', 'assets/images/hangsx/HP.jpg'),
(5, 1, 'Acer', 'assets/images/hangsx/Acer.jpg'),
(6, 1, 'Asus', 'assets/images/hangsx/Asus.jpg'),
(7, 1, 'Lenovo', 'assets/images/hangsx/Lenovo.jpg'),
(9, 1, 'MSI', 'assets/images/hangsx/MSI.png'),
(11, 1, 'Apple', 'assets/images/hangsx/Macbook.png'),
(12, 2, 'Dahua', 'assets/images/hangsx/Dahua.PNG'),
(13, 2, 'Hikvision', 'assets/images/hangsx/Hikvision.PNG'),
(14, 2, 'Ezviz', 'assets/images/hangsx/Ezviz.PNG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon`
--

CREATE TABLE `tbl_hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `tenkh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthaihoadon` int(11) DEFAULT NULL,
  `tongtien` float DEFAULT NULL,
  `nhanvien_id` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_laptop`
--

CREATE TABLE `tbl_laptop` (
  `id_laptop` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hangsx_id` int(11) DEFAULT NULL,
  `ten_laptop` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia_laptop` float DEFAULT NULL,
  `manhinh` float DEFAULT NULL,
  `cpu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` int(11) DEFAULT NULL,
  `vga` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hdd` int(11) DEFAULT NULL,
  `ssd` int(11) DEFAULT NULL,
  `hdh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khoiluong` float DEFAULT NULL,
  `pin` int(11) DEFAULT NULL,
  `url_laptop` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh_laptop` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhucau` int(11) DEFAULT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_laptop`
--

INSERT INTO `tbl_laptop` (`id_laptop`, `hangsx_id`, `ten_laptop`, `gia_laptop`, `manhinh`, `cpu`, `ram`, `vga`, `hdd`, `ssd`, `hdh`, `khoiluong`, `pin`, `url_laptop`, `anh_laptop`, `nhucau`, `mota`, `soluong`) VALUES
('4ME68PA', 4, 'Laptop HP 15 da0054TU i3 7020U/4GB/500GB/Win10/(4ME68PA)', 10990000, 15.6, 'Intel Core i3 Kabylake 7020U 2.30 GHz', 4, 'Intel® HD Graphics 620', 500, 0, 'Windows 10 Home SL', 1.77, 3, 'hp-15-da0054tu-4me68pa', 'assets/images/laptop/hp-15-da0054tu-4me68pa.jpg', 1, '<h2>&nbsp;</h2>\r\n\r\n<h2>Đặc điểm nổi bật của HP 15 da0054TU i3 7020U/4GB/500GB/Win10/(4ME68PA)</h2>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/44/177770/Slider/-hp-15-da0054tu-4me68pa-33397-slider-1-thieke.jpg\" /></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p>Bộ sản phẩm chuẩn: D&acirc;y nguồn,Adapter sạc,Th&ugrave;ng m&aacute;y,S&aacute;ch hướng dẫn</p>\r\n\r\n<h2><a href=\"https://www.thegioididong.com/laptop/hp-15-da0054tu-4me68pa\">Laptop HP 15 da0054TU</a>&nbsp;l&agrave; phi&ecirc;n bản<a href=\"https://www.thegioididong.com/laptop\" target=\"_blank\">&nbsp;m&aacute;y t&iacute;nh x&aacute;ch tay</a>&nbsp;với cấu h&igrave;nh được trang bị vi xử l&yacute; chip Intel Core i3 Kabylake thế hệ 7 đem đến hiệu năng ổn định khi thao t&aacute;c c&aacute;c t&aacute;c vụ cơ bản, ph&ugrave; hợp cho c&ocirc;ng việc văn ph&ograve;ng, học tập.</h2>\r\n\r\n<h3>Thiết kế sang trọng tinh tế</h3>\r\n\r\n<p>HP 15 da0054TU sở hữu thiết kế đơn giản, nhưng cũng kh&ocirc;ng k&eacute;m phần sang trọng v&agrave; tinh tế với chất liệu từ nhựa c&ugrave;ng họa tiết v&acirc;n tr&ograve;n đồng t&acirc;m đẹp mắt. M&aacute;y với độ d&agrave;y chỉ 22.5 mm c&ugrave;ng trọng lượng chỉ 1.77 kg tiện lợi cho người d&ugrave;ng mang m&aacute;y theo sử dụng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/177770/hp-15-da0054tu-4me68pa-33397-thietke.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế thanh lịch, gọn nhẹ trên máy tính văn phòng HP 15 da0054TU i3 7020U\" src=\"https://cdn.tgdd.vn/Products/Images/44/177770/hp-15-da0054tu-4me68pa-33397-thietke.jpg\" /></a></p>\r\n\r\n<h3>Cấu h&igrave;nh Intel Core i3 Kabylake thế hệ 7</h3>\r\n\r\n<p>Được trang bị bộ vi xử l&yacute; Intel&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/bo-xu-ly-intel-core-i3-i5-i7-the-he-thu-7-kaby-952583\" target=\"_blank\">Core i3 Kabylake</a>&nbsp;đảm bảo hệ thống vận h&agrave;nh mượt m&agrave;. Bộ nhớ Ram&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173\" target=\"_blank\">DDR4</a>&nbsp;4GB cho ph&eacute;p đa nhiệm nhiều chương tr&igrave;nh một c&aacute;ch ổn định. B&ecirc;n cạnh đ&oacute;,&nbsp;<a href=\"https://www.thegioididong.com/laptop-hp-compaq\" target=\"_blank\">laptop HP</a>&nbsp;được trang bị ổ cứng HDD 500 GB&nbsp; đ&aacute;p ứng tốt nhu cầu lưu trữ dữ liệu thoải m&aacute;i.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/177770/hp-15-da0054tu-4me68pa-33397-cauhinh.jpg\" onclick=\"return false;\"><img alt=\"hiệu năng ổn định trên Laptop văn phòng HP 15 da0054TU i3 7020U\" src=\"https://cdn.tgdd.vn/Products/Images/44/177770/hp-15-da0054tu-4me68pa-33397-cauhinh.jpg\" /></a></p>\r\n\r\n<h3>Thoải m&aacute;i l&agrave;m việc, học tập với m&agrave;n h&igrave;nh 15.6 inch</h3>\r\n\r\n<p>HP 15 da0054TU được trang bị m&agrave;n h&igrave;nh k&iacute;ch thước 15.6 inch với độ ph&acirc;n giải Full HD, c&ocirc;ng nghệ m&agrave;n h&igrave;nh&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/cac-chuan-man-hinh-su-dung-tren-laptop-747028#hdbledb\" target=\"_blank\">HD BrightView LED-backlit</a>&nbsp;cho khả năng hiển thị tuyệt vời, m&agrave;u sắc trung thực, g&oacute;c nh&igrave;n rộng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/177770/hp-15-da0054tu-4me68pa-33397-manhinh.jpg\" onclick=\"return false;\"><img alt=\"Màn hình lớn, sắc nét trên máy tính văn phòng HP 15 da0054TU i3 7020U\" src=\"https://cdn.tgdd.vn/Products/Images/44/177770/hp-15-da0054tu-4me68pa-33397-manhinh.jpg\" /></a></p>\r\n\r\n<h3>TouchPad đa chạm th&ocirc;ng minh</h3>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/multi-touchpad-la-gi-920569\" target=\"_blank\">Multi TouchPad</a>&nbsp;nhận diện nhiều t&aacute;c động c&ugrave;ng l&uacute;c l&ecirc;n TouchPad v&agrave; m&aacute;y t&iacute;nh c&oacute; thể hiểu được c&aacute;c t&aacute;c động n&agrave;y để đưa ra c&aacute;c xử l&yacute; đ&uacute;ng y&ecirc;u cầu.​</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/177770/hp-15-da0054tu-4me68pa-33397-touchpad.jpg\" onclick=\"return false;\"><img alt=\"Touchpad đa dụng trên máy tính văn phòng HP 15 da0054TU i3 7020U\" src=\"https://cdn.tgdd.vn/Products/Images/44/177770/hp-15-da0054tu-4me68pa-33397-touchpad.jpg\" /></a></p>\r\n\r\n<h3>B&agrave;n ph&iacute;m to r&otilde;, độ nảy tốt</h3>\r\n\r\n<p>B&agrave;n ph&iacute;m của<a href=\"https://www.thegioididong.com/laptop?g=hoc-tap-van-phong\" target=\"_blank\">&nbsp;m&aacute;y t&iacute;nh văn ph&ograve;ng&nbsp;</a>HP 15 da0054TU c&oacute; độ nảy tốt, c&aacute;c ph&iacute;m to, r&otilde; dễ d&agrave;ng thao t&aacute;c, phục vụ tốt nhu cầu thường xuy&ecirc;n phải soạn thảo v&agrave; truy nhập dữ liệu cho người d&ugrave;ng như gi&aacute;o vi&ecirc;n, kế to&aacute;n.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/177770/hp-15-da0054tu-4me68pa-33397-banphim.jpg\" onclick=\"return false;\"><img alt=\"Bàn phím độ nảy tốt trên máy tính văn phòng HP 15 da0054TU i3 7020U\" src=\"https://cdn.tgdd.vn/Products/Images/44/177770/hp-15-da0054tu-4me68pa-33397-banphim.jpg\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0),
('C3TI501OW', 3, 'Laptop Dell Inspiron 7373 i5 8250U/8GB/256GB/Win10/Office365/(C3TI501OW)', 26690000, 13.3, 'Intel Core i5 Kabylake Refresh, 8250U, 1.60 GHz', 8, 'Intel® UHD Graphics 620', 0, 256, 'Windows 10 + Office 365 1 năm', 1.6, 3, 'dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office', 'assets/images/laptop/dell-inspiron-C3TI501OW.PNG', 1, '<h2>Đặc điểm nổi bật của Dell Inspiron 7373 i5 8250U/8GB/256GB/Win10/Office365/(C3TI501OW)</h2>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/44/136214/Slider/vi-vn-dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office-tk.jpg\" /></p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/44/136214/Slider/vi-vn-dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office-mn.jpg\" /></p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/44/136214/Slider/vi-vn-dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office-mh.jpg\" /></p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/44/136214/Slider/vi-vn-dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office-ch.jpg\" /></p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/44/136214/Slider/vi-vn-dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office-wd.jpg\" /></p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/44/136214/Slider/vi-vn-dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office-dbp.jpg\" /></p>\r\n\r\n<p><img alt=\"Bộ sản phẩm chuẩn\" src=\"https://cdn.tgdd.vn/Products/Images/44/136214/Kit/dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office-bo-ban-hang-org.jpg\" /></p>\r\n\r\n<p>Bộ sản phẩm chuẩn: D&acirc;y nguồn,Adapter sạc,Th&ugrave;ng m&aacute;y,S&aacute;ch hướng dẫn</p>\r\n\r\n<h2><strong><a href=\"https://www.thegioididong.com/laptop/dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office\" target=\"_blank\">Dell Inspiron 7373 i5 8250U</a>&nbsp;l&agrave; mẫu laptop c&oacute; thiết kế mỏng nhẹ v&agrave; sang trọng với chất liệu nh&ocirc;m nguy&ecirc;n khối thuộc ph&acirc;n kh&uacute;c laptop ph&ugrave; hợp với&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cach-chon-mua-laptop-cao-cap-sang-trong-cho-doanh-1022757\" target=\"_blank\">doanh nh&acirc;n</a>, m&aacute;y được trang bị cấu h&igrave;nh kh&aacute; mạnh cho c&aacute;c nhu cầu l&agrave;m việc, giải tr&iacute;.</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Sử dụng miễn ph&iacute; Office 365 trong 1 năm</h3>\r\n\r\n<p>Bộ&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/office-2019-va-office-356-cap-nhat-thang-102018-1131255\" target=\"_blank\">office 365</a>&nbsp;được t&iacute;ch hợp sẵn, bạn c&oacute; thể sử dụng miễn ph&iacute; 1 năm c&aacute;c ứng dụng văn ph&ograve;ng cần thiết word, excel, powerpoint,... Một bổ sung nhỏ nhưng cần thiết cho c&ocirc;ng việc hằng ng&agrave;y của bạn. Kh&ocirc;ng cần phải lo bị lỗi khi mở file bằng c&aacute;c phần mềm crack.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/162914/dell-inspiron-5570-m5i5238w-office365-33397-office365.jpg\" onclick=\"return false;\"><img alt=\"Office 365 được tích hợp sẵng trên Laptop Dell Inspiron 5570 i5 8250U\" src=\"https://cdn.tgdd.vn/Products/Images/44/162914/dell-inspiron-5570-m5i5238w-office365-33397-office365.jpg\" /></a></p>\r\n\r\n<h3><strong>Thiết kế nhỏ gọn v&agrave; mạnh mẽ</strong></h3>\r\n\r\n<p><a href=\"https://www.thegioididong.com/laptop/dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office\" target=\"_blank\">Dell Inspiron 7373</a>&nbsp;c&oacute; 4 viền bo tr&ograve;n nhẹ v&agrave; những đường cắt kim cương sắc cạnh l&agrave;m tăng vẻ mạnh mẽ v&agrave; lịch l&atilde;m. M&aacute;y được thiết kế bằng vật liệu vỏ nh&ocirc;m nguy&ecirc;n khối, độ mỏng chỉ c&oacute;&nbsp;<strong>15.2 mm</strong>&nbsp;v&agrave; trọng lượng&nbsp;<strong>1.6 kg</strong>, kết hợp khả năng&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/laptop-man-hinh-xoay-360-do-la-gi-959279\" target=\"_blank\">xoay gập 360 độ</a>&nbsp;gi&uacute;p tăng sự linh động, tiện lợi cho người d&ugrave;ng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/136214/dell-inspiron-7373-i5-8250u-c3ti501ow-1.jpg\" onclick=\"return false;\"><img alt=\"Cổng kết nối đa dạng và hiện đại\" src=\"https://cdn.tgdd.vn/Products/Images/44/136214/dell-inspiron-7373-i5-8250u-c3ti501ow-1.jpg\" /></a></p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh cảm ứng cực đ&atilde;</strong></h3>\r\n\r\n<p>Bắt kịp với xu hướng c&ocirc;ng nghệ,&nbsp;<strong>Dell 7373</strong>&nbsp;trang bị cho m&aacute;y m&agrave;n h&igrave;nh&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294\" target=\"_blank\">Full HD</a>&nbsp;cực kỳ sắc n&eacute;t với tấm nền<a href=\"https://www.thegioididong.com/hoi-dap/ips-la-gi-807724\" target=\"_blank\">&nbsp;IPS&nbsp;</a>cho m&agrave;u sắc ch&acirc;n thật, kh&ocirc;ng g&acirc;y ảo rực rỡ hay thiếu chi tiết.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/136214/dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office.gif\" onclick=\"return false;\"><img alt=\"Khả năng gập 360 độ trên Dell Inspiron 7373 i5 8250U\" src=\"https://cdn.tgdd.vn/Products/Images/44/136214/dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office.gif\" /></a></p>\r\n\r\n<p>K&egrave;m với đ&oacute; m&aacute;y trang bị m&agrave;n h&igrave;nh cảm ứng để m&aacute;y hỗ trợ trong c&ocirc;ng việc, do được trang bị chip&nbsp;<strong>Intel thế hệ thứ 8</strong>&nbsp;n&ecirc;n m&aacute;y được t&iacute;ch hợp card đồ họa<a href=\"https://www.thegioididong.com/hoi-dap/intel-hd-graphics-620-co-manh-khong-953533#uhd-620\" target=\"_blank\">&nbsp;UHD Graphics 620</a>&nbsp;gi&uacute;p m&aacute;y xem h&igrave;nh ảnh hay video 4K mượt m&agrave;.</p>\r\n\r\n<h3><strong>Touchpad rộng v&agrave; đa c&aacute;ch sử dụng</strong></h3>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/multi-touchpad-la-gi-920569\" target=\"_blank\">Touchpad th&ocirc;ng minh</a>&nbsp;c&oacute; đầy đủ c&aacute;ch thao t&aacute;c vuốt chạm gi&uacute;p bạn sử dụng thoải m&aacute;i trong qu&aacute; tr&igrave;nh giải tr&iacute;, lướt web.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/136214/dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office-10.jpg\" onclick=\"return false;\"><img alt=\"Touchpad rộng và đa cách sử dụng\" src=\"https://cdn.tgdd.vn/Products/Images/44/136214/dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office-10.jpg\" /></a></p>\r\n\r\n<h3><strong>Bảo mật cao cấp với Windows Hello</strong></h3>\r\n\r\n<p>Được t&iacute;ch hợp camera hồng ngoại hoạt động kết hợp với&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/windows-hello-la-gi-cach-cai-dat-windows-hello-1013813\" target=\"_blank\">Windows Hello</a>&nbsp;c&oacute; sẵn trong&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/chu-de/pc-laptop-macbook/windows-10\" target=\"_blank\">Windows 10</a>&nbsp;&nbsp;bản quyền n&ecirc;n&nbsp;<strong>Dell Inspiron 7373 i5</strong>&nbsp;c&oacute; thể bảo mật bằng nhận diện khu&ocirc;n mặt th&ocirc;ng minh, gi&uacute;p người d&ugrave;ng mở kh&oacute;a m&aacute;y hiện đại hơn v&agrave; kh&ocirc;ng lo m&aacute;y t&iacute;nh bị x&acirc;m nhập.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/136214/dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office-1010.jpg\" onclick=\"return false;\"><img alt=\"Bảo mật cao cấp với Windows Hello\" src=\"https://cdn.tgdd.vn/Products/Images/44/136214/dell-inspiron-7373-i5-8250u-8gb-256gb-win10-office-1010.jpg\" /></a></p>\r\n\r\n<h3><strong>Cổng kết nối đa dạng v&agrave; hiện đại</strong></h3>\r\n\r\n<p>Tuy mỏng nhẹ v&agrave; gọn g&agrave;ng nhưng m&aacute;y vẫn trang bị đầy đủ c&aacute;c cổng kết nối như&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/usb-30-la-gi-926737\" target=\"_blank\">2 x USB 3.0</a>&nbsp;v&agrave;&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/usb-typec-chuan-muc-cong-ket-noi-moi-723760\" target=\"_blank\">Type-C</a>truy xuất dữ liệu tốc độ cao,&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/hdmi-la-gi--590061\" target=\"_blank\">HDMI&nbsp;</a>gi&uacute;p bạn truyền h&igrave;nh ảnh l&ecirc;n m&aacute;y chiếu hay tivi m&agrave;n h&igrave;nh lớn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/136214/dell-inspiron-7373-i5-8250u-c3ti501ow-5-1.jpg\" onclick=\"return false;\"><img alt=\"Cổng kết nối đa dạng và hiện đại\" src=\"https://cdn.tgdd.vn/Products/Images/44/136214/dell-inspiron-7373-i5-8250u-c3ti501ow-5-1.jpg\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0),
('EJ117T', 6, 'Laptop Asus X507UF i3 8130U/4GB/1TB/MX130/Win10 (EJ117T)', 12290000, 15.6, 'Intel Core i3 Coffee Lake, 8130U, 2.20 GHz', 4, 'NVIDIA Geforce MX130, 2GB', 1000, 0, 'Windows 10 Home SL', 1.68, 3, 'asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t', 'assets/images/laptop/asus-x507uf-ej117t.PNG', 2, '<h2>Đặc điểm nổi bật của Asus X507UF i3 8130U/4GB/1TB/MX130/Win10 (EJ117T)</h2>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/44/201930/Slider/vi-vn-asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-4.jpg\" /></p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/44/201930/Slider/vi-vn-asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-6.jpg\" /></p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/44/201930/Slider/vi-vn-asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-11.jpg\" /></p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/44/201930/Slider/vi-vn-asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-13.jpg\" /></p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/44/201930/Slider/vi-vn-asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-9.jpg\" /></p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/44/201930/Slider/vi-vn-asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-1.jpg\" /></p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/44/201930/Slider/vi-vn-asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-15.jpg\" /></p>\r\n\r\n<h2>Hiệu năng ổn định v&agrave; thiết kế linh động l&agrave; những điều&nbsp;<a href=\"https://www.thegioididong.com/laptop/asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t\" target=\"_blank\">laptop Asus X507UF EJ117T</a>&nbsp;mang đến cho người d&ugrave;ng, nhất l&agrave; những ai y&ecirc;u th&iacute;ch sự gọn nhẹ, dễ di chuyển cũng như giải tr&iacute; h&agrave;ng ng&agrave;y như học sinh, sinh vi&ecirc;n v&agrave; nh&acirc;n vi&ecirc;n văn ph&ograve;ng.</h2>\r\n\r\n<h3>Thiết kế linh hoạt, gọn nhẹ</h3>\r\n\r\n<p>Được thiết kế dựa theo ti&ecirc;u ch&iacute; tiện lợi, linh hoạt v&agrave; dễ mang đi,&nbsp;<a href=\"https://www.thegioididong.com/laptop\" target=\"_blank\">Laptop</a>&nbsp;Asus X507UF EJ117T kh&aacute; gọn nhẹ với c&acirc;n nặng chỉ 1.68kg.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/201930/asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-thiet-ke.gif\" onclick=\"return false;\"><img alt=\"Thiết kế của laptop Asus X507UF EJ117T\" src=\"https://cdn.tgdd.vn/Products/Images/44/201930/asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-thiet-ke.gif\" /></a></p>\r\n\r\n<h3>M&agrave;n h&igrave;nh 15.6 inch tr&agrave;n viền, chống ch&oacute;i</h3>\r\n\r\n<p>Với c&ocirc;ng nghệ NanoEdge v&agrave; Anti Glare, m&agrave;n h&igrave;nh của&nbsp;<a href=\"https://www.thegioididong.com/laptop-asus\" target=\"_blank\">laptop Asus</a>&nbsp;X507UF EJ117T c&oacute; viền mỏng hơn v&agrave; cho kh&ocirc;ng gian hiển thị tuyệt vời thậm ch&iacute; dưới &aacute;nh nắng. C&ocirc;ng nghệ tối ưu h&igrave;nh ảnh Asus Splendid v&agrave; ASUS Tru2Life Video gi&uacute;p hiển thị bắt mắt hơn. Chế độ Eye Care bảo vệ mắt khỏi t&aacute;c hại của &aacute;nh s&aacute;ng xanh.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/201930/asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-man-hinh.jpg\" onclick=\"return false;\"><img alt=\"Màn hình lớn trên laptop Asus X507UF EJ117T\" src=\"https://cdn.tgdd.vn/Products/Images/44/201930/asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-man-hinh.jpg\" /></a></p>\r\n\r\n<h3>Cảm biến&nbsp;v&acirc;n tay</h3>\r\n\r\n<p>Tất cả những g&igrave; bạn cần l&agrave;m để mở kh&oacute;a chiếc&nbsp;<a href=\"https://www.thegioididong.com/laptop?g=hoc-tap-van-phong\" target=\"_blank\">laptop văn ph&ograve;ng</a>&nbsp;n&agrave;y l&agrave; thao t&aacute;c qu&eacute;t nhanh v&acirc;n tay. Với chức năng nhận dạng 360 độ, Asus X507UF EJ117T c&oacute; độ ch&iacute;nh x&aacute;c cao khi qu&eacute;t v&acirc;n tay, ngay cả khi ng&oacute;n tay đang ướt.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/201930/asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-van-tay.jpg\" onclick=\"return false;\"><img alt=\"Laptop Asus X507UF EJ117T sở hữu cảm biến vân tay tiện lợi\" src=\"https://cdn.tgdd.vn/Products/Images/44/201930/asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-van-tay.jpg\" /></a></p>\r\n\r\n<h3>&Acirc;m thanh sống động, thỏa m&atilde;n nhu cầu giải tr&iacute;</h3>\r\n\r\n<p>ASUS SonicMaster kết hợp với ASUS AudioWizard mang mang lại trải nghiệm &acirc;m thanh tốt nhất cho người d&ugrave;ng. Với khả năng tối ưu h&oacute;a phần cứng bằng phần mềm, laptop Asus X507UF EJ117T cho ph&eacute;p bạn tự tinh chỉnh &acirc;m thanh hoặc để Asus lo phần việc n&agrave;y.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/201930/asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-am-thanh.jpg\" onclick=\"return false;\"><img alt=\"Laptop Asus X507UF EJ117T sở hữu hệ thống âm thanh chất lượng\" src=\"https://cdn.tgdd.vn/Products/Images/44/201930/asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-am-thanh.jpg\" /></a></p>\r\n\r\n<h3>C&ocirc;ng nghệ tản nhiệt Asus IceCool hiệu quả</h3>\r\n\r\n<p>Một chiếc laptop hoạt động tốt nhất khi n&oacute; ở nhiệt độ th&iacute;ch hợp. Asus IceCool khi thử nghiệm lu&ocirc;n giữ nhiệt độ của những chiếc laptop khoảng 36 độ, gi&uacute;p ch&uacute;ng cải thiện tuổi thọ v&agrave; tăng hiệu suất l&agrave;m việc.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/201930/asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-tan-nhiet.jpg\" onclick=\"return false;\"><img alt=\"Laptop Asus X507UF EJ117T tản nhiệt hiệu quả\" src=\"https://cdn.tgdd.vn/Products/Images/44/201930/asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-tan-nhiet.jpg\" /></a></p>\r\n\r\n<h3>Windows 10 bản quyền</h3>\r\n\r\n<p>Kh&ocirc;ng c&ograve;n lo lắng về việc mua&nbsp;<a href=\"https://www.thegioididong.com/phan-mem/windows-10-home-32-bit-64-bit-all-languages-kw9-0\" target=\"_blank\">Windows 10</a>&nbsp;khi chiếc laptop Asus X507UF EJ117T tại Thế Giới Di Động đ&atilde; được c&agrave;i đặt sẵn Windows 10 bản quyền, hoạt động ổn định v&agrave; an to&agrave;n hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/201930/asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-windows-10-1.jpg\" onclick=\"return false;\"><img alt=\"Laptop Asus X507UF EJ117T cài sẵn Windows 10 bản quyền\" src=\"https://cdn.tgdd.vn/Products/Images/44/201930/asus-x507uf-i3-8130u-4gb-1tb-mx130-win10-ej117t-windows-10-1.jpg\" /></a></p>\r\n', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhanvien`
--

CREATE TABLE `tbl_nhanvien` (
  `id_nhanvien` int(11) NOT NULL,
  `hoten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tendangnhap` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matkhau` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phanquyen` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhaphang`
--

CREATE TABLE `tbl_nhaphang` (
  `id_nhaphang` int(11) NOT NULL,
  `tongtien` float DEFAULT NULL,
  `nhanvien_id` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhaphangchitiet`
--

CREATE TABLE `tbl_nhaphangchitiet` (
  `id_nhaphangchitiet` int(11) NOT NULL,
  `nhaphang_id` int(11) DEFAULT NULL,
  `loaisp` int(11) DEFAULT NULL,
  `sanpham_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_camera`
--
ALTER TABLE `tbl_camera`
  ADD PRIMARY KEY (`id_camera`),
  ADD UNIQUE KEY `uq_url_camera` (`url_camera`),
  ADD KEY `fk_camera_hangsx` (`hangsx_id`);

--
-- Chỉ mục cho bảng `tbl_chitiethd`
--
ALTER TABLE `tbl_chitiethd`
  ADD PRIMARY KEY (`id_chitiethd`),
  ADD KEY `fk_chitiethd_hoadon` (`hoadon_id`);

--
-- Chỉ mục cho bảng `tbl_hangsx`
--
ALTER TABLE `tbl_hangsx`
  ADD PRIMARY KEY (`id_hangsx`);

--
-- Chỉ mục cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD PRIMARY KEY (`id_hoadon`),
  ADD KEY `fk_hoadon_nhanvien` (`nhanvien_id`);

--
-- Chỉ mục cho bảng `tbl_laptop`
--
ALTER TABLE `tbl_laptop`
  ADD PRIMARY KEY (`id_laptop`),
  ADD UNIQUE KEY `uq_url_laptop` (`url_laptop`),
  ADD KEY `fk_laptop_hangsx` (`hangsx_id`);

--
-- Chỉ mục cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  ADD PRIMARY KEY (`id_nhanvien`),
  ADD UNIQUE KEY `uq_tendangnhap` (`tendangnhap`);

--
-- Chỉ mục cho bảng `tbl_nhaphang`
--
ALTER TABLE `tbl_nhaphang`
  ADD PRIMARY KEY (`id_nhaphang`),
  ADD KEY `fk_nhaphang_nhanvien` (`nhanvien_id`);

--
-- Chỉ mục cho bảng `tbl_nhaphangchitiet`
--
ALTER TABLE `tbl_nhaphangchitiet`
  ADD PRIMARY KEY (`id_nhaphangchitiet`),
  ADD KEY `fk_nhaphangchitiet_nhaphang` (`nhaphang_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_chitiethd`
--
ALTER TABLE `tbl_chitiethd`
  MODIFY `id_chitiethd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_hangsx`
--
ALTER TABLE `tbl_hangsx`
  MODIFY `id_hangsx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  MODIFY `id_nhanvien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_nhaphang`
--
ALTER TABLE `tbl_nhaphang`
  MODIFY `id_nhaphang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_nhaphangchitiet`
--
ALTER TABLE `tbl_nhaphangchitiet`
  MODIFY `id_nhaphangchitiet` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_camera`
--
ALTER TABLE `tbl_camera`
  ADD CONSTRAINT `fk_camera_hangsx` FOREIGN KEY (`hangsx_id`) REFERENCES `tbl_hangsx` (`id_hangsx`);

--
-- Các ràng buộc cho bảng `tbl_chitiethd`
--
ALTER TABLE `tbl_chitiethd`
  ADD CONSTRAINT `fk_chitiethd_hoadon` FOREIGN KEY (`hoadon_id`) REFERENCES `tbl_hoadon` (`id_hoadon`);

--
-- Các ràng buộc cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD CONSTRAINT `fk_hoadon_nhanvien` FOREIGN KEY (`nhanvien_id`) REFERENCES `tbl_nhanvien` (`id_nhanvien`);

--
-- Các ràng buộc cho bảng `tbl_laptop`
--
ALTER TABLE `tbl_laptop`
  ADD CONSTRAINT `fk_laptop_hangsx` FOREIGN KEY (`hangsx_id`) REFERENCES `tbl_hangsx` (`id_hangsx`);

--
-- Các ràng buộc cho bảng `tbl_nhaphang`
--
ALTER TABLE `tbl_nhaphang`
  ADD CONSTRAINT `fk_nhaphang_nhanvien` FOREIGN KEY (`nhanvien_id`) REFERENCES `tbl_nhanvien` (`id_nhanvien`);

--
-- Các ràng buộc cho bảng `tbl_nhaphangchitiet`
--
ALTER TABLE `tbl_nhaphangchitiet`
  ADD CONSTRAINT `fk_nhaphangchitiet_nhaphang` FOREIGN KEY (`nhaphang_id`) REFERENCES `tbl_nhaphang` (`id_nhaphang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
