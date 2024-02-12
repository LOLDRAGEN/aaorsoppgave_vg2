<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style_main.css">
    <meta charset="UTF-8">
    <title>The Movie Database</title>
</head>
<body>
<?php session_start(); ?>

<?php
require_once 'includes/sesh_chek.inc.php';
?>

<header>
    <a href="index.php">
        <img id="logo" src="img/the-movie-database.svg" alt="the logo composed of TMDB">
    </a>

    <a href="login_form.php">
        <button class="header_button">Login</button>
    </a>

    <a href="admin.php">
        <button class="header_button">Admin</button>
    </a>
    <a href="upload.php">
        <button class="header_button">Upload a movie</button>
    </a>
    <a href="delete.php">
        <button class="header_button">Delete account</button>
    </a>

    <a href="faq.php">
        <button class="header_button">FAQ</button>
    </a>
</header>

<div id="title">
    <h1>The Movie Database</h1>
</div>
<p id="user"><?php echo "Velkommen " . $_SESSION['username'] . "!"; ?></p>
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
// SQL-request to get the movir info
$sql = "SELECT movie_id, title, stars, imgs FROM movie ORDER BY stars DESC";

$result = $conn->query($sql);

?>




<?php if ($result->num_rows > 0) :  //cheks that $results has more than 0 rows
     while ($row = $result->fetch_assoc()) :  // comtinues the loop as long as $results have rows ?>
        <div class="movie-box"> <?php //simple exicution of the movie-box ?>
            <h3 id="title"><?php echo $row["title"]; ?></h3>
            <img class="img" src="<?php echo $row["imgs"]; ?>" alt="Movie Poster">
            <h4><?php echo $row["stars"]; ?> <img class="star_img" alt="star"
                                                  src="https://pngimg.com/d/star_PNG41507.png"></h4>
        </div>
    <?php endwhile; ?>
<?php else : ?> // if no movie exists
    <p>no movies to show</p>
<?php endif; ?>



<?php
//close the database connection
$conn->close();
?>

</body>
</html>

