-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 04, 2018 lúc 06:38 AM
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

--
-- Đang đổ dữ liệu cho bảng `hosoxinviec`
--

INSERT INTO `hosoxinviec` (`id`, `MaTaiKhoan`, `MaNganh`, `MaTrinhDo`, `MaCC`, `TieuDe`, `HoTen`, `NgaySinh`, `GioiTinh`, `DiaChi`, `DienThoai`, `TinhTrangHonNhan`, `LuongKhoiDiem`, `NoiLamViec`, `KinhNghiem`, `HinhAnh`, `NguyenVongLamViec`, `created_at`, `updated_at`) VALUES
(1, 51, 1, 1, 2, '', 'ádsadsd', '2018-04-06', 'Nữ', 'ádasdđ', '01234567891', 'ádsadds', 0.00, '', '', 'EZEwQmMXvc_anh14.jpg', '', '2018-04-28 10:07:01', '2018-04-28 10:07:01'),
(2, 52, 5, 1, 5, 'Nhân viên kinh doanh', 'Minh Long', '2018-04-20', 'Nữ', 'Nam Định', '123456789', 'Đã kết hôn', 12.00, '', '2 năm', 'MXykneFTaa_tải xuống (5).jpg', 'nhiều năm', '2018-04-28 15:03:42', '2018-05-04 03:05:23'),
(3, 53, 1, 1, 2, '', 'Ta Minh Luan', '2011-12-12', 'Nam', 'Địa chỉ', '0966810905', 'Đã kết hôn', 0.00, '', '', 'HlH6VB3syo_anh4.png', '', '2018-04-28 15:11:02', '2018-04-28 15:11:02'),
(4, 54, 3, 1, 11, 'Nhân viên kinh doanh', 'Nguyễn Văn Thọ', '2018-05-08', 'Nam', 'Phú Thọ', '1234567891', 'Chưa kết hôn', 12.00, '', '2', '', 'Công hiến', '2018-05-03 04:10:03', '2018-05-03 04:14:22'),
(5, 57, 3, 1, 11, 'Nhân viên bán hàng', 'Nguyễn Phù Kỳ', '2018-05-13', 'Nữ', 'Quảng nam', '1234567891', 'Chưa kết hôn', 10.00, '', '2 năm', 'bHSkORC5BX_images (3).jpg', 'Nhiều năm', '2018-05-03 11:08:51', '2018-05-03 11:11:31'),
(6, 58, 21, 1, 8, 'Nhân viên thẩm mĩ', 'Nguyễn Thị Hương Giang', '2018-05-11', 'Nữ', 'Thanh Hóa', '1234567890', 'Chưa kết hôn', 10.00, '', '2 năm', 'qUCjSEpTgY_images.jpg', 'Chăm chỉ làm', '2018-05-03 15:15:58', '2018-05-03 15:19:21'),
(7, 61, 9, 1, 4, 'Nhân viên cơ khí', 'Nguyễn Minh Anh', '2018-05-03', 'Nữ', 'Hà nội', '0123467890', 'Chưa kết hôn', 10.00, '', '2 năm', '', 'Làm dài lâu', '2018-05-04 01:53:03', '2018-05-04 01:54:37');

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
(1, 'Với tấm bằng tốt nghiệp THPT, bạn có thể làm nghề gì?', '<p>Với rất nhiều người, học đại học l&agrave; con đường m&agrave; ai cũng phải đi hoặc ch&iacute; &iacute;t cũng phải c&oacute; tấm bằng cao đẳng trong tay. Nhưng kh&ocirc;ng phải ai cũng c&oacute; điều kiện để học l&ecirc;n cao. Thực tế chứng minh nhiều cử nh&acirc;n đại học sau khi ra trường thất nghiệp hoặc kh&ocirc;ng thể t&igrave;m thấy c&ocirc;ng việc ph&ugrave; hợp với m&igrave;nh. Với tấm bằng tốt nghiệp THPT, chứng chỉ đ&agrave;o tạo nghề th&igrave; bạn vẫn c&oacute; thể l&agrave;m những c&ocirc;ng việc sau:</p>\r\n\r\n<p><strong>Kỹ thuật vi&ecirc;n bảo dưỡng &ocirc; t&ocirc;</strong></p>\r\n\r\n<p>Nhiều người sẽ biết tới nghề n&agrave;y với t&ecirc;n gọi c&ocirc;ng nh&acirc;n cơ kh&iacute;. Đ&acirc;y l&agrave; c&ocirc;ng việc kiểm tra, duy tr&igrave; v&agrave; sửa chữa &ocirc; t&ocirc;, xe tải nhẹ bằng c&aacute;c thiết bị truyền thống hoặc c&ocirc;ng cụ m&aacute;y t&iacute;nh. Để l&agrave;m được nghề n&agrave;y, bạn cần c&oacute; tấm bằng trung cấp dạy nghề.</p>\r\n\r\n<p><strong>Đại diện dịch vụ kh&aacute;ch h&agrave;ng</strong></p>\r\n\r\n<p>Đ&acirc;y l&agrave; c&ocirc;ng việc trung gian kết nối giữa kh&aacute;ch h&agrave;ng v&agrave; doanh nghiệp bằng c&aacute;ch trả lời c&aacute;c c&acirc;u hỏi hay c&aacute;c thắc mắc, cung cấp th&ocirc;ng tin cũng như gửi c&aacute;c khiếu nại.</p>\r\n\r\n<p><strong>Nh&acirc;n vi&ecirc;n kế to&aacute;n</strong></p>\r\n\r\n<p>Kh&ocirc;ng phải học ng&agrave;nh kế to&aacute;n tại c&aacute;c trường đại học danh tiếng th&igrave; bạn mới l&agrave;m nh&acirc;n vi&ecirc;n kế to&aacute;n được. C&ocirc;ng việc ch&iacute;nh l&agrave; trả lương cho nh&acirc;n vi&ecirc;n hoặc trả c&aacute;c khoản thu chi, t&iacute;nh to&aacute;n chi ph&iacute;, tiến h&agrave;nh c&aacute;c giao dịch, cập nhật t&agrave;i khoản v&agrave; y&ecirc;u cầu quan trọng của kế to&aacute;n ch&iacute;nh l&agrave; độ ch&iacute;nh x&aacute;c. Bạn cần bằng tốt nghiệp THPT v&agrave; một v&agrave;i kinh nghiệm thực tế.</p>\r\n\r\n<p><strong>Thợ điện</strong></p>\r\n\r\n<p>Thời đại c&ocirc;ng nghệ, điện trở th&agrave;nh một điều thiết yếu trong cuộc sống. C&ocirc;ng việc ch&iacute;nh m&agrave; bạn sẽ l&agrave;m ch&iacute;nh l&agrave; lắp đặt, duy tr&igrave; hệ thống điện, cầu ch&igrave;, c&aacute;c m&aacute;y m&oacute;c thiết bị điện gia đ&igrave;nh hay doanh nghiệp. Bạn cần học nghề hay tham gia c&aacute;c kh&oacute;a đ&agrave;o tạo d&agrave;i hạn.</p>\r\n\r\n<p><strong>Thợ mộc</strong></p>\r\n\r\n<p>Gỗ l&agrave; vật liệu quan trọng trong c&aacute;c thiết kế thi c&ocirc;ng nội thất. Những người thợ mộc x&acirc;y dựng, lắp r&aacute;p v&agrave; sửa chữa những c&ocirc;ng tr&igrave;nh x&acirc;y dụng, c&ocirc;ng tr&igrave;nh kiến tr&uacute;c, nội thất bằng gỗ. Để c&oacute; tay nghề l&agrave;m việc n&agrave;y, bạn cần được đ&agrave;o tạo v&agrave; truyền nghề từ 3 tới 4 năm.</p>', 'shaJj2Mpiq_a.jpg', 1, '2018-04-27 18:20:45', '2018-05-03 06:51:13'),
(2, 'Bí quyết giúp bạn vượt qua giai đoạn thử việc hiệu quả nhất', '<p><strong>L&agrave;m việc như một nh&acirc;n vi&ecirc;n ch&iacute;nh thức</strong></p>\r\n\r\n<p>Mặc d&ugrave; l&agrave; nh&acirc;n vi&ecirc;n thử việc nhưng c&aacute;c sếp lu&ocirc;n muốn nh&igrave;n thấy sự chắc chắn từ nh&acirc;n vi&ecirc;n của họ. V&agrave; dĩ nhi&ecirc;n kh&ocirc;ng ai muốn thấy một nh&acirc;n vi&ecirc;n li&ecirc;n tục nghỉ ốm, hiệu suất c&ocirc;ng việc kh&ocirc;ng đều, kh&ocirc;ng tập trung v&ocirc; c&ocirc;ng việc,&hellip;</p>\r\n\r\n<p><strong>H&agrave;i h&ograve;a c&ocirc;ng việc</strong></p>\r\n\r\n<p>Kh&ocirc;ng ai th&iacute;ch một kẻ lười biếng nhưng nếu cả ng&agrave;y bạn cứ ch&uacute; t&acirc;m l&agrave;m việc một c&aacute;ch chăm chỉ th&igrave; chỉ sau một thời gian ngắn bạn sẽ cảm thấy mệt mỏi, ch&aacute;n nản m&agrave; hiệu quả c&ocirc;ng việc cũng kh&ocirc;ng như &yacute;.</p>\r\n\r\n<p>Bất k&igrave; nh&agrave; tuyển dụng n&agrave;o cũng mong hiệu quả c&ocirc;ng việc của bạn l&agrave; cả một qu&aacute; tr&igrave;nh xuy&ecirc;n suốt chứ kh&ocirc;ng phải l&ecirc;n xuống li&ecirc;n tục. Bạn kh&ocirc;ng n&ecirc;n đặt qu&aacute; nhiều &aacute;p lực cho m&igrave;nh, kh&ocirc;ng n&ecirc;n hứa hẹn những việc m&agrave; m&igrave;nh kh&ocirc;ng thể thực hiện được.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Duy tr&igrave; hiệu quả c&ocirc;ng việc xuy&ecirc;n suốt sẽ gi&uacute;p bạn ghi điểm trong mắt s&ecirc;p</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nếu bạn l&agrave; một người t&agrave;i giỏi, đủ năng lực th&igrave; n&ecirc;n tự tin chứ kh&ocirc;ng n&ecirc;n tự phụ. Những người t&agrave;i giỏi lu&ocirc;n l&agrave; những người kh&ocirc;ng ki&ecirc;u ngạo v&agrave; lu&ocirc;n sẵn s&agrave;ng nghe g&oacute;p &yacute; từ những người xung quanh.</p>\r\n\r\n<p><strong>L&agrave;m chủ những y&ecirc;u cầu c&ocirc;ng việc</strong></p>\r\n\r\n<p>Thời gian thử việc l&agrave; l&uacute;c xem bạn thực hiện c&ocirc;ng việc như thế n&agrave;o để quyết định bạn c&oacute; vượt qua được thời gian thử việc ấy kh&ocirc;ng. C&oacute; thể bạn l&agrave; người c&oacute; hồ sơ ấn tượng với điểm số cao nhưng bạn lại kh&ocirc;ng c&oacute; cố gắng trong c&ocirc;ng việc th&igrave; tất cả đều v&ocirc; &iacute;ch.</p>\r\n\r\n<p>Nếu bạn chưa hiểu r&otilde; c&ocirc;ng việc th&igrave; đừng ngần ngại hỏi lại sếp để tr&aacute;nh hiểu nhầm hoặc kh&ocirc;ng đạt được hiệu quả cao. Chẳng c&oacute; sự th&agrave;nh c&ocirc;ng n&agrave;o m&agrave; kh&ocirc;ng đ&ograve;i hỏi bạn phải nỗ lực, d&agrave;nh nhiều thời gian luyện tập.</p>\r\n\r\n<p><strong>T&igrave;m hiểu về c&ocirc;ng ty</strong></p>\r\n\r\n<p>Chắc chắn trước khi nộp đơn xin việc bạn đ&atilde; t&igrave;m hiểu về c&ocirc;ng ty nhưng kh&ocirc;ng chưa đủ tường tận như khi ch&iacute;nh bạn được trải nghiệm ở đ&oacute;. Qua những t&igrave;m hiểu về c&ocirc;ng ty sẽ gi&uacute;p bạn đ&aacute;nh gi&aacute; xem c&ocirc;ng ty ấy c&oacute; phải l&agrave; sự lựa chọn tốt nhất cho m&igrave;nh hay kh&ocirc;ng.</p>\r\n\r\n<p>Trong suốt thời gian thử việc l&agrave; l&uacute;c để bạn học hỏi về c&ocirc;ng ty, đặt ra những c&acirc;u hỏi khi c&oacute; thể. Đ&acirc;y l&agrave; c&aacute;ch gi&uacute;p bạn hiểu r&otilde; hơn về c&ocirc;ng ty của m&igrave;nh như c&aacute;ch ăn mặc, lịch nghỉ hay bất cứ quy tắc n&agrave;o kh&aacute;c của cuộc sống văn ph&ograve;ng.</p>\r\n\r\n<p><strong>Kh&ocirc;ng cho c&ocirc;ng ty t&igrave;m ra l&yacute; do sa thải bạn</strong></p>\r\n\r\n<p>Khi đang trong giai đoạn thử việc, bạn kh&ocirc;ng n&ecirc;n l&agrave;m mất cơ hội của m&igrave;nh khi &ldquo;cung cấp&rdquo; cho c&ocirc;ng ty l&yacute; do sa thải bạn.</p>\r\n\r\n<p>C&oacute; v&ocirc; số l&yacute; do khiến sếp sa thải bạn như sếp kh&ocirc;ng th&iacute;ch c&aacute;ch bạn l&agrave;m việc, bị đồng nghiệp &ldquo;chơi xấu&rdquo;,&hellip; Tốt nhất, bạn n&ecirc;n tự bảo vệ m&igrave;nh bằng c&aacute;ch sống l&agrave;nh mạnh, chuy&ecirc;n nghiệp v&agrave; c&oacute; c&aacute;ch sống t&iacute;ch cực.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Đừng cho nh&agrave; tuyển dụng c&oacute; cơ hội từ chối k&yacute; hợp đồng ch&iacute;nh thức với bạn</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Một gợi &yacute; cho bạn nữa l&agrave; n&ecirc;n giữ sức khỏe của m&igrave;nh thật tốt, những ng&agrave;y nghỉ ốm sẽ ảnh hưởng tới qu&aacute; tr&igrave;nh học hỏi v&agrave; l&agrave;m việc của bạn. Nếu c&oacute; thể chứng minh m&igrave;nh l&agrave; một nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp v&agrave; t&iacute;ch cực th&igrave; sếp sẽ thấy bạn l&agrave; người đ&aacute;ng được giữ lại c&ocirc;ng ty.</p>\r\n\r\n<p><strong>Quan s&aacute;t</strong></p>\r\n\r\n<p>H&atilde;y lu&ocirc;n quan s&aacute;t để biết những điều n&ecirc;n v&agrave; kh&ocirc;ng n&ecirc;n l&agrave;m ở c&ocirc;ng sở như sếp th&iacute;ch li&ecirc;n lạc qua email, điện thoại hay gặp mặt trực tiếp.</p>\r\n\r\n<p>Đối với những c&ocirc;ng ty kh&ocirc;ng y&ecirc;u cầu mặc đồng phục th&igrave; bạn n&ecirc;n quan s&aacute;t c&aacute;ch ăn mặc của mọi người để lựa chọn trang phục ph&ugrave; hợp với văn ph&ograve;ng.</p>\r\n\r\n<p><strong>Cố gắng thoải m&aacute;i</strong></p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh thử việc chắc chắn c&oacute; rất nhiều &aacute;nh mắt đang đồ dồn về ph&iacute;a bạn. Nhưng h&atilde;y cố gắng tỏ ra b&igrave;nh tĩnh, đừng để mọi người nhận thấy bạn đang lo lắng, căng thẳng. Họ sẽ nghĩ bạn thiếu năng lực hoặc kh&oacute; th&iacute;ch nghi được với m&ocirc;i trường l&agrave;m việc.</p>\r\n\r\n<p><strong>Lu&ocirc;n lu&ocirc;n đ&uacute;ng giờ</strong></p>\r\n\r\n<p>Một trong những điều đ&aacute;nh gi&aacute; một nh&acirc;n vi&ecirc;n ch&iacute;nh l&agrave; việc quản l&yacute; thời gian. Kh&ocirc;ng bao giờ đi l&agrave;m muộn, đặc biệt trong giai đoạn thử việc. Thậm ch&iacute; bạn n&ecirc;n đến c&ocirc;ng ty sớm hơn 10 ph&uacute;t để chứng tỏ sự nhiệt t&igrave;nh với c&ocirc;ng việc của m&igrave;nh.</p>\r\n\r\n<p><strong>Chủ động trong c&ocirc;ng việc</strong></p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh thử việc, bạn kh&ocirc;ng n&ecirc;n chỉ ngồi một chỗ v&agrave; chờ đợi c&oacute; người tới giao việc hay hướng dẫn cho bạn. Thay v&agrave;o đ&oacute;, bạn h&atilde;y chủ động n&oacute;i chuyện với người quản l&yacute; trực tiếp của m&igrave;nh. Nếu những người xung quanh bạn đang bận rộn th&igrave; h&atilde;y l&ecirc;n tiếng đề nghị được gi&uacute;p đỡ họ. Đ&acirc;y l&agrave; một c&aacute;ch gi&uacute;p bạn ghi điểm trong mắt đồng nghiệp v&agrave; nh&agrave; tuyển dụng.</p>', '6fl0SQN2Ac_bi-quyet-giup-ban-vuot-qua-giai-doan-thu-viec-hieu-qua-nhat-hinh-anh-1.jpg', 16, '2018-05-03 07:09:38', '2018-05-03 07:09:38'),
(3, 'Những dấu hiệu cho thấy bạn đã chọn đúng nghề', '<p><strong>1. C&ocirc;ng việc đ&oacute; khiến bạn cảm thấy m&igrave;nh c&oacute; gi&aacute; trị</strong></p>\r\n\r\n<p>Dấu hiệu đầu ti&ecirc;n để biết bạn c&oacute; thật sự th&iacute;ch c&ocirc;ng việc của m&igrave;nh hay kh&ocirc;ng l&agrave; khi bạn nhận ra c&ocirc;ng việc bạn l&agrave;m thật bổ &iacute;ch. N&oacute;i c&aacute;ch kh&aacute;c, tiền kh&ocirc;ng phải l&agrave; yếu tố duy nhất th&uacute;c đẩy bạn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Dấu hiệu đầu ti&ecirc;n để biết bạn c&oacute; thật sự th&iacute;ch c&ocirc;ng việc của m&igrave;nh hay kh&ocirc;ng l&agrave; khi bạn nhận ra c&ocirc;ng việc bạn l&agrave;m thật bổ &iacute;ch</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bạn tận t&acirc;m th&iacute;ch th&uacute; tr&ocirc;ng đợi kết quả v&agrave; kh&ocirc;ng đơn thuần chỉ vui khi hết giờ l&agrave;m việc, sau đ&oacute; sẽ vui hơn nữa khi tiền lương được chuyển đầy đủ v&agrave;o t&agrave;i khoản. Cảm x&uacute;c m&agrave; một c&ocirc;ng việc ph&ugrave; hợp mang lại ch&iacute;nh l&agrave; ch&uacute;ng khiến bạn cảm thấy m&igrave;nh c&oacute; gi&aacute; trị.</p>\r\n\r\n<p><strong>2. Cảm thấy h&agrave;o hứng v&agrave; động lực mỗi khi thức dậy v&agrave;o buổi s&aacute;ng</strong></p>\r\n\r\n<p>Khi chu&ocirc;ng b&aacute;o thức reo, bạn nhấn n&uacute;t tắt v&agrave; những suy nghĩ g&igrave; đang hiển thị trong đầu của bạn? Nếu bạn h&igrave;nh dung đến c&ocirc;ng việc hoặc ch&iacute; &iacute;t l&agrave; chỉ xếp sau h&igrave;nh ảnh của người y&ecirc;u trong trường hợp bạn đang y&ecirc;u, bạn c&oacute; thể xem n&oacute; l&agrave; dấu hiệu nhận biết m&igrave;nh đang quan t&acirc;m đến c&ocirc;ng việc.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, như thế vẫn chưa đủ. Nếu bạn cảm thấy m&igrave;nh hứng khởi v&agrave; c&oacute; động lực lao ra cửa để bắt đầu ng&agrave;y l&agrave;m việc mới, n&oacute; cho bạn biết l&agrave; m&igrave;nh đang chọn đ&uacute;ng c&ocirc;ng việc.</p>\r\n\r\n<p><strong>3. Bạn kh&ocirc;ng cảm thấy buồn ch&aacute;n v&agrave;o tối chủ nhật</strong></p>\r\n\r\n<p>Mọi người đều biết rằng đ&ecirc;m chủ nhật l&agrave; dấu mốc kết th&uacute;c v&agrave; khởi đầu cho 5 ng&agrave;y l&agrave;m việc sắp tới. Vậy cảm x&uacute;c v&agrave;o đ&ecirc;m chủ nhật của bạn như thế n&agrave;o? Nếu mang trong m&igrave;nh cảm gi&aacute;c uể oải, buồn ch&aacute;n v&agrave; những x&uacute;c cảm ti&ecirc;u cực, điều đ&oacute; cho thấy bạn kh&ocirc;ng th&iacute;ch những ng&agrave;y kế tiếp.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Nếu bạn cảm thấy buồn ch&aacute;n v&agrave;o thứ 2 th&igrave; chứng tỏ bạn kh&ocirc;ng hề y&ecirc;u th&iacute;ch c&ocirc;ng việc của m&igrave;nh</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ngược lại, nếu bạn kh&ocirc;ng sợ buổi tối chủ nhật v&agrave; buổi s&aacute;ng thứ hai, n&oacute; cho biết bạn đang tận hưởng những thử th&aacute;ch m&agrave; c&ocirc;ng việc mang lại.</p>\r\n\r\n<p><strong>4. Kh&ocirc;ng ở trong trạng th&aacute;i &ldquo;sống c&ograve;n&rdquo;</strong></p>\r\n\r\n<p>Nhiều người v&iacute; von c&ocirc;ng việc của họ như một trận chiến, nơi sự sống c&ograve;n v&agrave; tồn tại cho đến ng&agrave;y h&ocirc;m sau l&agrave; mục ti&ecirc;u tối thượng. Một c&aacute;ch để bạn biết bạn đ&atilde; lựa chọn đ&uacute;ng c&ocirc;ng việc l&agrave; bạn đang kh&ocirc;ng ở trong trạng th&aacute;i sống c&ograve;n n&agrave;y.</p>\r\n\r\n<p>Thay v&agrave;o đ&oacute;, bạn đang ở trong trạng th&aacute;i tấn c&ocirc;ng. Bạn đến l&agrave;m việc mỗi ng&agrave;y v&agrave; sẵn s&agrave;ng để l&agrave;m cho mọi việc xảy ra. Đ&oacute; l&agrave; dấu hiệu của một nh&acirc;n vi&ecirc;n h&agrave;i l&ograve;ng với những g&igrave; họ y&ecirc;u th&iacute;ch.</p>\r\n\r\n<p><strong>5. Kh&ocirc;ng thể ngừng n&oacute;i với mọi người về c&ocirc;ng việc của m&igrave;nh</strong></p>\r\n\r\n<p>Hầu hết mọi người đều muốn chia sẻ những thử th&aacute;ch trong c&ocirc;ng việc m&agrave; m&igrave;nh đang l&agrave;m với người th&acirc;n, bạn b&egrave; v&agrave; cả những người xa lạ. V&igrave; thế, c&aacute;ch để nhận định bạn c&oacute; đang y&ecirc;u th&iacute;ch c&ocirc;ng việc của m&igrave;nh kh&ocirc;ng l&agrave; qua th&aacute;i độ trong cuộc n&oacute;i chuyện.</p>\r\n\r\n<p>Nếu bạn ph&agrave;n n&agrave;n, ch&ecirc; bai c&ocirc;ng việc được biểu hiện bằng một gương mặt cau c&oacute; v&agrave; chau m&agrave;y th&igrave; hẳn c&ocirc;ng việc n&agrave;y chỉ l&agrave; lựa chọn tạm thời. C&ograve;n nếu gương mặt bạn thể hiện sự hạnh ph&uacute;c th&igrave; chắc chắn bạn đang quyết định đ&uacute;ng.</p>\r\n\r\n<p><strong>6. Hiếm khi nh&igrave;n v&agrave;o đồng hồ</strong></p>\r\n\r\n<p>Nếu một người li&ecirc;n tục nh&igrave;n đồng hồ hoặc hỏi người kh&aacute;c về giờ giấc v&agrave; k&ecirc;u l&ecirc;n rằng, &ldquo;sao thời gian tr&ocirc;i l&acirc;u vậy&rdquo;, điều c&oacute; nghĩa l&agrave; người đ&oacute; kh&ocirc;ng h&agrave;o hứng trong m&ocirc;i trường đang ở.</p>\r\n\r\n<p>C&ograve;n khi bạn nh&igrave;n v&agrave;o đồng hồ v&agrave; ngạc nhi&ecirc;n tại sao thời gian tr&ocirc;i qua trong nh&aacute;y mắt th&igrave; bạn c&oacute; thể y&ecirc;n t&acirc;m v&igrave; bạn đang y&ecirc;u những g&igrave; m&igrave;nh đang l&agrave;m.</p>\r\n\r\n<p><strong>7. Bạn th&iacute;ch d&agrave;nh thời gian với đồng nghiệp</strong></p>\r\n\r\n<p>Nếu bạn ngay lập tức nhắn tin cho đồng nghiệp của bạn sau khi kết th&uacute;c c&ocirc;ng việc, hoặc d&agrave;nh thời gian với họ v&agrave;o cuối tuần, bạn may mắn c&oacute; một nh&oacute;m bạn tốt để vừa thư gi&atilde;n vừa l&agrave;m việc c&ugrave;ng nhau.</p>\r\n\r\n<p><strong>8. Bạn kh&ocirc;ng biết v&igrave; sao người kh&aacute;c lại gh&eacute;t c&ocirc;ng việc của họ</strong></p>\r\n\r\n<p>Theo một khảo s&aacute;t của Deloitte Shift Index Survey, 80% những người lao động gh&eacute;t c&ocirc;ng việc của họ. Điều đ&oacute; c&oacute; nghĩa l&agrave; 4/5 kh&ocirc;ng quan t&acirc;m đến c&ocirc;ng việc của m&igrave;nh.</p>\r\n\r\n<p>V&agrave; bạn thắc mắc nguy&ecirc;n do họ lại gh&eacute;t c&ocirc;ng việc của m&igrave;nh v&agrave; kh&ocirc;ng hiểu tại sao lại như thế th&igrave; ắt hẳn bạn kh&ocirc;ng nằm trong 80% n&oacute;i tr&ecirc;n. V&igrave; chỉ c&oacute; người b&ecirc;n trong mới biết được tại sao họ kh&ocirc;ng th&iacute;ch c&ocirc;ng việc của m&igrave;nh. Hy vọng những th&ocirc;ng tin n&agrave;y sẽ phần n&agrave;o giải đ&aacute;p thắc mắc của bạn. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng!</p>', 'otiPvq3Qqq_nhung-dau-hieu-cho-thay-ban-da-chon-dung-nghe-hinh-anh-1.jpg', 22, '2018-05-03 07:12:50', '2018-05-03 07:12:50'),
(4, 'Những dấu hiệu cho thấy bạn đang bị trầm cảm trong công việc', '<p><strong>Thường xuy&ecirc;n lo &acirc;u v&agrave; mệt mỏi khi nghĩ tới c&ocirc;ng việc</strong></p>\r\n\r\n<p>Một đặc điểm nhận biết của người bị trầm cảm l&agrave; n&eacute;t mặt trầm buồn, ch&aacute;n nản, kh&ocirc;ng muốn chia sẻ khiến nhiều người xung quanh ngại tiếp x&uacute;c. Do đ&oacute;, đ&ocirc;i khi ch&iacute;nh những xung quanh lại v&ocirc; t&igrave;nh c&agrave;ng khiến bạn c&agrave;ng trở n&ecirc;n c&ocirc; độc, lẻ loi hơn.&nbsp;Do đ&oacute;, bạn hay c&oacute; th&aacute;i độ gắt gỏng, c&aacute;u gắt l&agrave; một biểu hiện về sự kh&oacute; chịu ở những người mắc chứng bệnh trầm cảm n&agrave;y.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Một trong những dấu hiệu trầm cảm trong c&ocirc;ng việc l&agrave; bạn thường xuy&ecirc;n lo &acirc;u khi nghĩ tới n&oacute;</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>V&ocirc; cảm</strong></p>\r\n\r\n<p>V&igrave; ở trạng th&aacute;i qu&aacute; mệt mỏi n&ecirc;n bạn dường như kh&ocirc;ng quan t&acirc;m đến mọi thứ xung quanh. Phần cảm x&uacute;c ở những người trầm cảm thường xuy&ecirc;n bị t&ecirc; liệt, bạn thấy trống rỗng v&agrave; v&ocirc; cảm với mọi thứ xung quanh. Bạn sẽ kh&ocirc;ng cảm thấy hứng th&uacute; với bất cứ hoạt động n&agrave;o trong ng&agrave;y. D&ugrave; cho đang xem một bộ phim h&agrave;i, một cuốn truyện vui hay xem chương tr&igrave;nh truyền h&igrave;nh vui nhộn&hellip; với họ, tất cả chỉ &ldquo;nhạt như nước ốc&rdquo;.</p>\r\n\r\n<p><strong>&ldquo;Sợ&rdquo; việc</strong></p>\r\n\r\n<p>Khi bạn ch&aacute;n nản, những suy nghĩ ti&ecirc;u cực sẽ bắt đầu xuất hiện, như: &ldquo;M&igrave;nh sẽ kh&ocirc;ng đời n&agrave;o được thăng chức&rdquo; hay &ldquo;M&igrave;nh sẽ chỉ lu&ocirc;n bị sếp rầy la&rdquo;. Những suy nghĩ v&ocirc; căn cứ như vậy sẽ chỉ khiến t&acirc;m trạng bạn th&ecirc;m u &aacute;m m&agrave; th&ocirc;i. Do đ&oacute;, bạn hay viện cớ ốm để được ở nh&agrave;.</p>\r\n\r\n<p><strong>Rối loạn giấc ngủ</strong></p>\r\n\r\n<p>Ngủ nhiều hơn l&agrave; một c&aacute;ch m&agrave; những người trầm cảm trốn tr&aacute;nh nỗi buồn. Giấc ngủ trở th&agrave;nh nơi để họ ẩn n&aacute;u m&igrave;nh khỏi sự tuyệt vọng. Ngược lại, cũng c&oacute; một số người bị trầm cảm&nbsp;thường thấy bồn chồn, ngủ kh&ocirc;ng s&acirc;u giấc hoặc thậm ch&iacute; l&agrave; mất ngủ. Rối loạn giấc ngủ kh&ocirc;ng chỉ l&agrave; lời cảnh b&aacute;o cho căn bệnh n&agrave;y m&agrave; c&ograve;n c&oacute; thể khiến n&oacute; trầm trọng hơn. Khi bạn kh&ocirc;ng ngủ đủ giấc, đồng hồ sinh học sẽ bị đảo lộn, bạn sẽ c&agrave;ng mệt mỏi v&agrave; k&eacute;m tập trung hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Khi bị trầm cảm bạn sẽ cảm thấy v&ocirc; c&ugrave;ng mệt mỏi v&igrave; ngủ kh&ocirc;ng đủ giấc</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Kh&ocirc;ng thể tập trung</strong></p>\r\n\r\n<p>Li&ecirc;n tục qu&ecirc;n deadline, trễ giờ, qu&ecirc;n c&ocirc;ng việc? Cảm thấy t&acirc;m tr&iacute; như một bức ảnh nhạt nho&agrave;? Sự bối rối l&agrave;m bạn chẳng thể đưa ra quyết định v&agrave; chọn lựa? Những suy nghĩ buồn b&atilde; c&ugrave;ng sự trống rỗng khiến bạn như ng&atilde; v&agrave;o m&agrave;n sương m&ugrave; d&agrave;y đặc kh&ocirc;ng t&igrave;m ra lối đi để rồi g&acirc;y ảnh hưởng đến c&ocirc;ng việc, tr&iacute; nhớ v&agrave; kỹ năng ra quyết định. Sự k&eacute;m tập trung sẽ g&acirc;y ra những quyết định sai lầm hoặc l&agrave; tiền đề cho những h&agrave;nh vi nguy hiểm, kh&ocirc;ng thể kiểm so&aacute;t.</p>\r\n\r\n<p><strong>Cảm thấy v&ocirc; dụng</strong></p>\r\n\r\n<p>Những người bị trầm cảm thường xuy&ecirc;n cảm thấy bản th&acirc;n v&ocirc; dụng, kh&ocirc;ng c&oacute; hứng th&uacute; l&agrave;m việc. Li&ecirc;n tục hạ thấp m&igrave;nh, lu&ocirc;n so s&aacute;nh với người kh&aacute;c v&agrave; tự đưa m&igrave;nh v&agrave;o trạng th&aacute;i mệt mỏi do lấn s&acirc;u v&agrave;o cảm gi&aacute;c tự ti v&igrave; m&igrave;nh v&ocirc; dụng, kh&ocirc;ng đ&aacute;ng để sống v&agrave; lu&ocirc;n mong muốn được chết để giải tho&aacute;t khỏi cảm gi&aacute;c ấy.</p>\r\n\r\n<p><strong>Nỗi buồn tối chủ Nhật</strong></p>\r\n\r\n<p>Nếu c&ocirc;ng việc đang khiến bạn khổ sở, nỗi sợ h&atilde;i thậm ch&iacute; sẽ bắt đầu từ chiều chủ Nhật, khi m&agrave; thứ Hai đang tới gần. Bạn sẽ thấy lo lắng, &aacute;p lực hoặc chỉ đơn giản l&agrave; buồn b&atilde; khi nghĩ tới tuần l&agrave;m việc mới. Khi nghĩ tới cảnh đi l&agrave;m v&agrave; lặp lại mọi thứ một c&aacute;ch tẻ nhạt, bạn sẽ kh&ocirc;ng muốn bước ch&acirc;n ra khỏi giường v&agrave; đến c&ocirc;ng sở.</p>\r\n\r\n<p><strong>Khi c&oacute; những dấu hiệu tr&ecirc;n, bạn cần:</strong></p>\r\n\r\n<p>Tham gia c&aacute;c hoạt động tập thể để thấy m&igrave;nh c&oacute; &iacute;ch v&agrave; được người kh&aacute;c qu&yacute; mến.</p>\r\n\r\n<ul>\r\n	<li>Giữ tinh thần thoải m&aacute;i v&agrave; l&agrave;m những việc m&igrave;nh th&iacute;ch.</li>\r\n	<li>T&acirc;m sự với bạn b&egrave;, người th&acirc;n để giải tỏa căng thẳng, mệt mỏi.</li>\r\n	<li>Kh&aacute;m b&aacute;c sĩ chuy&ecirc;n khoa t&acirc;m l&yacute;, uống thuốc v&agrave; theo d&otilde;i th&ecirc;m.</li>\r\n</ul>\r\n\r\n<p>Trầm cảm l&agrave; một căn bệnh thật sự v&agrave; v&ocirc; c&ugrave;ng nguy hiểm nếu kh&ocirc;ng được quan t&acirc;m, chữa trị kịp thời. Đừng thờ ơ với n&oacute; bởi n&oacute; c&oacute; thể tước đi mạng sống của bạn.</p>', '35OUk1Lzsx_nhung-dau-hieu-cho-thay-ban-dang-bi-tram-cam-trong-cong-viec-hinh-anh-1.jpg', 20, '2018-05-03 07:18:19', '2018-05-03 07:18:19'),
(5, 'Những kỹ năng cần có của một nhân viên nhân sự', '<p><strong>Kỹ năng giao tiếp</strong></p>\r\n\r\n<p>Những người l&agrave;m trong ng&agrave;nh nh&acirc;n sự cần phải c&oacute; khả năng giao tiếp hiệu quả. Họ phải nhạy b&eacute;n v&agrave; kh&eacute;o l&eacute;o trong lời ăn, tiếng n&oacute;i. Bởi v&igrave; họ phải tiếp x&uacute;c v&agrave; l&agrave;m việc với nhiều bộ phận kh&aacute;c nhau. Họ cũng l&agrave; một &ldquo;chuy&ecirc;n gia t&acirc;m l&yacute;&rdquo; khi muốn n&oacute;i chuyện với nh&acirc;n vi&ecirc;n để đưa ra lời khuy&ecirc;n. Ngo&agrave;i ra, họ cũng cần kỹ năng giao tiếp trong phỏng vấn để c&oacute; thể &ldquo;khai th&aacute;c&rdquo; ứng vi&ecirc;n tiềm năng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Kỹ năng giao tiếp l&agrave; điều cần thiết của của một nh&acirc;n vi&ecirc;n nh&acirc;n sự</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Kỹ năng đ&agrave;m ph&aacute;n v&agrave; thuyết phục</strong></p>\r\n\r\n<p>Một nh&acirc;n vi&ecirc;n nh&acirc;n sự cần c&oacute; kỹ năng đ&agrave;m ph&aacute;n v&agrave; thuyết phục để thay mặt doanh nghiệp:</p>\r\n\r\n<ul>\r\n	<li>Thương lượng với nh&acirc;n vi&ecirc;n mới, cũ về lương, thưởng</li>\r\n	<li>&nbsp;Đứng ra h&ograve;a giải giữa nh&acirc;n sự v&agrave; doanh nghiệp trong xung đột, tranh chấp,&hellip;</li>\r\n	<li>&nbsp;Thuyết phục cấp tr&ecirc;n chấp nhận những kế hoạch do bộ phận HR đề xuất với doanh nghiệp.</li>\r\n	<li>&nbsp;Sử dụng trong tuyển dụng nh&acirc;n sự để thương lượng mức lương, vị tr&iacute;,&hellip;</li>\r\n</ul>\r\n\r\n<p><strong>Kỹ năng giải quyết vấn đề v&agrave; xử l&yacute; t&igrave;nh huống</strong></p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh l&agrave;m việc một nh&acirc;n vi&ecirc;n nh&acirc;n sự sẽ phải giải quyết rất nhiều t&igrave;nh huống ph&aacute;t sinh giữa người lao động v&agrave; doanh nghiệp&hellip; Bạn phải giải quyết b&agrave;i to&aacute;n kh&oacute; n&agrave;y để kh&ocirc;ng l&agrave;m mất l&ograve;ng hai b&ecirc;n. Người l&agrave;m nh&acirc;n sự cần c&oacute; một &ldquo;c&aacute;i đầu tỉnh v&agrave; một tr&aacute;i tim n&oacute;ng&rdquo;. Đ&oacute; l&agrave; bạn cần phải học kỹ năng xử l&yacute; t&igrave;nh huống</p>\r\n\r\n<p><strong>Kỹ năng quản l&yacute; thời gian</strong></p>\r\n\r\n<p>Chịu &aacute;p lực c&ocirc;ng việc l&agrave; y&ecirc;u cầu tối thiểu m&agrave; một nh&acirc;n vi&ecirc;n nh&acirc;n sự cần c&oacute;. H&agrave;ng ng&agrave;y một người quản l&yacute; nh&acirc;n sự cần đối mặt với rất nhiều c&ocirc;ng việc kh&aacute;c nhau, giải quyết gần như su&yacute;t so&aacute;t nhau. Nếu bạn kh&ocirc;ng luyện tập được kỹ năng tr&ecirc;n bạn sẽ dễ căng thẳng, v&agrave; ng&agrave;y c&agrave;ng dẫn tới &aacute;p lực chịu đựng c&ograve;n tăng nhiều hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Người l&agrave;m nh&acirc;n sự rất cần kỹ năng quản l&yacute; thời gian</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Đọc vị người đối diện</strong></p>\r\n\r\n<p>Một trong những kỹ năng quan trọng của người quản l&yacute; nh&acirc;n sự l&agrave; đọc vị người đối diện. Nắm bắt t&acirc;m l&yacute; đ&uacute;ng v&agrave; ch&iacute;nh x&aacute;c sẽ gi&uacute;p bạn rất nhiều khi tham gia phỏng vấn ứng vi&ecirc;n. Hơn nữa, bạn c&ograve;n c&oacute; thể nhận biết, đ&aacute;nh gi&aacute; ch&iacute;nh x&aacute;c được tiềm năng của họ. Trong bất cứ c&ocirc;ng ty n&agrave;o th&igrave; bộ phận nh&acirc;n sự cũng lu&ocirc;n lu&ocirc;n phải l&agrave; người dung h&ograve;a giữa người lao động v&agrave; người sử dụng lao động. Do đ&oacute;, người phụ tr&aacute;ch nh&acirc;n sự phải c&oacute; c&aacute;c nguy&ecirc;n tắc cơ bản để đảm bảo quyền lợi ch&iacute;nh đ&aacute;ng cho cả hai b&ecirc;n. Đối với t&ocirc;i, điều quan trọng nhất l&agrave; c&ocirc;ng ty phải tu&acirc;n thủ theo c&aacute;c y&ecirc;u cầu về luật ph&aacute;p. Ngo&agrave;i ra, người l&agrave;m nh&acirc;n sự cũng phải lu&ocirc;n quan t&acirc;m đến ho&agrave;n cảnh của c&aacute; nh&acirc;n.</p>\r\n\r\n<p>Ngo&agrave;i những kỹ năng m&agrave; T&igrave;m Việc Nhanh n&ecirc;u tr&ecirc;n th&igrave; bạn cần phải y&ecirc;u th&iacute;ch v&agrave; c&oacute; niềm đam m&ecirc; để theo đuổi ng&agrave;nh nh&acirc;n sự. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng tr&ecirc;n con đường m&igrave;nh chọn nh&eacute;!</p>', 'Z5BLwFBvCA_nhung-ky-nang-can-co-cua-mot-nhan-vien-nhan-su-hinh-anh-1-768x512.jpg', 14, '2018-05-03 07:20:59', '2018-05-03 07:20:59');

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
(20, 'Công ty xây dựng Hải Hà', 'Đông Giang-Quảng Nam', '01234567891', 'www.donggiang.com', '<p>L&agrave; c&ocirc;ng ty x&acirc;y dựng c&aacute;c c&ocirc;ng tr&igrave;nh kiến tr&uacute;c lớn</p>', 'QwBeQk_anh7.jpg', 41, '2018-04-28 07:47:47', '2018-04-28 07:47:47'),
(21, 'Công ty phát triển dầu ăn mezan', 'Quảng Nam', '123456789', 'www.mezan.com', '<p>L&agrave; c&ocirc;ng ty sản xuất dầu ăn lớn nhất nước</p>', '6wtLnJhXbU_anh21.jpg', 42, '2018-04-28 08:34:55', '2018-05-03 07:19:46'),
(22, 'Công ty Hoàng Anh', 'Nam Giang-Quảng Nam', '1234567891', 'www.congtyhoanganh.com', 'Là công ty kiến trúc', 'gjmsLwJUPW_anh24.jpg', 55, '2018-05-03 06:39:40', '2018-05-03 06:39:40'),
(23, 'Công Ty TNHH Bảo Hiểm Nhân Thọ Prudential VN', 'Quang nam', '1234567890', 'www.nhantho.com', 'Là công ty cung cấp bảo hiểm cho công ty', 'ALYES0gCy6_anh16.jpg', 56, '2018-05-03 07:23:41', '2018-05-03 07:23:41'),
(24, 'Công ty Hoàng Cầu', 'Quảng Nam', '123456789', 'www.hoangcau.com', 'Là công ty mỹ phẩm hàng đầu việt nam', 'amzC9gjkGj_congty.jpg', 59, '2018-05-03 15:20:59', '2018-05-03 15:20:59'),
(25, 'Công ty', 'Địa chỉ', '0966810905', 'localhost', '123234234234', 'tprlQJg5MQ_images.jpg', 60, '2018-05-03 15:47:13', '2018-05-03 15:47:13'),
(26, 'Công ty phát triển đô thị', 'Quảng Nam', '1234567890', 'www.dothi.com', 'Là công ty phát triển xây dựng khu đô thị', 'EFFhyNjAWV_ab.jpg', 62, '2018-05-04 01:58:40', '2018-05-04 01:58:40');

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
(7, 7, 1, 1, 4, 'Tuyển kỹ sư điện', 'Kỹ Sư Cơ Điện Tử / Kỹ Sư Tự Động Hóa', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>- Thực hiện&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-thiet-ke-my-thuat-c49.html\">thiết kế</a>&nbsp;m&aacute;y phụ trợ ngh&agrave;nh in (C&oacute; hướng dẫn)<br />\r\n			- Thực hiện việc đấu nối hệ thống điện (Được hướng dẫn)<br />\r\n			- Thực hiện việc lắp đặt m&aacute;y v&agrave; hướng dẫn sử dụng cho kh&aacute;ch h&agrave;n</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-04-27', 3, 'Đại Lộc', '- Tốt nghiệp trung cấp, cao đẳng. - Kinh nghiệm yêu cầu: Tối thiểu 1 năm trở lên - Nắm rõ nguyên lý điện Công nghiệp. - Nắm và hiểu rõ về PLC và điều khiển tự động - Cần cù/chịu khó và ham học hỏi. - Sử dụng thành thạo phần mềm solid word và các phần mềm thiết kế cơ khí - Công việc sẽ trao đổi cụ thể khi phỏng vấn.', 8.00, 1, '2018-04-28 07:38:55', '2018-05-03 09:05:42'),
(8, 8, 6, 1, 10, 'Chuyên Viên Khách Hàng Doanh Nghiệp', 'Chuyên Viên Khách Hàng Doanh Nghiệp', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>- B&aacute;n c&aacute;c sản phẩm v&agrave; dịch vụ d&agrave;nh cho kh&aacute;ch h&agrave;ng doanh nghiệp (KHDN) để đạt được c&aacute;c chỉ ti&ecirc;u c&aacute; nh&acirc;n v&agrave; mục ti&ecirc;u kinh doanh do Trưởng nh&oacute;m/Gi&aacute;m đốc KHDN giao.<br />\r\n			- X&acirc;y dựng c&aacute;c đầu mối Kh&aacute;ch h&agrave;ng tiềm năng cần c&oacute; để ho&agrave;n th&agrave;nh mục ti&ecirc;u doanh số h&agrave;ng th&aacute;ng.&nbsp;<br />\r\n			- Triển khai c&aacute;c hoạt động b&aacute;n h&agrave;ng ra b&ecirc;n ngo&agrave;i h&agrave;ng ng&agrave;y: tiến h&agrave;nh gọi điện cho c&aacute;c KH mới v&agrave; KH cũ, đặt lịch hẹn b&aacute;n h&agrave;ng v&agrave; giới thiệu sản phẩm, gặp mặt KH để b&aacute;n h&agrave;ng, chốt b&aacute;n h&agrave;ng với KH&hellip;<br />\r\n			- Tiếp nhận,&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-tham-dinh-giam-dinh-quan-ly-chat-luong-c43.html\">thẩm định</a>&nbsp;v&agrave; ho&agrave;n tất hồ sơ vay của kh&aacute;ch h&agrave;ng, thực hiện c&aacute;c thủ tục giải ng&acirc;n cho kh&aacute;ch h&agrave;ng<br />\r\n			- Theo d&otilde;i v&agrave; thường xuy&ecirc;n kiểm tra hoạt động kinh doanh v&agrave; việc trả nợ của kh&aacute;ch h&agrave;ng để c&oacute; biện ph&aacute;p kịp thời.<br />\r\n			- Hợp t&aacute;c b&aacute;n ch&eacute;o sản phẩm&nbsp;<br />\r\n			- Thực hiện c&aacute;c c&ocirc;ng việc theo sự ph&acirc;n c&ocirc;ng của Trưởng nh&oacute;m/Gi&aacute;m đốc KHDN</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-04-19', 2, 'Đại Lộc-Quảng Nam', '- Tốt nghiệp đại học chuyên ngành Kinh tế, tài chính, ngân hàng hoặc tương đương  - Có tối thiểu 01 năm kinh nghiệm làm tín dụng cá nhân/ doanh nghiệp tại các Ngân hàng  - Ưu tiên ứng viên có kinh nghiệm làm việc tại phòng tài chính kế toán ở các doanh nghiệp. - Có khả năng tạo dựng quan hệ tốt với Khách hàng, kỹ năng bán hàng và thuyết phục và giao tiếp tốt - Xử lý tình huống và Khả năng làm việc độc lập, phối hợp làm việc nhóm tốt.  - Tinh thần trách nhiệm cao trong công việc, có khả năng soạn thảo tốt.  -Năng động, tôn trọng đạo đức nghề nghiệp', 5.00, 1, '2018-04-28 07:40:52', '2018-04-28 07:40:52'),
(9, 19, 5, 2, 11, 'Tuyển nhân viên bảo vệ', 'Nhân viên bảo vệ', '<p><a href=\"http://baovethaiduong.vn/\">Cong ty dich vu bao ve</a>&nbsp;Th&aacute;i Dương rất mong muốn trở th&agrave;nh đối t&aacute;c tin cậy v&agrave; l&acirc;u d&agrave;i với Qu&yacute; kh&aacute;ch về nguồn cung ứng dịch vụ bảo vệ - vệ sỹ nhanh, chất lượng v&agrave; hiệu quả cao nhất. Ch&uacute;ng t&ocirc;i rất hoan ngh&ecirc;nh v&agrave; sẵn s&agrave;ng tiếp nhận mọi &yacute; kiến của kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p><a href=\"http://baovethaiduong.vn/\">Dịch vụ bảo vệ</a>&nbsp;Th&aacute;i Dương c&oacute; m&ocirc;̣t lực lượng bảo vệ kh&ocirc;ng những được đ&agrave;o tạo nghiệp vụ từ cơ bản đến n&acirc;ng cao từ những chuy&ecirc;n gia h&agrave;ng đầu trong ngh&agrave;nh bảo vệ m&agrave; c&ograve;n được huấn luyện v&otilde; thuật bởi c&aacute;c v&otilde; sư gi&agrave;u kinh nghiệm của c&ocirc;ng ty.</p>\r\n\r\n<p>&nbsp;Kh&ocirc;ng phải đợi đến l&uacute;c xảy ra vụ cướp t&aacute;o bạo tại c&aacute;c tiệm v&agrave;ng, c&ocirc;ng t&aacute;c an ninh mới được nhắc đến trong kinh doanh v&agrave;ng. Thời gian qua, nhiều vụ cướp t&aacute;o tợn tr&ecirc;n cả nước đ&atilde; cho thấy, bọn cướp hết sức liều lĩnh.&nbsp;<a href=\"http://baovethaiduong.vn/\">C&ocirc;ng ty bảo vệ</a>&nbsp;của ch&uacute;ng t&ocirc;i sẽ cung cấp [Để xem link. ] tiệm v&agrave;ng, sẽ giải đ&aacute;p những lo &acirc;u cho qu&yacute; kh&aacute;ch.&nbsp;</p>', '2018-04-29', 9, 'Nông Sơn-Quảng Nam', 'Thân hình khỏe', 7.00, 1, '2018-04-28 07:45:17', '2018-04-28 07:45:17'),
(10, 20, 20, 1, 4, 'Nhân Viên Thiết Kế Kiến Trúc Nội Thất', 'Nhân Viên Thiết Kế Kiến Trúc Nội Thất', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>- Khảo s&aacute;t hiện trạng kh&ocirc;ng gian nội thất.<br />\r\n			- Đề xuất &yacute; tưởng ph&ugrave; hợp cho từng kh&ocirc;ng gian v&agrave; y&ecirc;u cầu của kh&aacute;ch h&agrave;ng<br />\r\n			- Triển khai bản vẽ thiết kế 3D v&agrave; b&oacute;c t&aacute;ch bản vẽ kỹ thuật&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-san-xuat-van-hanh-san-xuat-c46.html\">sản xuất</a>&nbsp;đồ gỗ<br />\r\n			- Tư vấn cho kh&aacute;ch h&agrave;ng về nguy&ecirc;n vật liệu sản xuất cho ph&ugrave; hợp với thiết kế<br />\r\n			- Triển khai bản vẽ cho xưởng sản xuất đồ gỗ<br />\r\n			- B&oacute;c t&aacute;ch gi&aacute;m s&aacute;t c&ocirc;ng tr&igrave;nh phần ho&agrave;n thiện.<br />\r\n			- V&agrave; một số y&ecirc;u cầu kh&aacute;c sẽ trao đổi th&ecirc;m khi phỏng vấn<br />\r\n			- Thời gian l&agrave;m việc: 8h/ng&agrave;y ( từ 8h30-18h) Từ thứ 2 &ndash; s&aacute;ng thứ 7</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-04-29', 3, 'Phước Sơn-Quảng nam', '- Trình độ: Tốt nghiệp đại học, cao đẳng chuyên ngành thiết kế, nội thất, kiến trúc hoặc ngành liên quan. - Kinh nghiệm: 2 năm trong lĩnh vực thiết kế trang trí nội thất . - Có kinh nghiệm làm việc trong lĩnh vực thiết kế thi công hoàn thiện nội thất và đóng đồ gỗ - Nắm vững chuyên môn, Sử dụng thành thạo các phần mềm đồ hoạ (3Dmax, Sketch -Up Photoshop, Autocad …) - Có khả năng diễn họa tốt, hiểu biết về các phong cách nội thất. - Có kinh nghiệm thiết kế đối với các công trình dân dụng (được đào tạo thêm để phát triển bản thân). - Có khả năng giao tiếp tốt, ham học hỏi, có niềm đam mê và tinh thần làm việc nhiệt tình. - Quản lý thời gian, phân chia công việc tốt', 5.00, 1, '2018-04-28 07:49:05', '2018-04-28 07:49:05'),
(11, 4, 21, 6, 4, 'Nhân Viên Bán Hàng Tại Nhà Sách Trí Tuệ', 'Nhân Viên Bán Hàng Tại Nhà Sách Trí Tuệ', '<p>- Phụ tr&aacute;ch&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-ban-hang-c10.html\">b&aacute;n h&agrave;ng</a>&nbsp;tại khu vực chịu tr&aacute;ch nhiệm.&nbsp;<br />\r\n- Giới thiệu, tư vấn th&ocirc;ng tin sản phẩm cho kh&aacute;ch h&agrave;ng.<br />\r\n- B&aacute;o c&aacute;o t&igrave;nh trạng tồn kho của c&aacute;c sản phẩm tại khu vực phụ tr&aacute;ch.</p>', '2018-04-19', 4, 'Đông Giang-Quảng Nam', '- Giao tiếp tiếng Anh tốt là một lợi thế. - Yêu thích sách và có hiểu biết nhất định về các loại sách báo. - Nhanh nhẹn, thân thiện, giao tiếp tốt. - Chăm chỉ, trung thực và linh hoạt trong công việc. - Ưu tiên ứng viên có kinh nghiệm trong công việc bán hàng và hiểu kỹ năng chăm sóc khách hàng.', 8.00, 1, '2018-04-28 07:51:30', '2018-04-28 07:51:30'),
(12, 13, 3, 1, 4, 'Nhân viên bán hàng', 'Nhân viên bán hàng', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>-&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-ban-hang-c10.html\">B&aacute;n h&agrave;ng</a>&nbsp;v&agrave; tư vấn cho kh&aacute;ch h&agrave;ng sản phẩm ph&ugrave; hợp&nbsp;<br />\r\n			- Trưng b&agrave;y sắp xếp h&agrave;ng h&oacute;a, giữ g&igrave;n vệ sinh cửa h&agrave;ng, kiểm k&ecirc; h&agrave;ng h&oacute;a theo định kỳ<br />\r\n			- C&ocirc;ng việc cụ thể sẽ trao đổi khi phỏng vấn<br />\r\n			- L&agrave;m theo ca hoặc cả ng&agrave;y<br />\r\n			ỨNG VI&Ecirc;N GỌI TRỰC TIẾP QUA ĐIỆN THOẠI</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-04-20', 4, 'Đông Giang-Quảng Nam', '- Ứng viên có kinh nghiệm - Ngoại hình đẹp, tác phong nhanh nhẹn - Làm theo ca ( Ứng viên có hộ khẩu tại Hà Nội), Làm cả ngày ( Ưu tiên ứng vien có hộ khẩu tại Hà Nội) - Tốt nghiệp THPT trở lên - Ưu tiên những ứng viên gắn bó lâu dài với công việc', 5.00, 1, '2018-04-28 07:53:12', '2018-04-28 07:53:12'),
(13, 18, 7, 1, 3, 'Nhân Viên Kinh Doanh Thu Nhập 10 Triệu - 15 Triệu_Manulife', 'Nhân Viên Kinh Doanh Thu Nhập 10 Triệu - 15 Triệu_Manulife', '<p>chương trình hợp tác tuy&ecirc;̉n dụng và đào tạo giữa b&ocirc;̣ tài chính và c&ocirc;ng ty manulife vi&ecirc;̣t nam.dành cho KH&Ocirc;́I HÀNH CHÍNH SỰ NGHI&Ecirc;̣P VÀ KH&Ocirc;́I VĂN PHÒNG.<br />\r\n<br />\r\nTìm ki&ecirc;́m khách hàng ti&ecirc;̀m năng và chăm sóc khách hàng theo data từ c&ocirc;ng ty cung c&acirc;́p&nbsp;<br />\r\nL&acirc;̣p k&ecirc;́ hoạch làm vi&ecirc;̣c theo tu&acirc;̀n và báo cáo cho trưởng phòng ,giám đóc v&ecirc;̀ l&ocirc;̣ trình và k&ecirc;́ hoạch làm vi&ecirc;̣c của mình&nbsp;<br />\r\nThi&ecirc;́t l&acirc;̣p cu&ocirc;̣c hẹn và tư v&acirc;́n các giải pháp tài chính cho khách hàng&nbsp;<br />\r\nH&ocirc;̃ trợ giải đáp thắc mắc của khách hàng trước khi ký k&ecirc;́t hợp đ&ocirc;̀ng&nbsp;<br />\r\nBi&ecirc;́t sử dụng c&ocirc;ng cụ marketing là m&ocirc;̣t lợi th&ecirc;́</p>', '2018-04-19', 3, 'Nam Trà Mi-Quảng Nam', '- Tuổi từ 25-45  - Năng động, nhiệt tình, cầu tiến và ham học hỏi - Ưu tiên những bạn tốt nghiệp những trường tài chính ngân hàng hoăc có kinh nghiệm chăm sóc khách hàng - Thái độ làm việc nghiêm túc. - kỹ năng làm việc đội nhóm là một lợi thế', 10.00, 1, '2018-04-28 07:54:33', '2018-04-28 07:54:33'),
(14, 16, 15, 2, 3, 'Chuyên Gia Phát Triển Sản Phẩm, Khối Khách Hàng Doanh Nghiệp', 'Chuyên Gia Phát Triển Sản Phẩm, Khối Khách Hàng Doanh Nghiệp', '<p>M&ocirc; Tả C&ocirc;ng Việc<br />\r\n- X&acirc;y dựng v&agrave; triển khai kế hoạch kinh doanh, kế hoạch h&agrave;nh động h&agrave;ng năm c&aacute;c sản phẩm/ g&oacute;i sản phẩm/ CTKD phụ tr&aacute;ch<br />\r\n- X&acirc;y dựng, tổ chức triển khai kế hoạch kinh doanh, chương tr&igrave;nh h&agrave;nh động h&agrave;ng năm c&aacute;c sản phẩm/ g&oacute;i sản phẩm/ CTKD phụ tr&aacute;ch<br />\r\n- Quản l&yacute; kết quả kinh doanh, chương tr&igrave;nh h&agrave;nh động, chịu tr&aacute;ch nhiệm to&agrave;n diện về kết quả kinh doanh sản phẩm/ g&oacute;i sản phẩm/CTKD phụ tr&aacute;ch<br />\r\n- Ph&aacute;t triển sản phẩm/ g&oacute;i sản phẩm/ chương tr&igrave;nh kinh doanh (CTKD) phụ tr&aacute;ch<br />\r\n- X&acirc;y dựng/ điều chỉnh c&aacute;c sản phẩm/ g&oacute;i sản phẩm/ CTKD li&ecirc;n quan đến mảng t&iacute;n dụng nhằm đ&aacute;p ứng nhu cầu của từng ph&acirc;n kh&uacute;c/ tiểu ph&acirc;n kh&uacute;c/ từng v&ugrave;ng/ miền một c&aacute;ch hiệu quả dựa tr&ecirc;n đề xuất của Bộ phận Ph&acirc;n kh&uacute;c kh&aacute;ch h&agrave;ng v&agrave; của ch&iacute;nh Bộ phận Ph&aacute;t triển sản phẩm</p>', '2018-04-20', 1, 'Quảng nam', 'Quảng Nam', 10.00, 0, '2018-04-28 15:28:06', '2018-05-03 08:02:03'),
(15, 20, 11, 1, 11, 'Nhân Viên Sale BĐS', 'Nhân Viên Sale BĐS', '<p>- Khai th&aacute;c sản phẩm tr&ecirc;n thị trường theo khu vực được giao.<br />\r\n- Tiếp nhận nhu cầu kh&aacute;ch h&agrave;ng<br />\r\n- T&igrave;m kiếm nguồn kh&aacute;ch h&agrave;ng c&oacute; nhu cầu mua, thu&ecirc; bất động sản, t&igrave;m hiểu nhu cầu của kh&aacute;ch h&agrave;ng v&agrave; tư vấn v&agrave; giới thiệu cho kh&aacute;ch h&agrave;ng th&ocirc;ng tin v&agrave; sản phẩm địa ốc ph&ugrave; hợp để c&oacute; c&aacute;c giao dịch m&ocirc;i giới th&agrave;nh c&ocirc;ng.<br />\r\n- Thiết lập, mở rộng mối quan hệ c&aacute;c c&aacute; nh&acirc;n, đối t&aacute;c, chủ dự &aacute;n, cộng t&aacute;c vi&ecirc;n để t&igrave;m kiếm nguồn bất động sản cần b&aacute;n, cho thu&ecirc;.<br />\r\n- Li&ecirc;n lạc với kh&aacute;ch h&agrave;ng thường xuy&ecirc;n để cập nhật th&ocirc;ng tin bất động sản, tư vấn gi&aacute; v&agrave; v&agrave; tạo mối quan hệ bền vững với kh&aacute;ch h&agrave;ng<br />\r\n- Quản l&yacute; giao dịch kh&aacute;ch h&agrave;ng, dẫn kh&aacute;ch h&agrave;ng đi xem bất động sản.<br />\r\n- Tham gia v&agrave;o c&aacute;c hoạt động marketing của c&ocirc;ng ty quảng b&aacute;, x&acirc;y dựng h&igrave;nh ảnh, thương hiệu của c&ocirc;ng ty nhằm mục đ&iacute;ch mang lại cho kh&aacute;ch h&agrave;ng dịch vụ tốt nhất.</p>', '2018-05-20', 2, 'Quảng Nam', '2 năm', 8.00, 0, '2018-04-28 15:29:32', '2018-05-03 08:41:03'),
(16, 16, 1, 1, 2, 'Tuyển nhân viên lập trình', 'Nhân viên lập trình', 'Lập trình viên', '2018-04-25', 1, 'Quảng Nam', '2 năm', 10.00, 0, '2018-04-28 15:55:24', '2018-04-28 15:55:24'),
(17, 7, 16, 1, 4, 'Công Nhân Điện Nước', 'Công Nhân Điện Nước', '<p>- Thi c&ocirc;ng điện - nước c&ocirc;ng tr&igrave;nh điện cao ốc, nh&agrave; xưởng.<br />\r\n- L&agrave;m việc được sự ph&acirc;n c&ocirc;ng, hướng dẫn của chỉ huy/gi&aacute;m s&aacute;t c&ocirc;ng tr&igrave;nh.<br />\r\n- C&ocirc;ng việc trao đổi cụ thể khi phỏng vấn.</p>', '2018-05-21', 3, 'Quảng Nam', '2 năm', 10.00, 0, '2018-04-28 15:59:40', '2018-05-03 08:44:25'),
(18, 9, 9, 1, 4, 'Nhân Viên Cơ Khí', 'Nhân Viên Cơ Khí', '<p>- Cắt máy, cắt gió đá, khoan, mài, lắp ráp máy....<br />\r\n- Đọc hi&ecirc;̉u bản vẽ, đo đạt<br />\r\n- L&agrave;m c&aacute;c c&ocirc;ng việc kh&aacute;c li&ecirc;n quan theo sự chỉ đạo của Trưởng bộ phận<br />\r\n- C&ocirc;ng việc cụ thể sẽ được trao đổi trực tiếp khi phỏng vấn</p>', '2018-06-14', 4, 'Quảng Nam', '2 năm', 15.00, 0, '2018-04-28 16:00:00', '2018-05-03 08:45:46'),
(19, 12, 20, 1, 11, 'Công Nhân Phụ Việc (Yên Viên, Gia Lâm).', 'Công Nhân Phụ Việc (Yên Viên, Gia Lâm).', '<p>&nbsp;Xưởng may tại C&ocirc;ng ty TNHH T&acirc;n H&agrave; S&aacute;ng tuyển&nbsp;<a href=\"https://www.timviecnhanh.com/tim-viec-lam/cong-nhan\">C&ocirc;ng nh&acirc;n</a>&nbsp;May v&agrave; C&ocirc;ng nh&acirc;n Phụ việc (<a href=\"https://www.timviecnhanh.com/viec-lam-lao-dong-pho-thong-c33.html\">lao động phổ th&ocirc;ng</a>)<br />\r\n<br />\r\nC&ocirc;ng nh&acirc;n Phụ việc: Kh&ocirc;ng ph&acirc;n biệt nam nữ, từ 18 - 50 tuổi, nhanh nhẹn, sức khỏe tốt.&nbsp;<br />\r\nThực hiện c&aacute;c c&ocirc;ng việc hỗ trợ Xưởng: L&agrave;, th&ugrave;a, đ&iacute;nh c&uacute;c, &eacute;p mếch,....<br />\r\n<br />\r\nL&agrave;m việc tại Xưởng khu Mỏ địa chất, th&ocirc;n &Aacute;i Mộ, x&atilde; Y&ecirc;n Vi&ecirc;n, Gia L&acirc;m, H&agrave; Nội.<br />\r\nLi&ecirc;n hệ: Chị Nhung 0986 970 125<br />\r\nL&agrave;m thử 1 - 3 ng&agrave;y. Ho&agrave;n thiện hồ sơ sau</p>', '2018-04-25', 1, 'Quảng Nam', '2 năm', 5.00, 0, '2018-04-28 16:08:59', '2018-05-03 08:03:27'),
(20, 16, 13, 1, 4, 'Fpt Telecom Kỹ Sư Viễn Thông Làm Việc Tại Quảng Nam', 'Fpt Telecom Kỹ Sư Viễn Thông Làm Việc Tại Quảng Nam', '<p>&bull; Quản l&yacute;, cải tạo, n&acirc;ng cấp hạ tầng phục vụ triển khai mạng Backbone, mạng Metro, mạng Access<br />\r\n&bull; Tham gia triển khai lắp đặt, bảo tr&igrave; hệ thống hạ tầng ngoại vi, đ&agrave;i trạm viễn th&ocirc;ng của c&ocirc;ng ty<br />\r\n&bull; Nghi&ecirc;n cứu, t&igrave;m kiếm c&aacute;c thiết bị, c&ocirc;ng nghệ mới như: Modem t&iacute;ch hợp, C&ocirc;ng nghệ EoC, CMTS, Wifi, PoE, Green power, PON, Carrier Ethernet, Outdoor, Cabinet...<br />\r\n&bull; X&acirc;y dựng c&aacute;c ti&ecirc;u chuẩn kỹ thuật, hướng dẫn sử dụng li&ecirc;n quan đến c&aacute;c thiết bị, c&ocirc;ng nghệ đảm bảo cung cấp dịch vụ tốt nhất cho kh&aacute;ch h&agrave;ng</p>', '2018-05-19', 2, 'Quảng Nam', 'Không cần', 10.00, 0, '2018-04-28 16:09:29', '2018-05-03 08:34:35'),
(21, 14, 12, 1, 11, 'Nhân Viên Tổng Đài Làm Việc Tại Đài Truyền Hình Quảng Nam', 'Nhân Viên Tổng Đài Làm Việc Tại Đài Truyền Hình Quảng Nam', '<p>- Lập v&agrave; BCKQ KHCV đầy đủ, đ&uacute;ng hạn, x&aacute;c định được mục ti&ecirc;u v&agrave; cam kết thực hiện<br />\r\n- Tu&acirc;n thủ nội quy, quy định l&agrave;m việc của BP v&agrave; c&ocirc;ng ty<br />\r\n- Đặt v&eacute;, tư vấn DV cho kh&aacute;ch h&agrave;ng:<br />\r\n- B&aacute;o gi&aacute; ch&iacute;nh x&aacute;c theo đ&uacute;ng h&agrave;nh tr&igrave;nh<br />\r\n- Đảm bảo kh&aacute;ch h&agrave;ng nắm h&agrave;nh tr&igrave;nh v&agrave; địa điểm đ&oacute;n.<br />\r\n- Nắm được ph&aacute;t sinh, thay đổi, cập nhật lại gi&aacute; ch&iacute;nh x&aacute;c cho KH,<br />\r\n- Kiểm so&aacute;t c&aacute;c phản &aacute;nh của kh&aacute;ch h&agrave;ng v&agrave; xử l&yacute; kịp thời c&aacute;c ph&aacute;t sinh, sự cố đảm bảo h&agrave;i l&ograve;ng kh&aacute;ch h&agrave;ng<br />\r\n- N&acirc;ng cao sư h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng đối với c&aacute;c dịch vụ của C&ocirc;ng ty.<br />\r\n- L&agrave;m theo ca:&nbsp;<br />\r\n+ Ca s&aacute;ng: 6h00 &ndash; 14h00<br />\r\n+ Ca chiều:14h00 &ndash; 22h00</p>', '2018-04-25', 2, 'Quảng Nam', '2 năm', 10.00, 0, '2018-04-28 16:10:58', '2018-05-03 08:31:50'),
(22, 1, 10, 1, 11, '[Hn1] Vingroup - Nv Chăm Sóc Khách Hàng Adayroi', '[Hn1] Vingroup - Nv Chăm Sóc Khách Hàng Adayroi', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>- Tiếp nhận cuộc gọi v&agrave; giải đ&aacute;p thắc mắc của KH.<br />\r\n			- Gọi ra x&aacute;c nhận đơn h&agrave;ng KH đ&atilde; đặt mua h&agrave;ng.<br />\r\n			- Hỗ trợ kh&aacute;ch h&agrave;ng qua live chat, facebook (hướng dẫn mua h&agrave;ng tr&ecirc;n website, tư vấn th&ocirc;ng tin về sản phẩm, tiếp nhận khiếu nại/đổi trả h&agrave;ng h&oacute;a của s&agrave;n TMĐT)<br />\r\n			<br />\r\n			Địa Điểm L&agrave;m Việc:<br />\r\n			Tại Time City &ndash; Minh Khai &ndash; H&agrave; Nội<br />\r\n			Thời gian: Lu&acirc;n ca : 6 ng&agrave;y/tuần<br />\r\n			Lu&acirc;n phi&ecirc;n ca linh hoạt<br />\r\n			<br />\r\n			Ca 1: 8h - 17h&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ca 4: 11h - 20h<br />\r\n			Ca 2: 9h - 18h&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ca 5: 12h - 21h<br />\r\n			Ca 3: 10h - 19h&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Ca 6: 13h - 22h<br />\r\n			- Ứng tuyển nhanh tại link: goo.gl/d6Rzp9<br />\r\n			-----------------------------------<br />\r\n			- Anh / Chị vui l&ograve;ng tham khảo th&ecirc;m c&aacute;c vị tr&iacute; tuyển dụng kh&aacute;c của Bellsystem24-HoaSao tại đ&acirc;y: https://sites.google.com/hoasao.vn/tuyendung</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-04-14', 2, 'Quảng Nam', '2 năm', 10.00, 0, '2018-04-28 16:11:26', '2018-05-03 08:38:30'),
(25, 19, 17, 1, 11, 'Nhân Viên Pha Chế - Barista Tất Cả Các Quận - Phúc Long Sắp Khai Trương', 'Nhân Viên Pha Chế - Barista Tất Cả Các Quận - Phúc Long Sắp Khai Trương', '<p>- Thực hiện pha chế thức uống cho kh&aacute;ch h&agrave;ng theo đ&uacute;ng quy tr&igrave;nh<br />\r\n- Đảm bảo t&igrave;nh h&igrave;nh khu vực quầy bar, quầy pha chế lu&ocirc;n sạch sẽ, ph&ugrave; hợp ti&ecirc;u chuẩn VSATPP<br />\r\n- C&aacute;c c&ocirc;ng việc kh&aacute;c theo y&ecirc;u cầu của Quản l&yacute; Cửa h&agrave;ng</p>', '2018-06-01', 2, 'Quảng Nam', '2 năm', 12.00, 1, '2018-05-03 08:48:11', '2018-05-03 08:48:11'),
(26, 20, 19, 1, 4, 'Kỹ Sư Kinh Tế Xây Dựng (Nữ)', 'Kỹ Sư Kinh Tế Xây Dựng (Nữ)', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>- Ph&acirc;n t&iacute;ch, đ&aacute;nh gi&aacute; hồ sơ thầu / Bảng khối lượng dự to&aacute;n / Thanh quyết to&aacute;n c&ocirc;ng tr&igrave;nh...<br />\r\n			- Kiểm tra, đ&aacute;nh gi&aacute; sơ dự thầu.<br />\r\n			- Lập dự to&aacute;n khối lượng, b&oacute;c t&aacute;ch khối lượng thi c&ocirc;ng để kiểm tra về gi&aacute; th&agrave;nh vật tư, nh&acirc;n c&ocirc;ng, m&aacute;y m&oacute;c,...<br />\r\n			- Kiểm tra hồ sơ Thanh quyết to&aacute;n (về ph&aacute;p l&yacute;, điều khoản thanh to&aacute;n), Kiểm tra khối lượng thi c&ocirc;ng v&agrave; đ&aacute;nh gi&aacute; sự hợp l&yacute; của bản vẽ ho&agrave;n c&ocirc;ng.<br />\r\n			- Nh&acirc;n định, cảnh b&aacute;o c&aacute;c rủi ro v&agrave; đề xuất giải ph&aacute;p kh&aacute;c phục, ph&ograve;ng ngừa.<br />\r\n			- Kiểm so&aacute;t chi ph&iacute; ph&aacute;t sinh v&agrave; tiến độ thi c&ocirc;ng.<br />\r\n			- Nắm r&otilde; ti&ecirc;u chuẩn thi c&ocirc;ng nhằm kiểm tra c&ocirc;ng t&aacute;c thi c&ocirc;ng của nh&agrave; thầu.<br />\r\n			- Ho&agrave;n th&agrave;nh c&ocirc;ng việc theo sự sắp xếp, bố tr&iacute; của Trưởng đơn vị.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-06-14', 2, 'Quảng Nam', '3 năm', 15.00, 1, '2018-05-03 08:50:03', '2018-05-03 08:50:03'),
(27, 1, 18, 1, 10, 'Giáo Viên Mầm Non Mỹ Đức', 'Giáo Viên Mầm Non Mỹ Đức', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>GI&Aacute;O VI&Ecirc;N : 6<br />\r\n			L&agrave;m việc từ thứ 2 đến thứ 6<br />\r\n			- Tổ chức hoạt động chăm s&oacute;c,&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-giao-duc-dao-tao-thu-vien-c26.html\">gi&aacute;o dục</a>&nbsp;trẻ theo chương tr&igrave;nh gi&aacute;o dục mầm non.<br />\r\n			- Bảo đảm sự an to&agrave;n, ph&aacute;t triển to&agrave;n diện cho trẻ<br />\r\n			- Quan s&aacute;t, ghi ch&eacute;p, b&aacute;o c&aacute;o t&igrave;nh h&igrave;nh học tập, ph&aacute;t triển của trẻ<br />\r\n			- Phối hợp chặt chẽ v&agrave; trao đổi thường xuy&ecirc;n với phụ huynh về t&igrave;nh h&igrave;nh v&agrave; định hướng ph&aacute;t triển cho trẻ<br />\r\n			- Tham gia tổ chức c&aacute;c hoạt động lễ hội, ngoại kh&oacute;a cho trẻ<br />\r\n			- Hỗ trợ gi&aacute;o vi&ecirc;n ngoại kh&oacute;a trong c&aacute;c giờ học ngoại kh&oacute;a<br />\r\n			- Tham gia c&aacute;c lớp bồi dưỡng, tập huấn của trường<br />\r\n			ƯU TI&Ecirc;N HỒ SƠ NỘP TRỰC TIẾP<br />\r\n			Địa điểm l&agrave;m việc :&nbsp;<br />\r\n			cs 1 : 220 x&ocirc; viết nghệ tĩnh - p21 - b&igrave;nh thạnh ( c&ocirc; c&uacute;c )0903749388<br />\r\n			<br />\r\n			cs2 :232 L&ecirc; văn Thịnh - Phường C&aacute;t L&aacute;i -&nbsp;<a href=\"https://www.timviecnhanh.com/tim-viec-lam/quan-2-thanh-pho-ho-chi-minh\">Quận 2</a>&nbsp;<br />\r\n			(c&ocirc; uy&ecirc;n)0919938588</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-05-18', 2, 'Qua', '', 0.00, 1, '2018-05-03 08:51:31', '2018-05-03 08:51:31'),
(28, 1, 1, 1, 10, 'Giáo Viên Mầm Non Mỹ Đức', 'Giáo Viên Mầm Non Mỹ Đức', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>GI&Aacute;O VI&Ecirc;N : 6<br />\r\n			L&agrave;m việc từ thứ 2 đến thứ 6<br />\r\n			- Tổ chức hoạt động chăm s&oacute;c,&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-giao-duc-dao-tao-thu-vien-c26.html\">gi&aacute;o dục</a>&nbsp;trẻ theo chương tr&igrave;nh gi&aacute;o dục mầm non.<br />\r\n			- Bảo đảm sự an to&agrave;n, ph&aacute;t triển to&agrave;n diện cho trẻ<br />\r\n			- Quan s&aacute;t, ghi ch&eacute;p, b&aacute;o c&aacute;o t&igrave;nh h&igrave;nh học tập, ph&aacute;t triển của trẻ<br />\r\n			- Phối hợp chặt chẽ v&agrave; trao đổi thường xuy&ecirc;n với phụ huynh về t&igrave;nh h&igrave;nh v&agrave; định hướng ph&aacute;t triển cho trẻ<br />\r\n			- Tham gia tổ chức c&aacute;c hoạt động lễ hội, ngoại kh&oacute;a cho trẻ<br />\r\n			- Hỗ trợ gi&aacute;o vi&ecirc;n ngoại kh&oacute;a trong c&aacute;c giờ học ngoại kh&oacute;a<br />\r\n			- Tham gia c&aacute;c lớp bồi dưỡng, tập huấn của trường<br />\r\n			ƯU TI&Ecirc;N HỒ SƠ NỘP TRỰC TIẾP<br />\r\n			Địa điểm l&agrave;m việc :&nbsp;<br />\r\n			cs 1 : 220 x&ocirc; viết nghệ tĩnh - p21 - b&igrave;nh thạnh ( c&ocirc; c&uacute;c )0903749388<br />\r\n			<br />\r\n			cs2 :232 L&ecirc; văn Thịnh - Phường C&aacute;t L&aacute;i -&nbsp;<a href=\"https://www.timviecnhanh.com/tim-viec-lam/quan-2-thanh-pho-ho-chi-minh\">Quận 2</a>&nbsp;<br />\r\n			(c&ocirc; uy&ecirc;n)0919938588</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-05-18', 2, 'Quảng Nam', '2 năm', 8.00, 1, '2018-05-03 08:52:15', '2018-05-03 08:52:15'),
(29, 17, 5, 5, 11, 'Nhân Viên Pha Chế (8H00 - 16H00) (15H30 - 23H00)', 'Nhân Viên Pha Chế (8H00 - 16H00) (15H30 - 23H00)', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Chuẩn bị nguy&ecirc;n liệu, th&agrave;nh phần theo c&ocirc;ng thức pha chế<br />\r\n			&bull; Nhận order.<br />\r\n			&bull; Thực hiện c&aacute;c m&oacute;n nước theo y&ecirc;u cầu của kh&aacute;ch.<br />\r\n			Dọn dẹp v&agrave; sắp xếp khu vực l&agrave;m việc<br />\r\n			&bull; Lu&ocirc;n giữ khu vực l&agrave;m việc sạch sẽ.<br />\r\n			&bull; Sắp xếp c&aacute;c nguy&ecirc;n liệu gọn g&agrave;ng..<br />\r\n			&bull; Kiểm tra c&aacute;c trang thiết bị trong khu vực l&agrave;m việc. B&aacute;o c&aacute;o khi cần bảo tr&igrave;, bảo dưỡng.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2018-05-20', 3, 'Quảng Nam', 'Không cần', 5.00, 1, '2018-05-03 08:53:21', '2018-05-03 08:53:21'),
(30, 5, 3, 1, 11, 'Nhân Viên Bán Hàng Tại Siêu Thị', 'Nhân Viên Bán Hàng Tại Siêu Thị', '<p>&nbsp;Tư vấn, b&aacute;n h&agrave;ng c&aacute;c sản phẩm cho mẹ &amp; b&eacute;<br />\r\n- Thực hiện c&aacute;c hoạt động hỗ trợ b&aacute;n h&agrave;ng như trưng b&agrave;y h&agrave;ng h&oacute;a, l&agrave;m tem nh&atilde;n&hellip;<br />\r\n- Vệ sinh, sắp xếp v&agrave; trưng b&agrave;y h&agrave;ng ho&aacute; tại cửa h&agrave;ng. Đảm bảo tất cả h&agrave;ng h&oacute;a đầy đủ v&agrave; trưng b&agrave;y thay thế m&oacute;n h&agrave;ng đ&atilde; b&aacute;n kịp thời theo đ&uacute;ng chuẩn qui định<br />\r\n- Kiểm k&ecirc; h&agrave;ng h&oacute;a tại c&aacute;c cửa h&agrave;ng<br />\r\nThời gian l&agrave;m việc: ca xoay ko cố định, l&agrave;m việc từ thứ 2- CN<br />\r\n&bull; Ca 1: Từ 08h00 đến 15h00<br />\r\n&bull; Ca 2: Từ 15h00 đến 22h00<br />\r\n&bull; C&oacute; mặt trước giờ l&agrave;m việc 15 ph&uacute;t.</p>', '2018-05-19', 3, 'Quảng Nam', 'Không cần', 9.00, 1, '2018-05-03 08:54:13', '2018-05-03 08:54:13'),
(31, 18, 9, 1, 2, 'Kỹ Thuật Viên Chăm Sóc Xe Ô Tô', 'Kỹ Thuật Viên Chăm Sóc Xe Ô Tô', '<p>ực hiện c&aacute;c dịch vụ chăm s&oacute;c,&nbsp;<a href=\"https://www.timviecnhanh.com/viec-lam-lam-dep-the-luc-spa-c59.html\">l&agrave;m đẹp</a>&nbsp;xe: Rửa xe; Vệ sinh, bảo dưỡng nội-ngoại thất; Vệ sinh, bảo dưỡng khoang m&aacute;y; Xịt gầm chống s&eacute;t; Phủ nano; Tẩy ố k&iacute;nh v.v&nbsp;<br />\r\n- Địa điểm l&agrave;m việc: Workshop chuy&ecirc;n chăm s&oacute;c xe; C&aacute;c đại l&yacute; &ocirc; t&ocirc; đối t&aacute;c khu vực TPHCM<br />\r\n- Thời gian l&agrave;m việc: Thứ Hai đến Thứ Bảy từ 08:00 18:00- Chủ Nhật từ 07:30 12:30</p>', '2018-06-01', 2, 'Quảng Nam', '1 năm', 7.00, 1, '2018-05-03 08:55:25', '2018-05-03 08:55:25'),
(35, 20, 19, 3, 2, 'Nhân viên bán hàng', 'Nhân viên bán hàng', 'Bán hàng', '2018-05-25', 10, 'Quảng Nam', '2 năm', 2.00, 0, '2018-05-03 14:22:09', '2018-05-03 14:22:09'),
(36, 20, 5, 5, 11, 'Tuyển nhân viên bảo vệ', 'Nhân viên bảo vệ', 'Bảo vệ xung quanh công ty', '2018-05-26', 3, 'Quảng Nam', '2 năm', 2.00, 0, '2018-05-03 14:33:55', '2018-05-03 14:33:55'),
(38, 20, 6, 1, 11, 'Tuyển nhân viên kế toán', 'Nhân viên kế toán', 'Kiểm kê sổ sách', '2018-05-17', 1, 'Quảng Nam', '2 năm', 10.00, 0, '2018-05-03 14:43:47', '2018-05-03 14:43:47'),
(87, 25, 21, 3, 8, 'Tuyển nhân viên bán phẩm', 'Bán mĩ phẩm', 'Chỉ việc bán mĩ phẩm', '2019-11-25', 27, 'Quảng Nam', '2 năm', 2.00, 0, '2018-05-03 15:55:52', '2018-05-03 15:55:52'),
(88, 26, 20, 1, 11, 'Tuyển nhân viên xây dựng', '2 vị trí', 'Kiến trúc sư các công trình trọng điểm', '2018-05-31', 2, 'Quảng nam', 'không cần', 10.00, 0, '2018-05-04 02:00:01', '2018-05-04 02:00:01');

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
(1, 'Đăng quảng cáo', 'Cyrn4N2vVj_banner-quảng-cáo-bất-động-sản-2.jpg', '2018-04-28', '<p>Đăng quảng c&aacute;o</p>', 12.00, 1, 1, 'https://www.youtube.com/watch?v=byXvpKA9Jx8', 1, 1, NULL, '2018-05-03 06:28:11'),
(3, 'Quá tải dòng người rời Thủ đô đi nghỉ lễ 30/4 1/5', 'J4e5qNEwsf_banner-quảng-cáo-bất-động-sản-4.jpg', '2018-04-12', '<p>Tr&ecirc;n một số tuyến đường dẫn tới c&aacute;c bến xe như: Trường Chinh, Giải Ph&oacute;ng, Kim Đồng, Khuất Duy Tiến, Phạm H&ugrave;ng,...cũng xảy ra &ugrave;n ứ. C&aacute;c lực lượng chức năng được huy động tối đa để ph&acirc;n luồng điều tiết giao th&ocirc;ng.</p>\r\n\r\n<p>Theo &ocirc;ng Nguyễn Tất Th&agrave;nh, Gi&aacute;m đốc bến xe Gi&aacute;p B&aacute;t, t&iacute;nh đến thời điểm 14h30, lượng h&agrave;nh kh&aacute;ch về bến đ&atilde; bắt đầu tăng. Do kỳ nghỉ lễ n&agrave;y k&eacute;o d&agrave;i n&ecirc;n theo dự kiến, trong ng&agrave;y h&ocirc;m 27/4 v&agrave; ng&agrave;y 28/4 lượng kh&aacute;ch sẽ tăng khoảng 50%. Ri&ecirc;ng chiều 27/4 ước tăng khoảng 15-20% so với ng&agrave;y thường.</p>\r\n\r\n<p>&ldquo;Trước t&igrave;nh h&igrave;nh đ&oacute;, bến đ&atilde; l&ecirc;n đầy đủ c&aacute;c phương &aacute;n bố tr&iacute; nh&acirc;n vi&ecirc;n chốt trực ngay tại nh&agrave; chờ để hướng dẫn người d&acirc;n v&agrave;o mua v&eacute;, phối hợp với lực lượng Thanh tra Sở GTVT H&agrave; Nội kiểm so&aacute;t chặt chẽ số lượng kh&aacute;ch tr&ecirc;n c&aacute;c xe trước khi xuất bến&rdquo;, &ocirc;ng Th&agrave;nh cho ha</p>', 1.00, 1, 1, 'sdsds', 1, 1, '2018-04-28 03:02:53', '2018-05-03 06:30:27');

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
(7, 'admin@gmail.com', '$2y$10$wNtMd9ee7LM3E64aDs5rbu94ctyqwDhtd4vt0gG3Y9oCa6OOZxRgy', 1, 'B7UPoAdsi9cGQRgSlicO5dSyb1HCfauIoybwVUTHqg5wTcQSgrXGFPml58nQ', NULL, NULL),
(8, 'kimngan@gmail.com', '$2y$10$7.aGVoxSb9MWR7.duXPtr.W3GR0lOChUmJJ41rMdAJmtHi3CpuYRi', 3, NULL, '2018-04-28 04:30:35', '2018-04-28 04:30:35'),
(9, 'hongtran@gmail.com', '$2y$10$u1YL/IuPBF50wek4gLLZouzF3DAvk3cVawOhkJ1ryRKf8eY94il7u', 3, NULL, '2018-04-28 04:31:10', '2018-04-28 04:31:10'),
(10, 'phamha@gmail.com', '$2y$10$BHLUuhwgS46AkHWBvtYZAejuvegXawuDxQxA.SOiVOXCmE20jXom6', 3, NULL, '2018-04-28 04:35:00', '2018-04-28 04:35:00'),
(11, 'HoangChien@gmail.com', '$2y$10$WxAMoxUIezz9Lo4okwPZVu3OLML9luDOBsqnciJ.xZ0mr2UyjQ3yK', 3, NULL, '2018-04-28 04:35:26', '2018-04-28 04:35:26'),
(12, 'HoangVu@gmail.com', '$2y$10$YSEbanKmtB6zJ4P8wUyXnOCh6DdeTIiHBVtA0zjwkzL.ytXD8rk1a', 3, NULL, '2018-04-28 04:35:59', '2018-04-28 04:35:59'),
(13, 'BaTien@gmail.com', '$2y$10$lA3miBb8qwZDmmr8gKDI6OyZ7zQbLKAYM3V9nd3uZRZADgNSmfgwS', 3, NULL, '2018-04-28 04:36:27', '2018-04-28 04:36:27'),
(14, 'LuuHoang@gmail.com', '$2y$10$KCLhmnU7BU.k.9VeFfBC8.mHkYRCf6N13KLJB3hzVEqY92LAmVdMi', 3, 'ua7F5zmqxFsJkfHJGaXlBDNo0GxttDuut4pXC8wi8r0Y8tN6mQVb1wQhyUHr', '2018-04-28 04:36:45', '2018-04-28 04:36:45'),
(15, 'VanTung123@gmail.com', '$2y$10$tCQJrRc7JPd/EqZ8fQ8OjeO7wLNx9Bj8PmEYyN/txvjTX1CF7mSwm', 3, NULL, '2018-04-28 04:37:11', '2018-04-28 04:37:11'),
(16, 'VienThong@gmail.com', '$2y$10$wBu2LNIWzDkkWNZN8E8IKOsyj/iLCr6jgIgO9Kz3T9t9KlMtraVd2', 2, 'C3iWsF5t9h8aIvNzq23rztLq3GsAFSx5IfhyCmPwvg5dLqMxHrcX029QYO1P', '2018-04-28 04:38:42', '2018-04-28 04:38:42'),
(17, 'DuocPhucVinh@gmail.com', '$2y$10$osJQELd7C3lQzuhZL2PuFOeDqRmIzT5Zx0iEclN2MMEjmIzIpiWBa', 2, NULL, '2018-04-28 04:39:32', '2018-04-28 04:39:32'),
(18, 'SongHong@gmail.com', '$2y$10$i/GvVlo0DiNuCKptAUmk3.d.5t2uXptGQ6RAWJeIkABs2q4f4N4Z6', 2, '5XhohKex9D4dpJZAXpzYkupvDcp6oTw4bwoTew6V6MAuTKttLOrbNT5yvz18', '2018-04-28 04:39:52', '2018-04-28 04:39:52'),
(19, 'ctMinhAnh@gmail.com', '$2y$10$yvD6O2lAYpelZIWVTvU7EeJ4tU0v8cJjNDFHd.OxD8l9Ftv556iY2', 2, NULL, '2018-04-28 04:41:47', '2018-04-28 04:41:47'),
(20, 'ctThepThaiNguyen@gmail.com', '$2y$10$iOo4pEaHYEXqr.Cj6IoaIuhzPJbwqhlXZWfrET6D9Ltz3IwjWskc2', 2, '5jy34NSiiVCOx5gD8GcsR2wipvZCOivFzPzPG1VggvKPJIuTL1sTxq2uWbz5', '2018-04-28 04:43:00', '2018-04-28 04:43:00'),
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
(41, 'ctXaydungHoangHa@gmail.com', '$2y$10$kEdszcND1ageAMv.kIA0NuGz557Ul8/MCeC66W6rs.eeU2lfMsT0m', 2, NULL, '2018-04-28 07:46:03', '2018-04-28 07:46:03'),
(42, 'a@gmail.com', '$2y$10$cxMPrvkM56AxchYO5oKG0.coZGGDg3g7/lpboZXWuBI0RlxD7CbWm', 2, NULL, '2018-04-28 08:34:55', '2018-04-28 08:34:55'),
(43, 'as@gmail.com', '$2y$10$GYEfbJNO64oTANDlve0f7O.R08CuCnIkxuznsYXJhJIBP1/iWHHJ2', 2, NULL, '2018-04-28 09:47:35', '2018-04-28 09:47:35'),
(44, 'anhasdsdmj1234@gmail.com', '$2y$10$u2VqnC7yd5EiiQeHrfBwRealQRBCF45bbE7IkX4mlsOg46GmxC9qW', 3, NULL, '2018-04-28 09:52:15', '2018-04-28 09:52:15'),
(46, 'asdsd1234@gmail.com', '$2y$10$yqZ69WVvJ9JPbb0wfXAO0OmYesOENRoCCXNYwdc8IRQarNXC73Vey', 3, NULL, '2018-04-28 09:55:21', '2018-04-28 09:55:21'),
(48, 'dsada4@gmail.com', '$2y$10$j3BsbDILWMKELTW9RWtX1.JpQvZEDx0AQMectpRze1.5kvnDl7vhS', 3, NULL, '2018-04-28 09:55:53', '2018-04-28 09:55:53'),
(51, 'bg@gmail.com', '$2y$10$IXXzNOm4VnriRxh.C/ifceaHkP2k10TWQODqLeQCO9IPldVneuMSi', 3, NULL, '2018-04-28 10:07:01', '2018-04-28 10:07:01'),
(52, 'minhlong@gmail.com', '$2y$10$8UD/TGXYcWHZlA7XzeOGMOcHHNYltp6T1wxPwWgrNAa0JdaEATreO', 3, 'fhf7UvE8DaOwp1QvaPKPDL2LIkUnRAaEpIPbQ9viQww4BuDlqg6Qo9sVdrfH', '2018-04-28 15:03:42', '2018-04-28 15:03:42'),
(53, 'luantm96@gmail.com', '$2y$10$.z6CAcauZUtBMq9MqzCM0.NlMmGmIOKtI7Q/M8VCrRAjNDZxcNkEO', 3, NULL, '2018-04-28 15:11:02', '2018-04-28 15:11:02'),
(54, 'minhtho@gmail.com', '$2y$10$FOPegIDivKrJQMuWj0dJSOOtDE2lBKYZwgg7bbvLxnFgmUBD4eNg.', 3, NULL, '2018-05-03 04:10:03', '2018-05-03 04:10:03'),
(55, 'cthoanganh@gmail.com', '$2y$10$twouePh6t4q.0Mt9hZ0A2uHQ157YgZn2vEy5N85TwnfjGCqSnKnrS', 2, 'DFwM0EJNWBFBbcVqLkUz6J2d0aYWQLGiipQwZ7QS1gZaUrVu5kz9oWIZfmIb', '2018-05-03 06:39:40', '2018-05-03 06:39:40'),
(56, 'ctbaohiemnhantho@gmail.com', '$2y$10$9cKZkpamfjMK.NIWPIm3Vu1LPbaLZMQaUoAwJkrsc9JrDLi7V7f8q', 2, NULL, '2018-05-03 07:23:41', '2018-05-03 07:23:41'),
(57, 'phuky@gmail.com', '$2y$10$ahHXEQTe9Etc1pN3WpKfMuDkBrmJImOkwCGRCWzT0fvpBed66GjqG', 3, 'eaY4jZB8rri7Z5W5MudqEUMluQRj65BNbG4QDBomFb7uj0uQWL8bqSJWr7zp', '2018-05-03 11:08:51', '2018-05-03 11:08:51'),
(58, 'huonggiang@gmail.com', '$2y$10$21IEwSEw.Mcf0HBJb7pVJOUv.hvF61nQWfyrQ6ju/WZY/H0Xdd9HW', 3, 'bk9Yf7wTMHXxkpEO4jYFeOoKjZ3pFqMandoIIXXybptRNPEEl0aFKMA69oWw', '2018-05-03 15:15:58', '2018-05-03 15:15:58'),
(59, 'cthoangcau@gmail.com', '$2y$10$DHqrYufT/G1LFFQojQxTl.CR2wkO0/KO39j1ZwuEJd1qzj8YfUBFy', 2, NULL, '2018-05-03 15:20:59', '2018-05-03 15:20:59'),
(60, 'luantm1234@gmail.com', '$2y$10$TVu9BGluWbzhgjnDPZ7zxuhyr7/8A9EtTAr99QPgzq1uYLZtkvUia', 2, NULL, '2018-05-03 15:47:13', '2018-05-03 15:47:13'),
(61, 'minhanh123@gmail.com', '$2y$10$ViACBCSomuamqbkcDalwkOdwRZA85lHcMfjFOBA8kKoxdb/0.bv8W', 3, 'LXag1LoSIdDLul02nfZ6sgEMTx4LiTWQUG5I8DzJtmR66j91r5OrLcD2J2O1', '2018-05-04 01:53:02', '2018-05-04 01:53:02'),
(62, 'congtyPMD@gmail.com', '$2y$10$a/GW2jNxMLMWRuWeIDizYOogUchkIkbLVXO0xjvGvTxhrfwULnBKy', 2, '4337dgfk3L232c4GYzONRZINWLzisWUXLIIUSlr1yGFnqLQhmzKFx8CHWsj4', '2018-05-04 01:58:40', '2018-05-04 01:58:40');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `kynangxinviec`
--
ALTER TABLE `kynangxinviec`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `phieudangtuyen`
--
ALTER TABLE `phieudangtuyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
