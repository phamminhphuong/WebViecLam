-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 28, 2018 lúc 09:56 AM
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
-- Cơ sở dữ liệu: `webvieclam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chungchi`
--

CREATE TABLE `chungchi` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenChungChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiCap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chungchi`
--

INSERT INTO `chungchi` (`id`, `TenChungChi`, `NoiCap`, `created_at`, `updated_at`) VALUES
(2, 'Toic 900', '', NULL, NULL),
(3, 'Chứng chỉ tiếng nhật', '', NULL, NULL),
(4, 'Chứng chỉ an toàn lao động', '', NULL, NULL),
(5, 'Chứng chỉ java', '', NULL, NULL),
(6, 'Chứng chỉ giám sát thi công', '', NULL, NULL),
(7, 'Chứng chỉ buôn bán bất động sản', '', NULL, NULL),
(8, 'Chứng chỉ phẫu thuật thẩm mĩ', '', NULL, NULL),
(9, 'Chứng chỉ kinh doanh trang sức hạng nhất', '', NULL, NULL),
(10, 'Chứng chỉ phiên dịch N2', '', NULL, NULL),
(11, 'Không có', '', '2018-04-28 07:28:22', '2018-04-28 07:28:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyennganh`
--

CREATE TABLE `chuyennganh` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenNganh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyennganh`
--

INSERT INTO `chuyennganh` (`id`, `TenNganh`, `created_at`, `updated_at`) VALUES
(1, 'Công nghệ thông tin', '2018-04-27 17:47:11', '2018-04-27 17:47:11'),
(2, 'Kinh doanh', NULL, NULL),
(3, 'Bán hàng', NULL, NULL),
(4, 'Chăm sóc khách hàng', NULL, NULL),
(5, 'Lao động phổ thông', NULL, NULL),
(6, 'Tài chính/Kế toán/Kiểm toán', NULL, NULL),
(7, 'Hành chính/Thư kí/Trợ lý', NULL, NULL),
(8, 'Sinh viên/Mới tốt nghiệp/Thực tập', NULL, NULL),
(9, 'Cơ khí/Kĩ thuật/Ứng dụng', NULL, NULL),
(10, 'Báo chí/Biên tập viên', NULL, NULL),
(11, 'Bất động sản', NULL, NULL),
(12, 'Biên dịch/Phiên dịch', NULL, NULL),
(13, 'Bưu chính viễn thông', NULL, NULL),
(14, 'Công nghệ thông tin', NULL, NULL),
(15, 'Dầu khí/Địa chất', NULL, NULL),
(16, 'Điện/Điện tử/Điện lạnh', NULL, NULL),
(17, 'Du lịch/Nhà hàng/Khách sạn', NULL, NULL),
(18, 'Giả trí/Vui chơi', NULL, NULL),
(19, 'Giao thông/Vận tải/Thủy lợi/Cầu đường', NULL, NULL),
(20, 'Kiến trúc/Nội thất', NULL, NULL),
(21, 'Mỹ phẩm/Thời trang', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hosoxinviec`
--

CREATE TABLE `hosoxinviec` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaTaiKhoan` int(10) UNSIGNED NOT NULL,
  `MaNganh` int(10) UNSIGNED NOT NULL,
  `MaTrinhDo` int(10) UNSIGNED NOT NULL,
  `MaCC` int(10) UNSIGNED NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TinhTrangHonNhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LuongKhoiDiem` double(8,2) NOT NULL,
  `NoiLamViec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KinhNghiem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NguyenVongLamViec` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kynangxinviec`
--

CREATE TABLE `kynangxinviec` (
  `id` int(10) UNSIGNED NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaNTD` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kynangxinviec`
--

INSERT INTO `kynangxinviec` (`id`, `TieuDe`, `NoiDung`, `HinhAnh`, `MaNTD`, `created_at`, `updated_at`) VALUES
(1, 'Nhân viên cần gì', '<p>nếu kh&ocirc;ng phải l&agrave; em th&igrave; anh sống sao</p>', 'ag2jzbJsAS_luuDiecPhi.png', 1, '2018-04-27 18:20:45', '2018-04-27 18:20:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitaikhoan`
--

