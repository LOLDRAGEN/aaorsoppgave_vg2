<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <title>PHP Registration</title>
</head>
<body>
<?php session_start(); ?>

<p>Create a new user:</p>

<form action="includes/formhandler.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="email" name="email" placeholder="Email">
    <button type="submit">Sign Up</button>
</form>
</body>
</html>
