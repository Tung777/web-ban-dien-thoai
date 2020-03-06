-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 09:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `Madm` int(10) NOT NULL,
  `Tendm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`Madm`, `Tendm`) VALUES
(1, 'Iphone'),
(2, 'Samsung'),
(6, 'Oppo'),
(9, 'Nokia'),
(10, 'Vivo');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gioitinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `email`, `password`, `Ten`, `Gioitinh`, `Diachi`, `SDT`, `Avatar`) VALUES
(4, 'kh1', '1', 'vu thanh tung', 'Nam', 'Ha noi', '0356120129', '1.jpg'),
(5, 'kh2', '1', 'ngÃ¢n', 'Ná»¯', 'kaka1239x199', '0356120129', '2.jpg'),
(6, 'kh3', '1', 'Lê Văn Tiến', 'Nam', 'Hà Nội', '0356120129', 'anh10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nhanxetsanpham`
--

CREATE TABLE `nhanxetsanpham` (
  `id_nx` int(10) NOT NULL,
  `id_sp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dien_thoai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `binh_luan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_gio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `Masp` int(10) NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bao_hanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phu_kien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinh_trang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khuyen_mai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chi_tiet_sp` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dac_biet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tendm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`Masp`, `ten_sp`, `gia_sp`, `bao_hanh`, `phu_kien`, `tinh_trang`, `khuyen_mai`, `trang_thai`, `chi_tiet_sp`, `dac_biet`, `Tendm`, `anh_sp`) VALUES
(11, 'Iphone 11 Pro max 256GB', '37.000.000', '12 tháng', 'Sạc,Tai nghe,Hộp,Cáp,Cây lấy sim,Sách hướng dẫn', 'Còn hàng', '36.490.000', 'Mới', 'iPhone 11 Pro Max 256GB là chiếc iPhone cao cấp nhất trong bộ 3 iPhone Apple giới thiệu trong năm 2019 và quả thực chiếc smartphone này mang trong mình nhiều trang bị xứng đáng với tên gọi \"Pro\".', 'Pro về camera sau Camera là một trong những điểm nâng cấp mạnh mẽ nhất năm nay Apple mang đến cho chiếc iPhone 11 Pro Max.', 'Iphone', 'anh1.jpg'),
(12, 'Iphone11 512GB', '43.990.000', '10 tháng', 'Sạc, Tai nghe, Hộp, Cáp, Cây Lấy Sim, Sách hướng dẫn', 'Còn hàng', '43.990.000', 'Mới', 'Để tìm kiếm một chiếc smartphone có hiệu năng mạnh mẽ và có thể sử dụng mượt mà trong 2-3 năm tới thì không có chiếc máy nào xứng đang hơn chiếc iPhone 11 Pro Max 512GB mới ra mắt trong năm 2019 của Apple.', 'Hiệu năng \"đè bẹp\" mọi đối thủ iPhone 11 Pro Max 512GB năm nay sử dụng chip Apple A13 Bionic mới nhất, nhanh và tiết kiệm điện hơn so với A12 năm ngoái.', 'Iphone', 'anh2.jpg'),
(13, 'Iphone11 64GB', '21.990.000', '11.5 tháng', 'Sạc,Tai nghe,Cây lấy sim,Cáp,Sách hướng dẫn,Hộp', 'Còn hàng', '21.990.000', 'Mới', 'Sau bao nhiêu chờ đợi cũng như đồn đoán thì cuối cùng Apple đã chính thức giới thiệu bộ 3 siêu phẩm iPhone 11 mạnh mẽ nhất của mình vào tháng 9/2019. Có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như chiếc iPhone Xr năm ngoái, đó chính là phiên bản iPhone 11 64GB.', 'Nâng cấp mạnh mẽ về camera Nói về nâng cấp thì camera chính là điểm có nhiều cải tiến nhất trên thế hệ iPhone mới.', 'Iphone', 'anh3.jpg'),
(14, 'Iphone 11 pro Max 64GB', '33.390.000', '10 tháng', 'Sạc,Tai nghe,Hộp,Cáp,Cây lấy sim,Sách hướng dẫn', 'Còn hàng ', '32.390.000', 'Mới', 'Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.', 'Camera được cải tiến mạnh mẽ Chắc chắn lý do lớn nhất mà bạn muốn nâng cấp lên iPhone 11 Pro Max chính là cụm camera mới được Apple nâng cấp rất nhiều.', 'Iphone', 'anh4.jpg'),
(15, 'Iphone Xs Max 256 GB', '33.900.000', '9.5 tháng', ' Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim', 'Còn hàng', '32.490.000', 'Mới', 'Sau 1 năm mong chờ, chiếc smartphone cao cấp nhất của Apple đã chính thức ra mắt mang tên iPhone Xs Max 256 GB. Máy các trang bị các tính năng cao cấp nhất từ chip A12 Bionic, dàn loa đa chiều cho tới camera kép tích hợp trí tuệ nhân tạo.', 'Hiệu năng đỉnh cao cùng chip Apple A12 iPhone Xs Max được Apple trang bị cho con chip mới toanh hàng đầu của hãng mang tên Apple A12.  Chip A12 Bionic được xây dựng trên tiến trình 7nm đầu tiên mà hãng sản xuất với 6 nhân đáp ứng vượt trội trong việc xử l', 'Iphone', 'anh5.jpg'),
(16, 'Samsung Galaxy S20+', '23.990.000', '12 tháng ', 'Tai nghe Samsung Galaxy Buds+, Sạc', 'Còn hàng', '21.990.000', 'Mới', 'Màn hình 6.7 Quad Hd', 'Pin:4500 Mah, có sạc nhanh', 'Samsung', 'anh6.jpg'),
(17, 'Samsung Galaxy A71', '10.490.000', '11.5 tháng', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Còn hàng', '10.190.000', 'Mới', 'Sau A51, Samsung tiếp tục ra mắt Galaxy A71 là đại diện kế tiếp thuộc thế hệ smartphone Galaxy A 2020. Máy được cải tiến với camera macro siêu cận đột phá, camera chính lên đến 64 MP cùng thiết kế thời thượng và cao cấp.', 'Màn hình lớn, trải nghiệm tràn viền cực đã Galaxy A71 sở hữu màn hình tràn viền Infinity-O với rãnh camera được đặt chính giữa tương tự như trên flagship Note 10. Điểm cộng là phần rãnh camera nay đã được làm rất nhỏ, ít gây chú ý, cho trải nghiệm hình ản', 'Samsung', 'anh7.jpg'),
(18, 'Điện thoại Samsung Galaxy Fold', '50.000.000', '12 tháng', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Còn hàng', '48.000.000', 'Mới', 'Sau rất nhiều chờ đợi thì Samsung Galaxy Fold - chiếc smartphone màn hình gập đầu tiên của Samsung cũng đã chính thức trình làng với thiết kế mới lạ.', 'Thiết kế 2 màn hình, màn hình uốn dẻo Samsung Galaxy Fold không chỉ sở hữu một màn hình có thể uốn dẻo mà còn có một màn hình riêng, để có thể sử dụng độc lập khi gập máy lại.', 'Samsung', 'anh8.jpg'),
(19, 'Điện thoại Samsung Galaxy Z Flip', '36.000.000', '12 tháng', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Còn hàng', '35.000.000', 'Mới', 'Cuối cùng sau bao nhiêu thời gian chờ đợi, chiếc điện thoại Samsung Galaxy Z Flip đã được Samsung ra mắt tại sự kiện Unpacked 2020. Siêu phẩm với thiết kế màn hình gập vỏ sò độc đáo, hiệu năng tuyệt đỉnh cùng nhiều công nghệ thời thượng, dẫn dầu 2020.', 'Đột phá với thiết kế màn hình gập Samsung Galaxy Z Flip được thiết kế với kiểu dáng màn hình gập lấy ý tưởng từ dòng sản phẩm Galaxy Fold từng gây nhiều tiếng vang trong năm 2019.', 'Samsung', 'anh9.jpg'),
(20, 'Samsung Galaxy S20 Ultra', '21.490.000', '10 tháng', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Còn hàng', '20.000.000', 'Mới', 'Chính 12 MP & Phụ 64 MP, 12 MP', 'Góc siêu rộng (Ultrawide), Góc rộng (Wide), Zoom quang học, Xoá phông, Quay chậm (Slow Motion), Trôi nhanh thời gian (Time Lapse), Ban đêm (Night Mode), A.I Camera, Lấy nét theo pha (PDAF), Quay siêu chậm (Super Slow Motion), Tự động lấy nét (AF), Chạm lấ', 'Samsung', 'anh10.jpg'),
(22, 'Iphone 7', '5.000.000', '8 tháng', 'tai nghe,sạc', 'Còn hàng', '4.800.000', 'Cũ', 'chi tiết', 'đặc biệt', 'Iphone', 'anh11.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`Madm`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `nhanxetsanpham`
--
ALTER TABLE `nhanxetsanpham`
  ADD PRIMARY KEY (`id_nx`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`Masp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `Madm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nhanxetsanpham`
--
ALTER TABLE `nhanxetsanpham`
  MODIFY `id_nx` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `Masp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