CREATE TABLE `loaitaikhoan` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenLoaiTaiKhoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`id`, `TenLoaiTaiKhoan`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'Nhà tuyển dụng', NULL, NULL),
(3, 'Người tìm việc', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_11_000000_create_loaitai_khoan_table', 1),
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2018_04_09_221359__create__chuyen_nganh_table', 1),
(16, '2018_04_09_221504__create__trinh_do_table', 1),
(17, '2018_04_09_221728__create__chung_chi_table', 1),
(18, '2018_04_09_222250__create__nha_tuyen_dung_table', 1),
(19, '2018_04_09_223606__create__phieu_dang_tuyen_table', 1),
(20, '2018_04_09_224215__create__ho_so_xin_viec_table', 1),
(21, '2018_04_09_233124__create__ky_nang_xin_viec_table', 1),
(22, '2018_04_09_233125__create__quang_cao_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhatuyendung`
--

CREATE TABLE `nhatuyendung` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenNTD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChiWeb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiThieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaTaiKhoan` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhatuyendung`
--

INSERT INTO `nhatuyendung` (`id`, `TenNTD`, `DiaChi`, `DienThoai`, `DiaChiWeb`, `GioiThieu`, `HinhAnh`, `MaTaiKhoan`, `created_at`, `updated_at`) VALUES
(1, 'Tập đoàn viễn thông quân đội', 'Nông Sơn', '12345678910', 'www.com', '<p>L&agrave; c&ocirc;ng ty truyền th&ocirc;ng qu&acirc;n đội</p>', 'JbsZV1lAJN_anh1.jpg', 16, '2018-04-27 18:07:00', '2018-04-28 06:54:52'),
(4, 'Công ty dệt may Sông Hồng', 'Đông Giang-Quảng Nam', '123456789', 'www.songhong.com', '<p>L&agrave; c&ocirc;ng ty dệt may</p>', 'iQ51Qu2SuP_anh9.jpg', 18, NULL, '2018-04-28 06:56:31'),
(5, 'Công ty bánh kẹo Hải Hà', 'Nam Giang-Quảng Nam', '1234567891', 'www.haiha.com', '<p>L&agrave; c&ocirc;ng ty sản xuất b&aacute;nh kẹo h&agrave;ng đầu</p>', 'TuAZWAK1Go_anh17.jpg', 21, NULL, '2018-04-28 06:57:20'),
(6, 'Công ty hóa chát ATp', 'Đông Giang-Quảng Nam', '123456789', 'www.hoachat.com', '<p>L&agrave; c&ocirc;ng ty h&oacute;a chất</p>', 'g30uVHxSbq_anh18.jpg', 23, NULL, '2018-04-28 06:58:21'),
(7, 'Công ty điện lực VND', 'Hiệp Đức-Quảng Nam', '123345656676', 'www.VND.com', '<p>l&agrave; c&ocirc;ng ty ph&acirc;n phối điện to&agrave;n quốc</p>', 'qABvnLME5e_anh15.jpg', 35, NULL, '2018-04-28 06:58:35'),
(8, 'Ngân hàng VietTinBank', 'Bắc Trà Mi-Quảng Nam', '1234567890', 'www.viettinback.com', '<p>L&agrave; ng&acirc;n h&agrave;ng việt nam</p>', 'RTG19uxa77_anh16.jpg', 25, NULL, '2018-04-28 06:58:58'),
(9, 'Công ty gang thép Thái Nguyên', 'Phước Sơn-Quảng Nam', '123456789', 'www.thepthainguyen.com', '<p>C&ocirc;ng ty chuy&ecirc;n sản xu&aacute;t v&agrave; ph&acirc;n phối th&eacute;p</p>', 'ob3I5F2cvO_anh19.jpg', 20, NULL, '2018-04-28 06:59:45'),
(10, 'Công ty sản xuất thức ăn gia súc Nông Hữu', 'Đại Lộc-Quảng Nam', '1234567890', 'www.thucan.com', '<p>L&agrave; c&ocirc;ng ty sản xuất thức ăn cho gia s&uacute;c</p>', '2q1FpISHlt_anh5.jpg', 22, NULL, '2018-04-28 07:00:10'),
(11, 'Công ty khai thác than Hồng Hưng', 'Nam Trà Mi-Quảng nam', '01234567891', 'www.honghung.com', '<p>L&agrave; c&ocirc;ng ty khai th&aacute;c than kho&aacute;ng sản</p>', 'chBtd6_anh20.jpg', 32, '2018-04-28 07:02:27', '2018-04-28 07:02:27'),
(12, 'Công ty đồ gỗ Minh Anh', 'Nam Giang-Quảng Nam', '01234567891', 'www.minhanh.com', '<p>L&agrave; c&ocirc;ng ty sản xuất đồ gỗ gia dụng</p>', 'Fq1DzJ_anh21.jpg', 19, '2018-04-28 07:04:59', '2018-04-28 07:04:59'),
(13, 'Công ty dược phẩm Phúc Vinh', 'Tây Giang-Quảng Nam', '01234567891', 'www.phucvinh.com', '<p>L&agrave; c&ocirc;ng ty sản xuất dược phẩm,&nbsp;</p>', 'CjPfbf_anh22.jpg', 17, '2018-04-28 07:07:06', '2018-04-28 07:07:06'),
(14, 'Công ty viễn thông VienThong', 'Tiên Phước-Quảng Nam', '01234567891', 'www.vienthong.com', '<p>L&agrave; c&ocirc;ng ty truyền th&ocirc;ng</p>', 'Bhm1c6_anh24.jpg', 16, '2018-04-28 07:10:52', '2018-04-28 07:10:52'),
(15, 'Công ty dệt may Hải Yến', 'Đại lộc-Quảng Nam', '01234567891', 'www.haiyen.com', '<p>L&agrave; c&ocirc;ng ty dệt may cung cấp c&aacute;c mặt h&agrave;ng qu&agrave;n &aacute;o gi&agrave;y da</p>', 'fX5oZk_anh25.jpg', 31, '2018-04-28 07:12:57', '2018-04-28 07:12:57'),
(16, 'Công ty FPT', 'Nông Sơn-Quảng Nam', '01234567891', 'www.fpt.com', '<p>L&agrave; c&ocirc;ng ty c&ocirc;ng nghệ th&ocirc;ng tin</p>', 'gPR5cx_anh26.png', 38, '2018-04-28 07:17:24', '2018-04-28 07:17:24'),
(17, 'Khách sạn Tình Ái', 'Tây Giang-Quảng Nam', '01234567891', 'www.tinhai.com', '<p>C&ocirc;ng ty kinh doanh tr&ecirc;n lĩnh vực nh&agrave; h&agrave;ng kh&aacute;c sạn</p>', 'pWExjb_anh27.jpg', 40, '2018-04-28 07:19:16', '2018-04-28 07:19:16'),
(18, 'Công ty cổ phần VCCORP', 'Bắc Trà Mi-Quảng Nam', '01234567891', 'www.vccorp', '<p>L&agrave; c&ocirc;ng ty truyền th&ocirc;ng lớn nhất nước</p>', 'JMndFf_anh28.jpg', 39, '2018-04-28 07:20:57', '2018-04-28 07:20:57'),
(19, 'Công ty bảo vệ Chiêu Tài', 'Nam Giang-Quảng Nam', '01234567891', 'www.chieuTai.com', '<p>L&agrave; c&ocirc;ng ty chuy&ecirc;n cung cấp bảo vệ tốt nhất</p>', 'uYPIyJ_anh3.jpg', 37, '2018-04-28 07:43:02', '2018-04-28 07:43:02'),
(20, 'Công ty xây dựng Hải Hà', 'Đông Giang-Quảng Nam', '01234567891', 'www.donggiang.com', '<p>L&agrave; c&ocirc;ng ty x&acirc;y dựng c&aacute;c c&ocirc;ng tr&igrave;nh kiến tr&uacute;c lớn</p>', 'QwBeQk_anh7.jpg', 41, '2018-04-28 07:47:47', '2018-04-28 07:47:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieudangtuyen`
--

CREATE TABLE `phieudangtuyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaNTD` int(10) UNSIGNED NOT NULL,
  `MaNganh` int(10) UNSIGNED NOT NULL,
  `MaTrinhDo` int(10) UNSIGNED NOT NULL,
  `MaChungChi` int(10) UNSIGNED NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ViTriTuyenDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTaCV` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThoiHanNopHoSo` date NOT NULL,
  `SoLuongTuyenDung` int(11) NOT NULL,
  `NoiLamViec` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `YeuCauKinhNghiem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `LuongKhoiDiem` double(8,2) NOT NULL,
  `Hot` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieudangtuyen`
--

INSERT INTO `phieudangtuyen` (`id`, `MaNTD`, `MaNganh`, `MaTrinhDo`, `MaChungChi`, `TieuDe`, `ViTriTuyenDung`, `MoTaCV`, `ThoiHanNopHoSo`, `SoLuongTuyenDung`, `NoiLamViec`, `YeuCauKinhNghiem`, `LuongKhoiDiem`, `Hot`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 2, 'Đi Làm Ngay', 'Kế Toán Kho', '<p>- Kiểm k&ecirc;, đối chiếu h&agrave;ng h&oacute;a nhập - xuất trong kho<br />\r\n- Nắm bắt được số lượng h&agrave;ng trong kho theo từng loại<br />\r\n- Điều phối nhập h&agrave;ng, xuất h&agrave;ng cho kh&aacute;ch theo đơn h&agrave;ng<br />\r\n- Kiểm tra c&aacute;c chứng từ y&ecirc;u cầu nhập / xuất h&agrave;ng theo đ&uacute;ng quy định.<br />\r\n- Theo d&otilde;i h&agrave;ng tồn kho tối thiểu (đảm bảo định mức tồn kho ph&ugrave; hợp theo biến động,...)<br />\r\n- Thực hiện thủ tục đặt h&agrave;ng của kho (lập phiếu đề xuất mua h&agrave;ng, thủ tục mua h&agrave;ng, theo d&otilde;i nhập h&agrave;ng,...)<br />\r\n- Sắp xếp h&agrave;ng h&oacute;a trong kho tr&aacute;nh bị ướt, đổ vỡ&hellip;<br />\r\n- Chịu tr&aacute;ch nhiệm về h&agrave;ng h&oacute;a trong kho</p>', '2018-04-19', 3, 'Nam Trà Mi-Quảng Nam', 'Dưới 1 năm', 5.00, 1, '2018-04-28 07:24:47', '2018-04-28 07:24:47'),
(2, 17, 1, 1, 2, 'Tuyển nhân viên lễ tân', 'Nhân Viên Lễ Tân', '<p>- Thực hiện c&aacute;c c&ocirc;ng việc check in, check out cho kh&aacute;ch<br />\r\n- Hỗ trợ v&agrave; tư vấn c&aacute;c dịch vụ của kh&aacute;ch sạn cho kh&aacute;ch&nbsp;<br />\r\n- Đ&oacute;n tiếp kh&aacute;ch, phối hợp nh&acirc;n vi&ecirc;n buồng ph&ograve;ng bố tr&iacute; ph&ograve;ng cho kh&aacute;ch.<br />\r\n- Sử dụng phần mềm kh&aacute;ch sạn trong việc&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-quan-ly-dieu-hanh-c44.html\">quản l&yacute;</a>&nbsp;kh&aacute;ch ( sẽ được traning)<br />\r\n- Ca S&aacute;ng 6h30-14h, ca Chiều 14h-22h</p>\r\n\r\n<p>&nbsp;</p>', '2018-04-27', 10, 'Đông Giang-Quảng Nam', 'Chưa có kinh nghiệm', 6.00, 1, '2018-04-28 07:27:17', '2018-04-28 07:27:17'),
(3, 5, 2, 1, 11, 'Tuyên nhân viên kinh doanh', 'Nhân Viên Kinh Doanh', '<p>- T&igrave;m kiếm c&aacute;c kh&aacute;ch h&agrave;ng l&agrave; c&aacute;c doanh nghiệp, chủ kinh doanh.<br />\r\n- Tư vấn v&agrave; thuyết phục họ tham gia hợp t&aacute;c kinh doanh tr&ecirc;n trang Vatgia.com v&agrave; sử dụng c&aacute;c sản phẩm - dịch vụ của VNP Group.<br />\r\n- Hướng dẫn, chăm s&oacute;c, hỗ trợ kh&aacute;ch h&agrave;ng trong qu&aacute; tr&igrave;nh sử dụng sản phẩm - dịch vụ.<br />\r\n- Tư vấn cho kh&aacute;ch h&agrave;ng c&aacute;c giải ph&aacute;p kinh doanh, marketing để kh&aacute;ch h&agrave;ng đạt doanh thu tối đa.</p>', '2018-04-27', 5, 'Hiệp ĐỨc - Quảng Nam', '- Nam nữ từ 21 - 23 tuổi - Có xe máy và máy tính cá nhân - Làm việc full-time (Yêu cầu bắt buộc)', 10.00, 1, '2018-04-28 07:30:28', '2018-04-28 07:30:28'),
(4, 7, 4, 1, 10, 'Tuyển nhân viên', 'Nữ Telesale Làm Việc Tại Văn Phòng', '<p>- T&igrave;m kiếm KH c&oacute; nhu cầu tuyển dụng<br />\r\n- Gọi điện li&ecirc;n hệ t&igrave;m hiểu th&ocirc;ng tin v&agrave; tư vấn, thuyết phục Kh&aacute;ch h&agrave;ng sử dụng dịch vụ đăng tuyển&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-nhan-su-c40.html\">nh&acirc;n sự</a>&nbsp;do c&ocirc;ng ty cung cấp.<br />\r\n-&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-cham-soc-khach-hang-c21.html\">Chăm s&oacute;c kh&aacute;ch h&agrave;ng</a>&nbsp;sử dụng dịch vụ, hỗ trợ giải đ&aacute;p những thắc mắc của kh&aacute;ch h&agrave;ng qua email, điện thoại.</p>', '2018-04-18', 2, 'Bắc Trà Mi-Quảng Nam', '- Trình độ Cao đẳng trở lên - Có kinh nghiệm telesales 1 năm trở lên, kỹ năng tư vấn thuyết phục - Giao tiếp tốt, tiếp thu nhanh, vui vẻ và tích cực - Chịu được áp lực công việc với cường độ cao - Chăm chỉ, cầu tiến, yêu thích kiếm tiềm - Có laptop cá nhân', 15.00, 1, '2018-04-28 07:32:48', '2018-04-28 07:32:48'),
(5, 9, 8, 4, 2, 'Tuyển nhân viên đi làm ngay', 'Kế Toán Tổng Hợp', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>&bull; Theo d&otilde;i thực tiến độ hiện hợp đồng gia c&ocirc;ng cho kh&aacute;ch h&agrave;ng;<br />\r\n			&bull; Theo d&otilde;i nhập xuất tồn kho vật tư, nguy&ecirc;n liệu;<br />\r\n			&bull; Thực hiện c&aacute;c b&aacute;o c&aacute;o quản trị định kỳ, b&aacute;o c&aacute;o thuế, b&aacute;o c&aacute;o&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-tai-chinh-ke-toan-kiem-toan-c47.html\">t&agrave;i ch&iacute;nh</a>;<br />\r\n			&bull; Thực hiện quản l&yacute;, lưu trữ sổ s&aacute;ch theo luật kế to&aacute;n v&agrave; quy định của C&ocirc;ng ty;<br />\r\n			&bull; Thực hiện c&aacute;c c&ocirc;ng việc kh&aacute;c theo sự ph&acirc;n c&ocirc;ng của Gi&aacute;m đốc</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-04-12', 6, 'Tiên Phước-Quảng Nam', '- Sử dụng thành thạo tin học văn phòng (Word, Exel, internet), biết sử dụng phần mềm kế toán; - Thẳng thắn, trung thực, giao tiếp tốt; - Làm việc ổn định lâu dài; - Ưu tiên các ứng viên Có kinh nghiệm làm trong doanh nghiệp sản xuất cơ khí , ở khu vực quận Hoài Đức hoặc lân cận; - Chuẩn bị đầy đủ hồ sơ, liên hệ nộp trực tiếp và tìm hiểu thêm thông tin tại văn phòng Công ty.', 4.00, 1, '2018-04-28 07:35:05', '2018-04-28 07:35:05'),
(6, 16, 1, 1, 5, 'Nhân Viên Kỹ Thuật IT Cho Showroom Sắp Khai Trương', 'Nhân Viên Kỹ Thuật', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>- C&agrave;i đặt, lắp r&aacute;p, kiểm tra sản phẩm CNTT tại showroom<br />\r\n			- Tư vấn, hỗ trợ cho kh&aacute;ch h&agrave;ng về kỹ thuật v&agrave; chức năng của sản phẩm.<br />\r\n			- Tiếp nhận v&agrave; xử l&yacute; c&aacute;c trường hợp bảo h&agrave;nh li&ecirc;n quan đến phần mềm sản phẩm...<br />\r\n			- Hỗ trợ nh&acirc;n vi&ecirc;n&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-ban-hang-c10.html\">b&aacute;n h&agrave;ng</a>&nbsp;về kỹ thuật.<br />\r\n			- Thời gian l&agrave;m việc theo ca xoay: 8h30 - 17h30; 12h30-21h30 (1 tuần Off 1 ng&agrave;y)<br />\r\n			- Chi tiết c&ocirc;ng việc sẽ trao đổi cụ thể trong qu&aacute; tr&igrave;nh phỏng vấn</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-04-15', 3, 'Nông Sơn-Quảng Nam', '- Nam, tuổi từ 20 – 35. - Ưu tiên tốt nghiệp trường Nghề, Trung cấp trở lên chuyên ngành CNTT. - Hoặc có kiến thức về sản phẩm CNTT, am hiểu các hệ điều hành điện thoại, laptop và các thiết bị IT khác - Yêu thích công nghệ, ham học hỏi, chịu khó tìm tòi cập nhật kiến thức công nghệ mới. - Ngoại hình ưa nhìn, giọng nói rõ ràng, dễ nghe. *Ứng tuyển nhanh tại : https://goo.gl/forms/xoERkHv9u1VZ4vP43 (copy link và dán vào trình duyệt của bạn)', 12.00, 1, '2018-04-28 07:37:22', '2018-04-28 07:37:22'),
(7, 7, 1, 1, 4, 'Tuyển kỹ sư điện', 'Kỹ Sư Cơ Điện Tử / Kỹ Sư Tự Động Hóa', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>- Thực hiện&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-thiet-ke-my-thuat-c49.html\">thiết kế</a>&nbsp;m&aacute;y phụ trợ ngh&agrave;nh in (C&oacute; hướng dẫn)<br />\r\n			- Thực hiện việc đấu nối hệ thống điện (Được hướng dẫn)<br />\r\n			- Thực hiện việc lắp đặt m&aacute;y v&agrave; hướng dẫn sử dụng cho kh&aacute;ch h&agrave;n</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-04-27', 0, 'Đại Lộc', '- Tốt nghiệp trung cấp, cao đẳng. - Kinh nghiệm yêu cầu: Tối thiểu 1 năm trở lên - Nắm rõ nguyên lý điện Công nghiệp. - Nắm và hiểu rõ về PLC và điều khiển tự động - Cần cù/chịu khó và ham học hỏi. - Sử dụng thành thạo phần mềm solid word và các phần mềm thiết kế cơ khí - Công việc sẽ trao đổi cụ thể khi phỏng vấn.', 8.00, 1, '2018-04-28 07:38:55', '2018-04-28 07:38:55'),
(8, 8, 6, 1, 10, 'Chuyên Viên Khách Hàng Doanh Nghiệp', 'Chuyên Viên Khách Hàng Doanh Nghiệp', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>- B&aacute;n c&aacute;c sản phẩm v&agrave; dịch vụ d&agrave;nh cho kh&aacute;ch h&agrave;ng doanh nghiệp (KHDN) để đạt được c&aacute;c chỉ ti&ecirc;u c&aacute; nh&acirc;n v&agrave; mục ti&ecirc;u kinh doanh do Trưởng nh&oacute;m/Gi&aacute;m đốc KHDN giao.<br />\r\n			- X&acirc;y dựng c&aacute;c đầu mối Kh&aacute;ch h&agrave;ng tiềm năng cần c&oacute; để ho&agrave;n th&agrave;nh mục ti&ecirc;u doanh số h&agrave;ng th&aacute;ng.&nbsp;<br />\r\n			- Triển khai c&aacute;c hoạt động b&aacute;n h&agrave;ng ra b&ecirc;n ngo&agrave;i h&agrave;ng ng&agrave;y: tiến h&agrave;nh gọi điện cho c&aacute;c KH mới v&agrave; KH cũ, đặt lịch hẹn b&aacute;n h&agrave;ng v&agrave; giới thiệu sản phẩm, gặp mặt KH để b&aacute;n h&agrave;ng, chốt b&aacute;n h&agrave;ng với KH&hellip;<br />\r\n			- Tiếp nhận,&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-tham-dinh-giam-dinh-quan-ly-chat-luong-c43.html\">thẩm định</a>&nbsp;v&agrave; ho&agrave;n tất hồ sơ vay của kh&aacute;ch h&agrave;ng, thực hiện c&aacute;c thủ tục giải ng&acirc;n cho kh&aacute;ch h&agrave;ng<br />\r\n			- Theo d&otilde;i v&agrave; thường xuy&ecirc;n kiểm tra hoạt động kinh doanh v&agrave; việc trả nợ của kh&aacute;ch h&agrave;ng để c&oacute; biện ph&aacute;p kịp thời.<br />\r\n			- Hợp t&aacute;c b&aacute;n ch&eacute;o sản phẩm&nbsp;<br />\r\n			- Thực hiện c&aacute;c c&ocirc;ng việc theo sự ph&acirc;n c&ocirc;ng của Trưởng nh&oacute;m/Gi&aacute;m đốc KHDN</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-04-19', 2, 'Đại Lộc-Quảng Nam', '- Tốt nghiệp đại học chuyên ngành Kinh tế, tài chính, ngân hàng hoặc tương đương  - Có tối thiểu 01 năm kinh nghiệm làm tín dụng cá nhân/ doanh nghiệp tại các Ngân hàng  - Ưu tiên ứng viên có kinh nghiệm làm việc tại phòng tài chính kế toán ở các doanh nghiệp. - Có khả năng tạo dựng quan hệ tốt với Khách hàng, kỹ năng bán hàng và thuyết phục và giao tiếp tốt - Xử lý tình huống và Khả năng làm việc độc lập, phối hợp làm việc nhóm tốt.  - Tinh thần trách nhiệm cao trong công việc, có khả năng soạn thảo tốt.  -Năng động, tôn trọng đạo đức nghề nghiệp', 5.00, 1, '2018-04-28 07:40:52', '2018-04-28 07:40:52'),
(9, 19, 5, 2, 11, 'Tuyển nhân viên bảo vệ', 'Nhân viên bảo vệ', '<p><a href=\"http://baovethaiduong.vn/\">Cong ty dich vu bao ve</a>&nbsp;Th&aacute;i Dương rất mong muốn trở th&agrave;nh đối t&aacute;c tin cậy v&agrave; l&acirc;u d&agrave;i với Qu&yacute; kh&aacute;ch về nguồn cung ứng dịch vụ bảo vệ - vệ sỹ nhanh, chất lượng v&agrave; hiệu quả cao nhất. Ch&uacute;ng t&ocirc;i rất hoan ngh&ecirc;nh v&agrave; sẵn s&agrave;ng tiếp nhận mọi &yacute; kiến của kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p><a href=\"http://baovethaiduong.vn/\">Dịch vụ bảo vệ</a>&nbsp;Th&aacute;i Dương c&oacute; m&ocirc;̣t lực lượng bảo vệ kh&ocirc;ng những được đ&agrave;o tạo nghiệp vụ từ cơ bản đến n&acirc;ng cao từ những chuy&ecirc;n gia h&agrave;ng đầu trong ngh&agrave;nh bảo vệ m&agrave; c&ograve;n được huấn luyện v&otilde; thuật bởi c&aacute;c v&otilde; sư gi&agrave;u kinh nghiệm của c&ocirc;ng ty.</p>\r\n\r\n<p>&nbsp;Kh&ocirc;ng phải đợi đến l&uacute;c xảy ra vụ cướp t&aacute;o bạo tại c&aacute;c tiệm v&agrave;ng, c&ocirc;ng t&aacute;c an ninh mới được nhắc đến trong kinh doanh v&agrave;ng. Thời gian qua, nhiều vụ cướp t&aacute;o tợn tr&ecirc;n cả nước đ&atilde; cho thấy, bọn cướp hết sức liều lĩnh.&nbsp;<a href=\"http://baovethaiduong.vn/\">C&ocirc;ng ty bảo vệ</a>&nbsp;của ch&uacute;ng t&ocirc;i sẽ cung cấp [Để xem link. ] tiệm v&agrave;ng, sẽ giải đ&aacute;p những lo &acirc;u cho qu&yacute; kh&aacute;ch.&nbsp;</p>', '2018-04-29', 9, 'Nông Sơn-Quảng Nam', 'Thân hình khỏe', 7.00, 1, '2018-04-28 07:45:17', '2018-04-28 07:45:17'),
(10, 20, 20, 1, 4, 'Nhân Viên Thiết Kế Kiến Trúc Nội Thất', 'Nhân Viên Thiết Kế Kiến Trúc Nội Thất', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>- Khảo s&aacute;t hiện trạng kh&ocirc;ng gian nội thất.<br />\r\n			- Đề xuất &yacute; tưởng ph&ugrave; hợp cho từng kh&ocirc;ng gian v&agrave; y&ecirc;u cầu của kh&aacute;ch h&agrave;ng<br />\r\n			- Triển khai bản vẽ thiết kế 3D v&agrave; b&oacute;c t&aacute;ch bản vẽ kỹ thuật&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-san-xuat-van-hanh-san-xuat-c46.html\">sản xuất</a>&nbsp;đồ gỗ<br />\r\n			- Tư vấn cho kh&aacute;ch h&agrave;ng về nguy&ecirc;n vật liệu sản xuất cho ph&ugrave; hợp với thiết kế<br />\r\n			- Triển khai bản vẽ cho xưởng sản xuất đồ gỗ<br />\r\n			- B&oacute;c t&aacute;ch gi&aacute;m s&aacute;t c&ocirc;ng tr&igrave;nh phần ho&agrave;n thiện.<br />\r\n			- V&agrave; một số y&ecirc;u cầu kh&aacute;c sẽ trao đổi th&ecirc;m khi phỏng vấn<br />\r\n			- Thời gian l&agrave;m việc: 8h/ng&agrave;y ( từ 8h30-18h) Từ thứ 2 &ndash; s&aacute;ng thứ 7</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-04-29', 3, 'Phước Sơn-Quảng nam', '- Trình độ: Tốt nghiệp đại học, cao đẳng chuyên ngành thiết kế, nội thất, kiến trúc hoặc ngành liên quan. - Kinh nghiệm: 2 năm trong lĩnh vực thiết kế trang trí nội thất . - Có kinh nghiệm làm việc trong lĩnh vực thiết kế thi công hoàn thiện nội thất và đóng đồ gỗ - Nắm vững chuyên môn, Sử dụng thành thạo các phần mềm đồ hoạ (3Dmax, Sketch -Up Photoshop, Autocad …) - Có khả năng diễn họa tốt, hiểu biết về các phong cách nội thất. - Có kinh nghiệm thiết kế đối với các công trình dân dụng (được đào tạo thêm để phát triển bản thân). - Có khả năng giao tiếp tốt, ham học hỏi, có niềm đam mê và tinh thần làm việc nhiệt tình. - Quản lý thời gian, phân chia công việc tốt', 5.00, 1, '2018-04-28 07:49:05', '2018-04-28 07:49:05'),
(11, 4, 21, 6, 4, 'Nhân Viên Bán Hàng Tại Nhà Sách Trí Tuệ', 'Nhân Viên Bán Hàng Tại Nhà Sách Trí Tuệ', '<p>- Phụ tr&aacute;ch&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-ban-hang-c10.html\">b&aacute;n h&agrave;ng</a>&nbsp;tại khu vực chịu tr&aacute;ch nhiệm.&nbsp;<br />\r\n- Giới thiệu, tư vấn th&ocirc;ng tin sản phẩm cho kh&aacute;ch h&agrave;ng.<br />\r\n- B&aacute;o c&aacute;o t&igrave;nh trạng tồn kho của c&aacute;c sản phẩm tại khu vực phụ tr&aacute;ch.</p>', '2018-04-19', 4, 'Đông Giang-Quảng Nam', '- Giao tiếp tiếng Anh tốt là một lợi thế. - Yêu thích sách và có hiểu biết nhất định về các loại sách báo. - Nhanh nhẹn, thân thiện, giao tiếp tốt. - Chăm chỉ, trung thực và linh hoạt trong công việc. - Ưu tiên ứng viên có kinh nghiệm trong công việc bán hàng và hiểu kỹ năng chăm sóc khách hàng.', 8.00, 1, '2018-04-28 07:51:30', '2018-04-28 07:51:30'),
(12, 13, 3, 1, 4, 'Nhân viên bán hàng', 'Nhân viên bán hàng', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>-&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-ban-hang-c10.html\">B&aacute;n h&agrave;ng</a>&nbsp;v&agrave; tư vấn cho kh&aacute;ch h&agrave;ng sản phẩm ph&ugrave; hợp&nbsp;<br />\r\n			- Trưng b&agrave;y sắp xếp h&agrave;ng h&oacute;a, giữ g&igrave;n vệ sinh cửa h&agrave;ng, kiểm k&ecirc; h&agrave;ng h&oacute;a theo định kỳ<br />\r\n			- C&ocirc;ng việc cụ thể sẽ trao đổi khi phỏng vấn<br />\r\n			- L&agrave;m theo ca hoặc cả ng&agrave;y<br />\r\n			ỨNG VI&Ecirc;N GỌI TRỰC TIẾP QUA ĐIỆN THOẠI</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-04-20', 4, 'Đông Giang-Quảng Nam', '- Ứng viên có kinh nghiệm - Ngoại hình đẹp, tác phong nhanh nhẹn - Làm theo ca ( Ứng viên có hộ khẩu tại Hà Nội), Làm cả ngày ( Ưu tiên ứng vien có hộ khẩu tại Hà Nội) - Tốt nghiệp THPT trở lên - Ưu tiên những ứng viên gắn bó lâu dài với công việc', 5.00, 1, '2018-04-28 07:53:12', '2018-04-28 07:53:12'),
(13, 18, 7, 1, 3, 'Nhân Viên Kinh Doanh Thu Nhập 10 Triệu - 15 Triệu_Manulife', 'Nhân Viên Kinh Doanh Thu Nhập 10 Triệu - 15 Triệu_Manulife', '<p>chương trình hợp tác tuy&ecirc;̉n dụng và đào tạo giữa b&ocirc;̣ tài chính và c&ocirc;ng ty manulife vi&ecirc;̣t nam.dành cho KH&Ocirc;́I HÀNH CHÍNH SỰ NGHI&Ecirc;̣P VÀ KH&Ocirc;́I VĂN PHÒNG.<br />\r\n<br />\r\nTìm ki&ecirc;́m khách hàng ti&ecirc;̀m năng và chăm sóc khách hàng theo data từ c&ocirc;ng ty cung c&acirc;́p&nbsp;<br />\r\nL&acirc;̣p k&ecirc;́ hoạch làm vi&ecirc;̣c theo tu&acirc;̀n và báo cáo cho trưởng phòng ,giám đóc v&ecirc;̀ l&ocirc;̣ trình và k&ecirc;́ hoạch làm vi&ecirc;̣c của mình&nbsp;<br />\r\nThi&ecirc;́t l&acirc;̣p cu&ocirc;̣c hẹn và tư v&acirc;́n các giải pháp tài chính cho khách hàng&nbsp;<br />\r\nH&ocirc;̃ trợ giải đáp thắc mắc của khách hàng trước khi ký k&ecirc;́t hợp đ&ocirc;̀ng&nbsp;<br />\r\nBi&ecirc;́t sử dụng c&ocirc;ng cụ marketing là m&ocirc;̣t lợi th&ecirc;́</p>', '2018-04-19', 3, 'Nam Trà Mi-Quảng Nam', '- Tuổi từ 25-45  - Năng động, nhiệt tình, cầu tiến và ham học hỏi - Ưu tiên những bạn tốt nghiệp những trường tài chính ngân hàng hoăc có kinh nghiệm chăm sóc khách hàng - Thái độ làm việc nghiêm túc. - kỹ năng làm việc đội nhóm là một lợi thế', 10.00, 1, '2018-04-28 07:54:33', '2018-04-28 07:54:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quangcao`
--

CREATE TABLE `quangcao` (
  `id` int(10) UNSIGNED NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThoiHanDangQC` date NOT NULL,
  `NoiDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChiPhi` double(8,2) NOT NULL,
  `KhachHangXacNhan` tinyint(1) NOT NULL,
  `AdminXacNhan` tinyint(1) NOT NULL,
  `Link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UuTien` int(11) NOT NULL,
  `MaNTD` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quangcao`
--

INSERT INTO `quangcao` (`id`, `TieuDe`, `HinhAnh`, `ThoiHanDangQC`, `NoiDung`, `ChiPhi`, `KhachHangXacNhan`, `AdminXacNhan`, `Link`, `UuTien`, `MaNTD`, `created_at`, `updated_at`) VALUES
(1, 'Đăng quảng cáo', '8LLeg1v4Cz_15057952_1630107077291808_1932515549_n.png', '2018-04-28', '<p>Đăng quảng c&aacute;o</p>', 12.00, 1, 1, 'https://www.youtube.com/watch?v=byXvpKA9Jx8', 1, 1, NULL, '2018-04-28 03:40:01'),
(3, 'Quá tải dòng người rời Thủ đô đi nghỉ lễ 30/4 1/5', 'Q7mFY5Xw27_15-10top-11-hinh-nen-hd-sieu-net-cho-may-tinh7_2.jpg', '2018-04-12', '<p>Tr&ecirc;n một số tuyến đường dẫn tới c&aacute;c bến xe như: Trường Chinh, Giải Ph&oacute;ng, Kim Đồng, Khuất Duy Tiến, Phạm H&ugrave;ng,...cũng xảy ra &ugrave;n ứ. C&aacute;c lực lượng chức năng được huy động tối đa để ph&acirc;n luồng điều tiết giao th&ocirc;ng.</p>\r\n\r\n<p>Theo &ocirc;ng Nguyễn Tất Th&agrave;nh, Gi&aacute;m đốc bến xe Gi&aacute;p B&aacute;t, t&iacute;nh đến thời điểm 14h30, lượng h&agrave;nh kh&aacute;ch về bến đ&atilde; bắt đầu tăng. Do kỳ nghỉ lễ n&agrave;y k&eacute;o d&agrave;i n&ecirc;n theo dự kiến, trong ng&agrave;y h&ocirc;m 27/4 v&agrave; ng&agrave;y 28/4 lượng kh&aacute;ch sẽ tăng khoảng 50%. Ri&ecirc;ng chiều 27/4 ước tăng khoảng 15-20% so với ng&agrave;y thường.</p>\r\n\r\n<p>&ldquo;Trước t&igrave;nh h&igrave;nh đ&oacute;, bến đ&atilde; l&ecirc;n đầy đủ c&aacute;c phương &aacute;n bố tr&iacute; nh&acirc;n vi&ecirc;n chốt trực ngay tại nh&agrave; chờ để hướng dẫn người d&acirc;n v&agrave;o mua v&eacute;, phối hợp với lực lượng Thanh tra Sở GTVT H&agrave; Nội kiểm so&aacute;t chặt chẽ số lượng kh&aacute;ch tr&ecirc;n c&aacute;c xe trước khi xuất bến&rdquo;, &ocirc;ng Th&agrave;nh cho ha</p>', 1.00, 1, 1, 'sdsds', 1, 1, '2018-04-28 03:02:53', '2018-04-28 03:40:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trinhdo`
--

CREATE TABLE `trinhdo` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenTrinhDo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trinhdo`
--

INSERT INTO `trinhdo` (`id`, `TenTrinhDo`, `created_at`, `updated_at`) VALUES
(1, 'Đại học', '2018-04-27 17:50:51', '2018-04-27 17:50:51'),
(2, 'Trung học', NULL, NULL),
(3, 'Trung cấp', NULL, NULL),
(4, 'Cao học', NULL, NULL),
(5, 'Lao động phổ thông', NULL, NULL),
(6, 'Cao đẳng', '2018-04-28 07:35:33', '2018-04-28 07:35:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaLoaiTaiKhoan` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `MaLoaiTaiKhoan`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'minhanh@gmail.com', '$2y$10$ETtaZbq4xXMgqC4VA/36PeGna/R.KFXW56t063UQPtMJ0/TgIJuSC', 3, NULL, NULL, '2018-04-28 04:30:04'),
(7, 'admin@gmail.com', '$2y$10$wNtMd9ee7LM3E64aDs5rbu94ctyqwDhtd4vt0gG3Y9oCa6OOZxRgy', 1, '5q3uV4gVT4mErXykeJb1QhyRB7uisJN5ZMWU9jkHJE13zBq1LvvwnQfLe4Qc', NULL, NULL),
(8, 'kimngan@gmail.com', '$2y$10$7.aGVoxSb9MWR7.duXPtr.W3GR0lOChUmJJ41rMdAJmtHi3CpuYRi', 3, NULL, '2018-04-28 04:30:35', '2018-04-28 04:30:35'),
(9, 'hongtran@gmail.com', '$2y$10$u1YL/IuPBF50wek4gLLZouzF3DAvk3cVawOhkJ1ryRKf8eY94il7u', 3, NULL, '2018-04-28 04:31:10', '2018-04-28 04:31:10'),
(10, 'phamha@gmail.com', '$2y$10$BHLUuhwgS46AkHWBvtYZAejuvegXawuDxQxA.SOiVOXCmE20jXom6', 3, NULL, '2018-04-28 04:35:00', '2018-04-28 04:35:00'),
(11, 'HoangChien@gmail.com', '$2y$10$WxAMoxUIezz9Lo4okwPZVu3OLML9luDOBsqnciJ.xZ0mr2UyjQ3yK', 3, NULL, '2018-04-28 04:35:26', '2018-04-28 04:35:26'),
(12, 'HoangVu@gmail.com', '$2y$10$YSEbanKmtB6zJ4P8wUyXnOCh6DdeTIiHBVtA0zjwkzL.ytXD8rk1a', 3, NULL, '2018-04-28 04:35:59', '2018-04-28 04:35:59'),
(13, 'BaTien@gmail.com', '$2y$10$lA3miBb8qwZDmmr8gKDI6OyZ7zQbLKAYM3V9nd3uZRZADgNSmfgwS', 3, NULL, '2018-04-28 04:36:27', '2018-04-28 04:36:27'),
(14, 'LuuHoang@gmail.com', '$2y$10$KCLhmnU7BU.k.9VeFfBC8.mHkYRCf6N13KLJB3hzVEqY92LAmVdMi', 3, NULL, '2018-04-28 04:36:45', '2018-04-28 04:36:45'),
(15, 'VanTung123@gmail.com', '$2y$10$tCQJrRc7JPd/EqZ8fQ8OjeO7wLNx9Bj8PmEYyN/txvjTX1CF7mSwm', 3, NULL, '2018-04-28 04:37:11', '2018-04-28 04:37:11'),
(16, 'VienThong@gmail.com', '$2y$10$wBu2LNIWzDkkWNZN8E8IKOsyj/iLCr6jgIgO9Kz3T9t9KlMtraVd2', 2, NULL, '2018-04-28 04:38:42', '2018-04-28 04:38:42'),
(17, 'DuocPhucVinh@gmail.com', '$2y$10$osJQELd7C3lQzuhZL2PuFOeDqRmIzT5Zx0iEclN2MMEjmIzIpiWBa', 2, NULL, '2018-04-28 04:39:32', '2018-04-28 04:39:32'),
(18, 'SongHong@gmail.com', '$2y$10$i/GvVlo0DiNuCKptAUmk3.d.5t2uXptGQ6RAWJeIkABs2q4f4N4Z6', 2, NULL, '2018-04-28 04:39:52', '2018-04-28 04:39:52'),
(19, 'ctMinhAnh@gmail.com', '$2y$10$yvD6O2lAYpelZIWVTvU7EeJ4tU0v8cJjNDFHd.OxD8l9Ftv556iY2', 2, NULL, '2018-04-28 04:41:47', '2018-04-28 04:41:47'),
(20, 'ctThepThaiNguyen@gmail.com', '$2y$10$iOo4pEaHYEXqr.Cj6IoaIuhzPJbwqhlXZWfrET6D9Ltz3IwjWskc2', 2, NULL, '2018-04-28 04:43:00', '2018-04-28 04:43:00'),
(21, 'ctBanhkeoHaiHa@gmail.com', '$2y$10$cCTrYl2xLoNBo5qMtVgl1.TFxDSTiul6sWteZbtJLm1SZzMkFrZdy', 2, NULL, '2018-04-28 04:43:35', '2018-04-28 04:43:35'),
(22, 'CtThucAnEm@gmail.com', '$2y$10$1DPov/9AIjCgTOm4HJ6BYONeYUwYrn5l78Yl5zJl/.WCNyCs/uzSq', 2, NULL, '2018-04-28 04:45:16', '2018-04-28 04:45:16'),
(23, 'ctHoaChatAPT@gmail.com', '$2y$10$eDpDCnejoQwLVotMdc2c4.rshgkkY2fub.97NO1kVmVXtdnUg3wBy', 2, NULL, '2018-04-28 04:45:54', '2018-04-28 04:45:54'),
(24, 'ctdetHungThinh@gmail.com', '$2y$10$mT1JEBMD2U36gjzB.wd9ce./SAtIqaOFfUZo9FzYr58k0kCtcMXeC', 2, NULL, '2018-04-28 04:49:22', '2018-04-28 04:49:22'),
(25, 'NganhangVietTin@gmail.com', '$2y$10$VeVhJHJlRsxNK9cJcEuzDOoToSfnaAUKPAjJnoVVM8fzRgWg9s7mi', 2, NULL, '2018-04-28 04:49:54', '2018-04-28 04:49:54'),
(26, 'nganHangAgribank@gmail.com', '$2y$10$e9oHLRCJudeIgr5VbA1RguuShhxm85hACIpSFwuTIm3Juz9fqbmfe', 2, NULL, '2018-04-28 04:50:50', '2018-04-28 04:50:50'),
(27, 'ctBatDongSanHoangha@gmail.com', '$2y$10$vAoOR2UdMuoGE8QLpvL/qeMNOrKtrY5PYGDfMWWsMqIyqGNQela0m', 2, NULL, '2018-04-28 04:51:25', '2018-04-28 04:51:25'),
(28, 'KhachSanHaiTu@gmail.com', '$2y$10$c3QrHHujJOIQ7/xUdOjKmu8LKlBERsm.OsTgETqMwnG31VXOmCnzC', 2, NULL, '2018-04-28 04:52:03', '2018-04-28 04:52:03'),
(29, 'resotSamSon@gmail.com', '$2y$10$RpcLakDgPL9wfbWP9g27FePPrvXtF4sKaEd9Q0vb9x2KD7f6xDKAu', 2, NULL, '2018-04-28 04:52:30', '2018-04-28 04:52:30'),
(30, 'ctDoGoHaiNam@gmail.com', '$2y$10$I1E3x7b4yqEpVY32ifmmLOZqowy4JeC8Sz.G5UZuzLsLhCwqQ10Ee', 2, NULL, '2018-04-28 04:52:56', '2018-04-28 04:52:56'),
(31, 'ctDetMayYen@gmail.com', '$2y$10$x9pY.4tOZiH9XhmNSYWH/ejDSG89y68.OB8sU2euidEs5G2rINJVi', 2, NULL, '2018-04-28 04:53:31', '2018-04-28 04:53:31'),
(32, 'ctKhaithacthanTN@gmail.com', '$2y$10$yF.xQ7d9chB28RnJ/zKinOtUJVJawlBFzZ1pxKcI929TOlijo8BTK', 2, NULL, '2018-04-28 04:54:07', '2018-04-28 04:54:07'),
(33, 'CuaHangHoaHH@gmail.com', '$2y$10$P/EAgA7IQIhU5aHVSQv87ObWxk5xAPwYWlwDVjekcKFbZbTxu00wq', 2, NULL, '2018-04-28 04:55:18', '2018-04-28 04:55:18'),
(34, 'ctHoanghai@gmail.com', '$2y$10$oQ2TebJ1SPoLRuf6W9ecnOolHJke8qtxuqLsyyz88z5uoThXx6GkG', 2, NULL, '2018-04-28 04:55:48', '2018-04-28 04:55:48'),
(35, 'ctVND@mgail.com', '$2y$10$JiVHrifXrhz1HsuCuM/Oqe9a6TbqD9yn.VDO008.UXZL/NqYQ6IEu', 2, NULL, '2018-04-28 04:56:29', '2018-04-28 04:56:29'),
(36, 'ctYenThinh@gmail.com', '$2y$10$77x4f2L6.a2n1QMWEl./5eCZvo3bGU3x17MGLSFdnao.ySPGO3L4.', 2, NULL, '2018-04-28 04:57:09', '2018-04-28 04:57:09'),
(37, 'ctChieuTai@gmail.com', '$2y$10$VX9UCMn9vjDOhfQISpEym.PuU1XbNGGbtWFSUInf7vbadfsj5Jb.q', 2, NULL, '2018-04-28 07:13:42', '2018-04-28 07:13:42'),
(38, 'fpt@gmail.com', '$2y$10$8RlGZu4ars/8TS.AbuUDx.X7Bj79CjyN3A5Tqr1BQQgaxPyAWaEtm', 2, NULL, '2018-04-28 07:14:17', '2018-04-28 07:14:17'),
(39, 'VCCop.@gmail.com', '$2y$10$HzJXaNXmVD7e8q6iQ9K9JuEj/MMeaNbcKbDEnKO/DotC6L5ILZMoW', 2, NULL, '2018-04-28 07:14:44', '2018-04-28 07:14:44'),
(40, 'ctKhachSanTinhAi@gmail.com', '$2y$10$epVTSs8ROEmUMZ8iqfd1celWDaibY1u7XzGHnT/.CTGErRQ5ZMFnS', 2, NULL, '2018-04-28 07:15:42', '2018-04-28 07:15:42'),
(41, 'ctXaydungHoangHa@gmail.com', '$2y$10$kEdszcND1ageAMv.kIA0NuGz557Ul8/MCeC66W6rs.eeU2lfMsT0m', 2, NULL, '2018-04-28 07:46:03', '2018-04-28 07:46:03');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chungchi`
--
ALTER TABLE `chungchi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chuyennganh`
--
ALTER TABLE `chuyennganh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hosoxinviec`
--
ALTER TABLE `hosoxinviec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosoxinviec_mataikhoan_foreign` (`MaTaiKhoan`),
  ADD KEY `hosoxinviec_manganh_foreign` (`MaNganh`),
  ADD KEY `hosoxinviec_matrinhdo_foreign` (`MaTrinhDo`),
  ADD KEY `hosoxinviec_macc_foreign` (`MaCC`);

--
-- Chỉ mục cho bảng `kynangxinviec`
--
ALTER TABLE `kynangxinviec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kynangxinviec_mantd_foreign` (`MaNTD`);

--
-- Chỉ mục cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nhatuyendung_mataikhoan_foreign` (`MaTaiKhoan`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `phieudangtuyen`
--
ALTER TABLE `phieudangtuyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phieudangtuyen_mantd_foreign` (`MaNTD`),
  ADD KEY `phieudangtuyen_manganh_foreign` (`MaNganh`),
  ADD KEY `phieudangtuyen_matrinhdo_foreign` (`MaTrinhDo`),
  ADD KEY `phieudangtuyen_machungchi_foreign` (`MaChungChi`);

--
-- Chỉ mục cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quangcao_mantd_foreign` (`MaNTD`);

--
-- Chỉ mục cho bảng `trinhdo`
--
ALTER TABLE `trinhdo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_maloaitaikhoan_foreign` (`MaLoaiTaiKhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chungchi`
--
ALTER TABLE `chungchi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `chuyennganh`
--
ALTER TABLE `chuyennganh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `hosoxinviec`
--
ALTER TABLE `hosoxinviec`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `kynangxinviec`
--
ALTER TABLE `kynangxinviec`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `phieudangtuyen`
--
ALTER TABLE `phieudangtuyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `trinhdo`
--
ALTER TABLE `trinhdo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hosoxinviec`
--
ALTER TABLE `hosoxinviec`
  ADD CONSTRAINT `hosoxinviec_macc_foreign` FOREIGN KEY (`MaCC`) REFERENCES `chungchi` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hosoxinviec_manganh_foreign` FOREIGN KEY (`MaNganh`) REFERENCES `chuyennganh` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hosoxinviec_mataikhoan_foreign` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hosoxinviec_matrinhdo_foreign` FOREIGN KEY (`MaTrinhDo`) REFERENCES `trinhdo` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `kynangxinviec`
--
ALTER TABLE `kynangxinviec`
  ADD CONSTRAINT `kynangxinviec_mantd_foreign` FOREIGN KEY (`MaNTD`) REFERENCES `nhatuyendung` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  ADD CONSTRAINT `nhatuyendung_mataikhoan_foreign` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `phieudangtuyen`
--
ALTER TABLE `phieudangtuyen`
  ADD CONSTRAINT `phieudangtuyen_machungchi_foreign` FOREIGN KEY (`MaChungChi`) REFERENCES `chungchi` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `phieudangtuyen_manganh_foreign` FOREIGN KEY (`MaNganh`) REFERENCES `chuyennganh` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `phieudangtuyen_mantd_foreign` FOREIGN KEY (`MaNTD`) REFERENCES `nhatuyendung` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `phieudangtuyen_matrinhdo_foreign` FOREIGN KEY (`MaTrinhDo`) REFERENCES `trinhdo` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD CONSTRAINT `quangcao_mantd_foreign` FOREIGN KEY (`MaNTD`) REFERENCES `nhatuyendung` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_maloaitaikhoan_foreign` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `loaitaikhoan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
