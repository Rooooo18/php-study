<?php
try {
    // dbへの接続( hostには「docker-compose.yml」で指定したコンテナ名を記載)
    $db = new PDO('mysql:host=mysql;dbname=mydb;charset=utf8', 'root', 'test');
} catch (PDOException $e) {
    echo 'DB接続エラー:' . $e->getMessage();
}
