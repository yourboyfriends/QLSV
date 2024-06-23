-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 18, 2023 lúc 03:39 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qldsv_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dang_nhap`
--

CREATE TABLE `tbl_dang_nhap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dang_nhap`
--

INSERT INTO `tbl_dang_nhap` (`id`, `email`, `mat_khau`) VALUES
(1, 'nhamatpho@gmail.com', '9da1a452df80b9e0d716905c7fbd187b');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_diemhocphan`
--

CREATE TABLE `tbl_diemhocphan` (
  `msv` varchar(10) NOT NULL,
  `mhp` varchar(10) NOT NULL,
  `A` int(2) DEFAULT NULL,
  `B` int(2) DEFAULT NULL,
  `C` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_diemhocphan`
--

INSERT INTO `tbl_diemhocphan` (`msv`, `mhp`, `A`, `B`, `C`) VALUES
('1721050251', '7080116', 7, 8, 8),
('1721050409', '7080116', 0, 0, 6),
('1821050160', '7080116', 8, 9, 10),
('1821050161', '7080116', 0, 0, 8),
('1821050709', '7080116', 8, 7, 10),
('1821050942', '7080116', 7, 8, 8),
('1821051099', '7080116', 6, 9, 10),
('1921050080', '7080116', 8, 8, 10),
('1921050114', '7080116', 5, 7, 6),
('1921050195', '7080116', 5, 7, 6),
('1921050206', '7080116', 8, 8, 8),
('1921050245', '7080116', 0, 0, 6),
('1921050346', '7080116', 8, 9, 10),
('1921050563', '7080116', 8, 6, 10),
('1921050700', '7080116', 8, 7, 8),
('1921050769', '7080116', 6, 8, 7),
('2021050113', '7080116', 6, 7, 6),
('2021050151', '7080116', 6, 8, 8),
('2021050153', '7080116', 7, 8, 8),
('2021050160', '7080116', 8, 8, 9),
('2021050181', '7080116', 0, 0, 6),
('2021050206', '7080116', 5, 9, 10),
('2021050222', '7080116', 5, 9, 10),
('2021050246', '7080116', 8, 8, 9),
('2021050266', '7080116', 5, 7, 6),
('2021050270', '7080116', 8, 9, 10),
('2021050312', '7080116', 8, 8, 9),
('2021050319', '7080116', 6, 8, 9),
('2021050326', '7080116', 8, 9, 10),
('2021050343', '7080116', 8, 9, 10),
('2021050344', '7080116', 8, 8, 8),
('2021050352', '7080116', 7, 7, 6),
('2021050362', '7080116', 7, 7, 6),
('2021050363', '7080116', 0, 0, 6),
('2021050367', '7080116', 6, 8, 9),
('2021050372', '7080116', 8, 9, 10),
('2021050373', '7080116', 5, 7, 6),
('2021050377', '7080116', 8, 8, 8),
('2021050406', '7080116', 8, 8, 9),
('2021050437', '7080116', 0, 0, 6),
('2021050482', '7080116', 7, 9, 10),
('2021050483', '7080116', 0, 7, 6),
('2021050545', '7080116', 8, 8, 9),
('2021050548', '7080116', 9, 7, 9),
('2021050633', '7080116', 8, 6, 10),
('2021050852', '7080116', 0, 0, 6),
('2021050855', '7080116', 0, 0, 6),
('2024011376', '7080116', 7, 7, 9),
('2121050140', '7080116', 6, 7, 8),
('2121050151', '7080116', 0, 0, 6),
('2121050152', '7080116', 0, 8, 9),
('2121050169', '7080116', 6, 7, 6),
('2121050190', '7080116', 6, 7, 7),
('2121050405', '7080116', 5, 8, 6),
('2121050765', '7080116', 6, 8, 9),
('2121050769', '7080116', 6, 7, 6),
('2121051087', '7080116', 6, 8, 9),
('2121051137', '7080116', 7, 7, 6),
('2121051194', '7080116', 0, 7, 6),
('2121051196', '7080116', 0, 7, 6),
('2121051293', '7080116', 6, 8, 8),
('2121051410', '7080116', 0, 7, 6),
('2121051416', '7080116', 5, 8, 8),
('2121051437', '7080116', 0, 7, 6),
('2121051472', '7080116', 0, 0, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hocphan`
--

CREATE TABLE `tbl_hocphan` (
  `mhp` varchar(10) NOT NULL,
  `tenhocphan` varchar(40) DEFAULT NULL,
  `tinchi` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hocphan`
--

INSERT INTO `tbl_hocphan` (`mhp`, `tenhocphan`, `tinchi`) VALUES
('7080112', 'Trí tuệ nhân tạo', 3),
('7080116', 'Phát triển ứng dụng web + BTL', 4),
('7080118', 'Thiết kế website', 2),
('7080206', 'Cấu trúc dữ liệu&Giải thuật', 3),
('7080319', 'Trực quan hóa dữ liệu', 3),
('7080323', 'Dịch vụ dựa trên địa điểm', 3),
('7080403', 'Đồ án CNTT Địa học', 2),
('7080410', 'Nhập môn nghành Khoa học Dữ liệu', 3),
('7080512', 'Lập trình hướng đối tượng với Java', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khoa`
--

CREATE TABLE `tbl_khoa` (
  `mk` varchar(5) NOT NULL,
  `Ten_khoa` varchar(50) DEFAULT NULL,
  `Dien_thoai` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khoa`
--

INSERT INTO `tbl_khoa` (`mk`, `Ten_khoa`, `Dien_thoai`) VALUES
('7060', 'Dầu khí', '(84-26) 7678-5221'),
('7080', 'Công nghệ Thông tin', '(84-24) 3838-7570'),
('7100', 'Xây dựng', '(84-24) 8767-5441'),
('8050', 'Trắc địa - Bản đồ và quản lý đất đai', '(84-43) 8387-5681'),
('8070', 'Kinh tế & QTKD', '(84-43) 8387-5661');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lopchuyennghanh`
--

CREATE TABLE `tbl_lopchuyennghanh` (
  `mlcn` varchar(10) NOT NULL,
  `tenlop` varchar(50) DEFAULT NULL,
  `nienkhoa` varchar(3) DEFAULT NULL,
  `siso` int(3) DEFAULT NULL,
  `mk` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lopchuyennghanh`
--

INSERT INTO `tbl_lopchuyennghanh` (`mlcn`, `tenlop`, `nienkhoa`, `siso`, `mk`) VALUES
('DCCTCT63', 'Đại học - Công nghệ thông tin_K63', 'K63', 26, '7080'),
('DCCTCT65B1', 'Đại học_Công nghệ thông tin B1_K65', 'K65', 30, '7080'),
('DCCTCT66A1', 'Đại học_Công nghệ thông tin_K66A1', 'K66', 67, '7080'),
('DCCTCT66B1', 'Đại học_Công nghệ thông tin_K66B1', 'K66', 62, '7080'),
('DCCTCT66C2', 'Đại học_Công nghệ thông tin_K66C2', 'K66', 36, '7080'),
('DCCTCT66D1', 'Đại học_Công nghệ thông tin_K66D1', 'K66', 64, '7080'),
('DCCTCT66H1', 'Đại học_Công nghệ thông tin_K66H1', 'K66', 61, '7080'),
('DCCTCT66I1', 'Đại học_Công nghệ thông tin_K66I1', 'K66', 68, '7080'),
('DCCTCT66K1', 'Đại học_Công nghệ thông tin_K66K1', 'K66', 60, '7080'),
('DCCTCT66L1', 'Đại học_Công nghệ thông tin_K66L1', 'K66', 62, '7080'),
('DCCTCT66M1', 'Đại học_Công nghệ thông tin_K66M1', 'K66', 65, '7080'),
('DCCTDH63A', 'Đại học - Công nghệ thông tin địa học A - K63', 'K63', 25, '7080'),
('DCCTDH64', 'Đại học - Công ngệ thông tin địa học - K64', 'K64', 28, '7080'),
('DCCTDH65A', 'Đại học - Công nghệ thông tin địa học A - K65', 'K65', 27, '7080'),
('DCCTDH65B', 'Đại học - Công nghệ thông tin địa học B - K65', 'K65', 32, '7080'),
('DCCTHT63B', 'Đại học - Hệ thống thông tin B - K63', 'K63', 40, '7080'),
('DCCTHT65A', 'Đại học - Hệ thông thông tin A- K65', 'K65', 35, '7080'),
('DCCTHT65B', 'Đại học - Hệ thông thông tin B- K65', 'K65', 30, '7080'),
('DCCTKH64A', 'Đại học - Khoa học máy tính ứng dụng A- K64', 'K64', 39, '7080'),
('DCCTKH64B', 'Đại học - Khoa học máy tính ứng dụng B- K64', 'K64', 36, '7080'),
('DCCTKH65A', 'Đại học - Khoa học máy tính ứng dụng A- K65', 'K65', 38, '7080'),
('DCCTKH65B', 'Đại học - Khoa học máy tính ứng dụng B- K65', 'K65', 34, '7080'),
('DCCTKT62', 'Đại học - Tin học Kinh tế - K62', 'K62', 40, '7080'),
('DCCTKT63A', 'Đại học - Tin học kinh tế A - K63', 'K63', 42, '7080'),
('DCCTKT64A', 'Đại học - Tin học kinh tế A- K64', 'K64', 46, '7080'),
('DCCTKT65A', 'Đại học - Tin học kinh tế A- K65', 'K65', 41, '7080'),
('DCCTKT65B', 'Đại học - Tin học kinh tế B- K65', 'K65', 40, '7080'),
('DCCTMM63C', 'Đại học - Mạng máy tính C - K63', 'K63', 36, '7080'),
('DCCTMM65A', 'Đại học - Mạng máy tính A- K65', 'K65', 38, '7080'),
('DCCTMM65B', 'Đại học - Mạng máy tính B- K65', 'K65', 37, '7080'),
('DCCTPM62A', 'Đại học - Công nghệ phần mềm A - K62', 'K62', 42, '7080'),
('DCCTPM63A', 'Đại học - Công nghệ phần mềm A - K63', 'K63', 45, '7080'),
('DCCTPM64A', 'Đại học - Công nghệ phần mềm A- K64', 'K64', 48, '7080'),
('DCCTPM65A', 'Đại học - Công nghệ phần mềm A- K65', 'K65', 48, '7080'),
('DCCTPM65B', 'Đại học - Công nghệ phần mềm B- K65', 'K65', 50, '7080'),
('DCCTPM65C', 'Đại học - Công nghệ phần mềm C- K65', 'K65', 52, '7080');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lophocphan`
--

CREATE TABLE `tbl_lophocphan` (
  `mlcn` varchar(10) NOT NULL,
  `mhp` varchar(10) NOT NULL,
  `nhom` varchar(3) DEFAULT NULL,
  `hocki` varchar(1) DEFAULT NULL,
  `namhoc` varchar(15) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lophocphan`
--

INSERT INTO `tbl_lophocphan` (`mlcn`, `mhp`, `nhom`, `hocki`, `namhoc`, `id`) VALUES
('DCCTCT66A1', '7080116', '1', '3', '2022-', 1),
('DCCTCT66A1', '7080319', '4', '4', '2022-2023', 2),
('DCCTCT66B1', '7080116', '1', '3', '2022-', 3),
('DCCTCT66D1', '7080116', '1', '3', '2022-', 4),
('DCCTCT66H1', '7080116', '1', '3', '2022-', 5),
('DCCTCT66I1', '7080112', '1', '2', '2023-2024', 6),
('DCCTCT66I1', '7080116', '1', '3', '2022-', 7),
('DCCTCT66K1', '7080116', '1', '3', '2022-', 8),
('DCCTCT66L1', '7080116', '1', '3', '2022-', 9),
('DCCTCT66M1', '7080116', '1', '3', '2022-', 10),
('DCCTDH63A', '7080116', '1', '3', '2022-', 11),
('DCCTDH64', '7080116', '1', '3', '2022-', 12),
('DCCTDH65A', '7080116', '1', '3', '2022-', 13),
('DCCTHT63B', '7080116', '1', '3', '2022-', 14),
('DCCTHT65A', '7080116', '1', '3', '2022-', 15),
('DCCTHT65B', '7080116', '1', '3', '2022-', 16),
('DCCTKH64A', '7080116', '1', '3', '2022-', 17),
('DCCTKH64B', '7080116', '1', '3', '2022-', 18),
('DCCTKH65A', '7080116', '1', '3', '2022-', 19),
('DCCTKH65B', '7080116', '1', '3', '2022-', 20),
('DCCTKT62', '7080116', '1', '3', '2022-', 21),
('DCCTKT63A', '7080116', '1', '3', '2022-', 22),
('DCCTKT64A', '7080116', '1', '3', '2022-', 23),
('DCCTKT65A', '7080116', '1', '3', '2022-', 24),
('DCCTKT65B', '7080116', '1', '3', '2022-', 25),
('DCCTMM63C', '7080116', '1', '3', '2022-', 0),
('DCCTMM65A', '7080116', '1', '3', '2022-', 0),
('DCCTMM65B', '7080116', '1', '3', '2022-', 0),
('DCCTPM62A', '7080116', '1', '3', '2022-', 0),
('DCCTPM63A', '7080116', '1', '3', '2022-', 0),
('DCCTPM64A', '7080116', '1', '3', '2022-', 0),
('DCCTPM65C', '7080116', '1', '3', '2022-', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sinhvien`
--

CREATE TABLE `tbl_sinhvien` (
  `msv` varchar(10) NOT NULL,
  `holot` varchar(20) DEFAULT NULL,
  `ten` varchar(10) DEFAULT NULL,
  `sodidong` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mlcn` varchar(10) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sinhvien`
--

INSERT INTO `tbl_sinhvien` (`msv`, `holot`, `ten`, `sodidong`, `email`, `mlcn`, `id`) VALUES
('01020304', 'Nguyen', 'Van A', '987654', 'adepxai@gmail.com', 'DCCTCT66I1', 1),
('1234567', 'mai cun', 'jeck sun ', NULL, NULL, 'DCCTCT66A1', 2),
('1721050251', 'Hoàng Minh', 'Quân', '1636365887', '1721050251@student.humg.edu.vn', 'DCCTPM62A', 3),
('1721050409', 'Lại Hồng', 'P', '977015622', '1721050409@student.humg.edu.vn', 'DCCTKT62', 4),
('1821050160', 'Đinh Tiến', 'L', '964654781', '1821050160@student.humg.edu.vn', 'DCCTKT63A', 5),
('1821050161', 'Chử Thành', 'L', '966828454', '1821050161@student.humg.edu.vn', 'DCCTPM63A', 6),
('1821050709', 'Hoàng Văn', 'T', '868779612', '1821050709@student.humg.edu.vn', 'DCCTMM63C', 7),
('1821050942', 'Cao Văn', 'Đ', '1638811658', '1821050942@student.humg.edu.vn', 'DCCTDH63A', 8),
('1821051099', 'Lâm Minh', 'Đ', '989966325', '1821051099@student.humg.edu.vn', 'DCCTHT63B', 9),
('1921050080', 'Trần Phú', 'A', '383173158', '1921050080@student.humg.edu.vn', 'DCCTKH64A', 10),
('1921050114', 'Nguyễn Duyên', 'C', '367976335', '1921050114@student.humg.edu.vn', 'DCCTKT64A', 11),
('1921050195', 'Nguyễn Tài', 'Đ', '333427252', '1921050195@student.humg.edu.vn', 'DCCTKT64A', 12),
('1921050206', 'Nguyễn Trường', 'G', '354117902', '1921050206@student.humg.edu.vn', 'DCCTKH64A', 13),
('1921050245', 'Nguyễn Văn', 'H', '366387512', '1921050245@student.humg.edu.vn', 'DCCTKH64A', 14),
('1921050346', 'Dương Xuân', 'L', '973216132', '1921050346@student.humg.edu.vn', 'DCCTKH64B', 15),
('1921050563', 'Nguyễn Văn', 'T', '344484165', '1921050563@student.humg.edu.vn', 'DCCTPM64A', 16),
('1921050700', 'Võ Tuấn', 'V', '934428104', '1921050700@student.humg.edu.vn', 'DCCTPM64A', 17),
('1921050769', 'Nguyễn Xuân', 'T', '961340778', '1921050769@student.humg.edu.vn', 'DCCTDH64', 18),
('2021050113', 'Trần Hải', 'C', '865510928', '2021050113@student.humg.edu.vn', 'DCCTMM65B', 19),
('2021050151', 'Lê Minh', 'D', '965155701', '2021050151@student.humg.edu.vn', 'DCCTHT65B', 20),
('2021050153', 'Nguyễn Hải', 'D', '354959566', '2021050153@student.humg.edu.vn', 'DCCTHT65A', 21),
('2021050160', 'Hà Hoàng Đức', 'D', '386936806', '2021050160@student.humg.edu.vn', 'DCCTHT65A', 22),
('2021050181', 'Nguyễn Tiến', 'Đ', '367936202', '2021050181@student.humg.edu.vn', 'DCCTMM65A', 23),
('2021050206', 'Ngô Văn', 'Đ', '355899098', '2021050206@student.humg.edu.vn', 'DCCTKT65A', 24),
('2021050222', 'Nguyễn Trường', 'G', '702020831', '2021050222@student.humg.edu.vn', 'DCCTKH65B', 25),
('2021050246', 'Vũ Trung', 'H', '971786693', '2021050246@student.humg.edu.vn', 'DCCTKT65B', NULL),
('2021050266', 'Phạm Công', 'H', '906243117', '2021050266@student.humg.edu.vn', 'DCCTMM65A', NULL),
('2021050270', 'Vũ Đức', 'H', '337483956', '2021050270@student.humg.edu.vn', 'DCCTMM65B', NULL),
('2021050312', 'Nguyễn Quang', 'H', '399570205', '2021050312@student.humg.edu.vn', 'DCCTKH65A', NULL),
('2021050319', 'Ninh Quang', 'H', '972950629', '2021050319@student.humg.edu.vn', 'DCCTKH65B', NULL),
('2021050326', 'Nguyễn Thị', 'H', '342694913', '2021050326@student.humg.edu.vn', 'DCCTHT65B', NULL),
('2021050343', 'Trần Văn', 'K', '362871914', '2021050343@student.humg.edu.vn', 'DCCTKH65B', NULL),
('2021050344', 'Nguyễn Thiện', 'K', '914097128', '2021050344@student.humg.edu.vn', 'DCCTKH65A', NULL),
('2021050352', 'Nguyễn Văn', 'K', '943568008', '2021050352@student.humg.edu.vn', 'DCCTHT65A', NULL),
('2021050362', 'Nguyễn Ngọc', 'K', '972562320', '2021050362@student.humg.edu.vn', 'DCCTKH65A', NULL),
('2021050363', 'Nguyễn Trung', 'K', '382917017', '2021050363@student.humg.edu.vn', 'DCCTKT65B', NULL),
('2021050367', 'Vũ Văn', 'K', '963527160', '2021050367@student.humg.edu.vn', 'DCCTKH65B', NULL),
('2021050372', 'Bùi Duy', 'L', '356448298', '2021050372@student.humg.edu.vn', 'DCCTMM65A', NULL),
('2021050373', 'Bùi Đức', 'L', '354810133', '2021050373@student.humg.edu.vn', 'DCCTPM65C', NULL),
('2021050377', 'Nguyễn Trọng', 'L', '377382374', '2021050377@student.humg.edu.vn', 'DCCTPM65C', NULL),
('2021050406', 'Nguyễn Đình', 'L', '971063820', '2021050406@student.humg.edu.vn', 'DCCTMM65B', NULL),
('2021050437', 'Nguyễn Đức', 'M', '384584911', '2021050437@student.humg.edu.vn', 'DCCTMM65A', NULL),
('2021050482', 'Lê Huy', 'N', '587392619', '2021050482@student.humg.edu.vn', 'DCCTMM65B', NULL),
('2021050483', 'Lưu Ngọc', 'N', '839016636', '2021050483@student.humg.edu.vn', 'DCCTHT65A', NULL),
('2021050545', 'Nguyễn Minh', 'Q', '963418764', '2021050545@student.humg.edu.vn', 'DCCTDH65A', NULL),
('2021050548', 'Trần Ngọc', 'Q', '924023211', '2021050548@student.humg.edu.vn', 'DCCTPM65C', NULL),
('2021050633', 'Nguyễn Đức', 'T', '969009287', '2021050633@student.humg.edu.vn', 'DCCTHT65A', NULL),
('2021050852', 'Cao Thế', 'A', '702275926', '2021050852@student.humg.edu.vn', 'DCCTPM65C', NULL),
('2021050855', 'Đinh Mạnh', 'P', '904857210', '2021050855@student.humg.edu.vn', 'DCCTKT65A', NULL),
('2024011376', 'Trần Tiến', 'T', '975258802', '2024011376@student.humg.edu.vn', 'DCCTMM65A', NULL),
('2121050140', 'Đặng Ngọc', 'T', '965019276', '2121050140@student.humg.edu.vn', 'DCCTCT66B1', NULL),
('2121050151', 'Nguyễn Trường', 'G', '357161432', '2121050151@student.humg.edu.vn', 'DCCTCT66B1', NULL),
('2121050152', 'Đinh Tiến', 'H', '862695123', '2121050152@student.humg.edu.vn', 'DCCTCT66B1', NULL),
('2121050169', 'Nguyễn Tuấn', 'H', '585827635', '2121050169@student.humg.edu.vn', 'DCCTCT66B1', NULL),
('2121050190', 'Đỗ Đức', 'T', '353355472', '2121050190@student.humg.edu.vn', 'DCCTCT66B1', NULL),
('2121050405', 'Vũ Hà Huy', 'T', '337693183', '2121050405@student.humg.edu.vn', 'DCCTCT66D1', NULL),
('2121050765', 'Vũ Trọng', 'N', '977753965', '2121050765@student.humg.edu.vn', 'DCCTCT66H1', NULL),
('2121050769', 'Tô Việt', 'A', '835118142', '2121050769@student.humg.edu.vn', 'DCCTCT66H1', NULL),
('2121051087', 'Hoàng Đình', 'D', '332290626', '2121051087@student.humg.edu.vn', 'DCCTCT66I1', NULL),
('2121051137', 'Lý Ngọc', 'B', '865351633', '2121051137@student.humg.edu.vn', 'DCCTCT66K1', NULL),
('2121051194', 'Nguyễn Đình', 'Đ', '967388003', '2121051194@student.humg.edu.vn', 'DCCTCT66K1', NULL),
('2121051196', 'Hồ Duy', 'A', '339762136', '2121051196@student.humg.edu.vn', 'DCCTCT66K1', NULL),
('2121051293', 'Nguyễn Tùng', 'P', '934331652', '2121051293@student.humg.edu.vn', 'DCCTCT66L1', NULL),
('2121051410', 'Vũ Ngọc', 'Đ', '868336018', '2121051410@student.humg.edu.vn', 'DCCTCT66M1', NULL),
('2121051416', 'Nguyễn Mạnh', 'D', '347215326', '2121051416@student.humg.edu.vn', 'DCCTCT66M1', NULL),
('2121051437', 'Lê Đức', 'N', '374301581', '2121051437@student.humg.edu.vn', 'DCCTCT66M1', NULL),
('2121051472', 'Vũ Tiến', 'P', '902062909', '2121051472@student.humg.edu.vn', 'DCCTCT66A1', NULL),
('dcctsvm', 'Le Thu ', 'Hong', NULL, NULL, 'DCCTCT63', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `uid` varchar(10) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upwd` varchar(10) NOT NULL,
  `urole` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`uid`, `uname`, `upwd`, `urole`) VALUES
('admin', 'nhamatpho', '123', 'qtv'),
('nhamatpho', 'trung', 'bolamto', 'sv');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_dang_nhap`
--
ALTER TABLE `tbl_dang_nhap`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `tbl_diemhocphan`
--
ALTER TABLE `tbl_diemhocphan`
  ADD PRIMARY KEY (`msv`,`mhp`),
  ADD KEY `mhp_dhp` (`mhp`);

--
-- Chỉ mục cho bảng `tbl_hocphan`
--
ALTER TABLE `tbl_hocphan`
  ADD PRIMARY KEY (`mhp`);

--
-- Chỉ mục cho bảng `tbl_khoa`
--
ALTER TABLE `tbl_khoa`
  ADD PRIMARY KEY (`mk`);

--
-- Chỉ mục cho bảng `tbl_lopchuyennghanh`
--
ALTER TABLE `tbl_lopchuyennghanh`
  ADD PRIMARY KEY (`mlcn`),
  ADD KEY `mk_lcn` (`mk`);

--
-- Chỉ mục cho bảng `tbl_lophocphan`
--
ALTER TABLE `tbl_lophocphan`
  ADD PRIMARY KEY (`mlcn`,`mhp`,`id`),
  ADD KEY `mhp_lhp` (`mhp`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  ADD PRIMARY KEY (`msv`),
  ADD KEY `mlcn_sv` (`mlcn`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_dang_nhap`
--
ALTER TABLE `tbl_dang_nhap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_diemhocphan`
--
ALTER TABLE `tbl_diemhocphan`
  ADD CONSTRAINT `mhp_dhp` FOREIGN KEY (`mhp`) REFERENCES `tbl_hocphan` (`mhp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `msv_dhp` FOREIGN KEY (`msv`) REFERENCES `tbl_sinhvien` (`msv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_lopchuyennghanh`
--
ALTER TABLE `tbl_lopchuyennghanh`
  ADD CONSTRAINT `mk_lcn` FOREIGN KEY (`mk`) REFERENCES `tbl_khoa` (`mk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_lophocphan`
--
ALTER TABLE `tbl_lophocphan`
  ADD CONSTRAINT `mhp_lhp` FOREIGN KEY (`mhp`) REFERENCES `tbl_hocphan` (`mhp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mlcn_lhp` FOREIGN KEY (`mlcn`) REFERENCES `tbl_lopchuyennghanh` (`mlcn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  ADD CONSTRAINT `mlcn_sv` FOREIGN KEY (`mlcn`) REFERENCES `tbl_lopchuyennghanh` (`mlcn`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
