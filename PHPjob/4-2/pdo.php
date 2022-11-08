<?php
// DB名
define('DB_DATABASE', 'checkTest4');
// MySQLのユーザー名
define('DB_USERNAME', 'root');
// MySQLのログインパスワード
define('DB_PASSWORD', 'root');
// DSN
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

/**
 * DBの接続設定をしたPDOインスタンスを返却する
 * @return object
 */

// MySQLにログイン
function connect() {
    try {
        // PDOインスタンスの作成
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        // echo "DBと接続しました";
        // エラー処理方法の設定
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
}

    // 実行したいSQL文を準備

    // $sql = "SELECT * FROM posts WHERE id <= 5 ORDER BY id DESC;";
    // 関数db_connect()からPDOを取得する
    // $pdo = connect();
    // try {
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute();
    
        // ループ文を使用して、1行ずつ読み込んで$rowに代入する
        // 読み込むものがなくなったらループ終了
        // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // echo $row['id'] . '、' . $row['title'] . '、' . $row['category_no'] . '、' . $row['comment']. '、' . $row['created'];
            // echo '<br />';
        // }
    // } catch (PDOException $e) {
        // echo 'Error: ' . $e->getMessage();
        // die();
    // }
    