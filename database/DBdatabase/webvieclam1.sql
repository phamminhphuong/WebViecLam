-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 26, 2018 lúc 02:46 PM
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
-- Cấu trúc bảng cho bảng `chitietquangcao`
--

CREATE TABLE `chitietquangcao` (
  `MaQuangCao` int(10) UNSIGNED NOT NULL,
  `MaHopDong` int(10) UNSIGNED NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DonGia` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Công nghệ thông tin', '2018-04-26 02:13:24', '2018-04-26 02:13:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hopdongquangcao`
--

CREATE TABLE `hopdongquangcao` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaNTD` int(10) UNSIGNED NOT NULL,
  `NgayLap` date NOT NULL,
  `NoiDungHopDong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hopdongquangcao`
--

INSERT INTO `hopdongquangcao` (`id`, `MaNTD`, `NgayLap`, `NoiDungHopDong`, `created_at`, `updated_at`) VALUES
(4, 1, '2018-04-20', '<p>&aacute;dadasđ</p>', '2018-04-26 08:10:09', '2018-04-26 08:10:09');

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
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TinhTrangHonNhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LuongKhoiDiem` double(8,2) NOT NULL,
  `NoiLamViec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KinhNghiem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NguyenVongLamViec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `NoiDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaNTD` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Người tìm việc', NULL, NULL),
(3, 'Nhà tuyển dụng', '2018-04-26 02:59:46', '2018-04-26 02:59:46'),
(4, 'admin', '2018-04-26 04:01:31', '2018-04-26 04:01:31');

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
(14, '2018_04_26_085628_create_loaitai_khoan_table', 1),
(15, '2014_10_12_000000_create_users_table', 2),
(16, '2014_10_12_100000_create_password_resets_table', 2),
(17, '2018_04_09_221359__create__chuyen_nganh_table', 3),
(18, '2018_04_09_221504__create__trinh_do_table', 3),
(19, '2018_04_09_221728__create__chung_chi_table', 3),
(20, '2018_04_09_221925__create__quang_cao_table', 3),
(21, '2018_04_09_222250__create__nha_tuyen_dung_table', 3),
(22, '2018_04_09_223606__create__phieu_dang_tuyen_table', 3),
(23, '2018_04_09_224215__create__ho_so_xin_viec_table', 3),
(24, '2018_04_09_232440__create__hop_dong_quang_cao_table', 3),
(25, '2018_04_09_232753__create__chi_tiet_quang_cao_table', 3),
(26, '2018_04_09_233124__create__ky_nang_xin_viec_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhatuyendung`
--

CREATE TABLE `nhatuyendung` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenNTD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChiWeb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiThieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaTaiKhoan` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhatuyendung`
--

INSERT INTO `nhatuyendung` (`id`, `TenNTD`, `DiaChi`, `DienThoai`, `DiaChiWeb`, `GioiThieu`, `HinhAnh`, `MaTaiKhoan`, `created_at`, `updated_at`) VALUES
(1, 'Công sy song Hong', 'Thai binh', '12345678910', 'ádsdsd', '<p>l&agrave; c&ocirc;ng ty truyền thong</p>', 'gciirq_luudiecphi2.jpg', 2, NULL, '2018-04-26 03:30:56'),
(2, 'dffdf', 'dfdfdfd', 'dfdsfdf', 'dfdsff', '<p>dsfsdfsdfsdfs</p>', 'G2ZsE7_luuDiecPhi.png', 3, '2018-04-26 03:28:04', '2018-04-26 03:28:04');

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
  `ViTriTuyenDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTaCV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThoiHanNopHoSo` date NOT NULL,
  `SoLuongTuyenDung` int(11) NOT NULL,
  `NoiLamViec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `YeuCauKinhNghiem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LuongKhoiDiem` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quangcao`
--

CREATE TABLE `quangcao` (
  `id` int(10) UNSIGNED NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThoiHanDangQC` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Đại học', '2018-04-26 02:13:36', '2018-04-26 02:13:36');

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
(1, 'minha@gmail.com', '123456', 1, NULL, NULL, NULL),
(2, 'a@gmail.com', '$2y$10$GB8QltbDMMYn8VJRdLXckec1AtWdXIr0gQ35iZquOFT2wu/DYn4.u', 1, NULL, '2018-04-26 02:58:54', '2018-04-26 02:58:54'),
(3, 'anh1@gmail.com', '$2y$10$8P0pOUoZTAXqhs7RgzRjvuhqxXyf0biUeCUI5VPjjioVt1f5FK1VK', 3, NULL, '2018-04-26 03:07:06', '2018-04-26 03:07:06'),
(5, 'hai@gmail.com', '$2y$10$teo5f8195DTEcYfSjRp1b.d0MeyWrwam0D3RfpiVDjcLAdlAo7.oa', 1, 'ruEbYT537xykd9PwEJtEXGcWIQILsrHsqpUzXqzXyJI4eOLBIuyA9euiwA22', '2018-04-26 04:26:18', '2018-04-26 04:26:18'),
(6, 'phuong@gmail.com', '$2y$10$9/yPGe5YT1YSAh9OslU/0.HLvAUkPlJe7nttjYPPytGneT39jE/0C', 4, 'qg5DOdGWRrXFVd0TGZgi0aGGT8EROPfv64Wv3MIN0p04xDaq8FRhRBd0wyIL', '2018-04-26 07:02:34', '2018-04-26 07:02:34');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietquangcao`
--
ALTER TABLE `chitietquangcao`
  ADD PRIMARY KEY (`MaQuangCao`),
  ADD KEY `chitietquangcao_mahopdong_foreign` (`MaHopDong`);

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
-- Chỉ mục cho bảng `hopdongquangcao`
--
ALTER TABLE `hopdongquangcao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hopdongquangcao_mantd_foreign` (`MaNTD`);

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
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `chitietquangcao`
--
ALTER TABLE `chitietquangcao`
  MODIFY `MaQuangCao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chungchi`
--
ALTER TABLE `chungchi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chuyennganh`
--
ALTER TABLE `chuyennganh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hopdongquangcao`
--
ALTER TABLE `hopdongquangcao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hosoxinviec`
--
ALTER TABLE `hosoxinviec`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `kynangxinviec`
--
ALTER TABLE `kynangxinviec`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `phieudangtuyen`
--
ALTER TABLE `phieudangtuyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `trinhdo`
--
ALTER TABLE `trinhdo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietquangcao`
--
ALTER TABLE `chitietquangcao`
  ADD CONSTRAINT `chitietquangcao_mahopdong_foreign` FOREIGN KEY (`MaHopDong`) REFERENCES `hopdongquangcao` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietquangcao_maquangcao_foreign` FOREIGN KEY (`MaQuangCao`) REFERENCES `quangcao` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `hopdongquangcao`
--
ALTER TABLE `hopdongquangcao`
  ADD CONSTRAINT `hopdongquangcao_mantd_foreign` FOREIGN KEY (`MaNTD`) REFERENCES `nhatuyendung` (`id`) ON DELETE CASCADE;

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
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_maloaitaikhoan_foreign` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `loaitaikhoan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
