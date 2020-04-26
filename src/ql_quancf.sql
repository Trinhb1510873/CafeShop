-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.40-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for cafeshop
DROP DATABASE IF EXISTS `cafeshop`;
CREATE DATABASE IF NOT EXISTS `cafeshop` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `cafeshop`;

-- Dumping structure for table cafeshop.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table cafeshop.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.migrations: ~44 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_01_08_151123_create_mst_bo_phan_table', 1),
	(5, '2020_01_08_152000_create_mst_chuc_vu_table', 1),
	(6, '2020_01_08_152355_create_mst_loai_mon_an_table', 1),
	(7, '2020_01_10_135036_create_mst_bep_table', 1),
	(8, '2020_01_10_141919_create_mst_kich_thuoc_table', 1),
	(9, '2020_01_10_142037_create_mst_nhom_nguyen_vat_lieu_table', 1),
	(10, '2020_01_10_143649_create_mst_kho_table', 1),
	(11, '2020_01_10_143720_create_mst_don_vi_tinh_table', 1),
	(12, '2020_01_10_135251_create_mst_nhom_thuc_don_table', 2),
	(13, '2020_01_10_142053_create_mst_nguyen_vat_lieu_table', 2),
	(14, '2020_01_11_024449_create_mst_mon_an_table', 2),
	(15, '2020_01_11_075723_create_mst_hinh_anh_table', 3),
	(16, '2020_01_11_080057_create_mst_tang_table', 4),
	(17, '2020_01_11_092441_create_mst_ban_table', 5),
	(20, '2020_01_11_093623_create_mst_kich_thuoc_mon_an_table', 8),
	(21, '2020_01_11_092646_create_mst_mon_an_kem_table', 9),
	(22, '2020_01_11_093202_create_mst_mon_an_tuong_tu_table', 9),
	(23, '2020_01_11_095149_create_trn_kich_thuoc_mon_an_table', 10),
	(24, '2020_01_11_095254_create_trn_mon_an_tuong_tu_table', 10),
	(25, '2020_01_11_095425_create_trn_mon_an_kem_table', 10),
	(26, '2020_01_11_095613_create_mst_cua_hang_table', 11),
	(27, '2020_01_11_105406_create_mst_chi_nhanh_table', 12),
	(28, '2020_01_11_105544_create_mst_nhan_vien_table', 13),
	(29, '2020_01_11_120657_create_permission_tables', 13),
	(30, '2020_01_12_142831_create_mst_khach_hang_table', 14),
	(31, '2020_01_12_143358_create_mst_loai_chuong_trinh_khuyen_mai_table', 15),
	(32, '2020_01_12_143520_create_mst_chuong_trinh_khuyen_mai_table', 16),
	(33, '2020_01_12_144530_create_mst_hoa_don_table', 17),
	(34, '2020_01_12_150712_create_mst_chi_tiet_hoa_don_table', 18),
	(35, '2020_01_12_151550_create_mst_ca_lam_viec_table', 19),
	(36, '2020_01_12_155029_create_mst_so_ket_toan_table', 20),
	(37, '2020_01_12_155640_create_mst_nha_cung_cap_table', 21),
	(39, '2020_01_12_160111_create_mst_nhap_nguyen_vat_lieu_table', 22),
	(41, '2020_01_13_123458_create_mst_loai_xuat_table', 24),
	(42, '2020_01_13_123707_create_mst_xuat_nguyen_vat_lieu_table', 25),
	(44, '2020_01_13_130157_create_mst_ton_nguyen_vat_lieu_table', 27),
	(45, '2020_01_13_122125_create_mst_chi_tiet_nhap_table', 28),
	(46, '2020_01_13_124722_create_mst_chi_tiet_xuat_table', 28),
	(48, '2020_01_13_132938_create_mst_thay_doi_theo_thoi_gia_table', 29),
	(50, '2020_01_13_133853_create_trn_khuyen_mai_theo_mon_an_table', 30),
	(52, '2020_01_13_141457_create_trn_nhan_vien_lv_theo_ca_table', 32),
	(53, '2020_01_13_135759_create_trn_mon_an_cua_ban_table', 33),
	(54, '2020_02_19_132720_create_mst_nhom_thuc_don_table', 34),
	(55, '2020_04_19_043339_create_trn_user_nhanvien_table', 35),
	(56, '2020_04_26_044429_create_trn_user_nhanvien_table', 36);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table cafeshop.model_has_permissions
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.model_has_permissions: ~0 rows (approximately)
DELETE FROM `model_has_permissions`;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Dumping structure for table cafeshop.model_has_roles
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.model_has_roles: ~2 rows (approximately)
DELETE FROM `model_has_roles`;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\User', 1),
	(2, 'App\\User', 2);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_ban
