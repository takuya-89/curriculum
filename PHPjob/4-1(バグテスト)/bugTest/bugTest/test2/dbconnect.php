<?php
// セッション開始
session_start();

define('DB_DATABASE', 'yigroupblog');
// MySQLのユーザー名
define('DB_USERNAME', 'root');
// MySQLのログインパスワード
define('DB_PASSWORD', 'root');
// DSNとは、プログラムからDBを参照する場合の名前
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

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
