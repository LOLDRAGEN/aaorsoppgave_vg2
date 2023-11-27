<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("location:index.php");
}
$userSearch = $_POST["usersearch"];

try {
    require_once "includes/dbh.inc.php";

    $query = "SELECT * FROM comments WHERE username = :usersearch;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":usersearch", $userSearch);

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;

} catch (PDOException $e) {
    die("quory failed" . $e->getMessage());
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        section {
            margin-top: 20px;
        }

        h3 {
            color: #333;
        }

        div {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        h4 {
            color: #007bff;
        }

        p {
            color: #555;
        }

        .no-movies {
            color: #777;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<section>

    <h3>Movie sertch</h3>

    <?php
    if (empty($results)) {
        echo "<div>";
        echo "<p>No movies found!</p>";
        echo "</div>";
    } else {
        foreach ($results as $row) {
            echo "<div>";
            echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
            echo "<p>" . htmlspecialchars($row["coment_text"]) . "</p>";
            echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>";
            echo "</div>";
        }
    }
    ?>

</section>

</body>
</html>
