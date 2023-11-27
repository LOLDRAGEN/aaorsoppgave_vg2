<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pdw = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users(username, pwd, email) VALUES
(:username, :pwd, :email);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pdw);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        die;
    } catch (PDOException $e) {
        die("quory failed" . $e->getMessage());
    }
} else {
    header("location:../index.php");
}