
<?php
// ①作成したdb_connect.phpを読み込む
require_once('db_connect.php');

// ①実行したいSQL文を準備
// ①今回はusersテーブルにレコードを追加
// ①$sql = "INSERT INTO users (name, password) VALUES ('Taro Yamada', 'taro')";

// ②インサートする値を変更できるようにしたい場合は下の書き方に少し追記しなければなりません
// ②追加
$name = 'Jiro Yamada';
$password = 'jiro';

// ②追加
// :name、:passwordでSQL内で変数が入る場所を指示する
$sql = "INSERT INTO users (name, password) VALUES (:name, :password)";


// ①関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
  // ①命令をMySQLにわかる形に準備するprepare
  // ①変換した文を一旦変数に格納します。
    $stmt = $pdo->prepare($sql);

    // ②追加
    // 値をセットするbindParam
    // このプリペアドステートメントを作成したタイミングで値をセット
    // こではセットではなく、 値をバインド（固定）する と言う
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $password);

    //①命令を実行するexecute
    $stmt->execute();
    echo 'インサートしました。';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
?>

<h2>データを取得してみる</h2>

<?php
// 作成したdb_connect.phpを読み込む
require_once('db_connect.php');

// 実行したいSQL文を準備
$sql2 = "SELECT * FROM users";
// 関数db_connect()からPDOを取得する
$pdo2 = db_connect();
try {
    $stmt2 = $pdo2->prepare($sql2);
    $stmt2->execute();

    // ループ文を使用して、1行ずつ読み込んで$rowに代入する
    // 読み込むものがなくなったらループ終了
    while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
        echo $row['id'] . '、' . $row['name'] . '、' . $row['password'];
        echo '<br />';
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}