<?php

$dsn = "mysql:host=localhost;dbname=terminoppgave_vg2";
$dbusername = "root";
$dbpassword = "Admin";


try {

    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "conection failed: " . $e->getMessage();
}
