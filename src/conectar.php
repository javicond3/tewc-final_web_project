<?php

$dbhost = "mysql.hostinger.es";
$dbuser = "u849963431_jav";
$dbpass = "jcd221096";
$dbname = "u849963431_web";
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $error) {
    die("Error conexión BBDD " . $error->getMessage());
}
?>

