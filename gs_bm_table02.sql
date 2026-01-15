-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql3112.db.sakura.ne.jp
-- 生成日時: 2026 年 1 月 15 日 20:50
-- サーバのバージョン： 8.0.43
-- PHP のバージョン: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `whitemarmot50_assignment0109`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `product` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `grade` varchar(64) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `product`, `datetime`, `email`, `grade`) VALUES
(2, '山田太郎', 'Tシャツ', '2026-01-04 11:55:37', 'bbb@example.com', '3年生'),
(3, '山田太郎', 'キャップ', '2026-01-04 11:58:20', 'ccc@example.com', '保護者'),
(4, '山田次郎', 'パーカー', '2026-01-04 12:27:36', 'jiro@example.com', '保護者'),
(5, '田中次郎', 'ステッカー', '2026-01-08 15:30:45', 'ddd@example.com', '卒業生'),
(6, 'HIRONAOHOSOKAWA', 'Tシャツ', '2026-01-15 20:44:52', 'aaa@example.com', '保護者');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
