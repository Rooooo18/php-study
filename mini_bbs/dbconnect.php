<?php
try {
    $db = new PDO('mysql:dbname=mini_bbs;host=mysql;charset=utf8', 'root', 'test');
} catch (PDOException $e) {
    print('db接続エラー:' . $e->getMessage());
}
