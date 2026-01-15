<?php
$id = $_GET['id'];

require_once('funcs.php');
$pdo = db_conn();

$stmt = $pdo->prepare('SELECT * FROM gs_bm_table where id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status === false) {
    exit('SQLError:');
} else {
    $result = $stmt->fetch();
    // var_dump($result);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ブックマーク更新画面</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
</head>
    <header class="header">
        <div class="container">
            <h1 class="logo">A高校 Official Store</h1>
            <nav class="nav">
                <a href="#products">商品一覧</a>
                <a href="select.php">登録一覧</a>
                <a href="#about">About</a>
                <a href="#contact">お問い合わせ</a>
            </nav>
        </div>
    </header>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="select.php">登録一覧へ戻る</a>
            </nav>
        </div>
    </header>
    <main class="container admin-main">
        <section class="admin-section">
            <h2 class="section-title">登録内容の更新</h2>
            
            <div class="table-wrapper update-wrapper">
                <form id="updateForm" method="POST" action="update.php">
                    <div class="form-group">
                        <label for="userName">お名前 <span class="required">*</span></label>
                        <input type="text" id="userName" name="name" value="<?= h($result['name']) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="userEmail">メールアドレス</label>
                        <input type="email" id="userEmail" name="email" value="<?= h($result['email']) ?>">
                    </div>
                    <div class="form-group">
                        <label for="userGrade">学年・属性</label>
                        <select id="userGrade" name="grade">
                            <?php 
                                $grades = ["1年生", "2年生", "3年生", "保護者", "卒業生", "その他"];
                                foreach($grades as $g){
                                    $selected = ($g == $result['grade']) ? "selected" : "";
                                    echo "<option value=\"$g\" $selected>$g</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <input type="hidden" name="product" value="<?= h($result['product']) ?>">
                    <input type="hidden" name="id" value="<?= h($result['id']) ?>">
                    
                    <div class="form-actions update-actions">
                        <button type="submit" class="submit-btn">更新する</button>
                        <a href="select.php" class="cancel-btn">キャンセル</a>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2026 A高校 Official Store. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>