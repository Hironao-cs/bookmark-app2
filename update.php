<?php
    $name    = $_POST['name'] ;
    $product = $_POST['product'];
    $email   = $_POST['email'] ;
    $grade   = $_POST['grade'] ;
    $id = $_POST['id'];

    require_once('funcs.php');
    $pdo = db_conn();

$stmt = $pdo->prepare('UPDATE
                            gs_bm_table
                        SET
                            name = :name,
                            product = :product,
                            email = :email,
                            grade = :grade,
                            datetime =now()
                        WHERE
                            id = :id;');

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':product', $product, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR); 
$stmt->bindValue(':grade', $grade, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //

$status = $stmt->execute(); //実行

if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    header('Location: select.php');
    exit();
}



?>