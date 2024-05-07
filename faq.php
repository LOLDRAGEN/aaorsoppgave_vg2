
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style_main.css">
    <meta charset="UTF-8">
    <title>The Movie Database FAQ</title>
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
        <button class="header_button">Logout</button>
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


<h1>FAQ for TMTB</h1>

<div class="faq">
<h2>#1 What is TMDB?</h2>
    <p>TMTB is a comunity made databse where anyone can rate a movie</p>
</div>

<div class="faq">
    <h2>#2 Can i upload a movie to be rated?</h2>
    <p>No. If you want a mocie to be featchured on TMDB you need to contact our staf and request that is gets put up.</p>
</div>

<div class="faq">
    <h2>#3 Is there moderation on your sight? </h2>
    <p>Yes! We have moderators on out sight  who can take down / change movies they don't see fit or that they see as spam.</p>

</div>

</body>