<?php
// XSS対策: エスケープ処理
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// DB接続関数
function db_conn() {
    try {
        $host = '';
        $dbname = '';
        $username = '';
        $password = '';

        $pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",$username,$password,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // エラーを例外として投げる
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // デフォルトを連想配列にする
            ]
        );
        return $pdo;
    } catch (PDOException $e) {
        // 本番環境では詳細なエラーを出さないようにするのが安全
        exit('DB_CONNECTION_ERROR'); 
    }
}
?>