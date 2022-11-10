<?php
require_once("function.php");

// ↓function.phpに移動(コメントアウト部分)
// セッション開始
// session_start();
// セッションにuser_nameの値がなければlogin.phpにリダイレクト
// if (empty($_SESSION["user_name"])) {
    //     header("Location: login.php");
    //     exit;
    // }

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();



// データの取得、画面表示(12~39行)
require("db_connect.php");
// 関数db_connect()からPDOを取得する
$pdo = db_connect();

try {

    // 準備するSQL
    $sql= "SELECT * FROM posts ORDER BY id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // ループ文を使用して、1行ずつ読み込んで$rowに代入する
    // 読み込むものがなくなったらループ終了
    // ↓下のHTML文に埋め込んでいる
    // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     echo $row['id'] . '、' . $row['title'] . '、' . $row['content']. '、' . $row['time'];
    //     echo '<br />';
    // }

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}


?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>メイン</title>
</head>
<body>
    <h1>メインページ</h1>
    <p>ようこそ<?php echo $_SESSION["user_name"]; ?>さん</p>
    <a href="logout.php">ログアウト</a>
    <table>
    <tr>
        <td>記事ID</td>
        <td>タイトル</td>
        <td>本文</td>
        <td>投稿日</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['content']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><a href="detail_post.php?id=<?php echo $row['id']; ?>">詳細</a></td>
            <td><a href="edit_post.php?id=<?php echo $row['id']; ?>">編集</a></td>
            <td><a href="delete_post.php?id=<?php echo $row['id']; ?>">削除</a></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>