<?php
// セッション開始
session_start();
// セッションにuser_nameの値がなければlogin.phpにリダイレクト
if (empty($_SESSION["user_name"])) {
    header("Location: login.php");
    exit;
}

require("db_connect.php");

$pdo = db_connect();

try {

    // 準備するSQL
    $sql= "SELECT * FROM books ORDER BY id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

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
    <link rel="stylesheet" href="./CSS/newreg.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <h1>在庫一覧画面</h1>
            <button>
                <a href="newreg.php">新規登録</a>
            </button>
            <button>
                <a href="logout.php">ログアウト</a>
            </button>
            <br>
            <br>
            <table>
            <tr>
                <td>タイトル</td>
                <td>発売日</td>
                <td>在庫数</td>
                <td>削除</td>
            </tr>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['stock']; ?></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>">削除</a></td>
                </tr>
                <?php } ?>
            </table>
            <br>
            <br>
            <button>
                <a href="bookreg.php">登録はこちら</a>
            </button>
        </div>
    </div>
</body>
</html>