<?php
// データベースに接続
require_once '../db.php';

// usersテーブルにレコード追加するSQLを作成
$sql = "INSERT INTO items (code, name, price, stock) 
        VALUES (:code, :name, :price, :stock)";

$item = $_POST;

// SQLを実行
$stmt = $pdo->prepare($sql);
$stmt->execute($item);

// 完了画面にリダイレクトする
header('Location: ./');