DROP TABLE IF EXISTS `mst_ban`;
CREATE TABLE IF NOT EXISTS `mst_ban` (
  `ban_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã bàn',
  `ban_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên bàn',
  `ban_trangThai` bigint(20) NOT NULL COMMENT '1:trống, 2:có khách',
  `ban_soLuong` bigint(20) NOT NULL COMMENT 'số lượng khách',
  `id_tang` bigint(20) unsigned NOT NULL COMMENT 'bàn của tầng nào',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ban_id`),
  KEY `mst_ban_id_tang_foreign` (`id_tang`),
  CONSTRAINT `mst_ban_id_tang_foreign` FOREIGN KEY (`id_tang`) REFERENCES `mst_tang` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_ban: ~10 rows (approximately)
DELETE FROM `mst_ban`;
/*!40000 ALTER TABLE `mst_ban` DISABLE KEYS */;
INSERT INTO `mst_ban` (`ban_id`, `ban_ten`, `ban_trangThai`, `ban_soLuong`, `id_tang`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Bàn 1', 1, 2, 2, '2020-02-22 13:43:19', '2020-04-21 21:38:03', NULL),
	(2, 'Bàn 2', 1, 2, 2, '2020-02-22 13:47:11', '2020-04-21 21:38:44', NULL),
	(3, 'Bàn 1', 2, 2, 1, '2020-02-22 13:47:29', '2020-04-26 12:19:06', NULL),
	(4, 'Bàn 2', 1, 2, 1, '2020-02-22 14:42:13', '2020-04-24 16:02:43', NULL),
	(5, 'Bàn 3', 1, 2, 1, '2020-02-22 14:55:04', '2020-04-24 22:55:16', NULL),
	(6, 'Bàn 4', 1, 4, 1, '2020-04-18 14:02:40', '2020-04-24 22:58:29', NULL),
	(7, 'Bàn 5', 1, 6, 1, '2020-04-18 14:03:25', '2020-04-24 23:03:25', NULL),
	(8, 'Bàn 6', 1, 6, 1, '2020-04-18 14:03:41', '2020-04-24 23:02:54', NULL),
	(9, 'Bàn 7', 1, 2, 1, '2020-04-18 14:04:36', '2020-04-21 21:34:04', NULL),
	(10, 'Bàn 8', 1, 2, 1, '2020-04-18 14:04:55', '2020-04-21 21:37:05', NULL);
/*!40000 ALTER TABLE `mst_ban` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_bep
DROP TABLE IF EXISTS `mst_bep`;
CREATE TABLE IF NOT EXISTS `mst_bep` (
  `b_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã bếp',
  `b_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên bếp',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`b_id`),
  UNIQUE KEY `mst_bep_b_ten_unique` (`b_ten`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_bep: ~4 rows (approximately)
DELETE FROM `mst_bep`;
/*!40000 ALTER TABLE `mst_bep` DISABLE KEYS */;
INSERT INTO `mst_bep` (`b_id`, `b_ten`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Bếp 1', NULL, NULL, NULL),
	(2, 'Bếp 2', NULL, NULL, NULL),
	(3, 'Bếp 3', NULL, NULL, NULL);
/*!40000 ALTER TABLE `mst_bep` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_bo_phan
DROP TABLE IF EXISTS `mst_bo_phan`;
CREATE TABLE IF NOT EXISTS `mst_bo_phan` (
  `bp_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã bộ phận',
  `bp_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên bộ phận',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`bp_id`),
  UNIQUE KEY `mst_bo_phan_bp_ten_unique` (`bp_ten`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_bo_phan: ~3 rows (approximately)
DELETE FROM `mst_bo_phan`;
/*!40000 ALTER TABLE `mst_bo_phan` DISABLE KEYS */;
INSERT INTO `mst_bo_phan` (`bp_id`, `bp_ten`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Bếp', '2020-02-23 15:10:12', '2020-02-23 15:10:12', NULL),
	(2, 'Kho', '2020-02-23 15:10:23', '2020-02-23 15:10:23', NULL),
	(4, 'Thu ngân', '2020-02-23 15:11:24', '2020-02-23 15:11:24', NULL);
/*!40000 ALTER TABLE `mst_bo_phan` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_ca_lam_viec
DROP TABLE IF EXISTS `mst_ca_lam_viec`;
CREATE TABLE IF NOT EXISTS `mst_ca_lam_viec` (
  `clv_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `clv_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên ca',
  `clv_tg_bat_dau` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Thời gian bắt đầu',
  `clv_tg_ket_thuc` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Thời gian kết thúc',
  `clv_so_tien` double(8,2) NOT NULL COMMENT 'tiền lương của ca làm việc',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`clv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_ca_lam_viec: ~0 rows (approximately)
DELETE FROM `mst_ca_lam_viec`;
/*!40000 ALTER TABLE `mst_ca_lam_viec` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_ca_lam_viec` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_chi_nhanh
DROP TABLE IF EXISTS `mst_chi_nhanh`;
CREATE TABLE IF NOT EXISTS `mst_chi_nhanh` (
  `cn_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã chi nhánh',
  `cn_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên chi nhánh',
  `cn_diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'địa cnỉ chi nhánh',
  `cn_soDienThoai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'số điện thoại chi nhánh',
  `id_cuaHang` bigint(20) unsigned NOT NULL COMMENT 'Chi nhánh thuộc cửa hàng nào',
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cn_id`),
  KEY `mst_chi_nhanh_id_cuahang_foreign` (`id_cuaHang`),
  CONSTRAINT `mst_chi_nhanh_id_cuahang_foreign` FOREIGN KEY (`id_cuaHang`) REFERENCES `mst_cua_hang` (`ch_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_chi_nhanh: ~0 rows (approximately)
DELETE FROM `mst_chi_nhanh`;
/*!40000 ALTER TABLE `mst_chi_nhanh` DISABLE KEYS */;
INSERT INTO `mst_chi_nhanh` (`cn_id`, `cn_ten`, `cn_diachi`, `cn_soDienThoai`, `id_cuaHang`, `longitude`, `latitude`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'SunFlower', 'Ninh Kiều, Cần Thơ', '0963594847', 1, 19, 28, '2020-02-23 15:36:16', '2020-02-23 15:36:28', NULL);
/*!40000 ALTER TABLE `mst_chi_nhanh` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_chi_tiet_hoa_don
DROP TABLE IF EXISTS `mst_chi_tiet_hoa_don`;
CREATE TABLE IF NOT EXISTS `mst_chi_tiet_hoa_don` (
  `id_hoa_don` bigint(20) unsigned NOT NULL,
  `id_mon_an` bigint(20) unsigned NOT NULL,
  `cthd_sl_mon_an` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_hoa_don`,`id_mon_an`),
  KEY `mst_chi_tiet_hoa_don_id_mon_an_foreign` (`id_mon_an`),
  CONSTRAINT `mst_chi_tiet_hoa_don_id_hoa_don_foreign` FOREIGN KEY (`id_hoa_don`) REFERENCES `mst_hoa_don` (`hd_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_chi_tiet_hoa_don_id_mon_an_foreign` FOREIGN KEY (`id_mon_an`) REFERENCES `mst_mon_an` (`ma_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_chi_tiet_hoa_don: ~9 rows (approximately)
DELETE FROM `mst_chi_tiet_hoa_don`;
/*!40000 ALTER TABLE `mst_chi_tiet_hoa_don` DISABLE KEYS */;
INSERT INTO `mst_chi_tiet_hoa_don` (`id_hoa_don`, `id_mon_an`, `cthd_sl_mon_an`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(69, 11, 4, '2020-04-24 23:00:37', '2020-04-24 23:00:38', NULL),
	(71, 4, 1, '2020-04-23 21:11:35', '2020-04-23 21:11:35', NULL),
	(71, 5, 1, '2020-04-23 21:11:38', '2020-04-23 21:11:38', NULL),
	(71, 6, 1, '2020-04-23 21:11:32', '2020-04-23 21:11:32', NULL),
	(75, 4, 2, '2020-04-24 23:04:28', '2020-04-24 23:04:28', NULL),
	(76, 11, 1, '2020-04-24 23:09:44', '2020-04-24 23:09:44', NULL),
	(79, 11, 1, '2020-04-26 00:23:02', '2020-04-26 00:23:02', NULL),
	(80, 39, 1, '2020-04-26 12:18:17', '2020-04-26 12:18:17', NULL),
	(80, 40, 1, '2020-04-26 12:18:19', '2020-04-26 12:18:19', NULL),
	(80, 41, 1, '2020-04-26 12:18:21', '2020-04-26 12:18:21', NULL),
	(81, 39, 1, '2020-04-26 12:19:06', '2020-04-26 12:19:06', NULL);
/*!40000 ALTER TABLE `mst_chi_tiet_hoa_don` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_chi_tiet_nhap
DROP TABLE IF EXISTS `mst_chi_tiet_nhap`;
CREATE TABLE IF NOT EXISTS `mst_chi_tiet_nhap` (
  `id_nhap` bigint(20) unsigned NOT NULL COMMENT 'phiếu nhập',
  `id_nguyen_vat_lieu` bigint(20) unsigned NOT NULL COMMENT 'nguyên vật liệu',
  `ctn_so_luong` double(8,2) NOT NULL COMMENT 'số lượng nhập',
  `ctn_gia` double(8,2) NOT NULL COMMENT 'giá tiền',
  `ctn_hsd` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'sử dụng đến ngày',
  `id_don_vi_tinh` bigint(20) unsigned NOT NULL COMMENT 'đơn vị tính',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_nhap`,`id_nguyen_vat_lieu`),
  KEY `mst_chi_tiet_nhap_id_don_vi_tinh_foreign` (`id_don_vi_tinh`),
  KEY `mst_chi_tiet_nhap_id_nguyen_vat_lieu_foreign` (`id_nguyen_vat_lieu`),
  CONSTRAINT `mst_chi_tiet_nhap_id_don_vi_tinh_foreign` FOREIGN KEY (`id_don_vi_tinh`) REFERENCES `mst_don_vi_tinh` (`dvt_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_chi_tiet_nhap_id_nguyen_vat_lieu_foreign` FOREIGN KEY (`id_nguyen_vat_lieu`) REFERENCES `mst_nguyen_vat_lieu` (`nvl_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_chi_tiet_nhap_id_nhap_foreign` FOREIGN KEY (`id_nhap`) REFERENCES `mst_nhap_nguyen_vat_lieu` (`nnvl_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_chi_tiet_nhap: ~0 rows (approximately)
DELETE FROM `mst_chi_tiet_nhap`;
/*!40000 ALTER TABLE `mst_chi_tiet_nhap` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_chi_tiet_nhap` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_chi_tiet_xuat
DROP TABLE IF EXISTS `mst_chi_tiet_xuat`;
CREATE TABLE IF NOT EXISTS `mst_chi_tiet_xuat` (
  `id_xuat` bigint(20) unsigned NOT NULL COMMENT 'nguyên vật liệu',
  `id_nguyen_vat_lieu` bigint(20) unsigned NOT NULL COMMENT 'nguyên vật liệu',
  `ctx_so_luong` double(8,2) NOT NULL COMMENT 'số lượng xuất',
  `id_don_vi_tinh` bigint(20) unsigned NOT NULL COMMENT 'đơn vị tính',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_xuat`,`id_nguyen_vat_lieu`),
  KEY `mst_chi_tiet_xuat_id_don_vi_tinh_foreign` (`id_don_vi_tinh`),
  KEY `mst_chi_tiet_xuat_id_nguyen_vat_lieu_foreign` (`id_nguyen_vat_lieu`),
  CONSTRAINT `mst_chi_tiet_xuat_id_don_vi_tinh_foreign` FOREIGN KEY (`id_don_vi_tinh`) REFERENCES `mst_don_vi_tinh` (`dvt_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_chi_tiet_xuat_id_nguyen_vat_lieu_foreign` FOREIGN KEY (`id_nguyen_vat_lieu`) REFERENCES `mst_nguyen_vat_lieu` (`nvl_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_chi_tiet_xuat_id_xuat_foreign` FOREIGN KEY (`id_xuat`) REFERENCES `mst_xuat_nguyen_vat_lieu` (`xnvl_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_chi_tiet_xuat: ~0 rows (approximately)
DELETE FROM `mst_chi_tiet_xuat`;
/*!40000 ALTER TABLE `mst_chi_tiet_xuat` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_chi_tiet_xuat` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_chuc_vu
DROP TABLE IF EXISTS `mst_chuc_vu`;
CREATE TABLE IF NOT EXISTS `mst_chuc_vu` (
  `cv_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cv_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên chức vụ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cv_id`),
  UNIQUE KEY `mst_chuc_vu_cv_ten_unique` (`cv_ten`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_chuc_vu: ~5 rows (approximately)
DELETE FROM `mst_chuc_vu`;
/*!40000 ALTER TABLE `mst_chuc_vu` DISABLE KEYS */;
INSERT INTO `mst_chuc_vu` (`cv_id`, `cv_ten`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Giám đốc', '2020-02-23 14:58:36', '2020-02-23 14:58:36', NULL),
	(2, 'Nhân viên kho', '2020-02-23 14:58:52', '2020-02-23 14:58:52', NULL),
	(3, 'Nhân viên phục vụ', '2020-02-23 14:59:01', '2020-02-23 14:59:01', NULL),
	(4, 'Nhân viên bếp', '2020-02-23 14:59:09', '2020-02-23 14:59:09', NULL),
	(6, 'Quản lý', '2020-02-23 15:00:05', '2020-02-23 15:00:05', NULL);
/*!40000 ALTER TABLE `mst_chuc_vu` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_chuong_trinh_khuyen_mai
DROP TABLE IF EXISTS `mst_chuong_trinh_khuyen_mai`;
CREATE TABLE IF NOT EXISTS `mst_chuong_trinh_khuyen_mai` (
  `ctkm_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ctkm_ma` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mã chương trình khuyến mãi',
  `ctkm_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên chương trình khuyến mãi',
  `ctkm_so_luong` decimal(8,2) NOT NULL COMMENT 'Số lượng mã khuyến mãi',
  `ctkm_dien_giai` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'diễn giải CTKM',
  `ctkm_tg_bat_dau` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Thời gian bắt đầu CTKM',
  `ctkm_tg_ket_thuc` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Thời gian kết thúc CTKM',
  `id_loai_ctkm` bigint(20) unsigned NOT NULL COMMENT 'Loại chương trình khuyến mãi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ctkm_id`),
  KEY `mst_chuong_trinh_khuyen_mai_id_loai_ctkm_foreign` (`id_loai_ctkm`),
  CONSTRAINT `mst_chuong_trinh_khuyen_mai_id_loai_ctkm_foreign` FOREIGN KEY (`id_loai_ctkm`) REFERENCES `mst_loai_chuong_trinh_khuyen_mai` (`lctkm_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_chuong_trinh_khuyen_mai: ~0 rows (approximately)
DELETE FROM `mst_chuong_trinh_khuyen_mai`;
/*!40000 ALTER TABLE `mst_chuong_trinh_khuyen_mai` DISABLE KEYS */;
INSERT INTO `mst_chuong_trinh_khuyen_mai` (`ctkm_id`, `ctkm_ma`, `ctkm_ten`, `ctkm_so_luong`, `ctkm_dien_giai`, `ctkm_tg_bat_dau`, `ctkm_tg_ket_thuc`, `id_loai_ctkm`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, '01', 'CTKM01', 20.00, '', '2020-04-19 13:01:23', '2020-04-19 13:01:24', 2, '2020-04-19 13:01:28', '2020-04-19 13:01:30', NULL);
/*!40000 ALTER TABLE `mst_chuong_trinh_khuyen_mai` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_cua_hang
DROP TABLE IF EXISTS `mst_cua_hang`;
CREATE TABLE IF NOT EXISTS `mst_cua_hang` (
  `ch_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã cửa hàng',
  `ch_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên cửa hàng',
  `ch_tenNguoiDaiDien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên người đại diện',
  `ch_diaChi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'địa chỉ cửa hàng',
  `ch_soDienThoai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'số điện thoại cửa hàng',
  `ch_maSoThue` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'mã số thuế cửa hàng',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_cua_hang: ~0 rows (approximately)
DELETE FROM `mst_cua_hang`;
/*!40000 ALTER TABLE `mst_cua_hang` DISABLE KEYS */;
INSERT INTO `mst_cua_hang` (`ch_id`, `ch_ten`, `ch_tenNguoiDaiDien`, `ch_diaChi`, `ch_soDienThoai`, `ch_maSoThue`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'SunFlower', 'Trần Thị Tuyết Trinh', 'Cần Thơ', '0963594847', '123469900088', '2020-02-23 15:22:32', '2020-02-23 15:22:45', NULL),
	(2, 'Coffee Sunflower', 'Trần Thị Tuyết Trinh', 'Cần Thơ', '01234567890', '9876543210', '2020-04-26 07:00:36', '2020-04-26 07:00:36', NULL);
/*!40000 ALTER TABLE `mst_cua_hang` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_don_vi_tinh
DROP TABLE IF EXISTS `mst_don_vi_tinh`;
CREATE TABLE IF NOT EXISTS `mst_don_vi_tinh` (
  `dvt_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã don_vi_tinh',
  `dvt_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên don_vi_tinh',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dvt_id`),
  UNIQUE KEY `mst_don_vi_tinh_dvt_ten_unique` (`dvt_ten`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_don_vi_tinh: ~9 rows (approximately)
DELETE FROM `mst_don_vi_tinh`;
/*!40000 ALTER TABLE `mst_don_vi_tinh` DISABLE KEYS */;
INSERT INTO `mst_don_vi_tinh` (`dvt_id`, `dvt_ten`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Kilogram (kg)', NULL, '2020-02-18 13:28:04', NULL),
	(2, 'chai', NULL, NULL, NULL),
	(3, 'dĩa', NULL, NULL, NULL),
	(4, 'gram (g)', NULL, NULL, NULL),
	(6, 'phần', NULL, NULL, NULL),
	(7, 'thùng', NULL, NULL, NULL),
	(8, 'Tô', NULL, '2020-02-18 13:32:03', NULL),
	(9, 'Lon', '2020-02-18 13:21:41', '2020-02-18 13:21:41', NULL),
	(10, 'Ly', '2020-02-18 13:31:51', '2020-02-18 13:31:51', NULL);
/*!40000 ALTER TABLE `mst_don_vi_tinh` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_hinh_anh
DROP TABLE IF EXISTS `mst_hinh_anh`;
CREATE TABLE IF NOT EXISTS `mst_hinh_anh` (
  `ha_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ha_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_mon_an` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ha_id`),
  KEY `mst_hinh_anh_id_mon_an_foreign` (`id_mon_an`),
  CONSTRAINT `mst_hinh_anh_id_mon_an_foreign` FOREIGN KEY (`id_mon_an`) REFERENCES `mst_mon_an` (`ma_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_hinh_anh: ~14 rows (approximately)
DELETE FROM `mst_hinh_anh`;
/*!40000 ALTER TABLE `mst_hinh_anh` DISABLE KEYS */;
INSERT INTO `mst_hinh_anh` (`ha_id`, `ha_ten`, `id_mon_an`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(2, 'mi-goi-xuong-1.jpg', 4, '2020-02-23 12:53:40', '2020-02-23 12:53:40', NULL),
	(4, 'mi-goi.jpg', 5, '2020-02-23 12:56:15', '2020-02-23 12:56:15', NULL),
	(5, 'hu-tieu.jpg', 6, '2020-02-23 13:01:03', '2020-02-23 13:01:03', NULL),
	(6, 'sinh-to-bo.jpg', 7, '2020-02-23 13:06:56', '2020-02-23 13:06:56', NULL),
	(7, 'sinh-to-dau-1.jpg', 8, '2020-02-23 13:09:40', '2020-02-23 13:09:40', NULL),
	(8, 'nuoc-suoi-1.jpg', 9, '2020-02-23 13:12:11', '2020-02-23 13:12:11', NULL),
	(9, '7-up-1.jpg', 10, '2020-02-23 13:13:59', '2020-02-23 13:13:59', NULL),
	(10, 'com-chien-duong-chau.jpg', 11, '2020-04-11 09:26:19', '2020-04-11 09:26:19', NULL),
	(11, 'coca-cola-1.jpg', 12, '2020-04-26 00:49:09', '2020-04-26 00:49:09', NULL),
	(12, 'com-ga.jpg', 13, '2020-04-26 00:55:11', '2020-04-26 00:55:11', NULL),
	(13, 'com-suon.jpg', 14, '2020-04-26 00:59:09', '2020-04-26 00:59:09', NULL),
	(15, 'com-suon-1.jpg', 15, '2020-04-26 01:11:57', '2020-04-26 01:11:57', NULL),
	(16, 'hu-tieu-bo-vien-1.jpg', 16, '2020-04-26 01:19:22', '2020-04-26 01:19:22', NULL),
	(19, 'hu-tieu-bo-kho.jpg', 17, '2020-04-26 01:29:20', '2020-04-26 01:29:20', NULL),
	(20, 'nuoc-ep-dau-1.jpg', 19, '2020-04-26 01:33:56', '2020-04-26 01:33:56', NULL);
/*!40000 ALTER TABLE `mst_hinh_anh` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_hoa_don
DROP TABLE IF EXISTS `mst_hoa_don`;
CREATE TABLE IF NOT EXISTS `mst_hoa_don` (
  `hd_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `hd_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên hóa đơn',
  `hd_trang_thai` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT 'Trạng thái # Trạng thái: 1:chưa thanh toán, 2:đã thanh toán',
  `hd_tg_vao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Thời gian vào',
  `hd_tg_ra` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Thời gian ra',
  `hd_tong_tien` double(8,2) NOT NULL DEFAULT '0.00' COMMENT 'Tổng tiền',
  `hd_tong_tien_phai_tra` double(8,2) NOT NULL DEFAULT '0.00' COMMENT 'Tổng tiền phải trả đã áp dụng CTKM',
  `id_nhan_vien` bigint(20) unsigned NOT NULL COMMENT 'người lập hóa đơn',
  `id_ban` bigint(20) unsigned NOT NULL COMMENT 'hóa đơn của bàn nào',
  `id_chi_nhanh` bigint(20) unsigned COMMENT 'thuộc chi nhánh nào',
  `id_khach_hang` bigint(20) unsigned DEFAULT NULL COMMENT 'mã khách hàng',
  `id_ct_khuyen_mai` bigint(20) unsigned DEFAULT NULL COMMENT 'chương trình khuyến mãi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`hd_id`),
  KEY `mst_hoa_don_id_nhan_vien_foreign` (`id_nhan_vien`),
  KEY `mst_hoa_don_id_ban_foreign` (`id_ban`),
  KEY `mst_hoa_don_id_chi_nhanh_foreign` (`id_chi_nhanh`),
  KEY `mst_hoa_don_id_khach_hang_foreign` (`id_khach_hang`),
  KEY `mst_hoa_don_id_ct_khuyen_mai_foreign` (`id_ct_khuyen_mai`),
  CONSTRAINT `mst_hoa_don_id_ban_foreign` FOREIGN KEY (`id_ban`) REFERENCES `mst_ban` (`ban_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_hoa_don_id_chi_nhanh_foreign` FOREIGN KEY (`id_chi_nhanh`) REFERENCES `mst_chi_nhanh` (`cn_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_hoa_don_id_ct_khuyen_mai_foreign` FOREIGN KEY (`id_ct_khuyen_mai`) REFERENCES `mst_chuong_trinh_khuyen_mai` (`ctkm_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_hoa_don_id_khach_hang_foreign` FOREIGN KEY (`id_khach_hang`) REFERENCES `mst_khach_hang` (`kh_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_hoa_don_id_nhan_vien_foreign` FOREIGN KEY (`id_nhan_vien`) REFERENCES `mst_nhan_vien` (`nv_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_hoa_don: ~13 rows (approximately)
DELETE FROM `mst_hoa_don`;
/*!40000 ALTER TABLE `mst_hoa_don` DISABLE KEYS */;
INSERT INTO `mst_hoa_don` (`hd_id`, `hd_ten`, `hd_trang_thai`, `hd_tg_vao`, `hd_tg_ra`, `hd_tong_tien`, `hd_tong_tien_phai_tra`, `id_nhan_vien`, `id_ban`, `id_chi_nhanh`, `id_khach_hang`, `id_ct_khuyen_mai`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(69, 'HD_3_2020-04-23 20:26:39', 2, '2020-04-23 20:26:39', '2020-04-24 23:00:41', 100000.00, 100000.00, 1, 3, 1, NULL, NULL, '2020-04-23 20:26:39', '2020-04-24 23:00:41', NULL),
	(70, 'HD_4_2020-04-23 20:51:37', 1, '2020-04-23 20:51:37', '2020-04-23 20:51:37', 0.00, 0.00, 1, 4, 1, NULL, NULL, '2020-04-23 20:51:37', '2020-04-23 20:59:32', NULL),
	(71, 'HD_5_2020-04-23 21:11:32', 2, '2020-04-23 21:11:32', '2020-04-24 22:55:16', 70000.00, 70000.00, 1, 5, 1, NULL, NULL, '2020-04-23 21:11:32', '2020-04-24 22:55:16', NULL),
	(72, 'HD_6_2020-04-23 21:11:53', 2, '2020-04-23 21:11:53', '2020-04-24 22:58:29', 25000.00, 25000.00, 1, 6, 1, NULL, NULL, '2020-04-23 21:11:53', '2020-04-24 22:58:29', NULL),
	(73, 'HD_7_2020-04-23 21:22:10', 2, '2020-04-23 21:22:10', '2020-04-24 23:03:25', 25000.00, 25000.00, 1, 7, 1, NULL, NULL, '2020-04-23 21:22:10', '2020-04-24 23:03:25', NULL),
	(74, 'HD_8_2020-04-23 21:24:10', 2, '2020-04-23 21:24:10', '2020-04-24 23:02:54', 25000.00, 25000.00, 1, 8, 1, NULL, NULL, '2020-04-23 21:24:10', '2020-04-24 23:02:54', NULL),
	(75, 'HD_3_2020-04-24 23:04:28', 2, '2020-04-24 23:04:28', '2020-04-24 23:09:26', 40000.00, 40000.00, 1, 3, 1, NULL, NULL, '2020-04-24 23:04:28', '2020-04-24 23:09:26', NULL),
	(76, 'HD_3_2020-04-24 23:09:44', 2, '2020-04-24 23:09:44', '2020-04-24 23:09:50', 25000.00, 25000.00, 1, 3, 1, NULL, NULL, '2020-04-24 23:09:44', '2020-04-24 23:09:50', NULL),
	(77, 'HD_3_2020-04-24 23:10:44', 2, '2020-04-24 23:10:44', '2020-04-24 23:10:45', 25000.00, 25000.00, 1, 3, 1, NULL, NULL, '2020-04-24 23:10:44', '2020-04-24 23:10:45', NULL),
	(78, 'HD_3_2020-04-25 16:33:39', 2, '2020-04-25 16:33:39', '2020-04-25 16:33:55', 25000.00, 25000.00, 1, 3, 1, NULL, NULL, '2020-04-25 16:33:39', '2020-04-25 16:33:55', NULL),
	(79, 'HD_3_2020-04-26 00:23:02', 2, '2020-04-26 00:23:02', '2020-04-26 00:23:12', 25000.00, 25000.00, 1, 3, 1, NULL, NULL, '2020-04-26 00:23:02', '2020-04-26 00:23:12', NULL),
	(80, 'HD_3_2020-04-26 12:18:17', 2, '2020-04-26 12:18:17', '2020-04-26 12:18:23', 90000.00, 90000.00, 1, 3, 1, NULL, NULL, '2020-04-26 12:18:17', '2020-04-26 12:18:23', NULL),
	(81, 'HD_3_2020-04-26 12:19:06', 1, '2020-04-26 12:19:06', '2020-04-26 12:19:06', 30000.00, 30000.00, 1, 3, 1, NULL, NULL, '2020-04-26 12:19:06', '2020-04-26 12:19:06', NULL);
/*!40000 ALTER TABLE `mst_hoa_don` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_khach_hang
DROP TABLE IF EXISTS `mst_khach_hang`;
CREATE TABLE IF NOT EXISTS `mst_khach_hang` (
  `kh_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kh_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên khach hang',
  `kh_sdt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'số điện thoại khach hang',
  `kh_diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'địa chi khach hang',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_khach_hang: ~0 rows (approximately)
DELETE FROM `mst_khach_hang`;
/*!40000 ALTER TABLE `mst_khach_hang` DISABLE KEYS */;
INSERT INTO `mst_khach_hang` (`kh_id`, `kh_ten`, `kh_sdt`, `kh_diachi`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Trinh', '0963594847', 'Can Tho', '2020-04-19 13:00:07', '2020-04-19 13:00:08', NULL);
/*!40000 ALTER TABLE `mst_khach_hang` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_kho
DROP TABLE IF EXISTS `mst_kho`;
CREATE TABLE IF NOT EXISTS `mst_kho` (
  `k_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã kho',
  `k_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên kho',
  `k_diaChi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'địa chỉ kho',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`k_id`),
  UNIQUE KEY `mst_kho_k_ten_unique` (`k_ten`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_kho: ~3 rows (approximately)
DELETE FROM `mst_kho`;
/*!40000 ALTER TABLE `mst_kho` DISABLE KEYS */;
INSERT INTO `mst_kho` (`k_id`, `k_ten`, `k_diaChi`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'kho 1', 'Quis dicta quis.', NULL, NULL, NULL),
	(2, 'kho 2', 'Aut magni.', NULL, NULL, NULL),
	(3, 'kho 3', 'Numquam ducimus.', NULL, NULL, NULL),
	(4, 'Kho 4', 'Cà Mau', '2020-02-24 12:49:01', '2020-02-24 12:49:01', NULL);
/*!40000 ALTER TABLE `mst_kho` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_kich_thuoc
DROP TABLE IF EXISTS `mst_kich_thuoc`;
CREATE TABLE IF NOT EXISTS `mst_kich_thuoc` (
  `kt_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã kích thước',
  `kt_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên kích thước',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kt_id`),
  UNIQUE KEY `mst_kich_thuoc_kt_ten_unique` (`kt_ten`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_kich_thuoc: ~0 rows (approximately)
DELETE FROM `mst_kich_thuoc`;
/*!40000 ALTER TABLE `mst_kich_thuoc` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_kich_thuoc` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_loai_chuong_trinh_khuyen_mai
DROP TABLE IF EXISTS `mst_loai_chuong_trinh_khuyen_mai`;
CREATE TABLE IF NOT EXISTS `mst_loai_chuong_trinh_khuyen_mai` (
  `lctkm_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lctkm_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên chương trình khuyến mãi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`lctkm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_loai_chuong_trinh_khuyen_mai: ~2 rows (approximately)
DELETE FROM `mst_loai_chuong_trinh_khuyen_mai`;
/*!40000 ALTER TABLE `mst_loai_chuong_trinh_khuyen_mai` DISABLE KEYS */;
INSERT INTO `mst_loai_chuong_trinh_khuyen_mai` (`lctkm_id`, `lctkm_ten`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Theo sản phẩm', '2020-02-24 14:04:00', '2020-02-24 14:04:20', NULL),
	(2, 'Theo hóa đơn', '2020-02-24 14:04:11', '2020-02-24 14:04:11', NULL);
/*!40000 ALTER TABLE `mst_loai_chuong_trinh_khuyen_mai` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_loai_mon_an
DROP TABLE IF EXISTS `mst_loai_mon_an`;
CREATE TABLE IF NOT EXISTS `mst_loai_mon_an` (
  `lma_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã loại món ăn',
  `lma_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên loại # Tên loại món ăn',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`lma_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_loai_mon_an: ~2 rows (approximately)
DELETE FROM `mst_loai_mon_an`;
/*!40000 ALTER TABLE `mst_loai_mon_an` DISABLE KEYS */;
INSERT INTO `mst_loai_mon_an` (`lma_id`, `lma_ten`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Món ăn', NULL, NULL, NULL),
	(2, 'Nước uống', NULL, NULL, NULL);
/*!40000 ALTER TABLE `mst_loai_mon_an` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_loai_xuat
DROP TABLE IF EXISTS `mst_loai_xuat`;
CREATE TABLE IF NOT EXISTS `mst_loai_xuat` (
  `lx_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lx_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên loại xuất',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`lx_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_loai_xuat: ~0 rows (approximately)
DELETE FROM `mst_loai_xuat`;
/*!40000 ALTER TABLE `mst_loai_xuat` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_loai_xuat` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_mon_an
DROP TABLE IF EXISTS `mst_mon_an`;
CREATE TABLE IF NOT EXISTS `mst_mon_an` (
  `ma_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã mon_an',
  `ma_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên mon_an',
  `ma_dienGiai` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Tên mon_an',
  `ma_giaBan` decimal(8,2) NOT NULL COMMENT 'Giá bán',
  `ma_giaVon` decimal(8,2) NOT NULL COMMENT 'Giá vốn',
  `ma_mon_dac_trung` bigint(20) NOT NULL COMMENT '1:món đặc trưng, 2:không phải món đặc trưng',
  `ma_thay_doi_theo_thoi_gia` bigint(20) NOT NULL COMMENT '1:không, 2:có',
  `ma_ngung_ban` bigint(20) NOT NULL COMMENT '1:không, 2:có',
  `ma_hinh` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'hình avt mon_an',
  `id_don_vi_tinh` bigint(20) unsigned NOT NULL COMMENT 'ID don_vi_tinh',
  `id_nhom_thuc_don` bigint(20) unsigned NOT NULL COMMENT 'ID nhóm thực đơn',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ma_id`),
  KEY `mst_mon_an_id_don_vi_tinh_foreign` (`id_don_vi_tinh`),
  KEY `mst_mon_an_id_nhom_thuc_don_foreign` (`id_nhom_thuc_don`),
  CONSTRAINT `mst_mon_an_id_don_vi_tinh_foreign` FOREIGN KEY (`id_don_vi_tinh`) REFERENCES `mst_don_vi_tinh` (`dvt_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_mon_an_id_nhom_thuc_don_foreign` FOREIGN KEY (`id_nhom_thuc_don`) REFERENCES `mst_nhom_thuc_don` (`ntd_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_mon_an: ~30 rows (approximately)
DELETE FROM `mst_mon_an`;
/*!40000 ALTER TABLE `mst_mon_an` DISABLE KEYS */;
INSERT INTO `mst_mon_an` (`ma_id`, `ma_ten`, `ma_dienGiai`, `ma_giaBan`, `ma_giaVon`, `ma_mon_dac_trung`, `ma_thay_doi_theo_thoi_gia`, `ma_ngung_ban`, `ma_hinh`, `id_don_vi_tinh`, `id_nhom_thuc_don`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(4, 'Mì gói xương', 'Ipsa magnam velit maiores sint iusto excepturi. Alias magnam praesentium minus laboriosam dolores aliquid nihil incidunt. Unde expedita porro quaerat maiores quo corporis. Et sunt velit sit sint.', 20000.00, 150000.00, 1, 2, 1, 'mi-goi.jpg', 8, 3, NULL, '2020-02-23 12:56:00', NULL),
	(5, 'Mì gói thịt', 'Minima quidem eaque enim dolor inventore rerum qui. Ipsa magni dolores omnis deserunt possimus saepe sunt dolorum. Iste aut assumenda culpa ipsam esse at. Pariatur eum sunt dolore eaque non. Dolorem vel id temporibus quaerat.', 20000.00, 20000.00, 2, 2, 1, 'mi-goi-xuong-1.jpg', 8, 3, NULL, '2020-02-23 12:54:54', NULL),
	(6, 'Hủ tiếu xương', 'Deserunt rerum labore quasi necessitatibus fugit et. Est alias sunt provident id. Dolorem et consequatur magnam consectetur eligendi quisquam ex nihil. Accusamus labore quaerat aliquid adipisci quos aut.', 30000.00, 20000.00, 2, 1, 1, 'hu-tieu-1.jpg', 8, 4, NULL, '2020-02-23 13:01:20', NULL),
	(7, 'Sinh tố bơ', 'Unde sit non et deserunt recusandae. Fuga ea doloribus labore voluptatibus sint est dignissimos. Aliquam voluptate id omnis et dignissimos. Commodi commodi libero laborum temporibus repellat molestias.', 18000.00, 12000.00, 1, 1, 1, 'sinh-to-bo-1.jpg', 10, 7, NULL, '2020-02-23 13:06:56', NULL),
	(8, 'Sinh tố dâu', 'Doloribus dolore delectus voluptas saepe facere voluptas odio quibusdam. Est aut ut ut quis consequatur occaecati. Cupiditate ex quis veniam aliquid odio ullam provident pariatur.', 16000.00, 10000.00, 1, 1, 1, 'sinh-to-dau.jpg', 10, 7, NULL, '2020-02-23 13:09:40', NULL),
	(9, 'Nước suối', 'Repellendus enim deleniti libero ex consequatur. Ullam libero rerum harum et. Itaque fugiat dolore dicta eos.', 6000.00, 4000.00, 2, 2, 1, 'nuoc-suoi.jpg', 2, 6, NULL, '2020-02-23 13:12:11', NULL),
	(10, '7-up', 'Ut ex provident vero ratione doloremque aperiam. Voluptatibus ipsum deserunt ut nobis molestiae aspernatur ut consectetur. Eligendi beatae sunt qui aut repellat provident. Molestias vitae ipsum sed illo labore illo aut libero.', 10000.00, 7000.00, 2, 2, 1, '7-up.png', 2, 6, NULL, '2020-02-23 13:13:59', NULL),
	(11, 'Cơm xào', 'abcdef', 25000.00, 20000.00, 1, 1, 1, 'com-chien-duong-chau-1.jpg', 6, 1, '2020-04-11 09:26:19', '2020-04-11 09:26:19', NULL),
	(12, 'Coca-cola', 'Nước uống đóng chai', 10000.00, 8000.00, 1, 1, 1, 'coca-cola.jpg', 6, 6, '2020-04-26 00:49:09', '2020-04-26 00:49:09', NULL),
	(13, 'Cơm gà', 'cơm gà', 25000.00, 22000.00, 1, 1, 1, 'com-ga.jpg', 6, 1, '2020-04-26 00:55:11', '2020-04-26 00:55:26', NULL),
	(14, 'Cơm sườn bì', 'cơm', 25000.00, 220000.00, 1, 1, 1, 'com-suon.jpg', 3, 1, '2020-04-26 00:59:09', '2020-04-26 00:59:09', NULL),
	(15, 'Cơm sườn ram', 'cơm', 25000.00, 22000.00, 1, 1, 1, 'com-suon-ram-1.jpg', 3, 1, '2020-04-26 01:03:25', '2020-04-26 01:11:57', NULL),
	(16, 'Hủ tiếu viên', 'Hủ tiếu', 20000.00, 150000.00, 1, 1, 1, 'hu-tieu.-bo-vien.jpg', 8, 4, '2020-04-26 01:19:22', '2020-04-26 01:22:11', NULL),
	(17, 'Hủ tiếu bò kho', 'hủ tiếu', 25000.00, 20000.00, 1, 1, 1, 'hu-tieu-bo-kho-1.jpg', 8, 4, '2020-04-26 01:24:23', '2020-04-26 01:29:20', NULL),
	(19, 'Nước ép dâu', 'nước ép', 25000.00, 20000.00, 1, 1, 1, 'nuoc-ep-dau.jpg', 10, 8, '2020-04-26 01:33:56', '2020-04-26 01:33:56', NULL),
	(35, 'Cơm xào', NULL, 25000.00, 20000.00, 1, 1, 1, 'com-chien-duong-chau-1.jpg', 6, 1, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL),
	(36, 'Cơm gà', NULL, 25000.00, 20000.00, 1, 1, 1, 'com-ga.jpg', 6, 1, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL),
	(37, 'Cơm sườn bì', NULL, 25000.00, 20000.00, 1, 1, 1, 'com-suon.jpg', 6, 1, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL),
	(38, 'Cơm sườn ram', NULL, 25000.00, 20000.00, 1, 1, 1, 'com-suon-ram-1.jpg', 6, 1, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL),
	(39, 'Hủ tiếu xương', NULL, 30000.00, 20000.00, 1, 1, 1, 'hu-tieu-1.jpg', 8, 2, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL),
	(40, 'Hủ tiếu viên', NULL, 30000.00, 20000.00, 1, 1, 1, 'hu-tieu.-bo-vien.jpg', 8, 2, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL),
	(41, 'Hủ tiếu bò kho', NULL, 30000.00, 20000.00, 1, 1, 1, 'hu-tieu-bo-kho-1.jpg', 8, 2, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL),
	(42, 'Mì gói thịt', NULL, 25000.00, 20000.00, 1, 1, 1, 'mi-goi-xuong-1.jpg', 8, 3, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL),
	(43, 'Mì gói xương', NULL, 30000.00, 20000.00, 1, 1, 1, 'mi-goi.jpg', 8, 3, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL),
	(44, 'Nước ép dâu', NULL, 25000.00, 20000.00, 1, 1, 1, 'nuoc-ep-dau.jpg', 10, 4, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL),
	(45, 'Sinh tố dâu', NULL, 25000.00, 20000.00, 1, 1, 1, 'sinh-to-dau.jpg', 10, 4, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL),
	(46, 'Sinh tố bơ', NULL, 25000.00, 20000.00, 1, 1, 1, 'sinh-to-bo-1.jpg', 10, 4, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL),
	(47, 'Nước suối', NULL, 8000.00, 6000.00, 1, 1, 1, 'nuoc-suoi.jpg', 2, 5, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL),
	(48, '7-up', NULL, 8000.00, 6000.00, 1, 1, 1, '7-up.png', 9, 5, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL),
	(49, 'Coca-cola', NULL, 8000.00, 6000.00, 1, 1, 1, 'coca-cola.jpg', 9, 5, '2020-04-26 02:16:54', '2020-04-26 02:16:54', NULL);
/*!40000 ALTER TABLE `mst_mon_an` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_nguyen_vat_lieu
DROP TABLE IF EXISTS `mst_nguyen_vat_lieu`;
CREATE TABLE IF NOT EXISTS `mst_nguyen_vat_lieu` (
  `nvl_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nvl_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên NVL',
  `nvl_tinhChat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tính chất NVL',
  `nvl_soLuong` decimal(8,2) NOT NULL COMMENT 'Số lượng NVL',
  `id_don_vi_tinh` bigint(20) unsigned NOT NULL COMMENT 'ID don_vi_tinh',
  `id_kho` bigint(20) unsigned NOT NULL COMMENT 'ID kho',
  `id_nhom_nvl` bigint(20) unsigned NOT NULL COMMENT 'ID nhóm NVL',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nvl_id`),
  KEY `mst_nguyen_vat_lieu_id_don_vi_tinh_foreign` (`id_don_vi_tinh`),
  KEY `mst_nguyen_vat_lieu_id_kho_foreign` (`id_kho`),
  KEY `mst_nguyen_vat_lieu_id_nhom_nvl_foreign` (`id_nhom_nvl`),
  CONSTRAINT `mst_nguyen_vat_lieu_id_don_vi_tinh_foreign` FOREIGN KEY (`id_don_vi_tinh`) REFERENCES `mst_don_vi_tinh` (`dvt_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_nguyen_vat_lieu_id_kho_foreign` FOREIGN KEY (`id_kho`) REFERENCES `mst_kho` (`k_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_nguyen_vat_lieu_id_nhom_nvl_foreign` FOREIGN KEY (`id_nhom_nvl`) REFERENCES `mst_nhom_nguyen_vat_lieu` (`nnvl_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_nguyen_vat_lieu: ~7 rows (approximately)
DELETE FROM `mst_nguyen_vat_lieu`;
/*!40000 ALTER TABLE `mst_nguyen_vat_lieu` DISABLE KEYS */;
INSERT INTO `mst_nguyen_vat_lieu` (`nvl_id`, `nvl_ten`, `nvl_tinhChat`, `nvl_soLuong`, `id_don_vi_tinh`, `id_kho`, `id_nhom_nvl`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'tiêu', 'Ullam illum mollitia expedita vel iusto. Qui eveniet amet doloremque et iste. Et sed quos et.', 76.00, 8, 3, 1, NULL, NULL, NULL),
	(4, 'dưa leo', 'Numquam aliquam cupiditate laborum consequatur quidem. Et quos non unde quo eos cum aut.', 9.00, 8, 1, 4, NULL, NULL, NULL),
	(5, 'cà chua', 'Dolores maxime sunt nulla aut asperiores. Labore quos sit ad maiores est accusamus.', 64.00, 2, 1, 3, NULL, NULL, NULL),
	(6, 'gạo', 'Vel laboriosam sapiente et vel ut. Sed omnis quasi provident. Fugiat doloribus sed sit et aliquid.', 9.00, 3, 2, 3, NULL, NULL, NULL),
	(7, 'bơ', 'Rerum rerum velit porro natus porro ut rerum. Sequi temporibus error et sequi.', 42.00, 2, 3, 3, NULL, NULL, NULL),
	(8, 'Xoài', 'Vero expedita culpa sit. Odit atque eum fugiat eligendi. Eum earum veritatis magni mollitia.', 8.00, 7, 3, 2, NULL, '2020-02-24 13:25:04', NULL),
	(10, 'Bơ sáp', 'béo', 5.00, 1, 1, 3, '2020-02-24 13:24:42', '2020-02-24 13:24:42', NULL),
	(11, 'Dâu', 'béo', 5.00, 1, 1, 3, '2020-02-24 13:25:35', '2020-02-24 13:25:35', NULL);
/*!40000 ALTER TABLE `mst_nguyen_vat_lieu` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_nhan_vien
DROP TABLE IF EXISTS `mst_nhan_vien`;
CREATE TABLE IF NOT EXISTS `mst_nhan_vien` (
  `nv_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nv_hoTen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên nhân viên',
  `nv_ngaySinh` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày sinh # Ngày sinh',
  `nv_gioiTinh` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT 'Giới tính # Giới tính: 0-Nữ, 1-Nam, 2-Khác',
  `nv_diaChi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'địa chỉ nhân viên',
  `nv_sdt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'số điện thoại nhân viên',
  `nv_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Email # Email',
  `nv_so_cmnd` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'số CMND nhân viên',
  `nv_so_tk_the` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'số tài khoản thẻ',
  `nv_trang_thai` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT 'Trạng thái # Trạng thái: 1:làm, 2:nghỉ',
  `id_chuc_vu` bigint(20) unsigned NOT NULL COMMENT 'Chức vụ của nhân viên',
  `id_bo_phan` bigint(20) unsigned NOT NULL COMMENT 'Nhân viên thuộc bộ phận nào',
  `id_chi_nhanh` bigint(20) unsigned NOT NULL COMMENT 'Nhân viên làm việc ở chi nhánh nào',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nv_id`),
  KEY `mst_nhan_vien_id_chuc_vu_foreign` (`id_chuc_vu`),
  KEY `mst_nhan_vien_id_bo_phan_foreign` (`id_bo_phan`),
  KEY `mst_nhan_vien_id_chi_nhanh_foreign` (`id_chi_nhanh`),
  CONSTRAINT `mst_nhan_vien_id_bo_phan_foreign` FOREIGN KEY (`id_bo_phan`) REFERENCES `mst_bo_phan` (`bp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_nhan_vien_id_chi_nhanh_foreign` FOREIGN KEY (`id_chi_nhanh`) REFERENCES `mst_chi_nhanh` (`cn_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_nhan_vien_id_chuc_vu_foreign` FOREIGN KEY (`id_chuc_vu`) REFERENCES `mst_chuc_vu` (`cv_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_nhan_vien: ~6 rows (approximately)
DELETE FROM `mst_nhan_vien`;
/*!40000 ALTER TABLE `mst_nhan_vien` DISABLE KEYS */;
INSERT INTO `mst_nhan_vien` (`nv_id`, `nv_hoTen`, `nv_ngaySinh`, `nv_gioiTinh`, `nv_diaChi`, `nv_sdt`, `nv_email`, `nv_so_cmnd`, `nv_so_tk_the`, `nv_trang_thai`, `id_chuc_vu`, `id_bo_phan`, `id_chi_nhanh`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Trinh', '2020-02-06 00:00:00', 1, 'Sóc Trăng', '000000000', 'trinh0963594847@gmail.com', '0000000', '1000000000', 1, 1, 2, 1, '2020-02-23 15:51:44', '2020-02-23 15:53:18', NULL),
	(5, 'A', '2020-04-26 12:21:24', 1, '', '', '', '', '', 1, 2, 4, 1, '2020-04-26 12:21:59', '2020-04-26 12:22:00', NULL),
	(6, 'Trần Thị Tuyết Trinh', '1996-10-15 00:00:00', 1, '01234567890', '9876543210', 'trinh@gmail.com', '123456', '123456', 1, 1, 1, 1, '2020-04-26 07:00:57', '2020-04-26 07:00:57', NULL),
	(7, 'Nguyen Van A', '1996-10-15 00:00:00', 2, '01234567890', '9876543210', 'a@gmail.com', '123456', '123456', 1, 1, 1, 1, '2020-04-26 07:00:57', '2020-04-26 07:00:57', NULL),
	(8, 'Trần Thị Tuyết Trinh', '1996-10-15 00:00:00', 1, '01234567890', '9876543210', 'trinh@gmail.com', '123456', '123456', 1, 1, 1, 1, '2020-04-26 07:01:11', '2020-04-26 07:01:11', NULL),
	(9, 'Nguyen Van A', '1996-10-15 00:00:00', 2, '01234567890', '9876543210', 'a@gmail.com', '123456', '123456', 1, 1, 1, 1, '2020-04-26 07:01:11', '2020-04-26 07:01:11', NULL);
/*!40000 ALTER TABLE `mst_nhan_vien` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_nhap_nguyen_vat_lieu
DROP TABLE IF EXISTS `mst_nhap_nguyen_vat_lieu`;
CREATE TABLE IF NOT EXISTS `mst_nhap_nguyen_vat_lieu` (
  `nnvl_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nnvl_ma` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mã phiếu nhập',
  `nnvl_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên phiếu nhập',
  `nnvl_tong_tien` double(8,2) NOT NULL COMMENT 'tổng tiền nhập',
  `nnvl_ngay_nhap` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'ngày nhập',
  `nnvl_ghi_chu` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Ghi chú # Ghi chú phiếu nhập',
  `nnvl_trang_thai` tinyint(4) NOT NULL DEFAULT '2' COMMENT 'Trạng thái # Trạng thái phiếu nhập sản phẩm: 1-khóa, 2-lập phiếu, 3-thanh toán, 4-nhập kho',
  `id_nhan_vien_lap_phieu` bigint(20) unsigned NOT NULL COMMENT 'nhân viên lập phiểu',
  `id_nhan_vien_ke_toan` bigint(20) unsigned NOT NULL COMMENT 'kế toán',
  `id_nhan_vien_kho` bigint(20) unsigned NOT NULL COMMENT 'Thủ kho',
  `id_chi_nhanh` bigint(20) unsigned NOT NULL COMMENT 'chi nhánh nhập',
  `id_kho` bigint(20) unsigned NOT NULL COMMENT 'nhập vào kho nào',
  `id_so_ket_toan` bigint(20) unsigned NOT NULL COMMENT 'sổ kết toán',
  `id_nha_cung_cap` bigint(20) unsigned NOT NULL COMMENT 'nhập từ nhà cung cấp nào',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nnvl_id`),
  UNIQUE KEY `mst_nhap_nguyen_vat_lieu_nnvl_ma_unique` (`nnvl_ma`),
  KEY `mst_nhap_nguyen_vat_lieu_id_nhan_vien_lap_phieu_foreign` (`id_nhan_vien_lap_phieu`),
  KEY `mst_nhap_nguyen_vat_lieu_id_nhan_vien_ke_toan_foreign` (`id_nhan_vien_ke_toan`),
  KEY `mst_nhap_nguyen_vat_lieu_id_nhan_vien_kho_foreign` (`id_nhan_vien_kho`),
  KEY `mst_nhap_nguyen_vat_lieu_id_chi_nhanh_foreign` (`id_chi_nhanh`),
  KEY `mst_nhap_nguyen_vat_lieu_id_kho_foreign` (`id_kho`),
  KEY `mst_nhap_nguyen_vat_lieu_id_so_ket_toan_foreign` (`id_so_ket_toan`),
  KEY `mst_nhap_nguyen_vat_lieu_id_nha_cung_cap_foreign` (`id_nha_cung_cap`),
  CONSTRAINT `mst_nhap_nguyen_vat_lieu_id_chi_nhanh_foreign` FOREIGN KEY (`id_chi_nhanh`) REFERENCES `mst_chi_nhanh` (`cn_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_nhap_nguyen_vat_lieu_id_kho_foreign` FOREIGN KEY (`id_kho`) REFERENCES `mst_kho` (`k_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_nhap_nguyen_vat_lieu_id_nha_cung_cap_foreign` FOREIGN KEY (`id_nha_cung_cap`) REFERENCES `mst_nha_cung_cap` (`ncc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_nhap_nguyen_vat_lieu_id_nhan_vien_ke_toan_foreign` FOREIGN KEY (`id_nhan_vien_ke_toan`) REFERENCES `mst_nhan_vien` (`nv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_nhap_nguyen_vat_lieu_id_nhan_vien_kho_foreign` FOREIGN KEY (`id_nhan_vien_kho`) REFERENCES `mst_nhan_vien` (`nv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_nhap_nguyen_vat_lieu_id_nhan_vien_lap_phieu_foreign` FOREIGN KEY (`id_nhan_vien_lap_phieu`) REFERENCES `mst_nhan_vien` (`nv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_nhap_nguyen_vat_lieu_id_so_ket_toan_foreign` FOREIGN KEY (`id_so_ket_toan`) REFERENCES `mst_so_ket_toan` (`skt_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_nhap_nguyen_vat_lieu: ~0 rows (approximately)
DELETE FROM `mst_nhap_nguyen_vat_lieu`;
/*!40000 ALTER TABLE `mst_nhap_nguyen_vat_lieu` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_nhap_nguyen_vat_lieu` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_nha_cung_cap
DROP TABLE IF EXISTS `mst_nha_cung_cap`;
CREATE TABLE IF NOT EXISTS `mst_nha_cung_cap` (
  `ncc_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ncc_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên nhà cung cấp',
  `ncc_diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'địa chỉ nhà cung cấp',
  `ncc_sdt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'sdt nhà cung cấp',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ncc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_nha_cung_cap: ~5 rows (approximately)
DELETE FROM `mst_nha_cung_cap`;
/*!40000 ALTER TABLE `mst_nha_cung_cap` DISABLE KEYS */;
INSERT INTO `mst_nha_cung_cap` (`ncc_id`, `ncc_ten`, `ncc_diachi`, `ncc_sdt`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'NCC gạo', 'Sóc Trăng', '0963594847', NULL, NULL, NULL),
	(2, 'NCC rau', 'Cần thơ', '0963594847', NULL, NULL, NULL),
	(3, 'NCC nước', 'Cần thơ', '0845527711', NULL, NULL, NULL),
	(4, 'NCC thịt', 'Cần thơ', '0327273290', NULL, NULL, NULL),
	(5, 'NCC trái cây', 'Cần thơ', '0845527711', NULL, NULL, NULL);
/*!40000 ALTER TABLE `mst_nha_cung_cap` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_nhom_nguyen_vat_lieu
DROP TABLE IF EXISTS `mst_nhom_nguyen_vat_lieu`;
CREATE TABLE IF NOT EXISTS `mst_nhom_nguyen_vat_lieu` (
  `nnvl_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã nhom_nguyen_vat_lieu',
  `nnvl_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên nhom_nguyen_vat_lieu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nnvl_id`),
  UNIQUE KEY `mst_nhom_nguyen_vat_lieu_nnvl_ten_unique` (`nnvl_ten`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_nhom_nguyen_vat_lieu: ~5 rows (approximately)
DELETE FROM `mst_nhom_nguyen_vat_lieu`;
/*!40000 ALTER TABLE `mst_nhom_nguyen_vat_lieu` DISABLE KEYS */;
INSERT INTO `mst_nhom_nguyen_vat_lieu` (`nnvl_id`, `nnvl_ten`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Rau', NULL, NULL, NULL),
	(2, 'Gia Vị', NULL, NULL, NULL),
	(3, 'Trái cây', NULL, NULL, NULL),
	(4, 'Trà', NULL, NULL, NULL),
	(6, 'Cà phê', '2020-02-24 13:12:55', '2020-02-24 13:12:55', NULL);
/*!40000 ALTER TABLE `mst_nhom_nguyen_vat_lieu` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_nhom_thuc_don
DROP TABLE IF EXISTS `mst_nhom_thuc_don`;
CREATE TABLE IF NOT EXISTS `mst_nhom_thuc_don` (
  `ntd_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'mã nhóm thực đơn',
  `ntd_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên nhóm thực đơn',
  `ntd_dienGiai` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'diễn giải nhóm thực đơn',
  `id_bep` bigint(20) unsigned NOT NULL COMMENT 'ID bếp',
  `id_loaiMonAn` bigint(20) unsigned NOT NULL COMMENT 'ID loại món ăn',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ntd_id`),
  UNIQUE KEY `mst_nhom_thuc_don_ntd_ten_unique` (`ntd_ten`),
  KEY `mst_nhom_thuc_don_id_bep_foreign` (`id_bep`),
  KEY `mst_nhom_thuc_don_id_loaimonan_foreign` (`id_loaiMonAn`),
  CONSTRAINT `mst_nhom_thuc_don_id_bep_foreign` FOREIGN KEY (`id_bep`) REFERENCES `mst_bep` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_nhom_thuc_don_id_loaimonan_foreign` FOREIGN KEY (`id_loaiMonAn`) REFERENCES `mst_loai_mon_an` (`lma_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_nhom_thuc_don: ~8 rows (approximately)
DELETE FROM `mst_nhom_thuc_don`;
/*!40000 ALTER TABLE `mst_nhom_thuc_don` DISABLE KEYS */;
INSERT INTO `mst_nhom_thuc_don` (`ntd_id`, `ntd_ten`, `ntd_dienGiai`, `id_bep`, `id_loaiMonAn`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Cơm', 'Ducimus velit reiciendis repudiandae rerum eum alias. Ab tenetur nemo dolor eum quos laborum quis. Veritatis officiis veniam necessitatibus fugit ut voluptas alias.', 1, 1, NULL, '2020-02-19 14:21:05', NULL),
	(2, 'aa', 'a', 1, 1, NULL, NULL, NULL),
	(3, 'Mì', 'Corrupti illum assumenda nesciunt quas omnis asperiores. Error provident dolor nihil qui voluptates dolor. Exercitationem deserunt expedita velit.', 3, 1, NULL, NULL, NULL),
	(4, 'Hủ tiếu', 'Corrupti et ipsum debitis repellat impedit dolorem aut. Ut sint perspiciatis perferendis qui et consequatur ut quia. Quam quia inventore qui architecto officia porro.', 3, 1, NULL, NULL, NULL),
	(5, 'b', '', 1, 1, NULL, NULL, NULL),
	(6, 'Nước uống đóng chai', 'Voluptatem quis blanditiis id aut est. Dolorem laborum omnis dolorem consectetur et. Quo in sint recusandae enim.', 3, 2, NULL, NULL, NULL),
	(7, 'Sinh tố', 'Magnam at placeat sapiente iste. Eos adipisci ut totam fuga consequatur voluptas. Temporibus et nisi et ipsum perspiciatis maxime dolores. Beatae laborum quia sit.', 1, 2, NULL, NULL, NULL),
	(8, 'Nước ép', 'Ab saepe voluptas temporibus aut et. Cum mollitia voluptas temporibus culpa. Explicabo fugit eum fugit vel.', 3, 2, NULL, NULL, NULL);
/*!40000 ALTER TABLE `mst_nhom_thuc_don` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_so_ket_toan
DROP TABLE IF EXISTS `mst_so_ket_toan`;
CREATE TABLE IF NOT EXISTS `mst_so_ket_toan` (
  `skt_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `skt_tg_bat_dau` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Thời gian bắt đầu',
  `skt_tg_ket_thuc` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Thời gian kết thúc',
  `skt_trang_thai` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT 'Trạng thái # Trạng thái: 1:chưa kết toán, 2:đã kết toán',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`skt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_so_ket_toan: ~0 rows (approximately)
DELETE FROM `mst_so_ket_toan`;
/*!40000 ALTER TABLE `mst_so_ket_toan` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_so_ket_toan` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_tang
DROP TABLE IF EXISTS `mst_tang`;
CREATE TABLE IF NOT EXISTS `mst_tang` (
  `t_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã tầng',
  `t_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên tầng',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`t_id`),
  UNIQUE KEY `mst_tang_t_ten_unique` (`t_ten`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_tang: ~2 rows (approximately)
DELETE FROM `mst_tang`;
/*!40000 ALTER TABLE `mst_tang` DISABLE KEYS */;
INSERT INTO `mst_tang` (`t_id`, `t_ten`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Tầng 1', '2020-02-22 13:42:00', '2020-02-22 13:42:00', '2020-04-17 15:18:02'),
	(2, 'Tầng 2', '2020-02-22 13:42:41', '2020-02-22 13:42:41', '2020-04-17 15:18:08');
/*!40000 ALTER TABLE `mst_tang` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_thay_doi_theo_thoi_gia
DROP TABLE IF EXISTS `mst_thay_doi_theo_thoi_gia`;
CREATE TABLE IF NOT EXISTS `mst_thay_doi_theo_thoi_gia` (
  `id_mon_an` bigint(20) unsigned NOT NULL COMMENT 'món ăn',
  `td_gia` double(8,2) NOT NULL COMMENT 'giá món ăn',
  `td_thoi_gian` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'thời gian mà món ăn có giá này',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  KEY `mst_thay_doi_theo_thoi_gia_id_mon_an_foreign` (`id_mon_an`),
  CONSTRAINT `mst_thay_doi_theo_thoi_gia_id_mon_an_foreign` FOREIGN KEY (`id_mon_an`) REFERENCES `mst_mon_an` (`ma_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_thay_doi_theo_thoi_gia: ~0 rows (approximately)
DELETE FROM `mst_thay_doi_theo_thoi_gia`;
/*!40000 ALTER TABLE `mst_thay_doi_theo_thoi_gia` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_thay_doi_theo_thoi_gia` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_ton_nguyen_vat_lieu
DROP TABLE IF EXISTS `mst_ton_nguyen_vat_lieu`;
CREATE TABLE IF NOT EXISTS `mst_ton_nguyen_vat_lieu` (
  `tnvl_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_nvl` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên nguyen vật liệu',
  `tnvl_so_luong` double(8,2) NOT NULL COMMENT 'số lượng xuất',
  `tnvl_thoi_gian` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'thời điểm hiện tại',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tnvl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_ton_nguyen_vat_lieu: ~0 rows (approximately)
DELETE FROM `mst_ton_nguyen_vat_lieu`;
/*!40000 ALTER TABLE `mst_ton_nguyen_vat_lieu` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_ton_nguyen_vat_lieu` ENABLE KEYS */;

-- Dumping structure for table cafeshop.mst_xuat_nguyen_vat_lieu
DROP TABLE IF EXISTS `mst_xuat_nguyen_vat_lieu`;
CREATE TABLE IF NOT EXISTS `mst_xuat_nguyen_vat_lieu` (
  `xnvl_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `xnvl_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên phiếu xuất',
  `xnvl_ngay_xuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'ngày xuat',
  `id_so_ket_toan` bigint(20) unsigned NOT NULL COMMENT 'sổ kết toán',
  `id_loai_xuat_nvl` bigint(20) unsigned NOT NULL COMMENT 'loại xuất nvl',
  `id_nhan_vien_xuat` bigint(20) unsigned NOT NULL COMMENT 'người xuất nvl',
  `id_kho` bigint(20) unsigned NOT NULL COMMENT 'xuất từ kho nào',
  `id_chi_nhanh` bigint(20) unsigned NOT NULL COMMENT 'xuất từ chi nhánh nào',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`xnvl_id`),
  KEY `mst_xuat_nguyen_vat_lieu_id_so_ket_toan_foreign` (`id_so_ket_toan`),
  KEY `mst_xuat_nguyen_vat_lieu_id_loai_xuat_nvl_foreign` (`id_loai_xuat_nvl`),
  KEY `mst_xuat_nguyen_vat_lieu_id_nhan_vien_xuat_foreign` (`id_nhan_vien_xuat`),
  KEY `mst_xuat_nguyen_vat_lieu_id_kho_foreign` (`id_kho`),
  KEY `mst_xuat_nguyen_vat_lieu_id_chi_nhanh_foreign` (`id_chi_nhanh`),
  CONSTRAINT `mst_xuat_nguyen_vat_lieu_id_chi_nhanh_foreign` FOREIGN KEY (`id_chi_nhanh`) REFERENCES `mst_chi_nhanh` (`cn_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_xuat_nguyen_vat_lieu_id_kho_foreign` FOREIGN KEY (`id_kho`) REFERENCES `mst_kho` (`k_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_xuat_nguyen_vat_lieu_id_loai_xuat_nvl_foreign` FOREIGN KEY (`id_loai_xuat_nvl`) REFERENCES `mst_loai_xuat` (`lx_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_xuat_nguyen_vat_lieu_id_nhan_vien_xuat_foreign` FOREIGN KEY (`id_nhan_vien_xuat`) REFERENCES `mst_nhan_vien` (`nv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mst_xuat_nguyen_vat_lieu_id_so_ket_toan_foreign` FOREIGN KEY (`id_so_ket_toan`) REFERENCES `mst_so_ket_toan` (`skt_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.mst_xuat_nguyen_vat_lieu: ~0 rows (approximately)
DELETE FROM `mst_xuat_nguyen_vat_lieu`;
/*!40000 ALTER TABLE `mst_xuat_nguyen_vat_lieu` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_xuat_nguyen_vat_lieu` ENABLE KEYS */;

-- Dumping structure for table cafeshop.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('trinh@gmail.com', '$2y$10$EsImBc./JzlkL7dJgNEkNukcydh2RahSiWyry23mw8nOmiI0cUKTO', '2020-04-26 03:16:42');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table cafeshop.permissions
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.permissions: ~8 rows (approximately)
DELETE FROM `permissions`;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'danhmuc_xem', 'web', '2020-04-25 17:29:23', '2020-04-25 17:29:23'),
	(2, 'danhmuc_them', 'web', '2020-04-25 17:29:23', '2020-04-25 17:29:23'),
	(3, 'danhmuc_sua', 'web', '2020-04-25 17:29:23', '2020-04-25 17:29:23'),
	(4, 'danhmuc_xoa', 'web', '2020-04-25 17:29:23', '2020-04-25 17:29:23'),
	(5, 'order', 'web', '2020-04-25 17:29:23', '2020-04-25 17:29:23'),
	(6, 'print', 'web', '2020-04-25 17:29:23', '2020-04-25 17:29:23'),
	(7, 'excel', 'web', '2020-04-25 17:29:23', '2020-04-25 17:29:23'),
	(8, 'pdf', 'web', '2020-04-25 17:29:23', '2020-04-25 17:29:23');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table cafeshop.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.roles: ~2 rows (approximately)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'quan_tri', 'web', '2020-04-25 17:29:23', '2020-04-25 17:29:23'),
	(2, 'user', 'web', '2020-04-25 17:29:23', '2020-04-25 17:29:23');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table cafeshop.role_has_permissions
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.role_has_permissions: ~8 rows (approximately)
DELETE FROM `role_has_permissions`;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 2),
	(6, 1),
	(7, 1),
	(8, 1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Dumping structure for table cafeshop.trn_khuyen_mai_theo_mon_an
DROP TABLE IF EXISTS `trn_khuyen_mai_theo_mon_an`;
CREATE TABLE IF NOT EXISTS `trn_khuyen_mai_theo_mon_an` (
  `id_ctkm` bigint(20) unsigned NOT NULL COMMENT 'chương trinh KM',
  `id_mon_an` bigint(20) unsigned NOT NULL COMMENT 'món ăn được KM trong ct',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_ctkm`,`id_mon_an`),
  KEY `trn_khuyen_mai_theo_mon_an_id_mon_an_foreign` (`id_mon_an`),
  CONSTRAINT `trn_khuyen_mai_theo_mon_an_id_ctkm_foreign` FOREIGN KEY (`id_ctkm`) REFERENCES `mst_chuong_trinh_khuyen_mai` (`ctkm_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `trn_khuyen_mai_theo_mon_an_id_mon_an_foreign` FOREIGN KEY (`id_mon_an`) REFERENCES `mst_mon_an` (`ma_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.trn_khuyen_mai_theo_mon_an: ~0 rows (approximately)
DELETE FROM `trn_khuyen_mai_theo_mon_an`;
/*!40000 ALTER TABLE `trn_khuyen_mai_theo_mon_an` DISABLE KEYS */;
/*!40000 ALTER TABLE `trn_khuyen_mai_theo_mon_an` ENABLE KEYS */;

-- Dumping structure for table cafeshop.trn_kich_thuoc_mon_an
DROP TABLE IF EXISTS `trn_kich_thuoc_mon_an`;
CREATE TABLE IF NOT EXISTS `trn_kich_thuoc_mon_an` (
  `id_mon_an` bigint(20) unsigned NOT NULL,
  `id_kich_thuoc` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_mon_an`,`id_kich_thuoc`),
  KEY `trn_kich_thuoc_mon_an_id_kich_thuoc_foreign` (`id_kich_thuoc`),
  CONSTRAINT `trn_kich_thuoc_mon_an_id_kich_thuoc_foreign` FOREIGN KEY (`id_kich_thuoc`) REFERENCES `mst_kich_thuoc` (`kt_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `trn_kich_thuoc_mon_an_id_mon_an_foreign` FOREIGN KEY (`id_mon_an`) REFERENCES `mst_mon_an` (`ma_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.trn_kich_thuoc_mon_an: ~0 rows (approximately)
DELETE FROM `trn_kich_thuoc_mon_an`;
/*!40000 ALTER TABLE `trn_kich_thuoc_mon_an` DISABLE KEYS */;
/*!40000 ALTER TABLE `trn_kich_thuoc_mon_an` ENABLE KEYS */;

-- Dumping structure for table cafeshop.trn_mon_an_cua_ban
DROP TABLE IF EXISTS `trn_mon_an_cua_ban`;
CREATE TABLE IF NOT EXISTS `trn_mon_an_cua_ban` (
  `id_ban` bigint(20) unsigned NOT NULL,
  `id_mon_an` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_ban`,`id_mon_an`),
  KEY `trn_mon_an_cua_ban_id_mon_an_foreign` (`id_mon_an`),
  CONSTRAINT `trn_mon_an_cua_ban_id_ban_foreign` FOREIGN KEY (`id_ban`) REFERENCES `mst_ban` (`ban_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `trn_mon_an_cua_ban_id_mon_an_foreign` FOREIGN KEY (`id_mon_an`) REFERENCES `mst_mon_an` (`ma_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.trn_mon_an_cua_ban: ~0 rows (approximately)
DELETE FROM `trn_mon_an_cua_ban`;
/*!40000 ALTER TABLE `trn_mon_an_cua_ban` DISABLE KEYS */;
/*!40000 ALTER TABLE `trn_mon_an_cua_ban` ENABLE KEYS */;

-- Dumping structure for table cafeshop.trn_mon_an_kem
DROP TABLE IF EXISTS `trn_mon_an_kem`;
CREATE TABLE IF NOT EXISTS `trn_mon_an_kem` (
  `id_mon_an_chinh` bigint(20) unsigned NOT NULL,
  `id_mon_an_kem` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_mon_an_chinh`,`id_mon_an_kem`),
  KEY `trn_mon_an_kem_id_mon_an_kem_foreign` (`id_mon_an_kem`),
  CONSTRAINT `trn_mon_an_kem_id_mon_an_chinh_foreign` FOREIGN KEY (`id_mon_an_chinh`) REFERENCES `mst_mon_an` (`ma_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `trn_mon_an_kem_id_mon_an_kem_foreign` FOREIGN KEY (`id_mon_an_kem`) REFERENCES `mst_mon_an` (`ma_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.trn_mon_an_kem: ~0 rows (approximately)
DELETE FROM `trn_mon_an_kem`;
/*!40000 ALTER TABLE `trn_mon_an_kem` DISABLE KEYS */;
/*!40000 ALTER TABLE `trn_mon_an_kem` ENABLE KEYS */;

-- Dumping structure for table cafeshop.trn_mon_an_tuong_tu
DROP TABLE IF EXISTS `trn_mon_an_tuong_tu`;
CREATE TABLE IF NOT EXISTS `trn_mon_an_tuong_tu` (
  `id_mon_an_chinh` bigint(20) unsigned NOT NULL,
  `id_mon_an_tuong_tu` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_mon_an_chinh`,`id_mon_an_tuong_tu`),
  KEY `trn_mon_an_tuong_tu_id_mon_an_tuong_tu_foreign` (`id_mon_an_tuong_tu`),
  CONSTRAINT `trn_mon_an_tuong_tu_id_mon_an_chinh_foreign` FOREIGN KEY (`id_mon_an_chinh`) REFERENCES `mst_mon_an` (`ma_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `trn_mon_an_tuong_tu_id_mon_an_tuong_tu_foreign` FOREIGN KEY (`id_mon_an_tuong_tu`) REFERENCES `mst_mon_an` (`ma_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.trn_mon_an_tuong_tu: ~0 rows (approximately)
DELETE FROM `trn_mon_an_tuong_tu`;
/*!40000 ALTER TABLE `trn_mon_an_tuong_tu` DISABLE KEYS */;
/*!40000 ALTER TABLE `trn_mon_an_tuong_tu` ENABLE KEYS */;

-- Dumping structure for table cafeshop.trn_nhan_vien_lv_theo_ca
DROP TABLE IF EXISTS `trn_nhan_vien_lv_theo_ca`;
CREATE TABLE IF NOT EXISTS `trn_nhan_vien_lv_theo_ca` (
  `id_nhan_vien` bigint(20) unsigned NOT NULL,
  `id_ca_lam_viec` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_nhan_vien`,`id_ca_lam_viec`),
  KEY `trn_nhan_vien_lv_theo_ca_id_ca_lam_viec_foreign` (`id_ca_lam_viec`),
  CONSTRAINT `trn_nhan_vien_lv_theo_ca_id_ca_lam_viec_foreign` FOREIGN KEY (`id_ca_lam_viec`) REFERENCES `mst_ca_lam_viec` (`clv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `trn_nhan_vien_lv_theo_ca_id_nhan_vien_foreign` FOREIGN KEY (`id_nhan_vien`) REFERENCES `mst_nhan_vien` (`nv_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.trn_nhan_vien_lv_theo_ca: ~0 rows (approximately)
DELETE FROM `trn_nhan_vien_lv_theo_ca`;
/*!40000 ALTER TABLE `trn_nhan_vien_lv_theo_ca` DISABLE KEYS */;
/*!40000 ALTER TABLE `trn_nhan_vien_lv_theo_ca` ENABLE KEYS */;

-- Dumping structure for table cafeshop.trn_user_nhanvien
DROP TABLE IF EXISTS `trn_user_nhanvien`;
CREATE TABLE IF NOT EXISTS `trn_user_nhanvien` (
  `id_nhan_vien` bigint(20) unsigned NOT NULL,
  `id_user` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_nhan_vien`),
  UNIQUE KEY `trn_user_nhanvien_id_nhan_vien_id_user_unique` (`id_nhan_vien`,`id_user`),
  KEY `trn_user_nhanvien_id_user_foreign` (`id_user`),
  CONSTRAINT `trn_user_nhanvien_id_nhan_vien_foreign` FOREIGN KEY (`id_nhan_vien`) REFERENCES `mst_nhan_vien` (`nv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `trn_user_nhanvien_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.trn_user_nhanvien: ~1 rows (approximately)
DELETE FROM `trn_user_nhanvien`;
/*!40000 ALTER TABLE `trn_user_nhanvien` DISABLE KEYS */;
INSERT INTO `trn_user_nhanvien` (`id_nhan_vien`, `id_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, '2020-04-26 11:50:17', '2020-04-26 11:50:18', NULL);
/*!40000 ALTER TABLE `trn_user_nhanvien` ENABLE KEYS */;

-- Dumping structure for table cafeshop.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cafeshop.users: ~6 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Trần Thị Tuyết Trinh', 'trinh@gmail.com', NULL, '$2y$10$hHwrM9kvSmLrxCnQJcJ/3OVZWCTVaBX/G/A62.TXYaOgBNJZa73Ie', '', '2020-04-13 13:15:41', '2020-04-13 13:15:41'),
	(2, 'Nguyễn Văn A', 'a@gmail.com', NULL, '$2y$10$hHwrM9kvSmLrxCnQJcJ/3OVZWCTVaBX/G/A62.TXYaOgBNJZa73Ie', NULL, '2020-04-25 12:39:48', '2020-04-25 12:39:49'),
	(3, 'admin1', 'admin1@gmail.com', '2020-04-25 12:58:56', '$2y$10$qnvnPufG8uAgG4Ca3IJVietxvndVvJGZmNSaipYYDZGrckRWplklK', NULL, '2020-04-25 12:58:56', '2020-04-25 12:58:56'),
	(4, 'user1', 'user1@gmail.com', '2020-04-25 12:58:56', '$2y$10$6/A0lwxf6mVPwrcnNzNPHeBzuAlEqmvpMP/EXfJ2rRPaOYqFPbzW.', NULL, '2020-04-25 12:58:56', '2020-04-25 12:58:56'),
	(5, 'admin', 'admin@gmail.com', '2020-04-25 17:29:39', '$2y$10$NUGmJumzJJFR21P31iPhyOAldrL4eDG93xNFzNbd395L.b5sNGUtK', NULL, '2020-04-25 17:29:39', '2020-04-25 17:29:39'),
	(6, 'user', 'user@gmail.com', '2020-04-25 17:29:39', '$2y$10$KCtlZPC5mI05MBijtWY55OqsUM7znGeLi43aTVp4jRYhhPr1zh3eq', NULL, '2020-04-25 17:29:39', '2020-04-25 17:29:39');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
