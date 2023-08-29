-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 29, 2023 lúc 04:37 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namead` varchar(255) NOT NULL,
  `phonead` varchar(255) NOT NULL,
  `passwordad` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `namead`, `phonead`, `passwordad`, `created_at`, `updated_at`) VALUES
(2, 'Sơn', '0326822494', '123456789', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahd` varchar(255) NOT NULL,
  `namePro` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` char(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) NOT NULL,
  `namePro` varchar(255) NOT NULL,
  `pricePro` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_08_11_094049_create_user_p_s_table', 1),
(3, '2023_08_11_094150_create_products_table', 1),
(4, '2023_08_11_094307_create_bills_table', 1),
(5, '2023_08_11_094356_create_carts_table', 1),
(6, '2023_08_22_234959_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namePro` varchar(255) NOT NULL,
  `pricePro` varchar(255) NOT NULL,
  `aboutPro` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `class` char(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `namePro`, `pricePro`, `aboutPro`, `file`, `class`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Kem Dưỡng Ẩm Neutrogena Cấp Nước Cho Da Khô Hydro Boost Nourishing Gel ', '450.000', '<p><strong>Kem dưỡng ẩm Neutrogena Hydro Boost Gel Cream 50g</strong>&nbsp; -&nbsp;Chiết xuất Olive gi&uacute;p da chống oxy h&oacute;a hiệu quả, gi&uacute;p sửa chữa c&aacute;c tổn thương da bị ph&aacute; hủy bởi m&ocirc;i trường. Th&agrave;nh phần dễ d&', 'upload_files/k1.png', 'kem', NULL, '2023-08-11 04:59:53', '2023-08-11 04:59:53'),
(3, 'Kem Dưỡng Da Ban Đêm Klairs Midnight Blue Calming Cream 30ml', '390.000', '<p><strong>Klairs Kem Dưỡng Midnight Blue Calming Cream 30ml</strong>&nbsp;gi&uacute;p phục hồi v&agrave; l&agrave;m dịu da khi bị k&iacute;ch ứng, phục hồi da sau điều trị (lazer, tẩy da chết), l&agrave;m giảm sưng tấy vết thương sau khi trị mụn hoặc lấy', 'upload_files/k2.png', 'kem', NULL, '2023-08-11 05:02:06', '2023-08-11 05:02:06'),
(4, 'Kem Dưỡng Trắng Hồng Tinh Khiết Cho Da Ban Đêm Pond\'s White Beauty', '200.000', '<p>Pond&rsquo;s l&agrave; thương hiệu trực thuộc tập đo&agrave;n Unilever chuy&ecirc;n sản xuất h&agrave;ng ti&ecirc;u d&ugrave;ng, mỹ phẩm, sức khỏe&hellip; lớn nhất thế giới. Bước ngoặc ra đời của nh&atilde;n h&agrave;ng n&agrave;y ch&iacute;nh l&agrave', 'upload_files/k3.png', 'kem', NULL, '2023-08-11 06:29:12', '2023-08-11 06:29:12'),
(5, 'Kem Dưỡng Da Mặt Chuyên Dùng Cho Ban Ngày MIRI White Perfect Facial Cream', '450.000', '<p>Kết th&acirc;n với White Perfect Facial Cream - Day Cream MIRI được chế t&aacute;c từ C&uacute;c La M&atilde; bạn sẽ thấy y&ecirc;u hơn khoảnh khắc l&agrave;n da được đ&aacute;nh thức ngọt ng&agrave;o mỗi ng&agrave;y. Với kết cấu mỏng mịn đặc trưng, lớ', 'upload_files/k4.png', 'kem', NULL, '2023-08-11 06:31:15', '2023-08-11 06:31:15'),
(6, 'Kem Dưỡng Ẩm Và Chống Nắng Làm Sáng Da Ban Ngày Cetaphil Bright Healthy Radiance', '650.000', '<p><strong>M&ocirc; tả:</strong>&nbsp;Kem dưỡng gi&uacute;p cung cấp dưỡng chất v&agrave; độ ẩm cho da, đồng thời&nbsp;ngăn ngừa mụn, chống nhăn da v&agrave; cải thiện c&aacute;c khuyết điểm c&oacute; tr&ecirc;n da, mang lại l&agrave;n da tươi s&aacute;ng', 'upload_files/k5.png', 'kem', 'Bán chạy', '2023-08-11 06:34:01', '2023-08-22 17:31:50'),
(7, 'Kem Dưỡng Ẩm Skin1004 Madagascar Centella Cream', '410.000', '<p><br />\r\nKem Dưỡng Ẩm&nbsp;<strong>Madagascar Centella Soothing Cream</strong>&nbsp;chứa 72% chiết xuất rau m&aacute; c&ugrave;ng với 4 loại Ceramide c&oacute; nguồn gốc từ thực vật gi&uacute;p tăng cường h&agrave;ng r&agrave;o bảo vệ da, nu&ocirc;i dưỡ', 'upload_files/k6.png', 'kem', NULL, '2023-08-11 07:12:28', '2023-08-11 07:12:28'),
(8, 'NEUTROGENA Kem Dưỡng Ẩm Cấp Nước Neutrogena Hydro Boost Water Gel', '250.000', '<p>Kem Dưỡng Ẩm Cung Cấp Nước Cho Da Neutrogena Hydro Boost Water Gel 50g kết cấu dạng gel, l&ecirc;n da mỏng nhẹ, thẩm thấu nhanh, kh&ocirc;ng g&acirc;y nhờn r&iacute;t hay bết d&iacute;nh. Sản phẩm gi&uacute;p bổ sung nước v&agrave; dưỡng chất cho l&agr', 'upload_files/k7.png', 'kem', NULL, '2023-08-11 07:14:14', '2023-08-11 07:14:14'),
(9, 'Kem Dưỡng Trắng Da Angel\'s Liquid 7 Day Whitening Program Glutathione', '380.000', '<p>Kem Dưỡng S&aacute;ng Da 7Day Whitening Program Glutathione 700 V-Cream đến từ thương hiệu Angel&#39;s Liquid được chiết xuất từ thi&ecirc;n nhi&ecirc;n, l&agrave;nh t&iacute;nh v&agrave; kh&ocirc;ng l&agrave;m tổn thương da, gi&uacute;p cải thiện t&oc', 'upload_files/k8.png', 'kem', NULL, '2023-08-11 07:15:56', '2023-08-11 07:15:56'),
(10, 'Son Shu Uemura Rouge Unlimited Matte M RD156 - Đỏ Hồng', '850.000', '<p><strong>Son L&igrave; Shu Uemura Rouge Unlimited Matte 3g</strong>&nbsp;từ thương hiệu Shu Uemura của Nhật Bản l&agrave; d&ograve;ng son trang điểm m&ocirc;i cao cấp với sự kết hợp ho&agrave;n mỹ giữa chất son l&igrave; thượng hạng v&agrave; kết cấu mị', 'upload_files/s1.png', 'sonmoi', 'Bán chạy', '2023-08-11 07:18:49', '2023-08-22 17:31:33'),
(11, 'Son Kem Lì Merzy Bite The Beat Mellow Tint #M6 Tony Ruby Đỏ Ruby', '320.000', '<p>- Son kem&nbsp;Merzy Bite The Beat Mellow Tint thiết kế vỏ son c&oacute; m&agrave;u sắc đặc trưng được thể hiện giống với m&agrave;u son b&ecirc;n trong.</p>\r\n\r\n<p>- Khả năng l&ecirc;n m&agrave;u cực kỳ chuẩn, bền m&agrave;u, kh&ocirc;ng lem tr&ocirc;i', 'upload_files/s2.png', 'sonmoi', NULL, '2023-08-11 07:20:02', '2023-08-11 07:20:02'),
(12, 'Son Kem Lì Merzy Dreamy Late Night Mellow Tint #M13 Đỏ Lạnh Trầm', '180.000', '<p>Son kem l&igrave; Merzy Dreamy Late Night Mellow Tint m&agrave;u của m&agrave;n đ&ecirc;m &ecirc;m dịu l&agrave;m cho đ&ocirc;i m&ocirc;i ửng m&agrave;u tự nhi&ecirc;n v&agrave; mang lại lớp phủ mơ m&agrave;ng.</p>\r\n\r\n<p>- Chất son mịn mượt nhẹ nh&agra', 'upload_files/s3.png', 'sonmoi', NULL, '2023-08-11 07:22:12', '2023-08-11 07:22:12'),
(13, 'Son Kem Lì Merzy The First Velvet Tint V15 Màu Cam Ánh Nâu', '190.000', '<p>Son kem&nbsp;Merzy The First Velvet Tint Season 3 (Ver Red)&nbsp;thiết kế mang phong c&aacute;ch g&acirc;y ấn tượng với gam m&agrave;u đỏ bắt mắt.&nbsp;Kết cấu nhung mịn, chuẩn m&agrave;u ngay từ lần lướt cọ đầu ti&ecirc;n.&nbsp;Độ b&aacute;m m&agrave;', 'upload_files/s4.png', 'sonmoi', 'Bán chạy', '2023-08-11 07:23:30', '2023-08-22 17:32:16'),
(14, 'Son Kem Lì Merzy Bite The Beat Mellow Tint #M1 Mahogany', '250.000', '<p>- Son kem&nbsp;Merzy Bite The Beat Mellow Tint thiết kế vỏ son c&oacute; m&agrave;u sắc đặc trưng được thể hiện giống với m&agrave;u son b&ecirc;n trong.</p>\r\n\r\n<p>- Khả năng l&ecirc;n m&agrave;u cực kỳ chuẩn, bền m&agrave;u, kh&ocirc;ng lem tr&ocirc;i', 'upload_files/s5.png', 'sonmoi', NULL, '2023-08-11 07:25:34', '2023-08-11 07:25:34'),
(15, 'Son Kem Lì Merzy The First Velvet Tint V6 Màu Đỏ Gạch', '120.000', '<p>Merzy&nbsp;l&agrave; một thương hiệu mỹ phẩm đ&igrave;nh đ&aacute;m của H&agrave;n Quốc nổi tiếng với ph&acirc;n kh&uacute;c son m&ocirc;i. Đ&acirc;y được đ&aacute;nh gi&aacute; l&agrave; d&ograve;ng son c&oacute; gi&aacute; cả ở mức tầm trung v&agrave', 'upload_files/s6.png', 'sonmoi', NULL, '2023-08-11 07:27:33', '2023-08-11 07:27:33'),
(16, 'Son Tint Bóng Merzy Aurora Dewy Tint #DT10 CinnamonGlaze Đỏ Quế Ánh Nâu', '450.000', '<p>- Son tint b&oacute;ng&nbsp;Merzy Aurora Dewy Tint&nbsp;thiết kế g&acirc;y ấn tượng v&agrave; bắt mắt với t&ocirc;ng m&agrave;u t&iacute;m chủ đạo.</p>\r\n\r\n<p>- Chứa 30% tinh chất dưỡng ẩm gi&uacute;p l&agrave;m mềm m&ocirc;i tức th&igrave;.</p>\r\n\r\n<p>-', 'upload_files/s7.png', 'sonmoi', 'Bán chạy', '2023-08-11 07:32:49', '2023-08-22 17:30:14'),
(17, 'Son Kem Lì Merzy Noir In The Velvet Tint #V25 Đỏ Thuần', '320.000', '<p>- Son kem l&igrave; Merzy Noir In The Velvet Tint&nbsp;nổi bật trong d&ograve;ng chảy m&agrave;n đ&ecirc;m, mang m&agrave;u sắc đầy cảm x&uacute;c như tan chảy tr&ecirc;n đ&ocirc;i m&ocirc;i.</p>\r\n\r\n<p>- Chất son mịn l&igrave;, kết cấu&nbsp;nhẹ nh&agra', 'upload_files/s8.png', 'sonmoi', NULL, '2023-08-11 07:35:19', '2023-08-11 07:35:19'),
(18, 'Nước Hoa Nữ Dolce & Gabbana The One EDT', '25.400.000', '<p>Dolce &amp; Gabbana&nbsp;đ&atilde; tr&igrave;nh l&agrave;ng d&ograve;ng nước hoa d&agrave;nh cho nữ&nbsp;The One Eau De Farfum&nbsp;v&agrave;o năm 2006 v&agrave; đạt được th&agrave;nh c&ocirc;ng vang dội. V&agrave; tiếp tục v&agrave;o 9/2017, một phi&e', 'upload_files/n1.png', 'nuochoa', 'Bán chạy', '2023-08-11 07:40:03', '2023-08-22 17:29:57'),
(19, 'Nước Hoa Nữ Karl Lagerfeld Fleur D\'Orchidee Edp', '1.999.000', '<p>Karl Lagerfeld Fleur D&#39;Orchidee For Women sở hữu vẻ đẹp của người phụ nữ hiện đại v&agrave; sang trọng, tạo n&ecirc;n sức hấp dẫn tuyệt đối khi một ai v&ocirc; t&igrave;nh lướt qua c&ocirc; N&agrave;ng đang &quot;mặc&quot; tr&ecirc;n da m&ugrave;i ', 'upload_files/n2.png', 'nuochoa', 'Bán chạy', '2023-08-11 07:43:50', '2023-08-22 17:32:21'),
(21, 'Nước Hoa Nữ Versace Eros Pour Femme EDP- Ý', '152.500.000', '<p>Kế thừa sự th&agrave;nh c&ocirc;ng của d&ograve;ng Nước Hoa Nam&nbsp;Versace Eros&nbsp;từ 2012, cộng với mong muốn mang đến sự gợi cảm tự nhi&ecirc;n v&agrave; lắng đọng như n&eacute;t đẹp hoang sơ,&nbsp;thương hiệu&nbsp;Versace&nbsp;đ&atilde; cho ra đ', 'upload_files/n4.png', 'nuochoa', 'Bán chạy', '2023-08-11 07:49:17', '2023-08-22 17:30:06'),
(22, 'Nước Hoa Nữ Anna Sui Fantasia EDT', '2.250.000', '<p>Anna Sui&nbsp;l&agrave; một nh&agrave; thiết kế thời trang người Mỹ gốc Trung Quốc. Cửa h&agrave;ng đầu ti&ecirc;n của&nbsp;Anna Sui&nbsp;được mở ra tại Soho v&agrave;o năm 1992. D&ograve;ng nước hoa đầu ti&ecirc;n được đặt theo t&ecirc;n c&ocirc; &ldq', 'upload_files/n5.png', 'nuochoa', NULL, '2023-08-11 07:50:59', '2023-08-11 07:50:59'),
(23, 'Nước Hoa VILLE DE L\'AMOUR', '800.000', '<p>Nước hoa lu&ocirc;n được xem l&agrave; vũ kh&iacute; kh&ocirc;ng lời v&agrave; l&agrave; lớp trang phục cuối c&ugrave;ng kh&ocirc;ng thể thiếu của mỗi người ch&uacute;ng ta. Xuất xứ từ Dubai - một quốc gia gi&agrave;u c&oacute; v&agrave; xa xỉ bậc nhất', 'upload_files/n6.png', 'nuochoa', NULL, '2023-08-11 07:52:33', '2023-08-11 07:52:33'),
(24, 'Nước Hoa DAMSEL EXQUISITE', '600.000', '<p>Nước hoa lu&ocirc;n được xem l&agrave; vũ kh&iacute; kh&ocirc;ng lời v&agrave; l&agrave; lớp trang phục cuối c&ugrave;ng kh&ocirc;ng thể thiếu của mỗi người ch&uacute;ng ta. Xuất xứ từ Dubai - một quốc gia gi&agrave;u c&oacute; v&agrave; xa xỉ bậc nhất', 'upload_files/n7.png', 'nuochoa', NULL, '2023-08-11 07:54:17', '2023-08-11 07:54:17'),
(25, 'Nước Hoa Nữ Dolce & Gabbana Dolce EDP', '8.000.000', '<p>Dolce&amp;Gabbana l&agrave; h&atilde;ng nước hoa &Yacute;. Ng&agrave;nh nghề kinh doanh của Dolce&amp;Gabbana được ph&acirc;n loại v&agrave;o nh&oacute;m Thời trang. H&atilde;ng nước hoa n&agrave;y l&agrave; thương hiệu con của Beaute Prestige Internat', 'upload_files/n8.png', 'nuochoa', 'Bán chạy', '2023-08-11 07:56:15', '2023-08-22 17:31:41'),
(26, 'Nước Hoa Nữ Dolce & Gabbana Dolce Rose EDT', '250.000', '<p>Dolce &amp; Gabbana giới thiệu hương thơm mới nhất của bộ sưu tập Dolce d&agrave;nh ri&ecirc;ng để t&ocirc;n vinh hương thơm v&agrave; vẻ đẹp của hoa hồng. Đo&aacute; hồng Dolce Rose c&oacute; m&agrave;u đỏ, gi&ograve;n v&agrave; c&oacute; m&ugrave;i t', 'upload_files/n9.png', 'nuochoa', NULL, '2023-08-11 08:00:09', '2023-08-11 08:00:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_p_s`
--

CREATE TABLE `user_p_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_p_s`
--

INSERT INTO `user_p_s` (`id`, `name`, `phone`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'caoson1111', '123123123', '$2y$10$oK0nTiUEKr.tkUTUxCYuMu.M1O8Z8yaos.2M8A6bqaRdO6UFUoGja', NULL, '2023-08-22 17:16:12', '2023-08-22 17:16:12'),
(2, 'Peter Pan', '0907320041', '$2y$10$IBg67TTDZzWWPvXETE.rte0lwpb2BqxP4l2yrlSAJwuWNFzWlrznG', NULL, '2023-08-23 07:51:33', '2023-08-23 07:51:33');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_p_s`
--
ALTER TABLE `user_p_s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `user_p_s`
--
ALTER TABLE `user_p_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
