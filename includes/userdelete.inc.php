<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pdw = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE username = :username and pwd = :pwd;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pdw);

        $stmt->execute();

        $pdo = null;
        $stmt = null;
        header("Location: ../login_form.php");
        die;
    } catch (PDOException $e) {
        die("quory failed" . $e->getMessage());
    }
} else {
    header("location:../index.php");
}