<?php
// クラス ← オブジェクトとあまり変わらない
// クラスとプロパティの宣言
// プロパティはクラスが持つ変数のこと
    class Taiyaki {
        public $content;
        // __constructはインスタンスが生成されるときに呼ばれる関数（初期化のようなもの）
        public function __construct($nakami){
            // このクラスのという意味
            $this->content = $nakami;
        }
        public function whatIsContent(){
            echo "中身は".$this->content."だよ";
        }
    }
    // あんこのたい焼き
    // インスタンスの生成
    // thisの参照元はメソッドの呼び出し元
    // $taiyaki_anko->__constractで考えればイメージしやすい
    
    $taiyaki_anko = new Taiyaki("あんこ");
    // 関数の実行
    $taiyaki_anko->whatIsContent();
    // クリームのたい焼き
    $taiyaki_cream = new Taiyaki("クリーム");
    $taiyaki_cream->whatIsContent();
    ?>

    <?php 
        class Enemy {
            public $name;
            public $stamina;
            public $attack;
    
            public function __construct($name) {
                $this->name = $name;
            }
    
            public function sayMyName() {
                echo $this->name.'があらわれた！';
            } 
        }
        // Enemyクラスからスライムを作る
        $slime = new Enemy('スライム');
        $slime->sayMyName();
     ?>
     <?php
        class Enemy2 {
            public $name;
            public $stamina;
            public $attack;

            public function __construct($name,$stamina=100,$attack=10){
                $this->name = $name;
                $this->stamina = $stamina;
                $this->attack = $attack;
            }

            public function powerUp() {
                $this->attack += 10;
                echo '攻撃力が'.$this->attack.'になった。</br>';
            }
        
        }

        $slime = new Enemy2('スライム');
        echo $slime->stamina;
        echo $slime->attack;
        
        echo '</br>';
        
        $kuribo = new Enemy2('クリボー', 200, 10);
        echo $kuribo->stamina;
        echo $kuribo->attack;

        $slime = new Enemy2('スライム');
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
     ?>

<?php
class Enemy3 {
    public $name;
    public $stamina;
    public $attack;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function sayMyName() {
        echo $this->name.'があらわれた！';
    } 
}
    // クラスの継承
    class Boss extends Enemy3{
        public function specialAttack(){
            echo 'すごい一撃';
        }
    }

$boss = new Boss("魔王");
$boss->sayMyName();
$boss->specialAttack();
?>

<?php
// メソッドのオーバーライド
// 継承したクラス(Boss)は継承元のクラス(Enemy)のメソッドを上書きすること

$slime = new Enemy('スライム');
    $boss = new Boss('竜王');
    $slime->sayMyName();
    $boss->sayMyName();

    // アクセス権(public,private,protected)
    // 先ほどから何度か登場しているpublic。これはどこからアクセスできるのかということを表します。
    // public どこからでもアクセス可能
    // private そのクラス内からのみアクセス可能。子クラスからのアクセスは不可。
    // protected そのクラスと親子関係(継承したクラス)ならアクセス可能。

    // class Enemy { 
    //     private $name; 
    //     // 以下略 
    // } 
    // $slime = new Enemy('スライム');
    // echo $slime->name;

    // class Enemy {   
    //     private $name;
    //     public function sayMyName() {
    //         echo $this->name.'があらわれた！'; 
    //     }
    //     // 以下略
    // }
    // $slime = new Enemy('スライム');
    // $slime->sayMyName();

    // static キーワード
//     class Enemy {
//         public $name;
//         public $stamina;
//         public $attack;
//         public static $count = 0;
    
//         public function __construct($name, $stamina = 100, $attack = 10) {
//             $this->name = $name;
//             $this->stamina = $stamina;
//             $this->attack = $attack;
//             Self::$count += 1;
//         }
    
//         public static function getEnemyCount() {
//             echo Self::$count.'体の敵を作りました！';
//         }
// }

// Enemy::getEnemyCount();
//     $slime_A = new Enemy('スライム');
//     $slime_B = new Enemy('スライム');
//     $slime_C = new Enemy('スライム');
//     $slime_D = new Enemy('スライム');
//     Enemy::getEnemyCount();

class Enemy5 {
    public $name;
    public $stamina;
    public $attack;
    public static $count = 0;

    public function __construct($name, $stamina = 100, $attack = 10) {
        $this->name = $name;
        $this->stamina = $stamina;
        $this->attack = $attack;
        Self::$count += 1;
    }

    public static function getEnemyCount() {
        echo Self::$count.'体の敵を作りました！';
    }
}
Enemy5::getEnemyCount();
    $slime_A = new Enemy('スライム');
    $slime_B = new Enemy('スライム');
    $slime_C = new Enemy('スライム');
    $slime_D = new Enemy('スライム');
    Enemy5::getEnemyCount();
?>