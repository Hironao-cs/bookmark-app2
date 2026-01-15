<?php
// 1. GETデータ取得
$id = $_GET['id'];

// 2. DB接続
require_once('funcs.php');
$pdo = db_conn();

// 3. データ削除SQL作成
// DELETE FROM テーブル名 WHERE id = :id;
$stmt = $pdo->prepare("DELETE FROM gs_bm_table WHERE id = :id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// 4. データ削除処理後
if ($status === false) {
    $error = $stmt->errorInfo();
    exit("SQLError:" . print_r($error, true));
} else {
    // 成功したら一覧画面へ戻る
    header("Location: select.php");
    exit();
}