<?php
require_once("pdo.php");

class getData{

    public $pdo;
    public $data;

    //コンストラクタ
    function __construct()  {
        $this->pdo = connect();
    }

    /**
     * ユーザ情報の取得
     *
     * @param 
     * @return array $users_data ユーザ情報
     */
    public function getUserData(){
        $getusers_sql = "SELECT * FROM users limit 1";
        $users_data = $this->pdo->query($getusers_sql)->fetch(PDO::FETCH_ASSOC);
        return $users_data;
    }
    
    /**
     * 記事情報の取得
     *
     * @param 
     * @return array $post_data 記事情報
     */
    public function getPostData(){
        // 変数にsql文を代入
        // $getposts_sql = "SELECT * FROM posts ORDER BY id desc";
        // queryメソッドを用いてsqlをデータベースに届ける
        // $post_data = $this->pdo->query($getposts_sql)->fetch(PDO::FETCH_ASSOC);

        // 実行したいSQL
        $getposts_sql = 'SELECT * FROM posts ORDER BY id desc';
        $post_data = $this->pdo->query($getposts_sql);
        // return $post_data;

        foreach ($post_data as $getposts_sql){
            echo $getposts_sql['id']
            . '、' . $getposts_sql['title'] . '、' . $getposts_sql['category_no']. '、' . $getposts_sql['comment']. '、' . $getposts_sql['created'];
            echo '<br>';
        }

        // var_dump($getposts_sql);
        // $post_data->execute();



        // try{
            
            // var_dump($post_data) ;
             // ループ文を使用して、1行ずつ読み込んで$rowに代入する
             // 読み込むものがなくなったらループ終了
        //     while ($post_data = $this->pdo->query($getposts_sql)->fetch(PDO::FETCH_ASSOC)) {
        //     echo $post_data['id'] . '、' . $post_data['title'] . '、' . $post_data['category_no']. '、' . $post_data['comment']. '、' . $post_data['created'];
        //     echo '<br />';
        //     }
        // }catch(PDOException $e) {
        //     echo 'Error: ' . $e->getMessage();
        //     die();
        // }
    // }
    }
}