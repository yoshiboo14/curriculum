<?php
// DB名
define('DB_DATABASE', 'yigroupBlog');
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
function db_connect() {
    try {
        // PDOインスタンスの作成
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        // エラー処理方法の設定
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
}

// 実行したいSQL文を準備
$sql = "INSERT INTO users (name, password) VALUES ('Taro Yamada', 'taro')";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo 'インサートしました。';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
?>

<?php
// 作成したdb_connect.phpを読み込む
require_once('db_connect.php');

$name = 'Jiro Yamada';
$password = 'jiro';

// 実行したいSQL文を準備
$sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    echo 'インサートしました。';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
?>
<?php
// 作成したdb_connect.phpを読み込む
require_once('db_connect.php');

// 実行したいSQL文を準備
$sql = "SELECT * FROM users";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // ループ文を使用して、1行ずつ読み込んで$rowに代入する
    // 読み込むものがなくなったらループ終了
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['id'] . '、' . $row['name'] . '、' . $row['password'];
        echo '<br />';
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
?>
<?php
// 作成したdb_connect.phpを読み込む
require_once('db_connect.php');

// 変数を用意
$id = 1;

// 実行したいSQL文を準備（今回は指定したidの行を取得したい）
$sql = "SELECT * FROM users WHERE id = :id";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    // :idに$idをバインドする
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // ループ文を使用して、1行ずつ読み込む
    // 読み込むものがなくなったらループ終了
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['id'] . '、' . $row['name'] . '、' . $row['password'];
        echo '<br />';
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
?>
<?php
// 作成したdb_connect.phpを読み込む
require_once('db_connect.php');

// 変数を用意
$id = 1;
$name = 'Hanako Yamada';

// 実行したいSQL文を準備
$sql = "UPDATE users SET name = :name WHERE id = :id";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo '更新完了です';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
?>
<?php
// 作成したdb_connect.phpを読み込む
require_once('db_connect.php');

// 変数を用意
$id = 1;

// 実行したいSQL文を準備
$sql = "DELETE FROM users WHERE id = :id";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo '削除完了です';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
?>
