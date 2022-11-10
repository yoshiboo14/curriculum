<?php
// db_connect.phpの読み込み
require("db_connect.php");


// 提出ボタンが押された場合
if (!empty($_POST)) {
    // title.date.stockの入力チェック
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["date"])) {
        echo '発売日が未入力です。';
    } elseif (empty($_POST["stock"])) {
        echo '在庫数が未入力です。';
    }

    if (!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])) {
        // 入力したtitle.date.stockを格納
        $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
        $date = htmlspecialchars($_POST['date'], ENT_QUOTES);
        $stock = htmlspecialchars($_POST['stock'], ENT_QUOTES);

        // PDOのインスタンスを取得
        $pdo = db_connect();

        try {
            // SQL文の準備
            $sql = "INSERT INTO books (title, date, stock) VALUES (:title,:date,:stock)";
            // プリペアドステートメントの準備
            $stmt = $pdo->prepare($sql);
            // タイトルをバインド
            $stmt->bindParam(':title', $title);
            // 発売日をバインド
            $stmt->bindParam(':date', $date);
            // 在庫をバインド
            $stmt->bindParam(':stock', $stock);
            // 実行
            $stmt->execute();
            // main.phpにリダイレクト
            header("Location: main.php");
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error: ' . $e->getMessage();
            // 終了
            die();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>本の登録</title>
    <link rel="stylesheet" href="./CSS/newreg.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <h1>本の登録</h1>
            <form method="post" action="">
                <input type="text" name="title" size="15" placeholder="タイトル"><br><br>
                <input type="date" name="date" size="15" placeholder="発売日"><br><br>
                在庫数<br>
                <input type="text" name="stock" size="15" placeholder="数を入力してください"><br><br>
                <input type="submit" value="登録">
            </form> 
        </div>
    </div>
</body>
</html>
