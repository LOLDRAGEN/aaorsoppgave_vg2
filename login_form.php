<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <title>PHP Login</title>
</head>
<body>
<?php
session_start();
$dbc = mysqli_connect('localhost', 'root', 'Admin', 'terminoppgave_vg2') or die('Error connecting to MySQL server.');
?>

<p>Please log in:</p>

<form action="includes/login.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit">Login</button>
</form>

<?php
if ($_GET["error"] === "wrongpwd") {
    echo "<h3 class='errormsg'>Invalid login</h3>";
}
?>

<p>Or click <a href="registration.php">here</a> to register a new user.</p>
</body>
</html>
