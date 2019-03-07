<?php
/**
 * Created by PhpStorm.
 * User: mickael
 * Date: 28/02/19
 * Time: 11:39
 */

$name = 'Hello Mickael';
echo "test: ".$name.'<br>';

$username = "mickael";
$password = "root";

try {
    $pdo = new PDO("mysql:host=localhost;dbname=sit-vanilla", $username, $password);
    echo "Connected successfully ".$name;
}
catch(PDOException $e)
{
    echo $name." Connection failed: " . $e->getMessage();
}