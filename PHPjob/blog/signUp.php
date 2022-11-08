<?php
// データの取得
$my_name = @$_POST["name"];
$password = @$_POST["password"];

if($my_name == "" && $password == ""){
    // 何も表示しない;
}else{
    echo "登録が完了しました";
}

// データの追加(12~39行)
require("db_connect.php");
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
if(!empty($my_name && $password)){
    try {
        // 実行したいSQL文を準備
        $sql = "INSERT INTO users (name, password) VALUES (:input_name,:input_password)";
        // パスワードのハッシュ化
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare($sql);

        // :nameに$nameの値をバインドする
        $stmt->bindParam(':input_name', $my_name);
        // :passwordに$passwordの値をバインドする
        $stmt->bindParam(':input_password', $password);

        // ↑の文で値を格納した後に、↓の文を入れることでハッシュ化を行うことができる。
        // :passwordにバインドする場合は、$password_hashを使用する
        $stmt->bindValue(':input_password', $password_hash);
        
        // 実行
        $stmt->execute();
        // echo 'インサートしました。';
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>新規登録</h1>
    <form method="POST" action="">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>