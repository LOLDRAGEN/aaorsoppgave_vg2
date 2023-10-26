<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style_main.css">
    <meta charset="UTF-8">
    <title>The Movie Database</title>
</head>
<body>
<?php session_start(); ?>
<header>
    <a href="index.php">
        <img id="logo" src="img/the-movie-database.svg" alt="the logo composed of TMDB">
    </a>
    <a href="">
        <button class="header_button">placeholder</button>
    </a>
    <a href="">
        <button class="header_button">placeholder</button>
    </a>
    <a href="">
        <button class="header_button">placeholder</button>
    </a>
</header>

<div id="title">
    <h1>The Movie Database</h1>
</div>

<?php


$servername = "localhost";
$username = "root";
$password = "Admin";
$dbname = "terminoppgave_vg2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

<?php
// SQL-spørring for å hente filminformasjon
$sql = "SELECT movie_id, title, stars, imgs FROM movie";
$result = $conn->query($sql);
?>




<?php if ($result->num_rows > 0) : ?>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <div class="movie-box">
            <h3 id="title"><?php echo $row["title"]; ?></h3>
            <img class="img" src="<?php echo $row["imgs"]; ?>" alt="Movie Poster">
            <h4><?php echo $row["stars"]; ?> <img class="star_img" alt="star"
                                                  src="https://pngimg.com/d/star_PNG41507.png"></h4>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p>Ingen filmer funnet.</p>
<?php endif; ?>



<?php
// Lukk databaseforbindelsen
$conn->close();
?>

</body>
</html>

