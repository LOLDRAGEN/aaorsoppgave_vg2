<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title>Upload Movie!</title>
</head>
<body>

<?php
require_once 'includes/sesh_chek.inc.php';
?>

<header>
    <a href="index.php">
        <img id="logo" src="img/the-movie-database.svg" alt="the logo composed of TMDB">
    </a>
</header>
<h3>Upload a movie</h3>


<form action="includes/upload.inc.php" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="imgs" placeholder="Image link">
    <input type="number" step="0.1" min="0.1" max="10.0" name="stars" placeholder="Rating">
    <button type="submit">Upload</button>
</form>
</body>
</html>
