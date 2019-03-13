<?php
/**
 * Created by PhpStorm.
 * User: mickael
 * Date: 28/02/19
 * Time: 11:39
 */

$name = 'Hello Mickael: ';

$username = "mickael";
$password = "root";

try {
    $pdo = new PDO('mysql:host=mysql;dbname=sit-vanilla;charset=utf8', $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo $name." Connection failed: " . $e->getMessage();
}

  $pdo->exec('CREATE table IF NOT EXISTS test1(
     ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
     firstName VARCHAR( 250 ) NOT NULL);');

  $pdo->query('INSERT INTO test1 values (NULL , "john")');

  $sql = 'SELECT * FROM test1';

  foreach ($pdo->query($sql)->fetch() as $name) {
    echo $name.'<br>';
}