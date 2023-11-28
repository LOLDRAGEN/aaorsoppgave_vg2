<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"]; // Fix the variable name here
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        // Assuming $_SESSION['user_id'] contains the user ID of the currently logged-in user
        $userID = &$_SESSION['user_id'];

        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = :user_id";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":user_id", $userID);

        $stmt->execute();

        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        die;
    } catch (PDOException $e) {
        die("query failed: " . $e->getMessage());
    }
} else {
    header("location:../index.php");
}
