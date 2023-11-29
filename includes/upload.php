<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $imgs = $_POST["imgs"];
    $stars = $_POST["stars"];

    try {
        require_once "dbh.inc.php";



        $query = "INSERT INTO movie (title, imgs, stars) VALUES (:title, :imgs, :stars)";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":imgs", $imgs);
        $stmt->bindParam(":stars", $stars);

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
