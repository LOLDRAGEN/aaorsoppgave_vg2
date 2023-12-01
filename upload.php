<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title>Upload Movie!</title>
</head>
<body>
<header>
    <a href="index.php">
        <img id="logo" src="img/the-movie-database.svg" alt="the logo composed of TMDB">
    </a>
</header>
<h3>Upload a movie</h3>


<form action="includes/upload.php" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="imgs" placeholder="Image link">
    <input type="text" name="stars" placeholder="Rating">
    <button type="submit">Upload</button>
</form>
</body>
</html>
