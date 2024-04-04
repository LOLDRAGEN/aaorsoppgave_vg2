<?php
require_once 'admin_chek.inc.php';


try {
    require_once "dbh.inc.php";

    $query = "DELETE FROM movie WHERE movie_id = :mid;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":mid", $_GET["mid"]);

    $stmt->execute();

    $pdo = null;
    $stmt = null;
    header("Location: ../admin.php");
    die;
} catch (PDOException $e) {
    die("quory failed" . $e->getMessage());
}
