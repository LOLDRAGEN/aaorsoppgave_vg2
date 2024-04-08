<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <title>Delete user</title>
</head>
<body>
<header>
    <a href="index.php">
        <img id="logo" src="img/the-movie-database.svg" alt="the logo composed of TMDB">
    </a>
</header>


<h3>Delete Account</h3>

<form action="includes/userdelete.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button>Delete</button>
</body>
</html>


