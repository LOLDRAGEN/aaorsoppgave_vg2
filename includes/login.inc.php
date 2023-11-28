<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";

        $query = "SELECT * FROM users WHERE username = :username;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Verify the entered password against the stored plain text password
            if ($pwd == $row['pwd']) {
                session_start();
                $_SESSION['username'] = $row['username'];
                // You can add more session variables as needed

                header("Location: ../index.php"); // Redirect to home.php on successful login
                exit();
            } else {
                header("Location: ../index.php?error=wrongpwd"); // Redirect with an error message
                exit();
            }
        } else {
            header("Location: ../index.php?error=nouser"); // Redirect with an error message
            exit();
        }

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location:../index.php");
    exit();
}
?>
