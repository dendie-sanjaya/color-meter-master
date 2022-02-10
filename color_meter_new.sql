/*
 Navicat Premium Data Transfer

 Source Server         : test
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : 127.0.0.1:3306
 Source Schema         : color_meter

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 10/02/2022 11:11:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for color_grade
-- ----------------------------
DROP TABLE IF EXISTS `color_grade`;
CREATE TABLE `color_grade`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `is_delete` enum('yes','no') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'no',
  `created_by` datetime(0) NULL DEFAULT NULL,
  `updated_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of color_grade
-- ----------------------------
INSERT INTO `color_grade` VALUES (1, 'Grade Color A', 'Grade A dalah grade terbaik, dan grade yang sudah siap untuk di perjualkan xx', 'yes', NULL, '2022-02-08 02:24:44', NULL, NULL);
INSERT INTO `color_grade` VALUES (2, 'Grade Color B', '', 'yes', NULL, '2022-02-01 18:20:59', NULL, NULL);
INSERT INTO `color_grade` VALUES (3, 'Grade Color C', NULL, 'yes', NULL, '2022-02-01 18:21:05', NULL, NULL);
INSERT INTO `color_grade` VALUES (4, 'Grade Color D', NULL, 'yes', NULL, '2022-02-01 18:21:10', NULL, NULL);
INSERT INTO `color_grade` VALUES (5, 'Grade Color C', NULL, 'no', NULL, '2022-02-03 04:28:15', '2022-02-03 04:28:15', NULL);
INSERT INTO `color_grade` VALUES (6, 'Grade Color B', 'coba dev', 'yes', NULL, '2022-02-03 06:11:05', '2022-02-03 04:29:36', NULL);
INSERT INTO `color_grade` VALUES (7, 'Grade Color B', 'coba devx', 'yes', NULL, '2022-02-03 04:33:35', '2022-02-03 04:33:35', NULL);
INSERT INTO `color_grade` VALUES (8, 'Grade Color B', 'coba devxxx', 'yes', NULL, '2022-02-03 04:39:01', '2022-02-03 04:34:35', NULL);
INSERT INTO `color_grade` VALUES (9, 'Grade Color B', 'coba devxxxxsxss', 'yes', NULL, '2022-02-03 04:41:23', '2022-02-03 04:39:01', NULL);
INSERT INTO `color_grade` VALUES (10, 'Grade Color B', 'success edit', 'yes', NULL, '2022-02-03 04:41:56', '2022-02-03 04:41:23', NULL);
INSERT INTO `color_grade` VALUES (11, NULL, 'success edit', 'yes', NULL, '2022-02-03 04:43:48', '2022-02-03 04:41:56', NULL);
INSERT INTO `color_grade` VALUES (12, 'tess', 'success edit', 'yes', NULL, '2022-02-03 04:44:13', '2022-02-03 04:43:48', NULL);
INSERT INTO `color_grade` VALUES (13, 'coba testing', 'success edit', 'yes', NULL, '2022-02-03 04:45:15', '2022-02-03 04:44:13', NULL);
INSERT INTO `color_grade` VALUES (14, NULL, 'success edit', 'yes', NULL, '2022-02-03 04:45:38', '2022-02-03 04:45:15', NULL);
INSERT INTO `color_grade` VALUES (15, 'xsss', 'success edit', 'yes', NULL, '2022-02-03 04:46:16', '2022-02-03 04:45:38', NULL);
INSERT INTO `color_grade` VALUES (16, 'ssss', 'success edit', 'yes', NULL, '2022-02-03 04:46:25', '2022-02-03 04:46:17', NULL);
INSERT INTO `color_grade` VALUES (17, NULL, 'success edit', 'yes', NULL, '2022-02-03 04:46:54', '2022-02-03 04:46:25', NULL);
INSERT INTO `color_grade` VALUES (18, 'xxxx', 'success edit', 'yes', NULL, '2022-02-03 04:50:56', '2022-02-03 04:46:54', NULL);
INSERT INTO `color_grade` VALUES (19, 'coba', NULL, 'yes', NULL, '2022-02-03 04:51:01', '2022-02-03 04:49:36', NULL);
INSERT INTO `color_grade` VALUES (20, 'xxxxxx', NULL, 'yes', NULL, '2022-02-03 04:50:44', '2022-02-03 04:50:18', NULL);
INSERT INTO `color_grade` VALUES (21, 'ssss', NULL, 'yes', NULL, '2022-02-03 04:50:36', '2022-02-03 04:50:36', NULL);
INSERT INTO `color_grade` VALUES (22, 'grade color B', NULL, 'yes', NULL, '2022-02-03 04:51:22', '2022-02-03 04:51:22', NULL);
INSERT INTO `color_grade` VALUES (23, NULL, NULL, 'yes', NULL, '2022-02-03 04:51:35', '2022-02-03 04:51:35', NULL);
INSERT INTO `color_grade` VALUES (24, 'xxx', 'tess', 'yes', NULL, '2022-02-03 06:07:56', '2022-02-03 06:07:56', NULL);
INSERT INTO `color_grade` VALUES (25, 'Grade Color B', 'coba devx', 'yes', NULL, '2022-02-03 06:09:20', '2022-02-03 06:09:20', NULL);
INSERT INTO `color_grade` VALUES (26, 'Grade Color B', 'coba devxxx', 'yes', NULL, '2022-02-03 06:10:32', '2022-02-03 06:09:45', NULL);
INSERT INTO `color_grade` VALUES (27, 'Grade Color B', 'coba devxxxtttt', 'yes', NULL, '2022-02-03 06:10:32', '2022-02-03 06:10:32', NULL);
INSERT INTO `color_grade` VALUES (28, NULL, 'coba ah', 'yes', NULL, '2022-02-03 06:11:23', '2022-02-03 06:11:05', NULL);
INSERT INTO `color_grade` VALUES (29, 'Grade Color B', 'coba ah', 'yes', NULL, '2022-02-03 06:12:26', '2022-02-03 06:11:23', NULL);
INSERT INTO `color_grade` VALUES (30, 'Grade Color B', 'coba ah', 'no', NULL, '2022-02-03 06:12:26', '2022-02-03 06:12:26', NULL);
INSERT INTO `color_grade` VALUES (31, 'Grade Color B', 'coba ahsssxxx', 'yes', NULL, '2022-02-08 02:24:33', '2022-02-03 06:24:04', NULL);
INSERT INTO `color_grade` VALUES (32, NULL, 'xaxa', 'yes', NULL, '2022-02-08 02:23:25', '2022-02-04 09:14:55', NULL);
INSERT INTO `color_grade` VALUES (33, NULL, NULL, 'yes', NULL, '2022-02-08 02:23:17', '2022-02-04 09:55:19', NULL);

-- ----------------------------
-- Table structure for color_list
-- ----------------------------
DROP TABLE IF EXISTS `color_list`;
CREATE TABLE `color_list`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color_grade_id` int(11) NULL DEFAULT NULL,
  `color_pattern_id` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `hexadecimal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `rgb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_delete` enum('yes','no') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'no',
  `created_by` datetime(0) NULL DEFAULT NULL,
  `updated_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `color_list_id_foreign`(`color_grade_id`) USING BTREE,
  INDEX `color_pettern_id_foreign`(`color_pattern_id`) USING BTREE,
  CONSTRAINT `color_list_id_foreign` FOREIGN KEY (`color_grade_id`) REFERENCES `color_grade` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `color_pettern_id_foreign` FOREIGN KEY (`color_pattern_id`) REFERENCES `color_pattern` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of color_list
-- ----------------------------
INSERT INTO `color_list` VALUES (1, 1, 3, 'xxxx', 'sds', '#000001', 'yes', NULL, '2022-02-08 02:31:11', '2022-02-04 10:03:57', NULL);

-- ----------------------------
-- Table structure for color_pattern
-- ----------------------------
DROP TABLE IF EXISTS `color_pattern`;
CREATE TABLE `color_pattern`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `is_default` enum('yes','no') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'no',
  `is_delete` enum('yes','no') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'no',
  `created_by` datetime(0) NULL DEFAULT NULL,
  `updated_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of color_pattern
-- ----------------------------
INSERT INTO `color_pattern` VALUES (1, 'Android Galaxy 9', 'xxx', 'no', 'no', NULL, '2022-02-03 10:18:17', NULL, NULL);
INSERT INTO `color_pattern` VALUES (2, 'xxx', 'xddd', 'no', 'yes', NULL, '2022-02-08 02:38:18', '2022-02-04 02:04:18', NULL);
INSERT INTO `color_pattern` VALUES (3, 'Rifqi Zulkarnain', 'xaaaa tss', 'no', 'yes', NULL, '2022-02-08 02:38:51', '2022-02-04 07:16:34', NULL);

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `val` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_delete` enum('yes') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES (1, 'color_tolerance', '20', '%', '', NULL, NULL);
INSERT INTO `config` VALUES (2, NULL, '21', NULL, NULL, '2022-02-08 03:28:51', '2022-02-08 03:28:51');
INSERT INTO `config` VALUES (3, NULL, '21', NULL, NULL, '2022-02-08 03:29:12', '2022-02-08 03:29:12');
INSERT INTO `config` VALUES (4, NULL, '21', NULL, NULL, '2022-02-08 03:29:18', '2022-02-08 03:29:18');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
