<?php
try {
    $db = new PDO('mysql:dbname=db_uriage;host=db;charset=utf8', 'root', 'root');
} catch (PDOException $e) {
    print('DB接続エラー：' . $e->getMessage());
}
